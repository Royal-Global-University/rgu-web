@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Travel & Tourism Management (RSTTM)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Travel & Tourism Management (RSTTM)</span></h2>

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
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Verma.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof (Dr.) Maheshwari Prasad Verma</h3>
                            <p class="card-designation">Professor & Dean, Royal School of Hotel Management (RSHM)/ Royal
                                School of Travel & Tourism Management (RSTTM)</p>
                            <a href="https://www.rgu.ac/faculty-m-p-verma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/soumitra-sen.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Soumitra Sen</h3>
                            <p class="card-designation">Senior Professor</p>
                            <a href="https://www.rgu.ac/faculty-soumitra-sen" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/demo-assets/Ajeet.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Ajeet Kumar Singh</h3>
                            <p class="card-designation">Professor</p>
                            <a href="/faculty-ajeet-kr-singh" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Indrajit.jpeg"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Indrajit Dutta</h3>
                            <p class="card-designation">Associate Professor, Associate Dean, Academic Affairs & HOD, RSTTM</p>
                            <a href="https://www.rgu.ac/faculty-indrajit-dutta" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/supriya.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Supriya Sikari</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="/faculty-supriya-sikari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Syed-Sajidul-Islam-RSHM.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Syed Sajidul Islam</h3>
                            <p class="card-designation">Associate Professor</p>
                            <a href="https://www.rgu.ac/faculty-syed-sajidul-islam" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Piyush-Gupta-RSHM.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Piyush Gupta</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, RSHM</p>
                            <a href="https://www.rgu.ac/faculty-piyush-gupta" class="profile-link">View Profile</a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Prabahan-Puzari.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Prabahan Puzari</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-prabahan-puzari" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="/mobile-assets/updated-faculty-img/angshumi.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Ms. Angshumi Goswami</h3>
                            <p class="card-designation">Assistant Professor</p>
                            {{-- <a href="https://www.rgu.ac/faculty-prabahan-puzari" class="profile-link">View Profile</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dikhyant.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Dikhyant Rath</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-dikhyant" class="profile-link">View Profile</a>
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
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

            </div>
        </div>

    </div>
@endsection
