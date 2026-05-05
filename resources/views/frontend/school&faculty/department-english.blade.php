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
            --text-muted: #556b8d;
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

        .dept-english-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-english-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-english-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-english-heading h1 span {
            color: var(--accent);
        }

        .dept-english-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-english-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-english-img {
            flex: 1;
            position: relative;
        }

        .dept-english-img img {
            width: 80%;
            padding-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-english-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-english-content {
            flex: 1;
        }

        .dept-english-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-english-content h3 span {
            color: var(--accent);
        }

        .dept-english-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-english-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-english-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-english-float-item {
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

        .dept-english-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-english-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-english-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-english-float-item:hover i {
            color: #fff;
        }

        .dept-english-float-item:hover .dept-english-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-english-admission-btn {
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

        .dept-english-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-english-admission-btn:hover {
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
            .dept-english-wrapper {
                padding-bottom: 160px;
            }

            .dept-english-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-english-img img {
                padding-left: 0%;
            }

            .dept-english-floating {
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

            .dept-english-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-english-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-english-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-english-float-item:active i {
                color: var(--primary);
            }

            .dept-english-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-english-admission-btn {
                bottom: 95px;
                /* Sits nicely above the 20px nav menu */
                left: 50%;
                right: auto;
                transform: translateX(-50%);
                width: 85%;
                /* Wide enough to be prominent, but doesn't touch screen edges */
                max-width: 350px;
                justify-content: center;
                /* Centers text and arrow */
                padding: 14px 24px;
                font-size: 1rem;
                z-index: 999;
            }

            /* Fix the hover animation to account for the center transform */
            .dept-english-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-english-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-english-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-english-section-title span {
            color: var(--accent);
        }

        .dept-english-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-english-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-english-course-header {
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
        .dept-english-course-header::after {
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
        .dept-english-view-btn {
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

        .dept-english-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-english-course-body {
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
            .dept-english-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-english-img img {
                padding-left: 0%;
            }

            .dept-english-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-english-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-english-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-english-prospects-content {
                padding: 25px 20px;
            }


            .dept-english-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-english-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-english-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-english-intro-text {
            font-size: 1.3rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-english-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-english-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-english-list li {
            margin-bottom: 12px;
        }

        .dept-english-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-english-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-english-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-english-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-english-accordion-header {
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

        .dept-english-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-english-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-english-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-english-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-english-accordion-item.active .dept-english-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-english-accordion-item.active .dept-english-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-english-accordion-item.active .dept-english-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-english-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-english-syllabus-link {
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

        .dept-english-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-english-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-english-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-english-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-english-syllabus-link:hover .dept-english-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-english-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-english-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-english-lab-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            max-width: 1300px;
            margin: 0 auto;
            padding: 40px 50px;
            /* Adds safe spacing on the sides */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
        }

        .dept-english-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-english-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-english-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-english-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-english-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-english-explore-btn {
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

        .dept-english-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-english-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-english-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-english-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-english-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-english-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-english-bullet-list li::before {
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
        .dept-english-events-section {
            /* margin-top: 3vw; */
            animation: fadeInUp 1s ease-out;
        }

        .dept-english-events-box {
            max-width: 1300px;
            height: 350px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            position: relative;
        }

        /* Track */
        .dept-english-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 100s linear infinite;
        }

        .dept-english-events-box:hover .dept-english-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-english-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-english-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-english-events-btn:hover {
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
        .dept-english-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-english-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-english-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-english-table-header {
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
        .dept-english-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-english-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-english-table-acc.active .dept-english-table-content {
            padding: 20px;
        }

        .dept-english-table-acc.active .dept-english-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-english-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-english-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-english-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-english-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-english-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-english-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-english-table td,
        .dept-english-table th {
            white-space: nowrap;
        }

        /* ===== EVENTS + HIGHLIGHTS LAYOUT (REWRITTEN) ===== */

        .dept-english-events-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 3vw;
            align-items: stretch;
        }

        /* LEFT EVENTS */
        .dept-english-events-section {
            display: flex;
            flex-direction: column;
        }

        /* RIGHT HIGHLIGHTS */
        .dept-english-highlights-section {
            display: flex;
            flex-direction: column;
        }

        /* ================= CAROUSEL ================= */

        .dept-english-carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* FORCE LANDSCAPE */
        .dp-track {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
        }

        .dp-slide {
            min-width: 100%;
            aspect-ratio: 16 / 9;
            /* 🔥 KEY FIX */
            position: relative;
        }

        /* IMAGE */
        .dp-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ================= BUTTONS ================= */

        .dp-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(44, 74, 122, 0.75);
            color: #fff;
            border: none;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 2;
            transition: 0.3s;
        }

        .dp-btn.prev {
            left: 12px;
        }

        .dp-btn.next {
            right: 12px;
        }

        .dp-btn:hover {
            background: var(--accent);
        }

        .dp-btn.hidden {
            display: none;
        }

        /* ================= RESPONSIVE ================= */

        /* Tablet */
        @media (max-width: 900px) {
            .dept-english-events-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {

            .dept-english-carousel {
                border-radius: 10px;
            }

            .dp-slide {
                aspect-ratio: 16 / 9;
                /* 🔥 stays landscape ALWAYS */
            }

            .dp-btn {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }

        }

        .dept-english-explore-btn {
            text-decoration: none !important;
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-english-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-english-achievement-tabs {
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
        .dept-english-achievement-content {
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
    </style>

    <div class="dept-english-floating">
        <a href="#dept-home" class="dept-english-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-english-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-english-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-english-float-text">About</span>
        </a>

        <!-- <a href="#dept-vision" class="dept-english-float-item">
          <i class="fa fa-bullseye"></i>
          <span class="dept-english-float-text">Vision & Mission</span>
        </a> -->

        <a href="#dept-courses" class="dept-english-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-english-float-text">Courses</span>
        </a>

        <!-- <a href="#dept-prospects" class="dept-english-float-item">
          <i class="fa fa-file-text"></i>
          <span class="dept-english-float-text">Prospects</span>
        </a> -->

        <a href="#dept-syllabus" class="dept-english-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-english-float-text">Syllabus</span>
        </a>

        <a href="#dept-committee" class="dept-english-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-english-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-english-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-english-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-english-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-english-wrapper">

        <div class="dept-english-heading" id="dept-home">
            <h1>Department of <span>English</span></h1>
            <h2>Royal School of Languages (RSL)</h2>
        </div>

        <div class="dept-english-hero" id="dept-about">

            <div class="dept-english-img">
                <img src="/mobile-assets/rsl.png"
                    alt="Political Science and Public Administration">
            </div>

            <div class="dept-english-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of English the cornerstone of Royal School of Languages is one of
                    the founding departments of Royal Global University. The Department offers a
                    diverse range of courses in the Undergraduate, Postgraduate and Ph.D
                    programmes in Literature Language and Culture.The Department provides a fresh
                    dimension in exploring the fascinating world of literature and language by its
                    innovative teaching, multidisciplinary approach and research- oriented teaching
                    pedagogy by experienced academic professionals. In designing the curriculum,
                    the department has been responsive to the emerging trends of literary, linguistic
                    and cultural theory, covering the fields of Aesthetics, Film / Visual Culture and
                    Literature of North East India.
                </p>



            </div>

        </div>


        <div class="dept-english-prospects-section" id="dept-vision">


            <div class="dept-english-prospects-content">

                <p class="dept-english-intro-text">
                    The department strives to imbibe a transformative experience in the students by instilling
                    sensitivity, curiosity and mainly passion in analyzing the
                    multidimensional fields of literature and language. In doing so the Department aims to develop in
                    the students a strong sense of values and
                    ethics, respect for the individual and society in a vibrant dynamic intellectual environment. The
                    rigorous graduate and post graduate curriculum
                    prepare the students for careers in academics and other leadership fields. Above all the Department
                    aims for the students to master the power of
                    communication and instill confidence and personal integrity in the affairs of everyday life.
                </p>

            </div>
        </div>


        <div class="dept-english-prospects-section" id="dept-vision">
            <h2 class="dept-english-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-english-prospects-content">

                <h3 class="dept-english-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-english-bullet-list">
                    <li>
                        To offer Nationally and Internationally integrated learning of literature and language to
                        create global citizens endowed with sensitivity and inclusive ideal of culture.
                    </li>

                </ul>

                <h3 class="dept-english-subheading">Our Mission</h3>
                <ul class="dept-english-bullet-list">
                    <li>
                        To achieve academic excellence through innovatively designed curriculum of literature,
                        language and culture windowing on the world and the ingenuity of the country.
                    </li>
                    <li>
                        To instill ethical conduct, foresight, critical and imaginative ability in the learners.
                    </li>
                    <li>
                        To develop passion and intellectual curiosity for literature in English and the mother
                        tongue.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-english-courses-section" id="dept-courses">
            <h2 class="dept-english-section-title">Courses <span>Offered</span></h2>

            <div class="dept-english-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-english-prospects-section" id="dept-prospects">
          <h2 class="dept-english-section-title">Career <span>Prospects</span></h2>

          <div class="dept-english-prospects-content">
            <p class="dept-english-intro-text">
              The prospects after a B.Sc. in Physics are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-english-subheading">Higher Education Opportunities</h3>
            <ol class="dept-english-list">
              <li>M.Sc. in Physics (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-english-subheading">Government Sector Jobs</h3>
            <ol class="dept-english-list">
              <li>Agricultural Officer / Physics Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-english-subheading">Private Sector Careers</h3>
            <ol class="dept-english-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Physics officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-english-subheading">Research & Teaching</h3>
            <ol class="dept-english-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-english-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-english-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-english-subheading">Jobs Abroad</h3>
            <ol class="dept-english-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-english-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-english-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Physics</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-english-accordion-section" id="dept-syllabus">
            <h2 class="dept-english-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-english-accordion-wrapper">


                <div class="dept-english-accordion-item active">
                    <div class="dept-english-accordion-header">
                        <div class="dept-english-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-english-chevron"></i>
                    </div>

                    <div class="dept-english-accordion-content">
                        <div class="dept-english-syllabus-list">

                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsl/updated-syllabus/UG-Course-structure.pdf"
                                class="dept-english-syllabus-link" download>
                                <div class="dept-english-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- BA English
                                </div>
                                <i class="fa-solid fa-download dept-english-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSL/UG_English_Syllabus.pdf"
                                class="dept-english-syllabus-link" download>
                                <div class="dept-english-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- BA English
                                </div>
                                <i class="fa-solid fa-download dept-english-download-icon"></i>
                            </a>


                        </div>
                    </div>
                </div>


                <div class="dept-english-accordion-item">
                    <div class="dept-english-accordion-header">
                        <div class="dept-english-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-english-chevron"></i>
                    </div>

                    <div class="dept-english-accordion-content">
                        <div class="dept-english-syllabus-list">

                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/department-all/rsl/updated-syllabus/PG-Course-structure.pdf"
                                class="dept-english-syllabus-link" download>
                                <div class="dept-english-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- MA English
                                </div>
                                <i class="fa-solid fa-download dept-english-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSL/PG_%20English_Syllabus.pdf"
                                class="dept-english-syllabus-link" download>
                                <div class="dept-english-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- MA English
                                </div>
                                <i class="fa-solid fa-download dept-english-download-icon"></i>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="dept-english-accordion-item">
                    <div class="dept-english-accordion-header">
                        <div class="dept-english-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-english-chevron"></i>
                    </div>

                    <div class="dept-english-accordion-content">
                        <div class="dept-english-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-english-syllabus-link" download>
                                <div class="dept-english-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-english-events-section" id="dept-events">

            <h2 class="dept-english-section-title">Events</h2>

            <div class="dept-english-events-box">
                <div class="dept-english-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
                    <a href="#" class="dept-english-events-btn">View All</a>
                </div> -->

        </div>

        <!-- ================= ACHIEVEMENT SECTION ================= -->
        <div class="dept-english-achievement-section" id="dept-achievement">

            <h2 class="dept-english-section-title">
                Achievements
            </h2>

            <!-- Tabs -->
            <div class="dept-english-achievement-tabs">
                <button class="dept-achievement-tab active" data-tab="student">
                    Student Achievement
                </button>

                <button class="dept-achievement-tab" data-tab="faculty">
                    Faculty Achievement
                </button>


            </div>

            <!-- Content -->
            <div class="dept-english-achievement-content">

                <!-- STUDENT TAB -->
                <div class="dept-achievement-pane active" id="student">

                    <div class="dept-english-table-responsive">
                        <table class="dept-english-table">
                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Name</th>
                                    <th>Achievement</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Rohan Wahengbam</td>
                                    <td> Rohan Wahengbam of Batch 2022–2025 was admitted to the MLitt course in English
                                        Literature at the University of Glasgow, School of Critical Studies, for the
                                        September 2026 intake.</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Krishadwipta Pathak</td>
                                    <td>Krishadwipta Pathak of BA 6th Semester was published with a poetry collection
                                        titled Slivers within the Evanescent.</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Krishadwipta Pathak of BA 6th Semester was awarded the Semester Topper Scholarship
                                        for the 1st, 2nd, 3rd, and 5th semesters. </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Krishadwipta Pathak of BA 6th Semester was recognized as a Dean’s Lister for
                                        2025–26.</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Krishadwipta Pathak of BA 6th Semester completed an online Certificate Course in
                                        Korean Language from Yonsei University. </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Dristi Darsana Saikia of BA 4th Semester was awarded 2nd prize in both one-act and
                                        skit at the 39th  AIU Zonal Youth Festival and 3rd position in skit at the AIU
                                        National Youth Festival. </td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Doli Sarma</td>
                                    <td>Doli Sarma of BA English 2nd Semester was awarded 1st prize in the 100m running race
                                        at the Airports Authority of India event. </td>

                                </tr>


                                <tr>
                                    <td>3</td>
                                    <td>Manali Roy</td>
                                    <td>Manali Roy of MA 4th Semester was awarded 1st prize for Neela Khamor Sithi in an
                                        on-the-spot epistolary poetry writing competition. </td>

                                </tr>


                                <tr>
                                    <td>4</td>
                                    <td>Suchetan Sinha</td>
                                    <td>Suchetan Sinha of 2nd Semester was awarded High Commendation at NITMMUN 2026 for
                                        representing Shashi Tharoor in the Lok Sabha committee discussing India’s foreign
                                        policy </td>

                                </tr>



                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- faculty -->
                <div class="dept-achievement-pane" id="faculty">

                    <div class="dept-english-table-responsive">
                        <table class="dept-english-table">
                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Name of the faculty</th>
                                    <th>Achievement</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Prof PJ Mahanta</td>
                                    <td>Krishna Kanta Handique Award awarded by Department of Cultural Affairs, Govt. of
                                        India (2023)  Raseswar Saikia Barbayan Memorial Award offered by Sangeet Sattra,
                                        Assam (2022) </td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Mr. Pankaj Gogoi</td>
                                    <td>Paper title: “Echoes of the Earth: Exploring the Interwoven Realms of Nature, Faith,
                                        Identity and Conservation among the Sonowal Kacharis of Assam” Secured 3rd prize at
                                        the STATE-LEVEL RESEARCH PAPER COMPETITION under the aegis of INDIGENOUS AND TRIBAL
                                        FAITH AND CULTURE DEPARTMENT, GOVT. OF ASSAM. Organised by DIRECTORATE OF INDIGENOUS
                                        AND TRIBAL FAITH AND CULTURE award given by Dr. Ranoj Pegu, Hon'ble Minister of
                                        Education </td>

                                </tr>




                            </tbody>
                        </table>
                    </div>

                </div>




            </div>

        </div>

        <div class="dept-english-table-section" id="dept-committee">

            <h2 class="dept-english-section-title">Table <span>List</span></h2>

            <div class="dept-english-table-grid" id="table-accordion-container"></div>

        </div>





    </div>

    <script>
        const track = document.getElementById("dpTrack");
        const slides = document.querySelectorAll(".dp-slide");
        const prevBtn = document.getElementById("dpPrev");
        const nextBtn = document.getElementById("dpNext");

        let index = 0;
        let autoSlide;

        function updateSlide() {
            track.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            updateSlide();
        }

        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            updateSlide();
        }

        // CLICK EVENTS
        nextBtn.addEventListener("click", nextSlide);
        prevBtn.addEventListener("click", prevSlide);

        // CONDITION: SINGLE IMAGE
        if (slides.length <= 1) {
            prevBtn.classList.add("hidden");
            nextBtn.classList.add("hidden");
        } else {
            autoSlide = setInterval(nextSlide, 3000);
        }
    </script>


    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "MA English",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MA-English"
            },
            {
                title: "BA English | Honours / Honours with Research",
                duration: "4 years",
                link: "https://www.rgu.ac/programs-MA-English"
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
        <div class="dept-english-course-card">

          <div class="dept-english-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-english-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-english-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-english-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-english-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-english-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-english-accordion-content');

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
            "Mr. Shivalal Gautam, Co-Founder of Xomonnoy, delivered an invited talk on Gender and Social Exclusion.",
            "Mr. Mohan Sharma, a researcher, delivered an invited talk on Human-Animal Relationship.",
            "Ms. Juree Hojai, Program Officer of Disability Inclusion at Team Lease Foundation, conducted an interactive session on careers in the development sector.",
            "Dr. Dinesh Goswami, Advisor of Pratishruti Cancer and Palliative Trust, Dibrugarh, along with Mr. Henry Wood from the University of Durham, UK, conducted an interactive session.",
            "Ms. Manjari Nandy, Assistant Professor in the Department of Sociology at The Maharaja Sayajirao University of Baroda and Ph.D. scholar at the Central University of Gujarat, delivered an invited talk.",
            "Dr. Bhargabi Das, Assistant Professor in the Department of Rural Management at Shiv Nadar Institution of Eminence, Greater Noida, delivered an invited talk.",
            "Ms. Suchismita Majumdar, Founder-Director of Swabalambi Foundation, and Mr. Kanhaiya Lal, Senior Co-Worker in Education at SOS Village of Children, delivered an invited talk.",
            "Dr. Bitasta Das, Senior Editor and Instructor at the Indian Institute of Science, Bangalore, conducted a two-day workshop on the intersectionality of social sciences.",
            "Prof. (Dr.) Surajit Ch. Mukhopadhyay, Dean of RSHSS, participated as an in-house resource person.",
            "Dr. Joseph Riamei, Assistant Professor from the School of Social Work at TISS Guwahati Off-Campus, delivered an invited talk.",
            "Ms. Nipurnh Gupta, a global development communication professional from UNICEF, delivered an invited talk.",
            "Mr. Mukund Marodia, Manager of Strategic and Academic Affairs at the Indian School of Development Management, delivered an invited talk.",
            "Dr. Sriparna B. Baruah, former Head (CIE) and Director I/C at IIE, currently Advisor (Livelihood & Entrepreneurship) at NEHHDC, delivered an invited talk.",
            "Mr. Nayan Jyoti Hazarika, Ph.D. scholar from the Department of Social Work, delivered an invited talk.",
            "Dr. Shivani Chauhan Barooah, Chairperson of the Centre for Labour Studies and Social Protection at TISS Guwahati, delivered an invited talk.",
            "Dr. Gayatri Gogoi (AMCH and Pratishruti Trust), Dr. Pankaj Deka (Health City Hospital), and Ms. Nabanita Kalita (N.E News & Prag News) delivered an invited talk.",
            "Mr. Anupam Joya Sharma, a doctoral fellow of Social Epidemiology at IIT Gandhinagar, delivered an invited talk.",
            "Dr. Aarushi Kehkar Malhotra, Senior Manager of Research, Advocacy, and Wellness at Sirona Hygiene Foundation, delivered an invited talk online.",
            "Mr. Sahbaz Ahmed and Mr. Syed Rizwan Ahmed, Advocates from Gauhati High Court, delivered an invited talk.",
            "Ms. Archana Borthakur of Priya Bondhu and Mr. Uttam Teron of Parijat Academy delivered an invited talk.",
            "Dr. Ashok Kumar Das (Dr. B. Barooah Cancer Institute) and Dr. Mythili Hazarika (Gauhati Medical College and Hospital) delivered an invited talk.",
            "Mr. Miguel Das Queah, Executive Director of UTSAH, delivered an invited talk.",
            "Dr. Razdan Sarim Rahman, Assistant Professor at TISS Guwahati, visited the department.",
            "April 17, 2024 | Dr. Dhurjjati Sarma (Gauhati University) | Concept of Indian Literature: Problems and Possibilities.",

            "April 4, 2024 to April 5, 2024 | Madhu Raghavendra, Rashmi Narzary, Amanda Basaiawmoit, Meenakshi Goswami | Spring Orchestra 2024: National level poetry competition, panel discussion on poetry, recitation, and sher-o-shayari.",

            "May 16, 2024 | Prof. Pradipta Borgohain (Gauhati University) | Birth Centenary of Franz Kafka: Essay competition and invited talk on The Relevance of Kafka.",

            "September 9, 2024 | Prof. Pradip Jyoti Mahanta | First Annual Srimanta Sankaradeva Memorial Lecture.",

            "November 5, 2024 | Prof. Amarjyoti Choudhury | Remembering Sudhakantha (Commemorating Dr. Bhupen Hazarika).",

            "November 5, 2024 | Prof. Pradip Jyoti Mahanta, Prof. Shiela Bora, Prof. Shikhar Sharma | Celebrating Recognition of Assamese as a Classical Language.",

            "October 23, 2024 to October 26, 2024 | Prof. Kynpham Sing Nonnynrih, Dr. Moushumi Kandali, Dr. Thiyesieno Keditsu, Mrinal Talukdar, Sushanta Talukdar, Madhu Raghavendra | 18th International and 54th Annual Conference of ELTAI: Exploring Languages and Literatures for Evolving Pedagogical Practices.",

            "November 29, 2024 | Vikram Seth, Dhruba Hazarika, Jahnvi Phukan, Rakhee Kalita Moral | Vikram Seth in Conversation.",

            "February 11, 2025 | Milda Varnauskaite | Workshop on the Art of Storytelling.",

            "February 25, 2025 | Dr. Teresa Garrido-Tamayo (Newcastle University, UK) | Detecting Developmental Language Disorder in Multilingual Children: Research Insights and Practical Guidance.",

            "February 28, 2025 | Prof. Anil K. Boro, Dhruba Hazarika, Prof. Sajal Nag, Prof. Dilip K. Kalita | Panel discussion on Narrating Northeast: Revisiting Alternate Histories.",

            "March 10, 2025 to March 11, 2025 | Prof. Rohini Mokashi-Punekar (IIT Guwahati) | First Research Scholars’ Meet: Inclusive Narratives, Writing for Change.",

            "March 13, 2025 | Sri Pramod Jain (IAS Retd.) | Poetry of Despair and Hope.",

            "March 20, 2025 | Prof. G.N. Devy | Eighteenth Anita Baruah Sarmah Memorial Lecture.",

            "April 29, 2025 to April 30, 2025 | Thiyesiyeno Keditsu, Madhu Raghavendra, Lou Majaw | Spring Orchestra 2025: The Planet’s Palette.",

            "July 24, 2025 | Prof. Sunil Kumar Dutta, Prof. Shiela Bora, Prof. Surajit C. Mukhopadhyay | Managing World Heritage: People, Nature, and Culture in the Context of Northeast.",

            "August 14, 2025 | Dr. Dinesh Baishya, Prof. Sajal Nag, Prof. P.J. Baruah | Partition and Its Resonances (Partition Horrors Remembrance Day).",

            "August 29, 2025 | Dr. Amalesh Gope (Tezpur University) | Understanding Speech Sounds: The Fundamentals of Phonetics and Phonology.",

            "November 15, 2025 | Dr. Sandhya Purecha, Sri Raju Das, Prof. Samudraguptra Kashyap, Anuradha Sarma Pujari | Reminiscing Sudhakantha: A Colloquium on His Life and Variegated Contributions.",

            "Scheduled | Prof. Nani Gopal Mahanta, Prof. Dhruba Jyoti Borah, Prof. Alak Kumar Buragohain | Tradition of Charita Literature of Assam."

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
        <div class="dept-english-event-item">
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
                headers: ["S.No.", "Position in S-BoS", "Name and Designation"],
                rows: [
                    ["1", "Chairperson", "Prof. Indrani Singh Rai, Dean, RSL"],
                    ["2", "Members (ex-officio)", "Dr. Pronami Bhattacharyya"],
                    ["", "", "Prof. Bornali Bhuyan, Prof. Amlandeep Das"],
                    ["3", "One External Academic Expert",
                        "Prof. Lalan Kishore Singh, Dept. of English, Gauhati University"
                    ],
                    ["4", "One External Industry Expert",
                        "Sri Dhruba Jyoti Hazarika, eminent author and former Chairperson, Assam Public Service Commission"
                    ],
                    ["5", "Two teachers nominated by the Vice Chancellor",
                        "Dr. Stuti Goswami, Associate Professor, Dept. of English, RSL (Member-Secy)"
                    ],
                    ["", "", "Dr. Baishalee Rajkhowa Associate Professor, Dept. of English, RSL"]



                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name and Designation", ],
                rows: [
                    ["1", "Head of the Department", "Dr. Pronami Bhattacharyya, Professor ,Chairperson", ],
                    ["2", "Two Professors", "Prof. Indrani Singh Rai, Professor and Dean,Member"],
                    ["", "", "Prof. Bornali Bhuyan , Professor,Member"],
                    ["3", "Two Associate Professors – one of them will be the member secretary ",
                        "Dr. Jasmine Choudhury ,Associate Professor, Dept. of English, Member"
                    ],
                    ["", " ", "Dr. Stuti Goswami,Member Secretary, Member Secretary"],
                    ["4", "Two Assistant Professors holding Ph.D. degree  ",
                        "Dr. Prabuddha Ghosh,Asst. Professor, Dept. of English,Member"
                    ],
                    ["", " ", "Dr Pompi Basumatary ,Asst. Professor, Dept. of English, Member"],
                    ["5", "External member of DRC ", "Prof. Anjali Daimary, HoD English, Gauhati University"]


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
        <div class="dept-english-table-responsive">
          <table class="dept-english-table">
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
        <div class="dept-english-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-english-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-english-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-english-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-english-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-english-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-english-table-content");
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
      <div class="dept-english-event-card">

        <div class="dept-english-event-title">
          ${event.title}
        </div>

        <div class="dept-english-marquee">
          <div class="dept-english-marquee-track">
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
