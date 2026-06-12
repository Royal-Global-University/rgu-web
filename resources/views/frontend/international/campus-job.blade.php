@extends('frontend/new-master')
@section('content')
    <!-- Dont Include this  -->

    <!-- Include all these  -->
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/international-on-campus/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> On-Campus Job</h1>
            <div class="pg-hero-breadcrumb">
                International / On-Campus Job
            </div>
        </div>

    </section>

    <!-- ======================================
         ON-CAMPUS JOBS SECTION
    ======================================= -->

    <section class="rgu-ocj-section">

        <div class="container">

            <!-- Top Section -->

            <div class="row align-items-center g-5 mb-5">

                <!-- Image -->

                <div class="col-lg-6">

                    <div class="rgu-ocj-image-wrap">

                        <img src="/new-web/assets/img/international-on-campus/img1.png" alt="On Campus Jobs" class="img-fluid">

                    </div>

                </div>


                <!-- Types of Jobs -->

                <div class="col-lg-6">

                    <div class="rgu-ocj-content">

                        <h2 class="rgu-ocj-title">
                            Types Of On-Campus Jobs
                            Available To Students
                        </h2>

                        <ul class="rgu-ocj-list">

                            <li>
                                Students can work as Student Guides and assist juniors or weaker students.
                            </li>

                            <li>
                                Students can work as Call Centre Assistants and assist students in their admission.
                            </li>

                            <li>
                                Students can work as Library Assistants and help in the day-to-day working of the
                                library.
                            </li>

                            <li>
                                Students can work as Front Office Assistants and guide visitors.
                            </li>

                        </ul>

                    </div>

                </div>

            </div>


            <!-- Bottom Section -->

            <div class="row g-5 align-items-start">

                <!-- Support -->

                <div class="col-lg-6">

                    <div class="rgu-ocj-support">

                        <h2 class="rgu-ocj-support-title">

                            For Any Support Or Guidance, International Students
                            (Present Or Future) Can Connect With:

                        </h2>


                        <div class="rgu-ocj-contact-list">

                            <div class="rgu-ocj-contact-item">

                                <i class="fa fa-user"></i>

                                <span>
                                    Ms. Gurpreet Kaur Anand, Deputy Director,
                                    The Office of International Affairs
                                </span>

                            </div>


                            <div class="rgu-ocj-contact-item">

                                <i class="fa fa-phone"></i>

                                <span>
                                    Ph. no: +91 9864049818
                                </span>

                            </div>


                            <div class="rgu-ocj-contact-item">

                                <i class="fa fa-envelope"></i>

                                <span>
                                    Email: gkanand@rgu.ac
                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Eligibility -->

                <div class="col-lg-6">

                    <div class="rgu-ocj-eligibility">

                        <h2 class="rgu-ocj-eligibility-title">

                            Eligibility

                        </h2>


                        <ul class="rgu-ocj-list">

                            <li>
                                The intending student will have to approach the Department of Branding & Communication,
                                seeking their work interest.
                            </li>

                            <li>
                                Upon checking their profile and skill areas, they might have to appear for an interview
                                with the Senior Management.
                            </li>

                            <li>
                                Students may be asked to submit additional documents during the application review.
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
        /*======================================
    ON-CAMPUS JOBS
    ======================================*/

        .rgu-ocj-section {
            padding: 80px 0;
            background: #e9eef6;
        }

        .rgu-ocj-image-wrap {
            overflow: hidden;
            border-radius: 40px;
        }

        .rgu-ocj-image-wrap img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            display: block;
        }

        .rgu-ocj-title,
        .rgu-ocj-support-title,
        .rgu-ocj-eligibility-title {
            font-family: 'Playfair Display', serif;
            color: #2f4e89;
            font-weight: 700;
            line-height: 1.2;
        }

        .rgu-ocj-title {
            font-size: 3.8rem;
            margin-bottom: 3rem;
        }

        .rgu-ocj-support-title {
            font-size: 3.5rem;
            margin-bottom: 3rem;
        }

        .rgu-ocj-eligibility-title {
            font-size: 3.8rem;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #d7d7d7;
        }

        .rgu-ocj-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .rgu-ocj-list li {
            position: relative;
            padding-left: 24px;
            margin-bottom: 2.4rem;

            color: #5c6470;

            font-size: 1.8rem;
            line-height: 1.9;
        }

        .rgu-ocj-list li::before {
            content: '';

            width: 9px;
            height: 9px;

            background: #d95b28;
            border-radius: 50%;

            position: absolute;
            left: 0;
            top: 11px;
        }

        .rgu-ocj-support {
            padding-right: 3rem;
        }

        .rgu-ocj-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1.8rem;

            margin-bottom: 2.5rem;
        }

        .rgu-ocj-contact-item i {
            color: #d95b28;
            font-size: 2.6rem;
            width: 28px;
            margin-top: 2px;
        }

        .rgu-ocj-contact-item span {
            color: #5c6470;
            font-size: 1.8rem;
            line-height: 1.8;
        }

        .rgu-ocj-eligibility {
            background: #fff;
            border-radius: 0 30px 30px 30px;
            padding: 4rem;
            border: 1px solid #dddddd;
        }

        @media(max-width:991px) {

            .rgu-ocj-section {
                padding: 60px 0;
            }

            .rgu-ocj-title {
                font-size: 3.8rem;
            }

            .rgu-ocj-support-title {
                font-size: 3.2rem;
            }

            .rgu-ocj-eligibility-title {
                font-size: 3rem;
            }

            .rgu-ocj-image-wrap img {
                height: 300px;
            }

            .rgu-ocj-support {
                padding-right: 0;
            }
        }

        @media(max-width:767px) {

            .rgu-ocj-title {
                font-size: 3rem;
            }

            .rgu-ocj-support-title {
                font-size: 2.7rem;
            }

            .rgu-ocj-eligibility-title {
                font-size: 2.6rem;
            }

            .rgu-ocj-image-wrap {
                border-radius: 25px;
            }

            .rgu-ocj-image-wrap img {
                height: 240px;
            }

            .rgu-ocj-eligibility {
                padding: 3rem 2.5rem;
            }

            .rgu-ocj-list li,
            .rgu-ocj-contact-item span {
                font-size: 1.4rem;
            }
        }
    </style>
@endsection
