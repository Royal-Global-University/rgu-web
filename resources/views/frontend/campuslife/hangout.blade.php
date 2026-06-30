@extends('frontend/new-master')
@section('title', 'Hangouts : The Assam Royal Global University')
@section('meta_description', 'Experience the social side of campus at Royal Global University with dynamic hangout zones
    that foster friendships, collaboration, and relaxation.')
@section('meta_keywords', 'Hangouts')
@section('content')
    <style>
        /*=========================================================
    HANGOUT PAGE
    =========================================================*/

        .bridge-hangout-intro {

            padding: 90px 0 70px;

            background: #eef3fb;

            overflow: hidden;

        }

        .bridge-hangout-heading {

            text-align: center;

            margin-bottom: 55px;

        }

        .bridge-hangout-heading h2 {

            font-family: 'Playfair Display', serif;

            font-size: 40px;

            font-weight: 700;

            color: #1f3d74;

            margin-bottom: 15px;

            position: relative;

        }

        .bridge-hangout-heading h2::after {

            content: "";

            width: 110px;

            height: 4px;

            background: #e56a3b;

            display: block;

            margin: 18px auto 0;

            border-radius: 30px;

        }

        .bridge-hangout-heading p {

            max-width: 760px;

            margin: auto;

            color: #666;

            line-height: 1.9;

        }

        /*=========================================================
    ABOUT IMAGE
    =========================================================*/

        .bridge-hangout-image-wrap {

            position: relative;

        }

        .bridge-hangout-image-wrap::before {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            background: #e56a3b;

            opacity: .12;

            border-radius: 50%;

            top: -40px;

            left: -40px;

            filter: blur(25px);

        }

        .bridge-hangout-main-image {

            width: 100%;

            border-radius: 28px;

            display: block;

            position: relative;

            z-index: 2;

            box-shadow: 0 35px 70px rgba(0, 0, 0, .16);

            animation: bridgeHangoutFloat 5s ease-in-out infinite;

            transition: .5s;

        }

        .bridge-hangout-main-image:hover {

            transform: scale(1.02);

        }

        /*=========================================================
    CONTENT
    =========================================================*/

        .bridge-hangout-content {

            padding-left: 35px;

        }

        .bridge-hangout-content h2 {

            font-family: 'Playfair Display', serif;

            font-size: 62px;

            color: #1f3d74;

            margin-bottom: 22px;

            position: relative;

        }

        .bridge-hangout-content h2::after {

            content: "";

            width: 90px;

            height: 4px;

            background: #e56a3b;

            display: block;

            margin-top: 15px;

            border-radius: 20px;

        }

        .bridge-hangout-content p {

            color: #666;

            line-height: 2;

            margin-bottom: 25px;

            font-size: 16px;

        }

        /*=========================================================
    SECTION BACKGROUND
    =========================================================*/

        .bridge-hangout-gallery-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .bridge-hangout-video-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        /*=========================================================
    FLOATING ANIMATION
    =========================================================*/

        @keyframes bridgeHangoutFloat {

            0% {

                transform: translateY(0);

            }

            50% {

                transform: translateY(-10px);

            }

            100% {

                transform: translateY(0);

            }

        }

        /*=========================================================
    RESPONSIVE
    =========================================================*/

        @media(max-width:991px) {

            .bridge-hangout-content {

                padding-left: 0;

                margin-top: 45px;

            }

            .bridge-hangout-content h2 {

                font-size: 46px;

            }

            .bridge-hangout-heading h2 {

                font-size: 46px;

            }

        }

        @media(max-width:576px) {

            .bridge-hangout-intro {

                padding: 60px 0;

            }

            .bridge-hangout-content h2 {

                font-size: 34px;

            }

            .bridge-hangout-heading h2 {

                font-size: 34px;

            }

            .bridge-hangout-content p {

                font-size: 15px;

            }

        }

        /*=========================================================
    GALLERY
    =========================================================*/

        .bridge-hangout-gallery-grid {

            column-count: 3;

            column-gap: 28px;

        }

        .bridge-hangout-gallery-card {

            position: relative;

            overflow: hidden;

            border-radius: 18px;

            margin-bottom: 28px;

            cursor: pointer;

            break-inside: avoid;

            box-shadow: 0 18px 45px rgba(0, 0, 0, .12);

            transition: .45s;

        }

        .bridge-hangout-gallery-card img {

            width: 100%;

            display: block;

            transition: .6s;

        }

        /*=========================================================
    OVERLAY
    =========================================================*/

        .bridge-hangout-gallery-overlay {

            position: absolute;

            inset: 0;

            background: linear-gradient(180deg,

                    rgba(0, 0, 0, 0),

                    rgba(0, 0, 0, .75));

            display: flex;

            flex-direction: column;

            justify-content: flex-end;

            padding: 24px;

            opacity: 0;

            transition: .45s;

        }

        .bridge-hangout-gallery-overlay h4 {

            color: #fff;

            font-size: 24px;

            margin-bottom: 6px;

            font-family: 'Playfair Display', serif;

        }

        .bridge-hangout-gallery-overlay span {

            color: #fff;

            font-size: 15px;

            letter-spacing: .5px;

            transform: translateX(-18px);

            transition: .4s;

        }

        .bridge-hangout-gallery-overlay span i {

            margin-left: 8px;

        }

        .bridge-hangout-gallery-card:hover img {

            transform: scale(1.12);

        }

        .bridge-hangout-gallery-card:hover {

            transform: translateY(-10px);

        }

        .bridge-hangout-gallery-card:hover .bridge-hangout-gallery-overlay {

            opacity: 1;

        }

        .bridge-hangout-gallery-card:hover span {

            transform: translateX(0);

        }

        /*=========================================================
    VIDEO GRID
    =========================================================*/

        .bridge-hangout-video-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 32px;

        }

        /*=========================================================
    VIDEO CARD
    =========================================================*/

        .bridge-hangout-video-card {

            position: relative;

            border-radius: 18px;

            overflow: hidden;

            cursor: pointer;

            box-shadow: 0 18px 40px rgba(0, 0, 0, .14);

            transition: .45s;

        }

        .bridge-hangout-video-card img {

            width: 100%;

            display: block;

            transition: .5s;

        }

        .bridge-hangout-video-card:hover {

            transform: translateY(-10px);

        }

        .bridge-hangout-video-card:hover img {

            transform: scale(1.08);

        }

        /*=========================================================
    PLAY BUTTON
    =========================================================*/

        .bridge-hangout-play {

            position: absolute;

            left: 50%;

            top: 50%;

            width: 88px;

            height: 88px;

            border-radius: 50%;

            background: #ff0000;

            display: flex;

            justify-content: center;

            align-items: center;

            transform: translate(-50%, -50%);

            color: #fff;

            font-size: 34px;

            transition: .4s;

            animation: bridgePlayPulse 2s infinite;

        }

        .bridge-hangout-video-card:hover .bridge-hangout-play {

            transform: translate(-50%, -50%) scale(1.1);

        }

        @keyframes bridgePlayPulse {

            0% {

                box-shadow: 0 0 0 0 rgba(255, 0, 0, .55);

            }

            70% {

                box-shadow: 0 0 0 20px rgba(255, 0, 0, 0);

            }

            100% {

                box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);

            }

        }

        /*=========================================================
    LIGHTBOX
    =========================================================*/

        .bridge-hangout-lightbox {

            position: fixed;

            inset: 0;

            background: rgba(0, 0, 0, .9);

            display: none;

            justify-content: center;

            align-items: center;

            z-index: 99999;

            padding: 40px;

        }

        .bridge-hangout-lightbox.show {

            display: flex;

        }

        .bridge-hangout-lightbox img {

            max-width: 90%;

            max-height: 90vh;

            border-radius: 16px;

        }

        .bridge-hangout-lightbox-close {

            position: absolute;

            top: 35px;

            right: 40px;

            color: #fff;

            font-size: 46px;

            cursor: pointer;

        }

        /*=========================================================
    VIDEO MODAL
    =========================================================*/

        .bridge-hangout-video-modal {

            position: fixed;

            inset: 0;

            display: none;

            justify-content: center;

            align-items: center;

            background: rgba(0, 0, 0, .92);

            z-index: 99999;

        }

        .bridge-hangout-video-modal.show {

            display: flex;

        }

        .bridge-hangout-video-wrapper {

            width: 85%;

            max-width: 1100px;

            aspect-ratio: 16/9;

            position: relative;

        }

        .bridge-hangout-video-wrapper iframe {

            width: 100%;

            height: 100%;

            border: none;

            border-radius: 16px;

        }

        .bridge-hangout-video-close {

            position: absolute;

            right: -15px;

            top: -55px;

            color: #fff;

            font-size: 42px;

            cursor: pointer;

        }

        /*=========================================================
    RESPONSIVE
    =========================================================*/

        @media(max-width:991px) {

            .bridge-hangout-gallery-grid {

                column-count: 2;

            }

            .bridge-hangout-video-grid {

                grid-template-columns: repeat(2, 1fr);

            }

        }

        @media(max-width:576px) {

            .bridge-hangout-gallery-grid {

                column-count: 1;

            }

            .bridge-hangout-video-grid {

                grid-template-columns: 1fr;

            }

            .bridge-hangout-play {

                width: 70px;

                height: 70px;

                font-size: 28px;

            }

            .bridge-hangout-gallery-overlay h4 {

                font-size: 20px;

            }

        }
    </style>

    <style>
        .bridge-youtube-video {

            position: relative;

            overflow: hidden;

            border-radius: 18px;

            box-shadow: 0 18px 45px rgba(0, 0, 0, .12);

            transition: .35s;

        }

        .bridge-youtube-video:hover {

            transform: translateY(-8px);

            box-shadow: 0 28px 60px rgba(0, 0, 0, .18);

        }

        .bridge-youtube-video iframe {

            width: 100%;

            aspect-ratio: 16/9;

            border: 0;

            display: block;

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/campus-hangout/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Hangout</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Hangout
            </div>
        </div>

    </section>

    <!--=========================================================
    ABOUT HANGOUT
    ==========================================================-->

    <section class="bridge-hangout-intro">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="bridge-hangout-image-wrap">

                        <img src="new-web/assets/img/campus-hangout/headimg.png" class="bridge-hangout-main-image"
                            alt="RGU Hangouts">

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="bridge-hangout-content">

                        <h2>

                            Hangouts

                        </h2>

                        <p>

                            The cafeterias at RGU are perfect to refresh after the hectic class schedule. It provides
                            students with the much-needed platform to ease and revitalize for the subsequent sessions.
                            Also, it provides a space for professional dialogue where they can discuss various areas of
                            interest over a cup of coffee.

                        </p>

                        <p>

                            The university features diverse dining options ranging from traditional eateries to modern
                            cafés. There are five cafeterias and eateries at The Assam Royal Global University. In all
                            five, students can choose between different meal options every day while enjoying a vibrant
                            campus atmosphere.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="bridge-hangout-gallery-section">

        <div class="container">

            <div class="bridge-hangout-heading">

                <h2>

                    Glimpse Of Our Hangout Spaces

                </h2>

                <p>

                    Discover the cafés, food courts and popular student gathering spaces across the campus.

                </p>

            </div>



            <div class="bridge-hangout-gallery">



                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/1.png" alt="South Kitchen">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Cafe Coffee Day

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>


                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/2.png" alt="Nestle Café">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Nestle Café

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>


                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/3.png" alt="Food Court">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Local Tummy

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>


                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/10.png" alt="Cafe Coffee Day">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Bistro

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>


                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/5.png" alt="Campus Café">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Wahffles

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>


                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/6.png" alt="Courtyard">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Haochi

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>

                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/7.png" alt="Courtyard">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            South Kitchen

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>

                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/8.png" alt="Courtyard">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Tea Stall

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>

                <!-- Card -->

                <div class="bridge-hangout-card">

                    <img src="new-web/assets/img/campus-hangout/hangout-places/9.png" alt="Courtyard">

                    <div class="bridge-hangout-overlay">

                        <h4>

                            Snowman

                        </h4>

                        <span>

                            View Image

                            <i class="bi bi-arrow-right"></i>

                        </span>

                    </div>

                </div>


            </div>

        </div>

    </section>

    <section class="bridge-hangout-video-section">

        <div class="container">

            <div class="bridge-hangout-heading">

                <h2>

                    Students Words About Their Hangout Spaces

                </h2>

                <p>

                    Hear directly from our students as they share their favourite hangout spaces around the campus.

                </p>

            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="bridge-youtube-video">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/a_jyg3wO8ys?si=GAKph8Uiw16juulW" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="bridge-youtube-video">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/CMUhgGStwJM?si=LoGcNrikOQSCjAAK" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="bridge-youtube-video">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/YrnvHXiFt-o?si=TgJOyIQ-6XU0F2ke" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="bridge-youtube-video">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/ZfztZNDr2aE?si=1HRXKLVDqngYWN2h"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="bridge-youtube-video">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/2AZK2oxVGDI?si=-1WBILeSpw4a0luG"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="bridge-youtube-video">

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/w-IHqc1Rvxk?si=oXLoxlP8UNHWmA-a"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <div class="bridge-lightbox">

        <span class="bridge-lightbox-close">

            &times;

        </span>

        <img class="bridge-lightbox-image" src="">

    </div>


    <div class="bridge-video-modal">

        <div class="bridge-video-wrapper">

            <span class="bridge-video-close">

                &times;

            </span>

            <iframe src="" allowfullscreen>

            </iframe>

        </div>

    </div>

    <style>
        .bridge-hangout-intro {

            padding: 90px 0;

            background: #eef3fb;

            overflow: hidden;

        }

        .bridge-hangout-image-wrap {

            position: relative;

        }

        .bridge-hangout-image-wrap::before {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            background: #e56a3b;

            opacity: .15;

            border-radius: 50%;

            left: -45px;

            top: -35px;

            filter: blur(25px);

        }

        .bridge-hangout-main-image {

            width: 100%;

            display: block;

            border-radius: 22px;

            box-shadow: 0 35px 70px rgba(0, 0, 0, .18);

            animation: bridgeHangoutFloat 6s ease-in-out infinite;

            transition: .5s;

        }

        .bridge-hangout-main-image:hover {

            transform: scale(1.02);

        }

        @keyframes bridgeHangoutFloat {

            0% {

                transform: translateY(0px);

            }

            50% {

                transform: translateY(-12px);

            }

            100% {

                transform: translateY(0px);

            }

        }

        /*=========================================================
    CONTENT
    =========================================================*/

        .bridge-hangout-content {

            padding-left: 45px;

        }

        .bridge-hangout-content h2 {

            font-family: "Playfair Display", serif;

            font-size: 60px;

            color: #1d396d;

            margin-bottom: 25px;

            position: relative;

        }

        .bridge-hangout-content h2::after {

            content: "";

            width: 90px;

            height: 4px;

            border-radius: 50px;

            background: #e56a3b;

            display: block;

            margin-top: 15px;

        }

        .bridge-hangout-content p {

            color: #666;

            line-height: 2;

            margin-bottom: 22px;

            font-size: 16px;

        }

        /*=========================================================
    COMMON SECTION
    =========================================================*/

        .bridge-hangout-gallery-section,

        .bridge-hangout-video-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .bridge-hangout-heading {

            text-align: center;

            margin-bottom: 60px;

        }

        .bridge-hangout-heading h2 {

            font-family: "Playfair Display", serif;

            font-size: 52px;

            color: #1d396d;

            margin-bottom: 18px;

            position: relative;

        }

        .bridge-hangout-heading h2::after {

            content: "";

            width: 110px;

            height: 4px;

            background: #e56a3b;

            border-radius: 40px;

            display: block;

            margin: 18px auto 0;

        }

        .bridge-hangout-heading p {

            max-width: 760px;

            margin: auto;

            color: #666;

            line-height: 1.8;

        }

        /*=========================================================
    MASONRY GALLERY
    =========================================================*/

        .bridge-hangout-gallery {

            column-count: 3;

            column-gap: 28px;

        }

        .bridge-hangout-card {

            position: relative;

            overflow: hidden;

            border-radius: 20px;

            cursor: pointer;

            margin-bottom: 28px;

            break-inside: avoid;

            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);

            transition: .45s;

        }

        .bridge-hangout-card img {

            width: 100%;

            display: block;

            transition: .6s;

        }

        /*=========================================================
    OVERLAY
    =========================================================*/

        .bridge-hangout-overlay {

            position: absolute;

            inset: 0;

            display: flex;

            flex-direction: column;

            justify-content: flex-end;

            padding: 24px;

            background: linear-gradient(transparent,

                    rgba(0, 0, 0, .78));

            opacity: 0;

            transition: .45s;

        }

        .bridge-hangout-overlay h4 {

            color: #fff;

            font-size: 26px;

            font-family: "Playfair Display", serif;

            margin-bottom: 6px;

            transform: translateY(20px);

            transition: .45s;

        }

        .bridge-hangout-overlay span {

            color: #fff;

            display: flex;

            align-items: center;

            gap: 10px;

            transform: translateY(20px);

            transition: .55s;

        }

        .bridge-hangout-card:hover {

            transform: translateY(-10px);

        }

        .bridge-hangout-card:hover img {

            transform: scale(1.12);

        }

        .bridge-hangout-card:hover .bridge-hangout-overlay {

            opacity: 1;

        }

        .bridge-hangout-card:hover h4,

        .bridge-hangout-card:hover span {

            transform: translateY(0);

        }

        .bridge-hangout-overlay i {

            transition: .3s;

        }

        .bridge-hangout-card:hover i {

            transform: translateX(8px);

        }

        /*=========================================================
    SCROLL ANIMATION
    =========================================================*/

        .bridge-hangout-card {

            opacity: 0;

            transform: translateY(60px);

        }

        .bridge-hangout-card.bridge-show {

            opacity: 1;

            transform: translateY(0);

            transition: .8s;

        }

        /*=========================================================
    TABLET
    =========================================================*/

        @media(max-width:991px) {

            .bridge-hangout-content {

                padding-left: 0;

                margin-top: 40px;

            }

            .bridge-hangout-gallery {

                column-count: 2;

            }

            .bridge-hangout-content h2 {

                font-size: 46px;

            }

            .bridge-hangout-heading h2 {

                font-size: 42px;

            }

        }

        /*=========================================================
    PHONE
    =========================================================*/

        @media(max-width:576px) {

            .bridge-hangout-intro {

                padding: 60px 0;

            }

            .bridge-hangout-gallery {

                column-count: 1;

            }

            .bridge-hangout-heading {

                margin-bottom: 40px;

            }

            .bridge-hangout-heading h2 {

                font-size: 32px;

            }

            .bridge-hangout-content h2 {

                font-size: 34px;

            }

            .bridge-hangout-content p {

                font-size: 15px;

            }

            .bridge-hangout-overlay h4 {

                font-size: 22px;

            }

        }

        /*=========================================================
    VIDEO GRID
    =========================================================*/

        .bridge-hangout-video-section {

            position: relative;

        }

        .bridge-hangout-video-section::before {

            content: "";

            position: absolute;

            left: 0;

            top: 0;

            width: 100%;

            height: 180px;

            background: linear-gradient(180deg, #eef3fb, transparent);

            pointer-events: none;

        }

        .bridge-video-card {

            position: relative;

            border-radius: 20px;

            overflow: hidden;

            cursor: pointer;

            margin-bottom: 30px;

            box-shadow: 0 18px 45px rgba(0, 0, 0, .12);

            transition: .45s;

            opacity: 0;

            transform: translateY(60px);

        }

        .bridge-video-card.bridge-show {

            opacity: 1;

            transform: translateY(0);

            transition: .8s;

        }

        .bridge-video-card img {

            width: 100%;

            display: block;

            transition: .55s;

        }

        .bridge-video-card:hover {

            transform: translateY(-10px);

        }

        .bridge-video-card:hover img {

            transform: scale(1.08);

        }

        /*=========================================================
    VIDEO OVERLAY
    =========================================================*/

        .bridge-video-card::after {

            content: "";

            position: absolute;

            inset: 0;

            background: linear-gradient(transparent,

                    rgba(0, 0, 0, .35));

        }

        /*=========================================================
    PLAY BUTTON
    =========================================================*/

        .bridge-video-play {

            position: absolute;

            left: 50%;

            top: 50%;

            transform: translate(-50%, -50%);

            width: 90px;

            height: 90px;

            border-radius: 50%;

            background: #ff0000;

            color: #fff;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 34px;

            z-index: 5;

            transition: .35s;

            animation: bridgePlayPulse 2s infinite;

        }

        .bridge-video-card:hover .bridge-video-play {

            transform: translate(-50%, -50%) scale(1.08);

        }

        @keyframes bridgePlayPulse {

            0% {

                box-shadow: 0 0 0 0 rgba(255, 0, 0, .55);

            }

            70% {

                box-shadow: 0 0 0 22px rgba(255, 0, 0, 0);

            }

            100% {

                box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);

            }

        }

        /*=========================================================
    LIGHTBOX
    =========================================================*/

        .bridge-lightbox {

            position: fixed;

            inset: 0;

            display: flex;

            justify-content: center;

            align-items: center;

            background: rgba(0, 0, 0, .92);

            opacity: 0;

            visibility: hidden;

            transition: .35s;

            z-index: 999999;

            padding: 40px;

        }

        .bridge-lightbox.active {

            opacity: 1;

            visibility: visible;

        }

        .bridge-lightbox-image {

            max-width: 90%;

            max-height: 90vh;

            border-radius: 18px;

            transform: scale(.85);

            transition: .35s;

        }

        .bridge-lightbox.active .bridge-lightbox-image {

            transform: scale(1);

        }

        .bridge-lightbox-close {

            position: absolute;

            right: 35px;

            top: 20px;

            color: #fff;

            font-size: 52px;

            cursor: pointer;

            transition: .3s;

        }

        .bridge-lightbox-close:hover {

            transform: rotate(90deg);

        }

        /*=========================================================
    VIDEO MODAL
    =========================================================*/

        .bridge-video-modal {

            position: fixed;

            inset: 0;

            display: flex;

            justify-content: center;

            align-items: center;

            background: rgba(0, 0, 0, .94);

            opacity: 0;

            visibility: hidden;

            transition: .35s;

            z-index: 999999;

        }

        .bridge-video-modal.active {

            opacity: 1;

            visibility: visible;

        }

        .bridge-video-wrapper {

            width: 88%;

            max-width: 1150px;

            aspect-ratio: 16/9;

            transform: scale(.9);

            transition: .35s;

            position: relative;

        }

        .bridge-video-modal.active .bridge-video-wrapper {

            transform: scale(1);

        }

        .bridge-video-wrapper iframe {

            width: 100%;

            height: 100%;

            border: none;

            border-radius: 18px;

            background: #000;

        }

        .bridge-video-close {

            position: absolute;

            top: -55px;

            right: -5px;

            color: #fff;

            font-size: 48px;

            cursor: pointer;

            transition: .3s;

        }

        .bridge-video-close:hover {

            transform: rotate(90deg);

        }

        /*=========================================================
    SMALL MOBILE
    =========================================================*/

        @media(max-width:767px) {

            .bridge-video-play {

                width: 70px;

                height: 70px;

                font-size: 28px;

            }

            .bridge-video-wrapper {

                width: 96%;

            }

            .bridge-lightbox {

                padding: 20px;

            }

            .bridge-lightbox-close {

                font-size: 42px;

                right: 20px;

            }

            .bridge-video-close {

                font-size: 42px;

                right: 5px;

                top: -48px;

            }

        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            initialiseGallery();

            initialiseVideos();

            initialiseScrollReveal();

        });


        function initialiseGallery() {

            const cards = document.querySelectorAll(".bridge-hangout-card");

            const lightbox = document.querySelector(".bridge-lightbox");

            const image = document.querySelector(".bridge-lightbox-image");

            const close = document.querySelector(".bridge-lightbox-close");

            cards.forEach(card => {

                card.addEventListener("click", function() {

                    image.src = this.querySelector("img").src;

                    lightbox.classList.add("active");

                    document.body.style.overflow = "hidden";

                });

            });

            close.addEventListener("click", closeLightbox);

            lightbox.addEventListener("click", function(e) {

                if (e.target === lightbox) {

                    closeLightbox();

                }

            });

        }



        /*=========================================================
        CLOSE LIGHTBOX
        =========================================================*/

        function closeLightbox() {

            document

                .querySelector(".bridge-lightbox")

                .classList.remove("active");

            document.body.style.overflow = "";

        }



        /*=========================================================
        VIDEO POPUP
        =========================================================*/

        function initialiseVideos() {

            const cards = document.querySelectorAll(".bridge-video-card");

            const modal = document.querySelector(".bridge-video-modal");

            const iframe = modal.querySelector("iframe");

            const close = modal.querySelector(".bridge-video-close");

            cards.forEach(card => {

                card.addEventListener("click", function() {

                    const video = this.dataset.video;

                    iframe.src = video + "?autoplay=1";

                    modal.classList.add("active");

                    document.body.style.overflow = "hidden";

                });

            });

            close.addEventListener("click", closeVideo);

            modal.addEventListener("click", function(e) {

                if (e.target === modal) {

                    closeVideo();

                }

            });

        }



        /*=========================================================
        CLOSE VIDEO
        =========================================================*/

        function closeVideo() {

            const modal = document.querySelector(".bridge-video-modal");

            const iframe = modal.querySelector("iframe");

            modal.classList.remove("active");

            iframe.src = "";

            document.body.style.overflow = "";

        }



        /*=========================================================
        ESC KEY
        =========================================================*/

        document.addEventListener("keydown", function(e) {

            if (e.key === "Escape") {

                closeLightbox();

                closeVideo();

            }

        });



        /*=========================================================
        SCROLL REVEAL
        =========================================================*/

        function initialiseScrollReveal() {

            const items = document.querySelectorAll(

                ".bridge-hangout-card, .bridge-video-card"

            );

            const observer = new IntersectionObserver(function(entries) {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("bridge-show");

                    }

                });

            }, {

                threshold: .15

            });

            items.forEach(item => observer.observe(item));

        }
    </script>


@endsection
