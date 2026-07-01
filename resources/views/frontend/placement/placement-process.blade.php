@extends('frontend/new-master')
@section('content')
        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/introduction/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Placement Process</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Placement Process
            </div>
        </div>

    </section>


    <!-- =========================
     INTERNATIONAL HIGHLIGHTS SECTION
     Place this after the Hero Section
========================= -->

    <section class="intl-highlights-section">
        <div class="container">

            <!-- Top Grid -->
            <div class="row g-5 align-items-center">

                <!-- Left Image -->
                <div class="col-lg-6">
                    <div class="intl-img-card">
                        <img src="https://www.rgu.ac/mobile-assets/placement-all/placement-process/headimg.png"
                            alt="Education in India">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <div class="intl-content">
                        <h2>Placement Process</h2>

                        <p>
                            Royal Centre for Corporate Relations (RCCR) shares details of job/internship opportunity
                            with students, arranges Pre-Placement Talks, Campus Visits and coordinates recruitment
                            exercise on campus or through virtual mode. Every organization is requested to conduct a
                            pre-placement talk to provide the students an opportunity to understand the organization,
                            its work culture, job profile offered, remuneration, and other associated details beforehand
                            enabling the candidates to invest their highest potential and upholding transparency.
                            Regular interactive sessions with students conducted by RCCR enable a thorough understanding
                            of the job market for students who opt to seek placement. This centre also acquaints
                            prospective employers in the industrial and corporate sectors regarding talented and
                            industry-ready candidates from The Assam Royal Global University
                        </p>


                    </div>
                </div>

            </div>


        </div>
    </section>

    <style>
        /* ===================================
   INTERNATIONAL HIGHLIGHTS
=================================== */

        .intl-highlights-section {
            background: #eef1f7;
            padding: 80px 0 40px;
        }

        .intl-img-card img,
        .intl-small-img img,
        .intl-blue-img img {
            width: 100%;
            display: block;
            object-fit: cover;
            border-radius: 28px;
        }

        .intl-img-card img {
            height: 320px;
        }

        .intl-small-img img {
            height: 140px;
        }

        .intl-blue-img img {
            height: 300px;
        }

        .intl-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 700;
            color: #1f3f7f;
            margin-bottom: 20px;
        }

        .intl-content h4 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 700;
            color: #1f3f7f;
            margin-bottom: 20px;
        }

        .intl-content p {
            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 16px;
        }

        .intl-content ol li {
            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 16px;
        }


      

        /* ===================================
   RESPONSIVE
=================================== */

        @media (max-width:991px) {

            .intl-highlights-section {
                padding: 60px 0 20px;
            }

            .intl-content h2,
            .intl-blue-writeup h2 {
                font-size: 34px;
            }

            .intl-blue-section {
                border-radius: 40px 40px 0 0;
                padding: 60px 0;
            }

            .intl-blue-writeup {
                padding: 0;
            }

            .intl-img-card img,
            .intl-blue-img img {
                height: 250px;
            }

            .intl-small-img img {
                height: 180px;
            }
        }

        @media (max-width:767px) {

            .intl-content h2,
            .intl-blue-writeup h2 {
                font-size: 28px;
            }

            .intl-contact-box {
                padding: 25px;
            }

            .intl-contact-box h3 {
                font-size: 28px;
            }
        }
    </style>
@endsection
