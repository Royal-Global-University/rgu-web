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

        .dept-business-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-business-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-business-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-business-heading h1 span {
            color: var(--accent);
        }

        .dept-business-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-business-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-business-img {
            flex: 1;
            position: relative;
        }

        .dept-business-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-business-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-business-content {
            flex: 1;
        }

        .dept-business-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-business-content h3 span {
            color: var(--accent);
        }

        .dept-business-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-business-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-business-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-business-float-item {
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

        .dept-business-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-business-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-business-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-business-float-item:hover i {
            color: #fff;
        }

        .dept-business-float-item:hover .dept-business-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-business-admission-btn {
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

        .dept-business-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-business-admission-btn:hover {
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
            .dept-business-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-business-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-business-img img {
                padding-left: 0%;
            }

            .dept-business-floating {
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

            .dept-business-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-business-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-business-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-business-float-item:active i {
                color: var(--primary);
            }

            .dept-business-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-business-admission-btn {
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
            .dept-business-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-business-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-business-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-business-section-title span {
            color: var(--accent);
        }

        .dept-business-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-business-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-business-course-header {
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
        .dept-business-course-header::after {
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
        .dept-business-view-btn {
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

        .dept-business-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-business-course-body {
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
            .dept-business-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-business-img img {
                padding-left: 0%;
            }

            .dept-business-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-business-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-business-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-business-prospects-content {
                padding: 25px 20px;
            }


            .dept-business-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-business-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-business-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-business-intro-lab {
            text-align: justify;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-business-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-business-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-business-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-business-list li {
            margin-bottom: 12px;
        }

        .dept-business-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-business-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-business-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-business-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-business-accordion-header {
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

        .dept-business-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-business-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-business-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-business-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-business-accordion-item.active .dept-business-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-business-accordion-item.active .dept-business-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-business-accordion-item.active .dept-business-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-business-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-business-syllabus-link {
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

        .dept-business-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-business-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-business-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-business-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-business-syllabus-link:hover .dept-business-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-business-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-business-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-business-lab-container {
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

        .dept-business-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-business-lab-intro {
            font-size: 2.0rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-business-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-business-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-business-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-business-explore-btn {
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

        .dept-business-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-business-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-business-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-business-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-business-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-business-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-business-bullet-list li::before {
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
        .dept-business-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-business-events-box {
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
        .dept-business-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 15s linear infinite;
        }

        .dept-business-events-box:hover .dept-business-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-business-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-business-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-business-events-btn:hover {
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
        .dept-business-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-business-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-business-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-business-table-header {
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
        .dept-business-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-business-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-business-table-acc.active .dept-business-table-content {
            padding: 20px;
        }

        .dept-business-table-acc.active .dept-business-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-business-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-business-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-business-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-business-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-business-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-business-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-business-table td,
        .dept-business-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-business-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-business-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-business-event-title {
            font-size: 1.3rem;
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 15px;
            color: var(--primary);
            text-align: justify;
        }

        /* MARQUEE BOX */
        .dept-business-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-business-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-business-marquee:hover .dept-business-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-business-marquee img {
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
            .dept-business-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-business-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-business-achievement-tabs {
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
        .dept-business-achievement-content {
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
        .dept-business-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-business-recognition-container {
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
        .dept-business-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-business-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-business-recognition-content {
            flex: 2;
        }

        .dept-business-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-business-recognition-btn {
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

        .dept-business-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-business-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-business-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-business-recognition-content p {
                text-align: center;
            }

            .dept-business-recognition-btn {
                justify-content: center;
            }
        }
    </style>

    <style>
        /* ================= EVENT ACCORDION (NEW) ================= */

        .dept-business-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-business-event-acc-item {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            overflow: hidden;
        }

        /* HEADER */
        .dept-business-event-acc-header {
            padding: 18px 22px;
            background: var(--primary);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dept-business-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-business-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fdfdfd;
            padding: 0 22px;
        }

        .dept-business-event-acc-item.active .dept-business-event-acc-content {
            padding: 20px 22px;
        }

        .dept-business-event-acc-item.active .dept-business-event-acc-header i {
            transform: rotate(180deg);
        }

        /* TEXT */
        .dept-business-event-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 20px;
            text-align: justify;
        }

        /* IMAGE GRID */
        .dept-business-event-img-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .dept-business-event-img-grid img {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-business-event-img-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .dept-business-event-img-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="dept-business-floating">
        <a href="#dept-home" class="dept-business-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-business-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-business-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-business-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-business-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-business-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-business-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-business-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-business-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-business-float-text">Syllabus</span>
        </a>

        <a href="#dept-event-gallery" class="dept-business-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-business-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-business-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-business-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-business-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-business-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-business-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-business-wrapper">

        <div class="dept-business-heading" id="dept-home">
            <h1>Department of <span>Business</span></h1>
            <h2>Royal School of Business (RSB)</h2>
        </div>

        <div class="dept-business-hero" id="dept-about">

            <div class="dept-business-img">
                <img src="mobile-assets/new-dept-business/headimg.png" alt="Architecture">
            </div>

            <div class="dept-business-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Royal School of Business (RSB) since its inception in 2009 has been a trend setter in management
                    education
                    in the North-East and stands tall for its complete bouquet of programmes at the Graduate, Post-graduate
                    and
                    Doctoral levels. The school follows an interdisciplinary approach and draw resources from multiple
                    disciplines. To meet the emerging demand for new generation courses, Royal School of Business will be
                    offering
                    specialization in Business Analytics and Entrepreneurship and Small Business Management. Royal School of
                    Business has a distinguished tradition of preparing business leaders, professionals, and entrepreneurs
                    for the
                    dynamic business world.
                </p>

            </div>

        </div>

        <div class="dept-business-prospects-section" id="dept-prospects">

            <div class="dept-business-prospects-content">

                <p class="dept-business-intro-text" style="text-align: justify;">
                    Putting knowledge to a real-time business context – an action-based experiential learning style – is
                    central
                    to the school’s teaching-learning system. Royal School of Business is renowned for its excellent faculty
                    who
                    have studied and taught at some of the best universities and institutes in India and abroad. They bring
                    their
                    vast industry, academic and research experience into the classroom and create a unique and stimulating
                    learning environment for the learners. The management programme of RSB was ranked 37th in India
                    (Business
                    India survey 2017) and the school was adjudged as the 2nd most promising business school (GHRDC B School
                    Survey 2019) and one among the best in overall ranking (Business Today, 2019). Royal School of Business
                    through its placement and training cell provides the necessary resources, knowledge and support to
                    create
                    effective employment and entrepreneurship opportunities for students. A few of the top recruiters of our
                    students are ---Amul, IDBI, Infosys, Asian Paints, Berger Paints, Flipkart, Wipro, Cognizant, TCS,
                    Capgemini,
                    Aditya Birla, Marico etc. The students are recruited by Indian Oil Corporation Limited, SBI, IIBM,
                    Topcem,
                    Adani Group, Hilton Group of Hotels, Star cement, Airport Authority of India etc for internship.
                </p>

            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-business-prospects-section" id="dept-vision">
            <h2 class="dept-business-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-business-prospects-content">

                <h3 class="dept-business-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-business-bullet-list">
                    <li>
                        Our vision is to empower the next generation of leaders with knowledge, skills, and values that
                        transcend
                        borders, embracing sustainability, ethics, and cutting-edge research, while continuously adapting to
                        the
                        evolving landscape of business and management.
                    </li>

                </ul>

                <h3 class="dept-business-subheading">Our Mission</h3>
                <ul class="dept-business-bullet-list">
                    <li>
                        To create a world class learning space that nurtures knowledge, spirit of enquiry, creative
                        thinking.
                    </li>
                    <li>
                        To inculcate spirit of innovation and develop an entrepreneurial mindset amongst the students and
                        faculties
                        alike.
                    </li>
                    <li>
                        To develop ethical, value-based, and socially responsible citizens with a global outlook.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-business-courses-section" id="dept-courses">
            <h2 class="dept-business-section-title">Courses <span>Offered</span></h2>

            <div class="dept-business-course-list" id="course-list-container">
            </div>
        </div>

        <div class="dept-business-accordion-section" id="dept-syllabus">
            <h2 class="dept-business-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-business-accordion-wrapper">

                <div class="dept-business-accordion-item active">
                    <div class="dept-business-accordion-header">
                        <div class="dept-business-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-business-chevron"></i>
                    </div>

                    <div class="dept-business-accordion-content">
                        <div class="dept-business-syllabus-list">

                            <a target="_blank"
                                href="mobile-assets/new-dept-business/syllabus/MBA_Syllabus2025-26_(6.12.2024)-COMD-Final-(1).pdf"
                                class="dept-business-syllabus-link">
                                <div class="dept-business-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- MBA
                                </div>
                                <i class="fa-solid fa-download dept-business-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-business-accordion-item">
                    <div class="dept-business-accordion-header">
                        <div class="dept-business-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-business-chevron"></i>
                    </div>

                    <div class="dept-business-accordion-content">
                        <div class="dept-business-syllabus-list">

                            <a target="_blank"
                                href="mobile-assets/new-dept-business/syllabus/BBA-4-YEAR-SYLLABUS-STRUCTURE-FOR-25.2.25-29-07-07-20251.08.25.pdf"
                                class="dept-business-syllabus-link">
                                <div class="dept-business-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- BBA
                                </div>
                                <i class="fa-solid fa-download dept-business-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="dept-business-accordion-item">
                    <div class="dept-business-accordion-header">
                        <div class="dept-business-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-business-chevron"></i>
                    </div>

                    <div class="dept-business-accordion-content">
                        <div class="dept-business-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-business-syllabus-link" download>
                                <div class="dept-business-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-business-event-gallery-section" id="dept-event-gallery">

            <h2 class="dept-business-section-title">Event <span>Highlights</span></h2>

            <div class="dept-business-event-accordion" id="event-gallery-container"></div>

        </div>

        <div class="dept-business-table-section" id="dept-committee">

            <h2 class="dept-business-section-title">Commi<span>ttee</span></h2>

            <div class="dept-business-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-business-lab-section" id="dept-lab">

          <div class="dept-business-lab-container">

            <h2 class="dept-business-section-title">Our <span>Lab</span></h2>

            <p class="dept-business-intro-lab" style="padding-bottom: 30px;">
              The University has established an action learning laboratory for Anesthesia & Operation Theatre (AOT)
              techniques. This facility is equipped with a modern operating theatre that includes an anesthesia machine,
              surgical table, OT lighting, patient monitoring systems, electrosurgical cautery, suction apparatus, etc.
              along with advanced mannequins. These resources provide students with immersive, hands-on training and
              practice-oriented learning, enabling them to confidently operate essential tools used in surgical
              environments. <br> <br>
              The primary objective of the laboratory is to help students develop a comprehensive and in-depth understanding
              of surgical procedures. By mastering both the theoretical and practical aspects of anesthesia and OT
              technology, students will be prepared to enhance the quality of patient care during surgical interventions.
            </p>



            <div class="dept-business-lab-gallery">
              <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/1.jpg" alt="Lab 1" class="dept-business-lab-img">
              <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/2.jpg" alt="Lab 2" class="dept-business-lab-img">
              <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/3.jpg" alt="Lab 3" class="dept-business-lab-img">
              <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/4.jpg" alt="Lab 4" class="dept-business-lab-img">
              <img src="mobile-assets/rsmas-new-dept/anasthesia-ott/5.jpg" alt="Lab 5" class="dept-business-lab-img">

            </div>

          </div>

        </div> -->

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "MBA - Finance",
                duration: "2 Years",
                link: "https://www.rgu.ac/programs-MBA-Finance"
            },

            {
                title: "MBA Marketing",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MBA-Finance"
            },

            {
                title: "MBA – HRM",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MBA-Finance"
            },

            {
                title: "MBA – Operations Management",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MBA-Finance"
            },

            {
                title: "MBA – Entrepreneurship & Small Business Management",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MBA-Finance"
            },

            {
                title: "MBA – Business Analytics",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MBA-Finance"
            },

            {
                title: "Executive MBA",
                duration: "2 years",
                link: "https://www.rgu.ac/program-executive-mba"
            },

            {
                title: "BBA",
                duration: "4 years as per NEP",
                link: "https://www.rgu.ac/programs-BBA"
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
        <div class="dept-business-course-card">

          <div class="dept-business-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-business-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-business-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-business-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-business-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-business-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-business-accordion-content');

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
        <div class="dept-business-event-item">
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
                ["1", "Chairperson of BOS", "Dr. George A.P, Dean RSB"],

                ["2", "Member Secretary", "Dr. Diganta Munshi, Registrar Administration"],

                ["3", "Invited Member", "Dr. D.N. Singh, Registrar Academics"],
                ["4", "Invited Member", "Prof. Nandana Dutta, Dean Academics"],
                ["5", "Invited Member", "Prof. P.K. Jain, Professor, RSB"],

                ["6", "External Expert (Academic)",
                    "Prof. (Dr.) Chandan Goswami, Registrar i/c Tezpur University and Professor, Tezpur University"
                ],

                ["7", "External Expert (Industry)", "Dr. Bhupati Kumar Das, Former MD, NRL, Assam"],

                ["8", "Member", "Dr. Arpee Saikia, Associate Professor & HoD, RSB"],
                ["9", "Member", "Dr. Rishi Chakravarty, Associate Professor, RSB"],
                ["10", "Member", "Dr. Darshana Bhagowati, Assistant Professor, RSB"],
                ["11", "Member", "Dr. Sampada Tiwari, Assistant Professor, RSB"]
            ]
        }];

        const container = document.getElementById("table-accordion-container");

        if (container) {

            const createTable = (headers, rows) => {
                if (!rows || rows.length === 0) {
                    return `<p style="color:#556b8d;">No data available</p>`;
                }

                return `
        <div class="dept-business-table-responsive">
          <table class="dept-business-table">
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
        <div class="dept-business-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-business-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-business-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-business-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-business-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-business-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-business-table-content");
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
        // ================= EVENT DATA =================
        const eventGalleryData = [{
                title: "Special Lecture on Reframing Problems for Innovation was held on 28/01/2026 at D101, D-Block, RGU, organized by the Royal School of Business and delivered by Dr. Radhika (MIA) Bhuyan; the Royal School of Business organized this special lecture on “Reframing Problems for Innovation” for MBA and M.Com 2nd Semester students, attended by 20 participants in the D Block Seminar Hall, where Dr. Bhuyan explained Design Thinking concepts, emphasizing empathy, problem definition, ideation, sustainable solutions, and AI integration, and a group activity made the session interactive, enhancing collaborative learning and students’ problem-solving skills for academic and professional growth.",
                images: [
                    "mobile-assets/new-dept-business/events/event1/1.jpg",
                    "mobile-assets/new-dept-business/events/event1/2.jpg",
                    "mobile-assets/new-dept-business/events/event1/3.jpg",
                    "mobile-assets/new-dept-business/events/event1/4.jpg"
                ]
            },

            {
                title: "Interactive Session on Interview Skills & Mock Group Discussion was held on 02/02/2026 at Seminar Hall, A-Block, RGU, organized by the Royal School of Business; the Royal School of Business successfully conducted an Interactive Session on Interview Skills & Mock Group Discussion on 02 February 2026 for final year students, aimed at enhancing employability and industry readiness, attended by 82 final year students and led by Ms. Nusrat Saikia, Senior Manager – HR, Intygritty Money Tree Pvt. Ltd., where students gained practical insights into interview techniques, group discussion dynamics, and industry evaluation parameters, and the interactive format enabled participants to assess their competencies, strengthen communication and leadership skills, and prepare effectively for campus placements.",
                images: [
                    "mobile-assets/new-dept-business/events/event2/1.jpg",
                    "mobile-assets/new-dept-business/events/event2/2.jpg",
                    "mobile-assets/new-dept-business/events/event2/3.jpg",
                    "mobile-assets/new-dept-business/events/event2/4.jpg"
                ]
            },

            {
                title: "Interactive Session on Emerging Technologies was held on 02/02/2026 at A111, A-Block, RGU, organized by the Royal School of Business; the Royal School of Business conducted an insightful session on “Emerging Technologies” on 02 February 2026 for MBA 2nd semester students, with the participation of 55 students, aimed to familiarize students with key technological trends transforming business and the job market, where discussions focused on Artificial Intelligence (AI), Blockchain, Web 2.0 vs Web 3.0, automation, and the evolution of fintech, and practical industry examples highlighted the growing adoption of AI in personalization, operational efficiency, and security systems, while students were encouraged to upskill to remain competitive in an evolving business environment.",
                images: [
                    "mobile-assets/new-dept-business/events/event3/1.jpg",
                    "mobile-assets/new-dept-business/events/event3/2.jpg",
                    "mobile-assets/new-dept-business/events/event3/3.jpg"
                ]
            },

            {
                title: "Guest Lecture on Industry Interface Orientation Program (IIOP) was held on 03/02/2026 at Seminar Hall, A-Block, RGU, organized by the Royal School of Business; Royal School of Business, The Assam Royal Global University, successfully conducted an Industry Interface Orientation Program (IIOP) on 03 February 2026 for UG and PG students, with the participation of 90 students, where the session was delivered by Ms. Darshna Choudhary, State Talent Acquisition Lead, Reliance Jio Infocomm Ltd., and she emphasized Know Your Competencies (KYC), value-driven resumes, and the importance of industry-relevant skills, while the session highlighted management competencies, internships, leadership roles, and emerging trends such as Industry 4.0 & 5.0, AI, IoT, and cybersecurity, inspiring students toward continuous personal and professional growth.",
                images: [
                    "mobile-assets/new-dept-business/events/event4/1.jpg",
                    "mobile-assets/new-dept-business/events/event4/2.jpg",
                    "mobile-assets/new-dept-business/events/event4/3.jpg",
                    "mobile-assets/new-dept-business/events/event4/4.jpg"
                ]
            },

            {
                title: "Peer Learning on Mock Trading Session was held on 05/02/2026 at A111, A-Block, RGU, organized by the Royal School of Business; the Royal School of Business successfully conducted a Mock Trading Session for final-year students on 05 February 2026, aimed to provide practical exposure to stock market operations and investment strategies, where students were introduced to key aspects of the Indian stock market, including NSE and BSE, the importance of Demat accounts, market trends, indices, and candlestick chart analysis, and the session also highlighted the impact of the Union Budget and long-term investment opportunities, while conducted as a peer-learning initiative by Mr. Vivek Mishra (MBA 2nd Semester), the session was interactive and highly insightful, enhancing students’ financial literacy and market readiness.",
                images: [
                    "mobile-assets/new-dept-business/events/event5/1.jpg",
                    "mobile-assets/new-dept-business/events/event5/2.jpg",
                    "mobile-assets/new-dept-business/events/event5/3.jpg"
                ]
            },

            {
                title: "Student Fitness Activity was held on 06/02/2026 at Basket Ball Ground, RGU, organized by the Royal School of Business; Royal School of Business successfully organized a Student Fitness Activity for BBA 2nd Semester students on 06 February 2026 as part of the 2025–2026 academic session, held from 2:45 PM to 3:35 PM, where the session encouraged students to prioritize physical fitness, active lifestyles, and overall well-being, reinforcing the importance of a healthy body and mind in academic life.",
                images: [
                    "mobile-assets/new-dept-business/events/event6/1.jpg",
                    "mobile-assets/new-dept-business/events/event6/2.jpg",
                    "mobile-assets/new-dept-business/events/event6/3.jpg",
                    "mobile-assets/new-dept-business/events/event6/4.jpg"
                ]
            },

            {
                title: "Insightful Communication Skills Session was held on 06/02/2026 at A111, RGU, organized by the Royal School of Business; Royal School of Business organized an insightful Communication Skills Session for MBA 2nd Semester students on 6th February at Room A111, A Block, where the session was led by Dr. Satyakee D’com Bhuyan and focused on enhancing students’ communication effectiveness, confidence, and professional interaction skills, and the interactive session aimed to equip students with essential communication competencies crucial for academic success and future professional excellence.",
                images: [
                    "mobile-assets/new-dept-business/events/event7/1.jpg",
                    "mobile-assets/new-dept-business/events/event7/2.jpg",
                    "mobile-assets/new-dept-business/events/event7/3.jpg",
                    "mobile-assets/new-dept-business/events/event7/4.jpg"
                ]
            },

            {
                title: "Mock Group Discussion Session was held on 06/02/2026 at A110, RGU, organized by the Royal School of Business; the Student Body of Royal School of Business conducted a Mock Group Discussion Session on 06 February 2026, focusing on Sales & Marketing topics, held from 2:45 PM to 3:50 PM and monitored by Mr. Dipak Jain (Faculty, RSB), where the session simulated real GD environments to enhance students’ communication skills, critical thinking, and domain knowledge, and with structured opportunities for every participant to speak, the session helped build confidence, clarity of thought, and collaborative discussion skills, preparing students for future academic and professional group discussions.",
                images: [
                    "mobile-assets/new-dept-business/events/event8/1.jpg",
                    "mobile-assets/new-dept-business/events/event8/2.jpg",
                    "mobile-assets/new-dept-business/events/event8/3.jpg",
                    "mobile-assets/new-dept-business/events/event8/4.jpg"
                ]
            },

            {
                title: "Peer Learning Session On Public Speaking was held on 09/02/2026 at A205, RGU, organized by the Royal School of Business; in line with the department’s commitment to promoting peer-to-peer learning, the session was conducted by Mr. Anjan Baruah, MBA 4th Semester student, who guided participants on overcoming stage fear and developing the confidence required to speak effectively before an audience, and his interactive approach and relatable insights created an engaging and motivating learning environment, while the session focused on addressing common anxieties related to public speaking, emphasizing the importance of strong communication skills for academic excellence and professional success, and students actively participated and gained practical insights into improving their articulation, clarity, and presentation skills.",
                images: [
                    "mobile-assets/new-dept-business/events/event9/1.jpg",
                    "mobile-assets/new-dept-business/events/event9/2.jpg",
                    "mobile-assets/new-dept-business/events/event9/3.jpg",
                    "mobile-assets/new-dept-business/events/event9/4.jpg"
                ]
            },

            {
                title: "Mock Group Discussion Session was held on 11/02/2026 at A110, RGU, organized by the Royal School of Business; the Royal School of Business (RSB) organized a Mock Group Discussion Session for MBA 2nd Semester students on 11 February 2026 from 3:00 PM to 4 PM, where the session was conducted by Thejao Kevin Sekhose with the objective of enhancing students’ communication skills, critical thinking, confidence, and formal presentation style.",
                images: [
                    "mobile-assets/new-dept-business/events/event10/1.jpg",
                    "mobile-assets/new-dept-business/events/event10/2.jpg",
                    "mobile-assets/new-dept-business/events/event10/3.jpg",
                    "mobile-assets/new-dept-business/events/event10/4.jpg"
                ]
            },

            {
                title: "Engaging Session On Presentation Skills was held on 12/02/2026 at A205, RGU, organized by the Royal School of Business; on 12th February 2026, an engaging session on Presentation Skills was conducted for the BBA 2nd Semester students at A205, RSB, where the session was delivered by Dr. Roshni Saikia, Assistant Professor, RSB, with coordination support from Mr. Dipak Jain, and a total of 39 students actively participated in the session, while the interactive discussion focused on enhancing communication techniques, confidence building, body language, and effective delivery strategies—equipping students with essential skills for academic and professional success.",
                images: [
                    "mobile-assets/new-dept-business/events/event11/1.jpg",
                    "mobile-assets/new-dept-business/events/event11/2.jpg",
                    "mobile-assets/new-dept-business/events/event11/3.jpg",
                ]
            },

            {
                title: "An Engaging Session Titled AI For Future Leaders: Finance, Strategy and Decision Intelligence was held on 13/02/2026 at A111, RGU, organized by the Royal School of Business; the Royal School of Business, Assam Royal Global University, successfully organized this engaging session on 13th February 2026 at the campus premises, where the session was delivered by CA Shashank Saboo (Proprietor, Shashank Saboo & Co.) and witnessed enthusiastic participation from 65 students of MBA (2nd & 4th Semester) and BBA (6th Semester), and the interactive discussion focused on the transformative role of Artificial Intelligence in finance, strategy, and decision-making, with students introduced to powerful AI platforms such as ChatGPT, Claude, Gamma, Microsoft Copilot, Perplexity AI, NotebookLM, Custom GPTs, and DeepSeek, along with practical demonstrations on how these tools can enhance productivity, research, financial analysis, and strategic thinking.",
                images: [
                    "mobile-assets/new-dept-business/events/event12/1.jpg",
                    "mobile-assets/new-dept-business/events/event12/2.jpg",
                    "mobile-assets/new-dept-business/events/event12/3.jpg",
                    "mobile-assets/new-dept-business/events/event12/4.jpg"
                ]
            },


            {
                title: "Internship Guidance Session was held on 12/02/2026 at A204, RGU, organized by the Royal School of Business; an informative Internship Guidance Session was organized for BBA 4th Semester students at Royal School of Business on 12 February 2026, where the session was conducted by Mr. Dipak Jain, Placement Coordinator of the institution, and Dr. Roshni Saikia was also present during the session, while the session provided clear insights into internship requirements, duration, selection criteria, and institutional guidelines, and students were guided to choose organizations aligned with their specializations—Marketing, Finance, and Human Resource Management—and were instructed to complete a 4-week offline internship to ensure meaningful industry exposure and practical learning.",
                images: [
                    "mobile-assets/new-dept-business/events/event13/1.jpg",
                    "mobile-assets/new-dept-business/events/event13/2.jpg",
                ]
            },


            {
                title: "Outreach And Donation Drive was held on 27/02/2026, organized by the Royal School of Business; the Royal School of Business organized an Outreach and Donation Drive with the aim of giving back to society and supporting those in need, where the initiative reflected the spirit of compassion, social responsibility, and community engagement, and it also provided students with an opportunity to understand ground realities and contribute meaningfully, while the drive was a successful step towards creating a positive social impact and spreading kindness.",
                images: [
                    "mobile-assets/new-dept-business/events/event14/1.jpg",
                    "mobile-assets/new-dept-business/events/event14/2.jpg",
                    "mobile-assets/new-dept-business/events/event14/3.jpg",
                    "mobile-assets/new-dept-business/events/event14/4.jpg"
                ]
            },


            {
                title: "RSB Students’ Orientation Session on Entrepreneurship Development By Dr. Sriparna Baruah was held on 11/03/2026 at A111, RGU, organized by the Royal School of Business; the Royal School of Business successfully organized an insightful Orientation Session on Entrepreneurship Development for its students, where the session was conducted by Dr. Sriparna Baruah, who shared her valuable expertise on building entrepreneurial mindset and innovation, and students gained deep insights into startup culture, leadership skills, and real-world business challenges, while the interactive session encouraged participants to think creatively and explore opportunities beyond conventional career paths, and it served as a motivating platform for aspiring entrepreneurs to shape their ideas into impactful ventures.",
                images: [
                    "mobile-assets/new-dept-business/events/event15/1.jpg",
                    "mobile-assets/new-dept-business/events/event15/2.jpg",
                    "mobile-assets/new-dept-business/events/event15/3.jpg",
                    "mobile-assets/new-dept-business/events/event15/4.jpg"
                ]
            },

            {
                title: "Entrepreneurship And Emerging Opportunities In The Horticulture Industry In The North-East was held on 16/03/2026 at A111, RGU, organized by the Royal School of Business; the Royal School of Business organized an insightful session on “Entrepreneurship and Emerging Opportunities in the Horticulture Industry in the North-East,” where the session highlighted the immense potential of the region in horticulture and agribusiness development, and students were introduced to innovative business ideas, sustainable practices, and market opportunities within the sector, while the discussion emphasized the role of entrepreneurship in transforming local resources into profitable ventures, and it was an enriching experience that encouraged students to explore agriculture as a dynamic and growth-oriented industry.",
                images: [
                    "mobile-assets/new-dept-business/events/event16/1.jpg",
                    "mobile-assets/new-dept-business/events/event16/2.jpg",
                    "mobile-assets/new-dept-business/events/event16/3.jpg",
                    "mobile-assets/new-dept-business/events/event16/4.jpg"
                ]
            },

            {
                title: "Industry Visit to Maple Flexible LLP, Guwahati was held on 17/03/2026 at Maple Flexible LLP, organized by the Royal School of Business; the MBA 2nd Semester students of the Royal School of Business undertook an industry visit to Maple Flexible LLP, Guwahati, a leading packaging and labeling manufacturing company, where the visit provided students with practical exposure to modern manufacturing processes and packaging technologies, and students gained insights into production techniques, quality control, and the importance of packaging in branding and marketing, while the interaction with industry professionals helped bridge the gap between theoretical knowledge and real-world applications.",
                images: [
                    "mobile-assets/new-dept-business/events/event17/1.jpg",
                    "mobile-assets/new-dept-business/events/event17/2.jpg",
                    "mobile-assets/new-dept-business/events/event17/3.jpg",
                    "mobile-assets/new-dept-business/events/event17/4.jpg"
                ]
            },

            {
                title: "Interactive Session by Sri S.K Barua, Former MD of NRL was held on 26/03/2026 at Seminar Hall, D Block, RGU, organized by the Royal School of Business; the Royal School of Business organized an interactive session by Sri S.K. Barua, Former Managing Director of Numaligarh Refinery Limited (NRL), where the session provided students with valuable insights into leadership, strategic decision-making, and industry dynamics, and Sri Barua shared his vast experience from the corporate world, highlighting real-life challenges and success strategies, while students actively engaged in discussions, gaining clarity on career growth and professional excellence.",
                images: [
                    "mobile-assets/new-dept-business/events/event18/1.jpg",
                    "mobile-assets/new-dept-business/events/event18/2.jpg",
                    "mobile-assets/new-dept-business/events/event18/3.jpg",
                    "mobile-assets/new-dept-business/events/event18/4.jpg"
                ]
            },

            {
                title: "Invited talk on Careers in CSR & ESG: From Classroom learning to corporate impact was held on 24/04/2026 at A-110, 1st floor, organized by the Royal School of Business; an invited talk on “Careers in CSR & ESG” at The Assam Royal Global University highlighted the transition from academic learning to corporate practice, where the session was delivered by CSR expert Karishma Bhuyan and explained CSR as a strategic responsibility under the Companies Act, 2013, emphasizing its role beyond charity, and key areas covered included CSR frameworks, implementation approaches, stakeholder involvement, and rising expenditure trends in India, while the speaker discussed career opportunities such as CSR Manager and ESG Analyst along with essential skills like strategic thinking and communication, and real-world case studies and interactive activities enriched understanding, encouraging students to pursue practical exposure through internships and engagement in CSR initiatives.",
                images: [
                    "mobile-assets/new-dept-business/events/event19/1.jpg",
                    "mobile-assets/new-dept-business/events/event19/2.jpg",
                    "mobile-assets/new-dept-business/events/event19/3.jpg",
                    "mobile-assets/new-dept-business/events/event19/4.jpg",
                    "mobile-assets/new-dept-business/events/event19/5.jpg"
                ]
            }

        ];


        // ================= RENDER ACCORDION =================
        const galleryContainer = document.getElementById("event-gallery-container");

        if (galleryContainer) {

            if (!eventGalleryData || eventGalleryData.length === 0) {
                galleryContainer.innerHTML = `
      <p style="text-align:center; color:#556b8d;">
        No events available at the moment.
      </p>
    `;
            } else {

                galleryContainer.innerHTML = eventGalleryData.map((event, index) => {

                    // Short title for header
                    const shortTitle = event.title.length > 90 ?
                        event.title.substring(0, 90) + "..." :
                        event.title;

                    return `
        <div class="dept-business-event-acc-item">

          <!-- HEADER -->
          <div class="dept-business-event-acc-header">
            <span>${shortTitle}</span>
            <i class="fa fa-chevron-down"></i>
          </div>

          <!-- CONTENT -->
          <div class="dept-business-event-acc-content">

            <div class="dept-business-event-text">
              ${event.title}
            </div>

            <div class="dept-business-event-img-grid">
              ${(event.images || []).slice(0, 4).map(img => `
                    <img src="${img}" alt="event image">
                  `).join("")}
            </div>

          </div>

        </div>
      `;

                }).join("");
            }
        }


        // ================= ACCORDION FUNCTION =================
        document.addEventListener("click", function(e) {

            const header = e.target.closest(".dept-business-event-acc-header");
            if (!header) return;

            const item = header.parentElement;
            const content = item.querySelector(".dept-business-event-acc-content");

            // Close others (optional – cleaner UX)
            document.querySelectorAll(".dept-business-event-acc-item").forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const c = acc.querySelector(".dept-business-event-acc-content");
                    if (c) c.style.maxHeight = 0;
                }
            });

            // Toggle current
            item.classList.toggle("active");

            if (item.classList.contains("active")) {
                content.style.maxHeight = content.scrollHeight + "px";
            } else {
                content.style.maxHeight = 0;
            }

        });
    </script>
@endsection
