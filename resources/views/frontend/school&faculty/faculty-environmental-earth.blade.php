@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

       <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Environmental & Earth Sciences
                    (RSEES)</span>
            </h2>
        </div>

        <div class="website">
@include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Environmental & Earth Sciences
                    (RSEES)</span></h2>

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

                <!-- Geology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Geography and Geoinformatics</h2>
                </div>
                <!-- Geology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Debendra-Kumar-Nayak.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. (Dr.) Debendra Kumar Nayak</h3>
                            <p class="card-designation">Professor & i/c Dean, Royal School of Environmental & Earth Sciences
                                (RSEES)</p>
                            <a href="https://www.rgu.ac/faculty-debendra-kumar-nayak" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Annesha-Borah-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Annesha Borah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Geography & Geoinformatics</p>
                            <a href="https://www.rgu.ac/faculty-annesha-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Deepanjali-Reang-RSHSS.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Deepanjali Reang</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-deepanjali-reang" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Hibjur-Rahaman.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Md. Hibjur Rahaman</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-hibjur-rahaman" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Parimita-Saikia.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Parimita Saikia</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-parimita-saikia" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Palme-Borthakur.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Palme Borthakur</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-palme-borthakur" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Pritha-Roychowdhury.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Pritha Roychowdhury</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pritha-roychowdhury" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Shobhit-Pipil.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Shobhit Pipil</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-shobhit-pipil" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Trishna-Changkakati.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Trishna Changkakati</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-trishna-changkakati" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-tushar-Sarkar-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Tushar Sarkar</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-tushar-sarkar" class="profile-link">View Profile</a>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- Geology  -->
                <div style="height: 60px; background-color: #24477f; border-radius: 10px; margin: 20px 0px;">
                    <h2 class="text-center justify-content-center fw-bold"
                        style="color: #fff; padding: 10px; font-size: 30px;">
                        Department of Geology</h2>
                </div>
                <!-- Geology  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Hemangi-Deka-Sarma-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Prof. Hemangi Deka Sarma</h3>
                            <p class="card-designation">Professor</p>
                            <a href="https://www.rgu.ac/faculty-hemangi-deka" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Roshmi-Boruah-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Roshmi Boruah</h3>
                            <p class="card-designation">Assistant Professor & Coordinator, Geology</p>
                            <a href="https://www.rgu.ac/faculty-roshmi-boruah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Abhijit-Gogoi-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Abhijit Gogoi</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-abhijit-gogoi" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Neeta-Moni-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Neeta Moni Sharma</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-neeta-moni-sharma" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Nishanta-Sahariah-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Nishanta Sahariah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-nishanta-sahariah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr-Pritom-Borah-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Dr. Pritom Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-pritom-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Amarjyoti-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Amarjyoti Borah</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-amarjyoti-borah" class="profile-link">View Profile</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mr-Rajdeep-Deb-RSEES.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name">Mr. Rajdeep Deb</h3>
                            <p class="card-designation">Assistant Professor</p>
                            <a href="https://www.rgu.ac/faculty-rajdeep-deb" class="profile-link">View Profile</a>
                        </div>
                    </div>


                </div>
                <!-- regular faculty  -->



            </div>
        </div>

    </div>
@endsection
