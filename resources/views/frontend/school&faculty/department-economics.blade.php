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

        .dept-economics-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-economics-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-economics-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-economics-heading h1 span {
            color: var(--accent);
        }

        .dept-economics-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-economics-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-economics-img {
            flex: 1;
            position: relative;
        }

        .dept-economics-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-economics-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-economics-content {
            flex: 1;
        }

        .dept-economics-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-economics-content h3 span {
            color: var(--accent);
        }

        .dept-economics-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-economics-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-economics-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-economics-float-item {
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

        .dept-economics-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-economics-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-economics-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-economics-float-item:hover i {
            color: #fff;
        }

        .dept-economics-float-item:hover .dept-economics-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-economics-admission-btn {
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

        .dept-economics-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-economics-admission-btn:hover {
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
            .dept-economics-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-economics-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-economics-img img {
                padding-left: 0%;
            }

            .dept-economics-floating {
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

            .dept-economics-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-economics-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-economics-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-economics-float-item:active i {
                color: var(--primary);
            }

            .dept-economics-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-economics-admission-btn {
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
            .dept-economics-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-economics-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-economics-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-economics-section-title span {
            color: var(--accent);
        }

        .dept-economics-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-economics-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-economics-course-header {
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
        .dept-economics-course-header::after {
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
        .dept-economics-view-btn {
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

        .dept-economics-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-economics-course-body {
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
            .dept-economics-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-economics-img img {
                padding-left: 0%;
            }

            .dept-economics-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-economics-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-economics-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-economics-prospects-content {
                padding: 25px 20px;
            }


            .dept-economics-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-economics-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-economics-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-economics-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-economics-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-economics-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-economics-list li {
            margin-bottom: 12px;
        }

        .dept-economics-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-economics-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-economics-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-economics-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-economics-accordion-header {
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

        .dept-economics-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-economics-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-economics-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-economics-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-economics-accordion-item.active .dept-economics-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-economics-accordion-item.active .dept-economics-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-economics-accordion-item.active .dept-economics-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-economics-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-economics-syllabus-link {
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

        .dept-economics-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-economics-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-economics-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-economics-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-economics-syllabus-link:hover .dept-economics-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-economics-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-economics-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-economics-lab-container {
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

        .dept-economics-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-economics-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-economics-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-economics-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-economics-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-economics-explore-btn {
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

        .dept-economics-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-economics-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-economics-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-economics-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-economics-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-economics-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-economics-bullet-list li::before {
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
        .dept-economics-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-economics-events-box {
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
        .dept-economics-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-economics-events-box:hover .dept-economics-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-economics-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-economics-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-economics-events-btn:hover {
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
        .dept-economics-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-economics-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-economics-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-economics-table-header {
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
        .dept-economics-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-economics-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-economics-table-acc.active .dept-economics-table-content {
            padding: 20px;
        }

        .dept-economics-table-acc.active .dept-economics-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-economics-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-economics-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-economics-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-economics-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-economics-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-economics-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-economics-table td,
        .dept-economics-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-economics-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-economics-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-economics-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-economics-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-economics-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-economics-marquee:hover .dept-economics-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-economics-marquee img {
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
            .dept-economics-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-economics-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-economics-achievement-tabs {
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
        .dept-economics-achievement-content {
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
        .dept-economics-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-economics-recognition-container {
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
        .dept-economics-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-economics-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-economics-recognition-content {
            flex: 2;
        }

        .dept-economics-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-economics-recognition-btn {
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

        .dept-economics-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-economics-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-economics-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-economics-recognition-content p {
                text-align: center;
            }

            .dept-economics-recognition-btn {
                justify-content: center;
            }
        }

        .dept-economics-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-economics-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

    <div class="dept-economics-floating">
        <a href="#dept-home" class="dept-economics-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-economics-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-economics-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-economics-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-economics-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-economics-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-economics-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-economics-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-economics-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-economics-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-economics-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-economics-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-economics-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-economics-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-economics-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-economics-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-economics-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-economics-wrapper">

        <div class="dept-economics-heading" id="dept-home">
            <h1>Department of <span>Economics</span></h1>
            <h2>Royal School of Humanities & Social Sciences (RSHSS)</h2>
        </div>

        <div class="dept-economics-hero" id="dept-about">

            <div class="dept-economics-img">
                <img src="/mobile-assets/eco.jpeg" alt="Economics">
            </div>

            <div class="dept-economics-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Economics, The Assam Royal Global University, established in the year 2017, stands
                    as a paragon of scholarly excellence and creativity committed to advancing the frontier of economic
                    knowledge through specialized research and targeted thrust areas. The Department offers
                    undergraduate, postgraduate, and doctoral programs
                    <br><br>

                    With distinguished faculty members, renowned for their expertise in Microeconomics, Macroeconomics,
                    Econometrics, International Economics and Gender Economics, the department is dedicated to exploring
                    critical issues such as Economic Policy, Financial Markets, Development Economics, and Behavioral
                    Economics. Its thrust areas encompass cutting-edge research in Environmental Economics, Digital
                    Economy, Health Economics, Current Socio- Economic Issues, reflecting a dynamic response to
                    contemporary global challenges.
                </p>



            </div>

        </div>



        <div class="dept-economics-prospects-section" id="dept-vision">

            <div class="dept-economics-prospects-content">
                <p class="dept-economics-intro-text">
                    Our econometrics and advanced statistical methods with big data analytics, prepare the students to
                    tackle complex economic issues with precision and insight. Both
                    Graduate and Post Graduate students benefit from mentorship and opportunities to engage in research
                    projects. Regular Seminars, Workshop, Conferences, Industrial
                    Visit and Socio-economic Survey keep the department with an enriched academic environment. Faculty
                    and students actively publish in top-tier journals, showcasing
                    their work on global economic, national and local issues. The department has a fair placement
                    record, with graduates often securing positions in academia,
                    government, and the private sector.
                    <br></br>
                    Additionally, the incorporation of various co-curricular activities by the Department into the
                    educational journey of the students prepares them to achieve an all-round
                    development of their personality.
                </p>



            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-economics-prospects-section" id="dept-vision">
            <h2 class="dept-economics-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-economics-prospects-content">

                <h3 class="dept-economics-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-economics-bullet-list">
                    <li>
                        To develop ourselves as one of the prominent departments on a global perspective with respect to
                        innovative curriculum and research through emerging areas of study and develop critical thinkers
                        addressing the National and Global issues.
                    </li>

                </ul>

                <h3 class="dept-economics-subheading">Our Mission</h3>
                <ul class="dept-economics-bullet-list">
                    <li>
                        To enrich a deep understanding of Economic Principles, Theories, and Methodologies among
                        students.
                    </li>
                    <li>
                        To enable students to critically analyse economic phenomena and contribute to evidence-based
                        policymaking for collective benefit for the society.
                    </li>
                    <li>
                        To enhance the frontiers of Economic Knowledge through cutting-edge research to develop who can
                        give back to the society by developing data analysis skill, providing practical application of
                        the theory to ameliorate employability and entrepreneurship.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-economics-courses-section" id="dept-courses">
            <h2 class="dept-economics-section-title">Courses <span>Offered</span></h2>

            <div class="dept-economics-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-economics-prospects-section" id="dept-prospects">
          <h2 class="dept-economics-section-title">Career <span>Prospects</span></h2>

          <div class="dept-economics-prospects-content">
            <p class="dept-economics-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-economics-subheading">Higher Education Opportunities</h3>
            <ol class="dept-economics-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-economics-subheading">Government Sector Jobs</h3>
            <ol class="dept-economics-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-economics-subheading">Private Sector Careers</h3>
            <ol class="dept-economics-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-economics-subheading">Research & Teaching</h3>
            <ol class="dept-economics-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-economics-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-economics-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-economics-subheading">Jobs Abroad</h3>
            <ol class="dept-economics-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-economics-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-economics-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-economics-accordion-section" id="dept-syllabus">
            <h2 class="dept-economics-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-economics-accordion-wrapper">


                <div class="dept-economics-accordion-item active">
                    <div class="dept-economics-accordion-header">
                        <div class="dept-economics-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-economics-chevron"></i>
                    </div>

                    <div class="dept-economics-accordion-content">
                        <div class="dept-economics-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/economics/updated-syllabus/UG-Course-structure.pdf"
                                class="dept-economics-syllabus-link" download>
                                <div class="dept-economics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- BA Economics
                                </div>
                                <i class="fa-solid fa-download dept-economics-download-icon"></i>
                            </a>
                            <a target="_blank" href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/BA%20Economics.pdf"
                                class="dept-economics-syllabus-link" download>
                                <div class="dept-economics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- BA Economics
                                </div>
                                <i class="fa-solid fa-download dept-economics-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="dept-economics-accordion-item">
                    <div class="dept-economics-accordion-header">
                        <div class="dept-economics-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-economics-chevron"></i>
                    </div>

                    <div class="dept-economics-accordion-content">
                        <div class="dept-economics-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/economics/updated-syllabus/PG-Course-structure.pdf"
                                class="dept-economics-syllabus-link" download>
                                <div class="dept-economics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- MA Economics
                                </div>
                                <i class="fa-solid fa-download dept-economics-download-icon"></i>
                            </a>
                            <a target="_blank" href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/MA%20Economics.pdff"
                                class="dept-economics-syllabus-link" download>
                                <div class="dept-economics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- MA Economics
                                </div>
                                <i class="fa-solid fa-download dept-economics-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-economics-accordion-item">
                    <div class="dept-economics-accordion-header">
                        <div class="dept-economics-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-economics-chevron"></i>
                    </div>

                    <div class="dept-economics-accordion-content">
                        <div class="dept-economics-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-economics-syllabus-link" download>
                                <div class="dept-economics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="dept-economics-events-section" id="dept-events">

            <h2 class="dept-economics-section-title">Events</h2>

            <div class="dept-economics-events-box">
                <div class="dept-economics-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                    <a href="#" class="dept-economics-events-btn">View All</a>
                </div> -->

        </div>



        <!-- <div class="dept-economics-event-gallery-section">

          <h2 class="dept-economics-section-title">Event <span>Highlights</span></h2>

          <div id="event-gallery-container"></div>

        </div> -->

        <div class="dept-economics-table-section" id="dept-committee">

            <div class="dept-economics-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-economics-lab-section" id="dept-lab">

                <div class="dept-economics-lab-container">

                    <h2 class="dept-economics-section-title">Physiotherapy <span> OPD</span></h2>

                    <p class="dept-economics-lab-intro">
                        The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                        patient. The
                        students through OPD practicals would learn how to treat patients with physical disabilities and
                        injuries in a
                        range of settings including hospitals, health centres, private practices and sports clubs under the
                        proper
                        guidance of a specialist. The OPD is located in Block-D on the ground floor.
                    </p>

                    <ol class="dept-economics-lab-list">
                        <li>
                            IFT and IRR lamp therapy: The IFT therapy is used for patients with chronic pain, e.g. low back
                            pain, reduce
                            inflammation, and accelerate tissue healing. The Infrared (IRR) radiation in physical therapy
                            acts as a
                            superficial heating modality (thermotherapy) to reduce pain, increase blood flow, and accelerate
                            tissue
                            repair.
                        </li>

                        <li>
                            Ultrasound therapy: It delivers deep heat and micro-vibrations to soft tissues. Common uses
                            include reducing
                            joint stiffness, alleviating chronic pain, increasing localized blood circulation, breaking down
                            scar
                            tissue, and treating muscle spasms.
                        </li>

                        <li>
                            Trapezius muscle stretching exercise: Trapezius muscle stretches, such as ear-to-shoulder tilts,
                            upper trap
                            stretches, and shoulder blade squeezes, are used to relieve tension headaches, reduce neck
                            stiffness, and
                            improve upper body posture.
                        </li>

                        <li>
                            Cupping therapy: It relieves muscle tension, alleviates chronic pain (back, neck, knee), reduces
                            inflammation, and improves blood circulation.
                        </li>

                        <li>
                            Goniometer: A goniometer is a portable tool used in rehabilitation to measure joint angles and
                            assess range
                            of motion (ROM), identifying limitations caused by injuries or fracture cases.
                        </li>

                        <li>
                            Exterior image of the Physiotherapy OPD.
                        </li>
                    </ol>


                     <h3 class="dept-economics-lab-heading">Our Lab Equipments</h3>

                    <h2 class="dept-economics-section-title">Glimpse of <span>our Lab</span></h2>

                    <div class="dept-economics-lab-gallery">

                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                            class="dept-economics-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                            class="dept-economics-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                            class="dept-economics-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                            class="dept-economics-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                            class="dept-economics-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                            class="dept-economics-lab-img">

                    </div>

                    <button class="dept-economics-explore-btn">Explore</button>
                </div>

            </div> -->

    </div>


    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.A. Economics",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MA-Economics"
            },
            {
                title: "B.A. Economics | Honours / Honours with Research",
                duration: "4 Years",
                link: "https://www.rgu.ac/programs-BA-Economics"
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
        <div class="dept-economics-course-card">

          <div class="dept-economics-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-economics-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-economics-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-economics-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-economics-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-economics-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-economics-accordion-content');

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
        const eventsData = [
            "On 18th May 2018, Dr. Gautam Majumder, Associate Professor at Cotton University, Assam, visited Cotton University, Guwahati, for the Board of Studies, Department of Economics.",
            "On 17th April 2020, Dr. M.P. Bezbaruah, Associate Professor at Gauhati University, Assam, visited Gauhati University for an invited talk.",
            "On 26th June 2020, Dr. Debarshi Das, Professor at IITG, Assam, visited IITG for an invited talk.",
            "On 26th June 2020, Dr. Rituparna Basu, Associate Professor at IMI, Kolkata, conducted an invited talk at IMI, Kolkata.",
            "In 2018, Dr. Rabin Khataniar, Associate Professor at B.H College, Assam, visited B.H College for a discussion with Ph.D. scholars.",
            "On 12th March 2020, Dr. Manoj Talukdar, Associate Professor at Cotton University, Assam, visited Cotton University for an invited talk.",
            "On 12th June 2020, Dr. Binod Khadria, Professor (Retired) from JNU, Delhi, visited Delhi for an invited talk.",
            "In 2020, Prof. Gautam Baruah, Director at IIITG, Assam, visited Guwahati for an invited talk.",
            "On 13th August 2018, Prof. Nivedita Goswami, Professor at Gauhati University, Assam, visited Guwahati for an invited talk.",
            "On 9th September 2023, Prof. Joydeep Baruah, Professor at K.K.H.S.O.U., Assam, visited Guwahati for the Board of Studies, Department of Economics.",
            "On 16th May 2024, Dr. Rituparna Basu, Associate Professor at IMI, Kolkata, visited IMI, Kolkata for a talk on Research Methodology.",
            "On 22nd May 2024, Dr. Parag Dutta, Associate Professor, Department of Economics, KKHSOU, Assam, visited Guwahati for a Hands on Training Programme on SPSS.",
            "On 9th September 2023, Dr. Sriparna Barua, Retd. Director, IIE, Guwahati, visited Guwahati as Advisor, Livelihood and Entrepreneurship, North Eastern Handloom and Handicrafts Corporation for the Board of Studies, Department of Economics.",
            "On 25th September 2024, Prof. Nivedita Goswami, Professor, Department of Economics, Gauhati University, visited Guwahati for the Board of Studies, Department of Economics.",
            "On 25th September 2024, Dr. Smita Khaund, Deputy General Manager at NEDFi, Assam, visited Guwahati for the Board of Studies, Department of Economics.",
            "On 4th October 2024, Dr. Mousumi Borah, Associate Professor & HOD, Department of Economics, Arya Vidyapith College, Guwahati, visited Guwahati for an invited talk on \"Assam's Economy and Its Current Scenario\"."
        ]

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
        <div class="dept-economics-event-item">
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
                        "Dr. Deluwar Hoque, Associate Professor and Head of the Department, Economics"
                    ],

                    ["2", "All Faculty members of the Department Members (Ex-Officio)",
                        "Prof. (Dr.) Swabera Islam, Professor and Honorary Advisor, Economics"
                    ],
                    ["", "", "Prof. (Dr.) Gautam Mazumdar, Professor, Economics"],
                    ["", "", "Mr. Jugal Kishor Bhattacharyya, Assistant Professor"],
                    ["", "", "Dr. Pragya Tamang, Assistant Professor"],
                    ["", "", "Dr. Amit Kumar, Assistant Professor"],
                    ["", "", "Dr. Karnikaa Bhattacharyya, Assistant Professor"],
                    ["", "", "Dr. Chayasmita Deka, Assistant Professor"],
                    ["3", "External Expert (Academic)",
                        "Prof (Dr) Nivedita Goswami, Professor, Department of Economics, Gauhati University"
                    ],
                    ["4", "External Expert (Industry)",
                        "Dr. Smita Khaund, Deputy General Manager, North Eastern Development Finance Corporation Ltd (NEDFi)"
                    ],


                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
                rows: [
                    ["1", "Head of the Department", "Dr. Md Deluwar Hoque", "Associate Professor & HOD",
                        "Chairperson/Ex-officio"
                    ],
                    ["2", "Two Professors", "Prof. Swabera Islam", "Professor ", "Member"],
                    ["", "", "Prof. Gautam Mazumdar", "Professor", "Member"],
                    ["3", "Two Associate Professors – one of them will be the member secretary",
                        "Dr. Md Deluwar Hoque", "Associate Professor", "Member"
                    ],
                    ["", "", "", "", ""],
                    ["4", "Two Assistant Professors holding Ph.D. degree", "Dr. Pragya Tamang",
                        "Assistant Professor", "Member"
                    ],
                    ["", "", "Dr. Amit Kumar", "Assistant Professor", "Member"],
                    ["5",
                        "One external member not below the rank of Professors, including members from an allied department, who will be nominated by the URC ",
                        "Prof. Nissar Ahamed Barua", "Professor", "Member"
                    ],
                    ["", "", "", "", ""],
                    ["", "", "", "", ""],



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
        <div class="dept-economics-table-responsive">
          <table class="dept-economics-table">
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
        <div class="dept-economics-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-economics-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-economics-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-economics-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-economics-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-economics-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-economics-table-content");
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
      <div class="dept-economics-event-card">

        <div class="dept-economics-event-title">
          ${event.title}
        </div>

        <div class="dept-economics-marquee">
          <div class="dept-economics-marquee-track">
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
