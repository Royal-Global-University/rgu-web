@extends('frontend.master')
@section('content')
    <style>
        /* Mobile (Up to 1024px) - Controls visibility */
        @media only screen and (max-width: 1024px) {
            .faculty-bio-desktop-display {
                display: none !important;
            }

            .faculty-bio-mobile-display {
                display: block !important;
            }
        }

        /* Desktop (1025px+) - Controls visibility */
        @media only screen and (min-width: 1025px) {
            .faculty-bio-desktop-display {
                display: block !important;
            }

            .faculty-bio-mobile-display {
                display: none !important;
            }
        }
    </style>

    <style>
        /* 1. White Section Spacing Logic */
        .faculty-bio-white-section {
            background-color: #fff;
            position: relative;
        }

        @media (min-width: 1025px) {
            .faculty-bio-white-section {
                height: 42vh;
                overflow: visible;
            }

            .faculty-bio-img {
                margin-top: 100px;
                width: 480px;
                margin-left: 45px;
            }

            .faculty-bio-name-pad {
                padding-top: 3rem;
            }
        }

        @media (max-width: 1024px) {
            .faculty-bio-white-section {
                height: 40vh;
                padding-top: 90px;
            }

            .faculty-bio-img {
                margin-top: 70px;
                width: 380px;
            }
        }

        /* 2. Image Border Style (Common) */
        .faculty-bio-img {
            border: 1px solid #27467A;
            max-width: 100%;
            /* Safety for very small screens */
        }

        /* 3. Font Styles (Responsive) */
        .faculty-bio-main-name {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
            color: #FF9A1E;
        }

        .faculty-bio-designation {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        /* Desktop Font Sizes */
        @media (min-width: 1025px) {
            .faculty-bio-main-name {
                font-size: 45px;
            }

            .faculty-bio-designation {
                font-size: 26px;
                color: #27467A;
            }
        }

        /* Mobile Font Sizes */
        @media (max-width: 1024px) {
            .faculty-bio-main-name {
                font-size: 35px;
            }

            .faculty-bio-designation {
                font-size: 20px;
                color: #fff;
            }

            /* White title on blue bg */
        }

        /* 4. Underline Style */
        .faculty-bio-underline-effect::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 300px;
            height: 4px;
            background-color: #FF9A1E;
        }

        /* 5. List Styles (Blue Section) */
        .faculty-bio-blue-section {
            background-color: #27467A;
            padding-bottom: 50px;
        }

        @media (max-width: 1024px) {
            .faculty-bio-blue-section {
                padding-top: 190px;
            }
        }

        .faculty-bio-sub-heading {
            font-family: 'Times New Roman', Times, serif;
            font-size: 22px;
            font-weight: 700;
            font-style: italic;
            color: #FF9A1E;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .faculty-bio-info-list {
            list-style: none;
            padding-left: 0;
            color: #fff;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
        }

        .faculty-bio-info-list li {
            display: flex;
            align-items: flex-start;
            line-height: 1.8;
            margin-bottom: 8px;
        }

        .faculty-bio-info-list i {
            font-size: 8px;
            margin-right: 10px;
            margin-top: 12px;
            flex-shrink: 0;
        }
    </style>

    <section>

        <div class="mobile">
            @include('frontend/components/mobileheader')
        </div>
        <div class="website">
            @include('frontend/components/aheader')
        </div>

        <section class="pg-hero" style="height: 25vh;">
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

                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Zulfiqar-fac.png"
                                    alt="Dr. Zulfiqar Ullah Siddiqui">

                            </div>

                            <div class="rgu-fp-info">

                                <h1 class="rgu-fp-name">
                                    Dr. Zulfiqar Ullah Siddiqui
                                </h1>

                                <div class="rgu-fp-designation">
                                    Associate Professor
                                </div>



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

                                <li>Post-Doctoral Fellow (PDF) Psychology (UGC) Aligarh Muslim University (A.M.U)

                                </li>
                                <li>Ph.D. in Psychology (AMU)
                                </li>
                                <li>M. Phil in Psychology (A.M.U)</li>
                                <li>P.G Diploma in Guidance & Counselling (AMU)
                                </li>
                                <li>M.A Psychology (AMU)</li>
                                <li>P.G Diploma in Journalism & Mass Communication (A.M.U)</li>
                                <li>B.A Economics (A.M.U)</li>


                            </ul>

                        </section>


                        <!-- =======================================================
                         EXPERIENCE / HIGHLIGHTS
                    ======================================================== -->

                        <section class="rgu-fp-section">

                            <div class="rgu-fp-stats-grid">


                                <div class="rgu-fp-stat-card">

                                    <h3>Total Experience</h3>

                                    <p> 15+ Years</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Academic Experience</h3>

                                    <p>9+ Years</p>

                                </div>


                                <!-- <div class="rgu-fp-stat-card">

                                    <h3>Industry Experience</h3>

                                    <p>1 Year 3 Months</p>

                                </div> -->


                                <div class="rgu-fp-stat-card">

                                    <h3>Research (Outside Teaching)</h3>

                                    <p>10+ Years</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Paper Publications in Journals</h3>

                                    <p>
                                        National Journals: 15
                                        <span>|</span>

                                        International: 20
                                    </p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Patents Published</h3>

                                    <p>01</p>

                                </div>

                                <!-- <div class="rgu-fp-stat-card">

                                    <h3>Patents Granted</h3>

                                    <p>5</p>

                                </div> -->


                                <div class="rgu-fp-stat-card">

                                    <h3>Books Published</h3>

                                    <p>04</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Book Chapters Published</h3>

                                    <p>07</p>

                                </div>


                                <div class="rgu-fp-stat-card">

                                    <h3>Books Edited</h3>

                                    <p>01</p>

                                </div>


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
                                    Positive Psychology, Spiritual Psychology, Organizational Behaviour, Social Psychology,
                                    Social Psychology

                                </li>

                            </ul>

                        </section>

                        <!-- <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Projects Undertaken
                            </h2>

                            <ul class="rgu-fp-list">

                                <li>
                                    Evaluating urban green carbon pools in Guwahati: A blueprint for mitigating climate risk
                                    and urban heat island intensity
                                </li>

                                <li>
                                    Assessing the nexus of microplastic contamination in agricultural soils of
                                    Kharupetia-Dalgaon Belt, Assam: Implications for achieving the UN SDG3
                                </li>

                            </ul>

                        </section> -->



                        <!-- =======================================================
                         ACHIEVEMENTS & AWARDS
                    ======================================================== -->

                        <section class="rgu-fp-section">

                            <h2 class="rgu-fp-section-title">
                                Any Other Achievements/Awards
                            </h2>


                            <ul class="rgu-fp-list">

                                <li>
                                    Awarded Post Doctoral Fellow (UGC)
                                </li>



                            </ul>

                        </section>

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

    </section>
@endsection
