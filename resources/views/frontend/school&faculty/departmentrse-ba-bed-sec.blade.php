@extends('frontend/new-master')
@section('content')
    <style>
        .header-actions-mobile .mobile-apply-btn {
            display: none !important;
        }
    </style>
    <section class="pg-hero" style="height: 25vh;">
        <div class="pg-hero-bg" style="background-color: #13223B;">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <!-- <div class="pg-hero-inner">
                <h1 class="pg-hero-title"> Dean's Lister</h1>
                <div class="pg-hero-breadcrumb">
                    Admissions / Scholarship and Funding / Dean's Lister
                </div>
            </div> -->

    </section>

    <!-- main content  -->

    <!-- RGU B.Com B.Ed Programme Information Section -->
    <section class="rgu-bbed-programme-section">
        <div class="rgu-bbed-container">

            <!-- Programme Header -->
            <div class="rgu-bbed-header">
                <span class="rgu-bbed-eyebrow">PROGRAMME INFORMATION</span>

                <h2 class="rgu-bbed-title">
                    B.A B.Ed - (Secondary)
                    <span>Duration - 4 years</span>
                </h2>

                <p class="rgu-bbed-school">
                    Royal School of Education (RSE)
                </p>
            </div>

            <!-- Two-Column Information Card -->
            <div class="rgu-bbed-information-card">

                <!-- Left Column: Fee Structure -->
                <div class="rgu-bbed-fee-column">
                    <div class="rgu-bbed-column-heading">

                        <div>
                            <h3>Fee Structure</h3>
                            <p>Programme fee details</p>
                        </div>
                    </div>

                    <!-- One Time Fee -->
                    <div class="rgu-bbed-fee-group">
                        <h4>One Time Fee</h4>

                        <div class="rgu-bbed-fee-item">
                            <span class="rgu-bbed-fee-number">01</span>
                            <span class="rgu-bbed-fee-label">
                                Admission Fee
                            </span>
                            <strong>Rs 60,000/-</strong>
                        </div>

                        <div class="rgu-bbed-fee-item">
                            <span class="rgu-bbed-fee-number">02</span>
                            <span class="rgu-bbed-fee-label">
                                Registration Fee
                            </span>
                            <strong>Rs 10,000/-</strong>
                        </div>

                        <div class="rgu-bbed-fee-item">
                            <span class="rgu-bbed-fee-number">03</span>
                            <span class="rgu-bbed-fee-label">
                                Caution Money
                                <small>Refundable</small>
                            </span>
                            <strong>Rs 10,000/-</strong>
                        </div>
                    </div>

                    <!-- Semester Fee -->
                    <div class="rgu-bbed-fee-group rgu-bbed-semester-group">
                        <h4>Semester Fee</h4>

                        <div class="rgu-bbed-fee-item">
                            <span class="rgu-bbed-fee-number">01</span>
                            <span class="rgu-bbed-fee-label">
                                Semester Payment
                            </span>
                            <strong>Rs 51,500/-</strong>
                        </div>

                        <div class="rgu-bbed-fee-item">
                            <span class="rgu-bbed-fee-number">02</span>
                            <span class="rgu-bbed-fee-label">
                                Yearly Payment
                            </span>
                            <strong>Rs 1,00,000/-</strong>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Eligibility -->
                <div class="rgu-bbed-eligibility-column">
                    <div class="rgu-bbed-column-heading">

                        <div>
                            <h3>Eligibility Criteria</h3>
                            <p>Admission requirements</p>
                        </div>
                    </div>

                    <div class="rgu-bbed-eligibility-content">

                        <!-- Replace this placeholder with the
                             official eligibility criteria. -->

                        <div class="rgu-bbed-eligibility-placeholder">


                            <h4>Eligibility Information</h4>

                            <p>
                                10+2 or equivalent from a recognised Board/Council with a minimum of 50% marks or
                                equivalent grade (relaxation as per applicable Central Government, State Government
                                or Union Territory rules).
                            </p>

                            <h4 class="pt-5">Selection criteria</h4>

                            <p>
                                Admission shall be through the National Common Entrance Test (NCET) conducted by the
                                National Testing Agency (NTA).
                            </p>
                        </div>

                        <!-- Example structure for actual eligibility:
                        <ul class="rgu-bbed-eligibility-list">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                Eligibility criterion one.
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                Eligibility criterion two.
                            </li>
                        </ul>
                        -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* =========================================
       RGU B.COM B.ED PROGRAMME INFORMATION
       Unique Prefix: rgu-bbed-
    ========================================= */

        .rgu-bbed-programme-section {
            --rgu-bbed-primary: #20315F;
            --rgu-bbed-orange: #FF9A1E;
            --rgu-bbed-background: #EDF3FF;
            --rgu-bbed-border: #E5E8EF;
            --rgu-bbed-text: #333333;

            width: 100%;
            padding: 28px 24px 30px;
            background: var(--rgu-bbed-background);
            color: var(--rgu-bbed-text);
            font-family: "Times New Roman", serif;
            box-sizing: border-box;
        }

        .rgu-bbed-programme-section *,
        .rgu-bbed-programme-section *::before,
        .rgu-bbed-programme-section *::after {
            box-sizing: border-box;
        }

        .rgu-bbed-container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
        }

        /* Programme Header */

        .rgu-bbed-header {
            text-align: center;
            margin-bottom: 46px;
        }

        .rgu-bbed-eyebrow {
            display: block;
            margin-bottom: 12px;
            color: var(--rgu-bbed-orange);
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .rgu-bbed-title {
            margin: 0;
            color: var(--rgu-bbed-primary);
            font-family: "Times New Roman", serif;
            font-size: clamp(26px, 2.2vw, 34px);
            font-weight: 700;
            line-height: 1.35;
        }

        .rgu-bbed-title span {
            display: block;
            margin-top: 3px;
        }

        .rgu-bbed-school {
            margin: 12px 0 0;
            color: #454545;
            font-size: 17px;
            line-height: 1.5;
        }

        /* Main Information Card */

        .rgu-bbed-information-card {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            background: #FFFFFF;
            border: 1px solid rgba(32, 49, 95, 0.08);
            border-radius: 19px;
            box-shadow: 0 12px 38px rgba(32, 49, 95, 0.09);
            overflow: hidden;
        }

        /* Shared Column Styles */

        .rgu-bbed-fee-column,
        .rgu-bbed-eligibility-column {
            min-width: 0;
            padding: 34px 38px 38px;
        }

        .rgu-bbed-fee-column {
            border-right: 1px solid var(--rgu-bbed-border);
        }

        .rgu-bbed-eligibility-column {
            background: #FAFBFE;
        }

        /* Column Headings */

        .rgu-bbed-column-heading {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 23px;
            margin-bottom: 27px;
            border-bottom: 1px solid var(--rgu-bbed-border);
        }

        .rgu-bbed-heading-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #FFF2DF;
            color: var(--rgu-bbed-orange);
            font-size: 19px;
        }

        .rgu-bbed-column-heading h3 {
            margin: 0 0 5px;
            color: var(--rgu-bbed-primary);
            font-size: 25px;
            font-weight: 700;
            line-height: 1.25;
        }

        .rgu-bbed-column-heading p {
            margin: 0;
            color: #777777;
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }

        /* Fee Groups */

        .rgu-bbed-fee-group {
            margin-top: 0;
        }

        .rgu-bbed-fee-group h4 {
            margin: 0 0 19px;
            color: var(--rgu-bbed-primary);
            font-size: 23px;
            font-weight: 700;
            line-height: 1.3;
        }

        .rgu-bbed-semester-group {
            margin-top: 37px;
        }

        .rgu-bbed-fee-item {
            display: grid;
            grid-template-columns: 34px minmax(0, 1fr) auto;
            align-items: center;
            gap: 10px;
            padding: 15px 0;
            border-bottom: 1px solid #F0F1F5;
        }

        .rgu-bbed-fee-item:last-child {
            border-bottom: none;
        }

        .rgu-bbed-fee-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 29px;
            height: 29px;
            border-radius: 8px;
            background: #F0F4FC;
            color: var(--rgu-bbed-primary);
            font-family: Arial, sans-serif;
            font-size: 11px;
            font-weight: 700;
        }

        .rgu-bbed-fee-label {
            color: #343434;
            font-size: 16px;
            line-height: 1.5;
        }

        .rgu-bbed-fee-label small {
            display: block;
            margin-top: 2px;
            color: #888888;
            font-size: 12px;
        }

        .rgu-bbed-fee-item strong {
            color: var(--rgu-bbed-primary);
            font-size: 16px;
            font-weight: 700;
            white-space: nowrap;
        }

        /* Eligibility Content */

        .rgu-bbed-eligibility-content {
            min-height: 280px;
        }

        .rgu-bbed-eligibility-placeholder {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 27px;
            border: 1px dashed #D6DDEA;
            border-radius: 13px;
            background: #FFFFFF;
        }

        .rgu-bbed-eligibility-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            margin-bottom: 18px;
            border-radius: 10px;
            background: #FFF2DF;
            color: var(--rgu-bbed-orange);
            font-size: 19px;
        }

        .rgu-bbed-eligibility-placeholder h4 {
            margin: 0 0 10px;
            color: var(--rgu-bbed-primary);
            font-size: 21px;
            line-height: 1.35;
        }

        .rgu-bbed-eligibility-placeholder p {
            margin: 0;
            color: #666666;
            font-size: 16px;
            line-height: 1.8;
        }

        /* Optional Eligibility List */

        .rgu-bbed-eligibility-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .rgu-bbed-eligibility-list li {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            padding: 17px 0;
            border-bottom: 1px solid #E9ECF2;
            color: #333333;
            font-size: 16px;
            line-height: 1.8;
        }

        .rgu-bbed-eligibility-list li i {
            margin-top: 6px;
            color: var(--rgu-bbed-orange);
            flex-shrink: 0;
        }

        /* Tablet */

        @media (max-width: 991px) {
            .rgu-bbed-programme-section {
                padding: 25px 20px;
            }

            .rgu-bbed-header {
                margin-bottom: 35px;
            }

            .rgu-bbed-fee-column,
            .rgu-bbed-eligibility-column {
                padding: 28px 24px;
            }

            .rgu-bbed-column-heading h3 {
                font-size: 22px;
            }

            .rgu-bbed-fee-item {
                grid-template-columns: 29px minmax(0, 1fr);
                gap: 10px;
            }

            .rgu-bbed-fee-item strong {
                grid-column: 2;
                font-size: 15px;
                white-space: normal;
            }
        }

        /* Mobile */

        @media (max-width: 767px) {
            .rgu-bbed-programme-section {
                padding: 25px 15px;
            }

            .rgu-bbed-header {
                margin-bottom: 28px;
            }

            .rgu-bbed-eyebrow {
                font-size: 11px;
                letter-spacing: 1.6px;
            }

            .rgu-bbed-title {
                font-size: 26px;
            }

            .rgu-bbed-school {
                font-size: 15px;
            }

            .rgu-bbed-information-card {
                grid-template-columns: minmax(0, 1fr);
                border-radius: 14px;
            }

            .rgu-bbed-fee-column,
            .rgu-bbed-eligibility-column {
                padding: 27px 22px;
            }

            .rgu-bbed-fee-column {
                border-right: none;
                border-bottom: 1px solid var(--rgu-bbed-border);
            }

            .rgu-bbed-column-heading {
                gap: 12px;
                padding-bottom: 19px;
                margin-bottom: 24px;
            }

            .rgu-bbed-heading-icon {
                width: 43px;
                height: 43px;
            }

            .rgu-bbed-column-heading h3 {
                font-size: 22px;
            }

            .rgu-bbed-fee-group h4 {
                font-size: 21px;
            }

            .rgu-bbed-fee-item {
                grid-template-columns: 30px minmax(0, 1fr) auto;
                gap: 9px;
            }

            .rgu-bbed-fee-label,
            .rgu-bbed-fee-item strong {
                font-size: 14px;
            }

            .rgu-bbed-fee-item strong {
                grid-column: auto;
                white-space: nowrap;
            }

            .rgu-bbed-eligibility-placeholder {
                padding: 22px;
            }

            .rgu-bbed-eligibility-content {
                min-height: auto;
            }
        }

        /* Very Small Mobile Screens */

        @media (max-width: 380px) {

            .rgu-bbed-fee-column,
            .rgu-bbed-eligibility-column {
                padding: 23px 15px;
            }

            .rgu-bbed-fee-item {
                grid-template-columns: 26px minmax(0, 1fr);
            }

            .rgu-bbed-fee-item strong {
                grid-column: 2;
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const tabs = document.querySelectorAll(".rgu-prog-tab");
            const panels = document.querySelectorAll(".rgu-prog-panel");

            tabs.forEach(tab => {

                tab.addEventListener("click", function() {

                    const target = this.dataset.tab;

                    /* Remove active state */
                    tabs.forEach(item => {
                        item.classList.remove("active");
                        item.setAttribute("aria-selected", "false");
                    });

                    panels.forEach(panel => {
                        panel.classList.remove("active");
                    });


                    /* Activate clicked tab */
                    this.classList.add("active");
                    this.setAttribute("aria-selected", "true");


                    /* Activate corresponding panel */
                    const targetPanel =
                        document.getElementById("rgu-prog-" + target);

                    if (targetPanel) {
                        targetPanel.classList.add("active");
                    }

                });

            });

        });
    </script>
@endsection
