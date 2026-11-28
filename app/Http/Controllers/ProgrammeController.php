<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProgrammeController extends Controller
{
    protected string $apiBase = 'https://admin.rgu.ac/api/schools/website';
    protected string $courseApiBase = 'https://admin.rgu.ac/api/courses';
    protected string $secretKey = '4fab23f4690a5a8ccf9e8642f8297b1f92c48b01963881a7e767e68a86bb075a';
    protected int $cacheTtl = 300; // Cache TTL for single course detail view

    /**
     * Show the dynamic programmes page (no cache, live API data rendered with glass loader).
     */
    public function index(Request $request)
    {
        return view('frontend/dynamic/programs/e&c');
    }

    /**
     * Return JSON for the schools and programmes API route without cache.
     */
    public function getSchoolsProgrammes(Request $request)
    {
        $schools = $this->fetchSchoolsProgrammes();
        return response()->json(['success' => true, 'data' => $schools])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache');
    }

    /**
     * Show the dynamic programme details page for a specific course by slug or ID.
     */
    public function details(Request $request, $slug = null)
    {
        $identifier = $slug ?? $request->query('slug') ?? $request->query('id');

        if (!$identifier) {
            return redirect()->route('rgu-programmes');
        }

        $forceRefresh = $request->has('refresh') || $request->has('nocache');

        // Check if $identifier is a 24-character hexadecimal MongoDB ID
        if (preg_match('/^[a-f0-9]{24}$/i', $identifier)) {
            $courseId = $identifier;
        } else {
            // Resolve course ID from slug (courseName-programmeName)
            $courseId = $this->resolveCourseIdFromSlug($identifier, $forceRefresh);
        }

        if (!$courseId) {
            return redirect()->route('rgu-programmes');
        }

        $course = $this->fetchCourseDetails($courseId, $forceRefresh);
        $hideFooter = true;

        return view('frontend/dynamic/programs/programme-details', compact('course', 'courseId', 'hideFooter'));
    }

    /**
     * Resolve a slug (e.g. courseName-programmeName) to the course ID.
     */
    public function resolveCourseIdFromSlug(string $slug, bool $forceRefresh = false): ?string
    {
        $cacheKey = 'rgu_slug_to_course_id_map';

        if ($forceRefresh) {
            Cache::forget($cacheKey);
        }

        $slugMap = Cache::remember($cacheKey, $this->cacheTtl, function () use ($forceRefresh) {
            $schools = $this->fetchSchoolsProgrammes($forceRefresh);
            $map = [];

            foreach ($schools as $school) {
                $schoolName = $school['name'] ?? '';
                foreach ($school['courses'] ?? [] as $course) {
                    $cName = $course['name'] ?? '';
                    $cId = $course['_id'] ?? $course['id'] ?? '';
                    if ($cId) {
                        // Standard: courseName-programmeName slug
                        $fullSlug = Str::slug($cName . '-' . $schoolName);
                        $map[$fullSlug] = $cId;

                        // Also courseName-only fallback
                        $nameOnlySlug = Str::slug($cName);
                        if (!isset($map[$nameOnlySlug])) {
                            $map[$nameOnlySlug] = $cId;
                        }
                    }
                }
            }

            return $map;
        });

        return $slugMap[$slug] ?? null;
    }

    /**
     * Return JSON for a single course details API route.
     */
    public function getCourseDetails(Request $request, $id)
    {
        // Support either slug or direct ID
        $courseId = preg_match('/^[a-f0-9]{24}$/i', $id)
            ? $id
            : $this->resolveCourseIdFromSlug($id, $request->has('refresh'));

        if (!$courseId) {
            return response()->json(['success' => false, 'message' => 'Course not found'], 404);
        }

        $course = $this->fetchCourseDetails($courseId, $request->has('refresh') || $request->has('nocache'));

        return response()->json([
            'success' => !is_null($course),
            'data' => $course
        ]);
    }

    /**
     * Fetch all schools and their courses concurrently without caching, arranged by serialNumber.
     */
    public function fetchSchoolsProgrammes(bool $forceRefresh = false): array
    {
        try {
            $response = Http::withHeaders([
                'x-service-secret' => $this->secretKey,
            ])->timeout(15)->get($this->apiBase);

            if (!$response->successful()) {
                return [];
            }

            $schoolsList = $response->json('data') ?? [];
            if (empty($schoolsList)) {
                return [];
            }

            // Chunk requests into batches of 6 to prevent remote HTTP 429 (Too Many Requests)
            $chunks = array_chunk($schoolsList, 6);
            $allResponses = [];

            foreach ($chunks as $chunkIndex => $chunk) {
                if ($chunkIndex > 0) {
                    usleep(200000); // 200ms delay between chunk requests
                }

                $chunkResponses = Http::pool(fn ($pool) =>
                    array_map(fn ($school) =>
                        $pool->as($school['id'])->withHeaders([
                            'x-service-secret' => $this->secretKey,
                        ])->timeout(12)->retry(3, 300, function ($exception) {
                            return $exception instanceof \Illuminate\Http\Client\RequestException
                                && $exception->response->status() === 429;
                        })->get($this->apiBase . '/' . $school['id']),
                    $chunk)
                );

                foreach ($chunkResponses as $id => $resp) {
                    $allResponses[$id] = $resp;
                }
            }

            // Ensure 100% completion: if any school still failed or timed out, retry individually
            foreach ($schoolsList as $school) {
                $schoolId = $school['id'];
                $resp = $allResponses[$schoolId] ?? null;
                if (!$resp || !$resp->successful()) {
                    usleep(250000);
                    try {
                        $retryRes = Http::withHeaders([
                            'x-service-secret' => $this->secretKey,
                        ])->timeout(12)->get($this->apiBase . '/' . $schoolId);
                        if ($retryRes->successful()) {
                            $allResponses[$schoolId] = $retryRes;
                        }
                    } catch (\Throwable $te) {
                        Log::warning("Retry failed for school {$schoolId}: " . $te->getMessage());
                    }
                }
            }

            $result = [];
            foreach ($schoolsList as $school) {
                $schoolId = $school['id'];
                $schoolName = $school['name'] ?? '';
                $coursesRes = $allResponses[$schoolId] ?? null;
                $courses = ($coursesRes && $coursesRes->successful()) ? ($coursesRes->json('data') ?? []) : [];

                $activeCourses = [];
                foreach ($courses as $c) {
                    if (!isset($c['status']) || strtolower($c['status']) === 'active') {
                        $cName = $c['name'] ?? 'Programme';
                        $cSchool = $c['programmeName'] ?? $schoolName;
                        $slug = Str::slug($cName . '-' . $cSchool);
                        $c['slug'] = $slug;
                        $c['details_url'] = route('rgu-programme-details', ['slug' => $slug]);
                        $activeCourses[] = $c;
                    }
                }

                // Sort courses dynamically by serialNumber ascending (fallback to course name)
                usort($activeCourses, function ($a, $b) {
                    $snA = isset($a['serialNumber']) && is_numeric($a['serialNumber']) ? (int)$a['serialNumber'] : PHP_INT_MAX;
                    $snB = isset($b['serialNumber']) && is_numeric($b['serialNumber']) ? (int)$b['serialNumber'] : PHP_INT_MAX;

                    if ($snA === $snB) {
                        return strcasecmp($a['name'] ?? '', $b['name'] ?? '');
                    }
                    return $snA <=> $snB;
                });

                $school['courses'] = $activeCourses;
                $result[] = $school;
            }

            // Sort schools dynamically by serialNumber ascending (fallback to school name)
            usort($result, function ($a, $b) {
                $snA = isset($a['serialNumber']) && is_numeric($a['serialNumber']) ? (int)$a['serialNumber'] : PHP_INT_MAX;
                $snB = isset($b['serialNumber']) && is_numeric($b['serialNumber']) ? (int)$b['serialNumber'] : PHP_INT_MAX;

                if ($snA === $snB) {
                    return strcasecmp($a['name'] ?? '', $b['name'] ?? '');
                }
                return $snA <=> $snB;
            });

            return $result;
        } catch (\Throwable $e) {
            Log::error('API Programmes error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Fetch single course details by ID with caching.
     */
    public function fetchCourseDetails(string $courseId, bool $forceRefresh = false): ?array
    {
        $cacheKey = 'rgu_course_details_' . $courseId;

        if ($forceRefresh) {
            Cache::forget($cacheKey);
        }

        return Cache::remember($cacheKey, $this->cacheTtl, function () use ($courseId) {
            try {
                $response = Http::withHeaders([
                    'x-service-secret' => $this->secretKey,
                ])->timeout(10)->get($this->courseApiBase . '/' . $courseId);

                if ($response->successful()) {
                    $body = $response->json();
                    return $body['data'] ?? null;
                }

                Log::warning("Failed to fetch course details for ID: {$courseId}, status: " . $response->status());
                return null;
            } catch (\Throwable $e) {
                Log::error("Error fetching course details for {$courseId}: " . $e->getMessage());
                return null;
            }
        });
    }
}
