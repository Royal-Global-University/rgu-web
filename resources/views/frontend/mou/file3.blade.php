@extends('frontend/new-master')
@section('content')
    <style>
        /*=========================================================
                            CRPF MoU Section
        =========================================================*/

        .crpf-mou-section {

            position: relative;

            overflow: hidden;

            padding: 90px 0 70px;

            background: #EBF1FC;

        }

        .crpf-mou-section::before {

            content: "";

            position: absolute;

            width: 420px;
            height: 420px;

            border-radius: 50%;

            background: rgba(8, 39, 95, .04);

            top: -180px;
            right: -180px;

        }

        .crpf-mou-section::after {

            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background: rgba(201, 153, 52, .08);

            left: -120px;
            bottom: -120px;

        }



        /*=========================================================
                            Heading
        =========================================================*/

        .crpf-header {

            text-align: center;

            margin-top: 55px;

        }

        .crpf-header h2 {

            font-size: 48px;

            font-weight: 700;

            color: #08275f;

            line-height: 1.2;

            margin-bottom: 22px;

        }

        .crpf-header h2::after {

            content: "";

            display: block;

            width: 90px;

            height: 4px;

            margin: 20px auto 0;

            background: #c99934;

            border-radius: 30px;

        }

        .crpf-header p {

            max-width: 760px;

            margin: auto;

            font-size: 18px;

            line-height: 1.9;

            color: #666;

        }



        /*=========================================================
                            Image
        =========================================================*/

        .crpf-image-card {

            margin-top: 10px;

            background: #fff;

            padding: 12px;

            border-radius: 28px;

            overflow: hidden;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, .08);

            transition: .35s;

        }

        .crpf-image-card:hover {

            transform: translateY(-6px);

        }

        .crpf-image-card img {

            width: 100%;

            height: 560px;

            object-fit: cover;

            display: block;

            border-radius: 20px;

            transition: .8s;

        }

        .crpf-image-card:hover img {

            transform: scale(1.04);

        }

        /*=========================================================
                        Content Section
        =========================================================*/

        .crpf-content-section {

            padding: 0 0 60px;

            background: #EBF1FC;

        }



        /*=========================================================
                        Content Card
        =========================================================*/

        .crpf-content-card {

            position: relative;

            background: #fff;

            border-radius: 28px;

            padding: 50px;

            overflow: hidden;

            box-shadow:
                0 18px 50px rgba(0, 0, 0, .08);

            transition: .35s;

        }

        .crpf-content-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 30px 70px rgba(0, 0, 0, .12);

        }



        /* Gold Accent */

        .crpf-content-card::before {

            content: "";

            position: absolute;

            left: 0;

            top: 55px;

            width: 6px;

            height: 130px;

            border-radius: 20px;

            background: #c99934;

        }



        /* Decorative Circle */

        .crpf-content-card::after {

            content: "";

            position: absolute;

            width: 220px;

            height: 220px;

            border-radius: 50%;

            background: rgba(201, 153, 52, .06);

            top: -110px;

            right: -110px;

        }



        /*=========================================================
                            Typography
        =========================================================*/

        .crpf-content-card p {

            position: relative;

            z-index: 2;

            font-size: 18px;

            line-height: 2;

            color: #555;

            margin-bottom: 34px;

        }

        .crpf-content-card p:last-child {

            margin-bottom: 0;

        }

        .crpf-content-card strong {

            color: #08275f;

            font-weight: 700;

        }



        /*=========================================================
                            Quote
        =========================================================*/

        .crpf-highlight-quote {

            position: relative;

            margin: 45px 0;

            padding: 45px;

            border-radius: 24px;

            overflow: hidden;

            background:
                linear-gradient(135deg, #08275f, #144b90);

        }

        .crpf-highlight-quote::before {

            content: "“";

            position: absolute;

            top: -45px;

            right: 18px;

            font-size: 190px;

            line-height: 1;

            color: rgba(255, 255, 255, .08);

            font-family: Georgia, serif;

        }

        .crpf-highlight-quote::after {

            content: "";

            position: absolute;

            width: 220px;

            height: 220px;

            border-radius: 50%;

            left: -110px;

            bottom: -110px;

            background: rgba(255, 255, 255, .05);

        }

        .crpf-highlight-quote p {

            position: relative;

            z-index: 2;

            margin: 0 !important;

            color: #fff;

            font-size: 18px;

            line-height: 2;

        }



        /*=========================================================
                        Gallery Section
        =========================================================*/

        .crpf-gallery-section {

            padding: 0 0 60px;

            background: #EBF1FC;

        }

        .crpf-gallery-section .crpf-image-card {

            margin-top: 0;

        }



        /*=========================================================
                        Spacing
        =========================================================*/

        .crpf-content-card+.crpf-content-card {

            margin-top: 35px;

        }

        /*=========================================================
                        Tablet
        =========================================================*/

        @media (max-width:991px) {

            /*------------------------------
                    Section
        ------------------------------*/

            .crpf-mou-section {

                padding: 70px 0 60px;

            }

            .crpf-content-section {

                padding-bottom: 50px;

            }

            .crpf-gallery-section {

                padding-bottom: 50px;

            }



            /*------------------------------
                    Header
        ------------------------------*/

            .crpf-header {

                margin-top: 40px;

            }

            .crpf-header h2 {

                font-size: 38px;

            }

            .crpf-header p {

                font-size: 16px;

            }



            /*------------------------------
                    Images
        ------------------------------*/

            .crpf-image-card {

                padding: 10px;

                border-radius: 22px;

            }

            .crpf-image-card img {

                height: 400px;

                border-radius: 16px;

            }



            /*------------------------------
                    Cards
        ------------------------------*/

            .crpf-content-card {

                padding: 38px;

                border-radius: 22px;

            }

            .crpf-content-card p {

                font-size: 16px;

                line-height: 1.9;

                margin-bottom: 28px;

            }



            /*------------------------------
                    Quote
        ------------------------------*/

            .crpf-highlight-quote {

                padding: 35px;

                margin: 35px 0;

            }

            .crpf-highlight-quote p {

                font-size: 16px;

                line-height: 1.9;

            }

        }




        /*=========================================================
                        Mobile
        =========================================================*/

        @media (max-width:767px) {

            /*------------------------------
                    Section
        ------------------------------*/

            .crpf-mou-section {

                padding: 55px 0 50px;

            }

            .crpf-content-section {

                padding-bottom: 35px;

            }

            .crpf-gallery-section {

                padding-bottom: 35px;

            }

            .crpf-mou-section::before,
            .crpf-mou-section::after {

                display: none;

            }



            /*------------------------------
                    Header
        ------------------------------*/

            .crpf-header {

                margin-top: 30px;

            }

            .crpf-header h2 {

                font-size: 28px;

                line-height: 1.3;

                margin-bottom: 18px;

            }

            .crpf-header h2::after {

                width: 65px;

                margin-top: 16px;

            }

            .crpf-header p {

                font-size: 15px;

                line-height: 1.8;

            }



            /*------------------------------
                    Images
        ------------------------------*/

            .crpf-image-card {

                padding: 7px;

                border-radius: 18px;

            }

            .crpf-image-card img {

                height: 230px;

                border-radius: 12px;

            }



            /*------------------------------
                    Content Card
        ------------------------------*/

            .crpf-content-card {

                padding: 26px 22px;

                border-radius: 18px;

            }

            .crpf-content-card::before {

                display: none;

            }

            .crpf-content-card::after {

                width: 120px;

                height: 120px;

                top: -60px;

                right: -60px;

            }

            .crpf-content-card p {

                font-size: 15px;

                line-height: 1.8;

                margin-bottom: 22px;

            }



            /*------------------------------
                    Quote
        ------------------------------*/

            .crpf-highlight-quote {

                margin: 28px 0;

                padding: 26px 22px;

                border-radius: 18px;

            }

            .crpf-highlight-quote::before {

                font-size: 110px;

                top: -18px;

                right: 12px;

            }

            .crpf-highlight-quote::after {

                width: 120px;

                height: 120px;

                left: -60px;

                bottom: -60px;

            }

            .crpf-highlight-quote p {

                font-size: 15px;

                line-height: 1.8;

            }

        }
    </style>

    <style>
        /*=========================================================
                        Partnership Section (Ultra-Premium Sealed Plaque)
                =========================================================*/
        /* Keyframes for Premium Animations */
        @keyframes goldShine {
            0% {
                background-position: 200% center;
            }

            100% {
                background-position: -200% center;
            }
        }

        @keyframes premiumPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(223, 186, 107, 0.6), 0 8px 22px rgba(0, 0, 0, 0.5);
            }

            70% {
                box-shadow: 0 0 0 25px rgba(223, 186, 107, 0), 0 8px 22px rgba(0, 0, 0, 0.5);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(223, 186, 107, 0), 0 8px 22px rgba(0, 0, 0, 0.5);
            }
        }

        @keyframes subtleFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        /* Outer Frame */
        .mou-partnership-frame {
            padding: 18px;
            /* Moving metallic gradient */
            background: linear-gradient(115deg,
                    #9a7422 0%,
                    #dfba6b 25%,
                    #fbf5b7 45%,
                    #dfba6b 65%,
                    #9a7422 100%);
            background-size: 200% auto;
            animation: goldShine 6s linear infinite;
            border-radius: 24px;
            box-shadow:
                0 35px 65px rgba(0, 0, 0, 0.18),
                inset 0 3px 5px rgba(255, 255, 255, 0.7),
                inset 0 -3px 8px rgba(0, 0, 0, 0.3);
            margin-bottom: 70px;
            position: relative;
        }

        /* Inner Sealed Bed */
        .mou-partnership {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 50px;
            padding: 65px 60px;
            background: radial-gradient(circle at 50% 0%, #151e32 0%, #04070d 100%);
            border-radius: 12px;
            box-shadow:
                inset 0 25px 50px rgba(0, 0, 0, 0.95),
                0 2px 4px rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        /* Glass Reflection Overlay (The "Sealed" Effect) */
        .mou-partnership::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.12) 0%,
                    rgba(255, 255, 255, 0.02) 30%,
                    rgba(255, 255, 255, 0) 50%);
            border-radius: 12px;
            pointer-events: none;
            /* Allows hovering elements underneath */
            z-index: 1;
        }

        /* Removing old layout lines */
        .mou-partnership::after {
            display: none;
        }

        /*=========================================================
                        Logo Cards (Mounted Engravings)
                =========================================================*/
        .mou-brand-card {
            position: relative;
            z-index: 2;
            /* Sits above the glass reflection */
            width: 100%;
            height: 220px;
            background: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            border: 1px solid rgba(223, 186, 107, 0.5);
            box-shadow:
                0 20px 40px rgba(0, 0, 0, 0.6),
                inset 0 0 20px rgba(223, 186, 107, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 1);
            animation: subtleFloat 6s ease-in-out infinite;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Delay the second card's float slightly for a natural feel */
        .mou-brand-card:nth-of-type(3) {
            animation-delay: 3s;
        }

        .mou-brand-card:hover {
            transform: translateY(-8px) scale(1.02);
            border-color: #dfba6b;
            box-shadow:
                0 25px 45px rgba(0, 0, 0, 0.7),
                0 0 30px rgba(223, 186, 107, 0.3);
            animation-play-state: paused;
        }

        .mou-brand-card img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.05));
        }

        /*=========================================================
                        Connector
                =========================================================*/
        .mou-connector {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .mou-connector span {
            width: 70px;
            height: 2px;
            background: linear-gradient(90deg, rgba(223, 186, 107, 0), #dfba6b, rgba(223, 186, 107, 0));
            box-shadow: 0 0 10px rgba(223, 186, 107, 0.4);
        }

        .mou-connector-icon {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fbf5b7 0%, #dfba6b 40%, #9a7422 100%);
            color: #04070d;
            font-size: 22px;
            border: 2px solid #fff;
            animation: premiumPulse 2.5s infinite;
            transition: transform 0.4s;
        }

        .mou-connector-icon:hover {
            transform: rotate(180deg) scale(1.1);
        }

        /*=========================================================
                        Tablet Breakpoint
                =========================================================*/
        @media(max-width:991px) {
            .mou-partnership {
                gap: 30px;
                padding: 50px 40px;
            }

            .mou-brand-card {
                height: 160px;
                padding: 25px;
            }

            .mou-connector span {
                width: 40px;
            }

            .mou-connector-icon {
                width: 52px;
                height: 52px;
                font-size: 18px;
            }
        }

        /*=========================================================
                        Mobile Breakpoint
                =========================================================*/
        @media(max-width:767px) {
            .mou-partnership-frame {
                padding: 12px;
                border-radius: 20px;
                margin-bottom: 50px;
            }

            .mou-partnership {
                grid-template-columns: 1fr;
                gap: 35px;
                padding: 45px 25px;
            }

            .mou-brand-card {
                height: 150px;
                padding: 25px;
            }

            .mou-connector {
                flex-direction: column;
                gap: 15px;
            }

            .mou-connector span {
                width: 2px;
                height: 45px;
                background: linear-gradient(180deg, rgba(223, 186, 107, 0), #dfba6b, rgba(223, 186, 107, 0));
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/mou/cover.png'); filter: blur(10px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> RGU Signs MoU with CRPF: <br> Offers New Scholarships for Wards of Security Forces
            </h1>
            <div class="pg-hero-breadcrumb">
                MOU / RGU Signs MoU with CRPF: Offers New Scholarships for Wards of Security Forces
            </div>
        </div>

    </section>


    <section class="crpf-mou-section">

        <div class="container">

            <!-- Partnership -->

            <div class="row">

                <div class="col-12">

                    <div class="mou-partnership-frame">
                        <div class="mou-partnership">

                            <div class="mou-brand-card">
                                <img src="new-web/assets/img/mou/mou3/logo.webp" alt="Nagaland Police">

                            </div>

                            <div class="mou-connector">

                                <span></span>

                                <div class="mou-connector-icon">
                                    <i class="fa fa-link"></i>
                                </div>

                                <span></span>

                            </div>

                            <div class="mou-brand-card">

                                <img src="/mobile-assets/index/logo-dark.png" alt="Royal Global University">
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Hero Image -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="crpf-image-card">

                        <img src="/mobile-assets/media-corner/news10/2.JPG" alt="">

                    </div>

                </div>

            </div>

            <!-- Heading -->

            <div class="row justify-content-center">

                <div class="col-lg-12">

                    <div class="crpf-header">

                        <h2>

                            RGU Signs MoU with CRPF: Offers New Scholarships for Wards of Security Forces

                        </h2>

                        <p>

                            RGU–CRPF MoU Brings Scholarship Opportunities for Wards of Security Forces

                        </p>

                    </div>

                </div>

            </div>

            <!-- =========================================
                    Article Content
        ========================================== -->

            <section class="crpf-content-section">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-12">

                            <div class="crpf-content-card">

                                <p>
                                    <strong>GUWAHATI, June 18, 2025:</strong> To promote quality access to higher
                                    education and honour the service and sacrifices of the personnel of the force, the
                                    Assam Royal Global University (RGU) has signed a Memorandum of Understanding with
                                    the Central Reserve Police Force (CRPF) and launched two distinct categories of
                                    academic scholarships for the benefit of eligible dependents and wards of CRPF
                                    personnel. The MoU was signed on Monday by Prof. (Dr.) D. N. Singh, Registrar
                                    Academics, RGU and Mrs Soma Mukherjee, President R/CWA, GC, CRPF Guwahati in the
                                    presence of Mr Manas Ranjan, Dy Inspector General of Police, CRPF and senior
                                    officers from RGU and CRPF.
                                </p>

                                <p>
                                    In this regard, Prof. (Dr.) DN Singh stated, “The two categories of scholarships for
                                    the wards of armed forces and security personnel include ‘Royal Shaurya’ - 100%
                                    scholarship for the families of martyrs and gallantry awardees and ‘Royal Suraksha’
                                    - 50% tuition support for wards of CRPF personnel”. These scholarships may be
                                    allowed on admissions to programmes regulated by statutory bodies such as AICTE,
                                    COA, PCI, INC, ANMHVC, BCI or similar councils, he added.
                                </p>

                                <div class="crpf-highlight-quote">

                                    <p>
                                        “The two categories of scholarships for the wards of armed forces and security
                                        personnel include Royal Shaurya and Royal Suraksha, reaffirming RGU's commitment
                                        to honouring the sacrifices of our security forces through accessible higher
                                        education.”
                                    </p>

                                </div>

                                <p>
                                    Mr. Manas Ranjan, on the other hand, expressed his gratitude to Assam Royal Global
                                    University for undertaking this noble initiative. He stated that the scholarships
                                    would greatly benefit the families of security personnel, as frequent job transfers
                                    often disrupt their children's education.
                                </p>

                                <p>
                                    “RGU has been offering many other scholarship opportunities under various categories
                                    to its students since the beginning. Mention can be made about “Royal Merit On
                                    Admission Scholarship”, “Royal Scholarship for EWS category”, “Royal Endowment
                                    Scholarship”, RGU Sports Scholarship, Monthly Scholarship for Semester Toppers”,
                                    stated Mr Utpal Kanta, Director, Growth and Strategy, RGU.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <!-- =========================================
                    Second Image
        ========================================== -->

            <section class="crpf-gallery-section">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-xl-11">

                            <div class="crpf-image-card">

                                <img src="/mobile-assets/media-corner/news10/Prof.%20(Dr.)%20D.%20N.%20Singh,%20Registrar%20Academics,%20RGU%20and%20Mrs%20Soma%20Mukherjee,%20President%20RCWA,%20GC,%20CRPF%20Guwahati%20after%20signing%20the%20MoU.JPG"
                                    alt="">

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <!-- =========================================
                    Remaining Content
        ========================================== -->

            <section class="crpf-content-section">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-12">

                            <div class="crpf-content-card">

                                <p>
                                    The Royal Merit On Admission Scholarship offers 100% scholarship on annual fee,
                                    admission fee and registration fee. On the other hand, 100% Royal Scholarship is
                                    offered to students who belong to economically weaker sections of the society. Royal
                                    Endowment scholarship is offered across all programmes and the categories under
                                    which it can be availed include sports, music, fine art students; differently abled
                                    students; child and grandchild of Padma Awardees, Assam Baibhav, Saurav and Gaurav
                                    Award; ward of a mother who is a single parent; and one whose family income is less
                                    than 8 lacs. There are also scholarships for international students from neighboring
                                    countries.
                                </p>

                                <p>
                                    The RGU Sports scholarship not only offers financial assistance to athletes but also
                                    focus on nurturing and encouraging their growth through proper coaching and
                                    mentorship. Based on achievements and representation of players at the
                                    international, national, state and district levels, the university offers 100%, 80%,
                                    70%, 50% and 40% scholarships in sports and games recognized by the Indian Olympic
                                    Association.
                                </p>

                                <p>
                                    At RGU, the Monthly Scholarship for Semester Toppers inspires students to put in
                                    consistent effort throughout their academic journey. Students from various semesters
                                    and diverse departments are awarded a Monthly Scholarship of ₹3,000, in recognition
                                    of their outstanding academic performance.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



        </div>

    </section>
@endsection
