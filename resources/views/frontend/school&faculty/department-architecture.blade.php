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

        .dept-architecture-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-architecture-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-architecture-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-architecture-heading h1 span {
            color: var(--accent);
        }

        .dept-architecture-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-architecture-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-architecture-img {
            flex: 1;
            position: relative;
        }

        .dept-architecture-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-architecture-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-architecture-content {
            flex: 1;
        }

        .dept-architecture-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-architecture-content h3 span {
            color: var(--accent);
        }

        .dept-architecture-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-architecture-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-architecture-floating {
            position: fixed;
            left: 30px;
            top: 60%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-architecture-float-item {
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

        .dept-architecture-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-architecture-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-architecture-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-architecture-float-item:hover i {
            color: #fff;
        }

        .dept-architecture-float-item:hover .dept-architecture-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-architecture-admission-btn {
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

        .dept-architecture-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-architecture-admission-btn:hover {
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
            .dept-architecture-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-architecture-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-architecture-img img {
                padding-left: 0%;
            }

            .dept-architecture-floating {
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

            .dept-architecture-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-architecture-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-architecture-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-architecture-float-item:active i {
                color: var(--primary);
            }

            .dept-architecture-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-architecture-admission-btn {
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
            .dept-architecture-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-architecture-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-architecture-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-architecture-section-title span {
            color: var(--accent);
        }

        .dept-architecture-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-architecture-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-architecture-course-header {
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
        .dept-architecture-course-header::after {
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
        .dept-architecture-view-btn {
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

        .dept-architecture-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-architecture-course-body {
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
            .dept-architecture-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-architecture-img img {
                padding-left: 0%;
            }

            .dept-architecture-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-architecture-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-architecture-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-architecture-prospects-content {
                padding: 25px 20px;
            }


            .dept-architecture-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-architecture-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-architecture-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-architecture-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-architecture-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-architecture-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-architecture-list li {
            margin-bottom: 12px;
        }

        .dept-architecture-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-architecture-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-architecture-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-architecture-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-architecture-accordion-header {
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

        .dept-architecture-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-architecture-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-architecture-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-architecture-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-architecture-accordion-item.active .dept-architecture-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-architecture-accordion-item.active .dept-architecture-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-architecture-accordion-item.active .dept-architecture-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-architecture-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-architecture-syllabus-link {
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

        .dept-architecture-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-architecture-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-architecture-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-architecture-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-architecture-syllabus-link:hover .dept-architecture-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-architecture-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-architecture-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-architecture-lab-container {
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

        .dept-architecture-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-architecture-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1300px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-architecture-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-architecture-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-architecture-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-architecture-explore-btn {
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

        .dept-architecture-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-architecture-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-architecture-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-architecture-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-architecture-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-architecture-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-architecture-bullet-list li::before {
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
        .dept-architecture-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-architecture-events-box {
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
        .dept-architecture-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-architecture-events-box:hover .dept-architecture-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-architecture-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-architecture-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-architecture-events-btn:hover {
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
        .dept-architecture-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-architecture-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-architecture-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-architecture-table-header {
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
        .dept-architecture-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-architecture-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-architecture-table-acc.active .dept-architecture-table-content {
            padding: 20px;
        }

        .dept-architecture-table-acc.active .dept-architecture-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-architecture-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-architecture-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-architecture-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-architecture-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-architecture-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-architecture-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-architecture-table td,
        .dept-architecture-table th {
            white-space: nowrap;
        }
    </style>

    <style>
        /* ================= EVENT GALLERY (SINGLE IMAGE) ================= */

        .dept-architecture-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-architecture-event-container {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* CARD */
        .dept-architecture-event-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            transition: var(--transition);
        }

        .dept-architecture-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(44, 74, 122, 0.12);
        }

        /* TITLE */
        .dept-architecture-event-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--primary);
            padding: 20px 25px;
            line-height: 1.7;
        }

        /* IMAGE WRAPPER */
        .dept-architecture-event-img {
            width: 100%;
            overflow: hidden;
        }

        /* IMAGE */
        .dept-architecture-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        /* HOVER EFFECT */
        .dept-architecture-event-card:hover img {
            transform: scale(1.03);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {
            .dept-architecture-event-title {
                font-size: 1rem;
                padding: 15px;
            }

            .dept-architecture-event-img img {
                height: 220px;
            }
        }

        .dept-architecture-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD */
        .dept-architecture-event-acc-item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* HEADER */
        .dept-architecture-event-acc-header {
            padding: 18px 22px;
            cursor: pointer;
            font-size: 1.05rem;
            font-weight: 500;
            color: var(--primary);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* ICON */
        .dept-architecture-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-architecture-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* ACTIVE */
        .dept-architecture-event-acc-item.active .dept-architecture-event-acc-content {
            padding: 20px;
        }

        .dept-architecture-event-acc-item.active .dept-architecture-event-acc-header i {
            transform: rotate(180deg);
        }

        /* IMAGE */
        .dept-architecture-event-img {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-architecture-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-architecture-event-img img {
                height: 220px;
            }
        }
    </style>

    <style>
        /* =========================================================
           ACADEMIC EXCELLENCE SECTION
           PREFIX: academic-exce-
        ========================================================= */

        .academic-exce-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* =========================================================
           GRID CONTROL
        ========================================================= */

        .academic-exce-grid {

            display: grid;

            /* =========================================
               MANUAL CONTROL
            ========================================= */

            grid-template-columns: 1fr;

            /*
                EXAMPLES:

                grid-template-columns: 60% 40%;

                grid-template-columns: 2fr 1fr;

                grid-template-columns: 1.4fr 0.6fr;
            */

            gap: 30px;

            max-width: 1300px;

            margin: 0 auto;
        }

        /* =========================================================
           COLUMN
        ========================================================= */

        .academic-exce-column {

            background: #ffffff;

            border-radius: 18px;

            padding: 22px;

            overflow: hidden;

            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);

            border-top: 4px solid var(--accent);

            transition: var(--transition);
        }

        .academic-exce-column:hover {
            transform: translateY(-4px);
        }

        /* =========================================================
           SUBTITLE
        ========================================================= */

        .academic-exce-subtitle {

            font-family: 'Times New Roman', Times, serif;

            font-size: clamp(1.5rem, 2.2vw, 2rem);

            color: var(--primary);

            text-align: center;

            margin-top: 0;

            margin-bottom: 24px;
        }

        .academic-exce-subtitle span {
            color: var(--accent);
        }

        /* =========================================================
           HORIZONTAL MARQUEE
        ========================================================= */

        .academic-exce-marquee {

            width: 100%;

            overflow: hidden;

            position: relative;

            border-radius: 16px;
        }

        /* =========================================================
           TRACK
        ========================================================= */

        .academic-exce-track {

            display: flex;

            gap: 18px;

            width: max-content;

            animation: academicExceHorizontal 22s linear infinite;

            will-change: transform;
        }

        /* STOP IF SINGLE IMAGE */

        .academic-exce-marquee[data-count="1"] .academic-exce-track {

            animation: none;

            width: 100%;

            justify-content: center;
        }

        /* PAUSE ON HOVER */

        .academic-exce-marquee:hover .academic-exce-track {
            animation-play-state: paused;
        }

        /* =========================================================
           IMAGE
           VERTICAL IMAGE
        ========================================================= */

        .academic-exce-track img {

            width: 250px;

            height: 300px;

            object-fit: cover;

            border-radius: 16px;

            flex-shrink: 0;

            display: block;

            box-shadow: 0 10px 24px rgba(44, 74, 122, 0.14);

            transition: var(--transition);
        }

        .academic-exce-track img:hover {

            transform: scale(1.03);
        }

        /* =========================================================
           ANIMATION
        ========================================================= */

        @keyframes academicExceHorizontal {

            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1100px) {

            .academic-exce-grid {

                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {

            .academic-exce-column {
                padding: 18px;
            }

            .academic-exce-track img {

                width: 220px;

                height: 340px;
            }

            .academic-exce-subtitle {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {

            .academic-exce-column {
                padding: 14px;
            }

            .academic-exce-track {

                gap: 14px;
            }

            .academic-exce-track img {

                width: 180px;

                height: 280px;

                border-radius: 12px;
            }

            .academic-exce-subtitle {

                font-size: 1.15rem;

                margin-bottom: 18px;
            }
        }
    </style>

    <div class="dept-architecture-floating">
        <a href="#dept-home" class="dept-architecture-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-architecture-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-architecture-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-architecture-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-architecture-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-architecture-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-architecture-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-architecture-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-architecture-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-architecture-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-architecture-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-architecture-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-architecture-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-architecture-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-architecture-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-architecture-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-architecture-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-architecture-wrapper">

        <div class="dept-architecture-heading" id="dept-home">
            <h1>Department of <span>Architecture</span></h1>
            <h2>Royal School of Architecture (RSA)</h2>
        </div>

        <div class="dept-architecture-hero" id="dept-about">

            <div class="dept-architecture-img">
                <img src="mobile-assets/new-dept-architecture/head-img.png" alt="Nursing">
            </div>

            <div class="dept-architecture-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Architecture Department is a dynamic hub of innovation and creativity, boasting a diverse array
                    of strengths and competencies. With a strong emphasis on sustainable design practices, digital
                    fabrication techniques, and interdisciplinary collaboration, graduates emerge equipped to tackle the
                    complex challenges facing the built environment. The department's thrust areas encompass urban
                    revitalization, resilient infrastructure, and adaptive reuse, reflecting a commitment to addressing
                    pressing societal needs while embracing technological advancements. Graduates possess a unique blend
                    of artistic vision, technical expertise, and critical thinking skills, positioning them for success
                    in a variety of career paths. Whether pursuing roles in architectural firms, urban planning
                    agencies, or academia, alumni are well-prepared to make meaningful contributions to shaping the
                    future of our cities and communities.
                </p>

            </div>

        </div>

        <!-- vision mission  -->
        <div class="dept-architecture-prospects-section" id="dept-vision">
            <h2 class="dept-architecture-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-architecture-prospects-content">

                <h3 class="dept-architecture-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-architecture-bullet-list">
                    <li>
                        To offer students nationally and internationally integrated opportunities in the field of design
                        to create global citizens, endowed with creativity and inclusive ideal of sustainability.
                    </li>

                </ul>

                <h3 class="dept-architecture-subheading">Our Mission</h3>
                <ul class="dept-architecture-bullet-list">
                    <li>
                        To achieve innovative research and curriculum design with industry-oriented teaching learning
                        methodologies.
                    </li>

                    <li>
                        To encourage students to become professionally adept, morally upright citizens capable of
                        rendering invaluable service to Society and the Nation.
                    </li>

                    <li>
                        To encourage students to become World Class Architects with ethical and value-based practices
                        for sustainable development & core human values.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-architecture-courses-section" id="dept-courses">
            <h2 class="dept-architecture-section-title">Courses <span>Offered</span></h2>

            <div class="dept-architecture-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-architecture-prospects-section" id="dept-prospects">
              <h2 class="dept-architecture-section-title">Career <span>Prospects</span></h2>

              <div class="dept-architecture-prospects-content">
                <p class="dept-architecture-intro-text">
                  The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
                  sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                  strong foundation in agricultural sciences, preparing them for following careers opportunities:
                </p>

                <h3 class="dept-architecture-subheading">Higher Education Opportunities</h3>
                <ol class="dept-architecture-list">
                  <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                  </li>
                  <li>MBA in Agribusiness Management</li>
                  <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                  <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                    disciplines</li>
                </ol>

                <h3 class="dept-architecture-subheading">Government Sector Jobs</h3>
                <ol class="dept-architecture-list">
                  <li>Agricultural Officer / Civil Development Officer (ADO)</li>
                  <li>IBPS AFO (Agricultural Field Officer)</li>
                  <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                  <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                  <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                </ol>

                <h3 class="dept-architecture-subheading">Private Sector Careers</h3>
                <ol class="dept-architecture-list">
                  <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                  <li>Food Processing Industries</li>
                  <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                  <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
                  <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                </ol>

                <h3 class="dept-architecture-subheading">Research & Teaching</h3>
                <ol class="dept-architecture-list">
                  <li>Research Assistant / Scientist – in public and private research institutions</li>
                  <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                  <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                </ol>

                <h3 class="dept-architecture-subheading">Entrepreneurship & Startups</h3>
                <ol class="dept-architecture-list">
                  <li>Organic farming, dairy, poultry, aquaculture</li>
                  <li>Agri-tourism, greenhouse farming, vertical farming</li>
                  <li>Processing units for spices, cereals, or fruits</li>
                  <li>Agri-consultancy or freelance advisory services</li>
                </ol>

                <h3 class="dept-architecture-subheading">Jobs Abroad</h3>
                <ol class="dept-architecture-list">
                  <li>Agricultural research, farm management, and food security projects</li>
                  <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                  <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                </ol>

                <h3 class="dept-architecture-subheading">Key Skills That Boost Career</h3>
                <ol class="dept-architecture-list">
                  <li>Practical knowledge of farming tools and technologies</li>
                  <li>Communication and management skills (especially in extension or agribusiness)</li>
                  <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
                  <li>Language skills and report writing</li>
                </ol>

              </div>
            </div> -->

        <div class="dept-architecture-accordion-section" id="dept-syllabus">
            <h2 class="dept-architecture-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-architecture-accordion-wrapper">

                <!-- <div class="dept-architecture-accordion-item active">
                            <div class="dept-architecture-accordion-header">
                                <div class="dept-architecture-accordion-header-left">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <span>Diploma</span>
                                </div>
                                <i class="fa-solid fa-chevron-down dept-architecture-chevron"></i>
                            </div>

                            <div class="dept-architecture-accordion-content">
                                <div class="dept-architecture-syllabus-list">

                                    <a target="_blank"
                                        href="/programs-General-Nursing-Midwifery"
                                        class="dept-architecture-syllabus-link">
                                        <div class="dept-architecture-syllabus-link-left">
                                            <i class="fa-solid fa-file-lines"></i>
                                            General Nursing & Midwifery (GNM)
                                        </div>
                                        <i class="fa-solid fa-download dept-architecture-download-icon"></i>
                                    </a>

                                </div>
                            </div>
                        </div> -->

                <div class="dept-architecture-accordion-item active">
                    <div class="dept-architecture-accordion-header">
                        <div class="dept-architecture-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-architecture-chevron"></i>
                    </div>

                    <div class="dept-architecture-accordion-content">
                        <div class="dept-architecture-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/department-all/dept-arch/updated-syllabus/structure-b.arch.pdf"
                                class="dept-architecture-syllabus-link">
                                <div class="dept-architecture-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus
                                </div>
                                <i class="fa-solid fa-download dept-architecture-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="/mobile-assets/syllabus/RSA/B.ARCH. _Course Structure &  Detailed Syllabus _2025 Batch.pdf"
                                class="dept-architecture-syllabus-link">
                                <div class="dept-architecture-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus
                                </div>
                                <i class="fa-solid fa-download dept-architecture-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-architecture-accordion-item">
                    <div class="dept-architecture-accordion-header">
                        <div class="dept-architecture-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-architecture-chevron"></i>
                    </div>

                    <div class="dept-architecture-accordion-content">
                        <div class="dept-architecture-syllabus-list">
                            <a href="/doctoral-programme" class="dept-architecture-syllabus-link" download>
                                <div class="dept-architecture-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-architecture-events-section" id="dept-events">

            <h2 class="dept-architecture-section-title">Events</h2>

            <div class="dept-architecture-events-box">
                <div class="dept-architecture-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                <a href="#" class="dept-architecture-events-btn">View All</a>
              </div> -->

        </div>

        <div class="academic-exce-section">

            <h2 class="dept-architecture-section-title">Academic <span>Excellence</span></h2>

            <div class="academic-exce-grid" id="academicExceGrid">

                <!-- JS RENDER -->

            </div>

        </div>

        <div class="dept-architecture-table-section" id="dept-committee">

            <div class="dept-architecture-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-architecture-lab-section" id="dept-lab">

            <div class="dept-architecture-lab-container">

                <h2 class="dept-architecture-section-title">Architecture <span>Design Studios</span></h2>

                <p class="dept-architecture-lab-intro">
                    The design studios of the Royal School of Architecture throw a focus on advanced digital
                    technologies, material systems and design research which strives to shape the future of the next
                    generation of designers. In an era of smart cities, sustainable buildings, and contemporary
                    architecture, we train our students to become lateral thinkers by focusing on a critical design
                    approach. The studios are situated in block- C on the second and third floor.
                </p>



                <!-- <h2 class="dept-architecture-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-architecture-lab-gallery">
                    <img src="mobile-assets/new-dept-architecture/studio/1.jpg" alt="Lab 1"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/2.jpg" alt="Lab 2"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/3.jpg" alt="Lab 3"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/4.jpg" alt="Lab 4"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/5.jpg" alt="Lab 5"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/6.jpg" alt="Lab 6"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/7.jpg" alt="Lab 7"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/8.jpg" alt="Lab 8"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/9.jpg" alt="Lab 8"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/10.jpg" alt="Lab 8"
                        class="dept-architecture-lab-img">

                    <img src="mobile-assets/new-dept-architecture/studio/11.jpg" alt="Lab 8"
                        class="dept-architecture-lab-img">

                </div>

                <!-- <button class="dept-architecture-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
            title: "B.Arch",
            duration: "5 years",
            link: "/programs-barch"
        }];

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
        <div class="dept-architecture-course-card">

          <div class="dept-architecture-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-architecture-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-architecture-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-architecture-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-architecture-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-architecture-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-architecture-accordion-content');

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
            "On 18th September 2024, Er. JN Khatanair attended a technical lecture on 'Sustainable Building for Warm and Humid Climatic Zone' on the occasion of Engineer’s Day.",
            "On 18th September 2024, Ms. Faye Fernandes, Country Director of Torrens University, Australia, attended an interactive session on 'Career Opportunity for Designers' organized by Royal School of Architecture and Royal School of Design.",
            "From 31st July 2024 to 10th August 2024, Er. Rajesh Dutta attended a session on disaster management and mitigation organized by Royal School of Architecture and Royal School of Design.",
            "On 23rd July 2024, Ar. Anuj Bhajanka attended a re-orientation program for the upcoming semester organized by Royal School of Architecture and Royal School of Design.",
            "On 18th May 2024, Ar. Ronojoy Sen joined panel discussions organized as part of Day 3 of Knoxis Design Fest.",
            "On 28th August 2023, Ar. Farha Shermin attended an interactive session as part of the Students Induction Program of B.Arch and BID/DID 1st Semester.",
            "On 18th May 2023, Ar. Gita Balakrishnan joined panel discussions organized as part of Day 3 of Knoxis Design Fest.",
            "On 18th May 2023, Ar. Ashish Agarwal joined panel discussions organized as part of Day 3 of Knoxis Design Fest.",
            "On 18th May 2023, Mahan J Dutta conducted workshops organized as part of Day 3 of Knoxis Design Fest.",
            "On 18th May 2023, Asutosh Kashyap conducted workshops organized as part of Day 3 of Knoxis Design Fest.",
            "On 5th April 2023, Dr. Anunaya Chaubey held an interactive session regarding Anant University's flagship program, Anant Fellowship.",
            "On 28th October 2022, Debabrata Rajkumar conducted an interactive session on climate change and waste management.",
            "On 11th October 2022, Mr. Ashish Agarwal conducted an interactive session.",
            "From 20th August 2019 to 21st August 2019, Ar. Pragati Goyal led the orientation programme for freshers of RSA, RSFT, RSD, and RSFA.",
            "On 16th August 2019, Nilakshi More led the orientation programme for freshers of RSA and RSD.",
            "From 6th March 2019 to 8th March 2019, Prof. Abhijit Shirodkar held an interactive session.",
            "From 24th January 2019 to 25th January 2019, Trailokya Hazarika coordinated Birla White Cement Competitions: Yuvaratna and Yuvaratna Nxt.",
            "From 21st January 2019 to 23rd January 2019, Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, and Parijit Phukan hosted a meditation workshop by Heartfulness Foundation.",
            "On 7th August 2018, Ashish Batliwala conducted a 3D Printing Workshop.",
            "On 30th July 2018, Pankaj Bhattacharjee from Greenlam conducted a workshop on laminates.",
            "On 5th February 2018, Dr. Repaul Kanji from IIT Roorkee conducted a workshop on 'Awareness of Disaster Mitigation & Management'."
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
        <div class="dept-architecture-event-item">
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
                headers: ["S.No.", "Name of the Member", "Designation", "Status"],
                rows: [
                    ["1", "Prof. (Dr.) Hari Prasad Agarwal", "Principal of RSA", "Chairperson"],

                    ["2", "Ar. Siddhartha Deb", "Professor", "Ex-officio Member"],

                    ["3", "Prof. N S Rathor", "Professor and Dean", "Academic Expert"],

                    ["4", "Ar. Rajesh Gaggar", "Architect", "Industry Expert"],

                    ["5", "Dr. Diganta Munshi", "Registrar-Administration", "Member Secretary"],

                    ["6", "Prof. Nandana Dutta", "Dean of Academics", "Invited Member"],

                    ["7", "Ar. Kasturi Borah", "Associate Professor", "Nominee of the Vice-Chancellor"],

                    ["8", "Ar. Sanchari Kar", "Assistant Professor", "Nominee of the Vice-Chancellor"],

                    ["9", "Ar. Barsha Kunda", "Assistant Professor", "Special Invitee"],

                    ["10", "Ar. Ritu Rani", "Assistant Professor", "Special Invitee"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
                rows: [
                    ["1", "Head of the Department", "Prof. Dr. Hari Prasad Agarwal", "Dean, RSA, RSD, RSFD, RSFA",
                        "Chairperson"
                    ],

                    ["2", "Two Professors, including the Dean of the School", "Prof. Dr. Debendra Nayak",
                        "Dean, RSEES", "Member"
                    ],

                    ["3", "", "Prof. Dr. Shwetambara", "Head, Civil Department", "Member"],

                    ["4", "Two Associate Professors – one of them will be the member secretary", "", "", ""],


                    ["5", "Two Assistant Professors holding Ph.D. degree", "Dr. Mousumi Deka",
                        "Assistant Professor, RSFA", "Member"
                    ],

                    ["6", "", "Dr. Susmita Nath", "Assistant Professor, RSD", "Member"],

                    ["7",
                        "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC",
                        "Prof. (Dr.) Suchandra Bardhan",
                        "Professor, Department of Architecture, Jadavpur University, Kolkata", "External Member"
                    ],

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
        <div class="dept-architecture-table-responsive">
          <table class="dept-architecture-table">
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
        <div class="dept-architecture-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-architecture-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-architecture-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-architecture-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-architecture-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-architecture-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-architecture-table-content");
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
        (function() {

            /* ================= EVENT DATA ================= */
            const eventGalleryData = [{
                    title: "03-06-2025: World No Tobacco Day (Organised at Swagat Hospital, Maligaon)",
                    image: "mobile-assets/new-dept-architecture/events/e1/1.jpg"
                },
                {
                    title: "15–16 July 2025: International Conference on Exploring Technological Advancement in Health Care: Empowering Nurses for Quality Care",
                    image: "mobile-assets/new-dept-architecture/events/e2/2.jpg"
                },
                {
                    title: "1–7 August: World Breastfeeding Week (Theme: Prioritize Breastfeeding – Create Sustainable Support System)",
                    image: "mobile-assets/new-dept-architecture/events/e12/1.jpg"
                },
                {
                    title: "06-08-2025: Mental Health Awareness Talk (in collaboration with Deeksharambha)",
                    image: "mobile-assets/new-dept-architecture/events/e3/3.jpg"
                },
                {
                    title: "17-09-2026: World Patient Safety Day (Theme: Safe Care for Every Newborn and Every Child; Slogan: Patient Safety from the Start)",
                    image: "mobile-assets/new-dept-architecture/events/e4/4.jpg"
                },
                {
                    title: "24-10-2025: Lamp Lighting and Path Taking Ceremony",
                    image: "mobile-assets/new-dept-architecture/events/e5/5.jpg"
                },
                {
                    title: "14-11-2026: World Diabetes Day (Celebrated at NE Railway Hospital, Maligaon; Theme: Diabetes Across Life Stages)",
                    image: "mobile-assets/new-dept-architecture/events/e6/6.jpg"
                },
                {
                    title: "01-12-2025: World AIDS Day (Theme: Overcoming Disruption, Transforming the AIDS Response; District Hospital Sonapur)",
                    image: "mobile-assets/new-dept-architecture/events/e7/7.jpg"
                },
                {
                    title: "04-02-2026: World Cancer Day (Theme: United by Unique; Swagat Super Speciality Hospital)",
                    image: "mobile-assets/new-dept-architecture/events/e8/8.jpg"
                },
                {
                    title: "24-03-2026: World TB Day (Theme: Yes We Can End TB – Led by Countries, Powered by People; Swagat Super Speciality Hospital)",
                    image: "mobile-assets/new-dept-architecture/events/e9/9.jpg"
                },
                {
                    title: "28-02-2026: School Health Programme (Nalapara Prathamik Vidyalaya, Guwahati)",
                    image: "mobile-assets/new-dept-architecture/events/e10/10.jpg"
                },
                {
                    title: "07-04-2026: World Health Day (Rani High School)",
                    image: "mobile-assets/new-dept-architecture/events/e11/11.jpg"
                },

            ];

            /* ================= GET CONTAINER ================= */
            const eventGalleryContainer = document.getElementById("event-gallery-container");

            if (!eventGalleryContainer) return;

            /* ================= RENDER FUNCTION ================= */
            function renderEventGallery() {

                if (!eventGalleryData || eventGalleryData.length === 0) {
                    eventGalleryContainer.innerHTML = `
                <p style="text-align:center; color:#556b8d;">
                    No events available at the moment.
                </p>
            `;
                    return;
                }

                const html = eventGalleryData.map(event => `
            <div class="dept-architecture-event-acc-item">

                <div class="dept-architecture-event-acc-header">
                    <span>${event.title}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <div class="dept-architecture-event-acc-content">
                    <div class="dept-architecture-event-img">
                        <img src="${event.image}" alt="event image">
                    </div>
                </div>

            </div>
        `).join("");

                eventGalleryContainer.innerHTML = html;
            }

            /* ================= ACCORDION LOGIC ================= */
            function initAccordion() {

                const items = eventGalleryContainer.querySelectorAll(".dept-architecture-event-acc-item");

                items.forEach(item => {

                    const header = item.querySelector(".dept-architecture-event-acc-header");
                    const content = item.querySelector(".dept-architecture-event-acc-content");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active");
                            const c = i.querySelector(".dept-architecture-event-acc-content");
                            if (c) c.style.maxHeight = 0;
                        });

                        // Open clicked (if it was closed)
                        if (!isActive) {
                            item.classList.add("active");
                            content.style.maxHeight = content.scrollHeight + "px";
                        }
                    });

                });
            }

            /* ================= INIT ================= */
            renderEventGallery();
            initAccordion();

        })();
    </script>

    <script>
        /* =====================================================
               ACADEMIC EXCELLENCE DATA
            ===================================================== */

        const academicExceData = [

            {
                subtitle: "APSC",

                images: [
                    "mobile-assets/new-dept-architecture/academic-excellence/APSC/adcademic1.png",
                ]
            }

        ];

        /* =====================================================
           RENDER
        ===================================================== */

        const academicExceGrid = document.getElementById("academicExceGrid");

        if (academicExceGrid) {

            academicExceGrid.innerHTML = academicExceData.map((item) => {

                const imageCount = item.images.length;

                /* =============================================
                   DUPLICATE ONLY IF MORE THAN 1 IMAGE
                ============================================= */

                const finalImages = imageCount > 1 ? [...item.images, ...item.images] :
                    item.images;

                return `

                <div class="academic-exce-column">

                    <h3 class="academic-exce-subtitle">
                        ${item.subtitle}
                    </h3>

                    <div class="academic-exce-marquee" data-count="${imageCount}">

                        <div class="academic-exce-track">

                            ${finalImages.map(img => `

                                        <img src="${img}" alt="${item.subtitle}">

                                    `).join("")}

                        </div>

                    </div>

                </div>

            `;

            }).join("");

        }
    </script>
@endsection
