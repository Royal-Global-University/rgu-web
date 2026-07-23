@extends('frontend/new-master')
@section('title', 'RGU Recruitment 2025: Join Our Faculty & Staff Team, Apply Now!')
@section('meta_description', 'Hiring Faculty and Staff for 2025! Explore all current academic & administrative vacancies at RGU, Guwahati. View job details and apply directly through our official portal')
@section('meta_keywords', 'RGU Job portal')
@section('content')
    <style>

        .rgu-jb-hero {
            position: relative;
            padding: 70px 20px;
        }

        .rgu-jb-hero * {
            box-sizing: border-box;
        }


        /* =========================================================
   MAIN BOX
========================================================= */

        .rgu-jb-hero-box {
            position: relative;
            overflow: hidden;

            border-radius: 42px;

            background: #fffdf9;

            border: 1px solid rgba(140, 100, 70, 0.08);

            box-shadow:
                0 10px 40px rgba(70, 45, 25, 0.08),
                0 30px 80px rgba(70, 45, 25, 0.06);
        }


        /* Make both columns equal height */

        .rgu-jb-hero-box>.row {
            align-items: stretch !important;
        }

        .rgu-jb-hero-box>.row>[class*="col-"] {
            display: flex;
        }


        /* =========================================================
   LEFT SIDE
========================================================= */

        .rgu-jb-left {
            position: relative;
            z-index: 2;

            width: 100%;
            min-height: 600px;

            display: flex;
            flex-direction: column;
            justify-content: center;

            padding: 70px 65px;

            background: #fffdf9;
        }


        /* Decorative glow */

        .rgu-jb-left::before {
            content: "";

            position: absolute;

            width: 450px;
            height: 450px;

            top: -220px;
            left: -180px;

            border-radius: 50%;

            background: radial-gradient(circle,
                    rgba(196, 128, 79, 0.12),
                    transparent 70%);

            pointer-events: none;
        }


        /* =========================================================
   LOGO
========================================================= */

        .rgu-jb-logo {
            position: relative;
            z-index: 2;

            width: 280px;
            max-width: 100%;

            height: auto;

            margin-bottom: 40px;
        }


        /* =========================================================
   MAIN TITLE
========================================================= */

        .rgu-jb-title {
            position: relative;
            z-index: 2;

            max-width: 650px;

            margin: 0 0 30px;

            color: #8d3d17;

            font-size: clamp(3rem, 4vw, 4.3rem);

            font-weight: 800;

            line-height: 1.08;

            letter-spacing: -1px;
        }


        /* =========================================================
   DESCRIPTION
========================================================= */

        .rgu-jb-subtitle {
            position: relative;
            z-index: 2;

            max-width: 680px;

            color: #5b4636;

            font-size: 1.8rem;

            font-weight: 500;

            line-height: 1.9;

            text-align: justify;
        }


        /* =========================================================
   RIGHT SIDE
========================================================= */

        .rgu-jb-right-panel {
            position: relative;

            width: 100%;
            min-height: 600px;

            overflow: hidden;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 55px;

            background: linear-gradient(135deg,
                    #6b4b37 0%,
                    #4a3427 100%);
        }


        /* Decorative glow - top */

        .rgu-jb-right-panel::before {
            content: "";

            position: absolute;

            width: 650px;
            height: 650px;

            top: -320px;
            right: -280px;

            border-radius: 50%;

            background: radial-gradient(circle,
                    rgba(255, 255, 255, 0.08),
                    transparent 70%);

            pointer-events: none;
        }


        /* Decorative glow - bottom */

        .rgu-jb-right-panel::after {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            bottom: -110px;
            left: -90px;

            border-radius: 50%;

            background: radial-gradient(circle,
                    rgba(214, 142, 84, 0.35),
                    transparent 72%);

            pointer-events: none;
        }


        /* =========================================================
   VACANCY CARD
========================================================= */

        .rgu-jb-vacancy-box {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 520px;

            padding: 50px 42px;

            text-align: center;

            border-radius: 36px;

            background: rgba(255, 250, 245, 0.95);

            border: 1px solid rgba(255, 255, 255, 0.4);

            box-shadow:
                0 10px 35px rgba(0, 0, 0, 0.12),
                0 25px 60px rgba(0, 0, 0, 0.08);
        }


        /* =========================================================
   OTHER VACANCIES TITLE
========================================================= */

        .rgu-jb-vacancy-box h2 {
            margin: 0 0 22px;

            color: #3f2b20;

            font-size: clamp(2.5rem, 3.5vw, 3.5rem);

            font-weight: 800;

            line-height: 1.1;
        }


        /* =========================================================
   VACANCY TEXT
========================================================= */

        .rgu-jb-vacancy-box p {
            margin: 0 0 25px;

            color: #6a503d;

            font-size: 1.2rem;

            font-weight: 600;

            line-height: 1.7;
        }


        /* =========================================================
   APPLY BUTTON
========================================================= */

        .rgu-jb-vacancy-btn {
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 18px 25px;

            margin-bottom: 28px;

            border-radius: 18px;

            background: linear-gradient(135deg,
                    #c26e42,
                    #94411d);

            color: #ffffff !important;

            font-size: 1.15rem;

            font-weight: 700;

            line-height: 1.4;

            text-decoration: none !important;

            box-shadow:
                0 12px 30px rgba(148, 65, 29, 0.24);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .rgu-jb-vacancy-btn:hover {
            color: #ffffff !important;

            transform: translateY(-4px);

            box-shadow:
                0 18px 40px rgba(148, 65, 29, 0.34);
        }


        /* =========================================================
   QR HEADING
========================================================= */

        .rgu-jb-vacancy-box h4 {
            margin: 0 0 22px;

            color: #5d4736;

            font-size: 1.15rem;

            font-weight: 700;

            line-height: 1.5;
        }


        /* =========================================================
   QR CODE
========================================================= */

        .rgu-jb-vacancy-box img {
            display: block;

            width: 230px;
            max-width: 100%;

            height: auto;

            margin: 0 auto;

            padding: 5px;

            border-radius: 18px;

            background: #ffffff;

            box-shadow:
                0 12px 35px rgba(0, 0, 0, 0.14);
        }


        /* =========================================================
   TABLET
========================================================= */

        @media (max-width: 991px) {

            .rgu-jb-hero {
                padding: 50px 20px;
            }

            .rgu-jb-hero-box {
                border-radius: 32px;
            }

            .rgu-jb-left {
                min-height: auto;

                padding: 55px 40px;
            }

            .rgu-jb-title {
                font-size: 3.2rem;
            }

            .rgu-jb-subtitle {
                font-size: 1.15rem;
            }

            .rgu-jb-right-panel {
                min-height: auto;

                padding: 50px 35px;
            }

        }


        /* =========================================================
   MOBILE
========================================================= */

        @media (max-width: 767px) {

            .rgu-jb-hero {
                padding: 35px 12px;
            }

            .rgu-jb-hero-box {
                border-radius: 26px;
            }

            .rgu-jb-left {
                padding: 35px 24px 40px;
            }

            .rgu-jb-logo {
                width: 210px;

                margin-bottom: 28px;
            }

            .rgu-jb-title {
                font-size: 2.5rem;

                line-height: 1.12;

                margin-bottom: 24px;
            }

            .rgu-jb-subtitle {
                font-size: 1.05rem;

                line-height: 1.8;

                text-align: left;
            }

            .rgu-jb-right-panel {
                padding: 28px 20px;
            }

            .rgu-jb-vacancy-box {
                padding: 32px 22px;

                border-radius: 24px;
            }

            .rgu-jb-vacancy-box h2 {
                font-size: 2.35rem;
            }

            .rgu-jb-vacancy-box p {
                font-size: 1.05rem;
            }

            .rgu-jb-vacancy-btn {
                padding: 17px 20px;

                font-size: 1.05rem;

                border-radius: 15px;
            }

            .rgu-jb-vacancy-box h4 {
                font-size: 1.05rem;
            }

            .rgu-jb-vacancy-box img {
                width: 190px;
            }

        }


        /* =========================================================
   SMALL MOBILE
========================================================= */

        @media (max-width: 480px) {

            .rgu-jb-left {
                padding: 30px 20px 35px;
            }

            .rgu-jb-logo {
                width: 185px;
            }

            .rgu-jb-title {
                font-size: 2.15rem;
            }

            .rgu-jb-subtitle {
                font-size: 1rem;
            }

            .rgu-jb-right-panel {
                padding: 20px 15px;
            }

            .rgu-jb-vacancy-box {
                padding: 28px 18px;
            }

            .rgu-jb-vacancy-box h2 {
                font-size: 2.05rem;
            }

            .rgu-jb-vacancy-box img {
                width: 175px;
            }

        }
    </style>

    <style>


        .rgu-jb-wrapper {
            position: relative;
            width: 100%;
        }

        .rgu-jb-wrapper *,
        .rgu-jb-wrapper *::before,
        .rgu-jb-wrapper *::after {
            box-sizing: border-box;
        }

        .rgu-jb-wrapper img {
            max-width: 100%;
            display: block;
        }

        .rgu-jb-wrapper a {
            text-decoration: none;
            transition: all .3s ease;
        }


        /* =========================================================
   JOIN RGU / OTHER VACANCIES SECTION
========================================================= */

        .rgu-jb-wrapper .rgu-jb-hero {
            position: relative;
            padding: 80px 20px 60px;
        }

        .rgu-jb-wrapper .rgu-jb-hero-box {
            position: relative;

            overflow: hidden;

            border-radius: 42px;

            background: rgba(255, 253, 249, .95);

            border: 1px solid rgba(140, 100, 70, .08);

            box-shadow:
                0 10px 40px rgba(70, 45, 25, .08),
                0 30px 80px rgba(70, 45, 25, .06);

            backdrop-filter: blur(10px);
        }


        /* DECORATIVE BACKGROUND */

        .rgu-jb-wrapper .rgu-jb-hero-box::before {
            content: "";

            position: absolute;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(196, 128, 79, .12),
                    transparent 70%);

            top: -220px;
            left: -180px;
        }

        .rgu-jb-wrapper .rgu-jb-hero-box::after {
            content: "";

            position: absolute;

            width: 400px;
            height: 400px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(120, 82, 54, .08),
                    transparent 70%);

            bottom: -180px;
            right: -120px;
        }


        /* =========================================================
   LEFT SIDE
========================================================= */

        .rgu-jb-wrapper .rgu-jb-left {
            position: relative;
            z-index: 2;

            padding: 75px;
        }

        .rgu-jb-wrapper .rgu-jb-logo {
            width: 280px;

            margin-bottom: 40px;
        }


        /* MAIN TITLE */

        .rgu-jb-wrapper .rgu-jb-title {
            font-size: clamp(3rem, 4.5vw, 4.5rem);

            line-height: 1.08;

            font-weight: 800;

            color: #8d3d17;

            margin: 0 0 35px;

            letter-spacing: -.5px;
        }


        /* DESCRIPTION */

        .rgu-jb-wrapper .rgu-jb-subtitle {
            color: #5b4636;

            font-size: 1.3rem;

            line-height: 2;

            font-weight: 500;

            text-align: justify;
        }


        /* =========================================================
   RIGHT SIDE
========================================================= */

        .rgu-jb-wrapper .rgu-jb-right-panel {
            position: relative;

            min-height: 100%;

            overflow: hidden;

            padding: 55px;

            display: flex;

            align-items: center;
            justify-content: center;

            background:
                linear-gradient(135deg,
                    #6b4b37 0%,
                    #4a3427 100%);
        }


        /* RIGHT DECORATION */

        .rgu-jb-wrapper .rgu-jb-right-panel::before {
            content: "";

            position: absolute;

            width: 650px;
            height: 650px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(255, 255, 255, .08),
                    transparent 70%);

            top: -320px;
            right: -280px;
        }

        .rgu-jb-wrapper .rgu-jb-right-panel::after {
            content: "";

            position: absolute;

            width: 260px;
            height: 260px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(214, 142, 84, .35),
                    transparent 72%);

            bottom: -100px;
            left: -80px;
        }


        /* =========================================================
   OTHER VACANCIES BOX
========================================================= */

        .rgu-jb-wrapper .rgu-jb-vacancy-box {
            position: relative;

            z-index: 2;

            width: 100%;
            max-width: 520px;

            padding: 50px 40px;

            border-radius: 36px;

            text-align: center;

            background: rgba(255, 250, 245, .92);

            border: 1px solid rgba(255, 255, 255, .4);

            box-shadow:
                0 10px 35px rgba(0, 0, 0, .12),
                0 25px 60px rgba(0, 0, 0, .08);

            backdrop-filter: blur(16px);
        }


        /* VACANCY TITLE */

        .rgu-jb-wrapper .rgu-jb-vacancy-box h2 {
            color: #3f2b20;

            font-size: clamp(2.8rem, 4vw, 3.8rem);

            line-height: 1.1;

            font-weight: 800;

            margin: 0 0 28px;
        }


        /* VACANCY DESCRIPTION */

        .rgu-jb-wrapper .rgu-jb-vacancy-box p {
            color: #6a503d;

            font-size: 1.3rem;

            line-height: 1.8;

            font-weight: 600;

            margin: 0 0 26px;
        }


        /* =========================================================
   APPLY / REGISTER BUTTON
========================================================= */

        .rgu-jb-wrapper .rgu-jb-vacancy-btn {
            width: 100%;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 20px 26px;

            border-radius: 18px;

            background:
                linear-gradient(135deg,
                    #c26e42,
                    #94411d);

            color: #ffffff;

            font-size: 1.2rem;

            font-weight: 700;

            letter-spacing: .3px;

            box-shadow:
                0 12px 30px rgba(148, 65, 29, .24);
        }

        .rgu-jb-wrapper .rgu-jb-vacancy-btn:hover {
            transform: translateY(-4px);

            color: #ffffff;

            box-shadow:
                0 18px 40px rgba(148, 65, 29, .34);
        }


        /* =========================================================
   QR CODE AREA
========================================================= */

        .rgu-jb-wrapper .rgu-jb-vacancy-box h4 {
            color: #5d4736;

            font-size: 1.2rem;

            line-height: 1.5;

            font-weight: 700;

            margin: 8px 0 25px;
        }

        .rgu-jb-wrapper .rgu-jb-vacancy-box img {
            width: 240px;

            margin: auto;

            border-radius: 18px;

            border: 5px solid #ffffff;

            box-shadow:
                0 12px 35px rgba(0, 0, 0, .14);
        }
    </style>

    <style>


        .rgu-jb-wrapper .rgu-jb-section {
            position: relative;

            padding: 25px 20px;
        }


        /* =========================================================
   LIVE VACANCY PANEL
========================================================= */

        .rgu-jb-wrapper .rgu-jb-panel {
            position: relative;

            overflow: hidden;

            padding: 60px;

            border-radius: 42px;

            background-color: #FFFCF8;

            box-shadow:
                0 20px 70px rgba(40, 25, 15, .16);
        }


        /* DECORATIVE BACKGROUND */

        .rgu-jb-wrapper .rgu-jb-panel::before {
            content: "";

            position: absolute;

            width: 600px;
            height: 600px;

            border-radius: 50%;

            background:
                radial-gradient(circle,
                    rgba(255, 255, 255, .05),
                    transparent 72%);

            top: -300px;
            right: -260px;
        }


        /* =========================================================
   SECTION HEADING
========================================================= */

        .rgu-jb-wrapper .rgu-jb-head {
            position: relative;

            z-index: 2;

            text-align: center;

            margin-bottom: 55px;
        }


        /* BADGE */

        .rgu-jb-wrapper .rgu-jb-badge {
            display: inline-block;

            padding: 15px 36px;

            margin-bottom: 28px;

            border-radius: 100px;

            background:
                linear-gradient(135deg,
                    #d1814f,
                    #a14a22);

            color: #ffffff;

            font-size: 1.05rem;

            line-height: 1.4;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;

            box-shadow:
                0 12px 30px rgba(161, 74, 34, .3);
        }


        /* SECTION TITLE */

        .rgu-jb-wrapper .rgu-jb-head h2 {
            color: #3d2d21;

            font-size: clamp(2.8rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.15;

            margin: 0;
        }


        /* =========================================================
   VACANCY CARDS
========================================================= */

        .rgu-jb-wrapper .rgu-jb-card {
            position: relative;

            z-index: 2;

            overflow: hidden;

            padding: 38px;

            margin-bottom: 30px;

            border-radius: 32px;

            background: rgb(246, 240, 230);

            border:
                1px solid rgba(255, 255, 255, .08);

            backdrop-filter: blur(14px);

            transition:
                transform .35s ease,
                background .35s ease,
                box-shadow .35s ease;
        }


        /* CARD DECORATION */

        .rgu-jb-wrapper .rgu-jb-card::before {
            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(135deg,
                    rgba(255, 255, 255, .186),
                    transparent);

            pointer-events: none;
        }


        /* CARD HOVER */

        .rgu-jb-wrapper .rgu-jb-card:hover {
            transform: translateY(-6px);

            background:
                rgba(255, 255, 255, .1);

            box-shadow:
                0 18px 45px rgba(0, 0, 0, .18);
        }


        /* =========================================================
   VACANCY CARD TITLE
========================================================= */

        .rgu-jb-wrapper .rgu-jb-card h3 {
            position: relative;

            display: inline-block;

            padding: 16px 26px;

            margin: 0 0 28px;

            border-radius: 16px;

            background:
                linear-gradient(135deg,
                    #c87443,
                    #9c431c);

            color: #ffffff;

            font-size: 1.75rem;

            font-weight: 700;

            line-height: 1.4;

            box-shadow:
                0 10px 28px rgba(156, 67, 28, .22);
        }


        /* =========================================================
   VACANCY CARD TEXT
========================================================= */

        .rgu-jb-wrapper .rgu-jb-card p {
            position: relative;

            color: #333333;

            font-size: 1.3rem;

            line-height: 1.95;

            margin: 0 0 18px;
        }

        .rgu-jb-wrapper .rgu-jb-card p:last-child {
            margin-bottom: 0;
        }


        /* HIGHLIGHT TEXT */

        .rgu-jb-wrapper .rgu-jb-highlight {
            color: #333333 !important;

            font-size: 2.0rem;

            font-weight: 700;
        }


        /* =========================================================
   DEAN DOMAIN LIST
========================================================= */

        .rgu-jb-wrapper .rgu-jb-domains {
            position: relative;

            margin: 28px 0;

            padding-left: 28px;
        }

        .rgu-jb-wrapper .rgu-jb-domains li {
            color: #333333;

            font-size: 1.8rem;

            line-height: 1.65;

            margin-bottom: 10px;

            padding-left: 4px;
        }

        .rgu-jb-wrapper .rgu-jb-domains li:last-child {
            margin-bottom: 0;
        }


        /* =========================================================
   TABLET
========================================================= */

        @media(max-width:991px) {

            .rgu-jb-wrapper .rgu-jb-panel {
                padding: 40px;
            }

            .rgu-jb-wrapper .rgu-jb-head h2 {
                font-size: 3rem;
            }

            .rgu-jb-wrapper .rgu-jb-card h3 {
                font-size: 1.55rem;
            }

            .rgu-jb-wrapper .rgu-jb-card p {
                font-size: 1.18rem;
            }

            .rgu-jb-wrapper .rgu-jb-domains li {
                font-size: 1.15rem;
            }

        }


        /* =========================================================
   MOBILE
========================================================= */

        @media(max-width:768px) {

            .rgu-jb-wrapper .rgu-jb-section {
                padding: 20px 12px;
            }

            .rgu-jb-wrapper .rgu-jb-panel {
                padding: 22px;

                border-radius: 28px;
            }

            .rgu-jb-wrapper .rgu-jb-head {
                margin-bottom: 35px;
            }

            .rgu-jb-wrapper .rgu-jb-badge {
                padding: 12px 24px;

                font-size: .9rem;

                margin-bottom: 20px;
            }

            .rgu-jb-wrapper .rgu-jb-head h2 {
                font-size: 2.3rem;

                line-height: 1.2;
            }

            .rgu-jb-wrapper .rgu-jb-card {
                padding: 24px;

                border-radius: 24px;

                margin-bottom: 22px;
            }

            .rgu-jb-wrapper .rgu-jb-card h3 {
                width: 100%;

                padding: 14px 18px;

                font-size: 1.3rem;

                line-height: 1.45;

                text-align: center;

                margin-bottom: 22px;
            }

            .rgu-jb-wrapper .rgu-jb-card p {
                font-size: 1.08rem;

                line-height: 1.85;
            }

            .rgu-jb-wrapper .rgu-jb-highlight {
                font-size: 1.9rem;
            }

            .rgu-jb-wrapper .rgu-jb-domains {
                padding-left: 22px;

                margin: 22px 0;
            }

            .rgu-jb-wrapper .rgu-jb-domains li {
                font-size: 1.05rem;

                line-height: 1.7;

                margin-bottom: 8px;
            }

        }
    </style>

    <style>


        .rgu-jb-wrapper .rgu-jb-other-wrap {
            position: relative;

            padding: 55px;

            border-radius: 42px;

            background:
                rgba(255, 253, 249, .94);

            border:
                1px solid rgba(120, 90, 70, .08);

            box-shadow:
                0 18px 55px rgba(60, 35, 20, .08);
        }


        /* SECTION HEADING */

        .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head {
            margin-bottom: 50px;
        }

        .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head h2 {
            color: #5d4333;

            font-size: clamp(2.8rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.15;

            margin: 0;
        }


        /* =========================================================
   ADVERTISEMENT CARD
========================================================= */

        .rgu-jb-wrapper .rgu-jb-ad-card {
            position: relative;

            height: 100%;

            overflow: hidden;

            border-radius: 26px;

            cursor: pointer;

            background: #ffffff;

            border:
                1px solid rgba(120, 90, 70, .174);

            box-shadow:
                0 12px 35px rgba(0, 0, 0, .08);

            transition:
                transform .35s ease,
                box-shadow .35s ease;
        }


        /* CARD HOVER */

        .rgu-jb-wrapper .rgu-jb-ad-card:hover {
            transform: translateY(-6px);

            box-shadow:
                0 18px 45px rgba(0, 0, 0, .14);
        }


        /* =========================================================
   ADVERTISEMENT IMAGE
========================================================= */

        .rgu-jb-wrapper .rgu-jb-ad-img {
            display: block;

            width: 100%;
            height: 100%;

            object-fit: contain;

            cursor: pointer;
        }


        /* =========================================================
   LIGHTBOX
========================================================= */

        .rgu-jb-wrapper .rgu-jb-lightbox {
            position: fixed;

            inset: 0;

            z-index: 99999;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 30px;

            background:
                rgba(22, 14, 10, .94);

            opacity: 0;

            visibility: hidden;

            transition:
                opacity .3s ease,
                visibility .3s ease;
        }


        /* ACTIVE LIGHTBOX */

        .rgu-jb-wrapper .rgu-jb-lightbox.active {
            opacity: 1;

            visibility: visible;
        }


        /* =========================================================
   LIGHTBOX IMAGE
========================================================= */

        .rgu-jb-wrapper .rgu-jb-lightbox img {
            display: block;

            width: auto;
            height: auto;

            max-width: 100%;
            max-height: 95vh;

            object-fit: contain;

            border-radius: 24px;

            box-shadow:
                0 20px 70px rgba(0, 0, 0, .5);
        }


        /* =========================================================
   LIGHTBOX CLOSE BUTTON
========================================================= */

        .rgu-jb-wrapper .rgu-jb-close {
            position: absolute;

            top: 20px;
            right: 30px;

            z-index: 2;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #ffffff;

            font-size: 4rem;

            font-weight: 300;

            line-height: 1;

            cursor: pointer;

            transition:
                transform .3s ease,
                opacity .3s ease;
        }

        .rgu-jb-wrapper .rgu-jb-close:hover {
            transform: scale(1.1);

            opacity: .8;
        }


        /* =========================================================
   TABLET
========================================================= */

        @media(max-width:991px) {

            .rgu-jb-wrapper .rgu-jb-other-wrap {
                padding: 40px;
            }

            .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head h2 {
                font-size: 3rem;
            }

        }


        /* =========================================================
   MOBILE
========================================================= */

        @media(max-width:768px) {

            .rgu-jb-wrapper .rgu-jb-other-wrap {
                padding: 24px;

                border-radius: 28px;
            }

            .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head {
                margin-bottom: 32px;
            }

            .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head h2 {
                font-size: 2.3rem;

                line-height: 1.2;
            }

            .rgu-jb-wrapper .rgu-jb-ad-card {
                border-radius: 20px;
            }

            .rgu-jb-wrapper .rgu-jb-lightbox {
                padding: 18px;
            }

            .rgu-jb-wrapper .rgu-jb-lightbox img {
                max-height: 90vh;

                border-radius: 16px;
            }

            .rgu-jb-wrapper .rgu-jb-close {
                top: 10px;
                right: 20px;

                font-size: 3rem;
            }

        }
    </style>

    <style>


        @media(max-width:991px) {

            /* JOIN RGU SECTION */

            .rgu-jb-wrapper .rgu-jb-hero {
                padding: 65px 20px 50px;
            }

            .rgu-jb-wrapper .rgu-jb-left {
                padding: 50px 40px;
            }

            .rgu-jb-wrapper .rgu-jb-title {
                font-size: 3.5rem;
            }

            .rgu-jb-wrapper .rgu-jb-subtitle {
                font-size: 1.18rem;
                line-height: 1.9;
            }

            .rgu-jb-wrapper .rgu-jb-right-panel {
                padding: 40px 25px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box {
                max-width: 600px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box h2 {
                font-size: 3rem;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box p {
                font-size: 1.18rem;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-btn {
                font-size: 1.1rem;
            }

        }


        /* =========================================================
   MOBILE
========================================================= */

        @media(max-width:768px) {

            /* -----------------------------------------------------
       JOIN RGU SECTION
    ----------------------------------------------------- */

            .rgu-jb-wrapper .rgu-jb-hero {
                padding: 45px 12px 35px;
            }

            .rgu-jb-wrapper .rgu-jb-hero-box {
                border-radius: 28px;
            }

            .rgu-jb-wrapper .rgu-jb-left {
                padding: 35px 24px;
            }

            .rgu-jb-wrapper .rgu-jb-logo {
                width: 220px;
                margin-bottom: 28px;
            }

            .rgu-jb-wrapper .rgu-jb-title {
                font-size: 2.6rem;
                line-height: 1.12;

                margin-bottom: 25px;
            }

            .rgu-jb-wrapper .rgu-jb-subtitle {
                font-size: 1.08rem;
                line-height: 1.85;

                text-align: left;
            }


            /* RIGHT PANEL */

            .rgu-jb-wrapper .rgu-jb-right-panel {
                padding: 24px 18px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box {
                max-width: 100%;

                padding: 32px 22px;

                border-radius: 24px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box h2 {
                font-size: 2.5rem;
                line-height: 1.15;

                margin-bottom: 22px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box p {
                font-size: 1.08rem;
                line-height: 1.7;

                margin-bottom: 22px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-btn {
                padding: 17px 18px;

                font-size: 1.05rem;

                border-radius: 16px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box h4 {
                font-size: 1.05rem;

                margin: 10px 0 22px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box img {
                width: 190px;

                border-radius: 16px;
            }


            /* -----------------------------------------------------
       LIVE VACANCY SECTION
    ----------------------------------------------------- */

            .rgu-jb-wrapper .rgu-jb-section {
                padding: 20px 12px;
            }

            .rgu-jb-wrapper .rgu-jb-panel {
                padding: 24px;

                border-radius: 28px;
            }

            .rgu-jb-wrapper .rgu-jb-head {
                margin-bottom: 35px;
            }

            .rgu-jb-wrapper .rgu-jb-badge {
                padding: 12px 24px;

                font-size: .95rem;

                margin-bottom: 20px;
            }

            .rgu-jb-wrapper .rgu-jb-head h2 {
                font-size: 2.4rem;
                line-height: 1.2;
            }


            /* VACANCY CARDS */

            .rgu-jb-wrapper .rgu-jb-card {
                padding: 25px;

                margin-bottom: 22px;

                border-radius: 24px;
            }

            .rgu-jb-wrapper .rgu-jb-card h3 {
                width: 100%;

                padding: 15px 18px;

                margin-bottom: 22px;

                font-size: 1.35rem;
                line-height: 1.45;

                text-align: center;
            }

            .rgu-jb-wrapper .rgu-jb-card p {
                font-size: 1.08rem;
                line-height: 1.85;
            }

            .rgu-jb-wrapper .rgu-jb-highlight {
                font-size: 1.9rem;
            }

            .rgu-jb-wrapper .rgu-jb-domains {
                margin: 22px 0;

                padding-left: 22px;
            }

            .rgu-jb-wrapper .rgu-jb-domains li {
                font-size: 1.08rem;
                line-height: 1.7;

                margin-bottom: 8px;
            }


            /* -----------------------------------------------------
       OTHER RECRUITMENT ADVERTISEMENTS
    ----------------------------------------------------- */

            .rgu-jb-wrapper .rgu-jb-other-wrap {
                padding: 24px;

                border-radius: 28px;
            }

            .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head {
                margin-bottom: 32px;
            }

            .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head h2 {
                font-size: 2.4rem;
                line-height: 1.2;
            }

            .rgu-jb-wrapper .rgu-jb-ad-card {
                border-radius: 20px;
            }


            /* -----------------------------------------------------
       LIGHTBOX
    ----------------------------------------------------- */

            .rgu-jb-wrapper .rgu-jb-lightbox {
                padding: 18px;
            }

            .rgu-jb-wrapper .rgu-jb-lightbox img {
                max-height: 90vh;

                border-radius: 16px;
            }

            .rgu-jb-wrapper .rgu-jb-close {
                top: 10px;
                right: 18px;

                font-size: 3.2rem;
            }

        }


        /* =========================================================
   SMALL MOBILE
========================================================= */

        @media(max-width:480px) {

            /* JOIN RGU */

            .rgu-jb-wrapper .rgu-jb-hero {
                padding-left: 10px;
                padding-right: 10px;
            }

            .rgu-jb-wrapper .rgu-jb-left {
                padding: 30px 20px;
            }

            .rgu-jb-wrapper .rgu-jb-logo {
                width: 190px;
            }

            .rgu-jb-wrapper .rgu-jb-title {
                font-size: 2.25rem;
            }

            .rgu-jb-wrapper .rgu-jb-subtitle {
                font-size: 1.05rem;
            }


            /* OTHER VACANCIES */

            .rgu-jb-wrapper .rgu-jb-right-panel {
                padding: 18px 14px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box {
                padding: 28px 18px;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box h2 {
                font-size: 2.2rem;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box p {
                font-size: 1.05rem;
            }

            .rgu-jb-wrapper .rgu-jb-vacancy-box img {
                width: 175px;
            }


            /* LIVE VACANCIES */

            .rgu-jb-wrapper .rgu-jb-section {
                padding-left: 10px;
                padding-right: 10px;
            }

            .rgu-jb-wrapper .rgu-jb-panel {
                padding: 20px;

                border-radius: 24px;
            }

            .rgu-jb-wrapper .rgu-jb-head h2 {
                font-size: 2.1rem;
            }

            .rgu-jb-wrapper .rgu-jb-card {
                padding: 22px 18px;
            }

            .rgu-jb-wrapper .rgu-jb-card h3 {
                font-size: 1.8rem;
            }

            .rgu-jb-wrapper .rgu-jb-card p,
            .rgu-jb-wrapper .rgu-jb-domains li {
                font-size: 1.05rem;
            }


            /* OTHER ADVERTISEMENTS */

            .rgu-jb-wrapper .rgu-jb-other-wrap {
                padding: 20px;

                border-radius: 24px;
            }

            .rgu-jb-wrapper .rgu-jb-other-wrap .rgu-jb-head h2 {
                font-size: 2.1rem;
            }

        }


        /* =========================================================
   FINAL SAFETY / CLEANUP
========================================================= */

        /* Prevent long text from breaking the layout */

        .rgu-jb-wrapper h1,
        .rgu-jb-wrapper h2,
        .rgu-jb-wrapper h3,
        .rgu-jb-wrapper h4,
        .rgu-jb-wrapper p,
        .rgu-jb-wrapper li {
            overflow-wrap: break-word;
        }


        /* Keep images responsive */

        .rgu-jb-wrapper img {
            max-width: 100%;
        }


        /* Remove unwanted bottom margin from final vacancy card */

        .rgu-jb-wrapper .rgu-jb-panel .rgu-jb-card:last-child {
            margin-bottom: 0;
        }


        /* Better vertical alignment for Bootstrap rows */

        .rgu-jb-wrapper .row {
            position: relative;
        }


        /* Advertisement images remain fully visible */

        .rgu-jb-wrapper .rgu-jb-ad-img {
            width: 100%;
            height: auto;
        }


        /* Keep lightbox above RGU header / navigation */

        .rgu-jb-wrapper .rgu-jb-lightbox {
            z-index: 99999;
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/advisory-committee-nss/cover.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Jobs & Vacancies</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Preface / Jobs & Vacancies
            </div>
        </div>

    </section>


    <section class="rgu-jb-hero">

        <div class="container">

            <div class="rgu-jb-hero-box">

                <div class="row g-0 align-items-center">

                    <!-- LEFT -->

                    <div class="col-lg-6">

                        <div class="rgu-jb-left">

                            <img class="rgu-jb-logo" src="https://www.rgu.ac/mobile-assets/index/logo-dark.png"
                                alt="RGU Logo">

                            <h1 class="rgu-jb-title">
                                Join The Assam Royal Global University
                            </h1>

                            <div class="rgu-jb-subtitle">

                                The Assam Royal Global University, one of India’s premium
                                private universities, has been a leadership platform since
                                2017, connecting industries, entrepreneurs, and youth.

                                RGU fosters an environment where education, employment,
                                and entrepreneurship thrive through collaboration with
                                corporates, professionals, and academic institutes.

                            </div>

                        </div>

                    </div>


                    <!-- RIGHT -->

                    <div class="col-lg-6">

                        <div class="rgu-jb-right-panel">

                            <div class="rgu-jb-vacancy-box">

                                <h2>
                                    Other Vacancies
                                </h2>

                                <p>
                                    To apply/register, click the link below -
                                </p>

                                <a href="https://rgu.renocampus.com/activeOpenings" target="_blank"
                                    class="rgu-jb-vacancy-btn">
                                    Apply / Register Now
                                </a>

                                <h4>
                                    Or scan the QR code below -
                                </h4>

                                <img src="https://www.rgu.ac//new-web/assets/img/jobs.jpeg" alt="QR Code">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <div class="rgu-jb-wrapper">

        <!-- =====================================
         LIVE VACANCIES
    ====================================== -->

        <section class="rgu-jb-section">

            <div class="container">

                <div class="rgu-jb-panel">

                    <!-- SECTION HEAD -->

                    <div class="rgu-jb-head">

                        <span class="rgu-jb-badge">
                            Live Vacancy
                        </span>

                        <h2>
                            Leadership &amp; Global Faculty Positions
                        </h2>

                    </div>


                    <!-- =====================================
                     DEAN FOR SCHOOLS
                ====================================== -->

                    <div class="rgu-jb-card">

                        <h3>
                            Dean for the Schools of:
                        </h3>

                        <ul class="rgu-jb-domains">

                            <li>Architecture</li>

                            <li>Law</li>

                            <li>Psychology</li>

                            <li>Humanities &amp; Social Sciences</li>

                            <li>Hotel Management</li>

                            <li>Engineering (Computer Science)</li>

                            <li>Bioscience / Life Sciences</li>

                        </ul>

                        <p class="rgu-jb-highlight">
                            Deans from other domains may also apply.
                        </p>

                        <p>
                            Minimum 15 years of experience in teaching,
                            research and/or academic administration in
                            Universities or Institutions of Higher Education.
                        </p>

                    </div>


                    <!-- =====================================
                     DEAN – RESEARCH & DEVELOPMENT
                ====================================== -->

                    <div class="rgu-jb-card">

                        <h3>
                            Dean – Research &amp; Development
                        </h3>

                        <p>
                            Minimum 15 years of academic experience along
                            with at least 5 years of leadership or
                            administrative experience in research
                            management, innovation, funded projects,
                            and industry-academia collaboration.
                        </p>

                    </div>


                    <!-- =====================================
                     DEAN – STUDENTS' AFFAIRS
                ====================================== -->

                    <div class="rgu-jb-card">

                        <h3>
                            Dean – Students' Affairs
                        </h3>

                        <p>
                            Minimum 10 years of teaching experience
                            with 5 years of relevant administrative
                            experience in student affairs, student welfare,
                            or related leadership roles.
                        </p>

                    </div>


                    <!-- =====================================
                     INTERNATIONAL FACULTY
                ====================================== -->

                    <div class="rgu-jb-card">

                        <h3>
                            International Faculty
                        </h3>

                        <p class="rgu-jb-highlight">
                            Eligibility: As per University norms.
                        </p>

                    </div>

                </div>

            </div>

        </section>
        <!-- =========================================
         OTHER RECRUITMENT ADVERTISEMENTS
    ========================================== -->

        <section class="rgu-jb-section pb-5">

            <div class="container">

                <div class="rgu-jb-other-wrap">

                    <div class="rgu-jb-head mb-5">

                        <span class="rgu-jb-badge">
                            More Opportunities
                        </span>

                        <h2>
                            Other Recruitment Advertisements
                        </h2>

                    </div>


                    <div class="row g-4">

                        <!-- ADVERTISEMENT 1 -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://rgu.ac/mobile-assets/new-jobs-vacancies/EDC-Ad.jpg" class="rgu-jb-ad-img"
                                    alt="Recruitment Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>


                        <!-- ADVERTISEMENT 2 -->

                        <div class="col-lg-6 col-md-6">

                            <div class="rgu-jb-ad-card">

                                <img src="https://rgu.ac/mobile-assets/new-jobs-vacancies/IIC-ad.jpeg" class="rgu-jb-ad-img"
                                    alt="Recruitment Advertisement" onclick="openRGUAd(this.src)">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================
         ADVERTISEMENT LIGHTBOX
    ========================================== -->

        <div class="rgu-jb-lightbox" id="rguJBLightbox">

            <span class="rgu-jb-close" onclick="closeRGUAd()">
                &times;
            </span>

            <img id="rguJBLightboxImg" src="" alt="Recruitment Advertisement">

        </div>

    </div>

@endsection

