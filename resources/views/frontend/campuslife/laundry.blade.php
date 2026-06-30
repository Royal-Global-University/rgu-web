@extends('frontend/new-master')
@section('title', 'Laundry Service : The Assam Royal Global University')
@section('meta_description', 'Royal Global University provides a well-managed laundry facility on campus, making student life easier with quick, quality, and cost-effective garment care.')
@section('meta_keywords', 'Laundry Service')
@section('content')
        <style>
        /*====================================
LAUNDRY
====================================*/

        .laundry-section {
            background: #eef3fc;
            padding: 80px 0;
        }

        .laundry-top {
            display: flex;
            align-items: center;
            gap: 60px;
            margin-bottom: 20px;
        }

        .laundry-image {
            flex: 0 0 46%;
        }

        .laundry-image img {
            width: 100%;
            display: block;
            border-radius: 22px;
            transition: .4s;
        }

        .laundry-image img:hover {
            transform: scale(1.03);
        }

        .laundry-content {
            flex: 1;
        }

        .laundry-content h2 {
            font-size: 3.5rem;
            color: #24457d;
            font-family: Georgia, serif;
            text-transform: uppercase;
            margin-bottom: 22px;
            font-weight: 700;
        }

        .laundry-content p {
            font-size: 1.55rem;
            color: #555;
            line-height: 1.9;
            text-align: justify;
            margin-bottom: 18px;
        }

        .laundry-content h3 {
            color: #24457d;
            font-size: 2rem;
            margin: 25px 0 18px;
            font-family: Georgia, serif;
        }

        .laundry-content ul {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .laundry-content li {
            position: relative;
            padding-left: 22px;
            margin-bottom: 15px;
            color: #555;
            font-size: 1.5rem;
        }

        .laundry-content li::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #e36b2c;
            position: absolute;
            left: 0;
            top: 10px;
        }

    

        @media(max-width:991px) {

            .laundry-top {
                flex-direction: column;
            }

        }

        @media(max-width:576px) {

            .laundry-section {
                padding: 50px 0;
            }

            .laundry-content h2 {
                font-size: 2.5rem;
            }

            .laundry-gallery h2 {
                font-size: 2.3rem;
            }

            .laundry-content h3 {
                font-size: 1.8rem;
            }

            .laundry-content p,
            .laundry-content li {
                font-size: 14px;
            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/campus-laundry/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Laundry Service</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Laundry Service
            </div>
        </div>

    </section>

    <section class="laundry-section">

        <div class="container">

            <!-- Top -->

            <div class="laundry-top">

                <div class="laundry-image">
                    <img src="new-web/assets/img/campus-laundry/headimg.png" alt="Laundry Service">
                </div>

                <div class="laundry-content">

                    <h2>Laundry Service</h2>

                    <p>
                        The Assam Royal Global University provides an on-campus laundry facility that offers a
                        convenient
                        and reliable solution for students residing in the hostels. Equipped with modern washing
                        equipment
                        and managed by trained staff, the service ensures clean, fresh and well-maintained garments
                        while
                        saving valuable time for students.
                    </p>

                    <h3>The students can use the following services :</h3>

                    <ul>

                        <li>Wash and Fold</li>

                        <li>Wash and Steam Iron</li>

                        <li>Dry Cleaning</li>

                    </ul>

                    <p>
                        The laundry service is available at affordable rates, ensuring convenience and quality care for
                        students throughout the academic year.
                    </p>

                </div>

            </div>

        </div>

    </section>
@endsection
