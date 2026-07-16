@extends('frontend/new-master')
@section('title', 'RGU Hostel Fees 2025-26: View All Rooms, Cost, and Amenities')
@section('meta_description', 'Hostel Fees for 2025-26 session start from ₹70,000 Annual. View AC/Non-AC room cost, Mess charges, and premium amenities like the gym and 24x7 security.')
@section('meta_keywords', 'Academic calender')
@section('content')
    <style>
        /*==================================================
        HOSTEL INTRO
==================================================*/

        .rghs-intro {

            padding: 90px 0 70px;

            background: #eef3fb;

            position: relative;

            overflow: hidden;

        }

        .rghs-intro::before {

            content: "";

            position: absolute;

            width: 520px;

            height: 520px;

            border-radius: 50%;

            right: -180px;

            top: -180px;

            background: radial-gradient(rgba(35, 69, 123, .05), transparent 70%);

        }

        .rghs-heading {

            max-width: 980px;

            margin: auto;

            text-align: center;

            position: relative;

            z-index: 2;

        }

        .rghs-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 16px;

        }

        .rghs-heading h2 {

            font-family: "Playfair Display", serif;

            color: #23457b;

            font-size: 58px;

            font-weight: 700;

            margin-bottom: 28px;

        }

        .rghs-heading p {

            color: #63748a;

            font-size: 17px;

            line-height: 2;

            margin-bottom: 18px;

        }

        .rghs-heading p:last-child {

            margin-bottom: 0;

        }

        /*======================*/

        @media(max-width:991px) {

            .rghs-intro {

                padding: 70px 0 60px;

            }

            .rghs-heading h2 {

                font-size: 44px;

            }

        }

        @media(max-width:767px) {

            .rghs-intro {

                padding: 55px 0;

            }

            .rghs-heading h2 {

                font-size: 34px;

                line-height: 1.25;

            }

            .rghs-heading p {

                font-size: 15px;

                line-height: 1.9;

            }

        }
    </style>

    <style>
        /*==================================================
        OUR HOSTELS
==================================================*/

        .rghs-hostels {

            background: linear-gradient(180deg, #2f4f88 0%, #0f244d 100%);

            padding: 90px 0;

            border-radius: 70px 70px 0 0;

            position: relative;

            overflow: hidden;

        }

        .rghs-hostels::before {

            content: "";

            position: absolute;

            width: 650px;

            height: 650px;

            border-radius: 50%;

            top: -300px;

            right: -250px;

            background: rgba(255, 255, 255, .03);

        }

        .rghs-hostels::after {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            border-radius: 50%;

            bottom: -250px;

            left: -180px;

            background: rgba(255, 255, 255, .03);

        }

        /*====================================*/

        .rghs-title {

            text-align: center;

            margin-bottom: 70px;

            position: relative;

            z-index: 2;

        }

        .rghs-title h2 {

            color: #fff;

            font-size: 56px;

            font-family: "Playfair Display", serif;

            font-weight: 700;

            margin: 0;

        }

        /*====================================*/

        .rghs-item {

            margin-bottom: 90px;

            position: relative;

            z-index: 2;

        }

        .rghs-item:last-child {

            margin-bottom: 0;

        }

        /*====================================*/

        .rghs-image {

            overflow: hidden;

            border-radius: 28px;

            box-shadow:

                0 18px 45px rgba(0, 0, 0, .22);

        }

        .rghs-image img {

            width: 100%;

            display: block;

            transition: .5s;

        }

        .rghs-item:hover .rghs-image img {

            transform: scale(1.05);

        }

        /*====================================*/

        .rghs-content {

            padding: 20px 15px 20px 40px;

        }

        .flex-lg-row-reverse .rghs-content {

            padding: 20px 40px 20px 15px;

        }

        .rghs-content h3 {

            color: #fff;

            font-size: 48px;

            font-family: "Playfair Display", serif;

            font-weight: 700;

            margin-bottom: 28px;

        }

        .rghs-content p {

            color: rgba(255, 255, 255, .82);

            font-size: 17px;

            line-height: 2;

            margin-bottom: 20px;

        }

        .rghs-content p:last-of-type {

            margin-bottom: 35px;

        }

        /*====================================*/

        .rghs-btn {

            display: inline-block;

            background: #df642d;

            color: #fff;

            text-decoration: none;

            padding: 17px 34px;

            border-radius: 10px;

            font-size: 15px;

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: .4px;

            transition: .35s;

            box-shadow:

                0 12px 30px rgba(223, 100, 45, .25);

        }

        .rghs-btn:hover {

            color: #fff;

            background: #f17840;

            transform: translateY(-4px);

            text-decoration: none;

        }

        /*====================================*/

        @media(max-width:1199px) {

            .rghs-content h3 {

                font-size: 42px;

            }

        }

        /*====================================*/

        @media(max-width:991px) {

            .rghs-hostels {

                padding: 70px 0;

                border-radius: 45px 45px 0 0;

            }

            .rghs-title {

                margin-bottom: 50px;

            }

            .rghs-title h2 {

                font-size: 44px;

            }

            .rghs-item {

                margin-bottom: 70px;

            }

            .rghs-content {

                padding: 35px 0 0;

                text-align: center;

            }

            .flex-lg-row-reverse .rghs-content {

                padding: 35px 0 0;

            }

            .rghs-content h3 {

                font-size: 38px;

            }

        }

        /*====================================*/

        @media(max-width:767px) {

            .rghs-hostels {

                padding: 55px 0;

                border-radius: 30px 30px 0 0;

            }

            .rghs-title h2 {

                font-size: 34px;

            }

            .rghs-item {

                margin-bottom: 55px;

            }

            .rghs-image {

                border-radius: 18px;

            }

            .rghs-content h3 {

                font-size: 30px;

                margin-bottom: 18px;

            }

            .rghs-content p {

                font-size: 15px;

                line-height: 1.9;

            }

            .rghs-btn {

                display: block;

                width: 100%;

                padding: 15px;

                font-size: 14px;

                text-align: center;

            }

        }
    </style>

    <style>
        /*==================================================
        HOSTEL GALLERY
==================================================*/

        .rghg-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .rghg-heading {

            text-align: center;

            margin-bottom: 60px;

        }

        .rghg-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 14px;

        }

        .rghg-heading h2 {

            font-family: "Playfair Display", serif;

            font-size: 56px;

            color: #23457b;

            font-weight: 700;

            margin: 0;

        }

        /*======================*/

        .rghg-grid {

            display: grid;

            grid-template-columns: 2fr 1fr 1fr;

            grid-template-rows: 270px 270px 220px;

            gap: 22px;

        }

        /*======================*/

        .rghg-large {

            grid-column: 1 / 3;

            grid-row: 1 / 3;

        }

        .rghg-item {

            overflow: hidden;

            border-radius: 22px;

            position: relative;

            display: block;

            box-shadow:

                0 18px 45px rgba(20, 42, 82, .08);

        }

        .rghg-item img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

            transition: .55s;

        }

        .rghg-item:hover img {

            transform: scale(1.08);

        }

        .rghg-item::after {

            content: "";

            position: absolute;

            inset: 0;

            background: linear-gradient(to top,
                    rgba(0, 0, 0, .18),
                    transparent 45%);

            opacity: 0;

            transition: .35s;

        }

        .rghg-item:hover::after {

            opacity: 1;

        }

        /*======================*/

        @media(max-width:991px) {

            .rghg-section {

                padding: 70px 0;

            }

            .rghg-heading {

                margin-bottom: 45px;

            }

            .rghg-heading h2 {

                font-size: 42px;

            }

            .rghg-grid {

                grid-template-columns: 1fr 1fr;

                grid-template-rows: auto;

            }

            .rghg-large {

                grid-column: auto;

                grid-row: auto;

                height: 420px;

            }

            .rghg-item {

                height: 260px;

            }

        }

        @media(max-width:767px) {

            .rghg-section {

                padding: 55px 0;

            }

            .rghg-heading h2 {

                font-size: 34px;

            }

            .rghg-grid {

                grid-template-columns: 1fr;

                gap: 18px;

            }

            .rghg-item,

            .rghg-large {

                height: 250px;

                border-radius: 16px;

            }

        }
    </style>

    <style>
        /*==================================================
        HOSTEL FACILITIES
==================================================*/

        .rghf-section {

            padding: 90px 0;

            background: #eef3fb;

            position: relative;

            overflow: hidden;

        }

        .rghf-section::before {

            content: "";

            position: absolute;

            width: 550px;

            height: 550px;

            border-radius: 50%;

            right: -200px;

            top: -200px;

            background: radial-gradient(rgba(35, 69, 123, .05), transparent 70%);

        }

        .rghf-heading {

            text-align: center;

            max-width: 900px;

            margin: 0 auto 70px;

            position: relative;

            z-index: 2;

        }

        .rghf-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 14px;

        }

        .rghf-heading h2 {

            font-family: "Playfair Display", serif;

            font-size: 58px;

            color: #23457b;

            font-weight: 700;

            margin: 0;

        }

        /*====================================*/

        .rghf-card {

            background: #fff;

            border-radius: 24px;

            padding: 40px 30px;

            text-align: center;

            height: 100%;

            margin-bottom: 30px;

            transition: .35s;

            box-shadow:

                0 12px 35px rgba(18, 40, 84, .08);

            border: 1px solid rgba(35, 69, 123, .05);

        }

        .rghf-card:hover {

            transform: translateY(-8px);

            box-shadow:

                0 25px 55px rgba(18, 40, 84, .12);

        }

        /*====================================*/

        .rghf-icon {

            width: 100px;

            height: 100px;

            margin: 0 auto 30px;

            border-radius: 50%;

            background: #f3f7fd;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: .35s;

            border: 1px solid rgba(35, 69, 123, .06);

        }

        .rghf-card:hover .rghf-icon {

            background: #23457b;

            transform: rotate(6deg) scale(1.05);

        }

        .rghf-icon i {

            font-size: 42px;

            color: #23457b;

            transition: .35s;

        }

        .rghf-card:hover .rghf-icon i {

            color: #fff;

        }

        /*====================================*/

        .rghf-card h4 {

            font-family: "Playfair Display", serif;

            font-size: 28px;

            color: #1e355f;

            font-weight: 700;

            margin-bottom: 18px;

            line-height: 1.35;

            min-height: 78px;

        }

        .rghf-card p {

            color: #66788f;

            font-size: 16px;

            line-height: 1.9;

            margin: 0;

        }

        /*====================================*/

        @media(max-width:1199px) {

            .rghf-card {

                padding: 35px 22px;

            }

            .rghf-card h4 {

                font-size: 24px;

                min-height: 70px;

            }

        }

        @media(max-width:991px) {

            .rghf-section {

                padding: 70px 0;

            }

            .rghf-heading {

                margin-bottom: 50px;

            }

            .rghf-heading h2 {

                font-size: 44px;

            }

            .rghf-card h4 {

                min-height: auto;

            }

        }

        @media(max-width:767px) {

            .rghf-section {

                padding: 55px 0;

            }

            .rghf-heading {

                margin-bottom: 40px;

            }

            .rghf-heading h2 {

                font-size: 34px;

                line-height: 1.3;

            }

            .rghf-card {

                padding: 30px 22px;

                border-radius: 18px;

            }

            .rghf-icon {

                width: 82px;

                height: 82px;

                margin-bottom: 20px;

            }

            .rghf-icon i {

                font-size: 34px;

            }

            .rghf-card h4 {

                font-size: 22px;

                margin-bottom: 12px;

            }

            .rghf-card p {

                font-size: 15px;

                line-height: 1.8;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/campus-hostel-life/cover.png'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Hostel Life</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Hostel and Accomodation / Hostel Life
            </div>
        </div>

    </section>

    <section class="rghs-intro">

        <div class="container">

            <div class="rghs-heading">

                <span>Residential Life</span>

                <h2>
                    A Home Away From Home
                </h2>

                <p>
                    The residence halls at Royal Global University are designed to enhance the educational experience by
                    providing students with the comfort and convenience they need to thrive. Nestled within an
                    eco-friendly, green campus, the separate in-house hostels for boys and girls are thoughtfully
                    equipped to support both mental and physical well-being. With a nurturing environment that
                    encourages personal growth, the hostels ensure that every boarder makes the most of their time on
                    campus. Their close proximity to academic buildings fosters continuous interaction between students
                    and faculty members, even during vacations and holidays. Centrally air-conditioned and beautifully
                    clustered, the hostels offer ample opportunities to unwind, connect, and create lasting memories
                    with friends.
                </p>

            </div>

        </div>

    </section>

    <section class="rghs-hostels">

        <div class="container">

            <div class="rghs-title">

                <h2>Our Hostels</h2>

            </div>

            <!--==========================
                HOSTEL 01
        ===========================-->

            <div class="row align-items-center rghs-item">

                <div class="col-lg-6">

                    <div class="rghs-image">

                        <img src="new-web/assets/img/campus-hostel-life/aditya.png" alt="Aditya House" class="img-fluid">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="rghs-content">

                        <h3>Aditya House</h3>

                        <p>

                            The Aditya House is an apartment-style building with
                            world-class rooms that are fully furnished and
                            abundant shared facilities. With a range of room
                            types that cater to different tastes and lifestyles,
                            the house provides the perfect balance of support and
                            independence.

                        </p>

                        <p>

                            The hostel accommodates around 334 students.
                            Premium amenities include high-speed Wi-Fi,
                            24×7 power backup, lift facilities,
                            an in-house gymnasium, geysers,
                            and other essential services.

                        </p>

                        <a href="https://www.rgu.ac/admission-programs-fees-structure" class="rghs-btn">

                            Hostel Fees 2026-27
                            (For Old & New Students)

                        </a>

                    </div>

                </div>

            </div>

            <!--==========================
                HOSTEL 02
        ===========================-->

            <div class="row align-items-center rghs-item flex-lg-row-reverse">

                <div class="col-lg-6">

                    <div class="rghs-image">

                        <img src="new-web/assets/img/campus-hostel-life/harsha.png" alt="Harsha House" class="img-fluid">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="rghs-content">

                        <h3>Harsha House</h3>

                        <p>

                            The rooms come with pre-installed
                            air-conditioners and geysers to maximise
                            student comfort. Students enjoy quality
                            food service together with dedicated
                            in-house chefs and support staff.

                        </p>

                        <p>

                            The hostel includes on-call doctors,
                            housekeeping, sanitisation,
                            recreation rooms, and advanced
                            safety systems ensuring a secure
                            and comfortable living experience.

                        </p>

                        <a href="https://www.rgu.ac/admission-programs-fees-structure" class="rghs-btn">

                            Hostel Fees 2026-27
                            (For Old & New Students)

                        </a>

                    </div>

                </div>

            </div>

            <!--==========================
                HOSTEL 03
        ===========================-->

            <div class="row align-items-center rghs-item">

                <div class="col-lg-6">

                    <div class="rghs-image">

                        <img src="new-web/assets/img/campus-hostel-life/samaya.png" alt="Samaya House" class="img-fluid">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="rghs-content">

                        <h3>Samaya House</h3>

                        <p>

                            The newest addition to Royal Global
                            University's residential facilities,
                            Samaya House provides a modern
                            community-oriented living environment.

                        </p>

                        <p>

                            The hostel accommodates over
                            440 students and includes
                            furnished rooms, Wi-Fi,
                            lifts, housekeeping,
                            geysers and other
                            premium amenities.

                        </p>

                        <a href="https://www.rgu.ac/admission-programs-fees-structure" class="rghs-btn">

                            Hostel Fees 2026-27
                            (For Old & New Students)

                        </a>

                    </div>

                </div>

            </div>

            <!--==========================
                HOSTEL 04
        ===========================-->

            <div class="row align-items-center rghs-item flex-lg-row-reverse">

                <div class="col-lg-6">

                    <div class="rghs-image">

                        <img src="new-web/assets/img/campus-hostel-life/heyansh.png" alt="Heyansh House" class="img-fluid">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="rghs-content">

                        <h3>Heyansh House</h3>

                        <p>

                            Heyansh House offers a vibrant,
                            comfortable and secure residential
                            experience with spacious rooms,
                            modern infrastructure,
                            and a welcoming atmosphere.

                        </p>

                        <p>

                            Students enjoy quality dining,
                            housekeeping,
                            lifts, power backup,
                            Wi-Fi connectivity,
                            and all essential
                            residential facilities.

                        </p>

                        <a href="https://www.rgu.ac/admission-programs-fees-structure" class="rghs-btn">

                            Hostel Fees 2026-27
                            (For Old & New Students)

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="rghf-section">

        <div class="container">

            <div class="rghf-heading">

                <span>Hostel Amenities</span>

                <h2>Included As Part Of Your Hostel Fees</h2>

            </div>

            <div class="row">

                <!--======================
                    CARD 01
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-plug"></i>

                        </div>

                        <h4>24 Hours Electricity</h4>

                        <p>

                            Enjoy uninterrupted power supply throughout
                            the day, ensuring a comfortable and
                            productive stay.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 02
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-book"></i>

                        </div>

                        <h4>Study Area</h4>

                        <p>

                            Dedicated and peaceful study spaces
                            designed to help students focus and
                            excel in academics.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 03
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-video-camera"></i>

                        </div>

                        <h4>Security Surveillance</h4>

                        <p>

                            24×7 CCTV monitoring ensures
                            safety, security and peace of mind
                            throughout your hostel stay.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 04
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-tint"></i>

                        </div>

                        <h4>Round-The-Clock Water Supply</h4>

                        <p>

                            Continuous clean water supply
                            available at all times for every
                            hostel resident.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 05
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-wifi"></i>

                        </div>

                        <h4>High-Speed Internet</h4>

                        <p>

                            High-speed Wi-Fi connectivity
                            across the hostel for learning,
                            entertainment and communication.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 06
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-television"></i>

                        </div>

                        <h4>TV In Dining Hall</h4>

                        <p>

                            Relax and enjoy television
                            entertainment while dining
                            with fellow boarders.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 07
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-bed"></i>

                        </div>

                        <h4>2 / 3 / 4 Bedded Rooms</h4>

                        <p>

                            Spacious, fully furnished rooms
                            designed for comfort, privacy,
                            and collaborative living.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 08
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-building"></i>

                        </div>

                        <h4>Lift Services</h4>

                        <p>

                            Modern lift facilities provide
                            quick and convenient access
                            to every hostel floor.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 09
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-medkit"></i>

                        </div>

                        <h4>24×7 Infirmary & Medical Help</h4>

                        <p>

                            Round-the-clock medical
                            assistance is available for
                            students whenever required.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 10
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-user-secret"></i>

                        </div>

                        <h4>Experienced Warden</h4>

                        <p>

                            Dedicated wardens ensure
                            discipline, guidance,
                            safety and student welfare.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 11
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-cutlery"></i>

                        </div>

                        <h4>Delicious Food</h4>

                        <p>

                            Healthy and hygienic meals
                            are served every day with
                            vegetarian and non-vegetarian options.

                        </p>

                    </div>

                </div>

                <!--======================
                    CARD 12
            =======================-->

                <div class="col-lg-4 col-md-6 p-3">

                    <div class="rghf-card">

                        <div class="rghf-icon">

                            <i class="fa fa-heartbeat"></i>

                        </div>

                        <h4>Gymnasium & Recreation</h4>

                        <p>

                            Modern fitness facilities,
                            recreation rooms and indoor
                            activity spaces for students.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="rghg-section">

        <div class="container">

            <div class="rghg-heading">

                <span>Campus Life</span>

                <h2>Glimpse Of Our Hostel Moments</h2>

            </div>

            <div class="rghg-grid">

                <!--==========================
                    LARGE IMAGE
            ===========================-->

                <a class="rghg-item rghg-large">

                    <img src="new-web/assets/img/campus-hostel-life/g1.png" alt="Hostel Life" class="img-fluid">

                </a>

                <!--==========================
                    TOP RIGHT
            ===========================-->

                <a class="rghg-item">

                    <img src="new-web/assets/img/campus-hostel-life/g2.png" alt="Students" class="img-fluid">

                </a>

                <!--==========================
                    MIDDLE RIGHT
            ===========================-->

                <a class="rghg-item">

                    <img src="new-web/assets/img/campus-hostel-life/g3.png" alt="Hostel Room" class="img-fluid">

                </a>

                <!--==========================
                    BOTTOM LEFT
            ===========================-->

                <a class="rghg-item">

                    <img src="new-web/assets/img/campus-hostel-life/g4.png" alt="Gym" class="img-fluid">

                </a>

                <!--==========================
                    BOTTOM MIDDLE
            ===========================-->

                <a class="rghg-item">

                    <img src="new-web/assets/img/campus-hostel-life/g5.png" alt="Dining Hall" class="img-fluid">

                </a>

                <!--==========================
                    BOTTOM RIGHT
            ===========================-->

                <a class="rghg-item">

                    <img src="new-web/assets/img/campus-hostel-life/g6.png" alt="Campus" class="img-fluid">

                </a>

            </div>

        </div>

    </section>

@endsection
