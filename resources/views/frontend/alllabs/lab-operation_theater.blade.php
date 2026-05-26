@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 110px; position: relative;"></div>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

    </div>

    <style>
        /* ===== RESET ===== */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* ===== BASE ===== */
        .rgu-opt-th-lab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-opt-th-lab-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-opt-th-lab-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-opt-th-lab-content {
            width: 50%;
        }

        .rgu-opt-th-lab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-opt-th-lab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-opt-th-lab-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-opt-th-lab-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-opt-th-lab-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-opt-th-lab-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-opt-th-lab-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-opt-th-lab-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-opt-th-lab-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-opt-th-lab-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-opt-th-lab-section-title {
            color: #27467a;
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Small decorative dot before titles */
        .rgu-opt-th-lab-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-opt-th-lab-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-opt-th-lab-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-opt-th-lab-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-opt-th-lab-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-opt-th-lab-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-opt-th-lab-highlight {
            color: orange;
        }

        .rgu-opt-th-lab-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-opt-th-lab-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-opt-th-lab-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-opt-th-lab-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-opt-th-lab-hero-img,
            .rgu-opt-th-lab-content {
                width: 100%;
            }

            .rgu-opt-th-lab-title {
                font-size: 24px;
            }

            .rgu-opt-th-lab-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-opt-th-lab-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-opt-th-lab-activities-title {
                font-size: 1.8rem;
            }

            .rgu-opt-th-lab-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-opt-th-lab-grid {
                grid-template-columns: 1fr;
            }

            .rgu-opt-th-lab-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-opt-th-lab-body">
        <section class="rgu-opt-th-lab-hero">

            <img src="mobile-assets/new-ott-lab/headimg.jfif" class="rgu-opt-th-lab-hero-img">

            <div class="rgu-opt-th-lab-content">
                <h2 class="rgu-opt-th-lab-title">Anesthesia & Operation Theatre Technology </h2>

                <p class="rgu-opt-th-lab-text">
                    The University has established an action learning laboratory for Anesthesia & Operation Theatre (AOT)
                    techniques. This facility is equipped with a modern operating theatre that includes an anesthesia
                    machine, surgical table, OT lighting, patient monitoring systems, electrosurgical cautery, suction
                    apparatus, etc. along with advanced mannequins. These resources provide students with immersive,
                    hands-on training and practice-oriented learning, enabling them to confidently operate essential tools
                    used in surgical environments.

                    <br><br>
                    The primary objective of the laboratory is to help students develop a comprehensive and in-depth
                    understanding of surgical procedures. By mastering both the theoretical and practical aspects of
                    anesthesia and OT technology, students will be prepared to enhance the quality of patient care during
                    surgical interventions.


                </p>

            </div>
        </section>


        <section class="rgu-opt-th-lab-gallery">

            <h2 class="rgu-opt-th-lab-gallery-title">
                Our Lab<span class="rgu-opt-th-lab-highlight"> and Equipments</span>
            </h2>

            <div class="rgu-opt-th-lab-grid">
                <img src="mobile-assets/new-ott-lab/1.png">
                <img src="mobile-assets/new-ott-lab/4.png">
                <img src="mobile-assets/new-ott-lab/5.png">
                <img src="mobile-assets/new-ott-lab/2.png">
                <img src="mobile-assets/new-ott-lab/3.png">
                <img src="mobile-assets/new-ott-lab/7.png">
                <img src="mobile-assets/new-ott-lab/8.png">
                <img src="mobile-assets/new-ott-lab/9.png">

            </div>
        </section>
    </section>
@endsection
