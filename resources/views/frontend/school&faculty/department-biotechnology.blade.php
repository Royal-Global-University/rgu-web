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

        .dept-biotechnology-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-biotechnology-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-biotechnology-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-biotechnology-heading h1 span {
            color: var(--accent);
        }

        .dept-biotechnology-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-biotechnology-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-biotechnology-img {
            flex: 1;
            position: relative;
        }

        .dept-biotechnology-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-biotechnology-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-biotechnology-content {
            flex: 1;
        }

        .dept-biotechnology-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-biotechnology-content h3 span {
            color: var(--accent);
        }

        .dept-biotechnology-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-biotechnology-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-biotechnology-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-biotechnology-float-item {
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

        .dept-biotechnology-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-biotechnology-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-biotechnology-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-biotechnology-float-item:hover i {
            color: #fff;
        }

        .dept-biotechnology-float-item:hover .dept-biotechnology-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-biotechnology-admission-btn {
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

        .dept-biotechnology-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-biotechnology-admission-btn:hover {
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
            .dept-biotechnology-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-biotechnology-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-biotechnology-img img {
                padding-left: 0%;
            }

            .dept-biotechnology-floating {
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

            .dept-biotechnology-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-biotechnology-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-biotechnology-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-biotechnology-float-item:active i {
                color: var(--primary);
            }

            .dept-biotechnology-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-biotechnology-admission-btn {
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
            .dept-biotechnology-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-biotechnology-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-biotechnology-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-biotechnology-section-title span {
            color: var(--accent);
        }

        .dept-biotechnology-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-biotechnology-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-biotechnology-course-header {
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
        .dept-biotechnology-course-header::after {
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
        .dept-biotechnology-view-btn {
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

        .dept-biotechnology-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-biotechnology-course-body {
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
            .dept-biotechnology-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-biotechnology-img img {
                padding-left: 0%;
            }

            .dept-biotechnology-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-biotechnology-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-biotechnology-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-biotechnology-prospects-content {
                padding: 25px 20px;
            }


            .dept-biotechnology-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-biotechnology-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-biotechnology-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-biotechnology-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-biotechnology-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-biotechnology-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-biotechnology-list li {
            margin-bottom: 12px;
        }

        .dept-biotechnology-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-biotechnology-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-biotechnology-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-biotechnology-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-biotechnology-accordion-header {
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

        .dept-biotechnology-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-biotechnology-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-biotechnology-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-biotechnology-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-biotechnology-accordion-item.active .dept-biotechnology-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-biotechnology-accordion-item.active .dept-biotechnology-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-biotechnology-accordion-item.active .dept-biotechnology-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-biotechnology-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-biotechnology-syllabus-link {
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

        .dept-biotechnology-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-biotechnology-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-biotechnology-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-biotechnology-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-biotechnology-syllabus-link:hover .dept-biotechnology-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-biotechnology-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-biotechnology-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-biotechnology-lab-container {
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

        .dept-biotechnology-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-biotechnology-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-biotechnology-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-biotechnology-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-biotechnology-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-biotechnology-explore-btn {
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

        .dept-biotechnology-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-biotechnology-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-biotechnology-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-biotechnology-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-biotechnology-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-biotechnology-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-biotechnology-bullet-list li::before {
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
        .dept-biotechnology-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-biotechnology-events-box {
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
        .dept-biotechnology-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 15s linear infinite;
        }

        .dept-biotechnology-events-box:hover .dept-biotechnology-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-biotechnology-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-biotechnology-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-biotechnology-events-btn:hover {
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
        .dept-biotechnology-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-biotechnology-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-biotechnology-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-biotechnology-table-header {
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
        .dept-biotechnology-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-biotechnology-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-biotechnology-table-acc.active .dept-biotechnology-table-content {
            padding: 20px;
        }

        .dept-biotechnology-table-acc.active .dept-biotechnology-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-biotechnology-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-biotechnology-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-biotechnology-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-biotechnology-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-biotechnology-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-biotechnology-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-biotechnology-table td,
        .dept-biotechnology-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-biotechnology-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-biotechnology-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-biotechnology-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-biotechnology-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-biotechnology-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-biotechnology-marquee:hover .dept-biotechnology-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-biotechnology-marquee img {
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
            .dept-biotechnology-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-biotechnology-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-biotechnology-achievement-tabs {
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
        .dept-biotechnology-achievement-content {
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
        .dept-biotechnology-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-biotechnology-recognition-container {
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
        .dept-biotechnology-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-biotechnology-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-biotechnology-recognition-content {
            flex: 2;
        }

        .dept-biotechnology-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-biotechnology-recognition-btn {
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

        .dept-biotechnology-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-biotechnology-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-biotechnology-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-biotechnology-recognition-content p {
                text-align: center;
            }

            .dept-biotechnology-recognition-btn {
                justify-content: center;
            }
        }

        /* new css */

        .dept-biotechnology-bullett-list {
            column-count: 3;
            column-gap: 30px;
        }

        .dept-biotechnology-bullett-list {
            column-count: 3;
            column-gap: 40px;
            list-style-type: disc;
            padding-left: 20px;
        }

        .dept-biotechnology-bullett-list li {
            break-inside: avoid;
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            margin-bottom: 10px;
            display: list-item;
            /* important fix */
        }

        @media (max-width: 992px) {
            .dept-biotechnology-bullett-list {
                column-count: 2;
            }
        }

        @media (max-width: 576px) {
            .dept-biotechnology-bullett-list {
                column-count: 1;
            }
        }
    </style>

    <div class="dept-biotechnology-floating">
        <a href="#dept-home" class="dept-biotechnology-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-biotechnology-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-biotechnology-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-biotechnology-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-biotechnology-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-biotechnology-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-biotechnology-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-biotechnology-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-biotechnology-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-biotechnology-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-biotechnology-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-biotechnology-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-biotechnology-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-biotechnology-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-biotechnology-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-biotechnology-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-biotechnology-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-biotechnology-wrapper">

        <div class="dept-biotechnology-heading" id="dept-home">
            <h1>Department of <span>Biotechnology</span></h1>
            <h2>Royal School of Bio-Sciences (RSBSC)</h2>
        </div>

        <div class="dept-biotechnology-hero" id="dept-about">

            <div class="dept-biotechnology-img">
                <img src="/home-banner/bio-tech.png"
                    alt="Architecture">
            </div>

            <div class="dept-biotechnology-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Biotechnology was Established in 2018, the Department of Biotechnology is
                    committed to delivering quality
                    education and advancing impactful research in the field of bio-sciences. The department
                    offers graduate, master's, and doctoral programs designed to equip students with
                    multidisciplinary skills, preparing them for diverse careers in biotechnology and
                    fostering innovative ideas in bio-entrepreneurship. <br></br>

                </p>

            </div>

        </div>

        <div class="dept-biotechnology-prospects-section" id="dept-prospects">

            <div class="dept-biotechnology-prospects-content">

                <p class="dept-biotechnology-intro-text">
                    Our curriculum includes a wide range of elective courses, allowing students to specialize
                    in areas aligned with their research interests. Experienced faculty members, coming from
                    leading academic institutions and universities, bring diverse, interdisciplinary expertise
                    and contribute to national strategic development goals. <br></br>
                    To support academic and research excellence, the department provides state-of-the-art
                    infrastructure that enables students to strengthen both technical and innovative skills.
                    This capacity has been substantially enhanced through extramural grants amounting
                    to ₹1.95 crore, awarded under various schemes by funding agencies such as DBT, ICMR,
                    and DHR. These grants have significantly strengthened the department's research
                    infrastructure, enabling cutting-edge investigations and innovation. <br></br>
                </p>

                <p class="dept-biotechnology-intro-text">
                    Graduates of our programs emerge with:
                </p>

                <ul class="dept-biotechnology-bullet-list">
                    <li>Strong technical expertise and critical thinking to address scientific challenges</li>
                    <li>Effective written and oral communication skills</li>
                    <li>Awareness of the societal and environmental impact of biotechnology</li>
                    <li>Readiness to contribute to both private and government sectors of the biotechnology industry
                    </li>


                </ul>

                <p class="dept-biotechnology-intro-text">
                    The Department of Biotechnology is dedicated to nurturing the next generation of
                    scientists, innovators, and leaders who will shape the future of life sciences and bio-
                    industries.
                </p>




            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-biotechnology-prospects-section" id="dept-vision">
            <h2 class="dept-biotechnology-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-biotechnology-prospects-content">

                <h3 class="dept-biotechnology-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-biotechnology-bullet-list">
                    <li>
                        To produce biologists with strong ethics, integrity, acumen, and preparedness to tackle any
                        emerging problem of global concern by fostering curated opportunities in the course area
                        to push themselves at the global platform.
                    </li>

                </ul>

                <h3 class="dept-biotechnology-subheading">Our Mission</h3>
                <ul class="dept-biotechnology-bullet-list">
                    <li>
                        To impart quality education to studentsthrough scientifically designed up-to-date course
                        structure and make them globally competitive.
                    </li>
                    <li>
                        To instil confidence in the students fordeveloping analytical skills to find out solutions
                        forcurrent and emerging problems of global concern.
                    </li>
                    <li>
                        To provide stateof the art academic and laboratory facilities with skilled training and
                        integration of interdisciplinary approach to foster entrepreneurial thinking.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-biotechnology-courses-section" id="dept-courses">
            <h2 class="dept-biotechnology-section-title">Courses <span>Offered</span></h2>

            <div class="dept-biotechnology-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-biotechnology-prospects-section" id="dept-prospects">
          <h2 class="dept-biotechnology-section-title">Career <span>Prospects</span></h2>

          <div class="dept-biotechnology-prospects-content">
            <p class="dept-biotechnology-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-biotechnology-subheading">Higher Education Opportunities</h3>
            <ol class="dept-biotechnology-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-biotechnology-subheading">Government Sector Jobs</h3>
            <ol class="dept-biotechnology-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-biotechnology-subheading">Private Sector Careers</h3>
            <ol class="dept-biotechnology-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-biotechnology-subheading">Research & Teaching</h3>
            <ol class="dept-biotechnology-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-biotechnology-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-biotechnology-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-biotechnology-subheading">Jobs Abroad</h3>
            <ol class="dept-biotechnology-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-biotechnology-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-biotechnology-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-biotechnology-accordion-section" id="dept-syllabus">
            <h2 class="dept-biotechnology-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-biotechnology-accordion-wrapper">

                <div class="dept-biotechnology-accordion-item active">
                    <div class="dept-biotechnology-accordion-header">
                        <div class="dept-biotechnology-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-biotechnology-chevron"></i>
                    </div>

                    <div class="dept-biotechnology-accordion-content">
                        <div class="dept-biotechnology-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsbsc/biotechnology/updated-syllabus/course-structure-bsc-bio-tech.pdf"
                                class="dept-biotechnology-syllabus-link">
                                <div class="dept-biotechnology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- B.Sc. Biotechnology
                                </div>
                                <i class="fa-solid fa-download dept-biotechnology-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsbsc/biotechnology/updated-syllabus/detailed-syllabus-bsc-bio-tech.pdf"
                                class="dept-biotechnology-syllabus-link">
                                <div class="dept-biotechnology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- B.Sc. Biotechnology
                                </div>
                                <i class="fa-solid fa-download dept-biotechnology-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-biotechnology-accordion-item">
                    <div class="dept-biotechnology-accordion-header">
                        <div class="dept-biotechnology-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-biotechnology-chevron"></i>
                    </div>

                    <div class="dept-biotechnology-accordion-content">
                        <div class="dept-biotechnology-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsbsc/biotechnology/updated-syllabus/detailed-syllabus-msc-bio-tech.pdf"
                                class="dept-biotechnology-syllabus-link">
                                <div class="dept-biotechnology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- M.Sc. Biotechnology
                                </div>
                                <i class="fa-solid fa-download dept-biotechnology-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-biotechnology-accordion-item">
                    <div class="dept-biotechnology-accordion-header">
                        <div class="dept-biotechnology-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-biotechnology-chevron"></i>
                    </div>

                    <div class="dept-biotechnology-accordion-content">
                        <div class="dept-biotechnology-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-biotechnology-syllabus-link" download>
                                <div class="dept-biotechnology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-biotechnology-events-section" id="dept-events">

            <h2 class="dept-biotechnology-section-title">Events</h2>

            <div class="dept-biotechnology-events-box">
                <div class="dept-biotechnology-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
            <a href="#" class="dept-biotechnology-events-btn">View All</a>
          </div> -->

        </div>





        <div class="dept-biotechnology-table-section" id="dept-committee">

            <div class="dept-biotechnology-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-biotechnology-lab-section" id="dept-lab">

            <div class="dept-biotechnology-lab-container">

                <h2 class="dept-biotechnology-section-title">Our <span>Lab</span></h2>

                <p class="dept-biotechnology-lab-intro">
                    The Biotechnology Laboratory is a state-of-the-art facility equipped with advanced instruments to
                    support high-quality practical training and research activities. It provides an interactive learning
                    environment where students gain hands-on experience with biological systems and bioprocesses,
                    fostering applications in medicine, engineering, technology, and the development of bioproducts.
                    Through access to modern laboratory resources, students develop a comprehensive understanding of
                    biomolecules, key biochemical concepts, and fundamental principles across diverse areas such as
                    microbiology, immunology, and environmental biotechnology. The laboratory is designed to cultivate
                    scientific curiosity and critical thinking while equipping students with strong theoretical,
                    technical, and analytical skills. Overall, the facility plays a pivotal role in preparing students
                    to effectively address real-world challenges and emerging opportunities in the field of
                    biotechnology.
                </p>


                <h3 class="dept-biotechnology-subheading">List of equipments</h3>
                <ul class="dept-biotechnology-bullett-list">
                    <li>All glass double distillation unit 5L</li>
                    <li>Autoclave</li>
                    <li>Bench top cold centrifuge with stabilizer</li>
                    <li>Benchtop Centrifuge</li>
                    <li>Biospectrophotometer</li>
                    <li>Chest freezer</li>
                    <li>Cyclo Mixer CM101</li>
                    <li>Digital colorimeter</li>
                    <li>Digital Colony Counter</li>
                    <li>Digital pH meter</li>
                    <li>Electronic Balance</li>
                    <li>ELISA Plate Reader</li>
                    <li>Gel Rocker</li>
                    <li>Gel-Doc Imaging system</li>
                    <li>High speed Homogenizer</li>
                    <li>Heating Mantel</li>
                    <li>Horizontal Gel Electrophoresis Apparatus</li>
                    <li>Hot air oven</li>
                    <li>Hot plate</li>
                    <li>Incubator (benchtop)</li>
                    <li>Laminar air flow</li>
                    <li>Magnetic Stirrer with hot plate</li>
                    <li>Microscopes</li>
                    <li>Probe Sonicator with Jack and sound enclosure</li>
                    <li>SDS Page</li>
                    <li>Shaker Incubator</li>
                    <li>Soxhlet Apparatus with heating mantle</li>
                    <li>T100 Thermal Cycler/PCR</li>
                    <li>Ultrasonic Bath Sonicator</li>
                    <li>UV-Visible Double beam spectrophotometer</li>
                    <li>UV-Vis Ultra transilluminator</li>
                    <li>Vertical Gel Electrophoresis Apparatus and power supply</li>
                    <li>Vortex shaker</li>
                    <li>Water Bath</li>
                    <li>Western Blot unit</li>
                    <li>Refrigerator</li>
                    <li>-20°C Deep freezer</li>

                </ul>


                <h3 class="dept-biotechnology-lab-heading">Our Lab Equipments</h3>

                <!-- <h2 class="dept-biotechnology-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-biotechnology-lab-gallery">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/3.jpg" alt="Lab 1"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/4.jpg" alt="Lab 2"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/5.jpg" alt="Lab 3"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/1.jpg" alt="Lab 4"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/2.jpg" alt="Lab 5"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/6.jpg" alt="Lab 6"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/7.jpg" alt="Lab 7"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/8.jpg" alt="Lab 8"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/9.jpg" alt="Lab 9"
                        class="dept-biotechnology-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-biotech-new/10.jpg" alt="Lab 10"
                        class="dept-biotechnology-lab-img">

                </div>

                <!-- <button class="dept-biotechnology-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. - Biotechnology",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MSc-Bio-Technology"
            },
            {
                title: "B.Sc. - Biotechnology | Honours / Honours with Research",
                duration: "4 years as per NEP",
                link: "https://www.rgu.ac/programs-b-sc-bio-technology"
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
            } else {
                // Generate course cards
                courseContainer.innerHTML = coursesData.map(course => `
        <div class="dept-biotechnology-course-card">

          <div class="dept-biotechnology-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-biotechnology-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-biotechnology-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-biotechnology-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-biotechnology-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-biotechnology-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-biotechnology-accordion-content');

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
            "14-05-2025 | One day Seminar on Centenary Anniversary of Quantum Mechanics.",
            "28-03-2025 | Invited Talk by Prof. Bipin Kumar Gupta.",
            "19-03-2025 | Invited Talk by Dr. Namrata Gogoi.",
            "28-02-2025 | National Science Day Celebration.",
            "24-02-2025 | Invited Talk by Dr. Hemen Kumar Kalita.",
            "21-02-2025 | Field visit to Center of Plasma Physics – Institute for Plasma Research (CPP-IPR), Guwahati.",
            "04-06-2022 | As part of the MoU with ICT Mumbai, a lecture series was organized by the Department of Chemistry and Biotechnology.",
            "13-03-2020 | Interactive session with Ms. Priyanka Das Rajkakati."
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
        <div class="dept-biotechnology-event-item">
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
                headers: ["S.No.", "Position in S-BoS", "Name and Designation"],
                rows: [
                    ["1", "Chairperson (ex-officio)", "Dr. Debajit Borah, Asst. Prof. and HOD, Biotechnology"],
                    ["2", "External Member",
                        "Prof. Probodh Borah, Director of Research, Assam Veterinary and Fishery University, Guwahati"
                    ],
                    ["3", "External Member",
                        "Dr. Hridip Kr Sarma, Prof., Dept. of Biotechnology, Gauhati University"
                    ],
                    ["4", "Member", "Prof. Anupam Chatterjee, Prof. and Dean, RSBSC, RGU"],
                    ["5", "Member", "Dr. Rupesh Kumar, Asst. Professor, Dept. of Biotechnology, RGU"],
                    ["6", "Member", "Dr. Bhaskarjyoti Gogoi, Asst. Professor, Dept. of Biotechnology, RGU"],
                    ["7", "Member", "Dr. Siddhartha Narayan Borah, Asst. Professor, Dept. of Biotechnology, RGU"],
                    ["8", "Member", "Dr. Rupshikha Patowary, Asst. Professor, Dept. of Biotechnology, RGU "],
                    ["9", "Member", "Dr. Mousumi Das Goswami, Asst. Professor, Dept. of Biotechnology, RGU"],
                    ["10", "Member", "Dr. Anuj Kumar Borah, Asst. Professor, Dept. of Biotechnology, RGU"],
                    ["11", "Member",
                    "Dr. Chongtham Sovachandra Singh, Asst. Professor, Dept. of Biotechnology,RGU"],
                    ["12", "Member", "Dr. Manisha Choudhury, Asst. Professor, Dept. of Biotechnology, RGU"],




                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Position in DRC", "Name and Designation", ],
                rows: [
                    ["1", "Chairperson", "Dr. Debajit Borah, Assoc. Prof. and Head, Dept. of Biotechnology", ],
                    ["2", "Member", "Prof. Anupam Chatterjee, Prof. and Dean, RSBSC"],
                    ["3", "Member", "Dr. Bhaskarjyoti Gogoi, Asst. Prof., Dept. of Biotechnology"],
                    ["4", "Member", "Dr. Siddhartha Narayan Borah, Asst. Prof., Dept. of Biotechnology"],
                    ["5", "External Member",
                        "Prof. Jagat C. Borah, Department of Medicinal Chemistry, National Institute of Pharmaceutical Education and Research (NIPER)-Guwahati"
                    ],



                ]
            },

        ];


        const container = document.getElementById("table-accordion-container");

        if (container) {

            const createTable = (headers, rows) => {
                if (!rows || rows.length === 0) {
                    return `<p style="color:#556b8d;">No data available</p>`;
                }

                return `
        <div class="dept-biotechnology-table-responsive">
          <table class="dept-biotechnology-table">
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
        <div class="dept-biotechnology-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-biotechnology-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-biotechnology-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-biotechnology-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-biotechnology-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-biotechnology-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-biotechnology-table-content");
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
      <div class="dept-biotechnology-event-card">

        <div class="dept-biotechnology-event-title">
          ${event.title}
        </div>

        <div class="dept-biotechnology-marquee">
          <div class="dept-biotechnology-marquee-track">
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
