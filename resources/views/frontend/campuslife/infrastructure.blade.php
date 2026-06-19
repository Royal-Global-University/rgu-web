@extends('frontend/new-master')

@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/cover1.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Infrastructure</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Hostel & Accommodation / Infrastructure
            </div>
        </div>

    </section>


    <style>
        /* =====================================
       RGU INFRASTRUCTURE
       PREFIX : rguinf_
    ===================================== */

        .rguinf_section {
            background: #edf1f7;
            padding: 90px 0 70px;
        }

        .rguinf_container {
            max-width: 1280px;
            margin: auto;
            padding: 0 15px;
        }

        .rguinf_top {
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .rguinf_image {
            overflow: hidden;
            border-radius: 26px;
        }

        .rguinf_image img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        .rguinf_content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 60px;
            font-weight: 700;
            color: #264b87;
            margin-bottom: 10px;
        }

        .rguinf_content h5 {
            color: #3e5f91;
            font-size: 28px;
            font-style: italic;
            margin-bottom: 25px;
        }

        .rguinf_content p {
            color: #596472;
            font-size: 20px;
            line-height: 1.9;
            margin-bottom: 50px;
        }

        /* Stats */

        .rguinf_stats {
            position: relative;
        }

        .rguinf_stats_line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #aab5c6;
        }

        .rguinf_stats_grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .rguinf_stat {
            position: relative;
            text-align: center;
            padding-bottom: 35px;
        }

        .rguinf_stat:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 15px;
            width: 1px;
            height: 110px;
            background: #aab5c6;
        }

        .rguinf_dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #294d88;
            position: absolute;
            right: -7px;
            top: 8px;
        }

        .rguinf_stat:last-child .rguinf_dot {
            display: none;
        }

        .rguinf_num {
            color: #d9652f;
            font-size: 40px;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 15px;
        }

        .rguinf_label {
            color: #57606c;
            font-size: 20px;
        }

        /* Mobile */

        @media(max-width:991px) {

            .rguinf_top {
                grid-template-columns: 1fr;
            }

            .rguinf_content h2 {
                font-size: 42px;
            }

            .rguinf_content h5 {
                font-size: 20px;
            }

            .rguinf_content p {
                font-size: 16px;
            }

            .rguinf_stats_grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }

            .rguinf_stat:after,
            .rguinf_dot,
            .rguinf_stats_line {
                display: none !important;
            }

            .rguinf_image img {
                height: 280px;
            }

        }
    </style>

    <section class="rguinf_section">

        <div class="rguinf_container">

            <div class="rguinf_top">

                <div class="rguinf_image">
                    <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/headimg.png" alt="">
                </div>

                <div class="rguinf_content">

                    <h2>RGU Campus</h2>

                    <h5>There's Nothing Like It.....</h5>

                    <p>
                        Explore the state-of-the-art infrastructure and vibrant spaces that define the RGU experience —
                        spread across a 27-acre, fully air-conditioned campus in Guwahati.
                    </p>

                    <div class="rguinf_stats">

                        <div class="rguinf_stats_grid">

                            <div class="rguinf_stat">
                                <div class="rguinf_dot"></div>
                                <div class="rguinf_num">27</div>
                                <div class="rguinf_label">Acres</div>
                            </div>

                            <div class="rguinf_stat">
                                <div class="rguinf_dot"></div>
                                <div class="rguinf_num">12L+</div>
                                <div class="rguinf_label">Sq. Ft. Built-Up</div>
                            </div>

                            <div class="rguinf_stat">
                                <div class="rguinf_dot"></div>
                                <div class="rguinf_num">160+</div>
                                <div class="rguinf_label">Programmes</div>
                            </div>

                            <div class="rguinf_stat">
                                <div class="rguinf_num">5000+</div>
                                <div class="rguinf_label">Students</div>
                            </div>

                        </div>

                        <div class="rguinf_stats_line"></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        /* ==========================
       PART 2
    ========================== */

        .rguinf_spaces_wrap {
            background: #edf1f7;
            padding: 20px 0 80px;
        }

        /* Learning Spaces */

        .rguinf_learning {
            background: #f4f6fb;
            border-radius: 70px;
            padding: 70px;
            margin-bottom: 80px;
        }

        .rguinf_learning_grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .rguinf_learning_content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            line-height: 1.1;
            color: #264b87;
            margin-bottom: 25px;
        }

        .rguinf_learning_content p {
            color: #596472;
            font-size: 19px;
            line-height: 2;
            max-width: 600px;
            margin-bottom: 35px;
        }

        .rguinf_btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 52px;
            padding: 0 28px;
            background: #d9652f;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            border-radius: 4px;
            letter-spacing: .5px;
            transition: .3s;
        }

        .rguinf_btn:hover {
            background: #bf5423;
            color: #fff;
        }

        .rguinf_learning_img {
            overflow: hidden;
            border-radius: 24px;
        }

        .rguinf_learning_img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* Sporting Spaces */

        .rguinf_sporting {
            padding: 20px 0;
        }

        .rguinf_sporting_grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .rguinf_sporting_img {
            overflow: hidden;
            border-radius: 24px;
        }

        .rguinf_sporting_img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        .rguinf_sporting_content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            line-height: 1.1;
            color: #264b87;
            margin-bottom: 25px;
        }

        .rguinf_sporting_content p {
            color: #596472;
            font-size: 19px;
            line-height: 2;
            margin-bottom: 35px;
        }

        /* Mobile */

        @media(max-width:991px) {

            .rguinf_learning {
                padding: 35px 25px;
                border-radius: 35px;
            }

            .rguinf_learning_grid,
            .rguinf_sporting_grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .rguinf_learning_content h2,
            .rguinf_sporting_content h2 {
                font-size: 42px;
            }

            .rguinf_learning_content p,
            .rguinf_sporting_content p {
                font-size: 16px;
            }

            .rguinf_learning_img img,
            .rguinf_sporting_img img {
                height: 260px;
            }

        }
    </style>

    <section class="rguinf_spaces_wrap">

        <div class="rguinf_container">

            <!-- Learning Spaces -->

            <div class="rguinf_learning">

                <div class="rguinf_learning_grid">

                    <div class="rguinf_learning_content">

                        <h2>Learning Spaces</h2>

                        <p>
                            RGU's academic infrastructure is fully air-conditioned and equipped with modern
                            e-classrooms, state-of-the-art laboratories, a central library, and dedicated departmental
                            learning centres across all 24 schools.
                        </p>

                        <a href="library-Resources" class="rguinf_btn">
                            DISCOVER MORE
                        </a>

                    </div>

                    <div class="rguinf_learning_img">
                        <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/learning-spaces.png" alt="">
                    </div>

                </div>

            </div>

            <!-- Sporting Spaces -->

            <div class="rguinf_sporting">

                <div class="rguinf_sporting_grid">

                    <div class="rguinf_sporting_img">
                        <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/sports.png" alt="">
                    </div>

                    <div class="rguinf_sporting_content">

                        <h2>Sporting Spaces</h2>

                        <p>
                            RGU's sports complex features extensive outdoor and indoor facilities that promote physical
                            fitness, competitive spirit, and a healthy lifestyle for all students and staff.
                        </p>

                        <a href="games&sports" class="rguinf_btn">
                            DISCOVER MORE
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        /* ==========================
       PART 3
    ========================== */

        .rguinf_cards_section {
            background: linear-gradient(180deg, #274d89 0%, #001f53 100%);
            border-radius: 70px 70px 0 0;
            padding: 80px 0 100px;
        }

        .rguinf_cards_grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .rguinf_card {
            background: #edf1f7;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        }

        .rguinf_card_img {
            padding: 18px 18px 0;
        }

        .rguinf_card_img img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: 4px;
            display: block;
        }

        .rguinf_card_body {
            padding: 20px 18px 24px;
        }

        .rguinf_card_body h3 {
            font-family: 'Playfair Display', serif;
            color: #264b87;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .rguinf_card_divider {
            height: 1px;
            background: #c8d0db;
            margin-bottom: 18px;
        }

        .rguinf_card_body p {
            color: #5d6672;
            font-size: 15px;
            line-height: 1.9;
            min-height: 95px;
            margin-bottom: 22px;
        }

        .rguinf_card_btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 48px;
            padding: 0 22px;
            background: #d9652f;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .4px;
            transition: .3s;
        }

        .rguinf_card_btn:hover {
            background: #be5424;
            color: #fff;
        }

        @media(max-width:991px) {

            .rguinf_cards_section {
                padding: 50px 0 70px;
                border-radius: 35px 35px 0 0;
            }

            .rguinf_cards_grid {
                grid-template-columns: 1fr;
            }

            .rguinf_card_img img {
                height: 220px;
            }

            .rguinf_card_body p {
                min-height: auto;
            }

        }
    </style>

    <section class="rguinf_cards_section">

        <div class="rguinf_container">

            <div class="rguinf_cards_grid">

                <!-- Accommodation -->

                <div class="rguinf_card">

                    <div class="rguinf_card_img">
                        <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/accomodation.png" alt="">
                    </div>

                    <div class="rguinf_card_body">

                        <h3>Accommodation Spaces</h3>

                        <div class="rguinf_card_divider"></div>

                        <p>
                            Experience a comfortable stay with vigilant security and caring wardens, fostering a
                            community of diverse and talented scholars in a dynamic learning environment.
                        </p>

                        <a href="hostel-life" class="rguinf_card_btn">
                            DISCOVER MORE
                        </a>

                    </div>

                </div>

                <!-- Amenities -->

                <div class="rguinf_card">

                    <div class="rguinf_card_img">
                        <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/amenities.png" alt="">
                    </div>

                    <div class="rguinf_card_body">

                        <h3>Amenities</h3>

                        <div class="rguinf_card_divider"></div>

                        <p>
                            Spanning 30 acres, the WiFi-enabled RGU campus boasts modern classrooms with smartboards,
                            projectors, and state-of-the-art IT infrastructure.
                        </p>

                        <a href="banking-services" class="rguinf_card_btn">
                            DISCOVER MORE
                        </a>

                    </div>

                </div>

                <!-- Hangouts -->

                <div class="rguinf_card">

                    <div class="rguinf_card_img">
                        <img src="new-web/assets/img/Campus-Hostel&Accommodation-Infrastructure/hangout.png" alt="">
                    </div>

                    <div class="rguinf_card_body">

                        <h3>Hangouts</h3>

                        <div class="rguinf_card_divider"></div>

                        <p>
                            From a sprawling dining hall serving healthy vegetarian meals to vibrant cafes, RGU provides
                            an array of dining options for students and staff.
                        </p>

                        <a href="hangout" class="rguinf_card_btn">
                            DISCOVER MORE
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
