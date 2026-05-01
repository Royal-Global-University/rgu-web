
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

        .dept-maths-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-maths-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-maths-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-maths-heading h1 span {
            color: var(--accent);
        }

        .dept-maths-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-maths-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-maths-img {
            flex: 1;
            position: relative;
        }

        .dept-maths-img img {
            width: 95%;
            padding-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-maths-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-maths-content {
            flex: 1;
        }

        .dept-maths-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-maths-content h3 span {
            color: var(--accent);
        }

        .dept-maths-content p {
            font-size: clamp(1.3rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-maths-content ol li {
            font-size: clamp(1.2rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-maths-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-maths-float-item {
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

        .dept-maths-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-maths-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-maths-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-maths-float-item:hover i {
            color: #fff;
        }

        .dept-maths-float-item:hover .dept-maths-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-maths-admission-btn {
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

        .dept-maths-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-maths-admission-btn:hover {
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
            .dept-maths-wrapper {
                padding-bottom: 160px;
            }

            .dept-maths-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-maths-img img {
                padding-left: 0%;
            }

            .dept-maths-floating {
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

            .dept-maths-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-maths-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-maths-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-maths-float-item:active i {
                color: var(--primary);
            }

            .dept-maths-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-maths-admission-btn {
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
            .dept-maths-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-maths-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-maths-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-maths-section-title span {
            color: var(--accent);
        }

        .dept-maths-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-maths-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-maths-course-header {
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
        .dept-maths-course-header::after {
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
        .dept-maths-view-btn {
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

        .dept-maths-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-maths-course-body {
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
            .dept-maths-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-maths-img img {
                padding-left: 0%;
            }

            .dept-maths-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-maths-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-maths-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-maths-prospects-content {
                padding: 25px 20px;
            }


            .dept-maths-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-maths-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-maths-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-maths-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-maths-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-maths-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-maths-list li {
            margin-bottom: 12px;
        }

        .dept-maths-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-maths-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-maths-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-maths-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-maths-accordion-header {
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

        .dept-maths-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-maths-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-maths-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-maths-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-maths-accordion-item.active .dept-maths-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-maths-accordion-item.active .dept-maths-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-maths-accordion-item.active .dept-maths-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-maths-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-maths-syllabus-link {
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

        .dept-maths-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-maths-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-maths-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-maths-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-maths-syllabus-link:hover .dept-maths-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-maths-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-maths-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-maths-lab-container {
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

        .dept-maths-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-maths-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-maths-lab-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-maths-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-maths-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-maths-explore-btn {
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

        .dept-maths-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-maths-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-maths-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-maths-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-maths-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-maths-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-maths-bullet-list li::before {
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
        .dept-maths-events-section {
            /* margin-top: 3vw; */
            animation: fadeInUp 1s ease-out;
        }

        .dept-maths-events-box {
            width: 100%;
            max-width: 1300px;
            /* keeps desktop design intact */
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
        .dept-maths-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 100s linear infinite;
        }

        .dept-maths-events-box:hover .dept-maths-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-maths-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-maths-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-maths-events-btn:hover {
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
        .dept-maths-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-maths-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-maths-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-maths-table-header {
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
        .dept-maths-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-maths-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-maths-table-acc.active .dept-maths-table-content {
            padding: 20px;
        }

        .dept-maths-table-acc.active .dept-maths-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-maths-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-maths-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-maths-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-maths-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-maths-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-maths-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-maths-table td,
        .dept-maths-table th {
            white-space: nowrap;
        }

        /* ===== EVENTS + HIGHLIGHTS LAYOUT (REWRITTEN) ===== */

        .dept-maths-events-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 3vw;
            align-items: stretch;
        }

        /* LEFT EVENTS */
        .dept-maths-events-section {
            display: flex;
            flex-direction: column;
        }

        /* RIGHT HIGHLIGHTS */
        .dept-maths-highlights-section {
            display: flex;
            flex-direction: column;
        }

        /* ================= CAROUSEL ================= */

        .dept-maths-carousel {
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
            .dept-maths-events-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {

            .dept-maths-carousel {
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

        .dept-maths-explore-btn {
            text-decoration: none !important;
        }
    </style>

        <div class="dept-maths-floating">
        <a href="#dept-home" class="dept-maths-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-maths-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-maths-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-maths-float-text">About</span>
        </a>

        <!-- <a href="#dept-vision" class="dept-maths-float-item">
      <i class="fa fa-bullseye"></i>
      <span class="dept-maths-float-text">Vision & Mission</span>
    </a> -->

        <a href="#dept-courses" class="dept-maths-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-maths-float-text">Courses</span>
        </a>

        <!-- <a href="#dept-prospects" class="dept-maths-float-item">
      <i class="fa fa-file-text"></i>
      <span class="dept-maths-float-text">Prospects</span>
    </a> -->

        <a href="#dept-syllabus" class="dept-maths-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-maths-float-text">Syllabus</span>
        </a>

        <a href="#dept-publications" class="dept-maths-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-maths-float-text">Publications</span>
        </a>

        <a href="#dept-committee" class="dept-maths-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-maths-float-text">Committee</span>
        </a>



    </div>

    <a href="https://admissions.rgu.ac/" class="dept-maths-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-maths-wrapper">

        <div class="dept-maths-heading" id="dept-home">
            <h1>Department of <span>Mathematics</span></h1>
            <h2>Royal School of Applied and Pure Sciences (RSAPS)</h2>
        </div>

        <div class="dept-maths-hero" id="dept-about">

            <div class="dept-maths-img">
                <img src="mobile-assets/rsaps-new-dept/mathematics/headimg.png" alt="Mathematics">
            </div>

            <div class="dept-maths-content">
                <h3>About <span>Department</span></h3>
                <p>
                    Department of mathematics is a constituent part of Royal School of Applied & Pure Sciences was
                    formed in July, 2017 under The Assam Royal Global University, Guwahati. The department is presently
                    offering courses like B.Sc. Mathematics, M.Sc. Mathematics and Ph.D. in Mathematics. The department
                    is blessed with 4 senior experienced faculty members along with 10 young, energetic and dedicated
                    faculty members who leave no stone unturned to present the aspiring students, the principles and
                    concepts of mathematics. All the faculty members of the department are actively involved in teaching
                    and research in different thrust areas like Fluid dynamics, Mathematical Modelling, Functional
                    Analysis, Fuzzy Mathematics, Integro-differential Equations, Mathematical Education, Statistical and
                    Data Analysis and Multidisciplinary Research.
                </p>

            </div>




        </div>

        <div class="dept-maths-prospects-content">

            <p class="dept-maths-intro-text">The course learning outcomes of Mathematics are aimed at fascinating the
                learners to acquire knowledge, skills, understanding, values, attributes and academic standards. Besides
                imparting regular courses, the department is also preparing the student for higher study in reputed
                institutions by providing JAM coaching to UG students and NET/GATE coaching to PG students. For the
                betterment of the students, the department often organized seminar, workshop, conference, webinar,
                motivational talk, guest lectures by renowned mathematician, field trips, annual events like National
                Mathematics Day, National Science Day, Pi-Day and also involve the students in sports, club activities
                and corporate interaction. The students after completing their UG and PG degrees in Mathematics can take
                up their career paths in Data Analysis, Actuarial Science, Finance and Banking, Computer Science and
                Information Technology, Engineering and Applied Sciences, Teaching, Government and Public Sector jobs,
                Entrepreneurship, and in Academic Research</p>


        </div>

        <!-- vision mission  -->
        <div class="dept-maths-prospects-section" id="dept-vision">
            <h2 class="dept-maths-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-maths-prospects-content">

                <h3 class="dept-maths-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-maths-bullet-list">
                    <li>
                        To be recognized nationally and internationally for its excellence in teaching and research,
                        providing excellent Mathematical skills to students and to create a platform for
                        encouraging outcome-based research environment.
                    </li>

                </ul>

                <h3 class="dept-maths-subheading">Our Mission</h3>
                <ul class="dept-maths-bullet-list">
                    <li>To achieve academic excellence through innovatively designed, research
                        intensive, industry-oriented education.
                    </li>
                    <li>To incorporate community service to instill ethical conduct and compassion
                        amongst the stakeholders</li>
                    <li>To provide an environment where students can learn, become competent users
                        of mathematics, and understand the use of mathematics in other disciplines.</li>
                </ul>

            </div>
        </div>

        <div class="dept-maths-courses-section" id="dept-courses">
            <h2 class="dept-maths-section-title">Courses <span>Offered</span></h2>

            <div class="dept-maths-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-maths-prospects-section" id="dept-prospects">
      <h2 class="dept-maths-section-title">Career <span>Prospects</span></h2>

      <div class="dept-maths-prospects-content">
        <p class="dept-maths-intro-text">
          The prospects after a B.Sc. in Physics are diverse and promising, in regard to the growing importance of
          sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
          strong foundation in agricultural sciences, preparing them for following careers opportunities:
        </p>

        <h3 class="dept-maths-subheading">Higher Education Opportunities</h3>
        <ol class="dept-maths-list">
          <li>M.Sc. in Physics (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
          </li>
          <li>MBA in Agribusiness Management</li>
          <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
          <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
            disciplines</li>
        </ol>

        <h3 class="dept-maths-subheading">Government Sector Jobs</h3>
        <ol class="dept-maths-list">
          <li>Agricultural Officer / Physics Development Officer (ADO)</li>
          <li>IBPS AFO (Agricultural Field Officer)</li>
          <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
          <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
          <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
        </ol>

        <h3 class="dept-maths-subheading">Private Sector Careers</h3>
        <ol class="dept-maths-list">
          <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
          <li>Food Processing Industries</li>
          <li>Agri-Tech Startups – technology-based agricultural solutions</li>
          <li>Banking &amp; Insurance – Physics officers in banks or crop insurance companies</li>
          <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
        </ol>

        <h3 class="dept-maths-subheading">Research & Teaching</h3>
        <ol class="dept-maths-list">
          <li>Research Assistant / Scientist – in public and private research institutions</li>
          <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
          <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
        </ol>

        <h3 class="dept-maths-subheading">Entrepreneurship & Startups</h3>
        <ol class="dept-maths-list">
          <li>Organic farming, dairy, poultry, aquaculture</li>
          <li>Agri-tourism, greenhouse farming, vertical farming</li>
          <li>Processing units for spices, cereals, or fruits</li>
          <li>Agri-consultancy or freelance advisory services</li>
        </ol>

        <h3 class="dept-maths-subheading">Jobs Abroad</h3>
        <ol class="dept-maths-list">
          <li>Agricultural research, farm management, and food security projects</li>
          <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
          <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
        </ol>

        <h3 class="dept-maths-subheading">Key Skills That Boost Career</h3>
        <ol class="dept-maths-list">
          <li>Practical knowledge of farming tools and technologies</li>
          <li>Communication and management skills (especially in extension or agribusiness)</li>
          <li>Computer literacy – GIS, remote sensing, and data analytics in Physics</li>
          <li>Language skills and report writing</li>
        </ol>

      </div>
    </div> -->

        <div class="dept-maths-accordion-section" id="dept-syllabus">
            <h2 class="dept-maths-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-maths-accordion-wrapper">

                <div class="dept-maths-accordion-item active">
                    <div class="dept-maths-accordion-header">
                        <div class="dept-maths-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-maths-chevron"></i>
                    </div>

                    <div class="dept-maths-accordion-content">
                        <div class="dept-maths-syllabus-list">
                            <a target="_blank"
                                href="mobile-assets/rsaps-new-dept/mathematics/syllabus/B.Sc. Maths Syllabus AY 2023-24 31.12.2025.pdf"
                                class="dept-maths-syllabus-link">
                                <div class="dept-maths-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- B.Sc. Mathematics
                                </div>
                                <i class="fa-solid fa-download dept-maths-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-maths-accordion-item">
                    <div class="dept-maths-accordion-header">
                        <div class="dept-maths-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-maths-chevron"></i>
                    </div>

                    <div class="dept-maths-accordion-content">
                        <div class="dept-maths-syllabus-list">
                            <a target="_blank"
                                href="mobile-assets/rsaps-new-dept/mathematics/syllabus/MSc_Maths_NEP_Syllabus AY 2025-26_27.3.2026.pdf"
                                class="dept-maths-syllabus-link">
                                <div class="dept-maths-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Course Structure and Syllabus -- M.Sc. Mathematics
                                </div>
                                <i class="fa-solid fa-download dept-maths-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-maths-accordion-item">
                    <div class="dept-maths-accordion-header">
                        <div class="dept-maths-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-maths-chevron"></i>
                    </div>

                    <div class="dept-maths-accordion-content">
                        <div class="dept-maths-syllabus-list">
                            <a href="https://www.rgu.ac/phd" class="dept-maths-syllabus-link" download>
                                <div class="dept-maths-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-maths-table-section" id="dept-publications">

            <h2 class="dept-maths-section-title">Publica<span>tions</span></h2>

            <div class="dept-maths-table-grid" id="publication-table-container"></div>

        </div>

        <div class="dept-maths-table-section" id="dept-books">

            <h2 class="dept-maths-section-title">Books <span>& Chapters</span></h2>

            <div class="dept-maths-table-grid" id="books-table-container"></div>

        </div>

        <div class="dept-maths-events-section" id="dept-events">

            <h2 class="dept-maths-section-title">Events</h2>

            <div class="dept-maths-events-box">
                <div class="dept-maths-events-track" id="events-track"></div>
            </div>

            <!-- <div style="text-align:center; margin-top:30px;">
        <a href="#" class="dept-maths-events-btn">View All</a>
      </div> -->

        </div>

        <div class="dept-maths-table-section" id="dept-committee">

            <h2 class="dept-maths-section-title">Commi<span>ttee</span></h2>

            <div class="dept-maths-table-grid" id="table-accordion-container"></div>

        </div>

    </div>

    <script>
    // 1. Define the courses array
    const coursesData = [
        {
            title: "M.Sc. - Mathematics",
            duration: "2 years",
            link: "https://www.rgu.ac/programs-MSc-Mathematics"
        },
        {
            title: "B.Sc. - Mathematics | Honours / Honours with Research",
            duration: "4 years as per NEP",
            link: "https://www.rgu.ac/programs-b-sc-mathematics"
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
        <div class="dept-maths-course-card">

          <div class="dept-maths-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-maths-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-maths-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
        }
    }
</script>

<script>
    // --- ACCORDION LOGIC ---
    const accordionHeaders = document.querySelectorAll('.dept-maths-accordion-header');

    // Function to calculate and set the exact height for smooth transitions
    function setAccordionHeights() {
        const activeItems = document.querySelectorAll('.dept-maths-accordion-item.active');
        activeItems.forEach(item => {
            const content = item.querySelector('.dept-maths-accordion-content');
            content.style.maxHeight = content.scrollHeight + "px";
        });
    }

    // Initialize the open item on load
    setAccordionHeights();

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const currentItem = this.parentElement;
            const currentContent = currentItem.querySelector('.dept-maths-accordion-content');

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
        "16-03-2026 | Beauty in Mathematics: With Specific Reference... | Prof. (Dr.) Amarjyoti Choudhury",
        "22-12-2025 | AI as a Research Partner: Tools, Trends, and... | Prof. (Dr.) Manoj Kumar Deka",
        "23-10-2025 | Differential Transform Methods and its Application... | Dr. Ashish Paul",
        "18-08-2025 | Cantor Set: A Mysterious Subset of Real Numbers | Dr. Anuradha Jha",
        "28-03-2025 | Indigenous Development of Strategic Materials... | Prof. (Dr.) Bipin Kumar Gupta",
        "17-03-2025 | Fault-tolerant Mutual Visibility of Mobile Robots | Prof. (Dr.) Partha Sarathi Mandal",
        "04-03-2025 | Number Theory and the Science of Secure Communication | Prof. (Dr.) Shanta Laishram",
        "28-02-2025 | National Science Day 2025 | Prof. (Dr.) Gagan Kumar",
        "19-02-2025 | Career Opportunities | Mr. Akash Saxena",
        "23-12-2024 | The Importance of Mathematics in Daily Life | Dr. Azizur Rahman Sheikh",
        "25-10-2024 | The World of Fractals | Prof. (Dr.) Jiten Chandra Kalita",
        "29-08-2024 | Birth of Fourier Series | Prof. (Dr.) Bhupen Deka",
        "25-08-2024 | Fractional Order Derivative | Prof. (Dr.) Mridula Kanoria",
        "16-08-2024 | Recent Results on Dynamic Contact, Friction... | Prof. (Dr.) Meir Shillor",
        "02-05-2024 | Multilevel Analysis and its Application... | Prof. (Dr.) Laishram Ladu Singh"
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
        <div class="dept-maths-event-item">
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
    const tableData = [
        {
            title: "The Board of Studies",
            headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
            rows: [
                ["1", "Convener (Ex-Officio) - Head of the Department", "Dr. Bimalendu Kalita, Associate Professor & HOD"],

                ["2", "Member (Ex-officio) - All Faculty Members", "Prof. (Dr.) Aniruddha Chatterjee, Professor & Dean, Royal School Applied & Pure Sciences"],
                ["", "", "Prof. (Dr.) Anuradha Devi, Professor"],
                ["", "", "Prof. (Dr.) Dilip Chandra Nath, Professor Emeritus"],
                ["", "", "Prof. (Dr.) Laishram Ladusingh, Professor Emeritus"],
                ["", "", "Dr. Bapan Kalita, Associate Professor"],
                ["", "", "Mr. H. Imo Mani Singha, Assistant Professor"],
                ["", "", "Dr. Parismita Phukan, Assistant Professor"],
                ["", "", "Dr. Marbarisha M. Kharkongar, Assistant Professor"],
                ["", "", "Dr. Bikram Bir, Assistant Professor"],
                ["", "", "Dr. Kshetrimayum Renubebeta Devi, Assistant Professor"],
                ["", "", "Dr. Rupak Kumar Dalai, Assistant Professor"],
                ["", "", "Dr. Neelav Sarma, Assistant Professor"],

                ["3", "External Expert (Academic)", "Prof. (Dr.) Nayandeep Deka Baruah, Professor, Department of Mathematical Sciences, Tezpur University"],

                ["4", "External Expert (Industry)", "Mr. Hamendra Ch. Das, Retd. Group General Manager, Oil India"]
            ]
        },
        {
            title: "The Departmental Research Committee (DRC)",
            headers: ["S.No.", "Position", "Name And Designation"],
            rows: [
                ["1", "Chairperson (Head of the Department)", "Dr. Bimalendu Kalita, Associate Professor & HoD"],

                ["2", "Departmental Member (Professor)", "Prof. (Dr.) Aniruddha Chatterjee, Professor & Dean, Royal School Applied & Pure Sciences"],
                ["3", "Departmental Member (Professor)", "Prof. (Dr.) Anuradha Devi, Professor"],

                ["4", "Departmental Member (Associate Professor)", "Dr. Bapan Kalita, Associate Professor"],

                ["5", "Departmental Member (Assistant Professor)", "Dr. Bikram Bir, Assistant Professor"],
                ["6", "Departmental Member (Assistant Professor)", "Dr. Marbarisha M. Kharkongor, Assistant Professor"],

                ["7", "External Member", "Prof. (Dr.) Bipan Hazarika, Professor, Department of Mathematics, Gauhati University"]
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
        <div class="dept-maths-table-responsive">
          <table class="dept-maths-table">
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
        <div class="dept-maths-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-maths-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-maths-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
        }).join("");
    }

    /* ACCORDION (single open at a time) */
    document.addEventListener("click", function (e) {
        const header = e.target.closest(".dept-maths-table-header");
        if (!header) return;

        const item = header.parentElement;
        if (item.classList.contains("disabled")) return;

        const allItems = document.querySelectorAll(".dept-maths-table-acc");

        allItems.forEach(acc => {
            if (acc !== item) {
                acc.classList.remove("active");
                const content = acc.querySelector(".dept-maths-table-content");
                const icon = acc.querySelector("i");
                if (content) content.style.maxHeight = 0;
                if (icon) icon.classList.replace("fa-minus", "fa-plus");
            }
        });

        const content = item.querySelector(".dept-maths-table-content");
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
    const journalDataSet = [

        /* ===== 2026 ===== */
        {
            year: "2026",
            rows: [
                ["1", "Kshetrimayum R. Devi, Pranab J. Dowari and Yaingambam N. Meitei, “Relative almost uniform convergent sequence of functions and its topological properties”, Boletim da Sociodade Paranaense de Matematica 44(2026), 1-8, https://doi.org/10.5269/bspm.77965."],
                ["2", "Munindra Regon, Pranab J. Dowari and Kshetrimayum R. Devi, “Geometric Properties of Relative Uniform Lacunary Convergence of Sequences of Functions”, Boletim da Sociedade Paranaense de Matemática, 44 (2026),1-11.  https://doi.org/10.5269/bspm.7807."],
                ["3", "Rupak K. Dalai and Divyang G. Bhimani, Pointwise convergence to initial data of heat and Hermite-heat equations in modulation spaces, Canadian Mathematical Bulletin (Accepted)."],
                ["4", "H. Imo Mani Singha, Anuradha Devi, “On Approximate solutions of fractional order smoking epidemic model using Sumudu decomposition method”, South East Asian Journal of Mathematics and Mathematical Sciences (Accepted)."],
                ["5", "Dharmendra Kumar Dubey, Pramod Kumar Mishra, Nath,| Dilip C (2026): Trends and Prevalence of Low Birth Weight in India: What Does data suggest?  Journal of Biostatistics and Epidemiology DOI: https://doi.org/10.18502/jbe.v10i2.17638."]
            ]
        },

        /* ===== 2025 ===== */
        {
            year: "2025",
            rows: [
                ["1", "Bikram Bir and Deepjyoti Goswami, “Numerical analysis of a grad-div stabilization for the Oldroyd model of order one”, Journal of Applied Analysis & Computation, 15(3), 1330–1373, ISSN: 2156-907X, 2025."],
                ["2", "Bikram Bir, Harsha Hutridurga and Amiya K.  Pani, “On a completely discrete discontinuous Galerkin method for incompressible chemotaxis-Navier-Stokes Equations”, Journal of Scientific Computing, 105:34, 2025."],
                ["3", "Tusar Kanti Das, Ashish Paul, Jintu Mani Nath, and Neelav Sarma, “The Yamada-Ota model-based Casson quadra hybrid nanofluid stagnation flow configured by ohmic heating, heat source, and Newtonian boundary heating across an exponentially stretched cylinder”, Partial Differential Equations in Applied Mathematics (Elsevier), 14, 101159, ISSN: 2666-8181, 2025."],
                ["4", "Bhagyashri Patgiri, Ashis Paul and Neelav Sarma, “Computational simulation of Casson tetrahybrid nanofluid flow across a stretched spinning disk with nonlinear chemical interactions and varying fluid properties”, International Journal of Computational Materials Science and Engineering, (2025), DOI:10.1142/S2047684125500241."],
                ["5", "Neelav Sarma and Rimjhim Parasar, Comparative numerical study of graphene-copper Boger hybrid nanofluid flow and without aggregation under robin type thermal constraints”, Journal of Taibah University for Science, 19(1)(2025), https://doi.org/10.1080/16583655.2025.2569762."],
                ["6", "Neelav Sarma, Ashish Paul and Bhagyashri Patgiri, “Numerical analysis of Maxwell hybrid nanofluid flow implementing modified Fourier-Fick’s model through an unsteady vertical cylinder with Brwonian motion and thermophoresis”, Journal of the Brazilian Society of Mechanical Sciences and Engineering, 47(491)(2025), https://doi.org/10.1007/s40430-025-05722-"],
                ["7", "Kshetrimayum R. Devi and Binod C. Tripathy, “Cesàro summable relative uniform difference double sequence of positive linear functions”, Palestine Journal of Mathematics, 14(2), 12–20, 2025."],
                ["8", "Rishi Raj, Sachin Pathak, Marbarisha M. Kharkongor, and Dipendu Maity, “A study of Galois LCD codes over a family of non-chain rings”, National Academy Science Letters. https://doi.org/10.1007/s40009-025-01641-2, 2025."],
                ["9", "Marbarisha M. Kharkongor, Debashis Bhowmik and Dipendu Maity, “Dihedral and cyclic covers of a class of maps on surfaces”, Proceedings of the National Academy of Sciences, India, Section A: Physical Sciences. https://doi.org/10.1007/s40010-025-00923-0, 2025."],
                ["10", "Balajied M. Syrti and Anuradha Devi, “Optimising plant epidemic control: A mathematical model integrating susceptible and infectives plants, and hervibores with pesticides intervention”, Commun. Math. Biol. Neurosci., 109(2025),  https://doi.org/10.28919/cmbn/9476."],
                ["11", "Mustak Euchuf, Ankur J. Kashyap and Anuradha Devi, “A Leslie-Gower model for prey harvesting with predator cooperation and fear responses”, Bol. Soc. Paran. Mat., 43(2)(2025), 1-17, https://doi.org/10.5269/bspm.78991"]
            ]
        },

        /* ===== 2024 ===== */
        {
            year: "2024",
            rows: [
                ["1", "Bimalendu Kalita and Sinam Rajkishore Singha, “Fuzzy weak n-inner product space”, South East Asian Journal of Mathematics and Mathematical Sciences, ISSN: 0972-7752, 2024."],
                ["2", "Sinam Rajkishore Singha and Bimalendu Kalita, “Fuzzy n-inner product spaces”, Bulletin of Calcutta Mathematical Society, 116(6), 703–718, 2024. ISSN: 0008-0659."],
                ["3", "Neelav Sarma, Bhagyashri Patgiri, and Ashish Paul, “Insights using Hamilton-Crosser model in Williamson hybrid nanofluids with homogeneous-heterogeneous reactions and diagonal electromagnetic effects”, Proceedings of the Institution of Mechanical Engineers, Part N: Journal of Nanomaterials, Nanoengineering and Nanosystems, 23977914241304066, ISSN: 2397-7914, 2024."],
                ["4", "Sinam Rajkishore Singha and Bimalendu Kalita, “Some inequalities in fuzzy 2-inner product space”, Global Journal of Pure and Applied Mathematics, 20(3), 401–414, 2024. ISSN: 0973-1768."],
                ["5", "B. Kalita and A. Devi, “Impact of stagnant water in the transmission of Japanese encephalitis: A mathematical model”, Journal of Innovation Sciences and Sustainable Technologies, 4(4), 267–281, 2024. https://doie.org/10.0205/JIIST.2025395730"],
                ["6", "Bipanchy Buzarbarua, Parismita Phukan, Mridusmita Das, and Bikash Barman, “An encryption algorithm employing graphs”, Journal of Mechanics of Continua and Mathematical Sciences, 19(9), 11–17, September 2024. ISSN: 0973-8975."],
                ["7", "Hiren Deka and Parismita Phukan, “Numerical study of convective flow of Casson fluid through an infinite vertical plate with induced magnetic field”, East European Journal of Physics, 3, 188–194, 2024. https://doi.org/10.26565/2312-4334-2024-3-18"],
                ["8", "R.K. Ahmed and K. Debnath, “Mathematical study of pseudoplastic nature of flow and heat transport for pummelo juice over a stretching surface by power-law fluid model”, Mathematical Forum, 32, 17–30, 2024. ISSN: 0972-9852."],
                ["9", "Balajied Me Syrti, Anuradha Devi, Stability and control of a plant epidemic model with pesticide intervention, International Journal of Advanced and Applied Sciences, 11(2) 2024, Pages: 82-93. https://doi.org/10.21833/ijaas.2024.02.011"],
                ["10", "Balajied Me Syrti, Anuradha Devi, Aditya Ghhosh, A Mathematical Analysis of Plant-Pesticide Interaction: Existence, Uniqueness, and Optimal Control, Global Journal of Pure and Applied Mathematics.ISSN 0973-1768 Volume 20, Number 2 (2024), pp. 291-303."],
                ["11", "Kamal Debnath,”Analyzing slip factor impact on flow, heat transfer and mass transport for Newtonian fluid along a vertical plate”, Fundamental Frontiers: Exploring Core Sciences, (2024), ISBN: 978-93-91883-59-1."]
            ]
        },

        /* ===== 2023 ===== */
        {
            year: "2023",
            rows: [
                ["1", "Bimalendu Kalita, “Pertubation of semi-weakly hyponormal weighted shifts”, The Mathematics Student, 92(1-2)(2023), 41-52."],
                ["2", "Kamal Debnath and Sankar Singha, “Heat and mass transport for elastico-viscous fluid with partial slip boundary over a flat permeable plate”, Latin American Applied Research, 53(2), ISSN: 1851-8796, 2023."],
                ["3", "Ankur Jyoti Kashyap, Arnab Jyoti Bordoloi, Fanitsha Mohan, and Anuradha Devi, “Dynamical analysis of an anthrax disease model in animals with nonlinear transmission rate”, Mathematical Modelling and Control, 3(4), 370–386, December 2023."],
                ["4", "Md Nazir Hussain, Navalakhi Hazarika, and Anuradha Devi, “Intuitionistic fuzzy aspects of multiplication N-groups”, South East Asian Journal of Mathematics and Mathematical Sciences, 19(2), 273–284, 2023."],
                ["5", "Balajied Me Syrti, Anuradha Devi, and Ankur Jyoti Kashyap, “Analysis of stability, sensitivity index and Hopf bifurcation of eco-epidemiological SIR model under pesticide application”, [Journal Name Missing], 6(2), 136–144, 2023."],
                ["6", "Md Nazir Hussain, Navalakhi Hazarika, and Anuradha Devi, “Distributive character of multiplication N-groups”, International Journal of Mathematics Trends and Technology, 69(6), 59–66, June 2023."],
                ["7", "Bikash Koli Saha and Kamal Debnath, “Reactive solute diffusion in elastico-viscous fluid past a flat permeable plate”, High Technology Letters, 29(7), 2023."],
                ["8", "Kamal Debnath and Sankar Singha, “Heat and mass transport for elastic-viscous fluid with partial slip boundary over a flat permeable plate”, Latin American Applied Research, 53(2), 89–94, 2023."],
                ["9", "Nimai Sarkar, Mausumi Sen, Dipankar Saha, and Bipan Hazarika, “A qualitative study on fractional logistic integrodifferential equations in an arbitrary time scale”, Kragujevac Journal of Mathematics, 50(3), 403–414, 2023."],
                ["10", "Md Nazir Hussain, Navalakhi Hazarika, and Anuradha Devi, “Uniserial and bezout character of distributive groups”, Bull. Cal. Math. Soc., 115(6)(2023), 717-730."],
                ["11", "Ankur J. Kashyap, Fengde Chen, Fanitsha Mohan, Anuradha Devi and Hemanta K. Sarmah, “Combined effects of antipredator behaviors and cooperative hunting in a stage-structured predator-prey control”, Mathematical Modelling and Control, 5(4)(2024)."],
                ["12", "Verma B K, Verma M, Mondal M,  Duby Darmendra K, Nath, Dilip C. Verma, Vivek: (2023) Alarming Trend in Under-Five Indian Children’s Exposure to Indoor Tobacco Smoke. Cureus 15(4): e37571. DOI 10.7759/cureus.37571 (14 April, 2023)."],
                ["13", "Verma V., Nath Dilip C., Dwivedi S. N. (2023): Bayesian estimation of fertility rates under imperfect age reporting. Statistics in Transition new series, March 2023 Vol. 24, No. 2, pp. 39–57, DOI 10.59170."],
                ["14", "Vivek Verma, Dilip C. Nath and Hafiz T. A. Khan. (2023). Evaluation of concordance in estimation of excess mortality due to COVID‐19 pandemic. Journal of Evaluation in Clinical Practice 29(1). DOI: 10.1111/jep.1386."]
            ]
        },

        /* ===== 2022 ===== */
        {
            year: "2022",
            rows: [
                ["1", "Bimalendu Kalita, “On semi m-hyponormal weighted shift operators”, Bulletin of Calcutta Mathematical Society, accepted for publication, 2022."],
                ["2", "Bipul Ch. Kalita and Bapan Kalita, “Comprehensive analysis on effectiveness of inventory management practices on the performance of wholesale drug dealers”, Journal of Positive School Psychology, 6(6), ISSN: 2717-7564, 2022."],
                ["3", "Bimalendu Kalita, “Perturbation of semi weakly m-hyponormal weighted shifts”, The Mathematics Student, accepted for publication, 2022 (published 2023), Scopus indexed, Impact Factor: 0.10."],
                ["4", "Kamal Debnath and Sankar Singha, “Heat and mass transport for elastico-viscous fluid with partial slip boundary over a flat permeable plate”, Latin America Applied Research, ISSN: 0327-0793 (Print); 1851-8796 (Online)."],
                ["5", "Ankur Jyoti Kashyap, Willy Govaerts, Debashish Bhattacharjee, and Hemanta Kumar Sarmah, “Bifurcation analysis of a predator prey system with density dependent disease recovery”, Filomat, 36(20), ISSN: 2406-0933, 2022."],
                ["6", "Ankur Jyoti Kashyap, Quanxin Zhu, Debashish Bhattacharjee, and Hemanta Kumar Sarmah, “Dynamical study of a predator prey system incorporating hunting cooperation and Michaelis-Menten type predator-harvesting”, International Journal of Biomathematics, World Scientific, ISSN: 1793-715, 2022."],
                ["7", "Bapan Kalita, Abdul Barik Sarker, and Sankar Barman, “Decision making with simplex model: A case study”, Journal of Applied and Fundamental Sciences, 8(2), ISSN: 2395-5554 (Print); 2395-5562 (Online), 2022."],
                ["8", "Bapan Kalita, “Public revolution: A mathematical modelling”, Journal of Applied and Fundamental Sciences, 8(1), ISSN: 2395-5554 (Print); 2395-5562 (Online), 2022."],
                ["9", "Mitali Das Roy, Sankar Barman, and Bapan Kalita, “Effectiveness of surface texturing and optical width in minimizing the optical loss of a solar cell: A simulated study”, Journal of Applied and Fundamental Sciences, 8(1), ISSN: 2395-5554 (Print); 2395-5562 (Online), 2022."],
                ["10", "Sankar Barman and Bapan Kalita, “Energy, environment and cost benefit analysis of semi-transparent PV window – A review”, Journal of Applied and Fundamental Sciences, 8(2), ISSN: 2395-5554 (Print); 2395-5562 (Online), 2022."],
                ["11", "Balajied Me Syrti and Anuradha Devi, “An eco-epidemic model with disease in plant populations and pesticides as control measure”, IOSR Journal of Mathematics, 18(3), ISSN: 2319-765X (Print); 2278-5728 (Online), 2022."],
                ["12", "Prataykshi Sarma and Bapan Kalita, “Prediction of housing prices of real estate business through machine learning”, IJTMSS, 1(1), 58–76, 2022."],
                ["13", "Smitakhee Handique and Bapan Kalita, “A case study on application of transportation problem”, IJTMSS, 1(1), 77–95, 2022."],
                ["14", "Karismita Medhi and Bapan Kalita, “Category detection of cancer patients and role of machine learning as an astrologer”, IJTMSS, 1(1), 96–113, 2022."],
                ["15", "Mwchahary,  Dimacha and  Nath, Dilip C. 2022. Determining the Association between Climatic Variables and Malaria Incidence in Kokrajhar District of Assam, India. In book: Research Developments in Arts and Social Studies Vol. 5. Pp: 90-106 June (2022) DOI:10.9734/bpi/rdass/v5/2216F."]
            ]
        },

        /* ===== 2021 ===== */
        {
            year: "2021",
            rows: [
                ["1", "Biplab Singha, Mausumi Sen, Nidul Singha, and Dhiman Dutta, “A new Hesitant Fuzzy Rule Base system for ranking hydro power plant site selection”, New Mathematics and Natural Computation, 2021. https://doi.org/10.1142/S1793005722500223"],
                ["2", "Aditya Ghosh and Anuradha Devi, “Stability of Glucose-Insulin-Glucagon model using ingested glucose and somatostatin”, Journal of Huazhong University of Science and Technology, 50(3), 1–14, 2021."],
                ["3", "Anuja Sinha, “Effect of thermal radiation on MHD three-dimensional natural convective Couette flow in presence of thermo diffusion and chemical reaction”, Journal of Mathematical and Computational Science, 6, 7337–7359, ISSN: 1927-5307."],
                ["4", "Kamal Debnath, Sankar Singha, and Bimalendu Kalita, “Impact of suction or blowing on elastico-viscous hydromagnetic fluid flow past a stretching permeable sheet”, Advances in Mathematics: Scientific Journal, 10(1), 211–221, ISSN: 1857-8365 (printed); 1857-8438 (electronic)."],
                ["5", "Kamal Debnath and Bikash Koli Saha, “Heat and partial slip impact on elastico-viscous fluid flow past a flat permeable plate”, Mathematical Forum, 29, 2021, ISSN: 0972-9852."],
                ["6", "Bipul Ch. Kalita, Runumoni L. Das, and Bapan Kalita, “Impact of working capital management on financial health: Evidence from silk industries in Assam, India”, Journal of Education: Rabindra Bharati University, XXIV(12-II), 114–124, 2021–2022, ISSN: 0972-7175."]
            ]
        },

        /* ===== 2020 ===== */
        {
            year: "2020",
            rows: [
                ["1", "Hemanta K. Baruah, \"Real Numbers with Fractional Presence\", Journal of Mathematics and Informatics, 18, 65–69, February 2020. ISSN: 2349-0632."],
                ["2", "Hemanta K. Baruah, \"An Alternate Formula for Addition of Discrete Fuzzy Numbers\", International Journal of Fuzzy Mathematical Archive, 18(1), 7–11, March 2020. ISSN: 2320–3242."],
                ["3", "Hemanta K. Baruah, \"Theory of Fuzzy Sets: An Introduction of the Concept of Negative Partial Presence\", Annals of Pure and Applied Mathematics, 22, 119–124, May 2020. ISSN: 2279-087X (Print), 2279-0888 (Online)."],
                ["4", "Hemanta K. Baruah, \"The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations\", Journal of Mathematics and Informatics, 19, 7–12, July 2020. ISSN: 2349-0632. doi: 10.1101/2020.05.24.20112292."],
                ["5", "Hemanta K. Baruah, \"A Simple Method of Finding an Approximate Pattern of the Covid-19 Spread\", medRxiv Preprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, May 2020, 1–8."],
                ["6", "Hemanta K. Baruah, \"On Reliability of the COVID-19 Forecasts\", medRxiv Preprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, June 2020, 1–8. doi: 10.1101/2020.06.01.20118844."],
                ["7", "Hemanta K. Baruah, \"The Current COVID-19 Spread Pattern in India\", medRxiv Preprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, June 2020, 1–5. doi: 10.1101/2020.06.03.20121210."],
                ["8", "Hemanta K. Baruah, \"Nearly Perfect Forecasting of the Total COVID-19 Cases in India: A Numerical Approach\", medRxiv Preprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, June 2020, 1–7. doi: 10.1101/2020.06.13.20130096."],
                ["9", "Hemanta K. Baruah, \"The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations\", medRxiv Preprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, June 2020, 1–6. doi: 10.1101/2020.06.21.20136630."],
                ["10", "Munmi Saikia, Atasi Patra Maiti and Anuradha Devi, \"Effect of habitat complexity on rhinoceros and tiger population model with additional food and poaching in Kaziranga National Park, Assam\", Mathematics and Computers in Simulation, 177, 169–190, 2020."],
                ["11", "Kamal Debnath, Debasish Dey and Rupjyoti Borah, \"Thermophoresis and diffusion thermo effects on shear thickening and shear thinning cases of fluid motion past a permeable surface\", Journal of Mechanics of Continua and Mathematical Sciences, 15(5), 68–81, May 2020."],
                ["12", "Bapan Kalita and Anuradha Devi, \"Japanese Encephalitis from Two Outsources: A Mathematical Modeling\", Journal of Critical Reviews, 7(12), 309–315, 2020."],
                ["13", "Bapan Kalita and Anuradha Devi, \"Control Model of Transmission of Japanese Encephalitis through Media Awareness\", International Journal of Advanced Science and Technology, 29(5), 7645–7656, 2020."],
                ["14", "Bapan Kalita and Anuradha Devi, \"Mathematical Modelling of Impact of Vaccination in Controlling Japanese Encephalitis\", International Journal on Emerging Technologies, 11(3), 792–796, 2020."],
                ["15", "Bimalendu Kalita, \"On Semi Weakly (l,m)-Hyponormal Weighted Shifts\", Advances in Mathematics: Scientific Journal, 9(12), 10797–10805, 2020."],
                ["16", "Kamal Debnath and Bikash Koli Saha, \"Solution of Non-Newtonian Boundary Layer Flow in a Convergent Channel using Homotopy Perturbation Method\", Transient: A Journal of Natural Sciences and Allied Subjects, 8, 28, 2020."],
                ["17", "Kamal Debnath and Sankar Singha, \"Mixed Convective Slip Flow and Heat Transport for Visco-elastic Fluid Past a Vertical Plate\", Mathematical Forum, 28, 2020."]
            ]
        },

        /* ===== 2019 ===== */
        {
            year: "2019",
            rows: [
                ["1", "Banajit Sarmah, Anuradha Devi and Jnanjyoti Sarma, \"Effect of Nonthermal Ions on Dust Acoustic Waves in Magnetized Plasma\", Mathematical Journal of Interdisciplinary Science, 8(1), 69–76, September 2019."],
                ["2", "Banajit Sarmah, Anuradha Devi and Jnanjyoti Sarma, \"Sagdeev Potential Approach to Study the Dust Acoustic Waves in Dusty Plasma with Nonthermal Ions\", Infokara Research, 8(7), September 2019."],
                ["3", "Banajit Sarmah, Anuradha Devi and Jnanjyoti Sarma, \"Nonperturbative Technique for Dust-ion-acoustic Waves in Dusty Plasma with Nonthermal Electrons\", International Journal of Research and Review, 6(11), 153–161, November 2019."]
            ]
        },

        /* ===== 2018 ===== */
        {
            year: "2018",
            rows: [
                ["1", "Navalakhi Hazarika and Helen K. Saikia, \"Singular and semi-simple character in E-injective N-groups with weakly descending chain conditions\", Africa Mathematica (Springer), 29(7–8), 1065–1072, 2018."],
                ["2", "Anuradha Devi and Ranjan Kalita, \"A Mathematical Model of Glucose–Insulin regulation where glucose and insulin both are influenced by externally ingested glucose\", International Journal of Engineering Science and Technology, 10(02S), 154–157, 2018."],
                ["3", "Banajit Sarmah, Anuradha Devi and Jnanjyoti Sarma, \"Non Perturbative Approach for Dust Acoustic Waves in Plasma with Non Thermal Ions and Trapped Electrons\", International Journal of Mathematics Trends and Technology, 61(1), September 2018."]
            ]
        }

    ];

    const journalContainerEl = document.getElementById("publication-table-container");

    if (journalContainerEl) {

        const createJournalTable = (rows) => `
        <div class="dept-maths-table-responsive">
            <table class="dept-maths-table">
                <thead>
                    <tr>
                        <th style="width:80px;">S.No.</th>
                        <th>Publication Details</th>
                    </tr>
                </thead>
                <tbody>
                    ${rows.map(row => `
                        <tr>
                            <td>${row[0]}</td>
                            <td>${row[1]}</td>
                        </tr>
                    `).join("")}
                </tbody>
            </table>
        </div>`;

        journalContainerEl.innerHTML = journalDataSet.map(item => `
        <div style="margin-bottom:40px;">
            <h3 style="margin-bottom:15px; color:#2c4a7a;">${item.year}</h3>
            ${createJournalTable(item.rows)}
        </div>
    `).join("");
    }
</script>

<script>
    const booksDataSet = [

        /* ===== EDITED BOOK ===== */
        {
            year: "Edited Book",
            rows: [
                ["1", "Verma, V., Khan, H. T., Nath, D. C., & Land, K. C. (Eds.). (2026). Biostatistical Methods and Applications in Health Research: A Case Study Approach. Taylor & Francis. Routledge."]
            ]
        },

        /* ===== 2026 ===== */
        {
            year: "2026",
            rows: [
                ["1", "Bhagyashri Patgiri and Neelav sharma, Computational Modelling of Blood-Based Tetrahybrid Nanofluid, Nanofluid Heat Transfer, Schrivener Publishing (WILEY)."],
                ["2", "Nath, D. C., & Bhattacharjee, D. (2026). Statistical Hypothesis Testing for Health Sciences: Parametric and Non-Parametric. In Biostatistical Methods and Applications in Health Research (pp. 83-116). Taylor & Francis. Routledge"],
                ["3", "Verma, V., Goel, P., Nath, D. C., & Khan, H. T. (2026). Applying Bayesian Methods in Diagnostics Tests for Clinical Decision-Making. Biostatistical Methods and Applications in Research: A Case Study Approach. (pp. 291-300). Taylor & Francis. Routledge"]
            ]
        },

        /* ===== 2025 ===== */
        {
            year: "2025",
            rows: [
                ["1", "Laishram Ladu Singh, Statistics for Health Science with R, Himalaya Publishing House, ISBN-10-9365576784, ISBN-13-978-9365576788, 1st -July, 2025"],
                ["2", "Kshetrimayum Renubebeta Devi, Tusonulu Lohe, Antidong Jamir, Rakhal Das and Surapati Pramanik,  A Study on Neutrosophic Refined Topology and Its Applications,  New Trends in Neutrosophic Theory and Applications, Zenodo, ISBN: 978-1-59973-789-8 (Accepted for publication)"]
            ]
        },

        /* ===== 2024 ===== */
        {
            year: "2024",
            rows: [
                ["1", "Dhriti Raj Talukdar and H Imo Mani Singha, A comparative analysis of standard Knapsack and Legendre-Knapsack cryptosystem, Advances in Mathematical and Computational Sciences: Proceedings of The ICRTMPCS International Conference 2023, Publisher: Walter de Gruyter GmbH & Co KG, Chapter: 12, Page: 169-177, Publication Date: Nov 2024, ISBN: 978-3-11-130437-3."],
                ["2", "H Imo Mani Singha and Anuradha Devi, Analysis of Fractional Order Smoking Model using Laplace Decomposition Method, Bridging Disciplines: Navigating Multidisciplinary Perspectives, Publisher: Data Point Consultancy for Multidisciplinary Research, Chapter: 9, Page: 117-134, Publication Date: June 2024, ISBN: 978-81-974418-2-0."],
                ["3", "Kamal Debnath, Analyzing Slip Factor Impact on Flow, Heat Transfer, and Mass Transport for Newtonian Fluid along a Vertical Plate, Fundamental Frontiers: Exploring Core Sciences, Publisher: Unika Prakashan, Jorhat, Assam, Editors: Dr. P. Saikia, Dr. D. J. Mahanta, Dr. J. Gogoi, First Edition: October, 2024, ISBN: 978-93-91883-59-1, Page No. 325-332."],
                ["4", "Bimalendu Kalita, Khrunielu Lohe and, Florence Daimari, “Felbin’s Type Fuzzy Norm and Fuzzy Inner Product”, Fundamental Frontiers: Exploring Core Sciences, First Edition: October, 2024 ISBN: 978-93-91883-59-1."],
                ["5", "Saswati Bordoloi, Susmita Banerjee, Tinku Moni Das, Bikram Bir and Jyoti Kumar Sharma, Bridging Ancient Wisdom and Modern Knowledge: Indian Knowledge Systems, Publisher: The Assam Royal Global University, Assam, 2024, ISBN: 978-81-980420-5-7."],
                ["6", "Vivek Verma, Sachin Kumar and Dilip C Nath (2024) A comparative study regarding prevalence of caesarean section in Indian female In book: Statistical Modeling and Applications on Real-Time Problems.  CRC Press. April 2024 DOI:10.1201/9781003481263-5."],
                ["7", "Nath, Dilip Chandra, Aditi Baruah (2024): A Probability Model for Closed Birth Interval and Its Application to Adivasi Married Females. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education Edited by Ajay Pandey. Pp 4-9."],
                ["8", "Ajay Pandey, Dilip Chandra Nath, Richa Sharma (2024): Inter-birth Interval Length and Neonatal Survival: A Study on Demographically Poor Performing EAG States. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey. pp 10-16."],
                ["9", "Nath, Dilip Chandra, H. Brojeshwor Singh, Atanu Bhattacharjee(2024): Estimating the Duration of Postpartum Amenorrhea through Bayesian Approach. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey pp 28-35."],
                ["10", "Padum Narayan, Dilip Chandra Nath, Kishore Kumar Das, Arvind Pandey (2024): Changing Impact of Son-Preference on the Family Building Process in India: A Parity Progression Ratio Analysis. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey pp36-45."],
                ["11", "Jagriti Das, Dilip Chandra Nath (2024):Probability of Ultimate Ruin for the Log Normal Distribution and the Computation of Some of its Related Actuarial Quantities with Real Data Applications. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey. pp 46-55"],
                ["12", "Lipi B Mahanta, Dilip Chandra Nath (2024):A Note on the Discrete Analogue of the Pearsonian System of Curves. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey. pp 56-60"],
                ["13", "Nath, Dilip Chandra, M Nazrul Islam (2024):Measuring Speed of Aging Process: An Illustration With the Population of Bangladesh. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey . pp61-70"],
                ["14", "Jaishree Prabha Karna, Dilip Chandra Nath(2024): Handling Non-Response in Presence of p(p≥2) Auxiliary Variables in Two Occasion Rotation Patterns. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey.pp 71-82"],
                ["15", "Tandrima Chakraborty, Dilip Chandra Nath, Kishore Kumar Das(2024): A Weighted Epidemic Chain Binomial Model (WECBM) with One-Introductory Case & Its Application. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey.pp 83-93"],
                ["16", "Vivek Verma & Dilip Chandra Nath(2024): Ranked Set Sampling: An Estimation of Infant Mortality Using Bayesian Method. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey.pp 94-102"],
                ["17", "Nath, Dilip Chandra, Ramesh K Vishwakarma, Atanu Bhattacharjee (2024): Bayesian Computation for the Concordance Correlation Coefficient: An Illustration Through Liver Cirrhosis Patients. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey.pp 103-109"],
                ["18", "Dharmendra Dubey, Dilip Chandra Nath (2024): Prevalence and Risk Factors of Low Birth Weight Among Adolescent Mothers in Assam. In OA Books: Biostatistical Aspects of Population Health, The Canadian Center of Science and Education. Edited by Ajay Pandey.pp 110-120."]
            ]
        },

        /* ===== 2023 ===== */
        {
            year: "2023",
            rows: [
                ["1", "Bapan Kalita, Basics of R and Data Analysis in Research (Book), ISBN: 978-93-5693-912-7, Himalaya Publishing House, Mumbai, India."],
                ["2", "Bapan Kalita, Methods of Research and Exploratory Data Analysis: A Brief Introduction, FOCUS, ISBN: 978-81-948218-3-0, Dept. of Education, Gyanpeeth Degree College, Nikashi, Assam, India, March 2023,  pp 9-22."]
            ]
        },

        /* ===== 2022 ===== */
        {
            year: "2022",
            rows: [
                ["1", "Bapan Kalita, Methods of research and exploratory data analysis : A brief introduction”, Gyanpeeth Degree College, ISBN:978-81-948218-3-0, 2023, pp. 9-22"],
                ["2", "Suman Bhuyan, Kamal Debnath, “Mathematical study of shear –thinning Nature of Peach Puree Flow Through a circular pipe by Herschel –BulkleyFuid Model” e-proceedings of 16th international conference of MSAST 2022, 2022, Kolkata, India, VOL:11, 161, ISBN:978-81-925832-8-0."],
                ["3", "Pompi Das and Kamal Debnath, “Behavioral Study of carrot juice exhibiting shear thickening nature of flow past a cylindrical pipe by power law fluid model”, e-proceedings of 16th international conference of MSAST 2022, 2022, Kolkata, India, VOL:11, 241, ISBN:978-81-925832-8-0."],
                ["4", "Bikas Koli Saha and Kamal Debnath, Slip Flow and Heat Transition for Hydromagnetic Elastico-viscous Fluid past a Flat Moving Plate Emerging Technologies in Data Mining and Information Security, Springer Nature, 131, ISBN 978-981-19-4193-1, September 2022, Springer edited book Series."],
                ["5", "Verma V., Verma A., Mishra A.K., Khan H. T.A., Nath D.C. and Narang R. (2022).  Bayesian Estimation of Gender Differences in Lipid Profile, among Patients with Coronary Artery Disease. Handbook of Intelligent Computing and Optimization for Sustainable Development. Wiley-Scrivener Publishing, 753-769."],
                ["6", "Verma, Vivek, Ashwani Kumar Mishra, Anita Verma, Hafiz T. A. Khan, Dilip C. Nath, and Rajiv Narang. 2022: Impact of Gender on the Lipid Profile of Patients with Coronary Artery Disease A Bayesian Analytical Approach. In book: Smart Computational Intelligence in Biomedical and Health Informatics. Edited by:Amit Kumar Manocha, Mandeep Singh, Shruti Jain, and Vishal Jain. Publisher: CRC Press. pp:1-12."]
            ]
        },

        /* ===== 2021 ===== */
        {
            year: "2021",
            rows: [
                ["1", "Kamal Debnath, Bikash Koli Saha, “Hydromagnetic Visco-elastic Boundary Layer Flow Past an Exponentially Stretching Sheet with Suction or Blowing”, Emerging Technologies in Data Mining and Information Security, Vol. 1, ISBN 978-981-15-9927-9, 533-541, June 2021, Springer edited book Series."],
                ["2", "Kamal Debnath, Sankar Singha, “Hydromagnetic Visco-elastic Boundary Layer Slip Flow and Heat transfer over a Flat Plate ”, Emerging Technologies in Data Mining and Information Security, Vol. 1, ISBN 978-981-15-9927-9, 533-541, June 2021, Springer edited book Series."],
                ["3", "Kamal Debnath and Sankar Singha, “Reactive Mass Diffusion in Viscoelastic Fluid Past a Stretchable Exponential Sheet Due to Variation in Wall Concentration”, Emerging Technologies in Data Mining and Information Security, Springer Nature, 107, ISBN 978-981-19-4193-1, September 2022, Springer edited book Series."]
            ]
        },

        /* ===== 2018 ===== */
        {
            year: "2018",
            rows: [
                ["1", "Bapan Kalita, “Developmental Scenario in South-Asian Nations in Recent Years”, Progression, Uttar Kampith Mahavidyalaya (Sr.),ISBN: 978-81-929748-2-8, Dec. 2018, 20-36."]
            ]
        }

    ];

    const booksContainerEl = document.getElementById("books-table-container");

    if (booksContainerEl) {

        const createBooksTable = (rows) => `
        <div class="dept-maths-table-responsive">
            <table class="dept-maths-table">
                <thead>
                    <tr>
                        <th style="width:80px;">S.No.</th>
                        <th>Book / Chapter Details</th>
                    </tr>
                </thead>
                <tbody>
                    ${rows.map(row => `
                        <tr>
                            <td>${row[0]}</td>
                            <td>${row[1]}</td>
                        </tr>
                    `).join("")}
                </tbody>
            </table>
        </div>`;

        booksContainerEl.innerHTML = booksDataSet.map(item => `
        <div style="margin-bottom:40px;">
            <h3 style="margin-bottom:15px; color:#2c4a7a;">${item.year}</h3>
            ${createBooksTable(item.rows)}
        </div>
    `).join("");
    }
</script>
@endsection
