@extends('frontend/new-master')
@section('title', 'Departmental Store : The Assam Royal Global University')
@section('meta_description', 'Royal Global University’s departmental store caters to students and staff with essential goods, academic supplies, personal care items, and more — all in one place.')
@section('meta_keywords', 'Departmental Store')
@section('content')
        <style>
        /*==================================
DEPARTMENT STORE
==================================*/

        .dept-store-section {
            background: #eef3fc;
            padding: 80px 0;
        }

        .dept-store-top {
            display: flex;
            align-items: center;
            gap: 60px;
            margin-bottom: 80px;
        }

        .dept-store-image {
            flex: 0 0 46%;
        }

        .dept-store-image img {
            width: 100%;
            display: block;
            border-radius: 22px;
            transition: .4s;
        }

        .dept-store-image img:hover {
            transform: scale(1.03);
        }

        .dept-store-content {
            flex: 1;
        }

        .dept-store-content h2 {
            font-size: 3.5rem;
            color: #23467d;
            font-family: Georgia, serif;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .dept-store-content p {
            font-size: 1.55rem;
            line-height: 1.9;
            color: #555;
            text-align: justify;
            margin-bottom: 18px;
        }

        .dept-store-time {
            margin-top: 25px;
        }

        .dept-store-time span {
            display: block;
            font-size: 1.8rem;
            color: #e56c2f;
            font-style: italic;
            margin-bottom: 8px;
        }

        .dept-store-time h4 {
            font-size: 2rem;
            color: #23467d;
            line-height: 1.6;
            font-family: Georgia, serif;
            margin: 0;
        }

        .dept-store-time strong {
            color: #e56c2f;
        }

        .dept-gallery h2 {
            text-align: center;
            color: #23467d;
            font-family: Georgia, serif;
            font-size: 3.4rem;
            margin-bottom: 45px;
            font-weight: 700;
        }

        .dept-gallery-single img {
            width: 100%;
            display: block;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);
            transition: .4s;
        }

        .dept-gallery-single img:hover {
            transform: scale(1.02);
        }

        @media(max-width:991px) {

            .dept-store-top {
                flex-direction: column;
            }

        }

        @media(max-width:576px) {

            .dept-store-section {
                padding: 50px 0;
            }

            .dept-store-content h2 {
                font-size: 2.5rem;
            }

            .dept-gallery h2 {
                font-size: 2.3rem;
            }

            .dept-store-content p {
                font-size: 14px;
            }

            .dept-store-time span {
                font-size: 16px;
            }

            .dept-store-time h4 {
                font-size: 18px;
            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/campus-departmental-store/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Departmental Store</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Departmental Store
            </div>
        </div>

    </section>

    <section class="dept-store-section">

        <div class="container">

            <!-- Top -->

            <div class="dept-store-top">

                <div class="dept-store-image">
                    <img src="new-web/assets/img/campus-departmental-store/headimg.png" alt="Departmental Store">
                </div>

                <div class="dept-store-content">

                    <h2>Departmental Store</h2>

                    <p>
                        The Departmental Store at The Assam Royal Global University provides students, faculty and staff
                        with easy access to everyday essentials within the campus. Conveniently located, the store
                        offers
                        groceries, packaged foods, stationery, beverages, snacks, personal care products, dairy items,
                        fresh produce and many other daily necessities under one roof.
                    </p>

                    <p>
                        With quality products, affordable prices and a customer-friendly environment, the store
                        eliminates
                        the need to travel outside the campus for routine purchases. It serves as a one-stop destination
                        for convenient shopping while ensuring a comfortable experience for the university community.
                    </p>

                    <div class="dept-store-time">

                        <span>The store is open</span>

                        <h4>
                            Monday – Friday <br>
                            <strong>10:00 AM – 7:00 PM</strong>
                        </h4>

                    </div>

                </div>

            </div>

            <!-- Gallery -->

            <div class="dept-gallery">

                <h2>Glimpse of Departmental Store</h2>

                <div class="dept-gallery-single">

                    <img src="new-web/assets/img/campus-departmental-store/gallery.png" alt="Departmental Store Gallery">

                </div>

            </div>

        </div>

    </section>
@endsection
