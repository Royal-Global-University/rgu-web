@extends('frontend/new-master')
@section('content')
    <style>
        /*=========================================================
    STUDENT HELPLINE
    =========================================================*/

        .student-help-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        /*=========================================================
    IMAGE
    =========================================================*/

        .student-help-image {

            position: relative;

        }

        .student-help-image img {

            width: 100%;

            display: block;

            border-radius: 22px;

            animation: studentFloat 6s ease-in-out infinite;

            transition: .45s;

        }

        .student-help-image img:hover {

            transform: scale(1.02);

        }

        @keyframes studentFloat {

            0% {

                transform: translateY(0);

            }

            50% {

                transform: translateY(-10px);

            }

            100% {

                transform: translateY(0);

            }

        }

        /*=========================================================
    CONTENT
    =========================================================*/

        .student-help-content {

            padding-left: 35px;

        }

        .student-help-content h2 {

            font-family: "Playfair Display", serif;

            font-size: 30px;

            line-height: 1.35;

            color: #1d3c73;

            margin-bottom: 35px;

        }

        .student-help-list {

            margin: 0;

            padding: 0;

            list-style: none;

        }

        .student-help-list li {

            position: relative;

            padding-left: 28px;

            margin-bottom: 24px;

            color: #666;

            line-height: 1.9;

        }

        .student-help-list li::before {

            content: "";

            position: absolute;

            left: 0;

            top: 11px;

            width: 8px;

            height: 8px;

            background: #e56a3b;

            border-radius: 50%;

        }

        /*=========================================================
    CONTACT CARD
    =========================================================*/

        .student-help-card {

            background: #fff;

            margin-top: 70px;

            border-radius: 18px;

            padding: 35px 40px;

            box-shadow: 0 18px 45px rgba(0, 0, 0, .06);

        }

        .student-help-card h3 {

            font-family: "Playfair Display", serif;

            font-size: 34px;

            color: #1d3c73;

            margin-bottom: 18px;

            line-height: 1.4;

        }

        .student-help-divider {

            width: 100%;

            height: 1px;

            background: #d8e1ef;

            margin-bottom: 30px;

        }

        .student-help-item {

            display: flex;

            align-items: flex-start;

            margin-bottom: 22px;

        }

        .student-help-item:last-child {

            margin-bottom: 0;

        }

        .student-help-item i {

            color: #e56a3b;

            font-size: 24px;

            margin-right: 18px;

            min-width: 24px;

        }

        .student-help-item span,

        .student-help-item a {

            color: #35537e;

            text-decoration: none;

            line-height: 1.8;

            transition: .3s;

        }

        .student-help-item a:hover {

            color: #e56a3b;

        }

        /*=========================================================
    TABLET
    =========================================================*/

        @media(max-width:991px) {

            .student-help-content {

                padding-left: 0;

                margin-top: 40px;

            }

            .student-help-content h2 {

                font-size: 38px;

            }

            .student-help-card {

                margin-top: 50px;

            }

        }

        /*=========================================================
    MOBILE
    =========================================================*/

        @media(max-width:767px) {

            .student-help-section {

                padding: 60px 0;

            }

            .student-help-content h2 {

                font-size: 30px;

            }

            .student-help-card {

                padding: 25px;

            }

            .student-help-card h3 {

                font-size: 26px;

            }

            .student-help-item {

                align-items: flex-start;

            }

            .student-help-item i {

                font-size: 20px;

                margin-right: 14px;

            }

            .student-help-item span,

            .student-help-item a {

                font-size: 15px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/helpline/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Student Helpline</h1>
            <div class="pg-hero-breadcrumb">
                International / Student Helpline
            </div>
        </div>

    </section>


    <section class="student-help-section">

        <div class="container">

            <div class="row align-items-center">

                <!--=====================================
                IMAGE
                ======================================-->

                <div class="col-lg-6">

                    <div class="student-help-image">

                        <img src="new-web/assets/img/helpline/headimg.png" alt="International Student Support">

                    </div>

                </div>

                <!--=====================================
                CONTENT
                ======================================-->

                <div class="col-lg-6">

                    <div class="student-help-content">

                        <h2>

                            The University Provides Several Support Services To International Students So That Their
                            Study And Stay In India Is Hassle Free

                        </h2>

                        <ul class="student-help-list">

                            <li>

                                Guidance throughout your chosen program of study regarding any financial issues,
                                counselling and documentation support.

                            </li>

                            <li>

                                Specialised advisory services for international students.

                            </li>

                            <li>

                                Referrals to relevant contacts inside and outside the University.

                            </li>

                            <li>

                                Social programs and promotion of activities for international students.

                            </li>

                        </ul>

                    </div>

                </div>

            </div>





            <!--=====================================
            CONTACT CARD
            ======================================-->

            <div class="student-help-card">

                <h3>

                    For Any Support Or Guidance, International Students (Present Or Future) Can Connect With:

                </h3>

                <div class="student-help-divider"></div>

                <div class="student-help-item">

                    <i class="bi bi-person"></i>

                    <span>

                        Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs

                    </span>

                </div>

                <div class="student-help-item">

                    <i class="bi bi-telephone"></i>

                    <a href="tel:+919864049818">

                        Ph. No: +91 9864049818

                    </a>

                </div>

                <div class="student-help-item">

                    <i class="bi bi-envelope"></i>

                    <a href="mailto:gkanand@rgu.ac">

                        Email: gkanand@rgu.ac

                    </a>

                </div>

            </div>

        </div>

    </section>
@endsection
