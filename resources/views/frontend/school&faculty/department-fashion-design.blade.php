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

        .dept-rsft-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-rsft-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-rsft-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-rsft-heading h1 span {
            color: var(--accent);
        }

        .dept-rsft-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-rsft-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-rsft-img {
            flex: 1;
            position: relative;
        }

        .dept-rsft-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-rsft-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-rsft-content {
            flex: 1;
        }

        .dept-rsft-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-rsft-content h3 span {
            color: var(--accent);
        }

        .dept-rsft-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-rsft-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-rsft-floating {
            position: fixed;
            left: 30px;
            top: 60%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-rsft-float-item {
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

        .dept-rsft-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-rsft-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-rsft-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-rsft-float-item:hover i {
            color: #fff;
        }

        .dept-rsft-float-item:hover .dept-rsft-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-rsft-admission-btn {
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

        .dept-rsft-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-rsft-admission-btn:hover {
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
            .dept-rsft-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-rsft-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-rsft-img img {
                padding-left: 0%;
            }

            .dept-rsft-floating {
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

            .dept-rsft-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-rsft-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-rsft-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-rsft-float-item:active i {
                color: var(--primary);
            }

            .dept-rsft-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-rsft-admission-btn {
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
            .dept-rsft-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-rsft-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-rsft-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-rsft-section-title span {
            color: var(--accent);
        }

        .dept-rsft-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-rsft-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-rsft-course-header {
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
        .dept-rsft-course-header::after {
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
        .dept-rsft-view-btn {
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

        .dept-rsft-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-rsft-course-body {
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
            .dept-rsft-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-rsft-img img {
                padding-left: 0%;
            }

            .dept-rsft-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-rsft-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-rsft-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-rsft-prospects-content {
                padding: 25px 20px;
            }


            .dept-rsft-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-rsft-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-rsft-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-rsft-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-rsft-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-rsft-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-rsft-list li {
            margin-bottom: 12px;
        }

        .dept-rsft-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-rsft-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-rsft-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-rsft-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-rsft-accordion-header {
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

        .dept-rsft-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-rsft-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-rsft-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-rsft-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-rsft-accordion-item.active .dept-rsft-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-rsft-accordion-item.active .dept-rsft-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-rsft-accordion-item.active .dept-rsft-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-rsft-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-rsft-syllabus-link {
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

        .dept-rsft-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-rsft-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-rsft-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-rsft-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-rsft-syllabus-link:hover .dept-rsft-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-rsft-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-rsft-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-rsft-lab-container {
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

        .dept-rsft-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-rsft-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1300px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-rsft-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-rsft-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-rsft-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-rsft-explore-btn {
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

        .dept-rsft-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-rsft-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-rsft-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-rsft-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-rsft-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-rsft-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-rsft-bullet-list li::before {
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
        .dept-rsft-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rsft-events-box {
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
        .dept-rsft-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-rsft-events-box:hover .dept-rsft-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-rsft-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-rsft-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-rsft-events-btn:hover {
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
        .dept-rsft-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-rsft-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-rsft-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-rsft-table-header {
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
        .dept-rsft-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-rsft-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-rsft-table-acc.active .dept-rsft-table-content {
            padding: 20px;
        }

        .dept-rsft-table-acc.active .dept-rsft-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-rsft-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-rsft-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-rsft-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-rsft-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-rsft-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-rsft-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-rsft-table td,
        .dept-rsft-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-rsft-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rsft-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-rsft-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-rsft-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-rsft-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-rsft-marquee:hover .dept-rsft-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-rsft-marquee img {
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
            .dept-rsft-marquee img {
                height: 160px;
            }
        }

        .dept-rsft-prospects-content {
            padding: 25px 20px;
        }
    </style>

        <div class="dept-rsft-floating">
        <a href="#dept-home" class="dept-rsft-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-rsft-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-rsft-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-rsft-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-rsft-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-rsft-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-rsft-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-rsft-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-rsft-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-rsft-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-rsft-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-rsft-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-rsft-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-rsft-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-rsft-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-rsft-float-text">Studio</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-rsft-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-rsft-wrapper">

        <div class="dept-rsft-heading" id="dept-home">
            <h1>Department of <span>Fashion Design</span></h1>
            <h2>Royal School of Fashion Design & Technology (RSFT)</h2>
        </div>

        <div class="dept-rsft-hero" id="dept-about">

            <div class="dept-rsft-img">
                <img src="/five-days-conference/rsft.png" alt="Fashion Design">
            </div>

            <div class="dept-rsft-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Royal School of Fashion Design & Technology at Royal Global University stands as a beacon of
                    innovation and excellence, nurturing creative talents and preparing graduates for dynamic careers in
                    the fashion industry. Our program is renowned for its comprehensive curriculum that blends
                    traditional design principles with cutting-edge technologies, ensuring that students are well-versed
                    in both the artistry and the technical skills required in fashion. A unique highlight of our
                    department is the "Royal Boutique," an on-campus enterprise where students gain hands-on experience
                    by creating and selling designer garments while they study. This real-world exposure to fashion
                    entrepreneurship enables students to apply their learning practically, fostering skills in design,
                    production, and retail. Our thrust areas include sustainable fashion practices, digital fashion
                    technologies, and fashion marketing, reflecting the department's commitment to contemporary industry
                    trends and ethical design. Graduates from our program are well-equipped to excel in diverse roles
                    such as fashion designers, brand managers, and fashion technologists, with the versatility to
                    innovate and lead in the ever-evolving fashion landscape. With a strong foundation in both creative
                    and business aspects of fashion, our alumni are poised to make significant contributions to the
                    global fashion industry, driving forward the future of design with vision and purpose.

                </p>



            </div>

        </div>



        <!-- vision mission  -->
        <div class="dept-rsft-prospects-section" id="dept-vision">
            <h2 class="dept-rsft-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-rsft-prospects-content">

                <h3 class="dept-rsft-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-rsft-bullet-list">
                    <li>
                        To offer students nationally and internationally integrated opportunities in the field
                        of design to create global citizens, endowed with creativity and inclusive ideal of
                        sustainability.
                    </li>

                </ul>

                <h3 class="dept-rsft-subheading">Our Mission</h3>
                <ul class="dept-rsft-bullet-list">
                    <li>
                        To achieve academic excellence through a creatively designed, research-
                        intensive, and industry-oriented curriculum in fashion design.
                    </li>
                    <li>
                        To incorporate community service and sustainable practices into fashion design
                        education, instilling ethical conduct and compassion among students and
                        stakeholders.
                    </li>
                    <li>
                        To prepare students to become responsible leaders in the fashion industry,
                        capable of enriching the future by driving positive transformation and innovation
                        in the world.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-rsft-courses-section" id="dept-courses">
            <h2 class="dept-rsft-section-title">Courses <span>Offered</span></h2>

            <div class="dept-rsft-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-rsft-prospects-section" id="dept-prospects">
      <h2 class="dept-rsft-section-title">Career <span>Prospects</span></h2>

      <div class="dept-rsft-prospects-content">
        <p class="dept-rsft-intro-text">
          The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
          sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
          strong foundation in agricultural sciences, preparing them for following careers opportunities:
        </p>

        <h3 class="dept-rsft-subheading">Higher Education Opportunities</h3>
        <ol class="dept-rsft-list">
          <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
          </li>
          <li>MBA in Agribusiness Management</li>
          <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
          <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
            disciplines</li>
        </ol>

        <h3 class="dept-rsft-subheading">Government Sector Jobs</h3>
        <ol class="dept-rsft-list">
          <li>Agricultural Officer / Civil Development Officer (ADO)</li>
          <li>IBPS AFO (Agricultural Field Officer)</li>
          <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
          <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
          <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
        </ol>

        <h3 class="dept-rsft-subheading">Private Sector Careers</h3>
        <ol class="dept-rsft-list">
          <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
          <li>Food Processing Industries</li>
          <li>Agri-Tech Startups – technology-based agricultural solutions</li>
          <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
          <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
        </ol>

        <h3 class="dept-rsft-subheading">Research & Teaching</h3>
        <ol class="dept-rsft-list">
          <li>Research Assistant / Scientist – in public and private research institutions</li>
          <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
          <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
        </ol>

        <h3 class="dept-rsft-subheading">Entrepreneurship & Startups</h3>
        <ol class="dept-rsft-list">
          <li>Organic farming, dairy, poultry, aquaculture</li>
          <li>Agri-tourism, greenhouse farming, vertical farming</li>
          <li>Processing units for spices, cereals, or fruits</li>
          <li>Agri-consultancy or freelance advisory services</li>
        </ol>

        <h3 class="dept-rsft-subheading">Jobs Abroad</h3>
        <ol class="dept-rsft-list">
          <li>Agricultural research, farm management, and food security projects</li>
          <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
          <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
        </ol>

        <h3 class="dept-rsft-subheading">Key Skills That Boost Career</h3>
        <ol class="dept-rsft-list">
          <li>Practical knowledge of farming tools and technologies</li>
          <li>Communication and management skills (especially in extension or agribusiness)</li>
          <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
          <li>Language skills and report writing</li>
        </ol>

      </div>
    </div> -->

        <div class="dept-rsft-accordion-section" id="dept-syllabus">
            <h2 class="dept-rsft-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-rsft-accordion-wrapper">

                <div class="dept-rsft-accordion-item active">
                    <div class="dept-rsft-accordion-header">
                        <div class="dept-rsft-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rsft-chevron"></i>
                    </div>

                    <div class="dept-rsft-accordion-content">
                        <div class="dept-rsft-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsd/fashion-design/syllabus/Course-structure-Fashion-Design.pdf"
                                class="dept-rsft-syllabus-link" download>
                                <div class="dept-rsft-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Fashion Design
                                </div>
                                <i class="fa-solid fa-download dept-rsft-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsd/fashion-design/syllabus/B.DES.-Fashion-design_Detailed-Syllabus.pdf"
                                class="dept-rsft-syllabus-link" download>
                                <div class="dept-rsft-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Fashion Design
                                </div>
                                <i class="fa-solid fa-download dept-rsft-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div class="dept-rsft-accordion-item">
                    <div class="dept-rsft-accordion-header">
                        <div class="dept-rsft-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rsft-chevron"></i>
                    </div>

                    <div class="dept-rsft-accordion-content">
                        <div class="dept-rsft-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/dept-rsft/syllabus-chemistry/detailed-syllabus-pg.pdf"
                                class="dept-rsft-syllabus-link" download>
                                <div class="dept-rsft-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- M.Sc. Chemistry
                                </div>
                                <i class="fa-solid fa-download dept-rsft-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div> -->

                <div class="dept-rsft-accordion-item">
                    <div class="dept-rsft-accordion-header">
                        <div class="dept-rsft-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rsft-chevron"></i>
                    </div>

                    <div class="dept-rsft-accordion-content">
                        <div class="dept-rsft-syllabus-list">
                            <a href="https://www.rgu.ac/doctoral-programme" class="dept-rsft-syllabus-link" download>
                                <div class="dept-rsft-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-rsft-events-section" id="dept-events">

            <h2 class="dept-rsft-section-title">Events</h2>

            <div class="dept-rsft-events-box">
                <div class="dept-rsft-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
        <a href="#" class="dept-rsft-events-btn">View All</a>
      </div> -->

        </div>

        <div class="dept-rsft-table-section" id="dept-committee">

            <div class="dept-rsft-table-grid" id="table-accordion-container"></div>

        </div>


        <div class="dept-rsft-lab-section" id="dept-lab">

            <div class="dept-rsft-lab-container">


                <h2 class="dept-rsft-section-title">Royal <span>Boutique</span></h2>
                <div class="dept-rsft-prospects-content">

                    <p style="font-style: italic; font-weight: bold;">“Where creativity meets craftsmanship.”</p>
                    <p class="dept-rsft-lab-intro">

                        The Royal Boutique, inaugurated on 21st September 2023, stands as a unique initiative and the
                        only boutique of its kind within a university across Northeast India. It serves as a vibrant
                        platform that highlights the creative works of fashion design students, bringing their ideas to
                        life through innovative and contemporary designs.
                        The boutique also offers customised garment services tailored to clients’ needs, crafted by
                        experienced professionals, seamlessly connecting academic learning with real-world practice.
                        Additionally, it hosts departmental events and highlights, providing students with valuable
                        opportunities to build confidence, enhance creativity, and gain practical exposure to the
                        fashion industry.
                    </p>



                </div>


                <!-- <h2 class="dept-rsft-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-rsft-lab-gallery">
                    <img src="https://www.rgu.ac/mobile-assets/studio/boutique/royal%20boutique%201.jpeg" alt="Lab 1" class="dept-rsft-lab-img">

                    <img src="https://www.rgu.ac/mobile-assets/laboratories/rsft/photo%20for%20royal%20boutique%201.jpeg" alt="Lab 2" class="dept-rsft-lab-img">

                    <img src="https://www.rgu.ac/mobile-assets/studio/boutique/royal%20boutique%203.jpeg" alt="Lab 3" class="dept-rsft-lab-img">

                    <img src="https://www.rgu.ac/mobile-assets/studio/boutique/royal%20boutique%205.jpeg" alt="Lab 4" class="dept-rsft-lab-img">

                    <img src="https://www.rgu.ac/mobile-assets/studio/boutique/royal%20boutique%206.jpeg" alt="Lab 5" class="dept-rsft-lab-img">



                </div>

                <!-- <button class="dept-rsft-explore-btn">Explore</button> -->
            </div>

        </div>




    </div>

    <script>
    // 1. Define the courses array
    const coursesData = [
        {
            title: "M.Des - Fashion Design(FD)",
            duration: "2 years",
            link: "https://www.rgu.ac/programme-mdes-fashion-design"
        },
        {
            title: "B.Des - Fashion Design(FD)",
            duration: "4 years",
            link: "https://www.rgu.ac/programs-b-des-fd-fashion-design"
        }
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
        }
        else {
            // Generate course cards
            courseContainer.innerHTML = coursesData.map(course => `
        <div class="dept-rsft-course-card">

          <div class="dept-rsft-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-rsft-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-rsft-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
        }
    }
</script>

<script>
    // --- ACCORDION LOGIC ---
    const accordionHeaders = document.querySelectorAll('.dept-rsft-accordion-header');

    // Function to calculate and set the exact height for smooth transitions
    function setAccordionHeights() {
        const activeItems = document.querySelectorAll('.dept-rsft-accordion-item.active');
        activeItems.forEach(item => {
            const content = item.querySelector('.dept-rsft-accordion-content');
            content.style.maxHeight = content.scrollHeight + "px";
        });
    }

    // Initialize the open item on load
    setAccordionHeights();

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const currentItem = this.parentElement;
            const currentContent = currentItem.querySelector('.dept-rsft-accordion-content');

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
        "06-02-2018 | Ms. Anamika Chaudhury (Fashion entrepreneur) | Interactive session on fashion entrepreneurship.",

        "07-02-2018 | Mr. Soumar J Sharma (Fashion designer) | Interactive session on fashion and others.",

        "29-08-2018 | Ms. Swagata Dev (Fashion blogger) | Interactive session on fashion journalism.",

        "27-06-2018 | Ms. Nein Siao (Dean, School of Design & Fashion, IILM University & academic advisor at JS Institute of Design) | RGU Speaker Series - Be vocal about local: traditional textiles & crafts as future fashion statement.",

        "-- | Ms. Meghali Das (Vice chairperson, FICCI Ladies Organisation 2019-20 & owner of Needle Craft) | Guest speaker.",

        "-- | Mr. Sonam Tashi Gyaltsen (Industrial designer & co-founder of Echostream; designer/owner of LA & T) | Guest lecture.",

        "-- | Ms. Himani Thapa (Founder of sustainable fashion label ORI) | Talk on sustainable fashion.",

        "12-09-2018 | Ms. Dipeeka Betala Saboo (Fashion designer) | Interactive session on digital marketing as a career option.",

        "17-06-2019 | Ms. Mrittika Banerjee (Founder of EAST by Mrittika) | Webinar on fashion business startup and entrepreneurship.",

        "24-06-2019 | Mr. Ameet Barua (Designer & innovator at KYNKOO Menswear and Emily's Workshop for womenswear) | Webinar on merchandising as a career option in the fashion industry."
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
        <div class="dept-rsft-event-item">
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
    const tableData = [
        {
            title: "The Board of Studies",
            headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
            rows: [

                ["1", "Chairperson (Ex- Officio) Dean of School", "Prof. (Dr.) Hari Prasad Agarwal"],

                ["2", "Registrar, Member Secretary (Ex Officio)", "Dr. Diganta Munsi, Registrar RGU"],

                ["3", "Dean Of Academics, (Invited Member)", "Prof. Nandana Das"],
                ["4", "Members (Ex- Officio) All Head of the Department", "Asif Iqbal Mazid, Assistant Professor, Co-Ordinator of RSD"],
                ["", "", "Ar. Bhola Saha, Assistant Professor, Co-Ordinator of ID"],
                ["5", "External Expert for each Department (Academic)", "Prof. (Dr.) Sougata Karmakar, HoD, Dept. of Design, Indian Institute of Technology, Guwahati"],
                ["", "", "Ms Nien Siao, JS Institute of Design, New Design"],
                ["6", "External Expert for each Department (Industry)", "Mr. Tuhin Bhuyan, Full Stack Developer + Interaction Designer"],
                ["", "", "Mr. Ameet Baruah Fashion Designer, Kyn Koo, Guwahati"],



            ]
        },
        {
            title: "Departmental Research Committee (DRC)",
            headers: ["S.No.", "Position in S-BoS", "Name and Designation"],
            rows: [

                ["1", "Chairperson (Ex-Officio) Dean of School", "Hari Prasad Agarwal, Dean, RSFT/RSFA/RSD/RSA"],

                ["2", "All Heads of the Departments - Members (Ex-Officio)", "Mr. Ashif Mazid, Assistant Professor, RSFT"],

                ["3", "External Experts for each Department (Academic)", "Prof. (Dr.) Sougata Karmakar, HOD, Dept: of Design, Indian Institute of Technology, Guwahati."],

                ["4", "External Experts for each Department (Industry)", "Mr. Tuhin Bhuyan, Full stack developer + Interaction Designer Founder @ Projckt, Chandigarh"],

                ["5", "Two Faculty members of the School nominated by the Vice Chancellor", "Asif Iqbal Mazid, Assistant Professor, RSFT"],

                ["", "", "Sanjay Krishna Kutum, Assistant Professor, RSFT"],

                ["6", "Registrar, Member Secretary (Ex-officio)", "Dr. D.N Singh, Registrar"]

            ]
        }
    ];

    const container = document.getElementById("table-accordion-container");

    if (container) {

        const createTable = (headers, rows) => {
            if (!rows || rows.length === 0) {
                return `<p style="color:#556b8d;">No data available</p>`;
            }

            return `
        <div class="dept-rsft-table-responsive">
          <table class="dept-rsft-table">
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
        <div class="dept-rsft-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-rsft-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-rsft-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
        }).join("");
    }

    /* ACCORDION (single open at a time) */
    document.addEventListener("click", function (e) {
        const header = e.target.closest(".dept-rsft-table-header");
        if (!header) return;

        const item = header.parentElement;
        if (item.classList.contains("disabled")) return;

        const allItems = document.querySelectorAll(".dept-rsft-table-acc");

        allItems.forEach(acc => {
            if (acc !== item) {
                acc.classList.remove("active");
                const content = acc.querySelector(".dept-rsft-table-content");
                const icon = acc.querySelector("i");
                if (content) content.style.maxHeight = 0;
                if (icon) icon.classList.replace("fa-minus", "fa-plus");
            }
        });

        const content = item.querySelector(".dept-rsft-table-content");
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
    const eventGalleryData = [
        {
            title: "The Department of Civil Engineering organized an industrial site visit to the RMC plant, providing students with valuable exposure to real-time concrete production and modern construction practices.",
            images: [
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/1.jpeg",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/2.jpeg",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/3.jpeg",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/4.jpeg",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/5.jpeg"
            ]
        },
        {
            title: "The Department of Civil Engineering, The Assam Royal Global University, successfully hosted an inspiring Technical Talk on “Earthquake-Induced Liquefaction: Mechanisms, Impacts, and Countermeasures for Disaster-Resilient Infrastructure” along with insights on job opportunities in Japan.",
            images: [
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/e2/e21.jpeg",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/e2/e22.JPG",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/e2/e23.JPG",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/e2/e24.JPG",
                "https://www.rgu.ac/mobile-assets/department-all/rset/ce/events/e2/e25.JPG"
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
      <div class="dept-rsft-event-card">

        <div class="dept-rsft-event-title">
          ${event.title}
        </div>

        <div class="dept-rsft-marquee">
          <div class="dept-rsft-marquee-track">
            ${marqueeImages}
          </div>
        </div>

      </div>
    `;

        }).join("");
    }
</script>
@endsection
