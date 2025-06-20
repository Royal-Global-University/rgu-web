@extends('frontend.master')
@push('styles')
    <!-- media corner css  -->
    <style>
        /* Desktop carousel styles */
        .carousel-desktop-wrapper {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            padding: 30px;
            display: block;
        }

        .carousel-desktop-item {
            flex: 0 0 33.3333%;
            box-sizing: border-box;
            text-align: center;
        }

        .carousel-desktop-img {
            height: 550px;
            border: 2px solid #333;
        }

        .carousel-desktop-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 15px;
            background: #27467A;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .carousel-desktop-prev,
        .carousel-desktop-next {
            position: absolute;
            top: 50%;
            background: #27467A;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            transform: translateY(-50%);
        }

        .carousel-desktop-prev {
            left: 10px;
        }

        .carousel-desktop-next {
            right: 10px;
        }

        /* Mobile carousel styles */
        .carousel-mobile-wrapper {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            padding: 30px;
            display: none;
        }

        .carousel-mobile-item {
            flex: 0 0 100%;
            box-sizing: border-box;
            text-align: center;
        }

        .carousel-mobile-img {
            height: 550px;
            border: 2px solid #333;
        }

        .carousel-mobile-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 15px;
            background: #27467A;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .carousel-mobile-prev,
        .carousel-mobile-next {
            position: absolute;
            top: 50%;
            background: #27467A;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            transform: translateY(-50%);
        }

        .carousel-mobile-prev {
            left: 10px;
        }

        .carousel-mobile-next {
            right: 10px;
        }

        /* Responsive display switch */
        @media (max-width: 768px) {
            .carousel-desktop-wrapper {
                display: none;
            }

            .carousel-mobile-wrapper {
                display: block;
            }
        }
    </style>
    <!-- media corner css  -->
@endpush
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

            <div class="container pb-3" style="padding-top: 100px; position: relative;">
                <img src="mobile-assets/media-corner/news1/pic-detail.JPG" alt="">
            </div>

            <div class="container" style="padding: 20px; text-align: justify;">

                <h2 class="headd2 fw-bold" style="color: #27467A;">
                    RGU Launches Integrated BA and B.Sc. Programs with Civil Services Coaching by SPM IAS Academy
                </h2>

                <p class="para1 text-dark pt-4">
                    Guwahati, May 16, 2025: In a significant step toward empowering Northeast India’s youth with academic
                    excellence and competitive readiness for civil services examinations, the Assam Royal Global University
                    (RGU)
                    today launched its pioneering Integrated BA and BSc Programs with coaching for Civil Services
                    examinations.
                    This new initiative by RGU will be implemented in collaboration with OnCampus, where coaching will be
                    given by
                    the renowned SPM IAS Academy.
                </p>

                <p class="para1 text-dark pt-2">
                    In this context, Dr. AK Pansari, Chancellor of Assam Royal Global University, stated, “This integrated
                    program
                    underscores our commitment to nurturing future leaders who will serve the nation with integrity and
                    excellence, empowering students to realize their highest potential through academic and professional
                    preparation.”
                </p>

                <p class="para1 text-dark pt-2">
                    Addressing a press meet organised by RGU here today, Prof. (Dr.) Alak Kumar Buragohain, Chairperson,
                    Academics
                    RGU, stated, “These programmes are designed to prepare students for UPSC, APSC, and other competitive
                    exams
                    while pursuing undergraduate degrees. It will commence from the 2025-26 academic session, seamlessly
                    blending
                    academic rigor with specialized professional coaching.”
                </p>

                <p class="para1 text-dark pt-2">
                    Utpal Kanta, CEO of OnCampus, emphasized, “OnCampus is proud to support this visionary program by
                    providing
                    cutting-edge digital tools and career guidance, enabling students to access world-class resources and
                    achieve
                    their civil services goals.”
                </p>

                <p class="para1 text-dark pt-2">
                    Satyajit Kumar, Director of SPM IAS Academy said, “Our mission is to make high-quality civil services
                    coaching
                    accessible. This partnership will inspire and guide Northeast youth toward success in UPSC and APSC
                    exams.”
                    The press meet was also addressed by SPM IAS Academy Directors Mridul Mishra, Chinmoy Bordoloi, Vivek
                    Khetawat
                    and Palash Protim Gogoi.
                </p>

                <p class="para1 text-dark pt-2">
                    Speaking to the media persons, Prof (Dr.) Diganta Munshi, Registrar of Royal Global University,
                    remarked, “The
                    BA programs encompass disciplines such as Sociology, Economics, Public Administration, Political
                    Science,
                    History, Psychology, and English, while the BSc programs include Physics, Mathematics, Chemistry,
                    Geography,
                    Geology, Botany, and Zoology.” Each program integrates coaching for the civil services examinations by
                    SPM IAS
                    Academy, he added.
                </p>

                <p class="para1 text-dark pt-2">
                    Renowned for its proven success, the SPM IAS Academy has a 75.48% success rate in APSC 2022 and 82.55%
                    in
                    2023. The UPSC-aligned curriculum features expert-led classes, regular mock tests, personalized
                    mentorship,
                    and skill-building workshops.
                </p>

            </div>
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-2"
                style="color: #27467A; font-weight: 900;">
                Media <span style="color: #FF9A1E; font-weight: 500;">Coverage</span></h2>

            <!-- Mobile Carousel -->
            <div class="carousel-mobile-wrapper">
                <div class="carousel-mobile-track"
                    style="display: flex; gap: 20px; transition: transform 0.5s ease-in-out;">
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s1.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s2.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s3.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s4.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s5.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s7.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s8.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s9.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>
                    <div class="carousel-mobile-item">
                        <img src="mobile-assets/media-corner/news1/s10.png" class="carousel-mobile-img">
                        <a href="#" class="carousel-mobile-btn">News Link</a>
                    </div>

                </div>
                <button class="carousel-mobile-prev" onclick="moveCarouselMobile(-1)">&#8592;</button>
                <button class="carousel-mobile-next" onclick="moveCarouselMobile(1)">&#8594;</button>
            </div>

        </div>

        <div class="website">
            @include('frontend/components/aheader')

            <div class="container pt-5 pb-4">
                <img src="mobile-assets/media-corner/news1/pic-detail.JPG" alt="">
            </div>

            <div class="container" style="padding: 30px 0px; text-align: justify;">

                <h1 class="headd2 fw-bold" style="color: #27467A;">
                    RGU Launches Integrated BA and B.Sc. Programs with Civil Services Coaching by SPM IAS Academy
                </h1>

                <p class="headd3 text-dark pt-4">
                    Guwahati, May 16, 2025: In a significant step toward empowering Northeast India’s youth with academic
                    excellence and competitive readiness for civil services examinations, the Assam Royal Global University
                    (RGU)
                    today launched its pioneering Integrated BA and BSc Programs with coaching for Civil Services
                    examinations.
                    This new initiative by RGU will be implemented in collaboration with OnCampus, where coaching will be
                    given by
                    the renowned SPM IAS Academy.
                </p>

                <p class="headd3 text-dark pt-2">
                    In this context, Dr. AK Pansari, Chancellor of Assam Royal Global University, stated, “This integrated
                    program
                    underscores our commitment to nurturing future leaders who will serve the nation with integrity and
                    excellence, empowering students to realize their highest potential through academic and professional
                    preparation.”
                </p>

                <p class="headd3 text-dark pt-2">
                    Addressing a press meet organised by RGU here today, Prof. (Dr.) Alak Kumar Buragohain, Chairperson,
                    Academics
                    RGU, stated, “These programmes are designed to prepare students for UPSC, APSC, and other competitive
                    exams
                    while pursuing undergraduate degrees. It will commence from the 2025-26 academic session, seamlessly
                    blending
                    academic rigor with specialized professional coaching.”
                </p>

                <p class="headd3 text-dark pt-2">
                    Utpal Kanta, CEO of OnCampus, emphasized, “OnCampus is proud to support this visionary program by
                    providing
                    cutting-edge digital tools and career guidance, enabling students to access world-class resources and
                    achieve
                    their civil services goals.”
                </p>

                <p class="headd3 text-dark pt-2">
                    Satyajit Kumar, Director of SPM IAS Academy said, “Our mission is to make high-quality civil services
                    coaching
                    accessible. This partnership will inspire and guide Northeast youth toward success in UPSC and APSC
                    exams.”
                    The press meet was also addressed by SPM IAS Academy Directors Mridul Mishra, Chinmoy Bordoloi, Vivek
                    Khetawat
                    and Palash Protim Gogoi.
                </p>

                <p class="headd3 text-dark pt-2">
                    Speaking to the media persons, Prof (Dr.) Diganta Munshi, Registrar of Royal Global University,
                    remarked, “The
                    BA programs encompass disciplines such as Sociology, Economics, Public Administration, Political
                    Science,
                    History, Psychology, and English, while the BSc programs include Physics, Mathematics, Chemistry,
                    Geography,
                    Geology, Botany, and Zoology.” Each program integrates coaching for the civil services examinations by
                    SPM IAS
                    Academy, he added.
                </p>

                <p class="headd3 text-dark pt-2">
                    Renowned for its proven success, the SPM IAS Academy has a 75.48% success rate in APSC 2022 and 82.55%
                    in
                    2023. The UPSC-aligned curriculum features expert-led classes, regular mock tests, personalized
                    mentorship,
                    and skill-building workshops.
                </p>

            </div>

            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4 pb-2"
                style="color: #27467A; font-weight: 900;">
                Media <span style="color: #FF9A1E; font-weight: 500;">Coverage</span></h2>



            <div class="custom-carousel-container container">
                <!-- Desktop Carousel -->
                <div class="carousel-desktop-wrapper">
                    <div class="carousel-desktop-track"
                        style="display: flex; gap: 10px; transition: transform 0.5s ease-in-out;">
                        <!-- Repeatable items -->
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s1.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s2.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s3.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s4.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s5.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s6.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s7.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s8.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s9.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                        <div class="carousel-desktop-item">
                            <img src="mobile-assets/media-corner/news1/s10.png" class="carousel-desktop-img"> <br>
                            <a href="#" class="carousel-desktop-btn">News Link</a>
                        </div>
                    </div>
                    <button class="carousel-desktop-prev" onclick="moveCarouselDesktop(-1)">&#8592;</button>
                    <button class="carousel-desktop-next" onclick="moveCarouselDesktop(1)">&#8594;</button>
                </div>
            </div>

        </div>
        <!-- media corner js  -->
        <script>
            // DESKTOP
            let desktopIndex = 0;
            const desktopItems = document.querySelectorAll('.carousel-desktop-item');
            const desktopTrack = document.querySelector('.carousel-desktop-track');
            const desktopVisible = 3;

            function updateCarouselDesktop() {
                const total = desktopItems.length;
                const offset = desktopIndex * (100 / desktopVisible);
                desktopTrack.style.transform = `translateX(-${offset}%)`;
            }

            function moveCarouselDesktop(dir) {
                desktopIndex += dir;
                if (desktopIndex > desktopItems.length - desktopVisible) desktopIndex = 0;
                if (desktopIndex < 0) desktopIndex = desktopItems.length - desktopVisible;
                updateCarouselDesktop();
            }

            setInterval(() => moveCarouselDesktop(1), 3000);

            // MOBILE
            let mobileIndex = 0;
            const mobileItems = document.querySelectorAll('.carousel-mobile-item');
            const mobileTrack = document.querySelector('.carousel-mobile-track');
            const mobileVisible = 1;

            function updateCarouselMobile() {
                const offset = mobileIndex * (100 / mobileVisible);
                mobileTrack.style.transform = `translateX(-${offset}%)`;
            }

            function moveCarouselMobile(dir) {
                mobileIndex += dir;
                if (mobileIndex > mobileItems.length - mobileVisible) mobileIndex = 0;
                if (mobileIndex < 0) mobileIndex = mobileItems.length - mobileVisible;
                updateCarouselMobile();
            }

            setInterval(() => moveCarouselMobile(1), 3000);
        </script>
        <!-- media corner js  -->
    </section>
@endsection
