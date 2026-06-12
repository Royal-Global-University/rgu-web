<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class GenerateSearchData extends Command
{
    protected $signature = 'rgu:generate-search-data';
    protected $description = 'Scan view templates and routes to compile a JSON index of active pages, departments, and faculties.';

    public function handle()
    {
        $this->info("Scanning RGU web templates for navigation links...");

        $filesToScan = [
            resource_path('views/frontend/components/aheader.blade.php'),
            resource_path('views/frontend/components/iheader.blade.php'),
            resource_path('views/frontend/components/mobileheader.blade.php'),
            resource_path('views/frontend/master.blade.php'),
        ];

        $extractedLinks = [];

        foreach ($filesToScan as $file) {
            if (!file_exists($file)) {
                $this->warn("File not found: {$file}");
                continue;
            }

            $content = file_get_contents($file);

            // Regex to find: <a ... href="..." ...>Text</a>
            // We want to capture the href and the inner text/label.
            preg_match_all('/<a\s+[^>]*href=["\']([^"\']+)["\'][^>]*>(.*?)<\/a>/is', $content, $matches, PREG_SET_ORDER);

            foreach ($matches as $match) {
                $url = trim($match[1]);
                $label = trim(strip_tags($match[2]));
                $label = preg_replace('/\s+/', ' ', $label); // Clean up whitespace

                if (empty($url) || $url === '#' || str_starts_with($url, 'javascript:') || empty($label)) {
                    continue;
                }

                $extractedLinks[] = [
                    'url' => $url,
                    'label' => $label,
                ];
            }
        }

        $this->info("Found " . count($extractedLinks) . " raw links. Resolving and validating...");

        $activeRoutes = [];
        $seenUrls = [];

        foreach ($extractedLinks as $link) {
            $urlRaw = $link['url'];
            $label = $link['label'];

            // Resolve Laravel route tags, e.g. {{ route('name') }} or {{ url('path') }}
            $urlResolved = null;
            $routeName = null;

            if (preg_match('/{{\s*route\([\'"]([^\'"]+)[\'"]\)\s*}}/', $urlRaw, $routeMatch)) {
                $routeName = $routeMatch[1];
                if (Route::has($routeName)) {
                    try {
                        $urlResolved = route($routeName, [], false); // Get relative URL
                    } catch (\Throwable $e) {
                        continue;
                    }
                }
            } elseif (preg_match('/{{\s*url\([\'"]([^\'"]+)[\'"]\)\s*}}/', $urlRaw, $urlMatch)) {
                $urlResolved = '/' . ltrim($urlMatch[1], '/');
            } elseif (str_starts_with($urlRaw, 'http') || str_starts_with($urlRaw, 'mailto:') || str_starts_with($urlRaw, 'tel:')) {
                // Keep external links out or handle if they are internal domains
                if (str_contains($urlRaw, 'rgu.ac') || str_contains($urlRaw, 'localhost')) {
                    $urlResolved = $urlRaw;
                } else {
                    continue; // Skip other external links
                }
            } else {
                // Static relative links
                $urlResolved = '/' . ltrim($urlRaw, '/');
            }

            if (!$urlResolved) {
                continue;
            }

            // Clean up duplicate URLs
            if (in_array($urlResolved, $seenUrls)) {
                continue;
            }

            // Validate if the route is active (we can match the path or route name to register check)
            $isActive = false;

            // Normalize path for matching
            $path = parse_url($urlResolved, PHP_URL_PATH);
            $path = ltrim($path ?? '', '/');

            // Try to match the route to check if it exists in Laravel routing
            try {
                if ($routeName && Route::has($routeName)) {
                    $isActive = true;
                } else {
                    // Match by URL path
                    $routeMatch = Route::getRoutes()->match(Request::create($urlResolved, 'GET'));
                    if ($routeMatch) {
                        $isActive = true;
                    }
                }
            } catch (\Throwable $e) {
                // If it fails to match or has an issue, try a fallback check:
                // Check if a view file matches the URI directly or if it exists in web.php
                $isActive = false;
            }

            // Additional verification: check if we can boot the route response to ensure no 404/exception
            if ($isActive) {
                try {
                    // Send a mock request internally to verify if it returns 200
                    $req = \Illuminate\Http\Request::create($urlResolved, 'GET');
                    $resp = app()->handle($req);
                    if ($resp->getStatusCode() !== 200 && $resp->getStatusCode() !== 302) {
                        $isActive = false;
                    }
                } catch (\Throwable $e) {
                    $isActive = false;
                }
            }

            if ($isActive) {
                $seenUrls[] = $urlResolved;

                // Determine category
                $category = 'Page';
                $lowerLabel = strtolower($label);
                $lowerUrl = strtolower($urlResolved);

                if (str_contains($lowerUrl, 'department') || str_contains($lowerLabel, 'department')) {
                    $category = 'Department';
                } elseif (str_contains($lowerUrl, 'faculty') || str_contains($lowerLabel, 'faculty')) {
                    $category = 'Faculty';
                } elseif (str_contains($lowerUrl, 'school') || str_contains($lowerLabel, 'school')) {
                    $category = 'School';
                } elseif (str_contains($lowerUrl, 'admission') || str_contains($lowerLabel, 'admission')) {
                    $category = 'Admission';
                }

                $activeRoutes[] = [
                    'url' => $urlResolved,
                    'title' => $label,
                    'category' => $category,
                ];
            }
        }

        // Let's also scan routes/web.php directly for missing faculties/departments that might not be in the menu yet but are active routes
        $routes = Route::getRoutes()->getRoutesByMethod()['GET'] ?? [];
        foreach ($routes as $route) {
            $uri = $route->uri();
            if (str_starts_with($uri, '_') || str_contains($uri, '{') || str_starts_with($uri, 'api') || str_starts_with($uri, 'sanctum')) {
                continue;
            }

            $url = '/' . ltrim($uri, '/');
            if (in_array($url, $seenUrls)) {
                continue;
            }

            // Verify if active
            $isActive = false;
            try {
                $req = \Illuminate\Http\Request::create($url, 'GET');
                $resp = app()->handle($req);
                if ($resp->getStatusCode() === 200) {
                    $isActive = true;
                }
            } catch (\Throwable $e) {
                // ignore
            }

            if ($isActive) {
                $seenUrls[] = $url;
                $title = ucwords(strtolower(str_replace(['-', '_'], ' ', ltrim($uri, '/'))));

                $category = 'Page';
                if (str_contains($uri, 'department') || str_contains($uri, 'dept')) {
                    $category = 'Department';
                } elseif (str_contains($uri, 'faculty')) {
                    $category = 'Faculty';
                }

                $activeRoutes[] = [
                    'url' => $url,
                    'title' => $title,
                    'category' => $category,
                ];
            }
        }

        // Save active routes to public/assets/json/search_routes.json
        $dir = public_path('assets/json');
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        file_put_contents($dir . '/search_routes.json', json_encode($activeRoutes, JSON_PRETTY_PRINT));
        $this->info("Successfully compiled search index with " . count($activeRoutes) . " active links.");
    }
}
