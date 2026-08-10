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
        /* ================= CSS VARIABLES & RESETS ================= */
        :root {
            --primary: #2c4a7a;
            --accent: #f28c28;
            --accent-hover: #e07b1f;
            --bg-color: #FFF8F0;
            --text-muted: #1a2739;
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            background: var(--bg-color);
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            overflow-x: hidden;
        }

        .dept-operationtheatre-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-operationtheatre-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-operationtheatre-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-operationtheatre-heading h1 span {
            color: var(--accent);
        }

        .dept-operationtheatre-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-operationtheatre-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-operationtheatre-img {
            flex: 1;
            position: relative;
        }

        .dept-operationtheatre-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-operationtheatre-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-operationtheatre-content {
            flex: 1;
        }

        .dept-operationtheatre-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-operationtheatre-content h3 span {
            color: var(--accent);
        }

        .dept-operationtheatre-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-operationtheatre-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-operationtheatre-floating {
            position: fixed;
            left: 30px;
            top: 57%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-operationtheatre-float-item {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: var(--primary);
            border-radius: 50px;
            overflow: hidden;
            width: 56px;
            height: 56px;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .dept-operationtheatre-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-operationtheatre-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-operationtheatre-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-operationtheatre-float-item:hover i {
            color: #fff;
        }

        .dept-operationtheatre-float-item:hover .dept-operationtheatre-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-operationtheatre-admission-btn {
            position: fixed;
            bottom: 40px;
            right: 40px;
            z-index: 999;
            background: var(--accent);
            color: #fff;
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 10px 25px rgba(242, 140, 40, 0.4);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
            animation: pulse 2s infinite;
        }

        .dept-operationtheatre-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-operationtheatre-admission-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 35px rgba(242, 140, 40, 0.6);
            animation: none;
            /* Stops pulsing when hovered */
        }

        /* ================= ANIMATIONS ================= */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(242, 140, 40, 0.7);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(242, 140, 40, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(242, 140, 40, 0);
            }
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width: 960px) {

            /* 1. Add padding to the bottom so content can be scrolled past the fixed buttons */
            .dept-operationtheatre-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-operationtheatre-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-operationtheatre-img img {
                padding-left: 0%;
            }

            .dept-operationtheatre-floating {
                display: none;
                top: auto;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                flex-direction: row;
                background: rgba(255, 255, 255, 0.95);
                /* Slightly less transparent */
                backdrop-filter: blur(10px);
                padding: 10px 20px;
                border-radius: 50px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                border: 1px solid rgba(255, 255, 255, 0.4);
                z-index: 1000;
                /* Ensure it stays on top */
            }

            .dept-operationtheatre-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-operationtheatre-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-operationtheatre-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-operationtheatre-float-item:active i {
                color: var(--primary);
            }

            .dept-operationtheatre-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-operationtheatre-admission-btn {
                bottom: 40px;
                /* Sits nicely above the 20px nav menu */
                left: 50%;
                right: auto;
                transform: translateX(-50%);
                width: 80%;
                /* Wide enough to be prominent, but doesn't touch screen edges */
                max-width: 350px;
                justify-content: center;
                /* Centers text and arrow */
                padding: 14px 24px;
                font-size: 1rem;
                z-index: 999;
            }

            /* Fix the hover animation to account for the center transform */
            .dept-operationtheatre-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-operationtheatre-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-operationtheatre-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-operationtheatre-section-title span {
            color: var(--accent);
        }

        .dept-operationtheatre-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-operationtheatre-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-operationtheatre-course-header {
            background: var(--primary);
            color: #fff;
            padding: 18px 25px;
            font-size: 1.4rem;
            font-weight: bold;
            border-radius: 6px;
            position: relative;
            box-shadow: 0 4px 10px rgba(44, 74, 122, 0.1);

            /* Flexbox added to align title and button */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Keep the orange accent triangle */
        .dept-operationtheatre-course-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-bottom: 20px solid var(--accent);
            border-bottom-right-radius: 6px;
            z-index: 1;
            /* Pushed behind the button */
        }

        /* New Button Styles */
        .dept-operationtheatre-view-btn {
            background: #f28c28;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.5);
            padding: 8px 18px;
            border-radius: 4px;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            z-index: 2;
            /* Ensures it stays clickable over the triangle */
        }

        .dept-operationtheatre-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-operationtheatre-course-body {
            background: #fdfdfd;
            color: var(--primary);
            padding: 18px 25px;
            margin: 0 auto;
            width: 95%;
            /* Creates the slight inset look */
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 0 0 6px 6px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
            border: 1px solid #f0f0f0;
            border-top: none;
        }

        /* ================= COURSES MOBILE FIX ================= */
        @media (max-width: 768px) {
            .dept-operationtheatre-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-operationtheatre-img img {
                padding-left: 0%;
            }

            .dept-operationtheatre-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-operationtheatre-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-operationtheatre-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-operationtheatre-prospects-content {
                padding: 25px 20px;
            }


            .dept-operationtheatre-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-operationtheatre-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-operationtheatre-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-operationtheatre-intro-lab {
            text-align: justify;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-operationtheatre-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-operationtheatre-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-operationtheatre-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-operationtheatre-list li {
            margin-bottom: 12px;
        }

        .dept-operationtheatre-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-operationtheatre-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-operationtheatre-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-operationtheatre-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-operationtheatre-accordion-header {
            background: var(--primary);
            color: #fff;
            padding: 18px 25px;
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            user-select: none;
        }

        .dept-operationtheatre-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-operationtheatre-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-operationtheatre-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-operationtheatre-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-operationtheatre-accordion-item.active .dept-operationtheatre-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-operationtheatre-accordion-item.active .dept-operationtheatre-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-operationtheatre-accordion-item.active .dept-operationtheatre-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-operationtheatre-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-operationtheatre-syllabus-link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            text-decoration: none;
            color: var(--primary);
            font-size: 1.05rem;
            border-bottom: 1px solid #eee;
            transition: var(--transition);
        }

        .dept-operationtheatre-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-operationtheatre-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-operationtheatre-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-operationtheatre-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-operationtheatre-syllabus-link:hover .dept-operationtheatre-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-operationtheatre-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-operationtheatre-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-operationtheatre-lab-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 50px;
            /* Adds safe spacing on the sides */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
        }

        .dept-operationtheatre-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-operationtheatre-lab-intro {
            font-size: 2.0rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-operationtheatre-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-operationtheatre-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-operationtheatre-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-operationtheatre-explore-btn {
            background: var(--accent);
            color: #fff;
            border: none;
            padding: 16px 32px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 5vw;
            margin-bottom: 5vw;
            transition: var(--transition);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.3);
            font-family: 'Poppins', sans-serif;
        }

        .dept-operationtheatre-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-operationtheatre-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-operationtheatre-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-operationtheatre-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-operationtheatre-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-operationtheatre-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-operationtheatre-bullet-list li::before {
            content: '\f058';
            /* Check-circle icon */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: -28px;
            top: 2px;
            color: var(--accent);
            font-size: 1.1rem;
        }

        /* ================= EVENTS SECTION ================= */
        .dept-operationtheatre-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-operationtheatre-events-box {
            max-width: 1300px;
            height: 450px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            position: relative;
        }

        /* Track */
        .dept-operationtheatre-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 15s linear infinite;
        }

        .dept-operationtheatre-events-box:hover .dept-operationtheatre-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-operationtheatre-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-operationtheatre-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-operationtheatre-events-btn:hover {
            background: var(--accent);
        }

        /* Animation */
        @keyframes scrollEvents {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
            }
        }

        /* ================= TABLE LIST SECTION ================= */
        .dept-operationtheatre-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-operationtheatre-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-operationtheatre-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-operationtheatre-table-header {
            background: #3a5786;
            color: #fff;
            padding: 18px 22px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* ICON */
        .dept-operationtheatre-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-operationtheatre-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-operationtheatre-table-acc.active .dept-operationtheatre-table-content {
            padding: 20px;
        }

        .dept-operationtheatre-table-acc.active .dept-operationtheatre-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-operationtheatre-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-operationtheatre-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-operationtheatre-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-operationtheatre-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-operationtheatre-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-operationtheatre-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-operationtheatre-table td,
        .dept-operationtheatre-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-operationtheatre-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-operationtheatre-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-operationtheatre-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-operationtheatre-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-operationtheatre-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-operationtheatre-marquee:hover .dept-operationtheatre-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-operationtheatre-marquee img {
            height: 300px;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 10px;
        }

        /* ANIMATION */
        @keyframes marqueeScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* MOBILE */
        @media(max-width:768px) {
            .dept-operationtheatre-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-operationtheatre-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-operationtheatre-achievement-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .dept-achievement-tab {
            padding: 12px 25px;
            border-radius: 40px;
            border: 2px solid var(--primary);
            background: transparent;
            color: var(--primary);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Poppins', sans-serif;
        }

        .dept-achievement-tab:hover {
            background: var(--primary);
            color: #fff;
        }

        .dept-achievement-tab.active {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        /* Content Box */
        .dept-operationtheatre-achievement-content {
            max-width: 1250px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            padding: 20px;
        }

        /* Panes */
        .dept-achievement-pane {
            display: none;
        }

        .dept-achievement-pane.active {
            display: block;
        }

        /* ================= RECOGNITION SECTION ================= */
        .dept-operationtheatre-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-operationtheatre-recognition-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 60px;
            background: #fff;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* LEFT IMAGE */
        .dept-operationtheatre-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-operationtheatre-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-operationtheatre-recognition-content {
            flex: 2;
        }

        .dept-operationtheatre-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-operationtheatre-recognition-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--accent);
            color: #fff;
            padding: 12px 22px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            font-family: 'Poppins', sans-serif;
        }

        .dept-operationtheatre-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-operationtheatre-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-operationtheatre-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-operationtheatre-recognition-content p {
                text-align: center;
            }

            .dept-operationtheatre-recognition-btn {
                justify-content: center;
            }
        }
    </style>

    <div class="dept-operationtheatre-floating">
        <a href="#dept-home" class="dept-operationtheatre-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-operationtheatre-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-operationtheatre-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-operationtheatre-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-operationtheatre-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-operationtheatre-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-operationtheatre-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-operationtheatre-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-operationtheatre-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-operationtheatre-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-operationtheatre-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-operationtheatre-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-operationtheatre-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-operationtheatre-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-operationtheatre-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-operationtheatre-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-operationtheatre-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-operationtheatre-wrapper">

        <div class="dept-operationtheatre-heading" id="dept-home">
            <h1>Department of <br><span>Anaesthesia and Operation Theatre Technology</span></h1>
            <h2>Royal School of Medical & Allied Sciences (RSMAS)</h2>
        </div>

        <div class="dept-operationtheatre-hero" id="dept-about">

            <div class="dept-operationtheatre-img">
                <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/headimg.png" alt="Architecture">
            </div>

            <div class="dept-operationtheatre-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Anaesthesia and Operation Theatre Technology is dedicated to nurturing competent and
                    skilled allied healthcare professionals who play a vital role in the delivery of safe, efficient, and
                    high-quality surgical and perioperative care. The department combines academic excellence with
                    simulation-based learning and extensive clinical exposure to prepare students for the dynamic
                    environment of modern operation theatres.<br /><br />

                    The curriculum, aligned with the National Commission for Allied and Healthcare Professions (NCAHP)
                    standards, provides comprehensive training in anaesthesia technology, operation theatre procedures,
                    surgical instrumentation, infection prevention and control, patient monitoring, airway management,
                    critical care support, and biomedical equipment handling. Students gain practical experience through
                    clinical postings in operation theatres, intensive care units, emergency departments, and
                    post-anaesthesia care units under the guidance of experienced clinicians.
                </p>

            </div>

        </div>

        <div class="dept-operationtheatre-prospects-section" id="dept-prospects">

            <div class="dept-operationtheatre-prospects-content">

                <p class="dept-operationtheatre-intro-text" style="text-align: justify;">
                    With a strong emphasis on patient safety, teamwork, professional ethics, research, and technological
                    advancements, the department prepares graduates to become proficient Anaesthesia and Operation Theatre
                    Technologists capable of contributing effectively to multidisciplinary surgical teams in hospitals and
                    advanced healthcare institutions across India and globally.
                </p>

            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-operationtheatre-prospects-section" id="dept-vision">
            <h2 class="dept-operationtheatre-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-operationtheatre-prospects-content">

                <h3 class="dept-operationtheatre-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-operationtheatre-bullet-list">
                    <li>
                        To create world-class Operation Theatre Technology professionals who can contribute meaningfully to
                        the
                        social, economic, and health development of the country and globally.
                    </li>

                </ul>

                <h3 class="dept-operationtheatre-subheading">Our Mission</h3>
                <ul class="dept-operationtheatre-bullet-list">
                    <li>
                        To offer globally-relevant, industry-linked, researched-focused, technology enabled seamless
                        education at
                        the graduate levels.
                    </li>
                    <li>
                        To persistently update and enrich our academic programme, expand our network with other
                        institutions.
                    </li>
                    <li>
                        To establish national and international collaborations and explore all avenues for the extension.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-operationtheatre-courses-section" id="dept-courses">
            <h2 class="dept-operationtheatre-section-title">Courses <span>Offered</span></h2>

            <div class="dept-operationtheatre-course-list" id="course-list-container">
            </div>
        </div>


        <div class="dept-operationtheatre-accordion-section" id="dept-syllabus">
            <h2 class="dept-operationtheatre-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-operationtheatre-accordion-wrapper">

                <div class="dept-operationtheatre-accordion-item active">
                    <div class="dept-operationtheatre-accordion-header">
                        <div class="dept-operationtheatre-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-operationtheatre-chevron"></i>
                    </div>

                    <div class="dept-operationtheatre-accordion-content">
                        <div class="dept-operationtheatre-syllabus-list">

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/anasthesia-ott/syllabus/OTT Syllabus - AY 2025- 2026.pdf"
                                class="dept-operationtheatre-syllabus-link">
                                <div class="dept-operationtheatre-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- OTT 2025 - 2026
                                </div>
                                <i class="fa-solid fa-download dept-operationtheatre-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/anasthesia-ott/syllabus/OTT Syllabus - AY 2024-2025.pdf"
                                class="dept-operationtheatre-syllabus-link">
                                <div class="dept-operationtheatre-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- OTT 2024 - 2025
                                </div>
                                <i class="fa-solid fa-download dept-operationtheatre-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/anasthesia-ott/syllabus/OTT Syllabus - AY 2023-2024.pdf"
                                class="dept-operationtheatre-syllabus-link">
                                <div class="dept-operationtheatre-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- OTT 2023 - 2024
                                </div>
                                <i class="fa-solid fa-download dept-operationtheatre-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="dept-operationtheatre-accordion-item">
                    <div class="dept-operationtheatre-accordion-header">
                        <div class="dept-operationtheatre-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-operationtheatre-chevron"></i>
                    </div>

                    <div class="dept-operationtheatre-accordion-content">
                        <div class="dept-operationtheatre-syllabus-list">
                            <a href="/phd" class="dept-operationtheatre-syllabus-link" target="_blank">
                                <div class="dept-operationtheatre-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-operationtheatre-events-section" id="dept-events">

            <h2 class="dept-operationtheatre-section-title">Events</h2>

            <div class="dept-operationtheatre-events-box">
                <div class="dept-operationtheatre-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                        <a href="#" class="dept-operationtheatre-events-btn">View All</a>
                      </div> -->

        </div>

        <div class="dept-operationtheatre-table-section" id="dept-committee">

            <div class="dept-operationtheatre-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-operationtheatre-lab-section" id="dept-lab">

            <div class="dept-operationtheatre-lab-container">

                <h2 class="dept-operationtheatre-section-title">Our <span>Lab</span></h2>

                <p class="dept-operationtheatre-intro-lab" style="padding-bottom: 30px;">
                    The University has established an action learning laboratory for Anesthesia & Operation Theatre (AOT)
                    techniques. This facility is equipped with a modern operating theatre that includes an anesthesia
                    machine,
                    surgical table, OT lighting, patient monitoring systems, electrosurgical cautery, suction apparatus,
                    etc.
                    along with advanced mannequins. These resources provide students with immersive, hands-on training and
                    practice-oriented learning, enabling them to confidently operate essential tools used in surgical
                    environments. <br> <br>
                    The primary objective of the laboratory is to help students develop a comprehensive and in-depth
                    understanding
                    of surgical procedures. By mastering both the theoretical and practical aspects of anesthesia and OT
                    technology, students will be prepared to enhance the quality of patient care during surgical
                    interventions.
                </p>

                <!-- <p class="dept-operationtheatre-lab-intro">
                          The laboratories are extensively utilised by undergraduate and postgraduate students for laboratory courses,
                        </p> -->


                <!-- <h3 class="dept-operationtheatre-lab-heading">Our Lab Equipments</h3> -->

                <!-- <h2 class="dept-operationtheatre-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-operationtheatre-lab-gallery">
                    <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/1.jpg" alt="Lab 1"
                        class="dept-operationtheatre-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/2.jpg" alt="Lab 2"
                        class="dept-operationtheatre-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/3.jpg" alt="Lab 3"
                        class="dept-operationtheatre-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/4.jpg" alt="Lab 4"
                        class="dept-operationtheatre-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/5.jpg" alt="Lab 5"
                        class="dept-operationtheatre-lab-img">

                </div>

                <!-- <button class="dept-operationtheatre-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "Master – Anaesthesia and Operation Theatre Technology",
                duration: "2 Years",
                link: "/programme-m-anaesthesia-ott"
            },

            {
                title: "Bachelor – Anaesthesia and Operation Theatre Technology",
                duration: "4 years",
                link: "/programme-b-anaesthesia-ott"
            },

        ];

        // 2. Get container
        const courseContainer = document.getElementById('course-list-container');

        // 3. Render courses
        if (courseContainer) {

            // If array is empty → show fallback
            if (!coursesData || coursesData.length === 0) {
                courseContainer.innerHTML = `
        <p style="text-align:center; color:#556b8d; font-size:1.1rem;">
          No courses available at the moment.
        </p>
      `;
            } else {
                // Generate course cards
                courseContainer.innerHTML = coursesData.map(course => `
        <div class="dept-operationtheatre-course-card">

          <div class="dept-operationtheatre-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-operationtheatre-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-operationtheatre-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-operationtheatre-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-operationtheatre-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-operationtheatre-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector(
                    '.dept-operationtheatre-accordion-content');

                // Toggle 'active' class
                currentItem.classList.toggle('active');

                // If it is now active, set max-height to its scrollHeight (actual content height)
                if (currentItem.classList.contains('active')) {
                    currentContent.style.maxHeight = currentContent.scrollHeight + "px";
                } else {
                    // If closed, collapse it back to 0
                    currentContent.style.maxHeight = 0;
                }
            });
        });

        // Recalculate heights if the window resizes (prevents text clipping on mobile)
        window.addEventListener('resize', setAccordionHeights);
    </script>

    <script>
        // ================= EVENTS DATA =================
        const eventsData = [
            "17-05-2025 | Organized Free Blood Pressure Screening Camp at The Assam Royal Global University.",
            "13-03-2026 | Dr. Tanu Rekha Hazarika, Senior Consultant Nephrologist and Renal Transplant Physician, Peerless Hospital, Guwahati delivered an insightful guest lecture and engaged students in an interactive session to Celebrate World Kidney Day.",
            "18-09-2024 | Ms. Sarita Chettri delivered a guest lecture for students.",
            "09-08-2024 | Mr. Chinmoy Thakuria delivered a guest lecture during the Student Induction Programme.",
            "01-04-2024 | Mr. Rickystar Syiemlieh conducted a webinar on Laparoscopic Instrumentation.",
            "16-10-2023 | Dr. Daisy Gogoi delivered a guest lecture on World Anaesthesia Day.",
            "12-05-2023 | Dr. Dashwa Langhbang delivered a guest lecture on Infection Control.",
            "06-04-2023 | Prof. (Dr.) Bibhuti Bhushan Borthakur delivered a guest lecture on World Health Day.",
            "31-03-2023 | Ms. Sarita Devi Chettri conducted a webinar on Surgical Instrumentation."
        ];

        const eventsTrack = document.getElementById("events-track");

        if (eventsTrack) {

            if (!eventsData || eventsData.length === 0) {
                eventsTrack.innerHTML = `
        <p style="text-align:center; padding:20px; color:#556b8d;">
          No events available at the moment.
        </p>
      `;
            } else {

                const createEventHTML = (text) => `
        <div class="dept-operationtheatre-event-item">
          ${text}
        </div>
      `;

                // Duplicate for seamless infinite scroll
                const fullContent = [...eventsData, ...eventsData]
                    .map(createEventHTML)
                    .join("");

                eventsTrack.innerHTML = fullContent;
            }
        }
    </script>

    <script>
        const tableData = [{
            title: "The Board of Studies",
            headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
            rows: [
                ["1", "Convener (Ex-Officio)- Head of the Department",
                    "Ms. Ibasiewdor Mawlein, Assistant Professor and Co-coordinator, Dept. of OTT"
                ],

                ["2", "Member (Ex-officio) - All Faculty Members",
                    "Ms. Ibasiewdor Mawlein, Assistant Professor and Co-coordinator, Dept. of OTT"
                ],

                ["3", "External Expert (Academic)",
                    "Ms. Haka-i-juh Bamon, Assistant Professor and Course Coordinator, Dept. of Trauma and Critical Care, Pratiksha Institute of Health Sciences, Guwahati"
                ],

                ["4", "External Expert (Industry)",
                    "Mr. Chinmoy Thakuria, Operation Theatre Technologist, Apollo Excelcare, Guwahati"
                ]
            ]
        }];

        const container = document.getElementById("table-accordion-container");

        if (container) {

            const createTable = (headers, rows) => {
                if (!rows || rows.length === 0) {
                    return `<p style="color:#556b8d;">No data available</p>`;
                }

                return `
        <div class="dept-operationtheatre-table-responsive">
          <table class="dept-operationtheatre-table">
            <thead>
              <tr>
                ${headers.map(h => `<th>${h}</th>`).join("")}
              </tr>
            </thead>
            <tbody>
              ${rows.map(row => `
                                <tr>
                                  ${row.map(col => `<td>${col || ""}</td>`).join("")}
                                </tr>
                              `).join("")}
            </tbody>
          </table>
        </div>
      `;
            };

            container.innerHTML = tableData.map(item => {

                const isEmpty = !item.rows || item.rows.length === 0;

                return `
        <div class="dept-operationtheatre-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-operationtheatre-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-operationtheatre-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-operationtheatre-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-operationtheatre-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-operationtheatre-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-operationtheatre-table-content");
            const icon = header.querySelector("i");

            item.classList.toggle("active");

            if (item.classList.contains("active")) {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.classList.replace("fa-plus", "fa-minus");
            } else {
                content.style.maxHeight = 0;
                icon.classList.replace("fa-minus", "fa-plus");
            }
        });
    </script>

    <script>
        const eventGalleryData = [{
                title: "The Department of Civil Engineering organized an industrial site visit to the RMC plant, providing students with valuable exposure to real-time concrete production and modern construction practices.",
                images: [
                    "/mobile-assets/department-all/rset/ce/events/1.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/2.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/3.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/4.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/5.jpeg"
                ]
            },
            {
                title: "The Department of Civil Engineering, The Assam Royal Global University, successfully hosted an inspiring Technical Talk on “Earthquake-Induced Liquefaction: Mechanisms, Impacts, and Countermeasures for Disaster-Resilient Infrastructure” along with insights on job opportunities in Japan.",
                images: [
                    "/mobile-assets/department-all/rset/ce/events/e2/e21.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/e2/e22.JPG",
                    "/mobile-assets/department-all/rset/ce/events/e2/e23.JPG",
                    "/mobile-assets/department-all/rset/ce/events/e2/e24.JPG",
                    "/mobile-assets/department-all/rset/ce/events/e2/e25.JPG"
                ]
            }
        ];

        const galleryContainer = document.getElementById("event-gallery-container");

        if (galleryContainer) {

            galleryContainer.innerHTML = eventGalleryData.map(event => {

                const images = event.images || [];

                if (images.length === 0) {
                    return "";
                }

                // duplicate for infinite effect
                const marqueeImages = [...images, ...images]
                    .map(img => `<img src="${img}" alt="event">`)
                    .join("");

                return `
      <div class="dept-operationtheatre-event-card">

        <div class="dept-operationtheatre-event-title">
          ${event.title}
        </div>

        <div class="dept-operationtheatre-marquee">
          <div class="dept-operationtheatre-marquee-track">
            ${marqueeImages}
          </div>
        </div>

      </div>
    `;

            }).join("");
        }
    </script>

    <script>
        const tabs = document.querySelectorAll(".dept-achievement-tab");
        const panes = document.querySelectorAll(".dept-achievement-pane");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {

                // remove active
                tabs.forEach(t => t.classList.remove("active"));
                panes.forEach(p => p.classList.remove("active"));

                // add active
                tab.classList.add("active");
                document.getElementById(tab.dataset.tab).classList.add("active");
            });
        });
    </script>
@endsection
