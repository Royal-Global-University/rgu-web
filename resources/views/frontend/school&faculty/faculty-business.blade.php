@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Business (RSB)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Business (RSB)</span></h2>

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

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <!-- Registrar & Deans -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) George AP</h3>
                            <p class="card-designation">Professor & Dean RSB & Dean, RSC</p>
                            <a href="https://www.rgu.ac/faculty-george-ap" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amrit.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Amritpal Pal Singh</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/prad.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Pradeep Kumar Jain</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/prof-dr-Pradeep" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsb/2.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. D.N. Singh</h3>
                            <p class="card-designation">Professor & Registrar, Academics & I/C Dean, Royal School of
                                Communication &
                                Media</p>
                            <a href="https://www.rgu.ac/Prof-dn-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arpee Saikia</h3>
                            <p class="card-designation">Associate Professor & HOD, RSB</p>
                            <a href="https://www.rgu.ac/faculty-arpee-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rishi-Chakravarty-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Rishi Chakravarty</h3>
                            <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-rishi-chakravarty" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Darshana-Bhagowati.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Darshana Bhagowati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-darshana-bhagowati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kalyani-Gohain.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Kalyani Gohain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kalyani-gohain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Neha-Tiwari.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Neha Tiwari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neha-tiwari" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nibir-Pratim-Choudhury.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Nibir Pratim Choudhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-Nibir-Pratim" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rishabh.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Rishabh Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rishabh-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/roshni.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Roshni Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-roshni-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Sampada.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sampada Tiwari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sampada" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Santosh-K-Anand-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Santosh K. Anand</h3>
                            <p class="card-designation">Assistant Professor and Deputy Controller of Examination</p>
                            <a href="https://www.rgu.ac/faculty-santosh-kumar-anand" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Suman-Agarwal-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Suman Agarwal</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-suman-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Dipak-Jain-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Dipak Jain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-Dipak-jain" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

                <!-- adjunct faculty  -->
                <div class="row justify-content-center">
                    <!-- Registrar / Director -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Diganta Munshi</h3>
                            <p class="card-designation">Registrar, Administration & Director, IQAC and i/c Dean, RSET and
                                RSIT</p>
                            <a href="https://www.rgu.ac/faculty-diganta-munshi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Professors -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/3.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. S.P. Singh</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsaps/3.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Ladu Laishram</h3>
                            <p class="card-designation">Professor Emeritus</p>
                            <a href="https://www.rgu.ac/faculty-laishram-ladu-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sudip-Chakraborty.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sudip Chakraborty</h3>
                            <p class="card-designation">Professor & I/C Dy. Dean</p>
                            <a href="https://www.rgu.ac/faculty-sudip-chakraborty" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Associate Professors -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsc/3.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Aruna Dev Rroy</h3>
                            <p class="card-designation">Associate Professor & HOD, RSC</p>
                            <a href="https://www.rgu.ac/faculty-dr-aruna-dev-roy" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Baishalee-Rajkhowa-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Baishalee Rajkhowa</h3>
                            <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bapan-Kalita.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bapan Kalita</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Stuti Goswami</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <!-- Assistant Professors (A–Z) -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ananya-Banik.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Ananya Banik</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-ananya-banik" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/bhupali.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bhupali Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bhupali-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bikram-Bir-RSAPS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bikram Bir</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bikram-bir" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Bisalakshi Sawarni</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/b_deeparani.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Bachaspatimayum Deeparani Devi</h3>
                            <p class="card-designation">Assistant Professor & Clinical Psychologist (Associate)</p>
                            <a href="https://www.rgu.ac/bachaspatimayum-deeparani-devi" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debarchana.PNG"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Debarchana Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-debarchana-baruah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Gokul.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Gokul Sisir</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-gokul-sisir" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/jugal.jpeg"
                                    alt="Profile image">
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Kadiguang-Panmei.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Kadiguang Panmei</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kadiguang-panmei" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Neha-Tiwari.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Neha Tiwari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neha-tiwari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Niva-Kalita-RSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Niva Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-niva-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Padum-RSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Padum Chetry</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-padum-chetry" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pranab Jyoti Sarma</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean Academic Affairs, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rikh-Roy.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Rikh Roy</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rikh-roy" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Richika Kedia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-richika-kedia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ritishna-RSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Ritishna Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ritishna-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Srawan-goenka-RSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Srawan Kr. Goenka</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Smrity.PNG"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Smrity Choudhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-smrity-choudhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Susmita Banerjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- adjunct faculty  -->

                <!-- Visiting Faculty  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Visiting Faculty</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Raj.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Raj Paul</h3>
                            <p class="card-designation">Visiting Faculty</p>

                        </div>
                    </div>

                </div>
                <!-- Visiting Faculty  -->




            </div>
        </div>

    </div>
@endsection
