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

        /* ================================
           GLASS ANIMATION LOADER
        ================================= */
        .rgu-glass-loader-wrapper {
            position: relative;
            min-height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 25px 0 45px 0;
            transition: opacity 0.45s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.45s ease;
        }

        .rgu-glass-loader-wrapper.rgu-loader-hidden {
            opacity: 0;
            visibility: hidden;
            display: none !important;
        }

        .rgu-glass-card {
            background: rgba(255, 255, 255, 0.72);
            backdrop-filter: blur(16px) saturate(190%);
            -webkit-backdrop-filter: blur(16px) saturate(190%);
            border: 1px solid rgba(255, 255, 255, 0.85);
            box-shadow: 0 20px 45px rgba(15, 37, 68, 0.12), 0 4px 15px rgba(229, 182, 94, 0.18);
            border-radius: 24px;
            padding: 42px 35px;
            text-align: center;
            max-width: 480px;
            width: 92%;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        .rgu-glass-card::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(229, 182, 94, 0.14) 0%, transparent 60%);
            pointer-events: none;
        }

        .rgu-glass-orb-wrapper {
            position: relative;
            width: 90px;
            height: 90px;
            margin: 0 auto 24px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .rgu-glass-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid #e5b65e;
            animation: rguRingPulse 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
        }

        .rgu-glass-ring.ring-2 {
            animation-delay: 0.65s;
            border-color: #24477f;
        }

        .rgu-glass-orb {
            width: 68px;
            height: 68px;
            background: linear-gradient(135deg, #0f2544 0%, #1e3d6b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(15, 37, 68, 0.35);
            position: relative;
            z-index: 3;
            animation: rguOrbFloat 3s ease-in-out infinite alternate;
        }

        .rgu-glass-orb svg {
            width: 34px;
            height: 34px;
            color: #e5b65e;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        @keyframes rguRingPulse {
            0% {
                transform: scale(0.65);
                opacity: 0.95;
            }
            100% {
                transform: scale(1.6);
                opacity: 0;
            }
        }

        @keyframes rguOrbFloat {
            0% { transform: translateY(0px) scale(1); }
            100% { transform: translateY(-6px) scale(1.03); }
        }

        .rgu-glass-title {
            font-size: 22px;
            font-weight: 700;
            color: #0f2544;
            margin-bottom: 8px;
            letter-spacing: -0.3px;
        }

        .rgu-glass-subtitle {
            font-size: 14px;
            color: #556987;
            margin-bottom: 22px;
            line-height: 1.5;
        }

        .rgu-glass-progress {
            width: 100%;
            height: 6px;
            background: rgba(15, 37, 68, 0.08);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            margin-bottom: 18px;
        }

        .rgu-glass-progress-bar {
            width: 45%;
            height: 100%;
            background: linear-gradient(90deg, #0f2544, #e5b65e, #0f2544);
            border-radius: 10px;
            position: absolute;
            animation: rguShimmerBar 1.6s ease-in-out infinite;
        }

        @keyframes rguShimmerBar {
            0% { left: -45%; }
            100% { left: 100%; }
        }

        .rgu-glass-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(15, 37, 68, 0.05);
            border: 1px solid rgba(15, 37, 68, 0.1);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            color: #0f2544;
        }

        .rgu-glass-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #e5b65e;
            box-shadow: 0 0 8px #e5b65e;
            animation: rguBadgeBlink 1.2s ease-in-out infinite alternate;
        }

        @keyframes rguBadgeBlink {
            0% { opacity: 0.4; transform: scale(0.85); }
            100% { opacity: 1; transform: scale(1.15); }
        }
    </style>

    <div class="body-part">

        <div class="container">

            <!-- Search Section -->
            <div class="row rgu-program-search">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Search By Schools :</label>
                    <select class="form-select rgu-program-school-select">
                        <option value="">Select School to Navigate...</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Search By Courses :</label>
                    <input type="text" class="form-control rgu-program-course-search"
                        placeholder="Type to search courses...">
                </div>
            </div>

            <!-- Glass Animation Loader -->
            <div id="rguGlassLoader" class="rgu-glass-loader-wrapper">
                <div class="rgu-glass-card">
                    <div class="rgu-glass-orb-wrapper">
                        <div class="rgu-glass-ring ring-1"></div>
                        <div class="rgu-glass-ring ring-2"></div>
                        <div class="rgu-glass-orb">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                            </svg>
                        </div>
                    </div>
                    <h4 class="rgu-glass-title">Loading Programmes</h4>
                    <p class="rgu-glass-subtitle">Fetching all schools and academic courses from API...</p>
                    <div class="rgu-glass-progress">
                        <div class="rgu-glass-progress-bar"></div>
                    </div>
                    <div class="rgu-glass-badge">
                        <span class="rgu-glass-badge-dot"></span>
                        <span id="rguGlassStatusText">Synchronizing university data...</span>
                    </div>
                </div>
            </div>

            <!-- Accordion section programme-->
            <div class="accordion" id="rguProgramAccordion" style="{{ !empty($schools) ? '' : 'display: none;' }}">
                @if(!empty($schools))
                    @foreach($schools as $index => $school)
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
                                                    $link = $course['details_url'] ?? route('rgu-programme-details', ['slug' => \Illuminate\Support\Str::slug($courseTitle . '-' . $schoolTitle)]);
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
                    @endforeach
                @endif
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.getElementById("rguGlassLoader");
            const accordionContainer = document.getElementById("rguProgramAccordion");
            const searchInput = document.querySelector(".rgu-program-course-search");
            const schoolSelect = document.querySelector(".rgu-program-school-select");
            const statusText = document.getElementById("rguGlassStatusText");

            function hideGlassLoader() {
                if (!loader) return;
                loader.style.opacity = "0";
                setTimeout(() => {
                    loader.classList.add("rgu-loader-hidden");
                    if (accordionContainer) {
                        accordionContainer.style.display = "";
                    }
                }, 400);
            }

            function updateLoaderStatus(msg) {
                if (statusText) statusText.textContent = msg;
            }

            function escapeHtml(str) {
                if (!str) return "";
                return String(str)
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }

            function slugify(text) {
                return (text || "")
                    .toString()
                    .toLowerCase()
                    .trim()
                    .replace(/&/g, "-and-")
                    .replace(/[^a-z0-9]+/g, "-")
                    .replace(/^-+|-+$/g, "");
            }

            function normalize(str) {
                return (str || "")
                    .toLowerCase()
                    .replace(/\./g, "")
                    .replace(/\s+/g, "")
                    .replace(/[^a-z0-9]/g, "");
            }

            /* ===============================
               BUILD SCHOOL DROPDOWN
            =============================== */
            function populateSchoolDropdown() {
                const accordionItems = document.querySelectorAll(".rgu-program-accordion-item");
                const currentVal = schoolSelect.value;
                schoolSelect.innerHTML = '<option value="">Select School to Navigate...</option>';

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
                    if (currentVal && currentVal === school) {
                        option.selected = true;
                    }
                    schoolSelect.appendChild(option);
                });
            }

            /* ===============================
               ATTACH SEARCH & FILTER EVENTS
            =============================== */
            function initSearchAndFilter() {
                searchInput.oninput = function() {
                    const keyword = normalize(this.value);
                    const accordionItems = document.querySelectorAll(".rgu-program-accordion-item");

                    accordionItems.forEach(item => {
                        const cards = item.querySelectorAll(".rgu-program-card");
                        let matchFound = false;

                        cards.forEach(card => {
                            const rawTitle = card.querySelector(".rgu-program-card-title") ?
                                card.querySelector(".rgu-program-card-title").innerText : "";
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
                            if (collapse) collapse.classList.remove("show");
                            if (btn) {
                                btn.classList.add("collapsed");
                                btn.setAttribute("aria-expanded", "false");
                            }
                        } else if (matchFound) {
                            item.style.display = "";
                            if (collapse) collapse.classList.add("show");
                            if (btn) {
                                btn.classList.remove("collapsed");
                                btn.setAttribute("aria-expanded", "true");
                            }
                        } else {
                            item.style.display = "none";
                            if (collapse) collapse.classList.remove("show");
                            if (btn) {
                                btn.classList.add("collapsed");
                                btn.setAttribute("aria-expanded", "false");
                            }
                        }
                    });
                };

                schoolSelect.onchange = function() {
                    const selectedSchool = this.value;
                    const accordionItems = document.querySelectorAll(".rgu-program-accordion-item");

                    accordionItems.forEach(item => {
                        const school = item.getAttribute("data-school");
                        const collapse = item.querySelector(".accordion-collapse");
                        const btn = item.querySelector(".accordion-button");

                        if (!selectedSchool) {
                            item.style.display = "";
                            if (collapse) collapse.classList.remove("show");
                            if (btn) {
                                btn.classList.add("collapsed");
                                btn.setAttribute("aria-expanded", "false");
                            }
                            return;
                        }

                        if (school === selectedSchool) {
                            item.style.display = "";
                            if (collapse) collapse.classList.add("show");
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
                            if (collapse) collapse.classList.remove("show");
                            if (btn) {
                                btn.classList.add("collapsed");
                                btn.setAttribute("aria-expanded", "false");
                            }
                        }
                    });

                    searchInput.value = "";
                };
            }

            /* ===============================
               RENDER ACCORDION FROM API DATA
            =============================== */
            function renderSchools(schoolsData) {
                if (!Array.isArray(schoolsData) || schoolsData.length === 0) {
                    accordionContainer.innerHTML = '<div class="alert alert-info text-center my-4">No programmes found from the API at the moment.</div>';
                    accordionContainer.style.display = "";
                    hideGlassLoader();
                    return;
                }

                let html = "";
                schoolsData.forEach((school, index) => {
                    const rawId = school.id || 'school-' + index;
                    const cleanSchoolId = rawId.replace(/[^a-zA-Z0-9_-]/g, "");
                    const schoolName = school.name || "School";
                    const courses = Array.isArray(school.courses) ? school.courses : [];
                    const coursesCount = courses.length;

                    let coursesCardsHtml = "";
                    if (coursesCount > 0) {
                        coursesCardsHtml = '<div class="row g-3">';
                        courses.forEach(course => {
                            const courseTitle = course.name || "Programme";
                            const schoolTitle = course.programmeName || schoolName;
                            const rawDuration = (course.duration || "").trim();
                            let duration = "";
                            if (rawDuration) {
                                duration = rawDuration.toLowerCase().indexOf("duration") === 0 ? rawDuration : "Duration: " + rawDuration;
                            }
                            const slug = course.slug || slugify(courseTitle + "-" + schoolTitle);
                            const link = course.details_url || ("/rgu-programme-details/" + slug);

                            coursesCardsHtml += `
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="${escapeHtml(link)}" class="rgu-program-link">
                                        <div class="rgu-program-card">
                                            <div class="rgu-program-card-title">
                                                ${escapeHtml(courseTitle)}
                                            </div>
                                            ${duration ? `<div class="rgu-program-card-duration">${escapeHtml(duration)}</div>` : ''}
                                        </div>
                                    </a>
                                </div>
                            `;
                        });
                        coursesCardsHtml += '</div>';
                    } else {
                        coursesCardsHtml = `
                            <div class="col-12 py-3 text-center text-muted" style="font-style: italic;">
                                Programmes under this school will be updated soon.
                            </div>
                        `;
                    }

                    html += `
                        <div class="accordion-item rgu-program-accordion-item" data-school="${escapeHtml(schoolName)}">
                            <h2 class="accordion-header" id="heading-${cleanSchoolId}">
                                <button class="accordion-button collapsed rgu-program-accordion-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#acc-${cleanSchoolId}" aria-expanded="false" aria-controls="acc-${cleanSchoolId}">
                                    <span>${escapeHtml(schoolName)}</span>
                                    ${coursesCount > 0 ? `<span class="badge bg-light text-dark ms-2" style="font-size: 11px; font-weight: 600;">${coursesCount} ${coursesCount === 1 ? 'Programme' : 'Programmes'}</span>` : ''}
                                </button>
                            </h2>
                            <div id="acc-${cleanSchoolId}" class="accordion-collapse collapse" aria-labelledby="heading-${cleanSchoolId}" data-bs-parent="#rguProgramAccordion">
                                <div class="accordion-body">
                                    ${coursesCardsHtml}
                                </div>
                            </div>
                        </div>
                    `;
                });

                accordionContainer.innerHTML = html;
                accordionContainer.style.display = "";
                populateSchoolDropdown();
                initSearchAndFilter();
                hideGlassLoader();
            }

            /* ===============================
               INITIALIZATION / API FETCH
            =============================== */
            const existingItems = document.querySelectorAll(".rgu-program-accordion-item");
            const hasExistingData = existingItems.length >= 10; // If complete data already pre-rendered by Blade

            if (hasExistingData) {
                // If complete data already rendered by server, initialize immediately
                populateSchoolDropdown();
                initSearchAndFilter();
                setTimeout(hideGlassLoader, 200);
            } else {
                // Fetch full data from API with glass loader active until complete
                updateLoaderStatus("Fetching complete academic data...");
                const apiUrl = '/api/rgu-schools-programmes' + (window.location.search || '');

                fetch(apiUrl)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("HTTP error " + response.status);
                        }
                        updateLoaderStatus("Rendering programmes and courses...");
                        return response.json();
                    })
                    .then(json => {
                        if (json && json.success && Array.isArray(json.data) && json.data.length > 0) {
                            renderSchools(json.data);
                        } else {
                            throw new Error("Invalid or empty data returned");
                        }
                    })
                    .catch(err => {
                        console.error("API error:", err);
                        // If pre-rendered items exist even if fewer, show them, otherwise show retry alert
                        if (existingItems.length > 0) {
                            populateSchoolDropdown();
                            initSearchAndFilter();
                            hideGlassLoader();
                        } else {
                            if (loader) {
                                loader.innerHTML = `
                                    <div class="rgu-glass-card">
                                        <div class="rgu-glass-title text-danger">Unable to load programmes</div>
                                        <p class="rgu-glass-subtitle">There was an issue connecting to the academic API.</p>
                                        <button class="btn btn-sm btn-primary" onclick="window.location.reload()">Retry Now</button>
                                    </div>
                                `;
                            }
                        }
                    });
            }
        });
    </script>
@endsection
