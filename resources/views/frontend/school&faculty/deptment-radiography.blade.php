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

        .dept-radiology-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-radiology-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-radiology-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-radiology-heading h1 span {
            color: var(--accent);
        }

        .dept-radiology-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-radiology-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-radiology-img {
            flex: 1;
            position: relative;
        }

        .dept-radiology-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-radiology-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-radiology-content {
            flex: 1;
        }

        .dept-radiology-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-radiology-content h3 span {
            color: var(--accent);
        }

        .dept-radiology-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-radiology-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-radiology-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-radiology-float-item {
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

        .dept-radiology-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-radiology-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-radiology-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-radiology-float-item:hover i {
            color: #fff;
        }

        .dept-radiology-float-item:hover .dept-radiology-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-radiology-admission-btn {
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

        .dept-radiology-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-radiology-admission-btn:hover {
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
            .dept-radiology-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-radiology-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-radiology-img img {
                padding-left: 0%;
            }

            .dept-radiology-floating {
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

            .dept-radiology-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-radiology-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-radiology-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-radiology-float-item:active i {
                color: var(--primary);
            }

            .dept-radiology-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-radiology-admission-btn {
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
            .dept-radiology-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-radiology-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-radiology-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-radiology-section-title span {
            color: var(--accent);
        }

        .dept-radiology-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-radiology-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-radiology-course-header {
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
        .dept-radiology-course-header::after {
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
        .dept-radiology-view-btn {
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

        .dept-radiology-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-radiology-course-body {
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
            .dept-radiology-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-radiology-img img {
                padding-left: 0%;
            }

            .dept-radiology-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-radiology-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-radiology-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-radiology-prospects-content {
                padding: 25px 20px;
            }


            .dept-radiology-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-radiology-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-radiology-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-radiology-intro-lab {
            text-align: justify;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-radiology-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-radiology-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-radiology-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-radiology-list li {
            margin-bottom: 12px;
        }

        .dept-radiology-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-radiology-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-radiology-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-radiology-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-radiology-accordion-header {
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

        .dept-radiology-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-radiology-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-radiology-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-radiology-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-radiology-accordion-item.active .dept-radiology-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-radiology-accordion-item.active .dept-radiology-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-radiology-accordion-item.active .dept-radiology-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-radiology-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-radiology-syllabus-link {
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

        .dept-radiology-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-radiology-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-radiology-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-radiology-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-radiology-syllabus-link:hover .dept-radiology-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-radiology-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-radiology-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-radiology-lab-container {
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

        .dept-radiology-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-radiology-lab-intro {
            font-size: 2.0rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-radiology-lab-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-radiology-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-radiology-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-radiology-explore-btn {
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

        .dept-radiology-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-radiology-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-radiology-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-radiology-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-radiology-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-radiology-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-radiology-bullet-list li::before {
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
        .dept-radiology-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-radiology-events-box {
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
        .dept-radiology-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 30s linear infinite;
        }

        .dept-radiology-events-box:hover .dept-radiology-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-radiology-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-radiology-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-radiology-events-btn:hover {
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
        .dept-radiology-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-radiology-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-radiology-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-radiology-table-header {
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
        .dept-radiology-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-radiology-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-radiology-table-acc.active .dept-radiology-table-content {
            padding: 20px;
        }

        .dept-radiology-table-acc.active .dept-radiology-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-radiology-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-radiology-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-radiology-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-radiology-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-radiology-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-radiology-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-radiology-table td,
        .dept-radiology-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-radiology-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-radiology-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-radiology-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-radiology-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-radiology-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-radiology-marquee:hover .dept-radiology-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-radiology-marquee img {
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
            .dept-radiology-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-radiology-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-radiology-achievement-tabs {
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
        .dept-radiology-achievement-content {
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
        .dept-radiology-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-radiology-recognition-container {
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
        .dept-radiology-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-radiology-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-radiology-recognition-content {
            flex: 2;
        }

        .dept-radiology-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-radiology-recognition-btn {
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

        .dept-radiology-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-radiology-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-radiology-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-radiology-recognition-content p {
                text-align: center;
            }

            .dept-radiology-recognition-btn {
                justify-content: center;
            }
        }
    </style>

    <div class="dept-radiology-floating">
        <a href="#dept-home" class="dept-radiology-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-radiology-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-radiology-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-radiology-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-radiology-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-radiology-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-radiology-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-radiology-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-radiology-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-radiology-float-text">Syllabus</span>
        </a>


        <a href="#dept-events" class="dept-radiology-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-radiology-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-radiology-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-radiology-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-radiology-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-radiology-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-radiology-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-radiology-wrapper">

        <div class="dept-radiology-heading" id="dept-home">
            <h1>Department of <br><span>Medical Radiology & Imaging Technology</span></h1>
            <h2>Royal School of Medical & Allied Sciences (RSMAS)</h2>
        </div>

        <div class="dept-radiology-hero" id="dept-about">

            <div class="dept-radiology-img">
                <img src="mobile-assets/rsmas-new-dept/radiology/headimg.png" alt="mls">
            </div>

            <div class="dept-radiology-content">

                <h3>About <span>Department</span></h3>
                <p>
                    The Department of Medical Radiology and Imaging Technology is committed to developing competent imaging
                    professionals with expertise in diagnostic imaging, radiation safety, and patient-centred care. The
                    department provides comprehensive education and hands-on clinical training in conventional radiography,
                    computed tomography (CT), magnetic resonance imaging (MRI), ultrasonography assistance, mammography,
                    fluoroscopy, interventional imaging, and advanced imaging technologies.<br/><br/>

                    Aligned with the National Commission for Allied and Healthcare Professions (NCAHP) standards, the
                    curriculum integrates foundational medical sciences, imaging physics, radiation protection, quality
                    assurance, and digital imaging with extensive clinical exposure in leading healthcare institutions.
                    Graduates are equipped to work as skilled Medical Radiology and Imaging Technologists in hospitals,
                    diagnostic centres, trauma and emergency units, interventional radiology suites, and research settings.

                </p>

            </div>

        </div>

        <div class="dept-radiology-prospects-section" id="dept-prospects">

            <div class="dept-radiology-prospects-content">

                <p class="dept-radiology-intro-text" style="text-align: justify;">
                    The department fosters excellence in clinical practice, innovation, research, ethical professionalism,
                    and lifelong learning, preparing graduates to meet the evolving demands of modern diagnostic and imaging
                    services in India and across the globe.

                </p>

            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-radiology-prospects-section" id="dept-vision">
            <h2 class="dept-radiology-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-radiology-prospects-content">

                <h3 class="dept-radiology-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-radiology-bullet-list">
                    <li>
                        To produce future technologists who will uphold the highest standards of patient care and who will
                        be able
                        to advance in practice with excellence in medical imaging, nuclear medicine, interventional
                        procedures and
                        radiation therapy, provided with opportunities for global exposure that are integrated on a national
                        and
                        international scale.
                    </li>

                </ul>

                <h3 class="dept-radiology-subheading">Our Mission</h3>
                <ul class="dept-radiology-bullet-list">
                    <li>
                        To attain academic success by professionally developed, widely researched, and practically focused
                        coursework.
                    </li>

                    <li>
                        To incorporate community service to instill moral behavior and empathy towards patients.
                    </li>

                    <li>
                        To give back the society with responsible medical professionals who might enhance our hospital
                        experience
                        and benefit immensely by providing adept assistance to the public.
                    </li>
                </ul>

            </div>
        </div>

        <div class="dept-radiology-courses-section" id="dept-courses">
            <h2 class="dept-radiology-section-title">Courses <span>Offered</span></h2>

            <div class="dept-radiology-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-radiology-prospects-section" id="dept-prospects">
          <h2 class="dept-radiology-section-title">Career <span>Prospects</span></h2>

          <div class="dept-radiology-prospects-content">
            <p class="dept-radiology-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-radiology-subheading">Higher Education Opportunities</h3>
            <ol class="dept-radiology-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-radiology-subheading">Government Sector Jobs</h3>
            <ol class="dept-radiology-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-radiology-subheading">Private Sector Careers</h3>
            <ol class="dept-radiology-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-radiology-subheading">Research & Teaching</h3>
            <ol class="dept-radiology-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-radiology-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-radiology-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-radiology-subheading">Jobs Abroad</h3>
            <ol class="dept-radiology-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-radiology-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-radiology-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-radiology-accordion-section" id="dept-syllabus">
            <h2 class="dept-radiology-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-radiology-accordion-wrapper">

                <div class="dept-radiology-accordion-item active">
                    <div class="dept-radiology-accordion-header">
                        <div class="dept-radiology-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-radiology-chevron"></i>
                    </div>

                    <div class="dept-radiology-accordion-content">
                        <div class="dept-radiology-syllabus-list">

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/radiology/syllabus/BRIT-Syllabus_2025-26.pdf"
                                class="dept-radiology-syllabus-link">
                                <div class="dept-radiology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- BRIT 2025 - 2026
                                </div>
                                <i class="fa-solid fa-download dept-radiology-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/radiology/syllabus/BRIT-syllabus-2024_25.pdf"
                                class="dept-radiology-syllabus-link">
                                <div class="dept-radiology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- BRIT 2024 - 2025
                                </div>
                                <i class="fa-solid fa-download dept-radiology-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-radiology-accordion-item">
                    <div class="dept-radiology-accordion-header">
                        <div class="dept-radiology-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-radiology-chevron"></i>
                    </div>

                    <div class="dept-radiology-accordion-content">
                        <div class="dept-radiology-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-radiology-syllabus-link" target="_blank">
                                <div class="dept-radiology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-radiology-events-section" id="dept-events">

            <h2 class="dept-radiology-section-title">Events</h2>

            <div class="dept-radiology-events-box">
                <div class="dept-radiology-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
            <a href="#" class="dept-radiology-events-btn">View All</a>
          </div> -->

        </div>

        <div class="dept-radiology-table-section" id="dept-committee">

            <div class="dept-radiology-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-radiology-lab-section" id="dept-lab">

            <div class="dept-radiology-lab-container">

                <h2 class="dept-radiology-section-title">Our <span>Lab</span></h2>

                <p class="dept-radiology-intro-lab" style="padding-bottom: 30px;">
                    17th June, 2023: A state-of-the-art Radiography Lab was inaugurated at The Assam Royal Global University
                    on
                    the 16th of June, 2023, by Dr. A.K. Pansari, Honourable Chancellor of the varsity.

                    Well equipped with the latest technology and machinery, it can conduct tests and offers practical
                    knowledge to
                    Royalites ranging from Postero-anterior and Anterior oblique of the upper limb to Antero-posterior –
                    supine
                    and Antero-posterior – erect of the Abdomen and Pelvic Cavity.
                </p>

                <!-- <p class="dept-radiology-lab-intro">
              The laboratories are extensively utilised by undergraduate and postgraduate students for laboratory courses,
            </p> -->


                <!-- <h3 class="dept-radiology-lab-heading">Our Lab Equipments</h3> -->

                <!-- <h2 class="dept-radiology-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-radiology-lab-gallery">
                    <img src="mobile-assets/rsmas-new-dept/radiology/1.jpg" alt="Lab 1"
                        class="dept-radiology-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/radiology/2.jpg" alt="Lab 2"
                        class="dept-radiology-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/radiology/3.jpg" alt="Lab 3"
                        class="dept-radiology-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/radiology/4.jpg" alt="Lab 4"
                        class="dept-radiology-lab-img">

                </div>

                <!-- <button class="dept-radiology-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "Master – Medical Radiology and Imaging Technology",
                duration: "2 Years",
                link: "https://www.rgu.ac/programme-m-radio-imaging"
            },

            {
                title: "Bachelor – Medical Radiology and Imaging Technology",
                duration: "4 years",
                link: "https://www.rgu.ac/programme-b-radio-imaging"
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
        <div class="dept-radiology-course-card">

          <div class="dept-radiology-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-radiology-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-radiology-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-radiology-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-radiology-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-radiology-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-radiology-accordion-content');

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
            "31-03-2023 | Ms. Sarita Devi Chettri conducted a webinar on Surgical Instrumentation.",
            "Mrs. Anamika Bhuyan, Principal of NEPNI College of Nursing, visited the department.",
            "Dr. Bibhuti Bhusan Borthakur, Director of BBCI, visited the department for a guest lecture.",
            "Dr. Sunil Kumar S and Mr. Shreekumar R Chandra, National Governing Body Members of ISRT, visited the department for training.",
            "Ms. Preeti Singh, RSO/NABH Co-ordinator at the Department of Nuclear Medicine, GDRC, New Delhi, visited the department for a guest lecture.",
            "Dr. P. Mansa, Senior Resident in Radiation Oncology at SCI, Guwahati, visited the department for a seminar.",
            "Ms. Sushmeeta Saha, Senior Radiographer at BF Railways, Guwahati, visited the department for a guest lecture.",
            "Ms. Mamta Panda, Assistant Professor at Rayat Bahar University, visited the department for a guest lecture.",
            "Mr. Manna Debnath, Assistant Professor at Charter University of Science & Technology, visited the department for a guest lecture."
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
        <div class="dept-radiology-event-item">
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
            headers: ["Sl. No.", "Name", "Designation And Address", "Role"],
            rows: [
                ["1", "Ms Mayuri Ojah", "Head of Department, Dept of Radiography & Advance Imaging Technology",
                    "Convener"
                ],

                ["2", "Prof. (Dr.) Dolly Sharma",
                    "Professor, Dept of Medical Radiology & Imaging Technology, Institute of Allied Health Sciences, SGT University, Gurugram",
                    "External Expert (Academic)"
                ],

                ["3", "Dr. Bhargav Das", "Consultant Radiologist, Life Care Diagnostics, Maligaon, Guwahati",
                    "External Expert (Industry)"
                ],

                ["4", "Ms Meghna Guha", "Assistant Professor, Dept of Radiography & Advance Imaging Technology",
                    "Member"
                ],
                ["5", "Ms Priyanka Kumari",
                    "Assistant Professor, Dept of Radiography & Advance Imaging Technology", "Member"
                ],
                ["6", "Ms Anudeep Kaur",
                    "Assistant Professor, Dept of Radiography & Advance Imaging Technology", "Member"
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
        <div class="dept-radiology-table-responsive">
          <table class="dept-radiology-table">
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
        <div class="dept-radiology-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-radiology-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-radiology-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-radiology-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-radiology-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-radiology-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-radiology-table-content");
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
      <div class="dept-radiology-event-card">

        <div class="dept-radiology-event-title">
          ${event.title}
        </div>

        <div class="dept-radiology-marquee">
          <div class="dept-radiology-marquee-track">
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
