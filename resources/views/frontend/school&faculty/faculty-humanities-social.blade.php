@extends('frontend.master')
@section('title', 'Best University in Assam, India')
@section('meta_description',
    'Meet RGU Department of Sociology faculty, including Prof. S.C. Mukhopadhyay and Dr. Denim
    Deka. View full profiles, publications, and research interests in Sociology and Culture Studies.')
@section('meta_keywords', 'RGU Department of Sociology faculty')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Humanities & Social Sciences
                    (RSHSS)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Humanities & Social Sciences (RSHSS)</span>
            </h2>

        </div>

        <style>
            /* Basic Page Styling */
            .section-f {
                padding: 2rem 0;
            }

            /* Individual Card Styling */
            .card {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 0.7rem;
                text-align: left;
                border: none;
                width: 100%;
                height: 100%;

                /* Flexbox for vertical alignment */
                display: flex;
                flex-direction: column;

                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            /* Hover effect for the card */
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            /* Image container */
            .card-image {
                width: 100%;
                padding-top: 100%;
                position: relative;
                border-radius: 5%;
                overflow: hidden;
                margin: 0 auto 1.0rem;
                border: 2px solid #f0f2f5;
            }

            .card-image img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Name/Heading Styling */
            .card-name {
                margin: 0 0 0.5rem 0;
                font-size: 1.5rem;
                font-weight: 600;
                color: #333;
                line-height: 1.2;
                color: #24477f;
            }

            /* Designation/Paragraph Styling */
            .card-designation {
                margin: 0;
                font-size: 1.2rem;
                font-weight: 400;
                color: #666;
                line-height: 1.4;
            }

            /* New Styling for the Profile Link */
            .profile-link {
                margin-top: auto;
                /* This is the magic property! */
                padding-top: 0.5rem;
                font-size: 1.1rem;
                font-weight: 800;
                text-decoration: none;
                color: #FF9A1E;
            }

            .profile-link:hover {
                text-decoration: underline;
            }
        </style>

        <div class="section-f">

            <div class="container">


                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Prof-Surajit-Mukhopadhyay..png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) S.C. Mukhopadhyay</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Humanities & Social Sciences,
                                Director, Centre for Inter-Disciplinary Research</p>
                            <a href="https://www.rgu.ac/faculty-surajit-c-mukhopadhyay" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/RanjanChakrabarti.jpeg" alt="Profile ">
                            </div>
                            <h3 class="card-name">Prof. Ranjan Chakrabarti</h3>
                            <p class="card-designation">Distinguished Professor Emeritus</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Shiela-Bora-RSHSS.png" alt="Profile ">
                            </div>
                            <h3 class="card-name">Prof. Shiela Bora</h3>
                            <p class="card-designation">Professor & Advisor</p>
                            <a href="https://www.rgu.ac/faculty-shiela-bora" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Prof-Sajal-Nag-RSHSS.png" alt="Profile ">
                            </div>
                            <h3 class="card-name">Prof. Sajal Nag</h3>
                            <p class="card-designation">Distinguished Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/swabera.jpeg" alt="Profile ">
                            </div>
                            <h3 class="card-name">Prof. Swabera Islam</h3>
                            <p class="card-designation">Professor & Advisor</p>
                            <a href="https://www.rgu.ac/faculty-swabera-islam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>

                <!-- Economics  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Economics</h2>
                </div>
                <!-- Economics  -->

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Gautam.jpeg"
                                    alt="Profile image Gautam Mazumdar">
                            </div>
                            <h3 class="card-name">Prof. Gautam Mazumdar</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/faculty-gautam-mazumdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/swabera.jpeg" alt="Profile ">
                            </div>
                            <h3 class="card-name">Prof. Swabera Islam</h3>
                            <p class="card-designation">Professor & Advisor</p>
                            <a href="https://www.rgu.ac/faculty-swabera-islam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/Deluwar.jpeg"
                                    alt="Profile image of Dr. Muhammad Deluwar Hoque">
                            </div>
                            <h3 class="card-name">Dr. Muhammad Deluwar Hoque</h3>
                            <p class="card-designation">Associate Professor & HOD, Economics</p>
                            <a href="https://www.rgu.ac/faculty-mohammed-deluwar-hoque" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/amit.jpeg"
                                    alt="Profile image of Dr. Amit Kumar">
                            </div>
                            <h3 class="card-name">Dr. Amit Kumar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-amit-kumar" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pragya.jpeg"
                                    alt="Profile image of Pragya Tamang">
                            </div>
                            <h3 class="card-name">Dr. Pragya Tamang</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="/faculty-pragya-tamang" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sanghamitra-Hazarika.png"
                                    alt="Profile image of Dr. Sanghamitra Hazarika">
                            </div>
                            <h3 class="card-name">Dr. Sanghamitra Hazarika</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sanghamitra-hazarika" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/jugal.jpeg"
                                    alt="Profile image of Mr. Jugal Kishore Bhattacharyya">
                            </div>
                            <h3 class="card-name">Mr. Jugal Kishore Bhattacharyya</h3>
                            <p class="card-designation">Assistant Professor & Coordinator GE/AEEC</p>
                            <a href="https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image of Ms. Rajkumari Surjabala Devi Das">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="https://www.rgu.ac/faculty-george-ap" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                </div>


                <!-- History  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of History</h2>
                </div>
                <!-- History  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/RanjanChakrabarti.jpeg"
                                    alt="Profile image Ranjan Chakrabarti">
                            </div>
                            <h3 class="card-name">Prof. Ranjan Chakrabarti</h3>
                            <p class="card-designation">Distinguished Professor Emeritus</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Shiela-Bora-RSHSS.png"
                                    alt="Profile image Shiela">
                            </div>
                            <h3 class="card-name">Prof. Shiela Bora</h3>
                            <p class="card-designation">Professor & Advisor</p>
                            <a href="https://www.rgu.ac/faculty-shiela-bora" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Prof-Sajal-Nag-RSHSS.png"
                                    alt="Profile image Sajal Nag">
                            </div>
                            <h3 class="card-name">Prof. Sajal Nag</h3>
                            <p class="card-designation">Distinguished Professor</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Susmita-Hazarika-RSHSS.png"
                                    alt="Profile image of Dr. Susmita Hazarika">
                            </div>
                            <h3 class="card-name">Dr. Susmita Hazarika</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-susmita-hazarika" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mukesh-Kalita-RSHSS.png"
                                    alt="Profile image Mr. Mukesh Kalita">
                            </div>
                            <h3 class="card-name">Mr. Mukesh Kalita</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Academic Affairs &
                                Coordinator, History</p>
                            <a href="https://www.rgu.ac/faculty-mukesh-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bishnu-Gurung.png"
                                    alt="Profile image of Dr. Bishnu Gurung">
                            </div>
                            <h3 class="card-name">Dr. Bishnu Gurung</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bishnu-gurung" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-KM-Sudha-RSHSS.png"
                                    alt="Profile image of Ms. KM Sudha">
                            </div>
                            <h3 class="card-name">Dr. KM Sudha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-km-sudha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mir-Kamruzzaman-Chowdhary.png"
                                    alt="Profile image of Dr. Mir Kamruzzaman Chowdhary">
                            </div>
                            <h3 class="card-name">Dr. Mir Kamruzzaman Chowdhary</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mir-kamruzzaman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Mitali.jpeg"
                                    alt="Profile image of Dr. Mitali Kalita">
                            </div>
                            <h3 class="card-name">Dr. Mitali Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mitali-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Tania-Begum.png"
                                    alt="Profile image of Dr. Tania Begum">
                            </div>
                            <h3 class="card-name">Dr. Tania Begum</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tania-begum" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/premmi.png"
                                    alt="Profile image of Premmi Wahengbam">
                            </div>
                            <h3 class="card-name">Dr. Premmi Wahengbam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-premmi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Dr. Susmita Banerjee</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image of Dr. Pranab Sarma">
                            </div>
                            <h3 class="card-name">Dr. Pranab Jyoti Sarma</h3>
                            <p class="card-title">Assistant Professor & Assistant Dean, Academic Affairs, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Baishalee-Rajkhowa-RSL.png"
                                    alt="Profile image of Dr. Baishali Rajkhowa">
                            </div>
                            <h3 class="card-name">Dr. Baishali Rajkhowa</h3>
                            <p class="card-title">Associate Professor & Associate Dean, Academic Affairs</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Asif-Iqbal-Mazid-RSFT.png"
                                    alt="Profile image of Asif Iqbal Majid">
                            </div>
                            <h3 class="card-name">Mr. Asif Iqbal Mazid</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fashion Design &
                                Technology
                            </p>
                            <a href="https://www.rgu.ac/faculty-asif-iqbal-mazid" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/suresh.jpg"
                                    alt="Profile image of Suresh Ranjan Goduka">
                            </div>
                            <h3 class="card-name">Suresh Ranjan Goduka</h3>
                            <p class="card-title">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-suresh-goduka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prabahan-Puzari.png"
                                    alt="Profile image of Prabahan Pujari">
                            </div>
                            <h3 class="card-name">Dr. Prabahan Puzari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-prabahan-puzari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Tripti-Das.png"
                                    alt="Profile image of Tripti Das">
                            </div>
                            <h3 class="card-name">Dr. Tripti Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tripti-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/b_deeparani.png"
                                    alt="Profile image of bachaspatimayum Devi">
                            </div>
                            <h3 class="card-name" style="font-size: 20px;">Ms. Bachaspatimayum Deeparani Devi</h3>
                            <p class="card-designation">Assistant Professor and Clinical Psychologist (Associate)</p>
                            <a href="https://www.rgu.ac/bachaspatimayum-deeparani-devi" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                                    alt="Profile image Abhinav Chaliha">
                            </div>
                            <h3 class="card-name">Mr. Abhinav Chaliha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Mahuya-Deb-RSBAS.png"
                                    alt="Profile image of Dr. Mahuya Deb">
                            </div>
                            <h3 class="card-name">Dr. Mahuya Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mahuya-deb" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Jasmine-Choudhury-RSL.png"
                                    alt="Profile image of Dr. Jasmine A Choudhury">
                            </div>
                            <h3 class="card-name">Dr. Jasmine A Choudhury</h3>
                            <p class="card-title">Assistant Professor</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rshss/jugal.jpeg"
                                    alt="Profile image of Jugal Kr Bhattacharyya">
                            </div>
                            <h3 class="card-name">Mr. Jugal Kishore Bhattacharyya</h3>
                            <p class="card-designation">Assistant Professor & Coordinator GE/AEEC</p>
                            <a href="https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image of Mr. Debapratim Bharali">
                            </div>
                            <h3 class="card-name">Mr. Debapratim Bharali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>


                <!-- Political Science & Public Administration  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Political Science & Public Administration</h2>
                </div>
                <!-- Political Science & Public Administration  -->

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/shalini.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Shalini Saxena</h3>
                            <p class="card-designation">Professor & HOD, Political Science & Administrative Service</p>
                            <a href="https://www.rgu.ac/faculty-shalini-saxena" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dhiraj.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Dhiraj Kumar Borkotoky</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dhiraj-kumar-borkotoky" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Akash.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Akash Singh Thakur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-akash-singh-thakur" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Baba-Chandra-Singha.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Baba Chandra Singha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-babachandra-singha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Krishangi-Saikia.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Krishangi Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-krishangi-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sushmita-Nongmeikapam.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sushmita Nongmeikapam</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sushmita-hoshi-nongmeikapam" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/monojit-singha-pol-sc.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Y. Monojit Singha</h3>
                            <p class="card-designation">Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-monojit-singha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Abhinav-Chaliha-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Abhinav Chaliha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Tanjeela-Mehboob-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Tanjeela Mehboob</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-tanjeela-mehboob" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nikita-Biswakarma-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Nikita Biswakarma</h3>
                            <p class="card-designation">Teaching Assistant & Departmental Representative, Academic Affairs
                            </p>
                            <a href="https://www.rgu.ac/faculty-nikita-biswakarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image of Ms. Rajkumari Surjabala Devi Das">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                        </div>
                    </div>


                </div>
                <!-- Sociology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Sociology</h2>
                </div>
                <!-- Sociology  -->

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Prof-Surajit-Mukhopadhyay..png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) S.C. Mukhopadhyay</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Humanities & Social Sciences,
                                Director,
                                Centre for Inter-Disciplinary Research</p>
                            <a href="https://www.rgu.ac/faculty-surajit-c-mukhopadhyay" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Tripti-Das.png"
                                    alt="Profile image of Tripti Das">
                            </div>
                            <h3 class="card-name">Dr. Tripti Das</h3>
                            <p class="card-designation">Assistant Professor & Coordinator</p>
                            <a href="https://www.rgu.ac/faculty-tripti-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Denim-Deka.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Denim Deka</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-denim-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/nutrition/Trishna.jpeg"
                                    alt="Profile image of Tripti Das">
                            </div>
                            <h3 class="card-name">Dr. Trishna Mani Thakuria</h3>
                            <p class="card-designation">Assistant Professor and Assistant Director, Finishing School</p>
                            <a href="/faculty-trishna-mani-thakuria" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Adishree-Borgohain.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Adishree Borgohain</h3>
                            <p class="card-designation">
                                Assistant Professor & Assistant Dean, Academic Affairs
                            </p>
                            <a href="https://www.rgu.ac/faculty-adishree-borgohain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Kadiguang-Panmei.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Kadiguang Panmei</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-kadiguang-panmei" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Lalzikpuii-Rajkhowa.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Lalzikpuii Rajkhowa</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-lalzikpuii-rajkhowa" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prajna-Borah-RSHSS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Prajna Borah</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-prajna-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image of Ms. Rajkumari Surjabala Devi Das">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                        </div>
                    </div>


                </div>


                <!-- Social Work  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Social Work</h2>
                </div>
                <!-- Social Work  -->

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Priyanka.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Priyanka Patowari</h3>
                            <p class="card-designation">Assistant Professor & Coordinator</p>
                            <a href="https://www.rgu.ac/faculty-priyanka-patowari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Amlan.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Amlan Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-amlan-das-rshss" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Baiarbha.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Baiarbha Massar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-baiarbha-massar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bitopi.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Bitopi Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-bitopi-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Debangana.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Debangana Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-debangana-baruah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Bikash%20c.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Bikash Chetry</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-bikash-chetry" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Joyeeta.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Joyeeta Bhattacharjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-joyeeta-bhattacharjee" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kristi-Saikia-RSHSS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Kristi Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kristi-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/sattyakee.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Sattyakee D'Com Bhuyan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/faculty-dijendra" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "Faculty Directory - Royal School of Humanities & Social Sciences (RSHSS)",
            "description": "Complete directory of faculty members, professors, and leadership across all departments including
            Economics,
            History,
            Political Science & Public Administration,
            Sociology,
            and Social Work at Royal Global University.
            ",
            "url": "https://www.rgu.ac/index.php/faculty-humanities-social",
            "numberOfItems": 56,
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. (Dr.) S.C. Mukhopadhyay",
                        "jobTitle": "Professor & Dean, Royal School of Humanities & Social Sciences, Director, Centre for Inter-Disciplinary
                        Research ",
                        "url": "https://www.rgu.ac/faculty-surajit-c-mukhopadhyay",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Royal School of Humanities & Social Sciences"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Ranjan Chakrabarti",
                        "jobTitle": "Distinguished Professor Emeritus",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Shiela Bora",
                        "jobTitle": "Professor & Advisor",
                        "url": "https://www.rgu.ac/faculty-shiela-bora",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Sajal Nag",
                        "jobTitle": "Distinguished Professor",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Swabera Islam",
                        "jobTitle": "Professor & Advisor",
                        "url": "https://www.rgu.ac/faculty-swabera-islam",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Royal School of Humanities & Social Sciences"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 6,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Gautam Mazumdar",
                        "jobTitle": "Professor",
                        "url": "https://www.rgu.ac/faculty-gautam-mazumdar",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Economics"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 7,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Muhammad Deluwar Hoque",
                        "jobTitle": "Associate Professor & HOD, Economics",
                        "url": "https://www.rgu.ac/faculty-mohammed-deluwar-hoque",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Economics"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 8,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Pragya Tamang",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-pragya-tamang",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Economics"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 9,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Sanghamitra Hazarika",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-sanghamitra-hazarika",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Economics"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 10,
                    "item": {
                        "@type": "Person",
                        "name": "Mr. Jugal Kishore Bhattacharyya",
                        "jobTitle": "Assistant Professor & Coordinator GE/AEEC",
                        "url": "https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Economics"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 11,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Rajkumari Surjabala Devi Das",
                        "jobTitle": "Visiting Faculty",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Economics"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 12,
                    "item": {
                        "@type": "Person",
                        "name": "Mr. Mukesh Kalita",
                        "jobTitle": "Assistant Professor & Coordinator, History",
                        "url": "https://www.rgu.ac/faculty-mukesh-kalita",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 13,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Susmita Hazarika",
                        "jobTitle": "Associate Professor",
                        "url": "https://www.rgu.ac/faculty-susmita-hazarika",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 14,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Bishnu Gurung",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-bishnu-gurung",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 15,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Mir Kamruzzaman Chowdhary",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-mir-kamruzzaman",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 16,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Mitali Kalita",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-mitali-kalita",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 17,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Tania Begum",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-tania-begum",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 18,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Susmita Banerjee",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-susmita-banerjee",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 19,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Premmi Wahengbam",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-premmi",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 20,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. KM Sudha",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-km-sudha",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 21,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Shalini Saxena",
                        "jobTitle": "Professor & HOD, Political Science & Administrative Service",
                        "url": "https://www.rgu.ac/faculty-shalini-saxena",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 22,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Y. Monojit Singha",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-monojit-singha",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 23,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Dhiraj Kumar Borkotoky",
                        "jobTitle": "Associate Professor",
                        "url": "https://www.rgu.ac/faculty-dhiraj-kumar-borkotoky",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 24,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Baba Chandra Singha",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-babachandra-singha",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 25,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Krishangi Saikia",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-krishangi-saikia",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 26,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Monika Kumari",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-monika-kumari",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 27,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Sushmita Nongmeikapam",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-sushmita-hoshi-nongmeikapam",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 28,
                    "item": {
                        "@type": "Person",
                        "name": "Mr. Abhinav Chaliha",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-abhinav-chaliha",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 29,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Monisha Bordoloi",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-monisha-bordoloi",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 30,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Tanjeela Mehboob",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-tanjeela-mehboob",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 31,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Nikita Biswakarma",
                        "jobTitle": "Teaching Assistant",
                        "url": "https://www.rgu.ac/faculty-nikita-biswakarma",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Political Science & Public Administration"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 33,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Denim Deka",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-denim-deka",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 34,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Suhail Ahmed",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-suhail-ahmed",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 35,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Tripti Das",
                        "jobTitle": "Assistant Professor & Coordinator",
                        "url": "https://www.rgu.ac/faculty-tripti-das",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 36,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Trishna Mani Thakuria",
                        "jobTitle": "Assistant Professor and Assistant Director, Finishing School",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 37,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Adishree Borgohain",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-adishree-borgohain",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 38,
                    "item": {
                        "@type": "Person",
                        "name": "Mr. Kadiguang Panmei",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-kadiguang-panmei",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 39,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Lalzikpuii Rajkhowa",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-lalzikpuii-rajkhowa",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 40,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Prajna Borah",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-prajna-borah",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Sociology"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 41,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Amlan Das",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-amlan-das-rshss",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Social Work"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 42,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Priyanka Patowari",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-priyanka-patowari",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Social Work"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 43,
                    "item": {
                        "@type": "Person",
                        "name": "Mr. Bikash Chetry",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-bikash-chetry",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Social Work"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 44,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Joyeeta Bhattacharjee",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-joyeeta-bhattacharjee",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Social Work"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 45,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Kristi Saikia",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-kristi-saikia",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Social Work"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 46,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Nabanita Hazarika",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-nabanita-hazarika",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of Social Work"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 47,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Pranab Jyoti Sarma",
                        "jobTitle": "Faculty Member, IKS Cell",
                        "url": "https://www.rgu.ac/faculty-pranab-sarma",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 48,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Baishali Rajkhowa",
                        "jobTitle": "Associate Professor",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 49,
                    "item": {
                        "@type": "Person",
                        "name": "Mr. Asif Iqbal Mazid",
                        "jobTitle": "Assistant Professor & Coordinator, Royal School of Fashion Design & Technology",
                        "url": "https://www.rgu.ac/faculty-asif-iqbal-mazid",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 50,
                    "item": {
                        "@type": "Person",
                        "name": "Suresh Ranjan Goduka",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-suresh-goduka",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 51,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Prabahan Pujari",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-prabahan-puzari",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 52,
                    "item": {
                        "@type": "Person",
                        "name": "Ms. Bachaspatimayum Deeparani Devi",
                        "jobTitle": "Assistant Professor and Clinical Psychologist (Associate)",
                        "url": "https://www.rgu.ac/bachaspatimayum-deeparani-devi",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 53,
                    "item": {
                        "@type": "Person",
                        "name": "Prof. Abhinav Chaliha",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-abhinav-chaliha",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 54,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Jyoti Mishra",
                        "jobTitle": "Assistant Professor",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 55,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Mahuya Deb",
                        "jobTitle": "Assistant Professor",
                        "url": "https://www.rgu.ac/faculty-mahuya-deb",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 56,
                    "item": {
                        "@type": "Person",
                        "name": "Dr. Jasmine A Choudhury",
                        "jobTitle": "Assistant Professor",
                        "worksFor": {
                            "@type": "EducationalOrganization",
                            "name": "Department of History"
                        }
                    }
                }
            ]
        }
    </script>
@endpush
