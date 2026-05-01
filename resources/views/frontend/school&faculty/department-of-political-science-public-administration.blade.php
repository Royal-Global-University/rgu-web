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

        .dept-paps-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-paps-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-paps-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-paps-heading h1 span {
            color: var(--accent);
        }

        .dept-paps-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-paps-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-paps-img {
            flex: 1;
            position: relative;
        }

        .dept-paps-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-paps-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-paps-content {
            flex: 1;
        }

        .dept-paps-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-paps-content h3 span {
            color: var(--accent);
        }

        .dept-paps-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-paps-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-paps-floating {
            position: fixed;
            left: 30px;
            top: 57%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-paps-float-item {
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

        .dept-paps-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-paps-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-paps-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-paps-float-item:hover i {
            color: #fff;
        }

        .dept-paps-float-item:hover .dept-paps-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-paps-admission-btn {
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

        .dept-paps-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-paps-admission-btn:hover {
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
            .dept-paps-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-paps-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-paps-img img {
                padding-left: 0%;
            }

            .dept-paps-floating {
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

            .dept-paps-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-paps-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-paps-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-paps-float-item:active i {
                color: var(--primary);
            }

            .dept-paps-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-paps-admission-btn {
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
            .dept-paps-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-paps-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-paps-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-paps-section-title span {
            color: var(--accent);
        }

        .dept-paps-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-paps-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-paps-course-header {
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
        .dept-paps-course-header::after {
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
        .dept-paps-view-btn {
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

        .dept-paps-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-paps-course-body {
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
            .dept-paps-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-paps-img img {
                padding-left: 0%;
            }

            .dept-paps-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-paps-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-paps-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-paps-prospects-content {
                padding: 25px 20px;
            }


            .dept-paps-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-paps-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-paps-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-paps-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-paps-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-paps-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-paps-list li {
            margin-bottom: 12px;
        }

        .dept-paps-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-paps-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-paps-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-paps-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-paps-accordion-header {
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

        .dept-paps-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-paps-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-paps-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-paps-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-paps-accordion-item.active .dept-paps-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-paps-accordion-item.active .dept-paps-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-paps-accordion-item.active .dept-paps-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-paps-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-paps-syllabus-link {
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

        .dept-paps-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-paps-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-paps-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-paps-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-paps-syllabus-link:hover .dept-paps-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-paps-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-paps-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-paps-lab-container {
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

        .dept-paps-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-paps-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-paps-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-paps-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-paps-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-paps-explore-btn {
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

        .dept-paps-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-paps-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-paps-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-paps-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-paps-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-paps-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-paps-bullet-list li::before {
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
        .dept-paps-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-paps-events-box {
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
        .dept-paps-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 80s linear infinite;
        }

        .dept-paps-events-box:hover .dept-paps-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-paps-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-paps-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-paps-events-btn:hover {
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
        .dept-paps-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-paps-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-paps-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-paps-table-header {
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
        .dept-paps-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-paps-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-paps-table-acc.active .dept-paps-table-content {
            padding: 20px;
        }

        .dept-paps-table-acc.active .dept-paps-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-paps-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-paps-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-paps-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-paps-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-paps-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-paps-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-paps-table td,
        .dept-paps-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-paps-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-paps-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-paps-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-paps-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-paps-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-paps-marquee:hover .dept-paps-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-paps-marquee img {
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
            .dept-paps-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-paps-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-paps-achievement-tabs {
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
        .dept-paps-achievement-content {
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
        .dept-paps-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-paps-recognition-container {
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
        .dept-paps-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-paps-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-paps-recognition-content {
            flex: 2;
        }

        .dept-paps-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-paps-recognition-btn {
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

        .dept-paps-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-paps-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-paps-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-paps-recognition-content p {
                text-align: center;
            }

            .dept-paps-recognition-btn {
                justify-content: center;
            }
        }

        .dept-paps-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-paps-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

        <div class="dept-paps-floating">
        <a href="#dept-home" class="dept-paps-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-paps-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-paps-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-paps-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-paps-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-paps-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-paps-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-paps-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-paps-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-paps-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-paps-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-paps-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-paps-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-paps-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-paps-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-paps-float-text">Lab</span>
        </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-paps-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-paps-wrapper">

        <div class="dept-paps-heading" id="dept-home">
            <h1>Department of <br><span>Political Science & Public Administration</span></h1>
            <h2>Royal School of Humanities & Social Sciences (RSHSS)</h2>
        </div>

        <div class="dept-paps-hero" id="dept-about">

            <div class="dept-paps-img">
                <img src="/mobile-assets/pol-sc.jpeg"
                    alt="Political Science and Public Administration">
            </div>

            <div class="dept-paps-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Political Science was established in the year 2018.
                    The Department offers courses in BA, MA and Ph.D. in Political
                    Science. With some of the most talented faculties in the discipline
                    the Department is well set to achieve greater standards of academic
                    excellence and research outcomes in the coming years. The thrust
                    area of the Department has been issues relating to North-East
                    politics, Indian Government and Politics, discourses on Political
                    Theory and debates about international relations.
                    Graduating from the Department, the Graduates are expected to
                    have a greater understanding of the discipline and thereby apply
                    themselves to understand the socio-political issues. Graduating from
                    the Department of Political Science, the students are expected to
                    have a better opportunity to clear competitive examinations
                    including Civil Services, NET and other such examinations.
                </p>



            </div>

        </div>


        <div class="dept-paps-prospects-section" id="dept-vision">

            <div class="dept-paps-prospects-content">
                <p class="dept-paps-intro-text">
                    The Department of Public Administration is dedicated to the comprehensive study and practice of
                    Public Governance, Policy-
                    making, and Management within the Public sector. It boasts an interdisciplinary approach and is
                    supported by experienced
                    faculty and strong research output. The department offers practical training through summer
                    internships, research projects
                    and workshops ensuring students gain hands-on experience. Its innovative curriculum covers key areas
                    such as Policy
                    Analysis, Public Management, Indian Administration, Governance Ethics, Public Financial Management,
                    Regulatory
                    Governance, E-governance, Industrial Relations and Labour Law, Comparative Public Administration,
                    Local Government like
                    urban and rural development and Data Analysis or Research related to the subject.
                    <br></br>

                    Graduates and Post-graduates are well-prepared for diverse careers in Government, International
                    Organizations, Public Sector
                    Consultancy, Academia, the Non-profit Sector, and the Private Sector. They can undertake roles such
                    as policy analyst,
                    administrative officer, public affairs manager, consultant, program evaluator, budget analyst,
                    community development
                    specialist, human resources manager, urban planner, environmental policy analyst, public health
                    administrator, legislative
                    assistant, non-profit manager, academician or researcher, international development specialist, and
                    public sector IT manager.
                    The Department's emphasis on ethical practices and good governance equips students to lead and
                    manage public
                    organizations effectively. With a strong foundation and focus on theoretical understanding and
                    analytical skills, the
                    Department of Public Administration ensures its graduates are ready to meet the evolving demands of
                    public service and
                    contribute significantly to society.
                </p>



            </div>
        </div>

        <!-- vision mission  -->
        <!-- <div class="dept-paps-prospects-section" id="dept-vision">
            <h2 class="dept-paps-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-paps-prospects-content">

                <h3 class="dept-paps-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-paps-bullet-list">
                    <li>
                        To cultivate outstanding fine arts education to generate well-rounded individuals whose
                        uniqueartistic perspectives could be advantageous to global society.
                    </li>

                </ul>

                <h3 class="dept-paps-subheading">Our Mission</h3>
                <ul class="dept-paps-bullet-list">
                    <li>
                        To empower creativity, cultivate expression, inspire innovation, fostering a dynamic community
                        where artistic exploration thrives.
                    </li>
                    <li>
                        To ignite imaginations, challenge boundaries and celebrate the diversity of human expression by
                        cultivating visionary artists and scholars.
                    </li>
                    <li>
                        To inculcate interdisciplinary collaboration and a commitment to cultural enrichment and give
                        back leaders who will enrich the world with their creativity and critical perspectives.
                    </li>

                </ul>

            </div>
        </div> -->

        <div class="dept-paps-courses-section" id="dept-courses">
            <h2 class="dept-paps-section-title">Courses <span>Offered</span></h2>

            <div class="dept-paps-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-paps-prospects-section" id="dept-prospects">
      <h2 class="dept-paps-section-title">Career <span>Prospects</span></h2>

      <div class="dept-paps-prospects-content">
        <p class="dept-paps-intro-text">
          The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
          sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
          strong foundation in agricultural sciences, preparing them for following careers opportunities:
        </p>

        <h3 class="dept-paps-subheading">Higher Education Opportunities</h3>
        <ol class="dept-paps-list">
          <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
          </li>
          <li>MBA in Agribusiness Management</li>
          <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
          <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
            disciplines</li>
        </ol>

        <h3 class="dept-paps-subheading">Government Sector Jobs</h3>
        <ol class="dept-paps-list">
          <li>Agricultural Officer / Civil Development Officer (ADO)</li>
          <li>IBPS AFO (Agricultural Field Officer)</li>
          <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
          <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
          <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
        </ol>

        <h3 class="dept-paps-subheading">Private Sector Careers</h3>
        <ol class="dept-paps-list">
          <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
          <li>Food Processing Industries</li>
          <li>Agri-Tech Startups – technology-based agricultural solutions</li>
          <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
          <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
        </ol>

        <h3 class="dept-paps-subheading">Research & Teaching</h3>
        <ol class="dept-paps-list">
          <li>Research Assistant / Scientist – in public and private research institutions</li>
          <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
          <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
        </ol>

        <h3 class="dept-paps-subheading">Entrepreneurship & Startups</h3>
        <ol class="dept-paps-list">
          <li>Organic farming, dairy, poultry, aquaculture</li>
          <li>Agri-tourism, greenhouse farming, vertical farming</li>
          <li>Processing units for spices, cereals, or fruits</li>
          <li>Agri-consultancy or freelance advisory services</li>
        </ol>

        <h3 class="dept-paps-subheading">Jobs Abroad</h3>
        <ol class="dept-paps-list">
          <li>Agricultural research, farm management, and food security projects</li>
          <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
          <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
        </ol>

        <h3 class="dept-paps-subheading">Key Skills That Boost Career</h3>
        <ol class="dept-paps-list">
          <li>Practical knowledge of farming tools and technologies</li>
          <li>Communication and management skills (especially in extension or agribusiness)</li>
          <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
          <li>Language skills and report writing</li>
        </ol>

      </div>
    </div> -->

        <div class="dept-paps-accordion-section" id="dept-syllabus">
            <h2 class="dept-paps-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-paps-accordion-wrapper">


                <div class="dept-paps-accordion-item active">
                    <div class="dept-paps-accordion-header">
                        <div class="dept-paps-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-paps-chevron"></i>
                    </div>

                    <div class="dept-paps-accordion-content">
                        <div class="dept-paps-syllabus-list">
                            <h3>Political Science</h3>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/pol-sc/updated-syllabus/Course-structure_Pol-Sc.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/pol-sc/updated-syllabus/BA-PSc-Syllabus.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - BA Political Science
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/pol-sc/updated-syllabus/BA-Admin-Syllabus.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - BA Administrative Service
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>
                            <h3>Public Administration</h3>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/dept-public-admin/syllabus-pdf/course-structure.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/BA%20Pub%20Admin%20Syllabus.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - BA Public Administration
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>


                        </div>
                    </div>
                </div>


                <div class="dept-paps-accordion-item">
                    <div class="dept-paps-accordion-header">
                        <div class="dept-paps-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-paps-chevron"></i>
                    </div>

                    <div class="dept-paps-accordion-content">
                        <div class="dept-paps-syllabus-list">
                            <h3>Political Science</h3>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rshss/pol-sc/updated-syllabus/PG-Syllabus-ma-pol.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - MA Political Science
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>
                            <h3>Public Administration</h3>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/dept-public-admin/syllabus-pdf/ma-public-admin.pdf"
                                class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - MA Public Administration
                                </div>
                                <i class="fa-solid fa-download dept-paps-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-paps-accordion-item">
                    <div class="dept-paps-accordion-header">
                        <div class="dept-paps-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-paps-chevron"></i>
                    </div>

                    <div class="dept-paps-accordion-content">
                        <div class="dept-paps-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-paps-syllabus-link" download>
                                <div class="dept-paps-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="dept-paps-events-section" id="dept-events">

            <h2 class="dept-paps-section-title">Events</h2>

            <div class="dept-paps-events-box">
                <div class="dept-paps-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
        <a href="#" class="dept-paps-events-btn">View All</a>
      </div> -->

        </div>

        <!-- ================= ACHIEVEMENT SECTION ================= -->
        <div class="dept-paps-achievement-section" id="dept-achievement">

            <h2 class="dept-paps-section-title">
                Achievements
            </h2>

            <!-- Tabs -->
            <div class="dept-paps-achievement-tabs">
                <button class="dept-achievement-tab active" data-tab="student">
                    Student Achievements
                </button>
                <button class="dept-achievement-tab" data-tab="net">
                    NET Awardees
                </button>

            </div>

            <!-- Content -->
            <div class="dept-paps-achievement-content">

                <!-- STUDENT TAB -->
                <div class="dept-achievement-pane active" id="student">

                    <div class="dept-paps-table-responsive">
                        <table class="dept-paps-table">
                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Name of the Student</th>
                                    <th>Programme & Semester</th>
                                    <th>Achievements</th>
                                    <th>Event Name</th>
                                    <th>Date of the Event</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Apratim Choudhary, Nishant Barman</td>
                                    <td>BA Political Science- 4th Semester</td>
                                    <td>Secured Second Position</td>
                                    <td>Inter-University Quiz competition, held at USTM </td>
                                    <td>2/16/2026</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Apratim Choudhary, Nishant Barman</td>
                                    <td>BA Political Science- 4th Semester</td>
                                    <td>Secured Sixth Position</td>
                                    <td>Hindu Quiz Competition</td>
                                    <td>2/9/2026</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kingshuk Akshaye</td>
                                    <td>MA Political Science- 4th Semester</td>
                                    <td>AIU, Nationals, 3rd Position (As Actor & Director)</td>
                                    <td>AIU Nationals, held at Sathyabama Institute of Science and Technology, Chennai
                                    </td>
                                    <td>March,2026</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>AIU Nationals, 4th Position (Mimicry Solo)</td>
                                    <td>AIU Nationals, held at Sathyabama Institute of Science and Technology, Chennai
                                    </td>
                                    <td>March,2026</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>AIU Nationals, 5th Position (Mimicry)</td>
                                    <td>AIU Nationals, held at Amity University, Noida</td>
                                    <td>March, 2025</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kaustabh Dey</td>
                                    <td>BA Public Administration -2nd Semester</td>
                                    <td>Secured 1st Place under-19 categroy</td>
                                    <td>3rd Achiever Chess Academy U-19 Chess Tournament 2026, Organised by Achiever
                                        Chess Academy at Rukmininagar, House No 19, Guwahati</td>
                                    <td>1/25/2026</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Tana Akin</td>
                                    <td>BA Public Administration -6th Semester</td>
                                    <td>Participated
                                    </td>
                                    <td>Battle of Band, Competition of ADUJ-THE Literary and Cultural Fest organised by
                                        National Law University and Judicial Academy, Assam</td>
                                    <td>1st - 4th, May, 2025</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Winner</td>
                                    <td>Loud & Live- Battle of Bands, held during GCU Varsity Week: EUPHUISM 2025 (Retro
                                        Rewind)</td>
                                    <td>5th-8th March, 2025</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Daniel Khonglah</td>
                                    <td>MA Public Administration- 4th Semester</td>
                                    <td>Participated in a three-day as Volunteer</td>
                                    <td>A three-day Youth For Impact, Driving Equity & Innovation in Sports Leadership,
                                        organised by the Indian Institute of Management in collaboration with the
                                        Miinistry of Youth Affairs and Sports, Government of Meghalaya.</td>
                                    <td>5th-7th, March 2026</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="dept-achievement-pane" id="net">

                    <div class="dept-paps-table-responsive">
                        <table class="dept-paps-table">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Batch</th>
                                    <th>Currently in</th>
                                    <th>Secured</th>


                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Pratiksha Das</td>
                                    <td>Alumni</td>
                                    <td>2022-2024</td>
                                    <td>M.A. Pass from RGU and appeared recently for B.ed Entrance Examination</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rahul Jyoti Medhi</td>
                                    <td>Alumni</td>
                                    <td>2021-2023</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Trishna Das</td>
                                    <td>Alumni</td>
                                    <td>2020-2023</td>
                                    <td>B.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Huanlym Sumpa</td>
                                    <td>Student</td>
                                    <td>2024-2026</td>
                                    <td>M.A. 3rd semester</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Raciful Bamon</td>
                                    <td>Former student</td>
                                    <td>2023-2025</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Lanukumla Jamir</td>
                                    <td>Former student</td>
                                    <td>2023-2025</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Junei Peace N Iawphniaw</td>
                                    <td>Former student</td>
                                    <td>2022-2024</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Pratiksha Das</td>
                                    <td>Former student</td>
                                    <td>2022-2024</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Dennis Ronghang</td>
                                    <td>Former student</td>
                                    <td>2022-2024</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>Vikehiezo David Richa</td>
                                    <td>Former student</td>
                                    <td>2022-2024</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Birina Barthakur</td>
                                    <td>Ph.D. scholar</td>
                                    <td></td>
                                    <td></td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Ringmaidi Kemprai</td>
                                    <td>Former student</td>
                                    <td>2023-2025</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Mary Laldinthari</td>
                                    <td>Former student</td>
                                    <td>2023-2025</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Nancy Paul</td>
                                    <td>Former student</td>
                                    <td>2023-2025</td>
                                    <td>M.A. Pass from RGU</td>
                                    <td>NET Ph.D. only</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Moumita Sarkar</td>
                                    <td>Ph.D. scholar</td>
                                    <td></td>
                                    <td></td>
                                    <td>NET Assistant Professor Only</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>



            </div>

        </div>

        <!-- <div class="dept-paps-event-gallery-section">

      <h2 class="dept-paps-section-title">Event <span>Highlights</span></h2>

      <div id="event-gallery-container"></div>

    </div> -->

        <div class="dept-paps-table-section" id="dept-committee">

            <div class="dept-paps-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-paps-lab-section" id="dept-lab">

            <div class="dept-paps-lab-container">

                <h2 class="dept-paps-section-title">Physiotherapy <span> OPD</span></h2>

                <p class="dept-paps-lab-intro">
                    The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                    patient. The
                    students through OPD practicals would learn how to treat patients with physical disabilities and
                    injuries in a
                    range of settings including hospitals, health centres, private practices and sports clubs under the
                    proper
                    guidance of a specialist. The OPD is located in Block-D on the ground floor. 
                </p>

                <ol class="dept-paps-lab-list">
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


                 <h3 class="dept-paps-lab-heading">Our Lab Equipments</h3>

                <h2 class="dept-paps-section-title">Glimpse of <span>our Lab</span></h2>

                <div class="dept-paps-lab-gallery">

                    <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                        class="dept-paps-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                        class="dept-paps-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                        class="dept-paps-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                        class="dept-paps-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                        class="dept-paps-lab-img">
                    <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                        class="dept-paps-lab-img">

                </div>

                <button class="dept-paps-explore-btn">Explore</button>
            </div>

        </div> -->

    </div>

    <script>
    // 1. Define the courses array
    const coursesData = [
        {
            title: "MA Political Science",
            duration: "2 years",
            link: "https://www.rgu.ac/programs-MA-Political-Science"
        },
        {
            title: "BA Political Science | Honours/ Honours with Research",
            duration: "4 Years",
            link: "https://www.rgu.ac/programs-BA-Political-Science"
        },
        {
            title: "Master of Master of Public Administration",
            duration: "4 Years",
            link: "https://www.rgu.ac/programs-MA-Public-Administration"
        },
        {
            title: "Bachelor of Public Administration | Honours/ Honours with Research",
            duration: "4 Years as per NEP",
            link: "https://www.rgu.ac/programs-BA-Public-Administration"
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
        }
        else {
            // Generate course cards
            courseContainer.innerHTML = coursesData.map(course => `
        <div class="dept-paps-course-card">

          <div class="dept-paps-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-paps-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-paps-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
        }
    }
</script>

<script>
    // --- ACCORDION LOGIC ---
    const accordionHeaders = document.querySelectorAll('.dept-paps-accordion-header');

    // Function to calculate and set the exact height for smooth transitions
    function setAccordionHeights() {
        const activeItems = document.querySelectorAll('.dept-paps-accordion-item.active');
        activeItems.forEach(item => {
            const content = item.querySelector('.dept-paps-accordion-content');
            content.style.maxHeight = content.scrollHeight + "px";
        });
    }

    // Initialize the open item on load
    setAccordionHeights();

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const currentItem = this.parentElement;
            const currentContent = currentItem.querySelector('.dept-paps-accordion-content');

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
        "12-01-2026 | Interactive session with faculty from Srinakharinwirot University, Bangkok, Thailand.",
        "10-11-2025 | Student seminar on Tariff War: Economic, Political and Global Implication.",
        "15-09-2025 | Guest lecture to commemorate the UN International Day of Democracy.",
        "29-07-2025 | 10 years of Act East Policy: What next?",
        "25-03-2025 | Visit to the Assam Legislative Assembly.",
        "17-02-2025 to 19-02-2025 | Three Days Capacity Building Workshop on Research Writing & Methodology in Social Sciences.",
        "05-02-2025 | Visit to Manali to explore various aspects of Eco-Tourism.",
        "26-11-2024 | Inauguration of Student Magazine of Dept. of Pol. Sc & Commemorating 75th Constitution Day.",
        "20-09-2024 | Youth Parliament.",
        "28-08-2024 | Visit to the Assam Legislative Assembly.",
        "20-06-2024 | The Youth Parliament 2024.",
        "05-06-2024 | Career Counselling.",
        "14-05-2024 | Yuvamanthan Model G20."
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
        <div class="dept-paps-event-item">
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
    const tableData = [
        {
            title: "The Board of Studies",
            headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
            rows: [
                ["1", "Convener (Ex-Officio)", "Head of the Department Prof. (Dr.) Shalini Saxena,  Professor and Co-ordinator "],

                ["2", "All Faculty members of the Department", "Dr. Dhiraj Borkotoky, Associate Professor "],
                ["", "", "Dr. Y Monojit Singha, Assistant Professor"],
                ["", "", "Dr. Krishangi Saikia, Assistant Professor"],
                ["", "", "Dr. Baba Chandra Singha, Assistant Professor"],
                ["", "", "Dr. Sushmita Nongmeikapam, Assistant Professor"],
                ["", "", "Dr. Akash Singh Thakur, Assistant Professor"],
                ["", "", "Dr. Syamkumar V, Assistant Professor"],
                ["", "", "Dr. Rugmini Devi M, Assistant Professor"],
                ["", "", "Ms. Tanjeela Meghboob, Assistant Professor"],
                ["", "", "Mr. Abhinav Chaliha, Assistant Professor"],
                ["", "", "Ms. Nikita Biswakarma, Teaching Assistant"],
                ["3", "External Expert (Academic)- ", "Dr. Subhrajeet Konwer, Professor, GU"],
                ["", "", "Dr. Dilip Gogoi, Associate Professor, Cotton University "],


            ]
        },
        {
            title: "The Departmental Research Committee (DRC)",
            headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
            rows: [
                ["1", "Head of the Department", "Prof (Dr) Shalini Saxena", "Professor", "Chairperson"],
                ["2", "Two Professors, including the Dean of the School", "Prof (Dr) Surajit Chandra Mukhopadhyay", "Professor ", "Dean of RSHSS"],
                ["", "", "Prof (Dr) Shalini Saxena", "Professor", "Member (Political Science)"],
                ["3", "Two Associate Professors – one of them will be the member secretary", "Dr. Dhiraj K Borkotoky", "Associate Professor", "Member secretary"],
                ["", "", "", "", ""],
                ["4", "Two Assistant Professors holding Ph.D. degree", "Dr. Baba Chandra Singha", "Assistant Professor", "Member"],
                ["", "", "Dr. Krishangi Saikia", "Assistant Professor", "Member"],
                ["5", "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC", "Prof (Dr) Subhrajit Konwar", "Professor, Guwahati University", "External member"],
                ["", "", "Prof. Pahi Saikia", "Professor", "External member"],
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
        <div class="dept-paps-table-responsive">
          <table class="dept-paps-table">
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
        <div class="dept-paps-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-paps-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-paps-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
        }).join("");
    }

    /* ACCORDION (single open at a time) */
    document.addEventListener("click", function (e) {
        const header = e.target.closest(".dept-paps-table-header");
        if (!header) return;

        const item = header.parentElement;
        if (item.classList.contains("disabled")) return;

        const allItems = document.querySelectorAll(".dept-paps-table-acc");

        allItems.forEach(acc => {
            if (acc !== item) {
                acc.classList.remove("active");
                const content = acc.querySelector(".dept-paps-table-content");
                const icon = acc.querySelector("i");
                if (content) content.style.maxHeight = 0;
                if (icon) icon.classList.replace("fa-minus", "fa-plus");
            }
        });

        const content = item.querySelector(".dept-paps-table-content");
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
    const eventGalleryData = [
        {
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
      <div class="dept-paps-event-card">

        <div class="dept-paps-event-title">
          ${event.title}
        </div>

        <div class="dept-paps-marquee">
          <div class="dept-paps-marquee-track">
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
