@extends('frontend.master')
@section('content')
    <style>
        .section-body {
            background: url('mobile-assets/department-all/bg.svg') center/cover no-repeat;

        }

        /* HERO SECTION */
        .ab-hero-main-wrap {
            font-family: "Times New Roman", Times, serif;
            min-height: 90vh;
            background: url('mobile-assets/facilities-new/transportation/hero-bg.svg') center/cover no-repeat;
            display: flex;
            align-items: center;
        }

        .ab-hero-inner-overlay {
            width: 100%;
            padding: 60px 20px;
        }

        .ab-hero-row-align {
            min-height: 60vh;
        }

        /* HERO IMAGE */
        .ab-hero-image-box {
            width: 100%;
            max-width: 550px;
            aspect-ratio: 1/1;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            animation: ab-float-animation 4s ease-in-out infinite;
        }

        .ab-hero-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* HERO TEXT */
        .ab-hero-text-wrap h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #264273;
            animation: ab-fade-up 1s ease forwards;
        }

        .ab-hero-text-wrap p {
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
            animation: ab-fade-up 1.3s ease forwards;
        }

        /* ANIMATIONS */
        @keyframes ab-float-animation {
            0% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-10px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes ab-fade-up {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* TEXT AREA */

        .text-area h2 {
            font-family: "Times New Roman", Times, serif;
        }

        /* MOBILE */
        @media (max-width:767px) {

            .ab-hero-main-wrap {
                background: none;
                background-color: #FFF8F0;
            }

            .ab-hero-text-wrap h1,
            .ab-hero-text-wrap p {
                color: #264273;
                text-align: center;
            }

        }
    </style>

    <style>
        /* ROUTE GRID */

        .ab-route-gallery-wrap {
            padding: 30px 10px;
        }

        .ab-route-card {
            cursor: pointer;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform .3s ease;
        }

        .ab-route-card:hover {
            transform: translateY(-6px);
        }

        .ab-route-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* LIGHTBOX */

        .ab-route-lightbox-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 9999;
        }

        .ab-route-lightbox-img {
            max-width: 90%;
            max-height: 80%;
            transition: transform .15s ease;
            cursor: grab;
            user-select: none;
        }

        /* CLOSE BUTTON */

        .ab-route-lightbox-close {
            position: absolute;
            top: 25px;
            right: 40px;
            font-size: 40px;
            color: white;
            cursor: pointer;
        }

        /* ZOOM CONTROLS */

        .ab-route-lightbox-controls {
            position: absolute;
            top: 25px;
            left: 40px;
        }

        .ab-route-lightbox-controls button {
            background: white;
            border: none;
            margin-right: 8px;
            padding: 8px 14px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        .ab-route-lightbox-controls button:hover {
            background: #e9e9e9;
        }
    </style>

    <style>
        /* TRANSPORT INFO SECTION */

        .ab-transport-info-section {
            padding: 40px 10px;
            font-family: "Times New Roman", Times, serif;
        }

        .ab-transport-info-card {
            background: #f3f3f3;
            border-radius: 10px;
            padding: 30px;
        }

        .ab-transport-title {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .ab-transport-subtitle {
            color: #2a63c5;
            font-weight: 700;
            margin-top: 15px;
        }

        .ab-download-btn {
            background: #2a63c5;
            color: white;
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 6px;
            text-decoration: none;
            margin-left: 8px;
            display: inline-block;
        }

        .ab-download-btn:hover {
            background: #1d4fa6;
        }

        .ab-transport-img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .ab-transport-divider {
            margin: 30px 0;
        }
    </style>

    <style>
        /* TRANSPORT CONTACT */

        .ab-transport-contact-section {
            background: #2c4c7a;
            color: white;
            padding: 25px 10px;
            margin-top: 40px;
        }

        .ab-contact-title {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .ab-transport-contact-icon {
            background: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }
    </style>

    <!-- for mobile query  -->
    <style>
        /* Mobile (Up to 767px) */
        @media only screen and (max-width: 767px) {
            .website {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        /* Tablet (768px - 1024px) */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {

            /* CSS rules for tablets */
            .website {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        /* Laptop (1025px - 1280px) */
        @media only screen and (min-width: 1025px) and (max-width: 1280px) {

            /* CSS rules for laptops */
            .website {
                display: block;
            }

            .mobile {
                display: none;
            }
        }

        /* Desktop (1281px and above) */
        @media only screen and (min-width: 1281px) {

            /* CSS rules for desktops */
            .website {
                display: block;
            }

            .mobile {
                display: none;
            }
        }
    </style>

    <div class="mobile" style="padding-top: 80px; position: relative;">
        @include('frontend/components/mobileheader')
    </div>

    <div class="website">
        @include('frontend/components/aheader')
    </div>

    <div class="section-body text-dark">

        <section class="ab-hero-main-wrap">

            <div class="container ab-hero-inner-overlay">

                <div class="row ab-hero-row-align align-items-center justify-content-center">

                    <!-- LEFT IMAGE -->
                    <div class="col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0">

                        <div class="ab-hero-image-box">
                            <img src="/mobile-assets/facilities-transportation/headimg.png" alt="Transportation">
                        </div>

                    </div>

                    <!-- RIGHT TEXT -->
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">

                        <div class="ab-hero-text-wrap text-center text-lg-start">

                            <h1>
                                Transpor<span style="color:#FF9A1E;">tation</span>
                            </h1>

                            <p>
                                Our university provides a convenient and reliable bus service for students and staff,
                                ensuring a hassle-free commute to and from campus. The bus service operates on
                                designated
                                routes, offering comfortable and safe travel. With punctual and reliable pickups and
                                drop-offs, students can focus on their academic pursuits without worrying about
                                transportation. The bus service is also affordable, with subsidized fares making it an
                                attractive option for those who rely on it.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <div class="text-area">

            <div class="container p-2">

                <h2 class="text-center fw-bold pt-4">
                    Bus Route
                </h2>

                <section>

                    <div class="ab-route-gallery-wrap">

                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route1.png" alt="Route 1">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route2.png" alt="Route 2">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route3.png" alt="Route 3">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route4.png" alt="Route 4">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route5.png" alt="Route 4">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route6.png" alt="Route 4">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route7.png" alt="Route 4">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route8.png" alt="Route 4">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route9-1.jpeg"
                                        alt="Route 4">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab-route-card">
                                    <img src="mobile-assets/facilities-new/transportation/routes/route10.png"
                                        alt="Route 4">
                                </div>
                            </div>

                        </div>

                    </div>

                </section>

                <section class="ab-transport-info-section">

                    <div class="container ab-transport-info-card">

                        <!-- ROW 1 -->
                        <div class="row align-items-center gy-4">

                            <div class="col-lg-8">

                                <h4 class="ab-transport-title">Getting Around</h4>

                                <p>
                                    Getting in and around the University campus is quite easy with a number of commuting
                                    options like Public Transport which includes Bus and Shared Taxi Services.
                                </p>

                                <p>
                                    A number of app based Cab Services are available which offers a quick and convenient
                                    way to get around. You can download the following apps to book Cab Services.
                                    <strong>Uber</strong>
                                    <a href="#" class="ab-download-btn">Download App</a>
                                    <strong>Ola</strong>
                                    <a href="#" class="ab-download-btn">Download App</a>
                                </p>

                                <p>
                                    Apart from cabs, Bike Rental is another cost effective and quick commuting options
                                    which can be booked readily via the following apps-
                                    <strong>Uber</strong>
                                    <a href="#" class="ab-download-btn">Download App</a>
                                    <strong>Rapido</strong>
                                    <a href="#" class="ab-download-btn">Download App</a>
                                </p>

                                <h5 class="ab-transport-subtitle">Self Drive Options</h5>

                                <p>
                                    Self Drive Car Rental options can be booked via apps like –
                                    <strong>Zoomcar</strong>
                                    <a href="#" class="ab-download-btn">Download App</a>
                                </p>

                            </div>

                            <div class="col-lg-4">
                                <img src="/mobile-assets/facilities-transportation/taxi.png" class="ab-transport-img"
                                    alt="Taxi">
                            </div>

                        </div>


                        <hr class="ab-transport-divider">


                        <!-- ROW 2 -->
                        <div class="row align-items-center gy-4">

                            <div class="col-lg-4">
                                <img src="/mobile-assets/facilities-transportation/4.png" class="ab-transport-img"
                                    alt="Airport">
                            </div>

                            <div class="col-lg-8">

                                <h4 class="ab-transport-title">Travel Safely</h4>

                                <p>
                                    Travel Safety should be of utmost importance while commuting outside the campus. If
                                    you are facing any issues with the vehicle service provided by the University, you
                                    can seek assistance from the Transport In-charge.
                                </p>

                                <p>
                                    For any assistance while commuting in public transport services or app-based cabs or
                                    bikes or self-drive cars you can seek attention from the local traffic police or
                                    Dial 100 to contact the Police Helpline.
                                </p>

                                <p>
                                    All app-based cab services have the facility to share live location with your near
                                    and dear ones which can be a very useful tool while commuting on your own.
                                </p>

                            </div>

                        </div>


                        <hr class="ab-transport-divider">


                        <!-- ROW 3 -->
                        <div class="row align-items-center gy-4">

                            <div class="col-lg-8">

                                <h4 class="ab-transport-title">Train Stations</h4>

                                <p>
                                    There are several quick and convenient ways of travelling from any of the following
                                    Train Stations to the University Campus:
                                </p>

                                <p>
                                    <strong>1. Guwahati Railway Station, Paltan Bazar, Guwahati – Distance: 12
                                        kms.</strong>
                                    Transport Facilities – Public Transport like Buses and share taxis that commute
                                    directly from Paltan Bazar to RGU Campus. App based taxi services can also be used
                                    for hassle free travel.
                                </p>

                                <p>
                                    <strong>2. Kamakhya Railway Station, Maligaon, Guwahati – Distance: 8.5
                                        kms.</strong>
                                    Transport Facilities – Public Transport like connecting Buses and connecting share
                                    taxis are available in this route. App based taxi services can also be used for
                                    hassle free travel.
                                </p>

                            </div>

                            <div class="col-lg-4">
                                <img src="mobile-assets/facilities-new/transportation/train-station.png"
                                    class="ab-transport-img" alt="Station">
                            </div>

                        </div>

                    </div>

                </section>

            </div>

        </div>

        <section class="ab-transport-contact-section">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-2 text-center mb-3 mb-lg-0">

                        <div class="ab-transport-contact-icon">
                            <svg width="55" height="55" fill="#2c4c7a" viewBox="0 0 24 24">
                                <path
                                    d="M4 16c0 1.1.9 2 2 2h1v2h2v-2h6v2h2v-2h1c1.1 0 2-.9 2-2V7c0-3.31-2.69-6-6-6H10C6.69 1 4 3.69 4 7v9zm2-7h12v7H6V9zm3 3h2v2H9v-2z" />
                            </svg>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <h5 class="ab-contact-title">Contact Details for Transport :</h5>

                        <p>
                            <strong>Mr. Manoj Sarma</strong>, Senior Manager (Admin) <br>
                            Ph: +91 881 1003 111
                        </p>

                    </div>

                    <div class="col-lg-5">

                        <p class="mb-0">
                            <strong>Jyoti Prasad Changmai</strong>, Deputy Manager, Transport <br>
                            Ph: +91 7099028761 / 8638687322
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <div class="ab-route-lightbox-overlay" id="abRouteLightbox">

            <span class="ab-route-lightbox-close">&times;</span>

            <div class="ab-route-lightbox-controls">
                <button id="abZoomInBtn">+</button>
                <button id="abZoomOutBtn">−</button>
                <button id="abZoomResetBtn">Reset</button>
            </div>

            <img class="ab-route-lightbox-img" id="abRouteLightboxImg">

        </div>

    </div>

    <script>
        const abRouteCards = document.querySelectorAll(".ab-route-card");
        const abRouteLightbox = document.getElementById("abRouteLightbox");
        const abRouteLightboxImg = document.getElementById("abRouteLightboxImg");
        const abRouteLightboxClose = document.querySelector(".ab-route-lightbox-close");

        const abZoomInBtn = document.getElementById("abZoomInBtn");
        const abZoomOutBtn = document.getElementById("abZoomOutBtn");
        const abZoomResetBtn = document.getElementById("abZoomResetBtn");

        let abZoomLevel = 1;
        let abIsDragging = false;
        let abStartX = 0;
        let abStartY = 0;
        let abTranslateX = 0;
        let abTranslateY = 0;


        /* OPEN LIGHTBOX */

        abRouteCards.forEach(card => {

            card.addEventListener("click", function() {

                const imgSrc = this.querySelector("img").src;

                abRouteLightbox.style.display = "flex";
                abRouteLightboxImg.src = imgSrc;

                abZoomLevel = 1;
                abTranslateX = 0;
                abTranslateY = 0;

                abRouteLightboxImg.style.transform = "scale(1) translate(0px,0px)";

            });

        });


        /* CLOSE */

        abRouteLightboxClose.onclick = () => {
            abRouteLightbox.style.display = "none";
        };

        abRouteLightbox.onclick = function(e) {
            if (e.target === this) {
                abRouteLightbox.style.display = "none";
            }
        };


        /* ZOOM BUTTONS */

        function abApplyTransform() {
            abRouteLightboxImg.style.transform =
                `translate(${abTranslateX}px, ${abTranslateY}px) scale(${abZoomLevel})`;
        }

        abZoomInBtn.onclick = function() {
            abZoomLevel += 0.2;
            abApplyTransform();
        };

        abZoomOutBtn.onclick = function() {
            abZoomLevel -= 0.2;
            if (abZoomLevel < 1) abZoomLevel = 1;
            abApplyTransform();
        };

        abZoomResetBtn.onclick = function() {
            abZoomLevel = 1;
            abTranslateX = 0;
            abTranslateY = 0;
            abApplyTransform();
        };


        /* MOUSE WHEEL ZOOM */

        abRouteLightboxImg.addEventListener("wheel", function(e) {

            e.preventDefault();

            if (e.deltaY < 0) {
                abZoomLevel += 0.1;
            } else {
                abZoomLevel -= 0.1;
                if (abZoomLevel < 1) abZoomLevel = 1;
            }

            abApplyTransform();

        });


        /* DRAG / PAN */

        abRouteLightboxImg.addEventListener("mousedown", function(e) {

            if (abZoomLevel <= 1) return;

            abIsDragging = true;
            abStartX = e.clientX - abTranslateX;
            abStartY = e.clientY - abTranslateY;

            abRouteLightboxImg.style.cursor = "grabbing";

        });


        window.addEventListener("mousemove", function(e) {

            if (!abIsDragging) return;

            abTranslateX = e.clientX - abStartX;
            abTranslateY = e.clientY - abStartY;

            abApplyTransform();

        });


        window.addEventListener("mouseup", function() {

            abIsDragging = false;
            abRouteLightboxImg.style.cursor = "grab";

        });
    </script>
@endsection
