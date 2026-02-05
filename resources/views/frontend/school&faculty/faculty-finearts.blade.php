@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Fine Arts (RSFA)</span></h2>
        </div>

        <div class="website">
@include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Fine Arts (RSFA)</span></h2>

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
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsfa/1.jpeg"
                                    alt="Profile image of Prof. (Dr.) Hari Prasad Agarwal">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Hari Prasad Agarwal</h3>
                            <p class="card-designation">Professor & Principal, Royal School of Architecture
                                and Dean, Royal School of Design/Royal School of Fashion Design & Technology/Royal School of
                                Fine Arts
                            </p>
                            <a href="https://www.rgu.ac/faculty-hari-prasad-agarwal" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Tikendra.png"
                                    alt="Profile image of Prof. Tikendra Kumar Sahu">
                            </div>
                            <h3 class="card-name">Prof. Tikendra Kumar Sahu</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/faculty-tikendra-Kumar-sahu" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Sumanta-Dutta-Chowdhury.png"
                                    alt="Profile image of Dr. Sumanta Dutta Chowdhury">
                            </div>
                            <h3 class="card-name">Dr. Sumanta Dutta Chowdhury</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Royal School of Fine Arts</p>
                            <a href="https://www.rgu.ac/faculty-sumanta-dutta-chowdhury" class="profile-link">View
                                Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Mousumi-Deka-RSFA.png"
                                    alt="Profile image of Dr. Mousumi Deka">
                            </div>
                            <h3 class="card-name">Dr. Mousumi Deka</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-mousumi-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/Arghamita.jpg"
                                    alt="Profile image of Ms. Arghamita Sen Sarmah">
                            </div>
                            <h3 class="card-name">Ms. Arghamita Sen Sarmah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/faculty-mousumi-deka" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Kishan-Bagdi-RSFA.png"
                                    alt="Profile image of Mr. Kishan Bagdi">
                            </div>
                            <h3 class="card-name">Mr. Kishan Bagdi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-kishan-bagdi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Suman-saha.png"
                                    alt="Profile image of Mr. Suman Saha">
                            </div>
                            <h3 class="card-name">Mr. Suman Saha</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-suman-saha" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <!-- Extra Faculty  -->


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/anjali2.jpg" alt="Profile image of">
                            </div>
                            <h3 class="card-name">Ms Anjali Kumar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-anjali-kumar" class="profile-link">View Profile</a>
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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Palme-Borthakur.png"
                                    alt="Profile image of Ms. Palme Borthakur">
                            </div>
                            <h3 class="card-name">Dr. Palme Borthakur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-palme-borthakur" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsl/Pankaj.jpeg"
                                    alt="Profile image of">
                            </div>
                            <h3 class="card-name">Mr. Pankaj Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <!-- <a href="" class="profile-link">View Profile</a> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/updated-faculty-img/Dr-Tahera-Haque-Majumder-RSBAS.png"
                                    alt="Profile image of Tahera Hoque">
                            </div>
                            <h3 class="card-name">Dr. Tahera Hoque Mozumdar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tahera-mozumdar" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
@endsection
