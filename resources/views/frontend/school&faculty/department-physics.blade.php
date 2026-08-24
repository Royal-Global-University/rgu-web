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

        .dept-physics-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-physics-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-physics-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-physics-heading h1 span {
            color: var(--accent);
        }

        .dept-physics-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-physics-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-physics-img {
            flex: 1;
            position: relative;
        }

        .dept-physics-img img {
            width: 80%;
            padding-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-physics-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-physics-content {
            flex: 1;
        }

        .dept-physics-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-physics-content h3 span {
            color: var(--accent);
        }

        .dept-physics-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
            text-align: justify;
        }

        .dept-physics-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-physics-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-physics-float-item {
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

        .dept-physics-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-physics-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-physics-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-physics-float-item:hover i {
            color: #fff;
        }

        .dept-physics-float-item:hover .dept-physics-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-physics-admission-btn {
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

        .dept-physics-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-physics-admission-btn:hover {
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
            .dept-physics-wrapper {
                padding-bottom: 160px;
            }

            .dept-physics-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-physics-img img {
                padding-left: 0%;
            }

            .dept-physics-floating {
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

            .dept-physics-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-physics-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-physics-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-physics-float-item:active i {
                color: var(--primary);
            }

            .dept-physics-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-physics-admission-btn {
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
            .dept-physics-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-physics-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-physics-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-physics-section-title span {
            color: var(--accent);
        }

        .dept-physics-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-physics-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-physics-course-header {
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
        .dept-physics-course-header::after {
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
        .dept-physics-view-btn {
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

        .dept-physics-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-physics-course-body {
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
            .dept-physics-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-physics-img img {
                padding-left: 0%;
            }

            .dept-physics-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-physics-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-physics-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-physics-prospects-content {
                padding: 25px 20px;
            }


            .dept-physics-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-physics-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-physics-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-physics-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-physics-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-physics-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-physics-list li {
            margin-bottom: 12px;
        }

        .dept-physics-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-physics-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-physics-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-physics-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-physics-accordion-header {
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

        .dept-physics-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-physics-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-physics-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-physics-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-physics-accordion-item.active .dept-physics-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-physics-accordion-item.active .dept-physics-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-physics-accordion-item.active .dept-physics-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-physics-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-physics-syllabus-link {
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

        .dept-physics-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-physics-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-physics-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-physics-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-physics-syllabus-link:hover .dept-physics-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-physics-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-physics-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-physics-lab-container {
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

        .dept-physics-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-physics-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-physics-lab-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-physics-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-physics-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-physics-explore-btn {
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

        .dept-physics-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-physics-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-physics-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-physics-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-physics-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-physics-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-physics-bullet-list li::before {
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
        .dept-physics-events-section {
            /* margin-top: 3vw; */
            animation: fadeInUp 1s ease-out;
        }

        .dept-physics-events-box {
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
        .dept-physics-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 100s linear infinite;
        }

        .dept-physics-events-box:hover .dept-physics-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-physics-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-physics-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-physics-events-btn:hover {
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
        .dept-physics-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-physics-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-physics-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-physics-table-header {
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
        .dept-physics-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-physics-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-physics-table-acc.active .dept-physics-table-content {
            padding: 20px;
        }

        .dept-physics-table-acc.active .dept-physics-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-physics-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-physics-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-physics-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-physics-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-physics-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-physics-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-physics-table td,
        .dept-physics-table th {
            white-space: nowrap;
        }

        /* ===== EVENTS + HIGHLIGHTS LAYOUT (REWRITTEN) ===== */

        .dept-physics-events-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 3vw;
            align-items: stretch;
        }

        /* LEFT EVENTS */
        .dept-physics-events-section {
            display: flex;
            flex-direction: column;
        }

        /* RIGHT HIGHLIGHTS */
        .dept-physics-highlights-section {
            display: flex;
            flex-direction: column;
        }

        /* ================= CAROUSEL ================= */

        .dept-physics-carousel {
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
            .dept-physics-events-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {

            .dept-physics-carousel {
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

        .dept-physics-explore-btn {
            text-decoration: none !important;
        }
    </style>

    <div class="dept-physics-floating">
        <a href="#dept-home" class="dept-physics-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-physics-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-physics-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-physics-float-text">About</span>
        </a>

        <!-- <a href="#dept-vision" class="dept-physics-float-item">
              <i class="fa fa-bullseye"></i>
              <span class="dept-physics-float-text">Vision & Mission</span>
            </a> -->

        <a href="#dept-courses" class="dept-physics-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-physics-float-text">Courses</span>
        </a>

        <!-- <a href="#dept-prospects" class="dept-physics-float-item">
              <i class="fa fa-file-text"></i>
              <span class="dept-physics-float-text">Prospects</span>
            </a> -->

        <a href="#dept-syllabus" class="dept-physics-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-physics-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-physics-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-physics-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-physics-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-physics-float-text">Committee</span>
        </a>

        <a href="#dept-lab" class="dept-physics-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-physics-float-text">Lab</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-physics-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-physics-wrapper">

        <div class="dept-physics-heading" id="dept-home">
            <h1>Department of <span>Physics</span></h1>
            <h2>Royal School of Applied and Pure Sciences (RSAPS)</h2>
        </div>

        <div class="dept-physics-hero" id="dept-about">

            <div class="dept-physics-img">
                <img src="mobile-assets/rsaps-new-dept/physics/head-img.png" alt="Architecture">
            </div>

            <div class="dept-physics-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Physics gained momentum with full-fledged UG and PG courses in 2017. The department
                    offers
                    Ph.D. programs with a total of 8 full-time faculties. The department is graced with experienced
                    professors and
                    one advisor. All the faculty members are Ph.D. holders with many research papers in reputed journals,
                    and a
                    dedicated laboratory in-charge to help the students individually during the laboratory period. Fully
                    dedicated
                    faculties from 9:00 am to 5:15 pm and all the laboratories are well equipped with all the necessary
                    instruments with four laboratories, including one dark room and one research lab with remedial and
                    guidance
                    classes for different competitive examinations from time to time.
                </p>



            </div>

        </div>

        <!-- vision mission  -->
        <div class="dept-physics-prospects-section" id="dept-vision">
            <h2 class="dept-physics-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-physics-prospects-content">

                <h3 class="dept-physics-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-physics-bullet-list">
                    <li>
                        To empower students with the skills and knowledge needed to excel in regional, national, and
                        international
                        arenas to create valued citizens of society.
                    </li>

                </ul>

                <h3 class="dept-physics-subheading">Our Mission</h3>
                <ul class="dept-physics-bullet-list">
                    <li>To provide excellent education through an innovative-designed curriculum having intensive research
                        with
                        industry relevance.</li>
                    <li>Promote a sense of responsibility and integrity via community service, aligning students with the
                        ethical
                        dimensions of physics in society.</li>
                    <li>To build responsible citizens in society for a better world.</li>
                </ul>

            </div>
        </div>

        <div class="dept-physics-courses-section" id="dept-courses">
            <h2 class="dept-physics-section-title">Courses <span>Offered</span></h2>

            <div class="dept-physics-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-physics-prospects-section" id="dept-prospects">
              <h2 class="dept-physics-section-title">Career <span>Prospects</span></h2>

              <div class="dept-physics-prospects-content">
                <p class="dept-physics-intro-text">
                  The prospects after a B.Sc. in Physics are diverse and promising, in regard to the growing importance of
                  sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                  strong foundation in agricultural sciences, preparing them for following careers opportunities:
                </p>

                <h3 class="dept-physics-subheading">Higher Education Opportunities</h3>
                <ol class="dept-physics-list">
                  <li>M.Sc. in Physics (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                  </li>
                  <li>MBA in Agribusiness Management</li>
                  <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                  <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                    disciplines</li>
                </ol>

                <h3 class="dept-physics-subheading">Government Sector Jobs</h3>
                <ol class="dept-physics-list">
                  <li>Agricultural Officer / Physics Development Officer (ADO)</li>
                  <li>IBPS AFO (Agricultural Field Officer)</li>
                  <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                  <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                  <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                </ol>

                <h3 class="dept-physics-subheading">Private Sector Careers</h3>
                <ol class="dept-physics-list">
                  <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                  <li>Food Processing Industries</li>
                  <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                  <li>Banking &amp; Insurance – Physics officers in banks or crop insurance companies</li>
                  <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                </ol>

                <h3 class="dept-physics-subheading">Research & Teaching</h3>
                <ol class="dept-physics-list">
                  <li>Research Assistant / Scientist – in public and private research institutions</li>
                  <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                  <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                </ol>

                <h3 class="dept-physics-subheading">Entrepreneurship & Startups</h3>
                <ol class="dept-physics-list">
                  <li>Organic farming, dairy, poultry, aquaculture</li>
                  <li>Agri-tourism, greenhouse farming, vertical farming</li>
                  <li>Processing units for spices, cereals, or fruits</li>
                  <li>Agri-consultancy or freelance advisory services</li>
                </ol>

                <h3 class="dept-physics-subheading">Jobs Abroad</h3>
                <ol class="dept-physics-list">
                  <li>Agricultural research, farm management, and food security projects</li>
                  <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                  <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                </ol>

                <h3 class="dept-physics-subheading">Key Skills That Boost Career</h3>
                <ol class="dept-physics-list">
                  <li>Practical knowledge of farming tools and technologies</li>
                  <li>Communication and management skills (especially in extension or agribusiness)</li>
                  <li>Computer literacy – GIS, remote sensing, and data analytics in Physics</li>
                  <li>Language skills and report writing</li>
                </ol>

              </div>
            </div> -->

        <div class="dept-physics-accordion-section" id="dept-syllabus">
            <h2 class="dept-physics-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-physics-accordion-wrapper">

                <div class="dept-physics-accordion-item active">
                    <div class="dept-physics-accordion-header">
                        <div class="dept-physics-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-physics-chevron"></i>
                    </div>

                    <div class="dept-physics-accordion-content">
                        <div class="dept-physics-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/department-all/dept-physics/updated-syllabus/structure-ug.pdf"
                                class="dept-physics-syllabus-link">
                                <div class="dept-physics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Physics
                                </div>
                                <i class="fa-solid fa-download dept-physics-download-icon"></i>
                            </a>
                            <a target="_blank" href="/new-web/assets/syllabus/RSAPS_Syllabus AY 2026-27 for Website Upload/B.Sc. Physics_Syllabus AY 2026-27.pdf"
                                class="dept-physics-syllabus-link">
                                <div class="dept-physics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Physics
                                </div>
                                <i class="fa-solid fa-download dept-physics-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-physics-accordion-item">
                    <div class="dept-physics-accordion-header">
                        <div class="dept-physics-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-physics-chevron"></i>
                    </div>

                    <div class="dept-physics-accordion-content">
                        <div class="dept-physics-syllabus-list">
                            <a target="_blank"
                                href="/mobile-assets/department-all/dept-physics/updated-syllabus/structure-pg.pdf"
                                class="dept-physics-syllabus-link">
                                <div class="dept-physics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus -- Physics
                                </div>
                                <i class="fa-solid fa-download dept-physics-download-icon"></i>
                            </a>
                            <a target="_blank" href="/new-web/assets/syllabus/RSAPS_Syllabus AY 2026-27 for Website Upload/M.Sc. Physics_Syllabus AY 2026-27.pdf"
                                class="dept-physics-syllabus-link">
                                <div class="dept-physics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus -- Physics
                                </div>
                                <i class="fa-solid fa-download dept-physics-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-physics-accordion-item">
                    <div class="dept-physics-accordion-header">
                        <div class="dept-physics-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-physics-chevron"></i>
                    </div>

                    <div class="dept-physics-accordion-content">
                        <div class="dept-physics-syllabus-list">
                            <a href="/phd" class="dept-physics-syllabus-link" download>
                                <div class="dept-physics-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-physics-events-wrapper" id="dept-events">

            <!-- LEFT: EVENTS -->
            <div class="dept-physics-events-section">
                <h2 class="dept-physics-section-title">Events</h2>

                <div class="dept-physics-events-box">
                    <div class="dept-physics-events-track" id="events-track"></div>
                </div>
            </div>

            <!-- RIGHT: HIGHLIGHTS -->
            <div class="dept-physics-highlights-section">

                <h2 class="dept-physics-section-title">Departmental <span>Highlights</span></h2>

                <div class="dept-physics-carousel">

                    <div class="dp-track" id="dpTrack">

                        <!-- ADD IMAGES HERE -->
                        <div class="dp-slide">
                            <img src="/mobile-assets/department-all/dept-physics/highlights/achievement1.png" />
                        </div>



                    </div>

                    <!-- CONTROLS -->
                    <button class="dp-btn prev" id="dpPrev">&#10094;</button>
                    <button class="dp-btn next" id="dpNext">&#10095;</button>

                </div>

            </div>

        </div>

        <div class="dept-physics-table-section" id="dept-committee">

            <h2 class="dept-physics-section-title">Table <span>List</span></h2>

            <div class="dept-physics-table-grid" id="table-accordion-container"></div>

        </div>

        <div class="dept-physics-prospects-section" id="dept-lab">
            <h2 class="dept-physics-section-title">Our <span>Lab</span></h2>

            <div class="dept-physics-prospects-content">

                <h3 class="dept-physics-lab-heading">Physics Lab</h3>

                <p class="dept-physics-lab-intro">
                    Our Physics laboratory is well-equipped with modern instruments to help students understand the concepts
                    of
                    Physics through experiments. It is designed to assist and guide students in taking measurements,
                    analyzing
                    data, and drawing inferences during practical work. There are separate laboratories dedicated to B.Sc.
                    and
                    M.Sc. Physics students, equipped with basic to advanced experimental setups according to semester
                    requirements. Students are encouraged to perform hands-on experiments under expert supervision, enabling
                    them
                    to gain detailed practical insights.
                </p>

                <h3 class="dept-physics-subheading" style="margin-top: 0;">Lab Instruments Includes</h3>
                <ul class="dept-physics-bullet-list">
                    <li>
                        Four Probe Experimental Set-up
                    </li>
                    <li>
                        Hall Effect Set-up
                    </li>
                    <li>
                        Michelson Interferometer
                    </li>
                    <li>
                        Fabry-Perot Interferometer
                    </li>
                    <li>
                        Ultrasonic Velocity Measurements Set-up
                    </li>
                    <li>
                        Thomsons e/m Measurements Set-up
                    </li>
                    <li>
                        Millikan’s Oil Drop Experimental Set-up
                    </li>
                    <li>
                        Geiger-Müller (GM) Counter
                    </li>
                    <li>
                        LED/PIN Photo Detector/ Photo-diode/ Solar-Cell Characteristics Study Set-up
                    </li>
                    <li>
                        Lattice Vibrational Kit
                    </li>
                    <li>
                        Frank and Hertz Experimental Set-up
                    </li>
                    <li>
                        Babinet Compensator
                    </li>
                    <li>
                        Fresnel Biprism
                    </li>
                    <li>
                        Electron Spin Resonance (ESR) Spectrometer
                    </li>
                    <li>
                        BJT/FET/ Zener Diode/ LCR circuit etc.
                    </li>

                </ul>

                <div class="dept-physics-lab-gallery">

                    <img src="mobile-assets/rsaps-new-dept/physics/1.jpg" alt="Lab 1" class="dept-physics-lab-img">
                    <img src="mobile-assets/rsaps-new-dept/physics/2.jpg" alt="Lab 2" class="dept-physics-lab-img">
                    <img src="mobile-assets/rsaps-new-dept/physics/3.jpg" alt="Lab 3" class="dept-physics-lab-img">
                    <img src="mobile-assets/rsaps-new-dept/physics/4.jpg" alt="Lab 4" class="dept-physics-lab-img">

                </div>

            </div>
        </div>

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. - Physics",
                duration: "2 years",
                link: "/programs-MSc-Physics"
            },
            {
                title: "B.Sc. - Physics | Honours / Honours with Research",
                duration: "4 years as per NEP",
                link: "/programs-b-sc-physics"
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
        <div class="dept-physics-course-card">

          <div class="dept-physics-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-physics-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-physics-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-physics-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-physics-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-physics-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-physics-accordion-content');

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
            "On 14.05.2025, a one-day seminar on the Centenary Anniversary of Quantum Mechanics was conducted.",
            "On 28.03.2025, an invited talk by Prof. Bipin Kumar Gupta was organized.",
            "On 19.03.2025, an invited talk by Dr. Namrata Gogoi took place.",
            "On 28.02.2025, the \"National Science Day Celebration\" was held.",
            "On 24.02.2025, an invited talk by Dr. Hemen Kumar Kalita was conducted.",
            "On 21.02.2025, a field visit to CPP-IPR, Guwahati was organized.",

            "On 29.10.2024, an Invited Talk by Dr. Angaraj Duara was held.",
            "On 28.10.2024, a Webinar on Simulation Technique with Python Coding was delivered by Dr. Subir Sarkar.",
            "On 26.09.2024, a Badminton Tournament was organized in collaboration with Arya Vidyapeeth College, Guwahati.",
            "On 16.09.2024, a Career Guidance Program was conducted.",
            "On 10.09.2024, an Outreach Program was organized.",

            "On 06.12.2023 to 07.12.2023, an Online Lecture Series was organized.",
            "On 24.03.2023, an Outreach Program was conducted.",
            "On 15.03.2023 to 18.03.2023, a Cricket Tournament was organized.",
            "On 02.03.2023, a Talk-cum-Interactive Session was conducted.",
            "On 28.02.2023, the departmental magazine was launched.",
            "On 28.02.2023, the \"National Science Day Celebration\" was held.",

            "On 17.12.2022, another field trip was organized.",
            "On 03.12.2022, a field trip was conducted.",
            "On 31.10.2022, an interactive session was organized.",
            "On 09.09.2022 to 13.09.2022, the Orientation Programme (PG) was held.",
            "On 30.08.2022, an interactive session was conducted.",
            "On 16.08.2022, a Reorientation Programme was organized.",
            "On 01.06.2022, an interactive session with Dr. Angaraj Duara was held.",
            "On 27.04.2022 to 29.04.2022, an Interschool Volleyball Tournament was held.",
            "On 28.04.2022, an interactive session with an ex-student was conducted.",
            "On 23.04.2022, a field trip to the UDYAM 2022 Industrial Fair, Khanapara was organized.",
            "On 28.02.2022, National Science Day was celebrated.",

            "On 15.12.2021, a field trip to the Bureau of Indian Standards (BIS) Laboratory, Guwahati was organized.",
            "On 02.12.2021, the PG 1st Semester Orientation Programme was organized.",
            "On 25.11.2021, an interactive session with Dr. Debashish Borah (IIT Guwahati) was held.",
            "On 01.06.2021 to 02.06.2021, the International Conference (EAST 2021) was conducted.",
            "On 15.03.2021, a Parents–Teachers Interaction session took place.",
            "On 06.03.2021, a field trip to Umium was organized.",
            "On 03.03.2021, the \"National Science Day Celebration\" was held.",

            "On 13.03.2020, an interactive session with Priyanka Das Rajkakati took place.",
            "On 28.02.2020, the \"National Science Day Celebration\" was held.",
            "On 14.02.2020, an educational trip to the Regional Science Museum, Guwahati was organized.",

            "On 18.11.2019 to 19.11.2019, a field trip to the Centre of Plasma Physics was organized.",
            "On 06.08.2019, a \"Student Development Programme\" was conducted.",
            "On 29.04.2019, a Parents–Teacher Interaction session took place.",
            "On 15.03.2019, an invited talk by Dr. Gauranga Dhar Baruah was delivered.",
            "On 28.02.2019, the \"National Science Day Celebration\" was organized.",
            "On 18.01.2019, the \"Re Orientation Programme\" was held.",

            "On 15.11.2018 to 16.11.2018, the \"Science Conclave\" was held.",
            "On 12.10.2018, a field trip to North Eastern Space Applications Centre (NESAC) was organized.",
            "On 26.09.2018, a visit to Tetelia School took place.",
            "On 12.09.2018, the \"Freshers’ Social Programme\" was organized.",
            "On 27.07.2018, the \"Student Development Program\" was conducted.",
            "On 12.02.2018, the event \"Student Interaction\" was held."
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
        <div class="dept-physics-event-item">
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
        const tableData = [{
                title: "The Board of Studies",
                headers: ["S.No.", "Name & Profile", "Category", "Role"],
                rows: [
                    ["1", "Dr. Maidul Islam, Assistant Professor & Co-ordinator", "Ex-Officio", "Convener"],

                    ["2", "Prof. (Dr.) Amarendra Rajput", "Ex-Officio", "Member"],

                    ["", "Dr. Devika Phukan", "Ex-Officio", "Member"],
                    ["", "Dr. Sankar Barman", "Ex-Officio", "Member"],
                    ["", "Dr. Bornali Chetia", "Ex-Officio", "Member"],
                    ["", "Dr. Koushik Saikia", "Ex-Officio", "Member"],
                    ["", "Dr. Nitu Borgohain", "Ex-Officio", "Member"],
                    ["External Academic Member", "", "", ""],
                    ["3", "Prof. (Dr.) Anurup Gohain Barua, Professor, Department of Physics, Gauhati University.",
                        "Nominated", "Member"
                    ],
                    ["External Industry Member", "", "", ""],

                    ["4", "Mr. Hemendra Ch. Das Rtd. Group General Manager, Oil India.", "Nominated", "Member"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name", "Designation", "Role"],
                rows: [
                    ["1", "Head of the Department", "Dr. Maidul Islam", "Assistant Professor", "Chairperson"],

                    ["2", "Two Professors, including the Dean of the School", "Prof. Amarendra Rajput", "Professor",
                        "Member"
                    ],

                    ["3", "", "Prof. Aniruddha Chatterjee", "Professor", "Member"],

                    ["4", "Two Associate Professors – one of them will be the member secretary",
                        "Dr. Sankar Barman", "Associate Professor", "Member Secretary"
                    ],

                    ["5", "", "Dr. Devika Phukan", "Associate Professor", "Member"],
                    ["6", "Two Assistant Professors holding Ph.D. degree", "Dr. Bornali Chetia",
                        "Assistant Professor", "Member"
                    ],
                    ["7", "", "Dr. Faizuddin Ahmed", "Assistant Professor (Research)", "Member"],
                    ["8",
                        "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC",
                        "Prof. Anurup Gohain Barua", "Gauhati University", "Member"
                    ]

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
        <div class="dept-physics-table-responsive">
          <table class="dept-physics-table">
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
        <div class="dept-physics-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-physics-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-physics-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-physics-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-physics-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-physics-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-physics-table-content");
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
@endsection
