@extends('frontend/new-master')
@section('title', 'Salon : The Assam Royal Global University')
@section('meta_description',
    'Look and feel your best with the salon services at Royal Global University — from haircuts
    to skincare, all available right on campus.')
@section('meta_keywords', 'Salon')
@section('content')
    <style>
        /* ===========================
        SALON PAGE
        =========================== */

        .salon-section {
            background: #eef3fc;
            padding: 80px 0;
        }

        .salon-top {
            display: flex;
            gap: 60px;
            align-items: center;
            margin-bottom: 70px;
        }

        .salon-image {
            flex: 0 0 46%;
        }

        .salon-image img {
            width: 100%;
            border-radius: 20px;
            display: block;
            transition: .45s;
        }

        .salon-image img:hover {
            transform: scale(1.03);
        }

        .salon-content {
            flex: 1;
        }

        .salon-content h2 {
            font-family: Georgia, serif;
            font-size: 3.5rem;
            color: #153a78;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .salon-content p {
            font-size: 1.6rem;
            color: #555;
            line-height: 1.9;
            text-align: justify;
            margin-bottom: 18px;
        }

        .salon-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #e36b2c;
            color: #fff;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 15px;
            transition: .3s;
        }

        .salon-btn:hover {
            background: #153a78;
            color: #fff;
        }

        .salon-info-wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .salon-card {
            background: #fff;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
            transition: .35s;
        }

        .salon-card:hover {
            transform: translateY(-8px);
        }

        .salon-card i {
            font-size: 34px;
            color: #e36b2c;
            margin-bottom: 20px;
        }

        .salon-card h3 {
            color: #153a78;
            font-size: 2rem;
            margin-bottom: 15px;
            font-family: Georgia, serif;
        }

        .salon-card p {
            color: #444;
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .salon-card span {
            color: #666;
            font-size: 1.45rem;
            line-height: 1.8;
        }

        @media(max-width:991px) {

            .salon-top {
                flex-direction: column;
            }

            .salon-info-wrap {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:576px) {

            .salon-content h2 {
                font-size: 2.4rem;
            }

            .salon-content p {
                font-size: 14px;
            }

            .salon-info-wrap {
                grid-template-columns: 1fr;
            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/campus-salon/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Salon Service</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Salon Service
            </div>
        </div>

    </section>

    <section class="salon-section">
        <div class="container">

            <div class="salon-top">

                <!-- Image -->
                <div class="salon-image">
                    <img src="new-web/assets/img/campus-salon/headimg.png" alt="Kurls & Spykes Salon">
                </div>

                <!-- Content -->
                <div class="salon-content">

                    <h2>Kurls & Spykes Salon</h2>

                    <p>
                        Kurls & Spykes Salon at The Assam Royal Global University offers premium grooming and wellness
                        services for students, faculty, staff, and visitors. Designed with a modern ambience and
                        professional expertise, the salon provides a relaxing environment where customers can enjoy
                        quality
                        beauty and personal care services.
                    </p>

                    <p>
                        The salon offers a wide range of services including haircuts, hair styling, hair colouring, hair
                        spa, facials, manicure, pedicure, bridal and party makeup, skin treatments, and professional
                        grooming for both men and women. Experienced professionals ensure every guest receives
                        personalized
                        attention using premium products and the latest techniques.
                    </p>

                    <a href="/mobile-assets/salon/salon.pdf" class="salon-btn">
                        <i class="fa fa-question"></i>
                        Know More
                    </a>

                </div>

            </div>

            <!-- Info Cards -->

            <div class="salon-info-wrap">

                <div class="salon-card">
                    <i class="fa fa-clock-o"></i>

                    <h3>Opening Hours</h3>

                    <p>Monday – Sunday</p>

                    <span>10:30 AM – 5:30 PM</span>
                </div>

                <div class="salon-card">
                    <i class="fa fa-phone"></i>

                    <h3>Contact</h3>

                    <p>+91 98641 30135</p>

                    <span>Call for appointments</span>
                </div>

                <div class="salon-card">
                    <i class="fa fa-scissors"></i>

                    <h3>Services</h3>

                    <span>
                        Haircut • Hair Spa • Facial<br>
                        Hair Colour • Makeup • Grooming
                    </span>
                </div>

                <div class="salon-card">
                    <i class="fa fa-map-marker"></i>

                    <h3>Location</h3>

                    <span>
                        Ground Floor<br>
                        Royal Global University Campus
                    </span>
                </div>

            </div>

        </div>
    </section>
@endsection
