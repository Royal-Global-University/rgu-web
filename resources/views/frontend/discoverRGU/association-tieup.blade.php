@extends('frontend.master')
@push('styles')
    <style>
        /* General Body Styles */
        .card-section {
            /* background-color: #fdfaf5d9;  */
            color: #333;
            margin: 0;
            padding: 25px 35px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Main Container with unique name */
        .mou-feature-container {
            max-width: 1600px;
            width: 100%;
            text-align: center;

        }

        /* Introductory Text with unique name */
        .mou-feature-intro {
            font-size: 1.2rem;
            color: #27467A;
            max-width: 1000px;
            font-weight: 700;
            margin: 0 auto 40px auto;
            line-height: 1.6;
        }

        /* Grid for the feature cards with unique name */
        .mou-feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
        }

        /* Individual Card Styling with unique name */
        .mou-feature-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .mou-feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        /* Icon Styling with unique name */
        .mou-feature-icon {
            font-size: 3rem;
            /* 48px */
            color: #27467A;
            /* A shade of orange */
            margin-bottom: 20px;
        }

        /* Text inside the card, targeted within the unique parent */
        .mou-feature-card h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin: 0;
        }
    </style>
@endpush
@section('title', 'Associations and Tie Ups : The Assam Royal Global University')
@section('meta_description', 'Discover Royal Global University national and international associations and tie-ups that enhance academic collaboration, research opportunities, and global exposure for students and faculty.')
@section('meta_keywords', 'Associations and Tie Ups')
@section('content')
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <div style="padding-top: 80px;"></div>
        </div>

        <div class="website">
            <!--head image Section-->
            @include('frontend/components/aheader')

        </div>

            <section style="background-image: url(mobile-assets/school-rgu/bg.svg); background-size: cover;">

            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-5 pb-2"
                style="color: #27467A; font-weight: 900; font-size: 45px;">
                Associations <span style="color: #FF9A1E; font-weight: 500;">and Tie ups</span>
            </h2>

            <div class="card-section">
                <div class="mou-feature-container">
                    <p class="mou-feature-intro mobile-headd3">
                        The university, since its inception in 2017, has signed around 200 MoUs with renowned
                        institutions and organisations to have a common platform for:
                    </p>

                    <div class="mou-feature-grid mobile-para1">
                        <div class="mou-feature-card">
                            <i class="fas fa-lightbulb mou-feature-icon"></i>
                            <h3>Research and innovation</h3>
                        </div>

                        <div class="mou-feature-card">
                            <i class="fas fa-users-gear mou-feature-icon"></i>
                            <h3>Exchange of students, scientists, research scholars and faculty members</h3>
                        </div>

                        <div class="mou-feature-card">
                            <i class="fas fa-briefcase mou-feature-icon"></i>
                            <h3>Prospects for co-guideship and Internship opportunities</h3>
                        </div>

                        <div class="mou-feature-card">
                            <i class="fas fa-cogs mou-feature-icon"></i>
                            <h3>Running collaborative projects/ joint consultancy/ training programs etc.</h3>
                        </div>

                        <div class="mou-feature-card">
                            <i class="fas fa-handshake-angle mou-feature-icon"></i>
                            <h3>Other relevant activities as agreed upon by both the collaborated organizations.</h3>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Scopus Publication  -->
            <section style="background-color: #fff4e3; padding-bottom: 30px;">

                <div style="margin-top: 20px;" class="endless-scroll-container">

                    <div class="scroll-track-wrapper" style="padding-top: 30px;">

                        <div class="scroll-content-images unique-set-alpha">

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/1.png" alt="Image 1" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/2.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/3.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/4.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/5.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/6.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/7.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/8.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>


                        </div>

                        <div class="scroll-content-images unique-set-beta">

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/1.png" alt="Image 1" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/2.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/3.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/4.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/5.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/6.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/7.png" alt="Image 2" class="scroller-image"
                                    onclick="openLightbox(this.src)">
                            </div>

                            <div class="slider-image-frame">
                                <img src="mobile-assets/association/new-icon/8.png" alt="Image 2" class="scroller-image"
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
                        width: 95%;
                        overflow: hidden;
                        padding: 10px 0;
                        border-bottom: 2px solid #EF991F;
                    }

                    .scroll-track-wrapper {
                        display: flex;
                        width: fit-content;
                        animation: scroll-movement 30s linear infinite;
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
                        width: 150px;
                        height: 150px;
                        margin-right: 20px;
                        flex-shrink: 0;
                        overflow: hidden;
                        border: 1px solid #d1d1d1;
                        border-radius: 50px;
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
                    let start = { x: 0, y: 0 };
                    let pan = { x: 0, y: 0 };

                    // Function to apply the current transform to the image
                    function updateImageTransform() {
                        // We use calc() to combine the initial centering (-50%) with the pixel-based panning
                        lightboxImg.style.transform = `translate(calc(-50% + ${pan.x}px), calc(-50% + ${pan.y}px)) scale(${scale})`;
                    }

                    function openLightbox(src) {
                        // Reset state every time a new image is opened
                        scale = 1;
                        isDragging = false;
                        pan = { x: 0, y: 0 };
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
                            pan = { x: 0, y: 0 };
                        }
                        updateImageTransform();
                    });

                    lightboxImg.addEventListener('mousedown', (e) => {
                        // Panning only works if the image is zoomed in
                        if (scale > 1) {
                            e.preventDefault();
                            isDragging = true;
                            // Record starting point relative to current pan position
                            start = { x: e.clientX - pan.x, y: e.clientY - pan.y };
                            lightboxImg.style.cursor = 'grabbing';
                        }
                    });

                    // Use 'window' for mousemove and mouseup to allow dragging even if the cursor leaves the image
                    window.addEventListener('mousemove', (e) => {
                        if (isDragging) {
                            e.preventDefault();
                            pan = { x: e.clientX - start.x, y: e.clientY - start.y };
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
            <!-- Scopus Publication  -->

            <!-- list  -->
            <div class="container-fluid pt-3">
                <div class="table-responsive">
                    <style>
                        /* A unique prefix "rgu-pagi-" is used for all classes to prevent conflicts. */

                        /* Main container for controls */
                        .rgu-pagi-wrapper {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            flex-wrap: wrap;
                            /* Allows controls to stack on smaller screens */
                            padding: 20px 10px;
                            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                            gap: 20px;
                            /* Space between items when they wrap */
                        }

                        /* "Rows per page" selector styles */
                        .rgu-pagi-rows-selector {
                            display: flex;
                            align-items: center;
                            gap: 8px;
                            color: #555;
                            font-size: 14px;
                        }

                        .rgu-pagi-rows-selector select {
                            padding: 8px 12px;
                            border: 1px solid #ccc;
                            border-radius: 6px;
                            background-color: #fff;
                            cursor: pointer;
                            transition: border-color 0.2s;
                        }

                        .rgu-pagi-rows-selector select:hover {
                            border-color: #007bff;
                        }

                        /* Pagination links container */
                        #rgu-pagi-container {
                            display: flex;
                            list-style: none;
                            padding: 0;
                            margin: 0;
                            border-radius: 6px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.07);
                            overflow: hidden;
                        }

                        #rgu-pagi-container li {
                            margin: 0;
                        }

                        #rgu-pagi-container li a,
                        #rgu-pagi-container li span {
                            display: block;
                            padding: 10px 16px;
                            text-decoration: none;
                            color: #007bff;
                            background-color: #fff;
                            border-right: 1px solid #dee2e6;
                            transition: background-color 0.2s, color 0.2s;
                            cursor: pointer;
                            font-size: 14px;
                            white-space: nowrap;
                        }

                        #rgu-pagi-container li:first-child a {
                            border-left: 1px solid #dee2e6;
                        }

                        #rgu-pagi-container li.rgu-pagi-ellipsis span {
                            color: #6c757d;
                            cursor: default;
                        }

                        /* Hover state (for non-active, non-disabled links) */
                        #rgu-pagi-container li:not(.rgu-pagi-disabled) a:hover {
                            background-color: #e9ecef;
                        }

                        /* Active page state */
                        #rgu-pagi-container li a.rgu-pagi-active {
                            background-color: #007bff;
                            color: white;
                            border-color: #007bff;
                            cursor: default;
                        }

                        /* Disabled state for Prev/Next buttons */
                        #rgu-pagi-container li.rgu-pagi-disabled a {
                            color: #6c757d;
                            pointer-events: none;
                            cursor: not-allowed;
                            background-color: #f8f9fa;
                        }
                    </style>

                    <div class="container">
                        <table id="paginatedTable" class="table table-striped table-bordered bg-white mobile-para1 container">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Organisation/Institutions Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mendel University, Brno, Czech Republic</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Indian Institute of Technology (IIT), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>M/S ICA Edu Skills Pvt.Ltd., Kolkata</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Institute of Advanced Study in Science & Technology (IASST), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>National Institute of Pharmaceutical Education and Research (NIPER), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Institute of Chemical Technology (ICT), Mumbai</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>National Law University and Judicial Academy, Assam (NLUJAA), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>The Institute of Company Secretaries of India (ICSI), New Delhi</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Digboi College, Digboi</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Federation of Industry & Commerce of North eastern Region (FINER), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>CSIR-North East Institute of Science and Technology (NEIST), Jorhat</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Sri Sankaradeva Nethralaya, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Assam Agricultural University (AAU), Jorhat</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>SRISHTIE, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Pratishruti Cancer and Palliative Trust, Dibrugarh</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Snehalaya-Child Friendly Guwahati</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Assam State Museum, Govt. of Assam, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Dr. Surya Kumar Bhuyan Memorial Trust, North Guwahati</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Guwahati Biotech Park (GBP), Amingaon</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>The Policy Research Centre, Bangladesh (PRC.bd)</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Sri Sri Aniruddhadeva Sports University, Chabua</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Altanostics Labs Private Limited, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>CN Travels, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Dr. Bhubaneswar Boroaah Cancer Institute (BBCI), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>The Institute of Chartered Accountants of India (ICAI), New Delhi</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>GAPCRUD Private Limited, Kolkata</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Young Indians (Yi Guwahati Chapter), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Global Mindset Center for Global Education (Gmindset), Germany</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>DY365, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Heritage Institute of Technology, Kolkata</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Assam Academy of Mathematics, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Sun Moon University, Republic of Korea</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>North Lakhimpur College, North Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>JB College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Nowgaon College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Sibsagar College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Arya Vidyapeeth College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>B. Baruah College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Pandu College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Jorhat Nakachari College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Darrang College, Tezpur</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Dimoria College, Dimoria</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Furkating College, Furkating</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>Sonapur College, Sonapur</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>Jagiroad College, Jagiroad</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>Nagaon Girls College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td>Saraighat College, Changsari</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>Sipajhar College, Sipajhar</td>
                                </tr>
                                <tr>
                                    <td>49</td>
                                    <td>Tangla College, Tangla</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>Mangaldoi College, Mangaldoi</td>
                                </tr>
                                <tr>
                                    <td>51</td>
                                    <td>B H College, Howly</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>Dibrugarh Hanumanbax Surajmall Kanoi College, Dibrugarh</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td>Guwahati Commerce College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td>Kokrajhar Science College, Kokrajhar</td>
                                </tr>
                                <tr>
                                    <td>55</td>
                                    <td>G C College, Silchar</td>
                                </tr>
                                <tr>
                                    <td>56</td>
                                    <td>Ramanuj Gupta Degree College, Silchar</td>
                                </tr>
                                <tr>
                                    <td>57</td>
                                    <td>Sibsagar Commerce College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td>Kaliabor College, Kaliabor</td>
                                </tr>
                                <tr>
                                    <td>59</td>
                                    <td>Pandit Deen Dayal Upadhyaya Adarsha Mahavidyalaya, Amjonga</td>
                                </tr>
                                <tr>
                                    <td>60</td>
                                    <td>Pandit Deen Dayal Upadhyaya Adarsha Mahavidyalaya, Behali</td>
                                </tr>
                                <tr>
                                    <td>61</td>
                                    <td>Pandit Deen Dayal Upadhyaya Adarsha Mahavidyalaya, Dalgaon</td>
                                </tr>
                                <tr>
                                    <td>62</td>
                                    <td>Assam Engineering Institute, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>63</td>
                                    <td>Baksa Polytechnic, Baksa</td>
                                </tr>
                                <tr>
                                    <td>64</td>
                                    <td>Barpeta Polytechnic, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>65</td>
                                    <td>Bongaigaon Polytechnic, Bongaigaon</td>
                                </tr>
                                <tr>
                                    <td>66</td>
                                    <td>Chirang Polytechnic, Bijni</td>
                                </tr>
                                <tr>
                                    <td>67</td>
                                    <td>Diphu Polytechnic, Diphu</td>
                                </tr>
                                <tr>
                                    <td>68</td>
                                    <td>Goalpara Polytechnic, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>69</td>
                                    <td>Kamrup Polytechnic, Baihata Chariali</td>
                                </tr>
                                <tr>
                                    <td>70</td>
                                    <td>Karimganj Polytechnic, Karimganj</td>
                                </tr>
                                <tr>
                                    <td>71</td>
                                    <td>Morigaon Polytechnic, Morigaon</td>
                                </tr>
                                <tr>
                                    <td>72</td>
                                    <td>Nalbari Polytechnic, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>73</td>
                                    <td>Nowgong Polytechnic, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>74</td>
                                    <td>Silchar Polytechnic, Silchar</td>
                                </tr>
                                <tr>
                                    <td>75</td>
                                    <td>Sonitpur Polytechnic, Sonitpur</td>
                                </tr>
                                <tr>
                                    <td>76</td>
                                    <td>Tinsukia Polytechnic, Tinsukia</td>
                                </tr>
                                <tr>
                                    <td>77</td>
                                    <td>Udalguri Polytechnic, Udalguri</td>
                                </tr>
                                <tr>
                                    <td>78</td>
                                    <td>Assam Science Society, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>79</td>
                                    <td>RV University, Bengaluru</td>
                                </tr>
                                <tr>
                                    <td>80</td>
                                    <td>O P Jindal Global University, Sonipat, Haryana</td>
                                </tr>
                                <tr>
                                    <td>81</td>
                                    <td>Omeo Kumar Das Institute of Social Change and Development, Guwahati (OKDISCD), Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>82</td>
                                    <td>English Language Teachers' Association of India (ELTAI), Chennai</td>
                                </tr>
                                <tr>
                                    <td>83</td>
                                    <td>Swagat Hospitals Pvt.Ltd., Guwahati</td>
                                </tr>
                                <tr>
                                    <td>84</td>
                                    <td>The Greenwood Hotels & Resorts, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>85</td>
                                    <td>Bhawanipur Hastinapur Bijni College, Bajali</td>
                                </tr>
                                <tr>
                                    <td>86</td>
                                    <td>North Kamrup College, Bajali</td>
                                </tr>
                                <tr>
                                    <td>87</td>
                                    <td>Baosi Banikanta Kakati College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>88</td>
                                    <td>Barnagar College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>89</td>
                                    <td>Barpeta Bongaigoan College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>90</td>
                                    <td>Barpeta Girls’ College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>91</td>
                                    <td>Bhawanipur Anchalik College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>92</td>
                                    <td>Luitparia College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>93</td>
                                    <td>Madhab Choudhury College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>94</td>
                                    <td>Madhya Kamrup College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>95</td>
                                    <td>Mandia Anchalik College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>96</td>
                                    <td>Nabajyoti College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>97</td>
                                    <td>Behali Degree College, Biswanath</td>
                                </tr>
                                <tr>
                                    <td>98</td>
                                    <td>Abhayapuri College, Bongaigaon</td>
                                </tr>
                                <tr>
                                    <td>99</td>
                                    <td>Birjhora Kanya Mahavidyalaya, Bongaigaon</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td>Rajiv Gandhi Memorial College, Bongaigaon</td>
                                </tr>
                                <tr>
                                    <td>101</td>
                                    <td>Jagannath Singh College, Cachar</td>
                                </tr>
                                <tr>
                                    <td>102</td>
                                    <td>Janata College, Cachar</td>
                                </tr>
                                <tr>
                                    <td>103</td>
                                    <td>Madhab Chandra Das College, Cachar</td>
                                </tr>
                                <tr>
                                    <td>104</td>
                                    <td>Satya Ranjan College, Cachar</td>
                                </tr>
                                <tr>
                                    <td>105</td>
                                    <td>Borhat B.P.B. Memorial College, Charaideo</td>
                                </tr>
                                <tr>
                                    <td>106</td>
                                    <td>Basugaon College, Chirang</td>
                                </tr>
                                <tr>
                                    <td>107</td>
                                    <td>Kharupetia College, Darrang</td>
                                </tr>
                                <tr>
                                    <td>108</td>
                                    <td>Mangaldai Commerce College, Darrang</td>
                                </tr>
                                <tr>
                                    <td>109</td>
                                    <td>Bholanath College, Dhubri</td>
                                </tr>
                                <tr>
                                    <td>110</td>
                                    <td>D.H.S.K. Commerce College, Dibrugarh</td>
                                </tr>
                                <tr>
                                    <td>111</td>
                                    <td>Dibru College, Dibrugarh</td>
                                </tr>
                                <tr>
                                    <td>112</td>
                                    <td>Duliajan College, Duliajan</td>
                                </tr>
                                <tr>
                                    <td>113</td>
                                    <td>Tingkhong College, Dibrugarh</td>
                                </tr>
                                <tr>
                                    <td>114</td>
                                    <td>Agia College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>115</td>
                                    <td>Bikali College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>116</td>
                                    <td>Dalgoma Anchalik College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>117</td>
                                    <td>Dudhnoi College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>118</td>
                                    <td>Habraghat Mahavidyalaya, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>119</td>
                                    <td>West Goalpara College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>120</td>
                                    <td>Sarada Charan Dey College, Hailakandi</td>
                                </tr>
                                <tr>
                                    <td>121</td>
                                    <td>Srikishan Sarda College, Hailakandi</td>
                                </tr>
                                <tr>
                                    <td>122</td>
                                    <td>Pandit Deendayal Upadhyaya Govt. Model College, Katlicherra, Hailakandi</td>
                                </tr>
                                <tr>
                                    <td>123</td>
                                    <td>Murazar College, Hojai</td>
                                </tr>
                                <tr>
                                    <td>124</td>
                                    <td>Jorhat Kendriya Mahavidyalaya, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>125</td>
                                    <td>Bahona College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>126</td>
                                    <td>Sarbodaya College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>127</td>
                                    <td>Dispur College, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>128</td>
                                    <td>Handique Girls’ College, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>129</td>
                                    <td>K.R.B. Girls’ College, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>130</td>
                                    <td>Kanya Mahavidyalaya, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>131</td>
                                    <td>Karmashree Hiteswar Saikia College, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>132</td>
                                    <td>B.R.M. Govt. Law College, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>133</td>
                                    <td>S.B. Deorah College, Kamrup (M)</td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                    <td>Bamundi Mahavidyalaya, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>135</td>
                                    <td>Chhamaria Anchalik College,Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>136</td>
                                    <td>Madhya Kampeeth College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>137</td>
                                    <td>Pati Darrang College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>138</td>
                                    <td>Pub Bongsor College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>139</td>
                                    <td>Barbhag College, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>140</td>
                                    <td>Rampur Anchalik College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>141</td>
                                    <td>Rangia College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>142</td>
                                    <td>S.B.M.S. College (Sualkuchi Budram Madhab Satradhikar College), Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>143</td>
                                    <td>Suren Das College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>144</td>
                                    <td>Vidya Bharati College, Kamrup(R)</td>
                                </tr>
                                <tr>
                                    <td>145</td>
                                    <td>Pandit Deendayal Upadhyaya Adarsha Mahavidyalaya , Eraligool, Karimganj</td>
                                </tr>
                                <tr>
                                    <td>146</td>
                                    <td>Harhi College, Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>147</td>
                                    <td>Lakhimpur Commerce College, Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>148</td>
                                    <td>North Bank College, Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>149</td>
                                    <td>Charaibahi College, Morigaon</td>
                                </tr>
                                <tr>
                                    <td>150</td>
                                    <td>Hatichong College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>151</td>
                                    <td>Juria College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>152</td>
                                    <td>Khagarijan College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>153</td>
                                    <td>Nagaon GNDG Commerce College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>154</td>
                                    <td>Swahid Smriti Mahavidyalaya, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>155</td>
                                    <td>Kamrup College, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>156</td>
                                    <td>Nalbari College, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>157</td>
                                    <td>Tihu College, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>158</td>
                                    <td>Uttar Kampith Mahavidyalaya, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>159</td>
                                    <td>Amguri College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>160</td>
                                    <td>Dikhowmukh College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>161</td>
                                    <td>Gargaon College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>162</td>
                                    <td>Nazira College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>163</td>
                                    <td>Swahid Peoli Phukan College, Sibsagar</td>
                                </tr>
                                <tr>
                                    <td>164</td>
                                    <td>Lokapriya Gopinath Bordoloi Girls' College, Sonitpur</td>
                                </tr>
                                <tr>
                                    <td>165</td>
                                    <td>Rangapara College, Sonitpur</td>
                                </tr>
                                <tr>
                                    <td>166</td>
                                    <td>Tyagbir Hem Baruah College, Sonitpur</td>
                                </tr>
                                <tr>
                                    <td>167</td>
                                    <td>Bir Raghab Moran Govt. Model College, Tinsukia</td>
                                </tr>
                                <tr>
                                    <td>168</td>
                                    <td>Khowang College, Dibrugarh</td>
                                </tr>
                                <tr>
                                    <td>169</td>
                                    <td>Lakhipur College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>170</td>
                                    <td>Tinsukia College, Tinsukia</td>
                                </tr>
                                <tr>
                                    <td>171</td>
                                    <td>Kalaguru Bishnu Rabha Degree College, Udalguri</td>
                                </tr>
                                <tr>
                                    <td>172</td>
                                    <td>Kohima Science College, Jotsoma, Nagaland</td>
                                </tr>
                                <tr>
                                    <td>173</td>
                                    <td>Unity College, Dimapur, Nagaland</td>
                                </tr>
                                <tr>
                                    <td>174</td>
                                    <td>Indira Gandhi Govt. College, Tezu, Arunachal Pradesh</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Don Bosco College (Autonomous), Manipur</td>
                                </tr>
                                <tr>
                                    <td>176</td>
                                    <td>Dhakuakhana College, Dhakuakhana, Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>177</td>
                                    <td>Lakhimpur Kendriya Mahavidyalaya, North Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>178</td>
                                    <td>Digboi Mahila Mahavidyalaya, Digboi</td>
                                </tr>
                                <tr>
                                    <td>179</td>
                                    <td>Silchar College, Silchar</td>
                                </tr>
                                <tr>
                                    <td>180</td>
                                    <td>G.L. Choudhury College, Barpeta</td>
                                </tr>
                                <tr>
                                    <td>181</td>
                                    <td>People's Choice Education, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>182</td>
                                    <td>Jubilant College, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>VS International College, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>184</td>
                                    <td>Himalaya College, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>185</td>
                                    <td>HRIT Academy, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>186</td>
                                    <td>Nobel Academy, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>187</td>
                                    <td>Liverpool College, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>188</td>
                                    <td>Jaya Multiple Campus, Kathmandu, Nepal</td>
                                </tr>
                                <tr>
                                    <td>189</td>
                                    <td>Gandhi Institute of Technology and Management (GITAM), Visakhapatnam</td>
                                </tr>
                                <tr>
                                    <td>190</td>
                                    <td>Shiv Nadar Institution of Eminence, Greater Noida</td>
                                </tr>
                                <tr>
                                    <td>191</td>
                                    <td>Lovely Professional University, Punjab</td>
                                </tr>
                                <tr>
                                    <td>192</td>
                                    <td>International Skill Development Corporation (ISDC), Bengaluru</td>
                                </tr>
                                <tr>
                                    <td>193</td>
                                    <td>National Institute of Electronics and Information Technology (NIELIT), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>194</td>
                                    <td>Krirk University, Bangkok, Thailand</td>
                                </tr>
                                <tr>
                                    <td>195</td>
                                    <td>Dhaka International University, Bangladesh</td>
                                </tr>
                                <tr>
                                    <td>196</td>
                                    <td>TERRE Policy Centre, Pune</td>
                                </tr>
                                <tr>
                                    <td>197</td>
                                    <td>Mr. Riyan Parag as RGU Brand Ambassador</td>
                                </tr>
                                <tr>
                                    <td>198</td>
                                    <td>Tour Operators Association of Assam (TOAA), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>199</td>
                                    <td>The Directorate of Historical and Antiquarian Studies, Assam (DHAS), Guwahati</td>
                                </tr>
                                <tr>
                                    <td>200</td>
                                    <td>Anandaram Dhekial Phookan College, Nagaon</td>
                                </tr>
                                <tr>
                                    <td>201</td>
                                    <td>B.B.Kissan College, Jalahghat, Baksa</td>
                                </tr>
                                <tr>
                                    <td>202</td>
                                    <td>Bapujee College, Sarthebari</td>
                                </tr>
                                <tr>
                                    <td>203</td>
                                    <td>Biswanath College, Biswanath Chariali</td>
                                </tr>
                                <tr>
                                    <td>204</td>
                                    <td>Bengtol College, Chirang</td>
                                </tr>
                                <tr>
                                    <td>205</td>
                                    <td>Bilasipara College, Dhubri</td>
                                </tr>
                                <tr>
                                    <td>206</td>
                                    <td>Barpathar College, Barpathar</td>
                                </tr>
                                <tr>
                                    <td>207</td>
                                    <td>Bodofa U.N Brahma College, Dotma</td>
                                </tr>
                                <tr>
                                    <td>208</td>
                                    <td>Bhuragaon College, Bhoragaon</td>
                                </tr>
                                <tr>
                                    <td>209</td>
                                    <td>Batadraba Sri Sri Sankardev College, Batadraba</td>
                                </tr>
                                <tr>
                                    <td>210</td>
                                    <td>Barkhetri College, Mukalmua, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>211</td>
                                    <td>Dhemaji College, Dhemaji</td>
                                </tr>
                                <tr>
                                    <td>212</td>
                                    <td>Dhemaji Commerce College, Aradhol</td>
                                </tr>
                                <tr>
                                    <td>213</td>
                                    <td>D.D.R.College, Chabua</td>
                                </tr>
                                <tr>
                                    <td>214</td>
                                    <td>Duliajan Girls College, Duliajan</td>
                                </tr>
                                <tr>
                                    <td>215</td>
                                    <td>Dr. B.K.B. College, Puranigudam</td>
                                </tr>
                                <tr>
                                    <td>216</td>
                                    <td>Doom Dooma College, Rupaisiding</td>
                                </tr>
                                <tr>
                                    <td>217</td>
                                    <td>F.A. Ahmed College, Goroimari</td>
                                </tr>
                                <tr>
                                    <td>218</td>
                                    <td>Govt. Model College, Borkhola</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Goalpara College, Goalpara</td>
                                </tr>
                                <tr>
                                    <td>220</td>
                                    <td>Ghana Kanta Borah College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>221</td>
                                    <td>Girls' College Kokrajhar, Kokrajhar</td>
                                </tr>
                                <tr>
                                    <td>222</td>
                                    <td>Harendra Chitra College, Bhaktardoba</td>
                                </tr>
                                <tr>
                                    <td>223</td>
                                    <td>Haflong Govt. College, Haflong</td>
                                </tr>
                                <tr>
                                    <td>224</td>
                                    <td>Janapriya College, Geremari</td>
                                </tr>
                                <tr>
                                    <td>225</td>
                                    <td>Jawaharlal Nehru College, Boko</td>
                                </tr>
                                <tr>
                                    <td>226</td>
                                    <td>Jengraimukh College, Jengraimukh</td>
                                </tr>
                                <tr>
                                    <td>227</td>
                                    <td>JNC Pasighat, Arunachal Pradesh</td>
                                </tr>
                                <tr>
                                    <td>228</td>
                                    <td>Kalabari College, Kalabari</td>
                                </tr>
                                <tr>
                                    <td>229</td>
                                    <td>Karimganj College, Karimganj</td>
                                </tr>
                                <tr>
                                    <td>230</td>
                                    <td>Kokrajhar Govt. College, Kokrajhar</td>
                                </tr>
                                <tr>
                                    <td>231</td>
                                    <td>Khoirabari College, Khoirabari</td>
                                </tr>
                                <tr>
                                    <td>232</td>
                                    <td>Lakhimpur Girls’ College, Khelmati, North Lakhimpur</td>
                                </tr>
                                <tr>
                                    <td>233</td>
                                    <td>Ledo College, Ledo</td>
                                </tr>
                                <tr>
                                    <td>234</td>
                                    <td>Manikpur Anchalik College, Manikpur</td>
                                </tr>
                                <tr>
                                    <td>235</td>
                                    <td>Moridhal College, Dhemaji</td>
                                </tr>
                                <tr>
                                    <td>236</td>
                                    <td>Murkong Selek College, Jonai, Dhemaji</td>
                                </tr>
                                <tr>
                                    <td>237</td>
                                    <td>Mariani College, Mariani</td>
                                </tr>
                                <tr>
                                    <td>238</td>
                                    <td>Manabendra Sarma Girls' College, Rangia</td>
                                </tr>
                                <tr>
                                    <td>239</td>
                                    <td>Mayang Anchalik College, Rajamayong</td>
                                </tr>
                                <tr>
                                    <td>240</td>
                                    <td>Morigaon College, Morigaon</td>
                                </tr>
                                <tr>
                                    <td>241</td>
                                    <td>Mahendra Narayan Choudhury Balika Mahavidyalaya, Nalbari</td>
                                </tr>
                                <tr>
                                    <td>242</td>
                                    <td>Mankachar College, Mankachar</td>
                                </tr>
                                <tr>
                                    <td>243</td>
                                    <td>Margherita College, Margherita</td>
                                </tr>
                                <tr>
                                    <td>244</td>
                                    <td>Mazbat College, Mazbat</td>
                                </tr>
                                <tr>
                                    <td>245</td>
                                    <td>Narangi Anchalik Mahavidyalaya, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>246</td>
                                    <td>Devicharan Baruah Girls’ College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>247</td>
                                    <td>West Guwahati Commerce College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>248</td>
                                    <td>Kakojan College, Jorhat</td>
                                </tr>
                                <tr>
                                    <td>249</td>
                                    <td>Ratnapith College, Dhubri</td>
                                </tr>
                                <tr>
                                    <td>250</td>
                                    <td>Sankaradeva Mahavidyalaya, Pathalipahar</td>
                                </tr>
                                <tr>
                                    <td>251</td>
                                    <td>Sarupathar College, Sarupathar</td>
                                </tr>
                                <tr>
                                    <td>252</td>
                                    <td>Silapathar Science College, Silapathar</td>
                                </tr>
                                <tr>
                                    <td>253</td>
                                    <td>Salbari College, Salbari</td>
                                </tr>
                                <tr>
                                    <td>254</td>
                                    <td>Ramkrishna Nagar College, Karimganj</td>
                                </tr>
                                <tr>
                                    <td>255</td>
                                    <td>Rukasen College, Bakalia</td>
                                </tr>
                                <tr>
                                    <td>256</td>
                                    <td>Radhagovinda Baruah College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>257</td>
                                    <td>Presidency College Motbung, Manipur</td>
                                </tr>
                                <tr>
                                    <td>258</td>
                                    <td>Padmanath Gohain Boruah Govt. Model College, Kakopathar</td>
                                </tr>
                                <tr>
                                    <td>259</td>
                                    <td>Puthimari College, Soneswar</td>
                                </tr>
                                <tr>
                                    <td>260</td>
                                    <td>Nehru College, Cachar</td>
                                </tr>
                                <tr>
                                    <td>261</td>
                                    <td>Pragjyotish College, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>262</td>
                                    <td>Paschim Barigog Anchalik Mahavidyalaya, Baranghati</td>
                                </tr>
                                <tr>
                                    <td>263</td>
                                    <td>Global Research and Knowledge Foundation, Ahmedabad</td>
                                </tr>
                                <tr>
                                    <td>264</td>
                                    <td>SECONE Society, Guwahati</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="rgu-pagi-wrapper">
                            <div class="rgu-pagi-rows-selector">
                                <label for="rgu-pagi-rowsPerPageSelect">Rows per page:</label>
                                <select id="rgu-pagi-rowsPerPageSelect">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30" selected>30</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <ul id="rgu-pagi-container"></ul>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const allRows = Array.from(document.querySelectorAll('#paginatedTable tbody tr'));
                                const tbody = document.querySelector('#paginatedTable tbody');
                                const paginationContainer = document.getElementById('rgu-pagi-container');
                                const rowsPerPageSelect = document.getElementById('rgu-pagi-rowsPerPageSelect');

                                let currentPage = 1;
                                let rowsPerPage = parseInt(rowsPerPageSelect.value);

                                function displayRows() {
                                    tbody.innerHTML = '';
                                    const start = (currentPage - 1) * rowsPerPage;
                                    const end = start + rowsPerPage;
                                    const paginatedRows = allRows.slice(start, end);
                                    paginatedRows.forEach(row => tbody.appendChild(row));
                                }

                                function setupPagination() {
                                    paginationContainer.innerHTML = '';
                                    const pageCount = Math.ceil(allRows.length / rowsPerPage);
                                    const pageElements = [];
                                    const siblingCount = 1;

                                    const createEl = (page, text, isDisabled = false, isActive = false, isEllipsis = false) => {
                                        const li = document.createElement('li');
                                        if (isEllipsis) {
                                            li.classList.add('rgu-pagi-ellipsis');
                                            li.innerHTML = '<span>...</span>';
                                            return li;
                                        }
                                        const a = document.createElement('a');
                                        a.href = '#';
                                        a.innerHTML = text;
                                        a.dataset.page = page;
                                        if (isDisabled) li.classList.add('rgu-pagi-disabled');
                                        if (isActive) a.classList.add('rgu-pagi-active');
                                        li.appendChild(a);
                                        return li;
                                    };

                                    pageElements.push(createEl(currentPage - 1, '&laquo;', currentPage === 1));

                                    const totalPageNumbersToShow = siblingCount * 2 + 5;

                                    if (pageCount <= totalPageNumbersToShow) {
                                        for (let i = 1; i <= pageCount; i++) {
                                            pageElements.push(createEl(i, i, false, i === currentPage));
                                        }
                                    } else {
                                        pageElements.push(createEl(1, 1, false, 1 === currentPage));
                                        if (currentPage > siblingCount + 2) {
                                            pageElements.push(createEl(null, null, false, false, true));
                                        }
                                        const startPage = Math.max(2, currentPage - siblingCount);
                                        const endPage = Math.min(pageCount - 1, currentPage + siblingCount);
                                        for (let i = startPage; i <= endPage; i++) {
                                            pageElements.push(createEl(i, i, false, i === currentPage));
                                        }
                                        if (currentPage < pageCount - (siblingCount + 1)) {
                                            pageElements.push(createEl(null, null, false, false, true));
                                        }
                                        pageElements.push(createEl(pageCount, pageCount, false, pageCount === currentPage));
                                    }

                                    pageElements.push(createEl(currentPage + 1, '&raquo;', currentPage === pageCount));

                                    pageElements.forEach(el => paginationContainer.appendChild(el));
                                }

                                function updatePagination() {
                                    displayRows();
                                    setupPagination();
                                }

                                paginationContainer.addEventListener('click', (e) => {
                                    // FIX: Prevents the page from jumping to the top on click.
                                    e.preventDefault();

                                    const target = e.target.closest('a');
                                    if (!target) return;

                                    // Prevents clicking on disabled links
                                    if (target.parentElement.classList.contains('rgu-pagi-disabled')) {
                                        return;
                                    }

                                    const page = parseInt(target.dataset.page, 10);
                                    if (page && page !== currentPage) {
                                        currentPage = page;
                                        updatePagination();
                                    }
                                });

                                rowsPerPageSelect.addEventListener('change', function () {
                                    rowsPerPage = parseInt(this.value);
                                    currentPage = 1;
                                    updatePagination();
                                });

                                // Initial setup
                                updatePagination();
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!-- list  -->



        </section>

@endsection
