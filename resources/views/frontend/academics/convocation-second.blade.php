@extends('frontend/new-master')
@section('title', ' 2nd Convocation : The Assam Royal Global University')
@section('meta_description', 'The second convocation of RGU was held on 11th November 2022 where 951 graduates have been
    conferred their Degrees from the following batches:')
@section('meta_keywords', ' 2nd Convocation')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/convocation/first-convo/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Convocation Two</h1>
            <div class="pg-hero-breadcrumb">
                Convocation / Convocation Two
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
                The Second convocation of<br>
                The Assam Royal Global University
            </h1>

            <div class="rgucv4_date">
                was held on 11th November, 2022
            </div>

            <div class="rgucv4_stats">

                <div class="rgucv4_stats_row">

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">951</div>
                        <div class="rgucv4_label">
                            Royalites Awarded<br>
                            Degrees & Diplomas
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">66</div>
                        <div class="rgucv4_label">
                            Gold & Silver Medals<br>
                            Conferred
                        </div>
                    </div>

                    <div class="rgucv4_stat">
                        <div class="rgucv4_dot"></div>
                        <div class="rgucv4_num">5</div>
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

                        <img src="new-web/assets/img/convocation/first-convo/headimg.png" alt="Games & Sports">

                    </div>

                    <div>

                        <h2>
                            A Landmark Day for 951 Royalites
                        </h2>

                        <p>
                            At the Second Convocation Ceremony of The Royal Global University, 951 graduates were
                            awarded degrees and diplomas, including 30 Gold Medallists, 36 Silver Medallists, 2
                            recipients of the Chancellor's Gold Medal, and 5 recipients of Salvers and Medals
                            recognizing excellence in Literary Activities, Cultural Activities, Community Service,
                            Mentoring, and Sports.
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
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/scnd-1.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Professor Ajay Kumar Sood</h4>
                            <p>
                                Doctor of Science (D.Sc.) - Honoris Causa. Principal Scientific Advisor to the
                                Government of India.
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/scnd-2.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Ms. Patricia Mukhim</h4>
                            <p>
                                Doctor of Letters (D.Litt.) - Honoris Causa Journalist and Editor, The Shillong Times
                                and a Social Activist.
                            </p>
                        </div>
                    </div>

                    <div class="rgucv4_hcard">
                        <img src="https://rgu.ac/mobile-assets/hall-of-fame-new/profiles/scnd-3.png" alt="">
                        <div class="rgucv4_hcard_body">
                            <h4>Dr. Ashok Kumar Mittal</h4>
                            <p>
                                Doctor of Letters (D.Litt.) - Honoris Causa Chancellor, Lovely Professinal University
                                and Member of Rajya Sabha.
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
                    <img src="new-web/assets/img/convocation/second-convo/big-img.png" alt="">
                </div>

                <!-- Right Images -->

                <div class="rgucv4_gallery_side">

                    <img src="new-web/assets/img/convocation/second-convo/2.jpg" alt="">

                    <img src="new-web/assets/img/convocation/second-convo/3.jpg" alt="">

                </div>

            </div>

            <!-- Bottom Images -->

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/second-convo/4.jpg" alt="">

                <img src="new-web/assets/img/convocation/second-convo/5.jpg" alt="">

                <img src="new-web/assets/img/convocation/second-convo/6.jpg" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/second-convo/7.jpg" alt="">

                <img src="new-web/assets/img/convocation/second-convo/8.jpg" alt="">

                <img src="new-web/assets/img/convocation/second-convo/9.jpg" alt="">

            </div>

            <div class="rgucv4_gallery_bottom">

                <img src="new-web/assets/img/convocation/second-convo/10.jpg" alt="">

                <img src="new-web/assets/img/convocation/second-convo/11.jpg" alt="">

                <img src="new-web/assets/img/convocation/second-convo/12.jpg" alt="">

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
                            <td>Thungrhoni O Humtsoe</td>
                            <td>MA History</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Aparajita Goon</td>
                            <td>MA- Sociology</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Nitul Kalita</td>
                            <td>MA Pol.Sc</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Nabin Roshan Lakra</td>
                            <td>MSW</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Esmeralda Emma Pathaw</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Anwesha Bhattacharjee</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Arundhati Roymedhi</td>
                            <td>M.Com</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Mausumi Sarma</td>
                            <td>M.Sc Microbiology</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Sneha Mudoi</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Dimpal Talukdar</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Leeza Dutta</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>Meghna Sandilya</td>
                            <td>M.Sc Maths</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>Lawanda Gracentia Synrem</td>
                            <td>MA Geography</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>Graceful C Marboh</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>Neivito Vitsu</td>
                            <td>BFA</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>Joshi Wahengbam</td>
                            <td>B.Tech CE</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>Bijit Kalita</td>
                            <td>B.Tech CSE</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>Shakthi Narayanan M.</td>
                            <td>B.Tech ME</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>Anisha Bharatia</td>
                            <td>BA Applied Psychology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td>Haripriya Wangkhem</td>
                            <td>BA Psychology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Siamkima Guite</td>
                            <td>BA Political Science</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>22</td>
                            <td>Sabina Rahman</td>
                            <td>BA Sociology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>23</td>
                            <td>Rikee Talukdar</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>24</td>
                            <td>Jannat Al Khanam</td>
                            <td>BA JMC</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>25</td>
                            <td>Sonal Pradhan</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>26</td>
                            <td>Arunabh Bharadwaz</td>
                            <td>B.Sc IT</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>27</td>
                            <td>Himanshi Goyal</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>28</td>
                            <td>Bhaswaty Bora</td>
                            <td>B.Sc Microbiology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>29</td>
                            <td>Swaswati Borpuzari</td>
                            <td>B.Sc Biotechnology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Gold</td>
                        </tr>

                        <tr>
                            <td>30</td>
                            <td>Geetartha Pratim Dey</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2019</td>
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
                            <td>Anali Zhimo</td>
                            <td>MA History</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Saptaswara Sandilya</td>
                            <td>MA- Sociology</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Anuva Das</td>
                            <td>MA Pol.Sc</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Kritika Mahela</td>
                            <td>MSW</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Ashif Ul Hussain</td>
                            <td>MA English</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Prity Patodia</td>
                            <td>MBA</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Hijam Dinakumar Singh</td>
                            <td>M.Com</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Chandramita Das</td>
                            <td>M.Sc Microbiology</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Mhalevino Rhetso</td>
                            <td>M.Sc Biotechnology</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Kaberi Bordoloi</td>
                            <td>M.Sc Botany</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Fatema Eshrak</td>
                            <td>M.Sc Zoology</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>Pankaj Sarma</td>
                            <td>M.Sc Chemistry</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>Rodali Talukdar</td>
                            <td>M.Sc Physics</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>Jina Nath</td>
                            <td>M.Sc Maths</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>Mebanpher Kupar Nongbri</td>
                            <td>MA Geography</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>Nending Sonia</td>
                            <td>LLM</td>
                            <td>PG</td>
                            <td>2021</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>Thejazeno Paphino</td>
                            <td>B.Arch</td>
                            <td>UG</td>
                            <td>2017</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>Aditya Deb Nath</td>
                            <td>BFA</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>Farhat Azim</td>
                            <td>B.Tech CE</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>20</td>
                            <td>Rizwan Ansari</td>
                            <td>B.Tech CSE</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Raktutpal Saikia</td>
                            <td>B.Tech ME</td>
                            <td>UG</td>
                            <td>2018</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>22</td>
                            <td>Prerna Chowdhury</td>
                            <td>BA Applied Psychology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>23</td>
                            <td>Sneha Deka</td>
                            <td>BA Psychology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>24</td>
                            <td>Pooja Shil</td>
                            <td>BA History</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>25</td>
                            <td>Ankita Kalita</td>
                            <td>BA Political Science</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>26</td>
                            <td>Mihika Chowdhury</td>
                            <td>BA Sociology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>27</td>
                            <td>Kannaki Hazarika</td>
                            <td>BSW</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>28</td>
                            <td>Pratyasha Das</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>29</td>
                            <td>Ipshita Biswas</td>
                            <td>BA JMC</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>30</td>
                            <td>Yengkhom Maleshwori Devi</td>
                            <td>BBA</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>31</td>
                            <td>Shibam Jyoti Das</td>
                            <td>BCA</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>32</td>
                            <td>Ria Saikia</td>
                            <td>B.Sc IT</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>33</td>
                            <td>Hrishika Pipalwa</td>
                            <td>B.Com</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>34</td>
                            <td>Sangeeta Sarma</td>
                            <td>B.Sc Microbiology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>35</td>
                            <td>Prapti Baishya</td>
                            <td>B.Sc Biotechnology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Silver</td>
                        </tr>

                        <tr>
                            <td>36</td>
                            <td>Nidhi Medhi</td>
                            <td>B.Sc Zoology</td>
                            <td>UG</td>
                            <td>2019</td>
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
                            <td>Rikee Talukdar</td>
                            <td>BA English</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Sanwarmal Modi Award for Excellence in Cultural Activities</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Sewagi Savapandit</td>
                            <td>B.Sc. Biochemistry</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Basudeo Pansari Award for Excellence in Community Service</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Roadali Ranjan Bhattacharyya</td>
                            <td>MA J MC</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Gini Devi Pansari Award for Excellence in Literary Activities</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Sangeeta Sarma</td>
                            <td>B.Sc. Microbiology</td>
                            <td>UG</td>
                            <td>2019</td>
                            <td>Suresh Kumar Prithani Award for Excellence in Mentoring</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Diana D. Chishi</td>
                            <td>Master of Travel and Tourism</td>
                            <td>PG</td>
                            <td>2020</td>
                            <td>Hemant Kumar Lohia Award for Excellence in Sports</td>
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
                            <td>Nabin Roshan Lakra</td>
                            <td>MSW</td>
                            <td>PG</td>
                            <td>2022</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Rikee Talukdar</td>
                            <td>BA (H) English</td>
                            <td>UG</td>
                            <td>2019</td>
                        </tr>
                    </tbody>


                </table>

            </div>

        </div>

    </section>
@endsection
