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

        .dept-geology-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-geology-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-geology-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-geology-heading h1 span {
            color: var(--accent);
        }

        .dept-geology-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-geology-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-geology-img {
            flex: 1;
            position: relative;
        }

        .dept-geology-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-geology-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-geology-content {
            flex: 1;
        }

        .dept-geology-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-geology-content h3 span {
            color: var(--accent);
        }

        .dept-geology-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-geology-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-geology-floating {
            position: fixed;
            left: 30px;
            top: 58%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-geology-float-item {
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

        .dept-geology-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-geology-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-geology-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-geology-float-item:hover i {
            color: #fff;
        }

        .dept-geology-float-item:hover .dept-geology-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-geology-admission-btn {
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

        .dept-geology-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-geology-admission-btn:hover {
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
            .dept-geology-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-geology-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-geology-img img {
                padding-left: 0%;
            }

            .dept-geology-floating {
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

            .dept-geology-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-geology-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-geology-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-geology-float-item:active i {
                color: var(--primary);
            }

            .dept-geology-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-geology-admission-btn {
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
            .dept-geology-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-geology-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-geology-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-geology-section-title span {
            color: var(--accent);
        }

        .dept-geology-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-geology-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-geology-course-header {
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
        .dept-geology-course-header::after {
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
        .dept-geology-view-btn {
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

        .dept-geology-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-geology-course-body {
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
            .dept-geology-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-geology-img img {
                padding-left: 0%;
            }

            .dept-geology-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-geology-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-geology-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-geology-prospects-content {
                padding: 25px 20px;
            }


            .dept-geology-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-geology-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-geology-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-geology-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-geology-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-geology-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-geology-list li {
            margin-bottom: 12px;
        }

        .dept-geology-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-geology-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-geology-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-geology-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-geology-accordion-header {
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

        .dept-geology-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-geology-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-geology-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-geology-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-geology-accordion-item.active .dept-geology-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-geology-accordion-item.active .dept-geology-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-geology-accordion-item.active .dept-geology-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-geology-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-geology-syllabus-link {
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

        .dept-geology-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-geology-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-geology-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-geology-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-geology-syllabus-link:hover .dept-geology-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-geology-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-geology-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-geology-lab-container {
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
            align-items: flex-start;
            /* LEFT ALIGN EVERYTHING */
            text-align: left;
        }

        .dept-geology-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-geology-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-geology-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-geology-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-geology-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-geology-explore-btn {
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

        .dept-geology-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-geology-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-geology-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-geology-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-geology-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-geology-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-geology-bullet-list li::before {
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
        .dept-geology-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-geology-events-box {
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
        .dept-geology-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-geology-events-box:hover .dept-geology-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-geology-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-geology-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-geology-events-btn:hover {
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
        .dept-geology-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-geology-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-geology-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-geology-table-header {
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
        .dept-geology-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-geology-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-geology-table-acc.active .dept-geology-table-content {
            padding: 20px;
        }

        .dept-geology-table-acc.active .dept-geology-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-geology-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-geology-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-geology-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-geology-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-geology-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-geology-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-geology-table td,
        .dept-geology-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-geology-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-geology-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-geology-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-geology-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-geology-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-geology-marquee:hover .dept-geology-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-geology-marquee img {
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
            .dept-geology-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-geology-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-geology-achievement-tabs {
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
        .dept-geology-achievement-content {
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
        .dept-geology-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-geology-recognition-container {
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
        .dept-geology-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-geology-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-geology-recognition-content {
            flex: 2;
        }

        .dept-geology-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-geology-recognition-btn {
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

        .dept-geology-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-geology-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-geology-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-geology-recognition-content p {
                text-align: center;
            }

            .dept-geology-recognition-btn {
                justify-content: center;
            }
        }

        .dept-geology-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-geology-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

    <div class="dept-geology-floating">
        <a href="#dept-home" class="dept-geology-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-geology-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-geology-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-geology-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-geology-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-geology-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-geology-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-geology-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-geology-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-geology-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-geology-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-geology-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-geology-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-geology-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-geology-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-geology-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-geology-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-geology-wrapper">

        <div class="dept-geology-heading" id="dept-home">
            <h1>Department of <span>Geology</span></h1>
            <h2>Royal School of Environmental & Earth Sciences (RSEES)</h2>
        </div>

        <div class="dept-geology-hero" id="dept-about">

            <div class="dept-geology-img">
                <img src="/mobile-assets/zoology-1.jpeg" alt="Geology">
            </div>

            <div class="dept-geology-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Geology, established in October 2020, has rapidly emerged as a center of academic
                    and research excellence. It offers B.Sc. (H) Geology aligned with the National Education Policy
                    (NEP) 2020, along with M.Sc. Geology and PhD programs.

                    The programs are periodically updated to meet industry standards and academic requirements, ensuring
                    that students receive a comprehensive education that prepares them for successful careers. With a
                    strong emphasis on hands-on learning and research, the department is equipped with well-developed
                    laboratory facilities featuring a comprehensive collection of mineral, rock, and fossil specimens,
                    crystal models, and geomorphic models.
                </p>



            </div>

        </div>

        <div class="dept-geology-prospects-section" id="dept-vision">


            <div class="dept-geology-prospects-content">
                <p class="dept-geology-intro-text">
                    The Department of Geology focuses on a diverse range of research areas, leveraging the expertise of
                    its faculty, which includes one Professor and seven Assistant Professors. Key research domains
                    include Geomorphology, Earth and Climate Studies, Ore Geology and Mineral Exploration, Sedimentology
                    and Stratigraphy, Volcanology and Petrology, Palaeomagnetism, and Palaeogeography.

                    These research efforts ensure that the department remains at the forefront of geological sciences,
                    contributing valuable insights and advancements to the field. Moreover, the department nurtures
                    talent and celebrates student achievements, fostering a vibrant academic community. Notable
                    accomplishments include success in national entrance examinations, achievements in debates and
                    competitions, and active participation in cultural events.

                    This blend of academic excellence, research innovation, and student engagement establishes the
                    Department of Geology as a premier destination for geological studies and research in the region.
                </p>



            </div>
        </div>


        <!-- vision mission  -->
        <div class="dept-geology-prospects-section" id="dept-vision">
            <h2 class="dept-geology-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-geology-prospects-content">

                <h3 class="dept-geology-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-geology-bullet-list">
                    <li>
                        To be a leading center of geological excellence, providing globally integrated educational
                        opportunities that empower students to become adept geoscientists, contributing to sustainable
                        development and environmental stewardship on a national and international scale.
                    </li>

                </ul>

                <h3 class="dept-geology-subheading">Our Mission</h3>
                <ul class="dept-geology-bullet-list">
                    <li>
                        To achieve academic excellence by delivering research-intensive programmes and integrating
                        industry-oriented education to prepare students for successful careers in evolving geological
                        and environmental sectors.
                    </li>
                    <li>
                        To incorporate community service initiatives to instill ethical conduct, social responsibility,
                        and compassion among our students, faculty, and staff, creating geologists who are not only
                        technically proficient but also socially conscious.
                    </li>
                    <li>
                        To give back responsible geologists who are not only academically proficient but also
                        compassionate and ethical leaders, dedicated to making positive contributions to society and
                        actively participating in the global community.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-geology-courses-section" id="dept-courses">
            <h2 class="dept-geology-section-title">Courses <span>Offered</span></h2>

            <div class="dept-geology-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-geology-prospects-section" id="dept-prospects">
              <h2 class="dept-geology-section-title">Career <span>Prospects</span></h2>

              <div class="dept-geology-prospects-content">
                <p class="dept-geology-intro-text">
                  The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
                  sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                  strong foundation in agricultural sciences, preparing them for following careers opportunities:
                </p>

                <h3 class="dept-geology-subheading">Higher Education Opportunities</h3>
                <ol class="dept-geology-list">
                  <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                  </li>
                  <li>MBA in Agribusiness Management</li>
                  <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                  <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                    disciplines</li>
                </ol>

                <h3 class="dept-geology-subheading">Government Sector Jobs</h3>
                <ol class="dept-geology-list">
                  <li>Agricultural Officer / Civil Development Officer (ADO)</li>
                  <li>IBPS AFO (Agricultural Field Officer)</li>
                  <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                  <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                  <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                </ol>

                <h3 class="dept-geology-subheading">Private Sector Careers</h3>
                <ol class="dept-geology-list">
                  <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                  <li>Food Processing Industries</li>
                  <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                  <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
                  <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                </ol>

                <h3 class="dept-geology-subheading">Research & Teaching</h3>
                <ol class="dept-geology-list">
                  <li>Research Assistant / Scientist – in public and private research institutions</li>
                  <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                  <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                </ol>

                <h3 class="dept-geology-subheading">Entrepreneurship & Startups</h3>
                <ol class="dept-geology-list">
                  <li>Organic farming, dairy, poultry, aquaculture</li>
                  <li>Agri-tourism, greenhouse farming, vertical farming</li>
                  <li>Processing units for spices, cereals, or fruits</li>
                  <li>Agri-consultancy or freelance advisory services</li>
                </ol>

                <h3 class="dept-geology-subheading">Jobs Abroad</h3>
                <ol class="dept-geology-list">
                  <li>Agricultural research, farm management, and food security projects</li>
                  <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                  <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                </ol>

                <h3 class="dept-geology-subheading">Key Skills That Boost Career</h3>
                <ol class="dept-geology-list">
                  <li>Practical knowledge of farming tools and technologies</li>
                  <li>Communication and management skills (especially in extension or agribusiness)</li>
                  <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
                  <li>Language skills and report writing</li>
                </ol>

              </div>
            </div> -->

        <div class="dept-geology-accordion-section" id="dept-syllabus">
            <h2 class="dept-geology-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-geology-accordion-wrapper">

                <div class="dept-geology-accordion-item active">
                    <div class="dept-geology-accordion-header">
                        <div class="dept-geology-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-geology-chevron"></i>
                    </div>

                    <div class="dept-geology-accordion-content">
                        <div class="dept-geology-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/department-all/rsses/geology/updated-syllabus/Course_structure_UG_Geology.pdf"
                                class="dept-geology-syllabus-link" download>
                                <div class="dept-geology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Geology
                                </div>
                                <i class="fa-solid fa-download dept-geology-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="/mobile-assets/department-all/rsses/geology/updated-syllabus/B.Sc_Geology_Syllabus.pdf"
                                class="dept-geology-syllabus-link" download>
                                <div class="dept-geology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Geology
                                </div>
                                <i class="fa-solid fa-download dept-geology-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-geology-accordion-item">
                    <div class="dept-geology-accordion-header">
                        <div class="dept-geology-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-geology-chevron"></i>
                    </div>

                    <div class="dept-geology-accordion-content">
                        <div class="dept-geology-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/department-all/rsses/geology/updated-syllabus/Course_structure_PG_Geology.pdf"
                                class="dept-geology-syllabus-link" download>
                                <div class="dept-geology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Geology
                                </div>
                                <i class="fa-solid fa-download dept-geology-download-icon"></i>
                            </a>
                            <a target="_blank" href="/mobile-assets/syllabus/RSEES/M.Sc%20Geology%20Syllabus.pdf"
                                class="dept-geology-syllabus-link" download>
                                <div class="dept-geology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Geology
                                </div>
                                <i class="fa-solid fa-download dept-geology-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>



                <div class="dept-geology-accordion-item">
                    <div class="dept-geology-accordion-header">
                        <div class="dept-geology-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-geology-chevron"></i>
                    </div>

                    <div class="dept-geology-accordion-content">
                        <div class="dept-geology-syllabus-list">
                            <a href="/phd" class="dept-geology-syllabus-link" download>
                                <div class="dept-geology-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="dept-geology-events-section" id="dept-events">

            <h2 class="dept-geology-section-title">Events</h2>

            <div class="dept-geology-events-box">
                <div class="dept-geology-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                <a href="#" class="dept-geology-events-btn">View All</a>
              </div> -->

        </div>



        <!-- <div class="dept-geology-event-gallery-section">

              <h2 class="dept-geology-section-title">Event <span>Highlights</span></h2>

              <div id="event-gallery-container"></div>

            </div> -->

        <div class="dept-geology-table-section" id="dept-committee">

            <div class="dept-geology-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-geology-prospects-section" id="dept-lab">
            <h2 class="dept-geology-section-title">Our <span>Lab</span></h2>

            <div class="dept-geology-prospects-content">

                <h3 class="dept-geology-lab-heading">Geology Laboratory</h3>

                <p class="dept-geology-lab-intro">

                    Our Geology laboratory is professional and purpose-built, consisting of two specialized sections:
                    the Geological Sample Lab and the Petrography Lab. The labs are well-equipped with a diverse
                    collection of crystal models, mineral, rock, and fossil specimens alongside modern analytical tools,
                    such as Petrological Polarizing Microscopes, to help students explore the Earth's composition and
                    history through hands-on study. It is designed to aid and guide students in identifying physical
                    properties and microscopic characteristics, analyzing structural features, and drawing geological
                    inferences while experimenting.
                </p>



                <h3 class="dept-geology-subheading" style="margin-top: 2;">Lab Instruments Includes</h3>
                <ul class="dept-geology-bullet-list">
                    <li>
                        Polarizing (Petrological) Microscope
                    </li>
                    <li>
                        Compensator
                    </li>
                    <li>
                        Goniometer
                    </li>
                    <li>
                        Opisometer
                    </li>
                    <li>
                        Brunton Compass
                    </li>
                    <li>
                        Clinometer
                    </li>

                </ul>


                <h3 class="dept-geology-subheading" style="margin-top: 2;">Included activities in the lab:</h3>
                <ul class="dept-geology-bullet-list">
                    <li>
                        Crystallographic analysis and symmetry identification using wooden crystal models
                    </li>
                    <li>
                        Petrographic characterization of rocks (Megascopic & Microscopic)
                    </li>
                    <li>
                        Hands-on recognition of rock-forming and ore-forming minerals, and their economic assessment
                    </li>
                    <li>
                        Geological map interpretation and subsurface structural cross-section profiling, Stereonet
                        analysis for structural orientation and tectonic data interpretation
                    </li>
                    <li>
                        Palaeontological documentation of fossil morphology
                        Fluvial morphometry, sinuosity analysis, and drainage density calculations
                    </li>
                    <li>
                        Geospatial and Remote Sensing applications in terrain analysis
                        Support for dissertation, project work, and research-based training in Geology
                    </li>

                </ul>





                <h2 class="dept-geology-section-title">Our Lab Equipments</h2>

                <div class="dept-geology-lab-gallery">
                    <img src="/mobile-assets/laboratories/new-lab-geology/1.jpg" alt="Lab 1"
                        class="dept-geology-lab-img">
                    <img src="/mobile-assets/laboratories/new-lab-geology/2.jpg" alt="Lab 2"
                        class="dept-geology-lab-img">
                    <img src="/mobile-assets/laboratories/new-lab-geology/3.jpg" alt="Lab 3"
                        class="dept-geology-lab-img">
                    <img src="/mobile-assets/laboratories/new-lab-geology/4.jpg" alt="Lab 4"
                        class="dept-geology-lab-img">
                    <img src="/mobile-assets/laboratories/new-lab-geology/5.jpg" alt="Lab 5"
                        class="dept-geology-lab-img">
                    <img src="/mobile-assets/laboratories/new-lab-geology/6.jpg" alt="Lab 6"
                        class="dept-geology-lab-img">
                </div>






            </div>
        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. - Geology",
                duration: "2 years",
                link: "/programs-MSc-Geology"
            },
            {
                title: "B.sc. - Geology | Honours / Honours with Research",
                duration: "4 Years",
                link: "/programs-b-sc-geology"
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
        <div class="dept-geology-course-card">

          <div class="dept-geology-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-geology-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-geology-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-geology-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-geology-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-geology-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-geology-accordion-content');

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
            "04-11-2023 | Prof. Vishwambhar Prasad Sati (Senior Professor, Department of Geography and Resource Management, Mizoram University) | Invited talk.",

            "15-05-2023 | Prof. D. K. Nayak (Professor, Department of Geography, North-East Hill University) | Invited talk.",

            "22-09-2023 | Prof. (Dr.) Sunando Bandyopadhyay (Department of Geography, University of Calcutta) | Guest lecture.",

            "02-11-2023 | Dr. Hirak Ranjan Das (Deputy Director, Innovation Incubation and Entrepreneurship, The Assam Royal Global University) | Guest lecture.",

            "21-11-2023 | Prof. Milap Chand Sharma (CSRD, JNU, New Delhi) | Invited talk.",

            "22-04-2024 | Prof. Sachidanand Sinha (Former Chairperson, CSRD, JNU, New Delhi) | Invited talk.",

            "05-06-2024 | Prof. Kushal Kumar Baruah (Professor and Dean of Academic Affairs, Auniati University, Assam) | Invited talk.",

            "08-06-2024 | Prof. Bindhy Wasini Pandey (Professor, Department of Geography, Delhi School of Economics, University of Delhi) | Invited talk.",

            "20-08-2024 | Sri Atul Chandrakant Kulkarni (Chairman, Amazing Namaste Foundation; Member, Board of Governors, IIM Shillong) | Invited talk."
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
        <div class="dept-geology-event-item">
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
                headers: ["S.No.", "Position in D-BoS", "Name And Designation"],
                rows: [
                    ["1", "Convener (Ex-Officio)- Head of the Department",
                        "Dr. Roshmi Boruah, Assistant Professor and Coordinator, Dept. of Geology"
                    ],

                    ["2", "All Faculty members of the Department Members (Ex-Officio)",
                        "Prof. Hemangi Deka Sharma, Professor, Dept. of Geology"
                    ],
                    ["3", "", "Mr. Rajdeep Deb, Assistant Professor, Dept. of Geology"],
                    ["4", "", "Mr. Amarjyoti Borah, Assistant Professor, Dept. of Geology"],
                    ["5", "", "Dr. Neeta Moni Sharma, Assistant Professor, Dept. of Geology"],
                    ["6", "", "Dr. Abhijit Gogoi, Assistant Professor, Dept. of Geology"],
                    ["7", "", "Dr. Nishanta Sahariah, Assistant Professor, Dept. of Geology"],
                    ["8", "", "Dr. Pritom Borah, Assistant Professor, Dept. of Geology"],
                    ["9", "External Academic Expert (Subject Expert)",
                        "Dr. Jayanta Jivan Laskar, Professor, Dept. of Geological Sciences, Gauhati University "
                    ],
                    ["10", "", "Dr. Santanu Sharma, Professor, Dept. of Geology, Cotton University"],
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name of the Member", "Assistant Professor and Coordinator",
                    "Designation in the Committee"
                ],
                rows: [
                    ["1", "Head of the Department", "Dr. Roshmi Boruah", "Assistant Professor and Coordinator",
                        "Chairperson"
                    ],

                    ["2", "Professors, including the Dean of the School", "Prof. (Dr.) Hemangi Deka Sarma",
                        "Professor", "Member"
                    ],

                    ["3", "", "Prof. (Dr.) Debendra Kumar Nayak",
                        "Professor and Dean, Royal School of Environmental and Earth Sciences", "Member"
                    ],

                    ["4", "Two Assistant Professors", "Dr. Abhijit Gogoi", "Assistant Professor", "Member"],

                    ["5", "", "Dr. Pritom Borah", "Assistant Professor", "Member"],
                    ["6", "One External Member from outside the University nominated by URC",
                        "Prof. (Dr.) Parag Phukon",
                        "Professor, Department of Geological Sciences, Gauhati University", "External Member"
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
        <div class="dept-geology-table-responsive">
          <table class="dept-geology-table">
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
        <div class="dept-geology-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-geology-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-geology-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-geology-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-geology-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-geology-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-geology-table-content");
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
      <div class="dept-geology-event-card">

        <div class="dept-geology-event-title">
          ${event.title}
        </div>

        <div class="dept-geology-marquee">
          <div class="dept-geology-marquee-track">
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
