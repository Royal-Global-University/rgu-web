@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .rgu-mmlab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* HERO */
        .rgu-mmlab-hero {
            background: url('mobile-assets/new-labs/lab-multimedia/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-mmlab-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-mmlab-content {
            width: 50%;
        }

        .rgu-mmlab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-mmlab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* LIST */
        .rgu-mmlab-list {
            margin-top: 20px;
        }

        .rgu-mmlab-list h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-mmlab-list ol {
            padding-left: 20px;
            line-height: 1.8;
        }

        /* FEATURES */
        .rgu-mmlab-section {
            width: 85%;
            margin: 40px auto;
            padding: 10px;
        }

        .rgu-mmlab-section-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        .rgu-mmlab-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
        }

        .rgu-mmlab-card h4 {
            color: #27467a;
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
        }

        .rgu-mmlab-card ol {
            padding-left: 20px;
            line-height: 1.8;
        }

        /* GALLERY */
        .rgu-mmlab-gallery {
            text-align: center;
            padding: 40px 5%;
            background: #FFFBF6;
        }

        .rgu-mmlab-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-mmlab-highlight {
            color: orange;
        }

        .rgu-mmlab-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-mmlab-grid img {
            width: 100%;
            border-radius: 10px;
        }

        /* MOBILE */
        @media(max-width:900px) {
            .rgu-mmlab-hero {
                flex-direction: column;
                padding: 30px 20px;
                background: #FFFBF6;
            }

            .rgu-mmlab-img,
            .rgu-mmlab-content {
                width: 100%;
            }

            .rgu-mmlab-title {
                font-size: 24px;
            }

            .rgu-mmlab-text {
                font-size: 15px;
            }

            .rgu-mmlab-section {
                width: 100%;
                padding: 20px;
            }

            .rgu-mmlab-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="rgu-mmlab-body">

        <section class="rgu-mmlab-hero">

            <img src="mobile-assets/new-labs/lab-ar-vr-product-design/headimg.jpg" class="rgu-mmlab-img">

            <div class="rgu-mmlab-content">

                <h2 class="rgu-mmlab-title">AR/VR Design Lab (Product Design Lab) </h2>

                <p class="rgu-mmlab-text">
                    The Product Design Lab at RGU is a dynamic, hands-on environment where students transform ideas into
                    functional prototypes through experimentation and iterative design. The lab supports a wide range of
                    activities, including model making, form exploration, and real-world problem-solving.
                </p>

                <div class="rgu-mmlab-list text-dark">
                    <h4>Lab Highlights:</h4>
                    <ol>
                        <li>3D Printing Facilities for rapid prototyping and design iteration</li>
                        <li>AR/VR Setup for immersive visualization and experience testing</li>
                        <li>Model Making Tools for material exploration and physical prototyping</li>
                        <li>Collaborative Workspace encouraging teamwork and innovation</li>
                    </ol>
                </div>

                <p style="padding-top: 20px;" class="rgu-mmlab-text">
                    By integrating traditional making techniques with emerging technologies, the lab bridges the gap between
                    concept and execution, preparing students to develop innovative, user-centered design solutions.
                </p>

            </div>

        </section>

        <section class="rgu-mmlab-gallery">

            <h2 class="rgu-mmlab-gallery-title">
                Glimpse of <span class="rgu-mmlab-highlight">Our Lab</span>
            </h2>

            <div class="rgu-mmlab-grid">
                <img src="mobile-assets/new-labs/lab-ar-vr-product-design/1.jpg">
                <img src="mobile-assets/new-labs/lab-ar-vr-product-design/2.jpg">
                <img src="mobile-assets/new-labs/lab-ar-vr-product-design/4.jpg">
                <img src="mobile-assets/new-labs/lab-ar-vr-product-design/5.jpg">
            </div>

        </section>

    </section>
@endsection
