@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/international-why-india/cover-img.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Why India?</h1>
            <div class="pg-hero-breadcrumb">
                International / Why India?
            </div>
        </div>

    </section>

    <section class="intl-highlights-section">
        <div class="container">

            <!-- Top Grid -->
            <div class="row g-5 align-items-center">

                <!-- Left Image -->
                <div class="col-lg-6">
                    <div class="intl-img-card">
                        <img src="new-web/assets/img/international-why-india/headimg.png" alt="Education in India">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <div class="intl-content">
                        <h2>Education In India</h2>

                        <p>
                            India has the second largest education system in the world with over 1000 universities and
                            more than 40000 degree colleges. The various privately run and government run universities
                            in India aim at providing quality education with the best possible infrastructure and some
                            of them are also at par with universities in western countries. The Indian education system
                            is evolving which gives students the space to grow and learn with a strong passion to pursue
                            their dreams. Furthermore, the Indian economy is one of the fastest growing economies in the
                            world which makes it a top destination for new businesses that are looking to hire foreign
                            workers. Experts predict India will be the third largest economy in the world by 2030.
                        </p>

                    </div>
                </div>

            </div>

            <!-- Second Grid -->
            <div class="row g-5 align-items-center mt-2">

                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="intl-content">
                        <h2>Low Cost Of Living</h2>

                        <p>
                            Studying in India allows students to have the all-round experience of quality education they
                            deserve, without having to drain their accounts. The low cost of living and education in
                            India is a major bargain for students from Africa and other lesser developed countries of
                            Southeast Asia to study in India. The average tuition fee for an Indian university is
                            approximately USD 2,200-3,500 (however it may differ across different institutes) as
                            compared to USD 39,000 in the United States, USD 11,000 in the United Kingdom, and USD
                            23,000 in Australia.
                        </p>
                    </div>
                </div>

                <!-- Right Images -->
                <div class="col-lg-6">

                    <div class="intl-small-img mb-4">
                        <img src="new-web/assets/img/international-why-india/img2.png" alt="">
                    </div>

                    <div class="intl-small-img">
                        <img src="new-web/assets/img/international-why-india/img3.png" alt="">
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="intl-blue-section">

        <div class="container">

            <!-- Top Row -->
            <div class="row g-5 align-items-center">

                <!-- Left Image -->
                <div class="col-lg-6">
                    <div class="intl-blue-img">
                        <img src="new-web/assets/img/international-why-india/img4.png" alt="">
                    </div>
                </div>

                <!-- Right Blank Area -->
                <div class="col-lg-6">
                    <div class="intl-blue-writeup">

                        <h2>Experience Cultural Diversity</h2>

                        <p>
                            Finally, India is synonymous with a land of diverse cultures and heritage. The country is
                            composed of people from all around the world. This gives students endless chances to
                            interact and create long lasting bonds. Considering all these benefits there is a huge flow
                            of students from countries like Bangladesh, Nepal and African countries for higher education
                            in India.
                        </p>

                    </div>
                </div>

            </div>

            <!-- Middle Row -->
            <div class="row g-5 align-items-center mt-4">

                <!-- Left Content -->
                <div class="col-lg-6">

                    <div class="intl-content white-text">

                        <h2>Tuition Fees And Scholarships</h2>

                        <p>
                            Both Indian and foreign students are required to pay their tuition fees. The tuition fees
                            are fairly the same for both foreign and Indian students. However, the university provides
                            up to 100% scholarship to a limited number of International Students.
                        </p>

                    </div>

                </div>

                <!-- Right Image -->
                <div class="col-lg-6">
                    <div class="intl-blue-img">
                        <img src="new-web/assets/img/international-why-india/img5.png" alt="">
                    </div>
                </div>

            </div>

            <!-- Contact Box -->
            <div class="row mt-5">

                <div class="col-lg-12">

                    <div class="intl-contact-box">

                        <h3>Contact</h3>

                        <ul>

                            <li>
                                <i class="bi bi-person"></i>
                                <span>
                                    Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-telephone"></i>
                                <span>Ph. no: +91 9864049818</span>
                            </li>

                            <li>
                                <i class="bi bi-envelope"></i>
                                <span>Email: gkanand@rgu.ac</span>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
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

        .intl-content p {
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
            padding: 90px 0;
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
            font-size: 15px;
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
