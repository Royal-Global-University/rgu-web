@extends('frontend/new-master')
@section('content')
        <style>
        /*=========================================================
                MoU Introduction Section
=========================================================*/

        .mou-intro-section {
            padding: 90px 0 70px;
            background: #ECF0FF;
            position: relative;
        }

        .mou-image-layout {
            position: relative;
            padding: 0 80px 70px 0;
        }

        .mou-image-main {
            overflow: hidden;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
        }

        .mou-image-main img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            display: block;
            transition: .6s;
        }

        .mou-image-main:hover img {
            transform: scale(1.04);
        }

        .mou-image-secondary {
            position: absolute;
            width: 250px;
            bottom: 0;
            right: 0;
            overflow: hidden;
            border-radius: 20px;
            background: #fff;
            padding: 8px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .12);
        }

        .mou-image-secondary img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 14px;
            display: block;
            transition: .6s;
        }

        .mou-image-secondary:hover img {
            transform: scale(1.05);
        }

        .mou-content-wrapper {
            padding-left: 25px;
        }

        .mou-content-wrapper h2 {
            font-size: 46px;
            font-weight: 700;
            color: #08275f;
            line-height: 1.2;
            margin-bottom: 28px;
        }

        .mou-content-wrapper h2::after {
            content: "";
            display: block;
            width: 90px;
            height: 4px;
            background: #c99934;
            border-radius: 20px;
            margin-top: 18px;
        }

        .mou-content-wrapper p {
            font-size: 18px;
            line-height: 1.95;
            color: #555;
            margin: 0;
        }



        /*=========================================================
                MoU Content
=========================================================*/

        .mou-content-section {
            padding: 20px 0 70px;
            background: #f7f7f7;
        }

        .mou-content-card {

            position: relative;

            background: #fff;

            border-radius: 26px;

            padding: 50px 45px;

            box-shadow:
                0 18px 45px rgba(0, 0, 0, .07);

        }

        .mou-content-card::before {

            content: "";

            position: absolute;

            left: 0;
            top: 55px;

            width: 5px;
            height: 120px;

            background: #c99934;

            border-radius: 20px;

        }

        .mou-content-card h2 {

            color: #12478b;

            font-size: 26px;

            line-height: 1.0;

            margin-bottom: 25px;

            font-weight: 800;

        }

        .mou-content-card p {

            color: #555;

            font-size: 18px;

            line-height: 1.9;

            margin-bottom: 32px;

        }

        .mou-content-card p:last-child {

            margin-bottom: 0;

        }



        /*=========================================================
                    Quote
=========================================================*/

        .mou-highlight-quote {

            position: relative;

            margin: 45px 0;

            padding: 42px;

            background: linear-gradient(135deg, #08275f, #12478b);

            border-radius: 24px;

            overflow: hidden;

            border: none;

        }

        .mou-highlight-quote h2 {

            color: #fff;

            font-size: 26px;

            line-height: 1.0;

            margin-bottom: 25px;

            font-weight: 800;

        }

        .mou-highlight-quote::before {

            content: "“";

            position: absolute;

            right: 18px;
            top: -45px;

            font-size: 190px;

            color: rgba(255, 255, 255, .06);

            font-family: Georgia;

            line-height: 1;

        }

        .mou-highlight-quote p {

            color: #fff;

            font-size: 18px;

            line-height: 1.95;

            margin: 0;

            position: relative;

            z-index: 2;

        }

        .mou-highlight-quote ol li {

            color: #fff;

            font-size: 18px;

            line-height: 1.95;

            margin: 0;

            position: relative;

            z-index: 2;

        }



        /*=========================================================
                Officials Section
=========================================================*/

        .mou-officials-section {

            padding: 0 0 100px;

            background: #f7f7f7;

        }

        .mou-officials-card {

            position: relative;

            background: #fff;

            border-radius: 26px;

            padding: 50px 45px;

            box-shadow:
                0 18px 45px rgba(0, 0, 0, .07);

            overflow: hidden;

        }

        .mou-officials-card::before {

            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            border-radius: 50%;

            right: -120px;
            top: -120px;

            background: rgba(201, 153, 52, .08);

        }

        .mou-officials-card::after {

            content: "";

            position: absolute;

            width: 120px;
            height: 120px;

            border-radius: 50%;

            left: -50px;
            bottom: -50px;

            background: rgba(8, 39, 95, .05);

        }

        .mou-officials-card p {

            position: relative;

            z-index: 2;

            color: #555;

            font-size: 18px;

            line-height: 1.9;

            margin: 0;

        }



        /*=========================================================
                    Hover
=========================================================*/

        .mou-content-card,
        .mou-officials-card {

            transition: .35s;

        }

        .mou-content-card:hover,
        .mou-officials-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 25px 55px rgba(0, 0, 0, .1);

        }



        /*=========================================================
                Tablet
=========================================================*/

        @media (max-width:991px) {

            .mou-intro-section {

                padding: 70px 0 50px;

            }

            .mou-image-layout {

                padding: 0 50px 45px 0;

                margin-bottom: 45px;

            }

            .mou-image-main img {

                height: 430px;

            }

            .mou-image-secondary {

                width: 200px;

            }

            .mou-image-secondary img {

                height: 180px;

            }

            .mou-content-wrapper {

                padding-left: 0;

            }

            .mou-content-wrapper h2 {

                font-size: 36px;

            }

            .mou-content-wrapper p {

                font-size: 16px;

            }

            .mou-content-card,
            .mou-officials-card {

                padding: 40px 32px;

            }

            .mou-content-card p,
            .mou-officials-card p,
            .mou-highlight-quote p {

                font-size: 16px;

                line-height: 1.85;

            }

            .mou-highlight-quote {

                padding: 34px;

            }

        }



        /*=========================================================
                Mobile
=========================================================*/

        @media (max-width:767px) {

            .mou-intro-section {

                padding: 55px 0 40px;

            }

            .mou-image-layout {

                padding: 0;

            }

            .mou-image-main {

                margin-bottom: 18px;

            }

            .mou-image-main img {

                height: 260px;

            }

            .mou-image-secondary {

                position: relative;

                width: 100%;

                right: auto;

                bottom: auto;

                padding: 6px;

            }

            .mou-image-secondary img {

                height: 210px;

            }

            .mou-content-wrapper {

                margin-top: 35px;

            }

            .mou-content-wrapper h2 {

                font-size: 28px;

            }

            .mou-content-wrapper p {

                font-size: 15px;

                line-height: 1.8;

            }

            .mou-content-card,
            .mou-officials-card {

                padding: 28px 22px;

                border-radius: 18px;

            }

            .mou-content-card::before {

                display: none;

            }

            .mou-highlight-quote {

                padding: 28px 22px;

                border-radius: 18px;

            }

            .mou-highlight-quote::before {

                font-size: 120px;

                top: -20px;

            }

            .mou-content-card p,
            .mou-officials-card p,
            .mou-highlight-quote p {

                font-size: 15px;

                line-height: 1.8;

                margin-bottom: 24px;

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
            <h1 class="pg-hero-title"> Royal Global University Becomes the First University <br> in North East India to
                Sign Landmark MoU with the Indian Army</h1>
            <div class="pg-hero-breadcrumb">
                MOU / Royal Global University Becomes the First University in North East India to Sign Landmark MoU with
                the Indian Army
            </div>
        </div>

    </section>


    <section class="mou-intro-section">

        <div class="container">

            <!-- Partnership Logos -->

            <div class="row">

                <div class="col-12">

                    <div class="mou-partnership-frame">
                        <div class="mou-partnership">

                            <div class="mou-brand-card">
                                <img src="new-web/assets/img/mou/indian-army/logo.png" alt="Nagaland Police">

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

                </div>

            </div>

            <!-- Intro -->

            <div class="row align-items-center">

                <!-- Left Images -->

                <div class="col-lg-5">

                    <div class="mou-image-layout">

                        <div class="mou-image-main">
                            <img src="new-web/assets/img/mou/indian-army/1.jpg" alt="">
                        </div>

                        <div class="mou-image-secondary">
                            <img src="new-web/assets/img/mou/indian-army/2.jpg" alt="">
                        </div>

                    </div>

                </div>

                <!-- Right Content -->

                <div class="col-lg-7">

                    <div class="mou-content-wrapper">

                        <h2>
                            Royal Global University Becomes the First University in North East India to Sign Landmark
                            MoU with the Indian Army
                        </h2>

                        <p>
                            In a historic milestone, The Assam Royal Global University (RGU) has become the first
                            university in North East India to sign a landmark Memorandum of Understanding (MoU) with the
                            Indian Army, reaffirming its unwavering commitment to nation-building through education.
                            <br><br>
                            This pioneering collaboration reflects the University's vision of extending quality higher
                            education to the brave men and women who serve the nation, as well as to their families. By
                            fostering meaningful partnerships with the armed forces, RGU continues to create
                            opportunities that honour service, sacrifice, and excellence.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="mou-content-section">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-12">

                    <div class="mou-content-card">

                        <h2>
                            Empowering the Families of Our Heroes
                        </h2>

                        <p>
                            As part of this landmark initiative, the University has introduced two dedicated scholarship
                            programmes designed to support the educational aspirations of defence personnel and their
                            families:
                        </p>


                        <blockquote class="mou-highlight-quote">

                            <h2>
                                Royal Shaurya Scholarship
                            </h2>

                            <p>
                                The Royal Shaurya Scholarship offers 100% scholarship support to the families of martyrs
                                and gallantry awardees, recognising their immense sacrifice and ensuring that their
                                legacy is honoured through access to quality higher education.

                            </p>

                            <!-- <ol>
                                <li>Police personnel</li>
                                <li>Ex-servicemen</li>
                                <li>Defence personnel</li>
                                <li>Families of serving uniformed personnel</li>
                                <li>Families of martyrs and bravehearts who have made the ultimate sacrifice in service
                                    to the nation</li>
                            </ol> -->

                            <h2 style="padding-top: 20px;">
                                Royal Suraksha Scholarship
                            </h2>

                            <p>
                                The Royal Suraksha Scholarship provides 50% tuition fee support to the wards of serving
                                and retired Indian Army personnel, enabling deserving students to pursue their academic
                                ambitions in a nurturing and future-ready learning environment.
                            </p>

                        </blockquote>

                        <h2>
                            A Commitment Beyond Education
                        </h2>

                        <p>
                            The collaboration between Royal Global University and the Indian Army is more than a formal
                            agreement—it is a tribute to the courage, dedication, and selfless service of India's armed
                            forces. Through this partnership, the University reinforces its commitment to creating a
                            positive social impact by making education more accessible to those who have contributed
                            immensely to the nation.
                        </p>

                        <p>
                            As RGU continues to build meaningful collaborations, this landmark MoU stands as a symbol of
                            its dedication to empowering future generations through knowledge, opportunity, and service.
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection