@extends('frontend/new-master')
@section('content')
    <style>
        /*==========================================================
                RGU REPORT PAGE
    ==========================================================*/

        .rgurpt-section {
            padding: 90px 0 100px;
            background: #eef3fb;
            position: relative;
            overflow: hidden;
        }

        .rgurpt-section::before {
            content: "";
            position: absolute;
            width: 520px;
            height: 520px;
            border-radius: 50%;
            background: radial-gradient(rgba(32, 63, 116, .06), transparent 70%);
            top: -220px;
            right: -180px;
            pointer-events: none;
        }

        /*====================================
    Heading
    ====================================*/

        .rgurpt-heading {
            text-align: center;
            margin-bottom: 70px;
        }

        .rgurpt-heading span {
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            color: #a88334;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .rgurpt-heading h2 {
            margin: 0;
            font-family: "Playfair Display", serif;
            font-size: 56px;
            font-weight: 700;
            color: #23457b;
        }

        /*====================================
    Blocks
    ====================================*/

        .rgurpt-block {
            margin-bottom: 70px;
        }

        .rgurpt-block-last {
            margin-bottom: 0;
        }

        .rgurpt-title {
            font-family: "Playfair Display", serif;
            font-size: 40px;
            color: #23457b;
            margin-bottom: 30px;
            font-weight: 700;
        }

        /*====================================
    Cards
    ====================================*/

        .rgurpt-card {

            display: flex;

            align-items: center;

            gap: 18px;

            background: #fff;

            border-radius: 16px;

            border: 1px solid #dfe6f1;

            text-decoration: none;

            padding: 20px;

            min-height: 118px;

            transition: .35s ease;

            position: relative;

            overflow: hidden;

            box-shadow: 0 8px 24px rgba(0, 0, 0, .04);

        }

        .rgurpt-card::before {

            content: "";

            position: absolute;

            left: 0;

            top: 0;

            width: 4px;

            height: 100%;

            background: #d4af37;

            transform: scaleY(0);

            transform-origin: top;

            transition: .35s;

        }

        .rgurpt-card:hover {

            transform: translateY(-7px);

            border-color: #23457b;

            box-shadow: 0 20px 40px rgba(18, 40, 84, .10);

        }

        .rgurpt-card:hover::before {

            transform: scaleY(1);

        }

        /*====================================
    Icon
    ====================================*/

        .rgurpt-icon {

            width: 58px;

            height: 58px;

            min-width: 58px;

            border-radius: 14px;

            background: #fff6ef;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #e85d2a;

            font-size: 24px;

            transition: .35s;

        }

        .rgurpt-card:hover .rgurpt-icon {

            background: #23457b;

            color: #fff;

            transform: rotate(-8deg);

        }

        /*====================================
    Content
    ====================================*/

        .rgurpt-content {
            flex: 1;
        }

        .rgurpt-content h4 {

            margin: 0 0 5px;

            color: #1e3e70;

            font-size: 17px;

            font-weight: 700;

            line-height: 1.45;

        }

        .rgurpt-content span {

            font-size: 13px;

            color: #7b8798;

            transition: .3s;

        }

        .rgurpt-card:hover .rgurpt-content span {

            color: #d4af37;

        }

        /*====================================
    Arrow
    ====================================*/

        .rgurpt-arrow {

            width: 42px;

            height: 42px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #f4f7fb;

            color: #23457b;

            transition: .35s;

        }

        .rgurpt-card:hover .rgurpt-arrow {

            background: #23457b;

            color: #fff;

            transform: translate(4px, -4px);

        }

        /*====================================
    Tablet
    ====================================*/

        @media(max-width:991px) {

            .rgurpt-section {

                padding: 70px 0;

            }

            .rgurpt-heading {

                margin-bottom: 55px;

            }

            .rgurpt-heading h2 {

                font-size: 44px;

            }

            .rgurpt-title {

                font-size: 34px;

            }

        }

        /*====================================
    Mobile
    ====================================*/

        @media(max-width:767px) {

            .rgurpt-section {

                padding: 55px 0;

            }

            .rgurpt-heading {

                margin-bottom: 40px;

            }

            .rgurpt-heading span {

                font-size: 11px;

                letter-spacing: 2px;

            }

            .rgurpt-heading h2 {

                font-size: 34px;

            }

            .rgurpt-title {

                font-size: 28px;

                margin-bottom: 20px;

            }

            .rgurpt-card {

                min-height: auto;

                padding: 18px;

                gap: 15px;

            }

            .rgurpt-icon {

                width: 48px;
                height: 48px;
                min-width: 48px;

                font-size: 20px;

            }

            .rgurpt-content h4 {

                font-size: 15px;

            }

            .rgurpt-content span {

                font-size: 12px;

            }

            .rgurpt-arrow {

                display: none;

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
            <h1 class="pg-hero-title"> Annual Report</h1>
            <div class="pg-hero-breadcrumb">
                Annual Report
            </div>
        </div>

    </section>


    <section class="rgurpt-section">

        <div class="container">

            <div class="rgurpt-heading">
                <span>Transparency & Compliance</span>
                <h2>Annual & Audit Reports</h2>
            </div>

            <!-- ==========================
                    Annual Report
            ===========================-->

            <div class="rgurpt-block">

                <h3 class="rgurpt-title">
                    Annual Report
                </h3>

                <div class="row g-4">

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://rgu.ac/mobile-assets/pdf/annual-report-2024-2025.pdf" class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2024 - 2025</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202022-23-min.pdf"
                            class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2022 - 2023</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202021-22-min.pdf"
                            class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2021 - 2022</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202020-21-min.pdf"
                            class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2020 - 2021</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202019-20-min.pdf"
                            class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2019 - 2020</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202018-19-min.pdf"
                            class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2018 - 2019</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/iqac/annual-reports/Annual%20Report%202017-18-min.pdf"
                            class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Annual Report 2017 - 2018</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>
                    </div>

                </div>

            </div>



            <!-- ==========================
                    Audit Report
            ===========================-->

            <div class="rgurpt-block rgurpt-block-last">

                <h3 class="rgurpt-title">
                    Audit Report
                </h3>

                <div class="row g-4">

                    <div class="col-lg-3 col-md-4 col-sm-6">

                        <a href="https://rgu.ac/mobile-assets/Policy/Audit%20Report.pdf" class="rgurpt-card">

                            <div class="rgurpt-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>

                            <div class="rgurpt-content">
                                <h4>Audit Report 2022 - 2025</h4>
                                <span>Download PDF</span>
                            </div>

                            <div class="rgurpt-arrow">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
