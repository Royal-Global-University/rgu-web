@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
        </div>
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
        .hotel-management-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .hotel-management-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .hotel-management-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .hotel-management-content {
            width: 50%;
        }

        .hotel-management-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .hotel-management-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .hotel-management-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .hotel-management-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .hotel-management-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .hotel-management-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .hotel-management-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .hotel-management-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .hotel-management-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .hotel-management-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .hotel-management-section-title {
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
        .hotel-management-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .hotel-management-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .hotel-management-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .hotel-management-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .hotel-management-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .hotel-management-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .hotel-management-highlight {
            color: orange;
        }

        .hotel-management-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .hotel-management-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .hotel-management-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .hotel-management-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .hotel-management-hero-img,
            .hotel-management-content {
                width: 100%;
            }

            .hotel-management-title {
                font-size: 24px;
            }

            .hotel-management-text {
                text-align: justify;
                font-size: 15px;
            }

            .hotel-management-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .hotel-management-activities-title {
                font-size: 1.8rem;
            }

            .hotel-management-cards-container {
                grid-template-columns: 1fr;
            }

            .hotel-management-grid {
                grid-template-columns: 1fr;
            }

            .hotel-management-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="hotel-management-body">
        <section class="hotel-management-hero">

            <img src="mobile-assets/new-lab-hotel/headimg.jpg" class="hotel-management-hero-img">

            <div class="hotel-management-content">
                <h2 class="hotel-management-title">Hotel Management Lab</h2>

                <p class="hotel-management-text">
                    Our Hotel Management Lab meets international standards. Students learn about different services in a
                    hotel,
                    from baking bread and cooking food items, to managing a bar or a restaurant. Students who opt for Hotel
                    Management are given extensive practice in all kinds of hotel-related services.
                    <br><br>
                    The Hotel Management students are provided with practical training according to the curriculum through
                    exposure to various departments of a hotel and their operations like kitchen, front desk, bar, customer
                    service, housekeeping, and more. The lab is in block- D on the ground floor.
                </p>


            </div>
        </section>

        <section class="hotel-management-activities">

            <!-- <h3 class="hotel-management-activities-title">Included In The Lab Are:</h3> -->

            <div class="hotel-management-cards-container">

                <div class="hotel-management-section">
                    <h4 class="hotel-management-section-title">Lab Activities Includes:</h4>
                    <ul>
                        <li><i class="fa fa-circle"></i> <span>Students are trained on receiving information, billing and
                                maintaining guest relations</span></li>

                        <li><i class="fa fa-circle"></i> <span>House keeping training</span></li>

                        <li><i class="fa fa-circle"></i> <span>Operation and management of guest rooms</span></li>

                        <li><i class="fa fa-circle"></i> <span>Laundry process and linen exchange process</span></li>

                        <li><i class="fa fa-circle"></i> <span>Basic of food & beverages services</span></li>

                        <li><i class="fa fa-circle"></i> <span>Demonstrations on table-service, napkins folds, American
                                service,
                                silver service are also practiced</span></li>

                        <li><i class="fa fa-circle"></i> <span>Practical experience on the use of software programs used in
                                hotel
                                and airline industry so that students know about the working of reservation, front desk,
                                guest services
                                and other modules</span></li>

                        <li><i class="fa fa-circle"></i> <span>Soft skills training through role play and discussion</span>
                        </li>
                    </ul>
                </div>

            </div>

            </div>
        </section>

        <section class="hotel-management-gallery">

            <h2 class="hotel-management-gallery-title">
                Our <span class="hotel-management-highlight">Kitchen (Basic Training Kitchen)</span>
            </h2>

            <div class="hotel-management-grid">
                <img src="mobile-assets/new-lab-hotel/kitchen/1.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/2.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/3.jpg">
            </div>

            <h2 class="hotel-management-gallery-title" style="padding-top: 40px;">
                Our <span class="hotel-management-highlight">Kitchen (Advanced Training Kitchen)</span>
            </h2>

            <div class="hotel-management-grid">
                <img src="mobile-assets/new-lab-hotel/kitchen/4.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/5.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/6.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/7.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/8.jpg">
                <img src="mobile-assets/new-lab-hotel/kitchen/9.jpg">
            </div>

            <h2 class="hotel-management-gallery-title" style="padding-top: 40px;">
                Housekeeping <span class="hotel-management-highlight">(Model Room, Guest House)</span>
            </h2>

            <div class="hotel-management-grid">
                <img src="mobile-assets/new-lab-hotel/housekeeping/1.jpg">
                <img src="mobile-assets/new-lab-hotel/housekeeping/2.jpg">
                <img src="mobile-assets/new-lab-hotel/housekeeping/3.jpg">
                <img src="mobile-assets/new-lab-hotel/housekeeping/4.jpg">
                <img src="mobile-assets/new-lab-hotel/housekeeping/5.jpg">
                <img src="mobile-assets/new-lab-hotel/housekeeping/6.jpg">
            </div>


            <h2 class="hotel-management-gallery-title" style="padding-top: 40px;">
                Food and <span class="hotel-management-highlight">Beverage (Training Restaurant)</span>
            </h2>

            <div class="hotel-management-grid">
                <img src="mobile-assets/new-lab-hotel/food-beverages/1.jpg">
                <img src="mobile-assets/new-lab-hotel/food-beverages/2.jpg">
                <img src="mobile-assets/new-lab-hotel/food-beverages/3.jpg">
                <img src="mobile-assets/new-lab-hotel/food-beverages/4.jpg">
                <img src="mobile-assets/new-lab-hotel/food-beverages/5.jpg">
                <img src="mobile-assets/new-lab-hotel/food-beverages/6.jpg">
            </div>


            <h2 class="hotel-management-gallery-title" style="padding-top: 40px;">
                Front Office <span class="hotel-management-highlight">(Front Office and Back Office)</span>
            </h2>

            <div class="hotel-management-grid">
                <img src="mobile-assets/new-lab-hotel/desk/1.jpg">
                <img src="mobile-assets/new-lab-hotel/desk/4.jpg">
                <img src="mobile-assets/new-lab-hotel/desk/3.jpg">
            </div>


        </section>
    </section>
@endsection
