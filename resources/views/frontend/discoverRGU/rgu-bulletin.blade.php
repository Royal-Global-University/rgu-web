@extends('frontend/new-master')
@section('content')
    <style>
        /* ================= PREFACE SECTION (ISOLATED) ================= */

        .pf-sec {
            background: #EEF2F6;
            padding: 8rem 2rem 0rem 2rem;

        }

        .pf-container {
            max-width: 1300px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 6rem;
            align-items: center;
        }

        /* IMAGE */
        .pf-img-wrap {
            border-radius: 2rem;
            overflow: hidden;
        }

        .pf-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* CONTENT */
        .pf-content {
            color: #2f4b77;
        }

        /* TITLE */
        .pf-title {
            font-family: "Playfair Display", serif;
            font-size: 5rem;
            margin-bottom: 2rem;
            letter-spacing: 1px;
        }

        /* TEXT */
        .pf-text {
            font-size: 1.7rem;
            line-height: 1.9;
            color: #4a4a4a;
            text-align: justify;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {
            .pf-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .pf-title {
                font-size: 3.2rem;
                text-align: center;
            }

            .pf-content {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .pf-sec {
                padding: 5rem 1.5rem;
            }

            .pf-title {
                font-size: 2.6rem;
            }

            .pf-text {
                font-size: 1.5rem;
            }
        }


        /* ================= DG SECTION ================= */
        .dg-sec {
            padding: 6rem 2rem;
            background: #27467A;
        }

        /* ================= LAYOUT ================= */
        .dg-container {
            max-width: 1350px;
            margin: auto;
            display: grid;
            grid-template-columns: 200px 1fr 200px;
            gap: 2rem;
        }

        .dg-col {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* MAIN GRID */
        .dg-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            grid-auto-flow: dense;
        }

        /* ================= CARD ================= */
        .dg-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: #eef2f7;
            color: #2f4b77;
            /* padding: 2rem 1.2rem; */
            border-radius: 14px;
            font-size: 1.4rem;
            font-weight: 600;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            min-height: 140px;
            transition: all 0.3s ease;
        }

        /* ICON */
        .dg-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #0000000f;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .dg-icon img {
            width: 36px;
            height: 36px;
            object-fit: contain;
        }

        /* TEXT */
        .dg-card span {
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* HOVER */
        .dg-card:hover {
            background: #E15825;
            color: #fff;
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
        }

        .dg-card::after {
            content: "↗";
            position: absolute;
            bottom: 10px;
            right: 12px;
            opacity: 0;
            transition: 0.3s;
        }

        .dg-card:hover::after {
            opacity: 1;
            transform: translate(4px, -4px);
        }

        /* ================= IMAGE CARD ================= */
        .dg-image {
            grid-column: span 2;
            border-radius: 14px;
            overflow: hidden;
            height: 240px;
        }

        .dg-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dg-image:hover img {
            transform: scale(1.05);
        }

        /* ================= TABLET ================= */

        @media (max-width: 1100px) {

            .dg-container {
                /* Make the master container the 2-column grid */
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .dg-col,
            .dg-grid {
                /* 🔥 MAGIC FIX: Makes wrapper divs invisible to the grid layout, letting cards flow together */
                display: contents;
            }

            .dg-image {
                grid-column: span 2;
                height: 200px;
            }
        }

        /* ================= MOBILE ================= */

        @media (max-width: 600px) {

            .dg-sec {
                padding: 4rem 1.5rem;
            }

            .dg-container {
                gap: 12px;
                /* Tighter gap for mobile */
            }

            .dg-card {
                min-height: 130px;
                height: auto;
                padding: 1.2rem;
                font-size: 1.2rem;
            }

            .dg-icon {
                width: 48px;
                height: 48px;
            }

            .dg-icon img {
                width: 28px;
                height: 28px;
            }

            .dg-image {
                grid-column: span 2;
                height: 160px;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">RGU BULLETIN</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / About the University / RGU BULLETIN
            </div>
        </div>

    </section>

    <section class="rgu-bulletin-section">

        <div class="rgu-bulletin-container">


            <!-- Bulletin Cards -->
            <div class="rgu-bulletin-cards">

                <!-- Bulletin 01 -->
                <a href="/new-web/assets/news-letter/Jan-Jun 2026, 27 July-FINAL.pdf" class="rgu-bulletin-card"
                    target="_blank" rel="noopener">

                    <div class="rgu-bulletin-image-wrap">
                        <img src="/new-web/assets/news-letter/newsletter-3.png" alt="RGU Bulletin 01"
                            class="rgu-bulletin-image">

                        <div class="rgu-bulletin-overlay">
                            <div class="rgu-bulletin-view">
                                <span class="rgu-bulletin-view-icon">↗</span>
                                <span>View Bulletin</span>
                            </div>
                        </div>
                    </div>

                </a>


                <!-- Bulletin 02 -->
                <a href="/new-web/assets/news-letter/July - Dec 2025.pdf" class="rgu-bulletin-card" target="_blank"
                    rel="noopener">

                    <div class="rgu-bulletin-image-wrap">
                        <img src="/new-web/assets/news-letter/newsletter-2.jpg" alt="RGU Newsletter 02"
                            class="rgu-bulletin-image">

                        <div class="rgu-bulletin-overlay">
                            <div class="rgu-bulletin-view">
                                <span class="rgu-bulletin-view-icon">↗</span>
                                <span>View Bulletin</span>
                            </div>
                        </div>
                    </div>

                </a>


                <!-- Bulletin 03 -->
                <a href="/new-web/assets/news-letter/MAY-JULY 2025.pdf" class="rgu-bulletin-card" target="_blank"
                    rel="noopener">

                    <div class="rgu-bulletin-image-wrap">
                        <img src="/new-web/assets/news-letter/Newsletter-1.png" alt="RGU Bulletin 03"
                            class="rgu-bulletin-image">

                        <div class="rgu-bulletin-overlay">
                            <div class="rgu-bulletin-view">
                                <span class="rgu-bulletin-view-icon">↗</span>
                                <span>View Bulletin</span>
                            </div>
                        </div>
                    </div>

                </a>

            </div>

        </div>

    </section>


    <style>
        /* ========================================================================
       RGU BULLETIN SECTION
       ======================================================================== */

        .rgu-bulletin-section {
            width: 100%;
            padding: 85px 25px;
            background: #F8FAFF;
            overflow: hidden;
            box-sizing: border-box;
        }


        /* ========================================================================
       CONTAINER
       ======================================================================== */

        .rgu-bulletin-container {
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
            box-sizing: border-box;
        }


        /* ========================================================================
       HEADING
       ======================================================================== */

        .rgu-bulletin-heading {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25px;
            margin-bottom: 50px;
        }

        .rgu-bulletin-heading h2 {
            margin: 0;
            padding: 0;
            color: #20315F;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 46px;
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -1px;
            text-align: center;
        }


        /* Decorative lines */

        .rgu-bulletin-heading-line {
            display: block;
            width: 70px;
            height: 1px;
            background: #20315F;
            opacity: 0.45;
        }


        /* ========================================================================
       BULLETIN CARDS
       ======================================================================== */

        .rgu-bulletin-cards {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 32px;
            width: 100%;
        }


        /* Individual clickable card */

        .rgu-bulletin-card {
            display: block;
            width: calc((100% - 64px) / 3);
            max-width: 360px;
            text-decoration: none;
            border-radius: 12px;
            overflow: hidden;
            background: #ffffff;

            /* Smooth hover */
            transform: translateY(0);
            box-shadow: 0 8px 25px rgba(32, 49, 95, 0.10);

            transition:
                transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.45s ease;

            -webkit-tap-highlight-color: transparent;
        }


        /* Card hover */

        .rgu-bulletin-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 22px 45px rgba(32, 49, 95, 0.20);
        }


        /* ========================================================================
       IMAGE WRAPPER
       ======================================================================== */

        .rgu-bulletin-image-wrap {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 5;
            overflow: hidden;
            background: #e9edf5;
        }


        /* ========================================================================
       IMAGE
       ======================================================================== */

        .rgu-bulletin-image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;

            transform: scale(1);

            transition:
                transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
        }


        /* Image zoom */

        .rgu-bulletin-card:hover .rgu-bulletin-image {
            transform: scale(1.06);
        }


        /* ========================================================================
       HOVER OVERLAY
       ======================================================================== */

        .rgu-bulletin-overlay {
            position: absolute;
            inset: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(20, 32, 61, 0);

            opacity: 0;

            transition:
                background 0.4s ease,
                opacity 0.4s ease;
        }


        /* Overlay on hover */

        .rgu-bulletin-card:hover .rgu-bulletin-overlay {
            background: rgba(20, 32, 61, 0.48);
            opacity: 1;
        }


        /* ========================================================================
       VIEW BULLETIN BUTTON
       ======================================================================== */

        .rgu-bulletin-view {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 13px 21px;

            color: #ffffff;
            background: rgba(255, 255, 255, 0.16);

            border: 1px solid rgba(255, 255, 255, 0.65);
            border-radius: 50px;

            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.3px;

            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);

            transform: translateY(12px);
            transition:
                transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                background 0.3s ease;
        }


        /* Button animation */

        .rgu-bulletin-card:hover .rgu-bulletin-view {
            transform: translateY(0);
        }


        /* Button hover */

        .rgu-bulletin-card:hover .rgu-bulletin-view:hover {
            background: rgba(255, 255, 255, 0.28);
        }


        /* Arrow icon */

        .rgu-bulletin-view-icon {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 24px;
            height: 24px;

            font-size: 17px;
            line-height: 1;

            border: 1px solid rgba(255, 255, 255, 0.7);
            border-radius: 50%;
        }


        /* ========================================================================
       RESPONSIVE — TABLET
       ======================================================================== */

        @media (max-width: 900px) {

            .rgu-bulletin-section {
                padding: 70px 20px;
            }

            .rgu-bulletin-heading {
                margin-bottom: 40px;
            }

            .rgu-bulletin-heading h2 {
                font-size: 40px;
            }

            .rgu-bulletin-heading-line {
                width: 50px;
            }

            .rgu-bulletin-cards {
                gap: 22px;
            }

            .rgu-bulletin-card {
                width: calc((100% - 44px) / 3);
                border-radius: 10px;
            }

        }


        /* ========================================================================
       RESPONSIVE — MOBILE
       ======================================================================== */

        @media (max-width: 650px) {

            .rgu-bulletin-section {
                padding: 55px 18px;
            }

            .rgu-bulletin-heading {
                gap: 14px;
                margin-bottom: 32px;
            }

            .rgu-bulletin-heading h2 {
                font-size: 32px;
                letter-spacing: -0.5px;
            }

            .rgu-bulletin-heading-line {
                width: 28px;
            }

            .rgu-bulletin-cards {
                gap: 18px;
                flex-direction: column;
                align-items: center;
            }

            .rgu-bulletin-card {
                width: 100%;
                max-width: 360px;
            }

        }


        /* ========================================================================
       SMALL MOBILE
       ======================================================================== */

        @media (max-width: 400px) {

            .rgu-bulletin-section {
                padding: 45px 15px;
            }

            .rgu-bulletin-heading {
                gap: 10px;
            }

            .rgu-bulletin-heading h2 {
                font-size: 28px;
            }

            .rgu-bulletin-heading-line {
                width: 20px;
            }

        }
    </style>


    <script>
        (function() {

            "use strict";

            /*
             * RGU BULLETIN
             * No global variables or functions are created.
             */

            const rguBulletinCards =
                document.querySelectorAll(".rgu-bulletin-card");

            if (!rguBulletinCards.length) return;


            /* Add keyboard accessibility */

            rguBulletinCards.forEach(function(card) {

                card.addEventListener("keydown", function(event) {

                    if (event.key === "Enter" || event.key === " ") {

                        event.preventDefault();
                        card.click();

                    }

                });

            });

        })();
    </script>
@endsection
