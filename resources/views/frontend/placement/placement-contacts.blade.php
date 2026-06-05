@extends('frontend/new-master')
@section('content')
    <style>
        .placement-contact-section {
            background: #dde3ee;
            padding: 80px 0;
            overflow: hidden;
        }

        .placement-contact-section .container {
            max-width: 1280px;
        }

        .placement-contact-wrapper {
            display: grid;
            grid-template-columns: 0.9fr 1.3fr;
            gap: 50px;
            align-items: start;
            margin-bottom: 35px;
        }

        .placement-contact-title {
            font-family: "Playfair Display", serif;
            font-size: 4.8rem;
            line-height: 1.05;
            color: #27467a;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .placement-contact-desc {
            max-width: 430px;
            color: #5c5c5c;
            font-size: 1.4rem;
            line-height: 1.8;
            margin: 0;
        }

        .placement-contact-main-card,
        .placement-contact-card {
            background: #f8f7f6;
            border-radius: 14px;
            padding: 28px;
        }

        .placement-contact-main-card h3,
        .placement-contact-card h4 {
            font-family: "Playfair Display", serif;
            color: #e56f3a;
            font-weight: 700;
        }

        .placement-contact-main-card h3 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .placement-contact-card h4 {
            font-size: 2rem;
            margin-bottom: 16px;
        }

        .placement-contact-main-card p {
            color: #666;
            font-size: 1.8rem;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        .placement-contact-divider {
            height: 1px;
            background: #dddddd;
            margin: 18px 0 22px;
        }

        .placement-contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 18px 50px;
        }

        .placement-contact-full {
            width: 100%;
        }

        .placement-contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .placement-contact-icon {
            width: 34px;
            height: 34px;
            border: 1px solid #27467a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #27467a;
            font-size: 12px;
            flex-shrink: 0;
        }

        .placement-contact-item span {
            font-size: 1.7rem;
            color: #555;
        }

        .placement-contact-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .invisible {
            visibility: hidden;
        }

        @media (max-width: 991px) {

            .placement-contact-wrapper {
                grid-template-columns: 1fr;
            }

            .placement-contact-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .placement-contact-title {
                font-size: 3.8rem;
            }
        }

        @media (max-width: 767px) {

            .placement-contact-section {
                padding: 50px 0;
            }

            .placement-contact-grid {
                grid-template-columns: 1fr;
            }

            .placement-contact-title {
                font-size: 2.8rem;
            }

            .placement-contact-main-card h3 {
                font-size: 2.2rem;
            }

            .placement-contact-card h4 {
                font-size: 1.8rem;
            }

            .placement-contact-info {
                display: block;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/placement-contact/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Placement Contacts</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Placement Contacts
            </div>
        </div>

    </section>

    <section class="placement-contact-section">
        <div class="container">

            <div class="placement-contact-wrapper">

                <!-- Left Content -->
                <div class="placement-contact-intro">

                    <h2 class="placement-contact-title">
                        Placement
                    </h2>

                    <p class="placement-contact-desc">
                        RCCR is RGU's Dedicated Placement and Career Development Cell —
                        Bridging Students With Leading National And International Employers
                        Through Placements, Internships, Conclaves, And Job Fairs.
                    </p>

                </div>

                <!-- Main RCCR Card -->
                <div class="placement-contact-main-card">

                    <h3>Placement Contacts</h3>



                    <div class="placement-contact-divider"></div>

                    <div class="placement-contact-info">

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 70867 51583</span>
                        </div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 70867 51573</span>
                        </div>

                        <div class="placement-contact-item placement-contact-full">
                            <div class="placement-contact-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <span>rccr.placement@rgu.ac</span>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Contact Cards -->
            <!-- <div class="placement-contact-grid">

                    <div class="placement-contact-card">
                        <h4>General Enquiries</h4>

                        <div class="placement-contact-divider"></div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 70860 93458</span>
                        </div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon invisible">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 70860 93459</span>
                        </div>
                    </div>

                    <div class="placement-contact-card">
                        <h4>Admission Helpline</h4>

                        <div class="placement-contact-divider"></div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 78799 98811</span>
                        </div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <span>admissions@rgu.ac</span>
                        </div>
                    </div>

                    <div class="placement-contact-card">
                        <h4>International Helpline</h4>

                        <div class="placement-contact-divider"></div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 69130 02970</span>
                        </div>
                    </div>

                    <div class="placement-contact-card">
                        <h4>Accounts Department</h4>

                        <div class="placement-contact-divider"></div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 69080 02959</span>
                        </div>

                        <div class="placement-contact-item">
                            <div class="placement-contact-icon invisible">
                                <i class="fa fa-phone"></i>
                            </div>
                            <span>+91 69080 02960</span>
                        </div>
                    </div>

                </div> -->

        </div>
    </section>
@endsection
