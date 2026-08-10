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

        .dept-chemistry-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-chemistry-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-chemistry-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-chemistry-heading h1 span {
            color: var(--accent);
        }

        .dept-chemistry-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-chemistry-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-chemistry-img {
            flex: 1;
            position: relative;
        }

        .dept-chemistry-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-chemistry-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-chemistry-content {
            flex: 1;
        }

        .dept-chemistry-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-chemistry-content h3 span {
            color: var(--accent);
        }

        .dept-chemistry-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-chemistry-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-chemistry-floating {
            position: fixed;
            left: 30px;
            top: 60%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-chemistry-float-item {
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

        .dept-chemistry-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-chemistry-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-chemistry-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-chemistry-float-item:hover i {
            color: #fff;
        }

        .dept-chemistry-float-item:hover .dept-chemistry-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-chemistry-admission-btn {
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

        .dept-chemistry-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-chemistry-admission-btn:hover {
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
            .dept-chemistry-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-chemistry-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-chemistry-img img {
                padding-left: 0%;
            }

            .dept-chemistry-floating {
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

            .dept-chemistry-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-chemistry-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-chemistry-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-chemistry-float-item:active i {
                color: var(--primary);
            }

            .dept-chemistry-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-chemistry-admission-btn {
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
            .dept-chemistry-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-chemistry-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-chemistry-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-chemistry-section-title span {
            color: var(--accent);
        }

        .dept-chemistry-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-chemistry-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-chemistry-course-header {
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
        .dept-chemistry-course-header::after {
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
        .dept-chemistry-view-btn {
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

        .dept-chemistry-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-chemistry-course-body {
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
            .dept-chemistry-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-chemistry-img img {
                padding-left: 0%;
            }

            .dept-chemistry-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-chemistry-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-chemistry-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-chemistry-prospects-content {
                padding: 25px 20px;
            }


            .dept-chemistry-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-chemistry-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-chemistry-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-chemistry-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-chemistry-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-chemistry-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-chemistry-list li {
            margin-bottom: 12px;
        }

        .dept-chemistry-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-chemistry-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-chemistry-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-chemistry-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-chemistry-accordion-header {
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

        .dept-chemistry-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-chemistry-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-chemistry-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-chemistry-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-chemistry-accordion-item.active .dept-chemistry-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-chemistry-accordion-item.active .dept-chemistry-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-chemistry-accordion-item.active .dept-chemistry-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-chemistry-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-chemistry-syllabus-link {
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

        .dept-chemistry-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-chemistry-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-chemistry-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-chemistry-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-chemistry-syllabus-link:hover .dept-chemistry-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-chemistry-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-chemistry-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-chemistry-lab-container {
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

        .dept-chemistry-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-chemistry-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1300px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-chemistry-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-chemistry-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-chemistry-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-chemistry-explore-btn {
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

        .dept-chemistry-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-chemistry-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-chemistry-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-chemistry-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-chemistry-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-chemistry-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-chemistry-bullet-list li::before {
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
        .dept-chemistry-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-chemistry-events-box {
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
        .dept-chemistry-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-chemistry-events-box:hover .dept-chemistry-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-chemistry-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-chemistry-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-chemistry-events-btn:hover {
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
        .dept-chemistry-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-chemistry-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-chemistry-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-chemistry-table-header {
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
        .dept-chemistry-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-chemistry-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-chemistry-table-acc.active .dept-chemistry-table-content {
            padding: 20px;
        }

        .dept-chemistry-table-acc.active .dept-chemistry-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-chemistry-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-chemistry-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-chemistry-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-chemistry-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-chemistry-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-chemistry-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-chemistry-table td,
        .dept-chemistry-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-chemistry-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-chemistry-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-chemistry-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-chemistry-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-chemistry-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-chemistry-marquee:hover .dept-chemistry-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-chemistry-marquee img {
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
            .dept-chemistry-marquee img {
                height: 160px;
            }
        }

        .dept-chemistry-prospects-content {
            padding: 25px 20px;
        }
    </style>

    <div class="dept-chemistry-floating">
        <a href="#dept-home" class="dept-chemistry-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-chemistry-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-chemistry-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-chemistry-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-chemistry-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-chemistry-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-chemistry-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-chemistry-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-chemistry-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-chemistry-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-chemistry-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-chemistry-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-chemistry-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-chemistry-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-chemistry-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-chemistry-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-chemistry-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-chemistry-wrapper">

        <div class="dept-chemistry-heading" id="dept-home">
            <h1>Department of <span>Chemistry</span></h1>
            <h2>Royal School of Applied and Pure Sciences (RSAPS)</h2>
        </div>

        <div class="dept-chemistry-hero" id="dept-about">

            <div class="dept-chemistry-img">
                <img src="mobile-assets/rsaps-new-dept/chemistry/head-img (1).png" alt="Architecture">
            </div>

            <div class="dept-chemistry-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Chemistry, RSAPS is dedicated to teaching both fundamental knowledge and practical
                    applications in the chemical sciences through a diverse range of research areas. Organic and
                    Inorganic synthesis focus on creating organic and inorganic compounds, respectively, contributing to
                    new materials, pharmaceuticals, industrial applications, and biological applications. Catalysis
                    accelerates of chemical reactions using catalysts, essential for efficient and sustainable chemical
                    processes. The works on sensors develops sensors for detecting and measuring substances in
                    environmental monitoring and medical diagnostics.


                </p>



            </div>

        </div>

        <div class="dept-chemistry-prospects-section">

            <div class="dept-chemistry-prospects-content">
                <p class="dept-chemistry-lab-intro">Research in Energy, Environment, and Sustainability explores new
                    materials and processes for sustainable energy production, environmental remediation, and
                    eco-friendly technologies, addressing global challenges with an emphasis on sustainability.
                    Computational Chemistry employs the computational methods and simulations to understand molecular
                    properties and interactions, predicting experimental outcomes and designing new molecules. Chemical
                    Biology, at the intersection of chemistry and biology, investigates chemical processes within living
                    organisms, designs chemical tools for biological studies, advances drug discovery, and elucidates
                    molecular mechanisms of diseases in cellular level. The department's goal of achieving excellence is
                    to inspire research and developed towards translational research that commits to scientific findings
                    and ethical responsibility for the betterment of society. The department has provision of special
                    laboratories for different areas of organic, inorganic, and physical chemistry dedicating to empower
                    students for industry, academia, and research. The departmental labs are equipped with modern-day
                    instruments for qualitative and quantitative analysis, ensuring alignment with the curriculum. Major
                    safety measures such as emergency equipment, proper ventilation, and clear guidelines are in place
                    to protect students and faculty. Additionally, the department features dedicated classroom spaces
                    with audio-visual aids, well-appointed faculty offices as well as qualified faculties in all
                    disciplines, a specialized library with relevant textbooks, and ample storage facilities for
                    laboratory equipment and supplies. Robust networking and connectivity facilitate seamless
                    communication among faculty, students, and researchers, fostering a collaborative academic
                    environment. Regular maintenance and upkeep ensure that all facilities remain in optimal condition,
                    reflecting the university's commitment to providing a high-quality learning environment that is
                    accessible and inclusive to all students.</p>



            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-chemistry-prospects-section" id="dept-vision">
            <h2 class="dept-chemistry-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-chemistry-prospects-content">

                <h3 class="dept-chemistry-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-chemistry-bullet-list">
                    <li>
                        To offer nationally and internationally integrated opportunities for industry, academia, and
                        research in the field of Chemistry to create socially responsible global citizens.
                    </li>

                </ul>

                <h3 class="dept-chemistry-subheading">Our Mission</h3>
                <ul class="dept-chemistry-bullet-list">
                    <li>
                        To achieve academic excellence through innovatively designed, research intensive,
                        industry-oriented
                        course curriculum.
                    </li>
                    <li>
                        To empower students with a deep understanding of chemical principles, analytical thinking
                        skills, and
                        ethical responsibilityfor the betterment of humanity.
                    </li>
                    <li>
                        Through rigorous academic training, hands-on research experiences, and service-learning
                        initiatives,
                        we nurture students who are dedicated to giving back to the society.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-chemistry-courses-section" id="dept-courses">
            <h2 class="dept-chemistry-section-title">Courses <span>Offered</span></h2>

            <div class="dept-chemistry-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-chemistry-prospects-section" id="dept-prospects">
              <h2 class="dept-chemistry-section-title">Career <span>Prospects</span></h2>

              <div class="dept-chemistry-prospects-content">
                <p class="dept-chemistry-intro-text">
                  The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
                  sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                  strong foundation in agricultural sciences, preparing them for following careers opportunities:
                </p>

                <h3 class="dept-chemistry-subheading">Higher Education Opportunities</h3>
                <ol class="dept-chemistry-list">
                  <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                  </li>
                  <li>MBA in Agribusiness Management</li>
                  <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                  <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                    disciplines</li>
                </ol>

                <h3 class="dept-chemistry-subheading">Government Sector Jobs</h3>
                <ol class="dept-chemistry-list">
                  <li>Agricultural Officer / Civil Development Officer (ADO)</li>
                  <li>IBPS AFO (Agricultural Field Officer)</li>
                  <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                  <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                  <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                </ol>

                <h3 class="dept-chemistry-subheading">Private Sector Careers</h3>
                <ol class="dept-chemistry-list">
                  <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                  <li>Food Processing Industries</li>
                  <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                  <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
                  <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                </ol>

                <h3 class="dept-chemistry-subheading">Research & Teaching</h3>
                <ol class="dept-chemistry-list">
                  <li>Research Assistant / Scientist – in public and private research institutions</li>
                  <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                  <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                </ol>

                <h3 class="dept-chemistry-subheading">Entrepreneurship & Startups</h3>
                <ol class="dept-chemistry-list">
                  <li>Organic farming, dairy, poultry, aquaculture</li>
                  <li>Agri-tourism, greenhouse farming, vertical farming</li>
                  <li>Processing units for spices, cereals, or fruits</li>
                  <li>Agri-consultancy or freelance advisory services</li>
                </ol>

                <h3 class="dept-chemistry-subheading">Jobs Abroad</h3>
                <ol class="dept-chemistry-list">
                  <li>Agricultural research, farm management, and food security projects</li>
                  <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                  <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                </ol>

                <h3 class="dept-chemistry-subheading">Key Skills That Boost Career</h3>
                <ol class="dept-chemistry-list">
                  <li>Practical knowledge of farming tools and technologies</li>
                  <li>Communication and management skills (especially in extension or agribusiness)</li>
                  <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
                  <li>Language skills and report writing</li>
                </ol>

              </div>
            </div> -->

        <div class="dept-chemistry-accordion-section" id="dept-syllabus">
            <h2 class="dept-chemistry-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-chemistry-accordion-wrapper">

                <div class="dept-chemistry-accordion-item active">
                    <div class="dept-chemistry-accordion-header">
                        <div class="dept-chemistry-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-chemistry-chevron"></i>
                    </div>

                    <div class="dept-chemistry-accordion-content">
                        <div class="dept-chemistry-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/department-all/dept-chemistry/syllabus-chemistry/structure-of-syllabus.pdf"
                                class="dept-chemistry-syllabus-link" download>
                                <div class="dept-chemistry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- B.Sc. Chemistry
                                </div>
                                <i class="fa-solid fa-download dept-chemistry-download-icon"></i>
                            </a>
                            <a target="_blank" href="/mobile-assets/syllabus/RSAPS/Chemistry PG Syllabus.pdf"
                                class="dept-chemistry-syllabus-link" download>
                                <div class="dept-chemistry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- B.Sc. Chemistry
                                </div>
                                <i class="fa-solid fa-download dept-chemistry-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-chemistry-accordion-item">
                    <div class="dept-chemistry-accordion-header">
                        <div class="dept-chemistry-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-chemistry-chevron"></i>
                    </div>

                    <div class="dept-chemistry-accordion-content">
                        <div class="dept-chemistry-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/syllabus/RSAPS/Chemistry Syllabus UG_2025_23-06-25.pdf"
                                class="dept-chemistry-syllabus-link" download>
                                <div class="dept-chemistry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- M.Sc. Chemistry
                                </div>
                                <i class="fa-solid fa-download dept-chemistry-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-chemistry-accordion-item">
                    <div class="dept-chemistry-accordion-header">
                        <div class="dept-chemistry-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-chemistry-chevron"></i>
                    </div>

                    <div class="dept-chemistry-accordion-content">
                        <div class="dept-chemistry-syllabus-list">
                            <a href="/doctoral-programme" class="dept-chemistry-syllabus-link" download>
                                <div class="dept-chemistry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-chemistry-events-section" id="dept-events">

            <h2 class="dept-chemistry-section-title">Events</h2>

            <div class="dept-chemistry-events-box">
                <div class="dept-chemistry-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                <a href="#" class="dept-chemistry-events-btn">View All</a>
              </div> -->

        </div>

        <div class="dept-chemistry-table-section" id="dept-committee">

            <div class="dept-chemistry-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-chemistry-lab-section" id="dept-lab">

            <div class="dept-chemistry-lab-container">

                <h2 class="dept-chemistry-section-title">Our <span>Lab</span></h2>
                <div class="dept-chemistry-prospects-content">

                    <p class="dept-chemistry-lab-intro">
                        The university boasts of a well-stocked chemistry lab with various reagents, chemicals and other
                        apparatuses required by students to perform experiments and bring concepts to life. The
                        chemistry
                        lab has all the latest equipment and has proper ventilation. Students can locate the chemistry
                        lab
                        in the block- B in room No. B-Gr-012 on the ground floor.

                    </p>


                    <h3 class="dept-chemistry-subheading">Work carried out in the laboratory includes</h3>
                    <ul class="dept-chemistry-bullet-list">
                        <li>
                            Modern organic and inorganic synthetic techniques.
                        </li>
                        <li>
                            Chromatographic methods used in the separation and purification of reaction products.
                        </li>
                        <li>
                            UV-visible Spectrophotometer, Centrifuge, Ultrasonicator, Rotary Evaporator, Photochemical
                            setup used in various modern chemical synthesis.
                        </li>
                        <li>
                            Kinetic and thermodynamic studies.
                        </li>
                        <li>
                            Some study of reaction mechanics and intermediates.

                        </li>

                    </ul>
                </div>


                <!-- <h2 class="dept-chemistry-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-chemistry-lab-gallery">
                    <img src="mobile-assets/rsaps-new-dept/chemistry/1.jpg" alt="Lab 1"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/2.jpg" alt="Lab 2"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/3.jpg" alt="Lab 3"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/4.jpg" alt="Lab 4"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/5.jpg" alt="Lab 5"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/6.jpg" alt="Lab 6"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/7.jpg" alt="Lab 7"
                        class="dept-chemistry-lab-img">

                    <img src="mobile-assets/rsaps-new-dept/chemistry/8.jpg" alt="Lab 8"
                        class="dept-chemistry-lab-img">

                </div>

                <!-- <button class="dept-chemistry-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. - Chemistry",
                duration: "2 years",
                link: "/programs-MSc-Chemistry"
            },
            {
                title: "B.Sc. - Chemistry | Honours / Honours with Research",
                duration: "4 years as per NEP",
                link: "/programs-b-sc-chemistry"
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
        <div class="dept-chemistry-course-card">

          <div class="dept-chemistry-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-chemistry-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-chemistry-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-chemistry-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-chemistry-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-chemistry-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-chemistry-accordion-content');

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
        <div class="dept-chemistry-event-item">
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
                        "Dr. Pubalee Sarmah, Associate Professor & HOD"
                    ],

                    ["2", "All Faculty Members of the Department (Ex-Officio)",
                        "Dr. Biswajit Sarma, Associate Professor"
                    ],

                    ["", "", "Dr. Anup Malakar, Assistant Professor"],
                    ["", "", "Dr. Debojeet Sahu, Assistant Professor"],
                    ["", "", "Dr. Binoyargha Dam, Assistant Professor"],
                    ["", "", "Ms. Sudhamoyee Kataky, Assistant Professor", ],
                    ["3", "External Expert (Academic)",
                        "Prof. (Dr.) Joyanti Chutia, Emeritus Scientist, IASST, Former Director, IASST"
                    ],
                    ["4", "External Expert (Industry)",
                        "Dr. Pranjal Saikia, Associate Professor, Department of Applied Sciences (Chemical Science Division), GUIST, Gauhati University"
                    ]

                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name Of The Member", "Designation", "Designation In The Committee"],
                rows: [
                    ["1", "Head of the Department", "Dr. Pubalee Sarmah", "Associate Professor &HoD, Chemistry",
                        "Chairperson"
                    ],

                    ["2", "Two Associate Professors – one of them will be the member secretary",
                        "Dr. Biswajit Sarma", "Associate Professor", "Member Secretary"
                    ],

                    ["3", "Two Assistant Professors holding Ph.D. degree", "Dr. Debojeet Sahu",
                        "Assistant Professor", "Member"
                    ],
                    ["", "", "Dr. Binoyargha Dam", "Assistant Professor", "Member"],

                    ["4",
                        "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC",
                        "Prof. Anuradha Devi", "Professor, Mathematics", "External Member"
                    ],
                    ["", "", "Prof. Ankur Ganguly", "Professor, RSET and Dean Academics", "External Member"],
                    ["", "", "Prof. Bipul Nath", "Professor, Pharmacy", "External Member"],

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
        <div class="dept-chemistry-table-responsive">
          <table class="dept-chemistry-table">
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
        <div class="dept-chemistry-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-chemistry-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-chemistry-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-chemistry-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-chemistry-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-chemistry-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-chemistry-table-content");
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
      <div class="dept-chemistry-event-card">

        <div class="dept-chemistry-event-title">
          ${event.title}
        </div>

        <div class="dept-chemistry-marquee">
          <div class="dept-chemistry-marquee-track">
            ${marqueeImages}
          </div>
        </div>

      </div>
    `;

            }).join("");
        }
    </script>
@endsection
