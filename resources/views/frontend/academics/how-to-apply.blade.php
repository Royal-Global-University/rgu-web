@extends('frontend/new-master')
@section('title', 'How to Apply : The Assam Royal Global University')
@section('meta_description', 'Admission to Royal Global University is highly competitive. You need to meet both
    admissions & subject requirements before we make an unconditional offer of admission.')
@section('meta_keywords', 'How to Apply')
@section('content')
    <style>
        /* ===========================
    RGU Checklist
    Prefix : rgucl-
    =========================== */

        .rgucl-wrapper {
            background: #EBF1FC;
            padding: 60px 20px;
            /* min-height: 80vh; */
            font-family: 'Times New Roman', Times, serif;
        }

        .rgucl-container {
            max-width: 1150px;
            margin: auto;
        }

        .rgucl-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .rgucl-header h1 {
            margin: 0;
            font-size: 4rem;
            font-weight: 700;
            color: #2e4f87;
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.1;
        }

        .rgucl-header p {
            margin-top: 15px;
            color: #61656f;
            font-size: 15px;
        }

        /* Tabs */

        .rgucl-tabs {
            display: flex;
            justify-content: center;
            gap: 14px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .rgucl-tab {
            min-width: 195px;
            height: 46px;
            border-radius: 6px;
            border: 1px solid #d6dbe6;
            background: #edf0f6;
            color: #4f5563;
            font-weight: 600;
            cursor: pointer;
            transition: .3s ease;
        }

        .rgucl-tab:hover {
            transform: translateY(-2px);
        }

        .rgucl-tab.active {
            background: #d85f29;
            border-color: #d85f29;
            color: #fff;
        }

        /* Cards */

        .rgucl-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .rgucl-card {
            background: #f5f6fa;
            border-radius: 4px;
            overflow: hidden;
            min-height: 255px;
            border: 1px solid #e2e5ec;
        }

        .rgucl-card-head {
            background: #2f4f8b;
            color: #fff;
            padding: 16px 22px;
            font-weight: 600;
            font-size: 17px;
        }

        .rgucl-list {
            list-style: none;
            margin: 0;
            padding: 18px 22px;
        }

        .rgucl-list li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 22px;
            color: #575c66;
            line-height: 1.5;
            font-size: 15px;
        }

        .rgucl-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 9px;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #d95f28;
        }

        /* Note */

        .rgucl-note {
            margin-top: 22px;
            background: #f5f6fa;
            border-radius: 4px;
            padding: 20px 22px;
            border: 1px solid #e2e5ec;
        }

        .rgucl-note p {
            margin: 0 0 8px;
            color: #565c67;
            font-size: 15px;
            line-height: 1.7;
        }

        .rgucl-note p:last-child {
            margin-bottom: 0;
        }

        /* Tab Content */

        .rgucl-content {
            display: none;
        }

        .rgucl-content.active {
            display: block;
            animation: rguclFade .35s ease;
        }

        @keyframes rguclFade {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */

        @media(max-width:991px) {

            .rgucl-grid {
                grid-template-columns: 1fr;
            }

            .rgucl-header h1 {
                font-size: 3rem;
            }
        }

        @media(max-width:576px) {

            .rgucl-header h1 {
                font-size: 2.3rem;
            }

            .rgucl-tab {
                width: 100%;
                min-width: 100%;
            }
        }
    </style>

    <style>
        /* ===================================
    CHECKLIST STEPS TIMELINE
    Prefix : rgucl-
    =================================== */

        .rgucl-steps-section {
            background: #eef1f8;
            padding: 40px 0 90px;
        }

        .rgucl-steps-heading {
            text-align: center;
            margin-bottom: 60px;
        }

        .rgucl-steps-heading h2 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.15;
            color: #294a83;
            margin: 0;
        }

        .rgucl-timeline {
            position: relative;
        }

        .rgucl-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 1px;
            background: #b8c2d6;
            transform: translateX(-50%);
        }

        .rgucl-step {
            display: grid;
            grid-template-columns: 1fr 180px 1fr;
            gap: 40px;
            position: relative;
            margin-bottom: 90px;
        }

        .rgucl-step-left {
            text-align: right;
            padding-top: 8px;
        }

        .rgucl-step-left h3 {
            color: #294a83;
            font-family: 'Times New Roman', Times, serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.25;
        }

        .rgucl-step-center {
            display: flex;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        .rgucl-step-number {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #294a83;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            box-shadow: 0 10px 25px rgba(41, 74, 131, .18);
        }

        .rgucl-step:first-child .rgucl-step-number {
            background: #d7642d;
        }

        .rgucl-step-right {
            max-width: 430px;
        }

        .rgucl-step-right p {
            color: #555;
            font-size: 2rem;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .rgucl-step-right ul {
            padding-left: 18px;
            margin-bottom: 20px;
        }

        .rgucl-step-right li {
            color: #666;
            font-size: 2rem;
            line-height: 1.8;
            margin-bottom: 4px;
        }

        .rgucl-step-btns {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .rgucl-btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #d7642d;
            color: #fff;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .rgucl-btn-primary:hover {
            background: #bf5320;
            transform: translateY(-3px);
        }

        .rgucl-btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 18px;
            border: 1px solid #bcc6d8;
            background: #fff;
            color: #294a83;
            text-decoration: none;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            transition: .3s;
        }

        .rgucl-btn-outline:hover {
            transform: translateY(-3px);
        }

        @media(max-width:991px) {

            .rgucl-timeline::before {
                left: 28px;
            }

            .rgucl-step {
                grid-template-columns: 70px 1fr;
                gap: 20px;
            }

            .rgucl-step-left {
                grid-column: 2;
                text-align: left;
                order: 2;
            }

            .rgucl-step-center {
                grid-column: 1;
                grid-row: 1 / span 2;
            }

            .rgucl-step-right {
                grid-column: 2;
                max-width: 100%;
            }

            .rgucl-step-left h3 {
                margin-bottom: 15px;
            }

            .rgucl-steps-heading h2 {
                font-size: 2.2rem;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/Admission-Admission-Overview-How-to-Apply/coverimg.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> How to Apply</h1>
            <div class="pg-hero-breadcrumb">
                Admission / Admission Overview / How to Apply
            </div>
        </div>

    </section>

    <section class="rgucl-wrapper">
        <div class="rgucl-container">

            <div class="rgucl-header">
                <h1>Checklist Documents</h1>
                <p>Self-attested scanned copies of the following documents need to be uploaded:</p>
            </div>

            <!-- Tabs -->
            <div class="rgucl-tabs">
                <button class="rgucl-tab active" data-tab="ug">Under Graduate (UG)</button>
                <button class="rgucl-tab" data-tab="pg">Post Graduate (PG)</button>
                <button class="rgucl-tab" data-tab="phd">Ph.D. (Doctoral)</button>
            </div>

            <!-- UG -->
            <div class="rgucl-content active" id="ug">

                <div class="rgucl-grid">

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Identity & Photographs
                        </div>

                        <ul class="rgucl-list">
                            <li>Passport Size Photo</li>
                            <li>Age Proof (Birth Certificate/Class X Admit)</li>
                            <li>Student Signature</li>
                            <li>Parents Signature</li>
                        </ul>
                    </div>

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Academic Documents
                        </div>

                        <ul class="rgucl-list">
                            <li>Class X Mark Sheet</li>
                            <li>Class X Pass Certificate</li>
                            <li>Class XII Mark Sheet</li>
                            <li>Class XII Pass Certificate</li>
                            <li>Score Card of Competitive Exams (as applicable)</li>
                        </ul>
                    </div>

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Additional Documents
                        </div>

                        <ul class="rgucl-list">
                            <li>Caste Certificate (For SC/ST/OBC Non-Creamy Layer)</li>
                            <li>Character Certificate of Last Institution</li>
                        </ul>
                    </div>

                </div>

                <!-- <div class="rgucl-note">
                        <p><strong>Note :</strong> <strong>Total:</strong> 11 Documents For UG. Ensure All Scanned Copies
                            Are Clear And Self-Attested.</p>
                        <p><strong>Accepted Formats:</strong> PDF, JPG, PNG, File Size Max 2MB Per Document. Ensure All Text
                            Is Clearly Readable</p>
                        <p>Missing Documents May Result In Delays Or Rejection Of Your Application</p>
                    </div> -->

            </div>

            <!-- PG -->
            <div class="rgucl-content" id="pg">

                <div class="rgucl-grid">

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Identity & Photographs
                        </div>

                        <ul class="rgucl-list">
                            <li>Passport Size Photo</li>
                            <li>Age Proof (Birth Certificate/Class X Admit)</li>
                            <li>Student Signature</li>
                            <li>Parents Signature</li>
                        </ul>
                    </div>

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Academic Documents
                        </div>

                        <ul class="rgucl-list">
                            <li>Class X Mark Sheet</li>
                            <li>Class X Pass Certificate</li>
                            <li>Class XII Mark Sheet</li>
                            <li>Class XII Pass Certificate</li>
                            <li>Graduation All Marksheets</li>
                            <li>Score Card of Competitive Exams (as applicable)</li>
                        </ul>
                    </div>

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Additional Documents
                        </div>

                        <ul class="rgucl-list">
                            <li>Caste Certificate (For SC/ST/OBC Non-Creamy Layer)</li>
                            <li>Character Certificate of Last Institution</li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- PHD -->
            <div class="rgucl-content" id="phd">

                <div class="rgucl-grid">

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Identity & Photographs
                        </div>

                        <ul class="rgucl-list">
                            <li>Passport Size Photo</li>
                            <li>Age Proof (Birth Certificate/Class X Admit)</li>
                            <li>Student Signature</li>
                            <li>Parents Signature</li>
                        </ul>
                    </div>

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Academic Documents
                        </div>

                        <ul class="rgucl-list">
                            <li>Class X Mark Sheet</li>
                            <li>Class X Pass Certificate</li>
                            <li>Class XII Mark Sheet</li>
                            <li>Class XII Pass Certificate</li>
                            <li>Graduation All Marksheets</li>
                            <li>Post-Graduation All Marksheets</li>
                            <li>Score Card of Competitive Exams (as applicable)</li>
                        </ul>
                    </div>

                    <div class="rgucl-card">
                        <div class="rgucl-card-head">
                            Additional Documents
                        </div>

                        <ul class="rgucl-list">
                            <li>Caste Certificate (For SC/ST/OBC Non-Creamy Layer)</li>
                            <li>Character Certificate of Last Institution</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="rgucl-steps-section">

        <div class="rgucl-steps-heading">
            <h2>
                Once You Are Ready To Apply,<br>
                Follow The Steps Below
            </h2>
        </div>

        <div class="rgucl-timeline">

            <!-- Step 01 -->
            <div class="rgucl-step">
                <div class="rgucl-step-left">
                    <h3>Check Eligibility</h3>
                </div>

                <div class="rgucl-step-center">
                    <span class="rgucl-step-number">01</span>
                </div>

                <div class="rgucl-step-right">
                    <p>
                        It's important to check your eligibility criteria for the course you wish to apply. Eligibility
                        criteria varies from course to course. You can visit the Eligibility and Selection Criteria page
                        available under Admissions tab in our website.
                    </p>

                    <!-- <ul>
                            <li>UG: 10+2 from any recognised board</li>
                            <li>PG: Relevant UG degree with required marks</li>
                            <li>Ph.D.: Master's degree with required eligibility</li>
                        </ul>

                        <div class="rgucl-step-btns">
                            <a href="#" class="rgucl-btn-primary">View Eligibility Criteria</a>
                            <a href="#" class="rgucl-btn-outline">Fee Structure</a>
                        </div> -->
                </div>
            </div>

            <!-- Step 02 -->
            <div class="rgucl-step">
                <div class="rgucl-step-left">
                    <h3>Complete The Online Application Form</h3>
                </div>

                <div class="rgucl-step-center">
                    <span class="rgucl-step-number">02</span>
                </div>

                <div class="rgucl-step-right">
                    <p>
                        Apply for a course by Registering in our Admission Application Page by Clicking on the Apply Now
                        button available in the website.
                    </p>

                    <!-- <ul>
                            <li>OTP verification required</li>
                            <li>Mobile number verification</li>
                            <li>Track application status online</li>
                        </ul>

                        <a href="#" class="rgucl-btn-primary">
                            Discover Admission Portal
                        </a> -->
                </div>
            </div>

            <!-- Step 03 -->
            <div class="rgucl-step">
                <div class="rgucl-step-left">
                    <h3>Fill The Application Form</h3>
                </div>

                <div class="rgucl-step-center">
                    <span class="rgucl-step-number">03</span>
                </div>

                <div class="rgucl-step-right">
                    <p>
                        Fill the required details and make the application fee payment of Rs. 1000 (plus taxes).
                    </p>

                    <!-- <ul>
                            <li>Personal information</li>
                            <li>Academic history</li>
                            <li>Programme selection</li>
                            <li>Declaration by student</li>
                        </ul> -->

                    <!-- <a href="#" class="rgucl-btn-primary">
                            Full Document Checklist
                        </a> -->
                </div>
            </div>

            <!-- Step 04 -->
            <div class="rgucl-step">
                <div class="rgucl-step-left">
                    <h3>Upload Documents</h3>
                </div>

                <div class="rgucl-step-center">
                    <span class="rgucl-step-number">04</span>
                </div>

                <div class="rgucl-step-right">
                    <p>
                        Remember to upload all documents. We won't be able to process your application fully until we
                        have received everything we need. However, you can still apply whilst you gather outstanding
                        documentation.
                    </p>

                    <!-- <ul>
                            <li>Photograph & signature</li>
                            <li>Academic certificates</li>
                            <li>Identity proof</li>
                            <li>Supporting documents</li>
                        </ul>

                        <a href="#" class="rgucl-btn-primary">
                            Full Document Checklist
                        </a> -->
                </div>
            </div>

            <!-- Step 05 -->
            <div class="rgucl-step">
                <div class="rgucl-step-left">
                    <h3>Await Our Response</h3>
                </div>

                <div class="rgucl-step-center">
                    <span class="rgucl-step-number">05</span>
                </div>

                <div class="rgucl-step-right">
                    <p>
                        We will acknowledge your application within 24 hours and you will proceed to the next step
                        (Personal Interview/Written Test).
                    </p>

                    <!-- <ul>
                            <li>Credit / Debit Card</li>
                            <li>UPI Payment</li>
                            <li>Net Banking</li>
                        </ul>

                        <a href="#" class="rgucl-btn-primary">
                            Fee Structure
                        </a> -->
                </div>
            </div>

            <!-- Step 06 -->
            <div class="rgucl-step">
                <div class="rgucl-step-left">
                    <h3>
                        Issuance Of Offer Letter
                    </h3>
                </div>

                <div class="rgucl-step-center">
                    <span class="rgucl-step-number">06</span>
                </div>

                <div class="rgucl-step-right">
                    <p>
                        Once you clear the Personal Interview, we will issue you the Admission Offer Letter which can be
                        viewed by logging into your dashboard.
                    </p>

                    <!-- <ul>
                            <li>Verification by admission office</li>
                            <li>Offer letter generation</li>
                            <li>Reporting instructions</li>
                        </ul>

                        <a href="#" class="rgucl-btn-primary">
                            Apply Now
                        </a> -->
                </div>
            </div>

        </div>

    </section>

    <script>
        /* ===========================
    RGU Checklist Tabs
    =========================== */

        const rguclTabs = document.querySelectorAll('.rgucl-tab');
        const rguclContents = document.querySelectorAll('.rgucl-content');

        rguclTabs.forEach(tab => {

            tab.addEventListener('click', () => {

                rguclTabs.forEach(btn => btn.classList.remove('active'));
                rguclContents.forEach(content => content.classList.remove('active'));

                tab.classList.add('active');

                document
                    .getElementById(tab.dataset.tab)
                    .classList.add('active');
            });

        });
    </script>

@endsection
