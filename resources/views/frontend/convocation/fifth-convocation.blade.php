@extends('frontend/new-master')
@section('content')
    <style>
        .all-section {
            background-image: url(assets/img/convocation-five/bg-web.png);
            background-size: contain;
        }
    </style>

    <style>
        /*=========================================
            CONVOCATION INTRO
    =========================================*/

        .convocation-intro-section {
            padding: 70px 80px 40px;
        }

        .convocation-content p {
            font-size: 18px;
            line-height: 2;
            color: #24477f;
            text-align: justify;
            margin-bottom: 0;
        }

        /*=========================================
            FEATURE IMAGE
    =========================================*/

        .convocation-feature-image {
            text-align: center;
        }

        .convocation-feature-image img {

            width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, .08);

            box-shadow:
                inset 0 0 10px rgba(0, 0, 0, .18),
                0 0 6px rgba(119, 67, 25, .35);

            animation: convocationPulse 2.5s ease-in-out infinite;
        }

        @keyframes convocationPulse {

            0% {

                box-shadow:
                    inset 0 0 10px rgba(0, 0, 0, .18),
                    0 0 6px rgba(119, 67, 25, .35);

            }

            50% {

                box-shadow:
                    inset 0 0 10px rgba(0, 0, 0, .18),
                    0 0 22px rgba(119, 67, 25, .75);

            }

            100% {

                box-shadow:
                    inset 0 0 10px rgba(0, 0, 0, .18),
                    0 0 6px rgba(119, 67, 25, .35);

            }

        }


        /*=========================================
            DECORATIVE BANNERS
    =========================================*/

        .convocation-banner-section {
            padding: 10px 55px 20px;
        }

        .convocation-banner-section img:first-child {
            border-bottom: 2px solid #6c3e1b;
        }


        /*=========================================
            OVERVIEW
    =========================================*/

        .convocation-overview {
            padding: 0 80px 45px;
        }

        .convocation-overview h2 {

            font-size: 32px;
            font-weight: 700;
            color: #24477f;
            margin-bottom: 20px;

        }

        .convocation-overview h2 span {
            color: #EF991F;
        }

        .convocation-overview p {

            color: #24477f;
            font-size: 18px;
            line-height: 2;
            text-align: justify;
            margin-bottom: 0;

        }


        /*=========================================
            PHOTO GALLERY HEADER
    =========================================*/

        .convocation-gallery-header {
            margin-bottom: 35px;
        }

        .convocation-gallery-header h2 {

            font-size: 32px;
            font-weight: 700;
            color: #24477f;
            margin-bottom: 20px;

        }

        .convocation-gallery-header span {
            color: #EF991F;
        }

        .convocation-gallery-header p {

            font-size: 18px;
            line-height: 2;
            color: #24477f;
            text-align: justify;

        }


        /*=========================================
            RESPONSIVE
    =========================================*/

        @media(max-width:991px) {

            .convocation-intro-section {

                padding: 50px 30px;

            }

            .convocation-banner-section {

                padding: 0 30px 25px;

            }

            .convocation-overview {

                padding: 0 30px 35px;

            }

        }


        @media(max-width:767px) {

            .convocation-intro-section {

                padding: 35px 20px;

            }

            .convocation-banner-section {

                padding: 0 20px 20px;

            }

            .convocation-overview {

                padding: 0 20px 25px;

            }

            .convocation-content p,
            .convocation-overview p,
            .convocation-gallery-header p {

                font-size: 16px;
                line-height: 1.9;

            }

            .convocation-overview h2,
            .convocation-gallery-header h2 {

                font-size: 28px;

            }

        }
    </style>

    <style>
        /*=========================================
            INFINITE IMAGE SLIDER
    =========================================*/

        .convocation-gallery-section {
            padding: 0 60px 40px;
        }

        .convocation-slider-wrapper {

            width: 100%;
            overflow: hidden;
            border-bottom: 2px solid #EF991F;
            padding: 10px 0;

        }

        .convocation-slider-track {

            display: flex;
            width: max-content;
            animation: convocationScroll 80s linear infinite;

        }

        .convocation-slider-track:hover {
            animation-play-state: paused;
        }

        .convocation-slider-set {
            display: flex;
        }

        .convocation-slide {

            width: 600px;
            margin-right: 20px;
            flex-shrink: 0;

            border: 1px solid #d8d8d8;
            border-radius: 8px;
            overflow: hidden;

            background: #fff;

        }

        .convocation-slide img {

            width: 100%;
            display: block;
            cursor: pointer;
            transition: .3s;

        }

        .convocation-slide:hover img {
            opacity: .92;
        }

        @keyframes convocationScroll {

            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }

        }


        /*=========================================
                SLIDER LIGHTBOX
    =========================================*/

        .convocation-lightbox {

            display: none;

            position: fixed;
            inset: 0;

            background: rgba(230, 230, 230, .95);

            z-index: 9999;

        }

        .convocation-lightbox-image {

            position: absolute;

            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%) scale(1);

            max-width: 90%;
            max-height: 90%;

            object-fit: contain;

            cursor: grab;

            transition: transform .2s;

        }

        .convocation-lightbox-close {

            position: absolute;

            top: 20px;
            right: 35px;

            color: #fff;

            font-size: 42px;

            cursor: pointer;

            z-index: 10;

        }

        .convocation-lightbox-controls {

            position: absolute;

            top: 22px;
            right: 90px;

            display: flex;
            gap: 10px;

            z-index: 10;

        }

        .convocation-lightbox-controls button {

            width: 42px;
            height: 42px;

            border: 1px solid #fff;

            background: rgba(0, 0, 0, .65);

            color: #fff;

            border-radius: 5px;

            font-size: 22px;

            cursor: pointer;

        }

        .convocation-lightbox-controls button:hover {

            background: #000;

        }


        /*=========================================
                IMAGE GALLERY
    =========================================*/

        .convocation-photo-gallery {

            padding: 20px 0 70px;

        }

        .convocation-gallery-item {

            aspect-ratio: 16/9;

            overflow: hidden;

            border-radius: 10px;

            box-shadow: 0 5px 15px rgba(0, 0, 0, .12);

            cursor: pointer;

            transition: .35s;

        }

        .convocation-gallery-item:hover {

            transform: scale(1.03);

        }

        .convocation-gallery-item img {

            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;

        }


        /*=========================================
            GALLERY LIGHTBOX
    =========================================*/

        .convocation-gallery-lightbox {

            visibility: hidden;
            opacity: 0;

            position: fixed;
            inset: 0;

            background: rgba(0, 0, 0, .88);

            display: flex;
            align-items: center;
            justify-content: center;

            transition: .3s;

            z-index: 9999;

        }

        .convocation-gallery-lightbox.active {

            visibility: visible;
            opacity: 1;

        }

        #convocationGalleryImage {

            max-width: 85%;
            max-height: 80vh;

            border-radius: 8px;

            object-fit: contain;

        }

        .convocation-gallery-close {

            position: absolute;

            top: 20px;
            right: 30px;

            color: #fff;

            font-size: 42px;

            cursor: pointer;

        }


        /*=========================================
                RESPONSIVE
    =========================================*/

        @media(max-width:1200px) {

            .convocation-slide {

                width: 500px;

            }

        }

        @media(max-width:991px) {

            .convocation-gallery-section {

                padding: 0 30px 35px;

            }

            .convocation-slide {

                width: 420px;

            }

        }

        @media(max-width:767px) {

            .convocation-gallery-section {

                padding: 0 20px 30px;

            }

            .convocation-slide {

                width: 300px;
                margin-right: 15px;

            }

            #convocationGalleryImage {

                max-width: 94%;

            }

        }
    </style>

    <section class="pg-hero" style="height: 15vh;">
        <div class="pg-hero-bg" style="background-color: #6C3E1B;">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <!-- <div class="pg-hero-inner">
                <h1 class="pg-hero-title"> Convocation Five</h1>
                <div class="pg-hero-breadcrumb">
                    Convocation / Convocation Five
                </div>
            </div> -->

    </section>

    <div class="all-section">

        <!-- ===============================
        CONVOCATION FULL WIDTH BANNER
    ================================ -->

        <section class="rgu-cv5-full-banner">
            <img src="https://www.rgu.ac/mobile-assets/convocation/banner-pic-web-1.svg"
                alt="Fifth Convocation - Royal Global University">
        </section>

        <style>
            /* =========================================
       RGU CV5 - FULL WIDTH BANNER
    ========================================= */

            .rgu-cv5-full-banner {
                width: 100%;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .rgu-cv5-full-banner img {
                width: 100%;
                height: auto;
                display: block;
                margin: 0;
                padding: 0;
            }
        </style>
        <!-- ===============================
        CONVOCATION INTRO
    ================================ -->

        <section class="rgu-cv5-intro container">
            <div class="rgu-cv5-intro-container">

                <!-- LEFT: TEXT -->
                <div class="rgu-cv5-intro-text">
                    <p>
                        The Assam Royal Global University (RGU) celebrated a major milestone in its journey of
                        academic excellence as it hosted its 5th Convocation Ceremony on 31st October 2025.
                        The prestigious event was presided over by Sri Lakshman Prasad Acharya, Hon’ble Governor
                        of Assam and the Visitor of RGU, in the presence of Dr. A. K. Pansari, Chancellor,
                        Sri AK Modi, Pro Chancellor; Prof. A. K. Buragohain, Vice Chancellor; Dr. Sudhanshu
                        Trivedi, Member of Rajya Sabha; Shri Kamakhya Prasad Tasa, Member of Lok Sabha;
                        Dr. Ranoj Pegu, Education Minister of Assam; Sri Bimal Bora, Minister of Industries
                        and Commerce; along with a distinguished gathering of eminent dignitaries.
                    </p>
                </div>

                <!-- RIGHT: IMAGE -->
                <div class="rgu-cv5-intro-image">
                    <img src="https://www.rgu.ac/mobile-assets/convocation/head-img.jpeg" alt="5th Convocation Ceremony">
                </div>

            </div>
        </section>

        <style>
            /* =========================================
       RGU CV5 - CONVOCATION INTRO
    ========================================= */

            .rgu-cv5-intro {
                width: 100%;
                padding: 55px 24px 45px;
            }

            .rgu-cv5-intro-container {
                width: 100%;
                max-width: 1750px;
                margin: 0 auto;

                display: grid;
                grid-template-columns: 1fr 1fr;
                align-items: center;
                gap: 35px;
            }

            /* =========================================
       TEXT
    ========================================= */

            .rgu-cv5-intro-text {
                display: flex;
                align-items: center;
            }

            .rgu-cv5-intro-text p {
                margin: 0;

                color: #24477f;
                font-family: "Times New Roman", serif;
                font-size: 18px;
                line-height: 1.8;
                font-weight: 400;

                text-align: justify;
            }

            /* =========================================
       IMAGE
    ========================================= */

            .rgu-cv5-intro-image {
                width: 100%;
                overflow: hidden;

                border-radius: 14px;

                border: 1px solid rgba(0, 0, 0, 0.10);

                box-shadow:
                    0 4px 12px rgba(0, 0, 0, 0.12),
                    0 1px 3px rgba(0, 0, 0, 0.08);
            }

            .rgu-cv5-intro-image img {
                width: 100%;
                height: auto;

                display: block;

                object-fit: cover;
            }

            /* =========================================
       TABLET
    ========================================= */

            @media (max-width: 1200px) {

                .rgu-cv5-intro {
                    padding: 50px 30px 40px;
                }

                .rgu-cv5-intro-container {
                    gap: 30px;
                }

                .rgu-cv5-intro-text p {
                    font-size: 21px;
                    line-height: 1.8;
                }
            }

            /* =========================================
       MOBILE
    ========================================= */

            @media (max-width: 767px) {

                .rgu-cv5-intro {
                    padding: 35px 20px 30px;
                }

                .rgu-cv5-intro-container {
                    grid-template-columns: 1fr;
                    gap: 25px;
                }

                .rgu-cv5-intro-text p {
                    font-size: 16px;
                    line-height: 1.8;
                    text-align: justify;
                }

                .rgu-cv5-intro-image {
                    border-radius: 10px;
                }
            }
        </style>

        <!-- Decorative Banners -->

        <div class="container">

            <img src="https://www.rgu.ac/mobile-assets/convocation/banner1-pic.svg" class="img-fluid w-100"
                alt="Convocation Banner">

        </div>

        <hr>

        <div class="container">

            <img src="https://www.rgu.ac/mobile-assets/convocation/banner2-pic.svg" class="img-fluid w-100"
                alt="Convocation Banner">

        </div>

        <!-- =========================================
         RGU CV5 - MILESTONE & AWARDS MARQUEE
    ========================================= -->

        <section class="rgu-cv5-milestone container">

            <div class="rgu-cv5-milestone-content">

                <h2>
                    Marking Milestone, <span>Inspiring Future</span>
                </h2>

                <p>
                    A total of 1,967 students were awarded their degrees this year, including
                    1,093 undergraduates, 777 postgraduates and integrated course graduates,
                    and 32 Ph.D. scholars. Academic excellence was celebrated with 56 Gold
                    Medalists and 58 Silver Medalists receiving recognition for their
                    achievements”, he stated. In addition, special honors were conferred,
                    including 2 Chancellor’s Gold Medals and 5 awards for excellence in
                    literary activities, cultural activities, community service, mentoring,
                    and sports
                </p>

            </div>


            <!-- INFINITE MARQUEE -->

            <div class="rgu-cv5-milestone-marquee">

                <div class="rgu-cv5-milestone-track">

                    <!-- SET 1 -->
                    <div class="rgu-cv5-milestone-set">

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/12.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/13.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/1.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/3.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/5.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/6.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/7.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                    </div>


                    <!-- SET 2 - DUPLICATE FOR SEAMLESS LOOP -->
                    <div class="rgu-cv5-milestone-set">

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/12.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/13.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/1.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/3.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/5.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/6.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                        <div class="rgu-cv5-milestone-item">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/7.jpeg"
                                alt="Convocation Award Ceremony">
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <style>
            /* =========================================
       RGU CV5 - MILESTONE & AWARDS MARQUEE
    ========================================= */

            .rgu-cv5-milestone {
                width: 100%;
                padding: 15px 0 45px;
                overflow: hidden;
            }

            /* =========================================
       CONTENT
    ========================================= */

            .rgu-cv5-milestone-content {
                width: 100%;
                padding: 0 20px 25px;
            }

            .rgu-cv5-milestone-content h2 {
                margin: 0 0 10px;

                color: #24477f;

                font-family: "Times New Roman", serif;
                font-size: 34px;
                font-weight: 700;
                line-height: 1.3;
            }

            .rgu-cv5-milestone-content h2 span {
                color: #ef991f;
            }

            .rgu-cv5-milestone-content p {
                margin: 0;

                color: #24477f;

                font-family: "Times New Roman", serif;
                font-size: 18px;
                font-weight: 400;
                line-height: 1.5;

                text-align: justify;
            }


            /* =========================================
       MARQUEE WRAPPER
    ========================================= */

            .rgu-cv5-milestone-marquee {
                width: 100%;
                overflow: hidden;

                border-bottom: 2px solid #ef991f;

                padding: 0 20px 12px;
            }


            /* =========================================
       MOVING TRACK
    ========================================= */

            .rgu-cv5-milestone-track {
                display: flex;
                width: max-content;

                animation: rguCv5MilestoneScroll 35s linear infinite;

                will-change: transform;
            }

            .rgu-cv5-milestone-track:hover {
                animation-play-state: paused;
            }


            /* =========================================
       IMAGE SET
    ========================================= */

            .rgu-cv5-milestone-set {
                display: flex;
                flex-shrink: 0;
                gap: 24px;

                padding-right: 24px;
            }


            /* =========================================
       IMAGE
    ========================================= */

            .rgu-cv5-milestone-item {
                width: 550px;
                height: 300px;

                flex-shrink: 0;

                overflow: hidden;

                border-radius: 8px;

                background: #fff;
            }

            .rgu-cv5-milestone-item img {
                width: 100%;
                height: 100%;

                display: block;

                object-fit: cover;

                transition: transform 0.4s ease;
            }

            .rgu-cv5-milestone-item:hover img {
                transform: scale(1.03);
            }


            /* =========================================
       INFINITE SCROLL
    ========================================= */

            @keyframes rguCv5MilestoneScroll {

                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }

            }


            /* =========================================
       LARGE TABLET
    ========================================= */

            @media (max-width: 1200px) {

                .rgu-cv5-milestone-content h2 {
                    font-size: 32px;
                }

                .rgu-cv5-milestone-content p {
                    font-size: 21px;
                }

                .rgu-cv5-milestone-item {
                    width: 400px;
                    height: 340px;
                }

            }


            /* =========================================
       TABLET
    ========================================= */

            @media (max-width: 991px) {

                .rgu-cv5-milestone {
                    padding-bottom: 35px;
                }

                .rgu-cv5-milestone-content {
                    padding: 0 30px 25px;
                }

                .rgu-cv5-milestone-content h2 {
                    font-size: 30px;
                }

                .rgu-cv5-milestone-content p {
                    font-size: 19px;
                    line-height: 1.7;
                }

                .rgu-cv5-milestone-marquee {
                    padding-left: 30px;
                    padding-right: 30px;
                }

                .rgu-cv5-milestone-item {
                    width: 360px;
                    height: 300px;
                }

            }


            /* =========================================
       MOBILE
    ========================================= */

            @media (max-width: 767px) {

                .rgu-cv5-milestone {
                    padding: 10px 0 30px;
                }

                .rgu-cv5-milestone-content {
                    padding: 0 20px 20px;
                }

                .rgu-cv5-milestone-content h2 {
                    font-size: 27px;
                    line-height: 1.35;
                }

                .rgu-cv5-milestone-content p {
                    font-size: 17px;
                    line-height: 1.7;
                    text-align: justify;
                }

                .rgu-cv5-milestone-marquee {
                    padding: 0 20px 10px;
                }

                .rgu-cv5-milestone-set {
                    gap: 15px;
                    padding-right: 15px;
                }

                .rgu-cv5-milestone-item {
                    width: 300px;
                    height: 250px;

                    border-radius: 7px;
                }

            }
        </style>

        <!-- =========================================
         RGU CV5 - GLIMPSE OF FIFTH CONVOCATION
    ========================================= -->

        <section class="rgu-cv5-glimpse container">

            <div class="rgu-cv5-glimpse-content">

                <h2>
                    Glimpse of <span>Fifth Convocation</span>
                </h2>

                <p>
                    RGU continues to set new benchmarks in higher education, research, and holistic development.
                    The university now has over 8500 students, including international students from 13 countries.
                    It has over 500 faculty members and more than 130 academic programs under 24 Schools of Studies.
                    The eco-friendly campus, world-class infrastructure, and advanced learning facilities offer an
                    enriching academic environment that blends rigorous scholarship with hands-on industry exposure.
                </p>

            </div>


            <!-- =========================================
             IMAGE GRID
        ========================================== -->

            <div class="container-fluid rgu-cv5-glimpse-gallery">

                <div class="row g-4">

                    <!-- IMAGE 1 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/1.jpeg" alt="Fifth Convocation">
                        </div>
                    </div>

                    <!-- IMAGE 2 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/2.jpeg" alt="Fifth Convocation">
                        </div>
                    </div>

                    <!-- IMAGE 3 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/3.jpeg" alt="Fifth Convocation">
                        </div>
                    </div>

                    <!-- IMAGE 4 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/4.jpeg" alt="Fifth Convocation">
                        </div>
                    </div>


                    <!-- IMAGE 5 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/5.jpeg" alt="Fifth Convocation">
                        </div>
                    </div>

                    <!-- IMAGE 6 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/6.jpeg"
                                alt="Fifth Convocation">
                        </div>
                    </div>

                    <!-- IMAGE 7 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/7.jpeg"
                                alt="Fifth Convocation">
                        </div>
                    </div>

                    <!-- IMAGE 8 -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rgu-cv5-glimpse-card">
                            <img src="https://www.rgu.ac/mobile-assets/convocation/glimpse/8.jpeg"
                                alt="Fifth Convocation">
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <style>
            /* =========================================
       RGU CV5 - GLIMPSE OF FIFTH CONVOCATION
    ========================================= */

            .rgu-cv5-glimpse {
                width: 100%;
                padding: 20px 0 45px;
            }

            /* =========================================
       HEADING + DESCRIPTION
    ========================================= */

            .rgu-cv5-glimpse-content {
                width: 100%;
                padding: 0 14px 18px;
            }

            .rgu-cv5-glimpse-content h2 {
                margin: 0 0 10px;

                color: #24477f;

                font-family: "Times New Roman", serif;
                font-size: 34px;
                font-weight: 700;
                line-height: 1.3;
            }

            .rgu-cv5-glimpse-content h2 span {
                color: #ef991f;
            }

            .rgu-cv5-glimpse-content p {
                margin: 0;

                color: #24477f;

                font-family: "Times New Roman", serif;
                font-size: 18px;
                line-height: 1.5;

                text-align: justify;
            }


            /* =========================================
       IMAGE GRID
    ========================================= */

            .rgu-cv5-glimpse-gallery {
                padding-left: 18px;
                padding-right: 18px;
            }

            .rgu-cv5-glimpse-card {
                width: 100%;

                aspect-ratio: 16 / 9;

                overflow: hidden;

                border-radius: 9px;

                background: #fff;

                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
            }

            .rgu-cv5-glimpse-card img {
                width: 100%;
                height: 100%;

                display: block;

                object-fit: cover;

                transition: transform 0.35s ease;
            }


            /* =========================================
       SUBTLE HOVER
    ========================================= */

            .rgu-cv5-glimpse-card:hover img {
                transform: scale(1.025);
            }


            /* =========================================
       TABLET
    ========================================= */

            @media (max-width: 991px) {

                .rgu-cv5-glimpse {
                    padding-bottom: 35px;
                }

                .rgu-cv5-glimpse-content {
                    padding: 0 30px 20px;
                }

                .rgu-cv5-glimpse-content h2 {
                    font-size: 30px;
                }

                .rgu-cv5-glimpse-content p {
                    font-size: 20px;
                    line-height: 1.7;
                }

                .rgu-cv5-glimpse-gallery {
                    padding-left: 30px;
                    padding-right: 30px;
                }

            }


            /* =========================================
       MOBILE
    ========================================= */

            @media (max-width: 767px) {

                .rgu-cv5-glimpse {
                    padding: 15px 0 30px;
                }

                .rgu-cv5-glimpse-content {
                    padding: 0 20px 20px;
                }

                .rgu-cv5-glimpse-content h2 {
                    font-size: 27px;
                }

                .rgu-cv5-glimpse-content p {
                    font-size: 17px;
                    line-height: 1.7;
                }

                .rgu-cv5-glimpse-gallery {
                    padding-left: 20px;
                    padding-right: 20px;
                }

                .rgu-cv5-glimpse-card {
                    aspect-ratio: 16 / 9;
                }

            }
        </style>


    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            /*=========================================
                Infinite Slider
            =========================================*/

            const sliderTrack = document.querySelector(".convocation-slider-track");
            const firstSet = document.querySelector(".convocation-slider-set");

            if (sliderTrack && firstSet && sliderTrack.children.length === 1) {
                sliderTrack.appendChild(firstSet.cloneNode(true));
            }


            /*=========================================
                Slider Lightbox
            =========================================*/

            const sliderLightbox = document.getElementById("convocationLightbox");
            const sliderImage = document.getElementById("convocationLightboxImage");

            const zoomIn = document.getElementById("zoomInBtn");
            const zoomOut = document.getElementById("zoomOutBtn");

            const closeSlider = document.querySelector(".convocation-lightbox-close");

            let scale = 1;
            let panX = 0;
            let panY = 0;

            let dragging = false;

            let startX = 0;
            let startY = 0;


            function updateSliderImage() {

                sliderImage.style.transform =
                    `translate(calc(-50% + ${panX}px), calc(-50% + ${panY}px)) scale(${scale})`;

            }


            window.openLightbox = function(src) {

                sliderLightbox.style.display = "block";

                sliderImage.src = src;

                scale = 1;

                panX = 0;

                panY = 0;

                updateSliderImage();

            }


            function closeLightbox() {

                sliderLightbox.style.display = "none";

            }


            closeSlider.addEventListener("click", closeLightbox);

            sliderLightbox.addEventListener("click", function(e) {

                if (e.target === sliderLightbox) {

                    closeLightbox();

                }

            });


            zoomIn.addEventListener("click", function(e) {

                e.stopPropagation();

                scale += 0.2;

                updateSliderImage();

            });


            zoomOut.addEventListener("click", function(e) {

                e.stopPropagation();

                scale = Math.max(1, scale - 0.2);

                if (scale === 1) {

                    panX = 0;

                    panY = 0;

                }

                updateSliderImage();

            });


            sliderImage.addEventListener("mousedown", function(e) {

                if (scale <= 1) return;

                dragging = true;

                startX = e.clientX - panX;

                startY = e.clientY - panY;

                sliderImage.style.cursor = "grabbing";

            });


            window.addEventListener("mousemove", function(e) {

                if (!dragging) return;

                panX = e.clientX - startX;

                panY = e.clientY - startY;

                updateSliderImage();

            });


            window.addEventListener("mouseup", function() {

                dragging = false;

                sliderImage.style.cursor = "grab";

            });


            /*=========================================
                Gallery Lightbox
            =========================================*/

            const galleryItems = document.querySelectorAll(".convocation-gallery-item");

            const galleryLightbox = document.getElementById("convocationGalleryLightbox");

            const galleryImage = document.getElementById("convocationGalleryImage");

            const galleryClose = document.querySelector(".convocation-gallery-close");


            galleryItems.forEach(function(item) {

                item.addEventListener("click", function() {

                    galleryImage.src = this.dataset.image;

                    galleryLightbox.classList.add("active");

                });

            });


            function closeGallery() {

                galleryLightbox.classList.remove("active");

                galleryImage.src = "";

            }


            galleryClose.addEventListener("click", closeGallery);


            galleryLightbox.addEventListener("click", function(e) {

                if (e.target === galleryLightbox) {

                    closeGallery();

                }

            });


            document.addEventListener("keydown", function(e) {

                if (e.key === "Escape") {

                    closeLightbox();

                    closeGallery();

                }

            });

        });
    </script>
@endsection
