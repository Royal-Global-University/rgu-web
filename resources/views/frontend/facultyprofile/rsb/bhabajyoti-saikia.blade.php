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

        <div class="faculty-bio-white-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 text-center">
                        <div class="text-center">
                            <img class="faculty-bio-img" style="height: 400px; width: 400px;"
                                src="/mobile-assets/updated-faculty-img/Bhabajyoti.jpeg"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                        <div class="faculty-bio-name-pad">
                            <h2 class="faculty-bio-main-name mb-3 pt-5">
                                Prof. Bhabajyoti Saikia
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                                Professor and HoD, RSB
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="faculty-bio-blue-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5"></div>

                    <div class="col-lg-7 pt-4 pb-4">

                        <div class="faculty-bio-mobile-display">
                            <h2 class="faculty-bio-main-name fw-bold pt-4">
                                Prof. Bhabajyoti Saikia
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                                Professor and HoD, RSB
                            </h2>
                        </div>

                        <h2 class="faculty-bio-sub-heading">Qualifications</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Ph.D. in Management – Assam down town University,
                                    India</span></li>
                            <li><i class="fa fa-circle"></i> <span>Master of Science in International Business, Hull
                                    University Business School, United Kingdom</span></li>
                            <li><i class="fa fa-circle"></i> <span>B.E. in Information Science and Engineering, Visveswaraya
                                    Technological University, India</span></li>


                        </ul>

                        <h2 class="faculty-bio-sub-heading">Total Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>18 years</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Academic Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>15 years</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Industry Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>3 years</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Research (outside teaching): </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>5 years</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Research Interests:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i><span>Agri-business & Rural Development</span></li>
                            <li><i class="fa fa-circle"></i><span>Circular Economy</span></li>
                            <li><i class="fa fa-circle"></i><span>Strategic Alliances</span></li>
                            <li><i class="fa fa-circle"></i><span>Sustainable Entrepreneurship</span></li>

                        </ul>


                        <h2 class="faculty-bio-sub-heading">Paper Publications in Journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 10</span></li>
                            <li><i class="fa fa-circle"></i> <span>International: 8</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Patents Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>1</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Books Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>4</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Book Chapters Published: </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>5</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Projects Undertaken: </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>6</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Paper presented in Seminars/Conferences: </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 7</span></li>
                            <li><i class="fa fa-circle"></i> <span>International: 10</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Any Other Achievements/Awards:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Resource Person for National Level Management Development
                                    Programs (MDPs), Faculty Development Programs (FDPs) and Capacity Development Programs
                                    (CDPs).</span></li>
                            <li><i class="fa fa-circle"></i> <span>Reviewer of South Asian Journal of Social Studies and
                                    Economics (SAJSSE).</span></li>
                            <li><i class="fa fa-circle"></i> <span>Reviewer of Asian Journal of Economics, Business and
                                    Accounting (AJEBA).</span></li>
                            <li><i class="fa fa-circle"></i> <span>Reviewer of International Journal of Research and
                                    Innovation in Social Science (IJRISS).</span></li>
                            <li><i class="fa fa-circle"></i> <span>Reviewer of Academy of Management (AOM) for Annual
                                    Meeting 2025 and 2026.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Reviewer of International Conference on Emerging Trends
                                    and Applications in Artificial Intelligence (ICETAAI) 2024, 2025 and 2026.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Reviewer of International Conference on Artificial
                                    Intelligence, Big Data, Computing and Data Communication Systems (icABCD) 2025.</span>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
