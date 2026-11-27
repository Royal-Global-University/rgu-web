@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text"
                style="padding-top: 80px; position: relative; color: #27467A; font-weight: 900;">
                Royal School <br><span style="color: #FF9A1E; font-weight: 500;"> of Performing Arts(RSPA)</span></h2>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
                Royal School <span style="color: #FF9A1E; font-weight: 500;"> of Performing Arts(RSPA)</span></h2>

        </div>

        <style>
            /* =========================================================
           GOVERNING BODY SECTION
           ========================================================= */

            .board-m-cards-section {
                padding: 60px 20px;
            }


            /* =========================================================
           CARD CONTAINER
           ========================================================= */

            .board-m-grid {
                width: 100%;
                max-width: 1400px;
                margin: 0 auto;
            }


            /* =========================================================
           MINI CARD CONTAINER
           ========================================================= */

            .board-m-grid-4 {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 30px;
            }


            /* =========================================================
           MINI CARDS
           ========================================================= */

            .board-m-card-mini {
                width: 322px;
                flex: 0 0 322px;

                background: #ffffff;
                padding: 18px;
                border-radius: 14px;

                text-align: center;

                transition: all 0.3s ease;

                cursor: pointer;

                border: 1px solid transparent;

                height: auto;

                display: flex;
                flex-direction: column;

                box-sizing: border-box;
            }


            /* =========================================================
           MINI CARD HOVER
           ========================================================= */

            .board-m-card-mini:hover {
                transform: translateY(-5px);

                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);

                border-color: rgba(39, 70, 122, 0.2);

                background: #ffffff;
            }


            /* =========================================================
           MINI IMAGE
           ========================================================= */

            .board-m-mini-img {

                border: 1px solid #e3e3e3;

                width: 100%;
                max-width: 260px;

                aspect-ratio: 1 / 1;

                margin: 0 auto 16px;

                border-radius: 12px;

                overflow: hidden;

                background: #163a6b;

                transition: transform 0.3s ease;
            }


            .board-m-mini-img img {
                width: 100%;
                height: 100%;

                object-fit: cover;

                display: block;
            }


            /* =========================================================
           MINI IMAGE HOVER
           ========================================================= */

            .board-m-card-mini:hover .board-m-mini-img {
                transform: scale(1.03);
            }


            /* =========================================================
           MINI CARD TITLE
           ========================================================= */

            .board-m-card-mini h4 {
                font-size: 22px;

                font-weight: 600;

                color: #1d3557;

                margin: 0 0 10px;

                line-height: 1.35;
            }


            /* =========================================================
           MINI CARD ROLE
           ========================================================= */

            .board-m-card-mini .board-m-role {
                font-size: 16px;

                color: #6b7a90;

                line-height: 1.6;

                margin: 0 0 14px;

                flex-grow: 1;
            }


            /* =========================================================
           PROFILE LINK
           ========================================================= */

            .board-m-profile-link {
                display: inline-block;

                margin-top: 1.2rem;

                color: #f28c28;

                font-size: 1.4rem;

                font-weight: 700;

                text-decoration: none;

                position: relative;

                transition: all 0.3s ease;
            }


            .board-m-profile-link:hover {
                color: #1f3b75;
            }


            .board-m-profile-link:hover::after {
                width: 5rem;
            }


            /* =========================================================
           LARGE CARDS
           ========================================================= */

            .board-m-card {
                display: flex;

                align-items: center;

                gap: 20px;

                background: #ffffff;

                padding: 18px;

                border-radius: 14px;

                transition: all 0.35s ease;

                cursor: pointer;

                border: 1px solid transparent;

                box-sizing: border-box;
            }


            /* =========================================================
           LARGE CARD IMAGE
           ========================================================= */

            .board-m-img {
                width: 400px;
                height: 400px;

                border-radius: 12px;

                overflow: hidden;

                flex-shrink: 0;

                background: #163a6b;

                transition: transform 0.35s ease;
            }


            .board-m-img img {
                width: 100%;
                height: 100%;

                object-fit: cover;

                display: block;
            }


            /* =========================================================
           LARGE CARD CONTENT
           ========================================================= */

            .board-m-content h3 {
                font-size: 25px;

                font-weight: 600;

                color: #1d3557;

                margin: 0 0 4px;
            }


            .board-m-role {
                font-size: 16px;

                color: #6b7a90;

                margin-bottom: 6px;
            }


            .board-m-tag {
                font-size: 18px;

                color: #27467a;

                font-weight: 600;
            }


            /* =========================================================
           LARGE CARD HOVER
           ========================================================= */

            .board-m-card:hover {
                transform: translateY(-6px);

                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);

                background: #ffffff;

                border-color: rgba(39, 70, 122, 0.2);
            }


            .board-m-card:hover .board-m-img {
                transform: scale(1.05);
            }


            /* =========================================================
           LARGE DESKTOP
           4 CARDS PER ROW
           ========================================================= */

            @media (min-width: 1200px) {

                .board-m-card-mini {
                    width: 322px;
                    flex: 0 0 322px;
                }

            }


            /* =========================================================
           TABLET / SMALL DESKTOP
           3 CARDS PER ROW
           ========================================================= */

            @media (max-width: 1199px) and (min-width: 992px) {

                .board-m-grid-4 {
                    gap: 25px;
                }

                .board-m-card-mini {
                    width: 30%;
                    flex: 0 0 30%;
                }

            }


            /* =========================================================
           TABLET
           2 CARDS PER ROW
           ========================================================= */

            @media (max-width: 991px) and (min-width: 577px) {

                .board-m-grid-4 {
                    gap: 25px;
                }

                .board-m-card-mini {
                    width: 46%;
                    flex: 0 0 46%;
                }


                /* LARGE CARD */

                .board-m-card {
                    flex-direction: column;

                    text-align: center;
                }


                .board-m-img {
                    width: 320px;
                    height: 320px;
                }

            }


            /* =========================================================
           MOBILE
           1 CARD PER ROW
           ========================================================= */

            @media (max-width: 576px) {

                .board-m-cards-section {
                    padding: 40px 15px;
                }


                .board-m-grid-4 {
                    gap: 20px;
                }


                .board-m-card-mini {
                    width: 100%;
                    max-width: 400px;

                    flex: 0 0 100%;
                }


                /* LARGE CARD */

                .board-m-card {
                    flex-direction: column;

                    text-align: center;
                }


                .board-m-img {
                    width: 100%;
                    max-width: 280px;

                    height: 280px;
                }


                /* MINI IMAGE */

                .board-m-mini-img {
                    max-width: 240px;
                }


                /* MINI TITLE */

                .board-m-card-mini h4 {
                    font-size: 20px;
                }


                /* MINI ROLE */

                .board-m-card-mini .board-m-role {
                    font-size: 15px;
                }

            }


            /* =========================================================
           VERY SMALL MOBILE
           ========================================================= */

            @media (max-width: 400px) {

                .board-m-cards-section {
                    padding: 30px 12px;
                }


                .board-m-card-mini {
                    padding: 15px;

                    max-width: 100%;
                }


                .board-m-mini-img {
                    max-width: 210px;
                }


                .board-m-card-mini h4 {
                    font-size: 19px;
                }


                .board-m-card-mini .board-m-role {
                    font-size: 14px;
                }

            }
        </style>

        <div class="section-f">
            <div class="board-m-cards-section">
                <!-- ===== BOTTOM (4 COLUMN CARDS) ===== -->
                <div class="board-m-grid board-m-grid-4">

                    <div class="board-m-card-mini">
                        <div class="board-m-mini-img">
                            <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/sattyakee.jpg" alt="">
                        </div>
                        <h4>Sattyakee D'Com Bhuyan</h4>
                        <!-- <p class="board-m-role">Assistant Professor</p>
                    <a href="https://www.rgu.ac/faculty-sattyakee-dcom-bhuyan" class="board-m-profile-link">View Profile</a> -->
                    </div>

                    <div class="board-m-card-mini">
                        <div class="board-m-mini-img">
                            <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Mayukh.png" alt="">
                        </div>
                        <h4>Mr. Mayukh Hazarika</h4>
                        <!-- <p class="board-m-role">Professor of Practice</p>
                    <a href="" class="board-m-profile-link">View Profile</a> -->
                    </div>

                    <div class="board-m-card-mini">
                        <div class="board-m-mini-img">
                            <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="">
                        </div>
                        <h4>Rosey Brahma</h4>
                        <!-- <p class="board-m-role">Assistant Professor</p>
                    <a href="" class="board-m-profile-link">View Profile</a> -->
                    </div>

                    <div class="board-m-card-mini">
                        <div class="board-m-mini-img">
                            <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Dr.%20Maitrayee%20Patar.png"
                                alt="">
                        </div>
                        <h4>Dr. Maitrayee Patar</h4>
                        <!-- <p class="board-m-role">Assistant Professor</p>
                    <a href="https://www.rgu.ac/faculty-maitrayee-patar" class="board-m-profile-link">View Profile</a> -->
                    </div>

                    <div class="board-m-card-mini">
                        <div class="board-m-mini-img">
                            <img src="mobile-assets/updated-faculty-img/no-pic.png" alt="">
                        </div>
                        <h4>Ankita Kulabhi</h4>
                        <!-- <p class="board-m-role">Assistant Professor</p>
                    <a href="" class="board-m-profile-link">View Profile</a> -->
                    </div>


                </div>




            </div>
        </div>

    </div>
@endsection
