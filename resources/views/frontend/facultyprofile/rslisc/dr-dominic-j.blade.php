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
                            <img class="faculty-bio-img" src="https://rgu.ac/mobile-assets/updated-faculty-img/dominic.png"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                        <div class="faculty-bio-name-pad">
                            <h2 class="faculty-bio-main-name mb-3 pt-5">
                                Dr. Dominic J
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                                Professor
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
                                Dr. Dominic J
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                                Professor
                            </h2>
                        </div>

                        <h2 class="faculty-bio-sub-heading">Qualifications</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Ph.D. - Universsity of Mysore</span></li>
                            <li><i class="fa fa-circle"></i> <span>MLISc- Annamalai University</span></li>
                            <li><i class="fa fa-circle"></i> <span>Bsc – Bharathidasan University</span></li>


                        </ul>

                        <h2 class="faculty-bio-sub-heading">Total Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>34 years</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Academic Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>34 years</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Research Interests:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Library and Information Science</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Research PhD Guided & Awarded:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>15 Awarded</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Paper Publications in Journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 45</span></li>
                            <li><i class="fa fa-circle"></i> <span>International:50</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Paper Published in Conference Proceedings:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>57</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Book Chapters Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>13</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Books Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>4</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Editor in Conference Volume:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>8</span></li>
                        </ul>



                        <h2 class="faculty-bio-sub-heading">Editor in Journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Associate Editor- Karunya Journal of Research</span></li>
                            <li><i class="fa fa-circle"></i> <span>Associate Editor – Salis International Journal of Library
                                    and Information Science</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editor – Salis Journal of Information Management and
                                    Technology</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editorial Advisory Board – Indian Journal of Information
                                    Sources and Service</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editorial Committee – Indian Academic Library
                                    Association</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editorial Advisory committee – Journal of Current Trends
                                    in LIS</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editorial Panel and Advisory Board member for June 2015:
                                    Journal of Business, logistics, Innovation and Systems Published by AAT Global limited,
                                    New Castle upon Tyne, United Kingdom</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editorial Board Member- International Journal of Library
                                    Science and Research (IJLSR)- ISSN – 2250-2351</span></li>
                            <li><i class="fa fa-circle"></i> <span>Editorial Board Member-Indian Journal of Library and
                                    Information Science (IJLIS) _ ISSN -0973-9548</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Awards Received:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>SALIS Dr.Harish Chandra – Sushila Chandra National Best
                                    Librarian Award for the year 2020</span></li>
                            <li><i class="fa fa-circle"></i> <span>Top 50 outstanding Librarians across Indian, by the
                                    Academic council of uLektz</span></li>
                            <li><i class="fa fa-circle"></i> <span>Certificate of appreciation award for the completing
                                    service and the work done in Karunya University, from 1990 to 2015.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Lifetime Achievement Award by Los Angeles Development
                                    Church & Institute, Los Angeles, USA on 14th November 2014</span></li>
                            <li><i class="fa fa-circle"></i> <span>Excellence in Action, by Alagappa University Pollachi
                                    Centre, SIS Computer Education, 2nd November, 2014</span></li>
                            <li><i class="fa fa-circle"></i> <span>Rajiv Gandhi Gold Medal Award for the Individual
                                    achievement for Library Education by Global Economic Professional and Research
                                    Association 2014</span></li>
                            <li><i class="fa fa-circle"></i> <span>Autolib Tamilnadu Best Librarian Award for the year 2006,
                                    by Society for Advancement for Library and Information Science, Chennai</span></li>
                            <li><i class="fa fa-circle"></i> <span>Best paper & presentation and commendation award by
                                    Indian Library Association, conference organized by Nirma Institute of Management,
                                    Ahemadabath from 3-6 Jan. 2001.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Best paper award in 2nd library conference, organized by
                                    Department of Library and Information Science, Bishop Heber College, Trichy, 6th March
                                    2000.</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Membership in Professional Associations:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Indian Library Association-ILA (Life Member)</span></li>
                            <li><i class="fa fa-circle"></i> <span>Indian Association for special Library Information Center
                                    IASLIC (Life Member)</span></li>
                            <li><i class="fa fa-circle"></i> <span>Society for Advancement in Library and Information
                                    Science (SALIS) (Life Member) vice President from 2012 to 2014, President from 2014 to
                                    2021.</span></li>



                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
