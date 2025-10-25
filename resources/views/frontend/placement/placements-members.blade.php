@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900; padding-top: 80px; position: relative;">
               RCCR <span style="color: #FF9A1E; font-weight: 500;"> Members</span>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                RCCR <span style="color: #FF9A1E; font-weight: 500;"> Members</span>
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
                                <img src="mobile-assets/placement-all/placement-members/bristry-srivastava.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name mobile-headd2 fw-bold">Ms Bristy Srivastava</h3>
                            <p style="color: #FF9A1E;" class="card-designation">Head RCCR (Placements)</p>

                            <p class="card-designation mobile-para1 mt-3" style="font-size: 18px;">
                                A dynamic HR leader with a proven record of driving organizational growth through
                                strategic talent acquisition, diversity hiring, and HR innovation — having led
                                large-scale hiring transformations at Flipkart and LEAD School with measurable impact
                                and speed.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- regular faculty  -->

                <!-- regular faculty  -->
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/placement-all/placement-members/preeti-kalita.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name mobile-headd2 fw-bold">Ms Preety Kalita</h3>
                            <p style="color: #FF9A1E;" class="card-designation">Manager</p>

                            <p class="card-designation mobile-para1 mt-3" style="font-size: 18px;">
                                With over eight years at Apollo Excelcare Hospital, Preety has led initiatives in HR,
                                Training, and Development, focusing on employee growth and engagement. Her work has
                                strengthened workforce capability and aligned talent with organizational goals
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/placement-all/placement-members/ankur-bhuyan.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name mobile-headd2 fw-bold">Mr Ankur Bhuyan</h3>
                            <p style="color: #FF9A1E;" class="card-designation">Manager</p>

                            <p class="card-designation mobile-para1 mt-3" style="font-size: 18px;">
                                With over a decade of experience in sales and client management, Ankur has driven
                                consistent business growth across leading organizations like Tech Mahindra and Jio as a
                                Key Account Manager
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/placement-all/placement-members/torali-senabaya-deori.png"
                                    alt="Profile image ">
                            </div>
                            <h3 class="card-name mobile-headd2 fw-bold">Ms Torali Senabaya Deori</h3>
                            <p style="color: #FF9A1E;" class="card-designation">Executive</p>

                            <p class="card-designation mobile-para1 mt-3" style="font-size: 18px;">
                                Torali comes from a legal background with a Master’s in Law and experience as a Junior
                                Advocate in a reputed law firm. She brings out the perfect blend of legal acumen,
                                analytical thinking, and a commitment to ethical practice in every task she undertakes
                            </p>
                        </div>
                    </div>
                </div>
                <!-- regular faculty  -->
            </div>
        </div>

    </div>
@endsection
