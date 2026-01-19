@extends('frontend.master')
@section('content')
    <section style="background-image: url(https://media.rgu.ac/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 120px;"></div>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
        </div>

        <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

            <div class="mobile" style="padding-top: 80px; position: relative;">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Indian knowledge <br><span style="color: #FF9A1E; font-weight: 500;"> Systems Committee (IKS)</span></h2>

            </div>

            <div class="website">

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                    style="color: #27467A; font-weight: 900;">
                    Indian knowledge <span style="color: #FF9A1E; font-weight: 500;"> Systems Committee (IKS)</span></h2>

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
                    font-family: 'Times New Roman', Times, serif;
                    margin: 0 0 0.5rem 0;
                    font-size: 1.5rem;
                    font-weight: 600;
                    color: #333;
                    line-height: 1.2;
                    color: #24477f;
                }

                /* Designation/Paragraph Styling */
                .card-designation {
                    font-family: 'Times New Roman', Times, serif;
                    margin: 0;
                    font-size: 1.2rem;
                    font-weight: 400;
                    color: #666;
                    line-height: 1.4;
                }

                /* New Styling for the Profile Link */
                .profile-link {
                    font-family: 'Times New Roman', Times, serif;
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
                                    <img src="https://media.rgu.ac/iks/Dr.SaswatiBordoloi.jpeg" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Saswati Bordoloi</h3>
                                <p class="card-designation">Co-Coordinator, IKS Cell</p>
                                <a href="https://www.rgu.ac/faculty-saswati-bordoloi" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://media.rgu.ac/iks/Mr.TinkuMoniDas.jpeg" alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Tinku Moni Das</h3>
                                <p class="card-designation">Faculty Member, IKS Cell</p>
                                <a href="https://www.rgu.ac/faculty-tinku" class="profile-link">View Profile</a>
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
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Susmita-Banerjee-RSHSS.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Susmita Banerjee</h3>
                                <p class="card-designation">Faculty Member, IKS Cell</p>
                                <a href="https://www.rgu.ac/faculty-susmita-banerjee" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://media.rgu.ac/iks/Pranab.jpg" alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Pranab Jyoti Sarma</h3>
                                <p class="card-designation">Assistant Professor & Assistant Dean, Academic Affairs, IKS Cell
                                </p>
                                <a href="https://www.rgu.ac/faculty-pranab-sarma" class="profile-link">View Profile</a>
                            </div>
                        </div>


                    </div>
                    <!-- regular faculty  -->

                    <!-- Adjuct faculty  -->
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Kadiguang-Panmei.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Mr. Kadiguang Panmei</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-kadiguang-panmei" class="profile-link">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Palme-Borthakur.png"
                                        alt="Profile image">
                                </div>
                                <h3 class="card-name">Dr. Palme Borthakur</h3>
                                <p class="card-designation">Assistant Professor</p>
                                <a href="https://www.rgu.ac/faculty-palme-borthakur" class="profile-link">View Profile</a>
                            </div>
                        </div>

                    </div>
                    <!-- Adjuct faculty  -->

                </div>
            </div>

        </div>

    </section>
@endsection
