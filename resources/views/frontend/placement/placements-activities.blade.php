@extends('frontend/new-master')
@section('content')
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

    <style>
        /*===================================
        PLACEMENT SERVICES
        ===================================*/

        .placement-services-section {

            background: #eef1f7;
            padding: 10px 0 80px;

        }

        .placement-services-content {

            margin-bottom: 55px;

        }

        .placement-services-content h2 {

            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 700;
            color: #1f3f7f;
            margin-bottom: 30px;

        }

        .placement-services-content h2 span {

            color: #e67d29;

        }

        .placement-services-content ol {

            padding-left: 28px;
            margin: 0;

        }

        .placement-services-content li {

            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 2;
            margin-bottom: 14px;
            text-align: justify;

        }

        .placement-gallery-item {

            display: block;
            overflow: hidden;
            border-radius: 20px;

        }

        .placement-gallery-item img {

            width: 100%;
            height: 260px;
            object-fit: cover;
            display: block;
            transition: .45s;

        }

        .placement-gallery-item:hover img {

            transform: scale(1.08);

        }

        @media(max-width:991px) {

            .placement-services-content h2 {

                font-size: 34px;

            }

            .placement-gallery-item img {

                height: 220px;

            }

        }

        @media(max-width:767px) {

            .placement-services-content h2 {

                font-size: 28px;

            }

            .placement-services-content li {

                font-size: 14px;
                line-height: 1.8;

            }

        }
    </style>

    <style>
        /*===================================
        LEADERSHIP CONCLAVE
        ===================================*/

        .leadership-conclave-section {

            padding: 20px 0 90px;
            background: #eef1f7;

        }

        .leadership-content {

            margin-bottom: 40px;

        }

        .leadership-content h2 {

            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 700;
            color: #1f3f7f;
            margin-bottom: 25px;

        }

        .leadership-content h2 span {

            color: #e67d29;

        }

        .leadership-content p {

            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 2;
            text-align: justify;
            margin-bottom: 20px;

        }

        .leadership-gallery {

            display: block;
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);

        }

        .leadership-gallery img {

            width: 100%;
            display: block;
            transition: .45s;

        }

        .leadership-gallery:hover img {

            transform: scale(1.05);

        }

        @media(max-width:991px) {

            .leadership-content h2 {

                font-size: 34px;

            }

        }

        @media(max-width:767px) {

            .leadership-conclave-section {

                padding: 10px 0 60px;

            }

            .leadership-content h2 {

                font-size: 28px;

            }

            .leadership-content p {

                font-size: 14px;
                line-height: 1.9;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/introduction/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Activities Undertaken by RCCR</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Activities Undertaken by RCCR
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
                        <img src="/mobile-assets/placement-all/placements-activity/headimg.png" alt="Education in India">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <div class="intl-content">
                        <h2>Activities Undertaken by RCCR</h2>

                        <p>
                            Royal Centre for Corporate Relations (RCCR) envisages enhancing placement prospects of RGU
                            students through various activities during the academic session.
                        </p>


                    </div>
                </div>

            </div>


        </div>
    </section>

    <!-- ==========================================
        PLACEMENT SERVICES
        ========================================== -->

    <section class="placement-services-section">
        <div class="container">

            <div class="placement-services-content">

                <h2>
                    Our University Placement <span>Services Include:</span>
                </h2>

                <ol>

                    <li>
                        Strong industry interface whereby potential employers in industry are contacted at regular
                        intervals and recruitment processes are conducted on or off campus as per recruiter’s
                        requirements.
                    </li>

                    <li>
                        Internship opportunities in Government, Semi-Government and Private Sector
                        Industry/Undertakings as per student's preference.
                    </li>

                    <li>
                        Industrial visits, field trips and interactive sessions with corporates at regular
                        intervals, along with training on soft skills, personality development, grooming,
                        leadership, teamwork, empathy and time management for aspiring professionals.
                    </li>

                    <li>
                        RCCR conducts regular Mock Group Discussions (GD), Personal Interviews (PI),
                        aptitude assessments, online test practices and Career Counselling sessions to
                        prepare students for campus recruitment.
                    </li>

                    <li>
                        RCCR arranges interactive sessions of students with RGU alumni so that the current students are
                        inspired by the experiences of their seniors and also receive all necessary support from them in
                        their professional journey ahead.
                    </li>

                    <li>
                        To ensure satisfactory induction, members from RCCR visit the worksites of the students to know
                        how the students are performing in their job and thus gather corporate feedback on the students’
                        performance.
                    </li>

                </ol>

            </div>

            <!-- Gallery -->

            <div class="placement-gallery">

                <div class="row g-4">

                    <div class="col-lg-4 col-md-6">
                        <a href="/mobile-assets/placement-all/placements-activity/g1.jpg" class="placement-gallery-item">
                            <img src="/mobile-assets/placement-all/placements-activity/g1.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="/mobile-assets/placement-all/placements-activity/g2.jpg" class="placement-gallery-item">
                            <img src="/mobile-assets/placement-all/placements-activity/g2.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="/mobile-assets/placement-all/placements-activity/g3.jpeg" class="placement-gallery-item">
                            <img src="/mobile-assets/placement-all/placements-activity/g3.jpeg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="/mobile-assets/placement-all/placements-activity/g4.jpg" class="placement-gallery-item">
                            <img src="/mobile-assets/placement-all/placements-activity/g4.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="/mobile-assets/placement-all/placements-activity/g5.jpg" class="placement-gallery-item">
                            <img src="/mobile-assets/placement-all/placements-activity/g5.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="/mobile-assets/placement-all/placements-activity/g6.jpg" class="placement-gallery-item">
                            <img src="/mobile-assets/placement-all/placements-activity/g6.jpg" alt="">
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!--=========================================
        LEADERSHIP CONCLAVE
        ==========================================-->

    <section class="leadership-conclave-section">

        <div class="container">

            <div class="leadership-content">

                <h2>
                    Leadership <span>Conclave 2025</span>
                </h2>

                <p>
                    <strong>Guwahati, September 11, 2025:</strong>
                    Royal Global University successfully hosted its flagship Leadership Conclave 2025, organized by the
                    Royal Centre for Corporate Relations (RCCR) under the leadership of Ms. Bristy Srivastava, Head of
                    RCCR. The conclave brought together close to 100 senior professionals, industry leaders, and
                    distinguished speakers for a day of high-impact discussions on the theme “Ethics and the Evolving
                    Workforce.”
                </p>

                <p>
                    The conclave addressed some of the most urgent questions facing today’s workplace, explored across
                    four thought-provoking panels: “Minimal Input, Maximum Outcome: Has Hustle Culture Rebranded
                    Laziness?”, “5% of Leadership, 50% of the Workforce: What’s Broken in the Climb for Women?”, “Beyond
                    the Algorithm: Reclaiming the Human in Human Resources,” and “Funding Over Fundamentals: Has Startup
                    Culture Outgrown Accountability?”
                </p>

            </div>

            <div class="row">

                <div class="col-lg-6 mb-4">

                    <a href="/mobile-assets/placement-all/placements-activity/l-img.png" class="leadership-gallery">

                        <img src="/mobile-assets/placement-all/placements-activity/l-img.png" alt="Leadership Conclave">

                    </a>

                </div>

                <div class="col-lg-6 mb-4">

                    <a href="/mobile-assets/placement-all/placements-activity/r-img.png" class="leadership-gallery">

                        <img src="/mobile-assets/placement-all/placements-activity/r-img.png" alt="Leadership Conclave">

                    </a>

                </div>

            </div>

            <div class="leadership-content mt-4">

                <p>
                    Notable speakers included Abhay Kapoor, HR Transformation Leader at UIL; Govindprasad Gaonkar,
                    Senior Executive Vice President & Head-HR at Kotak Mahindra Asset Management; Sailaja M, HR Leader
                    at Sephora with 18+ years of experience in retail and e-commerce; Nitin Jagdale, Head of Talent
                    Acquisition at NTT Data India; and Dr. Alaka Sarma, Co-founder of Akshar Foundation and Oxford
                    alumna, who has been instrumental in pioneering sustainable and socially impactful education models.
                    Their insights were complemented by other eminent leaders from organizations such as Amazon,
                    Reliance Jio, ICICI Bank, Kotak Mahindra Bank, Sephora, and many more.
                </p>

                <p>
                    The discussions examined how ethics can be positioned at the heart of leadership, ensuring that
                    technological innovation, diversity, and productivity are aligned with integrity and inclusivity.
                    Speakers reflected on reshaping leadership values, empowering women in the workforce, rehumanizing
                    HR in the age of algorithms, and steering startups towards accountability.
                </p>

                <p>
                    The conclave reinforced Royal Global University’s commitment to creating a platform that bridges
                    academia and industry, inspiring students and professionals alike to pursue leadership rooted in
                    ethics, responsibility, and innovation.
                </p>

            </div>

        </div>

    </section>
@endsection
