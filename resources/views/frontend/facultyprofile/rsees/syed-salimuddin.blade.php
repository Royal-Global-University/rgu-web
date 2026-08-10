@extends('frontend/new-master')
@section('content')
    <style>
        /*=========================================================
      FACULTY PROFILE PAGE
    =========================================================*/

        .rgu-fp-page {
            padding: 80px 0;
            background: #f7f9fc;
            overflow: hidden;
        }

        .rgu-fp-wrapper {
            display: grid;
            grid-template-columns: 360px 1fr;
            gap: 50px;
            align-items: start;
        }


        /*=========================================================
      STICKY SIDEBAR
    =========================================================*/

        .rgu-fp-sidebar {
            position: sticky;
            align-self: start;
        }


        /*=========================================================
      PROFILE CARD
    =========================================================*/

        .rgu-fp-profile-card {

            background: #ffffff;

            border-radius: 28px;

            overflow: hidden;

            box-shadow:
                0 15px 45px rgba(0, 0, 0, .08);

        }


        /*=========================================================
      IMAGE
    =========================================================*/

        .rgu-fp-image {

            width: 100%;
            overflow: hidden;

        }

        .rgu-fp-image img {

            width: 100%;
            height: 430px;

            object-fit: cover;
            display: block;

        }


        /*=========================================================
      PROFILE INFO
    =========================================================*/

        .rgu-fp-info {

            padding: 35px 30px 40px;

        }

        .rgu-fp-name {

            margin: 0;

            color: #20315F;

            font-family: "Playfair Display", serif;

            font-size: 2.5rem;

            font-weight: 700;

            line-height: 1.25;

        }

        .rgu-fp-designation {

            margin-top: 18px;

            color: #E15825;

            font-size: 1.5rem;

            font-weight: 600;

            line-height: 1.7;

        }

        .rgu-fp-department {

            margin-top: 12px;

            color: #555;

            font-size: 1rem;

            line-height: 1.7;

        }

        .rgu-fp-email,
        .rgu-fp-phone {

            margin-top: 12px;

            font-size: .96rem;

            color: #666;

            word-break: break-word;

        }


        /*=========================================================
      DOWNLOAD CV BUTTON
    =========================================================*/

        .rgu-fp-cv-btn {

            margin-top: 28px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 13px 26px;

            border-radius: 50px;

            background: #20315F;

            color: #fff;

            font-weight: 600;

            text-decoration: none;

            transition: .35s;

        }

        .rgu-fp-cv-btn:hover {

            background: #E15825;

            color: #fff;

        }


        /*=========================================================
      RIGHT CONTENT
    =========================================================*/

        .rgu-fp-content {

            display: flex;

            flex-direction: column;

            gap: 40px;

        }


        /*=========================================================
      SECTION
    =========================================================*/

        .rgu-fp-section {

            background: #ffffff;

            padding: 38px;

            border-radius: 24px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, .05);

        }


        /*=========================================================
      SECTION TITLE
    =========================================================*/

        .rgu-fp-section-title {

            margin: 0 0 25px;

            color: #20315F;

            font-family: "Playfair Display", serif;

            font-size: 2rem;

            font-weight: 700;

            position: relative;

            padding-bottom: 15px;

        }

        .rgu-fp-section-title::after {

            content: "";

            position: absolute;

            left: 0;
            bottom: 0;

            width: 80px;
            height: 4px;

            background: #E15825;

            border-radius: 5px;

        }

        /*=========================================================
      QUALIFICATION LIST
    =========================================================*/

        .rgu-fp-list {

            margin: 0;
            padding: 0;

            list-style: none;

        }

        .rgu-fp-list li {

            position: relative;

            padding-left: 28px;

            margin-bottom: 18px;

            color: #555;

            font-size: 2rem;

            line-height: 1.9;

        }

        .rgu-fp-list li:last-child {

            margin-bottom: 0;

        }

        .rgu-fp-list li::before {

            content: "";

            position: absolute;

            left: 0;
            top: 12px;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #E15825;

        }



        /*=========================================================
      EXPERIENCE GRID
    =========================================================*/

        .rgu-fp-stats-grid {

            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(230px, 1fr));

            gap: 22px;

        }



        /*=========================================================
      STAT CARD
    =========================================================*/

        .rgu-fp-stat-card {

            position: relative;

            padding: 28px;

            background: #f7f9fc;

            border: 1px solid #e8edf5;

            border-radius: 18px;

            transition: .35s;

        }


        .rgu-fp-stat-card:hover {

            transform: translateY(-6px);

            border-color: #E15825;

            box-shadow:
                0 18px 35px rgba(0, 0, 0, .08);

        }



        /*=========================================================
      TOP ACCENT
    =========================================================*/

        .rgu-fp-stat-card::before {

            content: "";

            position: absolute;

            left: 0;
            top: 0;

            width: 100%;
            height: 5px;

            background: #E15825;

            border-radius:
                18px 18px 0 0;

        }



        /*=========================================================
      TITLE
    =========================================================*/

        .rgu-fp-stat-card h3 {

            margin: 0 0 18px;

            color: #20315F;

            font-size: 1.7rem;

            font-weight: 700;

            line-height: 1.6;

        }



        /*=========================================================
      VALUE
    =========================================================*/

        .rgu-fp-stat-card p {

            margin: 0;

            color: #555;

            font-size: 1.5rem !important;

            font-weight: 700;

            line-height: 1.5;

        }

        .rgu-fp-stat-card span {

            color: #E15825;

            font-weight: 700;

            margin: 0 6px;

        }



        /*=========================================================
      NUMBER STYLE
    =========================================================*/

        .rgu-fp-stat-card strong {

            color: #20315F;

            font-size: 2rem;

            font-weight: 700;

        }



        /*=========================================================
      TABLET
    =========================================================*/

        @media(max-width:991px) {

            .rgu-fp-stats-grid {

                grid-template-columns:
                    repeat(2, 1fr);

            }

        }



        /*=========================================================
      MOBILE
    =========================================================*/

        @media(max-width:767px) {

            .rgu-fp-stats-grid {

                grid-template-columns: 1fr;

                gap: 18px;

            }

            .rgu-fp-stat-card {

                padding: 24px;

            }

            .rgu-fp-stat-card h3 {

                font-size: .95rem;

            }

            .rgu-fp-stat-card p {

                font-size: 1.15rem;

            }

        }

        /*=========================================================
      RESEARCH INTEREST
    =========================================================*/

        .rgu-fp-section p {

            margin: 0;

            color: #555;

            font-size: 1.05rem;

            line-height: 1.9;

        }



        /*=========================================================
      AWARDS GRID
    =========================================================*/

        .rgu-fp-awards-grid {

            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(320px, 1fr));

            gap: 24px;

        }



        /*=========================================================
      AWARD CARD
    =========================================================*/

        .rgu-fp-award-card {

            display: flex;

            align-items: flex-start;

            gap: 18px;

            padding: 28px;

            border-radius: 18px;

            background: #f7f9fc;

            border: 1px solid #e7edf5;

            transition: .35s;

        }

        .rgu-fp-award-card:hover {

            transform: translateY(-6px);

            border-color: #E15825;

            box-shadow:
                0 18px 40px rgba(0, 0, 0, .08);

        }



        /*=========================================================
      ICON
    =========================================================*/

        .rgu-fp-award-icon {

            width: 62px;
            height: 62px;

            flex-shrink: 0;

            border-radius: 50%;

            background: #20315F;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #fff;

            font-size: 1.4rem;

        }

        .rgu-fp-award-card:hover .rgu-fp-award-icon {

            background: #E15825;

        }



        /*=========================================================
      AWARD CONTENT
    =========================================================*/

        .rgu-fp-award-content {

            flex: 1;

        }

        .rgu-fp-award-content h3 {

            margin: 0 0 10px;

            color: #20315F;

            font-size: 2rem;

            font-weight: 700;

            line-height: 1.4;

        }

        .rgu-fp-award-content p {

            margin: 0;

            color: #666;

            line-height: 1.8;

            font-size: 1.3rem;

        }



        /*=========================================================
      PROJECT / INFO CARDS
    =========================================================*/

        .rgu-fp-card-list {

            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(320px, 1fr));

            gap: 22px;

        }

        .rgu-fp-info-card {

            padding: 30px;

            border-radius: 18px;

            background: #ffffff;

            border-left: 5px solid #E15825;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, .05);

        }

        .rgu-fp-info-card h3 {

            margin: 0 0 18px;

            color: #20315F;

            font-size: 2rem;

            font-weight: 700;

        }

        .rgu-fp-info-card p {

            margin: 10px 0;

            color: #555;

            line-height: 1.8;

            font-size: 1.5rem;

        }



        /*=========================================================
      PUBLICATION LIST
    =========================================================*/

        .rgu-fp-publication-list {

            margin: 0;

            padding-left: 25px;

        }

        .rgu-fp-publication-list li {

            margin-bottom: 22px;

            color: #555;

            line-height: 1.9;

        }

        .rgu-fp-publication-list li:last-child {

            margin-bottom: 0;

        }



        /*=========================================================
      COURSE TAGS
    =========================================================*/

        .rgu-fp-tags {

            display: flex;

            flex-wrap: wrap;

            gap: 14px;

        }

        .rgu-fp-tags span {

            display: inline-flex;

            align-items: center;

            padding: 12px 22px;

            border-radius: 50px;

            background: #20315F;

            color: #fff;

            font-size: .95rem;

            transition: .3s;

        }

        .rgu-fp-tags span:hover {

            background: #E15825;

        }



        /*=========================================================
      DOWNLOADS
    =========================================================*/

        .rgu-fp-downloads {

            display: flex;

            flex-wrap: wrap;

            gap: 18px;

        }

        .rgu-fp-downloads a {

            display: inline-flex;

            align-items: center;

            gap: 12px;

            padding: 15px 28px;

            border-radius: 50px;

            background: #20315F;

            color: #fff;

            text-decoration: none;

            transition: .35s;

        }

        .rgu-fp-downloads a:hover {

            background: #E15825;

        }

        .rgu-fp-downloads i {

            font-size: 1.1rem;

        }



        /*=========================================================
      TABLET
    =========================================================*/

        @media(max-width:991px) {

            .rgu-fp-wrapper {

                grid-template-columns: 1fr;

                gap: 35px;

            }

            .rgu-fp-sidebar {

                position: relative;

                top: auto;

            }

            .rgu-fp-profile-card {

                display: grid;

                grid-template-columns: 280px 1fr;

                align-items: center;

            }

            .rgu-fp-image img {

                height: 100%;

                min-height: 340px;

            }

        }



        /*=========================================================
      MOBILE
    =========================================================*/

        @media(max-width:767px) {

            .rgu-fp-page {

                padding: 50px 0;

            }

            .rgu-fp-profile-card {

                display: block;

            }

            .rgu-fp-image img {

                height: 340px;

            }

            .rgu-fp-info {

                padding: 28px;

            }

            .rgu-fp-name {

                font-size: 1.7rem;

            }

            .rgu-fp-section {

                padding: 28px 22px;

                border-radius: 18px;

            }

            .rgu-fp-section-title {

                font-size: 1.7rem;

            }

            .rgu-fp-awards-grid {

                grid-template-columns: 1fr;

            }

            .rgu-fp-card-list {

                grid-template-columns: 1fr;

            }

            .rgu-fp-downloads {

                flex-direction: column;

            }

            .rgu-fp-downloads a {

                justify-content: center;

                width: 100%;

            }

        }



        /*=========================================================
      SMALL MOBILE
    =========================================================*/

        @media(max-width:480px) {

            .rgu-fp-image img {

                height: 290px;

            }

            .rgu-fp-name {

                font-size: 1.45rem;

            }

            .rgu-fp-section-title {

                font-size: 1.5rem;

            }

            .rgu-fp-award-card {

                padding: 22px;

                gap: 15px;

            }

            .rgu-fp-award-icon {

                width: 52px;
                height: 52px;

                font-size: 1.2rem;

            }

            .rgu-fp-tags {

                gap: 10px;

            }

            .rgu-fp-tags span {

                font-size: .85rem;

                padding: 10px 18px;

            }

        }
    </style>

    <section class="pg-hero" style="height: 25vh">
        <div class="pg-hero-bg"
            style="background-image:url('assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>



    </section>

    <section class="rgu-fp-page">

        <div class="container">

            <div class="rgu-fp-wrapper">

                <!-- =======================================================
                     LEFT SIDEBAR (STICKY)
                ======================================================== -->

                <aside class="rgu-fp-sidebar">

                    <div class="rgu-fp-profile-card">

                        <div class="rgu-fp-image">

                            <img src="/mobile-assets/updated-faculty-img/Dr.%20Md%20Syed%20Salimuddin.jpeg"
                                alt="Dr. Md Syed Salimuddin">

                        </div>

                        <div class="rgu-fp-info">

                            <h1 class="rgu-fp-name">
                                Dr. Md Syed Salimuddin
                            </h1>

                            <div class="rgu-fp-designation">
                                Assistant Professor
                            </div>

                            <!-- Optional -->

                            <!--
                            <div class="rgu-fp-department">
                                Department of Agriculture
                            </div>
                            -->

                            <!--
                            <div class="rgu-fp-email">
                                supriyo.sen@rgu.ac
                            </div>
                            -->

                            <!--
                            <div class="rgu-fp-phone">
                                +91 XXXXX XXXXX
                            </div>
                            -->

                            <!--
                            <a href="#" class="rgu-fp-cv-btn">
                                Download CV
                            </a>
                            -->

                        </div>

                    </div>

                </aside>


                <!-- =======================================================
                     RIGHT CONTENT
                ======================================================== -->

                <div class="rgu-fp-content">

                    <!-- HTML PART 2 STARTS HERE -->
                    <!-- =======================================================
                         QUALIFICATIONS
                    ======================================================== -->

                    <section class="rgu-fp-section">

                        <h2 class="rgu-fp-section-title">
                            Qualifications
                        </h2>

                        <ul class="rgu-fp-list">

                            <li>PhD (Geography), 2022, JNU</li>
                            <li>M.Phil. (Geography), 2017, JNU</li>
                            <li>M.A. Geography, 2014, JNU, Regional Dev. & Planning
                            </li>
                            <li>B.A. (Hons) Geography, 2012, JMI</li>

                        </ul>

                    </section>


                    <!-- =======================================================
                         EXPERIENCE / HIGHLIGHTS
                    ======================================================== -->

                    <section class="rgu-fp-section">

                        <div class="rgu-fp-stats-grid">


                            <!-- <div class="rgu-fp-stat-card">

                                    <h3>Total Experience</h3>

                                    <p>16 Years</p>

                                </div> -->


                            <div class="rgu-fp-stat-card">

                                <h3>Academic Experience</h3>

                                <p>2 years and 10 month</p>

                            </div>

                            <!--
                                <div class="rgu-fp-stat-card">

                                    <h3>Industry Experience</h3>

                                    <p>7 Years</p>

                                </div> -->


                            <div class="rgu-fp-stat-card">

                                <h3>Research (Outside Teaching)</h3>

                                <p>2 years and 11 months</p>

                            </div>


                            <div class="rgu-fp-stat-card">

                                <h3>Paper Publications</h3>

                                <p>
                                    <!-- National: 3
                                        <span>|</span> -->
                                    International: 6
                                </p>

                            </div>


                            <!-- <div class="rgu-fp-stat-card">

                                    <h3>Patents Published</h3>

                                    <p>1</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Patents Granted</h3>

                                    <p>2</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Books Published</h3>

                                    <p>1</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Book Chapters Published</h3>

                                    <p>7</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Projects Undertaken</h3>

                                    <p>10</p>

                                </div> -->


                        </div>

                    </section>

                    <!-- =======================================================
                         RESEARCH INTEREST
                    ======================================================== -->

                    <section class="rgu-fp-section">

                        <h2 class="rgu-fp-section-title">
                            Research Interest
                        </h2>

                        <ul class="rgu-fp-list">

                            <li>
                                Regional disparities, urbanisation, informal sector, women
                                empowerment, healthcare, ecological change, livelihood issues
                            </li>

                        </ul>

                    </section>



                    <!-- =======================================================
                         ACHIEVEMENTS & AWARDS
                    ======================================================== -->



                    <!-- =======================================================
                         RESEARCH PROJECTS (OPTIONAL)
                    ======================================================== -->
                    <!--
                        <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Research Projects
                            </h2>

                            <div class="rgu-fp-card-list">

                                <div class="rgu-fp-info-card">

                                    <h3>
                                        Project Title
                                    </h3>

                                    <p>
                                        Funding Agency :
                                        DBT
                                    </p>

                                    <p>
                                        Role :
                                        Principal Investigator
                                    </p>

                                    <p>
                                        Duration :
                                        2022 – 2025
                                    </p>

                                </div>

                                <div class="rgu-fp-info-card">

                                    <h3>
                                        Project Title
                                    </h3>

                                    <p>
                                        Funding Agency :
                                        ICAR
                                    </p>

                                    <p>
                                        Role :
                                        Co-Principal Investigator
                                    </p>

                                    <p>
                                        Duration :
                                        2020 – 2023
                                    </p>

                                </div>

                            </div>

                        </section> -->



                    <!-- =======================================================
                         PATENTS (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Patents
                            </h2>

                            <ul class="rgu-fp-list">

                                <li>
                                    Patent Title One
                                </li>

                                <li>
                                    Patent Title Two
                                </li>

                            </ul>

                        </section> -->



                    <!-- =======================================================
                         BOOKS (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Books
                            </h2>

                            <ul class="rgu-fp-list">

                                <li>
                                    Book Name (2023)
                                </li>

                                <li>
                                    Book Name (2024)
                                </li>

                            </ul>

                        </section> -->



                    <!-- =======================================================
                         BOOK CHAPTERS (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Book Chapters
                            </h2>

                            <ul class="rgu-fp-list">

                                <li>
                                    Chapter Name One
                                </li>

                                <li>
                                    Chapter Name Two
                                </li>

                            </ul>

                        </section> -->



                    <!-- =======================================================
                         PUBLICATIONS (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Selected Publications
                            </h2>

                            <ol class="rgu-fp-publication-list">

                                <li>

                                    Complete publication
                                    citation goes here...

                                </li>

                                <li>

                                    Complete publication
                                    citation goes here...

                                </li>

                                <li>

                                    Complete publication
                                    citation goes here...

                                </li>

                            </ol>

                        </section> -->



                    <!-- =======================================================
                         PROFESSIONAL MEMBERSHIPS (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Professional Memberships
                            </h2>

                            <ul class="rgu-fp-list">

                                <li>
                                    Life Member – Society Name
                                </li>

                                <li>
                                    Member – Professional Body
                                </li>

                            </ul>

                        </section> -->



                    <!-- =======================================================
                         COURSES TAUGHT (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Courses Taught
                            </h2>

                            <div class="rgu-fp-tags">

                                <span>Plant Biotechnology</span>

                                <span>Genetics</span>

                                <span>Plant Breeding</span>

                                <span>Biotechnology</span>

                                <span>Molecular Biology</span>

                            </div>

                        </section> -->



                    <!-- =======================================================
                         DOWNLOADS (OPTIONAL)
                    ======================================================== -->

                    <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Downloads
                            </h2>

                            <div class="rgu-fp-downloads">

                                <a href="#">

                                    <i class="fas fa-file-pdf"></i>

                                    Curriculum Vitae

                                </a>

                                <a href="#">

                                    <i class="fas fa-file-pdf"></i>

                                    Publications List

                                </a>

                            </div>

                        </section> -->



                </div>
                <!-- END CONTENT -->


            </div>
            <!-- END WRAPPER -->


        </div>
        <!-- END CONTAINER -->


    </section>
@endsection
