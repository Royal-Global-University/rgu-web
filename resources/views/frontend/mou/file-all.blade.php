@extends('frontend/new-master')
@section('content')
    <style>
        /* ================= RGU APS HERO (UNIQUE) ================= */

        .rguapsh-hero {
            position: relative;
            height: 60rem;
            width: 100%;
            overflow: hidden;
        }

        /* dynamic background from inline style */
        .rguapsh-bg {
            position: absolute;
            inset: 0;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* overlay */
        .rguapsh-overlay {
            position: absolute;
            inset: 0;
            background: rgba(20, 40, 70, 0.24);
            z-index: 2;
        }

        /* content */
        .rguapsh-inner {
            position: relative;
            z-index: 3;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 0 2rem;
        }

        /* title */
        .rguapsh-title {
            font-family: "Playfair Display", serif;
            font-size: 5.5rem;
            font-weight: 600;

        }

        /* breadcrumb */
        .rguapsh-breadcrumb {
            font-size: 1.6rem;
            color: rgba(255, 255, 255, 0.9);
        }

        /* responsive */
        @media (max-width: 900px) {
            .rguapsh-hero {
                height: 40rem;
            }

            .rguapsh-title {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {

            .rguapsh-inner {
                align-items: flex-start;
                justify-content: flex-end;
                text-align: left;
                padding: 0 2rem 4rem 2rem;
            }

            .rguapsh-title {
                font-size: 2.8rem;
                margin-bottom: 0.8rem;
            }

            .rguapsh-breadcrumb {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            .rguapsh-hero {
                height: 35rem;
            }

            .rguapsh-title {
                font-size: 2.6rem;
            }
        }
    </style>

    <style>
        /*====================================================
                    MOBILE VIEW
    ====================================================*/

        @media (max-width:767px) {

            /* SECTION */

            .mou-showcase {
                padding: 40px 0;
            }

            .mou-showcase .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .mou-showcase .row {
                margin-left: -8px;
                margin-right: -8px;
            }

            .mou-showcase .col-lg-6,
            .mou-showcase .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
                width: 100%;
                padding-left: 8px;
                padding-right: 8px;
                margin-bottom: 18px;
            }


            /* CARD */

            .mou-card-frame {
                padding: 6px;
                border-radius: 20px;
            }

            .mou-card-inner {
                border-radius: 16px;
                padding: 20px 18px 18px;
            }


            /* TITLE */

            .mou-card-title {

                margin: 0 0 18px;

                min-height: auto;

                font-size: 20px;

                line-height: 1.45;

                text-align: center;

                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden;
            }


            /* LOGO STACK */

            .mou-logo-row {

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                gap: 8px;

                margin-top: auto;
            }


            /* LOGO BOX */

            .mou-logo-box {

                width: 92px;
                height: 92px;

                padding: 12px;

                border-radius: 12px;
            }

            .mou-logo-box img {

                width: 100%;
                height: 100%;

                max-width: 64px;
                max-height: 64px;

                object-fit: contain;
            }


            /* CONNECTOR */

            .mou-connect {

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                gap: 5px;
            }

            .mou-connect span {

                width: 2px;
                height: 16px;

                background: linear-gradient(to bottom,
                        transparent,
                        #d9af4a 20%,
                        #fff0ad 50%,
                        #d9af4a 80%,
                        transparent);
            }

            .mou-connect span::before {
                display: none;
            }


            /* CENTER MEDAL */

            .mou-connect-icon {

                width: 42px;
                height: 42px;

                border-width: 1px;

                box-shadow:
                    0 4px 10px rgba(0, 0, 0, .18),
                    inset 0 1px 2px rgba(255, 255, 255, .45);
            }

            .mou-connect-icon:before {

                inset: -3px;

                border: 2px solid rgba(255, 223, 140, .18);
            }

            .mou-connect-icon:after {

                width: 24px;
                height: 24px;
            }

            .mou-connect-icon i {

                font-size: 13px;
            }


            /* FOOTER */

            .mou-footer {

                height: 46px;

                font-size: 17px;

                letter-spacing: 2px;

                font-weight: 700;

                border-radius: 16px;
            }

            .mou-footer::after {
                display: none;
            }


            /* REMOVE MOBILE HOVER */

            .mou-card-frame:hover,
            .mou-card:hover .mou-card-frame,
            .mou-card:hover .mou-logo-box,
            .mou-card:hover .mou-connect-icon {
                transform: none;
            }

        }
    </style>

    <section class="rguapsh-hero">
        <div class="rguapsh-bg"
            style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('new-web/assets/img/mou/cover.png'); background-size: cover; background-position: center; filter: blur(3px);">
        </div>

        <div class="rguapsh-bg"></div>

        <div class="rguapsh-overlay"></div>

        <div class="rguapsh-inner">
            <h1 class="rguapsh-title">
                Memorandum of Understanding (MOU) and Tie up
            </h1>

            <div class="rguapsh-breadcrumb">
            </div>
        </div>
    </section>


    <section class="mou-showcase">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-signs-moU-with-indian-army" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    Royal Global University Becomes the First University
                                    in North East India to Sign Landmark MoU with the Indian Army
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/indian-army/logo.png">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

                <!-- Card -->

                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-signs-moU-with-indian-navy" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    Royal Global University Signs Landmark MoU with
                                    Indian Navy to Support Wards of Defence Personnel
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/mou2/logo.jfif">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

                <!-- Card -->

                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-signs-mou-with-crpf" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    RGU Signs MoU with CRPF:
                                    Offers New Scholarships for Wards of Security Forces
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/mou3/logo.webp">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

                <!-- Card -->

                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-signs-moU-with-ssb" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    Royal Global University Signs MoU with Sashastra Seema Bal to Support the Families
                                    of India's Bravehearts
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/ssb/logo.svg">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

                <!-- Card -->

                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-signs-moU-with-assam-police" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    Royal Global University Signs MoU with Assam Police to Expand Educational
                                    Opportunities for Police Families
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/assam-police/Assam_Police_badge.png">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

                <!-- Card -->

                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-signs-moU-with-indian-meghalaya" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    Meghalaya Police Signs Landmark MoU
                                    with Royal Global University
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/mou-meghalaya-police/logo.jfif">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

                <!-- Card -->
                <div class="col-lg-6 col-md-6 mb-4">

                    <a href="/rgu-sign-mou-with-nagaland-police" class="mou-card">

                        <div class="mou-card-frame">

                            <div class="mou-card-inner">

                                <h3 class="mou-card-title">
                                    Nagaland Police signs MoU
                                    with Royal Global University
                                </h3>

                                <div class="mou-logo-row">

                                    <div class="mou-logo-box">
                                        <img src="new-web/assets/img/mou/mou1/logo.png">
                                    </div>

                                    <div class="mou-connect">

                                        <span></span>

                                        <div class="mou-connect-icon">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>

                                        <span></span>

                                    </div>

                                    <div class="mou-logo-box">
                                        <img src="/mobile-assets/index/logo-dark.png">
                                    </div>

                                </div>

                            </div>

                            <div class="mou-footer">
                                VIEW MOU
                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>

    <style>
        /*====================================================
                    MOU SHOWCASE
    ====================================================*/

        .mou-showcase {
            padding: 90px 0;
            background: #edf2fb;
        }

        .mou-card {
            display: block;
            text-decoration: none;
            color: inherit;
            height: 100%;
        }

        .mou-card:hover {
            text-decoration: none;
            color: inherit;
        }


        /*====================================================
                        CARD
    ====================================================*/

        .mou-card-frame {

            position: relative;

            display: flex;

            flex-direction: column;

            height: 100%;

            overflow: hidden;

            border-radius: 28px;

            padding: 10px;

            background:
                linear-gradient(135deg,
                    #8d6519 0%,
                    #bf9132 12%,
                    #e8c56d 24%,
                    #fff4c4 36%,
                    #f3d57c 48%,
                    #bf9132 62%,
                    #8d6519 100%);

            box-shadow:

                0 25px 50px rgba(0, 0, 0, .16),

                inset 0 2px 2px rgba(255, 255, 255, .65),

                inset 0 -3px 4px rgba(0, 0, 0, .22);

            transition: .35s ease;

        }



        /*====================================================
                PREMIUM GOLD SHINE
    ====================================================*/

        .mou-card-frame:before {

            content: "";

            position: absolute;

            top: 0;

            left: -130%;

            width: 45%;

            height: 100%;

            background:

                linear-gradient(105deg,

                    transparent,

                    rgba(255, 255, 255, .45),

                    transparent);

            transition: 1.1s;

            pointer-events: none;

        }

        .mou-card:hover .mou-card-frame:before {

            left: 140%;

        }



        /*====================================================
                GOLD INNER BORDER
    ====================================================*/

        .mou-card-frame:after {

            content: "";

            position: absolute;

            inset: 0;

            border-radius: 28px;

            pointer-events: none;

            box-shadow:

                inset 0 0 0 1px rgba(255, 255, 255, .25),

                inset 0 0 18px rgba(255, 255, 255, .12);

        }



        /*====================================================
                    BLACK PANEL
    ====================================================*/

        .mou-card-inner {

            position: relative;

            flex: 1;

            display: flex;

            flex-direction: column;

            overflow: hidden;

            border-radius: 18px;

            padding: 34px;

            background:

                radial-gradient(circle at top left,

                    #26344d,

                    #111827 45%,

                    #070b13 100%);

        }



        /*====================================================
                    PANEL TEXTURE
    ====================================================*/

        .mou-card-inner:before {

            content: "";

            position: absolute;

            inset: 0;

            opacity: .30;

            background:

                repeating-linear-gradient(135deg,

                    rgba(255, 255, 255, .03),

                    rgba(255, 255, 255, .03) 2px,

                    transparent 2px,

                    transparent 11px);

        }



        /*====================================================
                DECORATIVE SHAPES
    ====================================================*/

        .mou-card-inner:after {

            content: "";

            position: absolute;

            width: 260px;

            height: 260px;

            border-radius: 50%;

            top: -140px;

            right: -90px;

            background:

                rgba(255, 255, 255, .04);

        }



        /*====================================================
                    PANEL GLOW
    ====================================================*/

        .mou-card:hover .mou-card-inner {

            box-shadow:

                inset 0 0 70px rgba(255, 255, 255, .02);

        }



        /*====================================================
                    HOVER
    ====================================================*/

        .mou-card-frame:hover {

            transform: translateY(-8px);

            box-shadow:

                0 35px 70px rgba(0, 0, 0, .20),

                inset 0 2px 2px rgba(255, 255, 255, .7),

                inset 0 -3px 5px rgba(0, 0, 0, .22);

        }



        /*====================================================
                SMOOTH TRANSITIONS
    ====================================================*/

        .mou-card,
        .mou-card * {

            transition:

                all .35s cubic-bezier(.4, 0, .2, 1);

        }

        /*====================================================
                        TITLE
    ====================================================*/

        .mou-card-title {

            position: relative;

            z-index: 2;

            margin: 0;

            margin-bottom: 38px;

            color: #edd186;

            font-family: "Playfair Display", serif;

            font-size: 20px;

            font-weight: 600;

            line-height: 1.45;

            letter-spacing: .2px;

            min-height: 88px;

            display: -webkit-box;

            -webkit-box-orient: vertical;

            -webkit-line-clamp: 3;

            overflow: hidden;

        }

        .mou-card:hover .mou-card-title {

            color: #f5df9f;

        }



        /*====================================================
                        LOGO ROW
    ====================================================*/

        .mou-logo-row {

            position: relative;

            z-index: 2;

            margin-top: auto;

            display: grid;

            grid-template-columns: 1fr auto 1fr;

            align-items: center;

            gap: 28px;

        }



        /*====================================================
                        LOGO CARD
    ====================================================*/

        .mou-logo-box {

            position: relative;

            height: 140px;

            background:

                linear-gradient(180deg,
                    #ffffff 0%,
                    #fbfbfb 100%);

            border-radius: 14px;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 8px;

            border: 1px solid #efe5cf;

            box-shadow:

                0 12px 22px rgba(0, 0, 0, .16),

                inset 0 1px 0 rgba(255, 255, 255, .95),

                inset 0 -8px 18px rgba(0, 0, 0, .03);

        }

        .mou-logo-box:before {

            content: "";

            position: absolute;

            inset: 0;

            border-radius: 14px;

            background:

                linear-gradient(135deg,

                    rgba(255, 255, 255, .55),

                    transparent 45%);

            pointer-events: none;

        }

        .mou-logo-box img {

            position: relative;

            z-index: 2;

            max-width: 100%;

            max-height: 100%;

            object-fit: contain;

        }

        .mou-card:hover .mou-logo-box {

            transform: translateY(-4px);

            box-shadow:

                0 18px 30px rgba(0, 0, 0, .22),

                inset 0 1px 0 rgba(255, 255, 255, .95);

        }



        /*====================================================
                        CONNECTOR
    ====================================================*/

        .mou-connect {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 2px;

        }

        .mou-connect span {

            width: 50px;

            height: 2px;

            background:

                linear-gradient(90deg,

                    transparent,

                    #ddb34f 30%,

                    #fff1b2 50%,

                    #ddb34f 70%,

                    transparent);

            position: relative;

        }

        .mou-connect span:before {

            content: "";

            position: absolute;

            width: 6px;

            height: 6px;

            border-radius: 50%;

            background: #ddb34f;

            right: -2px;

            top: 50%;

            transform: translateY(-50%);

        }

        .mou-connect span:first-child:before {

            right: auto;

            left: -2px;

        }



        /*====================================================
                        MEDAL
    ====================================================*/

        .mou-connect-icon {

            position: relative;

            width: 74px;

            height: 74px;

            border-radius: 50%;

            display: flex;

            justify-content: center;

            align-items: center;

            background:

                radial-gradient(circle at 30% 30%,

                    #fff4be 0%,

                    #f3d372 35%,

                    #d6a63d 70%,

                    #9b6d18 100%);

            border: 2px solid rgba(255, 255, 255, .45);

            box-shadow:

                0 10px 18px rgba(0, 0, 0, .18),

                inset 0 2px 3px rgba(255, 255, 255, .55),

                inset 0 -3px 5px rgba(0, 0, 0, .18);

        }

        .mou-connect-icon:before {

            content: "";

            position: absolute;

            inset: -7px;

            border-radius: 50%;

            border: 4px solid rgba(255, 223, 140, .16);

        }

        .mou-connect-icon:after {

            content: "";

            position: absolute;

            width: 54px;

            height: 54px;

            border-radius: 50%;

            background:

                radial-gradient(circle,

                    rgba(255, 255, 255, .22),

                    transparent 70%);

        }

        .mou-connect-icon i {

            position: relative;

            z-index: 5;

            font-size: 22px;

            color: #151515;

        }

        .mou-card:hover .mou-connect-icon {

            transform: scale(1.05);

        }

        /*====================================================
                        FOOTER
    ====================================================*/

        .mou-footer {

            position: relative;

            border-radius: 20px;

            display: flex;

            justify-content: center;

            align-items: center;

            height: 50px;

            margin-top: 0;

            background:
                linear-gradient(90deg,
                    #f9e79b 0%,
                    #d6a13a 25%,
                    #fff2b7 50%,
                    #d6a13a 75%,
                    #f9e79b 100%);

            color: #1b1b1b;

            font-family: "Playfair Display", serif;

            font-size: 20px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;

            text-align: center;

            border-top: 1px solid rgba(255, 255, 255, .35);

            overflow: hidden;

        }


        /* Metallic Shine */

        .mou-footer::before {

            content: "";

            position: absolute;

            top: 0;

            left: -120%;

            width: 40%;

            height: 100%;

            background:
                linear-gradient(110deg,
                    transparent,
                    rgba(255, 255, 255, .45),
                    transparent);

            transition: .9s;

        }

        .mou-card:hover .mou-footer::before {

            left: 140%;

        }


        /* Decorative Divider */

        .mou-footer::after {

            content: "✦";

            position: absolute;

            left: 50%;

            top: 50%;

            transform: translate(-50%, 22px);

            font-size: 12px;

            color: rgba(0, 0, 0, .35);

        }
    </style>
@endsection
