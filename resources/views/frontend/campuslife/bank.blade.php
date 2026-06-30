@extends('frontend/new-master')
@section('title', 'Banking service : The Assam Royal Global University')
@section('meta_description', 'Explore comprehensive banking services at Royal Global University designed to support
    students and staff with convenient, secure, and seamless financial solutions on campus.')
@section('meta_keywords', 'Banking service')
@section('content')

    <style>
        /*=========================================================
    BANKING SECTION
    =========================================================*/

        .banking-section {

            padding: 80px 0;

            background: #EBF1FC;

        }

        .banking-heading {

            text-align: center;

            max-width: 850px;

            margin: 0 auto 60px;

        }

        .banking-heading h2 {

            font-family: "Playfair Display", serif;

            font-size: 46px;

            font-weight: 700;

            color: #17366d;

            margin-bottom: 18px;

        }

        .banking-heading h2::after {

            content: "";

            display: block;

            width: 80px;

            height: 3px;

            background: #e56a3b;

            margin: 18px auto 0;

            border-radius: 20px;

        }

        .banking-heading p {

            color: #666;

            font-size: 16px;

            line-height: 1.9;

            margin: 0;

        }

        /*=========================================================
    GRID
    =========================================================*/

        .banking-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 30px;

        }

        /*=========================================================
    CARD
    =========================================================*/

        .banking-card {

            background: #fff;

            border: 1px solid #e7e7e7;

            border-radius: 12px;

            overflow: hidden;

            transition: .35s;

            height: 100%;

            display: flex;

            flex-direction: column;

        }

        .banking-card:hover {

            transform: translateY(-6px);

            box-shadow: 0 18px 35px rgba(0, 0, 0, .08);

            border-color: #d9d9d9;

        }

        /*=========================================================
    IMAGE
    =========================================================*/

        .banking-image {

            overflow: hidden;

        }

        .banking-image img {

            width: 100%;

            display: block;

            transition: .5s;

        }

        .banking-card:hover .banking-image img {

            transform: scale(1.05);

        }

        /*=========================================================
    CONTENT
    =========================================================*/

        .banking-content {

            padding: 24px;

            flex: 1;

            display: flex;

            flex-direction: column;

        }

        .banking-content h3 {

            font-family: "Playfair Display", serif;

            font-size: 27px;

            color: #17366d;

            margin: 0 0 15px;

            line-height: 1.4;

        }

        .banking-content p {

            margin: 0;

            color: #666;

            font-size: 15px;

            line-height: 1.9;

        }

        /*=========================================================
    RESPONSIVE
    =========================================================*/

        @media(max-width:991px) {

            .banking-grid {

                grid-template-columns: repeat(2, 1fr);

            }

            .banking-heading h2 {

                font-size: 38px;

            }

        }

        @media(max-width:767px) {

            .banking-section {

                padding: 60px 0;

            }

            .banking-grid {

                grid-template-columns: 1fr;

                gap: 24px;

            }

            .banking-heading {

                margin-bottom: 40px;

            }

            .banking-heading h2 {

                font-size: 30px;

            }

            .banking-heading p {

                font-size: 15px;

            }

            .banking-content {

                padding: 20px;

            }

            .banking-content h3 {

                font-size: 24px;

            }

        }

        .banking-image {

            height: 240px;

        }

        .banking-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/campus-banking/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Banking Services</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Banking Services
            </div>
        </div>

    </section>

    <!--=========================================================
    BANKING FACILITIES
    ==========================================================-->

    <section class="banking-section">

        <div class="container">

            <div class="banking-heading">

                <h2>

                    Banking Facilities

                </h2>

                <p>

                    The Assam Royal Global University provides students and staff with convenient banking and ATM
                    facilities from leading national and private banks across the campus, ensuring secure and
                    hassle-free financial services at all times.

                </p>

            </div>

            <div class="banking-grid">

                <!-- ICICI -->

                <div class="banking-card">

                    <div class="banking-image">

                        <img src="new-web/assets/img/campus-banking/icici.jpg" alt="ICICI Bank ATM">

                    </div>

                    <div class="banking-content">

                        <h3>

                            ICICI Bank ATM

                        </h3>

                        <div class="banking-divider"></div>

                        <p>

                            The ICICI Bank ATM on campus provides convenient access to students and staff for easy
                            banking services. It is located on the ground floor of the GHI Block.

                        </p>

                    </div>

                </div>

                <!-- Axis -->

                <div class="banking-card">

                    <div class="banking-image">

                        <img src="new-web/assets/img/campus-banking/axis.jpg" alt="Axis Bank ATM">

                    </div>

                    <div class="banking-content">

                        <h3>

                            Axis Bank ATM

                        </h3>

                        <div class="banking-divider"></div>

                        <p>

                            Axis Bank–Royal Global University Branch is located on the Ground Floor of B Block. This
                            modern and equipped branch offers banking services for students, staff and the community at
                            large.

                        </p>

                    </div>

                </div>

                <!-- HDFC -->

                <div class="banking-card">

                    <div class="banking-image">

                        <img src="new-web/assets/img/campus-banking/hdfc.png" alt="HDFC Bank ATM">

                    </div>

                    <div class="banking-content">

                        <h3>

                            HDFC Bank ATM

                        </h3>

                        <div class="banking-divider"></div>

                        <p>

                            Students and staff can access HDFC banking facilities in Block D including ATM services,
                            cheque deposits, account services, passbook printing and much more.

                        </p>

                    </div>

                </div>

                <!-- PNB -->

                <div class="banking-card">

                    <div class="banking-image">

                        <img src="new-web/assets/img/campus-banking/pnb.png" alt="PNB Bank ATM">

                    </div>

                    <div class="banking-content">

                        <h3>

                            PNB Bank ATM

                        </h3>

                        <div class="banking-divider"></div>

                        <p>

                            This 24×7 ATM facility enables students and staff to carry out safe and secure banking
                            transactions conveniently at any time of the day.

                        </p>

                    </div>

                </div>

                <!-- SBI -->

                <div class="banking-card">

                    <div class="banking-image">

                        <img src="new-web/assets/img/campus-banking/sbi.png" alt="SBI Bank ATM">

                    </div>

                    <div class="banking-content">

                        <h3>

                            SBI Bank ATM

                        </h3>

                        <div class="banking-divider"></div>

                        <p>

                            Located on the Ground Floor of D Block, the SBI ATM provides cash withdrawal, balance
                            enquiry and other banking facilities with convenient 24×7 access.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
