@extends('frontend/new-master')
@section('content')
       <style>
        /* =========================================
        NCC PAGE WRAPPER
========================================= */

        .nccx-page-content {
            --nccx-green: #2f4f2f;
            --nccx-dark: #0d1b12;
            --nccx-accent: #ff9933;
            --nccx-white: #ffffff;
            --nccx-glass: rgba(255, 255, 255, .08);

            position: relative;
            width: 100%;
            overflow: hidden;

            color: var(--nccx-white);

            background:
                linear-gradient(rgba(13, 27, 18, .92),
                    rgba(13, 27, 18, .96)),
                url('/new-web/assets/img/ncc/body-bg1.png');

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }


        /* =========================================
        SECTIONS
========================================= */

        .nccx-page-content .nccx-section {
            padding: 50px 8%;
        }


        /* =========================================
        GLASS BOX
========================================= */

        .nccx-page-content .nccx-glass {

            background: var(--nccx-glass);

            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);

            border: 1px solid rgba(255, 255, 255, .08);

            border-radius: 12px;

            padding: 22px;
        }


        /* =========================================
        TITLES
========================================= */

        .nccx-page-content .nccx-title {

            position: relative;

            color: #fff;

            font-size: 1.8rem;
            font-weight: 700;

            line-height: 1.3;

            margin: 0 0 25px;
            padding: 0;

        }

        .nccx-page-content .nccx-title::after {

            content: "";

            position: absolute;

            width: 60px;
            height: 3px;

            left: 0;
            bottom: -8px;

            background: var(--nccx-accent);

        }


        /* =========================================
        TEXT
========================================= */

        .nccx-page-content .nccx-text {

            color: #e6e6e6;

            font-size: 14px;
            line-height: 1.7;

            margin: 0;

        }


        /* =========================================
        LISTS
========================================= */

        .nccx-page-content .nccx-list {

            margin: 0;

            padding-left: 20px;

            color: #e6e6e6;

        }

        .nccx-page-content .nccx-list li {

            margin-bottom: 8px;

            font-size: 14px;
            line-height: 1.7;

        }

        .nccx-page-content .nccx-list li:last-child {
            margin-bottom: 0;
        }


        /* =========================================
        GRID
========================================= */

        .nccx-page-content .nccx-grid {

            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(250px, 1fr));

            gap: 18px;

        }


        /* =========================================
        SPLIT LAYOUT
========================================= */

        .nccx-page-content .nccx-split {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 20px;

        }


        /* =========================================
        CARDS
========================================= */

        .nccx-page-content .nccx-card {

            padding: 15px;

            border-left: 3px solid var(--nccx-accent);

            color: #e6e6e6;

            font-size: 14px;
            line-height: 1.7;

            transition:
                background .3s ease,
                transform .3s ease;

        }

        .nccx-page-content .nccx-card:hover {

            background: rgba(255, 255, 255, .05);

            transform: translateY(-4px);

        }


        /* =========================================
        TRAINING
========================================= */

        .nccx-page-content .nccx-training-intro {
            margin-bottom: 20px;
        }


        /* =========================================
        ACHIEVEMENT TABS
========================================= */

        .nccx-page-content .nccx-tabs {

            display: flex;

            align-items: center;

            gap: 10px;

            flex-wrap: wrap;

            margin: 20px 0;

        }

        .nccx-page-content .nccx-tab-btn {

            padding: 8px 18px;

            border: 1px solid rgba(255, 255, 255, .2);

            background: transparent;

            color: #fff;

            cursor: pointer;

            border-radius: 30px;

            font-size: 13px;
            line-height: 1.4;

            transition: .3s;

        }

        .nccx-page-content .nccx-tab-btn:hover {

            background: rgba(255, 255, 255, .1);

        }

        .nccx-page-content .nccx-tab-btn.active {

            background: var(--nccx-accent);

            color: #000;

            border-color: var(--nccx-accent);

        }


        /* =========================================
        TAB CONTENT
========================================= */

        .nccx-page-content .nccx-tab-content {

            display: none;

            animation: nccxFadeTab .4s ease;

        }

        .nccx-page-content .nccx-tab-content.active {
            display: block;
        }

        @keyframes nccxFadeTab {

            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =========================================
        ACHIEVEMENTS TABLE
========================================= */

        .nccx-page-content .nccx-table-wrap {

            width: 100%;

            overflow-x: auto;

            margin-top: 15px;

        }

        .nccx-page-content .nccx-table {

            width: 100%;

            min-width: 600px;

            border-collapse: collapse;

            color: #e6e6e6;

            font-size: 14px;

        }

        .nccx-page-content .nccx-table thead {

            background: rgba(255, 255, 255, .08);

        }

        .nccx-page-content .nccx-table th,
        .nccx-page-content .nccx-table td {

            padding: 12px 10px;

            text-align: left;
            vertical-align: top;

            border-bottom: 1px solid rgba(255, 255, 255, .1);

        }

        .nccx-page-content .nccx-table th {

            color: var(--nccx-accent);

            font-weight: 600;

            letter-spacing: 1px;

        }

        .nccx-page-content .nccx-table tbody tr {

            transition: background .3s ease;

        }

        .nccx-page-content .nccx-table tbody tr:hover {

            background: rgba(255, 255, 255, .05);

        }


        /* =========================================
        OATH & PLEDGE
========================================= */

        .nccx-page-content .nccx-pledge-block {
            margin-top: 30px;
        }


        /* =========================================
        NCC GALLERY
========================================= */

        .nccx-page-content .nccx-marquee {

            position: relative;

            width: 100%;

            overflow: hidden;

        }

        .nccx-page-content .nccx-marquee-track {

            display: flex;

            align-items: center;

            width: max-content;

            animation: nccxScroll 150s linear infinite;

            will-change: transform;

        }

        .nccx-page-content .nccx-marquee:hover .nccx-marquee-track {

            animation-play-state: paused;

        }

        .nccx-page-content .nccx-marquee img {

            width: 560px;
            height: 380px;

            object-fit: cover;

            flex-shrink: 0;

            margin-right: 12px;

            border-radius: 8px;

            display: block;

        }


        /* =========================================
        INFINITE SCROLL ANIMATION
========================================= */

        @keyframes nccxScroll {

            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }

        }


        /* =========================================
        TABLET
========================================= */

        @media(max-width:991px) {

            .nccx-page-content .nccx-section {
                padding: 45px 6%;
            }

            .nccx-page-content .nccx-marquee img {

                width: 420px;
                height: 285px;

            }

        }


        /* =========================================
        MOBILE
========================================= */

        @media(max-width:768px) {

            .nccx-page-content {
                background-attachment: scroll;
            }

            .nccx-page-content .nccx-section {
                padding: 35px 6%;
            }

            .nccx-page-content .nccx-split {
                grid-template-columns: 1fr;
            }

            .nccx-page-content .nccx-title {
                font-size: 1.55rem;
            }

            .nccx-page-content .nccx-text,
            .nccx-page-content .nccx-list li,
            .nccx-page-content .nccx-card {

                font-size: 14px;

            }


            /* Achievement Table Mobile */

            .nccx-page-content .nccx-table-wrap {
                overflow: visible;
            }

            .nccx-page-content .nccx-table {

                min-width: 100%;

                display: block;

            }

            .nccx-page-content .nccx-table thead {
                display: none;
            }

            .nccx-page-content .nccx-table tbody {
                display: block;
            }

            .nccx-page-content .nccx-table tr {

                display: block;

                margin-bottom: 12px;

                padding: 10px;

                background: rgba(255, 255, 255, .05);

                border-radius: 8px;

            }

            .nccx-page-content .nccx-table td {

                display: block;

                width: 100%;

                padding: 6px 0;

                border: none;

                font-size: 13px;

            }

            .nccx-page-content .nccx-table td::before {

                content: attr(data-label);

                display: block;

                margin-bottom: 2px;

                color: var(--nccx-accent);

                font-weight: 700;

            }


            /* Gallery */

            .nccx-page-content .nccx-marquee img {

                width: 200px;
                height: 140px;

            }

        }


        /* =========================================
        SMALL MOBILE
========================================= */

        @media(max-width:480px) {

            .nccx-page-content .nccx-section {
                padding: 30px 20px;
            }

            .nccx-page-content .nccx-glass {
                padding: 18px;
            }

            .nccx-page-content .nccx-title {
                font-size: 1.4rem;
            }

            .nccx-page-content .nccx-tabs {

                gap: 8px;

            }

            .nccx-page-content .nccx-tab-btn {

                width: 100%;

                text-align: center;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/ncc/hero-img.jpeg'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">National Cadet Corps</h1>
            <div class="pg-hero-breadcrumb">
                Campus / NCC & NSS / National Cadet Corps
            </div>
        </div>

    </section>


    <div class="nccx-page-content">

        <!-- ================= ABOUT NCC ================= -->

        <section class="nccx-section">
            <div class="nccx-glass">

                <h2 class="nccx-title">About NCC</h2>

                <p class="nccx-text">
                    The National Cadet Corps (NCC) of Independent India was formally inaugurated on 15 July 1948.
                    NCC is the largest uniformed youth organization in the world and holds immense potential in
                    nation building. Through its structured and innovative training curriculum, NCC provides
                    opportunities for all-round development while inculcating leadership, self-reliance,
                    camaraderie, and care for fellow citizens.
                    <br><br>
                    The Corps represents “Unity in Diversity” and upholds the spirit of a secular and united India
                    with its motto <strong>“Unity and Discipline.”</strong>
                </p>

            </div>
        </section>


        <!-- ================= VISION & MISSION ================= -->

        <section class="nccx-section">

            <div class="nccx-split">

                <!-- Vision -->

                <div class="nccx-glass">

                    <h3 class="nccx-title">Vision</h3>

                    <p class="nccx-text">
                        To develop disciplined, responsible, and patriotic youth at Royal Global University,
                        committed to the service of the nation through leadership, character-building,
                        and selfless contribution to society.
                    </p>

                </div>


                <!-- Mission -->

                <div class="nccx-glass">

                    <h3 class="nccx-title">Mission</h3>

                    <ul class="nccx-list">

                        <li>
                            To instil a sense of duty, discipline, and moral values among students
                            through structured training and community engagement.
                        </li>

                        <li>
                            To groom cadets into future leaders in all walks of life by enhancing
                            their leadership, teamwork, and decision-making skills.
                        </li>

                        <li>
                            To foster a spirit of national integration, unity, and social
                            responsibility through active participation in camps, drills,
                            and nation-building activities.
                        </li>

                        <li>
                            To encourage physical fitness, mental resilience, and readiness
                            to serve the nation during emergencies and in defence services.
                        </li>

                    </ul>

                </div>

            </div>

        </section>


        <!-- ================= AIMS OF NCC ================= -->

        <section class="nccx-section">

            <h2 class="nccx-title">Aims of NCC</h2>

            <div class="nccx-grid">

                <div class="nccx-glass nccx-card">
                    To develop the following qualities in the cadets:- character, courage,
                    comradeship, discipline, leadership, secular outlook, spirit of adventure
                    and sportsmanship and the ideals of selfless service amongst the youth
                    of the country to make them useful citizens.
                </div>

                <div class="nccx-glass nccx-card">
                    To create a human resource of organized, trained and motivated youth
                    to provide leadership in all walks of life and always be available
                    for the service of the nation.
                </div>

                <div class="nccx-glass nccx-card">
                    To provide a suitable environment to motivate the youth to take up
                    a career in the Armed Forces.
                </div>

            </div>

        </section>


        <!-- ================= NCC TRAINING ================= -->

        <section class="nccx-section">

            <h2 class="nccx-title">NCC Training</h2>

            <div class="nccx-glass nccx-training-intro">

                <p class="nccx-text">
                    NCC training develops nationalism, discipline, leadership, team spirit,
                    and self-confidence. It ensures equal opportunities for all cadets
                    regardless of background and promotes holistic personality development.
                </p>

            </div>


            <div class="nccx-grid">

                <div class="nccx-glass nccx-card">
                    Institutional Training
                </div>

                <div class="nccx-glass nccx-card">
                    Camp Training
                </div>

                <div class="nccx-glass nccx-card">
                    Attachment Training (IMA, OTA, Military Hospitals)
                </div>

                <div class="nccx-glass nccx-card">
                    Social Service &amp; Community Development
                </div>

                <div class="nccx-glass nccx-card">
                    Adventure &amp; Sports Training
                </div>

                <div class="nccx-glass nccx-card">
                    Personality Development &amp; SSB Coaching
                </div>

                <div class="nccx-glass nccx-card">
                    Youth Exchange Programme
                </div>

            </div>

        </section>

        <!-- ================= ACHIEVEMENTS ================= -->

        <section class="nccx-section">

            <div class="nccx-glass">

                <h2 class="nccx-title">Achievements</h2>


                <!-- TAB BUTTONS -->

                <div class="nccx-tabs">

                    <button type="button" class="nccx-tab-btn active" data-tab="nccx-faculty">
                        Faculty Achievements
                    </button>

                    <button type="button" class="nccx-tab-btn" data-tab="nccx-student">
                        Student Achievements
                    </button>

                </div>


                <!-- ================= FACULTY ACHIEVEMENTS ================= -->

                <div class="nccx-tab-content active" id="nccx-faculty">

                    <div class="nccx-table-wrap">

                        <table class="nccx-table">

                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Achievement</th>
                                    <th>Year</th>
                                    <th>Details</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td data-label="Sl. No.">1</td>
                                    <td data-label="Achievement">
                                        Inter Coy Drill Competition
                                    </td>
                                    <td data-label="Year">
                                        02-12-2025
                                    </td>
                                    <td data-label="Details">
                                        Lt. Dr. KM Sudha represented NCC RGU at
                                        NCC OTA, Gwalior and secured the award
                                        for Best Drill Company.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">2</td>
                                    <td data-label="Achievement">
                                        Firing Competition
                                    </td>
                                    <td data-label="Year">
                                        19-12-2025
                                    </td>
                                    <td data-label="Details">
                                        Lt. Dr. KM Sudha participated in the
                                        Firing Competition at NCC OTA, Gwalior
                                        and achieved Best Firing award.
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>


                <!-- ================= STUDENT ACHIEVEMENTS ================= -->

                <div class="nccx-tab-content" id="nccx-student">

                    <div class="nccx-table-wrap">

                        <table class="nccx-table">

                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Achievement</th>
                                    <th>Year</th>
                                    <th>Details</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td data-label="Sl. No.">1</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Gungun Deka received Sports Awards at
                                        30 Assam Bn NCC, CATC-35 for securing
                                        1st position in Tug of War and 2nd
                                        position in Volleyball.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">2</td>
                                    <td data-label="Achievement">
                                        Best Cadet (Senior Wing) &amp; Sports
                                    </td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Ryka Gogoi was awarded Best SW Cadet
                                        and also secured 1st position in Tug
                                        of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">3</td>
                                    <td data-label="Achievement">Cultural Award</td>
                                    <td data-label="Year">01-05-2025</td>
                                    <td data-label="Details">
                                        Deepjyoti Talukdar received the Cultural
                                        Award at 48 Assam Naval NCC, CATC-35
                                        for securing 1st position in Cultural Singing.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">4</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Harsh Jain secured 1st position in Tug
                                        of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">5</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        MC Lalthlenkima secured 1st position in
                                        Tug of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">6</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Ayush Raj secured 1st position in Tug
                                        of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">7</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Minal Ahmed secured 1st position in Tug
                                        of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">8</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Kunaldip Hazarika secured 1st position
                                        in Tug of War and 2nd position in
                                        Volleyball at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">9</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Aditya Urang secured 1st position in
                                        Tug of War at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">10</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Thrune Elapra secured 1st position in
                                        Tug of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">11</td>
                                    <td data-label="Achievement">
                                        Best Cadet (Senior Division) &amp; Sports
                                    </td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Bicky Chetri was awarded Best SD Cadet
                                        and also secured 1st position in Tug
                                        of War and 2nd position in Volleyball
                                        at 30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">12</td>
                                    <td data-label="Achievement">
                                        Sports &amp; Cultural
                                    </td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        GVK Lakshmi Likhita secured 1st position
                                        in Tug of War, 2nd position in Volleyball,
                                        and participated in Cultural Dance at
                                        30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">13</td>
                                    <td data-label="Achievement">
                                        Sports &amp; Cultural
                                    </td>
                                    <td data-label="Year">22-05-2025</td>
                                    <td data-label="Details">
                                        Digbijaya Sil secured 1st position in
                                        Tug of War, 2nd position in Volleyball,
                                        and participated in Cultural Dance at
                                        30 Assam Bn NCC, CATC-35.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">14</td>
                                    <td data-label="Achievement">
                                        Sports Award &amp; Best Cadet
                                    </td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Agnes Newmai secured 1st position in
                                        Volleyball and was awarded Best SW Cadet
                                        at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">15</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Rajkkumari Isabellee secured 1st position
                                        in Volleyball at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">16</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Nima Choten secured 2nd position in
                                        Volleyball at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">17</td>
                                    <td data-label="Achievement">Sports Award</td>
                                    <td data-label="Year">05-08-2025</td>
                                    <td data-label="Details">
                                        Bhaamini Kakati secured 3rd position in
                                        Volleyball at 30 Assam Bn NCC, CATC-85.
                                    </td>
                                </tr>

                                <tr>
                                    <td data-label="Sl. No.">18</td>
                                    <td data-label="Achievement">
                                        Defence Secretary Commendation
                                    </td>
                                    <td data-label="Year">22-12-2025</td>
                                    <td data-label="Details">
                                        Aditya Singh received the Defence Secretary
                                        Commendation &amp; Card 2025 from the
                                        Ministry of Defence, Government of India.
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </section>

        <!-- ================= ELIGIBILITY ================= -->

        <section class="nccx-section">

            <div class="nccx-glass">

                <h2 class="nccx-title">Eligibility for Enrollment</h2>

                <ul class="nccx-list">

                    <li>
                        They must be a citizen of India or a subject of Nepal provided that
                        the Central Government may, in any suitable case, relax the provision
                        of this clause.
                    </li>

                    <li>
                        Should bear good character.
                    </li>

                    <li>
                        Must be a bonafide student of the institution/University.
                    </li>

                    <li>
                        Be physically and mentally fit as per standards laid down by the
                        Ministry of Defence.
                    </li>

                    <li>
                        Should not have been convicted of an offence involving moral turpitude.
                    </li>

                    <li>
                        Age for enrolment in Senior Division is required to be under the
                        age of 24 years (earlier it was 26 years).
                    </li>

                    <li>
                        Should not have been dismissed from the National Cadets Corps
                        or the Indian Armed Forces.
                    </li>

                </ul>

            </div>

        </section>


        <!-- ================= NCC OATH & PLEDGE ================= -->

        <section class="nccx-section">

            <div class="nccx-glass">

                <div class="nccx-oath-block">

                    <h3 class="nccx-title">NCC Oath</h3>

                    <p class="nccx-text">
                        I do hereby solemnly promise that I will serve my motherland most
                        truly and loyally and that I will abide by the rules and regulations
                        of the National Cadet Corps. Further under the command of my
                        commanding officer I will participate in every camp most sincerely
                        and wholeheartedly.
                    </p>

                </div>


                <div class="nccx-pledge-block">

                    <h3 class="nccx-title">NCC Pledge</h3>

                    <p class="nccx-text">
                        We, the cadets of the National Cadet Corps, do solemnly pledge that
                        we shall always uphold the unity of India. We resolve to be
                        disciplined and responsible citizens of our nation. We shall
                        undertake positive community service in the spirit of selflessness
                        and concern for our fellow beings.
                    </p>

                </div>

            </div>

        </section>


        <!-- ================= NCC GALLERY ================= -->

        <section class="nccx-section nccx-gallery-section">

            <h2 class="nccx-title">Gallery</h2>

            <div class="nccx-marquee">

                <div class="nccx-marquee-track">

                    <img src="/new-web/assets/img/ncc/gallery/1.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/2.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/3.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/4.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/5.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/6.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/7.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/8.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/9.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/10.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/11.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/12.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/13.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/14.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/15.jpg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/16.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/17.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/18.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/19.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/20.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/21.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/22.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/23.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/24.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/25.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/26.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/27.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/28.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/29.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/30.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/31.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/32.jpeg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/33.jpg" alt="NCC Gallery">
                    <img src="/new-web/assets/img/ncc/gallery/34.jpeg" alt="NCC Gallery">

                </div>

            </div>

        </section>


        <!-- ================= NCC OFFICER ================= -->

        <section class="nccx-section">

            <div class="nccx-glass">

                <h2 class="nccx-title">NCC Officer</h2>

                <p class="nccx-text">

                    <strong>Lieutenant Dr. KM Sudha</strong><br>

                    ANO, NCC RGU<br>

                    Gold Medal in Firing, OTA Gwalior<br><br>

                    Email: ncc@rgu.ac

                </p>

            </div>

        </section>

    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {

        /* =========================================
            NCC ACHIEVEMENT TABS
        ========================================= */

        const nccPage = document.querySelector(".nccx-page-content");

        if (!nccPage) return;

        const tabButtons = nccPage.querySelectorAll(".nccx-tab-btn");
        const tabContents = nccPage.querySelectorAll(".nccx-tab-content");

        tabButtons.forEach(function (button) {

            button.addEventListener("click", function () {

                const targetId = this.getAttribute("data-tab");
                const targetContent = document.getElementById(targetId);

                if (!targetContent) return;

                tabButtons.forEach(function (btn) {
                    btn.classList.remove("active");
                });

                tabContents.forEach(function (content) {
                    content.classList.remove("active");
                });

                this.classList.add("active");
                targetContent.classList.add("active");

            });

        });


        /* =========================================
            NCC INFINITE GALLERY
        ========================================= */

        const marqueeTrack = nccPage.querySelector(".nccx-marquee-track");

        if (marqueeTrack && !marqueeTrack.dataset.cloned) {

            const originalImages = Array.from(marqueeTrack.children);

            originalImages.forEach(function (image) {

                const clonedImage = image.cloneNode(true);

                clonedImage.setAttribute("aria-hidden", "true");

                marqueeTrack.appendChild(clonedImage);

            });

            marqueeTrack.dataset.cloned = "true";

        }

    });
</script>
@endsection
