@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Architecture (RSA)</span></h2>
        </div>

        <div class="website">
@include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Architecture (RSA)</span></h2>

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
                                <img src="mobile-assets/all-faculty/rsa/1.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Hari Prasad Agarwal</h3>
                            <p class="card-designation">
                                Dean, Royal School of Architecture<br>
                                Dean, Royal School of Design<br>
                                Dean, Royal School of Fashion Design & Technology <br>
                                Dean, Royal School of Fine Arts
                            </p>
                            <a href="https://www.rgu.ac/faculty-hari-prasad-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Siddhartha-Deb-RSA.png"
                                    alt="Profile image of Prof. Siddhartha Deb">
                            </div>
                            <h3 class="card-name">Prof. Siddhartha Deb</h3>
                            <p class="card-designation">Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/3.jpeg" alt="Profile image of Ar. Bhola Saha">
                            </div>
                            <h3 class="card-name">Ar. Bhola Saha</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Royal School of Architecture</p>
                            <a href="https://www.rgu.ac/faculty-Bhola-Saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ar-Kasturi-Borah-RSA.png"
                                    alt="Profile image of Ar. Kasturi Borah">
                            </div>
                            <h3 class="card-name">Ar. Kasturi Borah</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-kasturi-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Barsha-Kunda-RSA.png"
                                    alt="Profile image of Ar. Barsha Kunda">
                            </div>
                            <h3 class="card-name">Ar. Barsha Kunda</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-barsha-kunda" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ar-Diksha-Dutta-RSA.png"
                                    alt="Profile image of Ar. Diksha Dutta">
                            </div>
                            <h3 class="card-name">Ar. Diksha Dutta</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-Diksha-Dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Ar-Jagriti-Pathak-RSA.jpg"
                                    alt="Profile image of Ar. Jagriti Pathak">
                            </div>
                            <h3 class="card-name">Ar. Jagriti Pathak</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jagriti-pathak" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/10.jpeg" alt="Profile image of Ar. Jugal Devanath">
                            </div>
                            <h3 class="card-name">Ar. Jugal Devanath</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/11.jpeg"
                                    alt="Profile image of Ar. Mohua Moitri Mazumdar">
                            </div>
                            <h3 class="card-name">Ar. Mohua Moitri Mazumdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Pooja-Singh-RSA.png"
                                    alt="Profile image of Ar. Pooja">
                            </div>
                            <h3 class="card-name">Ar. Pooja</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pooja-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/13.jpeg" alt="Profile image of Ar. Pratyasha Das">
                            </div>
                            <h3 class="card-name">Ar. Pratyasha Das</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pratyasha-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/15.jpeg"
                                    alt="Profile image of Ar. Rishangi Bharadwaj">
                            </div>
                            <h3 class="card-name">Ar. Rishangi Bharadwaj</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/16.jpeg" alt="Profile image of Ar. Ritu Rani">
                            </div>
                            <h3 class="card-name">Ar. Ritu Rani</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ritu-rani" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsa/17.jpeg" alt="Profile image of Ar. Sanchari Kar">
                            </div>
                            <h3 class="card-name">Ar. Sanchari Kar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-sanchari-kar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Rajesh-Deb-RSD.png"
                                    alt="Profile image of Ar. Rajesh Deb">
                            </div>
                            <h3 class="card-name">Ar. Rajesh Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                  <div class="card-image">
                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png"
                      alt="Profile image of Dr. Sumanta Dutta Chowdhury">
                  </div>
                  <h3 class="card-name">Dr. Sumanta Dutta Chowdhury</h3>
                  <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fine Arts</p>
                  <a href="https://www.rgu.ac/faculty-sumanta-dutta-chowdhury" class="profile-link">View Profile</a>
                </div>
              </div> -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Mousumi-Deka-RSFA.png"
                                    alt="Profile image of Dr. Mousumi Deka">
                            </div>
                            <h3 class="card-name">Dr. Mousumi Deka</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-mousumi-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image of Mr. Pankaj Gogoi">
                            </div>
                            <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/all-faculty/rsl/Chandni.jpeg"
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
                                <img src="mobile-assets/updated-faculty-img/Dr-Bishal-Podder-RSET.png"
                                    alt="Profile image of Dr. Bishal Podder">
                            </div>
                            <h3 class="card-name">Dr. Bishal Podder</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Mechanical Engineering</p>
                            <a href="https://www.rgu.ac/faculty-bishal-podder" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png"
                                    alt="Profile image of Mr. Prasant Mali">
                            </div>
                            <h3 class="card-name">Mr. Prasant Mali</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/olivia.JPG"
                                    alt="Profile image of Dr. Olivia Kakati">
                            </div>
                            <h3 class="card-name">Dr. Olivia Kakati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/olivia-kakati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ar%20Madhu.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ar. Madhu Vottery</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="https://www.rgu.ac/faculty-madhu-vottery" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/shweta.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ar. Shweta Das</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <a href="https://www.rgu.ac/faculty-shweta-das" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->


            </div>
        </div>

    </div>
@endsection
