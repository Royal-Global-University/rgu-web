@extends('frontend.master')
@section('content')
    <div
        style="background-image: url(mobile-assets/convocation/bg-web.png); background-size: contain; background-position: center;">


        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="width: 100%; padding-top: 120px;" src="mobile-assets/convocation/banner-pic-web-1.svg" alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img style="width: 100%;" src="mobile-assets/convocation/banner-pic-web-1.svg" alt="">
        </div>


        <div class="section-f">

            <div class="container-fluid" style="padding: 10px 80px;">

                <div class="row"
                    style="display: flex; justify-content: center; text-align: justify; align-items: center;">

                    <div class="col-lg-6">

                        <p style="color: #24477f;" class="mobile-para1">
                            The Assam Royal Global University (RGU) celebrated a major milestone in its journey of academic
                            excellence
                            as it hosted its 5th Convocation Ceremony on 31st October 2025. The prestigious event was
                            presided over by
                            Sri Lakshman Prasad Acharya, Hon’ble Governor of Assam and the Visitor of RGU, in the presence
                            of Dr. A.
                            K. Pansari, Chancellor, Sri AK Modi, Pro Chancellor; Prof. A. K. Buragohain, Vice Chancellor;
                            Dr.
                            Sudhanshu Trivedi, Member of Rajya Sabha; Shri Kamakhya Prasad Tasa, Member of Lok Sabha; Dr.
                            Ranoj Pegu,
                            Education Minister of Assam; Sri Bimal Bora, Minister of Industries and Commerce; along with a
                            distinguished gathering of eminent dignitaries.
                        </p>

                    </div>

                    <div class="col-lg-6">

                        <img class="pulsing-image" src="mobile-assets/convocation/head-img.jpeg" alt="">

                        <style>
                            .pulsing-image {
                                /* Your original styles */
                                border-radius: 10px;
                                border: 1px solid rgba(0, 0, 0, 0.05);

                                /* Base shadow:
           1. Your original inset shadow
           2. The new 'brown' outer pulse at its starting state
        */
                                box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2),
                                    0 0 5px rgba(119, 67, 25, 0.3);
                                /* <-- Color changed */

                                /* Animation */
                                animation: pulseShadow 2.5s ease-in-out infinite;
                            }


                            /* Animation definition */
                            @keyframes pulseShadow {
                                0% {
                                    /* State 1: Start */
                                    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2),
                                        0 0 5px rgba(119, 67, 25, 0.3);
                                    /* <-- Color changed */
                                }

                                50% {
                                    /* State 2: Pulse 'out' */
                                    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2),
                                        0 0 20px rgba(119, 67, 25, 0.7);
                                    /* <-- Color changed */
                                }

                                100% {
                                    /* State 3: Back to start */
                                    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2),
                                        0 0 5px rgba(119, 67, 25, 0.3);
                                    /* <-- Color changed */
                                }
                            }
                        </style>

                    </div>

                </div>
            </div>

            <div style="padding: 20px 55px 0px 55px;">
                <img style="border-bottom: 2px solid #6c3e1b;" src="mobile-assets/convocation/banner1-pic.svg"
                    alt="">

                <img src="mobile-assets/convocation/banner2-pic.svg" alt="">
            </div>

            <div style="padding: 0px 80px;">
                <h2 class="mobile-headd1 mt-4" style="font-size: 30px; color: #24477f;">Marking Milestone, <span
                        style="color: #EF991F;">Inspiring Future</span></h2>

                <p style="color: #24477f; text-align: justify;" class="mobile-para1">
                    A total of 1,967 students were awarded their degrees this year, including 1,093 undergraduates, 777
                    postgraduates and integrated course graduates, and 32
                    Ph.D. scholars. Academic excellence was celebrated with 56 Gold Medalists and 58 Silver Medalists
                    receiving
                    recognition for their achievements”, he stated. In addition, special honors were conferred, including 2
                    Chancellor’s Gold Medals and 5 awards for excellence in literary activities, cultural activities,
                    community
                    service, mentoring, and sports
                </p>

            </div>

            <div class="container-fluid" style="padding: 0px 60px;">
                <section style="background-color: #fff4e3; padding-bottom: 30px;">

                    <div style="margin-top: 10px;" class="endless-scroll-container">

                        <div class="scroll-track-wrapper" style="padding-top: 0px;">

                            <div class="scroll-content-images unique-set-alpha">

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/1.jpeg" alt="Image 1"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/2.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/3.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/4.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/5.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/6.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/7.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/8.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/9.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/10.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/11.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/12.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/13.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>


                            </div>

                            <div class="scroll-content-images unique-set-beta">

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/1.jpeg" alt="Image 1"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/2.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/3.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/4.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/5.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/6.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/7.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/8.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/9.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/10.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/11.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/12.jpeg" alt="Image 2"
                                        class="scroller-image" onclick="openLightbox(this.src)">
                                </div>

                                <div class="slider-image-frame">
                                    <img src="mobile-assets/convocation/glimpse/13.jpeg" alt="Image 2"
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
                            width: 97%;
                            overflow: hidden;
                            padding: 10px 0;
                            border-bottom: 2px solid #EF991F;
                        }

                        .scroll-track-wrapper {
                            display: flex;
                            width: fit-content;
                            animation: scroll-movement 80s linear infinite;
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

                        /* --- THIS IS THE MODIFIED RULE --- */
                        .slider-image-frame {
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
                            background-color: rgba(222, 222, 222, 0.942);
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
            </div>

            <div style="padding: 0px 80px;">
                <h2 class="mobile-headd1 mt-2" style="font-size: 30px; color: #24477f;">Glimpse of <span
                        style="color: #EF991F;">Fifth Convocation</span></h2>

                <p style="color: #24477f; text-align: justify;" class="mobile-para1">
                    RGU continues to set new benchmarks in higher education, research, and holistic development. The
                    university
                    now has over 8500 students, including international students from 13 countries. It has over 500 faculty
                    members and more than 130 academic programs under 24 Schools of Studies. The eco-friendly campus,
                    world-class
                    infrastructure, and advanced learning facilities offer an enriching academic environment that blends
                    rigorous
                    scholarship with hands-on industry exposure.
                </p>


            </div>

            <section>

                <style>
                    /* --- Main Layout Wrapper --- */
                    .gallery-wrapper {
                        max-width: 90%;
                        margin: 0 auto;
                    }

                    .gallery-title {
                        text-align: center;
                        margin-bottom: 30px;
                    }

                    /* --- The "Row" (Flex Container) --- */
                    .gallery-flex-row {
                        display: flex;
                        flex-wrap: wrap;
                        margin-left: -10px;
                        margin-right: -10px;
                    }

                    /* --- The "Column" (Flex Item) --- */
                    .gallery-column-quarter {
                        flex-basis: 25%;
                        padding-left: 10px;
                        padding-right: 10px;
                        box-sizing: border-box;
                        margin-bottom: 20px;
                    }

                    /* --- The Gallery Thumbnail Item --- */
                    .thumbnail-container {
                        aspect-ratio: 16 / 9;
                        overflow: hidden;
                        border-radius: 8px;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                        transition: transform 0.3s ease;
                        cursor: pointer;
                        /* Indicates it's clickable */
                    }

                    .thumbnail-container:hover {
                        transform: scale(1.03);
                    }

                    .thumbnail-image {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        /* Crops thumbnail to fit 16:9 box */
                        display: block;
                    }

                    /* --- Responsiveness --- */
                    @media (max-width: 992px) {
                        .gallery-column-quarter {
                            flex-basis: 50%;
                            /* 2 columns */
                        }
                    }

                    @media (max-width: 768px) {
                        .gallery-column-quarter {
                            flex-basis: 100%;
                            /* 1 column */
                        }
                    }

                    /*
            ========================================
            UNIQUE LIGHTBOX STYLES
            ========================================
            */

                    .custom-lightbox-backdrop {
                        /* Hidden by default */
                        visibility: hidden;
                        opacity: 0;

                        /* Fullscreen overlay */
                        position: fixed;
                        z-index: 1000;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.85);

                        /* Center the content */
                        display: flex;
                        align-items: center;
                        justify-content: center;

                        /* Smooth transition */
                        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                    }

                    /* This class is added by JavaScript */
                    .custom-lightbox-backdrop.is-visible {
                        visibility: visible;
                        opacity: 1;
                    }

                    .custom-lightbox-image {
                        /* Display the full image, not cropped */
                        object-fit: contain;

                        /* Set max size to not fill the *entire* screen */
                        max-width: 85%;
                        max-height: 80vh;
                        /* 80% of the viewport height */

                        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
                        border-radius: 5px;
                    }

                    .custom-lightbox-close-btn {
                        position: absolute;
                        top: 20px;
                        right: 30px;
                        color: #ffffff;
                        font-size: 40px;
                        font-weight: bold;
                        cursor: pointer;
                        transition: color 0.2s ease;
                    }

                    .custom-lightbox-close-btn:hover {
                        color: #cccccc;
                    }
                </style>

                <div class="gallery-wrapper">

                    <div class="gallery-flex-row">

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/1.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/1.jpeg"
                                    alt="Gallery Image 1">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/2.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/2.jpeg"
                                    alt="Gallery Image 2">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/3.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/3.jpeg"
                                    alt="Gallery Image 3">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/4.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/4.jpeg"
                                    alt="Gallery Image 4">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/5.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/5.jpeg"
                                    alt="Gallery Image 5">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/6.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/6.jpeg"
                                    alt="Gallery Image 6">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/7.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/7.jpeg"
                                    alt="Gallery Image 7">
                            </div>
                        </div>

                        <div class="gallery-column-quarter">
                            <div class="thumbnail-container js-open-lightbox-modal"
                                data-img-src="mobile-assets/convocation/glimpse/8.jpeg">
                                <img class="thumbnail-image" src="mobile-assets/convocation/glimpse/8.jpeg"
                                    alt="Gallery Image 8">
                            </div>
                        </div>

                    </div>

                </div>

                <div id="uniqueGalleryLightbox" class="custom-lightbox-backdrop">
                    <span class="custom-lightbox-close-btn">&times;</span>
                    <img class="custom-lightbox-image" id="lightboxDisplayImage">
                </div>

                <script>
                    // Wait for the document to be fully loaded
                    document.addEventListener('DOMContentLoaded', () => {

                        // --- 1. Get all elements using unique names ---

                        // Get all gallery items using our "unique JS class"
                        const galleryTriggers = document.querySelectorAll('.js-open-lightbox-modal');

                        // Get the lightbox elements
                        const lightbox = document.getElementById('uniqueGalleryLightbox');
                        const lightboxImg = document.getElementById('lightboxDisplayImage');
                        const closeBtn = document.querySelector('.custom-lightbox-close-btn');

                        // --- 2. Create the "open" function ---
                        function openLightbox(e) {
                            const triggerElement = e.currentTarget;
                            const imgSrc = triggerElement.dataset.imgSrc;

                            // Set the image source in the lightbox
                            lightboxImg.src = imgSrc;

                            // Show the lightbox by adding the 'is-visible' class
                            lightbox.classList.add('is-visible');
                        }

                        // --- 3. Create the "close" function ---
                        function closeLightbox() {
                            lightbox.classList.remove('is-visible');
                            lightboxImg.src = ''; // Clear the src
                        }

                        // --- 4. Add Event Listeners ---

                        // Add a click listener to EVERY gallery item
                        galleryTriggers.forEach(trigger => {
                            trigger.addEventListener('click', openLightbox);
                        });

                        // Add click listener to the close button
                        closeBtn.addEventListener('click', closeLightbox);

                        // Add click listener to the backdrop
                        lightbox.addEventListener('click', (e) => {
                            if (e.target === lightbox) {
                                closeLightbox();
                            }
                        });

                        // Add Escape key listener
                        document.addEventListener('keydown', (e) => {
                            if (e.key === 'Escape' && lightbox.classList.contains('is-visible')) {
                                closeLightbox();
                            }
                        });

                    });
                </script>

            </section>


        </div>



    </div>
@endsection
