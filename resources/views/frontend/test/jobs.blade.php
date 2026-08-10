@extends('frontend/master')
@section('content')
    @php
        $hideFooter = true;
    @endphp

    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        /* =========================================================
               RESET
            ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            background:
                linear-gradient(180deg,
                    #f8f2e9 0%,
                    #f2e7d8 100%);
            color: #3d2d21;
            overflow-x: hidden;
            line-height: 1.6;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
            transition: all .3s ease;
        }

        /* =========================================================
               WRAPPER
            ========================================================= */

        .rgu-jb-wrapper {
            position: relative;
        }

        /* =========================================================
               HERO SECTION
            ========================================================= */

        .rgu-jb-hero {
            position: relative;
            padding: 80px 20px 60px;
        }

        .rgu-jb-hero-box {
            position: relative;
            overflow: hidden;
            border-radius: 42px;
            background: rgba(255, 253, 249, .95);
            border: 1px solid rgba(140, 100, 70, .08);
            box-shadow:
                0 10px 40px rgba(70, 45, 25, .08),
                0 30px 80px rgba(70, 45, 25, .06);
            backdrop-filter: blur(10px);
        }

        .rgu-jb-hero-box::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background:
                radial-gradient(circle,
                    rgba(196, 128, 79, .12),
                    transparent 70%);
            top: -220px;
            left: -180px;
        }

        .rgu-jb-hero-box::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background:
                radial-gradient(circle,
                    rgba(120, 82, 54, .08),
                    transparent 70%);
            bottom: -180px;
            right: -120px;
        }

        .rgu-jb-left {
            position: relative;
            z-index: 2;
            padding: 75px;
        }

        .rgu-jb-logo {
            width: 280px;
            margin-bottom: 40px;
        }

        .rgu-jb-title {
            font-size: clamp(2.8rem, 5vw, 4rem);
            line-height: 1.05;
            font-weight: 800;
            color: #8d3d17;
            margin-bottom: 30px;
            letter-spacing: -.5px;
        }

        .rgu-jb-subtitle {
            font-size: 1.1rem;
            line-height: 2;
            color: #5b4636;
            font-weight: 500;
            text-align: justify;
        }

        /* =========================================================
               RIGHT HERO PANEL
            ========================================================= */

        .rgu-jb-right-panel {
            position: relative;
            min-height: 100%;
            overflow: hidden;
            padding: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                linear-gradient(135deg,
                    #6b4b37 0%,
                    #4a3427 100%);
        }

        .rgu-jb-right-panel::before {
            content: "";
            position: absolute;
            width: 650px;
            height: 650px;
            border-radius: 50%;
            background:
                radial-gradient(circle,
                    rgba(255, 255, 255, .08),
                    transparent 70%);
            top: -320px;
            right: -280px;
        }

        .rgu-jb-right-panel::after {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background:
                radial-gradient(circle,
                    rgba(214, 142, 84, .35),
                    transparent 72%);
            bottom: -100px;
            left: -80px;
        }

        .rgu-jb-vacancy-box {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 520px;
            padding: 50px 40px;
            border-radius: 36px;
            text-align: center;
            background:
                rgba(255, 250, 245, .92);
            border: 1px solid rgba(255, 255, 255, .4);
            box-shadow:
                0 10px 35px rgba(0, 0, 0, .12),
                0 25px 60px rgba(0, 0, 0, .08);
            backdrop-filter: blur(16px);
        }

        .rgu-jb-vacancy-box h2 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            line-height: 1;
            font-weight: 800;
            color: #3f2b20;
            margin-bottom: 25px;
        }

        .rgu-jb-vacancy-box p {
            color: #6a503d;
            font-size: 1.08rem;
            line-height: 1.8;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .rgu-jb-vacancy-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 18px 24px;
            border-radius: 18px;
            background:
                linear-gradient(135deg,
                    #c26e42,
                    #94411d);
            color: #ffffff;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .3px;
            box-shadow:
                0 12px 30px rgba(148, 65, 29, .24);
        }

        .rgu-jb-vacancy-btn:hover {
            transform: translateY(-4px);
            color: #ffffff;
            box-shadow:
                0 18px 40px rgba(148, 65, 29, .34);
        }

        .rgu-jb-vacancy-box h4 {
            margin-bottom: 25px;
            font-size: 1rem;
            color: #5d4736;
            font-weight: 700;
        }

        .rgu-jb-vacancy-box img {
            width: 240px;
            margin: auto;
            border-radius: 18px;
            border: 5px solid #ffffff;
            box-shadow:
                0 12px 35px rgba(0, 0, 0, .14);
        }

        /* =========================================================
               INTRO
            ========================================================= */

        .rgu-jb-intro {
            margin-top: 50px;
            text-align: center;
        }

        .rgu-jb-intro p {
            max-width: 1200px;
            margin: auto;
            color: #5b4636;
            font-size: 1.08rem;
            line-height: 2;
            font-weight: 500;
        }

        /* =========================================================
               MAIN SECTION
            ========================================================= */

        .rgu-jb-section {
            padding: 25px 20px;
        }

        .rgu-jb-panel {
            position: relative;
            overflow: hidden;
            padding: 60px;
            border-radius: 42px;
            background:
                linear-gradient(135deg,
                    #5a4131 0%,
                    #3c2a20 100%);
            box-shadow:
                0 20px 70px rgba(40, 25, 15, .16);
        }

        .rgu-jb-panel::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background:
                radial-gradient(circle,
                    rgba(255, 255, 255, .05),
                    transparent 72%);
            top: -300px;
            right: -260px;
        }

        /* =========================================================
               SECTION HEAD
            ========================================================= */

        .rgu-jb-head {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-bottom: 55px;
        }

        .rgu-jb-badge {
            display: inline-block;
            padding: 14px 34px;
            border-radius: 100px;
            background:
                linear-gradient(135deg,
                    #d1814f,
                    #a14a22);
            color: #ffffff;
            font-size: .9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 28px;
            box-shadow:
                0 12px 30px rgba(161, 74, 34, .3);
        }

        .rgu-jb-head h2 {
            color: #ffffff;
            font-size: clamp(2rem, 4vw, 3.6rem);
            font-weight: 800;
            line-height: 1.15;
        }

        /* =========================================================
               CARDS
            ========================================================= */

        .rgu-jb-card {
            position: relative;
            z-index: 2;
            overflow: hidden;
            padding: 38px;
            margin-bottom: 30px;
            border-radius: 32px;
            background:
                rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .08);
            backdrop-filter: blur(14px);
            transition: all .35s ease;
        }

        .rgu-jb-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg,
                    rgba(255, 255, 255, .03),
                    transparent);
            pointer-events: none;
        }

        .rgu-jb-card:hover {
            transform: translateY(-6px);
            background:
                rgba(255, 255, 255, .1);
            box-shadow:
                0 18px 45px rgba(0, 0, 0, .18);
        }

        .rgu-jb-card h3 {
            display: inline-block;
            padding: 15px 24px;
            margin-bottom: 28px;
            border-radius: 16px;
            background:
                linear-gradient(135deg,
                    #c87443,
                    #9c431c);
            color: #ffffff;
            font-size: 1.45rem;
            font-weight: 700;
            line-height: 1.4;
            box-shadow:
                0 10px 28px rgba(156, 67, 28, .22);
        }

        .rgu-jb-card p {
            color: #f7ebde;
            font-size: 1rem;
            line-height: 1.95;
            margin-bottom: 16px;
        }

        .rgu-jb-highlight {
            color: #ffd6a8 !important;
            font-weight: 700;
        }

        /* =========================================================
               DOMAIN LIST
            ========================================================= */

        .rgu-jb-domains {
            margin: 28px 0;
            padding-left: 24px;
        }

        .rgu-jb-domains li {
            color: #fff5ea;
            font-size: 1.05rem;
            line-height: 2;
            margin-bottom: 10px;
        }

        /* =========================================================
               MAIL
            ========================================================= */

        .rgu-jb-mail {
            color: #ffd7ae !important;
            font-size: 1.2rem !important;
            font-weight: 700;
            word-break: break-word;
        }

        /* =========================================================
               SALARY BOX
            ========================================================= */

        .rgu-jb-salary {
            margin-top: 25px;
            padding: 18px;
            border-radius: 18px;
            background:
                linear-gradient(135deg,
                    #f0c766,
                    #ddb24f);
            color: #3d2d21;
            font-size: 1rem;
            font-weight: 700;
            text-align: center;
        }

        /* =========================================================
               QR
            ========================================================= */

        .rgu-jb-qr {
            width: 230px;
            margin: auto;
            border-radius: 18px;
            border: 4px solid #ffffff;
            box-shadow:
                0 10px 30px rgba(0, 0, 0, .14);
        }

        .rgu-jb-footer-note {
            text-align: center;
            margin-top: 22px;
            color: #ffffff;
            font-weight: 600;
        }

        /* =========================================================
               OTHER ADS
            ========================================================= */

        .rgu-jb-other-wrap {
            padding: 55px;
            border-radius: 42px;
            background:
                rgba(255, 253, 249, .94);
            border: 1px solid rgba(120, 90, 70, .08);
            box-shadow:
                0 18px 55px rgba(60, 35, 20, .08);
        }

        .rgu-jb-other-wrap .rgu-jb-head h2 {
            color: #5d4333;
        }

        .rgu-jb-ad-card {
            height: 100%;
            overflow: hidden;
            border-radius: 26px;
            cursor: pointer;
            background: #ffffff;
            border: 1px solid rgba(120, 90, 70, .08);
            box-shadow:
                0 12px 35px rgba(0, 0, 0, .08);
            transition: all .35s ease;
        }

        .rgu-jb-ad-card:hover {
            transform: translateY(-6px);
            box-shadow:
                0 18px 45px rgba(0, 0, 0, .14);
        }

        .rgu-jb-ad-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* =========================================================
               LIGHTBOX
            ========================================================= */

        .rgu-jb-lightbox {
            position: fixed;
            inset: 0;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background:
                rgba(22, 14, 10, .94);
            opacity: 0;
            visibility: hidden;
            transition: all .3s ease;
        }

        .rgu-jb-lightbox.active {
            opacity: 1;
            visibility: visible;
        }

        .rgu-jb-lightbox img {
            max-width: 100%;
            max-height: 95vh;
            border-radius: 24px;
            box-shadow:
                0 20px 70px rgba(0, 0, 0, .5);
        }

        .rgu-jb-close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 4rem;
            line-height: 1;
            color: #ffffff;
            cursor: pointer;
        }

        /* =========================================================
               RESPONSIVE
            ========================================================= */

        @media(max-width:991px) {

            .rgu-jb-left {
                padding: 50px 40px;
            }

            .rgu-jb-right-panel {
                padding: 40px 25px;
            }

            .rgu-jb-panel {
                padding: 40px;
            }

            .rgu-jb-other-wrap {
                padding: 40px;
            }

        }

        @media(max-width:768px) {

            .rgu-jb-hero {
                padding: 55px 12px;
            }

            .rgu-jb-hero-box {
                border-radius: 28px;
            }

            .rgu-jb-left {
                padding: 35px 24px;
            }

            .rgu-jb-logo {
                width: 220px;
                margin-bottom: 28px;
            }

            .rgu-jb-title {
                font-size: 2.5rem;
            }

            .rgu-jb-subtitle {
                font-size: 1rem;
                line-height: 1.9;
            }

            .rgu-jb-right-panel {
                padding: 24px 18px;
            }

            .rgu-jb-vacancy-box {
                padding: 32px 22px;
                border-radius: 24px;
            }

            .rgu-jb-vacancy-box h2 {
                font-size: 2.4rem;
            }

            .rgu-jb-vacancy-btn {
                font-size: .95rem;
                padding: 16px 18px;
            }

            .rgu-jb-vacancy-box img {
                width: 190px;
            }

            .rgu-jb-panel {
                padding: 22px;
                border-radius: 28px;
            }

            .rgu-jb-head {
                margin-bottom: 35px;
            }

            .rgu-jb-card {
                padding: 24px;
                border-radius: 24px;
            }

            .rgu-jb-card h3 {
                width: 100%;
                text-align: center;
                font-size: 1.15rem;
            }

            .rgu-jb-card p {
                font-size: .98rem;
                line-height: 1.9;
            }

            .rgu-jb-domains {
                padding-left: 20px;
            }

            .rgu-jb-domains li {
                font-size: 1rem;
                line-height: 1.9;
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

                                <img class="rgu-jb-logo" src="/mobile-assets/index/logo-dark.png" alt="RGU Logo">

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

                                    <img src="/assets/img/jobs.jpeg" alt="QR Code">

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
                            Dean for the Schools of:
                        </h3>



                        <ul class="rgu-jb-domains">

                            <li>Architecture</li>
                            <li>Law</li>
                            <li>Psychology</li>
                            <li>Humanities & Social Sciences</li>
                            <li>Hotel Management</li>
                            <li>Engineering (Computer Science)</li>
                            <li>Bioscience / Life Sciences</li>

                        </ul>

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

                        <!-- <p>

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

                            </p> -->

                        <p class="rgu-jb-highlight">

                            Eligibility: As per University norms.

                        </p>

                    </div>

                    <!-- FEATURES -->

                    <!-- <div class="rgu-jb-feature-box">

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

                          </div> -->

                    <!-- APPLICATION -->

                    <!-- <div class="rgu-jb-card mt-4">

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

                                <img class="rgu-jb-qr" src="/assets/img/jobs.jpeg" alt="QR Code">

                              </div>

                            </div>

                            <div class="rgu-jb-footer-note">

                              For more information,
                              please log in to www.rgu.ac

                            </div>

                          </div> -->

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

                                <img src="/mobile-assets/carrer/jrf-2.png" class="rgu-jb-ad-img" alt="Advertisement"
                                    onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="/mobile-assets/carrer/1ads.jpeg" class="rgu-jb-ad-img" alt="Advertisement"
                                    onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="/mobile-assets/carrer/ads-2.jpeg" class="rgu-jb-ad-img" alt="Advertisement"
                                    onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="/mobile-assets/carrer/ads-3.jpeg" class="rgu-jb-ad-img" alt="Advertisement"
                                    onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="/mobile-assets/carrer/ads-4.jpeg" class="rgu-jb-ad-img" alt="Advertisement"
                                    onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                        <!-- AD -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="/mobile-assets/carrer/ads-7.jpeg" class="rgu-jb-ad-img" alt="Advertisement"
                                    onclick="openRGUAd(this.src)">

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
