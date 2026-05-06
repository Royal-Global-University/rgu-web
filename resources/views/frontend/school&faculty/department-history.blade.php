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

        .dept-history-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-history-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-history-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-history-heading h1 span {
            color: var(--accent);
        }

        .dept-history-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-history-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-history-img {
            flex: 1;
            position: relative;
        }

        .dept-history-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-history-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-history-content {
            flex: 1;
        }

        .dept-history-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-history-content h3 span {
            color: var(--accent);
        }

        .dept-history-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-history-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-history-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-history-float-item {
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

        .dept-history-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-history-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-history-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-history-float-item:hover i {
            color: #fff;
        }

        .dept-history-float-item:hover .dept-history-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-history-admission-btn {
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

        .dept-history-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-history-admission-btn:hover {
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
            .dept-history-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-history-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-history-img img {
                padding-left: 0%;
            }

            .dept-history-floating {
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

            .dept-history-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-history-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-history-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-history-float-item:active i {
                color: var(--primary);
            }

            .dept-history-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-history-admission-btn {
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
            .dept-history-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-history-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-history-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-history-section-title span {
            color: var(--accent);
        }

        .dept-history-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-history-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-history-course-header {
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
        .dept-history-course-header::after {
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
        .dept-history-view-btn {
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

        .dept-history-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-history-course-body {
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
            .dept-history-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-history-img img {
                padding-left: 0%;
            }

            .dept-history-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-history-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-history-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-history-prospects-content {
                padding: 25px 20px;
            }


            .dept-history-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-history-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-history-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-history-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-history-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-history-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-history-list li {
            margin-bottom: 12px;
        }

        .dept-history-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-history-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-history-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-history-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-history-accordion-header {
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

        .dept-history-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-history-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-history-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-history-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-history-accordion-item.active .dept-history-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-history-accordion-item.active .dept-history-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-history-accordion-item.active .dept-history-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-history-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-history-syllabus-link {
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

        .dept-history-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-history-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-history-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-history-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-history-syllabus-link:hover .dept-history-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-history-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-history-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-history-lab-container {
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

        .dept-history-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-history-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-history-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-history-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-history-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-history-explore-btn {
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

        .dept-history-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-history-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-history-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-history-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-history-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-history-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-history-bullet-list li::before {
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
        .dept-history-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-history-events-box {
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
        .dept-history-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 15s linear infinite;
        }

        .dept-history-events-box:hover .dept-history-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-history-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-history-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-history-events-btn:hover {
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
        .dept-history-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-history-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-history-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-history-table-header {
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
        .dept-history-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-history-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-history-table-acc.active .dept-history-table-content {
            padding: 20px;
        }

        .dept-history-table-acc.active .dept-history-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-history-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-history-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-history-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-history-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-history-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-history-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-history-table td,
        .dept-history-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-history-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-history-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-history-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-history-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-history-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-history-marquee:hover .dept-history-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-history-marquee img {
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
            .dept-history-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-history-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-history-achievement-tabs {
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
        .dept-history-achievement-content {
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
        .dept-history-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-history-recognition-container {
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
        .dept-history-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-history-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-history-recognition-content {
            flex: 2;
        }

        .dept-history-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-history-recognition-btn {
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

        .dept-history-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-history-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-history-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-history-recognition-content p {
                text-align: center;
            }

            .dept-history-recognition-btn {
                justify-content: center;
            }
        }

        /* new css */

        .dept-history-bullett-list {
            column-count: 3;
            column-gap: 30px;
        }

        .dept-history-bullett-list {
            column-count: 3;
            column-gap: 40px;
            list-style-type: disc;
            padding-left: 20px;
        }

        .dept-history-bullett-list li {
            break-inside: avoid;
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            margin-bottom: 10px;
            display: list-item;
            /* important fix */
        }

        @media (max-width: 992px) {
            .dept-history-bullett-list {
                column-count: 2;
            }
        }

        @media (max-width: 576px) {
            .dept-history-bullett-list {
                column-count: 1;
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

            animation: academicExceHorizontal 60s linear infinite;

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

    <style>
        /* =========================================================
       ACADEMIC EXCELLENCE SECTION
       PREFIX: academic-exce-
    ========================================================= */

        .academic-exce-section-two {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* =========================================================
       GRID CONTROL
    ========================================================= */

        .academic-exce-grid-two {

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

        .academic-exce-column-two {

            background: #ffffff;

            border-radius: 18px;

            padding: 22px;

            overflow: hidden;

            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);

            border-top: 4px solid var(--accent);

            transition: var(--transition);
        }

        .academic-exce-column-two:hover {
            transform: translateY(-4px);
        }

        /* =========================================================
       SUBTITLE
    ========================================================= */

        .academic-exce-subtitle-two {

            font-family: 'Times New Roman', Times, serif;

            font-size: clamp(1.5rem, 2.2vw, 2rem);

            color: var(--primary);

            text-align: center;

            margin-top: 0;

            margin-bottom: 24px;
        }

        .academic-exce-subtitle-two span {
            color: var(--accent);
        }

        /* =========================================================
       HORIZONTAL MARQUEE
    ========================================================= */

        .academic-exce-marquee-two {

            width: 100%;

            overflow: hidden;

            position: relative;

            border-radius: 16px;
        }

        /* =========================================================
       TRACK
    ========================================================= */

        .academic-exce-track-two {

            display: flex;

            gap: 18px;

            width: max-content;

            animation: academicExceHorizontal 60s linear infinite;

            will-change: transform;
        }

        /* STOP IF SINGLE IMAGE */

        .academic-exce-marquee-two[data-count="1"] .academic-exce-track-two {

            animation: none;

            width: 100%;

            justify-content: center;
        }

        /* PAUSE ON HOVER */

        .academic-exce-marquee-two:hover .academic-exce-track-two {
            animation-play-state: paused;
        }

        /* =========================================================
       IMAGE
       VERTICAL IMAGE
        ========================================================= */

        .academic-exce-track-two img {

            width: 250px;

            height: 300px;

            object-fit: cover;

            border-radius: 16px;

            flex-shrink: 0;

            display: block;

            box-shadow: 0 10px 24px rgba(44, 74, 122, 0.14);

            transition: var(--transition);
        }

        .academic-exce-track-two img:hover {

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

            .academic-exce-grid-two {

                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {

            .academic-exce-column-two {
                padding: 18px;
            }

            .academic-exce-track-two img {

                width: 220px;

                height: 340px;
            }

            .academic-exce-subtitle-two {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {

            .academic-exce-column-two {
                padding: 14px;
            }

            .academic-exce-track-two {

                gap: 14px;
            }

            .academic-exce-track-two img {

                width: 180px;

                height: 280px;

                border-radius: 12px;
            }

            .academic-exce-subtitle-two {

                font-size: 1.15rem;

                margin-bottom: 18px;
            }
        }
    </style>

    <div class="dept-history-floating">
        <a href="#dept-home" class="dept-history-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-history-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-history-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-history-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-history-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-history-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-history-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-history-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-history-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-history-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-history-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-history-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-history-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-history-float-text">Committee</span>
        </a>

        {{-- <a href="#dept-lab" class="dept-history-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-history-float-text">Lab</span>
        </a> --}}

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-history-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-history-wrapper">

        <div class="dept-history-heading" id="dept-home">
            <h1>Department of <span>History</span></h1>
            <h2>Royal School of Humanities & Social Sciences (RSHSS)</h2>
        </div>

        <div class="dept-history-hero" id="dept-about">

            <div class="dept-history-img">
                <img src="https://www.rgu.ac/mobile-assets/department-all/rshss/history/head-img.png" alt="History">
            </div>

            <div class="dept-history-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of History is one of the premier departments of Royal Global University. It has
                    eminent and scholarly faculty with global exposure. It is emerging as one of the leading centre of
                    historical learning and research in the north-east India. Its objective is to initiate innovative
                    research and world class curriculum design with industry-oriented pedagogy, to ground historical
                    erudition in the shared national culture of compassion, social responsibility and sound ethical
                    outlook and to enrich society by producing nationally and internationally acclaimed historians and
                    historical works with acute transformative potential in the domain of social sciences. In its thrust
                    to update its curriculum according to the mandate of New Education Policy of the GOl, it has
                    included skill enhancement courses like Museology, Archeology, Heritage management, Basic Writing
                    Skills, Value-Added Courses as well as mandatory project work in it is curriculum. It has MoU with
                    leading academic and research institutions which provide internships to our students for quick
                    employability.

                </p>

            </div>

        </div>

        <div class="dept-history-prospects-section" id="dept-prospects">

            <div class="dept-history-prospects-content">

                <p class="dept-history-intro-text">
                    The Department often organizes short trips to historical/archeological sites, traditional heritage
                    sites, traditional industrial and handicraft sites for firsthand experience of students. Within a
                    short span of its existence, it has already produced NET and JRF qualified students, officers in
                    Indian Banking Service as well as faculty in reputed universities. Some of our students have
                    received admission in reputed universities abroad for higher studies. The department has started an
                    Outreach programme with the motto 'Popularizing History, Supplementing Syllabus: Using alternative
                    Pedagogy to start society-academia interface. To facilitate research, and writing skills of our
                    students the Department has established History Society - Vrittaanta which provide a platform to all
                    students and research scholars of the Department for popularizing the discipline, engage in debate
                    and discussion in historical themes amongst students and members of the larger society. It has also
                    the credit of publishing the first Departmental student e-research magazine of the University named
                    Anveshan: A Voyage into the Unexplored Past. The Department and its faculty strive to produce
                    distinguished students who would be leading historical research in the region.

                    <br></br>
                </p>




            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-history-prospects-section" id="dept-vision">
            <h2 class="dept-history-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-history-prospects-content">

                <h3 class="dept-history-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-history-bullet-list">
                    <li>
                        The department has envisioned a long-term goal of emerging as a leader center of
                        historical learning and research in the Northeast by fostering the new generation of global
                        historians and creating nationally and internationally integrated opportunities in the field
                        of historical research and academia.
                    </li>

                </ul>

                <h3 class="dept-history-subheading">Our Mission</h3>
                <ul class="dept-history-bullet-list">
                    <li>
                        To engender innovation research and world class curriculum design wih industry-
                        oriented pedagogy.
                    </li>
                    <li>
                        To ground historical erudition and in the shared national culture of compassion, social
                        responsibility and sound ethical outlook.
                    </li>
                    <li>
                        To enrich society by producing nationally and internationally acclaimed historians and
                        historical works with acute transformative potential in the domain of social sciences.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-history-courses-section" id="dept-courses">
            <h2 class="dept-history-section-title">Courses <span>Offered</span></h2>

            <div class="dept-history-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-history-prospects-section" id="dept-prospects">
          <h2 class="dept-history-section-title">Career <span>Prospects</span></h2>

          <div class="dept-history-prospects-content">
            <p class="dept-history-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-history-subheading">Higher Education Opportunities</h3>
            <ol class="dept-history-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-history-subheading">Government Sector Jobs</h3>
            <ol class="dept-history-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-history-subheading">Private Sector Careers</h3>
            <ol class="dept-history-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-history-subheading">Research & Teaching</h3>
            <ol class="dept-history-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-history-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-history-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-history-subheading">Jobs Abroad</h3>
            <ol class="dept-history-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-history-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-history-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-history-accordion-section" id="dept-syllabus">
            <h2 class="dept-history-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-history-accordion-wrapper">

                <div class="dept-history-accordion-item active">
                    <div class="dept-history-accordion-header">
                        <div class="dept-history-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-history-chevron"></i>
                    </div>

                    <div class="dept-history-accordion-content">
                        <div class="dept-history-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/history/syllabus-pdf/course-structure.pdf"
                                class="dept-history-syllabus-link">
                                <div class="dept-history-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus
                                </div>
                                <i class="fa-solid fa-download dept-history-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/UG_History_Syllabus.pdf"
                                class="dept-history-syllabus-link">
                                <div class="dept-history-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- BA History
                                </div>
                                <i class="fa-solid fa-download dept-history-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-history-accordion-item">
                    <div class="dept-history-accordion-header">
                        <div class="dept-history-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-history-chevron"></i>
                    </div>

                    <div class="dept-history-accordion-content">
                        <div class="dept-history-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/PG_History_Syllabus.pdf"
                                class="dept-history-syllabus-link">
                                <div class="dept-history-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- MA History
                                </div>
                                <i class="fa-solid fa-download dept-history-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-history-accordion-item">
                    <div class="dept-history-accordion-header">
                        <div class="dept-history-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-history-chevron"></i>
                    </div>

                    <div class="dept-history-accordion-content">
                        <div class="dept-history-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-history-syllabus-link" download>
                                <div class="dept-history-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-history-events-section" id="dept-events">

            <h2 class="dept-history-section-title">Events</h2>

            <div class="dept-history-events-box">
                <div class="dept-history-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                    <a href="#" class="dept-history-events-btn">View All</a>
                </div> -->

        </div>

        <div class="academic-exce-section-two" id="dept-academic-exe-two">


            <div class="academic-exce-grid-two" id="academicExceGridTwo">

                <!-- JS RENDER -->

            </div>

        </div>



        <div class="academic-exce-section" id="dept-academic-exe">

            <h2 class="dept-history-section-title">
                Achievements
            </h2>

            <div class="academic-exce-grid" id="academicExceGrid">

                <!-- JS RENDER -->

            </div>

        </div>

        <!-- ================= ACHIEVEMENT SECTION ================= -->
        <div class="dept-history-achievement-section" id="dept-achievement">



            <!-- Tabs -->
            <div class="dept-history-achievement-tabs">

                <button class="dept-achievement-tab active" data-tab="faculty">
                    Faculty Achievement
                </button>

            </div>

            <!-- Content -->
            <div class="dept-history-achievement-content">


                <!-- Faculty -->

                <div class="dept-achievement-pane active" id="faculty">

                    <div class="dept-history-table-responsive">
                        <table class="dept-history-table">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Department / School</th>
                                    <th>Name of Faculty</th>
                                    <th>Name of Recognition / Achievment / Award</th>
                                    <th>Type of Award (research / teaching / others)</th>
                                    <th>Awarded by (organization)</th>
                                    <th>Date of award</th>
                                    <th>Event during which awarded (seminar/ conference / other academic event - details)
                                    </th>



                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>HISTORY, RSHSS</td>
                                    <td>LT. Dr. KM Sudha</td>
                                    <td>Best Firer</td>
                                    <td>Others</td>
                                    <td>Officer Training Academy</td>
                                    <td>18/12/2025</td>
                                    <td>NCC, PRCN</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>HISTORY, RSHSS</td>
                                    <td>LT. Dr. KM Sudha</td>
                                    <td>Appreciation certificate</td>
                                    <td>Others</td>
                                    <td>Group Headquqrter, Guwahati</td>
                                    <td>28/1/2026</td>
                                    <td>NCC</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>HISTORY, RSHSS</td>
                                    <td>LT. Dr. KM Sudha</td>
                                    <td>Appreciation certificate</td>
                                    <td>Others</td>
                                    <td>MAJ GEN Anurag Vij</td>
                                    <td>3/2/2026</td>
                                    <td>RDC, NCC</td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>HISTORY, RSHSS</td>
                                    <td>LT. Dr. KM Sudha</td>
                                    <td>Chancellor Medal</td>
                                    <td>Others</td>
                                    <td>RGU</td>
                                    <td>3/2/2026</td>
                                    <td>Felicitation Ceremony</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>



            </div>

        </div>

        <div class="dept-history-table-section" id="dept-committee">

            <div class="dept-history-table-grid" id="table-accordion-container"></div>

        </div>



    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "MA History",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MA-History"
            },
            {
                title: "BA History | Honours / Honours with Research",
                duration: "4 years as per NEP",
                link: "https://www.rgu.ac/programs-BA-History"
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
        <div class="dept-history-course-card">

          <div class="dept-history-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-history-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-history-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-history-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-history-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-history-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-history-accordion-content');

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
            "24-01-2025 | Inter Departmental Youth Leadership Speech Competition in collaboration with Vrittanta – The History Society",
            "09-05-2025 | Scholars’ Symposium 2025 organised for RSHSS by the Department of History. The chief resource persons included Prof. Shiela Bora, Advisor, Department of History; Prof. Sajal Nag, Distinguished professor in History and Prof. Krishna Barua, Senior Professor, RSL. Research scholars from the Department of History participated and presented their research papers to the resource persons for their expert opinion.",
            "03-08-2025 | The Department of History, in collaboration with award winning organization Hati Bondhu, went on a community outreach to Chapanala, Nagaon. The outreach was meant to study human-animal conflict in the context of man-elephant interactions in village societies. The outreach received wide publicity in local media and has greatly enriched our students’ overall learning goals.",
            "12-08-25 | Members of Vrittanta The History Society in collaboration with the Department of History organised Halflight: Partition Narratives from Northeast and Bengal where students from several departments narrated stories of the partition as experienced and viewed from the North-East India. The event was graced by the presence of Prof. Sajal Nag, Prof. Shiela Bora, Dr. Susmita Hazarika and Prof. Shalini Saxena and invited resource persons.",

            "06-08-2025 - 07-08-2025 | The RGU Museum and the Department of History, in collaboration with India Post and INTACH held a Philately exhibition with the theme The Timeless Charm of Philately. The exhibition included the showcasing of rare stamps from across India as well as an informative session. ",
            "11-09-2025 - 12-09-2025 | The Department of History in collaboration with INTACH HECS organised a two-day funded workshop on Heritage Conservation and Youth Volunteerism. The workshop was led by resource Ms. Purnima Datt, Principal Director INTACH HECS and Prof. Shiela Bora. The workshop was attended by students and research scholars from RGU as well as universities and colleges from Guwahati.",
            "03-12-2025 | On behalf of the Royal School of Humanities and Social Sciences, the Department of History anchored an invited lecture entitled Cartoons as Cultural Knowledge: Gandhi, Visual Politics, and the Making of Modern India delivered by Dr. Ritu Khanduri, Assoc. Prof. of Cultural Anthropology at University of Texas at Arlington. The lecture was attended by students and research scholars from across the school and was also followed by an interactive session.",
            "19-01-2026 | Vrittanta The History Society and the Department of History in collaboration with the Sansad Club and INTACH organised an interschool model making workshop cum exhibition titled Echoes of Civilisation, an Inter-School 3D Model Exhibition cum workshop. The event showcased indigenous building techniques of local communities and was participated by school students from in and around Guwhahati.",

            "20-09-2024 | Invited Lecture: We the people of the states of Bharat | Dr. Sanjeev Chopra (Former Director, Lal Bahadur Shastri National Academy of Administration, Author and Historian) | Invited Lecture.",

            "15-07-2024 | MoU Signing | Dr. Sangeeta Gogoi (Director In-Charge, Directorate of Historical and Antiquarian Studies, Assam) | Event.",

            "27-05-2024 | Invited talk on Decoding India's Temples and the Challenges of Reconstructing Them | Dr. Nachiket Chanchani (Associate Professor, History of Art Department) | Invited Talk.",

            "20-05-2024 | Invited lecture on Craft Revival and its socio-economic impact on Communities | Ms. Vandana Manchanda (Director, Architectural Heritage Division, INTACH) | Invited Lecture.",

            "17-03-2024 | Invited lecture on Numismatic Heritage of Assam and its Emerging Trend in Study | Shri S K Bose (Numismatist) | Invited Lecture.",

            "04-05-2023 | FDP Resource Person | Prof. Apurba Baruah (Professor, NEHU) | FDP.",

            "04-05-2023 | FDP Resource Person | Prof. Monorama Sharma (Professor, NEHU) | FDP.",

            "03-05-2023 | FDP Resource Person | Prof. Chandan Kumar Sharma (Professor, Tezpur University) | FDP.",

            "03-05-2023 | FDP Resource Person | Dr. Manjil Hazarika (Assistant Professor, Cotton University) | FDP."
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
        <div class="dept-history-event-item">
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
                headers: ["S.No.", "Name of the Member", "Designation", "Designation in the Board"],
                rows: [
                    ["1", "Mukesh Kalita", "HoD/Coordinator, Department of History", "Convenor (Ex-Officio)"],
                    ["2", "Prof. (Dr.) Shiela Bora", "Advisor, Department of History", "Member (Ex-Officio)"],
                    ["3", "Prof. (Dr.) Sajal Nag", "Distinguished Professor of History",
                        "Distinguished Professor of History"
                    ],
                    ["4", "Dr. Susmita Hazarika", "Associate Professor", "Member (Ex-Officio)"],
                    ["5", "Dr. Mitali Kalita", "Assistant Professor", "Member (Ex-Officio)"],
                    ["6", "Dr. Susmita Banerjee", "Assistant Professor", "Member (Ex-Officio)"],
                    ["7", "Dr. Tania Begum", "Assistant Professor", "Member (Ex-Officio)"],
                    ["8", "Dr. Mir Kamruzzaman Chowdhary", "Assistant Professor", "Member (Ex-Officio)"],
                    ["9", "Dr. Bishnu Kumari Gurung", "Assistant Professor", "Member (Ex-Officio)"],
                    ["10", "Dr. Premmi Wahengbam", "Assistant Professor", "Member (Ex-Officio)"],
                    ["11", "KM Sudha", "Assistant Professor", "Member (Ex-Officio)"],
                    ["12", "Prof. (Dr.) Barnali Sarma", "Professor, Department of History, Gauhati University",
                        "External Expert (Academic)"
                    ],
                    ["13", "Mr. Pranab Nitu Sarma", "Retd. Senior Manager, Williamson Magor Tea Estate",
                        "External Expert (Industry)"
                    ],



                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Name of the Member", "Designation", "Designation in the Committee"],
                rows: [
                    ["1", "Dean to officiate", "Dean, RSHSS", "Chairperson"],
                    ["2", "Prof. Surajit C Mukhopadhyay", "Dean, RSHSS", "Member"],
                    ["3", "Prof. Sajal Nag", "Distinguished Professor of History", "Member"],
                    ["4", "Prof. Shiela Bora", "Advisor, Dept. of History", "Member"],
                    ["5", "Dr. Susmita Hazarika", "Associate Professor", "Member Secretary"],
                    ["6", "Dr. Susmita Banerjee", "Assistant Professor", "Member"],
                    ["7", "Dr. Tania Begum", "Assistant Professor", "Member"],
                    ["8", "Prof. Chandan Kumar Sarma", "Professor of History, Dibrugarh University",
                        "External Member"
                    ],
                    ["9", "Prof. Jangkhomang Guite", "Professor of History, Nagaland University",
                    "External Member"],




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
        <div class="dept-history-table-responsive">
          <table class="dept-history-table">
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
        <div class="dept-history-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-history-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-history-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-history-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-history-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-history-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-history-table-content");
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
      <div class="dept-history-event-card">

        <div class="dept-history-event-title">
          ${event.title}
        </div>

        <div class="dept-history-marquee">
          <div class="dept-history-marquee-track">
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

    <script>
        /* =====================================================
         ACADEMIC EXCELLENCE DATA
      ===================================================== */

        const academicExceData = [

            {
                subtitle: "UGC NET",

                images: [
                    "/mobile-assets/dept-history/his-1.jpeg",
                    "/mobile-assets/dept-history/his-2.jpeg",
                    "/mobile-assets/dept-history/his-3.jpeg",
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

                const finalImages = imageCount > 1 ?
                    [...item.images, ...item.images] :
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

    <script>
        /* =====================================================
         ACADEMIC EXCELLENCE DATA
      ===================================================== */

        const academicExceDataTwo = [

            {
                subtitle: "",

                images: [
                    "/mobile-assets/dept-history/1.jpeg",
                    "/mobile-assets/dept-history/2.jpeg",
                    "/mobile-assets/dept-history/4.jpeg",
                    "/mobile-assets/dept-history/5.jpeg",
                    "/mobile-assets/dept-history/6.jpeg",
                    "/mobile-assets/dept-history/7.jpeg",
                    "/mobile-assets/dept-history/8.jpeg",
                    "/mobile-assets/dept-history/9.jpeg"
                ]
            }

        ];

        /* =====================================================
           RENDER
        ===================================================== */

        const academicExceGridTwo = document.getElementById("academicExceGridTwo");

        if (academicExceGridTwo) {

            academicExceGridTwo.innerHTML = academicExceDataTwo.map((item) => {

                const imageCount = item.images.length;

                /* =============================================
                   DUPLICATE ONLY IF MORE THAN 1 IMAGE
                ============================================= */

                const finalImages = imageCount > 1 ?
                    [...item.images, ...item.images] :
                    item.images;

                return `

                <div class="academic-exce-column-two">

                    <h3 class="academic-exce-subtitle-two">
                        ${item.subtitle}
                    </h3>

                    <div class="academic-exce-marquee-two" data-count="${imageCount}">

                        <div class="academic-exce-track-two">

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
