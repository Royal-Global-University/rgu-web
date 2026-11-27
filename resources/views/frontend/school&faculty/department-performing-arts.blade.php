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

        {{-- <a href="#dept-syllabus" class="dept-forestry-float-item">
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
        </a> --}}

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
            <h1>Royal School of Performing Arts(RSPA)</h1>
        </div>

        <div class="dept-forestry-hero" id="dept-about">

            <div class="dept-forestry-img">
                <img src="/new-web/assets/ads/per-1.jpeg" alt="Political Science and Public Administration">
            </div>

            <div class="dept-forestry-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Performing Arts at RGU is a vibrant centre for artistic excellence, dedicated to
                    nurturing and promoting the rich classical and contemporary heritage of India, with a special emphasis
                    on the diverse cultural traditions of the North-East. The department offers a comprehensive Bachelor of
                    Arts (BA) program across four core disciplines: 1. Hindustani Classical Vocal, 2. Indian Classical
                    Instrument (Tabla), 3. Indian Classical Dance (Odissi, Sattriya, Kathak, and Bharatanatyam), and 4.
                    Theatre. Alongside the undergraduate degree, the department also offers a specialized two-year Diploma
                    in Folk Dance dedicated to preserving and practicing the diverse folk art forms of North-East India.
                    Designed in alignment with the interdisciplinary framework of NEP 2020, our curriculum bridges deep
                    theoretical knowledge with intensive practical training. Under the mentorship of dedicated faculty
                    members, students experience holistic growth—cultivating emotional resilience, creative confidence, and
                    strong vocational competencies.
                </p>
            </div>


        </div>
        <p> Upon completing their programs, graduates will be equipped with bright
            career prospects and strong employability as professional performers, theatre practitioners,
            academicians, researchers, arts pedagogues, and cultural entrepreneurs at national and international
            levels, alongside opportunities for higher studies and research at premier institutions.</p>

        <!-- vision mission  -->
        <div class="dept-forestry-prospects-section" id="dept-vision">
            <h2 class="dept-forestry-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-forestry-prospects-content">

                <h3 class="dept-forestry-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-forestry-bullet-list">
                    <li>
                        To offer students nationally and internationally integrated opportunities in the field of performing
                        arts to nurture global cultural ambassadors, endowed with creative excellence, emotional depth, and
                        an inclusive ideal of cultural sustainability.
                    </li>

                </ul>

                <h3 class="dept-forestry-subheading">Our Mission</h3>
                <ul class="dept-forestry-bullet-list">

                    <li>
                        To achieve innovative artistic research and curriculum design in line with NEP 2020, blending
                        traditional guru-shishya sensibilities with industry-oriented teaching and learning methodologies.
                    </li>
                    <li>
                        To foster holistic vocational and emotional development, empowering students to become
                        professionally adept, morally upright citizens capable of rendering invaluable cultural and social
                        service to the North-East and the Nation.
                    </li>
                    <li>
                        To nurture world-class performers, scholars, and educators with ethical, value-based practices
                        dedicated to preserving, revitalizing, and innovating India's classical and North-Eastern folk
                        traditions.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-forestry-courses-section" id="dept-courses">
            <h2 class="dept-forestry-section-title">Courses <span>Offered</span></h2>

            <div class="dept-forestry-course-list" id="course-list-container">
            </div>
        </div>

        <!-- vision mission  -->
        <div class="dept-forestry-prospects-section" id="dept-vision">
            <h2 class="dept-forestry-section-title">Program Outcomes (POs)</h2>

            <div class="dept-forestry-prospects-content">
                <h3 class="dept-forestry-subheading">Upon successful completion of the program, graduates of the Department
                    of Performing Arts will be able to:</h3>
                <ul class="dept-forestry-bullet-list">

                    <li>
                        Artistic & Technical Proficiency: Demonstrate mastery over foundational techniques, repertoire, and
                        theoretical frameworks in their chosen discipline—whether in Hindustani Classical Vocal, Indian
                        Classical Instrument (Tabla), Classical Dance (Odissi, Sattriya, Kathak, and Bharatanatyam),
                        Theatre, or the folk-dance traditions of North-East India.
                    </li>
                    <li>
                        Vocational Readiness & Entrepreneurship: Translate artistic training into sustainable careers as
                        independent performers, educators, media professionals, and cultural entrepreneurs in the creative
                        economy.
                    </li>
                    <li>
                        Emotional & Personal Growth: Cultivate discipline, empathy, stage confidence, and creative
                        self-expression through rigorous studio practice and live performance.
                    </li>
                    <li>
                        Cultural Preservation & Social Impact: Document, preserve, and promote indigenous North-Eastern folk arts and classical heritage, using performance as a medium for community engagement and social harmony.
                    </li>
                    <li>
                        Interdisciplinary Research & Critical Inquiry: Conduct original academic and practice-led inquiry, integrating traditional aesthetics with contemporary stagecraft and interdisciplinary perspectives.
                    </li>

                </ul>

            </div>
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
                title: "Bachelor of Performing Art — (Theatre)",
                duration: "4 years",
                link: "/programme-bachelor-of-performing-art-theatre"
            },
            {
                title: "Bachelor of Performing Art — (Dance) Odissi/Folk/ Sattriya/ Kathak Bharatnatyam",
                duration: "4 Years",
                link: "/programme-bachelor-of-performing-art-dance"
            },
            {
                title: "Bachelor of Performing Art — (Music) Tabla / Hindustani Classical Vocal ",
                duration: "4 Years",
                link: "/programme-bachelor-of-performing-art-music"
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
