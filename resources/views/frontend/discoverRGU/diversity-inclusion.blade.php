@extends('frontend/new-master')
@section('title', 'Diversity and inclusion : The Assam Royal Global University')
@section('meta_description', 'More than 7000 people call RGU their home. One would find a vast diversity of students at
    Royal Global University. Students from different parts of the country come to study at Royal Global University.')
@section('meta_keywords', 'Diversity and inclusion')
@section('content')
    <style>
        .diversity-inclusion-section {
            background: #dde3ee;
            padding: 80px 0;
            overflow: hidden;
        }

        .diversity-inclusion-section .container {
            max-width: 1280px;
        }

        .diversity-inclusion-top {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 40px;
            align-items: start;
            margin-bottom: 50px;
        }

        .diversity-inclusion-top-image img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 18px;
        }

        .diversity-inclusion-top-content {
            text-align: justify;
            font-size: 1.8rem;
            line-height: 1.9;
            color: #555;
        }

        .diversity-inclusion-top-content p:last-child {
            margin-bottom: 0;
        }

        .diversity-inclusion-marquee-wrap {
            margin-bottom: 60px;
            overflow: hidden;
        }

        .diversity-inclusion-marquee-track {
            display: flex;
            width: max-content;
            gap: 20px;
            animation: diversityInclusionScroll 100s linear infinite;
        }

        .diversity-inclusion-marquee-reverse .diversity-inclusion-marquee-track {
            animation-direction: reverse;
        }

        .diversity-inclusion-marquee-item {
            width: 180px;
            height: 180px;
            flex-shrink: 0;
        }

        .diversity-inclusion-marquee-item.landscape {
            width: 620px;
            height: 300px;
        }

        .diversity-inclusion-marquee-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
        }

        .diversity-inclusion-highlight {
            display: grid;
            grid-template-columns: 1.2fr .65fr;
            gap: 30px;
            align-items: stretch;
            margin-bottom: 60px;
        }

        .diversity-inclusion-highlight-card {
            position: relative;
            padding: 55px;
            border-radius: 0 60px 60px 0;
            background: linear-gradient(135deg, #021e4d, #284b86);
            overflow: hidden;
        }

        .diversity-inclusion-highlight-card h2 {
            font-family: "Playfair Display", serif;
            color: #fff;
            font-size: 4.2rem;
            margin-bottom: 50px;
            font-weight: 700;
        }

        .diversity-inclusion-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            position: relative;
        }

        .diversity-inclusion-grid::before {
            content: "";
            position: absolute;
            width: 1px;
            background: rgba(255, 255, 255, .25);
            top: 0;
            bottom: 0;
            left: 50%;
        }

        .diversity-inclusion-grid::after {
            content: "";
            position: absolute;
            height: 1px;
            background: rgba(255, 255, 255, .25);
            left: 0;
            right: 0;
            top: 50%;
        }

        .diversity-inclusion-grid-item {
            padding: 30px;
            color: rgba(255, 255, 255, .92);
            font-size: 1.45rem;
            line-height: 1.8;
        }

        .diversity-inclusion-center-dot {
            position: absolute;
            width: 14px;
            height: 14px;
            background: #f36d21;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        .diversity-inclusion-highlight-image img {
            width: 100%;
            height: 100%;
            min-height: 500px;
            object-fit: cover;
            border-radius: 0 0 0 60px;
        }

        @keyframes diversityInclusionScroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @media(max-width:991px) {

            .diversity-inclusion-top,
            .diversity-inclusion-highlight {
                grid-template-columns: 1fr;
            }

            .diversity-inclusion-highlight-card {
                border-radius: 30px;
            }

            .diversity-inclusion-highlight-image img {
                border-radius: 30px;
                min-height: 350px;
            }
        }

        @media(max-width:767px) {

            .diversity-inclusion-section {
                padding: 50px 0;
            }

            .diversity-inclusion-grid {
                grid-template-columns: 1fr;
            }

            .diversity-inclusion-grid::before,
            .diversity-inclusion-grid::after,
            .diversity-inclusion-center-dot {
                display: none;
            }

            .diversity-inclusion-highlight-card {
                padding: 35px 25px;
            }

            .diversity-inclusion-highlight-card h2 {
                font-size: 3rem;
            }

            .diversity-inclusion-marquee-item {
                width: 140px;
                height: 140px;
            }

            .diversity-inclusion-marquee-item.landscape {
                width: 250px;
                height: 140px;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/discover-RGU-diversity-inclusion/coverimg.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Diversity & Inclusion</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU/ Campus & Student Life / Diversity & Inclusion
            </div>
        </div>

    </section>

    <!-- Diversity & Inclusion Section -->
    <section class="diversity-inclusion-section">

        <div class="container">

            <!-- Top Content -->
            <div class="diversity-inclusion-top">

                <div class="diversity-inclusion-top-image">
                    <img src="new-web/assets/img/discover-RGU-diversity-inclusion/headimg.png" alt="">
                </div>

                <div class="diversity-inclusion-top-content">
                    <p>
                        More than 7000 people call RGU their home. One would find a vast diversity of students at The
                        Assam Royal Global University. Students from different parts of the country come to study at The
                        Assam Royal Global University. Students with different backgrounds bring with them different
                        experiences, ideas and perspectives. One gets to know about different cultures prevalent in
                        different parts of the country, different cuisines, different dialects and lots more. Getting to
                        know new and interesting people is one of the best experiences of university life. The
                        university is truly a place of unity in diversity.
                    </p>
                </div>

            </div>

            <!-- Marquee 1 -->
            <div class="diversity-inclusion-marquee-wrap">

                <div class="diversity-inclusion-marquee">

                    <div class="diversity-inclusion-marquee-track">

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p1.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p2.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p3.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p4.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p5.png" alt="">
                        </div>

                        <!-- Duplicate For Infinite Loop -->

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p1.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p2.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p3.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p4.png" alt="">
                        </div>

                        <div class="diversity-inclusion-marquee-item">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/p5.png" alt="">
                        </div>

                    </div>

                </div>

            </div>

            <!-- Blue Content Section -->
            <div class="diversity-inclusion-highlight">

                <div class="diversity-inclusion-highlight-card">

                    <h2>How RGU Promotes Diversity</h2>

                    <div class="diversity-inclusion-grid">

                        <div class="diversity-inclusion-grid-item">
                            We have a diverse pool of talent in our workplace coming from different cultural,
                            educational, environmental, and geographical contexts.
                        </div>

                        <div class="diversity-inclusion-grid-item">
                            RGU has a diverse student population that contributes to the cultural mosaic of the
                            university. Our student support cell extends support to every student on the campus
                            irrespective of their background.
                        </div>

                        <div class="diversity-inclusion-grid-item">
                            We celebrate all festivals with full zeal and with equal importance. Students participate in
                            all cultural events like Diwali, Holi, Christmas, Bihu, etc., with full enthusiasm.
                        </div>

                        <div class="diversity-inclusion-grid-item">
                            RGU warmly invites students to be a part of the family by choosing from a gamut of options
                            available for undergraduate and postgraduate programmes.
                        </div>

                    </div>

                    <span class="diversity-inclusion-center-dot"></span>

                </div>

                <div class="diversity-inclusion-highlight-image">
                    <img src="new-web/assets/img/discover-RGU-diversity-inclusion/img2.png" alt="">
                </div>

            </div>

            <!-- Marquee 2 -->
            <div class="diversity-inclusion-marquee-wrap diversity-inclusion-marquee-reverse">

                <div class="diversity-inclusion-marquee">

                    <div class="diversity-inclusion-marquee-track">

                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/1.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/2.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/3.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/4.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/5.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/6.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/7.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/8.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/9.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/10.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/11.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/12.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/13.jpg" alt="">
                        </div>


                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/1.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/2.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/3.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/4.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/5.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/6.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/7.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/8.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/9.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/10.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/11.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/12.jpg" alt="">
                        </div>
                        <div class="diversity-inclusion-marquee-item landscape">
                            <img src="new-web/assets/img/discover-RGU-diversity-inclusion/13.jpg" alt="">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
