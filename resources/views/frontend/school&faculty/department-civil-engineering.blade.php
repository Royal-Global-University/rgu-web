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

        .dept-civil-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-civil-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-civil-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-civil-heading h1 span {
            color: var(--accent);
        }

        .dept-civil-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-civil-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-civil-img {
            flex: 1;
            position: relative;
        }

        .dept-civil-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-civil-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-civil-content {
            flex: 1;
        }

        .dept-civil-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-civil-content h3 span {
            color: var(--accent);
        }

        .dept-civil-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-civil-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-civil-floating {
            position: fixed;
            left: 30px;
            top: 60%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-civil-float-item {
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

        .dept-civil-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-civil-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-civil-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-civil-float-item:hover i {
            color: #fff;
        }

        .dept-civil-float-item:hover .dept-civil-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-civil-admission-btn {
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

        .dept-civil-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-civil-admission-btn:hover {
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
            .dept-civil-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;
            }

            .dept-civil-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-civil-img img {
                padding-left: 0%;
            }

            .dept-civil-floating {
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

            .dept-civil-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-civil-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-civil-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-civil-float-item:active i {
                color: var(--primary);
            }

            .dept-civil-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-civil-admission-btn {
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
            .dept-civil-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-civil-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-civil-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-civil-section-title span {
            color: var(--accent);
        }

        .dept-civil-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-civil-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-civil-course-header {
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
        .dept-civil-course-header::after {
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
        .dept-civil-view-btn {
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

        .dept-civil-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-civil-course-body {
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
            .dept-civil-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-civil-img img {
                padding-left: 0%;
            }

            .dept-civil-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-civil-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-civil-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-civil-prospects-content {
                padding: 25px 20px;
            }


            .dept-civil-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-civil-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-civil-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-civil-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-civil-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-civil-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-civil-list li {
            margin-bottom: 12px;
        }

        .dept-civil-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-civil-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-civil-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-civil-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-civil-accordion-header {
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

        .dept-civil-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-civil-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-civil-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-civil-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-civil-accordion-item.active .dept-civil-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-civil-accordion-item.active .dept-civil-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-civil-accordion-item.active .dept-civil-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-civil-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-civil-syllabus-link {
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

        .dept-civil-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-civil-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-civil-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-civil-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-civil-syllabus-link:hover .dept-civil-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-civil-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-civil-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-civil-lab-container {
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

        .dept-civil-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-civil-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1300px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-civil-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-civil-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 4 / 4;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-civil-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-civil-explore-btn {
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

        .dept-civil-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-civil-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-civil-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-civil-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-civil-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-civil-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-civil-bullet-list li::before {
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
        .dept-civil-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-civil-events-box {
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
        .dept-civil-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-civil-events-box:hover .dept-civil-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-civil-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-civil-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-civil-events-btn:hover {
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
        .dept-civil-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-civil-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-civil-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-civil-table-header {
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
        .dept-civil-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-civil-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-civil-table-acc.active .dept-civil-table-content {
            padding: 20px;
        }

        .dept-civil-table-acc.active .dept-civil-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-civil-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-civil-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-civil-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-civil-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-civil-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-civil-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-civil-table td,
        .dept-civil-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-civil-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-civil-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-civil-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-civil-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-civil-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-civil-marquee:hover .dept-civil-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-civil-marquee img {
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
            .dept-civil-marquee img {
                height: 160px;
            }
        }
    </style>

    <div class="dept-civil-floating">
        <a href="#dept-home" class="dept-civil-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-civil-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-civil-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-civil-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-civil-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-civil-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-civil-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-civil-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-civil-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-civil-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-civil-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-civil-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-civil-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-civil-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-civil-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-civil-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-civil-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-civil-wrapper">

        <div class="dept-civil-heading" id="dept-home">
            <h1>Department of <span>Civil Engineering</span></h1>
            <h2>Royal School of Engineering & Technology (RSET)</h2>
        </div>

        <div class="dept-civil-hero" id="dept-about">

            <div class="dept-civil-img">
                <img src="/mobile-assets/civil.jpeg" alt="Architecture">
            </div>

            <div class="dept-civil-content">

                <h3>About <span>Department</span></h3>

                <p>
                    Civil engineering forms the backbone of modern society by enabling the planning, design, construction, and maintenance of critical infrastructure, including transportation systems, buildings, water resources, and environmental facilities. Recognizing its pivotal role in sustainable development and nation building, the Department of Civil Engineering at The Assam Royal Global University is committed to producing competent, ethical, and industry-ready professionals capable of addressing contemporary societal and infrastructural challenges.
                </p>



            </div>

        </div>
        <p>
            Established in 2009, the department has evolved into a dynamic and forward-looking academic unit emphasizing theoretical rigor, practical competence, and industry relevance. The Department offers a four-year B.Tech program in Civil Engineering, two-year M.Tech programs in Structural Engineering and Water Resource Development and Management, and a doctoral program in Civil Engineering.
        </p>
        <p>

The curriculum is periodically updated in line with Outcome-Based Education (OBE) principles and aligned with contemporary industry and societal needs. It integrates emerging and interdisciplinary areas such as sustainable and green construction, smart and resilient infrastructure, environmental engineering, geospatial technologies, and modern surveying practices.
        </p>
        <p>
                                Supported by a dedicated faculty of 10 experienced members with strong academic, research, and industry backgrounds, the department ensures effective teaching–learning processes, personalized mentoring, and comprehensive academic and career guidance.
The program emphasizes experiential and outcome-based learning through laboratory experiments, field visits, design and analysis projects, internships, expert lectures, and sustained industry interactions. Students engage in projects across diverse domains, including sustainable and low-carbon concrete materials, water quality assessment of rivers in Assam, bamboo-based construction materials in collaboration with CSIR–NEIST, and geotechnical investigations including soil characterization and pile foundation design for high-rise structures in seismic-prone areas.
        </p>
        <p>
            Students also gain industrial exposure through internships at reputed organizations such as Star Cement, Public Works Department (Government of Assam), IIT Guwahati, UltraTech Cement, and Ready-Mix Concrete (RMC) plants. These initiatives equip graduates with strong technical competence, problem-solving skills, ethical awareness, teamwork abilities, and a professional outlook, preparing them for successful careers in industry, public sector organizations, consultancy, entrepreneurship, or higher studies and research.
        </p>

        <!-- vision mission  -->
        <div class="dept-civil-prospects-section" id="dept-vision">
            <h2 class="dept-civil-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-civil-prospects-content">

                <h3 class="dept-civil-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-civil-bullet-list">
                    <li>
                        To develop globally competent and socially responsible civil engineers through quality education,
                        research,
                        and sustainable engineering practices, contributing to national and international development.
                    </li>

                </ul>

                <h3 class="dept-civil-subheading">Our Mission</h3>
                <ul class="dept-civil-bullet-list">
                    <li>
                        To impart strong foundations in civil engineering fundamentals through innovative teaching–learning
                        practices and industry oriented education, fostering academic excellence and professional
                        competence.
                    </li>
                    <li>
                        To promote research, innovation, and the use of modern engineering tools and emerging technologies
                        to
                        address real world civil engineering challenges sustainably.
                    </li>
                    <li>
                        To inculcate ethical values, environmental consciousness, and social responsibility through
                        community
                        engagement and professional practice.
                    </li>
                    <li>
                        To prepare graduates as responsible leaders and lifelong learners capable of contributing positively
                        to
                        society and adapting to global engineering advancements.
                    </li>
                </ul>

            </div>
        </div>

        <div class="dept-civil-courses-section" id="dept-courses">
            <h2 class="dept-civil-section-title">Courses <span>Offered</span></h2>

            <div class="dept-civil-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-civil-prospects-section" id="dept-prospects">
              <h2 class="dept-civil-section-title">Career <span>Prospects</span></h2>

              <div class="dept-civil-prospects-content">
                <p class="dept-civil-intro-text">
                  The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
                  sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                  strong foundation in agricultural sciences, preparing them for following careers opportunities:
                </p>

                <h3 class="dept-civil-subheading">Higher Education Opportunities</h3>
                <ol class="dept-civil-list">
                  <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                  </li>
                  <li>MBA in Agribusiness Management</li>
                  <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                  <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                    disciplines</li>
                </ol>

                <h3 class="dept-civil-subheading">Government Sector Jobs</h3>
                <ol class="dept-civil-list">
                  <li>Agricultural Officer / Civil Development Officer (ADO)</li>
                  <li>IBPS AFO (Agricultural Field Officer)</li>
                  <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                  <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                  <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                </ol>

                <h3 class="dept-civil-subheading">Private Sector Careers</h3>
                <ol class="dept-civil-list">
                  <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                  <li>Food Processing Industries</li>
                  <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                  <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
                  <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                </ol>

                <h3 class="dept-civil-subheading">Research & Teaching</h3>
                <ol class="dept-civil-list">
                  <li>Research Assistant / Scientist – in public and private research institutions</li>
                  <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                  <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                </ol>

                <h3 class="dept-civil-subheading">Entrepreneurship & Startups</h3>
                <ol class="dept-civil-list">
                  <li>Organic farming, dairy, poultry, aquaculture</li>
                  <li>Agri-tourism, greenhouse farming, vertical farming</li>
                  <li>Processing units for spices, cereals, or fruits</li>
                  <li>Agri-consultancy or freelance advisory services</li>
                </ol>

                <h3 class="dept-civil-subheading">Jobs Abroad</h3>
                <ol class="dept-civil-list">
                  <li>Agricultural research, farm management, and food security projects</li>
                  <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                  <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                </ol>

                <h3 class="dept-civil-subheading">Key Skills That Boost Career</h3>
                <ol class="dept-civil-list">
                  <li>Practical knowledge of farming tools and technologies</li>
                  <li>Communication and management skills (especially in extension or agribusiness)</li>
                  <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
                  <li>Language skills and report writing</li>
                </ol>

              </div>
            </div> -->

        <div class="dept-civil-accordion-section" id="dept-syllabus">
            <h2 class="dept-civil-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-civil-accordion-wrapper">

                <div class="dept-civil-accordion-item active">
                    <div class="dept-civil-accordion-header">
                        <div class="dept-civil-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-civil-chevron"></i>
                    </div>

                    <div class="dept-civil-accordion-content">
                        <div class="dept-civil-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rset/ce/updated-syllabus/Course-structure_CE.pdf"
                                class="dept-civil-syllabus-link" download>
                                <div class="dept-civil-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- B.Tech. CE
                                </div>
                                <i class="fa-solid fa-download dept-civil-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="/mobile-assets/syllabus/CE/Syllabus_Civil_Engineering_2025-26.pdf"
                                class="dept-civil-syllabus-link" download>
                                <div class="dept-civil-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- B.Tech. CE
                                </div>
                                <i class="fa-solid fa-download dept-civil-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-civil-accordion-item">
                    <div class="dept-civil-accordion-header">
                        <div class="dept-civil-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-civil-chevron"></i>
                    </div>

                    <div class="dept-civil-accordion-content">
                        <div class="dept-civil-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/syllabus/CE/SYLLABUS- M. TECH. (CE- SE)- 16-07-2025(1).pdf"
                                class="dept-civil-syllabus-link" download>
                                <div class="dept-civil-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- M.Tech. CE
                                </div>
                                <i class="fa-solid fa-download dept-civil-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-civil-accordion-item">
                    <div class="dept-civil-accordion-header">
                        <div class="dept-civil-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-civil-chevron"></i>
                    </div>

                    <div class="dept-civil-accordion-content">
                        <div class="dept-civil-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-civil-syllabus-link" download>
                                <div class="dept-civil-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-civil-events-section" id="dept-events">

            <h2 class="dept-civil-section-title">Events</h2>

            <div class="dept-civil-events-box">
                <div class="dept-civil-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                <a href="#" class="dept-civil-events-btn">View All</a>
              </div> -->

        </div>

        <div class="dept-civil-event-gallery-section">

            <h2 class="dept-civil-section-title">Event <span>Highlights</span></h2>

            <div id="event-gallery-container"></div>

        </div>

        <div class="dept-civil-table-section" id="dept-committee">

            <div class="dept-civil-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-civil-lab-section" id="dept-lab">

            <div class="dept-civil-lab-container">

                <h2 class="dept-civil-section-title">Our <span>Lab</span></h2>

                <p class="dept-civil-lab-intro">
                    The Department of Civil Engineering is equipped with adequate, wellmaintained laboratory that support effective teaching–learning processes, research activities, and skill development in alignment with programme outcomes and university objectives.
                    <br> <br>
                    The Civil Engineering laboratories cater to a wide spectrum of experimental work related to cement, concrete, rocks, soils, aggregates, asphalt and other construction materials. The facilities are furnished with modern, functional, and calibrated equipment to conduct experiments as per relevant Indian and international standards, ensuring accuracy, reliability, and quality compliance.
                    <br> <br>
                    The laboratories are extensively utilised by undergraduate and postgraduate students for laboratory courses, mini projects, major projects, researchoriented activities. These facilities enable students to design, analyse, test, and simulate structural, material, geotechnical, fluid mechanics and environmental systems, thereby strengthening practical competence, analytical ability, and problemsolving skills.
                    <br><br>
                    The laboratories are supported by qualified and experienced faculty and  technical staff who assist in the conduct of experiments, preparation of laboratory setups, equipment handling, and implementation of safety procedures. The department follows a systematic approach for equipment inventory management, calibration, preventive maintenance, and periodic upgradation, ensuring continuous availability and effective utilisation of resources.
                    <br><br>
                    Appropriate safety measures, housekeeping practices, and waste management procedures are implemented to provide a safe, clean, and conducive learning environment. Overall, the laboratory and infrastructure facilities of the Department of Civil Engineering effectively support academic delivery, research, skill development, and continuous improvement.
                    <br>
                </p>


                <h3 class="dept-civil-lab-heading">Our Lab Equipments</h3>

                <!-- <h2 class="dept-civil-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-civil-lab-gallery">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/18.jpg"
                        alt="Lab 18" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/19.jpg"
                        alt="Lab 19" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/20.jpg"
                        alt="Lab 20" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/21.jpg"
                        alt="Lab 21" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/22.jpg"
                        alt="Lab 22" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/23.jpg"
                        alt="Lab 23" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/24.jpg"
                        alt="Lab 24" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/25.jpg"
                        alt="Lab 25" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/26.jpg"
                        alt="Lab 26" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/27.jpg"
                        alt="Lab 27" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/28.jpg"
                        alt="Lab 28" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/29.jpg"
                        alt="Lab 29" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/30.jpg"
                        alt="Lab 30" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/31.jpg"
                        alt="Lab 31" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/32.jpg"
                        alt="Lab 32" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/33.jpg"
                        alt="Lab 33" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/34.jpg"
                        alt="Lab 34" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/35.jpg"
                        alt="Lab 35" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/36.jpg"
                        alt="Lab 36" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/37.jpg"
                        alt="Lab 37" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/38.jpg"
                        alt="Lab 38" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/39.jpg"
                        alt="Lab 39" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/40.jpg"
                        alt="Lab 40" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/41.jpg"
                        alt="Lab 41" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/42.jpg"
                        alt="Lab 42" class="dept-civil-lab-img">
                    <img src="https://www.rgu.ac/mobile-assets/laboratories/Civil%20Engg%20Lab%20Machines/43.jpg"
                        alt="Lab 43" class="dept-civil-lab-img">
                </div>

                <!-- <button class="dept-civil-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Tech. CE in Water Resources Development & Management",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MTech-CE-in-Water-Resources"
            },
            {
                title: "M.Tech. CAD/CDC",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MTech-CAD"
            },
            {
                title: "M.Tech. CE in Structural Engineering",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MTech-CE-in-Structural-Engineering"
            },
            {
                title: "B.Tech CE - Lateral Entry",
                duration: "3 years",
                link: "https://www.rgu.ac/programs-b-tech-lateral-entry"
            },
            {
                title: "B.Tech CE",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-b-tech-ce"
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
        <div class="dept-civil-course-card">

          <div class="dept-civil-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-civil-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-civil-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-civil-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-civil-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-civil-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-civil-accordion-content');

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
            "On 02.01.2025, an invited talk by Prof. Chandan Mahanta (Retd. Professor, IIT Guwahati) was conducted.",
            "On 09.12.2024, an invited talk by Prof. Sudip Kumar Rakhshit (Ex Professor, Indian Institute of Geomagnetism, Mumbai) was held.",
            "On 08.11.2024, an invited talk by Prof. Jatin Kumar Das (Head, Department of Geography, Rajiv Gandhi University, Itanagar) was organized.",
            "On 07.10.2024, a talk on vegetation as a key player in climate change mitigation by Dr. Jyotirmoy Barman (University of British Columbia, Canada) was conducted (Offline).",
            "On 20.08.2024, an invited talk by Sri Atul Chandrakant Kulkarni (Chairman, National Board of Accreditation, New Delhi) was held.",
            "On 07.03.2024, a talk on water resource planning and management in NER by Mr. Gopal Chetri (Irrigation Department, Govt. of Assam) was conducted (Offline).",
            "On 29.01.2024, an invited lecture by Prof. M. Taher (Former Professor, Gauhati University) was held.",
            "On 16.02.2024, a guest lecture by Dr. Juri Sarma (Principal, B. Baruah College, Guwahati) was conducted.",
            "On 06.02.2024, a guest lecture by Prof. Hitesh Deka (Vice Chancellor, KKHSOU, Guwahati) was held.",

            "On 07.12.2023, the inauguration of the student chapter of the Institute of Engineers (India), Assam State Centre was conducted along with a talk by Dr. N. N. Patwari and Pulak Sarmah.",
            "On 02.11.2023, a guest lecture by Dr. Hirak Ranjan Das (RGU) was conducted.",
            "On 23.11.2023, a guest lecture by Dr. Bhaskar Chakravorty (Tinsukia College) was conducted.",
            "On 21.11.2023, an invited talk by Prof. Milap Chand Sharma (JNU, New Delhi) was held.",
            "On 22.09.2023, a guest lecture by Prof. (Dr.) Sunando Bandyopadhyay (University of Calcutta) was conducted.",
            "On 18.09.2023, a webinar on reclaimed asphalt for forest road reinforcement by Dr. Jaroslav Blahuta (Mendel University, Czech Republic) was conducted (Online).",
            "On 15.05.2023, an invited talk by Prof. D. K. Nayak (NEHU) was held.",
            "On 10.04.2023, a talk on earthquake engineering in building design by Dr. Snehal Kaushik (GIMT, Guwahati) was conducted (Offline).",
            "On 06.06.2023, the inauguration of the student chapter of the Institute of Engineers (India), Assam State Centre was conducted (Offline)."
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
        <div class="dept-civil-event-item">
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
                    ["1", "HoD (Ex-Officio)", "Prof. Shwetambara Verma, Professor & Head, CE"],

                    ["2", "Member", "Dr. Abhijeet Dey, Assistant Professor"],
                    ["3", "Member", "Mr. Rishikesh Duarah, Assistant Professor"],
                    ["4", "Member", "Dr. Bonisha Borah, Assistant Professor"],
                    ["5", "Member", "Dr. Shinjini Paul Choudhury, Assistant Professor"],
                    ["6", "Member", "Dr. Shehnaz Ara Rahman, Assistant Professor"],
                    ["7", "Member", "Rajesh Deb, Assistant Professor"],
                    ["8", "Member", "Raisa Tamsin Hussain, Assistant Professor"],
                    ["9", "Member", "Antara Banerjee, Assistant Professor"],

                    ["10", "Academic Expert", "Dr. Hemant B. Kaushik, BIS Chair Professor, IIT Guwahati"],
                    ["11", "Industry Expert",
                        "Mr. Biswajit Mansingh, Regional Head (Sales & Operation), UltraTech Cement Ltd"
                    ]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Designated Members", "Nomination"],
                rows: [
                    ["1", "Chairperson",
                    "Prof. Shwetambara Verma, Head of the Department, Civil Engineering, RSET"],

                    ["2", "Member",
                        "Prof. Diganta Munshi, Dean RSET & RSIT, Registrar (Administration), Director (IQAC)"
                    ],

                    ["3", "Member", "Dr. Shinjini Paul Choudhury, Member Secretary"],
                    ["", "", "Dr. Bonisha Borah"],

                    ["4", "Member",
                        "Prof. Sharad Gokhale, Department of Civil Engineering, IIT Guwahati (External Expert)"
                    ]
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
        <div class="dept-civil-table-responsive">
          <table class="dept-civil-table">
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
        <div class="dept-civil-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-civil-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-civil-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-civil-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-civil-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-civil-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-civil-table-content");
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
      <div class="dept-civil-event-card">

        <div class="dept-civil-event-title">
          ${event.title}
        </div>

        <div class="dept-civil-marquee">
          <div class="dept-civil-marquee-track">
            ${marqueeImages}
          </div>
        </div>

      </div>
    `;

            }).join("");
        }
    </script>
@endsection
