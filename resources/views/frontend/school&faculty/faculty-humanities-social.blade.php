@extends('frontend.master')
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pragya.jpeg"
                                    alt="Profile image of Pragya Tamang">
                            </div>
                            <h3 class="card-name">Dr. Pragya Tamang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="https://www.rgu.ac/faculty-durba-dutta" class="profile-link">View Profile</a> -->
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mukesh-Kalita-RSHSS.png"
                                    alt="Profile image Mr. Mukesh Kalita">
                            </div>
                            <h3 class="card-name">Mr. Mukesh Kalita</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, History</p>
                            <a href="https://www.rgu.ac/faculty-mukesh-kalita" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Dr. Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Dr. Susmita Banerjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-KM-Sudha-RSHSS.png"
                                    alt="Profile image of Ms. KM Sudha">
                            </div>
                            <h3 class="card-name">Ms. KM Sudha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-km-sudha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image of Dr. Pranab Sarma">
                            </div>
                            <h3 class="card-name">Dr. Pranab Jyoti Sarma</h3>
                            <p class="card-title">Faculty Member, IKS Cell</p>
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
                            <p class="card-title">Associate Professor</p>
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
                            <h3 class="card-name">Dr. Prabahan Pujari</h3>
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
                            <h3 class="card-name">Prof. Abhinav Chaliha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhinav-chaliha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Jyoti-Mishra.png"
                                    alt="Profile image of Dr. Jyoti Mishra">
                            </div>
                            <h3 class="card-name">Dr. Jyoti Mishra</h3>
                            <p class="card-title">Assistant Professor</p>
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
                                <img src="mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image of Susmita Banerjee">
                            </div>
                            <h3 class="card-name">Susmita Banerjee</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
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

                    <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img src="" alt="Profile image of Dr. Queen Deka">
                  </div>
                  <h3 class="card-name">Dr. Queen Deka</h3>
                  <p class="card-title">Assistant Professor</p>
                </div>
              </div> -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Deepanjali-Reang-RSHSS.png"
                                    alt="Profile image of Dr. Deepanjali Reang">
                            </div>
                            <h3 class="card-name">Dr. Deepanjali Reang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Monika-Kumari-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Monika Kumari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-monika-kumari" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Monisha-Bordoloi-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Monisha Bordoloi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-monisha-bordoloi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Tanjeela-Mehboob-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Tanjeela Mehboob</h3>
                            <p class="card-designation">Assistant Professor</p>
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
                            <p class="card-designation">Teaching Assistant</p>
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
                            <!-- <a href="https://www.rgu.ac/faculty-george-ap" class="profile-link">View Profile</a> -->
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
                                Director, Centre for Inter-Disciplinary Research</p>
                            <a href="https://www.rgu.ac/faculty-surajit-c-mukhopadhyay" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Jeebanlata.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Jeebanlata Salam</h3>
                            <p class="card-designation">
                                Associate Professor
                            </p>
                            <a href="#" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/suhail.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Suhail Ahmed</h3>
                            <p class="card-designation">
                                Assistant Professor
                            </p>
                            <a href="https://www.rgu.ac/faculty-suhail-ahmed" class="profile-link">View Profile</a>
                        </div>
                    </div>

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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Trishna.jpeg"
                                    alt="Profile image of Tripti Das">
                            </div>
                            <h3 class="card-name">Dr. Trishna Mani Thakuria</h3>
                            <p class="card-designation">Assistant Professor and Assistant Director, Finishing School</p>
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
                                Assistant Professor
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
                            <!-- <a href="https://www.rgu.ac/faculty-george-ap" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Amlandas.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Amlan Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-amlan-das-rshss" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Priyanka-Patowari-RSHSS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Priyanka Patowari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-priyanka-patowari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rani-Das.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rani Das</h3>
                            <p class="card-designation">Assistant Professor, Social Work and Public Relation Officer</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Bikash%20c.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Bikash Chetry</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bikash-chetry" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Joyeeta.jpg"
                                    alt="Profile image ">
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nabanita-Hazarika-Social-Work-RSHSS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Nabanita Hazarika</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nabanita-hazarika" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
