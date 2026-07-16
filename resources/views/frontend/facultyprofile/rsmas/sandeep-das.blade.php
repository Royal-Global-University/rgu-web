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
                            <img class="faculty-bio-img" style="height: 350px; width: 350px;"
                                src="https://rgu.ac/mobile-assets/updated-faculty-img/Sandeep.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                        <div class="faculty-bio-name-pad">
                            <h2 class="faculty-bio-main-name mb-3 pt-5">
                                Dr. Sandeep Das
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
                                Dr. Sandeep Das
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                                Assistant Professor

                            </h2>
                        </div>

                        <h2 class="faculty-bio-sub-heading">Qualifications</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Postdoc Cardiometabolic Disorders (LSU Health
                                    Shreveport, USA)</span></li>
                            <li><i class="fa fa-circle"></i> <span>Ph.D. Human Physiology (Tripura University)</span>
                            </li>
                            <li><i class="fa fa-circle"></i> <span>M.Sc. Biochemistry (Vidyasagar University),</span>
                            </li>
                            <li><i class="fa fa-circle"></i> <span>B.Sc. Biochemistry (University of Calcutta).</span>
                            </li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Total Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>7 years 2 months</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Research (outside teaching): </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>7 years 2 months</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Research Interests:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i><span>I am deeply interested in understanding the molecular
                                    mechanisms underlying cardiometabolic disorders, including obesity, insulin
                                    resistance, diabetes, metabolic dysfunction–associated steatotic liver disease
                                    (MASLD), metabolic dysfunction–associated steatohepatitis (MASH), and
                                    atherosclerotic cardiovascular disease. My research focuses on identifying novel
                                    metabolic pathways that regulate inter-organ communication, with the goal of
                                    uncovering therapeutic targets and advancing strategies to reduce the risk of
                                    cardiometabolic disease. <a style="color: rgb(20, 230, 20);"
                                        href="https://scholar.google.com/citations?user=fzDfjusAAAAJ&hl=en">Open
                                        Link</a>
                                </span></li>

                        </ul>


                        <h2 class="faculty-bio-sub-heading">Paper Publications in Journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 2</span></li>
                            <li><i class="fa fa-circle"></i> <span>International: 33</span></li>

                        </ul>



                        <h2 class="faculty-bio-sub-heading">Projects Undertaken:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Center of Cardiovascular Diseases and Sciences Malcom
                                    Feist Postdoctoral Transition Award, LSU Health Shreveport $80,000.00 (2026).</span>
                            </li>
                            <li><i class="fa fa-circle"></i> <span>American Heart Association (AHA) $145,000.00
                                    (2024).</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Any Other Achievements/Awards:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Center of Cardiovascular Diseases Sciences (CCDS)
                                    Postdoctoral Transition Award, LSU Health Shreveport, 2026, for an Instructor
                                    Faculty Position.</span></li>
                            <li><i class="fa fa-circle"></i> <span>American Heart Association – ATVB Travel Grant for Early
                                    Career Investigators, Vascular Discovery: From Genes to Medicine Scientific Sessions
                                    2026 in Bellevue, Washington. </span></li>
                            <li><i class="fa fa-circle"></i> <span>Topic editor for a special issue “Interplay Between
                                    Metabolic Disorders and Male Reproductive Health” in the journal Frontiers in
                                    Reproductive Health (
                                    https://www.frontiersin.org/research-topics/79221/interplay-between-metabolic-disorders-and-male-reproductive-health)</span>
                            </li>
                            <li><i class="fa fa-circle"></i> <span>Review editor for the endocrinology and nutrition section
                                    in the journal Experimental Biology and Medicine.</span></li>
                            <li><i class="fa fa-circle"></i> <span>D. Neil Granger Award for Outstanding Postdoctoral
                                    Trainee Award 2025 by the Center for Cardiovascular Diseases and Sciences, LSU Health
                                    Shreveport.</span></li>
                            <li><i class="fa fa-circle"></i> <span>3rd Place postdoctoral category award, Malcom Feist
                                    Cardiovascular Research Symposium, 2025. </span></li>
                            <li><i class="fa fa-circle"></i> <span>Poster selected for Vascular Discovery 2025: From Genes
                                    to Medicine, American Heart Association, Baltimore, Maryland. </span></li>
                            <li><i class="fa fa-circle"></i> <span>Poster selected for The Liver Meeting, American
                                    Association of Liver Diseases (AASLD), 2024, San Diego, USA.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Invited speaker at the Malcolm Feist Cardiovascular
                                    Research Symposium, organized by the Center for Cardiovascular Diseases and Sciences,
                                    LSU Health Shreveport.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Keystone Symposia Travel Award “MASH and Fibrosis: From
                                    Molecular Phenotypes to Precision Therapeutics, 2024”, at Fairmont Banff Springs in
                                    Banff, AB, Canada, funded by the National Institute of Diabetes and Digestive and Kidney
                                    Diseases.</span></li>
                            <li><i class="fa fa-circle"></i> <span>American Heart Association (AHA) postdoctoral fellowship
                                    (2024), USA </span></li>
                            <li><i class="fa fa-circle"></i> <span>Poster selected for Vascular Discovery 2023: From Genes
                                    to Medicine 2023, American Heart Association, Boston, Massachusetts. </span></li>
                            <li><i class="fa fa-circle"></i> <span>Malcom Feist Cardiovascular Research Postdoctoral
                                    Fellowship (2024) by the Center of Cardiovascular Diseases and Sciences, LSU Health
                                    Shreveport. </span></li>
                            <li><i class="fa fa-circle"></i> <span>ICMR-Research Assistant Fellowship.</span></li>
                            <li><i class="fa fa-circle"></i> <span>DBT-JRF Project.</span></li>
                        </ul>



                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
