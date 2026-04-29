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

        .dept-food-sc-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-food-sc-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-food-sc-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-food-sc-heading h1 span {
            color: var(--accent);
        }

        .dept-food-sc-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-food-sc-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-food-sc-img {
            flex: 1;
            position: relative;
        }

        .dept-food-sc-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-food-sc-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-food-sc-content {
            flex: 1;
        }

        .dept-food-sc-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-food-sc-content h3 span {
            color: var(--accent);
        }

        .dept-food-sc-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-food-sc-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-food-sc-floating {
            position: fixed;
            left: 30px;
            top: 57%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-food-sc-float-item {
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

        .dept-food-sc-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-food-sc-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-food-sc-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-food-sc-float-item:hover i {
            color: #fff;
        }

        .dept-food-sc-float-item:hover .dept-food-sc-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-food-sc-admission-btn {
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

        .dept-food-sc-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-food-sc-admission-btn:hover {
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
            .dept-food-sc-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-food-sc-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-food-sc-img img {
                padding-left: 0%;
            }

            .dept-food-sc-floating {
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

            .dept-food-sc-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-food-sc-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-food-sc-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-food-sc-float-item:active i {
                color: var(--primary);
            }

            .dept-food-sc-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-food-sc-admission-btn {
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
            .dept-food-sc-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-food-sc-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-food-sc-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-food-sc-section-title span {
            color: var(--accent);
        }

        .dept-food-sc-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-food-sc-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-food-sc-course-header {
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
        .dept-food-sc-course-header::after {
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
        .dept-food-sc-view-btn {
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

        .dept-food-sc-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-food-sc-course-body {
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
            .dept-food-sc-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-food-sc-img img {
                padding-left: 0%;
            }

            .dept-food-sc-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-food-sc-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-food-sc-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-food-sc-prospects-content {
                padding: 25px 20px;
            }


            .dept-food-sc-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-food-sc-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-food-sc-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-food-sc-intro-lab {
            text-align: justify;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-food-sc-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-food-sc-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-food-sc-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-food-sc-list li {
            margin-bottom: 12px;
        }

        .dept-food-sc-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-food-sc-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-food-sc-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-food-sc-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-food-sc-accordion-header {
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

        .dept-food-sc-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-food-sc-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-food-sc-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-food-sc-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-food-sc-accordion-item.active .dept-food-sc-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-food-sc-accordion-item.active .dept-food-sc-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-food-sc-accordion-item.active .dept-food-sc-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-food-sc-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-food-sc-syllabus-link {
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

        .dept-food-sc-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-food-sc-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-food-sc-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-food-sc-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-food-sc-syllabus-link:hover .dept-food-sc-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-food-sc-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-food-sc-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-food-sc-lab-container {
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

        .dept-food-sc-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-food-sc-lab-intro {
            font-size: 2.0rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-food-sc-lab-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-food-sc-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-food-sc-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-food-sc-explore-btn {
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

        .dept-food-sc-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-food-sc-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-food-sc-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-food-sc-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-food-sc-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-food-sc-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-food-sc-bullet-list li::before {
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
        .dept-food-sc-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-food-sc-events-box {
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
        .dept-food-sc-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 30s linear infinite;
        }

        .dept-food-sc-events-box:hover .dept-food-sc-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-food-sc-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-food-sc-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-food-sc-events-btn:hover {
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
        .dept-food-sc-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-food-sc-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-food-sc-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-food-sc-table-header {
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
        .dept-food-sc-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-food-sc-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-food-sc-table-acc.active .dept-food-sc-table-content {
            padding: 20px;
        }

        .dept-food-sc-table-acc.active .dept-food-sc-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-food-sc-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-food-sc-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-food-sc-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-food-sc-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-food-sc-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-food-sc-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-food-sc-table td,
        .dept-food-sc-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-food-sc-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-food-sc-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-food-sc-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-food-sc-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-food-sc-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-food-sc-marquee:hover .dept-food-sc-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-food-sc-marquee img {
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
            .dept-food-sc-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-food-sc-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-food-sc-achievement-tabs {
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
        .dept-food-sc-achievement-content {
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
        .dept-food-sc-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-food-sc-recognition-container {
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
        .dept-food-sc-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-food-sc-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-food-sc-recognition-content {
            flex: 2;
        }

        .dept-food-sc-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-food-sc-recognition-btn {
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

        .dept-food-sc-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-food-sc-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-food-sc-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-food-sc-recognition-content p {
                text-align: center;
            }

            .dept-food-sc-recognition-btn {
                justify-content: center;
            }
        }
    </style>

    <div class="dept-food-sc-floating">
        <a href="#dept-home" class="dept-food-sc-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-food-sc-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-food-sc-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-food-sc-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-food-sc-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-food-sc-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-food-sc-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-food-sc-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-food-sc-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-food-sc-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-food-sc-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-food-sc-float-text">Events</span>
        </a>

        <!-- <a href="#dept-committee" class="dept-food-sc-float-item">
          <i class="fa fa-users"></i>
          <span class="dept-food-sc-float-text">Committee</span>
        </a> -->

        <a href="#dept-lab" class="dept-food-sc-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-food-sc-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-food-sc-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-food-sc-wrapper">

        <div class="dept-food-sc-heading" id="dept-home">
            <h1>Department of <span>Food Science & Nurition</span></h1>
            <h2>Royal School of Medical & Allied Sciences (RSMAS)</h2>
        </div>

        <div class="dept-food-sc-hero" id="dept-about">

            <div class="dept-food-sc-img">
                <img src="mobile-assets/rsmas-new-dept/food-sc-nutrition/headimg.png" alt="mls">
            </div>

            <div class="dept-food-sc-content">

                <h3>About <span>Department</span></h3>
                <p>
                    The Department of Food Science & Nurition is committed to excellence in education, research, and
                    community
                    service, aiming to shape future professionals in the field of nutrition, health, and wellness. Our
                    curriculum
                    is designed to provide students with a strong foundation in the science of nutrition, clinical
                    dietetics, food
                    service management, and public health nutrition.

                    Department of Food Science & Nurition at The Assam Royal Global University, Guwahati, offers B.Sc, M.Sc
                    and Ph.D
                    programmes to produce future food technologists of global fame with strong knowledge and understanding
                    of the
                    subject. The courses gives in depth background of physical, chemical and biological compositions of
                    foods,
                    different processing technologies for quality food production and development of innovative, healthy and
                    safe
                    foods. The department is self sufficient carry out the programme with proper infrastructure interms of
                    class
                    rooms and laboratories with state of art facilities. The graduate and post graduates develop
                    competencies to
                    serve in academia, food industries, research institutes, food regulatory agencies or to become a food
                    entrepreneur.
                </p>

            </div>

        </div>

        <div class="dept-food-sc-courses-section" id="dept-courses">
            <h2 class="dept-food-sc-section-title">Courses <span>Offered</span></h2>

            <div class="dept-food-sc-course-list" id="course-list-container">
            </div>
        </div>

        <div class="dept-food-sc-accordion-section" id="dept-syllabus">
            <h2 class="dept-food-sc-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-food-sc-accordion-wrapper">

                <div class="dept-food-sc-accordion-item active">
                    <div class="dept-food-sc-accordion-header">
                        <div class="dept-food-sc-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-food-sc-chevron"></i>
                    </div>

                    <div class="dept-food-sc-accordion-content">
                        <div class="dept-food-sc-syllabus-list">


                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/food-sc-nutrition/syllabus/B.Sc. N&D_ SYLLABUS_2025 BATCH.pdf"
                                class="dept-food-sc-syllabus-link">
                                <div class="dept-food-sc-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- B.Sc. Nutrition & Dietetics 2025
                                </div>
                                <i class="fa-solid fa-download dept-food-sc-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/food-sc-nutrition/syllabus/B.Sc. N&D_ SYLLABUS_2024 BATCH.pdf"
                                class="dept-food-sc-syllabus-link">
                                <div class="dept-food-sc-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- B.Sc. Nutrition & Dietetics 2024
                                </div>
                                <i class="fa-solid fa-download dept-food-sc-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-food-sc-accordion-item">
                    <div class="dept-food-sc-accordion-header">
                        <div class="dept-food-sc-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-food-sc-chevron"></i>
                    </div>

                    <div class="dept-food-sc-accordion-content">
                        <div class="dept-food-sc-syllabus-list">

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/food-sc-nutrition/syllabus/PG  N&D_ SYLLABUS_2025 BATCH.pdf"
                                class="dept-food-sc-syllabus-link">
                                <div class="dept-food-sc-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- M.Sc. Nutrition & Dietetics 2025
                                </div>
                                <i class="fa-solid fa-download dept-food-sc-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="mobile-assets/rsmas-new-dept/food-sc-nutrition/syllabus/PG_ N&D_ SYLLABUS_2024 BATCH.pdf"
                                class="dept-food-sc-syllabus-link">
                                <div class="dept-food-sc-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- M.Sc. Nutrition & Dietetics 2024
                                </div>
                                <i class="fa-solid fa-download dept-food-sc-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-food-sc-accordion-item">
                    <div class="dept-food-sc-accordion-header">
                        <div class="dept-food-sc-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-food-sc-chevron"></i>
                    </div>

                    <div class="dept-food-sc-accordion-content">
                        <div class="dept-food-sc-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-food-sc-syllabus-link" target="_blank">
                                <div class="dept-food-sc-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-food-sc-lab-section" id="dept-lab">

            <div class="dept-food-sc-lab-container">

                <h2 class="dept-food-sc-section-title">Our <span>Lab</span></h2>

                <p class="dept-food-sc-intro-lab" style="padding-bottom: 30px;">
                    17th June, 2023: A state-of-the-art Radiography Lab was inaugurated at The Assam Royal Global University
                    on
                    the 16th of June, 2023, by Dr. A.K. Pansari, Honourable Chancellor of the varsity.

                    Well equipped with the latest technology and machinery, it can conduct tests and offers practical
                    knowledge to
                    Royalites ranging from Postero-anterior and Anterior oblique of the upper limb to Antero-posterior –
                    supine
                    and Antero-posterior – erect of the Abdomen and Pelvic Cavity.
                </p>

                <!-- <p class="dept-food-sc-lab-intro">
              The laboratories are extensively utilised by undergraduate and postgraduate students for laboratory courses,
            </p> -->


                <!-- <h3 class="dept-food-sc-lab-heading">Our Lab Equipments</h3> -->

                <!-- <h2 class="dept-food-sc-section-title">Glimpse of <span>our Lab</span></h2> -->

                <div class="dept-food-sc-lab-gallery">
                    <img src="mobile-assets/rsmas-new-dept/radiology/1.jpg" alt="Lab 1" class="dept-food-sc-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/radiology/2.jpg" alt="Lab 2" class="dept-food-sc-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/radiology/3.jpg" alt="Lab 3" class="dept-food-sc-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/radiology/4.jpg" alt="Lab 4" class="dept-food-sc-lab-img">

                </div>

                <!-- <button class="dept-food-sc-explore-btn">Explore</button> -->
            </div>

        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. – Nutrition and Dietetics",
                duration: "2 Years",
                link: "https://www.rgu.ac/programs-MSc-Nutrition"
            },

            {
                title: "Master – Food Technology",
                duration: "2 Years",
                link: "https://www.rgu.ac/programme-msc-food-science"
            },

            {
                title: "B.Sc. – Nutrition and Dietetics",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-b-sc-nutrition&dietetics"
            },

            {
                title: "Bachelor – Food Technology",
                duration: "4 years",
                link: "https://www.rgu.ac/programme-bsc-food-science"
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
        <div class="dept-food-sc-course-card">

          <div class="dept-food-sc-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-food-sc-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-food-sc-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-food-sc-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-food-sc-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-food-sc-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-food-sc-accordion-content');

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
        <div class="dept-food-sc-event-item">
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
        <div class="dept-food-sc-table-responsive">
          <table class="dept-food-sc-table">
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
        <div class="dept-food-sc-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-food-sc-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-food-sc-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-food-sc-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-food-sc-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-food-sc-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-food-sc-table-content");
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
      <div class="dept-food-sc-event-card">

        <div class="dept-food-sc-event-title">
          ${event.title}
        </div>

        <div class="dept-food-sc-marquee">
          <div class="dept-food-sc-marquee-track">
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
