@extends('frontend/new-master')
@section('title', 'Equal oppurtunity Cell : The Assam Royal Global University')
@section('meta_description', 'Empowering diversity and fostering inclusivity, the Equal Opportunity Cell at Royal Global University is dedicated to ensuring fair treatment and access for all.')
@section('meta_keywords', 'Equal oppurtunity Cell')
@section('content')
        <style>


        .rgeoc-section {

            padding: 90px 0;

            background: #eef3fb;

            position: relative;

            overflow: hidden;

        }

        .rgeoc-section::before {

            content: "";

            position: absolute;

            width: 550px;

            height: 550px;

            border-radius: 50%;

            right: -180px;

            top: -220px;

            background: radial-gradient(rgba(35, 69, 123, .06), transparent 70%);

        }

        .rgeoc-heading {

            text-align: center;

            margin-bottom: 65px;

            position: relative;

            z-index: 2;

        }

        .rgeoc-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 14px;

        }

        .rgeoc-heading h2 {

            margin: 0;

            font-family: "Playfair Display", serif;

            font-size: 40px;

            color: #23457b;

            font-weight: 700;

        }

        /*====================================
Cards
====================================*/

        .rgeoc-card {

            background: #fff;

            border-radius: 24px;

            padding: 28px;

            height: 100%;

            box-shadow:
                0 15px 45px rgba(18, 40, 84, .08);

            transition: .35s;

            position: relative;

            overflow: hidden;

        }

        .rgeoc-card::before {

            content: "";

            position: absolute;

            left: 0;

            top: 0;

            width: 100%;

            height: 5px;

            background: #d5af58;

            transform: scaleX(0);

            transform-origin: left;

            transition: .35s;

        }

        .rgeoc-card:hover {

            transform: translateY(-10px);

            box-shadow:
                0 28px 60px rgba(18, 40, 84, .12);

        }

        .rgeoc-card:hover::before {

            transform: scaleX(1);

        }

        /*====================================
Image
====================================*/

        .rgeoc-image {

            border-radius: 18px;

            overflow: hidden;

            background: #edf3ff;

            margin-bottom: 24px;

        }

        .rgeoc-image img {

            width: 100%;

            display: block;

            transition: .45s;

        }

        .rgeoc-card:hover .rgeoc-image img {

            transform: scale(1.05);

        }

        /*====================================
Content
====================================*/

        .rgeoc-content h3 {

            font-size: 29px;

            color: #3a3a3a;

            font-weight: 700;

            margin-bottom: 14px;

            line-height: 1.35;

        }

        .rgeoc-content p {

            color: #616161;

            line-height: 1.8;

            margin-bottom: 32px;

            min-height: 72px;

            font-size: 15px;

        }

        .rgeoc-content span {

            display: inline-flex;

            align-items: center;

            padding: 8px 18px;

            border-radius: 40px;

            background: #fff4ee;

            color: #de6427;

            font-size: 14px;

            font-weight: 600;

            transition: .3s;

        }

        .rgeoc-card:hover .rgeoc-content span {

            background: #de6427;

            color: #fff;

        }

        /*====================================
Responsive
====================================*/

        @media(max-width:991px) {

            .rgeoc-section {

                padding: 70px 0;

            }

            .rgeoc-heading {

                margin-bottom: 50px;

            }

            .rgeoc-heading h2 {

                font-size: 44px;

            }

            .rgeoc-content h3 {

                font-size: 24px;

            }

        }

        @media(max-width:767px) {

            .rgeoc-section {

                padding: 55px 0;

            }

            .rgeoc-heading {

                margin-bottom: 40px;

            }

            .rgeoc-heading span {

                font-size: 11px;

                letter-spacing: 2px;

            }

            .rgeoc-heading h2 {

                font-size: 34px;

                line-height: 1.25;

            }

            .rgeoc-card {

                padding: 20px;

                border-radius: 18px;

            }

            .rgeoc-image {

                margin-bottom: 18px;

                border-radius: 14px;

            }

            .rgeoc-content h3 {

                font-size: 21px;

                margin-bottom: 10px;

            }

            .rgeoc-content p {

                font-size: 14px;

                min-height: auto;

                margin-bottom: 20px;

                line-height: 1.7;

            }

            .rgeoc-content span {

                font-size: 13px;

                padding: 7px 14px;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Equal Opportunities Cell</h1>
            <div class="pg-hero-breadcrumb">
                Equal Opportunities Cell
            </div>
        </div>

    </section>


    <section class="rgeoc-section">

        <div class="container">

            <div class="rgeoc-heading">

                <span>Student Welfare</span>

                <h2>
                    Equal Opportunities Cell
                </h2>

            </div>

            <div class="row g-4">

                <!-- Card -->

                <div class="col-lg-3 col-md-6">

                    <div class="rgeoc-card">

                        <div class="rgeoc-image">

                            <img src="https://www.rgu.ac/mobile-assets/equal-opportunity/1.png" alt="">

                        </div>

                        <div class="rgeoc-content">

                            <h3>
                                Prof. (Dr.) Y.S.R. Murthy
                            </h3>

                            <p>
                                Hon'ble Vice Chancellor,<br>
                                The Assam Royal Global University
                            </p>

                            <span>
                                Chairperson
                            </span>

                        </div>

                    </div>

                </div>


                <!-- Card -->

                <div class="col-lg-3 col-md-6">

                    <div class="rgeoc-card">

                        <div class="rgeoc-image">

                            <img src="https://www.rgu.ac/mobile-assets/equal-opportunity/2.png" alt="">

                        </div>

                        <div class="rgeoc-content">

                            <h3>
                                Prof. (Dr.) Krishna Barua
                            </h3>

                            <p>
                                Professor & Dean,
                                RSL
                            </p>

                            <span>
                                Member
                            </span>

                        </div>

                    </div>

                </div>



                <!-- Card -->

                <div class="col-lg-3 col-md-6">

                    <div class="rgeoc-card">

                        <div class="rgeoc-image">

                            <img src="https://www.rgu.ac/mobile-assets/equal-opportunity/3.jpeg" alt="">

                        </div>

                        <div class="rgeoc-content">

                            <h3>
                                Dr. Susmita Hazarika
                            </h3>

                            <p>
                                Assistant Professor,
                                Department of History,
                                RSHSS
                            </p>

                            <span>
                                Member
                            </span>

                        </div>

                    </div>

                </div>



                <!-- Card -->

                <div class="col-lg-3 col-md-6">

                    <div class="rgeoc-card">

                        <div class="rgeoc-image">

                            <img src="https://www.rgu.ac/mobile-assets/equal-opportunity/4.jpeg" alt="">

                        </div>

                        <div class="rgeoc-content">

                            <h3>
                                Prof. (Dr.) Bhuban Ch. Barooah
                            </h3>

                            <p>
                                Dean,
                                RSLA
                            </p>

                            <span>
                                Member
                            </span>

                        </div>

                    </div>

                </div>



                <!-- Card -->

                <div class="col-lg-3 col-md-6">

                    <div class="rgeoc-card">

                        <div class="rgeoc-image">

                            <img src="https://www.rgu.ac/mobile-assets/equal-opportunity/5.png" alt="">

                        </div>

                        <div class="rgeoc-content">

                            <h3>
                                Mr. Rajdeep Deb
                            </h3>

                            <p>
                                Assistant Professor,
                                Department of Geology,
                                RSEES
                            </p>

                            <span>
                                Member
                            </span>

                        </div>

                    </div>

                </div>



                <!-- Card -->

                <div class="col-lg-3 col-md-6">

                    <div class="rgeoc-card">

                        <div class="rgeoc-image">

                            <img src="https://www.rgu.ac/mobile-assets/equal-opportunity/6.png" alt="">

                        </div>

                        <div class="rgeoc-content">

                            <h3>
                                Dr. Kamal Debnath
                            </h3>

                            <p>
                                Associate Professor & HoD,
                                Department of Mathematics,
                                RSAPS
                            </p>

                            <span>
                                Member
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
