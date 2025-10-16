@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Information Technology (RSIT)</span>
            </h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Information Technology (RSIT)</span></h2>

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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Rashel-Sarkar-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Rashel Sarkar</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/faculty-rashel-sarkar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Deepjyoti-Choudhury-RSIT.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Deepjyoti Choudhury</h3>
                            <p class="card-designation">Associate Professor & HOD, Computer Science & Engineering and Royal School of Information Technology</p>
                            <a href="https://www.rgu.ac/faculty-deepjyoti-choudhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Anurag.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Anurag Barthwal</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-anurag-barthwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Bhairab.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Bhairab Sarma</h3>
                            <p class="card-designation">Associate Professor</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dipankar.jpg"
                                    alt="Profile image ">
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
                                    alt="Profile image ">
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
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Dillip Rout</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dillip-rout" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Hidangmayum.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Hidangmayum Satyajeet Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-hidangmayum-satyajeet-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Naveen.jpeg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Naveen R Shahi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-naveen-r-shahi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Afsana-Laskar-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Afsana Laskar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-afsana-laskar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rset/cse/7.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Akangkhi Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-akangkhi-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Ankita-Goyal-Agarwala-RSIT.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Ankita Goyal Agarwala</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-ankita-goyal-agarwala" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bidisha.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Bidisha Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-bidisha-goswami" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nayan-J-Kalita-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Nayan Jyoti Kalita</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nayan-jyoti-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Nilakshi-Deka-RSIT.png"
                                    alt="Profile image ">
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
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Spandan Kumar Barthakur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-spandan-barthakur" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Vanita-Agrawal-RSET.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Vanita Agrawal</h3>
                            <p class="card-designation">Assistant Professor & Head, Laboratory Services</p>
                            <a href="https://www.rgu.ac/faculty-vanita-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Rashmi Choudhury</h3>
                            <p class="card-designation">Teaching Assistant</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Ms.%20Dubari%20Sarma.jpg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Dubari Sarma</h3>
                            <p class="card-designation">Visiting Faculty</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/RSIT/Ms.%20Meghna%20Dasgupta.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Meghna Dasgupta</h3>
                            <p class="card-designation">Visiting Faculty</p>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Bhagyashri-Patgiri-RSAPS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Bhagyashree Patgiri</h3>
                            <p class="card-title">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bhagyashri-patgiri" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Pranab Jyoti Sarma</h3>
                            <p class="card-title">Faculty Member, IKS Cell</p>
                            <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Prasant-Mali-RSL.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Prasant Mali</h3>
                            <p class="card-title">Assistant Professor</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Ms-Jahnabi-Mahanta-RSBAS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Jahnabi Mahanta</h3>
                            <p class="card-title">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-jahnabi-mahanta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Jyoti-Mishra.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Jyoti Mishra</h3>
                            <p class="card-title">Assistant Professor</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Naphisabet-Kharsati.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Naphisabet Kharsati</h3>
                            <p class="card-title">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-naphisabet" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Pronami-Bhattacharyya-RSL.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Pronami Bhattacharyya</h3>
                            <p class="card-title">Assistant Professor</p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Parismita-Phukan-RSAPS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Parismita Phukan</h3>
                            <p class="card-title">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-parismita-phukan" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src=" https://www.rgu.ac/mobile-assets/updated-faculty-img/Bapan-Kalita.jpg" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Bapan Kalita</h3>
                            <p class="card-title">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-dr-bapan-kalita" class="profile-link">View Profile</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
