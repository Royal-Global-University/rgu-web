@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <style>
        /* ================= CSS VARIABLES & GLOBAL ================= */
        :root {
            --primary-color: #0f172a;
            /* Deep Slate */
            --secondary-color: #2563eb;
            /* Vibrant Blue */
            --accent-color: #f59e0b;
            /* Amber/Orange */
            --text-main: #334155;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --transition-smooth: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 40px -5px rgba(15, 23, 42, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .csifx-tabs-section,
        .csifx-marquee-section,
        .csifx-quick-links-section,
        .csifx-cta-section {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(6px);
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background: url('your-image-path.jpg') no-repeat center center fixed;
            background-size: cover;
            color: var(--text-main);
            overflow-x: hidden;
        }

        /* ================= ANIMATIONS ================= */
        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            0% {
                opacity: 0;
                transform: scale(0.95);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes scrollMarquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* ================= HERO SECTION ================= */
        .csifx-hero {
            position: relative;
            height: 90vh;
            min-height: 600px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .csifx-hero-video {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
            transform: scale(1.05);
            /* Slight scale to hide edges */
        }

        .csifx-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(37, 99, 235, 0.4) 100%);
            z-index: 1;
        }

        .csifx-hero-content {
            position: relative;
            z-index: 2;
            color: var(--bg-white);
            text-align: center;
            padding: 0 20px;
            max-width: 900px;
        }

        .csifx-hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            animation: fadeUp 1s ease-out forwards;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .csifx-hero-content p {
            font-size: 1.4rem;
            font-weight: 300;
            opacity: 0;
            animation: fadeUp 1s ease-out 0.3s forwards;
            color: #e2e8f0;
        }

        /* ================= MARQUEE ================= */
        .csifx-marquee-section {
            padding: 60px 0;
            background: var(--bg-white);
            overflow: hidden;
            position: relative;
        }

        /* Soft gradient mask to fade edges of the marquee */
        .csifx-marquee-section::before,
        .csifx-marquee-section::after {
            content: '';
            position: absolute;
            top: 0;
            width: 15%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .csifx-marquee-section::before {
            left: 0;
            background: linear-gradient(to right, var(--bg-white), transparent);
        }

        .csifx-marquee-section::after {
            right: 0;
            background: linear-gradient(to left, var(--bg-white), transparent);
        }

        .csifx-marquee {
            width: 100%;
            overflow: hidden;
        }

        .csifx-marquee-track {
            display: flex;
            gap: 24px;
            width: max-content;
            animation: scrollMarquee 80s linear infinite;
        }

        .csifx-marquee-track:hover {
            animation-play-state: paused;
            /* Pause on hover for better UX */
        }

        .csifx-marquee img {
            height: 250px;
            width: 450px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition-smooth);
            cursor: pointer;
        }

        .csifx-marquee img:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: var(--shadow-lg);
        }

        /* ================= TABS NAVIGATION ================= */
        .csifx-tabs-section {
            padding: 60px 20px;
            background: var(--bg-light);
        }

        .csifx-tabs-wrapper {
            max-width: 1400px;
            margin: auto;
        }

        .csifx-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 20px;
            position: relative;
        }

        .csifx-tab {
            background: transparent;
            border: none;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--text-light);
            cursor: pointer;
            padding: 12px 24px;
            border-radius: 8px;
            transition: var(--transition-smooth);
        }

        .csifx-tab:hover {
            color: var(--secondary-color);
            background: rgba(37, 99, 235, 0.05);
        }

        .csifx-tab.active {
            color: var(--secondary-color);
            font-weight: 600;
        }

        .csifx-tab-underline {
            width: 100%;
            height: 2px;
            background: #e2e8f0;
            position: relative;
            margin-bottom: 50px;
            border-radius: 2px;
        }

        /* Note: The span is injected via JS for smooth gliding */
        .csifx-tab-underline span {
            position: absolute;
            height: 4px;
            background: var(--secondary-color);
            top: -1px;
            border-radius: 4px;
            transition: var(--transition-smooth);
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.4);
        }

        /* ================= TAB CONTENT ================= */
        .csifx-tabs-content {
            background: var(--bg-white);
            padding: 50px;
            border-radius: 24px;
            box-shadow: var(--shadow-sm);
            min-height: 400px;
        }

        .csifx-tab-content {
            display: none;
        }

        .csifx-tab-content.active {
            display: block;
            animation: scaleIn 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .csifx-tab-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }

        .csifx-tab-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 2px;
        }

        /* ================= ABOUT GRID ================= */
        .csifx-tab-grid {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 60px;
            align-items: center;
        }

        .csifx-tab-text p {
            font-size: 1.1rem;
            line-height: 1.9;
            color: var(--text-main);
            margin-bottom: 20px;
            text-align: justify;
        }

        .csifx-tab-image {
            width: 100%;
            aspect-ratio: 1 / 1;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            position: relative;
        }

        .csifx-tab-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.6s ease;
        }

        .csifx-tab-image:hover img {
            transform: scale(1.08);
        }

        /* ================= EQUIPMENT CARDS ================= */
        .csifx-equip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .csifx-equip-card {
            background: var(--bg-white);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            transition: var(--transition-smooth);
            display: flex;
            flex-direction: column;
        }

        .csifx-equip-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: transparent;
        }

        .csifx-equip-img {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .csifx-equip-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .csifx-equip-card:hover .csifx-equip-img img {
            transform: scale(1.1);
        }

        .csifx-equip-img span {
            position: absolute;
            bottom: 15px;
            left: 15px;
            padding: 6px 14px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #fff;
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(4px);
            border-radius: 30px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .csifx-equip-content {
            padding: 25px;
            flex-grow: 1;
        }

        .csifx-equip-content h3 {
            font-size: 1.25rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .csifx-equip-content p {
            font-size: 0.95rem;
            margin-bottom: 8px;
            color: var(--text-light);
        }

        .csifx-equip-content p strong {
            color: var(--text-main);
            font-weight: 600;
        }

        .csifx-equip-content h4 {
            margin-top: 20px;
            font-size: 0.9rem;
            color: var(--secondary-color);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .csifx-equip-content ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        .csifx-equip-content ul li {
            font-size: 0.95rem;
            margin-bottom: 6px;
            color: var(--text-main);
        }

        /* ================= VISION & MISSION ================= */
        .csifx-vm-block {
            position: relative;
            padding-left: 30px;
            margin-bottom: 40px;
        }

        .csifx-vm-block::before {
            content: "";
            position: absolute;
            left: 0;
            top: 6px;
            width: 4px;
            height: calc(100% - 12px);
            background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color));
            border-radius: 4px;
        }

        .csifx-vm-block h3 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .csifx-vm-block p,
        .csifx-vm-block ul li {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-main);
        }

        .csifx-vm-block ul {
            margin-top: 15px;
            padding-left: 20px;
        }

        .csifx-vm-block ul li {
            margin-bottom: 10px;
        }

        .csifx-vm-divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #e2e8f0, transparent);
            margin: 40px 0;
        }

        /* ================= RESPONSIVE DESIGN ================= */
        @media (max-width: 992px) {
            .csifx-hero-content h1 {
                font-size: 3rem;
            }

            .csifx-tab-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .csifx-tab-image {
                max-width: 500px;
                margin: 0 auto;
            }

            .csifx-tabs-content {
                padding: 40px 30px;
            }
        }

        @media (max-width: 768px) {
            .csifx-hero-content h1 {
                font-size: 2.2rem;
            }

            .csifx-hero-content p {
                font-size: 1.1rem;
            }

            .csifx-marquee img {
                height: 160px;
                width: 240px;
            }

            .csifx-tabs-content {
                padding: 30px 20px;
                border-radius: 16px;
            }

            .csifx-tab-title {
                font-size: 1.8rem;
                text-align: center;
                display: block;
            }

            .csifx-tab-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            /* Mobile Tabs Pill Design */
            .csifx-tabs {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 12px;
            }

            .csifx-tab {
                width: 100%;
                text-align: center;
                padding: 14px;
                background: var(--bg-white);
                border: 1px solid #e2e8f0;
                font-size: 0.95rem;
            }

            .csifx-tab.active {
                background: var(--secondary-color);
                color: #fff;
                border-color: var(--secondary-color);
                box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            }

            .csifx-tab-underline {
                display: none;
            }

            /* Hidden on mobile */
        }

        /* ================= QUICK LINKS ================= */
        .csifx-quick-links-section {
            padding: 60px 20px 80px;
            background: var(--bg-white);
            /* Contrasts nicely with the light gray CTA section above it */
        }

        .csifx-ql-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .csifx-ql-title {
            text-align: center;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 40px;
        }

        .csifx-ql-grid {
            display: grid;
            /* Automatically creates columns based on screen size, keeping them equal width */
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .csifx-ql-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            min-height: 60px;
            padding: 15px 20px;
            background: #273973;
            color: var(--bg-white);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.05rem;
            text-align: center;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: var(--transition-smooth);
            box-shadow: var(--shadow-sm);
        }

        .csifx-ql-btn:hover {
            background: var(--secondary-color);
            color: #ffffff;
            border-color: var(--secondary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .csifx-ql-title {
                font-size: 1.8rem;
                margin-bottom: 30px;
            }

            .csifx-ql-grid {
                grid-template-columns: 1fr;
                /* Stacks 1 per row on mobile */
                gap: 15px;
            }
        }
    </style>

    <style>
        /* ================= CTA SECTION ================= */
        .csifx-cta-section {
            padding: 60px 20px;
            background: var(--bg-light);
            display: flex;
            justify-content: center;
        }

        .csifx-cta-container {
            background: linear-gradient(135deg, #273973 0%, #1e2a57 100%);
            /* Deep blue gradient */
            max-width: 1400px;
            width: 100%;
            border-radius: 12px;
            padding: 60px 50px;
            text-align: center;
            color: #ffffff;
            box-shadow: 0 15px 35px rgba(30, 42, 87, 0.2);
        }

        .csifx-cta-container h2 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }

        .csifx-cta-container p {
            font-size: 1.05rem;
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto 35px auto;
            color: #cbd5e1;
            /* Soft light gray for readability */
            font-weight: 300;
        }

        .csifx-cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .csifx-btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            /* Pill shape */
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition-smooth);
            background-color: #ffffff;
            color: #1e2a57;
        }

        .csifx-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            color: var(--secondary-color);
        }

        /* Tablet & Mobile Adjustments */
        @media (max-width: 768px) {
            .csifx-cta-container {
                padding: 40px 25px;
            }

            .csifx-cta-container h2 {
                font-size: 1.8rem;
            }

            .csifx-cta-container p {
                font-size: 0.95rem;
            }

            .csifx-cta-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .csifx-btn {
                width: 100%;
            }
        }
    </style>

    <section class="csifx-hero">
        <video autoplay muted loop playsinline class="csifx-hero-video">
            <source src="https://media.rgu.ac/index/CSIF-Promotional-Video.mp4" type="video/mp4">
        </video>

        <div class="csifx-hero-overlay"></div>

        <div class="csifx-hero-content">
            <h1>Central Sophisticated Instrumentation Facility</h1>
            <p>A Leap in Regional Research Infrastructure</p>
        </div>
    </section>

    {{-- <section class="csifx-marquee-section">
        <div class="csifx-marquee">
            <div class="csifx-marquee-track">
                <img src="mobile-assets/csif-lab/machines/centrifuge.png" alt="Lab View 1">
                <img src="mobile-assets/csif-lab/machines/crude.png" alt="Lab View 2">
                <img src="mobile-assets/csif-lab/machines/deep-freezer.png" alt="Lab View 3">
                <img src="mobile-assets/csif-lab/machines/elisa-plate.png" alt="Lab View 4">
                <img src="mobile-assets/csif-lab/machines/gas-chroma.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/infra-spectro.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/milli-q.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/nitrogen.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/probe-sonicator.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/rotary-evaporator.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/rt-pcr.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/t100-thermal.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/tablet-compression.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/uv-vis.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/western-blot.png" alt="Lab View 5">

                <img src="mobile-assets/csif-lab/machines/centrifuge.png" alt="Lab View 1">
                <img src="mobile-assets/csif-lab/machines/crude.png" alt="Lab View 2">
                <img src="mobile-assets/csif-lab/machines/deep-freezer.png" alt="Lab View 3">
                <img src="mobile-assets/csif-lab/machines/elisa-plate.png" alt="Lab View 4">
                <img src="mobile-assets/csif-lab/machines/gas-chroma.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/infra-spectro.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/milli-q.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/nitrogen.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/probe-sonicator.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/rotary-evaporator.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/rt-pcr.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/t100-thermal.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/tablet-compression.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/uv-vis.png" alt="Lab View 5">
                <img src="mobile-assets/csif-lab/machines/western-blot.png" alt="Lab View 5">

            </div>
        </div>
    </section> --}}

    <section class="csifx-tabs-section">
        <div class="csifx-tabs-wrapper">

            <div class="csifx-tabs">
                <button class="csifx-tab active" data-tab="about">About CSIF</button>
                <button class="csifx-tab" data-tab="facilities">Facilities</button>
                <button class="csifx-tab" data-tab="vision">Vision & Mission</button>
            </div>

            <div class="csifx-tab-underline"></div>

            <div class="csifx-tabs-content">

                <div class="csifx-tab-content active" id="about">
                    <h2 class="csifx-tab-title">Transforming Research</h2>
                    <div class="csifx-tab-grid">
                        <div class="csifx-tab-text">
                            <p>
                                We're thrilled to unveil our state-of-the-art Central Sophisticated Instrumentation Facility
                                (CSIF) — a
                                transformative leap in research infrastructure, built to support cutting-edge investigations
                                across the
                                frontier areas of science and technology.
                            </p>
                            <p>
                                The CSIF is designed to empower researchers, scholars, and industry professionals with
                                access to
                                advanced
                                analytical and characterization tools—vital for breakthrough discoveries. Whether you're an
                                academic
                                pushing the boundaries of science, or an innovator looking to test and refine your ideas,
                                CSIF is your
                                gateway to high-impact research.
                            </p>
                        </div>
                        <div class="csifx-tab-image">
                            <img src="mobile-assets/csif-lab/csif-square.png" alt="CSIF Lab Facility">
                        </div>
                    </div>
                </div>

                <div class="csifx-tab-content" id="facilities">
                    <h2 class="csifx-tab-title">Our Instruments</h2>
                    <div class="csifx-equip-grid">

                        <div class="csifx-equip-card">
                            <div class="csifx-equip-img">
                                <img src="mobile-assets/csif-lab/facilities/HPLC.jpeg" alt="FTIR Spectrometer">
                                <span>HPLC</span>
                            </div>
                            <div class="csifx-equip-content">
                                <h3>High-Performance Liquid Chromatography (HPLC) System</h3>
                                <p><strong>MAKE:</strong> Shimadzu</p>
                                <p><strong>MODEL:</strong> Ai series LC2050C 3D</p>
                                <h4>Applications</h4>
                                <ul>
                                    <li>1. Product purity and quality control of industrial products and fine chemicals</li>
                                    <li>2. Separation and purification of biopolymers such as enzymes or nucleic acids</li>
                                    <li>3. Analysis of pollutants in environmental analytics</li>
                                    <li>4. Analysis of drugs and pharmaceuticals</li>
                                    <li>5. Pre-concentration of trace components</li>

                                </ul>
                            </div>
                        </div>

                        <div class="csifx-equip-card">
                            <div class="csifx-equip-img">
                                <img src="mobile-assets/csif-lab/facilities/FTIRwithDiamondATR.png"
                                    alt="FTIR Spectrometer">
                                <span>Infrared Spectroscopy</span>
                            </div>
                            <div class="csifx-equip-content">
                                <h3>FTIR with Diamond ATR</h3>
                                <p><strong>MAKE:</strong> PerkinElmer</p>
                                <p><strong>MODEL:</strong> Spectrum Two FT-IR</p>
                                <h4>Applications</h4>
                                <ul>
                                    <li>Identification of functional groups</li>
                                    <li>Structural analysis of biomolecules</li>
                                    <li>Detection of adulterants in food samples</li>
                                    <li>Analysis of soil quality</li>
                                </ul>
                            </div>
                        </div>

                        <div class="csifx-equip-card">
                            <div class="csifx-equip-img">
                                <img src="mobile-assets/csif-lab/facilities/UV-VisSpectrophotometer.png"
                                    alt="UV-Vis Spectrophotometer">
                                <span>UV–vis Spectroscopy</span>
                            </div>
                            <div class="csifx-equip-content">
                                <h3>UV-Vis Spectrophotometer</h3>
                                <p><strong>MAKE:</strong> PerkinElmer</p>
                                <p><strong>MODEL:</strong> Lambda 365+</p>
                                <h4>Applications</h4>
                                <ul>
                                    <li>Chemical analysis of compounds</li>
                                    <li>Fundamental characterization</li>
                                    <li>Quantitative analysis of metal ions in organic compounds</li>
                                    <li>Reaction kinetics analysis</li>
                                </ul>
                            </div>
                        </div>

                        <div class="csifx-equip-card">
                            <div class="csifx-equip-img">
                                <img src="mobile-assets/csif-lab/facilities/GC-MSwithFID.png" alt="Gas Chromatography">
                                <span>Gas Chromatography</span>
                            </div>
                            <div class="csifx-equip-content">
                                <h3>GC-MS with FID</h3>
                                <p><strong>MAKE:</strong> PerkinElmer</p>
                                <p><strong>MODEL:</strong> 2400</p>
                                <h4>Applications</h4>
                                <ul>
                                    <li>Compositional analysis</li>
                                    <li>Identification of compounds</li>
                                    <li>Detection of impurities in active pharma ingredients</li>
                                    <li>Analysis of volatile organics in water samples</li>
                                </ul>
                            </div>
                        </div>

                        <div class="csifx-equip-card">
                            <div class="csifx-equip-img">
                                <img src="mobile-assets/csif-lab/facilities/Milli-QUltrapureWaterSystem.png"
                                    alt="Gas Chromatography">
                                <span>Milli-Q Ultrapure</span>
                            </div>
                            <div class="csifx-equip-content">
                                <h3>Milli-Q Ultrapure Water System</h3>
                                <p><strong>MAKE:</strong> Merck-Millipore</p>
                                <p><strong>MODEL:</strong> Milli-Q Synergy System with Elix Tank</p>
                                <h4>Applications</h4>
                                <ul>
                                    <li>Deionized ultrapure water for molecular grade analysis and PCR</li>
                                    <li>Preparation of analytical grade buffers</li>
                                    <li>High purity standard solutions for calibration of instruments</li>
                                    <li>Animal tissue culture usage</li>
                                </ul>
                            </div>
                        </div>

                        <div class="csifx-equip-card">
                            <div class="csifx-equip-img">
                                <img src="mobile-assets/csif-lab/facilities/Real-TimePCR.png" alt="Gas Chromatography">
                                <span>RT-PCR</span>
                            </div>
                            <div class="csifx-equip-content">
                                <h3>Real-Time PCR</h3>
                                <p><strong>MAKE:</strong> Agilent Technologies</p>
                                <p><strong>MODEL:</strong> Ariamx Real-Time PCR Base Instrument</p>
                                <h4>Applications</h4>
                                <ul>
                                    <li>Gene expression analysis</li>
                                    <li>Pathogen detection and quantification</li>
                                    <li>Detection of genetic variations and genotype identification</li>
                                    <li>Detection of GMOs</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="csifx-tab-content" id="vision">
                    <div class="csifx-vm-block">
                        <h3>Vision</h3>
                        <p>
                            To establish CSIF as a premier analytical facility in North-East India, fostering
                            interdisciplinary
                            research excellence and serving as a vital resource for academia, national laboratories, and
                            industry
                            partners.
                        </p>
                    </div>

                    <div class="csifx-vm-divider"></div>

                    <div class="csifx-vm-block">
                        <h3>Mission</h3>
                        <ul>
                            <li>Provide 24/7 access to high-end, sophisticated instruments for all registered users.</li>
                            <li>Develop and conduct regular training workshops and short-term courses for skill development.
                            </li>
                            <li>Facilitate collaboration with external institutions and industries to address complex
                                societal and
                                technological challenges.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="csifx-quick-links-section">
        <div class="csifx-ql-container">
            <h2 class="csifx-ql-title">Quick Links</h2>

            <div class="csifx-ql-grid">
                <a target="_blank" href="mobile-assets/csif-lab/Access Policy_CSIF-RGU.pdf" class="csifx-ql-btn">Access
                    Policy -
                    CSIF ⬇</a>
                <a target="_blank" href="mobile-assets/csif-lab/CSIF Indent Form 2026.pdf" class="csifx-ql-btn">CSIF Indent
                    Form
                    ⬇</a>
                <a target="_blank" href="mobile-assets/csif-lab/CSIF SERVICE CHARGES.pdf" class="csifx-ql-btn">CSIF
                    Service
                    Charges ⬇</a>

            </div>

        </div>
    </section>

    <!-- <section class="csifx-cta-section">
            <div class="csifx-cta-container">
              <h2>Join the Next Wave of Scientific Advancement</h2>
              <p>
                Calling all researchers, PhD scholars, and innovators: Explore, collaborate, and lead with CSIF.
                Located conveniently within the city of Guwahati, the facility is poised to become a regional hub
                for interdisciplinary research and scientific excellence.
              </p>
              <div class="csifx-cta-buttons">
                <a href="#" class="csifx-btn csifx-btn-primary">Learn More & Book a Session</a>
                <a href="#" class="csifx-btn csifx-btn-secondary">Email Us Your Queries</a>
              </div>
            </div>
          </section> -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".csifx-tab");
            const contents = document.querySelectorAll(".csifx-tab-content");
            const underlineEl = document.querySelector(".csifx-tab-underline");

            // Create the sliding span for the underline
            const slider = document.createElement("span");
            underlineEl.appendChild(slider);

            function updateUnderline(activeTab) {
                // Don't calculate if on mobile (underline is hidden)
                if (window.innerWidth <= 768) return;

                const tabRect = activeTab.getBoundingClientRect();
                const parentRect = activeTab.parentElement.getBoundingClientRect();

                // Calculate relative position
                const leftPos = tabRect.left - parentRect.left;

                slider.style.width = `${tabRect.width}px`;
                slider.style.transform = `translateX(${leftPos}px)`;
            }

            // Initialize underline position
            const activeInit = document.querySelector(".csifx-tab.active");
            if (activeInit) updateUnderline(activeInit);

            // Handle Tab Clicks
            tabs.forEach(tab => {
                tab.addEventListener("click", () => {
                    // Remove active class from all
                    tabs.forEach(t => t.classList.remove("active"));
                    contents.forEach(c => c.classList.remove("active"));

                    // Add active class to clicked tab and corresponding content
                    tab.classList.add("active");
                    const targetId = tab.getAttribute("data-tab");
                    document.getElementById(targetId).classList.add("active");

                    // Animate the underline
                    updateUnderline(tab);
                });
            });

            // Update underline position on window resize
            window.addEventListener("resize", () => {
                const currentActive = document.querySelector(".csifx-tab.active");
                if (currentActive) updateUnderline(currentActive);
            });
        });
    </script>
@endsection
