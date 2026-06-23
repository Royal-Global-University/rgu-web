@extends('frontend/new-master')
@section('title', ' Fourth Convocation : The Assam Royal Global University')
@section('meta_description', 'Celebrate the achievements of graduates at the Fourth Convocation of Royal Global University, a momentous event honoring academic excellence and the journey of students towards a successful future.')
@section('meta_keywords', ' Fourth Convocation')
@section('content')
        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/convocation/first-convo/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Convocation Four</h1>
            <div class="pg-hero-breadcrumb">
                Convocation / Convocation Four
            </div>
        </div>

    </section>

    <style>
        /* ====================================
   RGU FOURTH CONVOCATION
   PREFIX : rgucv4_
==================================== */

        .rgucv4_section {
            padding: 90px 0;
            background: #edf1f7;
        }

        .rgucv4_container {
            width: 100%;
            max-width: 1250px;
            margin: auto;
            padding: 0 15px;
        }

        .rgucv4_title {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 45px;
            font-weight: 700;
            line-height: 1.2;
            color: #264a86;
        }

        .rgucv4_date {
            text-align: center;
            margin-top: 15px;
            color: #d9622b;
            font-size: 28px;
            font-weight: 500;
        }

        .rgucv4_stats {
            margin-top: 70px;
            position: relative;
        }

        .rgucv4_line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #9aa9bf;
        }

        .rgucv4_stats_row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .rgucv4_stat {
            text-align: center;
            position: relative;
            padding-bottom: 40px;
        }

        .rgucv4_stat:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 20px;
            width: 1px;
            height: 120px;
            background: #9aa9bf;
        }

        .rgucv4_dot {
            width: 14px;
            height: 14px;
            background: #284d89;
            border-radius: 50%;
            position: absolute;
            right: -7px;
            top: 10px;
            z-index: 2;
        }

        .rgucv4_stat:last-child .rgucv4_dot {
            display: none;
        }

        .rgucv4_num {
            color: #d9622b;
            font-size: 60px;
            font-weight: 700;
            line-height: 1;
        }

        .rgucv4_label {
            margin-top: 18px;
            color: #505965;
            font-size: 24px;
            line-height: 1.5;
        }

        /* Video Section */

        .rgucv4_intro {
            margin-top: 90px;
        }

        .rgucv4_intro_grid {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .rgucv4_image {
            border-radius: 28px;
            overflow: hidden;
        }

        .rgucv4_image img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            display: block;
        }

        .rgucv4_intro h2 {
            font-family: 'Playfair Display', serif;
            color: #264a86;
            font-size: 40px;
            line-height: 1.15;
            margin-bottom: 25px;
        }

        .rgucv4_intro p {
            font-size: 20px;
            line-height: 2;
            color: #515a65;
        }
    </style>

    <section class="rgucv4_section">

        <div class="rgucv4_container">

            <h1 class="rgucv4_title">
                The Fourth convocation of<br>
                The Assam Royal Global University
            </h1>

            <div class="rgucv4_date">
                was held on 30th November, 2024
            </div>

            <div class="rgucv4_stats">

                <div class="rgucv4_stats_row">

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">1,502</div>
                        <div class="rgucv4_label">
                            Royalites Awarded<br>
                            Degrees & Diplomas
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">100</div>
                        <div class="rgucv4_label">
                            Gold & Silver Medals<br>
                            Conferred
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">2</div>
                        <div class="rgucv4_label">
                            Chancellor's <br> Gold Medals
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">5</div>
                        <div class="rgucv4_label">
                            Achievers in the <br> Co-curricular category
                        </div>
                    </div>

                    
                </div>

                <div class="rgucv4_line"></div>

            </div>

            <!-- Intro Section -->

            <div class="rgucv4_intro">

                <div class="rgucv4_intro_grid">

                    <div class="rgucv4_image">

                        <img src="new-web/assets/img/convocation/fourth-convo/headimg.png" alt="Games & Sports">

                    </div>

                    <div>

                        <h2>
                            A Landmark Day for 1,502 Royalites
                        </h2>

                        <p>
                            The Fourth Convocation Ceremony of The Assam Royal Global University (RGU), held on 30
                            November 2024, was presided over by the Visitor of the University, Hon'ble Governor of
                            Assam, Lakshman Prasad Acharya. A total of 1,502 Royalites were awarded degrees and diplomas
                            by Piyush Goyal, Hon'ble Union Minister of Commerce and Industry; Ranoj Pegu, Hon'ble
                            Education Minister of Assam; and Bimal Borah, Hon'ble Minister for Industries and Commerce,
                            Assam.
                            <br>
                            Among the graduates were 771 undergraduate students, 651 postgraduate students, and 25 Ph.D.
                            scholars, marking a significant milestone in their academic journeys. The ceremony also
                            celebrated outstanding academic and extracurricular achievements. A total of 50 Gold Medals,
                            50 Silver Medals, and 2 Chancellor's Gold Medals were awarded to exceptional students.
                            Additionally, 5 Salvers and Medals were presented to Royalites for excellence in Literary
                            Activities, Cultural Activities, Community Service, Mentoring, and Sports.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        /* ==========================
   PART 2
========================== */

        .rgucv4_blue_section {
            background: linear-gradient(180deg, #264c89 0%, #001f53 100%);
            border-radius: 70px 70px 0 0;
            padding: 90px 0 70px;
        }

        /* Cards */

        .rgucv4_degree_cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .rgucv4_degree_card {
            background: #dde6f3;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
        }

        .rgucv4_degree_card h3 {
            font-family: 'Playfair Display', serif;
            color: #d9622b;
            font-size: 28px;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .rgucv4_degree_card hr {
            border: none;
            border-top: 1px solid #8fa0b7;
            margin: 0 0 25px;
        }

        .rgucv4_degree_card p {
            color: #5b6571;
            font-size: 17px;
            line-height: 1.9;
            margin: 0;
        }

        /* Medal Stats */

        .rgucv4_medal_wrap {
            margin-top: 85px;
            position: relative;
        }

        .rgucv4_medal_line {
            position: absolute;
            bottom: 0;
            left: 8%;
            width: 84%;
            height: 1px;
            background: rgba(255, 255, 255, .35);
        }

        .rgucv4_medal_grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
        }

        .rgucv4_medal_item {
            text-align: center;
            position: relative;
            padding-bottom: 35px;
        }

        .rgucv4_medal_item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 1px;
            height: 145px;
            background: rgba(255, 255, 255, .35);
        }

        .rgucv4_medal_dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #e46d33;
            position: absolute;
            right: -8px;
            top: -6px;
        }

        .rgucv4_medal_item:last-child .rgucv4_medal_dot {
            display: none;
        }

        .rgucv4_medal_bottomdot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #e46d33;
            position: absolute;
            bottom: -8px;
            right: -8px;
        }

        .rgucv4_medal_item:last-child .rgucv4_medal_bottomdot {
            display: none;
        }

        .rgucv4_medal_num {
            color: #ef7135;
            font-size: 64px;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 20px;
        }

        .rgucv4_medal_text {
            color: #fff;
            font-size: 24px;
            line-height: 1.6;
        }

        @media(max-width:991px) {

            .rgucv4_degree_cards {
                grid-template-columns: 1fr;
            }

            .rgucv4_medal_grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .rgucv4_medal_item:after,
            .rgucv4_medal_dot,
            .rgucv4_medal_bottomdot {
                display: none !important;
            }

            .rgucv4_medal_line {
                display: none;
            }

        }

        .rgucv4_honoris_heading {
            text-align: center;
            max-width: 900px;
            margin: 0 auto 60px;
        }

        .rgucv4_honoris_heading h2 {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            color: #fff;
            margin-bottom: 20px;
        }

        .rgucv4_honoris_heading p {
            color: rgba(255, 255, 255, .85);
            font-size: 18px;
            line-height: 2;
        }

        .rgucv4_honoris_cards_blue {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .rgucv4_honoris_cards_blue .rgucv4_hcard {
            background: #dde6f3;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .rgucv4_honoris_cards_blue .rgucv4_hcard img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .rgucv4_honoris_cards_blue .rgucv4_hcard_body {
            padding: 22px;
        }

        .rgucv4_honoris_cards_blue .rgucv4_hcard_body h4 {
            color: #d9622b;
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .rgucv4_honoris_cards_blue .rgucv4_hcard_body p {
            color: #55606c;
            line-height: 1.8;
            margin: 0;
        }

        @media(max-width:991px) {

            .rgucv4_honoris_cards_blue {
                grid-template-columns: 1fr;
            }

            .rgucv4_honoris_heading h2 {
                font-size: 38px;
            }

        }
    </style>

    <section class="rgucv4_blue_section">

        <div class="rgucv4_container">

            <div class="rgucv4_honoris_blue">

                <div class="rgucv4_honoris_heading">
                    <h2>Honoris Causa</h2>

                    <p>
                        The Assam Royal Global University conferred the prestigious Degree of
                        Doctor of Letters (Honoris Causa) upon distinguished personalities
                        whose contributions have significantly enriched society, public
                        service, industry, education and culture.
                    </p>


                </div>

                <div class="rgucv4_honoris_cards_blue">

                    <div class="rgucv4_hcard">
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-1.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Mr. Justice Ranjan Gogoi</h4>
                            <p>
                                Doctor of Laws (LL.D.) - Honoris Causa. Member of Rajya Sabha and Former Chief Justice of India.
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-2.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Dr. Raghunath Anant Mashelkar</h4>
                            <p>
                                FTWAS, FNA, FASc, FRS, FREng, FRSC Doctor of Science (D.Sc.) - Honoris Causa. Former Director General, CSIR and Padma Vibhushan recipient.
                            </p>
                        </div>
                    </div>

                     <div class="rgucv4_hcard">
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-4.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Dr. Krisnaswamy Kasturirangan</h4>
                            <p>
                               Doctor of Science (D.Sc.) - Honoris Causa. Former Chairman, ISRO, Chairperson, Drafting Committee, NEP 2020 and Padma Vibhushan recipient.
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/third-3.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Shri Harshvardhan Neotia</h4>
                            <p>
                               Doctor of Letters (D.Litt.) - Honoris Causa, Chairman , Ambuja Neotia Group and Padma Shri recipient.
                            </p>
                        </div>
                    </div>

                   

                </div>

            </div>

        </div>

    </section>

    <style>
        /* ==========================
   PART 4 - GALLERY
========================== */

        .rgucv4_gallery {
            background: #edf1f7;
            padding: 90px 0 120px;
        }

        .rgucv4_gallery_head {
            text-align: center;
            margin-bottom: 60px;
        }

        .rgucv4_gallery_head h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #264a86;
            margin: 0;
        }

        /* Masonry Layout */

        .rgucv4_gallery_grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .rgucv4_gallery_main {
            overflow: hidden;
            border-radius: 10px;
        }

        .rgucv4_gallery_main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .rgucv4_gallery_side {
            display: grid;
            grid-template-rows: repeat(0, 1fr);
            gap: 25px;
        }

        .rgucv4_gallery_side img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        .rgucv4_gallery_bottom {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 25px;
        }

        .rgucv4_gallery_bottom img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        /* Hover */

        .rgucv4_gallery img {
            transition: .4s;
        }

        .rgucv4_gallery img:hover {
            transform: scale(1.03);
        }

        /* Mobile */

        @media(max-width:991px) {

            .rgucv4_gallery {
                padding: 70px 0;
            }

            .rgucv4_gallery_head h2 {
                font-size: 42px;
            }

            .rgucv4_gallery_grid {
                grid-template-columns: 1fr;
            }

            .rgucv4_gallery_main img {
                height: 100%;
            }

            .rgucv4_gallery_side {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: auto;
            }

            .rgucv4_gallery_side img {
                height: 180px;
            }

            .rgucv4_gallery_bottom {
                grid-template-columns: 1fr;
            }

            .rgucv4_gallery_bottom img {
                height: 220px;
            }

        }
    </style>

    <section class="rgucv4_gallery">

        <div class="rgucv4_container">

            <div class="rgucv4_gallery_head">
                <h2>Convocation Gallery</h2>
            </div>

            <div class="rgucv4_gallery_grid">

                <!-- Large Image -->

                <div class="rgucv4_gallery_main">
                    <img src="new-web/assets/img/convocation/fourth-convo/gallery.png" alt="">
                </div>

                <!-- Right Images -->

               

            </div>

   

        </div>

    </section>

    <style>
        /* ==========================
   PART 3
========================== */

        .rgucv4_honoris {
            padding: 90px 0;
            background: #edf1f7;
        }

        .rgucv4_honoris_grid {
            display: grid;
            grid-template-columns: 420px 1fr;
            gap: 40px;
            align-items: start;
        }

        .rgucv4_honoris_left h2 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            line-height: 1.1;
            color: #264a86;
            margin-bottom: 25px;
        }

        .rgucv4_honoris_left p {
            color: #55606c;
            font-size: 18px;
            line-height: 2;
        }

        .rgucv4_honoris_cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .rgucv4_hcard {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
        }

        .rgucv4_hcard img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
        }

        .rgucv4_hcard_body {
            padding: 22px;
        }

        .rgucv4_hcard_body h4 {
            font-size: 24px;
            color: #d9652f;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .rgucv4_hcard_body p {
            margin: 0;
            color: #5c6571;
            line-height: 1.7;
            font-size: 16px;
        }

        /* Dignitaries */

        .rgucv4_dignitaries {
            background: linear-gradient(180deg, #264c89 0%, #001f53 100%);
            border-radius: 70px 70px 0 0;
            padding: 90px 0;
        }

        .rgucv4_dignitaries h2 {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #fff;
            margin-bottom: 60px;
        }

        .rgucv4_dig_table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
        }

        .rgucv4_dig_table thead th {
            background: #ef7135;
            color: #fff;
            padding: 22px;
            font-size: 22px;
            text-align: left;
        }

        .rgucv4_dig_table tbody td {
            padding: 24px 22px;
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, .15);
            font-size: 18px;
            vertical-align: top;
        }

        .rgucv4_dig_table tbody tr:last-child td {
            border-bottom: none;
        }

        .rgucv4_dig_table td:first-child {
            width: 35%;
            font-weight: 600;
        }

        @media(max-width:991px) {

            .rgucv4_honoris_grid {
                grid-template-columns: 1fr;
            }

            .rgucv4_honoris_cards {
                grid-template-columns: 1fr;
            }

            .rgucv4_honoris_left h2,
            .rgucv4_dignitaries h2 {
                font-size: 42px;
            }

            .rgucv4_hcard img {
                height: 240px;
            }

            .rgucv4_dig_table {
                min-width: 900px;
            }

        }
    </style>
@endsection
