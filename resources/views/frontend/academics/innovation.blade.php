@extends('frontend/new-master')
@section('title', 'Innovations : The Assam Royal Global University')
@section('meta_description',
    'Ministry of Education (MoE), Govt. of India established Institution’s Innovation Council
    in the year 2018. Different educational institutions in the country are part of this initiative.')
@section('meta_keywords', 'Innovations')
@section('content')
    <style>
        /* =========================================================
       IIC-RGU PAGE
       CSS PART 1
    ========================================================= */

        .rgu-iic-page {
            width: 100%;
            overflow: hidden;
            background: #ffffff;
            color: #1d3557;
        }

        .rgu-iic-page *,
        .rgu-iic-page *::before,
        .rgu-iic-page *::after {
            box-sizing: border-box;
        }

        .rgu-iic-page img {
            display: block;
            max-width: 100%;
        }


        /* =========================================================
       IIC-RGU INTRODUCTION
    ========================================================= */

        .rgu-iic-intro {
            position: relative;
            padding: 85px 0 100px;
            background: #ffffff;
        }

        .rgu-iic-intro-image {
            position: relative;
            width: 100%;
        }

        .rgu-iic-intro-image img {
            width: 100%;
            height: 560px;
            object-fit: cover;
            border-radius: 0 0 120px 0;
        }


        /* =========================================================
       INTRODUCTION CONTENT
    ========================================================= */

        .rgu-iic-intro-content {
            padding-left: 35px;
        }

        .rgu-iic-intro-content h1 {
            margin: 0 0 35px;

            color: #1d3557;

            font-size: clamp(2.8rem, 4vw, 4.2rem);
            font-weight: 800;
            line-height: 1.12;

            letter-spacing: -1px;
        }

        .rgu-iic-intro-content p {
            margin: 0;

            color: #5b6573;

            font-size: 1.5rem;
            font-weight: 400;
            line-height: 1.95;

            text-align: justify;
        }


        /* =========================================================
       GLIMPSE OF INNOVATION
    ========================================================= */

        .rgu-iic-glimpse {
            position: relative;

            padding: 90px 0 100px;

            background: #dceff8;
        }

        .rgu-iic-glimpse-inner {
            width: 100%;
        }


        /* =========================================================
       GLIMPSE TITLE
    ========================================================= */

        .rgu-iic-light-title {
            margin: 0 0 55px;

            color: #1d3557;

            font-size: clamp(2.7rem, 4vw, 4rem);
            font-weight: 800;
            line-height: 1.15;

            text-align: center;
        }


        /* =========================================================
       GLIMPSE CARD
    ========================================================= */

        .rgu-iic-glimpse-card {
            position: relative;

            height: 100%;

            overflow: hidden;

            background: #ffffff;

            border-radius: 0 0 55px 0;

            box-shadow:
                0 10px 30px rgba(29, 53, 87, 0.08);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .rgu-iic-glimpse-card:hover {
            transform: translateY(-6px);

            box-shadow:
                0 18px 40px rgba(29, 53, 87, 0.14);
        }


        /* =========================================================
       GLIMPSE IMAGE
    ========================================================= */

        .rgu-iic-glimpse-image {
            width: 100%;
            overflow: hidden;
        }

        .rgu-iic-glimpse-image img {
            width: 100%;
            height: 260px;

            object-fit: cover;

            transition: transform 0.4s ease;
        }

        .rgu-iic-glimpse-card:hover .rgu-iic-glimpse-image img {
            transform: scale(1.04);
        }


        /* =========================================================
       GLIMPSE CARD CONTENT
    ========================================================= */

        .rgu-iic-glimpse-content {
            min-height: 135px;

            display: flex;
            flex-direction: column;
            justify-content: center;

            padding: 25px 28px 30px;
        }

        .rgu-iic-glimpse-content h3 {
            margin: 0 0 5px;

            color: #1d3557;

            font-size: 2.0rem;
            font-weight: 700;
            line-height: 1.45;
        }

        .rgu-iic-glimpse-content h4 {
            margin: 0;

            color: #ed7d31;

            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1.4;
        }


        /* =========================================================
       GENERAL DIVIDER
    ========================================================= */

        .rgu-iic-divider {
            width: 100%;
            height: 1px;

            margin-bottom: 65px;

            background: rgba(29, 53, 87, 0.16);
        }


        /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 991px) {

            .rgu-iic-intro {
                padding: 65px 0 80px;
            }

            .rgu-iic-intro-image img {
                height: 480px;

                border-radius: 0 0 80px 0;
            }

            .rgu-iic-intro-content {
                padding-left: 0;
            }

            .rgu-iic-intro-content h1 {
                font-size: 3.2rem;
            }

            .rgu-iic-intro-content p {
                font-size: 1.08rem;
            }

            .rgu-iic-glimpse {
                padding: 70px 0 80px;
            }

            .rgu-iic-light-title {
                margin-bottom: 45px;

                font-size: 3rem;
            }

            .rgu-iic-glimpse-image img {
                height: 240px;
            }

        }


        /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 767px) {

            .rgu-iic-intro {
                padding: 45px 0 60px;
            }

            .rgu-iic-intro-image img {
                height: 350px;

                border-radius: 0 0 55px 0;
            }

            .rgu-iic-intro-content h1 {
                margin-bottom: 25px;

                font-size: 2.45rem;
                line-height: 1.15;
            }

            .rgu-iic-intro-content p {
                font-size: 1rem;
                line-height: 1.8;

                text-align: left;
            }


            /* GLIMPSE */

            .rgu-iic-glimpse {
                padding: 55px 0 65px;
            }

            .rgu-iic-light-title {
                margin-bottom: 35px;

                font-size: 2.4rem;
            }

            .rgu-iic-glimpse-card {
                border-radius: 0 0 40px 0;
            }

            .rgu-iic-glimpse-image img {
                height: 230px;
            }

            .rgu-iic-glimpse-content {
                min-height: auto;

                padding: 22px 22px 25px;
            }

            .rgu-iic-glimpse-content h3 {
                font-size: 1.15rem;
            }

            .rgu-iic-glimpse-content h4 {
                font-size: 1.05rem;
            }

        }


        /* =========================================================
       SMALL MOBILE
    ========================================================= */

        @media (max-width: 480px) {

            .rgu-iic-intro-image img {
                height: 290px;
            }

            .rgu-iic-intro-content h1 {
                font-size: 2.15rem;
            }

            .rgu-iic-glimpse-image img {
                height: 210px;
            }

            .rgu-iic-light-title {
                font-size: 2.15rem;
            }

        }
    </style>

    <style>
        /* =========================================================
       IIC-RGU PAGE
       CSS PART 2
    ========================================================= */


        /* =========================================================
       GENERAL CONTENT SECTION
    ========================================================= */

        .rgu-iic-content-section {
            position: relative;

            padding: 90px 0;

            background: #ffffff;
        }

        .rgu-iic-content-section+.rgu-iic-content-section {
            padding-top: 20px;
        }


        /* =========================================================
       FEATURE ROW
    ========================================================= */

        .rgu-iic-feature-row {
            position: relative;
            width: 100%;
        }


        /* =========================================================
       FEATURE IMAGE
    ========================================================= */

        .rgu-iic-feature-image {
            position: relative;

            width: 100%;

            overflow: hidden;
        }

        .rgu-iic-feature-image img {
            display: block;

            width: 100%;
            height: 520px;

            object-fit: cover;
        }


        /* IMAGE SHAPE - BOTTOM RIGHT */

        .rgu-iic-image-bottom-right {
            border-radius: 0 0 110px 0;
        }

        .rgu-iic-image-bottom-right img {
            border-radius: 0 0 110px 0;
        }


        /* IMAGE SHAPE - BOTTOM LEFT */

        .rgu-iic-image-bottom-left {
            border-radius: 0 0 0 110px;
        }

        .rgu-iic-image-bottom-left img {
            border-radius: 0 0 0 110px;
        }


        /* =========================================================
       FEATURE CONTENT
    ========================================================= */

        .rgu-iic-feature-content {
            position: relative;

            padding: 25px 20px;
        }

        .rgu-iic-feature-content h2 {
            margin: 0 0 28px;

            color: #1d3557;

            font-size: clamp(2.5rem, 3.5vw, 3.8rem);

            font-weight: 800;

            line-height: 1.12;

            letter-spacing: -0.7px;
        }


        /* =========================================================
       DATE
    ========================================================= */

        .rgu-iic-date {
            display: inline-block;

            margin-bottom: 25px;

            color: #ed7d31;

            font-size: 1.15rem;

            font-weight: 700;

            line-height: 1.5;
        }


        /* =========================================================
       FEATURE PARAGRAPHS
    ========================================================= */

        .rgu-iic-feature-content p {
            margin: 0 0 24px;

            color: #5b6573;

            font-size: 1.5rem;

            font-weight: 400;

            line-height: 1.9;

            text-align: justify;
        }

        .rgu-iic-feature-content p:last-child {
            margin-bottom: 0;
        }


        /* =========================================================
       ORANGE SUBHEADING
    ========================================================= */

        .rgu-iic-orange-heading {
            margin: 0 0 28px;

            color: #ed7d31;

            font-size: 1.22rem;

            font-weight: 700;

            line-height: 1.7;

            text-transform: uppercase;
        }


        /* =========================================================
       MOU ORGANISATIONS
    ========================================================= */

        .rgu-iic-mou-organisations {
            margin: 32px 0;
        }

        .rgu-iic-mou-organisations h3 {
            position: relative;

            margin: 0 0 18px;

            padding-left: 25px;

            color: #1d3557;

            font-size: 1.25rem;

            font-weight: 700;

            line-height: 1.6;
        }

        .rgu-iic-mou-organisations h3:last-child {
            margin-bottom: 0;
        }

        .rgu-iic-mou-organisations h3::before {
            content: "";

            position: absolute;

            top: 10px;
            left: 0;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #ed7d31;
        }


        /* =========================================================
       MOU DETAILS SECTION
    ========================================================= */

        .rgu-iic-mou-details {
            position: relative;

            padding: 30px 0 100px;

            background: #ffffff;
        }


        /* =========================================================
       MOU COLUMN
    ========================================================= */

        .rgu-iic-mou-column {
            position: relative;

            height: 100%;

            padding: 15px 25px;
        }

        .rgu-iic-mou-column h2 {
            margin: 0 0 25px;

            color: #1d3557;

            font-size: clamp(2.2rem, 3vw, 3.2rem);

            font-weight: 800;

            line-height: 1.15;
        }

        .rgu-iic-mou-column h4 {
            margin: 0 0 25px;

            color: #ed7d31;

            font-size: 1.15rem;

            font-weight: 700;

            line-height: 1.7;

            text-transform: uppercase;
        }


        /* =========================================================
       ORANGE BULLET LIST
    ========================================================= */

        .rgu-iic-orange-list {
            list-style: none;

            margin: 0;

            padding: 0;
        }

        .rgu-iic-orange-list li {
            position: relative;

            margin-bottom: 18px;

            padding-left: 30px;

            color: #5b6573;

            font-size: 1.5rem;

            font-weight: 400;

            line-height: 1.75;
        }

        .rgu-iic-orange-list li:last-child {
            margin-bottom: 0;
        }

        .rgu-iic-orange-list li::before {
            content: "";

            position: absolute;

            top: 10px;
            left: 0;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #ed7d31;
        }


        /* =========================================================
       MOU BOTTOM TEXT
    ========================================================= */

        .rgu-iic-mou-bottom-text {
            max-width: 1100px;

            margin: 55px auto 0;

            padding-top: 35px;

            border-top: 1px solid rgba(29, 53, 87, 0.15);

            text-align: center;
        }

        .rgu-iic-mou-bottom-text p {
            margin: 0;

            color: #5b6573;

            font-size: 1.5rem;

            line-height: 1.9;

            font-weight: 500;
        }


        /* =========================================================
       DIVIDER
    ========================================================= */

        .rgu-iic-content-section .rgu-iic-divider,
        .rgu-iic-mou-details .rgu-iic-divider {
            width: 100%;

            height: 1px;

            margin: 0 0 70px;

            background: rgba(29, 53, 87, 0.15);
        }


        /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 991px) {

            .rgu-iic-content-section {
                padding: 70px 0;
            }

            .rgu-iic-content-section+.rgu-iic-content-section {
                padding-top: 10px;
            }

            .rgu-iic-feature-image img {
                height: 450px;
            }

            .rgu-iic-image-bottom-right,
            .rgu-iic-image-bottom-right img {
                border-radius: 0 0 80px 0;
            }

            .rgu-iic-image-bottom-left,
            .rgu-iic-image-bottom-left img {
                border-radius: 0 0 0 80px;
            }

            .rgu-iic-feature-content {
                padding: 10px 0;
            }

            .rgu-iic-feature-content h2 {
                font-size: 3rem;
            }

            .rgu-iic-feature-content p {
                font-size: 1.05rem;
            }

            .rgu-iic-mou-details {
                padding-bottom: 80px;
            }

            .rgu-iic-mou-column {
                padding: 10px 0;
            }

            .rgu-iic-mou-column h2 {
                font-size: 2.6rem;
            }

        }


        /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 767px) {

            .rgu-iic-content-section {
                padding: 55px 0;
            }

            .rgu-iic-feature-image img {
                height: 330px;
            }

            .rgu-iic-image-bottom-right,
            .rgu-iic-image-bottom-right img {
                border-radius: 0 0 55px 0;
            }

            .rgu-iic-image-bottom-left,
            .rgu-iic-image-bottom-left img {
                border-radius: 0 0 0 55px;
            }

            .rgu-iic-feature-content h2 {
                margin-bottom: 22px;

                font-size: 2.35rem;

                line-height: 1.15;
            }

            .rgu-iic-date {
                margin-bottom: 20px;

                font-size: 1.05rem;
            }

            .rgu-iic-feature-content p {
                font-size: 1rem;

                line-height: 1.8;

                text-align: left;
            }

            .rgu-iic-orange-heading {
                font-size: 1.05rem;

                line-height: 1.65;
            }

            .rgu-iic-mou-organisations {
                margin: 25px 0;
            }

            .rgu-iic-mou-organisations h3 {
                font-size: 1.08rem;

                line-height: 1.55;
            }


            /* MOU DETAILS */

            .rgu-iic-mou-details {
                padding: 20px 0 65px;
            }

            .rgu-iic-content-section .rgu-iic-divider,
            .rgu-iic-mou-details .rgu-iic-divider {
                margin-bottom: 45px;
            }

            .rgu-iic-mou-column {
                padding: 5px 0;
            }

            .rgu-iic-mou-column h2 {
                margin-bottom: 20px;

                font-size: 2.2rem;
            }

            .rgu-iic-mou-column h4 {
                font-size: 1.05rem;

                line-height: 1.6;
            }

            .rgu-iic-orange-list li {
                padding-left: 26px;

                font-size: 1rem;

                line-height: 1.7;
            }

            .rgu-iic-mou-bottom-text {
                margin-top: 40px;

                padding-top: 30px;
            }

            .rgu-iic-mou-bottom-text p {
                font-size: 1rem;

                line-height: 1.8;
            }

        }


        /* =========================================================
       SMALL MOBILE
    ========================================================= */

        @media (max-width: 480px) {

            .rgu-iic-feature-image img {
                height: 280px;
            }

            .rgu-iic-feature-content h2 {
                font-size: 2.05rem;
            }

            .rgu-iic-mou-column h2 {
                font-size: 2rem;
            }

        }
    </style>

    <style>
        /* =========================================================
       IIC-RGU PAGE
       CSS PART 3
    ========================================================= */


        /* =========================================================
       INNOVATION PROJECT SECTION
    ========================================================= */

        .rgu-iic-projects {
            position: relative;

            padding: 90px 0;

            background: #dceff8;
        }


        /* =========================================================
       PROJECT SLIDER
    ========================================================= */

        .rgu-iic-project-slider {
            position: relative;

            width: 100%;
        }

        .rgu-iic-project-slide {
            display: none;
        }

        .rgu-iic-project-slide.active {
            display: block;
        }


        /* =========================================================
       PROJECT IMAGE
    ========================================================= */

        .rgu-iic-project-image {
            position: relative;

            width: 100%;

            overflow: hidden;

            border-radius: 0 0 110px 0;
        }

        .rgu-iic-project-image img {
            display: block;

            width: 100%;
            height: 500px;

            object-fit: cover;

            border-radius: 0 0 110px 0;
        }


        /* =========================================================
       PROJECT CONTENT
    ========================================================= */

        .rgu-iic-project-content {
            position: relative;

            padding: 30px 25px;
        }

        .rgu-iic-project-content h2 {
            margin: 0 0 25px;

            color: #1d3557;

            font-size: clamp(2.6rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.12;

            letter-spacing: -0.7px;
        }


        /* =========================================================
       PROJECT ID
    ========================================================= */

        .rgu-iic-project-id {
            display: inline-block;

            margin-bottom: 30px;

            color: #ed7d31;

            font-size: 1.8rem;

            font-weight: 700;

            line-height: 1.5;
        }


        /* =========================================================
       FEATURES TITLE
    ========================================================= */

        .rgu-iic-project-content h4 {
            margin: 0 0 20px;

            color: #1d3557;

            font-size: 1.8rem;

            font-weight: 800;

            line-height: 1.4;
        }


        /* =========================================================
       PROJECT FEATURE LIST
    ========================================================= */

        .rgu-iic-project-list {
            list-style: none;

            margin: 0 0 30px;

            padding: 0;
        }

        .rgu-iic-project-list li {
            position: relative;

            margin-bottom: 13px;

            padding-left: 30px;

            color: #5b6573;

            font-size: 1.8rem;

            font-weight: 500;

            line-height: 1.7;
        }

        .rgu-iic-project-list li:last-child {
            margin-bottom: 0;
        }

        .rgu-iic-project-list li::before {
            content: "";

            position: absolute;

            top: 9px;
            left: 0;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #ed7d31;
        }


        /* =========================================================
       PROJECT RESULT
    ========================================================= */

        .rgu-iic-project-result {
            margin: 0;

            color: #ed7d31;

            font-size: 1.8rem;

            font-weight: 800;

            line-height: 1.6;
        }


        /* =========================================================
       PROJECT SLIDER CONTROLS
    ========================================================= */

        .rgu-iic-project-controls {
            display: flex;

            justify-content: flex-end;

            gap: 12px;

            margin-top: 35px;
        }

        .rgu-iic-project-prev,
        .rgu-iic-project-next {
            width: 55px;
            height: 55px;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 0;

            border: 0;

            border-radius: 50%;

            background: #1d3557;

            color: #ffffff;

            font-size: 1.5rem;

            line-height: 1;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(29, 53, 87, 0.18);

            transition:
                background 0.3s ease,
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .rgu-iic-project-prev:hover,
        .rgu-iic-project-next:hover {
            background: #ed7d31;

            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(237, 125, 49, 0.25);
        }


        /* =========================================================
       OBJECTIVES SECTION
    ========================================================= */

        .rgu-iic-objectives {
            position: relative;

            padding: 100px 0;

            background: #ffffff;
        }


        /* =========================================================
       OBJECTIVES CONTENT
    ========================================================= */

        .rgu-iic-objectives-content {
            position: relative;

            padding-right: 35px;
        }

        .rgu-iic-objectives-content h2 {
            margin: 0 0 35px;

            color: #1d3557;

            font-size: clamp(2.8rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.1;
        }


        /* =========================================================
       OBJECTIVES LIST
    ========================================================= */

        .rgu-iic-objective-list li {
            margin-bottom: 22px;

            padding-left: 32px;

            color: #5b6573;

            font-size: 1.5rem;

            line-height: 1.75;
        }

        .rgu-iic-objective-list li::before {
            top: 10px;

            width: 11px;
            height: 11px;
        }


        /* =========================================================
       OBJECTIVES IMAGE
    ========================================================= */

        .rgu-iic-objectives-image {
            position: relative;

            width: 100%;

            overflow: hidden;

            border-radius: 0 0 0 110px;
        }

        .rgu-iic-objectives-image img {
            display: block;

            width: 100%;
            height: 520px;

            object-fit: cover;

            border-radius: 0 0 0 110px;
        }


        /* =========================================================
       DECORATIVE ACCENT FOR OBJECTIVES IMAGE
    ========================================================= */

        .rgu-iic-objectives-image::before {
            content: "";

            position: absolute;

            z-index: 2;

            top: 0;
            right: 0;

            width: 75px;
            height: 75px;

            border-top: 8px solid #ed7d31;
            border-right: 8px solid #ed7d31;

            pointer-events: none;
        }


        /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 991px) {

            .rgu-iic-projects {
                padding: 75px 0;
            }

            .rgu-iic-project-image,
            .rgu-iic-project-image img {
                border-radius: 0 0 80px 0;
            }

            .rgu-iic-project-image img {
                height: 430px;
            }

            .rgu-iic-project-content {
                padding: 20px 0;
            }

            .rgu-iic-project-content h2 {
                font-size: 3rem;
            }

            .rgu-iic-project-controls {
                margin-top: 25px;
            }


            /* OBJECTIVES */

            .rgu-iic-objectives {
                padding: 80px 0;
            }

            .rgu-iic-objectives-content {
                padding-right: 0;
            }

            .rgu-iic-objectives-content h2 {
                font-size: 3rem;
            }

            .rgu-iic-objectives-image,
            .rgu-iic-objectives-image img {
                border-radius: 0 0 0 80px;
            }

            .rgu-iic-objectives-image img {
                height: 450px;
            }

        }


        /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 767px) {

            /* PROJECT */

            .rgu-iic-projects {
                padding: 55px 0;
            }

            .rgu-iic-project-image,
            .rgu-iic-project-image img {
                border-radius: 0 0 55px 0;
            }

            .rgu-iic-project-image img {
                height: 320px;
            }

            .rgu-iic-project-content {
                padding: 10px 0 0;
            }

            .rgu-iic-project-content h2 {
                margin-bottom: 20px;

                font-size: 2.35rem;

                line-height: 1.15;
            }

            .rgu-iic-project-id {
                margin-bottom: 24px;

                font-size: 1rem;
            }

            .rgu-iic-project-content h4 {
                font-size: 1.15rem;
            }

            .rgu-iic-project-list {
                margin-bottom: 25px;
            }

            .rgu-iic-project-list li {
                padding-left: 26px;

                font-size: 1rem;

                line-height: 1.65;
            }

            .rgu-iic-project-result {
                font-size: 1.15rem;

                line-height: 1.55;
            }

            .rgu-iic-project-controls {
                justify-content: flex-start;

                margin-top: 30px;
            }

            .rgu-iic-project-prev,
            .rgu-iic-project-next {
                width: 48px;
                height: 48px;

                font-size: 1.3rem;
            }


            /* OBJECTIVES */

            .rgu-iic-objectives {
                padding: 65px 0;
            }

            .rgu-iic-objectives-content h2 {
                margin-bottom: 28px;

                font-size: 2.4rem;
            }

            .rgu-iic-objective-list li {
                margin-bottom: 18px;

                padding-left: 27px;

                font-size: 1rem;

                line-height: 1.7;
            }

            .rgu-iic-objectives-image,
            .rgu-iic-objectives-image img {
                border-radius: 0 0 0 55px;
            }

            .rgu-iic-objectives-image img {
                height: 330px;
            }

            .rgu-iic-objectives-image::before {
                width: 55px;
                height: 55px;

                border-top-width: 6px;
                border-right-width: 6px;
            }

        }


        /* =========================================================
       SMALL MOBILE
    ========================================================= */

        @media (max-width: 480px) {

            .rgu-iic-project-image img {
                height: 275px;
            }

            .rgu-iic-project-content h2 {
                font-size: 2.05rem;
            }

            .rgu-iic-objectives-content h2 {
                font-size: 2.1rem;
            }

            .rgu-iic-objectives-image img {
                height: 285px;
            }

        }
    </style>

    <style>
        /* =========================================================
       IIC-RGU PAGE
       CSS PART 4
    ========================================================= */


        /* =========================================================
       INNOVATIONS AT A GLANCE
    ========================================================= */

        .rgu-iic-glance {
            position: relative;

            padding: 85px 0 95px;

            background: #dceff8;
        }

        .rgu-iic-glance-inner {
            position: relative;

            width: 100%;
        }


        /* =========================================================
       PARTNER / ORGANISATION LOGOS
    ========================================================= */

        .rgu-iic-logo-row {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            align-items: center;

            gap: 45px;

            width: 100%;

            margin-bottom: 70px;
        }

        .rgu-iic-partner-logo {
            min-height: 120px;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 10px 15px;
        }

        .rgu-iic-partner-logo img {
            display: block;

            width: auto;
            max-width: 100%;

            max-height: 105px;

            margin: auto;

            object-fit: contain;
        }


        /* =========================================================
       INNOVATIONS AT A GLANCE HEADING
    ========================================================= */

        .rgu-iic-glance-heading {
            display: flex;

            align-items: center;
            justify-content: center;

            gap: 30px;

            width: 100%;

            margin-bottom: 60px;
        }

        .rgu-iic-glance-heading h2 {
            flex-shrink: 0;

            margin: 0;

            color: #1d3557;

            font-size: clamp(2.7rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.15;

            text-align: center;
        }

        .rgu-iic-heading-line {
            display: block;

            width: 100%;
            max-width: 180px;

            height: 2px;

            background: #ed7d31;
        }


        /* =========================================================
       STATISTICS
    ========================================================= */

        .rgu-iic-stats {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            align-items: center;

            gap: 35px;

            max-width: 1100px;

            margin: 0 auto;
        }


        /* =========================================================
       STAT CIRCLE
    ========================================================= */

        .rgu-iic-stat-circle {
            position: relative;

            width: 210px;
            height: 210px;

            margin: 0 auto;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #ffffff;

            border: 3px solid #ed7d31;

            box-shadow:
                0 10px 30px rgba(29, 53, 87, 0.08);
        }


        /* INNER DECORATIVE CIRCLE */

        .rgu-iic-stat-circle::before {
            content: "";

            position: absolute;

            inset: 10px;

            border-radius: 50%;

            border: 1px solid rgba(237, 125, 49, 0.35);
        }


        /* =========================================================
       STAT CONTENT
    ========================================================= */

        .rgu-iic-stat-content {
            position: relative;

            z-index: 2;

            display: flex;

            flex-direction: column;

            align-items: center;
            justify-content: center;

            padding: 20px;

            text-align: center;
        }

        .rgu-iic-stat-content strong {
            display: block;

            margin-bottom: 8px;

            color: #ed7d31;

            font-size: 3.7rem;

            font-weight: 800;

            line-height: 1;
        }

        .rgu-iic-stat-content span {
            display: block;

            color: #1d3557;

            font-size: 1rem;

            font-weight: 800;

            line-height: 1.35;

            text-transform: uppercase;

            letter-spacing: 0.4px;
        }


        /* ONGOING CIRCLE */

        .rgu-iic-stat-content .rgu-iic-stat-ongoing {
            margin: 0;

            color: #1d3557;

            font-size: 1.7rem;

            line-height: 1.2;
        }


        /* =========================================================
       INSTITUTIONAL PATENT PUBLISHED
       LIGHT SECTION
    ========================================================= */

        .rgu-iic-patent-intro {
            position: relative;

            padding: 100px 0;

            background: #ffffff;
        }


        /* =========================================================
       PATENT SECTION TITLE
    ========================================================= */

        .rgu-iic-section-title {
            margin: 0 0 60px;

            color: #1d3557;

            font-size: clamp(2.8rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.15;

            text-align: center;
        }


        /* =========================================================
       PATENT IMAGE
    ========================================================= */

        .rgu-iic-patent-image {
            position: relative;

            width: 100%;

            overflow: hidden;

            border-radius: 0 0 110px 0;
        }

        .rgu-iic-patent-image img {
            display: block;

            width: 100%;
            height: 480px;

            object-fit: cover;

            border-radius: 0 0 110px 0;
        }


        /* ORANGE DECORATIVE DETAIL */

        .rgu-iic-patent-image::after {
            content: "";

            position: absolute;

            right: 0;
            bottom: 0;

            width: 95px;
            height: 95px;

            border-right: 8px solid #ed7d31;
            border-bottom: 8px solid #ed7d31;

            pointer-events: none;
        }


        /* =========================================================
       PATENT CONTENT
    ========================================================= */

        .rgu-iic-patent-content {
            position: relative;

            padding: 25px 20px 25px 35px;
        }

        .rgu-iic-patent-content h4 {
            margin: 0 0 32px;

            color: #1d3557;

            font-size: 1.8rem;

            font-weight: 800;

            line-height: 1.6;

            text-transform: uppercase;
        }


        /* PATENT BULLETS */

        .rgu-iic-patent-content .rgu-iic-orange-list li {
            margin-bottom: 24px;

            color: #5b6573;

            font-size: 1.5rem;

            line-height: 1.85;
        }


        /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 991px) {

            .rgu-iic-glance {
                padding: 70px 0 80px;
            }

            .rgu-iic-logo-row {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 30px;

                margin-bottom: 60px;
            }

            .rgu-iic-partner-logo {
                min-height: 110px;
            }

            .rgu-iic-partner-logo img {
                max-height: 95px;
            }

            .rgu-iic-glance-heading h2 {
                font-size: 3rem;
            }

            .rgu-iic-stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                max-width: 600px;
            }

            .rgu-iic-stat-circle {
                width: 200px;
                height: 200px;
            }


            /* PATENT */

            .rgu-iic-patent-intro {
                padding: 80px 0;
            }

            .rgu-iic-section-title {
                margin-bottom: 50px;

                font-size: 3rem;
            }

            .rgu-iic-patent-image,
            .rgu-iic-patent-image img {
                border-radius: 0 0 80px 0;
            }

            .rgu-iic-patent-image img {
                height: 430px;
            }

            .rgu-iic-patent-content {
                padding: 15px 0;
            }

        }


        /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 767px) {

            /* GLANCE */

            .rgu-iic-glance {
                padding: 55px 0 65px;
            }

            .rgu-iic-logo-row {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 20px;

                margin-bottom: 45px;
            }

            .rgu-iic-partner-logo {
                min-height: 90px;

                padding: 8px;
            }

            .rgu-iic-partner-logo img {
                max-height: 75px;
            }

            .rgu-iic-glance-heading {
                gap: 15px;

                margin-bottom: 45px;
            }

            .rgu-iic-glance-heading h2 {
                font-size: 2.3rem;
            }

            .rgu-iic-heading-line {
                max-width: 70px;
            }

            .rgu-iic-stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 20px;
            }

            .rgu-iic-stat-circle {
                width: 160px;
                height: 160px;
            }

            .rgu-iic-stat-circle::before {
                inset: 8px;
            }

            .rgu-iic-stat-content strong {
                font-size: 2.8rem;
            }

            .rgu-iic-stat-content span {
                font-size: .8rem;
            }

            .rgu-iic-stat-content .rgu-iic-stat-ongoing {
                font-size: 1.35rem;
            }


            /* PATENT */

            .rgu-iic-patent-intro {
                padding: 65px 0;
            }

            .rgu-iic-section-title {
                margin-bottom: 40px;

                font-size: 2.4rem;
            }

            .rgu-iic-patent-image,
            .rgu-iic-patent-image img {
                border-radius: 0 0 55px 0;
            }

            .rgu-iic-patent-image img {
                height: 330px;
            }

            .rgu-iic-patent-image::after {
                width: 65px;
                height: 65px;

                border-right-width: 6px;
                border-bottom-width: 6px;
            }

            .rgu-iic-patent-content {
                padding: 10px 0 0;
            }

            .rgu-iic-patent-content h4 {
                margin-bottom: 25px;

                font-size: 1.15rem;

                line-height: 1.55;
            }

            .rgu-iic-patent-content .rgu-iic-orange-list li {
                margin-bottom: 18px;

                font-size: 1rem;

                line-height: 1.75;
            }

        }


        /* =========================================================
       SMALL MOBILE
    ========================================================= */

        @media (max-width: 480px) {

            .rgu-iic-logo-row {
                gap: 15px;
            }

            .rgu-iic-partner-logo img {
                max-height: 65px;
            }

            .rgu-iic-glance-heading h2 {
                font-size: 2rem;
            }

            .rgu-iic-heading-line {
                max-width: 40px;
            }

            .rgu-iic-stats {
                gap: 15px;
            }

            .rgu-iic-stat-circle {
                width: 140px;
                height: 140px;
            }

            .rgu-iic-stat-content {
                padding: 12px;
            }

            .rgu-iic-stat-content strong {
                font-size: 2.4rem;
            }

            .rgu-iic-stat-content span {
                font-size: .7rem;
            }

            .rgu-iic-stat-content .rgu-iic-stat-ongoing {
                font-size: 1.15rem;
            }

            .rgu-iic-section-title {
                font-size: 2.1rem;
            }

            .rgu-iic-patent-image img {
                height: 285px;
            }

        }
    </style>

    <style>
        /* =========================================================
       IIC-RGU PAGE
       CSS PART 5
    ========================================================= */


        /* =========================================================
       ACHIEVEMENTS SECTION
    ========================================================= */

        .rgu-iic-achievements {
            position: relative;

            padding: 85px 0 100px;

            background: #ffffff;
        }


        /* =========================================================
       ACHIEVEMENT HEADER
    ========================================================= */

        .rgu-iic-achievement-head {
            display: flex;

            align-items: center;
            justify-content: space-between;

            gap: 30px;

            margin-bottom: 45px;
        }

        .rgu-iic-achievement-head h2 {
            margin: 0;

            color: #1d3557;

            font-size: clamp(2.8rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.15;
        }


        /* =========================================================
       ACHIEVEMENT CONTROLS
    ========================================================= */

        .rgu-iic-achievement-controls {
            display: flex;

            align-items: center;

            gap: 12px;
        }

        .rgu-iic-achievement-prev,
        .rgu-iic-achievement-next {
            width: 55px;
            height: 55px;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 0;

            border: 0;

            border-radius: 50%;

            background: #1d3557;

            color: #ffffff;

            font-size: 1.5rem;

            line-height: 1;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(29, 53, 87, 0.18);

            transition:
                background 0.3s ease,
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .rgu-iic-achievement-prev:hover,
        .rgu-iic-achievement-next:hover {
            background: #ed7d31;

            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(237, 125, 49, 0.25);
        }


        /* =========================================================
       ACHIEVEMENT SLIDER
    ========================================================= */

        .rgu-iic-achievement-slider {
            position: relative;

            width: 100%;

            overflow: hidden;
        }

        .rgu-iic-achievement-track {
            display: flex;

            gap: 28px;

            transition: transform 0.5s ease;
        }


        /* =========================================================
       ACHIEVEMENT CARD
    ========================================================= */

        .rgu-iic-achievement-card {
            flex: 0 0 calc((100% - 56px) / 3);

            min-width: 0;

            overflow: hidden;

            background: #dceff8;

            border-radius: 0 0 55px 0;

            box-shadow:
                0 10px 30px rgba(29, 53, 87, 0.08);
        }


        /* =========================================================
       ACHIEVEMENT IMAGE
    ========================================================= */

        .rgu-iic-achievement-image {
            width: 100%;

            overflow: hidden;

            background: #f5f5f5;
        }

        .rgu-iic-achievement-image img {
            display: block;

            width: 100%;
            height: 310px;

            object-fit: cover;

            transition: transform 0.4s ease;
        }

        .rgu-iic-achievement-card:hover .rgu-iic-achievement-image img {
            transform: scale(1.04);
        }


        /* =========================================================
       ACHIEVEMENT CONTENT
    ========================================================= */

        .rgu-iic-achievement-content {
            min-height: 175px;

            display: flex;

            align-items: flex-start;

            padding: 28px 28px 32px;
        }

        .rgu-iic-achievement-content h3 {
            margin: 0;

            color: #1d3557;

            font-size: 1.8rem;

            font-weight: 700;

            line-height: 1.6;
        }


        /* =========================================================
       DARK BLUE PATENT SECTION
    ========================================================= */

        .rgu-iic-patent-dark {
            position: relative;

            overflow: hidden;

            padding: 95px 0 105px;

            background: #17385d;
        }


        /* SUBTLE BACKGROUND DECORATION */

        .rgu-iic-patent-dark::before {
            content: "";

            position: absolute;

            width: 600px;
            height: 600px;

            top: -350px;
            right: -250px;

            border-radius: 50%;

            background: radial-gradient(circle,
                    rgba(255, 255, 255, 0.06),
                    transparent 70%);

            pointer-events: none;
        }

        .rgu-iic-patent-dark::after {
            content: "";

            position: absolute;

            width: 450px;
            height: 450px;

            bottom: -300px;
            left: -200px;

            border-radius: 50%;

            background: radial-gradient(circle,
                    rgba(237, 125, 49, 0.12),
                    transparent 70%);

            pointer-events: none;
        }

        .rgu-iic-patent-dark .container {
            position: relative;

            z-index: 2;
        }


        /* =========================================================
       DARK PATENT HEADING
    ========================================================= */

        .rgu-iic-patent-dark-head {
            max-width: 900px;

            margin: 0 auto 55px;

            text-align: center;
        }

        .rgu-iic-patent-dark-head h2 {
            margin: 0 0 22px;

            color: #ffffff;

            font-size: clamp(2.8rem, 4vw, 4rem);

            font-weight: 800;

            line-height: 1.15;
        }

        .rgu-iic-patent-dark-head p {
            margin: 0;

            color: rgba(255, 255, 255, 0.82);

            font-size: 1.15rem;

            font-weight: 500;

            line-height: 1.8;
        }


        /* =========================================================
       PATENT CARDS
    ========================================================= */

        .rgu-iic-patent-card {
            position: relative;

            height: 100%;

            overflow: hidden;

            padding: 38px 38px 42px;

            border-radius: 0 0 55px 0;

            background: #ffffff;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.15);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .rgu-iic-patent-card:hover {
            transform: translateY(-6px);

            box-shadow:
                0 22px 50px rgba(0, 0, 0, 0.22);
        }


        /* ORANGE ACCENT */

        .rgu-iic-patent-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 85px;
            height: 6px;

            background: #ed7d31;
        }


        /* =========================================================
       PATENT CARD TITLE
    ========================================================= */

        .rgu-iic-patent-card h3 {
            margin: 0 0 28px;

            color: #1d3557;

            font-size: 1.45rem;

            font-weight: 800;

            line-height: 1.5;
        }


        /* =========================================================
       PATENT CARD DETAILS
    ========================================================= */

        .rgu-iic-patent-card p {
            margin: 0 0 17px;

            color: #5b6573;

            font-size: 1.08rem;

            line-height: 1.75;
        }

        .rgu-iic-patent-card p:last-child {
            margin-bottom: 0;
        }

        .rgu-iic-patent-card p strong {
            color: #ed7d31;

            font-weight: 800;
        }


        /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 991px) {

            .rgu-iic-achievements {
                padding: 70px 0 80px;
            }

            .rgu-iic-achievement-head h2 {
                font-size: 3rem;
            }

            .rgu-iic-achievement-card {
                flex:
                    0 0 calc((100% - 28px) / 2);
            }

            .rgu-iic-achievement-image img {
                height: 290px;
            }


            /* DARK PATENT */

            .rgu-iic-patent-dark {
                padding: 75px 0 85px;
            }

            .rgu-iic-patent-dark-head h2 {
                font-size: 3rem;
            }

            .rgu-iic-patent-card {
                padding: 32px;
            }

        }


        /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 767px) {

            /* ACHIEVEMENTS */

            .rgu-iic-achievements {
                padding: 55px 0 65px;
            }

            .rgu-iic-achievements .rgu-iic-divider {
                margin-bottom: 40px;
            }

            .rgu-iic-achievement-head {
                align-items: flex-end;

                margin-bottom: 35px;
            }

            .rgu-iic-achievement-head h2 {
                font-size: 2.4rem;
            }

            .rgu-iic-achievement-prev,
            .rgu-iic-achievement-next {
                width: 46px;
                height: 46px;

                font-size: 1.2rem;
            }

            .rgu-iic-achievement-track {
                gap: 18px;
            }

            .rgu-iic-achievement-card {
                flex: 0 0 100%;

                border-radius: 0 0 40px 0;
            }

            .rgu-iic-achievement-image img {
                height: 280px;
            }

            .rgu-iic-achievement-content {
                min-height: auto;

                padding: 24px 22px 28px;
            }

            .rgu-iic-achievement-content h3 {
                font-size: 1.08rem;

                line-height: 1.55;
            }


            /* DARK PATENT */

            .rgu-iic-patent-dark {
                padding: 60px 0 70px;
            }

            .rgu-iic-patent-dark-head {
                margin-bottom: 40px;
            }

            .rgu-iic-patent-dark-head h2 {
                margin-bottom: 18px;

                font-size: 2.4rem;
            }

            .rgu-iic-patent-dark-head p {
                font-size: 1rem;

                line-height: 1.7;
            }

            .rgu-iic-patent-card {
                padding: 28px 24px 30px;

                border-radius: 0 0 40px 0;
            }

            .rgu-iic-patent-card h3 {
                margin-bottom: 22px;

                font-size: 1.25rem;

                line-height: 1.45;
            }

            .rgu-iic-patent-card p {
                font-size: 1rem;

                line-height: 1.7;
            }

        }


        /* =========================================================
       SMALL MOBILE
    ========================================================= */

        @media (max-width: 480px) {

            .rgu-iic-achievement-head {
                gap: 15px;
            }

            .rgu-iic-achievement-head h2 {
                font-size: 2.1rem;
            }

            .rgu-iic-achievement-prev,
            .rgu-iic-achievement-next {
                width: 42px;
                height: 42px;
            }

            .rgu-iic-achievement-image img {
                height: 240px;
            }

            .rgu-iic-patent-dark-head h2 {
                font-size: 2.1rem;
            }

            .rgu-iic-patent-card h3 {
                font-size: 1.18rem;
            }

        }
    </style>

    <style>
        /* =========================================================
       IIC-RGU PAGE
       CSS PART 6
    ========================================================= */


        /* =========================================================
       ACTIVITIES SECTION
    ========================================================= */

        .rgu-iic-activities {
            position: relative;

            padding: 90px 0 110px;

            background: #ffffff;
        }


        /* =========================================================
       ACADEMIC YEAR TABS
    ========================================================= */

        .rgu-iic-tabs {
            display: flex;

            align-items: center;
            justify-content: center;

            flex-wrap: wrap;

            gap: 12px;

            margin-bottom: 65px;
        }


        /* TAB BUTTON */

        .rgu-iic-tab-btn {
            position: relative;

            min-width: 145px;

            padding: 16px 24px;

            border: 1px solid rgba(29, 53, 87, 0.16);

            border-radius: 5px;

            background: #ffffff;

            color: #1d3557;

            font-size: 1rem;

            font-weight: 700;

            line-height: 1.4;

            text-align: center;

            cursor: pointer;

            transition:
                background 0.3s ease,
                color 0.3s ease,
                border-color 0.3s ease,
                transform 0.3s ease;
        }

        .rgu-iic-tab-btn:hover {
            border-color: #ed7d31;

            color: #ed7d31;
        }


        /* ACTIVE TAB */

        .rgu-iic-tab-btn.active {
            background: #ed7d31;

            border-color: #ed7d31;

            color: #ffffff;

            box-shadow:
                0 8px 22px rgba(237, 125, 49, 0.22);
        }


        /* =========================================================
       TAB CONTENT
    ========================================================= */

        .rgu-iic-tab-content {
            display: none;

            width: 100%;
        }

        .rgu-iic-tab-content.active {
            display: block;
        }


        /* =========================================================
       ACTIVITIES TITLE
    ========================================================= */

        .rgu-iic-activities-title {
            margin: 0 0 45px;

            color: #1d3557;

            font-size: clamp(2.5rem, 4vw, 3.8rem);

            font-weight: 800;

            line-height: 1.15;

            text-align: center;
        }


        /* =========================================================
       EMPTY / FUTURE TAB CONTENT
    ========================================================= */

        .rgu-iic-coming-content {
            min-height: 80px;
        }


        /* =========================================================
       ACTIVITY TABLE WRAPPER
    ========================================================= */

        .rgu-iic-activity-table-wrap {
            width: 100%;

            overflow-x: auto;

            margin-bottom: 55px;

            border-radius: 8px;

            border: 1px solid rgba(29, 53, 87, 0.12);

            background: #ffffff;

            box-shadow:
                0 10px 35px rgba(29, 53, 87, 0.06);
        }


        /* =========================================================
       ACTIVITY TABLE
    ========================================================= */

        .rgu-iic-activity-table {
            width: 100%;

            min-width: 780px;

            margin: 0;

            border-collapse: collapse;

            background: #ffffff;
        }


        /* TABLE HEADER */

        .rgu-iic-activity-table thead {
            background: #1d3557;
        }

        .rgu-iic-activity-table th {
            padding: 20px 22px;

            border-right:
                1px solid rgba(255, 255, 255, 0.15);

            color: #ffffff;

            font-size: 1.8rem;

            font-weight: 700;

            line-height: 1.5;

            text-align: left;
        }

        .rgu-iic-activity-table th:last-child {
            border-right: 0;
        }


        /* COLUMN WIDTHS */

        .rgu-iic-activity-table th:first-child,
        .rgu-iic-activity-table td:first-child {
            width: 100px;

            text-align: center;
        }

        .rgu-iic-activity-table th:last-child,
        .rgu-iic-activity-table td:last-child {
            width: 190px;
        }


        /* TABLE BODY */

        .rgu-iic-activity-table td {
            padding: 18px 22px;

            border-right:
                1px solid rgba(29, 53, 87, 0.10);

            border-bottom:
                1px solid rgba(29, 53, 87, 0.10);

            color: #5b6573;

            font-size: 1.5rem;

            font-weight: 400;

            line-height: 1.65;

            vertical-align: middle;
        }

        .rgu-iic-activity-table td:last-child {
            border-right: 0;
        }

        .rgu-iic-activity-table tbody tr:last-child td {
            border-bottom: 0;
        }


        /* ALTERNATING ROW */

        .rgu-iic-activity-table tbody tr:nth-child(even) {
            background: #f4f9fc;
        }


        /* ROW HOVER */

        .rgu-iic-activity-table tbody tr {
            transition: background 0.25s ease;
        }

        .rgu-iic-activity-table tbody tr:hover {
            background: #eaf5fa;
        }


        /* SERIAL NUMBER */

        .rgu-iic-activity-table td:first-child {
            color: #ed7d31;

            font-weight: 800;
        }


        /* DATE */

        .rgu-iic-activity-table td:last-child {
            color: #1d3557;

            font-weight: 600;
        }


        /* =========================================================
       ACTIVITY GALLERY
    ========================================================= */

        .rgu-iic-activity-gallery {
            position: relative;

            width: 100%;

            margin-top: 25px;
        }


        /* =========================================================
       GALLERY TRACK
    ========================================================= */

        .rgu-iic-gallery-track {
            position: relative;

            width: 100%;

            overflow: hidden;
        }


        /* =========================================================
       GALLERY ITEM
    ========================================================= */

        .rgu-iic-gallery-item {
            display: none;

            width: 100%;
        }

        .rgu-iic-gallery-item.active {
            display: block;
        }


        /* =========================================================
       GALLERY IMAGE
    ========================================================= */

        .rgu-iic-gallery-item img {
            display: block;

            width: 100%;
            height: 560px;

            object-fit: cover;

            border-radius: 0 0 90px 0;
        }


        /* =========================================================
       GALLERY CONTROLS
    ========================================================= */

        .rgu-iic-gallery-controls {
            display: flex;

            align-items: center;
            justify-content: flex-end;

            gap: 12px;

            margin-top: 25px;
        }


        /* GALLERY BUTTONS */

        .rgu-iic-gallery-prev,
        .rgu-iic-gallery-next {
            width: 55px;
            height: 55px;

            display: flex;

            align-items: center;
            justify-content: center;

            padding: 0;

            border: 0;

            border-radius: 50%;

            background: #1d3557;

            color: #ffffff;

            font-size: 1.5rem;

            line-height: 1;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(29, 53, 87, 0.18);

            transition:
                background 0.3s ease,
                transform 0.3s ease,
                box-shadow 0.3s ease;
        }

        .rgu-iic-gallery-prev:hover,
        .rgu-iic-gallery-next:hover {
            background: #ed7d31;

            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(237, 125, 49, 0.25);
        }


        /* =========================================================
       BUTTON FOCUS
    ========================================================= */

        .rgu-iic-tab-btn:focus-visible,
        .rgu-iic-project-prev:focus-visible,
        .rgu-iic-project-next:focus-visible,
        .rgu-iic-achievement-prev:focus-visible,
        .rgu-iic-achievement-next:focus-visible,
        .rgu-iic-gallery-prev:focus-visible,
        .rgu-iic-gallery-next:focus-visible {
            outline: 3px solid rgba(237, 125, 49, 0.4);

            outline-offset: 3px;
        }


        /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 991px) {

            .rgu-iic-activities {
                padding: 75px 0 85px;
            }

            .rgu-iic-tabs {
                margin-bottom: 50px;
            }

            .rgu-iic-tab-btn {
                min-width: 135px;

                padding: 14px 20px;

                font-size: 0.95rem;
            }

            .rgu-iic-activities-title {
                margin-bottom: 40px;

                font-size: 3rem;
            }

            .rgu-iic-gallery-item img {
                height: 480px;

                border-radius: 0 0 70px 0;
            }

        }


        /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 767px) {

            .rgu-iic-activities {
                padding: 60px 0 70px;
            }


            /* TABS */

            .rgu-iic-tabs {
                display: grid;

                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 10px;

                margin-bottom: 40px;
            }

            .rgu-iic-tab-btn {
                width: 100%;
                min-width: 0;

                padding: 14px 10px;

                font-size: 0.9rem;
            }

            .rgu-iic-tab-btn:last-child {
                grid-column: 1 / -1;
            }


            /* TITLE */

            .rgu-iic-activities-title {
                margin-bottom: 30px;

                font-size: 2.35rem;

                line-height: 1.2;
            }


            /* TABLE */

            .rgu-iic-activity-table-wrap {
                margin-bottom: 40px;

                border-radius: 6px;
            }

            .rgu-iic-activity-table {
                min-width: 680px;
            }

            .rgu-iic-activity-table th {
                padding: 16px 18px;

                font-size: 0.95rem;
            }

            .rgu-iic-activity-table td {
                padding: 15px 18px;

                font-size: 0.95rem;

                line-height: 1.55;
            }

            .rgu-iic-activity-table th:first-child,
            .rgu-iic-activity-table td:first-child {
                width: 80px;
            }

            .rgu-iic-activity-table th:last-child,
            .rgu-iic-activity-table td:last-child {
                width: 160px;
            }


            /* GALLERY */

            .rgu-iic-gallery-item img {
                height: 350px;

                border-radius: 0 0 50px 0;
            }

            .rgu-iic-gallery-controls {
                justify-content: flex-start;

                margin-top: 20px;
            }

            .rgu-iic-gallery-prev,
            .rgu-iic-gallery-next {
                width: 48px;
                height: 48px;

                font-size: 1.25rem;
            }

        }


        /* =========================================================
       SMALL MOBILE
    ========================================================= */

        @media (max-width: 480px) {

            .rgu-iic-activities {
                padding: 50px 0 60px;
            }

            .rgu-iic-tabs {
                gap: 8px;

                margin-bottom: 35px;
            }

            .rgu-iic-tab-btn {
                padding: 13px 7px;

                font-size: 0.82rem;
            }

            .rgu-iic-activities-title {
                font-size: 2.05rem;
            }

            .rgu-iic-gallery-item img {
                height: 280px;

                border-radius: 0 0 40px 0;
            }

        }


        /* =========================================================
       FINAL PAGE CLEANUP
    ========================================================= */

        /* Prevent text from overflowing */

        .rgu-iic-page h1,
        .rgu-iic-page h2,
        .rgu-iic-page h3,
        .rgu-iic-page h4,
        .rgu-iic-page h5,
        .rgu-iic-page h6,
        .rgu-iic-page p,
        .rgu-iic-page li,
        .rgu-iic-page td,
        .rgu-iic-page th {
            overflow-wrap: break-word;
        }


        /* Keep all images responsive */

        .rgu-iic-page img {
            max-width: 100%;
        }


        /* Remove accidental Bootstrap paragraph margins */

        .rgu-iic-page p:last-child {
            margin-bottom: 0;
        }


        /* Keep buttons inheriting site font */

        .rgu-iic-page button {
            font-family: inherit;
        }


        /* Prevent button text selection */

        .rgu-iic-project-prev,
        .rgu-iic-project-next,
        .rgu-iic-achievement-prev,
        .rgu-iic-achievement-next,
        .rgu-iic-gallery-prev,
        .rgu-iic-gallery-next {
            user-select: none;
        }


        /* Smooth slider movement */

        .rgu-iic-achievement-track {
            will-change: transform;
        }


        /* Prevent horizontal page overflow */

        .rgu-iic-page {
            overflow-x: hidden;
        }


        /* =========================================================
       VERY SMALL MOBILE
    ========================================================= */

        @media (max-width: 360px) {

            .rgu-iic-tabs {
                grid-template-columns: 1fr;
            }

            .rgu-iic-tab-btn:last-child {
                grid-column: auto;
            }

            .rgu-iic-activities-title {
                font-size: 1.85rem;
            }

            .rgu-iic-gallery-item img {
                height: 240px;
            }

        }
    </style>


    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/icc/cover.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Institution's Innovation Council (IIC-RGU)</h1>
            <div class="pg-hero-breadcrumb">
                Academics / Research & Innovation / Institution's Innovation Council (IIC-RGU)
            </div>
        </div>

    </section>

    <!-- =========================================================
         IIC-RGU PAGE
         HTML PART 1
    ========================================================= -->

    <div class="rgu-iic-page">

        <!-- =====================================================
             IIC-RGU INTRODUCTION
        ====================================================== -->

        <section class="rgu-iic-intro">

            <div class="container">

                <div class="row align-items-center g-5">

                    <!-- IMAGE -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-intro-image">

                            <img src="https://rgu.ac/mobile-assets/innovation-cell/headimg1.jpg"
                                alt="Institution's Innovation Council RGU">

                        </div>

                    </div>


                    <!-- CONTENT -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-intro-content">

                            <h1>
                                Institution’s<br>
                                Innovation Council (IIC-RGU)
                            </h1>

                            <p>
                                Ministry of Education (MoE), Govt. of India established
                                Institution’s Innovation Council in the year 2018.
                                Different educational institutions in the country are
                                part of this initiative. The motive of this program is
                                to systematically foster the culture of innovation
                                amongst all Higher Education Institutions (HEIs).
                                The Assam Royal Global University becomes a part of
                                this initiative in the year 2019 and established the
                                IIC-RGU. The IIC-RGU has achieved 3 Star rating out
                                of 4 Stars in the year 2021 result published by MoE,
                                AICTE. The primary mandate of IIC-RGU is to encourage,
                                inspire and nurture young students by supporting them
                                to work with new ideas and transform them. The Royal
                                Innovation Incubator was established in the year 2021
                                under IIC-RGU. The Managing Director of RNL inaugurated
                                the Royal Innovation Incubator. The focus of the
                                incubator is to create an ecosystem of innovation and
                                entrepreneurship development and create an awareness
                                of IPR activity.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             GLIMPSE OF INNOVATION
        ====================================================== -->

        <section class="rgu-iic-glimpse">

            <div class="container">

                <div class="rgu-iic-glimpse-inner">

                    <h2 class="rgu-iic-light-title">
                        Glimpse of Innovation
                    </h2>


                    <div class="row g-4">


                        <!-- CARD 01 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="rgu-iic-glimpse-card">

                                <div class="rgu-iic-glimpse-image">

                                    <img src="/new-web/assets/icc/innovations/Food-Cart.png"
                                        alt="3-Wheeler Electric Operated Food Cart">

                                </div>

                                <div class="rgu-iic-glimpse-content">

                                    <h3>
                                        3 - Wheeler Electric Operated
                                    </h3>

                                    <h4>
                                        Food Cart
                                    </h4>

                                </div>

                            </div>

                        </div>


                        <!-- CARD 02 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="rgu-iic-glimpse-card">

                                <div class="rgu-iic-glimpse-image">

                                    <img src="/new-web/assets/icc/innovations/banana-leaf-cutter.png" alt="Banana Leaf Cutter">

                                </div>

                                <div class="rgu-iic-glimpse-content">

                                    <h3>
                                        Banana Leaf
                                    </h3>

                                    <h4>
                                        Cutter
                                    </h4>

                                </div>

                            </div>

                        </div>


                        <!-- CARD 03 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="rgu-iic-glimpse-card">

                                <div class="rgu-iic-glimpse-image">

                                    <img src="/new-web/assets/icc/innovations/electric-car.png"
                                        alt="4-Wheeler Electric Operated Car">

                                </div>

                                <div class="rgu-iic-glimpse-content">

                                    <h3>
                                        4 - Wheeler Electric Operated
                                    </h3>

                                    <h4>
                                        Car
                                    </h4>

                                </div>

                            </div>

                        </div>


                        <!-- CARD 04 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="rgu-iic-glimpse-card">

                                <div class="rgu-iic-glimpse-image">

                                    <img src="/new-web/assets/icc/innovations/bio-gas-plant.png" alt="Bio Gas Plant">

                                </div>

                                <div class="rgu-iic-glimpse-content">

                                    <h3>
                                        Bio Gas
                                    </h3>

                                    <h4>
                                        Plant
                                    </h4>

                                </div>

                            </div>

                        </div>


                        <!-- CARD 05 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="rgu-iic-glimpse-card">

                                <div class="rgu-iic-glimpse-image">

                                    <img src="/new-web/assets/icc/innovations/robo-chef.png" alt="Robo Chef V1">

                                </div>

                                <div class="rgu-iic-glimpse-content">

                                    <h3>
                                        Robo Chef
                                    </h3>

                                    <h4>
                                        V1
                                    </h4>

                                </div>

                            </div>

                        </div>


                        <!-- CARD 06 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="rgu-iic-glimpse-card">

                                <div class="rgu-iic-glimpse-image">

                                    <img src="/new-web/assets/icc/innovations/3d-printer.png" alt="3D Printer">

                                </div>

                                <div class="rgu-iic-glimpse-content">

                                    <h3>
                                        3D
                                    </h3>

                                    <h4>
                                        Printer
                                    </h4>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             STRATEGY FOR PROMOTING ENTREPRENEURSHIP
             AND INNOVATION
        ====================================================== -->

        <section class="rgu-iic-content-section">

            <div class="container">

                <div class="rgu-iic-feature-row">

                    <div class="row align-items-center g-5">


                        <!-- IMAGE -->

                        <div class="col-lg-6">

                            <div class="rgu-iic-feature-image rgu-iic-image-bottom-right">

                                <img src="/new-web/assets/icc/event/event1.png"
                                    alt="Strategy For Promoting Entrepreneurship And Innovation">

                            </div>

                        </div>


                        <!-- CONTENT -->

                        <div class="col-lg-6">

                            <div class="rgu-iic-feature-content">

                                <h2>
                                    Strategy For Promoting
                                    Entrepreneurship And
                                    Innovation
                                </h2>

                                <div class="rgu-iic-date">
                                    Date: 09 February 2026
                                </div>

                                <p>
                                    As Dr Sriparna Bhuyan delivered an enriching lecture
                                    on “Strategy for Promoting Entrepreneurship and
                                    Innovation”, the session was attended by Deans,
                                    HoDs and Faculty members from various departments
                                    of RGU.
                                </p>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>

        <!-- =====================================================
             STRENGTHENING INNOVATION & ENTREPRENEURSHIP
        ====================================================== -->

        <section class="rgu-iic-content-section">

            <div class="container">

                <div class="rgu-iic-divider"></div>

                <div class="rgu-iic-feature-row">

                    <div class="row align-items-center g-5">


                        <!-- CONTENT -->

                        <div class="col-lg-6">

                            <div class="rgu-iic-feature-content">

                                <h2>
                                    Strengthening Innovation &amp;
                                    Entrepreneurship At Royal
                                    Global University!
                                </h2>

                                <h4 class="rgu-iic-orange-heading">
                                    We Are Delighted To Announce That The Assam Royal
                                    Global University (RGU) Has Signed Two Landmark
                                    Memorandums Of Understanding (MoUs) On 18 November
                                    2025 With:
                                </h4>

                                <p>
                                    As Dr Sriparna Bhuyan delivered an enriching lecture
                                    on “Strategy for Promoting Entrepreneurship and
                                    Innovation”, the session was attended by Deans,
                                    HoDs and Faculty members from various departments
                                    of RGU.
                                </p>


                                <div class="rgu-iic-mou-organisations">

                                    <h3>
                                        1. IIM Calcutta Innovation Park (IIMCIP)
                                    </h3>

                                    <h3>
                                        2. IIMCIP – Technology And Innovation Council
                                        (IIMCIP-TIC)
                                    </h3>

                                </div>


                                <p>
                                    The MoU signings were conducted in the gracious
                                    presence of Registrar (Admin), Prof. (Dr.) Diganta
                                    Munshi, and were guided and supported by our Hon’ble
                                    Vice Chancellor, Prof. Alak K. Buragohain. These
                                    collaborations mark a major step toward creating a
                                    vibrant innovation and startup ecosystem within
                                    our university.
                                </p>

                            </div>

                        </div>


                        <!-- IMAGE -->

                        <div class="col-lg-6">

                            <div class="rgu-iic-feature-image rgu-iic-image-bottom-left">

                                <img src="/new-web/assets/icc/event/event2.png" alt="RGU Innovation and Entrepreneurship MoU">

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             MOU DETAILS
        ====================================================== -->

        <section class="rgu-iic-mou-details">

            <div class="container">

                <div class="rgu-iic-divider"></div>


                <div class="row g-5">


                    <!-- MOU WITH IIMCIP -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-mou-column">

                            <h2>
                                MoU With IIMCIP
                            </h2>

                            <h4>
                                Under This Partnership, RGU And IIMCIP
                                Will Work Together To:
                            </h4>


                            <ul class="rgu-iic-orange-list">

                                <li>
                                    Promote a culture of innovation and
                                    entrepreneurship among students
                                </li>

                                <li>
                                    Nurture and launch student-led startups
                                </li>

                                <li>
                                    Establish an Entrepreneurship Development
                                    Cell on campus
                                </li>

                            </ul>

                        </div>

                    </div>


                    <!-- MOU WITH IIMCIP-TIC -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-mou-column">

                            <h2>
                                MoU With IIMCIP-TIC
                            </h2>

                            <h4>
                                This Collaboration Focuses On Empowering
                                Engineering Students By:
                            </h4>


                            <ul class="rgu-iic-orange-list">

                                <li>
                                    Setting up and running a Build Club on campus
                                </li>

                                <li>
                                    Enhancing product development skills
                                </li>

                                <li>
                                    Strengthening hands-on innovation and
                                    early-stage prototyping culture
                                </li>

                            </ul>

                        </div>

                    </div>


                </div>


                <div class="rgu-iic-mou-bottom-text">

                    <p>
                        These partnerships reflect RGU’s commitment to fostering
                        creativity, technology-led growth, and entrepreneurial
                        excellence among our students. Together, we are building
                        the next generation of innovators and leaders!
                    </p>

                </div>

            </div>

        </section>


        <!-- =====================================================
             INNOVATION PROJECT SLIDER
        ====================================================== -->

        <section class="rgu-iic-projects">

            <div class="container">

                <div class="rgu-iic-project-slider">


                    <!-- =========================================
                        PROJECT SLIDE 02 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide active">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/car.png" alt="Food Carrier Project">

                                </div>
                            </div>


                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/SRP/150323/0005
                                    </div>

                                    <h2>
                                        Food Carrier
                                    </h2>

                                    <p>
                                        An electric vehicle specially designed for food carrying,
                                        featuring improved accessibility and an efficient electric
                                        power system.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Electric Vehicle.</li>
                                        <li>Specially designed for food carrier.</li>
                                        <li>Butterfly door design for better accessibility.</li>
                                        <li>Range of 80–90 km on a 5.7 kW battery and 1.2 kW motor.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        Project ID: IIC-RGU/SRP/150323/0005
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        PROJECT SLIDE 03 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/robochef.png" alt="Robo Chef Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/SRP/140723/0001
                                    </div>

                                    <h2>
                                        Robo Chef
                                    </h2>

                                    <p>
                                        The Smart Autonomous Rice Cooker designed to provide
                                        convenient and automated rice cooking with smart controls.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Cooking of rice without human presence.</li>
                                        <li>Cooking facility from mobile app.</li>
                                        <li>Option to select cooking time as per user's requirement.</li>
                                        <li>Flexible storage capacity.</li>
                                        <li>Effortless operation.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        The Smart Autonomous Rice Cooker for convenient,
                                        flexible and effortless cooking.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        PROJECT SLIDE 04 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/print-instru.png"
                                        alt="3D Printed Traditional Decorative Items Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/FRP/200323/0001
                                    </div>

                                    <h2>
                                        3D Printed Traditional Decorative Items
                                    </h2>

                                    <p>
                                        A project focused on creating traditional decorative items
                                        using 3D printing technology, offering lightweight,
                                        flexible and cost-effective alternatives.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Light weight.</li>
                                        <li>Flexible size.</li>
                                        <li>Low cost.</li>
                                        <li>Finest traditional items.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        Sold 350 pieces to Lokaratnagava Pvt. Ltd.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        PROJECT SLIDE 05 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/pen.png" alt="Bamboo Marker Pen Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/FRP/150623/0002
                                    </div>

                                    <h2>
                                        Bamboo Marker Pen
                                    </h2>

                                    <p>
                                        An eco-friendly marker pen developed using locally available
                                        and biodegradable materials, with potential to support and
                                        engage local farmers.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Contains only biodegradable materials.</li>
                                        <li>Locally available materials.</li>
                                        <li>Ecofriendly.</li>
                                        <li>Low cost.</li>
                                        <li>Potential to engage local farmers.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        Patent published and FER submitted.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        PROJECT SLIDE 06 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/basket.png"
                                        alt="Volleyball Smash Training Machine Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/SRP/090523/0001
                                    </div>

                                    <h2>
                                        Volleyball Smash Training Machine
                                    </h2>

                                    <p>
                                        An innovative volleyball training machine designed to
                                        assist players in improving their smashing skills through
                                        an energy-efficient and eco-friendly mechanism.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Zero energy requirement.</li>
                                        <li>Modified slider crank mechanism.</li>
                                        <li>Eco-friendly material.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        An energy-efficient and eco-friendly solution for
                                        volleyball smash training.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        PROJECT SLIDE 07 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/biogas.png" alt="Biogas Plant Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/SRP/0623/0004
                                    </div>

                                    <h2>
                                        Biogas Plant
                                    </h2>

                                    <p>
                                        A portable biogas plant designed with integrated gas
                                        compression and storage capabilities for efficient
                                        biogas production.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Portable design.</li>
                                        <li>Integrated with 3 m³ gravity-assisted green compressor and storage.</li>
                                        <li>3 m³ gas production per 40 kg slurry in experiment.</li>
                                        <li>Saves valuable time.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        Efficient biogas production with portable design,
                                        integrated compression and storage.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- =========================================
                        PROJECT SLIDE 08 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/straw-counting.png"
                                        alt="Compact Straw Counting and Packing Device Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/SRP/240623/0003
                                    </div>

                                    <h2>
                                        Compact Straw Counting and Packing Device
                                    </h2>

                                    <p>
                                        A compact and versatile device designed for efficient
                                        counting and packing of both plastic and paper straws
                                        using environmentally friendly materials.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Compact design.</li>
                                        <li>Versatile functionality: both plastic and paper straws can be packed.</li>
                                        <li>Eco-friendly build: environment-friendly materials.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        A compact, versatile and eco-friendly solution for
                                        straw counting and packing.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =========================================
                        PROJECT SLIDE 10 - SLIDE
                        ========================================== -->

                    <div class="rgu-iic-project-slide">

                        <div class="row align-items-center g-5">

                            <!-- IMAGE -->
                            <div class="col-lg-6">
                                <div class="rgu-iic-project-image">

                                    <img src="/new-web/assets/icc/glimpse/hot-press.png" alt="Hot Press Machine Project">

                                </div>
                            </div>

                            <!-- CONTENT -->
                            <div class="col-lg-6">

                                <div class="rgu-iic-project-content">

                                    <div class="rgu-iic-project-label">
                                        PROJECT ID: IIC-RGU/SRP/140723/0002
                                    </div>

                                    <h2>
                                        Hot Press Machine
                                    </h2>

                                    <p>
                                        A portable hot press machine featuring organic leaf
                                        shaping technology and a combined lever and screw
                                        force system.
                                    </p>

                                    <ul class="rgu-iic-project-list">
                                        <li>Organic leaf shaping technology.</li>
                                        <li>Lever and screw combined force system.</li>
                                        <li>Portable design.</li>
                                    </ul>

                                    <div class="rgu-iic-project-result">
                                        A portable solution for efficient organic leaf shaping
                                        using a combined lever and screw force system.
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>




                    <!-- =========================================
                         SLIDER CONTROLS
                    ========================================== -->

                    <div class="rgu-iic-project-controls">

                        <button type="button" class="rgu-iic-project-prev" aria-label="Previous Project">
                            &#8592;
                        </button>

                        <button type="button" class="rgu-iic-project-next" aria-label="Next Project">
                            &#8594;
                        </button>

                    </div>


                </div>

            </div>

        </section>

        <!-- =====================================================
             OBJECTIVES
        ====================================================== -->

        <section class="rgu-iic-objectives">

            <div class="container">

                <div class="row align-items-center g-5">


                    <!-- OBJECTIVES CONTENT -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-objectives-content">

                            <h2>
                                Objectives
                            </h2>


                            <ul class="rgu-iic-orange-list rgu-iic-objective-list">

                                <li>
                                    To conduct various innovation and
                                    entrepreneurship-related activities.
                                </li>

                                <li>
                                    Identify and reward innovations and
                                    share success stories.
                                </li>

                                <li>
                                    Organize periodic workshops/seminars/interactions
                                    with entrepreneurs, investors, and professionals
                                    and create a mentor pool for student innovators.
                                </li>

                                <li>
                                    Network with peers and national entrepreneurship
                                    development organizations.
                                </li>

                                <li>
                                    Organize Hackathons, idea competitions, and
                                    challenges with the involvement of industries.
                                </li>

                                <li>
                                    To generate awareness about Patents, Copyright,
                                    and IPRs within the HEI.
                                </li>

                            </ul>

                        </div>

                    </div>


                    <!-- OBJECTIVES IMAGE -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-objectives-image">

                            <img src="new-web/assets/icc/objective-img.png" alt="Royal Innovation Incubator">

                        </div>

                    </div>


                </div>

            </div>

        </section>


        <!-- =====================================================
             INNOVATIONS AT A GLANCE
        ====================================================== -->

        <section class="rgu-iic-glance">

            <div class="container">

                <div class="rgu-iic-glance-inner">


                    <!-- =========================================
                         ORGANISATION LOGOS
                    ========================================== -->

                    <div class="rgu-iic-logo-row">

                        <div class="rgu-iic-partner-logo">

                            <img src="/new-web/assets/icc/logos/iic-govt-logo.jpg" alt="Institution's Innovation Council">

                        </div>


                        <div class="rgu-iic-partner-logo">

                            <img src="/new-web/assets/icc/logos/rgu-logo.jpg" alt="The Assam Royal Global University">

                        </div>


                        <div class="rgu-iic-partner-logo">

                            <img src="/new-web/assets/icc/logos/iic-rgu.jpg" alt="IIC RGU">

                        </div>


                        <div class="rgu-iic-partner-logo">

                            <img src="/new-web/assets/icc/logos/r-incubator.jpg" alt="Royal Innovation Incubator">

                        </div>

                    </div>


                    <!-- =========================================
                         TITLE
                    ========================================== -->

                    <div class="rgu-iic-glance-heading">

                        <span class="rgu-iic-heading-line"></span>

                        <h2>
                            Innovations At A Glance
                        </h2>

                        <span class="rgu-iic-heading-line"></span>

                    </div>


                    <!-- =========================================
                         STATISTICS
                    ========================================== -->

                    <div class="rgu-iic-stats">


                        <!-- STAT 01 -->

                        <div class="rgu-iic-stat-circle">

                            <div class="rgu-iic-stat-content">

                                <strong>
                                    19
                                </strong>

                                <span>
                                    PROJECTS<br>
                                    COMPLETED
                                </span>

                            </div>

                        </div>


                        <!-- STAT 02 -->

                        <div class="rgu-iic-stat-circle">

                            <div class="rgu-iic-stat-content">

                                <strong>
                                    02
                                </strong>

                                <span>
                                    COMMERCIALIZED
                                </span>

                            </div>

                        </div>


                        <!-- STAT 03 -->

                        <div class="rgu-iic-stat-circle">

                            <div class="rgu-iic-stat-content">

                                <strong>
                                    48
                                </strong>

                                <span>
                                    PATENTS
                                </span>

                            </div>

                        </div>


                        <!-- STAT 04 -->

                        <div class="rgu-iic-stat-circle">

                            <div class="rgu-iic-stat-content">

                                <strong class="rgu-iic-stat-ongoing">
                                    Ongoing
                                </strong>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             INSTITUTIONAL PATENT PUBLISHED
             INTRODUCTION
        ====================================================== -->

        <!-- <section class="rgu-iic-patent-intro">

                <div class="container">

                    <h2 class="rgu-iic-section-title">
                        Institutional Patent Published
                    </h2>


                    <div class="row align-items-center g-5">



                        
                        <div class="col-lg-6">

                            <div class="rgu-iic-patent-image">

                                <img src="YOUR-INSTITUTIONAL-PATENT-IMAGE.jpg" alt="Institutional Patent Published">

                            </div>

                        </div>



                        
                        <div class="col-lg-6">

                            <div class="rgu-iic-patent-content">

                                <h4>
                                    The Criteria And Job Selection Process Adopted
                                    For Selection By Most Companies Is As Follows:
                                </h4>


                                <ul class="rgu-iic-orange-list">

                                    <li>
                                        Marker Pen made of Biodegradable Materials
                                        application no. 202231045258, Innovators
                                        Dr. Hirak Ranjan Das and Dr. Sankar Barma.
                                    </li>

                                    <li>
                                        IA Portable Device to Cut Soft Sheets in
                                        Circular Shape with Adjustable Radius
                                        application no. 202231021448. Innovators
                                        Dr. Sankar Barma, Dr. Hirak Ranjan Das
                                        Mr. Sasanka Boruah and Mr. Nirakar Nath.
                                    </li>

                                </ul>

                            </div>

                        </div>


                    </div>

                </div>

            </section> -->

        <!-- =====================================================
             ACHIEVEMENTS
        ====================================================== -->

        <section class="rgu-iic-achievements">

            <div class="container">

                <div class="rgu-iic-divider"></div>


                <!-- HEADING + CONTROLS -->

                <div class="rgu-iic-achievement-head">

                    <h2>
                        Achievements
                    </h2>


                    <div class="rgu-iic-achievement-controls">

                        <button type="button" class="rgu-iic-achievement-prev" aria-label="Previous Achievement">
                            &#8592;
                        </button>

                        <button type="button" class="rgu-iic-achievement-next" aria-label="Next Achievement">
                            &#8594;
                        </button>

                    </div>

                </div>


                <!-- ACHIEVEMENT SLIDER -->

                <div class="rgu-iic-achievement-slider">

                    <div class="rgu-iic-achievement-track">


                        <!-- =====================================
                             ACHIEVEMENT 01
                        ====================================== -->

                        <div class="rgu-iic-achievement-card">

                            <div class="rgu-iic-achievement-image">

                                <img src="/new-web/assets/icc/achievements/achieve1.png" alt="IIC RGU 3 Star Rating">

                            </div>

                            <div class="rgu-iic-achievement-content">

                                <h3>
                                    Received 3 Star Rating In The Year
                                    2020 - 2021 MoE/AICTE
                                </h3>

                            </div>

                        </div>


                        <!-- =====================================
                             ACHIEVEMENT 02
                        ====================================== -->

                        <div class="rgu-iic-achievement-card">

                            <div class="rgu-iic-achievement-image">

                                <img src="/new-web/assets/icc/achievements/achieve2.png"
                                    alt="Best Mentor Award For Innovation">

                            </div>

                            <div class="rgu-iic-achievement-content">

                                <h3>
                                    Dr. Hirak Ranjan Das was awarded as Best Mentor award for innovation at Green
                                    Innovation Ecosystem organized by NERAMAC
                                </h3>

                            </div>

                        </div>


                        <!-- =====================================
                             ACHIEVEMENT 03
                        ====================================== -->

                        <div class="rgu-iic-achievement-card">

                            <div class="rgu-iic-achievement-image">

                                <img src="/new-web/assets/icc/achievements/achieve3.png"
                                    alt="Electric Car Exhibition Achievement">

                            </div>

                            <div class="rgu-iic-achievement-content">

                                <h3>
                                    Students have demonstrated the concept of an electric car during the exhibition
                                    organized by Second Society and achieved 2nd Prize followed by IITG
                                </h3>

                            </div>

                        </div>

                        <!-- =====================================
                             ACHIEVEMENT 03
                        ====================================== -->

                        <div class="rgu-iic-achievement-card">

                            <div class="rgu-iic-achievement-image">

                                <img src="/new-web/assets/icc/achievements/achieve4.png"
                                    alt="Electric Car Exhibition Achievement">

                            </div>

                            <div class="rgu-iic-achievement-content">

                                <h3>
                                    Received recognition from Atal Ranking of Institute on Innovation Achievements by
                                    Ministry of Education's Innovation Cell, Govt. of India
                                </h3>

                            </div>

                        </div>

                        <!-- =====================================
                             ACHIEVEMENT 03
                        ====================================== -->

                        <div class="rgu-iic-achievement-card">

                            <div class="rgu-iic-achievement-image">

                                <img src="/new-web/assets/icc/achievements/achieve5.png"
                                    alt="Electric Car Exhibition Achievement">

                            </div>

                            <div class="rgu-iic-achievement-content">

                                <h3>
                                    Received the award for the first position among the Private Universities for
                                    innovation at the North-East Research Conclave (NERC) at IITG organized by IIT
                                    Guwahati, India, Science, Technology and Climate Change Dept. & Dept. of Education,
                                    Govt. of Assam.
                                </h3>

                            </div>

                        </div>





                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             INSTITUTIONAL PATENT PUBLISHED
             DARK BLUE SECTION
        ====================================================== -->

        <section class="rgu-iic-patent-dark">

            <div class="container">

                <div class="rgu-iic-patent-dark-head">

                    <h2>
                        Institutional Patent Published
                    </h2>

                    <p>
                        The Criteria And Job Selection Process Adopted
                        For Selection By Most<br class="d-none d-lg-block">
                        Companies Is As Follows:
                    </p>

                </div>


                <div class="row g-4">


                    <!-- =========================================
                         PATENT CARD 01
                    ========================================== -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-patent-card">

                            <h3>
                                Marker Pen Made Of Biodegradable
                                Materials
                            </h3>

                            <p>
                                <strong>
                                    Application No. :
                                </strong>

                                202231045258
                            </p>

                            <p>
                                <strong>
                                    Innovators :
                                </strong>

                                Dr. Hirak Ranjan Das and
                                Dr. Sankar Barma.
                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         PATENT CARD 02
                    ========================================== -->

                    <div class="col-lg-6">

                        <div class="rgu-iic-patent-card">

                            <h3>
                                A Portable Device To Cut Soft Sheets
                                In Circular Shape With Adjustable Radius
                            </h3>

                            <p>
                                <strong>
                                    Application No. :
                                </strong>

                                202231021448
                            </p>

                            <p>
                                <strong>
                                    Innovators :
                                </strong>

                                Dr. Sankar Barma, Dr. Hirak Ranjan Das,
                                Mr. Sasanka Boruah, and Mr. Nirakar Nath.
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </section>



        <!-- =====================================================
         ACADEMIC YEAR TABS
    ====================================================== -->

        <section class="rgu-iic-activities">

            <div class="container">

                <!-- =============================================
                 TABS
            ============================================== -->

                <div class="rgu-iic-tabs">

                    <button type="button" class="rgu-iic-tab-btn active" data-iic-tab="ay-2024-2025">
                        AY 2024-2025
                    </button>

                    <button type="button" class="rgu-iic-tab-btn" data-iic-tab="ay-2023-2024">
                        AY 2023-2024
                    </button>

                    <button type="button" class="rgu-iic-tab-btn" data-iic-tab="ay-2022-2023">
                        AY 2022-2023
                    </button>

                    <button type="button" class="rgu-iic-tab-btn" data-iic-tab="ay-2021-2022">
                        AY 2021-2022
                    </button>

                    <button type="button" class="rgu-iic-tab-btn" data-iic-tab="member">
                        MEMBER
                    </button>

                </div>


                <!-- =============================================
                 AY 2024-2025
            ============================================== -->

                <div class="rgu-iic-tab-content active" id="ay-2024-2025">

                    <h2 class="rgu-iic-activities-title">
                        Activities Of IIC-RGU For The AY 2024-25
                    </h2>

                    <div class="rgu-iic-coming-content">


                        <h2 class="rgu-iic-activities-title">
                            Calendar Activities
                        </h2>

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Workshop on Entrepreneurship and Innovation as a Career Opportunity</td>
                                        <td>19/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>“My Story” Motivational Session by a Successful Start-up Founder</td>
                                        <td>22/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Celebration of National Entrepreneurship Day</td>
                                        <td>11/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Exposure and Field Visits for Problem Identification aligned with UN
                                            SDGs and Emerging Technologies</td>
                                        <td>28/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Idea Showcase: Demo Day / Exhibition / Poster Presentation of Ideas
                                            (Operation Theatre Technology)</td>
                                        <td>18/09/2024</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Intra-University Idea Competition among Students</td>
                                        <td>27/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>MIC Programmes and Schemes Awareness Session</td>
                                        <td>23/10/2024</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Motivational Session by a Successful Start-up Founder</td>
                                        <td>21/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Session on Basics of Intellectual Property Rights (IPR) and its
                                            Importance</td>
                                        <td>20/11/2024</td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Session on Problem Solving and Ideation Workshop</td>
                                        <td>26/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Workshop on Innovative Design, Clay Modelling, and Market Fit Product
                                            Development</td>
                                        <td>12/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Celebration of National Science Day</td>
                                        <td>28/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Expert Talk on Process of Innovation Development and Technology Readiness
                                            Level (TRL)</td>
                                        <td>28/09/2025</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>Exposure Visits to Technology Driven Business Summit</td>
                                        <td>01–02/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>Innovation Meets Tradition: A Culinary Showcase</td>
                                        <td>04–06/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td>Intra-University Innovation Competition</td>
                                        <td>24/02/2024</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Outreach Program in Schools through Active Atal Tinkering Labs</td>
                                        <td>12/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>Workshop on Design Thinking, Critical Thinking, and Innovation Design</td>
                                        <td>24/01/2025</td>
                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>Workshop on Effective Sales and Marketing Strategies for Entrepreneurs and
                                            Start-ups</td>
                                        <td>14/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td>Demo Day of Innovative Product Display and Selling</td>
                                        <td>20–21/03/2025</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Exposure Visit to Production Unit and Technology Transfer Centre</td>
                                        <td>09/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td>Intra-University Business Plan Competition</td>
                                        <td>29–30/05/2025</td>
                                    </tr>

                                    <tr>
                                        <td>23</td>
                                        <td>Planning for Innovation to Startup to Entrepreneurship</td>
                                        <td>16/05/2025</td>
                                    </tr>

                                    <tr>
                                        <td>24</td>
                                        <td>Unlock the World of Commodity and Derivatives: Raising Funds for Start-ups
                                        </td>
                                        <td>18/03/2025</td>
                                    </tr>

                                    <tr>
                                        <td>25</td>
                                        <td>Workshop on Business Model Canvas (BMC)</td>
                                        <td>06/05/2025</td>
                                    </tr>

                                    <tr>
                                        <td>26</td>
                                        <td>Workshop on Protecting Intellectual Property Rights (IPRs)</td>
                                        <td>09/05/2025</td>
                                    </tr>

                                    <tr>
                                        <td>27</td>
                                        <td>3-Day Expert Mentoring Workshop on Innovative Kinetic Sculpture Development
                                            and Commercialization</td>
                                        <td>15–17/07/2025</td>
                                    </tr>

                                    <tr>
                                        <td>28</td>
                                        <td>Business Plan Competition Leading to Startup</td>
                                        <td>02/07/2025 – 06/08/2025</td>
                                    </tr>

                                    <tr>
                                        <td>29</td>
                                        <td>Innovation and Entrepreneurship Outreach Program</td>
                                        <td>27/06/2025</td>
                                    </tr>

                                    <tr>
                                        <td>30</td>
                                        <td>Mentoring Session on Minimum Viable Business</td>
                                        <td>03/07/2025</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Panel Discussion with Innovation and Startup Ecosystem Enablers</td>
                                        <td>02/07/2025</td>
                                    </tr>

                                    <tr>
                                        <td>32</td>
                                        <td>Session with Business Accelerator</td>
                                        <td>17/06/2025</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <h2 class="rgu-iic-activities-title">
                            Celebration
                        </h2>

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>World Creativity and Innovation Day</td>
                                        <td>21/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Celebration of National Education Day and Career Counseling Session</td>
                                        <td>11/11/2025</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>National Technology Day Celebration</td>
                                        <td>12/05/2025</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Pre-Celebration of National Innovation Day followed by a One-Day National
                                            Workshop on Empowering Future Leaders on Internet Governance</td>
                                        <td>13/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Pre-Celebration of World Intellectual Property Day 2025</td>
                                        <td>24/04/2025</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <h2 class="rgu-iic-activities-title">
                            MIC driven activities
                        </h2>

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>MIC Driven Activity: Building YUKTI Innovation Repositories in IIC
                                            Institutions – Productizing Campus Ideas and Boosting Innovation Funding for
                                            Startup Opportunities</td>
                                        <td>19/05/2025</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>MIC Driven Activity: Patent to Product (Srujanta Se Samruddhi) organized by
                                            IIC-RGU</td>
                                        <td>26/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>MIC Driven Activity: Significance of IP Protection and Commercialization
                                            organized by IIC-RGU</td>
                                        <td>25/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>MIC Driven Activity – Mark the Spot: Trademarks Talk – Masterclass on
                                            Trademarks and Geographical Indications</td>
                                        <td>24/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>MIC Driven Activity – Copy That! Copyrights Uncovered – Masterclass on
                                            Copyrights</td>
                                        <td>23/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>MIC Driven Activity: Discover More with Design Registrations – Masterclass
                                            on Patents and Design Registration</td>
                                        <td>22/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Inauguration of IP UTSAV and Celebration of World Creativity and Innovation
                                            Day</td>
                                        <td>21/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>MIC Driven Activity: Podcast Series on “Rashtra Pratham” and “Celebrating
                                            Failures” organized by IIC-RGU</td>
                                        <td>04/07/2025</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <h2 class="rgu-iic-activities-title">
                            Self-driven activities
                        </h2>

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2 Days Innovation, Design and Entrepreneurship (IDE) Bootcamp organized by
                                            the Ministry of Education (MoE) – DoSEL – AICTE – NCERT – PMSHRI</td>
                                        <td>11–12/09/2024</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>One Day Induction and Motivational Session for New Student Members</td>
                                        <td>30/09/2024</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Innovation Competition in Bio-Allied Field “BITHON 2024”</td>
                                        <td>29/10/2024</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Udyami Bazar 2.0</td>
                                        <td>10/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Hosting a Delegation from Zimbabwe for an Inspiring Day of Interaction and
                                            Exploration</td>
                                        <td>04/07/2025</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>IIC-RGU Participation in the Launch of Northeast Innovation Catalyst Program
                                            (NEICP) – Second Edition</td>
                                        <td>15/07/2025 – 01/08/2025</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Hardware Training Program and Quiz Competition on Internet Safety and
                                            Protocols in collaboration with Catla Broadband Services</td>
                                        <td>23/07/2025</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Workshop on AI and its Application in Business</td>
                                        <td>18/08/2025</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Signing of Memorandum of Understanding (MoU) by Royal Innovation Incubator
                                            with a Budding Startup</td>
                                        <td>23/06/2025</td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>From RGU to Tech Titan: Vishal More’s Inspiring Journey</td>
                                        <td>24/02/2025</td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>Interactive Session on Conflict Resolution and Negotiation Skills</td>
                                        <td>08/04/2025</td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Donut Workshop at RGU</td>
                                        <td>26/03/2025</td>
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>Celebrating International Day of Forests with Innovation</td>
                                        <td>21/03/2025</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td>One-Day Seminar on Secure Software Development</td>
                                        <td>21/03/2025</td>
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>Internal Hackathon 2024</td>
                                        <td>06/09/2024</td>
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td>Boot Camp 1.0-2025: Hands-on Session on Bioinformatics Tools and Mastering
                                            BLAST</td>
                                        <td>24–26/06/2025</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Boot Camp 2.0-2025: Molecular, Cytogenetics and DNA Isolation Techniques
                                        </td>
                                        <td>27–29/06/2025</td>
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>Boot Camp 3.0-2025: Biodiversity Monitoring and Advanced GIS</td>
                                        <td>30/06/2025 – 02/07/2025</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>


                <!-- =============================================
                 AY 2023-2024
            ============================================== -->

                <div class="rgu-iic-tab-content active" id="ay-2023-2024">

                    <h2 class="rgu-iic-activities-title">
                        Activities of IIC-RGU for the AY 2023-24
                    </h2>

                    <div class="rgu-iic-coming-content">


                        <!-- <h2 class="rgu-iic-activities-title">
                                Calendar Activities
                            </h2> -->

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>IIC-RGU organised the Internal Hackathon 2023 at The Assam Royal Global
                                            University</td>
                                        <td>26/09/2023</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>IIC-RGU celebrated Innovation Day</td>
                                        <td>16/10/2023</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Organised Viksit Bharat@2047 Utsav in Campus and watched the Inaugural
                                            Address by Hon’ble Prime Minister of India</td>
                                        <td>11/12/2023</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Organised Internal Ideathon-2023 in association with AIC SELCO</td>
                                        <td>24/11/2023</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Organised a Poster Presentation of Ideas and linked with Experts for
                                            Mentorship Support</td>
                                        <td>26/11/2023</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>IIC-RGU successfully organised Smart India Hackathon Software Edition 2023,
                                            partially funded by MoE Innovation Cell, Govt. of India</td>
                                        <td>19/12/2023</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mentoring Event with Innovation Ambassadors and Experts for Mentorship
                                            Support</td>
                                        <td>21/12/2023</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Organised Institution’s Innovation Council - Regional Meet funded by MoE
                                            Innovation Cell, Govt. of India</td>
                                        <td>09/01/2024</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>IIC-RGU participated in the National Youth Day Celebration</td>
                                        <td>12/01/2024</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Conducted a Session on Achieving Problem-Solution &amp; Product-Market Fit
                                        </td>
                                        <td>30/01/2024</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Organised an interactive session with Prof. Prabuddha Ganguli on IPRs and IP
                                            Management</td>
                                        <td>30/01/2024</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>IIC-RGU organised the MoU Signing with the startup company Sanam Designs
                                            Wallah Private Limited to incubate at the Royal Innovation Incubator (RII)
                                        </td>
                                        <td>20/02/2024</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Organised a Workshop on Entrepreneurship Skill, Attitude and Behaviour
                                            Development at RGU</td>
                                        <td>26/02/2024</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>IIC-RGU participated in the National Science Day 2024 Celebration</td>
                                        <td>28/02/2024</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>IIC-RGU students participated in Northeast Startup &amp; Entrepreneurs
                                            Conclave 2024, Srimanta Sankaradeva Kalakshetra</td>
                                        <td>27/03/2024</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>A group of IIC-RGU student members — Mr. Nipu Das, Mr. Shiva Bhattacharjee,
                                            and Mr. Nileemoy Pathak — won the award for Best Pitch for Ideation Stage
                                            Startup among 15 selected teams out of 70 teams in the Bootcamp for Aspiring
                                            Young Entrepreneurs of NER organised by IIM Shillong</td>
                                        <td>—</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>


                <!-- =============================================
                 AY 2022-2023
            ============================================== -->

                <div class="rgu-iic-tab-content active" id="ay-2022-2023">

                    <h2 class="rgu-iic-activities-title">
                        IIC-RGU Activities during AY 2022-2023
                    </h2>

                    <div class="rgu-iic-coming-content">


                        <!-- <h2 class="rgu-iic-activities-title">
                                Calendar Activities
                            </h2> -->

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>The ICC-RGU hosted the Institution’s Innovation Council Regional Meet in
                                            association with MoE’s Innovation Cell &amp; AICTE</td>
                                        <td>04/08/2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Successfully signed MoU with three startups (Globotask IT Consultancy
                                            Services Pvt. Ltd., Jolkutori LLP, Pasoli Agro Industry Pvt. Ltd.)</td>
                                        <td>07/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Orientation Session on IIC 5.0 &amp; Features</td>
                                        <td>07/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Interactive Session on Empowering Business with MarTech &amp; CRO</td>
                                        <td>09/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Motivational Speech: Entrepreneurship and Startup</td>
                                        <td>22/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>IIC-RGU students participated in AEC Class 88 Foundation organised by
                                            Institution of Engineers (India), Panbazar at Assam Engineering College</td>
                                        <td>25/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>IIC-RGU students attended Technical Awareness Program organised by NECTAR
                                        </td>
                                        <td>25/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Workshop on Entrepreneurship Skill, Attitude, and Behaviour Development</td>
                                        <td>26/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Session on Achieving Problem-Solution Fit &amp; Product-Market Fit</td>
                                        <td>08/03/2023</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Dr. Hirak R. Das invited by Tezpur University to deliver a lecture on
                                            Incubation &amp; Entrepreneurship Awareness Program</td>
                                        <td>14/03/2023</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>IIC-RGU students displayed Student Research Projects at MSME Technology
                                            Centre Conclave 2023, Kahilipara</td>
                                        <td>31/03/2023</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>IIC-RGU student members visited the Northeast Food Festival 2023, Maniram
                                            Dewan Trade Centre, Guwahati</td>
                                        <td>07/02/2023</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>IIC-RGU participated in the ‘Power Businesswomen Meet’ at Assam Start-Up –
                                            The Nest</td>
                                        <td>14/04/2023</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>YUKTI Innovation Repository and Innovation Challenge Discussion</td>
                                        <td>20/04/2023</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>IIC-RGU students participated in EDII Hackathon Final Round at EDII
                                            Ahmedabad</td>
                                        <td>28/04/2023</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Workshop on Prototype Design and Development</td>
                                        <td>03/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Workshop on Product Designing and Prototyping (Go Kart)</td>
                                        <td>19/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Demo Day – Cakeology7: A Campus-Based Interdisciplinary Enterprise</td>
                                        <td>02/06/2023</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Interactive session with Mr. Palash Bhowmik, Chief Manager (Technology),
                                            NSIC Ltd.</td>
                                        <td>08/06/2023</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Exposure trip to Patent Facilitation Centre, CPP-IPR, Sonapur</td>
                                        <td>09/06/2023</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Business Model Canvas (BMC) session</td>
                                        <td>20/06/2023</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>


                <!-- =============================================
                 AY 2021-2022
            ============================================== -->

                <div class="rgu-iic-tab-content active" id="ay-2021-2022">

                    <h2 class="rgu-iic-activities-title">
                        Activities of Annual Year 2021-22
                    </h2>

                    <div class="rgu-iic-coming-content">


                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Organized Institution’s Innovation Council - Regional Meet funded by MoE
                                            Innovation Cell, Govt. of India</td>
                                        <td>04/08/2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Impact Lecture Series – I on Innovation and Startup funded by MoE Innovation
                                            Cell, Govt. of India</td>
                                        <td>08/07/2022</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Session on Creation of Innovative Business Ideas for female faculty members
                                            and students to boost Women’s Entrepreneurship initiatives</td>
                                        <td>01/07/2022</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Launch of miniature forms of Dhol, Khol, and Madol as key rings developed
                                            under IIC-RGU at Guwahati Press Club</td>
                                        <td>24/06/2022</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>IIC-RGU &amp; Mechanical Engineering Dept. participated in North-East
                                            Research Conclave at IITG; achieved 1st position as private university for
                                            innovation</td>
                                        <td>20–22/06/2022</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Distribution of unique cutter developed at RGU workshop to NGOs, SHGs, and
                                            rural entrepreneurs by NERAMAC at Guwahati Press Club</td>
                                        <td>24/05/2022</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Electric car demonstrated during exhibition on National Technology Day;
                                            achieved 2nd prize</td>
                                        <td>11/05/2022</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Celebrated Intellectual Property Day</td>
                                        <td>26/04/2022</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Celebrated Earth Day</td>
                                        <td>22/04/2022</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Organized Northeast Startup Festival—one of a kind for North East India</td>
                                        <td>22/03/2022</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Organized “Journey at Y-Combinator” virtual panel discussion on innovative
                                            start-up endeavors</td>
                                        <td>24/02/2022</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Seminar on Design Thinking, Critical Thinking, and Innovation Design by
                                            Mentor Institute</td>
                                        <td>16/02/2022</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Session on Achieving Problem-Solution Fit &amp; Product-Market Fit</td>
                                        <td>16/02/2022</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Session on “Forest Fringe School: A Platform for Cultural Foundation”</td>
                                        <td>04/01/2022</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Organized IDEATHON 2021 with the HEI</td>
                                        <td>19/11/2021</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Motivational Session: Building Entrepreneurship and Branding</td>
                                        <td>17/11/2021</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Motivational Session: Building Entrepreneurship Mindset</td>
                                        <td>16/11/2021</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Inauguration of Innovation and Incubation Cell – Royal Innovation Incubator
                                        </td>
                                        <td>08/11/2021</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Impact Lecture Series – II funded by MoE Innovation Cell, Govt. of India
                                        </td>
                                        <td>27/11/2021</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Motivational Speech by Successful Entrepreneur</td>
                                        <td>26/10/2021</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Impact Lecture Series – I funded by MoE Innovation Cell, Govt. of India</td>
                                        <td>04/10/2021</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Motivational Speech by Successful Entrepreneur</td>
                                        <td>05/08/2021</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Boot Camp in association with Agri-Food Business Incubation Centre (AFBIC)
                                            IIT Kharagpur</td>
                                        <td>22/08/2021</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Workshop on Business Model Canvas (BMC)</td>
                                        <td>31/03/2021</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Organized field trip to GVRT, a rice manufacturing organization</td>
                                        <td>24/03/2021</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>


                <!-- =============================================
                 MEMBER
            ============================================== -->

                <div class="rgu-iic-tab-content active" id="member">

                    <h2 class="rgu-iic-activities-title">
                        Members
                    </h2>

                    <div class="rgu-iic-coming-content">

                        <div class="rgu-iic-activity-table-wrap">

                            <table class="rgu-iic-activity-table">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name of Member</th>
                                        <th>Member Type</th>
                                        <th>Key Role / Position</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Prof. (Dr.) Alak Kumar Buragohain</td>
                                        <td>Admin</td>
                                        <td>President</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Prof. (Dr.) George A Paul</td>
                                        <td>Faculty</td>
                                        <td>Vice President</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Prof. (Dr.) Anupam Chatterjee</td>
                                        <td>Faculty</td>
                                        <td>Senior Faculty Member</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Dr. Sriparna Bhuyan Baruah</td>
                                        <td>Admin</td>
                                        <td>Director, Entrepreneurship IIC</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Dr. Sankar Barman</td>
                                        <td>Admin</td>
                                        <td>Coordinator &amp; Innovation Activity</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Mr. Sasanka Boruah</td>
                                        <td>Admin</td>
                                        <td>Start-up Activity</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Mr. Bijoy Kalita</td>
                                        <td>Admin</td>
                                        <td>Social Media</td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Prof. Pranati Das</td>
                                        <td>Faculty</td>
                                        <td>NIRF Coordinator</td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Dr. Aruna Dev Roy</td>
                                        <td>Faculty</td>
                                        <td>ARIIA Coordinator</td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Dr. Debajit Borah</td>
                                        <td>Faculty</td>
                                        <td>IPR Activity</td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Dr. Bitopi Gogoi</td>
                                        <td>Faculty</td>
                                        <td>Internship Activity</td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Ms. Banani Das Hazarika</td>
                                        <td>Faculty</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Mr. Mehedi Alom</td>
                                        <td>Admin</td>
                                        <td>Design Thinking</td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Mr. Jawad Ahemad</td>
                                        <td>Admin</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Dr. Annesa Borah</td>
                                        <td>Faculty</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Dr. Susmita Nath</td>
                                        <td>Faculty</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Dr. Dharmeswar Barhoi</td>
                                        <td>Faculty</td>
                                        <td>Members</td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Mr. Srawan Kr Goenka</td>
                                        <td>Faculty</td>
                                        <td>Convener</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>


            </div>

        </section>



        <!-- =====================================================
         ACTIVITY GALLERY
    ====================================================== -->

        <!-- <div class="rgu-iic-activity-gallery">

                <div class="rgu-iic-gallery-track">



                    <div class="rgu-iic-gallery-item active">

                        <img src="YOUR-IIC-ACTIVITY-IMAGE-01.jpg" alt="IIC RGU Activity">

                    </div>



                    <div class="rgu-iic-gallery-item">

                        <img src="YOUR-IIC-ACTIVITY-IMAGE-02.jpg" alt="IIC RGU Activity">

                    </div>



                    <div class="rgu-iic-gallery-item">

                        <img src="YOUR-IIC-ACTIVITY-IMAGE-03.jpg" alt="IIC RGU Activity">

                    </div>


                </div>



                <div class="rgu-iic-gallery-controls">

                    <button type="button" class="rgu-iic-gallery-prev" aria-label="Previous Image">
                        &#8592;
                    </button>

                    <button type="button" class="rgu-iic-gallery-next" aria-label="Next Image">
                        &#8594;
                    </button>

                </div>

            </div> -->


        <!-- =====================================================
         END AY 2023-2024
    ====================================================== -->

    </div>
    <!-- /.rgu-iic-tab-content -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            "use strict";


            /* =========================================================
               1. PROJECT / 3D PRINTED ITEMS SLIDER
            ========================================================= */

            function initProjectSlider() {

                const sliders = document.querySelectorAll(
                    ".rgu-iic-project-slider"
                );

                if (!sliders.length) return;


                sliders.forEach(function(slider) {

                    const slides = Array.from(
                        slider.querySelectorAll(".rgu-iic-project-slide")
                    );

                    const prevButton = slider.querySelector(
                        ".rgu-iic-project-prev"
                    );

                    const nextButton = slider.querySelector(
                        ".rgu-iic-project-next"
                    );

                    if (!slides.length) return;


                    let currentIndex = 0;


                    /* Find existing active slide */

                    const existingActiveIndex = slides.findIndex(
                        function(slide) {
                            return slide.classList.contains("active");
                        }
                    );

                    if (existingActiveIndex >= 0) {
                        currentIndex = existingActiveIndex;
                    }


                    function showSlide(index) {

                        if (index >= slides.length) {
                            currentIndex = 0;
                        } else if (index < 0) {
                            currentIndex = slides.length - 1;
                        } else {
                            currentIndex = index;
                        }


                        slides.forEach(function(slide, slideIndex) {

                            const isActive =
                                slideIndex === currentIndex;

                            slide.classList.toggle(
                                "active",
                                isActive
                            );

                            slide.setAttribute(
                                "aria-hidden",
                                isActive ? "false" : "true"
                            );

                        });

                    }


                    function nextSlide() {
                        showSlide(currentIndex + 1);
                    }


                    function prevSlide() {
                        showSlide(currentIndex - 1);
                    }


                    if (nextButton) {

                        nextButton.addEventListener(
                            "click",
                            function(event) {

                                event.preventDefault();
                                event.stopPropagation();

                                nextSlide();

                            }
                        );

                    }


                    if (prevButton) {

                        prevButton.addEventListener(
                            "click",
                            function(event) {

                                event.preventDefault();
                                event.stopPropagation();

                                prevSlide();

                            }
                        );

                    }


                    /* Touch / Swipe Support */

                    let touchStartX = 0;
                    let touchEndX = 0;


                    slider.addEventListener(
                        "touchstart",
                        function(event) {

                            touchStartX =
                                event.changedTouches[0].screenX;

                        }, {
                            passive: true
                        }
                    );


                    slider.addEventListener(
                        "touchend",
                        function(event) {

                            touchEndX =
                                event.changedTouches[0].screenX;


                            const difference =
                                touchStartX - touchEndX;


                            if (Math.abs(difference) < 50) {
                                return;
                            }


                            if (difference > 0) {
                                nextSlide();
                            } else {
                                prevSlide();
                            }

                        }, {
                            passive: true
                        }
                    );


                    showSlide(currentIndex);

                });

            }



            /* =========================================================
               2. ACHIEVEMENTS SLIDER
            ========================================================= */

            function initAchievementSlider() {

                const sliders = document.querySelectorAll(
                    ".rgu-iic-achievement-slider"
                );

                if (!sliders.length) return;


                sliders.forEach(function(slider) {

                    const track = slider.querySelector(
                        ".rgu-iic-achievement-track"
                    );

                    if (!track) return;


                    const cards = Array.from(
                        track.querySelectorAll(
                            ".rgu-iic-achievement-card"
                        )
                    );


                    if (!cards.length) return;


                    /*
                     Controls may be outside .rgu-iic-achievement-slider,
                     so find the nearest achievements section.
                    */

                    const section = slider.closest(
                        ".rgu-iic-achievements"
                    ) || document;


                    const prevButton = section.querySelector(
                        ".rgu-iic-achievement-prev"
                    );

                    const nextButton = section.querySelector(
                        ".rgu-iic-achievement-next"
                    );


                    let currentIndex = 0;


                    function getVisibleCards() {

                        const width = window.innerWidth;


                        if (width <= 767) {
                            return 1;
                        }


                        if (width <= 991) {
                            return 2;
                        }


                        return 3;

                    }


                    function getGap() {

                        const style =
                            window.getComputedStyle(track);


                        const gap =
                            parseFloat(
                                style.columnGap ||
                                style.gap ||
                                "0"
                            );


                        return Number.isNaN(gap) ?
                            0 :
                            gap;

                    }


                    function getMaxIndex() {

                        return Math.max(
                            0,
                            cards.length - getVisibleCards()
                        );

                    }


                    function updateSlider() {

                        const maxIndex =
                            getMaxIndex();


                        if (currentIndex > maxIndex) {
                            currentIndex = maxIndex;
                        }


                        if (currentIndex < 0) {
                            currentIndex = 0;
                        }


                        const firstCard =
                            cards[0];


                        if (!firstCard) return;


                        const cardWidth =
                            firstCard.getBoundingClientRect().width;


                        const gap =
                            getGap();


                        const translateX =
                            currentIndex *
                            (cardWidth + gap);


                        track.style.transform =
                            "translate3d(-" +
                            translateX +
                            "px, 0, 0)";

                    }


                    function nextSlide() {

                        const maxIndex =
                            getMaxIndex();


                        if (maxIndex === 0) {
                            return;
                        }


                        currentIndex =
                            currentIndex >= maxIndex ?
                            0 :
                            currentIndex + 1;


                        updateSlider();

                    }


                    function prevSlide() {

                        const maxIndex =
                            getMaxIndex();


                        if (maxIndex === 0) {
                            return;
                        }


                        currentIndex =
                            currentIndex <= 0 ?
                            maxIndex :
                            currentIndex - 1;


                        updateSlider();

                    }


                    if (nextButton) {

                        nextButton.addEventListener(
                            "click",
                            function(event) {

                                event.preventDefault();

                                nextSlide();

                            }
                        );

                    }


                    if (prevButton) {

                        prevButton.addEventListener(
                            "click",
                            function(event) {

                                event.preventDefault();

                                prevSlide();

                            }
                        );

                    }


                    /* Swipe Support */

                    let touchStartX = 0;
                    let touchEndX = 0;


                    slider.addEventListener(
                        "touchstart",
                        function(event) {

                            touchStartX =
                                event.changedTouches[0].screenX;

                        }, {
                            passive: true
                        }
                    );


                    slider.addEventListener(
                        "touchend",
                        function(event) {

                            touchEndX =
                                event.changedTouches[0].screenX;


                            const difference =
                                touchStartX - touchEndX;


                            if (Math.abs(difference) < 50) {
                                return;
                            }


                            if (difference > 0) {
                                nextSlide();
                            } else {
                                prevSlide();
                            }

                        }, {
                            passive: true
                        }
                    );


                    /* Resize */

                    let resizeTimer;


                    window.addEventListener(
                        "resize",
                        function() {

                            clearTimeout(resizeTimer);


                            resizeTimer =
                                setTimeout(
                                    function() {

                                        updateSlider();

                                    },
                                    100
                                );

                        }
                    );


                    updateSlider();

                });

            }



            /* =========================================================
               3. ACADEMIC YEAR TABS
            ========================================================= */

            function initAcademicTabs() {

                const tabContainers =
                    document.querySelectorAll(
                        ".rgu-iic-activities"
                    );


                if (!tabContainers.length) return;


                tabContainers.forEach(
                    function(container) {

                        const buttons = Array.from(
                            container.querySelectorAll(
                                ".rgu-iic-tab-btn"
                            )
                        );


                        const contents = Array.from(
                            container.querySelectorAll(
                                ".rgu-iic-tab-content"
                            )
                        );


                        if (!buttons.length) return;


                        function activateTab(button) {

                            const targetID =
                                button.getAttribute(
                                    "data-iic-tab"
                                );


                            if (!targetID) return;


                            const target =
                                container.querySelector(
                                    "#" +
                                    CSS.escape(targetID)
                                );


                            if (!target) {

                                console.warn(
                                    "IIC tab content not found:",
                                    targetID
                                );

                                return;

                            }


                            buttons.forEach(
                                function(tabButton) {

                                    tabButton.classList.remove(
                                        "active"
                                    );

                                    tabButton.setAttribute(
                                        "aria-selected",
                                        "false"
                                    );

                                }
                            );


                            contents.forEach(
                                function(content) {

                                    content.classList.remove(
                                        "active"
                                    );

                                    content.setAttribute(
                                        "aria-hidden",
                                        "true"
                                    );

                                }
                            );


                            button.classList.add(
                                "active"
                            );


                            button.setAttribute(
                                "aria-selected",
                                "true"
                            );


                            target.classList.add(
                                "active"
                            );


                            target.setAttribute(
                                "aria-hidden",
                                "false"
                            );

                        }


                        buttons.forEach(
                            function(button) {

                                button.addEventListener(
                                    "click",
                                    function(event) {

                                        event.preventDefault();

                                        activateTab(button);

                                    }
                                );

                            }
                        );


                        /*
                         Initialise currently active tab.
                         Otherwise use first button.
                        */

                        const activeButton =
                            container.querySelector(
                                ".rgu-iic-tab-btn.active"
                            ) || buttons[0];


                        if (activeButton) {
                            activateTab(activeButton);
                        }

                    }
                );

            }



            /* =========================================================
               4. ACTIVITY IMAGE GALLERY
            ========================================================= */

            function initActivityGallery() {

                const galleries =
                    document.querySelectorAll(
                        ".rgu-iic-activity-gallery"
                    );


                if (!galleries.length) return;


                galleries.forEach(
                    function(gallery) {

                        const items = Array.from(
                            gallery.querySelectorAll(
                                ".rgu-iic-gallery-item"
                            )
                        );


                        const prevButton =
                            gallery.querySelector(
                                ".rgu-iic-gallery-prev"
                            );


                        const nextButton =
                            gallery.querySelector(
                                ".rgu-iic-gallery-next"
                            );


                        if (!items.length) return;


                        let currentIndex = 0;


                        const activeIndex =
                            items.findIndex(
                                function(item) {

                                    return item.classList.contains(
                                        "active"
                                    );

                                }
                            );


                        if (activeIndex >= 0) {
                            currentIndex = activeIndex;
                        }


                        function showImage(index) {

                            if (index >= items.length) {
                                currentIndex = 0;
                            } else if (index < 0) {
                                currentIndex =
                                    items.length - 1;
                            } else {
                                currentIndex = index;
                            }


                            items.forEach(
                                function(item, itemIndex) {

                                    const active =
                                        itemIndex === currentIndex;


                                    item.classList.toggle(
                                        "active",
                                        active
                                    );


                                    item.setAttribute(
                                        "aria-hidden",
                                        active ?
                                        "false" :
                                        "true"
                                    );

                                }
                            );

                        }


                        function nextImage() {
                            showImage(currentIndex + 1);
                        }


                        function prevImage() {
                            showImage(currentIndex - 1);
                        }


                        if (nextButton) {

                            nextButton.addEventListener(
                                "click",
                                function(event) {

                                    event.preventDefault();

                                    nextImage();

                                }
                            );

                        }


                        if (prevButton) {

                            prevButton.addEventListener(
                                "click",
                                function(event) {

                                    event.preventDefault();

                                    prevImage();

                                }
                            );

                        }


                        /* Swipe */

                        let touchStartX = 0;
                        let touchEndX = 0;


                        gallery.addEventListener(
                            "touchstart",
                            function(event) {

                                touchStartX =
                                    event.changedTouches[0].screenX;

                            }, {
                                passive: true
                            }
                        );


                        gallery.addEventListener(
                            "touchend",
                            function(event) {

                                touchEndX =
                                    event.changedTouches[0].screenX;


                                const difference =
                                    touchStartX - touchEndX;


                                if (
                                    Math.abs(difference) < 50
                                ) {
                                    return;
                                }


                                if (difference > 0) {
                                    nextImage();
                                } else {
                                    prevImage();
                                }

                            }, {
                                passive: true
                            }
                        );


                        showImage(currentIndex);

                    }
                );

            }



            /* =========================================================
               5. IMAGE ERROR HANDLING
            ========================================================= */

            function initImageHandling() {

                const images =
                    document.querySelectorAll(
                        ".rgu-iic-page img"
                    );


                images.forEach(
                    function(image) {

                        image.addEventListener(
                            "error",
                            function() {

                                image.classList.add(
                                    "rgu-iic-image-error"
                                );

                            }
                        );


                        image.addEventListener(
                            "load",
                            function() {

                                image.classList.remove(
                                    "rgu-iic-image-error"
                                );

                            }
                        );

                    }
                );

            }



            /* =========================================================
               6. KEYBOARD SUPPORT
            ========================================================= */

            function initKeyboardSupport() {

                document.addEventListener(
                    "keydown",
                    function(event) {

                        /*
                         Do not hijack arrow keys while
                         typing in a form element.
                        */

                        const activeElement =
                            document.activeElement;


                        if (
                            activeElement &&
                            (
                                activeElement.tagName === "INPUT" ||
                                activeElement.tagName === "TEXTAREA" ||
                                activeElement.tagName === "SELECT"
                            )
                        ) {
                            return;
                        }


                        /*
                         Project slider keyboard controls
                         only when a project control
                         currently has focus.
                        */

                        if (
                            activeElement &&
                            (
                                activeElement.classList.contains(
                                    "rgu-iic-project-prev"
                                ) ||
                                activeElement.classList.contains(
                                    "rgu-iic-project-next"
                                )
                            )
                        ) {

                            const slider =
                                activeElement.closest(
                                    ".rgu-iic-project-slider"
                                );


                            if (!slider) return;


                            if (event.key === "ArrowLeft") {

                                event.preventDefault();

                                const button =
                                    slider.querySelector(
                                        ".rgu-iic-project-prev"
                                    );


                                if (button) {
                                    button.click();
                                }

                            }


                            if (event.key === "ArrowRight") {

                                event.preventDefault();

                                const button =
                                    slider.querySelector(
                                        ".rgu-iic-project-next"
                                    );


                                if (button) {
                                    button.click();
                                }

                            }

                        }

                    }
                );

            }



            /* =========================================================
               7. INITIALISE EVERYTHING
            ========================================================= */

            try {
                initProjectSlider();
            } catch (error) {
                console.error(
                    "IIC Project Slider Error:",
                    error
                );
            }


            try {
                initAchievementSlider();
            } catch (error) {
                console.error(
                    "IIC Achievement Slider Error:",
                    error
                );
            }


            try {
                initAcademicTabs();
            } catch (error) {
                console.error(
                    "IIC Academic Tabs Error:",
                    error
                );
            }


            try {
                initActivityGallery();
            } catch (error) {
                console.error(
                    "IIC Activity Gallery Error:",
                    error
                );
            }


            try {
                initImageHandling();
            } catch (error) {
                console.error(
                    "IIC Image Handler Error:",
                    error
                );
            }


            try {
                initKeyboardSupport();
            } catch (error) {
                console.error(
                    "IIC Keyboard Support Error:",
                    error
                );
            }


        });
    </script>

@endsection
