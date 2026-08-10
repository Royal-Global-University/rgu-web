@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/introduction/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Introduction</h1>
            <div class="pg-hero-breadcrumb">
                Placement / Introduction
            </div>
        </div>

    </section>


    <!-- =========================
             INTERNATIONAL HIGHLIGHTS SECTION
             Place this after the Hero Section
        ========================= -->

    <section class="intl-highlights-section">
        <div class="container">

            <!-- Top Grid -->
            <div class="row g-5 align-items-center">

                <!-- Left Image -->
                <div class="col-lg-6">
                    <div class="intl-img-card">
                        <img src="/mobile-assets/placement-all/placement-intro/headimg.png" alt="Education in India">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <div class="intl-content">
                        <h2>About Department</h2>

                        <p>
                            Royal Centre for Corporate Relations (RCCR) strives to provide employable students with best
                            of opportunities on campus to start their corporate journey with reputed organizations
                            across India. RCCR is an indispensable pillar of the University as it plays a pivotal role
                            in shaping every student’s future.
                        </p>

                        <h4>The Centre is Composed of:</h4>

                        <p>
                        <ol>
                            <li>
                                Members of the RCCR.
                            </li>
                            <li>
                                One faculty placement coordinator from each Department.
                            </li>
                            <li>
                                Student coordinators from every department.
                            </li>
                            <li>
                                Senior officers of the University (As Advisors/Mentors to the Centre).
                            </li>
                        </ol>
                        </p>

                    </div>
                </div>

            </div>


        </div>
    </section>


    <!-- =========================
             BLUE SECTION
        ========================= -->

    <section class="intl-blue-section">

        <div class="container">

            <!-- Top Row -->
            <div class="row g-5 align-items-center">



                <!-- Right Blank Area -->
                <div class="col-lg-12">
                    <div class="intl-blue-writeup">

                        <p>
                            The centre continuously endeavours to help students in pursuing their career goals by
                            imparting employment-seeking skills and thereby to attain desired employment. This is
                            accomplished through a strong bond created amongst students, alumni, faculty members and the
                            industry. Royal Centre for Corporate Relations mentors students to the effect that they are
                            industry-ready at the end of their final academic session. The centre is unique in nature as
                            it aims at grooming students ethically as well as in terms of attitude and aptitude, through
                            regular training and interactive sessions. The main objective of this Centre is to make the
                            students ready to face the challenges of the corporate world and to help them in getting
                            placed after completing respective courses.
                        </p>

                    </div>
                </div>

            </div>



        </div>

    </section>

    <style>
        /* ===================================
           INTERNATIONAL HIGHLIGHTS
        =================================== */

        .intl-highlights-section {
            background: #eef1f7;
            padding: 80px 0 40px;
        }

        .intl-img-card img,
        .intl-small-img img,
        .intl-blue-img img {
            width: 100%;
            display: block;
            object-fit: cover;
            border-radius: 28px;
        }

        .intl-img-card img {
            height: 320px;
        }

        .intl-small-img img {
            height: 140px;
        }

        .intl-blue-img img {
            height: 300px;
        }

        .intl-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 700;
            color: #1f3f7f;
            margin-bottom: 20px;
        }

        .intl-content h4 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 700;
            color: #1f3f7f;
            margin-bottom: 20px;
        }

        .intl-content p {
            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 16px;
        }

        .intl-content ol li {
            font-family: 'Inter', sans-serif;
            color: #5d6678;
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 16px;
        }


        /* ===================================
           BLUE SECTION
        =================================== */

        .intl-blue-section {
            background: linear-gradient(180deg, #2f4d89 0%, #0b2456 100%);
            margin-top: 60px;
            padding: 20px 0;
            border-radius: 70px 70px 0 0;
        }

        .intl-blue-writeup {
            padding: 20px 40px;
        }

        .intl-blue-writeup h2 {
            font-family: 'Playfair Display', serif;
            color: #fff;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .intl-blue-writeup p {
            color: rgba(255, 255, 255, .85);
            line-height: 1.9;
            font-size: 18px;
        }

        .white-text h2 {
            color: #fff;
        }

        .white-text p {
            color: rgba(255, 255, 255, .85);
        }


        /* ===================================
           CONTACT BOX
        =================================== */

        .intl-contact-box {
            background: #eef1f7;
            border-radius: 22px 22px 50px 50px;
            padding: 35px;
            width: 100%;
        }

        .intl-contact-box h3 {
            font-family: 'Playfair Display', serif;
            color: #1f3f7f;
            font-size: 34px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #d8dce5;
        }

        .intl-contact-box ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .intl-contact-box li {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
            color: #4d5b78;
            font-size: 2.2rem;
            line-height: 1.7;
        }

        .intl-contact-box i {
            color: #ff6b35;
            font-size: 20px;
            margin-top: 3px;
        }


        /* ===================================
           RESPONSIVE
        =================================== */

        @media (max-width:991px) {

            .intl-highlights-section {
                padding: 60px 0 20px;
            }

            .intl-content h2,
            .intl-blue-writeup h2 {
                font-size: 34px;
            }

            .intl-blue-section {
                border-radius: 40px 40px 0 0;
                padding: 60px 0;
            }

            .intl-blue-writeup {
                padding: 0;
            }

            .intl-img-card img,
            .intl-blue-img img {
                height: 250px;
            }

            .intl-small-img img {
                height: 180px;
            }
        }

        @media (max-width:767px) {

            .intl-content h2,
            .intl-blue-writeup h2 {
                font-size: 28px;
            }

            .intl-contact-box {
                padding: 25px;
            }

            .intl-contact-box h3 {
                font-size: 28px;
            }
        }
    </style>
@endsection
