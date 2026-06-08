@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

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
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .music-note {
            position: absolute;
            bottom: -100px;
            opacity: 0;
            animation: floatUp linear forwards;
            font-family: 'Segoe UI Symbol', 'Arial Unicode MS', sans-serif;
            user-select: none;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.4;
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

        section {
            position: relative;
            z-index: 2;
        }

        /* ================= HERO SECTION ================= */
        .bhupen-hero {
            min-height: 100vh;
            background-image: url("mobile-assets/bhupen-hazarika-CFC/bg-img-web.svg");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }

        .bhupen-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 30%, rgba(164, 40, 45, 0.15), transparent 40%),
                radial-gradient(circle at 80% 60%, rgba(210, 164, 92, 0.18), transparent 45%);
            z-index: -1;
        }

        .bhupen-mobile-img {
            display: none;
            width: 100%;
        }

        .bhupen-content {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.70);
            backdrop-filter: blur(14px) saturate(130%);
            -webkit-backdrop-filter: blur(14px) saturate(130%);
            padding: 42px;
            border-left: 6px solid #A4282D;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08), inset 0 0 0 1px rgba(255, 255, 255, 0.35);
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
            padding-top: 20px;
            text-align: justify;
        }

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
            font-size: 1.2rem;
            line-height: 1.50;
            text-align: justify;
            color: #4A2F25;
        }

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
            object-fit: cover;
            border-radius: 14px;
            background: #000;
            display: block;
        }

        /* ================= AVM RESPONSIVE IMAGE ================= */
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

        .avm-mobile {
            display: none;
        }

        @media (max-width: 767px) {
            .avm-desktop {
                display: none;
            }

            .avm-mobile {
                display: block;
            }
        }

        /* ================= ENDLESS SCROLL GALLERY ================= */
        .endless-scroll-container {
            margin: auto;
            width: 95%;
            overflow: hidden;
            padding: 10px 0;
            border-bottom: 2px solid #7A1F26;
            margin-top: 30px;
        }

        .endless-scroll-container h2 {
            color: #7A1F26;
            font-weight: 600;
            font-size: 35px;
            padding-top: 25px;
            padding-bottom: 30px;
            text-align: center;
        }

        .scroll-track-wrapper {
            display: flex;
            width: fit-content;
            animation: scroll-movement 100s linear infinite;
        }

        .scroll-track-wrapper:hover {
            animation-play-state: paused;
        }

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

        /* Mobile adjustment for slider frames */
        @media (max-width: 767px) {
            .slider-image-frame {
                width: 300px;
            }
        }

        @keyframes scroll-movement {
            from {
                transform: translateX(0%);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ================= LIGHTBOX ================= */
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
        }

        .lightbox-content {
            margin: auto;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
            max-width: 90%;
            max-height: 90%;
            width: auto;
            height: auto;
            object-fit: contain;
            animation: zoom 0.6s;
            cursor: grab;
            transition: transform 0.2s ease-out;
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
        }

        .close-btn:hover {
            color: #bbb;
            text-decoration: none;
        }

        .lightbox-controls {
            position: absolute;
            top: 25px;
            right: 90px;
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

        /* ================= EVENTS CAROUSEL SECTION ================= */
        .bhupen-events-carousel-section {
            padding: 80px 0;
            background: rgba(244, 230, 218, 0.6);
            position: relative;
            z-index: 1;
        }

        .bhupen-events-title,
        .bhupen-event-title,
        .bhupen-gallery-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #7A1F26;
            text-align: center;
            margin-bottom: 40px;
        }

        .bhupen-events-carousel,
        .bhupen-events-carousel .carousel-inner,
        .bhupen-events-carousel .carousel-item {
            overflow: visible !important;
        }

        .bhupen-events-carousel .row {
            padding: 25px 0;
        }

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

        .bhupen-event-card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }

        .bhupen-event-card-body {
            padding: 28px 30px 32px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .bhupen-event-card-body h4 {
            font-size: 1.45rem;
            font-weight: 700;
            color: #7A1F26;
            margin-bottom: 14px;
        }

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

        .bhupen-event-card-body p::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2.2em;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), #ffffff);
            pointer-events: none;
        }

        .bhupen-event-btn {
            margin-top: auto;
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

        .bhupen-events-carousel .carousel-control-prev,
        .bhupen-events-carousel .carousel-control-next {
            display: none;
        }

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

        /* ================= MEMBERS TABLE ================= */
        .bhupen-member-section {
            padding: 80px 0;
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
    </style>

    <div id="musical-background"></div>

    <section class="bhupen-hero">
        <img src="mobile-assets/bhupen-hazarika-CFC/bg-img-mobile.svg" class="bhupen-mobile-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bhupen-content">
                        <h1>Dr. Bhupen Hazarika</h1>
                        <h2>Centre for Creativity</h2>
                        <p>
                            Dr. Bhupen Hazarika Centre for Creativity, conceived as an interdisciplinary academic and
                            creative hub of The Assam Royal Global University, is dedicated to the systematic study of the
                            creativity
                            embodied in the life, works, and intellectual legacy of Dr. Bhupen Hazarika, one of India’s most
                            influential
                            cultural icons, widely known as the the Bard of Brahmaputra, whose timeless creations have
                            illuminated
                            the pathways of Assam’s and Northeast India’s social and cultural life in the modern times, and
                            whose
                            contributions continue to resonate till the present day and age.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bhupen-avm-image-section">
        <img src="mobile-assets/bhupen-hazarika-CFC/avm.svg" alt="Aim Vision Mission" class="avm-img avm-desktop">
        <img src="mobile-assets/bhupen-hazarika-CFC/avm-mobile.svg" alt="Aim Vision Mission" class="avm-img avm-mobile">
    </section>

    <section style="margin-bottom: 30px;">
        <div class="endless-scroll-container">
            <h2>Xudhakantha Museum at RGU</h2>
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
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/5.png" alt="Image 5" class="scroller-image"
                            onclick="openLightbox(this.src)">
                    </div>
                    <div class="slider-image-frame">
                        <img src="mobile-assets/bhupen-hazarika-CFC/gallery/6.png" alt="Image 6" class="scroller-image"
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

    <section class="bhupen-events-carousel-section">
        <div class="container">
            <h2 class="bhupen-events-title">Events & Programmes</h2>
            <div id="bhupenEventsCarousel" class="carousel slide bhupen-events-carousel">
                <div class="carousel-inner">

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
                                        <p>This historic announcement comes ahead of the birth centenary celebrations of Dr.
                                            Bhupen
                                            Hazarika, Assam’s most iconic cultural ambassador.</p>
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
                                        <p>The Assam Royal Global University (RGU) observed Rabha Divas today with a glowing
                                            tribute to
                                            Kalaguru Bishnu Prasad Rabha, the legendary cultural stalwart of Assam, marking
                                            his 56th death
                                            anniversary.</p>
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
                                        <p>To honour the legacy of the beloved Assamese poet Hiren Bhattacharyya, fondly
                                            remembered as
                                            ‘Sugandhi Pokhilar Kobi’, the Dr. Bhupen Hazarika Centre for Creativity, Royal
                                            Global University,
                                            organized a heartfelt commemorative programme today on his death anniversary.
                                        </p>
                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2025/07/04/sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="mobile-assets/bhupen-hazarika-CFC/events/4.png" alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>Celebration of Birth Centenary with Museum inauguration and Oration inauguration
                                        </h4>
                                        <p>As part of the birth centenary celebrations of Dr Bhupen Hazarika, the Dr Bhupen
                                            Hazarika Centre
                                            for Creativity at Assam Royal Global University (RGU) will inaugurate the
                                            Sudhakantha Museum on
                                            its campus and host a Centenary Oration Series from 8 to 26 September 2025.</p>
                                        <a target="_blank"
                                            href="https://eastmojo.com/news/2025/09/06/sudhakantha-museum-to-be-inaugurated-at-royal-global-university/"
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
                                        <p>Music, they say, transcends boundaries and in a moving tribute to the late music
                                            icon Zubeen
                                            Garg, internationally acclaimed concert pianist Nise Meruno from Nagaland has
                                            transformed Garg’s
                                            legendary anthem “Mayabini” into Western classical notation...</p>
                                        <a target="_blank"
                                            href="https://nagalandpost.com/nise-merunos-tribute-turns-zubeens-mayabini-into-a-global-melody/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://cf-img-a-in.tosshub.com/lingo/itne/images/story/202511/691da94d5241e-zubeen-192559255-16x9.png?size=948:533"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>"Zubeen: Twenty Songs and Seven Portraits” Released; Scholarship Announced in
                                            Singer’s Honour
                                        </h4>
                                        <p>The Assam Royal Global University successfully hosted a heartfelt commemorative
                                            programme
                                            yesterday to mark the Birth Anniversary of the iconic artist Zubeen Garg. The
                                            event brought
                                            together admirers, academics, cultural voices, and members of the media for a
                                            morning filled with
                                            emotion, reflection, and artistic celebration.</p>
                                        <a target="_blank"
                                            href="https://www.indiatodayne.in/lifestyle/story/zubeen-twenty-songs-and-seven-portraits-released-scholarship-announced-in-singers-honour-1306027-2025-11-19"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://www.syllad.com/wp-content/uploads/2025/11/Bhupen.jpg"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>RGU pays melodious tribute to Xudhakantha Bhupen Hazarika, launches 2nd oration
                                            series</h4>
                                        <p>Assam Royal Global University (RGU) commemorated the 14th death anniversary of
                                            Xudhakontha Dr.
                                            Bhupen Hazarika with a stirring blend of music, reflection, and homage,
                                            reaffirming his immortal
                                            influence on Assamese culture.</p>
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
                                        <p>The statue was inaugurated by eminent poet, translator, and literary critic Prof.
                                            Pradip Acharya,
                                            in the presence of Zubeen Garg’s sister Dr. Palme Borthakur, sculptor Lakhyajit
                                            Bora, and members
                                            of the academic community.</p>
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
                                        <p>The Dr Bhupen Hazarika Centre for Creativity at The Assam Royal Global University
                                            (RGU) today
                                            celebrated Silpi Diwas with great enthusiasm through a special programme titled
                                            “Tore More Alokore
                                            Jatra”.</p>
                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2026/01/20/silpi-diwas-celebrated-by-dr-bhupen-hazarika-centre-for-creativity-at-rgu/"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="bhupen-event-card">
                                    <img src="https://cf-img-a-in.tosshub.com/lingo/itne/images/story/202602/69a022cea1317-bhupen-hazarika-twenty-songs-and-seven-portraits-released-in-centenary-tribute-to-the-bard-of-the-263905173-16x9.png?size=948:533"
                                        alt="">
                                    <div class="bhupen-event-card-body">
                                        <h4>“Bhupen Hazarika: Twenty Songs and Seven Portraits” Released in Centenary
                                            Tribute to the Bard of the Brahmaputra</h4>
                                        <p>In a moving tribute to the life and legacy of the Bard of the Brahmaputra, The
                                            Assam Royal Global University (RGU) today released “Bhupen Hazarika: Twenty
                                            Songs and Seven Portraits” under the aegis of the Dr. Bhupen Hazarika Centre for
                                            Creativity as part of the centenary celebrations of Bhupen Hazarika.</p>
                                        <a target="_blank"
                                            href="https://www.indiatodayne.in/entertainment/story/bhupen-hazarika-twenty-songs-and-seven-portraits-released-in-centenary-tribute-to-the-bard-of-the-brahmaputra-1352010-2026-02-26"
                                            class="bhupen-event-btn">Read More</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <div class="bhupen-carousel-controls">
                <button class="bhupen-carousel-btn" data-bs-target="#bhupenEventsCarousel"
                    data-bs-slide="prev">‹</button>
                <button class="bhupen-carousel-btn" data-bs-target="#bhupenEventsCarousel"
                    data-bs-slide="next">›</button>
            </div>
        </div>
    </section>


    <!-- ================= E-BOOK SECTION ================= -->
    <section class="bhupen-ebook-section">
        <div class="container">

            <h2 class="bhupen-ebook-title">Publications & E-Books</h2>

            <!-- Book 1 -->
            <div class="ebook-item">
                <img src="mobile-assets/bhupen-hazarika-CFC/book-cover/zg-cover.jpg" alt="E-Book 1" class="ebook-cover">

                <a target="_blank" href="mobile-assets/bhupen-hazarika-CFC/book-cover/Zubeen - Inside.pdf"
                    class="ebook-download-btn">
                    View E-Book
                </a>
            </div>

            <!-- Book 2 -->
            <div class="ebook-item">
                <img src="mobile-assets/bhupen-hazarika-CFC/book-cover/bh-cover.jpg" alt="E-Book 2" class="ebook-cover">

                <a target="_blank"
                    href="mobile-assets/bhupen-hazarika-CFC/book-cover/Bhupen Hazarika Twenty Songs Seven Portrait - inside.pdf"
                    class="ebook-download-btn">
                    View E-Book
                </a>
            </div>

        </div>
    </section>

    <style>
        /* ================= E-BOOK SECTION ================= */

        .bhupen-ebook-section {
            background: #7A1F26;
            padding: 90px 0;
            position: relative;
            z-index: 2;
        }

        .bhupen-ebook-title {
            text-align: center;
            color: #fff;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 60px;
        }

        .ebook-item {
            text-align: center;
            margin-bottom: 80px;
        }

        .ebook-item:last-child {
            margin-bottom: 0;
        }

        .ebook-cover {
            width: 100%;
            max-width: 1100px;
            border-radius: 14px;
            display: block;
            margin: 0 auto;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
            transition: transform 0.4s ease;
        }

        .ebook-cover:hover {
            transform: translateY(-8px);
        }

        .ebook-download-btn {
            display: inline-block;
            margin-top: 28px;
            padding: 14px 36px;
            background: #D2A45C;
            color: #7A1F26;
            text-decoration: none;
            font-weight: 700;
            border-radius: 50px;
            font-size: 1rem;
            animation: pulseBtn 2s infinite;
            box-shadow: 0 0 0 rgba(210, 164, 92, 0.8);
            transition: all 0.3s ease;
        }

        .ebook-download-btn:hover {
            background: #fff;
            color: #7A1F26;
            transform: translateY(-3px);
        }

        @keyframes pulseBtn {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(210, 164, 92, 0.8);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 20px rgba(210, 164, 92, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(210, 164, 92, 0);
            }
        }

        @media (max-width: 768px) {

            .bhupen-ebook-section {
                padding: 70px 0;
            }

            .bhupen-ebook-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }

            .ebook-item {
                margin-bottom: 60px;
            }

            .ebook-cover {
                max-width: 100%;
            }

            .ebook-download-btn {
                width: 90%;
                max-width: 280px;
            }
        }
    </style>

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
                            <td>Sattyakee D’Com Bhuyan</td>
                            <td>Associate Dean</td>
                            <td>Student Welfare</td>
                        </tr>
                        <tr>
                            <td class="sl-no">3</td>
                            <td>Dr. Stuti Goswami</td>
                            <td>Associate Professor</td>
                            <td>Royal School of Language</td>
                        </tr>
                        <tr>
                            <td class="sl-no">5</td>
                            <td>Mr. Sasanka Boruah</td>
                            <td>Sr. Manager (IT)</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td class="sl-no">6</td>
                            <td>Ms. Kristi Saikia</td>
                            <td>Assistant Professor & Member Secretary</td>
                            <td>Department of Social Work</td>
                        </tr>
                        <tr>
                            <td class="sl-no">7</td>
                            <td>Dr. Trishna Changkakati</td>
                            <td>Assistant Professor</td>
                            <td>Geography & Geoinformatics</td>
                        </tr>
                        <tr>
                            <td class="sl-no">8</td>
                            <td>Dr. Premmi Wahengbam</td>
                            <td>Assistant Professor</td>
                            <td>Department of History</td>
                        </tr>
                        <tr>
                            <td class="sl-no">9</td>
                            <td>Dr. Nibir Pratim Choudhury</td>
                            <td>Assistant Professor</td>
                            <td>Royal School of Business</td>
                        </tr>
                        <tr>
                            <td class="sl-no">10</td>
                            <td>Ms. Nikita Biswakarma</td>
                            <td>Teaching Assistant</td>
                            <td>Political Science & Public Administration</td>
                        </tr>
                        <tr>
                            <td class="sl-no">11</td>
                            <td>Arkupal Ra Acharya</td>
                            <td>Research Scholar</td>
                            <td>DBHCC</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // --- Musical Background Script ---
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('musical-background');
            const symbols = ['♪', '♫', '♬', '♩', '𝄞', '𝄢', '♭', '♮', '♯', '𝅘𝅥𝅯', '𝅘𝅥𝅰', '𝅘𝅥𝅱', '𝅘𝅥𝅲'];
            const colors = ['#A4282D', '#D2A45C', '#7A1F26', '#4A2F25'];

            function createNote() {
                const note = document.createElement('div');
                note.classList.add('music-note');
                note.innerText = symbols[Math.floor(Math.random() * symbols.length)];
                note.style.color = colors[Math.floor(Math.random() * colors.length)];
                note.style.left = Math.random() * 95 + 'vw';
                const size = Math.random() * 40 + 20;
                note.style.fontSize = size + 'px';
                const duration = Math.random() * 10 + 10;
                note.style.animationDuration = duration + 's';
                note.style.animationDelay = '-' + (Math.random() * 10) + 's';
                container.appendChild(note);

                setTimeout(() => {
                    note.remove();
                }, duration * 1000);
            }

            for (let i = 0; i < 15; i++) {
                createNote();
            }
            setInterval(createNote, 1500);
        });

        // --- Endless Scroll Clone Script ---
        document.addEventListener('DOMContentLoaded', () => {
            const setAlpha = document.querySelector('.unique-set-alpha');
            const trackWrapper = document.querySelector('.scroll-track-wrapper');
            if (setAlpha && !document.querySelector('.unique-set-beta')) {
                const setBeta = setAlpha.cloneNode(true);
                setBeta.classList.remove('unique-set-alpha');
                setBeta.classList.add('unique-set-beta');
                trackWrapper.appendChild(setBeta);
            }
        });

        // --- Lightbox & Zoom Logic ---
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');

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

        function updateImageTransform() {
            lightboxImg.style.transform = `translate(calc(-50% + ${pan.x}px), calc(-50% + ${pan.y}px)) scale(${scale})`;
        }

        function openLightbox(src) {
            scale = 1;
            isDragging = false;
            pan = {
                x: 0,
                y: 0
            };
            updateImageTransform();
            lightbox.style.display = 'block';
            lightboxImg.src = src;
        }

        function closeLightbox(event) {
            if (event.target === lightbox || event.target.classList.contains('close-btn')) {
                lightbox.style.display = 'none';
            }
        }

        zoomInBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            scale += 0.2;
            updateImageTransform();
        });

        zoomOutBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (scale > 1) {
                scale -= 0.2;
                if (scale < 1) scale = 1;
            }
            if (scale === 1) pan = {
                x: 0,
                y: 0
            };
            updateImageTransform();
        });

        lightboxImg.addEventListener('mousedown', (e) => {
            if (scale > 1) {
                e.preventDefault();
                isDragging = true;
                start = {
                    x: e.clientX - pan.x,
                    y: e.clientY - pan.y
                };
                lightboxImg.style.cursor = 'grabbing';
            }
        });

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

        window.addEventListener('mouseup', () => {
            if (isDragging) {
                isDragging = false;
                lightboxImg.style.cursor = 'grab';
            }
        });
    </script>
@endsection
