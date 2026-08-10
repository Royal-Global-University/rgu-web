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

        .dept-iks-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-iks-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-iks-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-iks-heading h1 span {
            color: var(--accent);
        }

        .dept-iks-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-iks-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-iks-img {
            flex: 1;
            position: relative;
        }

        .dept-iks-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-iks-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-iks-content {
            flex: 1;
        }

        .dept-iks-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-iks-content h3 span {
            color: var(--accent);
        }

        .dept-iks-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-iks-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-iks-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-iks-float-item {
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

        .dept-iks-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-iks-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-iks-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-iks-float-item:hover i {
            color: #fff;
        }

        .dept-iks-float-item:hover .dept-iks-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-iks-admission-btn {
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

        .dept-iks-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-iks-admission-btn:hover {
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
            .dept-iks-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-iks-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-iks-img img {
                padding-left: 0%;
            }

            .dept-iks-floating {
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

            .dept-iks-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-iks-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-iks-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-iks-float-item:active i {
                color: var(--primary);
            }

            .dept-iks-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-iks-admission-btn {
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
            .dept-iks-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-iks-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-iks-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-iks-section-title span {
            color: var(--accent);
        }

        .dept-iks-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-iks-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-iks-course-header {
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
        .dept-iks-course-header::after {
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
        .dept-iks-view-btn {
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

        .dept-iks-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-iks-course-body {
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
            .dept-iks-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-iks-img img {
                padding-left: 0%;
            }

            .dept-iks-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-iks-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-iks-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-iks-prospects-content {
                padding: 25px 20px;
            }


            .dept-iks-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-iks-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-iks-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-iks-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-iks-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-iks-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-iks-list li {
            margin-bottom: 12px;
        }

        .dept-iks-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-iks-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-iks-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-iks-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-iks-accordion-header {
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

        .dept-iks-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-iks-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-iks-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-iks-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-iks-accordion-item.active .dept-iks-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-iks-accordion-item.active .dept-iks-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-iks-accordion-item.active .dept-iks-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-iks-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-iks-syllabus-link {
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

        .dept-iks-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-iks-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-iks-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-iks-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-iks-syllabus-link:hover .dept-iks-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-iks-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-iks-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-iks-lab-container {
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

        .dept-iks-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-iks-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-iks-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-iks-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-iks-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-iks-explore-btn {
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

        .dept-iks-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-iks-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-iks-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-iks-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-iks-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-iks-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-iks-bullet-list li::before {
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

        .dept-iks-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD */
        .dept-iks-event-acc-item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* HEADER */
        .dept-iks-event-acc-header {
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
        .dept-iks-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-iks-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* ACTIVE */
        .dept-iks-event-acc-item.active .dept-iks-event-acc-content {
            padding: 20px;
        }

        .dept-iks-event-acc-item.active .dept-iks-event-acc-header i {
            transform: rotate(180deg);
        }

        /* IMAGE */
        .dept-iks-event-img {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-iks-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-iks-event-img img {
                height: 220px;
            }
        }

        /* ================= TABLE LIST SECTION ================= */
        .dept-iks-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-iks-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-iks-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-iks-table-header {
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
        .dept-iks-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-iks-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-iks-table-acc.active .dept-iks-table-content {
            padding: 20px;
        }

        .dept-iks-table-acc.active .dept-iks-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-iks-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-iks-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-iks-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-iks-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-iks-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-iks-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-iks-table td,
        .dept-iks-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (SINGLE IMAGE) ================= */

        .dept-iks-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-iks-event-container {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* CARD */
        .dept-iks-event-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            transition: var(--transition);
        }

        .dept-iks-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(44, 74, 122, 0.12);
        }

        /* TITLE */
        .dept-iks-event-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--primary);
            padding: 20px 25px;
            line-height: 1.7;
        }

        /* IMAGE WRAPPER */
        .dept-iks-event-img {
            width: 100%;
            overflow: hidden;
        }

        /* IMAGE */
        .dept-iks-event-img img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        /* HOVER EFFECT */
        .dept-iks-event-card:hover img {
            transform: scale(1.03);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {
            .dept-iks-event-title {
                font-size: 1rem;
                padding: 15px;
            }

            .dept-iks-event-img img {
                height: 220px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-iks-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-iks-achievement-tabs {
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
        .dept-iks-achievement-content {
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
        .dept-iks-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-iks-recognition-container {
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
        .dept-iks-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-iks-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-iks-recognition-content {
            flex: 2;
        }

        .dept-iks-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-iks-recognition-btn {
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

        .dept-iks-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-iks-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-iks-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-iks-recognition-content p {
                text-align: center;
            }

            .dept-iks-recognition-btn {
                justify-content: center;
            }
        }

        .dept-iks-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-iks-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

    <div class="dept-iks-floating">
        <a href="#dept-home" class="dept-iks-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-iks-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-iks-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-iks-float-text">About</span>
        </a>

        <!-- <a href="#dept-vision" class="dept-iks-float-item">
                <i class="fa fa-bullseye"></i>
                <span class="dept-iks-float-text">Vision & Mission</span>
            </a> -->

        <a href="#dept-courses" class="dept-iks-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-iks-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-iks-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-iks-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-iks-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-iks-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-iks-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-iks-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-iks-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-iks-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-iks-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-iks-wrapper">

        <div class="dept-iks-heading" id="dept-home">
            <h1>Centre for <span>Indian Knowledge System</span></h1>
            <!-- <h2>Royal School of Indian Knowledge System (IKS)</h2> -->
        </div>

        <div class="dept-iks-hero" id="dept-about">

            <div class="dept-iks-img">
                <img src="https://rgu.ac/mobile-assets/department-all/iks/head-img.png" alt="Indian Knowledge System">
            </div>

            <div class="dept-iks-content">

                <h3>About <span>Department</span></h3>

                <p>
                    Bridging Ancient Wisdom with Contemporary Thought The Indian Knowledge Systems (IKS) embodies the
                    profound synergy between ancient wisdom and modern innovation. Far from being confined to the past,
                    IKS offers a timeless framework for understanding the world—rooted in indigenous philosophies,
                    holistic and natural sciences, ethical living, and sustainable practices. Drawing from millennia-old
                    traditions in fields such as medicine, astronomy, agriculture, mathematics, linguistics,
                    metaphysics, arts and culture IKS serves as a vital knowledge ecosystem that speaks to today’s
                    global challenges. With the guiding principle of Gyan Vigyan Vimuktaye —knowledge and science as
                    pathways to liberation—IKS champions integrative thought, fostering dialogue between classical
                    insights and contemporary disciplines. The Assam Royal Global University, through its IKS Cell
                    established on 24th January 2024, envisions this knowledge not as relics of the past, but as living
                    traditions—to be studied, applied, and evolved. As the world seeks sustainable, inclusive, and
                    ethical solutions, IKS stands at the crossroads of heritage and innovation, offering a rooted yet
                    forward-looking vision of education and inquiry.
                </p>



            </div>

        </div>

        <div class="dept-iks-prospects-section">

            <div class="dept-iks-prospects-content">

                <h2 class="dept-iks-section-title">Empowering Indigenous <span>Wisdom for Contemporary Society</span>
                </h2>

                <p class="dept-iks-lab-intro">
                    Aligned with the vision of the Indian Knowledge Systems (IKS) Division, Ministry of Education,
                    Government of India, the IKS Cell at The Assam Royal Global University (RGU) serves as a dynamic
                    platform for the revival, reinterpretation, and integration of India’s diverse knowledge traditions.
                    The Cell focuses particularly on the rich indigenous heritage of Northeast India, nurturing a
                    confluence of ancient wisdom and contemporary thought.
                </p>

                <h2 class="dept-iks-section-title">Core Responsibilities <span>of the IKS Cell:</span></h2>

                <h3 class="dept-iks-subheading">Revitalization and Promotion</h3>
                <p class="dept-iks-lab-intro">
                    Promote and propagate Indian Knowledge Systems through interdisciplinary education, applied
                    research, and community engagement—with a special emphasis on Northeast India’s traditional
                    ecological knowledge, folk healing, oral histories, and cultural practices.
                </p>

                <h3 class="dept-iks-subheading">Academic Integration</h3>
                <p class="dept-iks-lab-intro">
                    Embed IKS principles across academic curricula—including but not limited to philosophy, agriculture,
                    mathematics, natural science, vernacular architecture, linguistics, literature, Ayurveda, yoga,
                    folklore, and environmental studies—through collaborations with national and global IKS networks,
                    research bodies, and archives.
                </p>

                <h3 class="dept-iks-subheading">Documentation and Digitization</h3>
                <p class="dept-iks-lab-intro">
                    Undertake the scientific documentation, archiving, and digitization of manuscripts, oral narratives,
                    indigenous practices, and endangered knowledge systems for future generations and scholarly inquiry.
                </p>

                <h3 class="dept-iks-subheading">Community Outreach and Capacity Building</h3>
                <p class="dept-iks-lab-intro">
                    Conduct lectures, field visits, folk art festivals, heritage workshops, and hands-on training to
                    strengthen cultural pride, intergenerational knowledge transfer, and sustainable livelihood models.
                </p>

                <h3 class="dept-iks-subheading">Policy and Innovation Support</h3>
                <p class="dept-iks-lab-intro">
                    Assist in shaping IKS-related policies, advocate for knowledge-based grassroots innovations, and
                    bridge traditional knowledge with 21st-century challenges in climate, health, and education.
                </p>

                <h3 class="dept-iks-subheading">Internship Opportunity</h3>
                <p class="dept-iks-lab-intro">
                    <strong>Research & Community Service Project – Exploring Roots, Empowering
                        Communities</strong><br><br>
                    The Intern – Research & Community Service Project is a unique experiential learning opportunity
                    designed for students, researchers, and young professionals passionate about cultural
                    sustainability, indigenous knowledge, and social impact.
                </p>

                <h2 class="dept-iks-section-title">Role <span>Overview</span>
                </h2>

                <p class="dept-iks-lab-intro">
                    As part of this internship, the intern will engage in immersive fieldwork and collaborative
                    research, under the guidance of faculty mentors and community leaders. This initiative contributes
                    to the university’s larger mission of culturally rooted, socially responsive, and knowledge-driven
                    development.
                </p>

                <h2 class="dept-iks-section-title">Key <span>Responsibilities</span>
                </h2>

                <h3 class="dept-iks-subheading">Field-Based Ethnographic Research</h3>
                <p class="dept-iks-lab-intro">
                    Conduct qualitative and participatory research focusing on indigenous practices, folk traditions,
                    community knowledge systems, and sustainable living models.
                </p>

                <h3 class="dept-iks-subheading">Documentation & Knowledge Curation</h3>
                <p class="dept-iks-lab-intro">
                    Assist in the creation of field reports, ethnographic films, photographic archives, and multilingual
                    digital content for academic and public dissemination.
                </p>

                <h3 class="dept-iks-subheading">Community Engagement</h3>
                <p class="dept-iks-lab-intro">
                    Help organize workshops, storytelling sessions, heritage festivals, and youth engagement activities
                    to foster cultural awareness and social inclusion.
                </p>

                <h3 class="dept-iks-subheading">Content Creation & Awareness</h3>
                <p class="dept-iks-lab-intro">
                    Develop content for newsletters, reports, digital media, and academic posters to promote the
                    project's outcomes and build wider visibility.
                </p>

                <h3 class="dept-iks-subheading">Skill and Capacity Development</h3>
                <p class="dept-iks-lab-intro">
                    Facilitate grassroots training sessions in the areas of cultural entrepreneurship, ecological
                    awareness, and traditional crafts—especially involving local youth and women.
                </p>

                <h2 class="dept-iks-section-title">Outcome and <span>Impact</span>
                </h2>

                <p class="dept-iks-lab-intro">
                    This integrated initiative nurtures leadership, empathy, field experience, and interdisciplinary
                    skills, while contributing directly to the national vision of Bharatiya Gyan Parampara as a driver
                    of innovation and sustainability. Interns become ambassadors of change, working at the intersection
                    of heritage, research, and community transformation.
                </p>

                <h2 class="dept-iks-section-title">Scholarly Publication <span>and Dissemination</span>
                </h2>

                <p class="dept-iks-lab-intro">
                    Facilitate the publication of research findings through academic journals, edited volumes, policy
                    briefs, and institutional reports to contribute to national and global discourse on Indian Knowledge
                    Systems and indigenous studies.
                </p>

            </div>
        </div>

        <div class="dept-iks-courses-section" id="dept-courses">
            <h2 class="dept-iks-section-title">Courses <span>Offered</span></h2>

            <div class="dept-iks-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-iks-prospects-section" id="dept-prospects">
          <h2 class="dept-iks-section-title">Career <span>Prospects</span></h2>

          <div class="dept-iks-prospects-content">
            <p class="dept-iks-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-iks-subheading">Higher Education Opportunities</h3>
            <ol class="dept-iks-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-iks-subheading">Government Sector Jobs</h3>
            <ol class="dept-iks-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-iks-subheading">Private Sector Careers</h3>
            <ol class="dept-iks-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-iks-subheading">Research & Teaching</h3>
            <ol class="dept-iks-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-iks-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-iks-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-iks-subheading">Jobs Abroad</h3>
            <ol class="dept-iks-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-iks-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-iks-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-iks-accordion-section" id="dept-syllabus">
            <h2 class="dept-iks-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-iks-accordion-wrapper">

                <div class="dept-iks-accordion-item active">
                    <div class="dept-iks-accordion-header">
                        <div class="dept-iks-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-iks-chevron"></i>
                    </div>

                    <div class="dept-iks-accordion-content">
                        <div class="dept-iks-syllabus-list">
                            <!-- <h3>Political Science</h3> -->
                            <a target="_blank"
                                href="https://rgu.ac/mobile-assets/department-all/iks/updated-syllabus/Course-structure_IKS.pdf"
                                class="dept-iks-syllabus-link">
                                <div class="dept-iks-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus - IKS
                                </div>
                                <i class="fa-solid fa-download dept-iks-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://rgu.ac/mobile-assets/department-all/iks/updated-syllabus/MA-IKS-Detailed-Syllabus.pdf"
                                class="dept-iks-syllabus-link">
                                <div class="dept-iks-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - IKS
                                </div>
                                <i class="fa-solid fa-download dept-iks-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-iks-accordion-item">
                    <div class="dept-iks-accordion-header">
                        <div class="dept-iks-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-iks-chevron"></i>
                    </div>

                    <div class="dept-iks-accordion-content">
                        <div class="dept-iks-syllabus-list">
                            <a target="_blank" href="/phd" class="dept-iks-syllabus-link">
                                <div class="dept-iks-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-iks-event-gallery-section" id="dept-events">

            <h2 class="dept-iks-section-title">
                Event <span>Highlights</span>
            </h2>

            <div class="dept-iks-event-accordion" id="event-gallery-container"></div>

        </div>

        <div class="dept-iks-table-section" id="dept-committee">

            <div class="dept-iks-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-iks-lab-section" id="dept-lab">

                <div class="dept-iks-lab-container">

                    <h2 class="dept-iks-section-title">Physiotherapy <span> OPD</span></h2>

                    <p class="dept-iks-lab-intro">
                        The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                        patient. The
                        students through OPD practicals would learn how to treat patients with physical disabilities and
                        injuries in a
                        range of settings including hospitals, health centres, private practices and sports clubs under the
                        proper
                        guidance of a specialist. The OPD is located in Block-D on the ground floor.
                    </p>

                    <ol class="dept-iks-lab-list">
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


                     <h3 class="dept-iks-lab-heading">Our Lab Equipments</h3>

                    <h2 class="dept-iks-section-title">Glimpse of <span>our Lab</span></h2>

                    <div class="dept-iks-lab-gallery">

                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                            class="dept-iks-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                            class="dept-iks-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                            class="dept-iks-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                            class="dept-iks-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                            class="dept-iks-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                            class="dept-iks-lab-img">

                    </div>

                    <button class="dept-iks-explore-btn">Explore</button>
                </div>

            </div> -->

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
            title: "M.A. - Indian Knowledge System (IKS)",
            duration: "2 years",
            link: "https://rgu.ac/program-ma-IKS"
        }];

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
        <div class="dept-iks-course-card">

          <div class="dept-iks-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-iks-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-iks-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-iks-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-iks-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-iks-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-iks-accordion-content');

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
        <div class="dept-iks-event-item">
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
                    ["1", "Convenor (Ex-Officio)", "Dr. Pallabi Borah, Coordinator, Department of iks"],

                    ["2", "External Academic Expert (Subject Expert – iks)",
                        "Prof. Kalidas Upadhyaya, Professor, Department of iks, Mizoram University"
                    ],
                    ["3", "External Academic Expert (Subject Expert – iks)",
                        "Dr. A. Arunachalam, FNAAS, Director, Central Agroiks Research Institute, ICAR, Jhansi"
                    ],

                    ["4", "Member (Ex-Officio)", "Prof. Nikhil Kumar Chrungoo, Professor and Dean, RSLSC"],
                    ["5", "Member (Ex-Officio)",
                        "Mr. Arvind Madhav Singh, Retired IFS, Advisor & Visiting Professor (Adjunct), Department of iks"
                    ],
                    ["6", "Member (Ex-Officio)", "Dr. Demsai Reang, Assistant Professor, Department of iks"],
                    ["7", "Member (Ex-Officio)", "Dr. Paul Lalremsang, Assistant Professor, Department of iks"],
                    ["8", "Member (Ex-Officio)", "Mr. Puskal Bagchie, Assistant Professor, Department of iks"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Designated Members", "Nomination"],
                rows: [
                    ["1", "Member",
                        "Dr. Pallabi Borah, Assistant Professor & Coordinator, Department of iks (RSLSC), RGU"
                    ],

                    ["2", "Member", "Prof. Nikhil Kumar Chrungoo, Dean, RSLSC, RGU"],

                    ["3", "Member",
                        "Mr. Arvind Kumar Madhav Singh, Professor (Adjunct), Department of iks (RSLSC), RGU"
                    ],

                    ["4", "Member Secretary",
                        "Dr. Demsai Reang, Assistant Professor, Department of iks (RSLSC), RGU"
                    ],

                    ["5", "Member", "Dr. Paul Lalremsang, Assistant Professor, Department of iks (RSLSC), RGU"],

                    ["6", "External Expert",
                        "Dr. K.K. Sarma, Sci./Engr. ‘G’ & Group Head, Remote Sensing Applications Group (GHRSAG), NESAC"
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
        <div class="dept-iks-table-responsive">
          <table class="dept-iks-table">
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
        <div class="dept-iks-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-iks-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-iks-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-iks-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-iks-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-iks-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-iks-table-content");
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
                    title: "Events Organized by IKS Cell in the academic year 2024 1. Poster Launch Ceremony & Lecture on Indian Knowledge Systems: Collaboration: Bharatiya Shikshan Mandal Date: April 25, 2024 a) Poster Launch Ceremony: This ceremony serves as the inauguration of the State-Level Research Paper Writing Competition and will feature the unveiling of posters announcing the competition. b) Lecture on Indian Knowledge Systems: Invited guests: 1. Prof. Kameshwar Shukla, Department of Sanskrit, Gauhati University 2. Prof. Uday Dixit, Director, Centre for Indian Knowledge Systems (CIKS), IIT, Guwahati.",
                    image: "mobile-assets/new-dept-iks/events/e1/1.jpg"
                },
                {
                    title: "Exhibition and Lecture on Culture and Heritage Collaboration with: INTACH (Indian National Trust for Art and Cultural Heritage) Dates: May 20-22, 2024 Invited Guest Speaker (on 20th May): Ms. Vandana Manchanda, Director of the Architectural Heritage Division and Head-Heritage, Crafts, & Community Division at INTACH",
                    image: "mobile-assets/new-dept-iks/events/e2/1.jpg"
                },
                {
                    title: "Lecture Session on Abhinaya. Topic: Abhinaya - Folk Elements in Indian Cinema and Theatre Collaboration with DSW at RGU May 24, 2024 Invited Guest Speaker- Shri Pranjal Saikia - veteran actor and Sangeet Natak Akademi awardee",
                    image: "mobile-assets/new-dept-iks/events/e3/1.jpg"
                },
                {
                    title: "Invited Talk: Decoding India’s Temples and the Challenges of Reconstructing Them Speaker: Dr. Nachiket Chanchani, Associate Professor of South Asian Art and Visual Culture at the University of Michigan, Ann Arbor, USA Date: May 27, 2024",
                    image: "mobile-assets/new-dept-iks/events/e4/1.jpg"
                },
                {
                    title: "Workshop on Mask Making for World Folklore Day Date: 21st August, 2024 Invited Guests (Experts): Shri Haren Goswami, Samaguri Satra, Majuli, Assam Shri Bhaskar Jyoti Goswami, Samaguri Satra, Majuli, Assam Shri Pranab Borah, Samaguri Satra, Majuli, Assam",
                    image: "mobile-assets/new-dept-iks/events/e5/1.jpg"
                },
                {
                    title: "Lecture on World Folklore Day Date: 22nd August, 2024 Topic: Folk Elements: The Treasure Troves of Indian Knowledge Systems Invited Guest (Speaker): Prof. (Dr.) Sudeshna Bhattacharjya, Head Department of Sanskrit, Gauhati University & Director, ABILAC (Anundoram Borooah Institute of Language Art and Culture)",
                    image: "mobile-assets/new-dept-iks/events/e6/1.jpg"
                },
                {
                    title: "Lecture on Date: 22nd October, 2024 Topic: The Relevance of Indian Knowledge Systems (IKS) in Modern Times. Invited speaker: Dr. Raj Vedam, Director of Arsha Vidya Satsang, Indic Education, Houston, USA",
                    image: "mobile-assets/new-dept-iks/events/e7/1.jpg"
                },
                {
                    title: "Talk/event/FDP/Conference organised by IKS in 2025",
                    image: "mobile-assets/new-dept-iks/events/e8/1.jpg"
                }

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
            <div class="dept-iks-event-acc-item">

                <div class="dept-iks-event-acc-header">
                    <span>${event.title}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <div class="dept-iks-event-acc-content">
                    <div class="dept-iks-event-img">
                        <img src="${event.image}" alt="event image">
                    </div>
                </div>

            </div>
        `).join("");

                eventGalleryContainer.innerHTML = html;
            }

            /* ================= ACCORDION LOGIC ================= */
            function initAccordion() {

                const items = eventGalleryContainer.querySelectorAll(".dept-iks-event-acc-item");

                items.forEach(item => {

                    const header = item.querySelector(".dept-iks-event-acc-header");
                    const content = item.querySelector(".dept-iks-event-acc-content");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active");
                            const c = i.querySelector(".dept-iks-event-acc-content");
                            if (c) c.style.maxHeight = 0;
                        });

                        // Open clicked (if it was closed)
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
