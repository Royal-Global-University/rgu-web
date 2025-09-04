@extends('frontend.master')
@section('title', 'The Assam Royal Global University | Best Private University in Assam, India')
@section('meta_description', 'Discover Royal Global University, the best private university in Assam offering world-class education, top-ranked faculty, modern infrastructure & 50+ UG & PG programs.')
@section('meta_keywords', 'Best University in Assam')
@section('content')

        <div class="mobile">

          <!-- Popup -->
            <div id="popup-mob" class="popup-overlay">
                <a href="https://admissions.rgu.ac/" target="_blank" class="text-center"><img
                        src="{{ asset('mobile-assets/ads/phd-ads.jpg') }}" style="width: 400px; height: 400px;"
                        class="popup-image" alt="Popup Image"></a>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const popup = document.getElementById('popup-mob');

                    // When click anywhere outside the image, hide the popup
                    popup.addEventListener('click', function (event) {
                        if (event.target === popup) {
                            popup.style.display = 'none';
                        }
                    });
                });
            </script>

            <!-- Floating WhatsApp Button -->
            <a href="https://wa.me/917099028518" class="whatsapp-float" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            </a>


            <!-- Floating Section with Frosted Background -->
            <div class="container">
                <div class="floating-wrapper" style="
                                                        position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
                                                        width: 90%; max-width: 400px; z-index: 800;
                                                        backdrop-filter: blur(30px);
                                                        background: #27467A; /* Frosty effect */
                                                        border-radius: 10px;
                                                        box-shadow: 0 1px 1px #ffffff97;
                                                        border: 1px solid #27467A;
                                                        padding: 15px;">

                    <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                        <span class="mobile-para1" style="
                                                                font-weight: bold; font-size: 18px; line-height: 1.3;
                                                                color: #fff; flex-grow: 1;">
                            Admission open for 2025 - 2026
                        </span>

                        <a href="https://admissions.rgu.ac" target="_blank" class="btn mobile-para1 pulse-btn" style="
                                                                background-color: #ffb300; color: #fff;
                                                                font-weight: bold; padding: 10px 14px; border-radius: 5px;
                                                                text-decoration: none; white-space: nowrap;">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>


            <!-- menu  -->
            @include('frontend/components/mobileheader')

        <!-- Mobile Video -->
        <div class="mobile-video" style="position: relative; width: 100%; height: auto;">
            <img src="mob-thumb.png" id="video-thumbnail" alt="Video Thumbnail"
                style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

            <video playsinline autoplay loop muted id="video-bg" oncanplay="showVideo()"
                style="width: 100%; height: auto; display: block;">
                <source src="mobile-assets/index/Websitemobilevideooo.mp4" type="video/mp4">
            </video>
        </div>

        <script>
            function showVideo() {
                let thumbnail = document.getElementById("video-thumbnail");
                thumbnail.style.opacity = "0";  // Fade out
                setTimeout(() => {
                    thumbnail.style.display = "none";  // Remove after transition
                }, 1000);  // Matches transition duration
            }
        </script>
        <!-- Mobile Video -->

        <!-- slider banners  -->
        <div id="carouselExample" class="carousel slide mobile-image-slider" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="mobile-assets/new-details/research-web.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="mobile-assets/new-details/about-web.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!-- slider banners  -->

        <!-- Explore Rgu  -->
        <img src="demo-assets/mobile/explore-rgu.png" alt="">
        <!-- Explore Rgu  -->

        <!-- Event Section  -->
        <section>

            <style>
                .unique-gallery-section {
                    padding: 30px 5px;
                    border-radius: 10px;
                    background-color: #f8f9fa;
                }

                .unique-gallery-title {
                    color: #27467A;
                    font-weight: 800;
                    font-size: 40px;
                    padding-bottom: 1rem;
                }

                .unique-gallery-title .highlight {
                    color: #FF9A1E;
                    font-weight: 500;
                }

                /* Apply flex properties ONLY to the active slide */
                #uniqueGalleryCarousel .carousel-item.active {
                    display: flex;
                    align-items: center;
                }

                .unique-gallery-img {
                    width: 100%;
                    height: auto;
                    border: 2px solid #e68900;
                    border-radius: 10px;
                    cursor: pointer;
                }

                /* --- Modified styles for carousel controls --- */
                .unique-gallery-control-prev,
                .unique-gallery-control-next {
                    position: static;
                    display: inline-flex;
                    transform: none;
                    width: 40px;
                    height: 40px;
                    margin: 0 5px;
                    background-color: #27467A;
                    border-radius: 50%;
                }

                /* --- Unique Lightbox Styles --- */
                #unique-gallery-lightbox {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.9);
                    justify-content: center;
                    align-items: center;
                    z-index: 1050;
                }

                #unique-gallery-lightbox-img {
                    max-width: 90%;
                    max-height: 90%;
                    border-radius: 10px;
                }

                /* --- Mobile Responsive Styles --- */
                @media (max-width: 991px) {
                    .unique-gallery-media-col {
                        margin-top: 2rem;
                        /* Add space between stacked columns */
                    }
                }

                @media (max-width: 768px) {
                    .unique-gallery-title {
                        font-size: 28px;
                        /* Reduce title font size on mobile */
                        text-align: center;
                        /* Center title on mobile */
                    }

                    .unique-gallery-section {
                        padding: 20px 10px;
                        /* Adjust padding for smaller screens */
                    }

                    .unique-gallery-media-card-text {
                        text-align: center;
                        margin-top: 1rem;
                    }
                }
            </style>

            <section class="unique-gallery-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="unique-gallery-title">News and<span class="highlight"> Events</span></h2>

                            <div id="uniqueGalleryCarousel" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="3000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row w-100 mx-0">
                                            <div class="col-12">
                                                <img class="unique-gallery-img"
                                                    src="https://www.rgu.ac/mobile-assets/events/basket.jpeg" alt="Event 1">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row w-100 mx-0">
                                            <div class="col-12">
                                                <img class="unique-gallery-img"
                                                    src="https://www.rgu.ac/mobile-assets/events/stu-1.1.jpeg"
                                                    alt="Event 3">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <button class="unique-gallery-control-prev" type="button"
                                    data-bs-target="#uniqueGalleryCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="unique-gallery-control-next" type="button"
                                    data-bs-target="#uniqueGalleryCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-6 unique-gallery-media-col">
                            <h2 class="unique-gallery-title">Media<span class="highlight"> Corner</span></h2>

                            <div style="background-color: #FFF0DB; padding: 15px; border-radius: 10px;">

                                <div
                                    style="background-color: #FAF9F6; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);">
                                    <div class="row p-3 align-items-center">
                                        <div class="col-md-4">
                                            <img class="border shadow-sm"
                                                style="height: 120px; width: 100%; object-fit: cover; border-radius: 5px;"
                                                src="https://www.rgu.ac/mobile-assets/media-corner/news39/Leadership%20Conclave%202025.jpg"
                                                alt="Leadership Conclave">
                                        </div>
                                        <div class="col-md-8 unique-gallery-media-card-text">
                                            <h2 class="fw-bold mb-1" style="color: #27467A; font-size: 17px;">
                                                National Leadership Conclave 2025 from 11th September at Royal Global
                                                University
                                            </h2>
                                            <p style="color: #333; font-size: 14px; margin: 0.25rem 0;">
                                                September 2, 2025
                                            </p>
                                            <a style="color: #ef991f; font-size: 15px;" class="fw-bold" href="#">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-2"></div>

                                <div
                                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);">
                                    <div class="row p-3 align-items-center">
                                        <div class="col-md-4">
                                            <img class="border shadow-sm"
                                                style="height: 120px; width: 100%; object-fit: cover; border-radius: 5px;"
                                                src="https://www.rgu.ac/mobile-assets/rgu-blog/blog2.jpeg"
                                                alt="AICTE-VAANI Grant">
                                        </div>
                                        <div class="col-md-8 unique-gallery-media-card-text">
                                            <h2 class="fw-bold mb-1" style="color: #27467A; font-size: 17px;">
                                                AICTE-VAANI Grant Sanctioned to RGU for Indian Knowledge Systems Conference
                                            </h2>
                                            <p style="color: #333; font-size: 14px; margin: 0.25rem 0;">
                                                September 1, 2025
                                            </p>
                                            <a style="color: #ef991f; font-size: 15px;" class="fw-bold" href="#">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-2"></div>

                                <div
                                    style="background-color: #FAF9F6; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);">
                                    <div class="row p-3 align-items-center">
                                        <div class="col-md-4">
                                            <img class="border shadow-sm"
                                                style="height: 120px; width: 100%; object-fit: cover; border-radius: 5px;"
                                                src="https://www.rgu.ac/mobile-assets/media-corner/news38/head.jpg"
                                                alt="Supreme Court Judge">
                                        </div>
                                        <div class="col-md-8 unique-gallery-media-card-text">
                                            <h2 class="fw-bold mb-1" style="color: #27467A; font-size: 17px;">
                                                Supreme Court Judge unveils one of India’s largest Gavels at Royal Global
                                                University
                                            </h2>
                                            <p style="color: #333; font-size: 14px; margin: 0.25rem 0;">
                                                August 30, 2025
                                            </p>
                                            <a style="color: #ef991f; font-size: 15px;" class="fw-bold" href="#">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <a style="padding: 10px 20px; background-color: #27467A; color: #fff; border-radius: 5px; font-size: 14px; text-decoration: none;"
                                        href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="unique-gallery-lightbox">
                <img id="unique-gallery-lightbox-img" src="" alt="Zoomed Event Image">
            </div>

            <script>
                // --- Unique Lightbox Functionality ---
                const uniqueGalleryZoomableImages = document.querySelectorAll('.unique-gallery-img');
                const uniqueGalleryLightbox = document.getElementById('unique-gallery-lightbox');
                const uniqueGalleryLightboxImg = document.getElementById('unique-gallery-lightbox-img');

                uniqueGalleryZoomableImages.forEach(img => {
                    img.addEventListener('click', () => {
                        uniqueGalleryLightbox.style.display = 'flex';
                        uniqueGalleryLightboxImg.src = img.src;
                    });
                });

                uniqueGalleryLightbox.addEventListener('click', () => {
                    uniqueGalleryLightbox.style.display = 'none';
                });

                // --- Unique function to auto-adjust slide height ---
                function uniqueGalleryNormalizeSlideHeights() {
                    const carouselInstance = document.querySelector('#uniqueGalleryCarousel');
                    if (!carouselInstance) return; // Exit if carousel not found

                    const carouselInner = carouselInstance.querySelector('.carousel-inner');
                    const carouselItems = carouselInstance.querySelectorAll('.carousel-item');
                    let maxHeight = 0;
                    const activeItem = carouselInstance.querySelector('.carousel-item.active');

                    // Temporarily remove 'active' to measure all items correctly
                    if (activeItem) activeItem.classList.remove('active');

                    carouselItems.forEach(item => {
                        item.style.display = 'block'; // Make it visible for measurement
                        if (item.offsetHeight > maxHeight) {
                            maxHeight = item.offsetHeight;
                        }
                        item.style.display = ''; // Revert back
                    });

                    // Restore active class and set min-height
                    if (activeItem) activeItem.classList.add('active');
                    if (maxHeight > 0) {
                        carouselInner.style.minHeight = `${maxHeight}px`;
                    }
                }

                window.addEventListener('load', uniqueGalleryNormalizeSlideHeights);
                window.addEventListener('resize', uniqueGalleryNormalizeSlideHeights);
            </script>

        </section>
        <!-- Event Section  -->

        <!-- Specific Events  -->
        <section style="padding: 30px; background-color: #101d34;">
            <div style="display: flex; justify-content: center; align-items: center;">
                <div class="row" style="display: flex; justify-content: center; align-items: center;">

                    <div class="col-lg-12">
                        <div>
                            <a href="">
                                <img style="border: 1px solid #fff;" src="mobile-assets/events/a.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                        <div>
                            <a href="">
                                <img style="border: 1px solid #fff;" src="mobile-assets/events/b.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                        <div>
                            <a href="">
                                <img style="border: 1px solid #fff;" src="mobile-assets/events/c.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Specific Events  -->

        <!-- campus life  -->
        <section class="unique-cl-section">

            <style>
                .unique-cl-section {
                    background-image: url('demo-assets/campus-life/Our-Campus-Life-bg.png');
                    background-size: cover;
                    background-position: center;
                    min-height: 90vh;
                    /* Use min-height for flexibility */
                    height: auto;
                    /* Allow height to grow with content */
                    padding: 50px 0;
                    display: flex;
                    align-items: center;
                }

                /* --- Content Styles --- */
                .unique-cl-heading {
                    color: #e68900;
                    font-weight: 700;
                    letter-spacing: 2px;
                    font-size: 55px;
                }

                .unique-cl-heading .highlight {
                    color: white;
                    font-weight: 500;
                }

                .unique-cl-para {
                    color: white;
                    font-size: 20px;
                    text-align: justify;
                    line-height: 1.6;
                }

                /* --- Carousel Styles --- */
                .unique-cl-carousel-wrapper {
                    width: 95%;
                    max-width: 80%;
                }

                .unique-cl-carousel-inner {
                    border-radius: 16px;
                    overflow: hidden;
                    width: 100%;
                }

                .unique-cl-carousel-square {
                    position: relative;
                    width: 100%;
                    padding-top: 100%;
                    /* Creates a 1:1 aspect ratio */
                    background: #f3f3f3;
                }

                .unique-cl-carousel-square img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                #uniqueClSquareCarousel .carousel-indicators {
                    margin-bottom: -2rem;
                }

                #uniqueClSquareCarousel .carousel-indicators button {
                    width: 10px;
                    height: 10px;
                    border-radius: 50%;
                }

                /* --- Mobile Responsive Styles --- */
                @media (max-width: 991px) {
                    .unique-cl-carousel-col {
                        margin-top: 2.5rem;
                    }
                }

                @media (max-width: 768px) {
                    .unique-cl-section {
                        padding: 30px 0;
                        min-height: auto;
                        /* Remove min-height on mobile */
                    }

                    .unique-cl-header-row {
                        flex-direction: column;
                        align-items: center !important;
                    }

                    /* Make tabs horizontally scrollable */
                    .unique-cl-tabs-container {
                        width: 100%;
                        overflow-x: auto;
                        /* For hiding the scrollbar */
                        -ms-overflow-style: none;
                        /* IE and Edge */
                        scrollbar-width: none;
                        /* Firefox */
                    }

                    .unique-cl-tabs-container::-webkit-scrollbar {
                        display: none;
                        /* Chrome, Safari, and Opera */
                    }

                    .unique-cl-tabs {
                        flex-wrap: nowrap;
                        /* Ensure tabs stay in one line */
                        justify-content: flex-start;
                        margin-top: 1rem;
                    }

                    .unique-cl-heading {
                        font-size: 32px;
                        text-align: center;
                    }

                    .unique-cl-para {
                        font-size: 16px;
                        text-align: center;
                    }

                    .unique-cl-carousel-wrapper {
                        max-width: 100%;
                    }
                }
            </style>

            <div class="container">

                <div class="tab-content w-100 mt-2" id="uniqueClTabContent">
                    <div class="tab-pane fade show active" id="unique-cl-campus" role="tabpanel"
                        aria-labelledby="unique-cl-campus-tab">
                        <div class="row">

                            <div class="col-lg-6 d-flex flex-column justify-content-center">
                                <h2 class="unique-cl-heading">
                                    Our Campus <span class="highlight">Life</span>
                                </h2>
                                <p class="unique-cl-para mt-3">
                                    Recognized as the best private university in Assam, The Assam Royal Global University
                                    provides an enriching campus life. As the best University in Northeast Assam, we foster
                                    holistic development through vibrant cultural festivals, academic clubs, and sports
                                    activities. Students thrive in a dynamic atmosphere that nurtures leadership and
                                    teamwork, exploring their interests beyond the classroom.
                                </p>
                            </div>

                            <div class="col-lg-6 d-flex justify-content-center unique-cl-carousel-col">
                                <div id="uniqueClSquareCarousel" class="carousel slide unique-cl-carousel-wrapper"
                                    data-bs-ride="carousel" data-bs-interval="2500">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel" data-bs-slide-to="0"
                                            class="active" aria-current="true"></button>
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel"
                                            data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel"
                                            data-bs-slide-to="2"></button>
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel"
                                            data-bs-slide-to="3"></button>
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel"
                                            data-bs-slide-to="4"></button>
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel"
                                            data-bs-slide-to="5"></button>
                                        <button type="button" data-bs-target="#uniqueClSquareCarousel"
                                            data-bs-slide-to="6"></button>
                                    </div>
                                    <div class="carousel-inner unique-cl-carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/infra.jpg" alt="Infrastructure">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/games.jpg" alt="Games">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/amenities.jpg" alt="Amenities">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/clubs.jpg" alt="Clubs">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/events.jpg" alt="Events">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/hostel.jpg" alt="Hostel">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="unique-cl-carousel-square">
                                                <img src="demo-assets/campus-life/student-aff.jpg" alt="Student Affairs">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <script>
                // Scoped script to keep the active tab orange + bold
                // This will only affect the tabs inside the '#uniqueClTab' container
                const uniqueClTabLinks = document.querySelectorAll('#uniqueClTab .unique-cl-tab-link');
                uniqueClTabLinks.forEach(tab => {
                    tab.addEventListener('shown.bs.tab', (event) => {
                        // Reset all tabs in this specific group
                        uniqueClTabLinks.forEach(btn => {
                            btn.style.color = 'white';
                            btn.style.fontWeight = 'normal';
                        });
                        // Style the newly shown tab
                        event.target.style.color = '#F6921E';
                        event.target.style.fontWeight = 'bold';
                    });
                });
            </script>

        </section>
        <!-- campus life  -->


    </div>

    <div class="website">

                                                                                                            <div id="popup-web" class="popup-overlay">
                                                                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfKAyNyc88p6x7K-rFpnG9C25dneSv79DvxkvHXlOi_CHGixA/viewform" target="_blank"><img src="{{ asset('mobile-assets/notification/convo-5th.jpeg') }}"
                                                                                                                    style="width: 700px; height: 550px;" class="popup-image" alt="Popup Image"></a>
                                                                                                        </div>

                                                                                                        <script>
                                                                                                            document.addEventListener('DOMContentLoaded', function () {
                                                                                                                const popup = document.getElementById('popup-web');

                                                                                                                popup.addEventListener('click', function (event) {
                                                                                                                    if (event.target === popup) {
                                                                                                                        popup.style.display = 'none';
                                                                                                                    }
                                                                                                                });
                                                                                                            });
                                                                                                        </script>

                                                                                                        <!-- floating button  -->
                                                                                                        <div>
                                                                                                            <a href="https://forms.gle/t7dhtshNKYwcHumq7"
                                                                                                                style="
                                                                                                                                                                                                                                                            position: fixed;
                                                                                                                                                                                                                                                            bottom: 35px;
                                                                                                                                                                                                                                                            right: 50px;
                                                                                                                                                                                                                                                            background-color: orange;
                                                                                                                                                                                                                                                            color: #fff;
                                                                                                                                                                                                                                                            padding: 12px 20px;
                                                                                                                                                                                                                                                            font-size: 18px;
                                                                                                                                                                                                                                                            font-weight: bold;
                                                                                                                                                                                                                                                            text-decoration: none;
                                                                                                                                                                                                                                                            border-radius: 20px;
                                                                                                                                                                                                                                                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                                                                                                                                                            z-index: 1000;
                                                                                                                                                                                                                                                            overflow: hidden;
                                                                                                                                                                                                                                                            animation: pulse 2s infinite;
                                                                                                                                                                                                                                                            ">
                                                                                                                <span
                                                                                                                    style="
                                                                                                                                                                                                                                                            position: absolute;
                                                                                                                                                                                                                                                            top: 0;
                                                                                                                                                                                                                                                            left: -75%;
                                                                                                                                                                                                                                                            width: 50%;
                                                                                                                                                                                                                                                            height: 100%;
                                                                                                                                                                                                                                                            background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                                                                                                                                                            transform: skewX(-25deg);
                                                                                                                                                                                                                                                            animation: shine 2s infinite;
                                                                                                                                                                                                                                                            "></span>
                                                                                                                Registration for 5th Convocation
                                                                                                            </a>
                                                                                                            <style>
                                                                                                                @keyframes pulse {
                                                                                                                    0% {
                                                                                                                        transform: scale(1);
                                                                                                                        box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                                                                                                    }

                                                                                                                    50% {
                                                                                                                        transform: scale(1.05);
                                                                                                                        box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                                                                                                    }

                                                                                                                    100% {
                                                                                                                        transform: scale(1);
                                                                                                                        box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                                                                                                    }
                                                                                                                }

                                                                                                                @keyframes shine {
                                                                                                                    0% {
                                                                                                                        left: -75%;
                                                                                                                    }

                                                                                                                    100% {
                                                                                                                        left: 125%;
                                                                                                                    }
                                                                                                                }
                                                                                                            </style>
                                                                                                        </div>
                                                                                                        <!-- floating button  -->

        <!-- Hero Section  -->
        <section>
            <header>
                <div>
                    @include('frontend/components/iheader')
                    <div>

                        <!-- Carousel container for 4-image slider -->
                        <div id="imageCarousel" class="carousel slide carousel-container" data-bs-ride="carousel"
                            data-pause="false" data-interval="2000">

                            <!-- admission banner  -->
                            <section class="container border mb-3"
                                style="background-color: #ffffff1c; box-shadow: -1px 3px 5px 0px rgba(255, 255, 255, 0.2); border-radius: 20px;  backdrop-filter: blur(20px);">

                                <div class="row"
                                    style="display: flex; align-items: center; justify-content: center; padding: 20px 10px;">

                                    <div class="col-lg-9">
                                        <h2 style="color: #fff;" class="headd3 fw-bold">
                                            Applications are now open for Admission in 2025 - 2026
                                        </h2>
                                        <p class="para1 text-white">
                                            Explore the full range of graduate courses that are accepting
                                            applications
                                        </p>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <a href="https://admissions.rgu.ac/" style="
      position: fixed;
      bottom: 35px;
      right: 50px;
      background-color: #ef991f;
      color: #fff;
      padding: 12px 20px;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      z-index: 1000;
      overflow: hidden;
      animation: pulse 2s infinite;
    ">
                                                <span style="
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
        transform: skewX(-25deg);
        animation: shine 2s infinite;
      "></span>
                                                APPLY NOW
                                            </a>
                                            <style>
                                                @keyframes pulse {
                                                    0% {
                                                        transform: scale(1);
                                                        box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                                    }

                                                    50% {
                                                        transform: scale(1.05);
                                                        box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                                    }

                                                    100% {
                                                        transform: scale(1);
                                                        box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                                    }
                                                }

                                                @keyframes shine {
                                                    0% {
                                                        left: -75%;
                                                    }

                                                    100% {
                                                        left: 125%;
                                                    }
                                                }
                                            </style>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- admission banner  -->

                            <div class="carousel-inner pt-3">
                                <div class="carousel-item active">
                                    <img src="home-banner/about-web-mont.png" alt="Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="home-banner/research-web-mont.png" alt="Slide 2">
                                </div>
                                <!-- <div class="carousel-item">
                                        <img src="sarang/s3.png" alt="Slide 3">
                                    </div> -->
                            </div>


                            <!-- Controls for the carousel -->
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button> -->



                        </div>

                        <!-- Video Container -->
                        <div class="video-container" style="position: relative; width: 100%; height: auto;">
                            <img src="web-thumb.png" id="video-thumbnail2" alt="Video Thumbnail"
                                style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

                            <video autoplay loop muted id="video-bg2" oncanplay="showVideo2()"
                                style="width: 100%; height: auto; display: block;">
                                <source src="https://media.rgu.ac/head-video/v-2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <!-- Video Container -->

                        <script>
                            function showVideo2() {
                                let thumbnail = document.getElementById("video-thumbnail2");
                                thumbnail.style.opacity = "0";  // Fade out smoothly
                                setTimeout(() => {
                                    thumbnail.style.display = "none";  // Remove after transition
                                }, 1000);  // Matches transition duration
                            }
                        </script>

                    </div>
                </div>
            </header>

        </section>
        <!-- Hero Section  -->

        <!-- Explore RGU New  -->
        <img src="demo-assets/explore-rgu.png" alt="">
        <!-- Explore RGU New  -->



        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <section style="padding: 30px; background-color: #101d34;">
            <div class="swiper myImageSlider" style="max-width:1800px; margin:auto;">
                <div class="swiper-wrapper">

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <a href="">
                            <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                src="demo-assets/events/a.png" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="">
                            <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                src="demo-assets/events/b.png" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="">
                            <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                src="demo-assets/events/c.png" alt="">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="">
                            <img style="width:100%; height:500px; object-fit:cover; border:1px solid #fff;"
                                src="demo-assets/events/d.png" alt="">
                        </a>
                    </div>



                </div>

                <!-- Navigation -->
                <!-- <div class="swiper-button-next slider-next"></div>
                <div class="swiper-button-prev slider-prev"></div> -->
            </div>
        </section>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            const myImageSlider = new Swiper('.myImageSlider', {
                slidesPerView: 3,          // show 3 images
                spaceBetween: 20,          // spacing
                slidesPerGroup: 1,         // scroll 1 at a time
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.slider-next',
                    prevEl: '.slider-prev',
                },
                breakpoints: {
                    0: { slidesPerView: 1 },     // mobile
                    768: { slidesPerView: 2 },   // tablet
                    1024: { slidesPerView: 3 }   // desktop
                }
            });

        </script>



        <!--Event Section-->
        <section>

            <style>
                .events-section {
                    padding: 30px 15px;
                    border-radius: 10px;
                    background-color: #f8f9fa;
                }

                .section-title {
                    color: #27467A;
                    font-weight: 800;
                    font-size: 40px;
                    padding-bottom: 1rem;
                }

                .section-title .highlight {
                    color: #FF9A1E;
                    font-weight: 500;
                }

                /* Apply flex properties ONLY to the active slide */
                .carousel-item.active {
                    display: flex;
                    align-items: center;
                    /* Vertically center the images */
                }

                .carousel-img {
                    width: 100%;
                    height: auto;
                    /* Allow image to scale proportionally */
                    border: 2px solid #e68900;
                    border-radius: 10px;
                    cursor: pointer;
                }

                /* --- MODIFIED STYLES FOR CONTROLS --- */
                .carousel-control-prev,
                .carousel-control-next {
                    position: static;
                    /* Override Bootstrap's absolute positioning */
                    display: inline-flex;
                    /* Display them side-by-side */
                    transform: none;
                    /* Remove the vertical centering transform */
                    width: 40px;
                    height: 40px;
                    margin: 0 5px;
                    /* Add a little space between buttons */
                    background-color: #27467A;
                    border-radius: 50%;
                }

                /* Lightbox Styles */
                #lightbox {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.9);
                    justify-content: center;
                    align-items: center;
                    z-index: 1050;
                }

                #lightbox-img {
                    max-width: 90%;
                    max-height: 90%;
                    border-radius: 10px;
                }
            </style>


            <section class="events-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 style="padding-left: 15px;" class="section-title">E-Board,<span class="highlight"> RGU</span></h2>

                            <div id="eventsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row w-100 mx-0">
                                            <div class="col-6">
                                                <img class="carousel-img"
                                                    src="https://www.rgu.ac/mobile-assets/events/basket.jpeg" alt="Event 1">
                                            </div>
                                            <div class="col-6">
                                                <img class="carousel-img"
                                                    src="https://www.rgu.ac/mobile-assets/events/sep-2.jpeg" alt="Event 2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row w-100 mx-0">
                                            <div class="col-6">
                                                <img class="carousel-img"
                                                    src="https://www.rgu.ac/mobile-assets/events/stu-1.1.jpeg"
                                                    alt="Event 3">
                                            </div>
                                            <div class="col-6">
                                                <img class="carousel-img"
                                                    src="https://www.rgu.ac/mobile-assets/events/Ravi_Kant-1.jpeg"
                                                    alt="Event 4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h2 style="padding-left: 10px;" class="section-title">Media<span class="highlight"> Corner</span></h2>

                            <div style="background-color: #FFF0DB; padding: 15px; border-radius: 10px;">

                                <div
                                    style="background-color: #FAF9F6; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);">
                                    <div class="row p-3 align-items-center">
                                        <div class="col-lg-4">
                                            <img class="border shadow-sm"
                                                style="height: 120px; width: 100%; object-fit: fit; border-radius: 5px;"
                                                src="https://www.rgu.ac/mobile-assets/media-corner/news39/Leadership%20Conclave%202025.jpg"
                                                alt="Scholarship award ceremony">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2 class="para1 fw-bold mb-1" style="color: #27467A; font-size: 17px;">
                                                National Leadership Conclave 2025 from 11th September at Royal Global
                                                University
                                            </h2>

                                            <p class="para1" style="color: #333; font-size: 14px; margin: 0.25rem 0;">
                                                September 2, 2025
                                            </p>

                                            <a style="color: #ef991f; font-size: 15px;" class="para1 fw-bold" href="">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-2"></div>

                                <div
                                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);">
                                    <div class="row p-3 align-items-center">
                                        <div class="col-lg-4">
                                            <img class="border shadow-sm"
                                                style="height: 120px; width: 100%; object-fit: fit; border-radius: 5px;"
                                                src="https://www.rgu.ac/mobile-assets/rgu-blog/blog2.jpeg"
                                                alt="Scholarship award ceremony">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2 class="para1 fw-bold mb-1" style="color: #27467A; font-size: 17px;">
                                                AICTE-VAANI Grant Sanctioned to RGU for Indian Knowledge Systems Conference
                                            </h2>

                                            <p class="para1" style="color: #333; font-size: 14px; margin: 0.25rem 0;">
                                                September 1, 2025
                                            </p>

                                            <a style="color: #ef991f; font-size: 15px;" class="para1 fw-bold" href="">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-2"></div>

                                <div
                                    style="background-color: #FAF9F6; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);">
                                    <div class="row p-3 align-items-center">
                                        <div class="col-lg-4">
                                            <img class="border shadow-sm"
                                                style="height: 120px; width: 100%; object-fit: cover; border-radius: 5px;"
                                                src="https://www.rgu.ac/mobile-assets/media-corner/news38/head.jpg"
                                                alt="Scholarship award ceremony">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2 class="para1 fw-bold mb-1" style="color: #27467A; font-size: 17px;">
                                                Supreme Court Judge unveils one of India’s largest Gavels at Royal Global
                                                University
                                            </h2>

                                            <p class="para1" style="color: #333; font-size: 14px; margin: 0.25rem 0;">
                                                August 30, 2025
                                            </p>

                                            <a style="color: #ef991f; font-size: 15px;" class="para1 fw-bold" href="">
                                                Read More...
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <a class="para1"
                                        style="padding: 10px 20px; background-color: #27467A; color: #fff; border-radius: 5px; font-size: 14px;"
                                        href="">View All</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="lightbox">
                <img id="lightbox-img" src="" alt="Zoomed Event Image">
            </div>

            <script>
                // --- Lightbox Functionality ---
                const zoomableImages = document.querySelectorAll('.carousel-img');
                const lightbox = document.getElementById('lightbox');
                const lightboxImg = document.getElementById('lightbox-img');

                zoomableImages.forEach(img => {
                    img.addEventListener('click', () => {
                        lightbox.style.display = 'flex';
                        lightboxImg.src = img.src;
                    });
                });

                lightbox.addEventListener('click', () => {
                    lightbox.style.display = 'none';
                });

                // --- REVISED JAVASCRIPT: Auto-adjust slide height ---
                function normalizeSlideHeights() {
                    const carousel = document.querySelector('#eventsCarousel');
                    const carouselInner = carousel.querySelector('.carousel-inner');
                    const carouselItems = carousel.querySelectorAll('.carousel-item');
                    let maxHeight = 0;
                    const activeItem = carousel.querySelector('.carousel-item.active');
                    if (activeItem) activeItem.classList.remove('active');

                    carouselItems.forEach(item => {
                        item.style.display = 'block';
                        if (item.offsetHeight > maxHeight) {
                            maxHeight = item.offsetHeight;
                        }
                        item.style.display = '';
                    });

                    if (activeItem) activeItem.classList.add('active');
                    if (maxHeight > 0) {
                        carouselInner.style.minHeight = `${maxHeight}px`;
                    }
                }

                window.addEventListener('load', normalizeSlideHeights);
                window.addEventListener('resize', normalizeSlideHeights);
            </script>

        </section>
        <!--End Event-->



        <!-- campus life New -->
        <section
            style="background-image: url(demo-assets/campus-life/buildings.png); background-size: cover; height: 90vh; background-position: center;">
            <div class="container py-5">

                <!-- Row: Left Heading, Right Tabs -->
                <div class="d-flex justify-content-between align-items-start">

                    <!-- Heading on left -->
                    <!-- <h2 style="color:white; font-weight: 800; margin:0; letter-spacing: 2px;">Our Campus Life</h2> -->

                    <!-- Tabs on right -->
                    <!-- <ul class="nav nav-tabs flex-row align-items-end mb-3" id="myTab" role="tablist"
                                style="border:0;">

                                <li style="border-right: 2px solid #ffffff3a; padding-right: 5px;" class="nav-item"
                                    role="presentation">
                                    <button class="nav-link active" id="campus-tab" data-bs-toggle="tab"
                                        data-bs-target="#campus" type="button" role="tab"
                                        style="color:#F6921E; font-weight:bold; background:transparent; border:0;">
                                        Campus
                                    </button>
                                </li>

                                <li style="border-right: 2px solid #ffffff3a; padding-right: 5px; padding-left: 5px;"
                                    class="nav-item" role="presentation">
                                    <button class="nav-link" id="residence-tab" data-bs-toggle="tab"
                                        data-bs-target="#residence" type="button" role="tab"
                                        style="color:white; font-weight:normal; background:transparent; border:0;">
                                        Residence Life
                                    </button>
                                </li>

                                <li style="border-right: 2px solid #ffffff3a; padding-right: 5px; padding-left: 5px;"
                                    class="nav-item" role="presentation">
                                    <button class="nav-link" id="games-tab" data-bs-toggle="tab" data-bs-target="#games"
                                        type="button" role="tab"
                                        style="color:white; font-weight:normal; background:transparent; border:0;">
                                        Games & Sports
                                    </button>
                                </li>

                                <li style="padding-right: 5px;" class="nav-item" role="presentation">
                                    <button class="nav-link" id="amenities-tab" data-bs-toggle="tab"
                                        data-bs-target="#amenities" type="button" role="tab"
                                        style="color:white; font-weight:normal; background:transparent; border:0;">
                                        Amenities
                                    </button>
                                </li>
                            </ul> -->
                </div>

                <!-- Tab content below -->
                <div class="tab-content w-100 mt-2" id="myTabContent"
                    style="margin-top:20px; padding:15px; background: transparent; color:white; border-radius:8px;">

                    <div class="tab-pane fade show active" id="campus" role="tabpanel" aria-labelledby="campus-tab">

                        <div class="row">

                            <div class="col-lg-6"
                                style="display: flex; flex-direction: column; justify-content: center; background-color: #00000077; border: 1px solid #d7d7d776; border-radius: 0px 25px 0px 25px; backdrop-filter: blur(8px); padding: 25px;">
                                <h2 class="headd1"
                                    style="color:#e68900; font-weight: 700; margin:0; letter-spacing: 2px; font-size: 45px;">
                                    Our Campus <span
                                        style="color:white; font-weight: 500; margin:0; letter-spacing: 2px; font-size: 45px;">Life</span>
                                </h2>

                                <p class="para1 mt-4" style="font-size: 18px; text-align: justify;">
                                    Recognized as the best private university in Assam, The Assam Royal Global
                                    University provides an enriching campus life that complements academic
                                    excellence. As the best University in Northeast Assam, we foster holistic
                                    development through vibrant cultural festivals, academic clubs, and sports
                                    activities. Students thrive in a dynamic atmosphere that nurtures leadership and
                                    teamwork. Known as the top private university in Assam, we offer platforms for
                                    students to explore their interests beyond the classroom. With a reputation as
                                    the best private university in Assam, our inclusive environment supports both
                                    academic growth and personal development for those studying at the Best
                                    University in Guwahati or the Best Management College in Guwahati.
                                </p>
                            </div>

                            <div class="col-lg-6" style="display: flex; justify-content: center;">
                                <div id="squareCarousel" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="2500" style="width: 100%; max-width:80%;">

                                    <!-- Indicators -->
                                    <div class="carousel-indicators" style="margin-bottom: -2rem;">

                                        <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"
                                            style="width:10px;height:10px;border-radius:50%;"></button>

                                        <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="1"
                                            aria-label="Slide 2" style="width:10px;height:10px;border-radius:50%;"></button>

                                        <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="2"
                                            aria-label="Slide 3" style="width:10px;height:10px;border-radius:50%;"></button>

                                        <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="3"
                                            aria-label="Slide 4" style="width:10px;height:10px;border-radius:50%;"></button>

                                        <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="4"
                                            aria-label="Slide 5" style="width:10px;height:10px;border-radius:50%;"></button>

                                        <!-- <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="5"
                                            aria-label="Slide 6" style="width:10px;height:10px;border-radius:50%;"></button>

                                        <button type="button" data-bs-target="#squareCarousel" data-bs-slide-to="6"
                                            aria-label="Slide 7" style="width:10px;height:10px;border-radius:50%;"></button> -->

                                    </div>

                                    <!-- Slides -->
                                    <div class="carousel-inner" style="border-radius: 16px; overflow: hidden; width:100%;">

                                        <!-- Slide 1 -->
                                        <div class="carousel-item active">
                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/infra.jpg" alt="Slide 1"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Slide 2 -->
                                        <!-- <div class="carousel-item">
                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/games.jpg" alt="Slide 2"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div> -->

                                        <!-- Slide 3 -->
                                        <!-- <div class="carousel-item">

                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/amenities.jpg" alt="Slide 3"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div> -->

                                        <!-- Slide 4 -->
                                        <div class="carousel-item">

                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/clubs.jpg" alt="Slide 3"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Slide 5 -->
                                        <div class="carousel-item">

                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/events.jpg" alt="Slide 3"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Slide 6 -->
                                        <div class="carousel-item">

                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/hostel.jpg" alt="Slide 3"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Slide 7 -->
                                        <div class="carousel-item">

                                            <div
                                                style="position: relative; width: 100%; padding-top: 100%; background:#f3f3f3;">
                                                <a href=""> <img src="demo-assets/campus-life/student-aff.jpg" alt="Slide 3"
                                                        style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover;">
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    <!-- <div class="text-center mt-2">
                                        <button class="carousel-control-prev" type="button" data-bs-target="#squareCarousel"
                                            data-bs-slide="prev" style="filter: drop-shadow(0 0 4px rgba(0,0,0,0.6));">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#squareCarousel"
                                            data-bs-slide="next" style="filter: drop-shadow(0 0 4px rgba(0,0,0,0.6));">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div> -->

                                </div>
                            </div>


                        </div>

                    </div>


                </div>

            </div>

            <script>
                // Keep active tab orange + bold
                const tabLinks = document.querySelectorAll('.nav-link');
                tabLinks.forEach(tab => {
                    tab.addEventListener('shown.bs.tab', () => {
                        tabLinks.forEach(btn => { btn.style.color = 'white'; btn.style.fontWeight = 'normal'; });
                        tab.style.color = '#F6921E';
                        tab.style.fontWeight = 'bold';
                    });
                });
            </script>

        </section>
        <!-- campus life New -->

        <!-- Courses Card  -->
        <style>
            /* Styling for the card itself */
            .gph-zoom-container {
                display: block;
                /* Ensures the anchor behaves like a block for padding/margin */
                text-decoration: none;
                /* Removes default underline from link */
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                /* Smooth transition for zoom and shadow */
            }

            /* Styling for the image inside the card */
            .gph-zoom-container img {
                display: block;
                transition: transform 0.3s ease-in-out;
                /* Smooth transition for image zoom */
            }

            /* Hover effects for the card */
            .gph-zoom-container:hover {
                transform: translateY(-5px);
                /* Moves the card up slightly */
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                /* Adds a shadow */
            }

            /* Hover effect for the image inside the card (zoom) */
            .gph-zoom-container:hover img {
                transform: scale(1.02);
                /* Zooms the image to 105% */
            }
        </style>

        <section style="padding: 50px; text-align: center;">
            <div style="max-width: 1800px; margin: 0 auto;">
                <h2 style="color: #27467A; font-size: 50px; font-weight: 700; margin-bottom: 10px; margin-top: 0;">
                    Explore Our <span style="font-weight: 500; color: #EF991F;">Courses</span>
                </h2>

                <p class="para1 mb-5" style="color: #27467A;">
                    At The Assam Royal Global University, we offer a diverse range of academic programs designed to shape
                    future leaders and innovators. Recognized as the Best University in Assam, RGU is committed to academic
                    excellence across undergraduate, postgraduate, and doctoral levels. As a leading university in Northeast
                    Assam, we blend global standards with regional values to deliver impactful education.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: 50px; justify-content: center;">

                    <a href="" class="gph-zoom-container"
                        style="padding: 20px; border-radius: 20px; border: 1px solid #888;">
                        <img style="border-radius: 20px;" src="mobile-assets/index/c6.svg" alt="Course Image">
                    </a>

                    <a href="" class="gph-zoom-container"
                        style="padding: 20px; border-radius: 20px; border: 1px solid #888;">
                        <img style="border-radius: 20px;" src="mobile-assets/index/c7.svg" alt="Course Image">
                    </a>

                    <a href="" class="gph-zoom-container"
                        style="padding: 20px; border-radius: 20px; border: 1px solid #888;">
                        <img style="border-radius: 20px;" src="mobile-assets/index/c8.svg" alt="Course Image">
                    </a>

                </div>
            </div>
        </section>
        <!-- Courses Card  -->

        <!--Labs-->
        <section class="container-fluid"
            style="background-image: url('demo-assets/labs/lab-bg.png'); background-size: cover;">
            <div class="elementor-column-gap-default pt-2 pb-4">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-818362c"
                    data-id="818362c" data-element_type="column">
                    <div class="elementor-widget-wrap">


                        <div class="elementor-element elementor-element-bf98367 elementor-widget elementor-widget-go-features"
                            data-id="bf98367" data-element_type="widget" data-widget_type="go-features.default">
                            <div class="row">
                                <div class="col-lg-3">

                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-8 text-center" style="overflow: hidden; padding: 45px 0px 0px 0px;">
                                    <div class="elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                                        data-id="e22f91b" data-element_type="widget"
                                        data-widget_type="go-s-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="prthalign">
                                                <h1 style="font-weight: 700; color: #27467A;"
                                                    class="elementor-gt-heading kd-title-ani kd-split-text headd1">
                                                    Laboratories And <span
                                                        style="font-weight: 500; color: #EF991F;">Studios</span>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-widget-container pt-4">
                                        <div class="kd-course-4-slider p-relative">
                                            <div class="swiper-container kd-course-4-active">
                                                <div class="swiper-wrapper"
                                                    style="margin-right: 0px !important; padding: 0px !important;">

                                                    <div class="swiper-slide"
                                                        style="margin-right: 0px !important; padding: 0px !important;">
                                                        <div class="kd-course-4-item"
                                                            style="margin: 0px !important; padding: 0px !important;">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="https://www.rgu.ac/mobile-assets/laboratories/ev.jpeg"
                                                                        alt="List">

                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">EV <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide"
                                                        style="margin-right: 0px !important; padding: 0px !important;">
                                                        <div class="kd-course-4-item"
                                                            style="margin: 0px !important; padding: 0px !important;">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="https://www.rgu.ac/mobile-assets/laboratories/observe.jpeg"
                                                                        alt="List">

                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 17px !important; color: #27467A;"
                                                                            aria-label="name">Royal Observatory <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide"
                                                        style="margin-right: 0px !important; padding: 0px !important;">
                                                        <div class="kd-course-4-item"
                                                            style="margin: 0px !important; padding: 0px !important;">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async" src="demo-assets/mac-lab.jpg"
                                                                        alt="List">

                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href="#"
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Mac <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="#" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide"
                                                        style="margin-right: 0px !important; padding: 0px !important;">
                                                        <div class="kd-course-4-item"
                                                            style="margin: 0px !important; padding: 0px !important;">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="demo-assets/labs/computer1.jpg" alt="List">

                                                                    <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                    <span class="item-student kd-heading-1">34,000
                                                                                        students</span> -->
                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Computer <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide">
                                                        <div class="kd-course-4-item"
                                                            style="margin-right: 0px !important; padding: 0px !important">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="demo-assets/labs/electric1.jpg" alt="List">

                                                                    <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                                    <span class="item-student kd-heading-1">34,000
                                                                                        students</span> -->

                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Electrical <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide"
                                                        style="margin-right: 0px !important; padding: 0px !important">
                                                        <div class="kd-course-4-item">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="demo-assets/labs/language1.jpg" alt="List">


                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Language <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide" style="margin-right: 0px !important;">
                                                        <div class="kd-course-4-item">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async" src="demo-assets/labs/chem1.jpg"
                                                                        alt="List">

                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Chemistry <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide" style="margin-right: 0px !important;">
                                                        <div class="kd-course-4-item">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="demo-assets/labs/physics1.jpg" alt="List">

                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Physics <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="swiper-slide" style="margin-right: 0px !important;">
                                                        <div class="kd-course-4-item">
                                                            <div style="background-color: #ffdcac;"
                                                                class="kd-course-2-card shadow-sm">
                                                                <div class="main-img fix img-cover">

                                                                    <img decoding="async"
                                                                        src="demo-assets/labs/architecture1.jpg" alt="List">
                                                                </div>

                                                                <div class="card-content">
                                                                    <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                        <a href=""
                                                                            style="font-size: 20px !important; color: #27467A;"
                                                                            aria-label="name">Architecture <span
                                                                                style="color: #e68900;">Lab</span></a>
                                                                    </h4>
                                                                    <a href="" aria-label="name"
                                                                        class="item-btn para1 text-capitalize">
                                                                        <i class="fa-solid fa-angles-right"></i>
                                                                        Read More </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-de83d2a elementor-widget elementor-widget-ft-btn mt-5"
                                            data-id="de83d2a" data-element_type="widget" data-widget_type="ft-btn.default">
                                            <div class="elementor-widget-container">
                                                <div class="prthalign">
                                                    <a href="" rel="nofollow" aria-label="name"
                                                        class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                        <span class="text para1" style="font-size: 15px;"
                                                            data-back="Explore All Labs"
                                                            data-front="Explore All Labs"></span>
                                                        <span class="icon">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Labs-->

        <!-- Trail Blazer  -->
        <section
            style="background-image: url(demo-assets/trail-blazer/bg3.png); background-size: cover; background-position: center; height: 100vh;">

            <div class="row" style="padding: 10px 60px; height: 100%; display: flex; align-items: center;">

                <div class="col-lg-4" style="display: flex; align-items: center; justify-content: center;">
                    <h2 class="headd1 fw-bold" style="font-size: 50px; color: #fff;">
                        <span style="font-size: 60px; color: #EF991F; letter-spacing: 1px;"> Sports </span> <br>
                        Trailblazers as Students of RGU
                    </h2>
                </div>

                <div class="col-lg-8" style="display: flex; align-items: center; justify-content: center;">

                    <div class="mt-5" style="position: relative;">
                        <div class="trailblazer-carousel-scene"
                            style="width: 70vw; max-width: 900px; height: 500px; perspective: 1200px; margin-bottom: 80px; position: relative; display: flex; justify-content: center; align-items: center;">
                            <div class="trailblazer-carousel-container"
                                style="width: 100%; height: 100%; position: absolute; transform-style: preserve-3d; transition: transform 0.7s cubic-bezier(0.77, 0, 0.175, 1);">

                                <div class="trailblazer-carousel-item"
                                    style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                    <img src="demo-assets/trail-blazer/lovelina.png" alt="Carousel Image 1"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                </div>

                                <div class="trailblazer-carousel-item"
                                    style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                    <img src="demo-assets/trail-blazer/hima.png" alt="Carousel Image 2"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                </div>

                                <div class="trailblazer-carousel-item"
                                    style="position: absolute; width: 90%; height: 100%; left: 5%; top: 0; border: 2px solid #fff; border-radius: 10px; overflow: visible; background-color: rgba(255, 255, 255, 0.05); display: flex; justify-content: center; align-items: center; box-shadow: 0 0 5px #ffffff72, 0 0 10px #ffffff72, 0 0 15px #ffffff72;">
                                    <img src="demo-assets/trail-blazer/riyan.png" alt="Carousel Image 3"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block; position: relative; z-index: 1; border-radius: 7px;">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const carouselContainer = document.querySelector('.trailblazer-carousel-container');
                const carouselItems = document.querySelectorAll('.trailblazer-carousel-item');
                const scene = document.querySelector('.trailblazer-carousel-scene');

                if (!carouselContainer || carouselItems.length === 0) {
                    console.error("Trailblazer Carousel elements not found.");
                    return;
                }

                const cellCount = carouselItems.length;
                const theta = 360 / cellCount;
                let selectedIndex = 0;
                const carouselWidth = scene.offsetWidth * 0.9;
                const radius = Math.round((carouselWidth / 2) / Math.tan(Math.PI / cellCount)) + 100;
                let autoSlideInterval;

                function setupCarousel() {
                    carouselItems.forEach((cell, i) => {
                        const cellAngle = theta * i;
                        cell.style.transform = `rotateY(${cellAngle}deg) translateZ(${radius}px)`;
                        const img = cell.querySelector('img');
                        if (img && !cell.querySelector('.trailblazer-carousel-reflection')) {
                            const reflection = document.createElement('div');
                            reflection.className = 'trailblazer-carousel-reflection';
                            Object.assign(reflection.style, {
                                position: 'absolute', top: '100%', left: '0', width: '100%',
                                height: '100%', backgroundImage: `url(${img.src})`,
                                backgroundSize: 'cover', backgroundPosition: 'center top',
                                transform: 'scaleY(-1)', transformOrigin: 'center top',
                                opacity: '0.3', maskImage: 'linear-gradient(to bottom, transparent 30%, black 100%)',
                                WebkitMaskImage: 'linear-gradient(to bottom, transparent 30%, black 100%)',
                                zIndex: '0', pointerEvents: 'none', marginTop: '5px', borderRadius: '7px'
                            });
                            img.parentNode.appendChild(reflection);
                        }
                    });
                }

                function rotateCarousel() {
                    const angle = theta * selectedIndex * -1;
                    carouselContainer.style.transform = `translateZ(-${radius}px) rotateY(${angle}deg)`;
                }

                function startAutoSlide() {
                    clearInterval(autoSlideInterval);
                    autoSlideInterval = setInterval(() => {
                        selectedIndex++;
                        rotateCarousel();
                    }, 2500);
                }

                setupCarousel();
                rotateCarousel();
                startAutoSlide();
            });
        </script>
        <!-- Trail Blazer  -->

        <!-- foot prints  -->
        <img style="width: 100%;" src="demo-assets/footprints.png" alt="">
        <!-- foot prints  -->

        <!-- Fashion Museum  -->
        <section>

            <h2 class="headd1 text-center mt-4"
                style="color:#e68900; font-weight: 700; margin:0; letter-spacing: 0px; font-size: 45px;">
                The Digital <span style="color: #27467A; font-weight: 700; margin:0; font-size: 45px;">Coffee Table</span>
            </h2>

            <main id="bgc-gallery-wrapper"
                style="background-color: #fff; margin: 0px; padding: 2rem; display: flex; justify-content: center; align-items: center; min-height: 85vh; transition: background-color 0.5s ease-in-out 0s;">
                <section class="bgc-gallery-content"
                    style="display: flex; gap: 2rem; width: 100%; max-width: 1800px; background: #27467A; padding: 2rem; border-radius: 12px; box-shadow: rgba(0, 0, 0, 0.08) 0px 6px 20px; height: 90vh; box-sizing: border-box;">

                    <div class="bgc-gallery-left"
                        style="flex-basis: 20%; display: flex; flex-direction: column; justify-content: center; gap: 1.5rem;">


                        <button data-set="museum" class="bgc-gallery-selector-btn"
                            style="border: 4px solid transparent; padding: 0px; background: none; cursor: pointer; border-radius: 8px; overflow: hidden; transition: border-color 0.3s ease 0s, transform 0.3s ease 0s;"
                            onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                            <img src="demo-assets/switcher/museum/headimg.jpg" alt="Selector 2"
                                style="width: 100%; display: block; aspect-ratio: 1 / 1; object-fit: cover;">
                        </button>

                        <button data-set="lookbook" class="bgc-gallery-selector-btn"
                            style="border: 4px solid transparent; padding: 0px; background: none; cursor: pointer; border-radius: 8px; overflow: hidden; transition: border-color 0.3s ease 0s, transform 0.3s ease 0s;"
                            onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                            <img src="demo-assets/switcher/lookbook/headimg.png" alt="Selector 1"
                                style="width: 100%; display: block; aspect-ratio: 1 / 1; object-fit: cover;">
                        </button>


                    </div>

                    <div id="flipbook-background" class="bgc-gallery-right"
                        style="flex-basis: 80%; display: flex; align-items: center; justify-content: center; border-radius: 8px; background-size: cover; background-position: center center; transition: background-image 0.5s ease-in-out 0s;">
                        <div class="flipbook-container"
                            style="font-family: Georgia, serif; color: rgb(62, 39, 35); display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; width: 100%;">
                            <div class="flipbook-wrapper"
                                style="position: relative; height: 80%; aspect-ratio: 2 / 1; margin: auto;">

                                <div id="flipbook-book" class="flipbook-book"
                                    style="position: absolute; top: 0px; width: 50%; height: 100%; perspective: 2500px; transform-style: preserve-3d; transition: transform 0.8s ease-in-out 0s, right 0.8s ease-in-out 0s; right: 25%; transform: rotateY(-15deg) scale(0.9);">
                                </div>

                                <div class="flipbook-controls"
                                    style="position: absolute; top: 50%; width: calc(100% + 100px); left: -50px; transform: translateY(-50%); z-index: 1000; display: flex; justify-content: space-between; padding: 0px; pointer-events: none;">
                                    <button id="flipbook-prevBtn"
                                        style="pointer-events: all; background: rgba(255, 255, 255, 0.4); color: rgb(51, 51, 51); border: none; width: 35px; height: 35px; border-radius: 50%; font-size: 22px; line-height: 1; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0px; transition: background 0.2s ease 0s;"
                                        onmouseover="this.style.background='rgba(255, 255, 255, 0.7)'"
                                        onmouseout="this.style.background='rgba(255, 255, 255, 0.4)'">❮</button>
                                    <button id="flipbook-nextBtn"
                                        style="pointer-events: all; background: rgba(255, 255, 255, 0.4); color: rgb(51, 51, 51); border: none; width: 35px; height: 35px; border-radius: 50%; font-size: 22px; line-height: 1; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0px; transition: background 0.2s ease 0s;"
                                        onmouseover="this.style.background='rgba(255, 255, 255, 0.7)'"
                                        onmouseout="this.style.background='rgba(255, 255, 255, 0.4)'">❯</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </main>

            <div id="imageModal"
                style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.85); align-items: center; justify-content: center;">
                <span id="closeModal"
                    style="position: absolute; top: 20px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; transition: 0.3s; cursor: pointer;">&times;</span>
                <img id="modalImage"
                    style="margin: auto; display: block; max-width: 85%; max-height: 85%; object-fit: contain;">
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const prevBtn = document.querySelector("#flipbook-prevBtn");
                    const nextBtn = document.querySelector("#flipbook-nextBtn");
                    const selectorBtns = document.querySelectorAll(".bgc-gallery-selector-btn");
                    const backgroundContainer = document.getElementById('flipbook-background');
                    const book = document.getElementById('flipbook-book');

                    // START: Added variables for modal functionality
                    const modal = document.getElementById('imageModal');
                    const modalImg = document.getElementById('modalImage');
                    const closeModalSpan = document.getElementById('closeModal');
                    // END: Added variables for modal functionality

                    let papers = [];
                    let currentLocation = 0;
                    let maxLocation = 0;
                    let isBookOpen = false;

                    const flipbookContent = {
                        lookbook: [
                            { front: { image: 'demo-assets/switcher/lookbook/headimg.png' }, back: { image: 'demo-assets/switcher/lookbook/1.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/2.png' }, back: { image: 'demo-assets/switcher/lookbook/3.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/4.png' }, back: { image: 'demo-assets/switcher/lookbook/5.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/6.png' }, back: { image: 'demo-assets/switcher/lookbook/7.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/8.png' }, back: { image: 'demo-assets/switcher/lookbook/9.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/10.png' }, back: { image: 'demo-assets/switcher/lookbook/11.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/12.png' }, back: { image: 'demo-assets/switcher/lookbook/13.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/14.png' }, back: { image: 'demo-assets/switcher/lookbook/15.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/16.png' }, back: { image: 'demo-assets/switcher/lookbook/17.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/18.png' }, back: { image: 'demo-assets/switcher/lookbook/19.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/20.png' }, back: { image: 'demo-assets/switcher/lookbook/21.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/22.png' }, back: { image: 'demo-assets/switcher/lookbook/23.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/24.png' }, back: { image: 'demo-assets/switcher/lookbook/25.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/26.png' }, back: { image: 'demo-assets/switcher/lookbook/27.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/28.png' }, back: { image: 'demo-assets/switcher/lookbook/29.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/30.png' }, back: { image: 'demo-assets/switcher/lookbook/31.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/32.png' }, back: { image: 'demo-assets/switcher/lookbook/33.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/34.png' }, back: { image: 'demo-assets/switcher/lookbook/35.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/36.png' }, back: { image: 'demo-assets/switcher/lookbook/37.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/38.png' }, back: { image: 'demo-assets/switcher/lookbook/39.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/40.png' }, back: { image: 'demo-assets/switcher/lookbook/41.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/42.png' }, back: { image: 'demo-assets/switcher/lookbook/43.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/44.png' }, back: { image: 'demo-assets/switcher/lookbook/45.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/46.png' }, back: { image: 'demo-assets/switcher/lookbook/47.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/48.png' }, back: { image: 'demo-assets/switcher/lookbook/49.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/50.png' }, back: { image: 'demo-assets/switcher/lookbook/51.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/52.png' }, back: { image: 'demo-assets/switcher/lookbook/53.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/54.png' }, back: { image: 'demo-assets/switcher/lookbook/55.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/56.png' }, back: { image: 'demo-assets/switcher/lookbook/57.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/58.png' }, back: { image: 'demo-assets/switcher/lookbook/59.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/60.png' }, back: { image: 'demo-assets/switcher/lookbook/61.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/62.png' }, back: { image: 'demo-assets/switcher/lookbook/63.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/64.png' }, back: { image: 'demo-assets/switcher/lookbook/65.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/66.png' }, back: { image: 'demo-assets/switcher/lookbook/67.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/68.png' }, back: { image: 'demo-assets/switcher/lookbook/69.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/70.png' }, back: { image: 'demo-assets/switcher/lookbook/71.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/72.png' }, back: { image: 'demo-assets/switcher/lookbook/73.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/74.png' }, back: { image: 'demo-assets/switcher/lookbook/75.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/76.png' }, back: { image: 'demo-assets/switcher/lookbook/77.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/78.png' }, back: { image: 'demo-assets/switcher/lookbook/79.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/80.png' }, back: { image: 'demo-assets/switcher/lookbook/81.png' } },
                            { front: { image: 'demo-assets/switcher/lookbook/82.png' }, back: { image: 'demo-assets/switcher/lookbook/83.png' } }
                        ],
                        museum: [
                            { front: { image: 'demo-assets/switcher/museum/headimg.jpg' }, back: { image: 'demo-assets/switcher/museum/indi/1.jpg' } },
                            { front: { image: 'demo-assets/switcher/museum/indi/2.jpg' }, back: { image: 'demo-assets/switcher/museum/indi/3.jpg' } },
                            { front: { image: 'demo-assets/switcher/museum/indi/4.jpg' }, back: { image: 'demo-assets/switcher/museum/indi/5.jpg' } },
                            { front: { image: 'demo-assets/switcher/museum/indi/6.jpg' }, back: { image: 'demo-assets/switcher/museum/indi/7.jpg' } },
                            { front: { image: 'demo-assets/switcher/museum/indi/8.jpg' }, back: { image: 'demo-assets/switcher/museum/indi/9.jpg' } },
                            { front: { image: 'demo-assets/switcher/museum/indi/10.jpg' }, back: { image: 'demo-assets/switcher/museum/indi/end.jpg' } },
                            // TO ADD MORE, JUST COPY THE LINE ABOVE AND CHANGE THE IMAGE PATHS
                            // { front: { image: 'path/to/front11.jpg' }, back: { image: 'path/to/back12.jpg' } },
                        ]
                    };

                    const backgroundImages = {
                        lookbook: 'url("demo-assets/switcher/lookbook/fashion-bg.jpeg")',
                        museum: 'url("demo-assets/switcher/museum/bgg2.jpeg")'
                    };

                    function openBook() {
                        if (isBookOpen || papers.length === 0) return;
                        book.style.right = '0px';
                        book.style.transform = 'rotateY(0deg) scale(1)';
                        isBookOpen = true;
                    }

                    function goNextPage() {
                        if (!isBookOpen) {
                            openBook();
                            return;
                        }
                        if (currentLocation < maxLocation) {
                            papers[currentLocation].style.transform = 'rotateY(-180deg)';
                            papers[currentLocation].style.zIndex = currentLocation + 2;
                            currentLocation++;
                        }
                    }

                    function goPrevPage() {
                        if (!isBookOpen) return;
                        if (currentLocation > 0) {
                            currentLocation--;
                            papers[currentLocation].style.transform = 'rotateY(0deg)';
                            papers[currentLocation].style.zIndex = maxLocation - currentLocation + 1;
                        }
                    }

                    function updateFlipbook(setName) {
                        selectorBtns.forEach(btn => {
                            btn.style.borderColor = 'transparent';
                            btn.style.boxShadow = 'none';
                        });
                        const activeBtn = document.querySelector(`[data-set=${setName}]`);
                        activeBtn.style.borderColor = '#FF9A1E';
                        activeBtn.style.boxShadow = '0 0 10px rgba(255, 154, 30, 0.5)';

                        backgroundContainer.style.backgroundImage = backgroundImages[setName];

                        const content = flipbookContent[setName];
                        maxLocation = content.length;
                        book.innerHTML = '';

                        let pagesHTML = '';
                        content.forEach((pageData, index) => {
                            const zIndex = content.length - index;
                            pagesHTML += `
                        <div id="flipbook-p${index + 1}" class="flipbook-paper" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; transform-origin: left center 0px; transition: transform 1s ease-in-out 0s; transform-style: preserve-3d; cursor: pointer; z-index: ${zIndex};">
                            <div class="flipbook-front" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(253, 246, 227); padding: 0px; backface-visibility: hidden; border: 1px solid rgb(201, 184, 155); overflow: hidden; z-index: 1;">
                                <div class="flipbook-front-content" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                                    <img src="${pageData.front.image}" alt="Page ${index * 2 + 1}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="flipbook-back" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(253, 246, 227); padding: 0px; backface-visibility: hidden; border: 1px solid rgb(201, 184, 155); overflow: hidden; transform: rotateY(180deg); z-index: 0;">
                                <div class="flipbook-back-content" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                                    <img src="${pageData.back.image}" alt="Page ${index * 2 + 2}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        `;
                        });
                        book.innerHTML = pagesHTML;
                        papers = book.querySelectorAll('.flipbook-paper');

                        if (papers.length > 0) {
                            papers[0].addEventListener('click', () => {
                                if (!isBookOpen) openBook();
                            });
                        }

                        currentLocation = 0;
                        book.style.right = '25%';
                        book.style.transform = 'rotateY(-15deg) scale(0.9)';
                        isBookOpen = false;
                    }

                    // Main event listeners
                    prevBtn.addEventListener("click", goPrevPage);
                    nextBtn.addEventListener("click", goNextPage);

                    selectorBtns.forEach(btn => {
                        btn.addEventListener('click', () => {
                            const setName = btn.dataset.set;
                            updateFlipbook(setName);
                        });
                    });

                    // START: Added event listeners for modal
                    // Use event delegation to listen for clicks on images inside the book
                    book.addEventListener('click', (e) => {
                        // Check if the clicked element is an image
                        if (e.target && e.target.tagName === 'IMG') {
                            modal.style.display = 'flex';
                            modalImg.src = e.target.src;
                        }
                    });

                    // Function to close the modal
                    function closeModal() {
                        modal.style.display = "none";
                    }

                    // Close when clicking the 'x'
                    closeModalSpan.onclick = closeModal;

                    // Close when clicking the background overlay
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) {
                            closeModal();
                        }
                    });
                    // END: Added event listeners for modal

                    // Initialize with the 'museum' flipbook
                    updateFlipbook('museum');
                });
            </script>

        </section>
        <!-- Fashion Museum  -->

        <!--Testimonial-->
        <div style="background-image: url(mobile-assets/index/s2-bg-img-1.webp);"
            class="pt-3 elementor-element elementor-element-41f1d73 elementor-widget elementor-widget-go-s-heading"
            data-id="41f1d73" data-element_type="widget" data-widget_type="go-s-heading.default">

            <div class="elementor-widget-container" style="padding-left: 50px;">
                <div class="prthalign text-center">

                    <h2 class="headd1 text-center mb-4"
                        style="color:#e68900; font-weight: 700; margin:0; letter-spacing: 0px; font-size: 45px;">
                        They Speak <span style="color: #27467A; font-weight: 700; margin:0; font-size: 45px;">About
                            Us</span>
                    </h2>

                </div>
            </div>

            <div class="hover01 column row" style="padding-left: 1px;">
                <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important; ">
                    <figure> <a href=""><img style="border: 2px solid #fff;"
                                src="mobile-assets/index/alumni-student.png" /></a></figure>
                </div>

                <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
                    <figure><a href=""><img style="border: 2px solid #fff;"
                                src="mobile-assets/index/recruiters.png" /></a></figure>

                </div>
                <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
                    <figure><a href=""><img style="border: 2px solid #fff;"
                                src="mobile-assets/index/dignitaries.png" /></a></figure>

                </div>
            </div>

        </div>
        <!-- testimonial end -->

    </div>
@endsection
