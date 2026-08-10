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
                            <img class="faculty-bio-img" src="/demo-assets/Ajeet.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                        <div class="faculty-bio-name-pad">
                            <h2 class="faculty-bio-main-name mb-3 pt-5">
                                Prof. Ajeet Kumar Singh
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
                                Prof. Ajeet Kumar Singh
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                                Professor
                            </h2>
                        </div>

                        <h2 class="faculty-bio-sub-heading">Qualifications</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Ph.D – Mewar University</span></li>
                            <li><i class="fa fa-circle"></i> <span>PGDESD – IGNOU</span></li>
                            <li><i class="fa fa-circle"></i> <span>MA (Tourism) – IGNOU</span></li>
                            <li><i class="fa fa-circle"></i> <span>M.Sc (HMCT) – TGOU</span></li>
                            <li><i class="fa fa-circle"></i> <span>PGDBA – SCDL Pune</span></li>
                            <li><i class="fa fa-circle"></i> <span>B.Sc (HHA) – NCHMCT & IGNOU</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Total Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>21 years</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Academic Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>17 years</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Industry Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>4 years</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Paper publications in journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 8</span></li>
                            <li><i class="fa fa-circle"></i> <span>International: 1</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Patents Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>2</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Books Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>2</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Book Chapters Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>16</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Projects Undertaken:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>8</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Any Other Achievements/Awards:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Awarded “Best Director in Hospitality for the year 2025”
                                    at Global
                                    Hospitality and Tourism Leadership Awards, on the occasion of 10th International
                                    Conference
                                    (ATITHI-2025) at Subharti University, Meerut in December 2025.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Awarded “Best Director” (Jaipur Region) in Hotel
                                    Management and
                                    Catering Technology for the years 2022–23 and 2023–24 by Aahaar Way Awards.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Awarded Certificate of Appreciation by Excellence Book of
                                    Records
                                    in coordination with Socially Point Foundation for outstanding achievements and
                                    remarkable
                                    contributions in academics on 17th May 2024. Certificate No: EBR-IN-445353.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Awarded “Best Director in Hospitality for the year 2023”
                                    at IHMS
                                    Kotdwar in Academic Excellence Award 2023.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Awarded Certificate of Appreciation in recognition of
                                    active
                                    participation in the National Intellectual Property Awareness Mission (NIPAM), launched
                                    by Government
                                    of India under “Azadi Ka Amrit Mahotsav” for creating awareness on Intellectual Property
                                    Rights.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Awarded “Best Research Collaboration Excellence in
                                    Hospitality
                                    Academia” at the 8th International Conference on Advanced Technologies and Innovations
                                    in Tourism and
                                    Hospitality Industry (ATITHI 2023).</span></li>

                            <li><i class="fa fa-circle"></i> <span>Awarded “Best Ph.D Dissertation Award” at 1st
                                    International
                                    Hospitality Conclave & Awards 2020, Visionary Trends in Hospitality Industry, Delhi
                                    Technical Campus
                                    (GGSIP University, New Delhi) on 12 February 2020.</span></li>

                            <li><i class="fa fa-circle"></i> <span>UGC NET qualified in Tourism Administration &
                                    Management.</span>
                            </li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Membership:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Lifetime Member of World Association of Master Chefs –
                                    South Asia
                                    and India.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Member, All India Council for Technical Skill
                                    Development.</span>
                            </li>

                            <li><i class="fa fa-circle"></i> <span>Affiliate Member of International Association of Academic
                                    Plus
                                    Corporate.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Editorial Board Member of International Journal of
                                    Multi-Disciplinary Research and Technology (IJMRT) ISSN 252-7359 and Multi-Disciplinary
                                    Research
                                    Perspective (IJMRP) ISSN 2584-0029 (Online).</span></li>

                            <li><i class="fa fa-circle"></i> <span>Member of DRC, Hotel Management, Vivekananda Global
                                    University
                                    (VGU), Jaipur for a period of 3 years w.e.f. 29/11/2022.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Member of Governing Body of the AICTE approved P.G.
                                    Diploma in
                                    Hospitality Management.</span></li>

                            <li><i class="fa fa-circle"></i> <span>Lifetime Member of Indian Hospitality Congress
                                    (Membership No:
                                    1014, issued on 29/01/2018).</span></li>

                            <li><i class="fa fa-circle"></i> <span>Lifetime Member of Indian Culinary Forum (Membership No:
                                    1104).</span></li>

                            <li><i class="fa fa-circle"></i> <span>Lifetime Member of Indian Academicians and Researchers
                                    Association
                                    (Membership No: M/M 1080).</span></li>

                            <li><i class="fa fa-circle"></i> <span>Member, Board of Studies for Hotel Management and
                                    Catering
                                    Technology at Guru Kashi University, Bathinda; Shree Shakti College of Hotel Management;
                                    and
                                    Vivekananda Global University, Jaipur.</span></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
