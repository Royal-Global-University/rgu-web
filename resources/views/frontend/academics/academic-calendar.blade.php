@extends('frontend/new-master')
@section('title', 'RGU Holiday List & Academic Calendar 2025-26: View All Dates')
@section('meta_description', 'Official RGU Holiday List 2025-26: View all vacation days, exam schedules, key events, and
    deadlines for students and faculty. Download PDF/View Dates.')
@section('meta_keywords', 'Academic calender')
@section('content')
        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Academics-General-Information-Academic-Calendar/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Academic Calendar</h1>
            <div class="pg-hero-breadcrumb">
                Academics / General Information / Academic Calendar
            </div>
        </div>

    </section>

    <section class="rgu-ac-section">
        <div class="container">

            <div class="row align-items-center g-5">

                <!-- Left Content -->
                <div class="col-lg-5">

                    <div class="rgu-ac-content">

                        <h2 class="rgu-ac-title">
                            Tentative Academic
                            Calendar for the Year
                            2025–2026
                        </h2>

                        <div class="rgu-ac-btn-group">

                            <a href="/mobile-assets/pdf/calendar/Academic Calendar_AY 2026-27.pdf" class="rgu-ac-btn" download>
                                Download Academic Calendar
                            </a>

                            <a href="/mobile-assets/pdf/calendar/Tentative%20Academic%20Calender%20(D.%20Pharm,%20B.%20Pharm,%20M.%20Pharm)%202025-26.pdf" class="rgu-ac-btn" download>
                                Academic Calendar for RSP
                            </a>

                            <a href="/mobile-assets/pdf/calendar/Revised%20Academic%20Calender%20(RSN)%202025-26.pdf" class="rgu-ac-btn" download>
                                Academic Calendar for RSN
                            </a>

                            <a href="/mobile-assets/pdf/calendar/Tentative%20Academic%20Calender%20(RSB)%202025-26.pdf" class="rgu-ac-btn" download>
                                Academic Calendar for RSB
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Right Image -->
                <div class="col-lg-7">

                    <div class="rgu-ac-image-wrap">

                        <img src="/new-web/assets/img/Academics-General-Information-Academic-Calendar/img1.png" alt="Academic Calendar">

                    </div>

                </div>

            </div>

        </div>
    </section>

    <style>
        /*======================================
ACADEMIC CALENDAR SECTION
======================================*/

        .rgu-ac-section {
            background: #eef3f8;
            padding: 8rem 0;
        }


        /*======================================
LEFT CONTENT
======================================*/

        .rgu-ac-content {
            max-width: 42rem;
        }

        .rgu-ac-title {
            margin: 0 0 4rem;

            font-family: 'Playfair Display', serif;
            font-size: 4.0rem;
            font-weight: 700;
            line-height: 1.18;

            color: #2f4e89;
        }


        /*======================================
BUTTONS
======================================*/

        .rgu-ac-btn-group {
            display: flex;
            flex-direction: column;
            gap: 1.6rem;
        }

        .rgu-ac-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: fit-content;

            padding: 1.7rem 3rem;

            border-radius: 1rem;

            background: #d95b28;

            color: #ffffff;
            text-decoration: none;

            font-family: 'Inter', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;

            transition: all .3s ease;
        }

        .rgu-ac-btn:hover {
            background: #bf4c1f;

            color: #ffffff;

            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(0, 0, 0, .12);
        }


        /*======================================
IMAGE
======================================*/

        .rgu-ac-image-wrap {
            overflow: hidden;

            border-radius: 0 2rem 6rem 6rem;
        }

        .rgu-ac-image-wrap img {
            width: 100%;
            display: block;

            aspect-ratio: 16/9;

            object-fit: cover;

            transition: transform .5s ease;
        }

        .rgu-ac-image-wrap:hover img {
            transform: scale(1.04);
        }


        /*======================================
TABLET
======================================*/

        @media(max-width:991px) {

            .rgu-ac-section {
                padding: 6rem 0;
            }

            .rgu-ac-content {
                max-width: 100%;
            }

            .rgu-ac-title {
                font-size: 4.6rem;
            }

            .rgu-ac-image-wrap {
                border-radius: 2rem 2rem 5rem 5rem;
            }

        }


        /*======================================
MOBILE
======================================*/

        @media(max-width:767px) {

            .rgu-ac-section {
                padding: 5rem 0;
            }

            .rgu-ac-title {
                font-size: 3.6rem;

                margin-bottom: 3rem;
            }

            .rgu-ac-btn-group {
                gap: 1.2rem;
            }

            .rgu-ac-btn {
                width: 100%;

                padding: 1.5rem 2rem;

                font-size: 1.4rem;

                text-align: center;
            }

            .rgu-ac-image-wrap {
                border-radius: 2rem 2rem 4rem 4rem;
            }

        }
    </style>
@endsection
