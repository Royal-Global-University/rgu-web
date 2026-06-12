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

        .dept-forestry-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-forestry-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-forestry-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-forestry-heading h1 span {
            color: var(--accent);
        }

        .dept-forestry-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-forestry-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-forestry-img {
            flex: 1;
            position: relative;
        }

        .dept-forestry-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-forestry-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-forestry-content {
            flex: 1;
        }

        .dept-forestry-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-forestry-content h3 span {
            color: var(--accent);
        }

        .dept-forestry-content p {
            font-size: clamp(1.2rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-forestry-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-forestry-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-forestry-float-item {
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

        .dept-forestry-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-forestry-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-forestry-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-forestry-float-item:hover i {
            color: #fff;
        }

        .dept-forestry-float-item:hover .dept-forestry-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-forestry-admission-btn {
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

        .dept-forestry-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-forestry-admission-btn:hover {
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
            .dept-forestry-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-forestry-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-forestry-img img {
                padding-left: 0%;
            }

            .dept-forestry-floating {
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

            .dept-forestry-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-forestry-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-forestry-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-forestry-float-item:active i {
                color: var(--primary);
            }

            .dept-forestry-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-forestry-admission-btn {
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
            .dept-forestry-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-forestry-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-forestry-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-forestry-section-title span {
            color: var(--accent);
        }

        .dept-forestry-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-forestry-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-forestry-course-header {
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
        .dept-forestry-course-header::after {
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
        .dept-forestry-view-btn {
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

        .dept-forestry-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-forestry-course-body {
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
            .dept-forestry-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-forestry-img img {
                padding-left: 0%;
            }

            .dept-forestry-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-forestry-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-forestry-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-forestry-prospects-content {
                padding: 25px 20px;
            }


            .dept-forestry-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-forestry-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-forestry-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-forestry-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-forestry-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-forestry-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-forestry-list li {
            margin-bottom: 12px;
        }

        .dept-forestry-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-forestry-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-forestry-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-forestry-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-forestry-accordion-header {
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

        .dept-forestry-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-forestry-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-forestry-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-forestry-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-forestry-accordion-item.active .dept-forestry-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-forestry-accordion-item.active .dept-forestry-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-forestry-accordion-item.active .dept-forestry-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-forestry-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-forestry-syllabus-link {
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

        .dept-forestry-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-forestry-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-forestry-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-forestry-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-forestry-syllabus-link:hover .dept-forestry-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-forestry-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-forestry-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-forestry-lab-container {
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

        .dept-forestry-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);

        }

        /* Intro Text */
        .dept-forestry-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 0vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-forestry-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-forestry-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-forestry-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-forestry-explore-btn {
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

        .dept-forestry-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-forestry-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-forestry-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-forestry-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-forestry-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-forestry-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-forestry-bullet-list li::before {
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

        .dept-forestry-event-accordion {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD */
        .dept-forestry-event-acc-item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
        }

        /* HEADER */
        .dept-forestry-event-acc-header {
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
        .dept-forestry-event-acc-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-forestry-event-acc-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        /* ACTIVE */
        .dept-forestry-event-acc-item.active .dept-forestry-event-acc-content {
            padding: 20px;
        }

        .dept-forestry-event-acc-item.active .dept-forestry-event-acc-header i {
            transform: rotate(180deg);
        }

        /* IMAGE */
        .dept-forestry-event-img {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .dept-forestry-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .dept-forestry-event-img img {
                height: 220px;
            }
        }

        /* ================= TABLE LIST SECTION ================= */
        .dept-forestry-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-forestry-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-forestry-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-forestry-table-header {
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
        .dept-forestry-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-forestry-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-forestry-table-acc.active .dept-forestry-table-content {
            padding: 20px;
        }

        .dept-forestry-table-acc.active .dept-forestry-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-forestry-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-forestry-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-forestry-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-forestry-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-forestry-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-forestry-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-forestry-table td,
        .dept-forestry-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (SINGLE IMAGE) ================= */

        .dept-forestry-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-forestry-event-container {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        /* CARD */
        .dept-forestry-event-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            border-top: 4px solid var(--accent);
            transition: var(--transition);
        }

        .dept-forestry-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(44, 74, 122, 0.12);
        }

        /* TITLE */
        .dept-forestry-event-title {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--primary);
            padding: 20px 25px;
            line-height: 1.7;
        }

        /* IMAGE WRAPPER */
        .dept-forestry-event-img {
            width: 100%;
            overflow: hidden;
        }

        /* IMAGE */
        .dept-forestry-event-img img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        /* HOVER EFFECT */
        .dept-forestry-event-card:hover img {
            transform: scale(1.03);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 768px) {
            .dept-forestry-event-title {
                font-size: 1rem;
                padding: 15px;
            }

            .dept-forestry-event-img img {
                height: 220px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-forestry-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-forestry-achievement-tabs {
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
        .dept-forestry-achievement-content {
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
        .dept-forestry-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-forestry-recognition-container {
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
        .dept-forestry-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-forestry-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-forestry-recognition-content {
            flex: 2;
        }

        .dept-forestry-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-forestry-recognition-btn {
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

        .dept-forestry-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-forestry-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-forestry-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-forestry-recognition-content p {
                text-align: center;
            }

            .dept-forestry-recognition-btn {
                justify-content: center;
            }
        }

        .dept-forestry-lab-list {
            text-align: left;
            /* ensures left alignment */
            padding-left: 20px;
            /* proper spacing for numbers */
            margin-top: 10px;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .dept-forestry-lab-list li {
            margin-bottom: 8px;
            line-height: 1.8;
            /* fix readability */
        }
    </style>

    <div class="dept-forestry-floating">
        <a href="#dept-home" class="dept-forestry-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-forestry-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-forestry-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-forestry-float-text">About</span>
        </a>

        <a href="#dept-vision" class="dept-forestry-float-item">
            <i class="fa fa-bullseye"></i>
            <span class="dept-forestry-float-text">Vision & Mission</span>
        </a>

        <a href="#dept-courses" class="dept-forestry-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-forestry-float-text">Courses</span>
        </a>

        <a href="#dept-syllabus" class="dept-forestry-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-forestry-float-text">Syllabus</span>
        </a>

        <a href="#dept-events" class="dept-forestry-float-item">
            <i class="fa fa-calendar"></i>
            <span class="dept-forestry-float-text">Events</span>
        </a>

        <a href="#dept-committee" class="dept-forestry-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-forestry-float-text">Committee</span>
        </a>

        <!-- <a href="#dept-lab" class="dept-forestry-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-forestry-float-text">Lab</span>
            </a> -->

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-forestry-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-forestry-wrapper">

        <div class="dept-forestry-heading" id="dept-home">
            <h1>Department of <span>Forestry</span></h1>
            <h2>Royal School of Life Sciences (RSLSC)</h2>
        </div>

        <div class="dept-forestry-hero" id="dept-about">

            <div class="dept-forestry-img">
                <img src="/home-banner/foresty.png"
                    alt="Political Science and Public Administration">
            </div>

            <div class="dept-forestry-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The forestry program aims to provide opportunities for students aspiring to become forestry
                    professionals and actively participate in sustainable forest resource management. Our education
                    emphasizes scientific knowledge, field and technical skills, and a sense of environmental
                    stewardship. The coursework integrates fundamental biological principles with core subjects such as
                    forest policy, economics, and management. The curriculum combines interdisciplinary knowledge with a
                    focus on social responsibility towards forest resources, considering evolving social values and
                    economic contexts. Additionally, students are encouraged to enhance their leadership and management
                    skills through summer internships, entrepreneurial development, and other opportunities.
                </p>



            </div>

        </div>

        <!-- vision mission  -->
        <div class="dept-forestry-prospects-section" id="dept-vision">
            <h2 class="dept-forestry-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-forestry-prospects-content">

                <h3 class="dept-forestry-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-forestry-bullet-list">
                    <li>
                        To develop environmentally conscious leaders with comprehensive forestry knowledge, empowering
                        them to lead sustainable practices and create innovative solutions for forest stewardship.
                    </li>

                </ul>

                <h3 class="dept-forestry-subheading">Our Mission</h3>
                <ul class="dept-forestry-bullet-list">

                    <li>
                        To provide a quality education that is student-centric, innovative, research-intensive, and
                        industry-oriented.
                    </li>
                    <li>
                        To equip students with the skills and knowledge to address complex forestry challenges,
                        fostering ethical conduct and a strong commitment to conservation and sustainable practices.
                    </li>
                    <li>
                        To develop graduates who are responsible stewards of the environment and active contributors to
                        society.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-forestry-courses-section" id="dept-courses">
            <h2 class="dept-forestry-section-title">Courses <span>Offered</span></h2>

            <div class="dept-forestry-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-forestry-prospects-section" id="dept-prospects">
          <h2 class="dept-forestry-section-title">Career <span>Prospects</span></h2>

          <div class="dept-forestry-prospects-content">
            <p class="dept-forestry-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-forestry-subheading">Higher Education Opportunities</h3>
            <ol class="dept-forestry-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-forestry-subheading">Government Sector Jobs</h3>
            <ol class="dept-forestry-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-forestry-subheading">Private Sector Careers</h3>
            <ol class="dept-forestry-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-forestry-subheading">Research & Teaching</h3>
            <ol class="dept-forestry-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-forestry-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-forestry-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-forestry-subheading">Jobs Abroad</h3>
            <ol class="dept-forestry-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-forestry-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-forestry-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <div class="dept-forestry-accordion-section" id="dept-syllabus">
            <h2 class="dept-forestry-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-forestry-accordion-wrapper">

                <div class="dept-forestry-accordion-item active">
                    <div class="dept-forestry-accordion-header">
                        <div class="dept-forestry-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-forestry-chevron"></i>
                    </div>

                    <div class="dept-forestry-accordion-content">
                        <div class="dept-forestry-syllabus-list">
                            <!-- <h3>Political Science</h3> -->
                            <a target="_blank"
                                href="/mobile-assets/syllabus/RSLSC/Syllabus-Structure_B.Sc.-Forestry.pdf"
                                class="dept-forestry-syllabus-link">
                                <div class="dept-forestry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus - B.Sc. Forestry
                                </div>
                                <i class="fa-solid fa-download dept-forestry-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSLSC/B.Sc%20Forestry%20Detailed%20Syllabus.pdf"
                                class="dept-forestry-syllabus-link">
                                <div class="dept-forestry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - B.Sc. Forestry
                                </div>
                                <i class="fa-solid fa-download dept-forestry-download-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dept-forestry-accordion-item">
                    <div class="dept-forestry-accordion-header">
                        <div class="dept-forestry-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-forestry-chevron"></i>
                    </div>

                    <div class="dept-forestry-accordion-content">
                        <div class="dept-forestry-syllabus-list">
                            <!-- <h3>Political Science</h3> -->
                            <a target="_blank"
                                href="/mobile-assets/syllabus/RSLSC/Syllabus-Structure_M.Sc.-Forestry.pdf"
                                class="dept-forestry-syllabus-link">
                                <div class="dept-forestry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus - M.Sc. Forestry
                                </div>
                                <i class="fa-solid fa-download dept-forestry-download-icon"></i>
                            </a>
                            <a target="_blank"
                                href="https://www.rgu.ac/mobile-assets/syllabus/RSLSC/M.Sc%20Forestry%20Detailed%20Syllabus.pdf"
                                class="dept-forestry-syllabus-link">
                                <div class="dept-forestry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - M.Sc. Forestry
                                </div>
                                <i class="fa-solid fa-download dept-forestry-download-icon"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dept-forestry-accordion-item">
                    <div class="dept-forestry-accordion-header">
                        <div class="dept-forestry-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-forestry-chevron"></i>
                    </div>

                    <div class="dept-forestry-accordion-content">
                        <div class="dept-forestry-syllabus-list">
                            <a target="_blank" href="https://www.rgu.ac/phd" class="dept-forestry-syllabus-link">
                                <div class="dept-forestry-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-forestry-event-gallery-section" id="dept-events">

            <h2 class="dept-forestry-section-title">
                Event <span>Highlights</span>
            </h2>

            <div class="dept-forestry-event-accordion" id="event-gallery-container"></div>

        </div>

        <div class="dept-forestry-table-section" id="dept-committee">

            <div class="dept-forestry-table-grid" id="table-accordion-container"></div>

        </div>

        <!-- <div class="dept-forestry-lab-section" id="dept-lab">

                <div class="dept-forestry-lab-container">

                    <h2 class="dept-forestry-section-title">Physiotherapy <span> OPD</span></h2>

                    <p class="dept-forestry-lab-intro">
                        The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a
                        patient. The
                        students through OPD practicals would learn how to treat patients with physical disabilities and
                        injuries in a
                        range of settings including hospitals, health centres, private practices and sports clubs under the
                        proper
                        guidance of a specialist. The OPD is located in Block-D on the ground floor.
                    </p>

                    <ol class="dept-forestry-lab-list">
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


                     <h3 class="dept-forestry-lab-heading">Our Lab Equipments</h3>

                    <h2 class="dept-forestry-section-title">Glimpse of <span>our Lab</span></h2>

                    <div class="dept-forestry-lab-gallery">

                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f"
                            class="dept-forestry-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a"
                            class="dept-forestry-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b"
                            class="dept-forestry-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c"
                            class="dept-forestry-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d"
                            class="dept-forestry-lab-img">
                        <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e"
                            class="dept-forestry-lab-img">

                    </div>

                    <button class="dept-forestry-explore-btn">Explore</button>
                </div>

            </div> -->

    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "M.Sc. - Forestry",
                duration: "2 years",
                link: "https://www.rgu.ac/programs-MSc-Forestry"
            },
            {
                title: "B.Sc. - Forestry",
                duration: "4 Years",
                link: "https://www.rgu.ac/programs-b-sc-forestry"
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
        <div class="dept-forestry-course-card">

          <div class="dept-forestry-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-forestry-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-forestry-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-forestry-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-forestry-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-forestry-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-forestry-accordion-content');

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
        <div class="dept-forestry-event-item">
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
                    ["1", "Convenor (Ex-Officio)", "Dr. Pallabi Borah, Coordinator, Department of Forestry"],

                    ["2", "External Academic Expert (Subject Expert – Forestry)",
                        "Prof. Kalidas Upadhyaya, Professor, Department of Forestry, Mizoram University"
                    ],
                    ["3", "External Academic Expert (Subject Expert – Forestry)",
                        "Dr. A. Arunachalam, FNAAS, Director, Central Agroforestry Research Institute, ICAR, Jhansi"
                    ],

                    ["4", "Member (Ex-Officio)", "Prof. Nikhil Kumar Chrungoo, Professor and Dean, RSLSC"],
                    ["5", "Member (Ex-Officio)",
                        "Mr. Arvind Madhav Singh, Retired IFS, Advisor & Visiting Professor (Adjunct), Department of Forestry"
                    ],
                    ["6", "Member (Ex-Officio)", "Dr. Demsai Reang, Assistant Professor, Department of Forestry"],
                    ["7", "Member (Ex-Officio)",
                    "Dr. Paul Lalremsang, Assistant Professor, Department of Forestry"],
                    ["8", "Member (Ex-Officio)", "Mr. Puskal Bagchie, Assistant Professor, Department of Forestry"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Designated Members", "Nomination"],
                rows: [
                    ["1", "Member",
                        "Dr. Pallabi Borah, Assistant Professor & Coordinator, Department of Forestry (RSLSC), RGU"
                    ],

                    ["2", "Member", "Prof. Nikhil Kumar Chrungoo, Dean, RSLSC, RGU"],

                    ["3", "Member",
                        "Mr. Arvind Kumar Madhav Singh, Professor (Adjunct), Department of Forestry (RSLSC), RGU"
                    ],

                    ["4", "Member Secretary",
                        "Dr. Demsai Reang, Assistant Professor, Department of Forestry (RSLSC), RGU"
                    ],

                    ["5", "Member",
                    "Dr. Paul Lalremsang, Assistant Professor, Department of Forestry (RSLSC), RGU"],

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
        <div class="dept-forestry-table-responsive">
          <table class="dept-forestry-table">
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
        <div class="dept-forestry-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-forestry-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-forestry-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-forestry-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-forestry-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-forestry-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-forestry-table-content");
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
                    title: "The Department of Civil Engineering organized an industrial site visit to the RMC plant, providing students with valuable exposure to real-time concrete production and modern construction practices.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e1/1.jpg"
                },
                {
                    title: "Field trip to Assam State Zoological and Botanical Garden Date of event:13 September 2024 Resource person: Shri Chinmoy Das, Forest guard and wildlife watcher Activities conducted: The Undergraduate and postgraduate students of Department of Forestry, Assam Royal Global University visited the Assam State Zoological and Botanical Garden where they were oriented regarding the importance of conservation and management of wild animals and plant species. Identification of plants and wild animals were done. Basics of the study of zoo management and importance of outreach activities were emphasized upon during this field trip.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e2/1.jpg"
                },
                {
                    title: "Field trip to Aranya Bhawan Date of event: 13 September Resource Person: Shri Saurav Baruah, GIS technical expert, Assam Forest Department. Activities: The students were taken to Aranya Bhawan, headquarters of the Assam Forest department where they had interacted with GIS expert of the Forest department, Shri Saurav Baruah. A meeting was also conducted with Chief Conservator of Forest, Forest Rights Act (FRA) in which various possibilities of collaboration between RGU and Forest department were explored. The use of GIS and remote sensing and its practical applications were discussed with the esteemed resource person who took a class for the same for our students. Shri Ashwani Kumar, DFO, Assam State Zoological and Botanical Garden, helped us a lot in acquiring permission and logistics. Shri Chinmoy kumar Das, Forest Guard of the Assam Forest department also accompanied us inside the park and lent his valuable knowledge regarding wildlife management of the Zoo.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e3/1.jpg"
                },
                {
                    title: "Awareness Session cum Hands-on training on upcycling/recycling by CLOKET (NGO) Date of event- 16 September 2024 Resource person: Plabita Gogoi is a versatile artist and designer, blending fashion, visual arts, and lifestyle design. With a background in Fashion Design and Fine Arts, she founded the Makers' Hub Guwahati in 2019 and now runs The Makers Social, an art studio in Kahilipara, Guwahati. Focused on sustainable crafts and upcycling, she draws inspiration from diverse cultures. Plabita is passionate about empowering aspiring artisans and designers, aiming to leave a legacy of creativity, innovation, and impact in the world of art and entrepreneurship. Events conducted- Awareness session, Playful quiz round, Upcycling/recycling session, Upcycling contest.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e4/1.jpg"
                },
                {
                    title: "Two days exposure cum training on Agroecological practices, Food Forest & Coexistence at SPREADNE Food Forest & Farm Learning Centre, Sonapur, Assam",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e5/1.jpg"
                },
                {
                    title: "Field Survey at Garbanga Reserve Forest Date of Event: 30 September 2024 Resource Person: Dr. Paul Lalremsang, Assistant Professor, Dept of Forestry, RSLSC, RGU Activity: Field study on forest regeneration study using quadrat methods",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e6/1.jpg"
                },
                {
                    title: "Field survey at The Assam Royal Global University Date of Event: 03 October 2024 Resource Person: Dr. Demsai Reang, Assistant Professor, Dept of Forestry, RSLSC, RGU. Activity: Woody species inventory using stratified-random sampling techniques and Biodiversity estimation of RGU campus.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e7/1.jpg"
                },
                {
                    title: "Study trip to Kaziranga National Park and Tiger Reserve Dates of Event: 12 to 15 October 2024 Resource Persons: Shri Samiran Hatimuria (wildlife rehabilitator and rescue expert), Shri Manoranjan Gogoi (Wildlife rehabilitator and rescue expert), Dr Bhaskar Choudhury (Head, Centre for Wildlife Conservation and Rehabilitation CWRC, Wildlife Trust of India) Activities: The students of UG and PG Forestry were taken to Kaziranga National Park and Tiger Reserve to give them practical knowledge regarding Wildlife and forest ecology, conservation and management techniques employed by ecologists in the field. Additionally, the students were oriented on the principles and procedures of wildlife rescue and rehabilitation at The Centre for Wildlife Conservation and Rehabilitation CWRC, Wildlife Trust of India. The students got the opportunity of interacting with a variety of foresters and ecologists working in and around the park who have disseminated their knowledge to them. Trekking and field exercises involving physical labour were involved to make them acquainted with the process of transect walks and sign surveys. The kaziranga Biodiversity Park and Orchidarium was visited and students have learnt about orchids found in North east India.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e8/1.jpg"
                },
                {
                    title: "Field survey at Community Managed Forest, Garogali Falls, Ahomgaon, Assam Date of Event: 28 November 2024 Resource Person: Dr. Demsai Reang, Assistant Professor, Dept of Forestry, RSLSC, RGU. Activity: Forest inventory using random sampling techniques and vegetation quantification. Collection of samples for herbarium preparation.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e9/1.jpg"
                },
                {
                    title: "International Day of Forest Dates of Event: 21 March 2025 Organized in collaboration with Spread NE & Sanskriti Gurukul under the aegis of IIC, RGU Activities: 1) Invited talk by Dr. Swoyambhu Man Amatya, Deputy Coordinator (Agroforestry), International Union of Forest Research Organizations (IUFRO) focused on career prospects, research advancements, and opportunities in the field of forestry. 2) Forest Products-Based Entrepreneurship Program Display of Forest based products by students for entire RGU community highlighting Forest based entrepreneurship",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e10/1.jpg"
                },
                {
                    title: "Ethnobotanical survey and documentation in the Fringe areas of Rani-Garbhanga Reserved Forest Date of Event: 27 March 2025 Resource Person: Mr. Pushkal Bagchie, Assistant Professor, Dept of Forestry, RSLSC, RGU. Activities: Students of Forestry conducted Ethnobotanical survey and documentation activity in the fringe areas of Rani Garbhanga Forest, Tetelia, Maligaon and Pamohi areas.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e11/1.jpg"
                },
                {
                    title: "Outreach activities: Plantation and Cleanliness Drive at Basistha Forest and Tetelia, Guwahati, Assam Date of Event: 22.04.2025 Organised by: The Health & Safety Club of RGU in association with Dept of Forestry, RGU, NSS, and Silviculturist, Assam, Forest Department, Govt of Assam, under the aegis of DSW, RGU Event Coordinator: Dr. Pallabi Borah & Dr. Demsai Reang, Dept of Forestry, RGU",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e12/1.jpg"
                },
                {
                    title: "Field Survey in collaboration with SpreadNE Date: 30 April 2025 Resource Person: Farmer Samir Bordoloi (Consultant to the United Nations) & Farmer Daya Ranghang Activities: Students trained in field data collection for estimation of Carbon stock and sequestration to advance climate-smart forestry practices.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e13/1.jpg"
                },
                {
                    title: "Hands-on Training and Workshop Kaziranga National Park and Tiger Reserve Date: 16 to 18 May 2025 Resource Person: Wildlife Biologist, Shri Ashish Thoke - The Corbett Foundation, and Shri Amlan Aditya Goswami - Asian Nature Conservation Foundation Activities: Training on sampling techniques, Camera trapping, field equipment handling & operation, and skill and entrepreneurship development sessions on Apiculture, Vermicomposting and Handloom production.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e14/1.jpg"
                },
                {
                    title: "Sustainable Paper Making Workshop in collaboration with Sanskriti the Gurukul International School Date of Event: 30 May 2025 Resource Persons: Smt. Diksha Jain, Teacher, Sanskriti the Gurukul Mrs. Manju Sharma, EVS Educator, Mr. Nabajyoti, Teacher, Geography Mrs. Shawli Dasgupta, Teacher, Hindi Activities: Hands-on training on wastepaper-recycling for circular economy and sustainable waste management",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e15/1.jpg"
                },
                {
                    title: "Hands on Training Programme on Mushroom Cultivation and Spawn Culture Techniques Date- 7th and 8th August 2025 Faculty Coordinator: Pushkal Bagchie (Assistant Professor, Department Of Forestry) Organizers: Skill Satellite Centre (TDUPW, A2K+ Scheme, DSIR, Govt. of India), Guwahati Biotech Park, Govt. of Assam Resource person- Mycologist, Dr. Aniruddha Sarma from Pandu College, Shri Pradip Das, Expert from Baba Mushroom farm training center Participants- 18 students from the Department of Forestry, RGU The Activities which were conducted are as follows. Introduction and practical training in mushroom cultivation and spawn production Quality control, contamination management, and post-harvest handling (packaging and storage) Business, marketing, and government scheme linkages Mentorship, incubation, and support for R&D and IPR Distribution of spawn packets to help participants start their venture",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e16/1.jpg"
                },
                {
                    title: "Session 1 Date: 12th July 2025 Time: 10:00 AM – 12:00 Noon Speaker: Samir Ranjan Bordoloi As part of Deeksharambh 2025, the Royal School of Life Sciences and Agriculture organized an invited lecture on “Food Forest of Co-existence and Climate-smart Livelihoods.” Highlights: Food forest model and its role in biodiversity and soil health Climate-smart livelihood practices Youth-led conservation initiatives (Green Commandos) Motivation for sustainable and purpose-driven thinking",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e17/1.jpg"
                },
                {
                    title: "Session 2 Date- 13th July, 2025 Time- 2 pm - 4 pm As part of Deeksharambh 2025, an invited lecture on “Application of Remote Sensing and GIS in Biodiversity Studies” was conducted. The session introduced students to the use of geospatial tools in biodiversity research and conservation. Highlights: Basics of Remote Sensing and GIS Applications in habitat mapping and biodiversity assessment Case studies in conservation planning Interactive discussion on research opportunities",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e18/1.jpg"
                },
                {
                    title: "A daylong Workshop in Application of Geospatial Tools in Forest Protection and Biodiversity Monitoring Time: 5th September 2025 from 10:00 AM Students of Forestry (all batches) Organizers: Department of Forestry and Balipara Foundation Resource persons: 1. Dr. Bidyut Sarania, Ph.D., Programme Lead (R&D), Balipara Foundation, a trained ecologist specializing in forest ecology, biodiversity conservation, restoration ecology, agro-forestry, and geospatial data analysis (RS & GIS). 2. Dr. Pulakeshwar Basumatary, Research Associate (Balipara Foundation) 3. Ms. Banashree Kakati, Research Assistant, Balipara Foundation) Workshop Objectives: Develop skills in GPS handling and field data collection Enable data visualization and analysis using Google Earth Pro and QGIS Enhance decision-making in forest and biodiversity management using geospatial tools Introduction: The “Field to Map” workshop trains frontline staff to use GPS and GIS tools for accurate mapping and monitoring. It replaces traditional methods with precise, map-based data, improving forest management and conservation efforts.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e19/1.jpg"
                },
                {
                    title: "Student Idea Pitch Presentations at the 13th Naturenomics™ Research Forum Event: 13th Naturenomics™ Research Forum Dates: 14–15 November 2025 Organisers: Balipara Foundation in Collaboration with Gauhati university Participants: UG & PG Students, Department of Forestry Overview of Student Idea Pitches Students presented three innovative, sustainability-focused ideas reflecting ecological awareness and entrepreneurial thinking: Green Supply Chains: Focus on low-carbon production, biodegradable materials, and community-based value chains UV Ink Applications: Smart packaging and environmental monitoring using eco-friendly, UV-sensitive ink Insect-Arousal Patch: Enhancing pollination through low-cost, eco-friendly solutions for agriculture Impact: The ideas were appreciated for their originality and feasibility. Students enhanced their research communication skills and gained exposure to innovation and environmental entrepreneurship.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e20/1.jpg"
                },
                {
                    title: "Two-Day Exposure cum Training on Agroecological Practices, Food Forest & Co-existence Dates: 20–21 November 2025 Organized by: Department of Forestry / Royal School of Life Sciences & Agriculture Training Partner: SPREAD NE Food Forest Resource Person: Farmer Samir Bordoloi Training Activities and Sessions Day 1: Introduction to agroecology, soil health, and food forest systems, followed by field demonstrations and hands-on activities like soil preparation and mulching. Day 2: Practical training on composting, water conservation, natural pest management, and community-based ecological restoration, along with discussions on sustainable livelihoods and co-existence principles.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e21/1.jpg"
                },
                {
                    title: "International Day of Forests, 2026 Dates: 25th March 2026 Organized by: Department of Forestry Theme: Forests and Economies The event highlights the economic and ecological importance of forests, showcasing diverse forest-based products ranging from traditional to modern, with a special focus on the richness of Himalayan forests.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e22/1.jpg"
                },
                {
                    title: "A Short-Term Training Program on Sustainable Forest Management: Quantification of Forest Ecosystem Services (FES) with Hands-on Exposure Organized by: Department of Forestry, The Assam Royal Global University, Guwahati. Resource Person: Mr. Dibakar Deb, IFS (Retd.), a forestry expert with over 39 years of experience in sustainable forest management, carbon accounting, and ecosystem services valuation. Dates: 30th April to 1st May 2026 Time: 10:00 AM onwards The program focuses on practical and theoretical insights into forest ecosystem services and sustainable forest management.",
                    image: "mobile-assets/new-rslsc/dept-forestry/events/e23/1.jpg"
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
            <div class="dept-forestry-event-acc-item">

                <div class="dept-forestry-event-acc-header">
                    <span>${event.title}</span>
                    <i class="fa fa-chevron-down"></i>
                </div>

                <div class="dept-forestry-event-acc-content">
                    <div class="dept-forestry-event-img">
                        <img src="${event.image}" alt="event image">
                    </div>
                </div>

            </div>
        `).join("");

                eventGalleryContainer.innerHTML = html;
            }

            /* ================= ACCORDION LOGIC ================= */
            function initAccordion() {

                const items = eventGalleryContainer.querySelectorAll(".dept-forestry-event-acc-item");

                items.forEach(item => {

                    const header = item.querySelector(".dept-forestry-event-acc-header");
                    const content = item.querySelector(".dept-forestry-event-acc-content");

                    header.addEventListener("click", () => {

                        const isActive = item.classList.contains("active");

                        // Close all
                        items.forEach(i => {
                            i.classList.remove("active");
                            const c = i.querySelector(".dept-forestry-event-acc-content");
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
