@extends('frontend.master')

@push('styles')
    <style>
        /* --- 1. GLOBAL DECLARATIONS (CSS VARIABLES) --- */
        :root {
            /* COLORS */
            --color-primary-dark-blue: #1a3258;
            --color-accent-orange: #EF991F;
            --color-text-light: #ffffff;
            --color-text-dark: #333;
            --color-background-body: #f4f4f4;
            --color-background-light: #ffffff;
            --color-background-hover: #e9e9e9;
            --color-background-mobile-menu: #f9f9f9;
            --color-border-light: #eee;
            --color-border-mobile: #f0f0f0;

            /* TYPOGRAPHY */
            /* UPDATED: Changed the primary font to Montserrat */
            --font-family-primary: 'Montserrat', sans-serif;
            --font-size-base: 16px;
            --font-size-medium: 18px;
            --font-size-large: 25px;
            --font-size-xl: 1.5rem;
            --font-weight-normal: normal;
            --font-weight-bold: bold;

            /* SIZING & SPACING */
            --container-width: 1350px;
            --header-height-initial: 120px;
            --header-height-scrolled: 95px;
            --spacing-xs: 5px;
            --spacing-sm: 10px;
            --spacing-md: 15px;
            --spacing-lg: 45px;
            --spacing-xl: 40px;

            /* BORDERS & SHADOWS */
            --border-radius-sm: 6px;
            --border-radius-md: 8px;
            --border-radius-lg: 20px;
            --border-radius-pill: 50px;
            --shadow-dropdown: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-header: 0 2px 10px rgba(0, 0, 0, 0.05);

            /* TRANSITIONS */
            --transition-fast: all 0.2s ease-in-out;
            --transition-normal: all 0.3s ease;
            --transition-slow: all 0.4s ease;

            /* Z-INDEX */
            --z-index-header: 1000;
            --z-index-hero-content: 4;
            --z-index-slider-nav: 10;
        }

        /* --- 2. BASE & GLOBAL STYLES --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family-primary);
            background-color: var(--color-background-body);
            font-size: var(--font-size-base);
        }

        /* --- 3. VIEW-SWITCHING LOGIC --- */
        /* Default view is desktop */
        .mobileview {
            display: none;
        }

        .website {
            display: block;
        }

        /* --- 4. HEADER STYLES (COMMON) --- */
        .site-header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: var(--z-index-header);
            background-color: transparent;
            transition: background-color 0.4s ease, backdrop-filter 0.4s ease, height 0.4s ease;
        }

        .navbar-new {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 var(--spacing-lg);
            height: var(--header-height-initial);
            transition: height 0.4s ease;
        }

        .logo-container img {
            height: 100px;
            transition: height 0.4s ease;
        }

        .logo-dark {
            display: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: var(--spacing-lg);
        }

        .nav-item {
            position: relative;
        }

        .nav-item>a {
            color: var(--color-text-light);
            text-decoration: none;
            font-weight: var(--font-weight-bold);
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .nav-item>a>i {
            margin-left: 4px;
        }

        /* Dropdown & Submenu Base */
        .dropdown-menu,
        .submenu {
            background-color: var(--color-background-light);
            list-style: none;
            position: absolute;
            top: 110%;
            left: 0;
            min-width: 220px;
            border-radius: var(--border-radius-md);
            box-shadow: var(--shadow-dropdown);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition-normal);
            padding: var(--spacing-xs) 0;
        }

        .nav-item:hover>.dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: var(--color-text-dark);
            white-space: nowrap;
            margin: 2px 8px;
            border-radius: var(--border-radius-sm);
            transition: background-color 0.2s ease-in-out;
        }

        .dropdown-menu a:hover {
            background-color: var(--color-background-hover);
        }

        /* Submenu Specifics */
        .has-submenu {
            position: relative;
        }

        .has-submenu>a {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .submenu {
            top: -5px;
            /* Aligns with the parent item */
            left: 100%;
        }

        .has-submenu:hover>.submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Mega Menu Specifics */
        .mega-menu {
            width: max-content;
            padding: var(--spacing-lg) var(--spacing-xl);
        }

        .mega-menu-content {
            display: flex;
            gap: 60px;
        }

        .mega-menu-column {
            display: flex;
            flex-direction: column;
        }

        .mega-menu-column h4 {
            color: var(--color-primary-dark-blue);
            font-size: var(--font-size-medium);
            margin-bottom: var(--spacing-sm);
            padding: 0 var(--spacing-md);
            padding-bottom: 8px;
            border-bottom: 1px solid var(--color-border-light);
        }

        .mega-menu-column ul {
            list-style: none;
        }

        .mega-menu-column ul li a {
            padding: 12px var(--spacing-md);
            font-size: var(--font-size-base);
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            cursor: pointer;
        }

        .hamburger .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px 0;
            background-color: var(--color-text-light);
            transition: var(--transition-normal);
        }

        /* --- 5. HEADER SCROLLED STATE --- */
        .site-header.scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: var(--shadow-header);
            height: var(--header-height-scrolled);
        }

        .site-header.scrolled .navbar-new {
            height: var(--header-height-scrolled);
        }

        .site-header.scrolled .logo-container img {
            height: 90px;
        }

        .site-header.scrolled .nav-item>a {
            color: var(--color-primary-dark-blue);
        }

        .site-header.scrolled .hamburger .bar {
            background-color: var(--color-primary-dark-blue);
        }

        .site-header.scrolled .logo-light {
            display: none;
        }

        .site-header.scrolled .logo-dark {
            display: block;
        }


        /* --- 6. website CONTENT STYLES --- */
        .uid92k-row {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            align-items: center;
        }

        .uid92k-col-lg-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .uid92k-col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .uid92k-hero-section {
            position: relative;
            width: 100%;
            /* <-- FIXED: Changed from 100vw to 100% */
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .uid92k-video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 2;
        }

        .uid92k-main-content {
            position: relative;
            top: 80px;
            width: 100%;
            max-width: 1300px;
            height: 70%;
            min-height: 300px;
            z-index: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: var(--spacing-lg);
            overflow: hidden;
        }

        .uid92k-slider-container {
            position: relative;
            width: 90%;
            height: 95%;
            margin: 0 auto;
            overflow: hidden;
            border-radius: var(--border-radius-md);
        }

        .uid92k-slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .uid92k-slide {
            min-width: 100%;
            height: 100%;
        }

        .uid92k-slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .uid92k-slider-nav {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            z-index: var(--z-index-slider-nav);
            padding: 0 var(--spacing-sm);
        }

        .uid92k-slider-nav-button {
            background-color: rgba(0, 0, 0, 0.2);
            color: var(--color-text-light);
            border: none;
            padding: var(--spacing-sm);
            cursor: pointer;
            font-size: var(--font-size-xl);
            border-radius: var(--spacing-xs);
            transition: background-color 0.3s;
        }

        .uid92k-slider-nav-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .uid92k-super-shiny-btn-v2 {
            position: relative;
            overflow: hidden;
            padding: var(--spacing-md) 30px;
            font-size: var(--font-size-medium);
            font-weight: var(--font-weight-bold);
            color: var(--color-text-light);
            background-color: var(--color-accent-orange);
            border: none;
            border-radius: var(--border-radius-pill);
            cursor: pointer;
            outline: none;
        }

        .uid92k-super-shiny-btn-v2::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transition: 0.5s;
            animation: shine 4s infinite linear;
        }

        @keyframes shine {
            0% {
                left: -100%;
            }

            50% {
                left: 100%;
            }

            100% {
                left: 100%;
            }
        }

        .uid92k-super-shiny-btn-v2 {
            animation: pulse 2.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(239, 153, 31, 0.7);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 10px 20px rgba(239, 153, 31, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(239, 153, 31, 0);
            }
        }

        /* --- 7. MOBILEVIEW CONTENT STYLES --- */
        .mobileview main {
            padding-top: var(--header-height-initial);
            /* To prevent content from hiding under the fixed header */
            text-align: center;
            padding: var(--spacing-lg);
        }


        /* --- 8. RESPONSIVE STYLES --- */
        @media (max-width: 992px) {

            /* View Switching */
            .website {
                display: none;
                /* Hide desktop content on mobile */
            }

            .mobileview {
                display: block;
                /* Show mobile content on mobile */
            }

            /* Common Header Adjustments */
            .nav-links {
                position: fixed;
                left: -100%;
                top: var(--header-height-initial);
                flex-direction: column;
                background-color: var(--color-background-light);
                width: 100%;
                height: calc(100vh - var(--header-height-initial));
                text-align: left;
                transition: left 0.4s ease-in-out;
                gap: 0;
                padding-top: var(--spacing-sm);
                overflow-y: auto;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-item {
                border-bottom: 1px solid var(--color-border-mobile);
            }

            .nav-item>a {
                display: flex;
                justify-content: space-between;
                padding: 20px var(--spacing-lg);
                color: var(--color-primary-dark-blue) !important;
            }

            .dropdown-menu a {
                margin: 2px 0;
                border-radius: 0;
            }

            .dropdown-menu,
            .submenu {
                position: static;
                box-shadow: none;
                border-radius: 0;
                display: none;
                background-color: var(--color-background-mobile-menu);
                padding-left: 20px;
                width: 100%;
                border-bottom: none;
                transform: none;
                opacity: 1;
                visibility: visible;
                transition: none;
            }

            .nav-item.open>.dropdown-menu,
            .has-submenu.open>.submenu {
                display: block;
            }

            .mega-menu {
                width: 100%;
                padding: 10px 0 10px 20px;
            }

            .mega-menu-content {
                flex-direction: column;
                gap: var(--spacing-md);
            }

            .mega-menu-column h4 {
                padding: 10px 0;
                border: none;
            }

            .mega-menu-column ul li a {
                padding: 10px var(--spacing-md);
            }

            .hamburger {
                display: block;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }
        }
    </style>
@endpush

@section('content')
    <div class="website">

        <div class="container">
            <header class="site-header">
                <div class="container">
                    <nav class="navbar-new">
                        <div class="logo-container">
                            <a href="#">
                                <img src="mobile-assets/logo/light_logo.png" alt="University Logo" class="logo-light">
                                <img src="demo-assets/logo/dark-logo.png" alt="University Logo" class="logo-dark">
                            </a>
                        </div>
                        <ul class="nav-links">
                            <li class="nav-item">
                                <a href="/research-publication">Publications</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="/research-patents">Patents</i></a>
                            </li>
                            <li class="nav-item dropdown" style="position: relative;">
                                <a class="nav-link dropdown-toggle para1" href="#"
                                    style="color: #fff; font-weight: 600; font-size: 17px;">Projects</a>
                                <ul class="dropdown-menu p-3"
                                    style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 300px; overflow: hidden; border-top: 3px solid #e68900;">
                                    <div class="row" style="display: flex;">
                                        <div class="col-lg-6 p-2">
                                            <li><a class="dropdown-item text-dark para1" href="{{ route('research-extramural') }}"
                                                    style="font-size: 18px; font-weight: 500; transition: background 0.3s ease; line-height: 1.4;">Extramural Projects</a></li>

                                            <li><a class="dropdown-item text-dark para1" href="{{ route('research-seed-grants-projects') }}"
                                                    style="font-size: 18px; font-weight: 500; transition: background 0.3s ease; line-height: 1.4;">RGU Seed Grant Projects</a></li>

                                            <li><a class="dropdown-item text-dark para1"
                                                    href="{{ route('research-consultancy-projects') }}"
                                                    style="font-size: 18px; font-weight: 500; transition: background 0.3s ease; line-height: 1.4;">Consultancy Projects</a>
                                            </li>

                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/research-department">Research at RGU</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="research-csif">CSIF</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="/research-r&d-team">R&D Team</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="/research-policies&ethics">Policies</i></a>
                            </li>

                        </ul>
                        <div class="hamburger">
                            <span class="bar"></span><span class="bar"></span><span class="bar"></span>
                        </div>
                    </nav>
                </div>

                <script>
                    // JavaScript remains unchanged as it is not affected by CSS variable implementation
                    document.addEventListener('DOMContentLoaded', () => {
                        // --- HEADER SCRIPT ---
                        const header = document.querySelector('.site-header');
                        const hamburger = document.querySelector('.hamburger');
                        const navLinks = document.querySelector('.nav-links');

                        window.addEventListener('scroll', () => {
                            if (window.scrollY > 50) header.classList.add('scrolled');
                            else header.classList.remove('scrolled');
                        });

                        hamburger.addEventListener('click', () => {
                            hamburger.classList.toggle('active');
                            navLinks.classList.toggle('active');
                        });

                        // FIXED: More robust logic for mobile dropdowns
                        document.querySelectorAll('.nav-links .nav-item > a').forEach(navLink => {
                            if (navLink.nextElementSibling && (navLink.nextElementSibling.classList.contains(
                                    'dropdown-menu') || navLink.nextElementSibling.classList.contains('submenu'))) {
                                navLink.addEventListener('click', function(e) {
                                    if (window.innerWidth <= 992) {
                                        e.preventDefault();
                                        const parentItem = this.parentElement;
                                        if (parentItem.parentElement === navLinks) {
                                            document.querySelectorAll('.nav-links > .nav-item.open').forEach(
                                                openItem => {
                                                    if (openItem !== parentItem) {
                                                        openItem.classList.remove('open');
                                                    }
                                                });
                                        } else {
                                            parentItem.parentElement.querySelectorAll('.has-submenu.open')
                                                .forEach(openItem => {
                                                    if (openItem !== parentItem) {
                                                        openItem.classList.remove('open');
                                                    }
                                                });
                                        }
                                        parentItem.classList.toggle('open');
                                    }
                                });
                            }
                        });
                        document.querySelectorAll('.dropdown-menu .has-submenu > a').forEach(submenuLink => {
                            submenuLink.addEventListener('click', function(e) {
                                if (window.innerWidth <= 992) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                    const parentSubItem = this.parentElement;
                                    parentSubItem.parentElement.querySelectorAll('.has-submenu.open').forEach(
                                        openItem => {
                                            if (openItem !== parentSubItem) {
                                                openItem.classList.remove('open');
                                            }
                                        });
                                    parentSubItem.classList.toggle('open');
                                }
                            })
                        });


                        // --- SLIDER SCRIPT (Only runs if .website is visible) ---
                        const websiteContainer = document.querySelector('.website');
                        if (getComputedStyle(websiteContainer).display !== 'none') {
                            const slidesContainer = document.querySelector('.uid92k-slides');
                            if (slidesContainer) {
                                const slides = document.querySelectorAll('.uid92k-slide');
                                const prevBtn = document.getElementById('prevBtn');
                                const nextBtn = document.getElementById('nextBtn');
                                let currentIndex = 0;
                                const slideCount = slides.length;
                                let autoSlideInterval;

                                const goToSlide = (index) => {
                                    slidesContainer.style.transform = `translateX(-${index * 100}%)`;
                                };

                                const nextSlide = () => {
                                    currentIndex = (currentIndex + 1) % slideCount;
                                    goToSlide(currentIndex);
                                };

                                const startAutoSlide = () => {
                                    autoSlideInterval = setInterval(nextSlide, 5000);
                                };

                                nextBtn.addEventListener('click', () => {
                                    clearInterval(autoSlideInterval);
                                    nextSlide();
                                    startAutoSlide();
                                });

                                prevBtn.addEventListener('click', () => {
                                    clearInterval(autoSlideInterval);
                                    currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                                    goToSlide(currentIndex);
                                    startAutoSlide();
                                });

                                startAutoSlide();
                            }
                        }
                    });
                </script>
            </header>
        </div>

        <main style="background-image: url(mobile-assets/research-development/bg.svg); background-size: cover;">

            <!-- hero section  -->
            <section class="uid92k-hero-section">
                <div class="uid92k-video-overlay"></div>
                <video autoplay muted loop id="bg-video">
                    <source src="https://media.rgu.ac/head-video/v-2.mp4" type="video/mp4">
                </video>

                <div class="uid92k-main-content">
                    <div class="uid92k-slider-container">
                        <div class="uid92k-slides">
                            <div class="uid92k-slide"><img src="mobile-assets/research-development/slider/slider1.png"
                                    alt="About RGU"></div>
                            <div class="uid92k-slide"><img src="mobile-assets/research-development/slider/slider2.png"
                                    alt="Research at RGU"></div>
                            <div class="uid92k-slide"><img src="mobile-assets/research-development/slider/slider3.png"
                                    alt="About RGU"></div>

                        </div>
                        <div class="uid92k-slider-nav">
                            <button class="uid92k-slider-nav-button" id="prevBtn">&#10094;</button>
                            <button class="uid92k-slider-nav-button" id="nextBtn">&#10095;</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero section  -->

            <!-- eco system  -->
            <section
                style="background-image: url(mobile-assets/research-development/bg.svg); background-size: cover;">
                <style>
                    /* --- Animation Setup --- */
                    #res-eco-anim-section {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        /* Using vw for responsive padding */
                        padding: 4.4vw 1.1vw;
                        overflow: hidden;
                    }

                    .res-eco-anim-main-container {
                        position: relative;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        /* Using vw for responsive gap */
                        gap: 1.1vw;
                        flex-wrap: wrap;
                        max-width: 1800px;
                    }

                    .res-eco-anim-stats-column {
                        display: flex;
                        flex-direction: column;
                        /* Using vw for responsive gap */
                        gap: 2.5vw;
                        z-index: 5;
                    }

                    .res-eco-anim-card-image {
                        /* Using vw for responsive width, based on 350px @ 1800px viewport */
                        width: 22vw;
                        height: auto;
                        display: block;
                        opacity: 0;
                        transform: scale(0.5);
                        transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.4s ease-out;
                    }

                    .res-eco-anim-ecosystem-image-container {
                        z-index: 10;
                        position: relative;
                    }

                    .res-eco-anim-ecosystem-image {
                        /* Using vw for responsive size, based on 450px @ 1800px viewport */
                        width: 35vw;
                        height: 35vw;
                        display: block;
                    }

                    /* --- Staggered Effect --- */
                    .res-eco-anim-main-container .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(2) {
                        /* Using vw for responsive transform */
                        transform: translateX(-1.4vw) scale(0.5);
                    }

                    .res-eco-anim-main-container .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(2) {
                        /* Using vw for responsive transform */
                        transform: translateX(1.4vw) scale(0.5);
                    }

                    /* --- Animation Trigger State --- */
                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-card-image {
                        opacity: 1;
                        transform: scale(1);
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(2) {
                        /* Using vw for responsive transform */
                        transform: translateX(-1.7vw) scale(1);
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(2) {
                        /* Using vw for responsive transform */
                        transform: translateX(1.7vw) scale(1);
                    }

                    /* Transition Delays (No change needed) */
                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(1) {
                        transition-delay: 0.2s;
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(2) {
                        transition-delay: 0s;
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(3) {
                        transition-delay: 0.3s;
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(1) {
                        transition-delay: 0.2s;
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(2) {
                        transition-delay: 0s;
                    }

                    #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(3) {
                        transition-delay: 0.3s;
                    }

                    /* --- Responsive Adjustments --- */

                    /* Cap the size on very large screens to prevent it from being too big */
                    @media (min-width: 1800px) {
                        .res-eco-anim-card-image {
                            width: 350px;
                        }

                        .res-eco-anim-ecosystem-image {
                            width: 450px;
                            height: 450px;
                        }

                        #res-eco-anim-section {
                            padding: 80px 20px;
                        }

                        .res-eco-anim-main-container {
                            gap: 20px;
                        }

                        .res-eco-anim-stats-column {
                            gap: 30px;
                        }

                        /* Stagger effect max size */
                        .res-eco-anim-main-container .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(2) {
                            transform: translateX(-25px) scale(0.5);
                        }

                        .res-eco-anim-main-container .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(2) {
                            transform: translateX(25px) scale(0.5);
                        }

                        /* Animation trigger max size */
                        #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:first-of-type .res-eco-anim-card-image:nth-child(2) {
                            transform: translateX(-30px) scale(1);
                        }

                        #res-eco-anim-section.res-eco-anim-in-view .res-eco-anim-stats-column:last-of-type .res-eco-anim-card-image:nth-child(2) {
                            transform: translateX(30px) scale(1);
                        }
                    }

                    @media (max-width: 1100px) {
                        .res-eco-anim-main-container {
                            flex-direction: column;
                            gap: 30px;
                        }

                        .res-eco-anim-stats-column {
                            flex-direction: row;
                            width: auto;
                            justify-content: center;
                            flex-wrap: wrap;
                        }
                    }

                    @media (max-width: 700px) {
                        .res-eco-anim-stats-column {
                            flex-direction: column;
                            align-items: center;
                        }

                        /* On small screens, override vw with a more stable value */
                        .res-eco-anim-card-image {
                            width: 100%;
                            max-width: 290px;
                        }
                    }

                    @media (max-width: 550px) {

                        /* On very small screens, set a fixed size for the central image */
                        .res-eco-anim-ecosystem-image {
                            width: 320px;
                            height: 320px;
                        }
                    }
                </style>

                <section id="res-eco-anim-section">
                    <div class="res-eco-anim-main-container">
                        <div class="res-eco-anim-stats-column">
                            <img src="mobile-assets/research-development/ecosystem/1.png" alt="Publication Stats Card"
                                class="res-eco-anim-card-image">
                            <img src="mobile-assets/research-development/ecosystem/2.png" alt="Patents Stats Card"
                                class="res-eco-anim-card-image">
                            <img src="mobile-assets/research-development/ecosystem/3.png" alt="Papers Stats Card"
                                class="res-eco-anim-card-image">
                        </div>

                        <div class="res-eco-anim-ecosystem-image-container">
                            <img src="mobile-assets/research-development/ecosystem/center.png"
                                alt="Research Ecosystem Diagram" class="res-eco-anim-ecosystem-image">
                        </div>

                        <div class="res-eco-anim-stats-column">
                            <img src="mobile-assets/research-development/ecosystem/4.png" alt="Book Chapter Stats Card"
                                class="res-eco-anim-card-image">
                            <img src="mobile-assets/research-development/ecosystem/5.png" alt="Consultancy Stats Card"
                                class="res-eco-anim-card-image">
                            <img src="mobile-assets/research-development/ecosystem/6.png" alt="Projects Stats Card"
                                class="res-eco-anim-card-image">
                        </div>
                    </div>
                </section>

                <script>
                    // No changes are needed in the JavaScript for this scaling adjustment.
                    const resEcoAnimSection = document.querySelector('#res-eco-anim-section');

                    const resEcoAnimObserverOptions = {
                        root: null,
                        rootMargin: '0px',
                        threshold: 0.1
                    };

                    const resEcoAnimObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                resEcoAnimSection.classList.add('res-eco-anim-in-view');
                                observer.unobserve(entry.target);
                            }
                        });
                    }, resEcoAnimObserverOptions);

                    resEcoAnimObserver.observe(resEcoAnimSection);
                </script>
            </section>
            <!-- eco system  -->

            <!-- facilities  -->
            <section>
                <style>
                    /* --- Container and Layout Styles --- */
                    .rgu-tabs-wrapper {
                        padding: 20px 30px;
                        max-width: 1250px;
                        /* Limits the container width */
                        margin: 0 auto;
                        /* Centers the container horizontally */
                    }

                    .rgu-title-center {
                        text-align: center;
                        padding: 20px 30px 0;
                    }

                    /* Ensure the main section respects the height */
                    .rgu-main-section {
                        display: flex;
                        flex-direction: column;
                        justify-content: flex-start;
                    }

                    /* --- Tab Button Styles (No changes from previous request) --- */
                    .rgu-tab-button-group {
                        display: flex;
                        justify-content: center;
                        margin-top: 20px;
                        margin-bottom: 20px;
                        gap: 15px;
                    }

                    .rgu-tab-button {
                        background-color: #f0f0f0;
                        color: #333;
                        border: 1px solid #ccc;
                        padding: 12px 28px;
                        cursor: pointer;
                        font-size: 16px;
                        font-weight: 600;
                        border-radius: 25px;
                        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
                        text-decoration: none;
                        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                    }

                    .rgu-tab-button:hover:not(.rgu-tab-active) {
                        background-color: #e0e0e0;
                    }

                    .rgu-tab-button.rgu-tab-active {
                        background-color: #EF991F;
                        color: #1a3258;
                        border: 1px solid #EF991F;
                        box-shadow: 0 4px 8px rgba(239, 153, 31, 0.4);
                    }

                    /* --- Tab Content Container and Layout Styles --- */
                    .rgu-tab-content-container {

                        background-color: #fff;
                        padding: 30px;
                        border-radius: 8px;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                        min-height: 340px;
                        color: #333;

                    }

                    .rgu-tab-content h3 {
                        color: #1a3258;
                        border-bottom: 2px solid #EF991F;
                        padding-bottom: 5px;
                        margin-top: 0;
                        margin-bottom: 15px;
                    }

                    /* Column/Row Concept with Flexbox */
                    .rgu-content-row {
                        display: flex;
                        gap: 30px;
                        /* Space between columns */
                        align-items: flex-start;
                        /* Aligns items to the top */
                    }

                    .rgu-col-left {
                        flex: 2;
                        /* Takes 2/3 of the space */
                        max-width: 45%;
                    }

                    .rgu-col-right {
                        flex: 1;
                        /* Takes 1/3 of the space */
                        max-width: 50%;
                        padding-top: 20px;
                        /* Align image better with content */
                    }

                    .rgu-col-right img {
                        width: 100%;
                        height: auto;
                        border-radius: 8px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    }

                    /* End Column/Row Styling */

                    /* Hide all content by default */
                    .rgu-tab-content {
                        display: none;
                        animation: rguTabFadeIn 0.5s;
                    }

                    /* Show active content */
                    .rgu-tab-content.rgu-tab-active {
                        display: block;
                    }

                    @keyframes rguTabFadeIn {
                        from {
                            opacity: 0;
                            transform: translateY(10px);
                        }

                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    /* Responsive Breakpoint (Simple example for mobile) */
                    @media (max-width: 768px) {
                        .rgu-content-row {
                            flex-direction: column;
                        }

                        .rgu-col-left,
                        .rgu-col-right {
                            flex: none;
                            max-width: 100%;
                            padding-top: 10px;
                        }
                    }
                </style>

                <section class="rgu-main-section" style="background-color: #1a3258; height: 60vh;">

                    <div class="rgu-title-center">
                        <h2 style="color: #fff; font-weight: 700; font-size: 40px; padding-top: 30px;">List of Research
                            <span style="color: #EF991F; font-weight: 600; font-size: 40px;">Facilities Available at
                                RGU</span>
                        </h2>
                    </div>

                    <div class="rgu-tabs-wrapper">
                        <div class="rgu-tab-button-group">
                            <button class="rgu-tab-button rgu-tab-active"
                                data-rgu-tab-target="rgu-tab-1">Instrumentation</button>
                            <button class="rgu-tab-button" data-rgu-tab-target="rgu-tab-2">Animal Research
                                Facility</button>
                            <button class="rgu-tab-button" data-rgu-tab-target="rgu-tab-3">Food Technology Lab</button>
                            <button class="rgu-tab-button" data-rgu-tab-target="rgu-tab-4">Pharmaceutical research
                                lab</button>
                            <button class="rgu-tab-button" data-rgu-tab-target="rgu-tab-5">Biotechnology lab</button>
                            <button class="rgu-tab-button" data-rgu-tab-target="rgu-tab-6">Seed Money grant</button>
                        </div>

                        <div class="rgu-tab-content-container">

                            <div id="rgu-tab-1" class="rgu-tab-content rgu-tab-active">
                                <div class="rgu-content-row">
                                    <div class="rgu-col-left">
                                        <h3 style="font-size: 30px; padding-bottom: 10px;">
                                            Central Instrumental facility
                                        </h3>

                                        <p
                                            style="line-height: 1.5; font-size: 20px; text-align: justify; padding-bottom: 35px;">
                                            Dedicated laboratories for specific disciplines such as Biotechnology,
                                            Engineering, and Pharmaceutical Sciences. These labs are equipped for
                                            **routine
                                            and specialized experiments** relevant to the department's focus.</p>

                                        <a style="padding: 10px 13px; background-color: #EF991F; color: #fff; border-radius: 12px; text-decoration: none; font-weight: 700;"
                                            href="">View Detail</a>

                                    </div>
                                    <div class="rgu-col-right">
                                        <img src="mobile-assets/research-development/facilities/1.png"
                                            alt="Central Instrumentation Lab">
                                    </div>
                                </div>
                            </div>

                            <div id="rgu-tab-2" class="rgu-tab-content">
                                <div class="rgu-content-row">
                                    <div class="rgu-col-left">
                                        <h3 style="font-size: 30px; padding-bottom: 10px;">
                                            Animal research facility
                                        </h3>

                                        <p
                                            style="line-height: 1.5; font-size: 20px; text-align: justify; padding-bottom: 35px;">
                                            Dedicated laboratories for specific disciplines such as Biotechnology,
                                            Engineering, and Pharmaceutical Sciences. These labs are equipped for
                                            **routine
                                            and specialized experiments** relevant to the department's focus.</p>

                                        <a style="padding: 10px 13px; background-color: #EF991F; color: #fff; border-radius: 12px; text-decoration: none; font-weight: 700;"
                                            href="">View Detail</a>

                                    </div>
                                    <div class="rgu-col-right">
                                        <img src="mobile-assets/research-development/facilities/2.png"
                                            alt="Departmental Lab Facility">
                                    </div>
                                </div>
                            </div>

                            <div id="rgu-tab-3" class="rgu-tab-content">
                                <div class="rgu-content-row">
                                    <div class="rgu-col-left">
                                        <h3 style="font-size: 30px; padding-bottom: 10px;">
                                            Food technology lab
                                        </h3>

                                        <p
                                            style="line-height: 1.5; font-size: 20px; text-align: justify; padding-bottom: 35px;">
                                            Dedicated laboratories for specific disciplines such as Biotechnology,
                                            Engineering, and Pharmaceutical Sciences. These labs are equipped for
                                            **routine
                                            and specialized experiments** relevant to the department's focus.</p>

                                        <a style="padding: 10px 13px; background-color: #EF991F; color: #fff; border-radius: 12px; text-decoration: none; font-weight: 700;"
                                            href="">View Detail</a>

                                    </div>
                                    <div class="rgu-col-right">
                                        <img src="mobile-assets/research-development/facilities/3.png"
                                            alt="High Performance Computing Cluster">
                                    </div>
                                </div>
                            </div>

                            <div id="rgu-tab-4" class="rgu-tab-content">
                                <div class="rgu-content-row">
                                    <div class="rgu-col-left">
                                        <h3 style="font-size: 30px; padding-bottom: 10px;">Pharmaceutical research lab

                                        </h3>

                                        <p
                                            style="line-height: 1.5; font-size: 20px; text-align: justify; padding-bottom: 35px;">
                                            Dedicated laboratories for specific disciplines such as Biotechnology,
                                            Engineering, and Pharmaceutical Sciences. These labs are equipped for
                                            **routine
                                            and specialized experiments** relevant to the department's focus.</p>

                                        <a style="padding: 10px 13px; background-color: #EF991F; color: #fff; border-radius: 12px; text-decoration: none; font-weight: 700;"
                                            href="">View Detail</a>

                                    </div>
                                    <div class="rgu-col-right">
                                        <img src="mobile-assets/research-development/headimg.JPG"
                                            alt="University Library Interior">
                                    </div>
                                </div>
                            </div>

                            <div id="rgu-tab-5" class="rgu-tab-content">
                                <div class="rgu-content-row">
                                    <div class="rgu-col-left">
                                        <h3 style="font-size: 30px; padding-bottom: 10px;">Biotechnology lab

                                        </h3>

                                        <p
                                            style="line-height: 1.5; font-size: 20px; text-align: justify; padding-bottom: 35px;">
                                            Dedicated laboratories for specific disciplines such as Biotechnology,
                                            Engineering, and Pharmaceutical Sciences. These labs are equipped for
                                            **routine
                                            and specialized experiments** relevant to the department's focus.</p>

                                        <a style="padding: 10px 13px; background-color: #EF991F; color: #fff; border-radius: 12px; text-decoration: none; font-weight: 700;"
                                            href="">View Detail</a>

                                    </div>
                                    <div class="rgu-col-right">
                                        <img src="mobile-assets/research-development/headimg.JPG"
                                            alt="University Library Interior">
                                    </div>
                                </div>
                            </div>

                            <div id="rgu-tab-6" class="rgu-tab-content">
                                <div class="rgu-content-row">
                                    <div class="rgu-col-left">
                                        <h3 style="font-size: 30px; padding-bottom: 10px;">Seed Money grant for
                                            faculties & students

                                        </h3>

                                        <p
                                            style="line-height: 1.5; font-size: 20px; text-align: justify; padding-bottom: 35px;">
                                            Dedicated laboratories for specific disciplines such as Biotechnology,
                                            Engineering, and Pharmaceutical Sciences. These labs are equipped for
                                            **routine
                                            and specialized experiments** relevant to the department's focus.</p>

                                        <a style="padding: 10px 13px; background-color: #EF991F; color: #fff; border-radius: 12px; text-decoration: none; font-weight: 700;"
                                            href="">View Detail</a>

                                    </div>
                                    <div class="rgu-col-right">
                                        <img src="mobile-assets/research-development/headimg.JPG"
                                            alt="University Library Interior">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <script>
                    // Unique JavaScript function name: rguTabInit
                    function rguTabInit() {
                        // Unique variable names: rguTabButtons, rguTabContents
                        const rguTabButtons = document.querySelectorAll('.rgu-tab-button');
                        const rguTabContents = document.querySelectorAll('.rgu-tab-content');

                        rguTabButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const targetId = button.getAttribute('data-rgu-tab-target');

                                // 1. Deactivate all buttons
                                rguTabButtons.forEach(btn => btn.classList.remove('rgu-tab-active'));

                                // 2. Hide all content
                                rguTabContents.forEach(content => content.classList.remove('rgu-tab-active'));

                                // 3. Activate the clicked button
                                button.classList.add('rgu-tab-active');

                                // 4. Show the corresponding content
                                const targetContent = document.getElementById(targetId);
                                if (targetContent) {
                                    targetContent.classList.add('rgu-tab-active');
                                }
                            });
                        });
                    }

                    // Initialize the tabs once the DOM is ready
                    document.addEventListener('DOMContentLoaded', rguTabInit);
                </script>
            </section>
            <!-- facilities  -->

            <!-- Scopus Publication  -->
            <section style="background-color: #1a3258; padding-bottom: 40px;">
                <div style="margin-top: 300px;" class="endless-scroll-container">

                    <h2 style="color: #ffff; font-weight: 600; font-size: 40px; padding-top: 25px; padding-bottom: 30px;">
                        Scopus Publication
                        <span style="color: #EF991F; font-weight: 600; font-size: 40px;">at RGU</span>
                    </h2>

                    <div class="scroll-track-wrapper">
                        <div class="scroll-content-images unique-set-alpha">
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-1.jpg"
                                    alt="Image 1" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-2.jpg"
                                    alt="Image 2" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-3.jpg"
                                    alt="Image 3" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-4.jpg"
                                    alt="Image 4" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-5.jpg"
                                    alt="Image 5" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-6.jpg"
                                    alt="Image 6" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-7.jpg"
                                    alt="Image 7" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-8.jpg"
                                    alt="Image 8" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-9.jpg"
                                    alt="Image 9" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-10.jpg"
                                    alt="Image 10" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-11.jpg"
                                    alt="Image 11" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-12.jpg"
                                    alt="Image 12" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-13.jpg"
                                    alt="Image 13" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                        </div>
                        <div class="scroll-content-images unique-set-beta">
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-1.jpg"
                                    alt="Image 1" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-2.jpg"
                                    alt="Image 2" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-3.jpg"
                                    alt="Image 3" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-4.jpg"
                                    alt="Image 4" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-5.jpg"
                                    alt="Image 5" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-6.jpg"
                                    alt="Image 6" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-7.jpg"
                                    alt="Image 7" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-8.jpg"
                                    alt="Image 8" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-9.jpg"
                                    alt="Image 9" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-10.jpg"
                                    alt="Image 10" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-11.jpg"
                                    alt="Image 11" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-12.jpg"
                                    alt="Image 12" class="scroller-image" onclick="openLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame">
                                <img src="mobile-assets/research-development/scopus/Scopus-Publication-RGU-13.jpg"
                                    alt="Image 13" class="scroller-image" onclick="openLightbox(this.src)">
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
                        width: 750px;
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
            <!-- Scopus Publication  -->

            <!-- messages  -->
            <section>
                <img style="width: 100%;" src="mobile-assets/research-development/message2.png" alt="">
            </section>
            <!-- messages  -->

            <!-- journals published  -->
            <section style="background-color: #1a3258; padding-bottom: 40px;">

                <div class="endless-scroll-container-reverse">

                    <h2 style="color: #ffff; font-weight: 600; font-size: 40px; padding-top: 25px; padding-bottom: 30px;">
                        Journals Published
                        <span style="color: #EF991F; font-weight: 600; font-size: 40px;">at RGU</span>
                    </h2>

                    <div class="scroll-track-wrapper-reverse">
                        <div class="scroll-content-images-reverse unique-set-alpha-reverse">
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-1.jpg" alt="Image 1"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-2.jpg" alt="Image 2"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-3.png" alt="Image 3"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-4.jpg" alt="Image 4"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-5.jpeg" alt="Image 5"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-6.jpg" alt="Image 6"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-7.jpeg" alt="Image 7"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-8.jpeg" alt="Image 8"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-9.jpg" alt="Image 9"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-10.jpg" alt="Image 10"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-11.jpg" alt="Image 11"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-12.png" alt="Image 12"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-13.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-14.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-15.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-16.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-17.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-18.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-19.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                        </div>

                        <div class="scroll-content-images-reverse unique-set-beta-reverse">
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-1.jpg" alt="Image 1"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-2.jpg" alt="Image 2"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-3.png" alt="Image 3"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-4.jpg" alt="Image 4"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-5.jpeg" alt="Image 5"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-6.jpg" alt="Image 6"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-7.jpeg" alt="Image 7"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-8.jpeg" alt="Image 8"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-9.jpg" alt="Image 9"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-10.jpg" alt="Image 10"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-11.jpg" alt="Image 11"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-12.png" alt="Image 12"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-13.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-14.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-15.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-16.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-17.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-18.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                            <div class="slider-image-frame-reverse">
                                <img src="mobile-assets/research-development/journals/book-19.jpg" alt="Image 13"
                                    class="scroller-image-reverse" onclick="openReverseLightbox(this.src)">
                            </div>
                        </div>
                    </div>

                </div>

                <div id="lightbox-reverse" class="lightbox-reverse" onclick="closeReverseLightbox(event)">
                    <span class="close-btn-reverse">&times;</span>

                    <div class="lightbox-controls-reverse">
                        <button id="zoom-in-reverse" title="Zoom In">+</button>
                        <button id="zoom-out-reverse" title="Zoom Out">-</button>
                    </div>

                    <img class="lightbox-content-reverse" id="lightbox-img-reverse" src="" alt="">
                </div>

                <style>
                    .endless-scroll-container-reverse {
                        margin: auto;
                        width: 95%;
                        overflow: hidden;
                        padding: 10px 0;
                        border-bottom: 2px solid #EF991F;
                    }

                    .scroll-track-wrapper-reverse {
                        display: flex;
                        width: fit-content;
                        animation: scroll-movement-reverse 120s linear infinite;
                    }

                    .scroll-track-wrapper-reverse:hover {
                        animation-play-state: paused;
                    }

                    .scroll-content-images-reverse {
                        display: flex;
                    }

                    .slider-image-frame-reverse {
                        width: 330px;
                        height: 470px;
                        margin-right: 20px;
                        flex-shrink: 0;
                        overflow: hidden;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        background-color: #fff;
                    }

                    .scroller-image-reverse {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        display: block;
                        cursor: pointer;
                        transition: opacity 0.3s;
                    }

                    .lightbox-reverse {
                        display: none;
                        position: fixed;
                        z-index: 1000;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.9);
                        overflow: hidden;
                        /* Changed from auto to hidden */
                    }

                    .lightbox-content-reverse {
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
                        /* Reusing the same zoom animation */
                        animation-duration: 0.6s;
                        cursor: grab;
                        /* NEW: Indicate it's grabbable */
                        transition: transform 0.2s ease-out;
                        /* NEW: Smooth transitions for zoom/pan */
                    }

                    .close-btn-reverse {
                        position: absolute;
                        top: 20px;
                        right: 35px;
                        color: #fff;
                        font-size: 40px;
                        font-weight: bold;
                        transition: 0.3s;
                        cursor: pointer;
                        z-index: 1002;
                    }

                    .close-btn-reverse:hover,
                    .close-btn-reverse:focus {
                        color: #bbb;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    /* NEW: Styles for Zoom Controls */
                    .lightbox-controls-reverse {
                        position: absolute;
                        top: 25px;
                        right: 90px;
                        z-index: 1001;
                        display: flex;
                        gap: 10px;
                    }

                    .lightbox-controls-reverse button {
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

                    .lightbox-controls-reverse button:hover {
                        background-color: rgba(0, 0, 0, 0.9);
                    }

                    /* The zoom keyframes are generic and can be reused */
                    @keyframes zoom {
                        from {
                            transform: translate(-50%, -50%) scale(0.1);
                        }

                        to {
                            transform: translate(-50%, -50%) scale(1);
                        }
                    }

                    @keyframes scroll-movement-reverse {
                        from {
                            transform: translateX(-50%);
                        }

                        to {
                            transform: translateX(0%);
                        }
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const setAlphaReverse = document.querySelector('.unique-set-alpha-reverse');
                        const trackWrapperReverse = document.querySelector('.scroll-track-wrapper-reverse');

                        if (setAlphaReverse && !document.querySelector('.unique-set-beta-reverse')) {
                            const setBetaReverse = setAlphaReverse.cloneNode(true);
                            setBetaReverse.classList.remove('unique-set-alpha-reverse');
                            setBetaReverse.classList.add('unique-set-beta-reverse');
                            trackWrapperReverse.appendChild(setBetaReverse);
                        }
                    });

                    // --- NEW/UPDATED: Reverse Lightbox and Zoom/Pan Logic ---

                    const lightboxReverse = document.getElementById('lightbox-reverse');
                    const lightboxImgReverse = document.getElementById('lightbox-img-reverse');
                    const zoomInBtnReverse = document.getElementById('zoom-in-reverse');
                    const zoomOutBtnReverse = document.getElementById('zoom-out-reverse');

                    // State variables specific to this "reverse" instance
                    let scaleReverse = 1;
                    let isDraggingReverse = false;
                    let startReverse = {
                        x: 0,
                        y: 0
                    };
                    let panReverse = {
                        x: 0,
                        y: 0
                    };

                    function updateReverseImageTransform() {
                        lightboxImgReverse.style.transform =
                            `translate(calc(-50% + ${panReverse.x}px), calc(-50% + ${panReverse.y}px)) scale(${scaleReverse})`;
                    }

                    function openReverseLightbox(src) {
                        // Reset state for the reverse lightbox
                        scaleReverse = 1;
                        isDraggingReverse = false;
                        panReverse = {
                            x: 0,
                            y: 0
                        };
                        updateReverseImageTransform();

                        lightboxReverse.style.display = 'block';
                        lightboxImgReverse.src = src;
                    }

                    function closeReverseLightbox(event) {
                        if (event.target === lightboxReverse || event.target.classList.contains('close-btn-reverse')) {
                            lightboxReverse.style.display = 'none';
                        }
                    }

                    // --- Event Listeners for Reverse Zoom and Pan ---

                    zoomInBtnReverse.addEventListener('click', (e) => {
                        e.stopPropagation();
                        scaleReverse += 0.2;
                        updateReverseImageTransform();
                    });

                    zoomOutBtnReverse.addEventListener('click', (e) => {
                        e.stopPropagation();
                        if (scaleReverse > 1) {
                            scaleReverse -= 0.2;
                            if (scaleReverse < 1) {
                                scaleReverse = 1;
                            }
                        }
                        if (scaleReverse === 1) {
                            panReverse = {
                                x: 0,
                                y: 0
                            };
                        }
                        updateReverseImageTransform();
                    });

                    lightboxImgReverse.addEventListener('mousedown', (e) => {
                        if (scaleReverse > 1) {
                            e.preventDefault();
                            isDraggingReverse = true;
                            startReverse = {
                                x: e.clientX - panReverse.x,
                                y: e.clientY - panReverse.y
                            };
                            lightboxImgReverse.style.cursor = 'grabbing';
                        }
                    });

                    window.addEventListener('mousemove', (e) => {
                        if (isDraggingReverse) {
                            e.preventDefault();
                            panReverse = {
                                x: e.clientX - startReverse.x,
                                y: e.clientY - startReverse.y
                            };
                            updateReverseImageTransform();
                        }
                    });

                    window.addEventListener('mouseup', (e) => {
                        if (isDraggingReverse) {
                            isDraggingReverse = false;
                            lightboxImgReverse.style.cursor = 'grab';
                        }
                    });
                </script>
            </section>
            <!-- journals published  -->

            <!-- MoU Signed  -->
            <section>
                <style>
                    /* --- General Styling (with 'gpa-' prefix) --- */
                    .section-gpa {
                        /* background-color: #f4f7f9; */
                        color: #333;
                        margin: 0;
                        padding: 2rem;
                        display: flex;
                        justify-content: center;
                    }

                    .gpa-container {
                        width: 100%;
                        max-width: 1700px;
                    }

                    /* --- Accordion Styling --- */
                    .gpa-accordion-item {
                        background-color: #ffffff;
                        border-radius: 8px;
                        margin-bottom: .5rem;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                        overflow: hidden;
                        transition: box-shadow 0.3s ease-in-out;
                    }

                    .gpa-accordion-item:hover {
                        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
                    }

                    .gpa-accordion-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 1rem 1.5rem;
                        cursor: pointer;
                        background-color: #ffffff;
                        border-bottom: 1px solid #e0e6ed;
                        user-select: none;
                    }

                    .gpa-accordion-item.gpa-active .gpa-accordion-header {
                        border-bottom-color: transparent;
                    }

                    .gpa-accordion-header h3 {
                        margin: 0;
                        font-size: 1.1rem;
                        font-weight: 600;
                    }

                    .gpa-accordion-icon {
                        font-size: 1.5rem;
                        font-weight: bold;
                        transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
                        color: #1A3258;
                    }

                    .gpa-accordion-item.gpa-active .gpa-accordion-icon {
                        transform: rotate(45deg);
                    }

                    .gpa-accordion-content {
                        max-height: 0;
                        opacity: 0;
                        overflow: hidden;
                        transition: max-height 0.5s cubic-bezier(0.25, 0.8, 0.25, 1),
                            opacity 0.3s ease-in-out,
                            padding 0.4s ease;
                        padding: 0 1.5rem;
                    }

                    .gpa-accordion-item.gpa-active .gpa-accordion-content {
                        opacity: 1;
                        padding: 1rem 1.5rem 1.5rem;
                        border-top: 1px solid #e0e6ed;
                    }

                    /* --- Table Styling --- */
                    .gpa-data-table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-bottom: 1rem;
                        border: 1px solid #e0e6ed;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                    }

                    .gpa-data-table th,
                    .gpa-data-table td {
                        padding: 12px 15px;
                        text-align: left;
                        border: 1px solid #e0e6ed;
                    }

                    .gpa-data-table td img {
                        max-width: 100px;
                        border-radius: 5px;
                    }

                    .gpa-data-table th {
                        background-color: #dbe7f7;
                        color: #2a2a2a;
                        font-weight: 600;
                        text-transform: uppercase;
                        font-size: 0.8rem;
                        letter-spacing: 0.5px;
                    }

                    .gpa-data-table tbody tr:nth-child(even) {
                        background-color: #fdfdfd;
                    }

                    .gpa-data-table tbody tr:hover {
                        background-color: #f0f7ff;
                    }

                    /* --- Pagination Styling --- */
                    .gpa-pagination-controls {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        gap: 8px;
                        padding: 10px 0px 30px 0px;
                    }

                    .gpa-pagination-btn {
                        border: 1px solid #e0e6ed;
                        background-color: #ffffff;
                        color: #4a90e2;
                        border-radius: 5px;
                        padding: 8px 12px;
                        cursor: pointer;
                        font-weight: 600;
                        transition: background-color 0.2s, color 0.2s;
                    }

                    .gpa-pagination-btn:hover {
                        background-color: #4a90e2;
                        color: #ffffff;
                    }

                    .gpa-pagination-btn.gpa-active {
                        background-color: #4a90e2;
                        color: #ffffff;
                        border-color: #4a90e2;
                    }

                    .gpa-pagination-btn:disabled {
                        cursor: not-allowed;
                        opacity: 0.6;
                    }
                </style>

                <section class="section-gpa">
                    <div class="gpa-container">
                        <h2
                            style="color: #1A3258; font-weight: 700; font-size: 40px; padding-top: 30px; text-align: center; margin-bottom: 2rem;">
                            Signed MoU of
                            <span style="color: #EF991F; font-weight: 600; font-size: 40px;">
                                the organization
                            </span>
                        </h2>

                        <div class="gpa-accordion-item">
                            <div class="gpa-accordion-header">
                                <h3>School of Language</h3>
                                <span class="gpa-accordion-icon">+</span>
                            </div>
                            <div class="gpa-accordion-content">
                                <table class="gpa-data-table">
                                    <thead>
                                        <tr>
                                            <th>Name of School/Department</th>
                                            <th>MoU partner Name</th>
                                            <th>Date</th>
                                            <th>Nature of the activity</th>
                                            <th>Outcome</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>School of Language</td>
                                            <td>Indira Gandhi National Centre for the Arts, Regional Centre, Guwahati</td>
                                            <td>14-08-2025</td>
                                            <td>Commemoration of Partition Horrors Remembrance Day 2025, Seminar on
                                                "Partition and It's Remembrances"</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="gpa-pagination-controls"></div>
                            </div>
                        </div>

                        <div class="gpa-accordion-item">
                            <div class="gpa-accordion-header">
                                <h3>School of Pharmacy</h3>
                                <span class="gpa-accordion-icon">+</span>
                            </div>
                            <div class="gpa-accordion-content">
                                <table class="gpa-data-table">
                                    <thead>
                                        <tr>
                                            <th>Name of School/Department</th>
                                            <th>MoU partner Name</th>
                                            <th>Date</th>
                                            <th>Nature of the activity</th>
                                            <th>Outcome</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NIPER Guwahati</td>
                                            <td>Innovation and Entrepreneurship’</td>
                                            <td>16-05-2025</td>
                                            <td>role of incubation centers in nurturing start-up ideas and translating
                                                academic research into viable business ventures </td>
                                            <td></td>
                                            <td><img src="mobile-assets/research-development/mou/pic1.png"
                                                    alt="MoU Image"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="gpa-pagination-controls"></div>
                            </div>
                        </div>

                        <div class="gpa-accordion-item">
                            <div class="gpa-accordion-header">
                                <h3>School of Commerce</h3>
                                <span class="gpa-accordion-icon">+</span>
                            </div>
                            <div class="gpa-accordion-content">
                                <table class="gpa-data-table">
                                    <thead>
                                        <tr>
                                            <th>Name of School/Department</th>
                                            <th>MoU partner Name</th>
                                            <th>Date</th>
                                            <th>Nature of the activity</th>
                                            <th>Outcome</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Gauhati Commerce College</td>
                                            <td>Indira Gandhi National Centre for the Arts, Regional Centre, Guwahati</td>
                                            <td>15-03-2025</td>
                                            <td>Financial Literacy and Stock Trading</td>
                                            <td>Basics of Stock Trading, Investment Options in the Financial Market,
                                                Understanding Derivatives and their Applications</td>
                                            <td><img src="mobile-assets/research-development/mou/pic2.png"
                                                    alt="MoU Image"></td>
                                        </tr>

                                        <tr>
                                            <td>Gauhati Commerce College</td>
                                            <td>Indira Gandhi National Centre for the Arts, Regional Centre, Guwahati</td>
                                            <td>13-05-2025</td>
                                            <td>Career Counseling and the Implementation of NEP 2020</td>
                                            <td>Career prospects, the implications of NEP 2020 and future knowledge
                                                partnership with RGU</td>
                                            <td><img src="mobile-assets/research-development/mou/pic3.png"
                                                    alt="MoU Image"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="gpa-pagination-controls"></div>
                            </div>
                        </div>


                    </div>
                </section>

                <script>
                    // Encapsulate the entire script in an IIFE to prevent global scope pollution
                    (function() {
                        // Function to initialize the component logic
                        function initializeGpaComponent() {

                            // --- Accordion Logic ---
                            const accordionItems = document.querySelectorAll('.gpa-accordion-item');

                            accordionItems.forEach(item => {
                                const header = item.querySelector('.gpa-accordion-header');
                                const content = item.querySelector('.gpa-accordion-content');

                                header.addEventListener('click', () => {
                                    // Toggle the unique active class
                                    item.classList.toggle('gpa-active');
                                    if (item.classList.contains('gpa-active')) {
                                        content.style.maxHeight = content.scrollHeight + 'px';
                                    } else {
                                        content.style.maxHeight = null;
                                    }
                                });
                            });

                            // --- Pagination Logic for Each Table ---
                            const tables = document.querySelectorAll('.gpa-data-table');
                            const rowsPerPage = 5;

                            tables.forEach(table => {
                                const tbody = table.querySelector('tbody');
                                const rows = Array.from(tbody.querySelectorAll('tr'));
                                const paginationControls = table.nextElementSibling;
                                if (!paginationControls || !paginationControls.classList.contains(
                                    'gpa-pagination-controls')) {
                                    console.error('Pagination controls not found for table:', table);
                                    return;
                                }
                                const totalPages = Math.ceil(rows.length / rowsPerPage);
                                let currentPage = 1;

                                function displayPage(page) {
                                    currentPage = page;
                                    rows.forEach(row => row.style.display = 'none');

                                    const startIndex = (page - 1) * rowsPerPage;
                                    const endIndex = startIndex + rowsPerPage;
                                    const pageRows = rows.slice(startIndex, endIndex);

                                    pageRows.forEach(row => row.style.display = '');

                                    updatePaginationButtons();
                                }

                                function setupPagination() {
                                    paginationControls.innerHTML = '';
                                    if (totalPages <= 1) return;

                                    for (let i = 1; i <= totalPages; i++) {
                                        const btn = document.createElement('button');
                                        btn.classList.add('gpa-pagination-btn');
                                        btn.innerText = i;
                                        if (i === currentPage) {
                                            btn.classList.add('gpa-active');
                                        }
                                        btn.addEventListener('click', () => {
                                            displayPage(i);
                                        });
                                        paginationControls.appendChild(btn);
                                    }
                                }

                                function updatePaginationButtons() {
                                    const buttons = paginationControls.querySelectorAll('.gpa-pagination-btn');
                                    buttons.forEach((btn, index) => {
                                        if (index + 1 === currentPage) {
                                            btn.classList.add('gpa-active');
                                        } else {
                                            btn.classList.remove('gpa-active');
                                        }
                                    });
                                }

                                setupPagination();
                                displayPage(1);
                            });
                        }

                        // Run the initialization function after the DOM is fully loaded
                        if (document.readyState === 'loading') {
                            document.addEventListener('DOMContentLoaded', initializeGpaComponent);
                        } else {
                            // DOM is already loaded, run immediately
                            initializeGpaComponent();
                        }

                    })();
                </script>
            </section>
            <!-- MoU Signed  -->

        </main>

    </div>


    <div class="mobile">

    </div>
@endsection
