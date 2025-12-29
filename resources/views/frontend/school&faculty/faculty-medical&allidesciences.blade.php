@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Medical & Allied Sciences (RSMAS)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Medical & Allied Sciences (RSMAS)</span>
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

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Abhijit.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Abhijit Dutta</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Medical & Allied Sciences</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/ramesh-c-deka.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Ramesh Chandra Deka</h3>
                            <p class="card-designation">Distinguished Professor & Advisor</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/faculty-profile/Rathindra.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rathindra Bhuyan</h3>
                            <p class="card-designation">Senior Professor & Advisor</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Physiotherapy  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Physiotherapy</h2>
                </div>
                <!-- Physiotherapy  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Abhijit.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Abhijit Dutta</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Medical & Allied Sciences</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Madhusmita-Koch.png"
                                    alt="Profile image of Prof. Dilip Nath">
                            </div>
                            <h3 class="card-name">Dr. Madhusmita Koch</h3>
                            <p class="card-designation">Associate Professor and HoD</p>
                            <a href="https://www.rgu.ac/faculty-dr-madhusmita-koch" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/somyata.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Somyata Chitaranjan Satpathy Sarma</h3>
                            <p class="card-designation">Associate Professor & Associate Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-somyata-c-satpathy-sarma" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/dikshitarabha.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Dikshita Rabha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dikshita-rabha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kangkana-Goswami-RSMAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Kangkana Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kangkana-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Madhumita-Das-RSMAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Madhumita Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-madhumita-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/Phurailatpam.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Phurailatpam Jeny Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-phurailatpam-jeny-sharma" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Trishna%20Kakati-RSMAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Trishna Kakati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-trishna-kakati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Shyam Shekhar Choudhary</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="https://www.rgu.ac/faculty-shyam-sekhar-choudhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="https://www.rgu.ac/faculty-trishna-kakati" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Optometry  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Optometry</h2>
                </div>
                <!-- Optometry  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/1.png"
                                    alt="Profile image of Ms. Smita Das">
                            </div>
                            <h3 class="card-name">Ms. Smita Das</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Academic Affairs & Coordinator, Optometry</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/4.png"
                                    alt="Profile image of Ms. Bhayolina Sarma">
                            </div>
                            <h3 class="card-name">Ms. Bhayolina Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Haziel.png"
                                    alt="Profile image of Ms. Haziel Rynjah">
                            </div>
                            <h3 class="card-name">Ms. Haziel Rynjah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-haziel-rynjah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/2.png"
                                    alt="Profile image of Ms. Joyshree Das">
                            </div>
                            <h3 class="card-name">Ms. Joyshree Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/6.png"
                                    alt="Profile image of Mr. Krishanjit Parasar">
                            </div>
                            <h3 class="card-name">Mr. Krishanjit Parasar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/3.png"
                                    alt="Profile image of Ms. Lipika Kalita">
                            </div>
                            <h3 class="card-name">Ms. Lipika Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/Puzari.png"
                                    alt="Profile image of Mr. Tridip Puzari">
                            </div>
                            <h3 class="card-name">Mr. Tridip Puzari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Jayanta Kumar Deka</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="https://www.rgu.ac/faculty-trishna-kakati" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="https://www.rgu.ac/faculty-trishna-kakati" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Operation Theatre Technology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Operation Theatre Technology</h2>
                </div>
                <!-- Operation Theatre Technology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">



                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Monika.jpeg"
                                    alt="Profile image of Ms. Smita Das">
                            </div>
                            <h3 class="card-name">Ms. Monika Vedraj Jadhav</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-monika-vedraj-jadhav" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Zomuanpuii.png"
                                    alt="Profile image of Ms. Smita Das">
                            </div>
                            <h3 class="card-name">Ms. Zomuanpuii</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Ms.MonalishaMedhi.jpg"
                                    alt="Profile image of Siddhant Medhi">
                            </div>
                            <h3 class="card-name">Ms. Monalisha Medhi</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-monalisha-medhi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Sayeda-Anjum-Afreen-RSBAS.png"
                                    alt="Profile image of Dr. Syeda Anjum Afreen">
                            </div>
                            <h3 class="card-name">Dr. Syeda Anjum Afreen</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-syeda-anjum-afreen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Chandni.jpeg"
                                    alt="Profile image of Ms. Chandni Khaund">
                            </div>
                            <h3 class="card-name">Ms. Chandni Khaund</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Romeet.jpg"
                                    alt="Profile image of Romeet Saha">
                            </div>
                            <h3 class="card-name">Romeet Saha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-romeet-saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    alt="Profile image of Prasant Mali">
                            </div>
                            <h3 class="card-name">Prasant Mali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Raj.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Raj Paul</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Syed-Sajidul-Islam-RSHM.png"
                                    alt="Profile image of Dr. Sayed Sajidul Islam">
                            </div>
                            <h3 class="card-name">Dr. Sayed Sajidul Islam</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-syed-sajidul-islam" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Jemima-Yasmin.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Jemima Yasmin</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jemima-yasmin" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/dikshitarabha.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Dikshita Rabha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dikshita-rabha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sudarshana.png"
                                    alt="Profile image of">
                            </div>
                            <h3 class="card-name">Dr. Sudarshana Borah</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-sudarshana" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dipanjali-Das.png"
                                    alt="Profile image of Ms. Dipanjali Das">
                            </div>
                            <h3 class="card-name">Ms. Dipanjali Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsa/13.jpeg"
                                    alt="Profile image of Pratyasha Das">
                            </div>
                            <h3 class="card-name">Ar. Pratyasha Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pratyasha-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                    alt="Profile image of Dr. Bisalakshi Sawarni">
                            </div>
                            <h3 class="card-name">Dr. Bisalakshi Sawarni</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Anuj-Kumar-Borah-RSBSC.png"
                                    alt="Profile image of Prof. Rita Choudhury">
                            </div>
                            <h3 class="card-name">Dr. Anuj Kumar Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anuj-kumar-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rikh-Roy.png"
                                    alt="Profile image of Mr. Rikh Roy">
                            </div>
                            <h3 class="card-name">Mr. Rikh Roy</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rikh-roy" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/Sangeeta.jpeg"
                                    alt="Profile image of Ms. Sangeeta Biswas">
                            </div>
                            <h3 class="card-name">Ms. Sangeeta Biswas</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ms-Jahnabi-Mahanta-RSBAS.png"
                                    alt="Profile image of Jahnabi">
                            </div>
                            <h3 class="card-name">Ms. Jahnabi Mahanta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jahnabi-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Abhijit-Gogoi-RSEES.png"
                                    alt="Profile image of Abhijit">
                            </div>
                            <h3 class="card-name">Dr. Abhijit Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhijit-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Jon-Jyoti-Kalita.png" alt="Profile image of">
                            </div>
                            <h3 class="card-name">Dr. Jon Jyoti Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Rohit-Sarma.png"
                                    alt="Profile image of Rohit Sarma">
                            </div>
                            <h3 class="card-name">Mr. Rohit Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rohit-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Indrajit-Dutta.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Indrajit Dutta</h3>
                            <p class="card-designation">Associate Professor, Associate Dean, Academic Affairs & HOD, RSTTM</p>
                            <a href="https://www.rgu.ac/faculty-indrajit-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>





                </div>
                <!-- regular faculty  -->

                <!-- Medical Lab Technology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Medical Lab Technology</h2>
                </div>
                <!-- Medical Lab Technology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsmas/ramesh-c-deka.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Ramesh Chandra Deka</h3>
                            <p class="card-designation">Distinguished Professor & Advisor</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/faculty-profile/Rathindra.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rathindra Bhuyan</h3>
                            <p class="card-designation">Senior Professor & Advisor</p>
                            <!-- <a href="https://www.rgu.ac/faculty-anuradha-devi" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Rupesh.jpeg"
                                    alt="Profile image of Dr. Rupesh Kumar">
                            </div>
                            <h3 class="card-name">Dr. Rupesh Kumar</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Academic Affairs and Coordinator, MLT</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Anindita.jpeg"
                                    alt="Profile image of Ms. Anindita Dutta">
                            </div>
                            <h3 class="card-name">Ms. Anindita Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Aniruddha.jpg"
                                    alt="Profile image of Mr. Aniruddha Sen">
                            </div>
                            <h3 class="card-name">Mr. Aniruddha Sen</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/p1.png"
                                    alt="Profile image of Ms. Farnaz Ahmed">
                            </div>
                            <h3 class="card-name">Ms. Farnaz Ahmed</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-farnaz-ahmed" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png"
                                    alt="Profile image of Ms. Susmita Sinha">
                            </div>
                            <h3 class="card-name">Dr. Atul Agarwal</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image of Ms. Susmita Sinha">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->

                <!-- Radiography and Advance Imaging Tech  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Radiography and Advance Imaging Tech</h2>
                </div>
                <!-- Radiography and Advance Imaging Tech  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/3.png"
                                    alt="Profile image of Ms. Anudeep Kaur">
                            </div>
                            <h3 class="card-name">Ms. Anudeep Kaur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/5.png"
                                    alt="Profile image of Ms. Meghna Guha">
                            </div>
                            <h3 class="card-name">Ms. Meghna Guha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Vilhoubeinuo.jpeg"
                                    alt="Profile image of Ms. Vilhoubeinuo Veronica Khruomo">
                            </div>
                            <h3 class="card-name">Ms. Vilhoubeinuo Veronica Khruomo</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-vilhoubeinuo-veronica-khruomo" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Food Science and Nutrition  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Food Science and Nutrition</h2>
                </div>
                <!-- Food Science and Nutrition  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Charu.jpg"
                                    alt="Profile image of Prof. Charu Lata Mahanta">
                            </div>
                            <h3 class="card-name">Prof. Charu Lata Mahanta</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-charulata-mahanta" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pranati-Das-RSBSC.png"
                                    alt="Profile image of Prof. Pranati Das">
                            </div>
                            <h3 class="card-name">Prof. Pranati Das</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pankaj-Jha-RSBSC.png"
                                    alt="Profile image of Dr. Pankaj Jha">
                            </div>
                            <h3 class="card-name">Dr. Pankaj Jha</h3>
                            <p class="card-designation">Assistant Professor & Coordinator</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/nutrition/2.png"
                                    alt="Profile image of Dr. Debjani Das">
                            </div>
                            <h3 class="card-name">Dr. Debjani Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-debjani-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Jon-Jyoti-Kalita.png"
                                    alt="Profile image of Dr. Jon Jyoti Kalita">
                            </div>
                            <h3 class="card-name">Dr. Jon Jyoti Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/nutrition/3.png"
                                    alt="Profile image of Dr. Priyanka Bhattacharya">
                            </div>
                            <h3 class="card-name">Dr. Priyanka Bhattacharya</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-priyanka-bhattacharyya" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Robbarts-Nongmaithem.png"
                                    alt="Profile image of Dr. Robbarts Nongmaithem">
                            </div>
                            <h3 class="card-name">Dr. Robbarts Nongmaithem</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shagufta-Rizwana-RSBSC.png"
                                    alt="Profile image of Dr. Shagufta Rizwana">
                            </div>
                            <h3 class="card-name">Dr. Shagufta Rizwana</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dipanjali-Das.png"
                                    alt="Profile image of Ms. Dipanjali Das">
                            </div>
                            <h3 class="card-name">Ms. Dipanjali Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/nutrition/1.png"
                                    alt="Profile image of Ms. Jebin Sultana">
                            </div>
                            <h3 class="card-name">Ms. Jebin Sultana</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Academic Affairs & Coordinator</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pronami-Bhattacharyya-RSL.png"
                                    alt="Profile image of Dr. Pronamee Bhatacharyya">
                            </div>
                            <h3 class="card-name">Dr. Pronamee Bhatacharyya</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image of Dr. Abesh Chakraborty">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Prabuddha-Ghosh.png"
                                    alt="Profile image of Prabuddha Ghosh">
                            </div>
                            <h3 class="card-name">Prabuddha Ghosh</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rohit-Sarma.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Rohit Sarma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rohit-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/optometry/1.png"
                                    alt="Profile image of Ms. Smita Das">
                            </div>
                            <h3 class="card-name">Ms. Smita Das</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Academic Affairs & Coordinator, Optometry</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Zomuanpuii.png"
                                    alt="Profile image of Ms. Smita Das">
                            </div>
                            <h3 class="card-name">Ms. Zomuanpuii</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Meghna-bordoloi.png"
                                    alt="Profile image of Megna Bordoloi">
                            </div>
                            <h3 class="card-name">Ms. Meghna Bordoloi</h3>
                            <p class="card-designation">Teaching Assistant</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/5.png"
                                    alt="Profile image of Ms. Meghna Guha">
                            </div>
                            <h3 class="card-name">Ms. Meghna Guha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Mr.TinkuMoniDas.jpeg" alt="Profile image of Tinku Das">
                            </div>
                            <h3 class="card-name">Mr. Tinku Moni Das</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-tinku" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/olivia.JPG"
                                    alt="Profile image of Olivia Kakati">
                            </div>
                            <h3 class="card-name">Dr. Olivia Kakati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/olivia-kakati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ankit.jpg"
                                    alt="Profile image of Ankit Bordoloi">
                            </div>
                            <h3 class="card-name">Mr. Ankit Bordoloi</h3>
                            <p class="card-designation">Teaching Assistant</p>
                            <a href="https://www.rgu.ac/faculty-ankit-bordoloi" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sanghamitra-Hazarika.png"
                                    alt="Profile image of Sanghamitra Hazarika">
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Sumi-Barman-RSP.png"
                                    alt="Profile image of">
                            </div>
                            <h3 class="card-name">Ms. Sumi Barman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/sumi-barman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sudarshana.png"
                                    alt="Profile image of">
                            </div>
                            <h3 class="card-name">Dr. Sudarshana Borah</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-sudarshana" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    alt="Profile image of Prasant Mali">
                            </div>
                            <h3 class="card-name">Prasant Mali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/Amlandas.jpeg"
                                    alt="Profile image of Dr Amlan Das">
                            </div>
                            <h3 class="card-name">Dr. Amlan Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-amlan-das-rshss" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Syed-Sajidul-Islam-RSHM.png"
                                    alt="Profile image of Dr. Sayed Sajidul Islam">
                            </div>
                            <h3 class="card-name">Dr. Sayed Sajidul Islam</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-syed-sajidul-islam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Raj.jpg"
                                    alt="Profile image of Raj Paul">
                            </div>
                            <h3 class="card-name">Mr. Raj Paul</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->



            </div>
        </div>

    </div>
@endsection
