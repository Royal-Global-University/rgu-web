@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Engineering & Technology (RSET)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Engineering & Technology (RSET)</span></h2>

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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/diganta-munshi.jpeg"
                                    alt="Profile image of Prof. Diganta Munshi">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Diganta Munshi</h3>
                            <p class="card-designation">Registrar, Administration & Director, IQAC and i/c Dean, RSET and
                                RSIT</p>
                            <a href="https://www.rgu.ac/faculty-diganta-munshi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Computer Science and Engineering  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Computer Science and Engineering</h2>
                </div>
                <!-- Computer Science and Engineering  -->

                <div class="container">

                    <!-- regular faculty  -->
                    <div class="row justify-content-center">

                        <!-- Professor -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rashel-Sarkar-RSET.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Rashel Sarkar</h3>
                                <p class="card-designation">Professor</p>
                                <a href="https://www.rgu.ac/faculty-rashel-sarkar" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/deepjyoti.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Deepjyoti Choudhury</h3>
                                <p class="card-designation">Associate Professor & HOD, CSE and Royal School of Information
                                    Technology</p>
                                <a href="https://www.rgu.ac/faculty-deepjyoti-choudhury" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Anurag.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Anurag Barthwal</h3>
                                <p class="card-designation">Associate Professor</p>
                                <a href="https://www.rgu.ac/faculty-anurag-barthwal" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bhairab.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Bhairab Sarma</h3>
                                <p class="card-designation">Associate Professor</p>
                                <a href="https://www.rgu.ac/faculty-bhairab-sarma" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dipankar.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Dipankar Dutta</h3>
                                <p class="card-designation">Associate Professor</p>
                                <a href="https://www.rgu.ac/faculty-dipankar-dutta" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bikash.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Bikash Baruah</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-bikash-baruah" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dillip.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Dillip Rout</h3>
                                <p class="card-designation">Assistant Professor II</p>
                                <a href="https://www.rgu.ac/faculty-dillip-rout" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Hidangmayum.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Hidangmayum Satyajeet Sharma</h3>
                                <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                                <a href="https://www.rgu.ac/faculty-hidangmayum-satyajeet-sharma" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Naveen.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Naveen Shahi</h3>
                                <p class="card-designation">Assistant Professor II</p>
                                <a href="https://www.rgu.ac/faculty-naveen-r-shahi" class="profile-link">View Profile</a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Afsana-Laskar-RSET.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mrs. Afsana Laskar</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-afsana-laskar" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/cse/7.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Ms. Akangkhi Borah</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-akangkhi-borah" class="profile-link">View Profile</a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/ankiya.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Ms. Ankita Goyal Agarwala</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-ankita-goyal-agarwala" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bidisha.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Ms. Bidisha Goswami</h3>
                                <p class="card-designation">Assistant Professor</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nayan-J-Kalita-RSET.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Nayan Jyoti Kalita</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-nayan-jyoti-kalita" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nilakshi-Deka-RSIT.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Ms. Nilakshi Deka</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-nilakshi-deka" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Spandan-Kumar-Barthakur-RSET.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Spandan Kumar Barthakur</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-spandan-barthakur" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Vanita-Agrawal-RSET.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Ms. Vanita Agrawal</h3>
                                <p class="card-designation">Assistant Professor, CSE & Head, Laboratory Services</p>
                                <a href="https://www.rgu.ac/faculty-vanita-agarwal" class="profile-link">View Profile</a>
                            </div>
                        </div>


                    </div>
                    <!-- regular faculty  -->

                    <!-- adjunct faculty  -->
                    <div class="row justify-content-center">
                        <!-- Coordinators / Administrative Roles -->


                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://media.rgu.ac/iks/Dr.SaswatiBordoloi.jpeg" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Saswati Bordoloi</h3>
                                <p class="card-designation">Co-Cordinator, IKS Cell</p>
                                <a href="https://www.rgu.ac/faculty-saswati-bordoloi" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Naphisabet-Kharsati.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Naphisabet Kharsati</h3>
                                <p class="card-designation">Assistant Professor & Coordinator, RSBAS</p>
                                <a href="https://www.rgu.ac/faculty-naphisabet" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <!-- Assistant Professors (A–Z) -->

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Antara-Banerjee-RSET.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Ms. Antara Banerjee</h3>
                                <p class="card-designation">Assistant Professor, Department of CE, RSET</p>
                                <a href="https://www.rgu.ac/faculty-antara-banerjee" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bisalakshi-Sawarni-RSL.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Bisalakshi Sawarni</h3>
                                <p class="card-designation">Assistant Professor, Department of English, RSL</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Kshetrimayum-Renubebeta-Devi.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Kshetrimayum Devi</h3>
                                <p class="card-designation">Assistant Professor, Department of Mathematics, RSAPS</p>
                                <a href="https://www.rgu.ac/faculty-dr-kshetrimayum-renubebeta-devi"
                                    class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Nongthombam-Singh.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Nongthombam Geetmani Singh</h3>
                                <p class="card-designation">Assistant Professor, Department of Chemistry, RSAPS</p>
                                <a href="https://www.rgu.ac/faculty-nongthombam-geetmani-singh" class="profile-link">View
                                    Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Palme-Borthakur.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Palme Borthakur</h3>
                                <p class="card-designation">Assistant Professor, Department of Geography and
                                    Geoinformatics, RSEES</p>
                                <a href="https://www.rgu.ac/faculty-palme-borthakur" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Pankaj Gogoi</h3>
                                <p class="card-designation">Assistant Professor, Department of English, RSL</p>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajkumar-Singh.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Rajkumar Imocha Singh</h3>
                                <p class="card-designation">Assistant Professor, Department of Chemistry, RSAPS</p>
                                <a href="https://www.rgu.ac/faculty-rajkumar-imocha" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/no-pic.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Hrishikesh Pathak</h3>
                                <p class="card-designation">Sports Coordinator, RGU</p>
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

                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Raj.jpg"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Raj Paul</h3>
                                <p class="card-designation">Visiting Faculty, Department of CSE & RSIT</p>

                            </div>
                        </div>

                    </div>
                    <!-- Visiting Faculty  -->


                </div>

                <!-- Mechanical Engineering  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Mechanical Engineering</h2>
                </div>
                <!-- Mechanical Engineering  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/me/2.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Hirak Ranjan Das</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Bishal-Podder-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Bishal Podder</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Mechanical Engineering</p>
                            <a href="https://www.rgu.ac/faculty-bishal-podder" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Manash.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Manash Protim Boruah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-manash-protim-boruah" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Smrity.PNG"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Smrity Choudhury</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-smrity-choudhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Zunaid-Ahmed-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Zunaid Ahmed</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-zunaid-ahmed" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shwetambara-Verma-RSET.png"
                                    alt="Profile image of Prof. Shwetambara Verma">
                            </div>
                            <h3 class="card-name">Prof. Shwetambara Verma</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/dr-shwetambara-verma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Dr.SaswatiBordoloi.jpeg"
                                    alt="Profile image of Dr. Saswati Bordoloi">
                            </div>
                            <h3 class="card-name">Dr. Saswati Bordoloi</h3>
                            <p class="card-designation">Co-Coordinator, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-saswati-bordoloi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nilakshi-Deka-RSIT.png"
                                    alt="Profile image of Mrs Nilakshi Deka">
                            </div>
                            <h3 class="card-name">Ms. Nilakshi Deka</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nilakshi-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr.-Rishikesh-Duarah-RSET.png"
                                    alt="Profile image of Mr. Rishikesh Duwarah">
                            </div>
                            <h3 class="card-name">Mr. Rishikesh Duwarah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Civil Engineering and Assistant
                                Dean, Admission</p>
                            <a href="https://www.rgu.ac/faculty-rishikesh-duarah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/anjali2.jpg" alt="Profile image of">
                            </div>
                            <h3 class="card-name">Ms. Anjali Kumar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anjali-kumar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Imo-Mani-Singha-RSAPS.png"
                                    alt="Profile image of Mr. H. Imo Mani Singha">
                            </div>
                            <h3 class="card-name">Mr. H. Imo Mani Singha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-imo-mani-singha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dillip.jpeg"
                                    alt="Profile image of Dr. Dilip Rout">
                            </div>
                            <h3 class="card-name">Dr. Dilip Rout</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                          <div class="card-image">
                            <img src="" alt="Profile image of Mrs. Ankita Banerjee">
                          </div>
                          <h3 class="card-name">Mrs. Ankita Banerjee</h3>
                          <p class="card-designation">Assistant Professor</p>
                          <a href="" class="profile-link">View Profile</a>
                        </div>
                      </div> -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Biplob-Borah.png"
                                    alt="Profile image of Dr. Biplob Borah">
                            </div>
                            <h3 class="card-name">Dr. Biplob Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-biplob-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Kshetrimayum-Renubebeta-Devi.jpeg"
                                    alt="Profile image of Dr. Kshetrimayum Devi">
                            </div>
                            <h3 class="card-name">Dr. Kshetrimayum Devi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-kshetrimayum-renubebeta-devi" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image of Dr. Pranab Sarma">
                            </div>
                            <h3 class="card-name">Dr. Pranab Jyoti Sarma</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs, IKS Cell
                            </p>
                            <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Civil Engineering  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Civil Engineering</h2>
                </div>
                <!-- Civil Engineering  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shwetambara-Verma-RSET.png"
                                    alt="Profile image of Prof. Shwetambara Verma">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Shwetambara Verma</h3>
                            <p class="card-designation">Professor & HOD, Civil Engineering</p>
                            <a href="https://www.rgu.ac/dr-shwetambara-verma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/civil-engg/1.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Arnab Sarma</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Abhijeet-Dey-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Abhijeet Dey</h3>
                            <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs</p>
                            <a href="https://www.rgu.ac/faculty-abhijeet-dey" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bonisha-Borah-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Bonisha Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bonisha-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shehnaz-Ara-Rahman-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Shehnaz Ara Rahman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-shehnaz-ara-rahman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shinjini-Paul-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Shinjini Paul Choudhury</h3>
                            <p class="card-designation">Assistant Professor and Assistant Dean, Student Affairs</p>
                            <a href="https://www.rgu.ac/faculty-shinjini-paul-choudhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Antara-Banerjee-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Antara Banerjee</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-antara-banerjee" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Raisa-Tamsin-Hussain.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Raisa Tamsin Hussain</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-raisa-tamsin-hussain" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Rajesh-Deb-RSD.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Rajesh Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rajesh-deb" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr.-Rishikesh-Duarah-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Rishikesh Duarah</h3>
                            <p class="card-designation">Assistant Professor and Assistant Dean, Admission</p>
                            <a href="https://www.rgu.ac/faculty-rishikesh-duarah" class="profile-link">View Profile</a>
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
