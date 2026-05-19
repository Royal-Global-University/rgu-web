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

        .dept-cse-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-cse-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-cse-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-cse-heading h1 span {
            color: var(--accent);
        }

        .dept-cse-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-cse-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-cse-img {
            flex: 1;
            position: relative;
        }

        .dept-cse-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-cse-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-cse-content {
            flex: 1;
        }

        .dept-cse-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-cse-content h3 span {
            color: var(--accent);
        }

        .dept-cse-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-cse-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-cse-floating {
            position: fixed;
            left: 30px;
            top: 60%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-cse-float-item {
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

        .dept-cse-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-cse-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-cse-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-cse-float-item:hover i {
            color: #fff;
        }

        .dept-cse-float-item:hover .dept-cse-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-cse-admission-btn {
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

        .dept-cse-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-cse-admission-btn:hover {
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
            .dept-cse-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-cse-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-cse-img img {
                padding-left: 0%;
            }

            .dept-cse-floating {
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

            .dept-cse-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-cse-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-cse-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-cse-float-item:active i {
                color: var(--primary);
            }

            .dept-cse-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-cse-admission-btn {
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
            .dept-cse-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-cse-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-cse-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-cse-section-title span {
            color: var(--accent);
        }

        .dept-cse-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-cse-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-cse-course-header {
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
        .dept-cse-course-header::after {
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
        .dept-cse-view-btn {
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

        .dept-cse-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-cse-course-body {
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
            .dept-cse-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-cse-img img {
                padding-left: 0%;
            }

            .dept-cse-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-cse-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-cse-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-cse-prospects-content {
                padding: 25px 20px;
            }


            .dept-cse-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-cse-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-cse-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-cse-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-cse-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-cse-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-cse-list li {
            margin-bottom: 12px;
        }

        .dept-cse-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-cse-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-cse-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-cse-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-cse-accordion-header {
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

        .dept-cse-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-cse-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-cse-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-cse-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-cse-accordion-item.active .dept-cse-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-cse-accordion-item.active .dept-cse-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-cse-accordion-item.active .dept-cse-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-cse-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-cse-syllabus-link {
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

        .dept-cse-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-cse-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-cse-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-cse-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-cse-syllabus-link:hover .dept-cse-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-cse-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-cse-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-cse-lab-container {
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

        .dept-cse-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-cse-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1300px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-cse-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-cse-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 4 / 4;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-cse-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-cse-explore-btn {
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

        .dept-cse-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-cse-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-cse-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-cse-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-cse-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-cse-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-cse-bullet-list li::before {
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
        .dept-cse-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-cse-events-box {
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
        .dept-cse-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-cse-events-box:hover .dept-cse-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-cse-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-cse-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-cse-events-btn:hover {
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
        .dept-cse-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-cse-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-cse-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-cse-table-header {
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
        .dept-cse-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-cse-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-cse-table-acc.active .dept-cse-table-content {
            padding: 20px;
        }

        .dept-cse-table-acc.active .dept-cse-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-cse-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-cse-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-cse-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-cse-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-cse-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-cse-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-cse-table td,
        .dept-cse-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-cse-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-cse-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-cse-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-cse-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-cse-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-cse-marquee:hover .dept-cse-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-cse-marquee img {
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
            .dept-cse-marquee img {
                height: 160px;
            }
        }
    </style>

    <div class="dept-cse-floating">
        <a href="#dept-home" class="dept-cse-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-cse-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-cse-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-cse-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-cse-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-cse-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-cse-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-cse-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-cse-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-cse-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-cse-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-cse-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-cse-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-cse-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-cse-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-cse-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-cse-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-cse-wrapper">

        <div class="dept-cse-heading" id="dept-home">
            <h1>Department of <span>Computer Science & Engineering</span></h1>
            <h2>Royal School of Engineering & Technology (RSET)</h2>
        </div>

        <div class="dept-cse-hero" id="dept-about">

            <div class="dept-cse-img">
                <img src="https://www.rgu.ac/mobile-assets/department-all/rset/cse/headimg.png" alt="Architecture">
            </div>

            <div class="dept-cse-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Computer Science and Engineering (CSE) provides comprehensive facilities and
                    resources essential for academic and research excellence, including audiovisual equipment, advanced
                    computing labs, a well-stocked library, robust networking infrastructure, and dedicated technical
                    support. The department focuses on key areas such as Network Engineering, AI, Data Mining, Neural
                    Networks, Image Processing, NLP, and Computer Vision. Strengths of the department include dynamic
                    faculty, strong student-teacher relationships, excellent exam performance, and a commendable
                    placement record, while opportunities lie in technological adaptation, enhanced R&D consultancy,
                    adaption of new CSE courses, and interdisciplinary growth.



                </p>



            </div>

        </div>


        <div class="dept-cse-prospects-section" id="dept-vision">

            <div class="dept-cse-prospects-content">

                <p class="dept-cse-intro-text">
                    Challenges include international collaboration, national R&D networking, NRI student attraction, and
                    extension activities. Future plans feature the formation of IoT and Data Science labs with industry
                    collaboration, interdisciplinary research projects, and organizing cutting-edge technology workshops
                    and international conferences. Graduates and postgraduates from the department enjoy promising
                    career prospects in various sectors, securing roles in tech giants, finance, healthcare,
                    manufacturing, and government, often continuing education in AI, ML, Data Science, or Cybersecurity,
                    and achieving professional certifications. Emerging trends in AI, ML, cybersecurity, data science,
                    cloud computing, blockchain, IoT, and quantum computing offer substantial opportunities. Technical
                    expertise combined with soft skills like problem-solving, communication, teamwork, and adaptability
                    ensures graduates remain competitive, continuously engaging in lifelong learning to stay ahead in a
                    dynamic tech industry, thus positioning them for success in a technology-driven future.
                </p>


            </div>
        </div>


        <!-- vision mission  -->
        <div class="dept-cse-prospects-section" id="dept-vision">
            <h2 class="dept-cse-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-cse-prospects-content">

                <h3 class="dept-cse-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-cse-bullet-list">
                    <li>
                        To offer globally integrated opportunities in the domain of computer science and
                        engineering, fostering the development of students as global citizens with the skills and
                        perspectives needed to thrive in an interconnected world.
                    </li>

                </ul>

                <h3 class="dept-cse-subheading">Our Mission</h3>
                <ul class="dept-cse-bullet-list">
                    <li>
                        To achieve academic excellence in computer science education through dynamic
                        curriculum, research-driven initiatives, and industry-aligned programs.
                    </li>
                    <li>
                        To instil ethical values and a spirit of community service
                    </li>
                    <li>
                        To give back responsible leaders equipped to drive positive change and innovation in the
                        global technological landscape.
                    </li>
                </ul>

            </div>
        </div>

        <div class="dept-cse-courses-section" id="dept-courses">
            <h2 class="dept-cse-section-title">Courses <span>Offered</span></h2>

            <div class="dept-cse-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-cse-prospects-section" id="dept-prospects">
                  <h2 class="dept-cse-section-title">Career <span>Prospects</span></h2>

                  <div class="dept-cse-prospects-content">
                    <p class="dept-cse-intro-text">
                      The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
                      sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                      strong foundation in agricultural sciences, preparing them for following careers opportunities:
                    </p>

                    <h3 class="dept-cse-subheading">Higher Education Opportunities</h3>
                    <ol class="dept-cse-list">
                      <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                      </li>
                      <li>MBA in Agribusiness Management</li>
                      <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                      <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                        disciplines</li>
                    </ol>

                    <h3 class="dept-cse-subheading">Government Sector Jobs</h3>
                    <ol class="dept-cse-list">
                      <li>Agricultural Officer / Civil Development Officer (ADO)</li>
                      <li>IBPS AFO (Agricultural Field Officer)</li>
                      <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                      <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                      <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                    </ol>

                    <h3 class="dept-cse-subheading">Private Sector Careers</h3>
                    <ol class="dept-cse-list">
                      <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                      <li>Food Processing Industries</li>
                      <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                      <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
                      <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                    </ol>

                    <h3 class="dept-cse-subheading">Research & Teaching</h3>
                    <ol class="dept-cse-list">
                      <li>Research Assistant / Scientist – in public and private research institutions</li>
                      <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                      <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                    </ol>

                    <h3 class="dept-cse-subheading">Entrepreneurship & Startups</h3>
                    <ol class="dept-cse-list">
                      <li>Organic farming, dairy, poultry, aquaculture</li>
                      <li>Agri-tourism, greenhouse farming, vertical farming</li>
                      <li>Processing units for spices, cereals, or fruits</li>
                      <li>Agri-consultancy or freelance advisory services</li>
                    </ol>

                    <h3 class="dept-cse-subheading">Jobs Abroad</h3>
                    <ol class="dept-cse-list">
                      <li>Agricultural research, farm management, and food security projects</li>
                      <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                      <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                    </ol>

                    <h3 class="dept-cse-subheading">Key Skills That Boost Career</h3>
                    <ol class="dept-cse-list">
                      <li>Practical knowledge of farming tools and technologies</li>
                      <li>Communication and management skills (especially in extension or agribusiness)</li>
                      <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
                      <li>Language skills and report writing</li>
                    </ol>

                  </div>
                </div> -->

        <div class="dept-cse-accordion-section" id="dept-syllabus">
            <h2 class="dept-cse-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-cse-accordion-wrapper">

                <div class="dept-cse-accordion-item active">
                    <div class="dept-cse-accordion-header">
                        <div class="dept-cse-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-cse-chevron"></i>
                    </div>

                    <div class="dept-cse-accordion-content">
                        <div class="dept-cse-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rset/cse/updated-syllabus/Course_structure_CSE.pdf"
                                class="dept-cse-syllabus-link" download>
                                <div class="dept-cse-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- CSE
                                </div>
                                <i class="fa-solid fa-download dept-cse-download-icon"></i>
                            </a>
                            <a target="_blank" href="https://www.rgu.ac/mobile-assets/syllabus/CSE/BTech_CSE_Syllabus.pdf"
                                class="dept-cse-syllabus-link" download>
                                <div class="dept-cse-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- B.Tech CSE
                                </div>
                                <i class="fa-solid fa-download dept-cse-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/AI/BTech_AI%20&%20DS%20Syllabus.pdf"
                                class="dept-cse-syllabus-link" download>
                                <div class="dept-cse-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- B.Tech AI
                                </div>
                                <i class="fa-solid fa-download dept-cse-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-cse-accordion-item">
                    <div class="dept-cse-accordion-header">
                        <div class="dept-cse-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-cse-chevron"></i>
                    </div>

                    <div class="dept-cse-accordion-content">
                        <div class="dept-cse-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/CSE/M.%20Tech%20(CSE)_Detailed%20Syllabus.pdf"
                                class="dept-cse-syllabus-link" download>
                                <div class="dept-cse-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- M.Tech CSE
                                </div>
                                <i class="fa-solid fa-download dept-cse-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-cse-accordion-item">
                    <div class="dept-cse-accordion-header">
                        <div class="dept-cse-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-cse-chevron"></i>
                    </div>

                    <div class="dept-cse-accordion-content">
                        <div class="dept-cse-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-cse-syllabus-link" download>
                                <div class="dept-cse-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-cse-events-section" id="dept-events">

            <h2 class="dept-cse-section-title">Events</h2>

            <div class="dept-cse-events-box">
                <div class="dept-cse-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                    <a href="#" class="dept-cse-events-btn">View All</a>
                  </div> -->

        </div>

        <div class="dept-cse-event-gallery-section">

            <h2 class="dept-cse-section-title">Event <span>Highlights</span></h2>

            <div id="event-gallery-container"></div>

        </div>

        <div class="dept-cse-table-section" id="dept-committee">

            <div class="dept-cse-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-cse-lab-section" id="dept-lab">

            <div class="dept-cse-lab-container">

                <h2 class="dept-cse-section-title">Our <span>Lab</span></h2>

                <p class="dept-cse-lab-intro">
                    The Computer Science Laboratories feature a robust and well-integrated ecosystem of computing
                    laboratories designed to support academic excellence, hands-on learning, and advanced research
                    across multiple domains of computing. The department hosts several specialized labs, including
                    Computer Programming lab, Software Engineering Lab, Modern Database Systems Lab, Cryptography and
                    Network Security Lab, and a dedicated Artificial Intelligence Lab, collectively comprising over 280
                    computing systems configured for diverse workloads. These labs are powered by modern Intel Core i3
                    and i5 processors along with high-performance AMD Ryzen 7 systems, supported by NVMe storage and
                    GPU-enabled machines for compute-intensive tasks.
                    <br> <br>
                    The infrastructure enables work across a wide range of domains such as Software Development, Data
                    Structures & Algorithms, Machine Learning, Deep Learning, Computer Vision, Natural Language
                    Processing, Cybersecurity, Cloud Computing, Internet of Things (IoT), Big Data Analytics,
                    Distributed Systems, Operating Systems, Database Management, Robotics, Edge Computing, Data
                    Annotations, Information Retrieval, Smart Systems, and Human-Computer Interaction. Each laboratory
                    is equipped with centralized air conditioning and 1 Gigabit high-speed network connectivity,
                    ensuring a reliable and comfortable working environment, and is provisioned with a rich ecosystem of
                    open-source software tools and platforms to promote flexibility, innovation, and cost-effective
                    learning. Supported by robust power backup through online UPS systems, the labs provide a seamless,
                    industry-aligned practical environment that empowers students to translate theoretical concepts into
                    real-world solutions and prepares them for emerging technological challenges.
                </p>


                <h3 class="dept-cse-lab-heading">Glimpse of Our Labs</h3>

                <!-- <h2 class="dept-cse-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-cse-lab-gallery">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/1.jpeg" alt="Lab 1"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/3.jpg" alt="Lab 2"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/4.jpg" alt="Lab 3"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/5.jpg" alt="Lab 4"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/6.jpg" alt="Lab 5"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/7.jpg" alt="Lab 6"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/8.jpg" alt="Lab 7"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/9.jpg" alt="Lab 8"
                        class="dept-cse-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/new-labs/lab-cse-lab-new/10.jpg" alt="Lab 9"
                        class="dept-cse-lab-img">



                </div>

                <!-- <button class="dept-cse-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M. Tech. (CSE in Artificial Intelligence)",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MTech-CSE-in-Artifical-Intelligence"
            },
            {
                title: "M.Tech. CSE in Internet of Things",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MTech-CSE-in-Internet-of-Things"
            },
            {
                title: "B.Tech. - (Lateral Entry) - CE/CSE/ME/AI & Data Science",
                duration: "3 years",
                link: "https://www.rgu.ac/programs-b-tech-lateral-entry"
            },
            {
                title: "B.Tech. - Working Professional (CE, CSE, ME)",
                duration: "3 years",
                link: "https://www.rgu.ac/programs-BTechWorking-Professional-CE-CSE"
            },
            {
                title: "B. Tech (Artificial Intelligence & Data Science)",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-b-tech-artifical-intelligence-ai"
            },
            {
                title: "B.Tech. (CSE)",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-b-tech-cse"
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
        <div class="dept-cse-course-card">

          <div class="dept-cse-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-cse-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-cse-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-cse-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-cse-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-cse-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-cse-accordion-content');

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
            "26-09-2024 | Dr. John Jose (Associate Professor, Department of CSE, IIT Guwahati; Vice-chair IEEE India Council) | Speaker at IEEE-IC: Standard Workshop and Hackathon 2024.",

            "26-09-2024 | Mr. Anupam Agarwal (Chair of the India Internet Foundation) | Speaker at IEEE-IC: Standard Workshop and Hackathon 2024.",

            "26-09-2024 | Mr. Anand Raje (Co-founder & Director, BASIS Technologies Pvt. Ltd.; CTO, India Internet Foundation) | Speaker at IEEE-IC: Standard Workshop and Hackathon 2024.",

            "24-09-2024 | Prof. Ujjwal K. Saha (Professor, Mechanical Engineering, IIT Guwahati) | Sensitization program on GATE and JAM.",

            "11-09-2024 | Ms. Megha Roy Chatterjee (Education USA advisor, USIEF Kolkata) | Invited talk: Prospects of higher education in the United States.",

            "09-09-2024 | Ms. Promita Mazumdar (Founder, All About You) | Workshop on personality development and soft skills.",

            "07-08-2024 | Dr. Pradip Kumar Das (Professor, Computer Science & Engineering, IIT Guwahati) | Invited talk: On drones and technology.",

            "06-08-2024 | Mr. Rintu Das (Scientist D, NIELIT Guwahati) | Invited talk: NIELIT and current trends of technology."
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
        <div class="dept-cse-event-item">
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
                    ["1", "Convener (Ex-Officio) Head of the Department",
                        "Dr. Deepjyoti Choudhury , Associate Professor, HoD, Dept. of CSE"
                    ],
                    ["2", "All Faculty members of the Department Members (Ex-Officio)",
                        "Prof. (Dr.) Diganta Munshi - Registrar (Administration), Dean (RSET)"
                    ],
                    ["", "", "Dr. Bhairab Sarma - Associate Professor"],
                    ["", "", "Dr. Dipankar Dutta - Associate Professor"],
                    ["", "", "Dr. Anurag Barthwal - Associate Professor"],
                    ["", "", "Ms. Vanita Agrawal - Assistant Professor & Head, Laboratory Services"],
                    ["", "", "Dr. Dillip Rout - Assistant Professor"],
                    ["", "", "Dr. Naveen R Shahi - Assistant Professor"],
                    ["", "", "Dr. Bikash Baruah - Assistant Professor"],
                    ["", "", "Dr. H. Satyajeet Sharma - Assistant Professor"],
                    ["", "", "Ms. Ankita Goyal Agarwala - Assistant Professor"],
                    ["", "", "Mr. Nayan Jyoti Kalita - Assistant Professor"],
                    ["", "", "Dr. Nilakshi Deka - Assistant Professor"],
                    ["", "", "Ms. Afsana Laskar - Assistant Professor"],
                    ["", "", "Mr. Spandan Barthakur - Assistant Professor"],
                    ["", "", "Ms. Bidisha Goswami - Assistant Professor"],

                    ["3", "External Experts (Academic)",
                        "Prof. (Dr.) Utpal Sarma Professor, Department of USIC, Gauhati University"
                    ],
                    ["4", "External Experts (Industry)", "Mr. Kalyanjit Hatibaruah MD, CEO, Flugelsoft, Guwahati"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the Committee"],
                rows: [
                    ["1", "Head of the Department/School", "Dr. Deepjyoti Choudhury", "Associate Professor",
                        "Chairperson"
                    ],
                    ["2", "Professors", "Prof. Diganta Munshi", "Professor", "Member"],
                    ["3", "Associate Professor (Member Secretary)", "Dr. Anurag Barthwal", "Associate Professor",
                        "Member Secretary"
                    ],
                    ["4", "Assistant Professor (Ph.D.)", "Dr. Hidangmayum Satyajeet Sharma", "Assistant Professor",
                        "Member"
                    ],
                    ["5", "Assistant Professor (Ph.D.)", "Dr. Bikash Baruah", "Assistant Professor", "Member"],
                    ["6", "External Member", "Prof. (Dr.) Hiren Kumar Deva Sarma", "Professor", "External Member"],
                    ["7", "External Member", "Prof. (Dr.) Shwetambara Verma", "Professor", "External Member"],



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
        <div class="dept-cse-table-responsive">
          <table class="dept-cse-table">
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
        <div class="dept-cse-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-cse-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-cse-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-cse-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-cse-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-cse-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-cse-table-content");
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
            title: "AI for Indigenous & Mountain Communities: Dr. Deepjyoti Choudhury, Associate Professor & HoD, CSE delivered an invited talk at the Multi-Stakeholders Seminar on “AI for the Indigenous & Mountain Communities in the Eastern Himalayan Region: Our Readiness, Our Digital Future”, held at the Department of IT, Gauhati University, Assam.",
            images: [

                "https://www.rgu.ac/mobile-assets/department-all/rset/cse/events/1.JPG",
                "https://www.rgu.ac/mobile-assets/department-all/rset/cse/events/2.JPG",
                "https://www.rgu.ac/mobile-assets/department-all/rset/cse/events/3.JPG",
                "https://www.rgu.ac/mobile-assets/department-all/rset/cse/events/4.JPG",


            ]
        }];

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
      <div class="dept-cse-event-card">

        <div class="dept-cse-event-title">
          ${event.title}
        </div>

        <div class="dept-cse-marquee">
          <div class="dept-cse-marquee-track">
            ${marqueeImages}
          </div>
        </div>

      </div>
    `;

            }).join("");
        }
    </script>
@endsection
