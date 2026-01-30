@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>
    <section class="container">
        <div>
            <h2 class="text-center mt-4" style="font-weight: bold; color: black;">National Pharmacy Week (NPW) 2025</h2>
        </div>
        <div class="container mt-3" style="display: flex; justify-content: space-between">
            <h4 style="color: black">Date: 20 November 2025</h4>
            <h4 style="color: black">Theme: Pharmacists as Advocates of Vaccination</h4>
        </div>
        <div class="mt-4">
            <section style="background-color: #fff4e3; padding-bottom: 30px;">

                            <div style="margin-top: 10px;" class="endless-scroll-container">


                                <div class="scroll-track-wrapper" style="padding-top: 0px;">

                                    <div class="scroll-content-images unique-set-alpha">

                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rsp/events/1.jpeg"
                                                style="height: 450px;" alt="Image 1" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>

                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rsp/events/2.jpeg"
                                                style="height: 450px;" alt="Image 2" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>

                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rsp/events/3.jpeg"
                                                style="height: 450px;" alt="Image 2" class="scroller-image"
                                                onclick="openLightbox(this.src)">
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
                                    animation: scroll-movement 60s linear infinite;
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
        <div class="mt-4">
            The National Pharmacy Week (NPW) celebration was organized on 20 November 2025 by Royal School of Pharmacy, The
            Assam Royal Global University, Guwahati, with enthusiastic participation from students and faculty members of
            the Royal School of Pharmacy. The event aimed to highlight the crucial role of pharmacists in promoting
            vaccination and strengthening public health awareness.
        </div>
        <div class="mt-4">
            The programme commenced with an inaugural session graced by the Dean Prof. (Dr.) Chennu Maruthi Malya Prasad Rao
            and the Principal (Dr.) Prithvi Raj Chakraborty , The Royal School of Pharmacy. The Dean Sir addressed the
            gathering by emphasizing the importance of National Pharmacy Week in recognizing the contributions of
            pharmacists to the healthcare system. He highlighted how pharmacists play a key role in patient counselling,
            immunization services, and community awareness.
        </div>
        <div class="mt-4">
            Following this, the Principal Sir delivered a motivating speech centered on the official theme of NPW 2025,
            “Pharmacists as Advocates of Vaccination.” He stressed the need for pharmacists to actively participate in
            vaccine education, dispel myths related to immunization, and serve as reliable sources of scientific information
            for the public. His words inspired the students to uphold their professional responsibilities with commitment
            and integrity.
        </div>
        <div class="mt-4">
            After the inaugural speeches, the programme advanced to its main event—a Debate Competition organized for
            students of B. Pharmacy and D. Pharmacy. Participants debated on topics related to vaccination awareness,
            vaccine hesitancy, and the evolving role of pharmacists in modern healthcare. The competition was vibrant and
            intellectually stimulating, showcasing the students’ knowledge, communication skills, and critical thinking
            abilities. The judges evaluated the participants on content, clarity, argument strength, and presentation.
        </div>
        <div class="mt-4 mb-5">
            The event concluded with the announcement of winners and a note of appreciation to all participants and
            organizers. The faculty encouraged the students to continue engaging in such academic activities that foster
            professional development.
            Overall, the National Pharmacy Week celebration at The Royal School Of Pharmacy , The Assam Royal Global
            University was a great success. It effectively spread awareness about the significance of vaccination and
            reinforced the vital role pharmacists play as advocates for public health.
        </div>

    </section>
@endsection
