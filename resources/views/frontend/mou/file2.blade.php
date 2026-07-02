@extends('frontend/new-master')
@section('content')
        <style>
        /*=========================================================
                Indian Navy MoU Page
=========================================================*/

        .navy-mou-section {
            position: relative;
            overflow: hidden;
            padding: 90px 0 100px;
            background: #EBF1FC;
        }

        .navy-mou-section::before {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: rgba(8, 39, 95, .04);
            top: -180px;
            right: -180px;
        }

        .navy-mou-section::after {
            content: "";
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: rgba(201, 153, 52, .08);
            left: -120px;
            bottom: -120px;
        }



        /*=========================================================
                    Partnership
=========================================================*/

        .mou-partnership {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 30px;

            margin-bottom: 55px;

            position: relative;

            z-index: 2;

        }



        /*=========================================================
                    Logo Cards
=========================================================*/

        .mou-brand-card {

            width: 190px;
            height: 100px;

            background: #fff;

            border-radius: 22px;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 18px;

            box-shadow:
                0 18px 45px rgba(0, 0, 0, .08);

            transition: .35s;

        }

        .mou-brand-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 25px 55px rgba(0, 0, 0, .12);

        }

        .mou-brand-card img {

            width: 100%;
            height: 100%;

            object-fit: contain;

        }



        /*=========================================================
                    Connector
=========================================================*/

        .mou-connector {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 14px;

        }

        .mou-connector span {

            width: 85px;
            height: 3px;

            border-radius: 30px;

            background: #c99934;

        }

        .mou-connector-icon {

            width: 60px;
            height: 60px;

            border-radius: 50%;

            background: #08275f;

            color: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            box-shadow:
                0 12px 30px rgba(8, 39, 95, .25);

            transition: .35s;

        }

        .mou-connector-icon:hover {

            transform: rotate(180deg);

        }

        /*=========================================================
                    Header
=========================================================*/

        .navy-mou-header {

            position: relative;

            z-index: 2;

            text-align: center;

            margin-bottom: 55px;

        }

        .navy-mou-header h2 {

            font-size: 52px;

            font-weight: 700;

            line-height: 1.18;

            color: #08275f;

            margin-bottom: 24px;

            max-width: 1150px;

            margin-left: auto;
            margin-right: auto;

        }

        .navy-mou-header h2::after {

            content: "";

            display: block;

            width: 95px;
            height: 4px;

            margin: 24px auto 0;

            border-radius: 30px;

            background: #c99934;

        }

        .navy-mou-header p {

            max-width: 850px;

            margin: auto;

            font-size: 19px;

            line-height: 1.9;

            color: #5b6470;

        }



        /*=========================================================
                    Hero Image
=========================================================*/

        .navy-mou-image-card {

            position: relative;

            background: #fff;

            padding: 14px;

            border-radius: 30px;

            overflow: hidden;

            box-shadow:
                0 20px 55px rgba(0, 0, 0, .08);

            transition: .4s;

        }

        .navy-mou-image-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 30px 65px rgba(0, 0, 0, .12);

        }



        /* Decorative Corners */

        .navy-mou-image-card::before {

            content: "";

            position: absolute;

            width: 70px;
            height: 70px;

            top: 22px;
            left: 22px;

            border-top: 5px solid #c99934;
            border-left: 5px solid #c99934;

            border-radius: 18px 0 0 0;

            z-index: 3;

        }

        .navy-mou-image-card::after {

            content: "";

            position: absolute;

            width: 70px;
            height: 70px;

            right: 22px;
            bottom: 22px;

            border-right: 5px solid #c99934;
            border-bottom: 5px solid #c99934;

            border-radius: 0 0 18px 0;

            z-index: 3;

        }



        /* Image */

        .navy-mou-image-card img {

            width: 100%;

            height: 360px;

            display: block;

            object-fit: contain;

            border-radius: 22px;

            transition: .8s;

        }

        .navy-mou-image-card:hover img {

            transform: scale(1.04);

        }



        /*=========================================================
                Image Caption (Optional)
=========================================================*/

        .navy-image-caption {

            margin-top: 18px;

            text-align: center;

            font-size: 15px;

            color: #7b8594;

            line-height: 1.7;

        }

        /*=========================================================
                    Content Section
=========================================================*/

        .navy-content-card {

            position: relative;

            background: #fff;

            border-radius: 28px;

            padding: 50px;

            margin-top: 50px;

            box-shadow:
                0 18px 50px rgba(0, 0, 0, .08);

            overflow: hidden;

            transition: .35s;

        }

        .navy-content-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 28px 70px rgba(0, 0, 0, .12);

        }



        /* Decorative Elements */

        .navy-content-card::before {

            content: "";

            position: absolute;

            left: 0;
            top: 55px;

            width: 6px;
            height: 120px;

            border-radius: 20px;

            background: #c99934;

        }

        .navy-content-card::after {

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

        .navy-content-card p {

            position: relative;

            z-index: 2;

            color: #555;

            font-size: 18px;

            line-height: 2;

            margin-bottom: 34px;

        }

        .navy-content-card p:last-child {

            margin-bottom: 0;

        }

        .navy-content-card strong {

            color: #08275f;

            font-weight: 700;

        }



        /*=========================================================
                    Quote
=========================================================*/

        .navy-highlight-quote {

            position: relative;

            margin: 45px 0;

            padding: 45px;

            border: none;

            border-radius: 24px;

            overflow: hidden;

            background:
                linear-gradient(135deg, #08275f, #144b90);

        }

        .navy-highlight-quote::before {

            content: "“";

            position: absolute;

            top: -50px;
            right: 20px;

            font-size: 190px;

            line-height: 1;

            color: rgba(255, 255, 255, .07);

            font-family: Georgia, serif;

        }

        .navy-highlight-quote::after {

            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            border-radius: 50%;

            left: -120px;
            bottom: -120px;

            background: rgba(255, 255, 255, .05);

        }

        .navy-highlight-quote p {

            position: relative;

            z-index: 2;

            margin: 0 !important;

            color: #fff;

            font-size: 18px;

            line-height: 2;

        }



        /*=========================================================
                    Spacing
=========================================================*/

        .navy-mou-section .row+.row {

            margin-top: 55px;

        }

        .navy-content-card+.navy-content-card {

            margin-top: 35px;

        }



        /*=========================================================
                    Selection
=========================================================*/

        .navy-content-card p::selection,
        .navy-highlight-quote p::selection {

            background: #08275f;

            color: #fff;

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
            <h1 class="pg-hero-title"> Royal Global University Signs Landmark MoU with <br> Indian Navy to Support Wards of Defence
                            Personnel</h1>
            <div class="pg-hero-breadcrumb">
                MOU / Royal Global University Signs Landmark MoU with Indian Navy to Support Wards of Defence
                            Personnel
            </div>
        </div>

    </section>


    <!-- =========================================
        Indian Navy MoU Section
========================================== -->

    <section class="navy-mou-section">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-12">

                    <div class="navy-mou-header">

                          <div class="mou-partnership-frame">
                        <div class="mou-partnership">

                            <div class="mou-brand-card">
                                <img src="new-web/assets/img/mou/mou2/logo.jfif" alt="Nagaland Police">

                            </div>

                            <div class="mou-connector">

                                <span></span>

                                <div class="mou-connector-icon">
                                    <i class="fa fa-link"></i>
                                </div>

                                <span></span>

                            </div>

                            <div class="mou-brand-card">

                                <img src="https://www.rgu.ac/mobile-assets/index/logo-dark.png"
                                    alt="Royal Global University">
                            </div>

                        </div>
                    </div>

                        <h2>
                            Royal Global University Signs Landmark MoU with Indian Navy to Support Wards of Defence
                            Personnel
                        </h2>

                        <p>
                            RGU becomes the first private university from Northeast India to collaborate with the Indian
                            Navy
                        </p>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-xl-12">

                    <div class="navy-mou-image-card">

                        <img src="https://www.rgu.ac/mobile-assets/media-corner/2026/mou/mou-1.jpeg"
                            alt="Indian Navy MoU">

                    </div>

                </div>

            </div>

            <div class="row justify-content-center mt-5">

                <div class="col-lg-12">

                    <div class="navy-content-card">

                        <p>
                            <strong>GUWAHATI, April 16, 2026:</strong> In a significant stride towards reinforcing its
                            commitment to nation-building through education, The Assam Royal Global University (RGU) has
                            signed a landmark Memorandum of Understanding (MoU) with the Indian Navy on Monday at the
                            office of the Navy Welfare and Wellness Association (NWWA), Chanakyapuri, New Delhi.
                        </p>

                        <p>
                            The agreement was formally signed by Mrs. Shashi Tripathi, President, NWWA, and Commodore S.
                            M. Urooj Athar on behalf of the Indian Navy, while Prof. D. N. Singh, Registrar (Academics),
                            RGU, signed on behalf of the university.
                        </p>

                        <p>
                            This historic collaboration marks RGU as the first private university from Northeast India
                            to partner with the Indian Navy, opening new avenues of educational support for the wards
                            and dependents of defence personnel.
                        </p>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center mt-5">

                <div class="col-lg-12">

                    <div class="navy-content-card">

                        <p>
                            Speaking on the occasion, Mrs. Shashi Tripathi, President, NWWA stated, “This collaboration
                            is more than just an agreement, it’s a promise to our community. Through this initiative,
                            NWWA has secured substantial educational concessions ranging from 100% to 50% for the wards
                            of naval personnel, be it serving, retired or under Sahara support, across a wide spectrum
                            of undergraduate and postgraduate programs.”
                        </p>

                        <blockquote class="navy-highlight-quote">

                            <p>
                                Commodore S. M. Urooj Athar said, “At NWWA, we believe that education is empowerment. By
                                forging such meaningful partnerships, we are actively creating pathways for our children
                                to access quality education without financial barriers. Every such step strengthens our
                                community and honors the sacrifices of our naval families”.
                            </p>

                        </blockquote>

                        <p>
                            Expressing his pride on the occasion, Prof. D. N. Singh said, “It is a matter of immense
                            honour and privilege for our University to sign this first-of-its-kind MoU with the Indian
                            Navy.” Under this collaboration, RGU will introduce two dedicated scholarship
                            categories—Royal Shaurya and Royal Suraksha—designed to provide quality higher education
                            opportunities to eligible dependents and wards of defence personnel, including serving
                            personnel, ex-servicemen, personnel with disabilities, and those who died in harness.
                        </p>

                        <p>
                            The university will offer ‘Royal Shaurya’, a 100% scholarship for the families of martyrs
                            and gallantry awardees, and ‘Royal Suraksha’, providing 50% tuition fee support for the
                            wards of serving and retired defence personnel.
                        </p>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center mt-5">

                <div class="col-lg-12">

                    <div class="navy-content-card">

                        <p>
                            As part of the MoU, the Indian Navy will facilitate admissions by disseminating information
                            about the scholarship scheme across its schools, ranks, and institutions, while ensuring
                            timely forwarding of eligible candidates. It will also nominate a single point of contact
                            officer to coordinate policy and administrative matters, verify the eligibility of
                            prospective students, and provide necessary service documentation for credential
                            verification.
                        </p>

                        <p>
                            The Assam Royal Global University, a leading multi-disciplinary and holistic institution,
                            offers a wide range of undergraduate, postgraduate, and doctoral programmes across diverse
                            faculties, including Science, Engineering, Management & Commerce, Architecture, Paramedical
                            & Allied Health Sciences, Pharmacy, Law, Humanities & Social Sciences, Fine Arts & Design,
                            Sports, and several other disciplines.
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
