@extends('frontend/new-master')
@section('title', 'Stationary Store : The Assam Royal Global University')
@section('meta_description', 'Royal Global University features a well-stocked stationery store on campus, offering quality supplies at affordable prices for students and staff.')
@section('meta_keywords', 'Stationary Store')
@section('content')
    <style>

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
            style="background-image:url('new-web/assets/img/campus-stationary-store/cover.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Stationary Store</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Stationary Store
            </div>
        </div>

    </section>

    <section class="dept-store-section">

        <div class="container">

            <!-- Top -->

            <div class="dept-store-top">

                <div class="dept-store-image">
                    <img src="new-web/assets/img/campus-stationary-store/head-img.png" alt="Departmental Store">
                </div>

                <div class="dept-store-content">

                    <h2>Stationary Store</h2>

                    <p>
                        Location: Stationary stores are located in ground floor of Block-D and Block-B, The Assam Royal
                        Global University
                    </p>

                    <p>
                        Visit our stationary store and explore a wide range of items from
                        pens to crafts. The stationary shop at RGU has got it all.

                        Below are some of the products which are available at the store:

                    </p>

                    <ol>
                        <li>Painting canvas</li>
                        <li>Various stickers to decorate your room non-permanently</li>
                        <li>Pencil tubes</li>
                        <li>
                            Notebooks
                        </li>
                        <li>
                            Calendars
                        </li>
                        <li>
                            Designer journals
                        </li>
                        <li>
                            Paint Products
                        </li>
                        <li>
                            Designer Pen and Many More
                        </li>
                    </ol>


                    <div class="dept-store-time">

                        <span>Time: The stores are open from</span>

                        <h4>
                            Monday – Friday <br>
                            <strong>10:30 AM to 5:00 PM</strong>
                        </h4>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
