@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

       <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Life Sciences (RSLSC)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Life Sciences (RSLSC)</span></h2>

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
                                <img src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) N.K.Chrungoo</h3>
                            <p class="card-designation">
                                Professor & Dean, Royal School of Life Sciences (RSLSC)
                            </p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/arvind-madhav.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Arvind Madhav Singh</h3>
                            <p class="card-designation">
                                Advisor & Visiting Professor
                            </p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Botany  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Botany</h2>
                </div>
                <!-- Botany  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rslsc/nikhilkumar.jpeg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) N.K.Chrungoo</h3>
                            <p class="card-designation">
                                Professor & Dean, Royal School of Life Sciences (RSLSC)
                            </p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prof-Bandana-Nabis-Das-RSLSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Bandana Nabis Das</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/dandadahr.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Dandadhar Borah</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/Pratikshyas-rslsc.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pratikshya Borah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Anushree-Baruah-RSLSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Anushree Baruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/53.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sandipta Dey</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-sandipta-ghosh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/Upashna.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Upashna Chettri</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/upasana-chettry-botany.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Upasna Chettry</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Zoology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Zoology</h2>
                </div>
                <!-- Zoology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/annukumari.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Annu Kumari</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Zoology </p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/susmitadey.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Susmita Dey</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/AbeshChakraborty.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Abesh Chakraborty</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/anirban-banik-RSLSC.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Anirban Banik</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-anirban-banik" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Arvind-Kumar.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arvind Kumar Dwivedi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-arvind-dwivedi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/dharmeswat.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Dharmeswar Barhoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Diksha.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Diksha Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Mandira.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Mandira Basumatary</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/ParimalChandra.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Parimal Chandra Ray</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/Sangeeta.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Sangeeta Biswas
                            </h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Forensic  Science -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Forensic Science</h2>
                </div>
                <!-- Forensic  Science -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/keshav-kumar.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Keshav Kumar</h3>
                            <p class="card-designation">Distinguished Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Arati.PNG"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Arati Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-arati-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pundarikaksha.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pundarikaksha Das</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Forensic Sciences</p>
                            <a href="https://www.rgu.ac/faculty-dr-pundarikaksha-das" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sthiti-Porna-Dutta.jpeg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Sthiti Porna Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sthiti-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Benex-K-Babu.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Benex K Babu</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Tahera-Haque-Majumder-RSBAS.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Tahera Hoque Mozumdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tahera-mozumdar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Ms.MonalishaMedhi.jpg" alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Monalisha Medhi</h3>
                            <p class="card-designation">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-monalisha-medhi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ayushman-Devraj-RSL.png"
                                    alt="Profile image of Ayushman Devraj">
                            </div>
                            <h3 class="card-name">Mr. Ayushman Devraj</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ayushman-devra" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/b_deeparani.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Bachaspatimayum Deeparani Devi</h3>
                            <p class="card-designation">Assistant Professor and Clinical Psychologist (Associate)</p>
                            <a href="https://www.rgu.ac/bachaspatimayum-deeparani-devi" class="profile-link">View
                                Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Meghna-bordoloi.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Meghna Bordoloi
                            </h3>
                            <p class="card-designation">Teaching Assistant
                            </p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Forestry -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Forestry</h2>
                </div>
                <!-- Forestry -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslsc/arvind-madhav.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Prof. Arvind Madhav Singh</h3>
                            <p class="card-designation">Advisor & Visiting Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Pallabi-Borah-RSLSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Pallabi Borah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Forestry</p>
                            <a href="https://www.rgu.ac/faculty-dr-pallabi-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Demsai-Reang-RSLSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Demsai Reang
                            </h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Paul-Lalremsang-RSLSC.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Paul Lalremsang
                            </h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Romeet.jpg"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Romeet Saha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-romeet-saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image">
                            </div>
                            <h3 class="card-name">Dr. Suravi Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Pushkal-Bagchie.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Mr. Pushkal Bagchie</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumari.png.png"
                                    alt="Profile image">
                            </div>
                            <h3 class="card-name">Ms. Rajkumari Surjabala Devi Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->


                <!-- visitng faculty  -->

                <!-- visitng faculty  -->

            </div>
        </div>

    </div>
@endsection
