@extends('frontend.master')
@section('content')
    <style>
        /* ================= GLOBAL ================= */

        body {
            font-family: 'Times New Roman', Times, serif;
            background: #FFF7F0;
            color: #1F1F1F;
            position: relative;
            overflow-x: hidden;
        }

        /* ================= MUSICAL BACKGROUND ANIMATION ================= */

        #musical-background {
            position: fixed;
            /* Stays in place while scrolling */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            /* Mouse clicks pass through */
            z-index: 0;
            /* Level 0: On top of body background color */
            overflow: hidden;
        }

        .music-note {
            position: absolute;
            bottom: -100px;
            opacity: 0;
            animation: floatUp linear forwards;
            font-family: 'Segoe UI Symbol', 'Arial Unicode MS', sans-serif;
            /* Supports complex symbols */
            user-select: none;
        }

        /* Keyframes: Rise up, sway, and rotate slowly */
        @keyframes floatUp {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.4;
                /* Low opacity so it remains background-style */
            }

            50% {
                transform: translateY(-50vh) translateX(40px) rotate(15deg);
                opacity: 0.4;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                transform: translateY(-110vh) translateX(-20px) rotate(30deg);
                opacity: 0;
            }
        }

        /* Ensure Content sits ON TOP of the music notes */
        section {
            position: relative;
            z-index: 2;
            /* Level 2: Content sits above notes */
        }

        /* ================= HERO SECTION ================= */

        .bhupen-hero {
            min-height: 100vh;
            background-image: url("mobile-assets/bhupen-hazarika-CFC/bg-img-web.svg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            /* Ensure hero background covers notes if desired, or let notes float behind content boxes */
        }

        .bhupen-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 30%, rgba(164, 40, 45, 0.15), transparent 40%),
                radial-gradient(circle at 80% 60%, rgba(210, 164, 92, 0.18), transparent 45%);
            z-index: -1;
            /* Within the section stacking context */
        }

        .bhupen-mobile-img {
            display: none;
            width: 100%;
        }

        .bhupen-content {
            position: relative;
            z-index: 1;

            /* Frosted glass base */
            background: rgba(255, 255, 255, 0.70);
            backdrop-filter: blur(14px) saturate(130%);
            -webkit-backdrop-filter: blur(14px) saturate(130%);

            /* Structure */
            padding: 42px;
            border-left: 6px solid #A4282D;
            border-radius: 14px;

            /* Subtle depth */
            box-shadow:
                0 8px 24px rgba(0, 0, 0, 0.08),
                inset 0 0 0 1px rgba(255, 255, 255, 0.35);
        }


        .bhupen-content h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #7A1F26;
        }

        .bhupen-content h2 {
            font-size: 2.3rem;
            font-weight: 500;
            color: #A4282D;
        }

        .bhupen-content p {
            font-size: 1.08rem;
            line-height: 1.75;
            color: #4A2F25;
        }

        /* Mobile Hero */
        @media (max-width: 767px) {
            .bhupen-hero {
                background: none;
                min-height: auto;
                display: block;
            }

            .bhupen-mobile-img {
                display: block;
            }

            .bhupen-content {
                display: none;
            }
        }

        /* ================= ABOUT SECTION ================= */

        .bhupen-about-section {
            padding: 80px 0;
        }

        .bhupen-about-text p {
            text-align: justify;
            font-size: 1.2rem;
            line-height: 1.50;
            text-align: justify;
            color: #4A2F25;
        }

        /* ================= ABOUT VIDEO ================= */

        .bhupen-about-video-wrap {
            padding: 14px;
            border-radius: 18px;
            background: linear-gradient(135deg, #7A1F26, #9a3038);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 2;
        }

        .bhupen-about-video-wrap video {
            width: 100%;
            aspect-ratio: 16 / 9;
            /* Forces landscape */
            object-fit: cover;
            border-radius: 14px;
            background: #000;
            display: block;
        }


        /* ================= AIM · VISION · MISSION ================= */

        .bhupen-avm-section {
            padding: 80px 0;
            background: rgba(244, 230, 218, 0.85);
            /* Semi-transparent so notes fade behind it */
            backdrop-filter: blur(2px);
        }

        .bhupen-avm-block {
            background: #FFFFFF;
            padding: 40px;
            border-left: 6px solid #7A1F26;
            margin-bottom: 40px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
            position: relative;
            z-index: 2;
        }

        .bhupen-avm-block h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #7A1F26;
            margin-bottom: 20px;
        }

        .bhupen-avm-block p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #4A2F25;
        }

        .bhupen-avm-block ul {
            list-style: none;
            padding-left: 0;
        }

        .bhupen-avm-block ul li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 14px;
            font-size: 1.03rem;
            color: #4A2F25;
        }

        .bhupen-avm-block ul li::before {
            content: "◆";
            position: absolute;
            left: 0;
            top: 2px;
            font-size: 0.9rem;
            color: #D2A45C;
        }

        /* ================= MEMBERS TABLE ================= */

        .bhupen-member-section {
            padding: 80px 0;
        }

        .bhupen-event-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #7A1F26;
            text-align: center;
            margin-bottom: 30px;
        }

        .bhupen-event-table-wrap {
            background: #FFFFFF;
            padding: 30px;
            border-left: 6px solid #A4282D;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
            overflow-x: auto;
            position: relative;
            z-index: 2;
        }

        .bhupen-event-table {
            width: 100%;
            min-width: 800px;
            border-collapse: collapse;
        }

        .bhupen-event-table thead th {
            background: #7A1F26;
            color: #FFFFFF;
            padding: 14px 12px;
            font-weight: 600;
            text-align: left;
        }

        .bhupen-event-table tbody td {
            padding: 14px 12px;
            font-size: 0.98rem;
            color: #1F1F1F;
            border-bottom: 1px solid #E6D3C2;
        }

        .bhupen-event-table tbody td.sl-no {
            text-align: center;
            font-weight: 600;
        }

        /* ================= GALLERY ================= */

        .bhupen-gallery-section {
            padding: 80px 0;
        }

        .bhupen-gallery-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #7A1F26;
            text-align: center;
            margin-bottom: 40px;
        }

        .bhupen-gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .bhupen-gallery-item {
            background: #FFFFFF;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.15);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            position: relative;
            z-index: 2;
        }

        .bhupen-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .bhupen-gallery-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 28px 60px rgba(0, 0, 0, 0.25);
        }

        .bhupen-gallery-item:hover img {
            transform: scale(1.06);
        }

        /* Responsive Gallery */
        @media (max-width: 991px) {
            .bhupen-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }


        }

        @media (max-width: 575px) {
            .bhupen-gallery-grid {
                grid-template-columns: 1fr;
            }


        }
    </style>

    <style>
        /* ================= EVENTS CAROUSEL SECTION ================= */

        .bhupen-events-carousel-section {
            padding: 80px 0;
            background: rgba(244, 230, 218, 0.6);
            position: relative;
            z-index: 1;
        }

        .bhupen-events-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #7A1F26;
            text-align: center;
            margin-bottom: 40px;
        }

        /* ---------- CAROUSEL OVERFLOW FIX ---------- */

        .bhupen-events-carousel,
        .bhupen-events-carousel .carousel-inner,
        .bhupen-events-carousel .carousel-item {
            overflow: visible !important;
        }

        .bhupen-events-carousel .row {
            padding: 25px 0;
        }

        /* ---------- EVENT CARD ---------- */

        .bhupen-event-card {
            background: #FFFFFF;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .bhupen-event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.25);
        }

        /* ---------- EVENT IMAGE ---------- */

        .bhupen-event-card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }

        /* ---------- CARD BODY ---------- */

        .bhupen-event-card-body {
            padding: 28px 30px 32px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        /* ---------- TITLE ---------- */

        .bhupen-event-card-body h4 {
            font-size: 1.45rem;
            font-weight: 700;
            color: #7A1F26;
            margin-bottom: 14px;
        }

        /* ---------- TEXT LIMIT ---------- */

        .bhupen-event-card-body p {
            position: relative;
            font-size: 1rem;
            line-height: 1.65;
            color: #4A2F25;

            max-height: calc(1.65em * 4);
            overflow: hidden;
            margin-bottom: 20px;
            flex-shrink: 0;
        }

        /* Soft fade instead of ellipsis */

        .bhupen-event-card-body p::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2.2em;
            background: linear-gradient(to bottom,
                    rgba(255, 255, 255, 0),
                    #ffffff);
            pointer-events: none;
        }

        /* ---------- READ MORE BUTTON (FIXED AT BOTTOM) ---------- */

        .bhupen-event-btn {
            margin-top: auto;
            /* 🔥 FIXES BUTTON TO BOTTOM */
            align-self: flex-start;
            padding: 11px 26px;
            background: #A4282D;
            color: #FFFFFF;
            text-decoration: none;
            font-size: 0.95rem;
            border-radius: 30px;
            transition: background 0.3s ease, transform 0.25s ease;
        }

        .bhupen-event-btn:hover {
            background: #7A1F26;
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        /* ---------- HIDE BOOTSTRAP DEFAULT ARROWS ---------- */

        .bhupen-events-carousel .carousel-control-prev,
        .bhupen-events-carousel .carousel-control-next {
            display: none;
        }

        /* ---------- CUSTOM CONTROLS (BELOW CARDS) ---------- */

        .bhupen-carousel-controls {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin-top: 35px;
        }

        .bhupen-carousel-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #FFFFFF;
            border: 2px solid #A4282D;
            color: #A4282D;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.15);
        }

        .bhupen-carousel-btn:hover {
            background: #A4282D;
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        /* ---------- MOBILE: ONE CARD PER SLIDE ---------- */

        @media (max-width: 575px) {

            .bhupen-events-carousel .carousel-item .col-lg-4,
            .bhupen-events-carousel .carousel-item .col-md-6 {
                display: none;
            }

            .bhupen-events-carousel .carousel-item .col-lg-4:first-child,
            .bhupen-events-carousel .carousel-item .col-md-6:first-child {
                display: block;
                width: 100%;
            }

            .bhupen-event-card {
                max-width: 92%;
                margin: 0 auto;
            }

            .bhupen-event-card-body p {
                max-height: calc(1.65em * 3);
            }

            .bhupen-events-carousel-section {
                padding: 60px 0;
            }
        }
    </style>

    <style>
        /*
    * 1. Setup the main container and animation logic (Identical to list version)
    */
        .endless-scroll-container {
            margin: auto;
            width: 95%;
            overflow: hidden;
            padding: 10px 0;
            border-bottom: 2px solid #7A1F26;
        }

        .scroll-track-wrapper {
            display: flex;
            width: fit-content;
            animation: scroll-movement 100s linear infinite;
        }

        .scroll-track-wrapper:hover {
            animation-play-state: paused;
        }

        /*
    * 2. Style the Image Frames and Images
    */
        .scroll-content-images {
            display: flex;
        }

        .slider-image-frame {
            width: 600px;
            height: auto;
            margin-right: 20px;
            flex-shrink: 0;
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .scroller-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            overflow: hidden;
            /* Changed from auto to hidden to prevent scrollbars */
        }

        .lightbox-content {
            margin: auto;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
            /* Initial state */
            max-width: 90%;
            max-height: 90%;
            width: auto;
            height: auto;
            object-fit: contain;
            animation-name: zoom;
            animation-duration: 0.6s;
            cursor: grab;
            /* NEW: Indicate it's grabbable */
            transition: transform 0.2s ease-out;
            /* NEW: Smooth transitions for zoom/pan */
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            z-index: 1002;
            /* Ensure it's on top of controls */
        }

        .close-btn:hover,
        .close-btn:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* NEW: Styles for Zoom Controls */
        .lightbox-controls {
            position: absolute;
            top: 25px;
            right: 90px;
            /* Position next to the close button */
            z-index: 1001;
            display: flex;
            gap: 10px;
        }

        .lightbox-controls button {
            background-color: rgba(30, 30, 30, 0.7);
            border: 1px solid #fff;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            width: 40px;
            height: 40px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            line-height: 1;
        }

        .lightbox-controls button:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }


        @keyframes zoom {
            from {
                transform: translate(-50%, -50%) scale(0.1);
            }

            to {
                transform: translate(-50%, -50%) scale(1);
            }
        }

        /*
    * 3. Define the Keyframes for the Movement
    */
        @keyframes scroll-movement {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>

    <style>
        /* ================= AVM IMAGE RESPONSIVE ================= */

        .bhupen-avm-image-section {
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .avm-img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Hide mobile image by default */
        .avm-mobile {
            display: none;
        }

        /* Mobile view */
        @media (max-width: 767px) {
            .avm-desktop {
                display: none;
            }

            .avm-mobile {
                display: block;
            }
        }
    </style>

    <div class="mobile">
        @include('frontend/components/mobileheader')
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <div id="musical-background"></div>

    <section class="bhupen-hero">
        <img src="mobile-assets/bhupen-hazarika-CFC/bg-img-mobile.svg" class="bhupen-mobile-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bhupen-content">
                        <h1>Dr. Bhupen Hazarika</h1>
                        <h2>Centre for Creativity</h2>
                        <p style="padding-top:20px;text-align:justify;">
                            Dr. Bhupen Hazarika Centre for Creativity, conceived as an interdisciplinary academic and
                            creative hub of
                            The Assam Royal Global University, is dedicated to the systematic study of the creativity
                            embodied in the
                            life, works, and intellectual legacy of Dr. Bhupen Hazarika, one of India’s most influential
                            cultural
                            icons, widely known as the the Bard of Brahmaputra, whose timeless creations have illuminated
                            the pathways
                            of Assam’s and Northeast India’s social and cultural life in the modern times, and whose
                            contributions
                            continue to resonate till the present day and age.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bhupen-about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 bhupen-about-text">
                    <p>
                        Anchored in this foundation, the DBHCC extends its scholarly inquiry to diverse traditions of
                        creativity
                        across Assam and Northeast India as well as beyond, engaging with exemplary figures from literature,
                        music,
                        visual arts, science, philosophy, and society. The core objective is to distil, interpret, and
                        meaningfully
                        transfer ideas of creativity from these iconic contributors into varied domains of academia,
                        pedagogy, and
                        research, thereby fostering innovation, critical thinking, and interdisciplinary dialogue.
                        Simultaneously,
                        the Centre is committed to cultivating awareness and advancing informed discourse on the
                        preservation,
                        documentation, and continued relevance of the cultural heritage of Northeast India, positioning
                        creativity
                        as both an academic pursuit and a living cultural practice. The Centre is chaired by Prof. Amarjyoti
                        Choudhury, Professor Emeritus, whose academic leadership guides its intellectual vision and
                        scholarly
                        direction.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="bhupen-about-video-wrap">
                        <video src="mobile-assets/bhupen-hazarika-CFC/video/vid.mp4" autoplay muted loop playsinline
                            preload="metadata">
                        </video>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- AVM IMAGE SECTION -->
    <section class="bhupen-avm-image-section">
        <!-- Desktop / Tablet Image -->
        <img src="mobile-assets/bhupen-hazarika-CFC/avm.svg" alt="Aim Vision Mission" class="avm-img avm-desktop">

        <!-- Mobile Image -->
        <img src="mobile-assets/bhupen-hazarika-CFC/avm-mobile.svg" alt="Aim Vision Mission" class="avm-img avm-mobile">
    </section>
    <!-- AVM IMAGE SECTION -->

    <!-- <section class="bhupen-avm-section">
        <div class="container">
          <div class="bhupen-avm-block">
            <h3>Aims</h3>
            <ul>
              <li>Draw inspiration from Dr. Bhupen Hazarika and other iconic creative minds to foster sustainable
                creativity.</li>
              <li>Resurrect and channel the artistry and ideas of lost art forms.</li>
              <li>Encourage and facilitate creative expression across all Departments and Centres of the University.</li>
            </ul>
          </div>

          <div class="bhupen-avm-block">
            <h3>Vision</h3>
            <ul>
              <li>Dr Bhupen Hazarika Centre for Creativity envisions to celebrate and nurture creativity in all domains of
                knowledge and all aspects of life.</li>
            </ul>

            <h3>Mission</h3>
            <p>
              Guided by the idea of Asta Marga, the eightfold path of creativity, the Centre works to:
            </p>
            <ul>
              <li>Study and share the creative ideas and life journey of Dr. Bhupen Hazarika and other figures of national
                importance.</li>
              <li>Encourage creative thinking in teaching-learning pedagogy.</li>
              <li>Organise workshops, lecture-demonstrations, seminars, and cultural programmes.</li>
              <li>Conduct academic and cultural events to commemorate important occasions.</li>
              <li>Introduce courses that help students understand creativity across disciplines.</li>
              <li>Develop and preserve audio-visual and digital archival resources.</li>
              <li>Integrate creativity organically into education, research, and community life.</li>
            </ul>
          </div>

        </div>
      </section> -->

    <!-- <section class="bhupen-gallery-section">
        <div class="container">

          <h2 class="bhupen-gallery-title">Xudhakantha Museum at RGU</h2>

          <div class="bhupen-gallery-grid">
            <div class="bhupen-gallery-item">
              <img src="mobile-assets/bhupen-hazarika-CFC/gallery/1.png" alt="">
            </div>
            <div class="bhupen-gallery-item">
              <img src="mobile-assets/bhupen-hazarika-CFC/gallery/2.png" alt="">
            </div>
            <div class="bhupen-gallery-item">
              <img src="mobile-assets/bhupen-hazarika-CFC/gallery/3.png" alt="">
            </div>
            <div class="bhupen-gallery-item">
              <img src="mobile-assets/bhupen-hazarika-CFC/gallery/4.png" alt="">
            </div>
            <div class="bhupen-gallery-item">
              <img src="mobile-assets/bhupen-hazarika-CFC/gallery/5.png" alt="">
            </div>
            <div class="bhupen-gallery-item">
              <img src="mobile-assets/bhupen-hazarika-CFC/gallery/6.png" alt="">
            </div>
          </div>

        </div>
      </section> -->

    <!-- Scopus Publication  -->
    <section style="margin-bottom: 30px;">
        <div class="endless-scroll-container" style="margin-top: 30px;">

            <h2
                style="color: #7A1F26; font-weight: 600; font-size: 35px; padding-top: 25px; padding-bottom: 30px; text-align: center;">
                Xudhakantha Museum at RGU

            </h2>

            <div class="scroll-track-wrapper">
                <div class="scroll-content-images unique-set-alpha">
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/1.png" alt="Image 1" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/2.png" alt="Image 2" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/3.png" alt="Image 3" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/4.png" alt="Image 4" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/5.png" alt="Image 4" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/6.png" alt="Image 4" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>

                </div>
                <div class="scroll-content-images unique-set-beta">
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/1.png" alt="Image 1" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/2.png" alt="Image 2" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/3.png" alt="Image 3" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/4.png" alt="Image 4" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/5.png" alt="Image 4" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/6.png" alt="Image 4" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>

                </div>
            </div>

        </div>

        <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
            <span class="close-btn">&times;</span>

            <div class="lightbox-controls">
                <button id="zoom-in" title="Zoom In">+</button>
                <button id="zoom-out" title="Zoom Out">-</button>
            </div>

            <img class="lightbox-content" id="lightbox-img" src="" alt="">
        </div>

    </section>
    <!-- Scopus Publication  -->

    <section class="bhupen-events-carousel-section">
        <div class="container">

            <h2 class="bhupen-events-title">Events & Programmes</h2>

            <div id="bhupenEventsCarousel" class="carousel slide bhupen-events-carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://www.rgu.ac/mobile-assets/media-corner/news4/Prof.%20Amarjyoti%20Choudhury%20recites%20%20%E2%80%9CEta%20Gaan%20Xex%20Hol,%E2%80%9D%20before%20joining%20as%20Chair%20of%20%E2%80%98Dr%20Bhupen%20Hazarika%20Centre%20for%20Creativity%E2%80%99%20at%20RGU.jpg"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Association of Prof. Amarjyoti Choudhury, as the Chair of Dr. Bhupen Hazarika
                                            Centre for
                                            Creativity</h4>
                                        <p>
                                            This historic announcement comes ahead of the birth centenary celebrations of
                                            Dr. Bhupen Hazarika,
                                            Assam’s most iconic cultural ambassador.
                                        </p>
                                        <a target="_blank"
                                            href="https://www.pratidintime.com/education/a-new-era-of-creative-education-begins-at-rgu-with-prof-amarjyoti-choudhury-at-the-helm-9331878"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="mobile-assets/bhupen-hazarika-CFC/events/3.png" alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Rabha Divas celebration under the aegis of the centre</h4>
                                        <p>
                                            The Assam Royal Global University (RGU) observed Rabha Divas today with a
                                            glowing tribute to
                                            Kalaguru Bishnu Prasad Rabha, the legendary cultural stalwart of Assam, marking
                                            his 56th death
                                            anniversary.
                                        </p>
                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2025/06/20/kalaguru-was-an-extraordinary-teacher-prof-amarjyoti-choudhury/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="bhupen-event-card">
                                    <img src="mobile-assets/bhupen-hazarika-CFC/events/2.png" alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Observation of the celebrated poet, Hiren Bhattacharyya, “Sugandhi Pokhilar
                                            Kobi”</h4>
                                        <p>
                                            To honour the legacy of the beloved Assamese poet Hiren
                                            Bhattacharyya, fondly remembered as ‘Sugandhi Pokhilar Kobi’, the Dr. Bhupen
                                            Hazarika
                                            Centre for Creativity, Royal Global University, organized a heartfelt
                                            commemorative
                                            programme today on his death anniversary.
                                        </p>
                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2025/07/04/sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="mobile-assets/bhupen-hazarika-CFC/events/4.png" alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Celebration of Birth Centenary with Museum inauguration and Oration inauguration
                                        </h4>
                                        <p>
                                            As part of the birth centenary celebrations of Dr Bhupen Hazarika, the Dr Bhupen
                                            Hazarika Centre
                                            for Creativity at Assam Royal Global University (RGU) will inaugurate the
                                            Sudhakantha Museum on
                                            its campus and host a Centenary Oration Series from 8 to 26 September 2025.
                                        </p>
                                        <a target="_blank"
                                            href="https://eastmojo.com/news/2025/09/06/sudhakantha-museum-to-be-inaugurated-at-royal-global-university/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://i0.wp.com/eastmojo.com/wp-content/uploads/2025/11/RGU-Zubeen-book.jpg?resize=1536%2C864&ssl=1"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Observation of Birth Anniversary of Zubeen Garg, with relaese of the book
                                            “Zubeen: Twenty Songs
                                            and Seven Portraits” </h4>
                                        <p>
                                            Assam Royal Global University (RGU) on Tuesday marked the birth anniversary of
                                            singer Zubeen Garg
                                            with the launch of a commemorative book, a scholarship and a memoriam dedicated
                                            to the late
                                            cultural icon. The programme was organised by the Dr Bhupen Hazarika Centre for
                                            Creativity.Assam
                                            history books
                                        </p>
                                        <a target="_blank"
                                            href="https://eastmojo.com/assam/2025/11/18/book-and-scholarship-launched-at-rgu-in-memory-of-zubeen-garg/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://nagalandpost.com/wp-content/uploads/2025/10/Nise-Merunos-tribute-turns-Zubeens.jpg"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Nise Meruno’s tribute to Zubeen</h4>
                                        <p>
                                            Music, they say, transcends boundaries and in a moving tribute to the late music
                                            icon Zubeen Garg,
                                            internationally acclaimed concert pianist Nise Meruno from Nagaland has
                                            transformed Garg’s
                                            legendary anthem “Mayabini” into Western classical notation.
                                            The project, unveiled during TEDx Royal Global University on October 8, under
                                            the theme “Original
                                            By Nature”, marks a historic moment for Indian music bridging regional emotion
                                            with global
                                            expression. Nise Meruno, the first Indian to be honoured as a Yamaha Artist by
                                            Yamaha Pianos,
                                            Japan, described the effort as an act of reverence. “Translating Mayabini into
                                            classical notation
                                            was both a challenge and a prayer,” he said. “It carries a longing that’s hard
                                            to describe, pain
                                            and peace together.”
                                        </p>
                                        <a target="_blank"
                                            href="https://nagalandpost.com/nise-merunos-tribute-turns-zubeens-mayabini-into-a-global-melody/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- slide 3  -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://www.syllad.com/wp-content/uploads/2025/11/Bhupen.jpg"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>RGU pays melodious tribute to Xudhakantha Bhupen Hazarika, launches 2nd oration
                                            series
                                            celebrating Assamese music heritage</h4>
                                        <p>
                                            Assam Royal Global University (RGU) commemorated the 14th death anniversary of
                                            Xudhakontha Dr.
                                            Bhupen Hazarika with a stirring blend of music, reflection, and homage,
                                            reaffirming his immortal
                                            influence on Assamese culture. The event, held at the university campus, also
                                            marked the
                                            inauguration of the 2nd Oration Series under the Dr. Bhupen Hazarika Centre for
                                            Creativity,
                                            drawing a large gathering of dignitaries, faculty, and students united in
                                            remembrance of the
                                            legendary artist.
                                        </p>
                                        <a target="_blank"
                                            href="https://www.syllad.com/rgu-pays-melodious-tribute-to-xudhakantha-bhupen-hazarika-launches-2nd-oration-series-celebrating-assamese-musical-heritage/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://www.rgu.ac/mobile-assets/media-corner/news78/11.jpeg"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Life-Size Statue of Zubeen Garg Unveiled at RGU</h4>
                                        <p>
                                            The statue was inaugurated by eminent poet, translator, and literary critic
                                            Prof. Pradip Acharya,
                                            in the presence of Zubeen Garg’s sister Dr. Palme Borthakur, sculptor Lakhyajit
                                            Bora, and members
                                            of the academic community
                                        </p>
                                        <a target="_blank"
                                            href="https://dy365live.com/guwahati/a-poem-in-bronze-life-size-statue-of-zubeen-garg-unveiled-in-guwahati-10919120"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://www.rgu.ac/mobile-assets/media-corner/news82/1.jpeg" alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Silpi Diwas Celebrated by Dr Bhupen Hazarika Centre for Creativity at RGU</h4>
                                        <p>
                                            The Dr Bhupen Hazarika Centre for Creativity at The
                                            Assam Royal Global University (RGU) today celebrated Silpi Diwas with great
                                            enthusiasm
                                            through a special programme titled “Tore More Alokore Jatra”, commemorating the
                                            legacy
                                            of Rupkonwar Jyotiprasad Agarwala.
                                        </p>
                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2026/01/20/silpi-diwas-celebrated-by-dr-bhupen-hazarika-centre-for-creativity-at-rgu/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Custom Controls -->
            <div class="bhupen-carousel-controls">
                <button class="bhupen-carousel-btn" data-bs-target="#bhupenEventsCarousel"
                    data-bs-slide="prev">‹</button>

                <button class="bhupen-carousel-btn" data-bs-target="#bhupenEventsCarousel"
                    data-bs-slide="next">›</button>
            </div>

        </div>
    </section>

    <section class="bhupen-member-section">
        <div class="container">

            <h2 class="bhupen-event-title">Members / Committee List</h2>

            <div class="bhupen-event-table-wrap">
                <table class="bhupen-event-table">
                    <thead>
                        <tr>
                            <th style="width:80px;">SL No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Department</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="sl-no">1</td>
                            <td>Prof. (Dr.) Amarjyoti Choudhury</td>
                            <td>Professor Emeritus & Chair Professor</td>
                            <td>DBHCC</td>

                        </tr>
                        <tr>
                            <td class="sl-no">2</td>
                            <td>Dr. Premmi Wahengbam</td>
                            <td>Assistant Professor</td>
                            <td>Department of History</td>

                        </tr>
                        <tr>
                            <td class="sl-no">3</td>
                            <td>Dr. Trishna Changkakati</td>
                            <td>Assistant Professor</td>
                            <td>Geography & Geoinformatics</td>

                        </tr>
                        <tr>
                            <td class="sl-no">4</td>
                            <td>Mr. Sasanka Boruah</td>
                            <td>Sr. Manager (IT)</td>
                            <td>Admin</td>

                        </tr>
                        <tr>
                            <td class="sl-no">5</td>
                            <td>Dr. Stuti Goswami</td>
                            <td>Associate Professor</td>
                            <td>Royal School of Language</td>

                        </tr>
                        <tr>
                            <td class="sl-no">6</td>
                            <td>Dr. Nibir Pratim Choudhury</td>
                            <td>Assistant Professor</td>
                            <td>Royal School of Business</td>

                        </tr>
                        <tr>
                            <td class="sl-no">7</td>
                            <td>Mr. Rishikesh Duarah</td>
                            <td>Assistant Professor</td>
                            <td>Mechanical Engineering</td>

                        </tr>
                        <tr>
                            <td class="sl-no">8</td>
                            <td>Ms. Nikita Biswakarma</td>
                            <td>Teaching Assistant</td>
                            <td>Political Science & Public Administration</td>

                        </tr>
                        <tr>
                            <td class="sl-no">9</td>
                            <td>Mr. Sattyakee D’Com Bhuyan</td>
                            <td>Deputy Dean & Outreach Coordinator</td>
                            <td>Student Welfare</td>

                        </tr>
                        <tr>
                            <td class="sl-no">10</td>
                            <td>Ms. Kristi Saikia</td>
                            <td>Assistant Professor & Member Secretary</td>
                            <td>Department of Social Work</td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('musical-background');

            // Expanded set of musical symbols
            const symbols = [
                '♪', '♫', '♬', '♩', // Standard notes
                '𝄞', '𝄢', // Treble and Bass Clef
                '♭', '♮', '♯', // Flat, Natural, Sharp
                '𝅘𝅥𝅯', '𝅘𝅥𝅰', '𝅘𝅥𝅱', '𝅘𝅥𝅲' // Beamed notes
            ];

            // Theme colors with transparency handling via opacity in CSS
            const colors = ['#A4282D', '#D2A45C', '#7A1F26', '#4A2F25'];

            function createNote() {
                const note = document.createElement('div');
                note.classList.add('music-note');

                // Random symbol and color
                note.innerText = symbols[Math.floor(Math.random() * symbols.length)];
                note.style.color = colors[Math.floor(Math.random() * colors.length)];

                // Random horizontal position
                note.style.left = Math.random() * 95 + 'vw';

                // Random size (Slightly larger for background impact)
                const size = Math.random() * 40 + 20; // 20px to 60px
                note.style.fontSize = size + 'px';

                // Random duration (Slower for background effect: 10s to 20s)
                const duration = Math.random() * 10 + 10;
                note.style.animationDuration = duration + 's';

                // Random delay so they don't all start at bottom immediately
                note.style.animationDelay = '-' + (Math.random() * 10) + 's';

                container.appendChild(note);

                // Cleanup
                setTimeout(() => {
                    note.remove();
                }, duration * 1000);
            }

            // Initial batch to populate screen immediately
            for (let i = 0; i < 15; i++) {
                createNote();
            }

            // Continue generating notes
            setInterval(createNote, 1500);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const setAlpha = document.querySelector('.unique-set-alpha');
            const trackWrapper = document.querySelector('.scroll-track-wrapper');

            if (setAlpha && !document.querySelector('.unique-set-beta')) {
                const setBeta = setAlpha.cloneNode(true);
                setBeta.classList.remove('unique-set-alpha');
                setBeta.classList.add('unique-set-beta');
                trackWrapper.appendChild(setBeta);
                console.log('Image slider duplicated successfully for infinite loop.');
            }
        });

        // --- NEW/UPDATED: Lightbox and Zoom/Pan Logic ---

        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');

        // State variables
        let scale = 1;
        let isDragging = false;
        let start = {
            x: 0,
            y: 0
        };
        let pan = {
            x: 0,
            y: 0
        };

        // Function to apply the current transform to the image
        function updateImageTransform() {
            // We use calc() to combine the initial centering (-50%) with the pixel-based panning
            lightboxImg.style.transform = `translate(calc(-50% + ${pan.x}px), calc(-50% + ${pan.y}px)) scale(${scale})`;
        }

        function openLightbox(src) {
            // Reset state every time a new image is opened
            scale = 1;
            isDragging = false;
            pan = {
                x: 0,
                y: 0
            };
            updateImageTransform(); // Apply initial transform

            lightbox.style.display = 'block';
            lightboxImg.src = src;
        }

        function closeLightbox(event) {
            if (event.target === lightbox || event.target.classList.contains('close-btn')) {
                lightbox.style.display = 'none';
            }
        }

        // --- Event Listeners for Zoom and Pan ---

        zoomInBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent closing lightbox when clicking button
            scale += 0.2;
            updateImageTransform();
        });

        zoomOutBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent closing lightbox when clicking button
            if (scale > 1) {
                scale -= 0.2;
                if (scale < 1) {
                    scale = 1;
                }
            }
            // If we zoom all the way out, reset the pan to center the image
            if (scale === 1) {
                pan = {
                    x: 0,
                    y: 0
                };
            }
            updateImageTransform();
        });

        lightboxImg.addEventListener('mousedown', (e) => {
            // Panning only works if the image is zoomed in
            if (scale > 1) {
                e.preventDefault();
                isDragging = true;
                // Record starting point relative to current pan position
                start = {
                    x: e.clientX - pan.x,
                    y: e.clientY - pan.y
                };
                lightboxImg.style.cursor = 'grabbing';
            }
        });

        // Use 'window' for mousemove and mouseup to allow dragging even if the cursor leaves the image
        window.addEventListener('mousemove', (e) => {
            if (isDragging) {
                e.preventDefault();
                pan = {
                    x: e.clientX - start.x,
                    y: e.clientY - start.y
                };
                updateImageTransform();
            }
        });

        window.addEventListener('mouseup', (e) => {
            if (isDragging) {
                isDragging = false;
                lightboxImg.style.cursor = 'grab';
            }
        });
    </script>
@endsection
