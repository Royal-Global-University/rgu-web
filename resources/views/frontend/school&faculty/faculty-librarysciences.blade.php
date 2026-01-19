@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Library & Information Sciences
                    (RSLISC)</span></h2>
        </div>

        <div class="website">
@include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Library & Information Sciences
                    (RSLISC)</span></h2>

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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Hirak-Jyoti-Hazarika-RSLIC.png"
                                    alt="Profile image of Dr. Hirak Jyoti Hazarika">
                            </div>
                            <h3 class="card-name">Dr. Hirak Jyoti Hazarika</h3>
                            <p class="card-designation">Assistant Professor, Assistant Dean, Academic Affairs & HoD, Library Science</p>
                            <a href="/faculty-hirak-jyoti-hazarika" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rslisc/MukutorRahman.jpg"
                                    alt="Profile image of Dr. Md. Mukutor Rahman">
                            </div>
                            <h3 class="card-name">Dr. Md. Mukutor Rahman</h3>
                            <p class="card-designation">Assistant Professor cum Incharge Librarian</p>
                            <a href="/faculty-mukutor-rahman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Nilanjana-Purkayastha-RSLIC.png"
                                    alt="Profile image of Dr. Nilanjana Purkayastha">
                            </div>
                            <h3 class="card-name">Dr. Nilanjana Purkayastha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="/faculty-nilanjana-purkayastha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Stuti-Goswami-RSL.png"
                                    alt="Profile image of Dr. Stuti Goswami">
                            </div>
                            <h3 class="card-name">Dr. Stuti Goswami</h3>
                            <p class="card-designation">Associate Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rshss/jugal.jpeg"
                                    alt="Profile image of Mr. Jugal Kishore Bhattacharyya">
                            </div>
                            <h3 class="card-name">Mr. Jugal Kishore Bhattacharyya</h3>
                            <p class="card-designation">Assistant Professor & Coordinator GE/AEEC</p>
                            <a href="https://www.rgu.ac/faculty-jugal-kishore-bhattacharyya" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                </div>

                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection
