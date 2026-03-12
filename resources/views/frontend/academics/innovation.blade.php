@extends('frontend.master')
@section('title', 'Innovations : The Assam Royal Global University')
@section('meta_description',
    'Ministry of Education (MoE), Govt. of India established Institution’s Innovation Council
    in the year 2018. Different educational institutions in the country are part of this initiative.')
@section('meta_keywords', 'Innovations')
@section('content')
    <div
        style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover; background-position: center;">


        <div class="mobile">
            @include('frontend/components/mobileheader')

            <section style="background-color: #fff8f0; padding: 130px 10px 20px 10px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <h2 class="headd3 text-center" style="color: #264273; font-weight: 700;">INSTITUTION’S INNOVATION
                                <span style="color: #FF9A1E; font-weight: 500;">COUNCIL (IIC-RGU)</span>
                            </h2>

                            <div class="txaa-slide-down-1">
                                <div style="border: 2px solid #27467A; height: 320px; width: 100%;"
                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/innovation-cell/headimg1.jpg"
                                        alt="">
                                </div>
                            </div>

                            <p class="para1 pt-3" style="color: #264273; text-align: justify;">
                                Ministry of Education (MoE), Govt. of India established Institution’s Innovation Council in
                                the year
                                2018. Different educational institutions in the country are part of this initiative. The
                                motive of this
                                program is to systematically foster the culture of innovation amongst all Higher Education
                                Institutions
                                (HEIs). The Assam Royal Global University becomes a part of this initiative in the year 2019
                                and
                                established the IIC-RGU. The IIC-RGU has achieved 3 Star rating out of 4 Stars in the year
                                2021 result
                                published by MoE, AICTE. The primary mandate of IIC-RGU is to encourage, inspire and nurture
                                young
                                students by supporting them to work with new ideas and transform them. The Royal Innovation
                                Incubator
                                was established in the year 2021 under IIC-RGU. The Managing Director of NRL inaugurated the
                                Royal
                                Innovation Incubator. The focus of the incubator is to create an ecosystem of innovation and
                                entrepreneurship development and create an awareness of IPR activity.
                            </p>

                        </div>
                    </div>



                </div>


            </section>

        </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
            <section
                style="background-image: url(mobile-assets/hostel-life/bgg.svg); background-size: cover; padding: 50px 0px;">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                <div style="border: 2px solid #27467A;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                                    <img class="rounded" decoding="async" src="mobile-assets/innovation-cell/headimg1.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <h2 class="headd1" style="color: #264273; font-weight: 700;">INSTITUTION’S INNOVATION <span
                                    style="color: #FF9A1E; font-weight: 500;">COUNCIL (IIC-RGU)</span></h2>
                            <p class="mobile-para1" style="color: #264273; font-size: 17px; text-align: justify;">
                                Ministry of Education (MoE), Govt. of India established Institution’s Innovation Council in
                                the year
                                2018. Different educational institutions in the country are part of this initiative. The
                                motive of this
                                program is to systematically foster the culture of innovation amongst all Higher Education
                                Institutions
                                (HEIs). The Assam Royal Global University becomes a part of this initiative in the year 2019
                                and
                                established the IIC-RGU. The IIC-RGU has achieved 3 Star rating out of 4 Stars in the year
                                2021 result
                                published by MoE, AICTE. The primary mandate of IIC-RGU is to encourage, inspire and nurture
                                young
                                students by supporting them to work with new ideas and transform them. The Royal Innovation
                                Incubator
                                was established in the year 2021 under IIC-RGU. The Managing Director of NRL inaugurated the
                                Royal
                                Innovation Incubator. The focus of the incubator is to create an ecosystem of innovation and
                                entrepreneurship development and create an awareness of IPR activity.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--head image Section-->


        </div>


        <style>
            /* Basic Page Styling */
            .section-f {
                padding: 2rem 0;
            }

            /* Individual Card Styling */
            .card {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 0.7rem;
                text-align: left;
                border: none;
                width: 100%;
                height: 100%;

                /* Flexbox for vertical alignment */
                display: flex;
                flex-direction: column;

                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            /* Hover effect for the card */
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }

            /* Image container */
            .card-image {
                width: 100%;

                padding-top: 56.25%;
                position: relative;
                border-radius: 5%;
                overflow: hidden;
                margin: 0 auto 1.0rem;
                border: 2px solid #f0f2f5;
            }

            .card-image img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Name/Heading Styling */
            .card-name {
                margin: 0 0 0.5rem 0;
                font-size: 1.5rem;
                font-weight: 600;
                color: #333;
                line-height: 1.2;
                color: #24477f;
            }

            /* Designation/Paragraph Styling */
            .card-designation {
                margin: 0;
                font-size: 1.2rem;
                font-weight: 400;
                color: #666;
                line-height: 1.4;
            }

            /* New Styling for the Profile Link */
            .profile-link {
                margin-top: auto;
                /* This is the magic property! */
                padding-top: 0.5rem;
                font-size: 1.1rem;
                font-weight: 800;
                text-decoration: none;
                color: #FF9A1E;
            }

            .profile-link:hover {
                text-decoration: underline;
            }
        </style>

        <div class="section-f">

            <div class="container">

                <h2 class="mobile-headd1 text-center m-3" style="color: #24477f; font-weight: 700; font-size: 2rem;">
                    Glimpse of <span style="color: #FF9A1E; font-weight: 700;">Innovation</span>
                </h2>

                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/innovation-cell/1.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name" style="font-weight: 600;">3 - Wheeler Electric operated <br><span
                                    style="color: #FF9A1E;">food cart</span></h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/innovation-cell/2.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name" style="font-weight: 600;">Banana Leaf <br><span
                                    style="color: #FF9A1E;">Cutter</span></h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/innovation-cell/3.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name" style="font-weight: 600;">4 - Wheeler Electric operated <br><span
                                    style="color: #FF9A1E;">car</span></h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/innovation-cell/4.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name" style="font-weight: 600;">Bio Gas <br><span
                                    style="color: #FF9A1E;">plant</span>
                            </h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/innovation-cell/5.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name" style="font-weight: 600;">Robo Chef <br><span
                                    style="color: #FF9A1E;">V1</span>
                            </h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="mobile-assets/innovation-cell/6.png" alt="Profile image ">
                            </div>
                            <h3 class="card-name" style="font-weight: 600;">3D <br><span
                                    style="color: #FF9A1E;">Printer</span>
                            </h3>

                        </div>
                    </div>



                </div>

                <div>
                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                        Strategy for Promoting Entrepreneurship and Innovation
                    </h2>

                    <p class="mobile-para1 fw-bold" style="color: #243B95;">
                        Date: 09 February 2026
                    </p>

                    <div class="container mt-2">

                        <section style="background-color: #fff4e3; padding-bottom: 30px;">

                            <div style="margin-top: 10px;" class="event-2-endless-scroll-container">

                                <div class="event-2-scroll-track-wrapper" style="padding-top: 0px;">

                                    <div class="event-2-scroll-content-images event-2-unique-set-alpha">

                                        <div class="event-2-slider-image-frame">
                                            <img src="mobile-assets/inno-iic/1.jpeg" alt="Image 1" style="height: 450px"
                                                class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                        </div>

                                        <div class="event-2-slider-image-frame">
                                            <img src="mobile-assets/inno-iic/2.jpeg" alt="Image 2" style="height: 450px"
                                                class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                        </div>

                                        <div class="event-2-slider-image-frame">
                                            <img src="mobile-assets/inno-iic/3.jpeg" alt="Image 2" style="height: 450px"
                                                class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                        </div>

                                        <div class="event-2-slider-image-frame">
                                            <img src="mobile-assets/inno-iic/4.jpeg" alt="Image 2" style="height: 450px"
                                                class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                        </div>

                                        <div class="event-2-slider-image-frame">
                                            <img src="mobile-assets/inno-iic/5.jpeg" alt="Image 2" style="height: 450px"
                                                class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                        </div>


                                    </div>

                                </div>

                            </div>

                            <div id="event-2-lightbox" class="event-2-lightbox" onclick="closeLightboxEvent2(event)">
                                <span class="event-2-close-btn">&times;</span>

                                <div class="event-2-lightbox-controls">
                                    <button id="event-2-zoom-in" title="Zoom In">+</button>
                                    <button id="event-2-zoom-out" title="Zoom Out">-</button>
                                </div>

                                <img class="event-2-lightbox-content" id="event-2-lightbox-img" src=""
                                    alt="">
                            </div>

                            <style>
                                /*
                            * 1. Setup the main container and animation logic (Identical to list version)
                            */
                                .event-2-endless-scroll-container {
                                    margin: auto;
                                    width: 97%;
                                    overflow: hidden;
                                    padding: 10px 0;
                                    border-bottom: 2px solid #EF991F;
                                }

                                .event-2-scroll-track-wrapper {
                                    display: flex;
                                    width: fit-content;
                                    animation: event-2-scroll-movement 60s linear infinite;
                                }

                                .event-2-scroll-track-wrapper:hover {
                                    animation-play-state: paused;
                                }

                                /*
                            * 2. Style the Image Frames and Images
                            */
                                .event-2-scroll-content-images {
                                    display: flex;
                                }

                                /* --- THIS IS THE MODIFIED RULE --- */
                                .event-2-slider-image-frame {
                                    width: 600px;
                                    /* <-- CHANGED from 150px */
                                    margin-right: 20px;
                                    flex-shrink: 0;
                                    overflow: hidden;
                                    border: 1px solid #d1d1d1;
                                    border-radius: 8px;
                                    /* <-- CHANGED from 50px */
                                    background-color: #fff;
                                }

                                /* --- END OF MODIFIED RULE --- */

                                .event-2-scroller-image {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    display: block;
                                    cursor: pointer;
                                    transition: opacity 0.3s;
                                }

                                /* Lightbox Styles */
                                .event-2-lightbox {
                                    display: none;
                                    position: fixed;
                                    z-index: 1000;
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    height: 100%;
                                    background-color: rgba(222, 222, 222, 0.942);
                                    overflow: hidden;
                                    /* Changed from auto to hidden to prevent scrollbars */
                                }

                                .event-2-lightbox-content {
                                    margin: auto;
                                    display: block;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%) scale(1);
                                    /* Initial state */
                                    max-width: 90%;
                                    max-height: 90%;
                                    width: auto;
                                    height: auto;
                                    object-fit: contain;
                                    animation-name: event-2-zoom;
                                    animation-duration: 0.6s;
                                    cursor: grab;
                                    /* NEW: Indicate it's grabbable */
                                    transition: transform 0.2s ease-out;
                                    /* NEW: Smooth transitions for zoom/pan */
                                }

                                .event-2-close-btn {
                                    position: absolute;
                                    top: 20px;
                                    right: 35px;
                                    color: #fff;
                                    font-size: 40px;
                                    font-weight: bold;
                                    transition: 0.3s;
                                    cursor: pointer;
                                    z-index: 1002;
                                    /* Ensure it's on top of controls */
                                }

                                .event-2-close-btn:hover,
                                .event-2-close-btn:focus {
                                    color: #bbb;
                                    text-decoration: none;
                                    cursor: pointer;
                                }

                                /* NEW: Styles for Zoom Controls */
                                .event-2-lightbox-controls {
                                    position: absolute;
                                    top: 25px;
                                    right: 90px;
                                    /* Position next to the close button */
                                    z-index: 1001;
                                    display: flex;
                                    gap: 10px;
                                }

                                .event-2-lightbox-controls button {
                                    background-color: rgba(30, 30, 30, 0.7);
                                    border: 1px solid #fff;
                                    color: #fff;
                                    font-size: 24px;
                                    font-weight: bold;
                                    width: 40px;
                                    height: 40px;
                                    cursor: pointer;
                                    border-radius: 5px;
                                    transition: background-color 0.3s;
                                    line-height: 1;
                                }

                                .event-2-lightbox-controls button:hover {
                                    background-color: rgba(0, 0, 0, 0.9);
                                }


                                @keyframes event-2-zoom {
                                    from {
                                        transform: translate(-50%, -50%) scale(0.1);
                                    }

                                    to {
                                        transform: translate(-50%, -50%) scale(1);
                                    }
                                }

                                /*
                            * 3. Define the Keyframes for the Movement
                            */
                                @keyframes event-2-scroll-movement {
                                    from {
                                        transform: translateX(-50%);
                                        /* Start at the negative half of the content to reveal the second set */
                                    }

                                    to {
                                        transform: translateX(0%);
                                        /* End at 0% to bring the first set back into view */
                                    }
                                }
                            </style>

                            <script>
                                document.addEventListener('DOMContentLoaded', () => {
                                    const setAlphaEvent2 = document.querySelector('.event-2-unique-set-alpha');
                                    const trackWrapperEvent2 = document.querySelector('.event-2-scroll-track-wrapper');

                                    if (setAlphaEvent2 && !document.querySelector('.event-2-unique-set-beta')) {
                                        const setBetaEvent2 = setAlphaEvent2.cloneNode(true);
                                        setBetaEvent2.classList.remove('event-2-unique-set-alpha');
                                        setBetaEvent2.classList.add('event-2-unique-set-beta');
                                        trackWrapperEvent2.appendChild(setBetaEvent2);
                                        console.log('Event 2 Image slider duplicated successfully for infinite loop.');
                                    }
                                });

                                // --- NEW/UPDATED: Lightbox and Zoom/Pan Logic (Renamed) ---

                                const lightboxEvent2 = document.getElementById('event-2-lightbox');
                                const lightboxImgEvent2 = document.getElementById('event-2-lightbox-img');
                                const zoomInBtnEvent2 = document.getElementById('event-2-zoom-in');
                                const zoomOutBtnEvent2 = document.getElementById('event-2-zoom-out');

                                // State variables
                                let scaleEvent2 = 1;
                                let isDraggingEvent2 = false;
                                let startEvent2 = {
                                    x: 0,
                                    y: 0
                                };
                                let panEvent2 = {
                                    x: 0,
                                    y: 0
                                };

                                // Function to apply the current transform to the image
                                function updateImageTransformEvent2() {
                                    // We use calc() to combine the initial centering (-50%) with the pixel-based panning
                                    lightboxImgEvent2.style.transform =
                                        `translate(calc(-50% + ${panEvent2.x}px), calc(-50% + ${panEvent2.y}px)) scale(${scaleEvent2})`;
                                }

                                function openLightboxEvent2(src) {
                                    // Reset state every time a new image is opened
                                    scaleEvent2 = 1;
                                    isDraggingEvent2 = false;
                                    panEvent2 = {
                                        x: 0,
                                        y: 0
                                    };
                                    updateImageTransformEvent2(); // Apply initial transform

                                    lightboxEvent2.style.display = 'block';
                                    lightboxImgEvent2.src = src;
                                }

                                function closeLightboxEvent2(event) {
                                    if (event.target === lightboxEvent2 || event.target.classList.contains('event-2-close-btn')) {
                                        lightboxEvent2.style.display = 'none';
                                    }
                                }

                                // --- Event Listeners for Zoom and Pan (Renamed) ---

                                zoomInBtnEvent2.addEventListener('click', (e) => {
                                    e.stopPropagation(); // Prevent closing lightbox when clicking button
                                    scaleEvent2 += 0.2;
                                    updateImageTransformEvent2();
                                });

                                zoomOutBtnEvent2.addEventListener('click', (e) => {
                                    e.stopPropagation(); // Prevent closing lightbox when clicking button
                                    if (scaleEvent2 > 1) {
                                        scaleEvent2 -= 0.2;
                                        if (scaleEvent2 < 1) {
                                            scaleEvent2 = 1;
                                        }
                                    }
                                    // If we zoom all the way out, reset the pan to center the image
                                    if (scaleEvent2 === 1) {
                                        panEvent2 = {
                                            x: 0,
                                            y: 0
                                        };
                                    }
                                    updateImageTransformEvent2();
                                });

                                lightboxImgEvent2.addEventListener('mousedown', (e) => {
                                    // Panning only works if the image is zoomed in
                                    if (scaleEvent2 > 1) {
                                        e.preventDefault();
                                        isDraggingEvent2 = true;
                                        // Record starting point relative to current pan position
                                        startEvent2 = {
                                            x: e.clientX - panEvent2.x,
                                            y: e.clientY - panEvent2.y
                                        };
                                        lightboxImgEvent2.style.cursor = 'grabbing';
                                    }
                                });

                                // Use 'window' for mousemove and mouseup to allow dragging even if the cursor leaves the image
                                window.addEventListener('mousemove', (e) => {
                                    if (isDraggingEvent2) {
                                        e.preventDefault();
                                        panEvent2 = {
                                            x: e.clientX - startEvent2.x,
                                            y: e.clientY - startEvent2.y
                                        };
                                        updateImageTransformEvent2();
                                    }
                                });

                                window.addEventListener('mouseup', (e) => {
                                    if (isDraggingEvent2) {
                                        isDraggingEvent2 = false;
                                        lightboxImgEvent2.style.cursor = 'grab';
                                    }
                                });
                            </script>

                        </section>

                        <p class="text-dark mobile-para1 mt-3" style="text-align: justify;">
                            As Dr Sriparna Bhuyan delivered an enriching lecture on “Strategy for Promoting
                            Entrepreneurship and Innovation“, the session was attended by Deans, HoDs and Faculty
                            members from various departments of RGU.
                        </p>


                    </div>
                </div>

                <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                    Strengthening Innovation & Entrepreneurship at Royal Global University!
                </h2>

                <p class="mobile-para1 fw-bold" style="color: #243B95;">
                    We are delighted to announce that The Assam Royal Global University (RGU) has signed two landmark
                    Memorandums
                    of Understanding (MoUs) on 18 November 2025 with:
                </p>

                <ol class="mobile-para1" style="color: #243B95;">
                    <li>IIM Calcutta Innovation Park (IIMCIP)</li>
                    <li>IIMCIP – Technology and Innovation Council (IIMCIP-TIC)</li>
                </ol>

                <div class="container mt-2">

                    <section style="background-color: #fff4e3; padding-bottom: 30px;">

                        <div style="margin-top: 10px;" class="event-2-endless-scroll-container">

                            <div class="event-2-scroll-track-wrapper" style="padding-top: 0px;">

                                <div class="event-2-scroll-content-images event-2-unique-set-alpha">

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/1.jpeg" alt="Image 1"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/2.jpeg" alt="Image 2"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/3.jpeg" alt="Image 2"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/4.jpeg" alt="Image 2"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>


                                </div>

                                <div class="event-2-scroll-content-images event-2-unique-set-beta">

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/1.jpeg" alt="Image 1"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/2.jpeg" alt="Image 2"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/3.jpeg" alt="Image 2"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>

                                    <div class="event-2-slider-image-frame">
                                        <img src="mobile-assets/innovation-cell/events/4.jpeg" alt="Image 2"
                                            class="event-2-scroller-image" onclick="openLightboxEvent2(this.src)">
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div id="event-2-lightbox" class="event-2-lightbox" onclick="closeLightboxEvent2(event)">
                            <span class="event-2-close-btn">&times;</span>

                            <div class="event-2-lightbox-controls">
                                <button id="event-2-zoom-in" title="Zoom In">+</button>
                                <button id="event-2-zoom-out" title="Zoom Out">-</button>
                            </div>

                            <img class="event-2-lightbox-content" id="event-2-lightbox-img" src=""
                                alt="">
                        </div>

                        <style>
                            /*
                            * 1. Setup the main container and animation logic (Identical to list version)
                            */
                            .event-2-endless-scroll-container {
                                margin: auto;
                                width: 97%;
                                overflow: hidden;
                                padding: 10px 0;
                                border-bottom: 2px solid #EF991F;
                            }

                            .event-2-scroll-track-wrapper {
                                display: flex;
                                width: fit-content;
                                animation: event-2-scroll-movement 60s linear infinite;
                            }

                            .event-2-scroll-track-wrapper:hover {
                                animation-play-state: paused;
                            }

                            /*
                            * 2. Style the Image Frames and Images
                            */
                            .event-2-scroll-content-images {
                                display: flex;
                            }

                            /* --- THIS IS THE MODIFIED RULE --- */
                            .event-2-slider-image-frame {
                                width: 600px;
                                /* <-- CHANGED from 150px */
                                margin-right: 20px;
                                flex-shrink: 0;
                                overflow: hidden;
                                border: 1px solid #d1d1d1;
                                border-radius: 8px;
                                /* <-- CHANGED from 50px */
                                background-color: #fff;
                            }

                            /* --- END OF MODIFIED RULE --- */

                            .event-2-scroller-image {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                display: block;
                                cursor: pointer;
                                transition: opacity 0.3s;
                            }

                            /* Lightbox Styles */
                            .event-2-lightbox {
                                display: none;
                                position: fixed;
                                z-index: 1000;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(222, 222, 222, 0.942);
                                overflow: hidden;
                                /* Changed from auto to hidden to prevent scrollbars */
                            }

                            .event-2-lightbox-content {
                                margin: auto;
                                display: block;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%) scale(1);
                                /* Initial state */
                                max-width: 90%;
                                max-height: 90%;
                                width: auto;
                                height: auto;
                                object-fit: contain;
                                animation-name: event-2-zoom;
                                animation-duration: 0.6s;
                                cursor: grab;
                                /* NEW: Indicate it's grabbable */
                                transition: transform 0.2s ease-out;
                                /* NEW: Smooth transitions for zoom/pan */
                            }

                            .event-2-close-btn {
                                position: absolute;
                                top: 20px;
                                right: 35px;
                                color: #fff;
                                font-size: 40px;
                                font-weight: bold;
                                transition: 0.3s;
                                cursor: pointer;
                                z-index: 1002;
                                /* Ensure it's on top of controls */
                            }

                            .event-2-close-btn:hover,
                            .event-2-close-btn:focus {
                                color: #bbb;
                                text-decoration: none;
                                cursor: pointer;
                            }

                            /* NEW: Styles for Zoom Controls */
                            .event-2-lightbox-controls {
                                position: absolute;
                                top: 25px;
                                right: 90px;
                                /* Position next to the close button */
                                z-index: 1001;
                                display: flex;
                                gap: 10px;
                            }

                            .event-2-lightbox-controls button {
                                background-color: rgba(30, 30, 30, 0.7);
                                border: 1px solid #fff;
                                color: #fff;
                                font-size: 24px;
                                font-weight: bold;
                                width: 40px;
                                height: 40px;
                                cursor: pointer;
                                border-radius: 5px;
                                transition: background-color 0.3s;
                                line-height: 1;
                            }

                            .event-2-lightbox-controls button:hover {
                                background-color: rgba(0, 0, 0, 0.9);
                            }


                            @keyframes event-2-zoom {
                                from {
                                    transform: translate(-50%, -50%) scale(0.1);
                                }

                                to {
                                    transform: translate(-50%, -50%) scale(1);
                                }
                            }

                            /*
                            * 3. Define the Keyframes for the Movement
                            */
                            @keyframes event-2-scroll-movement {
                                from {
                                    transform: translateX(-50%);
                                    /* Start at the negative half of the content to reveal the second set */
                                }

                                to {
                                    transform: translateX(0%);
                                    /* End at 0% to bring the first set back into view */
                                }
                            }
                        </style>

                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const setAlphaEvent2 = document.querySelector('.event-2-unique-set-alpha');
                                const trackWrapperEvent2 = document.querySelector('.event-2-scroll-track-wrapper');

                                if (setAlphaEvent2 && !document.querySelector('.event-2-unique-set-beta')) {
                                    const setBetaEvent2 = setAlphaEvent2.cloneNode(true);
                                    setBetaEvent2.classList.remove('event-2-unique-set-alpha');
                                    setBetaEvent2.classList.add('event-2-unique-set-beta');
                                    trackWrapperEvent2.appendChild(setBetaEvent2);
                                    console.log('Event 2 Image slider duplicated successfully for infinite loop.');
                                }
                            });

                            // --- NEW/UPDATED: Lightbox and Zoom/Pan Logic (Renamed) ---

                            const lightboxEvent2 = document.getElementById('event-2-lightbox');
                            const lightboxImgEvent2 = document.getElementById('event-2-lightbox-img');
                            const zoomInBtnEvent2 = document.getElementById('event-2-zoom-in');
                            const zoomOutBtnEvent2 = document.getElementById('event-2-zoom-out');

                            // State variables
                            let scaleEvent2 = 1;
                            let isDraggingEvent2 = false;
                            let startEvent2 = {
                                x: 0,
                                y: 0
                            };
                            let panEvent2 = {
                                x: 0,
                                y: 0
                            };

                            // Function to apply the current transform to the image
                            function updateImageTransformEvent2() {
                                // We use calc() to combine the initial centering (-50%) with the pixel-based panning
                                lightboxImgEvent2.style.transform =
                                    `translate(calc(-50% + ${panEvent2.x}px), calc(-50% + ${panEvent2.y}px)) scale(${scaleEvent2})`;
                            }

                            function openLightboxEvent2(src) {
                                // Reset state every time a new image is opened
                                scaleEvent2 = 1;
                                isDraggingEvent2 = false;
                                panEvent2 = {
                                    x: 0,
                                    y: 0
                                };
                                updateImageTransformEvent2(); // Apply initial transform

                                lightboxEvent2.style.display = 'block';
                                lightboxImgEvent2.src = src;
                            }

                            function closeLightboxEvent2(event) {
                                if (event.target === lightboxEvent2 || event.target.classList.contains('event-2-close-btn')) {
                                    lightboxEvent2.style.display = 'none';
                                }
                            }

                            // --- Event Listeners for Zoom and Pan (Renamed) ---

                            zoomInBtnEvent2.addEventListener('click', (e) => {
                                e.stopPropagation(); // Prevent closing lightbox when clicking button
                                scaleEvent2 += 0.2;
                                updateImageTransformEvent2();
                            });

                            zoomOutBtnEvent2.addEventListener('click', (e) => {
                                e.stopPropagation(); // Prevent closing lightbox when clicking button
                                if (scaleEvent2 > 1) {
                                    scaleEvent2 -= 0.2;
                                    if (scaleEvent2 < 1) {
                                        scaleEvent2 = 1;
                                    }
                                }
                                // If we zoom all the way out, reset the pan to center the image
                                if (scaleEvent2 === 1) {
                                    panEvent2 = {
                                        x: 0,
                                        y: 0
                                    };
                                }
                                updateImageTransformEvent2();
                            });

                            lightboxImgEvent2.addEventListener('mousedown', (e) => {
                                // Panning only works if the image is zoomed in
                                if (scaleEvent2 > 1) {
                                    e.preventDefault();
                                    isDraggingEvent2 = true;
                                    // Record starting point relative to current pan position
                                    startEvent2 = {
                                        x: e.clientX - panEvent2.x,
                                        y: e.clientY - panEvent2.y
                                    };
                                    lightboxImgEvent2.style.cursor = 'grabbing';
                                }
                            });

                            // Use 'window' for mousemove and mouseup to allow dragging even if the cursor leaves the image
                            window.addEventListener('mousemove', (e) => {
                                if (isDraggingEvent2) {
                                    e.preventDefault();
                                    panEvent2 = {
                                        x: e.clientX - startEvent2.x,
                                        y: e.clientY - startEvent2.y
                                    };
                                    updateImageTransformEvent2();
                                }
                            });

                            window.addEventListener('mouseup', (e) => {
                                if (isDraggingEvent2) {
                                    isDraggingEvent2 = false;
                                    lightboxImgEvent2.style.cursor = 'grab';
                                }
                            });
                        </script>

                    </section>

                    <p class="text-dark mobile-para1 mt-3" style="text-align: justify;">
                        The MoU signings were conducted in the gracious presence of Registrar (Admin), Prof. (Dr.) Diganta
                        Munshi,
                        and were
                        guided and supported by our Hon’ble Vice Chancellor, Prof. Alak K. Buragohain. These collaborations
                        mark a
                        major step toward creating a vibrant innovation and startup ecosystem within our university.
                    </p>

                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 20px;">
                        MoU with IIMCIP
                    </h2>

                    <p class="mobile-headd3 fw-bold" style="color: #243B95;">
                        Under this partnership, RGU and IIMCIP will work together to:
                    </p>

                    <ol class="mobile-para1 text-dark">
                        <li>
                            Promote a culture of innovation and entrepreneurship among students
                        </li>

                        <li>
                            Nurture and launch student-led startups
                        </li>

                        <li>
                            Establish an Entrepreneurship Development Cell on campus
                        </li>
                    </ol>

                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                        MoU with IIMCIP-TIC
                    </h2>

                    <p class="mobile-headd3 fw-bold" style="color: #243B95;">
                        This collaboration focuses on empowering engineering students by:
                    </p>

                    <ol class="mobile-para1 text-dark">
                        <li>
                            Setting up and running a Build Club on campus
                        </li>

                        <li>
                            Enhancing product development skills
                        </li>

                        <li>
                            Strengthening hands-on innovation and early-stage prototyping culture
                        </li>
                    </ol>

                    <p class="text-dark mobile-para1 mt-3" style="text-align: justify;">
                        These partnerships reflect RGU’s commitment to fostering creativity, technology-led growth, and
                        entrepreneurial excellence among our students. Together, we are building the next generation of
                        innovators
                        and leaders!
                    </p>


                </div>


                <!-- Scopus Publication  -->
                <section style="background-color: #1a3258; padding-bottom: 40px;">
                    <div class="endless-scroll-container">

                        <h2
                            style="color: #ffff; font-weight: 600; font-size: 40px; padding-top: 25px; padding-bottom: 30px;">
                            Innovations
                            <span style="color: #EF991F; font-weight: 600; font-size: 40px;">at RGU</span>
                        </h2>

                        <div class="scroll-track-wrapper">
                            <div class="scroll-content-images unique-set-alpha">
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/1.jpg" alt="Image 1"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/2.jpg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/3.jpg" alt="Image 3"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/4.jpg" alt="Image 4"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/5.jpg" alt="Image 5"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/6.jpg" alt="Image 6"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/7.jpg" alt="Image 7"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/8.jpg" alt="Image 8"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/9.jpg" alt="Image 9"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/10.jpg" alt="Image 10"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                            </div>
                            <div class="scroll-content-images unique-set-beta">
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/1.jpg" alt="Image 1"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/2.jpg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/3.jpg" alt="Image 3"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/4.jpg" alt="Image 4"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/5.jpg" alt="Image 5"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/6.jpg" alt="Image 6"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/7.jpg" alt="Image 7"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/8.jpg" alt="Image 8"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/9.jpg" alt="Image 9"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>
                                <div class="slider-image-frame">
                                    <img src="mobile-assets/innovation-cell/inventions/10.jpg" alt="Image 10"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
                        <span class="close-btn">&times;</span>

                        <div class="lightbox-controls">
                            <button id="zoom-in" title="Zoom In">+</button>
                            <button id="zoom-out" title="Zoom Out">-</button>
                        </div>

                        <img class="lightbox-content" id="lightbox-img" src="" alt="">
                    </div>

                    <style>
                        /*
                            * 1. Setup the main container and animation logic (Identical to list version)
                            */
                        .endless-scroll-container {
                            margin: auto;
                            width: 95%;
                            overflow: hidden;
                            padding: 10px 0;
                            border-bottom: 2px solid #EF991F;
                        }

                        .scroll-track-wrapper {
                            display: flex;
                            width: fit-content;
                            animation: scroll-movement 120s linear infinite;
                        }

                        .scroll-track-wrapper:hover {
                            animation-play-state: paused;
                        }

                        /*
                            * 2. Style the Image Frames and Images
                            */
                        .scroll-content-images {
                            display: flex;
                        }

                        .slider-image-frame {
                            width: 1000px;
                            height: 420px;
                            margin-right: 20px;
                            flex-shrink: 0;
                            overflow: hidden;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            background-color: #fff;
                        }

                        .scroller-image {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            display: block;
                            cursor: pointer;
                            transition: opacity 0.3s;
                        }

                        /* Lightbox Styles */
                        .lightbox {
                            display: none;
                            position: fixed;
                            z-index: 1000;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            background-color: rgba(0, 0, 0, 0.9);
                            overflow: hidden;
                            /* Changed from auto to hidden to prevent scrollbars */
                        }

                        .lightbox-content {
                            margin: auto;
                            display: block;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%) scale(1);
                            /* Initial state */
                            max-width: 90%;
                            max-height: 90%;
                            width: auto;
                            height: auto;
                            object-fit: contain;
                            animation-name: zoom;
                            animation-duration: 0.6s;
                            cursor: grab;
                            /* NEW: Indicate it's grabbable */
                            transition: transform 0.2s ease-out;
                            /* NEW: Smooth transitions for zoom/pan */
                        }

                        .close-btn {
                            position: absolute;
                            top: 20px;
                            right: 35px;
                            color: #fff;
                            font-size: 40px;
                            font-weight: bold;
                            transition: 0.3s;
                            cursor: pointer;
                            z-index: 1002;
                            /* Ensure it's on top of controls */
                        }

                        .close-btn:hover,
                        .close-btn:focus {
                            color: #bbb;
                            text-decoration: none;
                            cursor: pointer;
                        }

                        /* NEW: Styles for Zoom Controls */
                        .lightbox-controls {
                            position: absolute;
                            top: 25px;
                            right: 90px;
                            /* Position next to the close button */
                            z-index: 1001;
                            display: flex;
                            gap: 10px;
                        }

                        .lightbox-controls button {
                            background-color: rgba(30, 30, 30, 0.7);
                            border: 1px solid #fff;
                            color: #fff;
                            font-size: 24px;
                            font-weight: bold;
                            width: 40px;
                            height: 40px;
                            cursor: pointer;
                            border-radius: 5px;
                            transition: background-color 0.3s;
                            line-height: 1;
                        }

                        .lightbox-controls button:hover {
                            background-color: rgba(0, 0, 0, 0.9);
                        }


                        @keyframes zoom {
                            from {
                                transform: translate(-50%, -50%) scale(0.1);
                            }

                            to {
                                transform: translate(-50%, -50%) scale(1);
                            }
                        }

                        /*
                            * 3. Define the Keyframes for the Movement
                            */
                        @keyframes scroll-movement {
                            from {
                                transform: translateX(0%);
                            }

                            to {
                                transform: translateX(-50%);
                            }
                        }
                    </style>

                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const setAlpha = document.querySelector('.unique-set-alpha');
                            const trackWrapper = document.querySelector('.scroll-track-wrapper');

                            if (setAlpha && !document.querySelector('.unique-set-beta')) {
                                const setBeta = setAlpha.cloneNode(true);
                                setBeta.classList.remove('unique-set-alpha');
                                setBeta.classList.add('unique-set-beta');
                                trackWrapper.appendChild(setBeta);
                                console.log('Image slider duplicated successfully for infinite loop.');
                            }
                        });

                        // --- NEW/UPDATED: Lightbox and Zoom/Pan Logic ---

                        const lightbox = document.getElementById('lightbox');
                        const lightboxImg = document.getElementById('lightbox-img');
                        const zoomInBtn = document.getElementById('zoom-in');
                        const zoomOutBtn = document.getElementById('zoom-out');

                        // State variables
                        let scale = 1;
                        let isDragging = false;
                        let start = {
                            x: 0,
                            y: 0
                        };
                        let pan = {
                            x: 0,
                            y: 0
                        };

                        // Function to apply the current transform to the image
                        function updateImageTransform() {
                            // We use calc() to combine the initial centering (-50%) with the pixel-based panning
                            lightboxImg.style.transform = `translate(calc(-50% + ${pan.x}px), calc(-50% + ${pan.y}px)) scale(${scale})`;
                        }

                        function openLightbox(src) {
                            // Reset state every time a new image is opened
                            scale = 1;
                            isDragging = false;
                            pan = {
                                x: 0,
                                y: 0
                            };
                            updateImageTransform(); // Apply initial transform

                            lightbox.style.display = 'block';
                            lightboxImg.src = src;
                        }

                        function closeLightbox(event) {
                            if (event.target === lightbox || event.target.classList.contains('close-btn')) {
                                lightbox.style.display = 'none';
                            }
                        }

                        // --- Event Listeners for Zoom and Pan ---

                        zoomInBtn.addEventListener('click', (e) => {
                            e.stopPropagation(); // Prevent closing lightbox when clicking button
                            scale += 0.2;
                            updateImageTransform();
                        });

                        zoomOutBtn.addEventListener('click', (e) => {
                            e.stopPropagation(); // Prevent closing lightbox when clicking button
                            if (scale > 1) {
                                scale -= 0.2;
                                if (scale < 1) {
                                    scale = 1;
                                }
                            }
                            // If we zoom all the way out, reset the pan to center the image
                            if (scale === 1) {
                                pan = {
                                    x: 0,
                                    y: 0
                                };
                            }
                            updateImageTransform();
                        });

                        lightboxImg.addEventListener('mousedown', (e) => {
                            // Panning only works if the image is zoomed in
                            if (scale > 1) {
                                e.preventDefault();
                                isDragging = true;
                                // Record starting point relative to current pan position
                                start = {
                                    x: e.clientX - pan.x,
                                    y: e.clientY - pan.y
                                };
                                lightboxImg.style.cursor = 'grabbing';
                            }
                        });

                        // Use 'window' for mousemove and mouseup to allow dragging even if the cursor leaves the image
                        window.addEventListener('mousemove', (e) => {
                            if (isDragging) {
                                e.preventDefault();
                                pan = {
                                    x: e.clientX - start.x,
                                    y: e.clientY - start.y
                                };
                                updateImageTransform();
                            }
                        });

                        window.addEventListener('mouseup', (e) => {
                            if (isDragging) {
                                isDragging = false;
                                lightboxImg.style.cursor = 'grab';
                            }
                        });
                    </script>
                </section>

                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col-lg-6" style="display: flex; justify-content: center;">
                        <img style="width: 100%; border-radius: 2%;" src="mobile-assets/innovation-cell/img3.jpg"
                            alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mobile-headd1 mt-3" style="color: #24477f; font-weight: 700; font-size: 2rem;">
                            OBJE<span style="color: #FF9A1E; font-weight: 700;">CTIVES</span>
                        </h2>

                        <ol style="color: #24477f;" class="mobile-headd3">
                            <li>To conduct various innovation and entrepreneurship-related activities.</li>
                            <li>Identify and reward innovations and share success stories.</li>
                            <li>Organize periodic workshops/seminars/interactions with entrepreneurs, investors, and
                                professionals and
                                create a mentor pool for student innovators.</li>
                            <li>Network with peers and national entrepreneurship development organizations.</li>
                            <li>Organize Hackathons, idea competitions, and challenges with the involvement of industries.
                            </li>
                            <li>To generate awareness about Patents, Copyright, and IPRs within the HEI.</li>
                        </ol>

                    </div>
                </div>



                <section style="background-color: #fff">
                    <div class="mt-3">
                        <img src="mobile-assets/innovation-cell/strip.png" alt="">
                    </div>

                    <div class="container mt-5" style="padding-bottom: 30px">

                        <h2 class="mobile-headd1 text-center mb-3"
                            style="color: #24477f; font-weight: 700; font-size: 2rem;">
                            Innovations at a <span style="color: #FF9A1E; font-weight: 700;">Glance</span>
                        </h2>

                        <img style="padding: 40px 0px;" src="mobile-assets/innovation-cell/glance.svg" alt="">
                    </div>

                </section>

                <div style="padding: 40px 0px;" class="container">
                    <h2 class="mobile-headd1 text-center mb-3" style="color: #24477f; font-weight: 700; font-size: 2rem;">
                        Institutional Patent<span style="color: #FF9A1E; font-weight: 700;"> Published</span>
                    </h2>

                    <div class="row mt-3" style="display: flex; justify-content: center; align-items: center;">
                        <div class="col-lg-6" style="display: flex; justify-content: center;">
                            <img style="width: 80%; border-radius: 2%;" src="mobile-assets/innovation-cell/img2.jpg"
                                alt="">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="mobile-para1 mt-3" style="color: #24477f; font-weight: 700; font-size: 20px;">
                                The criteria and job selection process adopted for selection by most companies is as
                                follows:
                            </h2>

                            <ol style="color: #24477f;" class="mobile-para1">
                                <li class="mt-2">Marker Pen made of Biodegradable Materials application no. 202231045258,
                                    Innovators Dr.
                                    Hirak Ranjan
                                    Das and Dr. Sankar Barma.</li>

                                <li class="mt-3">IA Portable Device to Cut Soft Sheets in Circular Shape with Adjustable
                                    Radius
                                    application no.
                                    202231021448. Innovators Dr. Sankar Barma, Dr. Hirak Ranjan Das Mr. Sasanka Boruah and
                                    Mr.
                                    Nirakar Nath.
                                </li>

                            </ol>

                        </div>
                    </div>

                </div>

                <section style="background-color: #fff;">
                    <div class="container" style="padding: 40px 0px;">

                        <h2 class="mobile-headd1 text-center mb-3"
                            style="color: #24477f; font-weight: 700; font-size: 2rem;">
                            Achieve<span style="color: #FF9A1E; font-weight: 700;">ments</span>
                        </h2>

                        <div class="row justify-content-center mt-3">

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="mobile-assets/innovation-cell/achieve1.png" alt="Profile image ">
                                    </div>
                                    <h3 class="card-name mobile-para1"
                                        style="font-weight: 500; font-size: 20px; text-align: justify;">
                                        Received 3 star rating in the year 2020 - 2021 MoE/AICTE
                                    </h3>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="mobile-assets/innovation-cell/achieve2.png" alt="Profile image ">
                                    </div>
                                    <h3 class="card-name mobile-para1"
                                        style="font-weight: 500; font-size: 20px; text-align: justify;">
                                        Dr. Hirak Ranjan Das was awarded as Best Mentor award for innovation at Green
                                        Innovation
                                        Ecosystem
                                        organized by NERAMAC
                                    </h3>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="mobile-assets/innovation-cell/achieve3.png" alt="Profile image ">
                                    </div>
                                    <h3 class="card-name mobile-para1"
                                        style="font-weight: 500; font-size: 20px; text-align: justify;">
                                        Students have demonstrated the concept of an electric car during the exhibition
                                        organized by Second
                                        Society and achieved 2nd Prize followed by IITG
                                    </h3>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="mobile-assets/innovation-cell/achieve4.png" alt="Profile image ">
                                    </div>
                                    <h3 class="card-name mobile-para1"
                                        style="font-weight: 500; font-size: 20px; text-align: justify;">
                                        Received recognition from Atal Ranking of Institute on Innovation Achievements by
                                        Ministry of
                                        Education's Innovation Cell, Govt. of India
                                    </h3>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="mobile-assets/innovation-cell/achieve5.png" alt="Profile image ">
                                    </div>
                                    <h3 class="card-name mobile-para1"
                                        style="font-weight: 500; font-size: 20px; text-align: justify;">
                                        Received the award for the first position among the Private Universities for
                                        innovation
                                        at the
                                        North-East Research Conclave (NERC) at IITG organized by IIT Guwahati, India,
                                        Science,
                                        Technology and
                                        Climate Change Dept. & Dept. of Education, Govt. of Assam.
                                    </h3>

                                </div>
                            </div>




                        </div>

                    </div>
                </section>


                <!-- Scopus Publication  -->

                <div class="container" style="padding: 30px 0px;">
                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f;">
                        Institutional Patent Published
                    </h2>

                    <p class="mobile-headd3 fw-bold" style="color: #27467A;">
                        The criteria and job selection process adopted for selection by most companies is as follows:
                    </p>

                    <p class="mobile-para1 fw-bold">
                    <ol class="mobile-para1" style="color: #27467A; line-height: 1.6;">
                        <li>
                            Marker Pen made of Biodegradable Materials, Application No. 202231045258.
                            Innovators: Dr. Hirak Ranjan Das and Dr. Sankar Barma.
                        </li>
                        <li>
                            A Portable Device to Cut Soft Sheets in Circular Shape with Adjustable Radius,
                            Application No. 202231021448.
                            Innovators: Dr. Sankar Barma, Dr. Hirak Ranjan Das, Mr. Sasanka Boruah, and Mr. Nirakar Nath.
                        </li>
                    </ol>

                    </p>

                    <div class="event-section">
                        <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                            Events carried out by IIC-RGU in 2024-2025
                        </h2>

                        <h2 class="mobile-headd1 fw-bold" style="color: #333; padding-top: 30px; font-size: 24px;">
                            Calendar Activities
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered shadow bg-white mobile-para1">
                                <thead style="background-color: #24477f; color: #fff;">
                                    <tr>
                                        <th style="width: 80px;">Sl. No.</th>
                                        <th>Event</th>
                                        <th style="width: 180px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Workshop on Entrepreneurship and Innovation as a Career Opportunity</td>
                                        <td>19/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>“My Story” Motivational Session by a Successful Start-up Founder</td>
                                        <td>22/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Celebration of National Entrepreneurship Day</td>
                                        <td>11/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Exposure and Field Visits for Problem Identification aligned with UN SDGs and
                                            Emerging
                                            Technologies
                                        </td>
                                        <td>28/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Idea Showcase: Demo Day / Exhibition / Poster Presentation of Ideas (Operation
                                            Theatre Technology)
                                        </td>
                                        <td>18/09/2024</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Intra-University Idea Competition among Students</td>
                                        <td>27/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>MIC Programmes and Schemes Awareness Session</td>
                                        <td>23/10/2024</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Motivational Session by a Successful Start-up Founder</td>
                                        <td>21/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Session on Basics of Intellectual Property Rights (IPR) and its Importance</td>
                                        <td>20/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Session on Problem Solving and Ideation Workshop</td>
                                        <td>26/11/2024</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Workshop on Innovative Design, Clay Modelling, and Market Fit Product
                                            Development</td>
                                        <td>12/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Celebration of National Science Day</td>
                                        <td>28/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Expert Talk on Process of Innovation Development and Technology Readiness Level
                                            (TRL)</td>
                                        <td>28/09/2025</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Exposure Visits to Technology Driven Business Summit</td>
                                        <td>01–02/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Innovation Meets Tradition: A Culinary Showcase</td>
                                        <td>04–06/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Intra-University Innovation Competition</td>
                                        <td>24/02/2024</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Outreach Program in Schools through Active Atal Tinkering Labs</td>
                                        <td>12/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Workshop on Design Thinking, Critical Thinking, and Innovation Design</td>
                                        <td>24/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Workshop on Effective Sales and Marketing Strategies for Entrepreneurs and
                                            Start-ups</td>
                                        <td>14/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Demo Day of Innovative Product Display and Selling</td>
                                        <td>20–21/03/2025</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Exposure Visit to Production Unit and Technology Transfer Centre</td>
                                        <td>09/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Intra-University Business Plan Competition</td>
                                        <td>29–30/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Planning for Innovation to Startup to Entrepreneurship</td>
                                        <td>16/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Unlock the World of Commodity and Derivatives: Raising Funds for Start-ups</td>
                                        <td>18/03/2025</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Workshop on Business Model Canvas (BMC)</td>
                                        <td>06/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Workshop on Protecting Intellectual Property Rights (IPRs)</td>
                                        <td>09/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>3-Day Expert Mentoring Workshop on Innovative Kinetic Sculpture Development and
                                            Commercialization
                                        </td>
                                        <td>15–17/07/2025</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Business Plan Competition Leading to Startup</td>
                                        <td>02/07/2025 – 06/08/2025</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Innovation and Entrepreneurship Outreach Program</td>
                                        <td>27/06/2025</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Mentoring Session on Minimum Viable Business</td>
                                        <td>03/07/2025</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Panel Discussion with Innovation and Startup Ecosystem Enablers</td>
                                        <td>02/07/2025</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Session with Business Accelerator</td>
                                        <td>17/06/2025</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="mobile-headd1 fw-bold" style="color: #333; padding-top: 30px; font-size: 24px;">
                            Celebration
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered shadow bg-white mobile-para1">
                                <thead style="background-color: #24477f; color: #fff;">
                                    <tr>
                                        <th style="width: 80px;">Sl. No.</th>
                                        <th>Event</th>
                                        <th style="width: 180px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>33</td>
                                        <td>World Creativity and Innovation Day</td>
                                        <td>21/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Celebration of National Education Day and Career Counseling Session</td>
                                        <td>11/11/2025</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>National Technology Day Celebration</td>
                                        <td>12/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Pre-Celebration of National Innovation Day followed by a One-Day National
                                            Workshop on Empowering
                                            Future Leaders on Internet Governance</td>
                                        <td>13/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Pre-Celebration of World Intellectual Property Day 2025</td>
                                        <td>24/04/2025</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <h2 class="mobile-headd1 fw-bold" style="color: #333; padding-top: 30px; font-size: 24px;">
                            MIC driven activities
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered shadow bg-white mobile-para1">
                                <thead style="background-color: #24477f; color: #fff;">
                                    <tr>
                                        <th style="width: 80px;">Sl. No.</th>
                                        <th>Event</th>
                                        <th style="width: 180px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- MIC Driven Activities -->

                                    <tr>
                                        <td>38</td>
                                        <td>MIC Driven Activity: Building YUKTI Innovation Repositories in IIC Institutions
                                            – Productizing
                                            Campus Ideas and Boosting Innovation Funding for Startup Opportunities</td>
                                        <td>19/05/2025</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>MIC Driven Activity: Patent to Product (Srujanta Se Samruddhi) organized by
                                            IIC-RGU</td>
                                        <td>26/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>MIC Driven Activity: Significance of IP Protection and Commercialization
                                            organized by IIC-RGU</td>
                                        <td>25/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>MIC Driven Activity – Mark the Spot: Trademarks Talk – Masterclass on Trademarks
                                            and Geographical
                                            Indications</td>
                                        <td>24/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>42</td>
                                        <td>MIC Driven Activity – Copy That! Copyrights Uncovered – Masterclass on
                                            Copyrights</td>
                                        <td>23/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>43</td>
                                        <td>MIC Driven Activity: Discover More with Design Registrations – Masterclass on
                                            Patents and Design
                                            Registration</td>
                                        <td>22/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td>Inauguration of IP UTSAV and Celebration of World Creativity and Innovation Day
                                        </td>
                                        <td>21/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>45</td>
                                        <td>MIC Driven Activity: Podcast Series on “Rashtra Pratham” and “Celebrating
                                            Failures” organized by
                                            IIC-RGU</td>
                                        <td>04/07/2025</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="mobile-headd1 fw-bold" style="color: #333; padding-top: 30px; font-size: 24px;">
                            Self-driven activities
                        </h2>

                        <div class="table-responsive">
                            <table class="table table-bordered shadow bg-white mobile-para1">
                                <thead style="background-color: #24477f; color: #fff;">
                                    <tr>
                                        <th style="width: 80px;">Sl. No.</th>
                                        <th>Event</th>
                                        <th style="width: 180px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>46</td>
                                        <td>2 Days Innovation, Design and Entrepreneurship (IDE) Bootcamp organized by the
                                            Ministry of
                                            Education
                                            (MoE) – DoSEL – AICTE – NCERT – PMSHRI</td>
                                        <td>11–12/09/2024</td>
                                    </tr>
                                    <tr>
                                        <td>47</td>
                                        <td>One Day Induction and Motivational Session for New Student Members</td>
                                        <td>30/09/2024</td>
                                    </tr>
                                    <tr>
                                        <td>48</td>
                                        <td>Innovation Competition in Bio-Allied Field “BITHON 2024”</td>
                                        <td>29/10/2024</td>
                                    </tr>
                                    <tr>
                                        <td>49</td>
                                        <td>Udyami Bazar 2.0</td>
                                        <td>10/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>50</td>
                                        <td>Hosting a Delegation from Zimbabwe for an Inspiring Day of Interaction and
                                            Exploration</td>
                                        <td>04/07/2025</td>
                                    </tr>
                                    <tr>
                                        <td>51</td>
                                        <td>IIC-RGU Participation in the Launch of Northeast Innovation Catalyst Program
                                            (NEICP) – Second
                                            Edition</td>
                                        <td>15/07/2025 – 01/08/2025</td>
                                    </tr>
                                    <tr>
                                        <td>52</td>
                                        <td>Hardware Training Program and Quiz Competition on Internet Safety and Protocols
                                            in collaboration
                                            with Catla Broadband Services</td>
                                        <td>23/07/2025</td>
                                    </tr>
                                    <tr>
                                        <td>53</td>
                                        <td>Workshop on AI and its Application in Business</td>
                                        <td>18/08/2025</td>
                                    </tr>
                                    <tr>
                                        <td>54</td>
                                        <td>Signing of Memorandum of Understanding (MoU) by Royal Innovation Incubator with
                                            a Budding Startup
                                        </td>
                                        <td>23/06/2025</td>
                                    </tr>
                                    <tr>
                                        <td>55</td>
                                        <td>From RGU to Tech Titan: Vishal More’s Inspiring Journey</td>
                                        <td>24/02/2025</td>
                                    </tr>
                                    <tr>
                                        <td>56</td>
                                        <td>Interactive Session on Conflict Resolution and Negotiation Skills</td>
                                        <td>08/04/2025</td>
                                    </tr>
                                    <tr>
                                        <td>57</td>
                                        <td>Donut Workshop at RGU</td>
                                        <td>26/03/2025</td>
                                    </tr>
                                    <tr>
                                        <td>58</td>
                                        <td>Celebrating International Day of Forests with Innovation</td>
                                        <td>21/03/2025</td>
                                    </tr>
                                    <tr>
                                        <td>59</td>
                                        <td>One-Day Seminar on Secure Software Development</td>
                                        <td>21/03/2025</td>
                                    </tr>
                                    <tr>
                                        <td>60</td>
                                        <td>Internal Hackathon 2024</td>
                                        <td>06/09/2024</td>
                                    </tr>
                                    <tr>
                                        <td>61</td>
                                        <td>Boot Camp 1.0-2025: Hands-on Session on Bioinformatics Tools and Mastering BLAST
                                        </td>
                                        <td>24–26/06/2025</td>
                                    </tr>
                                    <tr>
                                        <td>62</td>
                                        <td>Boot Camp 2.0-2025: Molecular, Cytogenetics and DNA Isolation Techniques</td>
                                        <td>27–29/06/2025</td>
                                    </tr>
                                    <tr>
                                        <td>63</td>
                                        <td>Boot Camp 3.0-2025: Biodiversity Monitoring and Advanced GIS</td>
                                        <td>30/06/2025 – 02/07/2025</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 20px;">
                        Activities of IIC-RGU for the AY 2023-24
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-bordered shadow bg-white mobile-para1">
                            <thead style="background-color: #24477f; color: #fff;">
                                <tr>
                                    <th style="width: 80px;">Sl. No.</th>
                                    <th>Event</th>
                                    <th style="width: 160px;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>IIC-RGU organised the Internal Hackathon 2023 at The Assam Royal Global University
                                    </td>
                                    <td>26/09/2023</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IIC-RGU celebrated Innovation Day</td>
                                    <td>16/10/2023</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Organised Viksit Bharat@2047 Utsav in Campus and watched the Inaugural Address by
                                        Hon’ble Prime
                                        Minister of India</td>
                                    <td>11/12/2023</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Organised Internal Ideathon-2023 in association with AIC SELCO</td>
                                    <td>24/11/2023</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Organised a Poster Presentation of Ideas and linked with Experts for Mentorship
                                        Support
                                    </td>
                                    <td>26/11/2023</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IIC-RGU successfully organised Smart India Hackathon Software Edition 2023,
                                        partially
                                        funded by MoE
                                        Innovation Cell, Govt. of India</td>
                                    <td>19/12/2023</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mentoring Event with Innovation Ambassadors and Experts for Mentorship Support</td>
                                    <td>21/12/2023</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Organised Institution’s Innovation Council - Regional Meet funded by MoE Innovation
                                        Cell, Govt. of
                                        India</td>
                                    <td>09/01/2024</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>IIC-RGU participated in the National Youth Day Celebration</td>
                                    <td>12/01/2024</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Conducted a Session on Achieving Problem-Solution & Product-Market Fit</td>
                                    <td>30/01/2024</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Organised an interactive session with Prof. Prabuddha Ganguli on IPRs and IP
                                        Management
                                    </td>
                                    <td>30/01/2024</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>IIC-RGU organised the MoU Signing with the startup company Sanam Designs Wallah
                                        Private
                                        Limited to
                                        incubate at the Royal Innovation Incubator (RII)</td>
                                    <td>20/02/2024</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Organised a Workshop on Entrepreneurship Skill, Attitude and Behaviour Development
                                        at
                                        RGU</td>
                                    <td>26/02/2024</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>IIC-RGU participated in the National Science Day 2024 Celebration</td>
                                    <td>28/02/2024</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>IIC-RGU students participated in Northeast Startup & Entrepreneurs Conclave 2024,
                                        Srimanta
                                        Sankaradeva Kalakshetra</td>
                                    <td>27/03/2024</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>A group of IIC-RGU student members — Mr. Nipu Das, Mr. Shiva Bhattacharjee, and Mr.
                                        Nileemoy Pathak
                                        — won the award for Best Pitch for Ideation Stage Startup among 15 selected teams
                                        out of
                                        70 teams in
                                        the Bootcamp for Aspiring Young Entrepreneurs of NER organised by IIM Shillong</td>
                                    <td>—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <style>
                        .iic-gallery-img {
                            width: 100%;
                            height: 250px;
                            /* uniform height */
                            object-fit: cover;
                            border-radius: 5px;
                        }
                    </style>

                    <div class="row g-4 iic-gallery-row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="mobile-assets/innovation-cell/gallery1/1.jpg" class="iic-gallery-img"
                                alt="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="mobile-assets/innovation-cell/gallery1/2.jpg" class="iic-gallery-img"
                                alt="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="mobile-assets/innovation-cell/gallery1/3.jpeg" class="iic-gallery-img"
                                alt="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <img src="mobile-assets/innovation-cell/gallery1/4.jpg" class="iic-gallery-img"
                                alt="">
                        </div>
                    </div>

                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                        IIC-RGU Activities during AY 2022-2023
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-bordered shadow bg-white mobile-para1">
                            <thead style="background-color: #24477f; color: #fff;">
                                <tr>
                                    <th style="width: 60px;">Sl. No.</th>
                                    <th>Event</th>
                                    <th style="width: 160px;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>The ICC-RGU hosted the Institution’s Innovation Council Regional Meet in association
                                        with MoE’s
                                        Innovation Cell & AICTE</td>
                                    <td>04/08/2022</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Successfully signed MoU with three startups (Globotask IT Consultancy Services Pvt.
                                        Ltd., Jolkuwori
                                        LLP, Pasoli Agro Industry Pvt. Ltd.)</td>
                                    <td>07/02/2023</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Orientation Session on IIC 5.0 & Features</td>
                                    <td>07/02/2023</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Interactive Session on Empowering Business with MarTech & CRO</td>
                                    <td>09/02/2023</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Motivational Speech: Entrepreneurship and Startup</td>
                                    <td>22/02/2023</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IIC-RGU students participated in AEC Class 88 Foundation organised by Institution of
                                        Engineers
                                        (India), Panbazar at Assam Engineering College</td>
                                    <td>25/02/2023</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>IIC-RGU students attended Technical Awareness Program organised by NECTAR</td>
                                    <td>25/02/2023</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Workshop on Entrepreneurship Skill, Attitude, and Behaviour Development</td>
                                    <td>26/02/2023</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Session on Achieving Problem-Solution Fit & Product-Market Fit</td>
                                    <td>08/03/2023</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Dr. Hirak R. Das invited by Tezpur University to deliver a lecture on Incubation &
                                        Entrepreneurship
                                        Awareness Program</td>
                                    <td>14/03/2023</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>IIC-RGU students displayed Student Research Projects at MSME Technology Centre
                                        Conclave
                                        2023,
                                        Kahilipara</td>
                                    <td>31/03/2023</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>IIC-RGU student members visited the Northeast Food Festival 2023, Maniram Dewan
                                        Trade
                                        Centre,
                                        Guwahati</td>
                                    <td>07/02/2023</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>IIC-RGU participated in the ‘Power Businesswomen Meet’ at Assam Start-Up – The Nest
                                    </td>
                                    <td>14/04/2023</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>YUKTI Innovation Repository and Innovation Challenge Discussion</td>
                                    <td>20/04/2023</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>IIC-RGU students participated in EDII Hackathon Final Round at EDII Ahmedabad</td>
                                    <td>28/04/2023</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Workshop on Prototype Design and Development</td>
                                    <td>03/05/2023</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Workshop on Product Designing and Prototyping (Go Kart)</td>
                                    <td>19/05/2023</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Demo Day – Cakeology7: A Campus-Based Interdisciplinary Enterprise</td>
                                    <td>02/06/2023</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Interactive session with Mr. Palash Bhowmik, Chief Manager (Technology), NSIC Ltd.
                                    </td>
                                    <td>08/06/2023</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Exposure trip to Patent Facilitation Centre, CPP-IPR, Sonapur</td>
                                    <td>09/06/2023</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Business Model Canvas (BMC) session</td>
                                    <td>20/06/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                        Activities of Annual Year 2021-22
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-bordered shadow bg-white mobile-para1">
                            <thead style="background-color: #24477f; color: #fff;">
                                <tr>
                                    <th style="width: 80px;">Sl. No.</th>
                                    <th>Event</th>
                                    <th style="width: 160px;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Organized Institution’s Innovation Council - Regional Meet funded by MoE Innovation
                                        Cell, Govt. of
                                        India</td>
                                    <td>04/08/2022</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Impact Lecture Series – I on Innovation and Startup funded by MoE Innovation Cell,
                                        Govt.
                                        of India
                                    </td>
                                    <td>08/07/2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Session on Creation of Innovative Business Ideas for female faculty members and
                                        students
                                        to boost
                                        Women’s Entrepreneurship initiatives</td>
                                    <td>01/07/2022</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Launch of miniature forms of Dhol, Khol, and Madol as key rings developed under
                                        IIC-RGU
                                        at Guwahati
                                        Press Club</td>
                                    <td>24/06/2022</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>IIC-RGU & Mechanical Engineering Dept. participated in North-East Research Conclave
                                        at
                                        IITG;
                                        achieved 1st position as private university for innovation</td>
                                    <td>20–22/06/2022</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Distribution of unique cutter developed at RGU workshop to NGOs, SHGs, and rural
                                        entrepreneurs by
                                        NERAMAC at Guwahati Press Club</td>
                                    <td>24/05/2022</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Electric car demonstrated during exhibition on National Technology Day; achieved 2nd
                                        prize</td>
                                    <td>11/05/2022</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Celebrated Intellectual Property Day</td>
                                    <td>26/04/2022</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Celebrated Earth Day</td>
                                    <td>22/04/2022</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Organized Northeast Startup Festival—one of a kind for North East India</td>
                                    <td>22/03/2022</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Organized “Journey at Y-Combinator” virtual panel discussion on innovative start-up
                                        endeavors</td>
                                    <td>24/02/2022</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Seminar on Design Thinking, Critical Thinking, and Innovation Design by Mentor
                                        Institute
                                    </td>
                                    <td>16/02/2022</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Session on Achieving Problem-Solution Fit & Product-Market Fit</td>
                                    <td>16/02/2022</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Session on “Forest Fringe School: A Platform for Cultural Foundation”</td>
                                    <td>04/01/2022</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Organized IDEATHON 2021 with the HEI</td>
                                    <td>19/11/2021</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Motivational Session: Building Entrepreneurship and Branding</td>
                                    <td>17/11/2021</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Motivational Session: Building Entrepreneurship Mindset</td>
                                    <td>16/11/2021</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Inauguration of Innovation and Incubation Cell – Royal Innovation Incubator</td>
                                    <td>08/11/2021</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Impact Lecture Series – II funded by MoE Innovation Cell, Govt. of India</td>
                                    <td>27/11/2021</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Motivational Speech by Successful Entrepreneur</td>
                                    <td>26/10/2021</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Impact Lecture Series – I funded by MoE Innovation Cell, Govt. of India</td>
                                    <td>04/10/2021</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Motivational Speech by Successful Entrepreneur</td>
                                    <td>05/08/2021</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Boot Camp in association with Agri-Food Business Incubation Centre (AFBIC) IIT
                                        Kharagpur
                                    </td>
                                    <td>22/08/2021</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Workshop on Business Model Canvas (BMC)</td>
                                    <td>31/03/2021</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Organized field trip to GVRT, a rice manufacturing organization</td>
                                    <td>24/03/2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="mobile-headd1 fw-bold" style="color: #24477f; padding-top: 30px;">
                        Members
                    </h2>

                    <div class="table-responsive">
                        <table class="table table-bordered shadow bg-white mobile-para1">
                            <thead style="background-color: #24477f; color: #fff;">
                                <tr>
                                    <th>#</th>
                                    <th>Name of Member</th>
                                    <th>Member Type</th>
                                    <th>Key Role / Position</th>
                                </tr>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>Prof. (Dr.) Alak Kumar Buragohain</td>
                                    <td>Admin</td>
                                    <td>President</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Prof. (Dr.) George A Paul</td>
                                    <td>Faculty</td>
                                    <td>Vice President</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Prof. (Dr.) Anupam Chatterjee</td>
                                    <td>Faculty</td>
                                    <td>Senior Faculty Member</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Dr. Sriparna Bhuyan Baruah</td>
                                    <td>Admin</td>
                                    <td>Director, Entrepreneurship IIC</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Dr. Sankar Barman</td>
                                    <td>Admin</td>
                                    <td>Coordinator & Innovation Activity</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Mr. Sasanka Boruah</td>
                                    <td>Admin</td>
                                    <td>Start-up Activity</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Mr. Bijoy Kalita</td>
                                    <td>Admin</td>
                                    <td>Social Media</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Prof. Pranati Das</td>
                                    <td>Faculty</td>
                                    <td>NIRF Coordinator</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Dr. Aruna Dev Roy</td>
                                    <td>Faculty</td>
                                    <td>ARIIA Coordinator</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Dr. Debajit Borah</td>
                                    <td>Faculty</td>
                                    <td>IPR Activity</td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>Dr. Bitopi Gogoi</td>
                                    <td>Faculty</td>
                                    <td>Internship Activity</td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>Ms. Banani Das Hazarika</td>
                                    <td>Faculty</td>
                                    <td>Members</td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>Mr. Mehedi Alom</td>
                                    <td>Admin</td>
                                    <td>Design Thinking</td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>Mr. Jawad Ahemad</td>
                                    <td>Admin</td>
                                    <td>Members</td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>Dr. Annesa Borah</td>
                                    <td>Faculty</td>
                                    <td>Members</td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>Dr. Susmita Nath</td>
                                    <td>Faculty</td>
                                    <td>Members</td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>Dr. Dharmeswar Barhoi</td>
                                    <td>Faculty</td>
                                    <td>Members</td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>Mr. Srawan Kr Goenka</td>
                                    <td>Faculty</td>
                                    <td>Convener</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>




                </div>



            </div>



        </div>
    @endsection
