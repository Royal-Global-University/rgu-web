@extends('frontend/new-master')
@section('content')
    <style>
        /*=========================================================
    CHECKLIST DOCUMENTS
    =========================================================*/

        .how-apply-checklist-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .how-apply-section-heading {

            text-align: center;

            margin-bottom: 60px;

        }

        .how-apply-section-heading h2 {

            font-family: "Playfair Display", serif;

            font-size: 40px;

            font-weight: 700;

            color: #23457d;

            margin-bottom: 18px;

        }

        .how-apply-section-heading p {

            font-size: 20px;

            color: #23457d;

            font-style: italic;

            margin: 0;

        }

        /*=========================================================
    CARD
    =========================================================*/

        .how-apply-checklist-card {

            background: #fff;

            border: 1px solid #d9e5f5;

            border-radius: 18px;

            padding: 35px;

            height: 100%;

            transition: .35s;

            box-shadow: 0 15px 35px rgba(34, 69, 125, .06);

        }

        .how-apply-checklist-card:hover {

            transform: translateY(-8px);

            box-shadow: 0 22px 45px rgba(34, 69, 125, .14);

        }

        .how-apply-checklist-card h3 {

            font-family: "Playfair Display", serif;

            font-size: 26px;

            color: #23457d;

            margin-bottom: 25px;

            padding-bottom: 20px;

            border-bottom: 1px solid #dbe5f4;

        }

        /*=========================================================
    LIST
    =========================================================*/

        .how-apply-checklist-card ul {

            list-style: none;

            margin: 0;

            padding: 0;

        }

        .how-apply-checklist-card ul li {

            position: relative;

            padding-left: 34px;

            margin-bottom: 18px;

            color: #35507d;

            line-height: 1.8;

            font-size: 16px;

        }

        .how-apply-checklist-card ul li:last-child {

            margin-bottom: 0;

        }

        /*=========================================================
    CHECK ICON
    =========================================================*/

        .how-apply-checklist-card ul li::before {

            content: "\f26e";

            font-family: bootstrap-icons;

            position: absolute;

            left: 0;

            top: 3px;

            width: 20px;

            height: 20px;

            border-radius: 50%;

            background: #e56a37;

            color: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 11px;

        }

        /*=========================================================
    HOVER
    =========================================================*/

        .how-apply-checklist-card:hover h3 {

            color: #e56a37;

        }

        .how-apply-checklist-card:hover ul li::before {

            transform: scale(1.12);

            transition: .3s;

        }

        /*=========================================================
    TABLET
    =========================================================*/

        @media (max-width:991px) {

            .how-apply-checklist-section {

                padding: 70px 0;

            }

            .how-apply-section-heading {

                margin-bottom: 45px;

            }

            .how-apply-section-heading h2 {

                font-size: 44px;

            }

            .how-apply-checklist-card {

                padding: 28px;

            }

            .how-apply-checklist-card h3 {

                font-size: 30px;

            }

        }

        /*=========================================================
    MOBILE
    =========================================================*/

        @media (max-width:767px) {

            .how-apply-checklist-section {

                padding: 55px 0;

            }

            .how-apply-section-heading {

                margin-bottom: 35px;

            }

            .how-apply-section-heading h2 {

                font-size: 34px;

            }

            .how-apply-section-heading p {

                font-size: 16px;

                line-height: 1.8;

            }

            .how-apply-checklist-card {

                padding: 24px;

            }

            .how-apply-checklist-card h3 {

                font-size: 26px;

            }

            .how-apply-checklist-card ul li {

                font-size: 15px;

                padding-left: 30px;

                margin-bottom: 15px;

            }

        }
    </style>

    <style>
        /*=========================================================
    APPLICATION PROCESS
    =========================================================*/

        .how-apply-process-section {

            padding: 90px 0;

            background: #ffffff;

            position: relative;

        }

        /*=========================================================
    GRID
    =========================================================*/

        .how-apply-process-grid {

            display: grid;

            grid-template-columns: repeat(5, 1fr);

            gap: 35px 30px;

            position: relative;

        }

        /*=========================================================
    STEP CARD
    =========================================================*/

        .how-apply-step-card {

            background: #fff;

            border: 1px solid #dce5f2;

            border-radius: 18px;

            padding: 35px 25px;

            text-align: center;

            position: relative;

            transition: .35s;

            box-shadow: 0 15px 35px rgba(0, 0, 0, .05);

        }

        .how-apply-step-card:hover {

            transform: translateY(-8px);

            box-shadow: 0 20px 40px rgba(35, 69, 125, .12);

        }

        /*=========================================================
    CONNECTOR LINE
    =========================================================*/

        .how-apply-step-card::after {

            content: "";

            position: absolute;

            top: 52px;

            right: -30px;

            width: 30px;

            height: 2px;

            background: #d5dfec;

        }

        .how-apply-step-card:nth-child(5)::after,

        .how-apply-step-card:last-child::after {

            display: none;

        }

        /*=========================================================
    SECOND ROW
    =========================================================*/

        .how-apply-step-card:nth-child(n+6) {

            margin-top: 25px;

        }

        .how-apply-step-card:nth-child(6)::before {

            content: "";

            position: absolute;

            top: -25px;

            left: 50%;

            width: 2px;

            height: 25px;

            background: #d5dfec;

        }

        /*=========================================================
    NUMBER
    =========================================================*/

        .how-apply-step-number {

            width: 58px;

            height: 58px;

            margin: 0 auto 18px;

            border-radius: 50%;

            background: #23457d;

            color: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            font-weight: 700;

        }

        /*=========================================================
    ICON
    =========================================================*/

        .how-apply-step-icon {

            width: 70px;

            height: 70px;

            margin: 0 auto 20px;

            border-radius: 50%;

            background: #eef3fb;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 30px;

            color: #e56a37;

            transition: .35s;

        }

        .how-apply-step-card:hover .how-apply-step-icon {

            background: #23457d;

            color: #fff;

        }

        /*=========================================================
    TEXT
    =========================================================*/

        .how-apply-step-card p {

            margin: 0;

            color: #555;

            line-height: 1.8;

            font-size: 15px;

        }

        /*=========================================================
    ACTIVE CARD
    =========================================================*/

        .how-apply-step-card.active {

            border-color: #23457d;

        }

        .how-apply-step-card.active .how-apply-step-number {

            background: #e56a37;

        }

        /*=========================================================
    FINISH CARD
    =========================================================*/

        .how-apply-step-card.finish {

            border-color: #43a047;

        }

        .how-apply-step-card.finish .how-apply-step-number {

            background: #43a047;

        }

        .how-apply-step-card.finish .how-apply-step-icon {

            background: #e8f6eb;

            color: #43a047;

        }

        /*=========================================================
    TABLET
    =========================================================*/

        @media(max-width:991px) {

            .how-apply-process-section {

                padding: 70px 0;

            }

            .how-apply-process-grid {

                grid-template-columns: repeat(2, 1fr);

                gap: 25px;

            }

            .how-apply-step-card {

                margin-top: 0 !important;

            }

            .how-apply-step-card::before,

            .how-apply-step-card::after {

                display: none;

            }

        }

        /*=========================================================
    MOBILE
    =========================================================*/

        @media(max-width:767px) {

            .how-apply-process-section {

                padding: 55px 0;

            }

            .how-apply-process-grid {

                grid-template-columns: 1fr;

            }

            .how-apply-step-card {

                padding: 30px 22px;

            }

            .how-apply-step-number {

                width: 50px;

                height: 50px;

                font-size: 18px;

            }

            .how-apply-step-icon {

                width: 60px;

                height: 60px;

                font-size: 24px;

            }

            .how-apply-step-card p {

                font-size: 14px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/checklists/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> International - How to Apply</h1>
            <div class="pg-hero-breadcrumb">
                International / International - How to Apply
            </div>
        </div>

    </section>

    <section class="how-apply-checklist-section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="how-apply-section-heading">

                        <h2>

                            Checklist Documents

                        </h2>

                        <p>

                            Self-Attested Scanned Copies Of The Following Documents Need To Be Uploaded:

                        </p>

                    </div>

                </div>

            </div>





            <div class="row">

                <!--==============================
                UNDER GRADUATE
                ==============================-->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="how-apply-checklist-card">

                        <h3>

                            Under-Graduate Application

                        </h3>

                        <ul>

                            <li>Passport Size Photo</li>

                            <li>Class X Mark Sheet</li>

                            <li>Class X Pass Certificate</li>

                            <li>Class XII Mark Sheet</li>

                            <li>Class XII Pass Certificate</li>

                            <li>Age Proof (Birth Certificate/Class X Admit)</li>

                            <li>Recommendation Form 1 & 2 (Downloaded, Filled & Uploaded)</li>

                            <li>Parents Undertaking (Downloaded, Filled & Uploaded)</li>

                            <li>Medical Report (Downloaded, Filled & Uploaded)</li>

                            <li>Character Certificate Of Last Institution</li>

                        </ul>

                    </div>

                </div>





                <!--==============================
                POST GRADUATE
                ==============================-->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="how-apply-checklist-card">

                        <h3>

                            Post-Graduate Application

                        </h3>

                        <ul>

                            <li>Passport Size Photo</li>

                            <li>Class X Mark Sheet</li>

                            <li>Class X Pass Certificate</li>

                            <li>Class XII Mark Sheet</li>

                            <li>Class XII Pass Certificate</li>

                            <li>Graduation All Mark Sheets</li>

                            <li>Age Proof (Birth Certificate/Class X Admit)</li>

                            <li>Recommendation Form 1 & 2 (Downloaded, Filled & Uploaded)</li>

                            <li>Parents Undertaking (Downloaded, Filled & Uploaded)</li>

                            <li>Medical Report (Downloaded, Filled & Uploaded)</li>

                            <li>Character Certificate Of Last Institution</li>

                        </ul>

                    </div>

                </div>





                <!--==============================
                PHD
                ==============================-->

                <div class="col-lg-4 col-md-6 mx-md-auto mb-4">

                    <div class="how-apply-checklist-card">

                        <h3>

                            Ph.D. Application

                        </h3>

                        <ul>

                            <li>Passport Size Photo</li>

                            <li>Class X Mark Sheet</li>

                            <li>Class X Pass Certificate</li>

                            <li>Class XII Mark Sheet</li>

                            <li>Class XII Pass Certificate</li>

                            <li>Graduation All Mark Sheets</li>

                            <li>Post-Graduation All Mark Sheets</li>

                            <li>Age Proof (Birth Certificate/Class X Admit)</li>

                            <li>Recommendation Form 1 & 2 (Downloaded, Filled & Uploaded)</li>

                            <li>Parents Undertaking (Downloaded, Filled & Uploaded)</li>

                            <li>Medical Report (Downloaded, Filled & Uploaded)</li>

                            <li>Character Certificate Of Last Institution</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="how-apply-process-section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="how-apply-section-heading">

                        <h2>

                            Students Can Complete The Application Process In These Simple Steps

                        </h2>

                    </div>

                </div>

            </div>





            <div class="how-apply-process-grid">

                <!-- STEP 1 -->

                <div class="how-apply-step-card active">

                    <div class="how-apply-step-number">

                        01

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-globe2"></i>

                    </div>

                    <p>

                        Visit the official website of Royal Global University and click on <strong>"Apply Now"</strong>.

                    </p>

                </div>





                <!-- STEP 2 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        02

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-person-plus"></i>

                    </div>

                    <p>

                        Register using your Name, Email, Mobile Number and preferred programme.

                    </p>

                </div>





                <!-- STEP 3 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        03

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-box-arrow-in-right"></i>

                    </div>

                    <p>

                        Login using your registered User ID and Password.

                    </p>

                </div>





                <!-- STEP 4 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        04

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-ui-checks-grid"></i>

                    </div>

                    <p>

                        Fill the application form. Mandatory fields marked (*) must be completed.

                    </p>

                </div>





                <!-- STEP 5 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        05

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-credit-card"></i>

                    </div>

                    <p>

                        Pay the application fee (₹1000 + applicable taxes).

                    </p>

                </div>





                <!-- STEP 6 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        06

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-upload"></i>

                    </div>

                    <p>

                        Upload all required documents. If documents are not in English, upload certified English
                        translations.

                    </p>

                </div>





                <!-- STEP 7 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        07

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-send-check"></i>

                    </div>

                    <p>

                        Submit your completed application.

                    </p>

                </div>





                <!-- STEP 8 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        08

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-camera-video"></i>

                    </div>

                    <p>

                        Attend the online interview conducted by the respective department.

                    </p>

                </div>





                <!-- STEP 9 -->

                <div class="how-apply-step-card">

                    <div class="how-apply-step-number">

                        09

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-envelope-paper"></i>

                    </div>

                    <p>

                        Download your Provisional Offer Letter from the student dashboard.

                    </p>

                </div>





                <!-- STEP 10 -->

                <div class="how-apply-step-card finish">

                    <div class="how-apply-step-number">

                        ✓

                    </div>

                    <div class="how-apply-step-icon">

                        <i class="bi bi-flag"></i>

                    </div>

                    <p>

                        Complete the admission fee payment and apply for your Student Visa.

                    </p>

                </div>

            </div>

        </div>

    </section>
@endsection
