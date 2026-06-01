@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Commerce (RSC)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Commerce (RSC)</span></h2>

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

                    <!-- Professors / Deans -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Prof-George-AP-RSB.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Dr. George AP</h3>
                            <p class="card-designation">Professor & Dean</p>
                            <a href="https://www.rgu.ac/faculty-george-ap" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amrit.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Amrit Pal Singh</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/amrit-pal-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Dr-Sudip-Chakraborty.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Sudip Chakraborty</h3>
                            <p class="card-designation">Professor & I/C Dy. Dean, RSC</p>
                            <a href="https://www.rgu.ac/faculty-sudip-chakraborty" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Bhabajyoti.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Bhabajyoti Saikia</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-bhabajyoti-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Associate Professor & HOD -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/all-faculty/rsc/3.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Aruna Dev Roy</h3>
                            <p class="card-designation">Associate Professor & HOD</p>
                            <a href="https://www.rgu.ac/faculty-dr-aruna-dev-roy" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Dr-Rajdeep-Nag.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Rajdeep Nag</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-rajdeep-nag" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Abheeshek.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Abheeshek Dev Roye</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-abheeshek-dev-roye" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/amar-borah.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Amar Jyoti Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-amar-jyoti-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors (A–Z) -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Dr-Niva-Kalita-RSC.png"
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
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Padum-RSC.png"
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
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Richika-Kedia-RSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Richika Kedia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-richika-kedia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Ms-Baishali-Pathak.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Baishali Pathak</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://rgu.ac/faculty-dr-baishali-pathak" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://rgu.ac/mobile-assets/updated-faculty-img/Rikh-Roy.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Rikh Roy</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rikh-roy" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSC-prachi-khetan.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Prachi Khetan</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-prachi-khetan" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

                <!-- adjunct faculty  -->
                <div class="row justify-content-center">
                    <!-- Adjunct Faculty -->

                    <!-- Professors -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsb/2.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. D.N. Singh</h3>
                            <p class="card-designation">Professor & Registrar, Academics</p>
                            <a href="https://www.rgu.ac/Prof-dn-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Dinesh Kumar Pandiya</h3>
                            <p class="card-designation">Professor</p>
                            {{-- <a href="#" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/prad.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Pradeep Kumar Jain</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/prof-dr-Pradeep" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/all-faculty/rsb/3.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. S.P. Singh</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="#" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <!-- Highest Designation -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Rishi-Chakravarty-RSB.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rishi Chakravarty</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-rishi-chakravarty" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Associate Professor -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Arpee-Saikia-RSB.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Arpee Saikia</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-arpee-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Assistant Professors -->

                    <!-- Dr. -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Kalyani-Gohain.jpeg"
                                    alt="Profile image of Ms. Kalyani Gohain">
                            </div>
                            <h3 class="card-name">Ms. Kalyani Gohain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kalyani-gohain" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-pankaj-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Prabuddha-Ghosh.png"
                                    alt="Profile image of Prabuddha Ghosh">
                            </div>
                            <h3 class="card-name">Dr. Prabuddha Ghosh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-prabuddha-ghosh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pragya.jpeg"
                                    alt="Profile image of Dr. Pragya Tamang">
                            </div>
                            <h3 class="card-name">Dr. Pragya Tamang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/iks/Pranab.jpg" alt="Profile image of Dr. Pranabjyoti Sarma">
                            </div>
                            <h3 class="card-name">Dr. Pranabjyoti Sarma</h3>
                            <p class="card-designation">Assistant Professor, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
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
                                <img src="/mobile-assets/iks/Dr.SaswatiBordoloi.jpeg"
                                    alt="Profile image of Dr. Saswati Bordoloi">
                            </div>
                            <h3 class="card-name">Dr. Saswati Bordoloi</h3>
                            <p class="card-designation">Assistant Professor & Co-coordinator, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-saswati-bordoloi" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sayeda-Anjum-Afreen-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Syeda Anjum Afreen</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-syeda-anjum-afreen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Tahera-Haque-Majumder-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Tahera Hoque Mozumdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tahera-mozumdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Mr. -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ayushman-Devraj-RSL.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">
                                Dr. Ayushman Devraj
                            </h3>
                            <p class="card-designation">
                                Assistant Professor & Co-ordinator, Value-Added Courses (VACs)
                            </p>
                            <a href="https://www.rgu.ac/faculty-ayushman-devra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Mr-Dipak-Jain-RSB.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Dipak Jain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-Dipak-jain" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Ms. -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Banani-RSL.png"
                                    alt="Profile image of Ms. Banani D Hazarika">
                            </div>
                            <h3 class="card-name">Ms. Banani D Hazarika</h3>
                            <p class="card-designation">Assistant Professor and Associate Dean, Student Affairs</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                <!-- Visiting Faculty  -->


                <!-- visiting faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/ca-kamal-mour.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Kamal Mour</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="/faculty-kamal-mour" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Visiting Faculty/RSC/Bitu Sonowal.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Bittu Sonowal</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="/faculty-bittu-sonowal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Visiting%20Faculty/RSC/Hrishikesh%20Pathak.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Hrishikesh Pathak</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="https://www.rgu.ac/faculty-hrishikesh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Visiting%20Faculty/RSC/Upal%20J%20Baruah.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Upal J Baruah</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="https://www.rgu.ac/faculty-upal-jyoti-baruah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- visiting faculty  -->

            </div>
        </div>

    </div>
@endsection
