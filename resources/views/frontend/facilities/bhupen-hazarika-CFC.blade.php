@extends('frontend/new-master')
@section('content')
    <style>
        /* ================= AVM IMAGE SECTION ================= */

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

        @media (max-width:767px) {

            .avm-desktop {
                display: none;
            }

            .avm-mobile {
                display: block;
            }
        }

        /* ================= ENDLESS GALLERY ================= */

        .endless-scroll-container {
            width: 95%;
            margin: auto;
            margin-top: 30px;
            overflow: hidden;
            padding: 10px 0;
            border-bottom: 2px solid #7A1F26;
        }

        .endless-scroll-container h2 {
            color: #7A1F26;
            font-weight: 600;
            font-size: 35px;
            text-align: center;
            padding-top: 25px;
            padding-bottom: 30px;
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
            margin-right: 20px;
            flex-shrink: 0;
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
        }

        .scroller-image {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            cursor: pointer;
            transition: opacity .3s;
        }

        @media(max-width:767px) {

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
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .9);
            overflow: hidden;
            z-index: 2000;
        }

        .lightbox-content {

            position: absolute;
            top: 50%;
            left: 50%;

            max-width: 90%;
            max-height: 90%;

            width: auto;
            height: auto;

            object-fit: contain;

            transform: translate(-50%, -50%) scale(1);

            animation: zoom .6s;

            cursor: grab;

            transition: transform .2s ease-out;
        }

        .close-btn {

            position: absolute;
            top: 20px;
            right: 35px;

            color: #fff;

            font-size: 40px;
            font-weight: bold;

            cursor: pointer;

            z-index: 1002;
        }

        .close-btn:hover {

            color: #bbb;

        }

        .lightbox-controls {

            position: absolute;

            top: 25px;
            right: 90px;

            display: flex;
            gap: 10px;

            z-index: 1001;

        }

        .lightbox-controls button {

            width: 40px;
            height: 40px;

            border-radius: 5px;
            border: 1px solid #fff;

            background: rgba(30, 30, 30, .7);

            color: #fff;

            font-size: 24px;
            font-weight: bold;

            cursor: pointer;

            transition: .3s;
        }

        .lightbox-controls button:hover {

            background: #000;

        }

        @keyframes zoom {

            from {
                transform: translate(-50%, -50%) scale(.1);
            }

            to {
                transform: translate(-50%, -50%) scale(1);
            }

        }
    </style>

    <style>
        /* ================= EVENTS SECTION ================= */

        .bhupen-events-carousel-section {
            padding: 80px 0;
            background: rgba(244, 230, 218, .6);
            position: relative;
            z-index: 1;
        }

        .bhupen-events-title,
        .bhupen-event-title,
        .bhupen-gallery-title {
            font-size: 3.5rem;
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

            background: #fff;

            border-radius: 22px;

            overflow: hidden;

            box-shadow: 0 18px 45px rgba(0, 0, 0, .18);

            transition: .35s;

            height: 100%;

            display: flex;
            flex-direction: column;
        }

        .bhupen-event-card:hover {

            transform: translateY(-8px);

            box-shadow: 0 30px 70px rgba(0, 0, 0, .25);

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

            font-size: 2.0rem;
            font-weight: 700;
            color: #7A1F26;

            margin-bottom: 14px;

        }

        .bhupen-event-card-body p {

            position: relative;

            font-size: 1.5rem;

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

            left: 0;
            bottom: 0;

            width: 100%;
            height: 2.2em;

            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), #fff);

        }

        .bhupen-event-btn {

            margin-top: auto;

            align-self: flex-start;

            padding: 11px 26px;

            background: #A4282D;

            color: #fff;

            border-radius: 30px;

            text-decoration: none;

            font-size: .95rem;

            transition: .3s;

        }

        .bhupen-event-btn:hover {

            background: #7A1F26;

            color: #fff;

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

            border: 2px solid #A4282D;

            background: #fff;

            color: #A4282D;

            font-size: 1.8rem;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;

            transition: .3s;

            box-shadow: 0 8px 22px rgba(0, 0, 0, .15);

        }

        .bhupen-carousel-btn:hover {

            background: #A4282D;

            color: #fff;

            transform: translateY(-2px);

        }

        @media(max-width:575px) {

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

        /* ================= EBOOK ================= */

        .bhupen-ebook-section {

            background: #7A1F26;

            padding: 90px 0;

            position: relative;

            z-index: 2;

        }

        .bhupen-ebook-title {

            text-align: center;

            color: #fff;

            font-size: 3.0rem;

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

            display: block;

            margin: 0 auto;

            border-radius: 14px;

            box-shadow: 0 20px 50px rgba(0, 0, 0, .35);

            transition: .4s;

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

            border-radius: 50px;

            text-decoration: none;

            font-weight: 700;

            font-size: 1.8rem;

            animation: pulseBtn 2s infinite;

            transition: .3s;

        }

        .ebook-download-btn:hover {

            background: #fff;

            color: #7A1F26;

            transform: translateY(-3px);

        }

        @keyframes pulseBtn {

            0% {

                transform: scale(1);

                box-shadow: 0 0 0 0 rgba(210, 164, 92, .8);

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

        @media(max-width:768px) {

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

        /* ================= MEMBERS TABLE ================= */

        .bhupen-member-section {

            padding: 80px 0;

            background-color: #FFF7F0;

        }

        .bhupen-event-table-wrap {

            background: #fff;

            padding: 30px;

            border-left: 6px solid #A4282D;

            box-shadow: 0 16px 40px rgba(0, 0, 0, .12);

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

            color: #fff;

            padding: 14px 12px;

            font-weight: 600;

            text-align: left;

            font-size: 2.0rem;

        }

        .bhupen-event-table tbody td {

            padding: 14px 12px;

            border-bottom: 1px solid #E6D3C2;

            font-size: 1.8rem;

            color: #1F1F1F;

        }

        .bhupen-event-table tbody td.sl-no {

            text-align: center;

            font-weight: 600;

        }

        #bhupenEventsCarousel .carousel-item {
            display: none;
        }

        #bhupenEventsCarousel .carousel-item.active {
            display: block;
        }
    </style>

    <style>
        /*************************
        Heading
        *************************/
        .bhupen-first-title p {
            color: #5d6777;
            line-height: 1.9;
            font-size: 18px;
            margin: 30px 0px;
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/bhupen-hazarika-CFC/bg-img-web.svg'); filter: blur(1px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Dr. Bhupen Hazarika <br> Centre for Creativity</h1>
            <div class="pg-hero-breadcrumb">

            </div>
        </div>

    </section>

    <div class="container">
        <!-- Heading -->
        <div class="bhupen-first-title">

            <p>
                Dr. Bhupen Hazarika Centre for Creativity, conceived as an interdisciplinary academic and creative hub of
                The Assam Royal Global University, is dedicated to the systematic study of the creativity embodied in the
                life, works, and intellectual legacy of Dr. Bhupen Hazarika, one of India’s most influential cultural icons,
                widely known as the the Bard of Brahmaputra, whose timeless creations have illuminated the pathways of
                Assam’s and Northeast India’s social and cultural life in the modern times, and whose contributions continue
                to resonate till the present day and age.
            </p>
        </div>

    </div>

    <!-- ================= AIM • VISION • MISSION ================= -->
    <section class="bhupen-avm-image-section">
        <img src="new-web/assets/img/bhupen-hazarika-CFC/avm.svg" alt="Aim Vision Mission" class="avm-img avm-desktop">

        <img src="new-web/assets/img/bhupen-hazarika-CFC/avm-mobile.svg" alt="Aim Vision Mission"
            class="avm-img avm-mobile">
    </section>

    <!-- ================= XUDHAKANTHA MUSEUM ================= -->
    <section style="margin-bottom:30px;">

        <div class="endless-scroll-container">

            <h2>Xudhakantha Museum at RGU</h2>

            <div class="scroll-track-wrapper">

                <div class="scroll-content-images unique-set-alpha">

                    <div class="slider-image-frame">
                        <img src="new-web/assets/img/bhupen-hazarika-CFC/gallery/1.png" alt="Image 1"
                            class="scroller-image" onclick="openLightbox(this.src)">
                    </div>

                    <div class="slider-image-frame">
                        <img src="new-web/assets/img/bhupen-hazarika-CFC/gallery/2.png" alt="Image 2"
                            class="scroller-image" onclick="openLightbox(this.src)">
                    </div>

                    <div class="slider-image-frame">
                        <img src="new-web/assets/img/bhupen-hazarika-CFC/gallery/3.png" alt="Image 3"
                            class="scroller-image" onclick="openLightbox(this.src)">
                    </div>

                    <div class="slider-image-frame">
                        <img src="new-web/assets/img/bhupen-hazarika-CFC/gallery/4.png" alt="Image 4"
                            class="scroller-image" onclick="openLightbox(this.src)">
                    </div>

                    <div class="slider-image-frame">
                        <img src="new-web/assets/img/bhupen-hazarika-CFC/gallery/5.png" alt="Image 5"
                            class="scroller-image" onclick="openLightbox(this.src)">
                    </div>

                    <div class="slider-image-frame">
                        <img src="new-web/assets/img/bhupen-hazarika-CFC/gallery/6.png" alt="Image 6"
                            class="scroller-image" onclick="openLightbox(this.src)">
                    </div>

                </div>

            </div>

        </div>

        <!-- LIGHTBOX -->

        <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">

            <span class="close-btn">&times;</span>

            <div class="lightbox-controls">
                <button id="zoom-in" title="Zoom In">+</button>
                <button id="zoom-out" title="Zoom Out">-</button>
            </div>

            <img class="lightbox-content" id="lightbox-img" src="" alt="">

        </div>

    </section>

    <!-- ================= EVENTS ================= -->

    <section class="bhupen-events-carousel-section">

        <div class="container">

            <h2 class="bhupen-events-title">
                Events & Programmes
            </h2>

            <div id="bhupenEventsCarousel" class="carousel slide bhupen-events-carousel">

                <div class="carousel-inner">

                    <!-- SLIDE 1 -->

                    <div class="carousel-item active">

                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="/mobile-assets/media-corner/news4/Prof.%20Amarjyoti%20Choudhury%20recites%20%20%E2%80%9CEta%20Gaan%20Xex%20Hol,%E2%80%9D%20before%20joining%20as%20Chair%20of%20%E2%80%98Dr%20Bhupen%20Hazarika%20Centre%20for%20Creativity%E2%80%99%20at%20RGU.jpg"
                                        alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Association of Prof. Amarjyoti Choudhury,
                                            as the Chair of Dr. Bhupen Hazarika
                                            Centre for Creativity
                                        </h4>

                                        <p>
                                            This historic announcement comes ahead
                                            of the birth centenary celebrations of
                                            Dr. Bhupen Hazarika, Assam’s most iconic
                                            cultural ambassador.
                                        </p>

                                        <a target="_blank"
                                            href="https://www.pratidintime.com/education/a-new-era-of-creative-education-begins-at-rgu-with-prof-amarjyoti-choudhury-at-the-helm-9331878"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="new-web/assets/img/bhupen-hazarika-CFC/events/3.png" alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Rabha Divas celebration under the aegis
                                            of the centre
                                        </h4>

                                        <p>
                                            The Assam Royal Global University (RGU)
                                            observed Rabha Divas today with a glowing
                                            tribute to Kalaguru Bishnu Prasad Rabha,
                                            marking his 56th death anniversary.
                                        </p>

                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2025/06/20/kalaguru-was-an-extraordinary-teacher-prof-amarjyoti-choudhury/"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 d-none d-lg-block">

                                <div class="bhupen-event-card">

                                    <img src="new-web/assets/img/bhupen-hazarika-CFC/events/2.png" alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Observation of the celebrated poet,
                                            Hiren Bhattacharyya,
                                            "Sugandhi Pokhilar Kobi"
                                        </h4>

                                        <p>
                                            To honour the legacy of the beloved
                                            Assamese poet Hiren Bhattacharyya,
                                            the Dr. Bhupen Hazarika Centre for
                                            Creativity organized a commemorative
                                            programme on his death anniversary.
                                        </p>

                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2025/07/04/sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu/"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- SLIDE 2 -->

                    <div class="carousel-item">

                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="new-web/assets/img/bhupen-hazarika-CFC/events/4.png" alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Celebration of Birth Centenary with Museum
                                            inauguration and Oration inauguration
                                        </h4>

                                        <p>
                                            As part of the birth centenary celebrations
                                            of Dr Bhupen Hazarika, the Dr Bhupen
                                            Hazarika Centre for Creativity at Assam
                                            Royal Global University (RGU) will
                                            inaugurate the Sudhakantha Museum on
                                            its campus and host a Centenary Oration
                                            Series.
                                        </p>

                                        <a target="_blank"
                                            href="https://eastmojo.com/news/2025/09/06/sudhakantha-museum-to-be-inaugurated-at-royal-global-university/"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="https://nagalandpost.com/wp-content/uploads/2025/10/Nise-Merunos-tribute-turns-Zubeens.jpg"
                                        alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Nise Meruno’s tribute to Zubeen
                                        </h4>

                                        <p>
                                            Music transcends boundaries and in a
                                            moving tribute to the late music icon
                                            Zubeen Garg, internationally acclaimed
                                            concert pianist Nise Meruno transformed
                                            "Mayabini" into Western classical notation.
                                        </p>

                                        <a target="_blank"
                                            href="https://nagalandpost.com/nise-merunos-tribute-turns-zubeens-mayabini-into-a-global-melody/"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="https://cf-img-a-in.tosshub.com/lingo/itne/images/story/202511/691da94d5241e-zubeen-192559255-16x9.png?size=948:533"
                                        alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            "Zubeen: Twenty Songs and Seven Portraits"
                                            Released; Scholarship Announced
                                        </h4>

                                        <p>
                                            The Assam Royal Global University hosted
                                            a commemorative programme to mark the
                                            Birth Anniversary of the iconic artist
                                            Zubeen Garg.
                                        </p>

                                        <a target="_blank"
                                            href="https://www.indiatodayne.in/lifestyle/story/zubeen-twenty-songs-and-seven-portraits-released-scholarship-announced-in-singers-honour-1306027-2025-11-19"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- SLIDE 3 -->

                    <div class="carousel-item">

                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="https://www.syllad.com/wp-content/uploads/2025/11/Bhupen.jpg"
                                        alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            RGU pays melodious tribute to
                                            Xudhakantha Bhupen Hazarika
                                        </h4>

                                        <p>
                                            Assam Royal Global University commemorated
                                            the 14th death anniversary of
                                            Xudhakontha Dr. Bhupen Hazarika with a
                                            stirring blend of music, reflection,
                                            and homage.
                                        </p>

                                        <a target="_blank"
                                            href="https://www.syllad.com/rgu-pays-melodious-tribute-to-xudhakantha-bhupen-hazarika-launches-2nd-oration-series-celebrating-assamese-musical-heritage/"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="/mobile-assets/media-corner/news78/11.jpeg" alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Life-Size Statue of Zubeen Garg
                                            Unveiled at RGU
                                        </h4>

                                        <p>
                                            The statue was inaugurated by eminent
                                            poet, translator and literary critic
                                            Prof. Pradip Acharya in the presence
                                            of distinguished guests.
                                        </p>

                                        <a target="_blank"
                                            href="https://dy365live.com/guwahati/a-poem-in-bronze-life-size-statue-of-zubeen-garg-unveiled-in-guwahati-10919120"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="/mobile-assets/media-corner/news82/1.jpeg" alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            Silpi Diwas Celebrated by
                                            Dr Bhupen Hazarika Centre
                                            for Creativity at RGU
                                        </h4>

                                        <p>
                                            The Centre celebrated Silpi Diwas
                                            through a special programme titled
                                            "Tore More Alokore Jatra."
                                        </p>

                                        <a target="_blank"
                                            href="https://theshillongtimes.com/2026/01/20/silpi-diwas-celebrated-by-dr-bhupen-hazarika-centre-for-creativity-at-rgu/"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- SLIDE 4 -->

                    <div class="carousel-item">

                        <div class="row g-4 justify-content-center">

                            <div class="col-lg-4 col-md-6">

                                <div class="bhupen-event-card">

                                    <img src="https://cf-img-a-in.tosshub.com/lingo/itne/images/story/202602/69a022cea1317-bhupen-hazarika-twenty-songs-and-seven-portraits-released-in-centenary-tribute-to-the-bard-of-the-263905173-16x9.png?size=948:533"
                                        alt="">

                                    <div class="bhupen-event-card-body">

                                        <h4>
                                            "Bhupen Hazarika: Twenty Songs and
                                            Seven Portraits" Released
                                        </h4>

                                        <p>
                                            A moving tribute to the Bard of the
                                            Brahmaputra released under the aegis
                                            of the Dr. Bhupen Hazarika Centre
                                            for Creativity.
                                        </p>

                                        <a target="_blank"
                                            href="https://www.indiatodayne.in/entertainment/story/bhupen-hazarika-twenty-songs-and-seven-portraits-released-in-centenary-tribute-to-the-bard-of-the-brahmaputra-1352010-2026-02-26"
                                            class="bhupen-event-btn">
                                            Read More
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bhupen-carousel-controls">

                <button class="bhupen-carousel-btn" data-bs-target="#bhupenEventsCarousel" data-bs-slide="prev">
                    ‹
                </button>

                <button class="bhupen-carousel-btn" data-bs-target="#bhupenEventsCarousel" data-bs-slide="next">
                    ›
                </button>

            </div>

        </div>

    </section>
    <!-- ================= E-BOOK SECTION ================= -->

    <section class="bhupen-ebook-section">

        <div class="container">

            <h2 class="bhupen-ebook-title">
                Publications & E-Books
            </h2>

            <!-- BOOK 1 -->

            <div class="ebook-item">

                <img src="new-web/assets/img/bhupen-hazarika-CFC/book-cover/zg-cover.jpg" alt="E-Book 1"
                    class="ebook-cover">

                <a target="_blank" href="new-web/assets/img/bhupen-hazarika-CFC/book-cover/Zubeen - Inside.pdf"
                    class="ebook-download-btn">

                    View E-Book

                </a>

            </div>

            <!-- BOOK 2 -->

            <div class="ebook-item">

                <img src="new-web/assets/img/bhupen-hazarika-CFC/book-cover/bh-cover.jpg" alt="E-Book 2"
                    class="ebook-cover">

                <a target="_blank"
                    href="new-web/assets/img/bhupen-hazarika-CFC/book-cover/Bhupen Hazarika Twenty Songs Seven Portrait - inside.pdf"
                    class="ebook-download-btn">

                    View E-Book

                </a>

            </div>

        </div>

    </section>

    <!-- ================= MEMBERS / COMMITTEE ================= -->

    <section class="bhupen-member-section">

        <div class="container">

            <h2 class="bhupen-event-title">
                Members / Committee List
            </h2>

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
                            <td>Deputy Dean & Outreach Coordinator</td>
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

    <script>
        // ================= MUSICAL BACKGROUND =================

        document.addEventListener("DOMContentLoaded", function() {

            const container = document.getElementById("musical-background");

            if (!container) return;

            const symbols = [
                "♪",
                "♫",
                "♬",
                "♩",
                "𝄞",
                "𝄢",
                "♭",
                "♮",
                "♯",
                "𝅘𝅥𝅯",
                "𝅘𝅥𝅰",
                "𝅘𝅥𝅱",
                "𝅘𝅥𝅲"
            ];

            const colors = [
                "#A4282D",
                "#D2A45C",
                "#7A1F26",
                "#4A2F25"
            ];

            function createNote() {

                const note = document.createElement("div");

                note.classList.add("music-note");

                note.innerText =
                    symbols[Math.floor(Math.random() * symbols.length)];

                note.style.color =
                    colors[Math.floor(Math.random() * colors.length)];

                note.style.left = Math.random() * 95 + "vw";

                const size = Math.random() * 40 + 20;
                note.style.fontSize = size + "px";

                const duration = Math.random() * 10 + 10;

                note.style.animationDuration = duration + "s";
                note.style.animationDelay = "-" + (Math.random() * 10) + "s";

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

        // ================= ENDLESS SCROLL DUPLICATE =================

        document.addEventListener("DOMContentLoaded", () => {

            const setAlpha = document.querySelector(".unique-set-alpha");
            const trackWrapper = document.querySelector(".scroll-track-wrapper");

            if (setAlpha && !document.querySelector(".unique-set-beta")) {

                const setBeta = setAlpha.cloneNode(true);

                setBeta.classList.remove("unique-set-alpha");
                setBeta.classList.add("unique-set-beta");

                trackWrapper.appendChild(setBeta);

            }

        });

        // ================= LIGHTBOX =================

        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");

        const zoomInBtn = document.getElementById("zoom-in");
        const zoomOutBtn = document.getElementById("zoom-out");

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

            lightboxImg.style.transform =
                `translate(calc(-50% + ${pan.x}px), calc(-50% + ${pan.y}px)) scale(${scale})`;

        }

        function openLightbox(src) {

            scale = 1;

            pan = {
                x: 0,
                y: 0
            };

            isDragging = false;

            updateImageTransform();

            lightbox.style.display = "block";

            lightboxImg.src = src;

        }

        function closeLightbox(event) {

            if (
                event.target === lightbox ||
                event.target.classList.contains("close-btn")
            ) {

                lightbox.style.display = "none";

            }

        }

        zoomInBtn.addEventListener("click", function(e) {

            e.stopPropagation();

            scale += 0.2;

            updateImageTransform();

        });

        zoomOutBtn.addEventListener("click", function(e) {

            e.stopPropagation();

            if (scale > 1) {

                scale -= 0.2;

                if (scale < 1) {
                    scale = 1;
                }

            }

            if (scale === 1) {

                pan = {
                    x: 0,
                    y: 0
                };

            }

            updateImageTransform();

        });

        lightboxImg.addEventListener("mousedown", function(e) {

            if (scale > 1) {

                e.preventDefault();

                isDragging = true;

                start = {
                    x: e.clientX - pan.x,
                    y: e.clientY - pan.y
                };

                lightboxImg.style.cursor = "grabbing";

            }

        });

        window.addEventListener("mousemove", function(e) {

            if (!isDragging) return;

            e.preventDefault();

            pan = {
                x: e.clientX - start.x,
                y: e.clientY - start.y
            };

            updateImageTransform();

        });

        window.addEventListener("mouseup", function() {

            if (!isDragging) return;

            isDragging = false;

            lightboxImg.style.cursor = "grab";

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const carousel = document.getElementById("bhupenEventsCarousel");
            if (!carousel) return;

            const items = carousel.querySelectorAll(".carousel-item");
            const prevBtn = document.querySelector('[data-bs-slide="prev"], [data-slide="prev"]');
            const nextBtn = document.querySelector('[data-bs-slide="next"], [data-slide="next"]');

            let current = 0;

            function showSlide(index) {

                items.forEach(item => item.classList.remove("active"));

                if (index < 0) index = items.length - 1;
                if (index >= items.length) index = 0;

                current = index;
                items[current].classList.add("active");
            }

            nextBtn?.addEventListener("click", function(e) {
                e.preventDefault();
                showSlide(current + 1);
            });

            prevBtn?.addEventListener("click", function(e) {
                e.preventDefault();
                showSlide(current - 1);
            });

            showSlide(0);

        });
    </script>
@endsection
