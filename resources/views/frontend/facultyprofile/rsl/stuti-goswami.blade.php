@extends('frontend.master')
@section('content')
    <!-- copy this inside the body  -->
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
                            <img class="faculty-bio-img" src="/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 pt-5 faculty-bio-desktop-display">
                        <div class="faculty-bio-name-pad">
                            <h2 class="faculty-bio-main-name mb-3 pt-5">
                                Dr. Stuti Goswami
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 faculty-bio-underline-effect">
                                Associate Professor
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
                                Dr. Stuti Goswami
                            </h2>
                            <h2 class="faculty-bio-designation mb-5 pt-3 fw-bold faculty-bio-underline-effect">
                                Associate Professor
                            </h2>
                        </div>

                        <h2 class="faculty-bio-sub-heading">Qualifications</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Ph.D. (Department of English, Gauhati University)</span>
                            </li>
                            <li><i class="fa fa-circle"></i> <span>M.A. English (Department of English, Cotton College,
                                    Gauhati University)</span></li>
                            <li><i class="fa fa-circle"></i> <span>B.A. English (Hons.) (Department of English, Cotton
                                    College, Gauhati University)</span></li>


                        </ul>

                        <h2 class="faculty-bio-sub-heading">Total Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>31 years 10 months</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Academic Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>12 years 10 months</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Industry Experience:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>19 years (freelance writer, content writer, book editor,
                                    copy editor, professional proof reader)</span></li>
                        </ul>


                        <h2 class="faculty-bio-sub-heading">Research Interests:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Northeast India Studies, Colonial Historiography, Print
                                    Modernity, Disability Studies, Plant Studies, Translation Studies, Indigenous
                                    Epistemology, Silk Route Studies</span></li>

                        </ul>

                        <h2 class="faculty-bio-sub-heading">Paper Publications in Journals:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>National: 20 (Assamese and English)</span></li>
                            <li><i class="fa fa-circle"></i> <span>International: 2</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Books Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>4 published (National Book Trust, India, Asam Sahitya
                                    Sabha, Gauhati University Press, Red River, New Delhi) and 4 in-press (Bharatiya Vidya
                                    Bhavan, Srimanta Shankardev Kalakshetra, Red River, Assam Book Hive)</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Book Chapters Published:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>22 (Harper Collins, Routledge, Sahitya Akademi, Ratna
                                    Books, Papyrus, Aleph Book Company, Asam Sahitya Sabha, K.K. Handiqui State Open
                                    University, Dibrugarh University, Pencraft International, etc.)</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Books Edited: </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>2</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Projects: </h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>1 (Digitisation of all issues of Assamese language
                                    magazine Jonaki for 1901, 1902, 1903)</span></li>
                        </ul>

                        <h2 class="faculty-bio-sub-heading">Any Other Achievement/Award:</h2>
                        <ul class="faculty-bio-info-list">
                            <li><i class="fa fa-circle"></i> <span>Published bilingual author, translator, editor for 31
                                    years (1992-2003, 2005-present)—The New York Times, The Sentinel, The Assam Tribune, The
                                    Telegraph, India Today, The Times of India, Muse India, Café Dissensus, Satsari,
                                    Prakash, Quest, journal of Vivekananda Kendra Institute of Culture, etc.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Invited speaker/resource person at India International
                                    Centre, New Delhi, Sahitya Akademi, New Delhi, Indian Institute of Technology, Guwahati
                                    (IIT-G), Tezpur University, Cotton University, Indira Gandhi National Centre for the
                                    Arts (IGNCA), Regional Centre, PAGIR Chennai, Janki Devi Memorial College, University of
                                    Delhi, Goalpara College, Arya Vidyapeeth College, Guwahati, J.N. College, Boko, Assam,
                                    H.P.B. College, Golaghat, etc.</span></li>
                            <li><i class="fa fa-circle"></i> <span>Peer reviewer: Studies in Humanities and Social Sciences
                                    (SH&SS), Indian Institute of Advanced Studies (IIAS), Shimla, Geohumanities, Routledge,
                                    Dibrugarh University Journal of English Studies (DUJES), Department of English,
                                    Dibrugarh University, Transcript, Department of English, Bodoland University, India,
                                    Zeitgeist, Bahona College, Jorhat, Assam.</span></li>
                            <li><i class="fa fa-circle"></i> <span>21 academic paper presentations and 5 session chairs in
                                    seminars and conferences (national and international)</span></li>
                            <li><i class="fa fa-circle"></i> <span>Interactor with Shashi Tharoor (NKTV), Kuladhar Saikia
                                    (Brahmaputra Literary Festival & Festival of Letters, Sahitya Akademi, New Delhi),
                                    Rashmi Narzary & Aruni Kashyap (The Assam Royal Global University)</span></li>
                            <li><i class="fa fa-circle"></i> <span>Trained in Hindustani classical music (vocal) from
                                    Pracheen Kala Kendra, Chandigarh and Bhatkhande Sangeet Vidyapith, Lucknow</span></li>
                            <li><i class="fa fa-circle"></i> <span>Subtitled two Assamese language documentaries.</span>
                            </li>

                        </ul>




                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- copy this inside the body  -->
@endsection
