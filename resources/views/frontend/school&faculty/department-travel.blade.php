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

        .dept-rsttm-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-rsttm-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-rsttm-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-rsttm-heading h1 span {
            color: var(--accent);
        }

        .dept-rsttm-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-rsttm-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-rsttm-img {
            flex: 1;
            position: relative;
        }

        .dept-rsttm-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-rsttm-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-rsttm-content {
            flex: 1;
        }

        .dept-rsttm-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-rsttm-content h3 span {
            color: var(--accent);
        }

        .dept-rsttm-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-rsttm-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-rsttm-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-rsttm-float-item {
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

        .dept-rsttm-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-rsttm-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-rsttm-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-rsttm-float-item:hover i {
            color: #fff;
        }

        .dept-rsttm-float-item:hover .dept-rsttm-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-rsttm-admission-btn {
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

        .dept-rsttm-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-rsttm-admission-btn:hover {
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
            .dept-rsttm-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-rsttm-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-rsttm-img img {
                padding-left: 0%;
            }

            .dept-rsttm-floating {
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

            .dept-rsttm-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-rsttm-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-rsttm-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-rsttm-float-item:active i {
                color: var(--primary);
            }

            .dept-rsttm-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-rsttm-admission-btn {
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
            .dept-rsttm-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-rsttm-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-rsttm-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-rsttm-section-title span {
            color: var(--accent);
        }

        .dept-rsttm-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-rsttm-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-rsttm-course-header {
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
        .dept-rsttm-course-header::after {
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
        .dept-rsttm-view-btn {
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

        .dept-rsttm-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-rsttm-course-body {
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
            .dept-rsttm-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-rsttm-img img {
                padding-left: 0%;
            }

            .dept-rsttm-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-rsttm-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-rsttm-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-rsttm-prospects-content {
                padding: 25px 20px;
            }


            .dept-rsttm-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-rsttm-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-rsttm-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-rsttm-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-rsttm-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-rsttm-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-rsttm-list li {
            margin-bottom: 12px;
        }

        .dept-rsttm-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-rsttm-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-rsttm-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-rsttm-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-rsttm-accordion-header {
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

        .dept-rsttm-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-rsttm-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-rsttm-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-rsttm-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-rsttm-accordion-item.active .dept-rsttm-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-rsttm-accordion-item.active .dept-rsttm-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-rsttm-accordion-item.active .dept-rsttm-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-rsttm-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-rsttm-syllabus-link {
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

        .dept-rsttm-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-rsttm-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-rsttm-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-rsttm-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-rsttm-syllabus-link:hover .dept-rsttm-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-rsttm-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-rsttm-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-rsttm-lab-container {
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

        .dept-rsttm-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-rsttm-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-rsttm-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-rsttm-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-rsttm-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-rsttm-explore-btn {
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

        .dept-rsttm-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-rsttm-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-rsttm-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-rsttm-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-rsttm-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-rsttm-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-rsttm-bullet-list li::before {
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

        /* ================= EVENT GALLERY ACCORDION ================= */

        .dept-rsttm-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD */
        .dept-rsttm-event-acc-item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* HEADER */
        .dept-rsttm-event-acc-header {
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
        .dept-rsttm-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-rsttm-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* ACTIVE */
        .dept-rsttm-event-acc-item.active .dept-rsttm-event-acc-content {
            padding: 20px;
        }

        .dept-rsttm-event-acc-item.active .dept-rsttm-event-acc-header i {
            transform: rotate(180deg);
        }

        /* IMAGE */
        .dept-rsttm-event-img {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-rsttm-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        .dept-rsttm-event-list {
            padding-left: 20px;
            margin-bottom: 15px;
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        .dept-rsttm-event-list li {
            margin-bottom: 6px;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-rsttm-event-img img {
                height: 220px;
            }
        }

        /* ================= TABLE LIST SECTION ================= */
        .dept-rsttm-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-rsttm-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-rsttm-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-rsttm-table-header {
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
        .dept-rsttm-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-rsttm-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-rsttm-table-acc.active .dept-rsttm-table-content {
            padding: 20px;
        }

        .dept-rsttm-table-acc.active .dept-rsttm-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-rsttm-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-rsttm-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-rsttm-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-rsttm-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-rsttm-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-rsttm-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-rsttm-table td,
        .dept-rsttm-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (SINGLE IMAGE) ================= */

        .dept-rsttm-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rsttm-event-container {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* CARD */
        .dept-rsttm-event-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            transition: var(--transition);
        }

        .dept-rsttm-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(44, 74, 122, 0.12);
        }

        /* TITLE */
        .dept-rsttm-event-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--primary);
            padding: 20px 25px;
            line-height: 1.7;
        }

        /* IMAGE WRAPPER */
        .dept-rsttm-event-img {
            width: 100%;
            overflow: hidden;
        }

        /* IMAGE */
        .dept-rsttm-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        /* HOVER EFFECT */
        .dept-rsttm-event-card:hover img {
            transform: scale(1.03);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {
            .dept-rsttm-event-title {
                font-size: 1rem;
                padding: 15px;
            }

            .dept-rsttm-event-img img {
                height: 220px;
            }
        }



        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-rsttm-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-rsttm-achievement-tabs {
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
        .dept-rsttm-achievement-content {
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
        .dept-rsttm-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rsttm-recognition-container {
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
        .dept-rsttm-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-rsttm-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-rsttm-recognition-content {
            flex: 2;
        }

        .dept-rsttm-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-rsttm-recognition-btn {
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

        .dept-rsttm-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-rsttm-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-rsttm-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-rsttm-recognition-content p {
                text-align: center;
            }

            .dept-rsttm-recognition-btn {
                justify-content: center;
            }
        }

        .dept-rsttm-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-rsttm-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

    <style>
        /* ================= EVENTS SECTION ================= */
        .dept-rsttm-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rsttm-events-box {
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
        .dept-rsttm-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 20s linear infinite;
        }

        .dept-rsttm-events-box:hover .dept-rsttm-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-rsttm-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-rsttm-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-rsttm-events-btn:hover {
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
    </style>

    <style>
        /* ================= COPY EVENT ACCORDION ================= */

        .dept-rsttm-event-gallery-section-copy {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Title */
        .dept-rsttm-section-title-copy {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 3vw;
        }

        .dept-rsttm-section-title-copy span {
            color: var(--accent);
        }

        /* Accordion wrapper */
        .dept-rsttm-event-accordion-copy {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Card */
        .dept-rsttm-event-acc-item-copy {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* Header */
        .dept-rsttm-event-acc-header-copy {
            padding: 18px 22px;
            cursor: pointer;
            font-size: 1.05rem;
            font-weight: 500;
            color: var(--primary);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Icon */
        .dept-rsttm-event-acc-header-copy i {
            transition: 0.3s;
        }

        /* Content */
        .dept-rsttm-event-acc-content-copy {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* Active state */
        .dept-rsttm-event-acc-item-copy.active-copy .dept-rsttm-event-acc-content-copy {
            padding: 20px;
        }

        .dept-rsttm-event-acc-item-copy.active-copy .dept-rsttm-event-acc-header-copy i {
            transform: rotate(180deg);
        }

        /* Image */
        .dept-rsttm-event-img-copy {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-rsttm-event-img-copy img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* List */
        .dept-rsttm-event-list-copy {
            padding-left: 20px;
            margin-bottom: 15px;
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        .dept-rsttm-event-list-copy li {
            margin-bottom: 6px;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-rsttm-event-img-copy img {
                height: 220px;
            }
        }
    </style>

    <div class="dept-rsttm-floating">
        <a href="#dept-home" class="dept-rsttm-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-rsttm-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-rsttm-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-rsttm-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-rsttm-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-rsttm-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-rsttm-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-rsttm-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-rsttm-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-rsttm-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-rsttm-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-rsttm-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-rsttm-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-rsttm-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-rsttm-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-rsttm-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-rsttm-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-rsttm-wrapper">

        <div class="dept-rsttm-heading" id="dept-home">
            <h1>Department of <span>Travel & Tourism Management</span></h1>
            <h2>Royal School of Travel & Tourism Management (RSTTM)</h2>
        </div>

        <div class="dept-rsttm-hero" id="dept-about">

            <div class="dept-rsttm-img">
                <img src="mobile-assets/new-dept-rshm-ttm/headimg-rsttm.png" alt="Royal School of Travel & Tourism">
            </div>

            <div class="dept-rsttm-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Travel and Tourism at The Assam Royal Global University Guwahati, stands at the
                    forefront of fostering innovative and comprehensive education in the dynamic field of travel and
                    tourism. Our curriculum is meticulously designed to equip students with a robust understanding of
                    global tourism system, sustainable practices, and cutting-edge technological applications in travel
                    management. With a strong emphasis on experiential learning, students benefit from industry
                    partnerships, internships, and global exposure, ensuring they are well-prepared to meet the demands
                    of the tourism industry. Our students emerge as highly skilled professionals ready to excel in
                    diverse roles such as tour operators, travel consultants, tourism managers and allied services. The
                    department's commitment to research and development in sustainable tourism practices positions our
                    students to contribute significantly to the industry's growth and sustainability.
                </p>

            </div>

        </div>

        <!-- vision mission  -->
        <div class="dept-rsttm-prospects-section" id="dept-vision">
            <h2 class="dept-rsttm-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-rsttm-prospects-content">

                <h3 class="dept-rsttm-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-rsttm-bullet-list">
                    <li>
                        To provide integrated opportunities both nationally and internationally, fostering the
                        development of global citizens. We aspire to develop future leaders who will transform the
                        travel and tourism industry through their expertise, creativity, and commitment to excellence.
                    </li>

                </ul>

                <h3 class="dept-rsttm-subheading">Our Mission</h3>
                <ul class="dept-rsttm-bullet-list">

                    <li>
                        To empower exploration, foster cultural exchange and shaping the future of travel with a goal to
                        prepare dynamic professionals for the global hospitality industry through collaborative
                        partnerships, interdisciplinary research, and experiential education, who will enrich lives,
                        foster connections, and contribute positively to the global travel landscape.
                    </li>
                    <li>
                        To focus on experiential learning, sustainable practices, and innovative technology thereby
                        equip our students with the skills, knowledge and mindset to thrive in diverse roles within the
                        travel and tourism sector.
                    </li>
                    <li>
                        To give back leaders to the society grounded with a commitment to responsible travel, cultural
                        appreciation, and community engagement, who will champion authenticity, inclusivity, and ethical
                        stewardship in their endeavors.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-rsttm-courses-section" id="dept-courses">
            <h2 class="dept-rsttm-section-title">Courses <span>Offered</span></h2>

            <div class="dept-rsttm-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-rsttm-prospects-section" id="dept-prospects">
          <h2 class="dept-rsttm-section-title">Career <span>Prospects</span></h2>

          <div class="dept-rsttm-prospects-content">
            <p class="dept-rsttm-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-rsttm-subheading">Higher Education Opportunities</h3>
            <ol class="dept-rsttm-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-rsttm-subheading">Government Sector Jobs</h3>
            <ol class="dept-rsttm-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-rsttm-subheading">Private Sector Careers</h3>
            <ol class="dept-rsttm-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-rsttm-subheading">Research & Teaching</h3>
            <ol class="dept-rsttm-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-rsttm-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-rsttm-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-rsttm-subheading">Jobs Abroad</h3>
            <ol class="dept-rsttm-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-rsttm-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-rsttm-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-rsttm-accordion-section" id="dept-syllabus">
            <h2 class="dept-rsttm-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-rsttm-accordion-wrapper">

                <div class="dept-rsttm-accordion-item active">
                    <div class="dept-rsttm-accordion-header">
                        <div class="dept-rsttm-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rsttm-chevron"></i>
                    </div>

                    <div class="dept-rsttm-accordion-content">
                        <div class="dept-rsttm-syllabus-list">
                            <!-- <h3>Political Science</h3> -->
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSTTM/BA-BSC%20Travel%20&%20Tourism%20Management.pdf"
                                class="dept-rsttm-syllabus-link">
                                <div class="dept-rsttm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- B.Sc./BA -- Travel & Tourism
                                </div>
                                <i class="fa-solid fa-download dept-rsttm-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-rsttm-accordion-item">
                    <div class="dept-rsttm-accordion-header">
                        <div class="dept-rsttm-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rsttm-chevron"></i>
                    </div>

                    <div class="dept-rsttm-accordion-content">
                        <div class="dept-rsttm-syllabus-list">
                            <!-- <h3>Political Science</h3> -->
                            <a target="_blank" href="https://www.rgu.ac/mobile-assets/syllabus/RSTTM/MTTM%20Syllabus.pdf"
                                class="dept-rsttm-syllabus-link">
                                <div class="dept-rsttm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- MTTM
                                </div>
                                <i class="fa-solid fa-download dept-rsttm-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-rsttm-accordion-item">
                    <div class="dept-rsttm-accordion-header">
                        <div class="dept-rsttm-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rsttm-chevron"></i>
                    </div>

                    <div class="dept-rsttm-accordion-content">
                        <div class="dept-rsttm-syllabus-list">
                            <a target="_blank" href="https://www.rgu.ac/phd" class="dept-rsttm-syllabus-link">
                                <div class="dept-rsttm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-rsttm-events-section" id="dept-events">

            <h2 class="dept-rsttm-section-title">Events</h2>

            <div class="dept-rsttm-events-box">
                <div class="dept-rsttm-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
            <a href="#" class="dept-rsttm-events-btn">View All</a>
          </div> -->

        </div>

        <div class="dept-rsttm-event-gallery-section" id="dept-events">

            <h2 class="dept-rsttm-section-title">
                Awards and Achievements of <span>Faculty Members (RSHM/RSTTM)</span>
            </h2>

            <div class="dept-rsttm-event-accordion" id="event-gallery-container"></div>

        </div>

        <div class="dept-rsttm-event-gallery-section-copy" id="dept-events-copy">

            <h2 class="dept-rsttm-section-title-copy">
                Student <span>Achievements</span>
            </h2>

            <div class="dept-rsttm-event-accordion-copy" id="event-gallery-container-copy"></div>

        </div>

        <div class="dept-rsttm-table-section" id="dept-committee">

            <div class="dept-rsttm-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-rsttm-lab-section" id="dept-lab">

                <div class="dept-rsttm-lab-container">

                    <h2 class="dept-rsttm-section-title">Physiotherapy <span> OPD</span></h2>

                    <p class="dept-rsttm-lab-intro">
                        The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                        patient. The
                        students through OPD practicals would learn how to treat patients with physical disabilities and
                        injuries in a
                        range of settings including hospitals, health centres, private practices and sports clubs under the
                        proper
                        guidance of a specialist. The OPD is located in Block-D on the ground floor.
                    </p>

                    <ol class="dept-rsttm-lab-list">
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


                     <h3 class="dept-rsttm-lab-heading">Our Lab Equipments</h3>

                    <h2 class="dept-rsttm-section-title">Glimpse of <span>our Lab</span></h2>

                    <div class="dept-rsttm-lab-gallery">

                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                            class="dept-rsttm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                            class="dept-rsttm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                            class="dept-rsttm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                            class="dept-rsttm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                            class="dept-rsttm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                            class="dept-rsttm-lab-img">

                    </div>

                    <button class="dept-rsttm-explore-btn">Explore</button>
                </div>

            </div> -->

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "Master of Travel & Tourism Management – MTTM",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-Master-Travel&Tourism"
            },
            {
                title: "B.Sc./B.A. Travel & Tourism Management",
                duration: "3/ 3+1 years",
                link: "https://www.rgu.ac/programs-b-sc-ba-travel"
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
        <div class="dept-rsttm-course-card">

          <div class="dept-rsttm-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-rsttm-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-rsttm-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-rsttm-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-rsttm-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-rsttm-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-rsttm-accordion-content');

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
            "On 26th May 2023, Dr. Sanjeev Kumar Saxena, Dr. Mridul Dutta, and Dr. Shapana Medhi conducted a session on 'Tourism and North East India: The Way Forward'.",
            "On 21st November 2022, Mr. Anjan Choudhary conducted a session on 'Soft Skill, Personality Development & Grooming'.",
            "On 20th October 2022, Mr. Chandan Nath conducted a session on 'Tourism Entrepreneurship – A Way Forward for the New Generation'.",
            "On 13th September 2022, Mr. Udit Bhanu Barthakur conducted a Tourism Awareness Program on 'Rethinking Tourism'.",
            "On 31st May 2022, Prof. S.C. Bagri conducted a webinar on 'The Employability Factors for the Hospitality Industry'.",
            "On 12th May 2022, Mr. Anirban Goswami conducted a skill enhancement session on 'Culinary Knowledge'.",
            "On 27th September 2021, Mr. Chandan Nath conducted a webinar on 'World Tourism Day 2021: Tourism for Inclusive Growth'.",
            "On 20th February 2020, Prof. Shiela Bora conducted an interactive session on tourism with special focus on homestay."
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
        <div class="dept-rsttm-event-item">
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
                        "Dr. Soumita Sen, Professor and Dean, RSHM & RSTTM"
                    ],

                    ["2", "All Heads of the Departments - Members (Ex-Officio)",
                        "Dr. Indrajit Dutta, Assistant Professor and Co-ordinator, RSHM & RSTTM"
                    ],

                    ["3", "Professors of the School Members (Ex-Officio)", ""],

                    ["4", "External Experts for each Department (Academic)",
                        "Dr. Saurabh Kumar Dixit, Associate Professor/Registrar i.c, Department of Tourism & Hotel Management, NEHU"
                    ],

                    ["5", "External Experts for each Department (Industry)",
                        "Mr. Nirmalaya Choudhury, Executive Director Operation Jungle Travels, Guwahati / Mr. Jayanta Das (Cluster General Manager Northeast, Darjeeling, and General Manager Vivanta Guwahati)"
                    ],

                    ["6", "Two Faculty members of the School nominated by the Vice Chancellor",
                        "Mr. Chandan Bezborah, Lecturer, RSHM & RSTTM / Ms. Ankita Saikia, Assistant Professor, RSHM & RSTTM"
                    ],

                    ["7", "Registrar, Member Secretary (Ex-officio)", "Dr. D N Singh, Registrar or his nominee"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
                rows: [
                    ["1", "Head of the Department", "Dr. Syed Islam", "HOD, RSTTM", "Chairperson"],

                    ["2", "Two Professors", "Prof. (Dr.) Soumitra Sen", "Professor", "Member"],
                    ["2", "Two Professors", "Prof. (Dr.) Mahesh Uniyal", "Dean, RSHM & RSTTM", "Member"],

                    ["3", "Two Associate Professors – one of them will be the member secretary",
                        "Dr. Indrajit Dutta", "Associate Professor", "Member Secretary"
                    ],

                    ["4",
                        "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC",
                        "Prof. (Dr.) B. S Mipun", "Dean, RSEES", "External Member"
                    ],
                    ["", "", "Prof. (Dr.) Bhuban Chandra Barooah", "Dean, RSLA", "External Member"],
                    ["", "", "Prof. (Dr.) George", "Dean, RSB", "External Member"]
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
        <div class="dept-rsttm-table-responsive">
          <table class="dept-rsttm-table">
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
        <div class="dept-rsttm-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-rsttm-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-rsttm-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-rsttm-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-rsttm-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-rsttm-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-rsttm-table-content");
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
                    heading: "DR. AJEET KR. SINGH",
                    points: [
                        "Invited as a Keynote speaker for the 10th International Conference on Advanced Technologies and Innovations in Tourism and Hospitality Industry 2025 organized by Swami Vivekanand Subharti University, Meerut, held on 6th and 7th December 2025.",
                        "Invited as a Keynote speaker for the International Conference on “Redefining Hospitality: Sustainability and Innovation for an Inclusive, Resilient Future” organized by Nipuniya College of Hotel Management, Kerala, held on 2nd February 2026.",
                        "Invited as a resource person for a guest speech at the 16th India International Hotel, Travel and Tourism Research Conference titled “Healing Horizons: Integrating Spiritual Tourism and Indian Hospitality for Global Peace,” organized by Banarsidas Chandiwala Institute of Hotel Management and Catering Technology on 5th March 2026.",
                        "Invited as an Advisor for the International Conference “TRISHIL-26: Tourism Research, Innovation & Sustainability for Hospitality Industry & Learning,” organized by the School of Hotel Management and Tourism, Dev Bhoomi Uttarakhand University, Dehradun, held online on 27–28 March 2026.",
                        "Participated in a two-day National Seminar on “Multi-Faceted Approaches to Driving Inclusive Rural Development,” organized by Government College Una and sponsored by ICSSR North West Regional Centre, Panjab University, Chandigarh."
                    ],
                    image: "mobile-assets/new-dept-rsttm-ttm/events/e1/1.jpg"
                },
                {
                    heading: "DR. INDRAJIT DUTTA",
                    points: [
                        "Attended a Faculty Development Programme on “Mastering Student Engagement: Innovative Pedagogical Techniques,” organized by the School of Hotel Management & Tourism, Desh Bhagat University, Punjab, held from 13th to 17th January 2026.",
                        "Presented a paper titled “Voices from the Highlands: Community-Led Tourism and Indigenous Development among the Gompa Tribe of Tawang” at the ICSSR-sponsored National Conference “Samunnati,” organized by the Department of Commerce, The Assam Royal Global University, Guwahati, held on 7th January 2026."
                    ],
                },
                {
                    heading: "DR. SUPRIYA SIKARI",
                    points: [
                        "Received the Naari Shakti Award for Best Academician under the Global Iconic Women Award 2026.",
                        "Attended the ATAL Faculty Development Programme titled “Data Insights Unlocked: FDP on Research Methodology in Data Mining and Analytics,” held from 28th July to 2nd August 2025.",
                        "Attended a five-day Faculty Development Programme on “Research Development and Academic Writing,” organized by the Department of Management Science, MCKV Institute of Engineering, Liluah.",
                        "Attended a Faculty Development Programme organized by Amity School of Hospitality, Kolkata, on the topic “Curriculum Innovation: Bridging the Gap Between Hospitality Industry & Academia.”",
                        "Presented a paper at the Third International Tourism & Hospitality Conference 2025 (ITHC 2025), organized by NSHM, Durgapur.",
                        "Presented a paper at the 16th India International Hotel, Travel and Tourism Research Conference titled “Healing Horizons: Integrating Spiritual Tourism & Indian Hospitality for Global Peace,” organized by Banarsidas Chandiwala Institute of Hotel Management & Catering Technology."
                    ],
                    image: "mobile-assets/new-dept-rsttm-ttm/events/e2/1.jpg"
                },
                {
                    heading: "DR. PIYUSH GUPTA",
                    points: [
                        "Attended a five-day Faculty Development Programme on “Systematic Approach to Research Paper Writing,” organized by the Research Foundation of India.",
                        "Attended “Culinary Heritage and Festivals,” organized by the ITSA Amity Regional Conference for Asia 2025.",
                        "Attended “Tribal Gastronomy & Health Tourism,” organized by DSPSR.",
                        "Attended “Waste Management in Food Establishments,” organized by The Assam Royal Global University."
                    ],
                },
                {
                    heading: "DR. PRABAHAN PUZARI",
                    points: [
                        "Secured 1st Runner-Up position for Best Research Presentation Award at Parul University.",
                        "Received the Best Faculty for Placement Assistance Award in Tourism.",
                        "Invited as a keynote speaker in an online seminar organized by the School of Hospitality and Tourism Studies, DY Patil University, Navi Mumbai.",
                        "Invited as a keynote speaker in an online seminar hosted by Riya Institute of Tourism and Hospitality, Mumbai.",
                        "Invited as a keynote speaker for a seminar on the prospects of tourism, organized by Jagannath Barooah University, Jorhat.",
                        "Invited as a keynote speaker to a webinar hosted by Global Group of Institutions, Haldia, West Bengal.",
                        "Invited as a panel member at the Times of India Education Conclave, hosted by Byatikram Masdo.",
                        "Invited as a panel member to speak on the importance of Muga Silk and Mekhela Sador in tourism of Assam at the International Women’s Day event, hosted by the Times of India in association with Byatikram Masdo.",
                        "Invited as a keynote speaker at the online International FDP “Innovative Practices in Hospitality and Tourism,” organized by AAFT School of Hospitality and Tourism, New Delhi.",
                        "Invited as a keynote speaker for the National Workshop on Tourism Entrepreneurship and Startup Opportunities, organized by the Department of Hospitality and Tourism Management, Assam University, Silchar.",
                        "Received a certificate of paper presentation at the 16th India International Hotel, Travel and Tourism Research Conference 2026, organized by Banarsidas Chandiwala Institute of Hotel Management and Catering Technology, New Delhi.",
                        "Received a certificate of paper presentation at the International Tourism and Hospitality Conference 2025, organized by NSHM, Durgapur.",
                        "Received a certificate of paper presentation at the Conference on Promoting Responsible Tourism Through Regenerative Tourism Practices 2025, hosted by BIT Mesra, Jharkhand.",
                        "Received a certificate of paper presentation at the 3rd Asian Tourism Research Conference, hosted by Christ University, Bengaluru.",
                        "Received a certificate of paper presentation at the International Conference on Hospitality and Tourism (ICHT), organized by Jagran Lakecity University, Bhopal, Madhya Pradesh.",
                        "Awarded Lifetime Membership of the Indian Tourism and Hospitality Congress."
                    ],
                    image: "mobile-assets/new-dept-rsttm-ttm/events/e3/1.jpg"
                },
                {
                    heading: "DR. SYED SAJIDUL ISLAM",
                    points: [
                        "Paper presented at SMART-MET 2026 International Conference on Tourism, organized by Amity University, Tashkent (Uzbekistan)"
                    ],
                },
                {
                    heading: "MR. DIKHYANT RATH",
                    points: [
                        "Attended FDP on Qualitative Research in the Digital Era organised by RGU.",
                        "Attended the seminar of Embracing Diversity, Equity, and Inclusivity in Tourism and Hospitality Sector: Viksit Bharat@2047 organised by Mizoram University in 2025."
                    ],
                },
                {
                    heading: "MS. ANGSHUMI GOSWAMI",
                    points: [
                        "Attended the seminar Embracing Diversity, Equity, and Inclusivity in Tourism and Hospitality Sector: Viksit Bharat@2047, organised by Mizoram University from November 19-21, 2025."
                    ],
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
            <div class="dept-rsttm-event-acc-item">

                <!-- HEADER -->
                <div class="dept-rsttm-event-acc-header">
                    <span>${event.heading}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <!-- CONTENT -->
                <div class="dept-rsttm-event-acc-content">

                    <!-- BULLET LIST -->
                    ${event.points && event.points.length > 0 ? `
                            <ul class="dept-rsttm-event-list">
                                ${event.points.map(point => `<li>${point}</li>`).join("")}
                            </ul>
                        ` : ""}

                    <!-- IMAGE -->
                    ${event.image ? `
                            <div class="dept-rsttm-event-img">
                                <img src="${event.image}" alt="event image">
                            </div>
                        ` : ""}

                </div>

            </div>
        `).join("");

                eventGalleryContainer.innerHTML = html;
            }

            /* ================= ACCORDION LOGIC ================= */
            function initAccordion() {

                const items = eventGalleryContainer.querySelectorAll(".dept-rsttm-event-acc-item");

                items.forEach(item => {

                    const header = item.querySelector(".dept-rsttm-event-acc-header");
                    const content = item.querySelector(".dept-rsttm-event-acc-content");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active");
                            const c = i.querySelector(".dept-rsttm-event-acc-content");
                            if (c) c.style.maxHeight = 0;
                        });

                        // Open clicked
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

    <script>
        (function() {

            /* ================= EVENT DATA ================= */
            const eventGalleryDataCopy = [{
                    heading: "NATALIYA KIM MERCY, BTTM",
                    points: [
                        "2nd position in Tug of War at Varsity Week 2026.",
                        "Semester topper scholarships 2025, 2024, 2023."
                    ],
                    image: "mobile-assets/new-dept-rsttm-ttm/student-ach/e1/1.jpg"
                },
                {
                    heading: "ASHOK KR. GOGOI, MTTM",
                    points: [
                        "2nd position in Bhaona Monologue Competition in 2024."
                    ]

                },
                {
                    heading: "KENNONG TALOH, MTTM",
                    points: [
                        "Second Semester Topper Scholarship 2025."
                    ]
                },
                {
                    heading: "NEEKITA DAOLAGUPU, Ph.D. pursuing",
                    points: [
                        "Selected for National Fellowship in 2025 for Higher Education of ST students."
                    ]
                },
                {
                    heading: "CHRISTOPHER THOMAS, BTTM",
                    points: [
                        "4th Semester Topper Scholarship in 2025."
                    ],
                    image: "mobile-assets/new-dept-rsttm-ttm/student-ach/e2/1.jpg"
                },
                {
                    heading: "SIMI KHAKLARY, MTTM",
                    points: [
                        "Korean SME’s Street Fair participation hosted by Embassy of the Republic of Korea in 2025.",
                        "Participation at Nex-us All India K-POP contest."
                    ]
                },
                {
                    heading: "CYOLYNE LAMARE, BHM",
                    points: [
                        "Certification for participation in Mocktail Workshop in 2025, hosted by Royal Global University."
                    ]
                },
                {
                    heading: "BAIAHUNLANG KHARMYNDAL, BHM",
                    points: [
                        "Certification for participation in Mocktail Workshop in 2025, hosted by Royal Global University."
                    ]
                },

                {
                    heading: "MRITIKA MAHIMA BARUAH, MTTM (passed out)",
                    points: [
                        "Dean’s List Award 2023–24.",
                        "Gold Medalist.",
                        "UGC NET 2025."
                    ],
                    image: "mobile-assets/new-dept-rsttm-ttm/student-ach/e3/1.jpg"
                },
                {
                    heading: "ANURUPA DEBNATH, BTTM",
                    points: [
                        "2nd position at District Level Cultural Competition 2023 in Hojai.",
                        "Distinction in Rabindra Natyan (honoured with Nrityamani Award 2023).",
                        "2nd position in Ethnic Group Dance Competition 2023, hosted by Cultural Affairs Department, Govt. of Assam."
                    ]
                }
            ];

            /* ================= GET CONTAINER ================= */
            const eventGalleryContainerCopy = document.getElementById("event-gallery-container-copy");

            if (!eventGalleryContainerCopy) return;

            /* ================= RENDER FUNCTION ================= */
            function renderEventGalleryCopy() {

                if (!eventGalleryDataCopy || eventGalleryDataCopy.length === 0) {
                    eventGalleryContainerCopy.innerHTML = `
                <p style="text-align:center; color:#556b8d;">
                    No data available.
                </p>
            `;
                    return;
                }

                const html = eventGalleryDataCopy.map(event => `
            <div class="dept-rsttm-event-acc-item-copy">

                <!-- HEADER -->
                <div class="dept-rsttm-event-acc-header-copy">
                    <span>${event.heading}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <!-- CONTENT -->
                <div class="dept-rsttm-event-acc-content-copy">

                    ${event.points && event.points.length > 0 ? `
                            <ul class="dept-rsttm-event-list-copy">
                                ${event.points.map(point => `<li>${point}</li>`).join("")}
                            </ul>
                        ` : ""}

                    ${event.image ? `
                            <div class="dept-rsttm-event-img-copy">
                                <img src="${event.image}" alt="event image">
                            </div>
                        ` : ""}

                </div>

            </div>
        `).join("");

                eventGalleryContainerCopy.innerHTML = html;
            }

            /* ================= ACCORDION ================= */
            function initAccordionCopy() {

                const items = eventGalleryContainerCopy.querySelectorAll(".dept-rsttm-event-acc-item-copy");

                items.forEach(item => {

                    const header = item.querySelector(".dept-rsttm-event-acc-header-copy");
                    const content = item.querySelector(".dept-rsttm-event-acc-content-copy");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active-copy");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active-copy");
                            const c = i.querySelector(".dept-rsttm-event-acc-content-copy");
                            if (c) c.style.maxHeight = 0;
                        });

                        // Open clicked
                        if (!isActive) {
                            item.classList.add("active-copy");
                            content.style.maxHeight = content.scrollHeight + "px";
                        }

                    });

                });
            }

            /* ================= INIT ================= */
            renderEventGalleryCopy();
            initAccordionCopy();

        })();
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
