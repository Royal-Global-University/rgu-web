@extends('frontend/master')
@section('content')

    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background: #FFF8F0;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
        }

        /* =====================================
           HERO
        ===================================== */

        .rgu-jb-hero {
            padding: 70px 20px 50px;
            background: #FFF8F0;
        }

        .rgu-jb-hero-box {
            background: #ffffff;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .08);
        }

        .rgu-jb-left {
            padding: 70px;
        }

        .rgu-jb-logo {
            width: 290px;
            margin-bottom: 35px;
        }

        .rgu-jb-title {
            font-size: clamp(2.6rem, 5vw, 3rem);
            line-height: 1.08;
            font-weight: 800;
            color: #f15a36;
            margin-bottom: 25px;
        }

        .rgu-jb-subtitle {
            font-size: 1.25rem;
            line-height: 1.9;
            color: #173b72;
            font-weight: 600;
            text-align: justify;
        }

        /* =====================================
           RIGHT HERO
        ===================================== */

        .rgu-jb-right-panel {
            min-height: 100%;
            padding: 45px;
            background:
                linear-gradient(rgba(23, 59, 114, .10),
                    rgba(23, 59, 114, .10));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .rgu-jb-right-panel::before {
            content: "";
            position: absolute;
            width: 620px;
            height: 620px;
            border-radius: 50%;
            background: #173b72;
            top: -250px;
            right: -250px;
            opacity: .92;
        }

        .rgu-jb-right-panel::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: #f15a36;
            top: 50px;
            right: 50px;
        }

        .rgu-jb-vacancy-box {
            position: relative;
            z-index: 5;
            width: 100%;
            max-width: 520px;
            background: rgba(255, 248, 240, .97);
            border-radius: 35px;
            padding: 45px 35px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .14);
            border: 2px solid rgba(255, 255, 255, .4);
            backdrop-filter: blur(10px);
        }

        .rgu-jb-vacancy-box h2 {
            font-size: clamp(2.3rem, 5vw, 4rem);
            line-height: 1.1;
            font-weight: 800;
            color: #111827;
            margin-bottom: 25px;
        }

        .rgu-jb-vacancy-box p {
            color: #173b72;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 22px;
        }

        .rgu-jb-vacancy-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background:
                linear-gradient(135deg,
                    #ff971d,
                    #f15a36);
            color: #ffffff;
            font-size: 1.05rem;
            font-weight: 700;
            padding: 18px 24px;
            border-radius: 18px;
            transition: .3s ease;
            margin-bottom: 30px;
            box-shadow: 0 14px 35px rgba(241, 90, 54, .25);
        }

        .rgu-jb-vacancy-btn:hover {
            color: #ffffff;
            transform: translateY(-4px);
            box-shadow: 0 18px 45px rgba(241, 90, 54, .35);
        }

        .rgu-jb-vacancy-box h4 {
            font-size: 1.05rem;
            color: #173b72;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .rgu-jb-vacancy-box img {
            width: 240px;
            margin: auto;
            border-radius: 14px;
            border: 5px solid #173b72;
            background: white;
        }

        /* =====================================
           INTRO
        ===================================== */

        .rgu-jb-intro {
            margin-top: 45px;
            text-align: center;
        }

        .rgu-jb-intro p {
            max-width: 1250px;
            margin: auto;
            color: #173b72;
            font-size: 1.1rem;
            line-height: 1.9;
            font-weight: 500;
        }

        /* =====================================
           MAIN SECTION
        ===================================== */

        .rgu-jb-section {
            padding: 20px;
        }

        .rgu-jb-panel {
            background: #10284c;
            border-radius: 40px;
            padding: 55px;
            position: relative;
            overflow: hidden;
        }

        .rgu-jb-panel::before {
            content: "";
            position: absolute;
            width: 550px;
            height: 550px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .03);
            top: -280px;
            right: -250px;
        }

        /* =====================================
           HEAD
        ===================================== */

        .rgu-jb-head {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-bottom: 55px;
        }

        .rgu-jb-badge {
            display: inline-block;
            background:
                linear-gradient(135deg,
                    #ff7d3a,
                    #f15a36);
            color: white;
            padding: 14px 34px;
            border-radius: 100px;
            font-size: .95rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 28px;
            box-shadow: 0 12px 35px rgba(241, 90, 54, .35);
        }

        .rgu-jb-head h2 {
            color: white;
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 800;
        }

        /* =====================================
           CARD
        ===================================== */

        .rgu-jb-card {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .08);
            backdrop-filter: blur(16px);
            border-radius: 32px;
            padding: 35px;
            margin-bottom: 30px;
            transition: .3s ease;
        }

        .rgu-jb-card:hover {
            transform: translateY(-6px);
            background: rgba(255, 255, 255, .08);
        }

        .rgu-jb-card h3 {
            display: inline-block;
            background:
                linear-gradient(90deg,
                    #f15a36,
                    #ff8449);
            color: white;
            padding: 15px 24px;
            border-radius: 16px;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .rgu-jb-card p {
            color: #d8e4f3;
            line-height: 1.9;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .rgu-jb-highlight {
            color: #ffca97 !important;
            font-weight: 700;
        }

        /* =====================================
           DOMAIN TAGS
        ===================================== */

        .rgu-jb-domains {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin: 25px 0;
        }

        .rgu-jb-domains span {
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .08);
            color: white;
            padding: 12px 18px;
            border-radius: 100px;
            font-size: .95rem;
        }

        /* =====================================
           FEATURES
        ===================================== */

        .rgu-jb-feature-box {
            margin-top: 20px;
        }

        .rgu-jb-feature-card {
            background: rgba(255, 255, 255, .05);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, .06);
            padding: 30px;
            height: 100%;
        }

        .rgu-jb-feature-card h4 {
            color: white;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .rgu-jb-feature-card p {
            color: #d8e4f3;
            line-height: 1.8;
            margin-bottom: 0;
        }

        /* =====================================
           APPLICATION
        ===================================== */

        .rgu-jb-mail {
            color: #ffca97 !important;
            font-size: 1.2rem !important;
            font-weight: 700;
            word-break: break-word;
        }

        .rgu-jb-salary {
            background: #ffe14f;
            color: black;
            font-size: 1.05rem;
            font-weight: 700;
            text-align: center;
            padding: 18px;
            border-radius: 16px;
            margin-top: 25px;
        }

        .rgu-jb-qr {
            width: 230px;
            margin: auto;
            border-radius: 20px;
            border: 4px solid white;
        }

        .rgu-jb-footer-note {
            text-align: center;
            margin-top: 20px;
            color: white;
            font-weight: 600;
        }

        /* =====================================
           OTHER ADS
        ===================================== */

        .rgu-jb-other-wrap {
            background: white;
            border-radius: 40px;
            padding: 50px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, .06);
        }

        .rgu-jb-other-wrap .rgu-jb-head h2 {
            color: #173b72;
        }

        .rgu-jb-ad-card {
            height: 100%;
            overflow: hidden;
            border-radius: 24px;
            cursor: pointer;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
            transition: .3s ease;
            background: white;
        }

        .rgu-jb-ad-card:hover {
            transform: translateY(-6px);
        }

        .rgu-jb-ad-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* =====================================
           LIGHTBOX
        ===================================== */

        .rgu-jb-lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .94);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            opacity: 0;
            visibility: hidden;
            transition: .3s ease;
        }

        .rgu-jb-lightbox.active {
            opacity: 1;
            visibility: visible;
        }

        .rgu-jb-lightbox img {
            max-width: 100%;
            max-height: 95vh;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .5);
        }

        .rgu-jb-close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 4rem;
            color: white;
            cursor: pointer;
            line-height: 1;
            z-index: 5;
        }

        /* =====================================
           RESPONSIVE
        ===================================== */

        @media(max-width:991px) {

            .rgu-jb-left {
                padding: 45px;
            }

            .rgu-jb-right-panel {
                padding: 30px 20px;
            }

            .rgu-jb-panel {
                padding: 35px;
            }

            .rgu-jb-other-wrap {
                padding: 35px;
            }
        }

        @media(max-width:768px) {

            .rgu-jb-hero {
                padding: 50px 12px;
            }

            .rgu-jb-left {
                padding: 30px 24px;
            }

            .rgu-jb-logo {
                width: 220px;
            }

            .rgu-jb-title {
                font-size: 2.4rem;
            }

            .rgu-jb-subtitle {
                font-size: 1rem;
            }

            .rgu-jb-vacancy-box {
                padding: 30px 20px;
                border-radius: 24px;
            }

            .rgu-jb-vacancy-box h2 {
                font-size: 2.3rem;
            }

            .rgu-jb-vacancy-box img {
                width: 190px;
            }

            .rgu-jb-vacancy-btn {
                font-size: .95rem;
                padding: 16px 20px;
            }

            .rgu-jb-panel {
                padding: 20px;
                border-radius: 28px;
            }

            .rgu-jb-card {
                padding: 24px;
                border-radius: 24px;
            }

            .rgu-jb-card h3 {
                width: 100%;
                text-align: center;
                font-size: 1.2rem;
            }

            .rgu-jb-domains span {
                width: 100%;
                text-align: center;
            }

            .rgu-jb-qr {
                width: 190px;
                margin-top: 20px;
            }

            .rgu-jb-other-wrap {
                padding: 24px;
                border-radius: 28px;
            }

            .rgu-jb-close {
                top: 10px;
                right: 20px;
                font-size: 3rem;
            }
        }
    </style>


    <div class="rgu-jb-wrapper">

        <!-- =====================================
           HERO
      ====================================== -->

        <section class="rgu-jb-hero">

            <div class="container">

                <div class="rgu-jb-hero-box">

                    <div class="row g-0 align-items-center">

                        <!-- LEFT -->

                        <div class="col-lg-6">

                            <div class="rgu-jb-left">

                                <img class="rgu-jb-logo" src="https://www.rgu.ac/mobile-assets/index/logo-dark.png"
                                    alt="RGU Logo">

                                <h1 class="rgu-jb-title">
                                    Join The Assam Royal Global University
                                </h1>

                                <div class="rgu-jb-subtitle">

                                    The Assam Royal Global University, one of India’s premium
                                    private universities, has been a leadership platform since
                                    2017, connecting industries, entrepreneurs, and youth.

                                    RGU fosters an environment where education, employment,
                                    and entrepreneurship thrive through collaboration with
                                    corporates, professionals, and academic institutes.

                                </div>

                            </div>

                        </div>

                        <!-- RIGHT -->

                        <div class="col-lg-6">

                            <div class="rgu-jb-right-panel">

                                <div class="rgu-jb-vacancy-box">

                                    <h2>
                                        Other Vacancies
                                    </h2>

                                    <p>
                                        To apply/register, click the link below -
                                    </p>

                                    <a href="https://rgu.renocampus.com/activeOpenings" target="_blank"
                                        class="rgu-jb-vacancy-btn">

                                        Apply / Register Now

                                    </a>

                                    <h4>
                                        Or scan the QR code below -
                                    </h4>

                                    <img src="https://www.rgu.ac/assets/img/jobs.jpeg" alt="QR Code">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- INTRO -->

                <div class="rgu-jb-intro">

                    <p>

                        Explore academic and professional vacancies,
                        view detailed job descriptions, and learn how
                        to apply through our portal.

                    </p>

                </div>

            </div>

        </section>

        <!-- =====================================
           MAIN SECTION
      ====================================== -->

        <section class="rgu-jb-section">

            <div class="container">

                <div class="rgu-jb-panel">

                    <!-- HEAD -->

                    <div class="rgu-jb-head">

                        <span class="rgu-jb-badge">
                            Recruitment Open
                        </span>

                        <h2>
                            Leadership & Global Faculty Positions
                        </h2>

                    </div>

                    <!-- CARD -->

                    <div class="rgu-jb-card">

                        <h3>
                            Dean for the Schools
                        </h3>

                        <p>

                            Applications are invited for experienced
                            academic leaders from the following domains.

                        </p>

                        <div class="rgu-jb-domains">

                            <span>Architecture</span>
                            <span>Law</span>
                            <span>Psychology</span>
                            <span>Humanities & Social Sciences</span>
                            <span>Hotel Management</span>
                            <span>Engineering (Computer Science)</span>
                            <span>Bioscience / Life Sciences</span>

                        </div>

                        <p class="rgu-jb-highlight">

                            Deans from other domains may also apply.

                        </p>

                        <p>

                            Minimum 15 years of experience in teaching,
                            research and/or academic administration in
                            Universities or Institutions of Higher Education.

                        </p>

                    </div>

                    <!-- CARD -->

                    <div class="rgu-jb-card">

                        <h3>
                            Dean – Research & Development
                        </h3>

                        <p>

                            Minimum 15 years of academic experience along
                            with at least 5 years of leadership or
                            administrative experience in research
                            management, innovation, funded projects,
                            and industry-academia collaboration.

                        </p>

                    </div>

                    <!-- CARD -->

                    <div class="rgu-jb-card">

                        <h3>
                            Dean – Students' Affairs
                        </h3>

                        <p>

                            Minimum 10 years of teaching experience
                            with 5 years of relevant administrative
                            experience in student affairs, student welfare,
                            or related leadership roles.

                        </p>

                    </div>

                    <!-- CARD -->

                    <div class="rgu-jb-card">

                        <h3>
                            International Faculty
                        </h3>

                        <p>

                            Dedicated amenities like faculty lounges,
                            gymnasium, indoor and outdoor sports facilities.

                        </p>

                        <p>

                            Established in Guwahati, the University serves
                            as a strategic gateway to ASEAN countries,
                            fostering high-impact collaborations.

                        </p>

                        <p>

                            8500+ students, 26 schools, 130+ UG, PG,
                            doctoral programmes and international students
                            from Kenya, Zimbabwe, Tanzania, Nepal,
                            Myanmar, Bhutan, South Sudan, Libya and others.

                        </p>

                        <p class="rgu-jb-highlight">

                            Eligibility: As per UGC / other compliance bodies.

                        </p>

                    </div>

                    <!-- FEATURES -->

                    <div class="rgu-jb-feature-box">

                        <div class="row g-4">

                            <div class="col-lg-4">

                                <div class="rgu-jb-feature-card">

                                    <h4>
                                        Academic Excellence
                                    </h4>

                                    <p>

                                        Dynamic ecosystem with modern
                                        infrastructure and strong academic culture.

                                    </p>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="rgu-jb-feature-card">

                                    <h4>
                                        International Exposure
                                    </h4>

                                    <p>

                                        Gateway to ASEAN collaborations
                                        and global academic opportunities.

                                    </p>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="rgu-jb-feature-card">

                                    <h4>
                                        Research & Innovation
                                    </h4>

                                    <p>

                                        Strong focus on innovation,
                                        funded projects and industry partnerships.

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- APPLICATION -->

                    <div class="rgu-jb-card mt-4">

                        <h3>
                            Application Process
                        </h3>

                        <div class="row align-items-center g-4">

                            <div class="col-lg-8">

                                <p>

                                    Interested candidates may apply online
                                    by scanning the QR code or send
                                    their CVs to:

                                </p>

                                <p class="rgu-jb-mail">
                                    careers@rgu.ac
                                </p>

                                <p>

                                    Applications should be submitted within
                                    <strong>5 working days.</strong>

                                </p>

                                <div class="rgu-jb-salary">

                                    Salary is not a constraint
                                    for deserving candidates.

                                </div>

                            </div>

                            <div class="col-lg-4 text-center">

                                <img class="rgu-jb-qr" src="https://www.rgu.ac/assets/img/jobs.jpeg" alt="QR Code">

                            </div>

                        </div>

                        <div class="rgu-jb-footer-note">

                            For more information,
                            please log in to www.rgu.ac

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- =====================================
           OTHER ADS
      ====================================== -->

        <section class="rgu-jb-section pb-5">

            <div class="container">

                <div class="rgu-jb-other-wrap">

                    <div class="rgu-jb-head mb-5">

                        <span class="rgu-jb-badge">
                            More Opportunities
                        </span>

                        <h2>
                            Other Recruitment Advertisements
                        </h2>

                    </div>

                    <div class="row g-4">

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://www.rgu.ac/mobile-assets/carrer/jrf-2.png" class="rgu-jb-ad-img"
                                    alt="Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://www.rgu.ac/mobile-assets/carrer/1ads.jpeg" class="rgu-jb-ad-img"
                                    alt="Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://www.rgu.ac/mobile-assets/carrer/ads-2.jpeg" class="rgu-jb-ad-img"
                                    alt="Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://www.rgu.ac/mobile-assets/carrer/ads-3.jpeg" class="rgu-jb-ad-img"
                                    alt="Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://www.rgu.ac/mobile-assets/carrer/ads-4.jpeg" class="rgu-jb-ad-img"
                                    alt="Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://www.rgu.ac/mobile-assets/carrer/ads-7.jpeg" class="rgu-jb-ad-img"
                                    alt="Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- =====================================
           LIGHTBOX
      ====================================== -->

        <div class="rgu-jb-lightbox" id="rguJBLightbox">

            <span class="rgu-jb-close" onclick="closeRGUAd()">

                &times;

            </span>

            <img id="rguJBLightboxImg" src="" alt="Advertisement">

        </div>

    </div>


    <script>
        const rguJBLightbox =
            document.getElementById("rguJBLightbox");

        const rguJBLightboxImg =
            document.getElementById("rguJBLightboxImg");

        function openRGUAd(src) {

            rguJBLightbox.classList.add("active");

            rguJBLightboxImg.src = src;

            document.body.style.overflow = "hidden";
        }

        function closeRGUAd() {

            rguJBLightbox.classList.remove("active");

            document.body.style.overflow = "auto";
        }

        rguJBLightbox.addEventListener("click", function(e) {

            if (e.target === rguJBLightbox) {

                closeRGUAd();
            }

        });
    </script>
@endsection
