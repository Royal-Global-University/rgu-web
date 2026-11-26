@extends('frontend.master')
@section('title', 'Eligibility & selection criteria : The Assam Royal Global University')
@section('meta_description',
    'Discover the eligibility requirements and selection criteria for various programs at Royal
    Global University, including academic qualifications, entrance exams, and interview processes for admission.')
@section('meta_keywords', 'Eligibility & selection criteria')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section>
            <img style="width: 100%;" src="/mobile-assets/admission-fee-and-programmee/mob-admission-fee.png" alt="">
        </section>
    </div>

    <div class="website">
        @include('frontend/components/aheader')
        <section>
            <img style="width: 100%;" src="/mobile-assets/admission-fee-and-programmee/web-admission-fee.png" alt="">
        </section>
    </div>

    <style>
        /* ================================
                   UNIQUE NAMESPACE STYLES
                   Prefix: rgu-program-
                ================================= */

        .body-part {
            padding: 20px 0px;
            background: #f7f5f0;
            font-family: "Times New Roman", serif;
        }

        .rgu-program-search {
            margin: 30px 0;
        }

        .rgu-program-accordion-btn {
            background: #0f2544;
            color: #fff;
            font-weight: 600;
        }

        .rgu-program-accordion-btn:not(.collapsed) {
            background: #0f2544;
            color: #fff;
            box-shadow: none;
        }

        .rgu-program-accordion-item {
            border: none;
            margin-bottom: 12px;
        }

        /* ================================
                   CARD DESIGN (POP EFFECT)
                ================================= */

        .rgu-program-card {
            background: linear-gradient(135deg, #ffffff, #bdd1ff);
            border-radius: 12px;
            padding: 20px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #d9e3ff;
            position: relative;
            overflow: hidden;
            transition: all 0.35s ease;
        }

        .rgu-program-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: #24477f;
        }

        .rgu-program-card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 0 15px 35px rgba(36, 71, 127, 0.25);
        }

        .rgu-program-card-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f2544;
            line-height: 1.35;
        }

        .rgu-program-card-duration {
            font-size: 16px;
            font-weight: 600;
            color: #24477f;
        }

        .rgu-program-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .rgu-program-link:hover {
            color: inherit;
        }
    </style>

@php
    if (request()->has('refresh') || request()->has('nocache')) {
        \Illuminate\Support\Facades\Cache::forget('rgu_api_schools_programmes');
    }

    if (!isset($schools)) {
        // Cache for 15 seconds so admin updates show up quickly
        $schools = \Illuminate\Support\Facades\Cache::remember('rgu_api_schools_programmes', 15, function () {
            try {
                $apiBase = 'https://admin.rgu.ac/api/schools/website';
                $secretKey = '4fab23f4690a5a8ccf9e8642f8297b1f92c48b01963881a7e767e68a86bb075a';

                $response = \Illuminate\Support\Facades\Http::withHeaders([
                    'x-service-secret' => $secretKey,
                ])->timeout(10)->get($apiBase);

                if (!$response->successful()) {
                    return [];
                }

                $schoolsList = $response->json('data') ?? [];

                $poolResponses = \Illuminate\Support\Facades\Http::pool(fn ($pool) =>
                    array_map(fn ($school) =>
                        $pool->as($school['id'])->withHeaders([
                            'x-service-secret' => $secretKey,
                        ])->timeout(10)->get($apiBase . '/' . $school['id']),
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
                \Illuminate\Support\Facades\Log::error('API Programmes error: ' . $e->getMessage());
                return [];
            }
        });
    }
@endphp

    <div class="body-part">

        <div class="container">

            <!-- Search Section -->
            <div class="row rgu-program-search">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Search By Schools :</label>
                    <select class="form-select rgu-program-school-select">
                        <option>Select School to Navigate...</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Search By Courses :</label>
                    <input type="text" class="form-control rgu-program-course-search"
                        placeholder="Type to search courses...">
                </div>
            </div>

            <!-- Accordion section programme-->
            <div class="accordion" id="rguProgramAccordion">
                @forelse($schools as $index => $school)
                    @php
                        $schoolId = preg_replace('/[^a-zA-Z0-9_-]/', '', $school['id'] ?? 'school-' . $index);
                        $schoolName = $school['name'] ?? 'School';
                        $courses = $school['courses'] ?? [];
                    @endphp
                    <div class="accordion-item rgu-program-accordion-item" data-school="{{ $schoolName }}">
                        <h2 class="accordion-header" id="heading-{{ $schoolId }}">
                            <button class="accordion-button collapsed rgu-program-accordion-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#acc-{{ $schoolId }}" aria-expanded="false" aria-controls="acc-{{ $schoolId }}">
                                <span>{{ $schoolName }}</span>
                                @if(count($courses) > 0)
                                    <span class="badge bg-light text-dark ms-2" style="font-size: 11px; font-weight: 600;">{{ count($courses) }} {{ count($courses) === 1 ? 'Programme' : 'Programmes' }}</span>
                                @endif
                            </button>
                        </h2>
                        <div id="acc-{{ $schoolId }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $schoolId }}" data-bs-parent="#rguProgramAccordion">
                            <div class="accordion-body">
                                @if(count($courses) > 0)
                                    <div class="row g-3">
                                        @foreach($courses as $course)
                                            @php
                                                $courseId = $course['_id'] ?? $course['id'] ?? null;
                                                $courseTitle = $course['name'] ?? 'Programme';
                                                $schoolTitle = $course['programmeName'] ?? ($school['name'] ?? '');
                                                $rawDuration = trim($course['duration'] ?? '');
                                                $duration = '';
                                                if (!empty($rawDuration)) {
                                                    $duration = stripos($rawDuration, 'duration') === 0 ? $rawDuration : 'Duration: ' . $rawDuration;
                                                }
                                                $slug = \Illuminate\Support\Str::slug($courseTitle . '-' . $schoolTitle);
                                                $link = $slug ? route('rgu-programme-details', ['slug' => $slug]) : ($courseId ? route('rgu-programme-details', ['slug' => $courseId]) : 'javascript:void(0)');
                                            @endphp
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <a href="{{ $link }}" class="rgu-program-link">
                                                    <div class="rgu-program-card">
                                                        <div class="rgu-program-card-title">
                                                            {{ $courseTitle }}
                                                        </div>
                                                        @if($duration)
                                                            <div class="rgu-program-card-duration">{{ $duration }}</div>
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="col-12 py-3 text-center text-muted" style="font-style: italic;">
                                        Programmes under this school will be updated soon.
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info text-center my-4">
                        No programmes found from the API at the moment.
                    </div>
                @endforelse
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const searchInput = document.querySelector(".rgu-program-course-search");
            const schoolSelect = document.querySelector(".rgu-program-school-select");
            const accordionItems = document.querySelectorAll(".rgu-program-accordion-item");

            /* ===============================
               BUILD SCHOOL DROPDOWN
            =============================== */

            const schools = [];

            accordionItems.forEach(item => {
                const schoolName = item.getAttribute("data-school");
                if (schoolName && !schools.includes(schoolName)) {
                    schools.push(schoolName);
                }
            });

            schools.forEach(school => {
                const option = document.createElement("option");
                option.value = school;
                option.textContent = school;
                schoolSelect.appendChild(option);
            });

            /* ===============================
                COURSE SEARCH FUNCTION
             =============================== */

            searchInput.addEventListener("input", function() {
                const keyword = normalize(this.value);

                accordionItems.forEach(item => {
                    const cards = item.querySelectorAll(".rgu-program-card");
                    let matchFound = false;

                    cards.forEach(card => {
                        const rawTitle = card.querySelector(".rgu-program-card-title")
                            .innerText;
                        const title = normalize(rawTitle);

                        if (title.includes(keyword)) {
                            card.closest(".col-lg-3").style.display = "";
                            matchFound = true;
                        } else {
                            card.closest(".col-lg-3").style.display = "none";
                        }
                    });

                    const collapse = item.querySelector(".accordion-collapse");
                    const btn = item.querySelector(".accordion-button");

                    if (keyword === "") {
                        item.style.display = "";
                        collapse.classList.remove("show");
                        if (btn) {
                            btn.classList.add("collapsed");
                            btn.setAttribute("aria-expanded", "false");
                        }
                    } else if (matchFound) {
                        item.style.display = "";
                        collapse.classList.add("show");
                        if (btn) {
                            btn.classList.remove("collapsed");
                            btn.setAttribute("aria-expanded", "true");
                        }
                    } else {
                        item.style.display = "none";
                        collapse.classList.remove("show");
                        if (btn) {
                            btn.classList.add("collapsed");
                            btn.setAttribute("aria-expanded", "false");
                        }
                    }
                });
            });


            /* ===============================
               NORMALIZE FUNCTION
            =============================== */

            function normalize(str) {
                return str
                    .toLowerCase()
                    .replace(/\./g, "") // remove dots (B.Sc → BSc)
                    .replace(/\s+/g, "") // remove spaces
                    .replace(/[^a-z0-9]/g, ""); // remove special chars
            }

            /* ===============================
               SCHOOL DROPDOWN FILTER
            =============================== */

            schoolSelect.addEventListener("change", function() {
                const selectedSchool = this.value;

                accordionItems.forEach(item => {
                    const school = item.getAttribute("data-school");
                    const collapse = item.querySelector(".accordion-collapse");
                    const btn = item.querySelector(".accordion-button");

                    if (!selectedSchool || selectedSchool === "Select School to Navigate...") {
                        item.style.display = "";
                        collapse.classList.remove("show");
                        if (btn) {
                            btn.classList.add("collapsed");
                            btn.setAttribute("aria-expanded", "false");
                        }
                        return;
                    }

                    if (school === selectedSchool) {
                        item.style.display = "";
                        collapse.classList.add("show");
                        if (btn) {
                            btn.classList.remove("collapsed");
                            btn.setAttribute("aria-expanded", "true");
                        }

                        item.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });

                    } else {
                        item.style.display = "none";
                        collapse.classList.remove("show");
                        if (btn) {
                            btn.classList.add("collapsed");
                            btn.setAttribute("aria-expanded", "false");
                        }
                    }
                });

                // clear course search
                searchInput.value = "";
            });

        });
    </script>


@endsection
