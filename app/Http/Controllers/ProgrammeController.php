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
    protected string $cacheKey = 'rgu_api_schools_programmes';
    protected int $cacheTtl = 15; // Cache TTL in seconds

    /**
     * Show the dynamic programmes page.
     */
    public function index(Request $request)
    {
        $schools = $this->fetchSchoolsProgrammes($request->has('refresh') || $request->has('nocache'));
        return view('frontend/dynamic/programs/e&c', compact('schools'));
    }

    /**
     * Return JSON for the schools and programmes API route.
     */
    public function getSchoolsProgrammes(Request $request)
    {
        $schools = $this->fetchSchoolsProgrammes($request->has('refresh') || $request->has('nocache'));
        return response()->json(['success' => true, 'data' => $schools]);
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
     * Fetch all schools and their courses concurrently with caching.
     */
    public function fetchSchoolsProgrammes(bool $forceRefresh = false): array
    {
        if ($forceRefresh) {
            Cache::forget($this->cacheKey);
        }

        return Cache::remember($this->cacheKey, $this->cacheTtl, function () {
            try {
                $response = Http::withHeaders([
                    'x-service-secret' => $this->secretKey,
                ])->timeout(10)->get($this->apiBase);

                if (!$response->successful()) {
                    return [];
                }

                $schoolsList = $response->json('data') ?? [];

                $poolResponses = Http::pool(fn ($pool) =>
                    array_map(fn ($school) =>
                        $pool->as($school['id'])->withHeaders([
                            'x-service-secret' => $this->secretKey,
                        ])->timeout(10)->get($this->apiBase . '/' . $school['id']),
                    $schoolsList)
                );

                $result = [];
                foreach ($schoolsList as $school) {
                    $coursesRes = $poolResponses[$school['id']] ?? null;
                    $courses = ($coursesRes && $coursesRes->successful()) ? ($coursesRes->json('data') ?? []) : [];

                    $activeCourses = array_values(array_filter($courses, function ($c) {
                        return !isset($c['status']) || strtolower($c['status']) === 'active';
                    }));

                    $school['courses'] = $activeCourses;
                    $result[] = $school;
                }

                return $result;
            } catch (\Throwable $e) {
                Log::error('API Programmes error: ' . $e->getMessage());
                return [];
            }
        });
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
