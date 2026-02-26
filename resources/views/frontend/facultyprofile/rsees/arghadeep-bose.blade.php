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
                            <img class="faculty-bio-img" src="https://rgu.ac/mobile-assets/updated-faculty-img/Arghadeep.jpeg"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                        <div class="faculty-bio-name-pad">
                            <h2 class="faculty-bio-main-name mb-3 pt-5">
                                Dr. Arghadeep Bose
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                                Assistant Professor
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
                                Dr. Arghadeep Bose
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                                Assistant Professor
                            </h2>
                        </div>

                        <h2 class="faculty-bio-sub-heading">Qualifications</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Ph.D. in Geography & Applied Geography, University of
                                    North Bengal</span></li>
                            <li><i class="fa fa-circle"></i> <span>M.A./M.Sc. in Geography & Applied Geography,
                                    Specialization with Human & Urban Geography, University of North Bengal</span></li>
                            <li><i class="fa fa-circle"></i> <span>B.A. (Honours) in Geography, Ananda Chandra College,
                                    Jalpaiguri, University of North Bengal </span></li>


                        </ul>


                        <h2 class="faculty-bio-sub-heading">Academic Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>1 Year and 7 Months</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Research (outside teaching): </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>5 Years (2 years as J.R.F) and (3 Years as S.R.F)</span>
                            </li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Research Interests:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i><span>Air Quality Research, Urban Environmental Quality, Remote
                                    Sensing and GIS, Urban Transport.</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Paper Publications in Journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 2+</span></li>
                            <li><i class="fa fa-circle"></i> <span>International: 25+ (All Scopus and only by Springer,
                                    Elsevier, Wiley, Taylor &
                                    Franscis like globally reputed publishers)</span></li>


                        </ul>

                        <h2 class="faculty-bio-sub-heading">Book Chapters Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>06</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Projects Undertaken:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Applied as a Co-Pi in ICSSR</span></li>
                        </ul>



                        <h2 class="faculty-bio-sub-heading">Any Other Achievements/Awards:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>UGC NET (Lectureship): (a) November 2017
                                    (b) July 2018
                                    (c) December 2018
                                    (d) July 2019</span></li>
                            <li><i class="fa fa-circle"></i> <span>UGC NET (J.R.F): December 2019 (AIR 58)</span></li>
                            <li><i class="fa fa-circle"></i> <span>Outstanding Paper Presentation Award, 5th Regional
                                    Science and Technology Congress –2023, by Department of Science, Technology and
                                    Biotechnology (DSTBT), Govt. of West Bengal, held on 11th–12th January 2023.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Outstanding Paper Presentation Award, 4th Regional
                                    Science and Technology Congress –2019 (Northern Region), by Department of Science,
                                    Technology and Biotechnology (DSTBT), Govt. of West Bengal held on 18th–19th December
                                    2019. (Selected for State Science and Technology Congress).</span></li>
                            <li><i class="fa fa-circle"></i> <span>Outstanding Paper Presentation Award, 3rd Regional
                                    Science and Technology Congress
                                    – 2018 (Northern Region), by Department of Science, Technology and Biotechnology
                                    (DSTBT), Govt. of West Bengal held on 12th–13th December 2018.
                                    (Selected for State Science and Technology Congress).</span></li>
                            <li><i class="fa fa-circle"></i> <span>Gold Medalist, Department of Geography & Applied
                                    Geography, University of North
                                    Bengal, for securing 1st Class 1st position in M.A. (2016–2018).</span></li>
                            <li><i class="fa fa-circle"></i> <span>College Topper in B.A. (Honours) in Geography
                                    (2013–2016), Ananda Chandra College,
                                    affiliated to University of North Bengal.</span></li>
                            <li><i class="fa fa-circle"></i>Champion, Inter-College Quiz Competition organized by Bongiyo
                                Bhugol Mancha, held on
                                23rd August 2015 at Jalpaiguri, representing Ananda Chandra College.<span></span></li>


                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
