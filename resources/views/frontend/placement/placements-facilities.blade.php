@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/placement-facilities/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Facilities Available</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Facilities Available
            </div>
        </div>

    </section>


    <style>
        /* ==================================
       FACILITIES AVAILABLE
       PREFIX : rgufac_
    ================================== */

        .rgufac_section {
            background: #edf1f7;
            padding: 80px 0 0;
        }

        .rgufac_container {
            max-width: 1280px;
            margin: auto;
            padding: 0 15px;
        }

        /* Top Section */

        .rgufac_top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 50px;
        }

        .rgufac_top_img {
            overflow: hidden;
            border-radius: 22px;
        }

        .rgufac_top_img img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            display: block;
        }

        .rgufac_top_content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 700;
            color: #264b87;
            margin-bottom: 18px;
        }

        .rgufac_top_content p {
            font-size: 16px;
            line-height: 1.9;
            color: #5f6772;
            max-width: 520px;
        }

        /* Blue Section */

        .rgufac_blue {
            background: linear-gradient(180deg, #2b4f8a 0%, #001f53 100%);
            border-radius: 70px 70px 0 0;
            padding: 70px;
        }

        .rgufac_blue_grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        /* Left */

        .rgufac_left h2,
        .rgufac_right h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            line-height: 1.2;
            color: #fff;
            margin-bottom: 35px;
            font-weight: 700;
        }

        .rgufac_orange {
            color: #ef7135;
        }

        .rgufac_list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .rgufac_list li {
            position: relative;
            padding-left: 24px;
            margin-bottom: 26px;
            color: #eef3ff;
            font-size: 15px;
            line-height: 2;
        }

        .rgufac_list li::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #fff;
            position: absolute;
            left: 0;
            top: 11px;
        }

        /* Right */

        .rgufac_feature_img {
            overflow: hidden;
            border-radius: 18px;
        }

        .rgufac_feature_img img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            display: block;
        }

        /* Mobile */

        @media(max-width:991px) {

            .rgufac_top {
                grid-template-columns: 1fr;
            }

            .rgufac_blue {
                padding: 35px 25px;
                border-radius: 35px 35px 0 0;
            }

            .rgufac_blue_grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .rgufac_top_content h2,
            .rgufac_left h2,
            .rgufac_right h2 {
                font-size: 32px;
            }

            .rgufac_top_img img,
            .rgufac_feature_img img {
                height: 250px;
            }

        }
    </style>

    <style>
        /* Carousel */

        .rgufac_feature_carousel {
            border-radius: 18px;
            overflow: hidden;
        }

        .rgufac_feature_carousel .carousel-item img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            display: block;
        }

        /* Indicators at bottom */

        .rgufac_indicators {
            margin-bottom: 15px;
        }

        .rgufac_indicators button {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50%;
            border: none !important;
            background: #ffffff !important;
            opacity: .5;
        }

        .rgufac_indicators .active {
            opacity: 1;
            background: #ef7135 !important;
        }

        @media(max-width:991px) {

            .rgufac_feature_carousel .carousel-item img {
                height: 250px;
            }

        }
    </style>

    <section class="rgufac_section">

        <div class="rgufac_container">

            <!-- Top -->

            <div class="rgufac_top">

                <div class="rgufac_top_img">
                    <img src="new-web/assets/img/placement-facilities/headimg.png" alt="">
                </div>

                <div class="rgufac_top_content">

                    <h2>Facilities Available</h2>

                    <p>
                        The Assam Royal Global University is equipped with all necessary state-of-the-art facilities for
                        conducting recruitment events. Some of the facilities include:
                    </p>

                </div>

            </div>

        </div>

        <!-- Blue Content Section -->

        <div class="rgufac_blue">

            <div class="rgufac_container">

                <div class="rgufac_blue_grid">

                    <!-- Left -->

                    <div class="rgufac_left">

                        <h2>
                            The Centre <span class="rgufac_orange">Comprises Of:</span>
                        </h2>

                        <ul class="rgufac_list">

                            <li>Air-conditioned conference rooms for pre-placement talks.</li>

                            <li>Audio-visual equipment.</li>

                            <li>Computer labs to enable organizations to conduct entire recruitment process in an
                                effective manner.</li>

                            <li>Room for group discussions, interviews, and video conferencing.</li>

                            <li>Student volunteers for prompt assistance.</li>

                            <li>Pick up and dropping facilities from airport.</li>

                            <li>Guest house with all modern amenities.</li>

                        </ul>

                    </div>

                    <!-- Right -->

                    <div class="rgufac_right">

                        <h2>
                            Highlights Of <span class="rgufac_orange">Our Facilities</span>
                        </h2>

                        <div id="rgufacCarousel" class="carousel slide rgufac_feature_carousel" data-bs-ride="carousel">

                            <div class="carousel-indicators rgufac_indicators">

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="0"
                                    class="active"></button>

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="1"></button>

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="2"></button>

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="3"></button>

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="4"></button>

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="5"></button>

                                <button type="button" data-bs-target="#rgufacCarousel" data-bs-slide-to="6"></button>

                            </div>

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/learning-spaces.png"
                                        class="d-block w-100" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/amenities.png"
                                        class="d-block w-100" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/hangout.png"
                                        class="d-block w-100" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/headimg.png"
                                        class="d-block w-100" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/qqqq.png"
                                        class="d-block w-100" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/sports.png"
                                        class="d-block w-100" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/headimg.png"
                                        class="d-block w-100" alt="">
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const carousel = document.querySelector('#rgufacCarousel');

            new bootstrap.Carousel(carousel, {
                interval: 2000,
                ride: 'carousel',
                pause: false,
                wrap: true,
                touch: true
            });

        });
    </script>
@endsection
