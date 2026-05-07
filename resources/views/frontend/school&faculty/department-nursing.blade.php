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

        .dept-nursing-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-nursing-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-nursing-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-nursing-heading h1 span {
            color: var(--accent);
        }

        .dept-nursing-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-nursing-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-nursing-img {
            flex: 1;
            position: relative;
        }

        .dept-nursing-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-nursing-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-nursing-content {
            flex: 1;
        }

        .dept-nursing-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-nursing-content h3 span {
            color: var(--accent);
        }

        .dept-nursing-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-nursing-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-nursing-floating {
            position: fixed;
            left: 30px;
            top: 60%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-nursing-float-item {
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

        .dept-nursing-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-nursing-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-nursing-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-nursing-float-item:hover i {
            color: #fff;
        }

        .dept-nursing-float-item:hover .dept-nursing-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-nursing-admission-btn {
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

        .dept-nursing-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-nursing-admission-btn:hover {
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
            .dept-nursing-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-nursing-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-nursing-img img {
                padding-left: 0%;
            }

            .dept-nursing-floating {
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

            .dept-nursing-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-nursing-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-nursing-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-nursing-float-item:active i {
                color: var(--primary);
            }

            .dept-nursing-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-nursing-admission-btn {
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
            .dept-nursing-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-nursing-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-nursing-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-nursing-section-title span {
            color: var(--accent);
        }

        .dept-nursing-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-nursing-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-nursing-course-header {
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
        .dept-nursing-course-header::after {
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
        .dept-nursing-view-btn {
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

        .dept-nursing-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-nursing-course-body {
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
            .dept-nursing-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-nursing-img img {
                padding-left: 0%;
            }

            .dept-nursing-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-nursing-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-nursing-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-nursing-prospects-content {
                padding: 25px 20px;
            }


            .dept-nursing-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-nursing-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-nursing-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-nursing-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-nursing-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-nursing-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-nursing-list li {
            margin-bottom: 12px;
        }

        .dept-nursing-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-nursing-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-nursing-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-nursing-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-nursing-accordion-header {
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

        .dept-nursing-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-nursing-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-nursing-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-nursing-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-nursing-accordion-item.active .dept-nursing-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-nursing-accordion-item.active .dept-nursing-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-nursing-accordion-item.active .dept-nursing-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-nursing-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-nursing-syllabus-link {
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

        .dept-nursing-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-nursing-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-nursing-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-nursing-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-nursing-syllabus-link:hover .dept-nursing-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-nursing-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-nursing-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-nursing-lab-container {
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

        .dept-nursing-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-nursing-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1300px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-nursing-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-nursing-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-nursing-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-nursing-explore-btn {
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

        .dept-nursing-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-nursing-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-nursing-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-nursing-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-nursing-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-nursing-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-nursing-bullet-list li::before {
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
        .dept-nursing-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-nursing-events-box {
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
        .dept-nursing-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-nursing-events-box:hover .dept-nursing-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-nursing-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-nursing-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-nursing-events-btn:hover {
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
        .dept-nursing-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-nursing-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-nursing-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-nursing-table-header {
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
        .dept-nursing-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-nursing-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-nursing-table-acc.active .dept-nursing-table-content {
            padding: 20px;
        }

        .dept-nursing-table-acc.active .dept-nursing-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-nursing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-nursing-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-nursing-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-nursing-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-nursing-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-nursing-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-nursing-table td,
        .dept-nursing-table th {
            white-space: nowrap;
        }
    </style>

    <style>
        /* ================= EVENT GALLERY (SINGLE IMAGE) ================= */

        .dept-nursing-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-nursing-event-container {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* CARD */
        .dept-nursing-event-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            transition: var(--transition);
        }

        .dept-nursing-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(44, 74, 122, 0.12);
        }

        /* TITLE */
        .dept-nursing-event-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--primary);
            padding: 20px 25px;
            line-height: 1.7;
        }

        /* IMAGE WRAPPER */
        .dept-nursing-event-img {
            width: 100%;
            overflow: hidden;
        }

        /* IMAGE */
        .dept-nursing-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        /* HOVER EFFECT */
        .dept-nursing-event-card:hover img {
            transform: scale(1.03);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {
            .dept-nursing-event-title {
                font-size: 1rem;
                padding: 15px;
            }

            .dept-nursing-event-img img {
                height: 220px;
            }
        }

        .dept-nursing-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD */
        .dept-nursing-event-acc-item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* HEADER */
        .dept-nursing-event-acc-header {
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
        .dept-nursing-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-nursing-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* ACTIVE */
        .dept-nursing-event-acc-item.active .dept-nursing-event-acc-content {
            padding: 20px;
        }

        .dept-nursing-event-acc-item.active .dept-nursing-event-acc-header i {
            transform: rotate(180deg);
        }

        /* IMAGE */
        .dept-nursing-event-img {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-nursing-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-nursing-event-img img {
                height: 220px;
            }
        }
    </style>

    <div class="dept-nursing-floating">
        <a href="#dept-home" class="dept-nursing-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-nursing-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-nursing-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-nursing-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-nursing-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-nursing-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-nursing-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-nursing-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-nursing-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-nursing-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-nursing-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-nursing-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-nursing-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-nursing-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-nursing-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-nursing-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-nursing-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-nursing-wrapper">

        <div class="dept-nursing-heading" id="dept-home">
            <h1>Department of <span>Nursing</span></h1>
            <h2>Royal School of Nursing (RSN)</h2>
        </div>

        <div class="dept-nursing-hero" id="dept-about">

            <div class="dept-nursing-img">
                <img src="mobile-assets/new-dept-nursing/headimg.png" alt="Nursing">
            </div>

            <div class="dept-nursing-content">

                <h3>About <span>Department</span></h3>

                <p>
                    B.Sc. Nursing programme is a four-year course. The practical course aims to close the gap between
                    theory and practice. As stated, the Royal School of Nursing department is making great strides
                    toward finishing the entire course curriculum.. The curriculum is nicely covered in all respects.
                </p>

            </div>

        </div>

        <div class="dept-nursing-prospects-section">

            <div class="dept-nursing-prospects-content">
                <p class="dept-nursing-lab-intro">
                <h3 class="dept-nursing-subheading" style="margin-top: 0;">Thrust Area of its competencies:</h3>
                <ul class="dept-nursing-bullet-list">
                    <li>Research and Development Nursing Practice and Nursing education</li>
                    <li>Caring for Vulnerable Populations in community areas with an outreach</li>
                    <li>Capacity Building of Nurses</li>
                    <li>Student Centric Teaching Learning</li>
                    <li>Celebrated globally important Health related Days</li>

                </ul>

                <h3 class="dept-nursing-subheading" style="margin-top: 0;">Strength areas of its competencies:</h3>
                <ul class="dept-nursing-bullet-list">
                    <li>Research and Development Nursing Practice and Nursing education</li>
                    <li>Caring for Vulnerable Populations in community areas with an outreach</li>
                    <li>Capacity Building of Nurses</li>
                    <li>Student Centric Teaching Learning</li>
                    <li>Celebrated globally important Health related Days</li>

                </ul>

                </p>



            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-nursing-prospects-section" id="dept-vision">
            <h2 class="dept-nursing-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-nursing-prospects-content">

                <h3 class="dept-nursing-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-nursing-bullet-list">
                    <li>
                        To fostering the development of globally competent nurses across the healthcare continuum by
                        forming the best virtual alliance of national and worldwide standard knowledge and skills with
                        excellence in education, practice, administration, and research.
                    </li>

                </ul>

                <h3 class="dept-nursing-subheading">Our Mission</h3>
                <ul class="dept-nursing-bullet-list">
                    <li>
                        To foster academic excellence in healthcare through education, research, and compassionate
                        practice.
                    </li>

                    <li>
                        To educate nurses who are equipped with the knowledge, skills, and values to provide
                        high-quality patient care in diverse settings through rigorous academic programs, hands-on
                        clinical experiencesand a culture of lifelong learning grounded in a holistic approach to
                        healthcare.
                    </li>

                    <li>
                        To give back responsible nursing leaders to society who can meet the evolving needs of
                        individuals, families, and communities across the lifespan guided by ethical principles,
                        cultural competence, and evidence-based practice by fostering collaboration, innovation, and a
                        spirit of inquiry, making a positive impact on healthcare outcomes locally, nationally, and
                        globally."
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-nursing-courses-section" id="dept-courses">
            <h2 class="dept-nursing-section-title">Courses <span>Offered</span></h2>

            <div class="dept-nursing-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-nursing-prospects-section" id="dept-prospects">
          <h2 class="dept-nursing-section-title">Career <span>Prospects</span></h2>

          <div class="dept-nursing-prospects-content">
            <p class="dept-nursing-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-nursing-subheading">Higher Education Opportunities</h3>
            <ol class="dept-nursing-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-nursing-subheading">Government Sector Jobs</h3>
            <ol class="dept-nursing-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-nursing-subheading">Private Sector Careers</h3>
            <ol class="dept-nursing-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-nursing-subheading">Research & Teaching</h3>
            <ol class="dept-nursing-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-nursing-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-nursing-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-nursing-subheading">Jobs Abroad</h3>
            <ol class="dept-nursing-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-nursing-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-nursing-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-nursing-accordion-section" id="dept-syllabus">
            <h2 class="dept-nursing-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-nursing-accordion-wrapper">

                <!-- <div class="dept-nursing-accordion-item active">
                        <div class="dept-nursing-accordion-header">
                            <div class="dept-nursing-accordion-header-left">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>Diploma</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dept-nursing-chevron"></i>
                        </div>

                        <div class="dept-nursing-accordion-content">
                            <div class="dept-nursing-syllabus-list">

                                <a target="_blank"
                                    href="https://www.rgu.ac/programs-General-Nursing-Midwifery"
                                    class="dept-nursing-syllabus-link">
                                    <div class="dept-nursing-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        General Nursing & Midwifery (GNM)
                                    </div>
                                    <i class="fa-solid fa-download dept-nursing-download-icon"></i>
                                </a>

                            </div>
                        </div>
                    </div> -->

                <div class="dept-nursing-accordion-item active">
                    <div class="dept-nursing-accordion-header">
                        <div class="dept-nursing-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-nursing-chevron"></i>
                    </div>

                    <div class="dept-nursing-accordion-content">
                        <div class="dept-nursing-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsn/syllabus-pdf/structure-nursing.pdf"
                                class="dept-nursing-syllabus-link">
                                <div class="dept-nursing-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Nursing
                                </div>
                                <i class="fa-solid fa-download dept-nursing-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsn/syllabus-pdf/syllabus-nursing.pdf"
                                class="dept-nursing-syllabus-link">
                                <div class="dept-nursing-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Nursing
                                </div>
                                <i class="fa-solid fa-download dept-nursing-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-nursing-accordion-item">
                    <div class="dept-nursing-accordion-header">
                        <div class="dept-nursing-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-nursing-chevron"></i>
                    </div>

                    <div class="dept-nursing-accordion-content">
                        <div class="dept-nursing-syllabus-list">
                            <a href="https://www.rgu.ac/doctoral-programme" class="dept-nursing-syllabus-link" download>
                                <div class="dept-nursing-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-nursing-event-gallery-section" id="dept-events">

            <h2 class="dept-nursing-section-title">
                Event <span>Highlights</span>
            </h2>

            <div class="dept-nursing-event-accordion" id="event-gallery-container"></div>

        </div>

        <div class="dept-nursing-table-section" id="dept-committee">

            <div class="dept-nursing-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-nursing-lab-section" id="dept-lab">

            <div class="dept-nursing-lab-container">

                <h2 class="dept-nursing-section-title">Our <span>Lab</span></h2>

                <p class="dept-nursing-lab-intro">
                    The nursing lab of the Royal School of Nursing simulates a real-life patient care setting that
                    allows students to think critically and make decisions about a patient’s care while also
                    communicating and applying skills. The lab is in block- D on the fourth floor.
                </p>



                <!-- <h2 class="dept-nursing-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-nursing-lab-gallery">
                    <img src="mobile-assets/new-dept-nursing/labs/1.jpg" alt="Lab 1" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/2.jpg" alt="Lab 2" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/3.jpg" alt="Lab 3" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/4.jpg" alt="Lab 4" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/5.jpg" alt="Lab 5" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/6.jpg" alt="Lab 6" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/7.jpg" alt="Lab 7" class="dept-nursing-lab-img">

                    <img src="mobile-assets/new-dept-nursing/labs/8.jpg" alt="Lab 8" class="dept-nursing-lab-img">

                </div>

                <!-- <button class="dept-nursing-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "General Nursing & Midwifery",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-General-Nursing-Midwifery"
            },
            {
                title: "B.Sc. - Nursing",
                duration: "3 years",
                link: "https://www.rgu.ac/programs-BSc-Nursing"
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
        <div class="dept-nursing-course-card">

          <div class="dept-nursing-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-nursing-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-nursing-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-nursing-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-nursing-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-nursing-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-nursing-accordion-content');

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
            "On 24th February 2026, the Department of Chemistry organized an inspiring creative talk titled 'Wonders of the Quantum World', delivered by renowned scientist and academician Prof. Amarjyoti Choudhury, Professor Emeritus & Chair of Dr. Bhupen Hazarika Center for Creativity, The Assam Royal Global University.",
            "On 6th–7th November 2025, the Department of Chemistry successfully organized a two-day national symposium on 'Advancing Chemistry for a Sustainable Future: Integrating Theory and Practice'.",
            "On 11th September 2025, the Department of Chemistry successfully conducted its annual program 'Khemia 2025 – A Chemical Extravaganza'.",
            "On 22nd August 2025, the Department of Chemistry organized an educational industrial visit for final year UG and PG students to the Centre of Excellence for Energy Studies (CoEES), OIL Ltd., Guwahati.",
            "On 02.05.2025, students visited the Medicinal Chemistry department of NIPER Guwahati. The educational trip highlighted computational chemistry in drug design and delivery.",
            "On 28.03.2025, the Department of Chemistry, RSAPS, organized an invited talk on 'Indigenous Development of Strategic Materials...' delivered by Prof. (Dr.) Bipin Kumar Gupta.",
            "On 07.03.2025, an outreach programme was held at Dhekiabari L.P. School on chemical hygiene, environmental awareness, and climate change. Stationery and eatables were distributed to children.",
            "On 05.03.2025, an Industry-Academia Connect interactive session was conducted by Dr. Sinam Y. Meetei, Deputy Director, MSME Technology Centre, Imphal.",
            "On 28.02.2025, National Science Day was celebrated with talks, quiz, poster, and debate competitions on the theme 'Empowering Indian Youth...'.",
            "On 27.02.2025, the department conducted its 12th BoS meeting with external experts Prof. Pranjal Saikia and Dr. Kuladip Sarma.",
            "On 22.01.2025, students attended a Lab Conclave on Petroleum-Based Products organized by BIS, Guwahati.",
            "On 10.01.2025, Dr. Ramen Jamatia delivered an invited talk on 'Ru-Doped Hydrotalcite...' and its catalytic applications.",
            "On 20.12.2024, an outreach program was conducted at Mangaldai College, including career guidance, lab visits, and a campus tour.",
            "On 18.09.2024, the 10th BoS meeting was held by RSAPS and the Chemistry Department.",
            "On 13.09.2024, 'Khemia 2024' was organized to enhance chemistry learning among students.",
            "On 29.08.2024, students went on an educational trip to Guwahati Biotech Park and CAIF to explore instrumentation facilities.",
            "On 28.08.2024, Dr. Kusum K. Bania delivered an invited talk on future prospects and entrepreneurship in chemistry.",
            "On 22.07.2024, a re-orientation program was organized to welcome students for the new academic year, including scholarship awareness talks.",
            "On 14.05.2024, Dr. Kuladip Sarma gave an invited talk on careers in India's energy sector.",
            "On 04.04.2024, a hands-on workshop on scientific equipment was conducted for students across Assam.",
            "From 28.03.2024 to 01.04.2024, final-year UG and PG chemistry students went on an excursion-cum-educational trip to Darjeeling and Nepal.",
            "On 07.03.2024, a community outreach program was conducted at Garbhanga Parijat Academy, raising awareness on environmental topics and donating school items.",
            "On 28.02.2024, National Science Day was celebrated with poster and debate competitions and talks by scientists from Guwahati Biotech Park.",
            "On 03.02.2024, a mass awareness program was held at India Carbon Ltd. and M/S Monsoon Polymer Pvt. Ltd., organized by Pollution Control Board under NCAP.",
            "On 09.12.2023, students attended a scientific program on 'Good Laboratory Practices & Quality Control in Clinical Chemistry' at AIIMS Guwahati.",
            "From 08.11.2023 to 11.11.2023, an international conference on 'Interface of Chemistry, Material Chemistry and Pharmaceutical Sciences' was jointly organized by RGU and Cotton University.",
            "On 12.10.2023, Prof. Partha Basu (Indiana University Indianapolis, USA) gave a special talk on 'Careers in Chemistry/STEM'.",
            "On 15.09.2023, Dr. Pradyumna Goswami delivered an invited talk on 'Chemistry and Healthcare: Advances in Pharmaceuticals, Medical Treatments, and Career Opportunities.'",
            "On 04.09.2023, RSAPS and the Chemistry Department completed their 9th BoS meeting.",
            "On 29.08.2023, the 'Meet Our Alumni' event featured four distinguished alumni sharing their journeys and achievements.",
            "On 31.07.2023, RGU signed an MoU with the Assam Science Society to promote research and collaborative activities.",
            "On 01.06.2023, an awareness program on chemical hazards and environmental concerns was conducted.",
            "From 17.05.2023 to 18.05.2023, a Distinguished Lecture Series on 'Future of Catalysis and Industrial Sustainability' was held with speakers from DU, ICT Mumbai, and BHU.",
            "On 21.04.2023, an online interactive session with IITG Research Park was held under RIC 2023.",
            "On 10.04.2023, M.Sc. and B.Sc. Chemistry final semester students visited Guwahati Refinery for an educational trip.",
            "On 11.04.2023, a lecture series on 'Research Methodologies & Emerging Technologies' was conducted with professors from IISER Kolkata.",
            "On 08.04.2023, students went on a field trip to Meghalaya to explore nature and field studies.",
            "From 22.03.2023 to 23.03.2023, students attended a lecture series on Biophysical Techniques at IIT Guwahati.",
            "From 21.03.2023 to 22.03.2023, a Tug of War sports event with 50+ teams was organized by the Chemistry Department and RGU Sports Committee.",
            "From 16.03.2023 to 17.03.2023, students presented posters and oral talks at Assam Don Bosco University's conference on Emerging Trends in Chemistry.",
            "On 17.11.2022, students attended a hands-on training program on sophisticated instruments at Pandu College, Guwahati.",
            "On 21.10.2022, Prof. Kochi Ismail (Rtd., NEHU) delivered a scientific talk encouraging academic and research engagement.",
            "On 16.09.2022, an orientation program for postgraduate students was held by the Department of Chemistry with RSAPS.",
            "On 10.06.2022, Dr. Rajan Kumar presented on 'Engineering Polymer Self Assembly for Potential Applications.'",
            "On 04.06.2022, as part of the MoU with ICT Mumbai, a lecture series was organized by the Department of Chemistry and Biotechnology.",
            "On 03.06.2022, a webinar on 'Membrane Chemistry: Prospects of Interdisciplinary Research' was delivered by Dr. Swapnali Hazarika, CSIR-NEIST.",
            "On 10.05.2022, a cultural activity was organized by Chemistry students with RSAPS.",
            "On 28.03.2022, Prof. Vinod Kumar Tiwari (BHU) delivered an invited lecture on 'Synthetic Chemist and Our Society.'",
            "On 30.10.2021, a webinar on 'Engineering Hybrid Medicines' was organized with Dr. Bipul Sarma, Tezpur University.",
            "On 04.06.2021, a webinar on 'Sustainable Catalysis for Mitigation of Pollutants' was conducted with Dr. P.M. More, ICT Mumbai.",
            "On 29.05.2021, Prof. Raja Shunmugam (IISER Kolkata) delivered a webinar on Amphiphilic Functional Polymers.",
            "On 17.02.2021, Dr. Annamma Anil Odaneth (ICT Mumbai) delivered a webinar on Biofuel Production from Waste Resources.",
            "On 10.02.2021, Dr. Hemchandra K. Chaudhari (ICT Mumbai) gave a webinar on Computer Applications in Drug Discovery.",
            "On 25.11.2020, a webinar on 'Versatility of Carbon Disulfide' was conducted by Prof. Devdutt Chaturvedi, MGCU.",
            "On 30.07.2020, Dr. Debajyoti Mahanta (GU) presented a webinar on Starting Research with Limited Resources.",
            "On 20.07.2020, Dr. Pankaj Das (DU) delivered a webinar on Avoiding Plagiarism in Academic Writing.",
            "On 24.06.2020, Dr. Arjun Sengupta (UPenn) presented a webinar on Interplay of Sleep and Metabolism.",
            "On 18.06.2020, Dr. Monolekha Bhattacharya (Serotonin Labs) gave a webinar on Health Outcomes in the Digital Era.",
            "On 12.06.2020, Dr. Bhaskar Jyoti Deka (IIT Roorkee) delivered a webinar on Membrane Distillation Technology.",
            "On 10.06.2020, Mr. Dhrubajyoti Thakuria (GSK Biologicals) presented a webinar on COVID-19: A Ray of Hope.",
            "On 02.05.2020, an in-house career guidance webinar was conducted by RSAPS and the Chemistry faculty.",
            "On 17.04.2020, Dr. Arabinda Baruah (GU) presented a webinar on Lab on a Chip.",
            "On 13.03.2020, students interacted with Ms. Priyanka Das Rajkakati, an Indian scientist in France.",
            "On 28.02.2020, National Science Day was celebrated with guests Prof. Shreemayee Bora and Prof. Latha Rangan (IITG).",
            "On 17.09.2019, a wall magazine was inaugurated by M.Sc. Chemistry 1st Semester students.",
            "On 30.07.2019, an Open House was organized for newly admitted students.",
            "On 03.07.2019, the Chemistry Department participated in RGU's Summer School 2019.",
            "On 28.02.2019, National Science Day was celebrated with Prof. Amarjyoti Choudhury as guest.",
            "On 20.11.2018, an interactive session was held with Prof. T. R. Sesashadri (Delhi University).",
            "From 15.11.2018 to 16.11.2018, 'Science Conclave 2018' was organized, where B.Sc. students inaugurated a periodic table wall and eminent guests attended.",
            "On 26.07.2018, Mr. Mayur Bora delivered a motivational talk.",
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
        <div class="dept-nursing-event-item">
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

                    ["1", "Convener (Ex-Officio) - Head of the Department",
                        "Prof. (Dr) Kaberi Saikia, Principal, RSN"
                    ],

                    ["2", "All Faculty Members of the Department (Ex-Officio)",
                        "Y. Renubala Devi, Midwifery and Obstetrics Nursing"
                    ],

                    ["", "", "Dr. Punam Bebbarma, Child Health Nursing"],
                    ["", "", "Monika Kalita, Medical Surgical Nursing"],
                    ["", "", "Rumi Talukdar, Mental Health Nursing"],

                    ["3", "Professors of the School Members (Ex-Officio)",
                        "Prof. (Dr) Hemeswari Bhuyan, Community Health Nursing"
                    ],

                    ["4", "External Experts for each Department (Academic)",
                        "Prof. (Dr) Nirmali Gogoi, Vice Principal, Faculty of Nursing, Assam Down Town University, Guwahati"
                    ],

                    ["5", "External Experts for each Department (Industry)",
                        "Capt. Minimol Louise, Principal, Army Institute of Nursing, Guwahati"
                    ],

                    ["6", "Two Faculty Members of the School Nominated by the Vice Chancellor",
                        "Rumi Talukdar, Mental Health Nursing"
                    ],

                    ["7", "Registrar, Member Secretary (Ex-Officio)", "Dr. D N Singh, Registrar or his nominee"]

                ]
            },
            {
                title: "Departmental Research Committee (DRC)",
                headers: ["S.No.", "Position In DRC", "Name And Designation"],
                rows: [

                    ["1", "Head of the Department", "Prof. (Dr) Kaberi Saikia, Principal RSN (Chairperson)"],

                    ["2", "Two Professors", "Prof. (Dr) Hemeswari Bhuyan, Vice Principal"],

                    ["", "", "Prof. (Dr) Punam Debbarma, Professor"],

                    ["3", "Three External Members Nominated by the URC", "Prof. (Dr) L.K. Nath, Dean, RSP"],

                    ["", "",
                        "Prof. (Dr) L. Ladu Singh, Department of Mathematics, Chief Advisor Research & Development"
                    ],

                    ["", "", "Prof. (Dr) Bandan Das, Deputy Director IQAC, Department of Botany"]

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
        <div class="dept-nursing-table-responsive">
          <table class="dept-nursing-table">
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
        <div class="dept-nursing-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-nursing-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-nursing-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-nursing-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-nursing-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-nursing-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-nursing-table-content");
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
                    image: "mobile-assets/new-dept-nursing/events/e1/1.jpg"
                },
                {
                    title: "15–16 July 2025: International Conference on Exploring Technological Advancement in Health Care: Empowering Nurses for Quality Care",
                    image: "mobile-assets/new-dept-nursing/events/e2/2.jpg"
                },
                {
                    title: "1–7 August: World Breastfeeding Week (Theme: Prioritize Breastfeeding – Create Sustainable Support System)",
                    image: "mobile-assets/new-dept-nursing/events/e12/1.jpg"
                },
                {
                    title: "06-08-2025: Mental Health Awareness Talk (in collaboration with Deeksharambha)",
                    image: "mobile-assets/new-dept-nursing/events/e3/3.jpg"
                },
                {
                    title: "17-09-2026: World Patient Safety Day (Theme: Safe Care for Every Newborn and Every Child; Slogan: Patient Safety from the Start)",
                    image: "mobile-assets/new-dept-nursing/events/e4/4.jpg"
                },
                {
                    title: "24-10-2025: Lamp Lighting and Path Taking Ceremony",
                    image: "mobile-assets/new-dept-nursing/events/e5/5.jpg"
                },
                {
                    title: "14-11-2026: World Diabetes Day (Celebrated at NE Railway Hospital, Maligaon; Theme: Diabetes Across Life Stages)",
                    image: "mobile-assets/new-dept-nursing/events/e6/6.jpg"
                },
                {
                    title: "01-12-2025: World AIDS Day (Theme: Overcoming Disruption, Transforming the AIDS Response; District Hospital Sonapur)",
                    image: "mobile-assets/new-dept-nursing/events/e7/7.jpg"
                },
                {
                    title: "04-02-2026: World Cancer Day (Theme: United by Unique; Swagat Super Speciality Hospital)",
                    image: "mobile-assets/new-dept-nursing/events/e8/8.jpg"
                },
                {
                    title: "24-03-2026: World TB Day (Theme: Yes We Can End TB – Led by Countries, Powered by People; Swagat Super Speciality Hospital)",
                    image: "mobile-assets/new-dept-nursing/events/e9/9.jpg"
                },
                {
                    title: "28-02-2026: School Health Programme (Nalapara Prathamik Vidyalaya, Guwahati)",
                    image: "mobile-assets/new-dept-nursing/events/e10/10.jpg"
                },
                {
                    title: "07-04-2026: World Health Day (Rani High School)",
                    image: "mobile-assets/new-dept-nursing/events/e11/11.jpg"
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
            <div class="dept-nursing-event-acc-item">

                <div class="dept-nursing-event-acc-header">
                    <span>${event.title}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <div class="dept-nursing-event-acc-content">
                    <div class="dept-nursing-event-img">
                        <img src="${event.image}" alt="event image">
                    </div>
                </div>

            </div>
        `).join("");

                eventGalleryContainer.innerHTML = html;
            }

            /* ================= ACCORDION LOGIC ================= */
            function initAccordion() {

                const items = eventGalleryContainer.querySelectorAll(".dept-nursing-event-acc-item");

                items.forEach(item => {

                    const header = item.querySelector(".dept-nursing-event-acc-header");
                    const content = item.querySelector(".dept-nursing-event-acc-content");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active");
                            const c = i.querySelector(".dept-nursing-event-acc-content");
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
@endsection
