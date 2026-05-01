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

        .dept-finearts-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-finearts-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-finearts-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-finearts-heading h1 span {
            color: var(--accent);
        }

        .dept-finearts-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-finearts-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-finearts-img {
            flex: 1;
            position: relative;
        }

        .dept-finearts-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-finearts-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-finearts-content {
            flex: 1;
        }

        .dept-finearts-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-finearts-content h3 span {
            color: var(--accent);
        }

        .dept-finearts-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-finearts-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-finearts-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-finearts-float-item {
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

        .dept-finearts-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-finearts-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-finearts-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-finearts-float-item:hover i {
            color: #fff;
        }

        .dept-finearts-float-item:hover .dept-finearts-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-finearts-admission-btn {
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

        .dept-finearts-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-finearts-admission-btn:hover {
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
            .dept-finearts-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-finearts-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-finearts-img img {
                padding-left: 0%;
            }

            .dept-finearts-floating {
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

            .dept-finearts-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-finearts-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-finearts-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-finearts-float-item:active i {
                color: var(--primary);
            }

            .dept-finearts-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-finearts-admission-btn {
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
            .dept-finearts-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-finearts-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-finearts-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-finearts-section-title span {
            color: var(--accent);
        }

        .dept-finearts-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-finearts-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-finearts-course-header {
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
        .dept-finearts-course-header::after {
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
        .dept-finearts-view-btn {
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

        .dept-finearts-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-finearts-course-body {
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
            .dept-finearts-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-finearts-img img {
                padding-left: 0%;
            }

            .dept-finearts-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-finearts-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-finearts-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-finearts-prospects-content {
                padding: 25px 20px;
            }


            .dept-finearts-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-finearts-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-finearts-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-finearts-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-finearts-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-finearts-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-finearts-list li {
            margin-bottom: 12px;
        }

        .dept-finearts-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-finearts-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-finearts-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-finearts-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-finearts-accordion-header {
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

        .dept-finearts-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-finearts-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-finearts-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-finearts-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-finearts-accordion-item.active .dept-finearts-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-finearts-accordion-item.active .dept-finearts-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-finearts-accordion-item.active .dept-finearts-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-finearts-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-finearts-syllabus-link {
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

        .dept-finearts-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-finearts-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-finearts-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-finearts-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-finearts-syllabus-link:hover .dept-finearts-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-finearts-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-finearts-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-finearts-lab-container {
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

        .dept-finearts-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-finearts-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-finearts-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-finearts-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-finearts-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-finearts-explore-btn {
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

        .dept-finearts-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-finearts-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-finearts-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-finearts-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-finearts-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-finearts-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-finearts-bullet-list li::before {
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
        .dept-finearts-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-finearts-events-box {
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
        .dept-finearts-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-finearts-events-box:hover .dept-finearts-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-finearts-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-finearts-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-finearts-events-btn:hover {
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
        .dept-finearts-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-finearts-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-finearts-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-finearts-table-header {
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
        .dept-finearts-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-finearts-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-finearts-table-acc.active .dept-finearts-table-content {
            padding: 20px;
        }

        .dept-finearts-table-acc.active .dept-finearts-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-finearts-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-finearts-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-finearts-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-finearts-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-finearts-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-finearts-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-finearts-table td,
        .dept-finearts-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-finearts-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-finearts-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-finearts-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-finearts-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-finearts-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-finearts-marquee:hover .dept-finearts-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-finearts-marquee img {
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
            .dept-finearts-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-finearts-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-finearts-achievement-tabs {
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
        .dept-finearts-achievement-content {
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
        .dept-finearts-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-finearts-recognition-container {
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
        .dept-finearts-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-finearts-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-finearts-recognition-content {
            flex: 2;
        }

        .dept-finearts-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-finearts-recognition-btn {
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

        .dept-finearts-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-finearts-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-finearts-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-finearts-recognition-content p {
                text-align: center;
            }

            .dept-finearts-recognition-btn {
                justify-content: center;
            }
        }

        .dept-finearts-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-finearts-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>


    <div class="dept-finearts-floating">
        <a href="#dept-home" class="dept-finearts-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-finearts-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-finearts-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-finearts-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-finearts-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-finearts-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-finearts-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-finearts-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-finearts-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-finearts-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-finearts-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-finearts-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-finearts-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-finearts-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-finearts-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-finearts-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-finearts-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-finearts-wrapper">

        <div class="dept-finearts-heading" id="dept-home">
            <h1>Department of <span>Fine Arts</span></h1>
            <h2>Royal School of Fine Arts (RSFA)</h2>
        </div>

        <div class="dept-finearts-hero" id="dept-about">

            <div class="dept-finearts-img">
                <img src="/mobile-assets/rsfa-1.png" alt="Fine Arts">
            </div>

            <div class="dept-finearts-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Fine Arts department of The Assam Royal Global University, Guwahati is well established
                    department in North-East region called Royal School of Fine Arts. The department was started in the
                    year 2017. There are four years UG programme as well as Ph.D. programme. The department has well
                    equipped infrastructure. The department has well planned art gallery where regularly art exhibition
                    has been conducted. Several students from the department have got award in the fine arts section in
                    national level. The passed-out batches have already got admission for their master’s degree at
                    renowned university of India as well as of western country and some students have successfully
                    established their own art studios after completing their degrees. Several students are pursuing
                    their PhD programme in different areas of fine arts. There is future plan to organize exchange
                    programmes of art exhibition/ art workshop in National and International level for the students as
                    well as the faculties.
                </p>



            </div>

        </div>

        <!-- vision mission  -->
        <div class="dept-finearts-prospects-section" id="dept-vision">
            <h2 class="dept-finearts-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-finearts-prospects-content">

                <h3 class="dept-finearts-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-finearts-bullet-list">
                    <li>
                        To cultivate outstanding fine arts education to generate well-rounded individuals whose
                        uniqueartistic perspectives could be advantageous to global society.
                    </li>

                </ul>

                <h3 class="dept-finearts-subheading">Our Mission</h3>
                <ul class="dept-finearts-bullet-list">
                    <li>
                        To empower creativity, cultivate expression, inspire innovation, fostering a dynamic community where
                        artistic exploration thrives.
                    </li>
                    <li>
                        To ignite imaginations, challenge boundaries and celebrate the diversity of human expression by
                        cultivating visionary artists and scholars.
                    </li>
                    <li>
                        To inculcate interdisciplinary collaboration and a commitment to cultural enrichment and give back
                        leaders who will enrich the world with their creativity and critical perspectives.
                    </li>

                </ul>

            </div>
        </div>

        <h2 class="dept-finearts-section-title pt-4"> <span>Infrastructure</span></h2>

        <img class="pt-1 pb-3" src="/mobile-assets/rsfa-2.png"/>

        <div class="dept-finearts-courses-section" id="dept-courses">
            <h2 class="dept-finearts-section-title">Courses <span>Offered</span></h2>

            <div class="dept-finearts-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-finearts-prospects-section" id="dept-prospects">
          <h2 class="dept-finearts-section-title">Career <span>Prospects</span></h2>

          <div class="dept-finearts-prospects-content">
            <p class="dept-finearts-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-finearts-subheading">Higher Education Opportunities</h3>
            <ol class="dept-finearts-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-finearts-subheading">Government Sector Jobs</h3>
            <ol class="dept-finearts-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-finearts-subheading">Private Sector Careers</h3>
            <ol class="dept-finearts-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-finearts-subheading">Research & Teaching</h3>
            <ol class="dept-finearts-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-finearts-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-finearts-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-finearts-subheading">Jobs Abroad</h3>
            <ol class="dept-finearts-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-finearts-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-finearts-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-finearts-accordion-section" id="dept-syllabus">
            <h2 class="dept-finearts-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-finearts-accordion-wrapper">


                <div class="dept-finearts-accordion-item active">
                    <div class="dept-finearts-accordion-header">
                        <div class="dept-finearts-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-finearts-chevron"></i>
                    </div>

                    <div class="dept-finearts-accordion-content">
                        <div class="dept-finearts-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsfa/updated-syllabus/Course_structure_UG_RSFA.pdf"
                                class="dept-finearts-syllabus-link" download>
                                <div class="dept-finearts-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- BFA
                                </div>
                                <i class="fa-solid fa-download dept-finearts-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSFA/BFA%20-%20Detailed%20Syllabus.pdf"
                                class="dept-finearts-syllabus-link" download>
                                <div class="dept-finearts-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- BFA
                                </div>
                                <i class="fa-solid fa-download dept-finearts-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="dept-finearts-accordion-item">
                    <div class="dept-finearts-accordion-header">
                        <div class="dept-finearts-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-finearts-chevron"></i>
                    </div>

                    <div class="dept-finearts-accordion-content">
                        <div class="dept-finearts-syllabus-list">
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsfa/updated-syllabus/Course_structure_PG_RSFA.pdf"
                                class="dept-finearts-syllabus-link" download>
                                <div class="dept-finearts-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- MFA
                                </div>
                                <i class="fa-solid fa-download dept-finearts-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSFA/MFA%20-%20Detailed%20Syllabus.pdf"
                                class="dept-finearts-syllabus-link" download>
                                <div class="dept-finearts-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- MFA
                                </div>
                                <i class="fa-solid fa-download dept-finearts-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-finearts-accordion-item">
                    <div class="dept-finearts-accordion-header">
                        <div class="dept-finearts-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-finearts-chevron"></i>
                    </div>

                    <div class="dept-finearts-accordion-content">
                        <div class="dept-finearts-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-finearts-syllabus-link" download>
                                <div class="dept-finearts-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="dept-finearts-events-section" id="dept-events">

            <h2 class="dept-finearts-section-title">Events</h2>

            <div class="dept-finearts-events-box">
                <div class="dept-finearts-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
            <a href="#" class="dept-finearts-events-btn">View All</a>
          </div> -->

        </div>

        <!-- ================= ACHIEVEMENT SECTION ================= -->
        <div class="dept-finearts-achievement-section" id="dept-achievement">

            <h2 class="dept-finearts-section-title">
                Achievements
            </h2>

            <!-- Tabs -->
            <div class="dept-finearts-achievement-tabs">
                <button class="dept-achievement-tab active" data-tab="student">
                    Student Achievements
                </button>

            </div>

            <!-- Content -->
            <div class="dept-finearts-achievement-content">

                <!-- STUDENT TAB -->
                <div class="dept-achievement-pane active" id="student">

                    <div class="dept-finearts-table-responsive">
                        <table class="dept-finearts-table">
                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Name of the Student</th>
                                    <th>Competition/Activities</th>
                                    <th>Name of Organization</th>
                                    <th>Securing Position</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lobsang Wangchu</td>
                                    <td>Clay modelling</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>3rd</td>
                                    <td>39th AIU inter- university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Moiranthem Reichen Singh</td>
                                    <td>Poster Making Competition</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>2nd</td>
                                    <td>39th AIU inter- university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Niko Moasangba Aonok</td>
                                    <td>Cartooning</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>2nd</td>
                                    <td>39th AIU inter- university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>S Sarah</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>3rd</td>
                                    <td>39th AIU inter- university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ghanapriya Rajkumari</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>3rd</td>
                                    <td>39th AIU inter- university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tiyanchi Risa A Sangma</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>3rd</td>
                                    <td>39th AIU inter- university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>S Sarah</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (Sathyabama Institute of Science and Technology)</td>
                                    <td>2nd</td>
                                    <td>39th AIU inter- university National</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Ghanapriya Rajkumari</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (Sathyabama Institute of Science and Technology)</td>
                                    <td>2nd</td>
                                    <td>39th AIU inter- university National</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Tiyanchi Risa A Sangma</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>2nd</td>
                                    <td>39th AIU inter- university National</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Moiranthem Reichen Singh</td>
                                    <td>Poster Making Competition</td>
                                    <td>Association of Universities (Sathyabama Institute of Science and Technology)</td>
                                    <td>3rd</td>
                                    <td>39th AIU inter- university National</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Lobsang Wangchu</td>
                                    <td>Clay modelling</td>
                                    <td>Association of Universities (Assam Don Bosco university, Guwahati)</td>
                                    <td>2nd</td>
                                    <td>39th AIU inter- university National</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Rickyshi Suim</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>1st</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Rakuyio Ariicho</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>1st</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Rakuyio Ariicho</td>
                                    <td>Collage</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>3rd</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Rakuyio Ariicho</td>
                                    <td>On the Spot Painting</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Ruisdael Narengbab</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>1st</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Sanenti Longchari</td>
                                    <td>Poster Making Competition</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Shanessa Anneppe Nanglang</td>
                                    <td>Group Song (Western)</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>3rd</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Paimalie Chuilo</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>1st</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Paimalie Chuilo</td>
                                    <td>Clay Modeling</td>
                                    <td>Association of Universities (The ICFAI University Tripura)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university North-East Zone</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Clive Steven Kharphuli</td>
                                    <td>Art Exchange Program</td>
                                    <td>Riti Academy of Visual Arts</td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Banjamjingmut Giri Lyngdoh Mawphlang</td>
                                    <td>Ramkinkar Baij Memorial Art Camp</td>
                                    <td>Santiniketan Kala Bhavan Prantoni and Riti Academy of Visual Arts</td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Clive Steven Kharphuli</td>
                                    <td>Ramkinkar Baij Memorial Art Camp</td>
                                    <td>Santiniketan Kala Bhavan Prantoni and Riti Academy of Visual Arts</td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Rickyshi Suim</td>
                                    <td>Ramkinkar Baij Memorial Art Camp</td>
                                    <td>Santiniketan Kala Bhavan Prantoni and Riti Academy of Visual Arts</td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Rakuyio Ariicho</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Paimalie Chuilo</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Ruisdael Narengbab</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>4th</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Rickyshi Suim</td>
                                    <td>Installation Art</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Rakuyio Ariicho</td>
                                    <td>On the Spot Painting</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Sanenti Longchari</td>
                                    <td>Poster Making Competition</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>2nd</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Paimalie Chuilo</td>
                                    <td>Clay Modelling</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>4th</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Rakuyio Ariicho</td>
                                    <td>Collage</td>
                                    <td>Association of Universities (Amity University, Uttar Pradesh)</td>
                                    <td>4th</td>
                                    <td>38th AIU inter-university National</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Rajkumar Karthik Khuman</td>
                                    <td>Badminton (single-men)</td>
                                    <td>A&amp;D Solar Enterprise Pow-Wow Arena (Tento College)</td>
                                    <td>1st Runner-up</td>
                                    <td>National Level Sports Festival</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Tinamoni Rajbongshi</td>
                                    <td>Mehendi</td>
                                    <td>Vaomalan, 2025 (TISS, Guwahati)</td>
                                    <td>1st</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Tinamoni Rajbongshi</td>
                                    <td>Tote Bag Competition</td>
                                    <td>Vaomalan, 2025 (TISS, Guwahati)</td>
                                    <td>1st</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Tinamoni Rajbongshi</td>
                                    <td>Best Out of Waste</td>
                                    <td>Vaomalan, 2025 (TISS, Guwahati)</td>
                                    <td>2nd</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Niteen Anthone Xalxo</td>
                                    <td>Poster Making Competition</td>
                                    <td>Office of Student Affairs (The Assam Royal Global University)</td>
                                    <td>Runner-Up</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Shanessa Anneppe Nanglang</td>
                                    <td>Poster Making Competition</td>
                                    <td>Office of Student Affairs (The Assam Royal Global University)</td>
                                    <td>Winner</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Velin Taropi</td>
                                    <td>AIRTSC</td>
                                    <td>Guwahati School of Excellence</td>
                                    <td>Consolation</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Sneha Morang</td>
                                    <td>Art Camp</td>
                                    <td>Camel Art Foundation Utkal University of Culture, Bhubaneswar</td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Moiranthem Reichen Singh</td>
                                    <td>National Art Camp</td>
                                    <td>SSUHE (Karnataka Chitra Kala Parishad)</td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Pebam Ranibala</td>
                                    <td>Best Cover Design Award</td>
                                    <td>SECONE Society (The Assam Royal Global University)</td>
                                    <td>Winner</td>
                                    <td>NA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>



            </div>

        </div>

        <!-- <div class="dept-finearts-event-gallery-section">

          <h2 class="dept-finearts-section-title">Event <span>Highlights</span></h2>

          <div id="event-gallery-container"></div>

        </div> -->

        <div class="dept-finearts-table-section" id="dept-committee">

            <div class="dept-finearts-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-finearts-lab-section" id="dept-lab">

                <div class="dept-finearts-lab-container">

                    <h2 class="dept-finearts-section-title">Physiotherapy <span> OPD</span></h2>

                    <p class="dept-finearts-lab-intro">
                        The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                        patient. The
                        students through OPD practicals would learn how to treat patients with physical disabilities and
                        injuries in a
                        range of settings including hospitals, health centres, private practices and sports clubs under the
                        proper
                        guidance of a specialist. The OPD is located in Block-D on the ground floor.
                    </p>

                    <ol class="dept-finearts-lab-list">
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


                     <h3 class="dept-finearts-lab-heading">Our Lab Equipments</h3>

                    <h2 class="dept-finearts-section-title">Glimpse of <span>our Lab</span></h2>

                    <div class="dept-finearts-lab-gallery">

                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                            class="dept-finearts-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                            class="dept-finearts-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                            class="dept-finearts-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                            class="dept-finearts-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                            class="dept-finearts-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                            class="dept-finearts-lab-img">

                    </div>

                    <button class="dept-finearts-explore-btn">Explore</button>
                </div>

            </div> -->

    </div>


    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "Master of Fine Arts (MFA)",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-Master-of-Fine-Arts-MFA"
            },
            {
                title: "Bachelor of Fine Arts (BFA)",
                duration: "4 Years",
                link: "https://www.rgu.ac/programs-Bachelor-of-Fine-Arts-BFA"
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
        <div class="dept-finearts-course-card">

          <div class="dept-finearts-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-finearts-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-finearts-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-finearts-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-finearts-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-finearts-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-finearts-accordion-content');

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
            "An interaction session on Heritage of Guwahati, Speakers: Mr. Jayanta Sarma and Er. Dilip Changkakoty organised by RSA and RSFA on 23/04/2026",
            "IKS, The Assam Royal Global University organised a Puppetry workshop with collaboration of RSFA on 26th and 27th March 2026",
            "A programme titled 'Unmasking Identities' a powerful beginning where art transformed into a language of identity, expression, and healing. Organised by Akam Foundation in collaboration with the Royal School of Fine Arts, the event opened a meaningful space for reflection, creativity, and emotional exploration (5th and 6th March 2026)",
            "On 26th March 2026, an expert talk was conducted on 'Break the Silence, Understand Epilepsy and Empower Lives' by Dr. Akshay Bhutada.",
            "An inspiring interactive session titled 'Art and Interaction' was held at the Royal School of Fine Arts. Renowned artists Mr. Shyamal Roy Chowdhury and Ms. Somdatta Roy Chowdhury, alumni of Rabindra Bharati University, shared their creative journeys and artistic insights with students on 10/07/2025",
            "Workshop on Innovative Kinetic Sculpture Development and Commercialization on 15th -17th July 2025",
            "Salon d'Spring Art Exhibition | 13–14 May 2025",
            "On 7th November 2025, a workshop on Neurodevelopmental Technique (NDT)/Bobath was conducted by Dr. Prabhat Ranjan.",
            "Students of BFA 6th & 8th Semester from the Royal School of Fine Arts explored Khajuraho, Sanchi Stupa, and Bhimbetka Caves at Madhya Pradesh during their educational tour (March 22-29, 2025).",
            "Field study of the Students of RSFA at Hayagriva Madhava Temple site and Kedar Temple site of Hajo on 13/02/2025",
            "Mr. Dhiraj Rabha, an artist from Assam delivered a lecture on New Media art in the department of Fine Arts (RSFA) on 12/02/2025",
            "The Royal School of Fine Arts organised an Art Competition on Republic Day, 23rd January 2025",
            "19-02-2018 to 21-02-2018 | Dr. Meghali Goswami (Associate professor, History of Art, Kala Bhavana, Visva-Bharati University, Santiniketan) | Workshop of Lecture Series.",
            "18-03-2018 to 20-03-2018 | Mr. Sutanu Chatterjee (Associate professor, Sculpture Department, Kala Bhavana, Santiniketan, Kolkata) | Sculpture Workshop.",
            "08-10-2018 to 12-10-2018 | Mr. Gakul Paul (Terracotta artist of Assam) | Terracotta Workshop.",
            "06-05-2019 | Prof. (Dr.) Nirmal Kanti Roy (Dean, Visual Arts Department, Assam University, Silchar) | Guest Speaker.",
            "15-06-2020 | Mr. Amitabh Sen Gupta (Eminent contemporary artist, Former Head of Visual Arts at University of Port Harcourt, Nigeria) | Webinar on 'Love to see, don't understand: Crisis in education on art'.",
            "19-06-2020 | Dr. Sekhar Chandra Joshi (Professor and Dean, Faculty of Visual Arts, Kumaun University) | Webinar on 'Pandemic Crisis - Role of Art and Artificial Intelligence'.",
            "15-05-2023 | Prof. D.K. Nayak (Professor, Department of Geography, North-East Hill University) | Invited Talk.",
            "22-09-2023 | Prof. (Dr.) Sunando Bandhyopadhyay (Department of Geography, University of Calcutta) | Guest Lecture.",
            "02-11-2023 | Dr. Hirak Ranjan Das (Deputy Director, Innovation Incubation and Entrepreneurship, The Assam Royal Global University) | Guest Lecture.",
            "04-11-2023 | Prof. Vishwambhar Prasad Sati (Senior Professor, Department of Geography and Resource Management, Mizoram University) | Invited Talk.",
            "21-11-2023 | Prof. Milap Chand Sharma (CSRD, JNU, New Delhi) | Invited Talk.",
            "18-09-2024 | Prof. Niladri Sekhar Dash (Professor, Linguistic Research Unit, Indian Statistical Institute, Kolkata) | Invited Talk.",
            "09-10-2024 | Prof. H.S. Sharma (Professor, Department of Geography, North-Eastern Hill University, Shillong) | Guest Lecture.",
            "20-11-2024 | Prof. P.K. Sikdar (Professor, Indian Institute of Remote Sensing, Dehradun) | Invited Talk.",
            "21-01-2025 | Prof. Padmini Pani (Professor, CSRD, JNU, New Delhi) | Invited Talk.",
            "22-01-2025 | Prof. Bhola Nath Ghosh (Professor, Department of Humanities and Social Sciences, IIT Kharagpur) | Invited Talk.",
            "22-01-2025 | Prof. Dinesh Kumar (Professor, CSRD, JNU, New Delhi) | Invited Talk.",
            "22-01-2025 | Prof. Naorem Sanatomba Singh (Professor, Department of Geography, Manipur University) | Invited Talk.",
            "22-01-2025 | Prof. Dilip Kumar Shaw (Professor, Department of Geography, University of Calcutta) | Invited Talk.",
            "23-01-2025 | Prof. Mohit Kumar Ray (Professor, Department of Geography, The University of Burdwan) | Invited Talk.",
            "23-01-2025 | Prof. Ajay Mandal (Professor, Department of Geology & Geophysics, IIT(ISM) Dhanbad) | Invited Talk.",
            "23-01-2025 | Prof. Anuradha Banerjee (Professor, CSRD, JNU, New Delhi) | Invited Talk.",
            "23-01-2025 | Prof. Hiranmayee Bhattacharya (Professor, Department of Geography, University of Calcutta) | Invited Talk.",
            "23-01-2025 | Prof. L. R. Singh (Professor, Department of Geography, Banaras Hindu University) | Invited Talk.",
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
        <div class="dept-finearts-event-item">
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
                    ["1", "Chairperson (Ex-Officio) Dean of School",
                        "Prof Hari Prasad Agarwal, Dean-RSFA/RSD/RSFT/RSA"
                    ],

                    ["2", "All Heads of the Departments - Members (Ex-Officio)",
                        "Dr. Sumanta Dutta Chowdhury, Assistant Professor and Co-ordinator, RSFA"
                    ],
                    ["3", "External Experts for each Department (Academic)",
                        "Mr. Jnanendra Barkakati, Retd. Exhibition Officer, State Govt. Cultural Affairs Department."
                    ],
                    ["4", "External Experts for each Department (Industry)",
                        "Mr. Naba Pratim Das, Artist, Illustrator, Aarnyak, ASTEC, Banalata, Assam."
                    ],
                    ["5", "Two Faculty members of the School nominated by the Vice Chancellor",
                        "Dr. Sumanta Dutta Chowdhury, Assistant Professor, RSFA"
                    ],
                    ["", "", "Mr. Kishan Bagdi, Assistant Professor, RSFA"],
                    ["6", "Registrar, Member Secretary (Ex-officio)", "Dr. Dip Narayain Singh or his nominee"],

                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
                rows: [
                    ["1", "Head of the Department", "Prof. Hari Prasad Agarwal", "Professor", "Chairperson"],
                    ["2", "Two Professors, including the Dean of the School", "Prof. (Dr.) Tikendra Kumar Sahu",
                        "Professor ", "Member"
                    ],
                    ["", "", "", "", ""],
                    ["3", "Two Associate Professors – one of them will be the member secretary", "Dr. Mousumi Deka",
                        "Associate Professor", "Member"
                    ],
                    ["", "", "", "", ""],
                    ["4", "Two Assistant Professors holding Ph.D. degree", "Dr. Sumanta Dutta Chowdhury",
                        "Assistant Professor", "Member"
                    ],
                    ["", "", "", "", ""],
                    ["5",
                        "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC ",
                        "Prof. (Dr.) Nirmal Kanti Roy",
                        "Professor, Visual Arts Department, Assam University, Silchar", "Member"
                    ],
                    ["", "", "", "", ""],
                    ["", "", "", "", ""],
                    ["", "", "", "", ""]


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
        <div class="dept-finearts-table-responsive">
          <table class="dept-finearts-table">
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
        <div class="dept-finearts-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-finearts-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-finearts-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-finearts-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-finearts-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-finearts-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-finearts-table-content");
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
      <div class="dept-finearts-event-card">

        <div class="dept-finearts-event-title">
          ${event.title}
        </div>

        <div class="dept-finearts-marquee">
          <div class="dept-finearts-marquee-track">
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
