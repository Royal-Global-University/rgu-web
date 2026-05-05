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

        .dept-rshm-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-rshm-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-rshm-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-rshm-heading h1 span {
            color: var(--accent);
        }

        .dept-rshm-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-rshm-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-rshm-img {
            flex: 1;
            position: relative;
        }

        .dept-rshm-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-rshm-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-rshm-content {
            flex: 1;
        }

        .dept-rshm-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-rshm-content h3 span {
            color: var(--accent);
        }

        .dept-rshm-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-rshm-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-rshm-floating {
            position: fixed;
            left: 30px;
            top: 57%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-rshm-float-item {
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

        .dept-rshm-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-rshm-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-rshm-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-rshm-float-item:hover i {
            color: #fff;
        }

        .dept-rshm-float-item:hover .dept-rshm-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-rshm-admission-btn {
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

        .dept-rshm-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-rshm-admission-btn:hover {
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
            .dept-rshm-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-rshm-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-rshm-img img {
                padding-left: 0%;
            }

            .dept-rshm-floating {
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

            .dept-rshm-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-rshm-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-rshm-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-rshm-float-item:active i {
                color: var(--primary);
            }

            .dept-rshm-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-rshm-admission-btn {
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
            .dept-rshm-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-rshm-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-rshm-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-rshm-section-title span {
            color: var(--accent);
        }

        .dept-rshm-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-rshm-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-rshm-course-header {
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
        .dept-rshm-course-header::after {
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
        .dept-rshm-view-btn {
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

        .dept-rshm-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-rshm-course-body {
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
            .dept-rshm-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-rshm-img img {
                padding-left: 0%;
            }

            .dept-rshm-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-rshm-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-rshm-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-rshm-prospects-content {
                padding: 25px 20px;
            }


            .dept-rshm-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-rshm-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-rshm-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-rshm-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-rshm-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-rshm-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-rshm-list li {
            margin-bottom: 12px;
        }

        .dept-rshm-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-rshm-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-rshm-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-rshm-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-rshm-accordion-header {
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

        .dept-rshm-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-rshm-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-rshm-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-rshm-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-rshm-accordion-item.active .dept-rshm-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-rshm-accordion-item.active .dept-rshm-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-rshm-accordion-item.active .dept-rshm-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-rshm-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-rshm-syllabus-link {
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

        .dept-rshm-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-rshm-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-rshm-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-rshm-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-rshm-syllabus-link:hover .dept-rshm-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-rshm-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-rshm-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-rshm-lab-container {
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

        .dept-rshm-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-rshm-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-rshm-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-rshm-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-rshm-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-rshm-explore-btn {
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

        .dept-rshm-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-rshm-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-rshm-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-rshm-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-rshm-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-rshm-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-rshm-bullet-list li::before {
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

        .dept-rshm-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD */
        .dept-rshm-event-acc-item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* HEADER */
        .dept-rshm-event-acc-header {
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
        .dept-rshm-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-rshm-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* ACTIVE */
        .dept-rshm-event-acc-item.active .dept-rshm-event-acc-content {
            padding: 20px;
        }

        .dept-rshm-event-acc-item.active .dept-rshm-event-acc-header i {
            transform: rotate(180deg);
        }

        /* IMAGE */
        .dept-rshm-event-img {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-rshm-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        .dept-rshm-event-list {
            padding-left: 20px;
            margin-bottom: 15px;
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        .dept-rshm-event-list li {
            margin-bottom: 6px;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-rshm-event-img img {
                height: 220px;
            }
        }

        /* ================= TABLE LIST SECTION ================= */
        .dept-rshm-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-rshm-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-rshm-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-rshm-table-header {
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
        .dept-rshm-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-rshm-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-rshm-table-acc.active .dept-rshm-table-content {
            padding: 20px;
        }

        .dept-rshm-table-acc.active .dept-rshm-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-rshm-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-rshm-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-rshm-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-rshm-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-rshm-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-rshm-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-rshm-table td,
        .dept-rshm-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (SINGLE IMAGE) ================= */

        .dept-rshm-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rshm-event-container {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* CARD */
        .dept-rshm-event-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            transition: var(--transition);
        }

        .dept-rshm-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(44, 74, 122, 0.12);
        }

        /* TITLE */
        .dept-rshm-event-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--primary);
            padding: 20px 25px;
            line-height: 1.7;
        }

        /* IMAGE WRAPPER */
        .dept-rshm-event-img {
            width: 100%;
            overflow: hidden;
        }

        /* IMAGE */
        .dept-rshm-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        /* HOVER EFFECT */
        .dept-rshm-event-card:hover img {
            transform: scale(1.03);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {
            .dept-rshm-event-title {
                font-size: 1rem;
                padding: 15px;
            }

            .dept-rshm-event-img img {
                height: 220px;
            }
        }



        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-rshm-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-rshm-achievement-tabs {
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
        .dept-rshm-achievement-content {
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
        .dept-rshm-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rshm-recognition-container {
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
        .dept-rshm-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-rshm-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-rshm-recognition-content {
            flex: 2;
        }

        .dept-rshm-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-rshm-recognition-btn {
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

        .dept-rshm-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-rshm-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-rshm-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-rshm-recognition-content p {
                text-align: center;
            }

            .dept-rshm-recognition-btn {
                justify-content: center;
            }
        }

        .dept-rshm-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-rshm-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

    <style>
        /* ================= EVENTS SECTION ================= */
        .dept-rshm-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-rshm-events-box {
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
        .dept-rshm-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 20s linear infinite;
        }

        .dept-rshm-events-box:hover .dept-rshm-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-rshm-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-rshm-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-rshm-events-btn:hover {
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

        .dept-rshm-event-gallery-section-copy {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Title */
        .dept-rshm-section-title-copy {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 3vw;
        }

        .dept-rshm-section-title-copy span {
            color: var(--accent);
        }

        /* Accordion wrapper */
        .dept-rshm-event-accordion-copy {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Card */
        .dept-rshm-event-acc-item-copy {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* Header */
        .dept-rshm-event-acc-header-copy {
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
        .dept-rshm-event-acc-header-copy i {
            transition: 0.3s;
        }

        /* Content */
        .dept-rshm-event-acc-content-copy {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* Active state */
        .dept-rshm-event-acc-item-copy.active-copy .dept-rshm-event-acc-content-copy {
            padding: 20px;
        }

        .dept-rshm-event-acc-item-copy.active-copy .dept-rshm-event-acc-header-copy i {
            transform: rotate(180deg);
        }

        /* Image */
        .dept-rshm-event-img-copy {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-rshm-event-img-copy img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* List */
        .dept-rshm-event-list-copy {
            padding-left: 20px;
            margin-bottom: 15px;
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
        }

        .dept-rshm-event-list-copy li {
            margin-bottom: 6px;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-rshm-event-img-copy img {
                height: 220px;
            }
        }
    </style>

    <div class="dept-rshm-floating">
        <a href="#dept-home" class="dept-rshm-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-rshm-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-rshm-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-rshm-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-rshm-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-rshm-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-rshm-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-rshm-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-rshm-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-rshm-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-rshm-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-rshm-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-rshm-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-rshm-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-rshm-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-rshm-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-rshm-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-rshm-wrapper">

        <div class="dept-rshm-heading" id="dept-home">
            <h1>Department of <span>Hotel Management</span></h1>
            <h2>Royal School of Hotel Management (RSHM)</h2>
        </div>

        <div class="dept-rshm-hero" id="dept-about">

            <div class="dept-rshm-img">
                <img src="/home-banner/rshm.png" alt="Royal School of Hotel Management">
            </div>

            <div class="dept-rshm-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Hotel Management at The Assam Royal Global University, Guwahati, is dedicated to
                    shaping the future leaders of the hospitality industry through a blend of rigorous academic programs
                    and practical input. Our department prides itself on its modern facilities, industry-expert faculty,
                    and a curriculum that balances theoretical knowledge with hands-on training. Students gain expertise
                    in key areas such as hotel operations, culinary arts, hospitality management and allied services,
                    supported by internships and real-world projects. The focus on leadership, customer service
                    excellence, and innovative management practices ensures our graduates are highly sought after in the
                    global hospitality sector. With career opportunities ranging from hotel management to event
                    planning, food and beverage management to railway and industrial catering, our alumni are
                    well-prepared to navigate and thrive in the ever-evolving hospitality landscape.
                </p>



            </div>

        </div>

        <!-- vision mission  -->
        <div class="dept-rshm-prospects-section" id="dept-vision">
            <h2 class="dept-rshm-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-rshm-prospects-content">

                <h3 class="dept-rshm-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-rshm-bullet-list">
                    <li>
                        To provide opportunities that are integrated both nationally and internationally, fostering the
                        development of global citizens in the hotel industry. We aim to inspire and empower future
                        hospitality leaders to exceed the expectations of dynamic and diverse industries and the world
                        at large.
                    </li>

                </ul>

                <h3 class="dept-rshm-subheading">Our Mission</h3>
                <ul class="dept-rshm-bullet-list">

                    <li>
                        To attain academic excellence in education, innovation, and industry integration.
                    </li>
                    <li>
                        To foster a culture of service excellence, sustainability and cultural appreciation, with an aim
                        to shape compassionate, adaptable professionals who will drive positive change in the
                        hospitality industry and beyond.
                    </li>
                    <li>
                        To nurture future leaders in the dynamic world of hospitality with a focus on experiential
                        learning, global perspectives, and cutting-edge research so that our students excel in diverse
                        roles within the hospitality sector.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-rshm-courses-section" id="dept-courses">
            <h2 class="dept-rshm-section-title">Courses <span>Offered</span></h2>

            <div class="dept-rshm-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-rshm-prospects-section" id="dept-prospects">
          <h2 class="dept-rshm-section-title">Career <span>Prospects</span></h2>

          <div class="dept-rshm-prospects-content">
            <p class="dept-rshm-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-rshm-subheading">Higher Education Opportunities</h3>
            <ol class="dept-rshm-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-rshm-subheading">Government Sector Jobs</h3>
            <ol class="dept-rshm-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-rshm-subheading">Private Sector Careers</h3>
            <ol class="dept-rshm-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-rshm-subheading">Research & Teaching</h3>
            <ol class="dept-rshm-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-rshm-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-rshm-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-rshm-subheading">Jobs Abroad</h3>
            <ol class="dept-rshm-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-rshm-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-rshm-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-rshm-accordion-section" id="dept-syllabus">
            <h2 class="dept-rshm-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-rshm-accordion-wrapper">

                <div class="dept-rshm-accordion-item active">
                    <div class="dept-rshm-accordion-header">
                        <div class="dept-rshm-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rshm-chevron"></i>
                    </div>

                    <div class="dept-rshm-accordion-content">
                        <div class="dept-rshm-syllabus-list">
                            <!-- <h3>Political Science</h3> -->
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshm/syllabus-pdf/Course-structure_Culinary%20Arts.pdf"
                                class="dept-rshm-syllabus-link">
                                <div class="dept-rshm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Culinary Arts
                                </div>
                                <i class="fa-solid fa-download dept-rshm-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSHM/BA%20Culinary%20Arts.pdf"
                                class="dept-rshm-syllabus-link">
                                <div class="dept-rshm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Culinary Arts
                                </div>
                                <i class="fa-solid fa-download dept-rshm-download-icon"></i>
                            </a>

                            <div style="border: 1px solid #888;"></div>

                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshm/syllabus-pdf/Course-structure_RSHM.pdf"
                                class="dept-rshm-syllabus-link">
                                <div class="dept-rshm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- BA/B.Sc. Hotel Management
                                </div>
                                <i class="fa-solid fa-download dept-rshm-download-icon"></i>
                            </a>

                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSHM/BA-BSC%20Hotel%20Management.pdf"
                                class="dept-rshm-syllabus-link">
                                <div class="dept-rshm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- BA/B.Sc. Hotel Management
                                </div>
                                <i class="fa-solid fa-download dept-rshm-download-icon"></i>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="dept-rshm-accordion-item">
                    <div class="dept-rshm-accordion-header">
                        <div class="dept-rshm-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-rshm-chevron"></i>
                    </div>

                    <div class="dept-rshm-accordion-content">
                        <div class="dept-rshm-syllabus-list">
                            <a target="_blank" href="https://www.rgu.ac/phd" class="dept-rshm-syllabus-link">
                                <div class="dept-rshm-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-rshm-events-section" id="dept-events">

            <h2 class="dept-rshm-section-title">Events</h2>

            <div class="dept-rshm-events-box">
                <div class="dept-rshm-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
            <a href="#" class="dept-rshm-events-btn">View All</a>
          </div> -->

        </div>

        <div class="dept-rshm-event-gallery-section" id="dept-events">

            <h2 class="dept-rshm-section-title">
                Awards and Achievements of <span>Faculty Members (RSHM/RSTTM)</span>
            </h2>

            <div class="dept-rshm-event-accordion" id="event-gallery-container"></div>

        </div>

        <div class="dept-rshm-event-gallery-section-copy" id="dept-events-copy">

            <h2 class="dept-rshm-section-title-copy">
                Student <span>Achievements</span>
            </h2>

            <div class="dept-rshm-event-accordion-copy" id="event-gallery-container-copy"></div>

        </div>

        <div class="dept-rshm-table-section" id="dept-committee">

            <div class="dept-rshm-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-rshm-lab-section" id="dept-lab">

                <div class="dept-rshm-lab-container">

                    <h2 class="dept-rshm-section-title">Physiotherapy <span> OPD</span></h2>

                    <p class="dept-rshm-lab-intro">
                        The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                        patient. The
                        students through OPD practicals would learn how to treat patients with physical disabilities and
                        injuries in a
                        range of settings including hospitals, health centres, private practices and sports clubs under the
                        proper
                        guidance of a specialist. The OPD is located in Block-D on the ground floor.
                    </p>

                    <ol class="dept-rshm-lab-list">
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


                     <h3 class="dept-rshm-lab-heading">Our Lab Equipments</h3>

                    <h2 class="dept-rshm-section-title">Glimpse of <span>our Lab</span></h2>

                    <div class="dept-rshm-lab-gallery">

                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                            class="dept-rshm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                            class="dept-rshm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                            class="dept-rshm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                            class="dept-rshm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                            class="dept-rshm-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                            class="dept-rshm-lab-img">

                    </div>

                    <button class="dept-rshm-explore-btn">Explore</button>
                </div>

            </div> -->

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. Hotel Management / MHM",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MSc-Hotel-Management"
            },
            {
                title: "Bachelor of Hotel Management (BHM)",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-Bachelor-of-Hotel-Management-BHM"
            },
            {
                title: "B.Sc.(H)/B.A.(H) – Hotel Management",
                duration: "3/ 3+1 years",
                link: "https://www.rgu.ac/programs-BA-HotelManagement"
            },
            {
                title: "B.A.(H) – Culinary Arts",
                duration: "3/ 3+1 years",
                link: "https://www.rgu.ac/programs-BA-in-Culinary-Arts"
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
        <div class="dept-rshm-course-card">

          <div class="dept-rshm-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-rshm-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-rshm-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-rshm-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-rshm-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-rshm-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-rshm-accordion-content');

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
            "On 29th August 2024, Mr. Ranvijay Singh, Mr. K. Kartikeyan, and Mrs. Santa Sharma conducted the inauguration of the Advance Food Production Laboratory and F&B Training Restaurant Laboratory.",
            "On 31st May 2023, Mr. Nayanjyoti Saikia (MasterChef India Winner 2023) conducted a Culinary Chef Challenge cum Mocktail Masterclass.",
            "On 9th February 2023, Ms. Chayanika Kalita (Trainer, North East Skills Center, Guwahati) conducted a session on developing interview skills for hospitality students.",
            "On 21st November 2022, Mr. Anjan Choudhary (Director, E&ICT at IIT Guwahati) conducted a session on soft skills, personality development and grooming.",
            "On 31st May 2022, Prof. S.C. Bagri (Director, Centre for Tourism and Hospitality Research, Dehradun) delivered a webinar on employability factors for the hospitality industry.",
            "On 12th May 2022, Mr. Anirban Goswami (Sous-Chef, Novotel Guwahati) conducted a skill enhancement session on culinary knowledge.",
            "On 27th September 2021, Mr. Chandan Nath (Founder & Head - CN Travels, Director - Centre for Tourism Studies, Guwahati) conducted a webinar on World Tourism Day 2021: Tourism for Inclusive Growth.",
            "On 20th February 2020, Prof. Shiela Bora (Professor of History, Royal Global University, Guwahati) conducted an interactive session on tourism with special focus on homestay."
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
        <div class="dept-rshm-event-item">
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
                    ["1", "Convener (Ex-Officio)- Head of the Department",
                        "Dr. Soumita Sen, Professor and Dean, RSHM & RSTTM"
                    ],

                    ["2", "All Heads of the Departments - Members (Ex-Officio)",
                        "Dr. Indrajit Dutta, Assistant Professor and Co-ordinator, RSHM & RSTTM"
                    ],

                    ["3", "External Experts for each Department (Academic)",
                        "Dr. Saurabh Kumar Dixit, Associate Professor/Registrar i.c, Department of Tourism & Hotel Management, NEHU"
                    ],

                    ["4", "External Experts for each Department (Industry)",
                        "Mr. Nirmalaya Choudhury, Executive Director Operation Jungle Travels, Guwahati / Mr. Jayanta Das (Cluster General Manager Northeast, Darjeeling, and General Manager Vivanta Guwahati)"
                    ],

                    ["5", "Two Faculty members of the School nominated by the Vice Chancellor",
                        "Mr. Chandan Bezborah, Lecturer, RSHM & RSTTM / Ms. Ankita Saikia, Assistant Professor, RSHM & RSTTM"
                    ],

                    ["6", "Registrar, Member Secretary (Ex-officio)", "Dr. D N Singh or his nominee"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Name of the Member", "Designation", "Designation in the committee"],
                rows: [
                    ["1", "Dr. Soumitro Sen", "Dean, RSTTM & RSHM", "Chairperson"],
                    ["2", "Dr. Sudip Chakraborty", "Deputy Dean, RSC", "Member"],
                    ["3", "Dr. Bijoy Singh Mipun", "Dean of Student Welfare", "Member"],
                    ["4", "Dr. Anupam Chatterjee", "Dean RSBSC", "Member"]
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
        <div class="dept-rshm-table-responsive">
          <table class="dept-rshm-table">
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
        <div class="dept-rshm-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-rshm-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-rshm-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-rshm-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-rshm-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-rshm-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-rshm-table-content");
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
                    image: "mobile-assets/new-dept-rshm-ttm/events/e1/1.jpg"
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
                    image: "mobile-assets/new-dept-rshm-ttm/events/e2/1.jpg"
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
                    image: "mobile-assets/new-dept-rshm-ttm/events/e3/1.jpg"
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
            <div class="dept-rshm-event-acc-item">

                <!-- HEADER -->
                <div class="dept-rshm-event-acc-header">
                    <span>${event.heading}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <!-- CONTENT -->
                <div class="dept-rshm-event-acc-content">

                    <!-- BULLET LIST -->
                    ${event.points && event.points.length > 0 ? `
                            <ul class="dept-rshm-event-list">
                                ${event.points.map(point => `<li>${point}</li>`).join("")}
                            </ul>
                        ` : ""}

                    <!-- IMAGE -->
                    ${event.image ? `
                            <div class="dept-rshm-event-img">
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

                const items = eventGalleryContainer.querySelectorAll(".dept-rshm-event-acc-item");

                items.forEach(item => {

                    const header = item.querySelector(".dept-rshm-event-acc-header");
                    const content = item.querySelector(".dept-rshm-event-acc-content");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active");
                            const c = i.querySelector(".dept-rshm-event-acc-content");
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
                    image: "mobile-assets/new-dept-rshm-ttm/student-ach/e1/1.jpg"
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
                    image: "mobile-assets/new-dept-rshm-ttm/student-ach/e2/1.jpg"
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
                    image: "mobile-assets/new-dept-rshm-ttm/student-ach/e3/1.jpg"
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
            <div class="dept-rshm-event-acc-item-copy">

                <!-- HEADER -->
                <div class="dept-rshm-event-acc-header-copy">
                    <span>${event.heading}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <!-- CONTENT -->
                <div class="dept-rshm-event-acc-content-copy">

                    ${event.points && event.points.length > 0 ? `
                            <ul class="dept-rshm-event-list-copy">
                                ${event.points.map(point => `<li>${point}</li>`).join("")}
                            </ul>
                        ` : ""}

                    ${event.image ? `
                            <div class="dept-rshm-event-img-copy">
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

                const items = eventGalleryContainerCopy.querySelectorAll(".dept-rshm-event-acc-item-copy");

                items.forEach(item => {

                    const header = item.querySelector(".dept-rshm-event-acc-header-copy");
                    const content = item.querySelector(".dept-rshm-event-acc-content-copy");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active-copy");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active-copy");
                            const c = i.querySelector(".dept-rshm-event-acc-content-copy");
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
