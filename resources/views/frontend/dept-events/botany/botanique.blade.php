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
            <h2 class="text-center mt-4" style="font-weight: bold; color: black;">BOTANIQUE 3.0</h2>
            <h3 class="text-center mt-4" style="font-weight: bold; color: black;">Botany beyond Books</h3>
        </div>

        <div class="mt-4">
            <section style="background-color: #fff4e3; padding-bottom: 30px;">

                            <div style="margin-top: 10px;" class="endless-scroll-container">


                                <section style="background-color: #fff4e3; padding-bottom: 30px;">

                            <div style="margin-top: 10px;" class="endless-scroll-container">


                                <div class="scroll-track-wrapper" style="padding-top: 0px;">

                                    <div class="scroll-content-images unique-set-alpha">

                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rslsc/botany/events/1.png"
                                                style="height: 400px;" alt="Image 1" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>

                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rslsc/botany/events/2.png"
                                                style="height: 400px;" alt="Image 2" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>

                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rslsc/botany/events/3.png"
                                                style="height: 400px;" alt="Image 2" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>
                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rslsc/botany/events/6.png"
                                                style="height: 400px;" alt="Image 2" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>
                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rslsc/botany/events/7.png"
                                                style="height: 400px;" alt="Image 2" class="scroller-image"
                                                onclick="openLightbox(this.src)">
                                        </div>
                                        <div class="slider-image-frame">
                                            <img src="mobile-assets/department-all/rslsc/botany/events/8.png"
                                                style="height: 400px;" alt="Image 2" class="scroller-image"
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
        <div class="mt-4 text-dark">
            The Department of Botany, in collaboration with the Botanical Society of RGU, successfully organized Botanique 3.0 – “Botany Beyond Books” on 10th, 12th, and 13th November 2025.
        </div>
        <div class="mt-4 text-dark">
            The event commenced on 10th November 2025 with an inspiring invited lecture by Padma Shri Jadav Payeng, popularly known as The Forest Man of India, on the topic “My Journey from a Sapling to a Living Forest.” The session, held from 10:00 AM to 12:00 noon, captivated the audience with his remarkable story of dedication and environmental stewardship.
        </div>
        <div class="mt-4 text-dark">
            The second day, on 12th November 2025, featured a series of engaging stalls put up by students, including the Mushroom Factory, which showcased models of mushroom cultivation, value-added mushroom products, and mushroom bags for sale. Other attractions included the Plant Chemistry Café, highlighting the fascinating world of plant compounds, and an Eco-Craft Display promoting creativity and sustainability.
        </div>
        <div class="mt-4 text-dark">
            The final day, on 13th November 2025, celebrated student creativity and research through a range of competitions. The day began with a Creative Art Competition, with enthusiastic participation from students of Royal Global School and Divine Buds English School. This was followed by a Poster Presentation Competition, where postgraduate students presented their research ideas to a panel of judges, an Agar Art Competition, and an Eco-Craft Competition.
        </div>
        <div class="mt-4 mb-5 text-dark">
            The event concluded with the distribution of awards, exciting prizes, and participation certificates to the winners and participants, marking a successful and enriching conclusion to Botanique 3.0.
        </div>

    </section>
@endsection
