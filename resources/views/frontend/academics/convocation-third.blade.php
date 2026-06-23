@extends('frontend/new-master')
@section('title', ' 3rd Convocation : The Assam Royal Global University')
@section('meta_description', 'The third convocation of The Assam Royal Global University was held on 30th October, 2023
    where 1197 graduates have been conferred their Degrees from the following batches:')
@section('meta_keywords', ' 3rd Convocation')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/convocation/first-convo/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Convocation Three</h1>
            <div class="pg-hero-breadcrumb">
                Convocation / Convocation Three
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
                The Third convocation of<br>
                The Assam Royal Global University
            </h1>

            <div class="rgucv4_date">
                was held on 30th October, 2023
            </div>

            <div class="rgucv4_stats">

                <div class="rgucv4_stats_row">

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">1,197</div>
                        <div class="rgucv4_label">
                            Royalites Awarded<br>
                            Degrees & Diplomas
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">87</div>
                        <div class="rgucv4_label">
                            Gold & Silver Medals<br>
                            Conferred
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">4</div>
                        <div class="rgucv4_label">
                            Achievers in the <br> Co-curricular category
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_num">2</div>
                        <div class="rgucv4_label">
                            Recipients of the <br> Chancellor's Gold Medal
                        </div>
                    </div>

                </div>

                <div class="rgucv4_line"></div>

            </div>

            <!-- Intro Section -->

            <div class="rgucv4_intro">

                <div class="rgucv4_intro_grid">

                    <div class="rgucv4_image">

                        <img src="new-web/assets/img/convocation/third-convo/glimpse/big-img.png" alt="Games & Sports">

                    </div>

                    <div>

                        <h2>
                            A Landmark Day for 1,197 Royalites
                        </h2>

                        <p>
                            The Third Convocation Ceremony of The Assam Royal Global University, held on 30 October
                            2023, was graced by the Vice President of India, Jagdeep Dhankhar, as the Chief Guest. The
                            ceremony was presided over by the Visitor of the University, Gulab Chand Kataria, Governor
                            of Assam.
                            <br>
                            A total of 1,197 students, including 42 Gold Medallists, 45 Silver Medallists, and 4
                            recipients of Salvers for exemplary achievements, received their degrees and diplomas from
                            the Guest of Honour, Himanta Biswa Sarma, Chief Minister of Assam; Ranoj Pegu, Minister of
                            Education, Assam; Nandita Garlosa, Minister of Power, Assam; and Paban Kumar Borthakur,
                            Chief Secretary to the Government of Assam.
                            <br>
                            In his address, Vice President Dhankhar congratulated the graduating students and expressed
                            his admiration for the University's impressive academic and physical infrastructure. He
                            acknowledged the relentless efforts of The Assam Royal Global University in providing access
                            to quality education for students from the Northeastern Region of India and beyond, while
                            ensuring that tradition and modernity are guided by Indian culture and values.
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
            grid-template-columns: repeat(3, 1fr);
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
                    <h2>Chief Guest</h2>


                </div>

                <div class="rgucv4_honoris_cards_blue">

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/third-convo/g0.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Shri Jagdeep Dhankhar</h4>
                            <p>
                                Former 14th Vice President of India
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/third-convo/g1.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Dr. Himanta Biswa Sarma</h4>
                            <p>
                                Chief Minister of Assam
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/third-convo/g2.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Dr. Ranoj Pegu</h4>
                            <p>
                                Minister, Department of Education
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/third-convo/g3.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Ms. Nandita Garlosa</h4>
                            <p>
                                Minister, Department of Power
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/third-convo/g4.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Sri Pabon Borthakur</h4>
                            <p>
                                Chief Secretary to Government of Assam
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
            grid-template-columns: 1.6fr 1fr;
            gap: 25px;
        }

        .rgucv4_gallery_main {
            overflow: hidden;
            border-radius: 10px;
        }

        .rgucv4_gallery_main img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }

        .rgucv4_gallery_side {
            display: grid;
            grid-template-rows: repeat(2, 1fr);
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
                height: 350px;
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
                    <img src="new-web/assets/img/convocation/third-convo/headimg.jpg" alt="">
                </div>

                <!-- Right Images -->

                <div class="rgucv4_gallery_side">

                    <img src="new-web/assets/img/convocation/third-convo/glimpse/1.jpg" alt="">

                    <img src="new-web/assets/img/convocation/third-convo/glimpse/2.jpg" alt="">

                </div>

            </div>

            <!-- Bottom Images -->

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/3.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/4.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/5.jpg" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/6.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/7.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/8.jpg" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/9.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/10.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/11.jpg" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/12.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/13.jpg" alt="">

                <img src="new-web/assets/img/convocation/third-convo/glimpse/14.jpg" alt="">

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


    <section class="rgucv4_dignitaries">

        <div class="rgucv4_container">

            <h2>Recipients of Gold Medals</h2>

            <div class="table-responsive">

                <table class="rgucv4_dig_table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>STUDENT NAME</th>
                            <th>COURSE</th>
                            <th>UG/PG</th>
                            <th>BATCH</th>
                            <th>MEDAL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nilanjana Parashar</td>
                            <td>B.A LLB</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Muskan Varshney</td>
                            <td>B.Arch</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Piyush Kumar</td>
                            <td>B.Tech CSE</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Petrus Cheria Chetia Baraik</td>
                            <td>BFA</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Donita Devi</td>
                            <td>B.Pharmacy</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Khusbu Beriwal</td>
                            <td>D.Pharmacy</td>
                            <td>2 YEAR</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Mansica Devi Lourembam</td>
                            <td>B.Sc. Maths</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Tanissha Roy</td>
                            <td>B.A Psychology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Subhashree Dey</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Tanmayee Kapinjal</td>
                            <td>B.Com Finance &amp; Accounts</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Sunny Sen</td>
                            <td>B.Sc Biotechnology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>Jumi Talukdar</td>
                            <td>B.Sc Microbiology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>Disha Agarwal</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>Minara Pakiza Ullah</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>Prachee Kalita</td>
                            <td>B.A English</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>Abdul Waqur Albir Rahman</td>
                            <td>B.A History</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>Sneha Singha</td>
                            <td>B.A J&amp;MC</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>Rudrani Garg</td>
                            <td>B.A Political Science</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>Tanisha Ganguly</td>
                            <td>B.A Sociology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td>Aanchal Golchha</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Peli. T. Yeptho</td>
                            <td>BSW</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>22</td>
                            <td>Priya Chakraborty</td>
                            <td>M.Com</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>23</td>
                            <td>Sureksha Bharali</td>
                            <td>M.Sc Biotechnology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>24</td>
                            <td>Ankita Mili</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>25</td>
                            <td>Ruckshana Khatun</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>26</td>
                            <td>Pratyakshi Sarma</td>
                            <td>M.Sc Mathematics</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>27</td>
                            <td>Chayanika Kalita</td>
                            <td>M.Sc Microbiology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>28</td>
                            <td>Anish Uz Zaman</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>29</td>
                            <td>Priyanka Das</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>30</td>
                            <td>Nihar Pratim Kashyap</td>
                            <td>M.Tech Civil Engineering</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>31</td>
                            <td>Sumit Deb</td>
                            <td>M.A Geography</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>32</td>
                            <td>Krishti Abhilasa Bhuyan</td>
                            <td>M.A Clinical Psychology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>33</td>
                            <td>Jupitora Talukdar</td>
                            <td>M.A Economics</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>34</td>
                            <td>Rahul Thokchom</td>
                            <td>M.A English</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>35</td>
                            <td>Lova Ngathem</td>
                            <td>M.A History</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>36</td>
                            <td>Thampaleena Longjam</td>
                            <td>M.A J&amp;MC</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>37</td>
                            <td>Disha Choudhury</td>
                            <td>M.A Political Science</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>38</td>
                            <td>Ahellabash Oinam</td>
                            <td>M.A Public Administration</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>39</td>
                            <td>Priya Agarwala</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>40</td>
                            <td>Hazel Sawnani</td>
                            <td>MCA</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Neimezhunuo Rutsa</td>
                            <td>MSW</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>42</td>
                            <td>Susmita Choudhury</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2022</td>
                            <td>Gold</td>
                        </tr>
                    </tbody>

                </table>

            </div>

            <h2 class="pt-5">Recipients of Silver Medals</h2>

            <div class="table-responsive">

                <table class="rgucv4_dig_table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>STUDENT NAME</th>
                            <th>COURSE</th>
                            <th>UG/PG</th>
                            <th>BATCH</th>
                            <th>MEDAL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kessie K. Chophy</td>
                            <td>BA LLB</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Devleena Hazarika</td>
                            <td>B.Arch</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Imnatemsu</td>
                            <td>B.Tech CE</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Anwayajyoti Dey</td>
                            <td>B.Tech CSE</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Akansha Singha</td>
                            <td>BFA</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Jaya Saha</td>
                            <td>B.Pharmacy</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Ankita Roy</td>
                            <td>B.Sc Nursing</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Imran Hossain</td>
                            <td>D.Pharmacy</td>
                            <td>2 YEAR</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Hoinunnem Doungel</td>
                            <td>B.A Geography</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Jennifer Leimapokpam</td>
                            <td>B.A Psychology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Deepanwita Endow Purkayastha</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>Wanpynshngain B Diengdoh</td>
                            <td>B.Com Finance &amp; Accounts</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>Jeba Sania</td>
                            <td>B.Sc Biotechnology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>Rafiya Yasmin Saikia</td>
                            <td>B.Sc Microbiology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>Nabanya Priyam Bez</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>Pratiksha Nath</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>Meenakshi Dasgupta</td>
                            <td>B.A English</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>Alice Welly</td>
                            <td>B.A History</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>Priyanka Bhattacharya</td>
                            <td>B.A J&amp;MC</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td>Trishna Das</td>
                            <td>B.A Political Science</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Saiyantany Choudhury</td>
                            <td>B.A Sociology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>22</td>
                            <td>Neha Bothra</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>23</td>
                            <td>Hritik Pathak</td>
                            <td>BCA</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>24</td>
                            <td>Anannya Das</td>
                            <td>BSW</td>
                            <td>UG</td>
                            <td></td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>25</td>
                            <td>Gun Dongkam Ch Sangma</td>
                            <td>M.Com</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>26</td>
                            <td>Khyatismita Choudhury</td>
                            <td>M.Sc Biotechnology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>27</td>
                            <td>Digbijoy Singha</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>28</td>
                            <td>Rimjhim Dauka</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>29</td>
                            <td>Himadree Choudhury</td>
                            <td>M.Sc Mathematics</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>30</td>
                            <td>Akangkhya Hazarika</td>
                            <td>M.Sc Microbiology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>31</td>
                            <td>Risha Das</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>32</td>
                            <td>Arpana Rabha</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>33</td>
                            <td>Matsungzukla Jamir</td>
                            <td>M.Tech Civil Engineering</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>34</td>
                            <td>Sonia Samjetsabam</td>
                            <td>M.A Geography</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>35</td>
                            <td>Dorje Yangzom</td>
                            <td>M.A Clinical Psychology</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>36</td>
                            <td>Darshita Das</td>
                            <td>M.A Economics</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>37</td>
                            <td>Esther Lalchhanhimi</td>
                            <td>M.A English</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>38</td>
                            <td>Yohenba Tekcham</td>
                            <td>M.A History</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>39</td>
                            <td>Dolly Takhellambam</td>
                            <td>M.A J&amp;MC</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>40</td>
                            <td>Chunglitong Jamir</td>
                            <td>M.A Political Science</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Tayenjam Purnajit Singh</td>
                            <td>M.A Public Administration</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>42</td>
                            <td>Pooja Agarwala</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>43</td>
                            <td>Debraj Aditya</td>
                            <td>MCA</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>44</td>
                            <td>Riya Mishra</td>
                            <td>MSW</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>45</td>
                            <td>Ankita Talukdar</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2022</td>
                            <td>Silver</td>
                        </tr>
                    </tbody>

                </table>

            </div>

            <h2 class="pt-5">Achievers in the Co-curricular category</h2>

            <div class="table-responsive">

                <table class="rgucv4_dig_table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>STUDENT NAME</th>
                            <th>COURSE</th>
                            <th>UG/PG</th>
                            <th>BATCH</th>
                            <th>AWARD</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nilanjana Parashar</td>
                            <td>BA LLB (HONS)</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Bode Swuro</td>
                            <td>BFA</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Swati Choudhury</td>
                            <td>B.SC ZOOLOGY</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Suresh Kumar Prithani Award for Excellence in Mentoring</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Rudrani Garg</td>
                            <td>B.A Political Science</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Basudeo Pansari Award for Excellence in Community Service</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <h2 class="pt-5">Recipients of the Chancellor's Gold Medal</h2>

            <div class="table-responsive">

                <table class="rgucv4_dig_table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>STUDENT NAME</th>
                            <th>COURSE</th>
                            <th>UG/PG</th>
                            <th>BATCH</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rudrani Garg</td>
                            <td>B.A Political Science</td>
                            <td>UG</td>
                            <td>2020</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Disha Choudhury</td>
                            <td>M.A Political Science</td>
                            <td>PG</td>
                            <td>2020</td>
                        </tr>
                    </tbody>


                </table>

            </div>

        </div>

    </section>
@endsection
