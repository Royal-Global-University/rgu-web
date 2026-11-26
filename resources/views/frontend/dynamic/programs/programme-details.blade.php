@php
    $hideFooter = true;
    $identifier = $courseId ?? request()->route('slug') ?? request()->route('id') ?? request('slug') ?? request('id');
    if (!isset($course) && $identifier) {
        if (!preg_match('/^[a-f0-9]{24}$/i', $identifier)) {
            $identifier = app(\App\Http\Controllers\ProgrammeController::class)->resolveCourseIdFromSlug($identifier);
        }
        if ($identifier) {
            $course = app(\App\Http\Controllers\ProgrammeController::class)->fetchCourseDetails($identifier);
        }
    }

    $courseTitle = $course['courseName'] ?? 'Programme Details';
    $programmeName = $course['programmeName'] ?? '';
    $rawDuration = trim($course['duration'] ?? '');
    $duration = '';
    if (!empty($rawDuration)) {
        $duration = stripos($rawDuration, 'duration') === 0 ? $rawDuration : 'Duration - ' . $rawDuration;
    }
@endphp

@extends('frontend.master')
@section('title', $courseTitle . ' : The Assam Royal Global University')
@section('meta_description', 'Discover your potential with ' . $courseTitle . ' at Royal Global University.')
@section('meta_keywords', $courseTitle)
@section('content')
    @php $hideFooter = true; @endphp
    <style>
        .elementor-1115 {
            display: none !important;
        }
    </style>
    <div style="background-image: url(/mobile-assets/programme-details/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div class="container" style="padding-top: 120px; position: relative;">

                <h2 class="mobile-headd1 fw-bold text-center pt-2" style="color: #27467A; font-weight: 900;">
                    {{ $courseTitle }}
                </h2>

            </div>

            @if(!empty($duration))
                <p class="mobile-headd1 text-center" style="color: #24477f;">
                    {{ $duration }}
                </p>
            @endif

            @if(!empty($programmeName))
                <p class="mobile-headd1 text-center" style="color: #24477f;">
                    {{ $programmeName }}
                </p>
            @endif

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <div class="container">

                <h2 class="mobile-headd1 fw-bold text-center pt-5" style="color: #27467A; font-weight: 900;">
                    {{ $courseTitle }}
                </h2>

            </div>

            @if(!empty($duration))
                <p class="mobile-headd1 text-center" style="color: #24477f;">
                    {{ $duration }}
                </p>
            @endif

            @if(!empty($programmeName))
                <p class="mobile-headd1 text-center" style="color: #24477f;">
                    {{ $programmeName }}
                </p>
            @endif

        </div>

        <style>
            /* Basic Page Styling */
            .section-f {
                padding: 2rem 0;
            }

            /* Individual Card Styling */
            .card {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 0.7rem;
                text-align: left;
                border: none;
                width: 100%;
                height: 100%;

                /* Flexbox for vertical alignment */
                display: flex;
                flex-direction: column;

                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            /* Hover effect for the card */
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            /* Image container */
            .card-image {
                width: 100%;
                padding-top: 100%;
                position: relative;
                border-radius: 5%;
                overflow: hidden;
                margin: 0 auto 1.0rem;
                border: 2px solid #f0f2f5;
            }

            .card-image img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Name/Heading Styling */
            .card-name {
                margin: 0 0 0.5rem 0;
                font-size: 1.5rem;
                font-weight: 600;
                color: #24477f;
                line-height: 1.2;
            }

            /* Designation/Paragraph Styling */
            .card-designation {
                margin: 0;
                font-size: 1.2rem;
                font-weight: 400;
                color: #666;
                line-height: 1.4;
            }

            /* New Styling for the Profile Link */
            .profile-link {
                margin-top: auto;
                padding-top: 0.5rem;
                font-size: 1.1rem;
                font-weight: 800;
                text-decoration: none;
                color: #FF9A1E;
            }

            .profile-link:hover {
                text-decoration: underline;
            }
        </style>

        <div class="section-f">

            <style>
                .section-body {
                    margin: 0;
                    padding: 20px;
                    display: flex;
                    justify-content: center;
                    min-height: 50vh;
                    align-items: flex-start;
                }

                .tabs-container {
                    width: 100%;
                    max-width: 1300px;
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                }

                .tab-buttons {
                    display: flex;
                    background-color: #f1f1f1;
                    border-bottom: 2px solid #ddd;
                }

                .tab-button {
                    flex: 1;
                    padding: 15px 10px;
                    cursor: pointer;
                    border: none;
                    outline: none;
                    background-color: transparent;
                    font-size: 16px;
                    font-weight: 600;
                    text-align: center;
                    transition: background-color 0.3s, color 0.3s;
                    border-bottom: 3px solid transparent;
                }

                .tab-button:hover {
                    background-color: #e7e7e7;
                }

                .tab-button.active {
                    color: #007BFF;
                    border-bottom-color: #007BFF;
                }

                .tab-content {
                    padding: 0 25px;
                    line-height: 1.6;
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.4s ease-out, padding 0.4s ease-out;
                }

                .tab-content.active {
                    padding: 25px;
                }

                .tab-content h3 {
                    margin-top: 0;
                    color: #333;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                @media (max-width: 600px) {
                    .tab-buttons {
                        flex-direction: column;
                    }

                    .tab-button {
                        border-bottom: 1px solid #ddd;
                    }

                    .tab-button.active {
                        border-bottom: 3px solid #007BFF;
                    }
                }
            </style>

            <div class="section-body">
                <div class="tabs-container">
                    <div class="tab-buttons mobile-headd3">
                        <button class="tab-button active" data-tab="fee">Fee</button>
                        <button class="tab-button" data-tab="eligibility">Eligibility</button>
                        <button class="tab-button" data-tab="brochure">Brochure</button>
                        <button class="tab-button" data-tab="scholarship">Scholarship</button>
                        <button class="tab-button" data-tab="apply">How to Apply</button>
                    </div>

                    {{-- FEE TAB --}}
                    <div id="fee" class="tab-content active mobile-para1">
                        @if(!empty($course['fee']))
                            {!! $course['fee'] !!}
                        @else
                            <div class="py-4 text-center text-muted">
                                <h4 class="fw-bold" style="color: #27467A;">Programme Fee Structure</h4>
                                <p class="mb-0">Fee details for this programme will be updated soon. Please contact the admissions office for current details.</p>
                            </div>
                        @endif
                    </div>

                    {{-- ELIGIBILITY TAB --}}
                    <div id="eligibility" class="tab-content mobile-para1">
                        @if(!empty($course['eligibility']))
                            {!! $course['eligibility'] !!}
                        @else
                            <div class="py-4 text-center text-muted">
                                <h4 class="fw-bold" style="color: #27467A;">Eligibility & Selection Criteria</h4>
                                <p class="mb-0">Eligibility criteria for this programme will be updated soon.</p>
                            </div>
                        @endif
                    </div>

                    {{-- BROCHURE TAB --}}
                    <div id="brochure" class="tab-content mobile-para1">
                        @if(!empty($course['brochure']))
                            <div style="padding: 15px 20px; border: 1px solid #e68a1a; border-radius: 10px; background-color: #FFF8F0; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                <img src="/mobile-assets/programme-details/brochurethumb.png" alt="Brochure">
                                <a target="_blank" class="text-danger fw-bold mobile-headd3 pt-2"
                                    href="{{ $course['brochure'] }}">
                                    Download Brochure
                                    <i class="fa-solid fa-file-pdf" style="color: #e66363;"></i>
                                </a>
                            </div>
                        @else
                            <div class="py-4 text-center text-muted">
                                <h4 class="fw-bold" style="color: #27467A;">Brochure</h4>
                                <p class="mb-0">Brochure is not currently available for download.</p>
                            </div>
                        @endif
                    </div>

                    {{-- SCHOLARSHIP TAB --}}
                    <div id="scholarship" class="tab-content mobile-para1">
                        @if(!empty($course['scholarship']))
                            {!! $course['scholarship'] !!}
                        @else
                            <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                                Scholarships
                            </h2>
                            <p class="mobile-para1 text-dark">
                                Royal Global University offers several scholarships to help students pay for their education.
                                Generally, merit scholarships are reserved for students with special qualifications, such as academic
                                performance, athletic or artistic talent and other endowment schemes.
                            </p>

                            <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                                Application Process
                            </h2>
                            <p class="mobile-para1 text-dark">
                                Students seeking Scholarships will have to submit an application as per the category for which
                                the student seeks scholarship. For fresh students seeking admission, if interested for applying scholarship
                                can select the scholarship facility during the online application process. Existing students can seek help
                                from their departmental coordinators to keep themselves updated for the scholarship application deadlines
                                and process.
                            </p>
                        @endif

                        <div class="mt-3">
                            <h2 class="mobile-headd3 fw-bold mb-3" style="color: #27467A;">
                                For More Details
                            </h2>
                            <a class="mobile-para1 fw-bold"
                                style="padding: 10px 15px; background-color: #FF9A1E; color: #fff; border-radius: 10px; text-decoration: none; display: inline-block;"
                                href="/scholarship&funding">
                                Click to View
                            </a>
                        </div>
                    </div>

                    {{-- HOW TO APPLY TAB --}}
                    <div id="apply" class="tab-content mobile-para1">
                        @if(!empty($course['howToApply']))
                            {!! $course['howToApply'] !!}
                        @else
                            <h2 class="mobile-headd3 fw-bold" style="color: #27467A;">
                                How to Apply
                            </h2>
                            <p class="mobile-para1 text-dark">
                                Admission to Royal Global University is highly competitive. You need to meet both admissions &
                                subject requirements before we make an unconditional offer of admission. At RGU you will learn from
                                outstanding teachers, access groundbreaking research and state-of-the-art facilities, and make invaluable
                                contacts and lifelong friends.
                            </p>
                        @endif

                        <div class="mt-2">
                            <a target="_blank" class="mobile-headd3 fw-bold" style="color: #FF9A1E;" href="/how-to-apply">
                                For more details, click to view
                            </a>
                        </div>

                        <div style="padding: 15px 40px; border: 1px solid #e68a1a; border-radius: 10px; background-color: #FFF8F0; margin-top: 20px;">
                            <h2 class="mobile-headd1 fw-bold mt-3 text-center" style="color: #27467A;">
                                FULLY ONLINE ADMISSION PROCESS
                            </h2>

                            <style>
                                @keyframes uniquePulseAnimation {
                                    0% {
                                        transform: scale(1);
                                        box-shadow: 0 0 0 0 rgba(255, 154, 30, 0.7);
                                    }

                                    70% {
                                        transform: scale(1.05);
                                        box-shadow: 0 0 0 15px rgba(255, 154, 30, 0);
                                    }

                                    100% {
                                        transform: scale(1);
                                        box-shadow: 0 0 0 0 rgba(255, 154, 30, 0);
                                    }
                                }

                                .animated-pulse-button {
                                    padding: 15px 40px;
                                    background-color: #FF9A1E;
                                    color: #fff !important;
                                    border-radius: 10px;
                                    font-size: 20px;
                                    display: inline-block;
                                    transform: scale(1);
                                    text-decoration: none;
                                    animation: uniquePulseAnimation 2s infinite;
                                    transition: transform 0.3s ease, background-color 0.3s ease;
                                }

                                .animated-pulse-button:hover {
                                    animation-play-state: paused;
                                    transform: scale(1.05);
                                    background-color: #e68a1a;
                                }
                            </style>

                            <div class="min-h-screen flex items-center justify-center">
                                <div class="mt-4 text-center">
                                    <a class="mobile-para1 fw-bold animated-pulse-button" href="https://admissions.rgu.ac/">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const tabButtons = document.querySelectorAll('.tab-button');
                    const tabContents = document.querySelectorAll('.tab-content');

                    function setActiveTab(targetTab) {
                        tabContents.forEach(content => {
                            const contentId = content.getAttribute('id');

                            if (contentId === targetTab) {
                                content.classList.add('active');
                                content.style.maxHeight = content.scrollHeight + 'px';
                            } else {
                                content.classList.remove('active');
                                content.style.maxHeight = '0px';
                            }
                        });
                    }

                    tabButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            const targetTab = button.getAttribute('data-tab');

                            tabButtons.forEach(btn => btn.classList.remove('active'));
                            button.classList.add('active');

                            setActiveTab(targetTab);
                        });
                    });

                    const initialActiveTab = document.querySelector('.tab-button.active');
                    if (initialActiveTab) {
                        setActiveTab(initialActiveTab.getAttribute('data-tab'));
                    }

                    const observer = new ResizeObserver(entries => {
                        for (let entry of entries) {
                            const content = entry.target;
                            if (content.classList.contains('active')) {
                                content.style.maxHeight = content.scrollHeight + 'px';
                            }
                        }
                    });

                    tabContents.forEach(content => {
                        observer.observe(content);
                    });
                });
            </script>

        </div>

    </div>
@endsection
