@extends('frontend/new-master')
@section('title', ' 1st Covocation : The Assam Royal Global University')
@section('meta_description', 'The first convocation of RGU was held on 30th March 2022 at the University Campus in
    Guwahati where 1723 students have been conferred their Degrees from the following batches')
@section('meta_keywords', ' 1st Covocation')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/convocation/first-convo/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Convocation One</h1>
            <div class="pg-hero-breadcrumb">
                Convocation / Convocation One
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
            height: 420px;
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
                The First convocation of<br>
                The Assam Royal Global University
            </h1>

            <div class="rgucv4_date">
                was held on 30th March, 2022
            </div>

            <div class="rgucv4_stats">

                <div class="rgucv4_stats_row">

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">1723</div>
                        <div class="rgucv4_label">
                            Royalites Awarded<br>
                            Degrees & Diplomas
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">112</div>
                        <div class="rgucv4_label">
                            Gold & Silver Medals<br>
                            Conferred
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">6</div>
                        <div class="rgucv4_label">
                            Achievers in the <br> Co-curricular category
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_num">5</div>
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

                        <img src="new-web/assets/img/convocation/first-convo/headimg.png" alt="Games & Sports">

                    </div>

                    <div>

                        <h2>
                            A Landmark Day for 1723 Royalites
                        </h2>

                        <p>
                            30th March, 2022, marked the First Convocation ceremony of The Assam Royal Global University
                            that awarded degrees and diplomas to 1723 students from graduate and post graduate courses
                            across batches from 2020, 2021, and 2022. This solemn ceremony that was aheld in the wake of
                            the COVID-19 pandemic and was graced by Prof. Yogesh Singh, Vice Chancellor, Delhi
                            University as the Chief Guest, conferred three very distinguished personalities of the
                            country with honorary degrees:
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
                        <img src="new-web/assets/img/convocation/first-convo/Professor-C.N.R.-Rao.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Professor C.N.R. Rao</h4>
                            <p>
                                FNA, FASc, FRS, FTWAS, HonFRSC, MAE, HonFInstP Doctor of Science (D.Sc.) - Honoris
                                Causa. A Bharat Ratna recipient, Linus Pauling Research Professor and Honorary President
                                of Jawaharlal Nehru Centre for Advanced Scientific Research, Bengaluru.
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/first-convo/Professor-Nagen-Saikia.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Professor Nagen Saikia</h4>
                            <p>
                                Doctor of Letters (D.Litt.) - Honoris Causa Former Distinguished Professor of Dibrugarh
                                University, Former President of Assam Sahitya Sabha, Eminent Literator and a Scholar
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="new-web/assets/img/convocation/first-convo/Sri-Sajjan-Bhajanka.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Sri Sajjan Bhajanka</h4>
                            <p>
                                Doctor of Letters (D.Litt.) - Honoris Causa Eminent Industrialist, Social Worker and
                                Educator, Founder of Century Plyboards (India) Ltd.
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
                    <img src="new-web/assets/img/convocation/first-convo/glimpse/2.png" alt="">
                </div>

                <!-- Right Images -->

                <div class="rgucv4_gallery_side">

                    <img src="new-web/assets/img/convocation/first-convo/glimpse/3.png" alt="">

                    <img src="new-web/assets/img/convocation/first-convo/glimpse/4.png" alt="">

                </div>

            </div>

            <!-- Bottom Images -->

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/5.png" alt="">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/6.png" alt="">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/7.png" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/8.png" alt="">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/9.png" alt="">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/10.png" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/11.png" alt="">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/12.png" alt="">

                <img src="new-web/assets/img/convocation/first-convo/glimpse/13.png" alt="">

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
                            <td>Syeda Tabasum Sirin</td>
                            <td>Diploma Interior Design</td>
                            <td>Diploma</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nibharani Pathak</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Punam Agarwalla</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Papuli Konwar</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Upasana Chowdhury</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Samima Yasmin</td>
                            <td>M.Tech CE</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Pinaj Ahmeda</td>
                            <td>MA Economics</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Nukshilemla Jamir</td>
                            <td>MA History</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Kechanguno Peseyie</td>
                            <td>MA Pol.Sc</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Swagata Das</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Rifa Deka</td>
                            <td>MA JMC</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Adrija Biswas</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Pranay Pratik Goswami</td>
                            <td>M.Sc Biotechnology</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Himakshi Kalita</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Debraj Chowdhury</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Kamal Das</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Susmita Paul</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Akan Choudhury</td>
                            <td>M.Tech Construction</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Bonnie Sarma</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Igo Lollen</td>
                            <td>M.Sc EVS</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Utpal Chandra Boro</td>
                            <td>M.Tech EE</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Deeksha Shrivastava</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Trishna Nahata</td>
                            <td>M.Sc Bioctechnology</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Ashish Dutta</td>
                            <td>M.Sc Microbiology</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Shamulailatpam Nivash Sharma</td>
                            <td>M.A History</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Anshumi Dutta</td>
                            <td>M.A Political Science</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Deify Bakordor Suting</td>
                            <td>M.A English</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Samayeeta Singha</td>
                            <td>M.A Geography</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Silky Sharma</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Jyotirmay Nath</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Jyoti Agrahari</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Bhabana Sarma</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Minhajul Nazarat</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Nilakshi Buragohain</td>
                            <td>M.Com</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Medozonuo Ruth Kelio</td>
                            <td>M.Tech CE (WRDM)</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Dilip Kumar Borah</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Rizwana Ahmed</td>
                            <td>BA Applied Psychology</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Nicita Das</td>
                            <td>BA Psychology</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Veno Rudupra</td>
                            <td>BA Sociology</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Nayanika Saikia</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Urvi Mangal</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Shubhangi Agarwal</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Violina Das</td>
                            <td>B.Sc Physics</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Bhavna Choudhary</td>
                            <td>Bsc Chemisry</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Chandan Ladha</td>
                            <td>BCA</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Shruti Barna Sharma</td>
                            <td>B.Tech CE</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Kristin Borgohain</td>
                            <td>B.Tech CSE</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Plabon Boruah</td>
                            <td>B.Tech ME</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Atul Singh</td>
                            <td>B.Tech ECE</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Smarasmika Baruah</td>
                            <td>BA Psychology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Chunglitong Jamir</td>
                            <td>BA Political Science</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Krishnani Konwar</td>
                            <td>BA Sociology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Sreosi Sarkar</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td>Dheemaan Garg</td>
                            <td>BA JMC</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>Sruti Agarwal</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>Babli Shil</td>
                            <td>BCA</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>Prachi Mour</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>Subham Sinha</td>
                            <td>B.Sc Biotechnology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Priyanka Das</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>Fiza Chowdhury</td>
                            <td>B.Sc TTM</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Namrata Nandi</td>
                            <td>BA Economics</td>
                            <td>UG</td>
                            <td>2018</td>
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
                            <td>Monmi Hazarika</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Neha Lohia</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lima Chetia</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Bhaskar Jyoti Borah</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Lawmsangpuia</td>
                            <td>MA Economics</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Katimongla Imchen</td>
                            <td>MA History</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Priyanka Sarmah</td>
                            <td>MA Pol.Sc</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Elizabeth Misao</td>
                            <td>MSW</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Himashri Kumar</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Nilakshi Moni Daimary</td>
                            <td>MA JMC</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Nilankar Mukherjee</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Pinki Kumari Singh</td>
                            <td>M.Sc Biotechnology</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Bishali Dutta</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Nita Saha</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Koushik Kumar Saha</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Sabnam Tehrina Ahmed</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Anu Pamyang</td>
                            <td>M.Tech Construction</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Niharika Handique</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Ratnapriya Choudhury</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Vasundhara Wangkhem</td>
                            <td>M.Sc Bioctechnology</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Pallavi Neog</td>
                            <td>M.Sc Microbiology</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Habiba Rashul Amin</td>
                            <td>M.A History</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Nistha Talukdar</td>
                            <td>M.A Political Science</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Bhanita Kalita</td>
                            <td>M.A English</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Hironmoyee Boro</td>
                            <td>M.A Geography</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Anuran Bordoloi</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Sokir Ahmed Usmani</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Divya Toppo</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Bhupoti Patgiri</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Sakera Khatun</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Dr Rathindra Bhuyan</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Archita Barua</td>
                            <td>BA Applied Psychology</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Nirdeshika Jain</td>
                            <td>BA Psychology</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Annisha Mahanta</td>
                            <td>BA Sociology</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Subhalaxmi Dutta Bora</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Tanvi Baid</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Mohini Mittal</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Pritam Saikia</td>
                            <td>B.Sc Physics</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Princhi Ngathem</td>
                            <td>B.Tech CE</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Sushmita Talukdar</td>
                            <td>B.Tech CSE</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Jyotishman Saikia</td>
                            <td>B.Tech ME</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Ridhika Agarwal</td>
                            <td>BA Psychology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Himangshu Gogoi</td>
                            <td>BA Political Science</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Dristi Darsana Kashyap</td>
                            <td>BA Sociology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Firoza Kauser</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Rudrani Sharma</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Hazel Sawnani</td>
                            <td>BCA</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Pranita Saha</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Khyatismita Choudhury</td>
                            <td>B.Sc Biotechnology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Hima Rabha</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Ronchakoh Tikhak</td>
                            <td>B.Sc TTM</td>
                            <td>UG</td>
                            <td>2018</td>
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
                            <td>Mebanshan Shadap</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Shibangi Rattna Baruah</td>
                            <td>BA (H) Psychology</td>
                            <td>UG</td>
                            <td>2020</td>
                            <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nukshilemla Jamir</td>
                            <td>MA History</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Basudeo Pansari Award for Excellence in Community Service</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Parishmita Baruah</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Namrata Nandi</td>
                            <td>BA Economics</td>
                            <td>UG</td>
                            <td>2021</td>
                            <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Syeda Zeriffa Naim</td>
                            <td>BFA</td>
                            <td>UG</td>
                            <td>2021</td>
                            <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
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
                            <td>Upasana Chowdhury</td>
                            <td>M.Sc. Physics</td>
                            <td>PG</td>
                            <td>2019</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rifa Deka</td>
                            <td>MA J &amp; Mc</td>
                            <td>PG</td>
                            <td>2020</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Veno Rudupra</td>
                            <td>BA (H) Sociology</td>
                            <td>UG</td>
                            <td>2020</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nilakshi Buragohain</td>
                            <td>M.Com</td>
                            <td>PG</td>
                            <td>2021</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Namrata Nandi</td>
                            <td>BA (H) Economics</td>
                            <td>UG</td>
                            <td>2021</td>
                        </tr>
                    </tbody>


                </table>

            </div>

        </div>

    </section>

@endsection
