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

        .dept-socialwork-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-socialwork-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-socialwork-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-socialwork-heading h1 span {
            color: var(--accent);
        }

        .dept-socialwork-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-socialwork-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-socialwork-img {
            flex: 1;
            position: relative;
        }

        .dept-socialwork-img img {
            width: 80%;
            padding-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-socialwork-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-socialwork-content {
            flex: 1;
        }

        .dept-socialwork-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-socialwork-content h3 span {
            color: var(--accent);
        }

        .dept-socialwork-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
            text-align: justify;
        }

        .dept-socialwork-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-socialwork-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-socialwork-float-item {
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

        .dept-socialwork-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-socialwork-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-socialwork-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-socialwork-float-item:hover i {
            color: #fff;
        }

        .dept-socialwork-float-item:hover .dept-socialwork-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-socialwork-admission-btn {
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

        .dept-socialwork-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-socialwork-admission-btn:hover {
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
            .dept-socialwork-wrapper {
                padding-bottom: 160px;
            }

            .dept-socialwork-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-socialwork-img img {
                padding-left: 0%;
            }

            .dept-socialwork-floating {
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

            .dept-socialwork-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-socialwork-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-socialwork-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-socialwork-float-item:active i {
                color: var(--primary);
            }

            .dept-socialwork-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-socialwork-admission-btn {
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
            .dept-socialwork-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-socialwork-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-socialwork-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-socialwork-section-title span {
            color: var(--accent);
        }

        .dept-socialwork-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-socialwork-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-socialwork-course-header {
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
        .dept-socialwork-course-header::after {
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
        .dept-socialwork-view-btn {
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

        .dept-socialwork-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-socialwork-course-body {
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
            .dept-socialwork-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-socialwork-img img {
                padding-left: 0%;
            }

            .dept-socialwork-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-socialwork-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-socialwork-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-socialwork-prospects-content {
                padding: 25px 20px;
            }


            .dept-socialwork-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-socialwork-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-socialwork-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-socialwork-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-socialwork-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-socialwork-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-socialwork-list li {
            margin-bottom: 12px;
        }

        .dept-socialwork-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-socialwork-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-socialwork-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-socialwork-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-socialwork-accordion-header {
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

        .dept-socialwork-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-socialwork-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-socialwork-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-socialwork-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-socialwork-accordion-item.active .dept-socialwork-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-socialwork-accordion-item.active .dept-socialwork-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-socialwork-accordion-item.active .dept-socialwork-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-socialwork-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-socialwork-syllabus-link {
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

        .dept-socialwork-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-socialwork-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-socialwork-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-socialwork-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-socialwork-syllabus-link:hover .dept-socialwork-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-socialwork-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-socialwork-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-socialwork-lab-container {
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

        .dept-socialwork-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-socialwork-lab-intro {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-socialwork-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-socialwork-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-socialwork-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-socialwork-explore-btn {
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

        .dept-socialwork-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-socialwork-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-socialwork-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-socialwork-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-socialwork-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-socialwork-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-socialwork-bullet-list li::before {
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
        .dept-socialwork-events-section {
            /* margin-top: 3vw; */
            animation: fadeInUp 1s ease-out;
        }

        .dept-socialwork-events-box {
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
        .dept-socialwork-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 100s linear infinite;
        }

        .dept-socialwork-events-box:hover .dept-socialwork-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-socialwork-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-socialwork-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-socialwork-events-btn:hover {
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
        .dept-socialwork-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-socialwork-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-socialwork-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-socialwork-table-header {
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
        .dept-socialwork-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-socialwork-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-socialwork-table-acc.active .dept-socialwork-table-content {
            padding: 20px;
        }

        .dept-socialwork-table-acc.active .dept-socialwork-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-socialwork-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-socialwork-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-socialwork-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-socialwork-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-socialwork-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-socialwork-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-socialwork-table td,
        .dept-socialwork-table th {
            white-space: nowrap;
        }

        /* ===== EVENTS + HIGHLIGHTS LAYOUT (REWRITTEN) ===== */

        .dept-socialwork-events-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 3vw;
            align-items: stretch;
        }

        /* LEFT EVENTS */
        .dept-socialwork-events-section {
            display: flex;
            flex-direction: column;
        }

        /* RIGHT HIGHLIGHTS */
        .dept-socialwork-highlights-section {
            display: flex;
            flex-direction: column;
        }

        /* ================= CAROUSEL ================= */

        .dept-socialwork-carousel {
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
            .dept-socialwork-events-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {

            .dept-socialwork-carousel {
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

        .dept-socialwork-explore-btn {
            text-decoration: none !important;
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-socialwork-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-socialwork-achievement-tabs {
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
        .dept-socialwork-achievement-content {
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

    <div class="dept-socialwork-floating">
        <a href="#dept-home" class="dept-socialwork-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-socialwork-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-socialwork-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-socialwork-float-text">About</span>
        </a>

        <!-- <a href="#dept-vision" class="dept-socialwork-float-item">
              <i class="fa fa-bullseye"></i>
              <span class="dept-socialwork-float-text">Vision & Mission</span>
            </a> -->

        <a href="#dept-courses" class="dept-socialwork-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-socialwork-float-text">Courses</span>
        </a>

        <!-- <a href="#dept-prospects" class="dept-socialwork-float-item">
              <i class="fa fa-file-text"></i>
              <span class="dept-socialwork-float-text">Prospects</span>
            </a> -->

        <a href="#dept-syllabus" class="dept-socialwork-float-item">
            <i class="fa fa-file-text"></i>
            <span class="dept-socialwork-float-text">Syllabus</span>
        </a>

        <a href="#dept-committee" class="dept-socialwork-float-item">
            <i class="fa fa-users"></i>
            <span class="dept-socialwork-float-text">Committee</span>
        </a>

        {{-- <a href="#dept-lab" class="dept-socialwork-float-item">
            <i class="fa fa-flask"></i>
            <span class="dept-socialwork-float-text">Lab</span>
        </a> --}}

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-socialwork-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-socialwork-wrapper">

        <div class="dept-socialwork-heading" id="dept-home">
            <h1>Department of <span>Social Work</span></h1>
            <h2>Royal School of Humanities & Social Sciences (RSHSS)</h2>
        </div>

        <div class="dept-socialwork-hero" id="dept-about">

            <div class="dept-socialwork-img">
                <img src="/mobile-assets/department-all/dept-social-work/head-img.png"
                    alt="Political Science and Public Administration">
            </div>

            <div class="dept-socialwork-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Social Work Department at The Assam Royal Global University is dedicated to developing skilled
                    professionals who are equipped to address complex social issues with compassion and expertise. Our
                    department's strength lies in a comprehensive curriculum which integrates theory with hands-on
                    practice through extensive fieldwork opportunities, cutting-edge research, and community engagement.
                    With a focus on areas such as community development, psychiatric social work, family and child
                    welfare, and livelihood & social entrepreneurship, our programmes emphasize both the micro and macro
                    aspects of social work practice. Our faculty consists of experienced practitioners and researchers
                    who bring a wealth of knowledge and practical insights to the classroom. Prospects for our graduates
                    are promising, with opportunities in the development sector including healthcare, non-profits,
                    government agencies, and international organizations. Our alumni network is strong and active,
                    providing ongoing support and professional development opportunities. We are committed to fostering
                    a learning environment that promotes innovation, ethical practice, and a commitment to social
                    change, preparing our students to be leaders in the field of social work.
                </p>



            </div>

        </div>


        <div class="dept-socialwork-prospects-section" id="dept-vision">
            <h2 class="dept-socialwork-section-title">Vision <span>& Mission</span></h2>

            <div class="dept-socialwork-prospects-content">

                <h3 class="dept-socialwork-subheading" style="margin-top: 0;">Our Vision</h3>
                <ul class="dept-socialwork-bullet-list">
                    <li>
                        To be a pioneering center of excellence in social work education and research in Northeast
                        India, fostering innovative solutions to regional and global social challenges thereby
                        producing highly skilled, compassionate, and ethical social work professionals who are
                        committed to enhancing the well-being and empowerment of diverse communities.
                    </li>

                </ul>

                <h3 class="dept-socialwork-subheading">Our Mission</h3>
                <ul class="dept-socialwork-bullet-list">
                    <li>
                        To deliver a cutting-edge, research-intensive curriculum in social work that aligns with current
                        industry practices, ensuring our graduates are equipped with the knowledge, skills, and
                        competencies needed to excel in their professional careers and contribute meaningfully to the
                        field.
                    </li>
                    <li>
                        To integrate comprehensive community service initiatives into the social work curriculum,
                        fostering
                        ethical conduct, compassion, and a deep commitment to social justice among students, while
                        addressing the needs of diverse populations.
                    </li>
                    <li>
                        To nurture and develop responsible leaders in the field of social work who are prepared to drive
                        positive and sustainable transformation in society through innovative practices, advocacy, and a
                        dedication to improving the well-being of individuals and communities.
                    </li>

                </ul>

            </div>
        </div>

        <div class="dept-socialwork-courses-section" id="dept-courses">
            <h2 class="dept-socialwork-section-title">Courses <span>Offered</span></h2>

            <div class="dept-socialwork-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-socialwork-prospects-section" id="dept-prospects">
              <h2 class="dept-socialwork-section-title">Career <span>Prospects</span></h2>

              <div class="dept-socialwork-prospects-content">
                <p class="dept-socialwork-intro-text">
                  The prospects after a B.Sc. in Physics are diverse and promising, in regard to the growing importance of
                  sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                  strong foundation in agricultural sciences, preparing them for following careers opportunities:
                </p>

                <h3 class="dept-socialwork-subheading">Higher Education Opportunities</h3>
                <ol class="dept-socialwork-list">
                  <li>M.Sc. in Physics (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                  </li>
                  <li>MBA in Agribusiness Management</li>
                  <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                  <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                    disciplines</li>
                </ol>

                <h3 class="dept-socialwork-subheading">Government Sector Jobs</h3>
                <ol class="dept-socialwork-list">
                  <li>Agricultural Officer / Physics Development Officer (ADO)</li>
                  <li>IBPS AFO (Agricultural Field Officer)</li>
                  <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                  <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                  <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                </ol>

                <h3 class="dept-socialwork-subheading">Private Sector Careers</h3>
                <ol class="dept-socialwork-list">
                  <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                  <li>Food Processing Industries</li>
                  <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                  <li>Banking &amp; Insurance – Physics officers in banks or crop insurance companies</li>
                  <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                </ol>

                <h3 class="dept-socialwork-subheading">Research & Teaching</h3>
                <ol class="dept-socialwork-list">
                  <li>Research Assistant / Scientist – in public and private research institutions</li>
                  <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                  <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                </ol>

                <h3 class="dept-socialwork-subheading">Entrepreneurship & Startups</h3>
                <ol class="dept-socialwork-list">
                  <li>Organic farming, dairy, poultry, aquaculture</li>
                  <li>Agri-tourism, greenhouse farming, vertical farming</li>
                  <li>Processing units for spices, cereals, or fruits</li>
                  <li>Agri-consultancy or freelance advisory services</li>
                </ol>

                <h3 class="dept-socialwork-subheading">Jobs Abroad</h3>
                <ol class="dept-socialwork-list">
                  <li>Agricultural research, farm management, and food security projects</li>
                  <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                  <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                </ol>

                <h3 class="dept-socialwork-subheading">Key Skills That Boost Career</h3>
                <ol class="dept-socialwork-list">
                  <li>Practical knowledge of farming tools and technologies</li>
                  <li>Communication and management skills (especially in extension or agribusiness)</li>
                  <li>Computer literacy – GIS, remote sensing, and data analytics in Physics</li>
                  <li>Language skills and report writing</li>
                </ol>

              </div>
            </div> -->

        <div class="dept-socialwork-accordion-section" id="dept-syllabus">
            <h2 class="dept-socialwork-section-title">Courses Structure <span>and Syllabus</span></h2>

            <div class="dept-socialwork-accordion-wrapper">


                <div class="dept-socialwork-accordion-item active">
                    <div class="dept-socialwork-accordion-header">
                        <div class="dept-socialwork-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Under Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-socialwork-chevron"></i>
                    </div>

                    <div class="dept-socialwork-accordion-content">
                        <div class="dept-socialwork-syllabus-list">

                            <a target="_blank"
                                href="/mobile-assets/department-all/dept-social-work/syllabus-pdf/structure-syllabus.pdf"
                                class="dept-socialwork-syllabus-link" download>
                                <div class="dept-socialwork-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Structure of Syllabus
                                </div>
                                <i class="fa-solid fa-download dept-socialwork-download-icon"></i>
                            </a>
                            <a target="_blank" href="/mobile-assets/syllabus/RSHSS/BSW_syllabus.pdf"
                                class="dept-socialwork-syllabus-link" download>
                                <div class="dept-socialwork-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - BSW
                                </div>
                                <i class="fa-solid fa-download dept-socialwork-download-icon"></i>
                            </a>


                        </div>
                    </div>
                </div>


                <div class="dept-socialwork-accordion-item">
                    <div class="dept-socialwork-accordion-header">
                        <div class="dept-socialwork-accordion-header-left">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>Post Graduate</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-socialwork-chevron"></i>
                    </div>

                    <div class="dept-socialwork-accordion-content">
                        <div class="dept-socialwork-syllabus-list">

                            <a target="_blank" href="/mobile-assets/syllabus/RSHSS/MSW_syllabus.pdf"
                                class="dept-socialwork-syllabus-link" download>
                                <div class="dept-socialwork-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Detailed Syllabus - MSW
                                </div>
                                <i class="fa-solid fa-download dept-socialwork-download-icon"></i>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="dept-socialwork-accordion-item">
                    <div class="dept-socialwork-accordion-header">
                        <div class="dept-socialwork-accordion-header-left">
                            <i class="fa-solid fa-book"></i>
                            <span>Doctoral Programme</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dept-socialwork-chevron"></i>
                    </div>

                    <div class="dept-socialwork-accordion-content">
                        <div class="dept-socialwork-syllabus-list">
                            <a href="/phd" class="dept-socialwork-syllabus-link" download>
                                <div class="dept-socialwork-syllabus-link-left">
                                    <i class="fa-solid fa-file-lines"></i>
                                    Click to View
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="dept-socialwork-events-wrapper">

            <!-- LEFT: EVENTS -->
            <div class="dept-socialwork-events-section">
                <h2 class="dept-socialwork-section-title">Events</h2>

                <div class="dept-socialwork-events-box">
                    <div class="dept-socialwork-events-track" id="events-track"></div>
                </div>
            </div>

            <!-- RIGHT: HIGHLIGHTS -->
            <div class="dept-socialwork-highlights-section">

                <h2 class="dept-socialwork-section-title">Departmental <span>Highlights</span></h2>

                <div class="dept-socialwork-carousel">

                    <div class="dp-track" id="dpTrack">

                        <!-- ADD IMAGES HERE -->
                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/1.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/2.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/3.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/4.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/5.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/6.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/7.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/8.jpg" />
                        </div>

                        <div class="dp-slide">
                            <img src="/mobile-assets/social-work/9\.jpg" />
                        </div>

                    </div>

                    <!-- CONTROLS -->
                    <button class="dp-btn prev" id="dpPrev">&#10094;</button>
                    <button class="dp-btn next" id="dpNext">&#10095;</button>

                </div>

            </div>

        </div>

        <!-- ================= ACHIEVEMENT SECTION ================= -->
        <div class="dept-socialwork-achievement-section" id="dept-achievement">

            <h2 class="dept-socialwork-section-title">
                Achievements
            </h2>

            <!-- Tabs -->
            <div class="dept-socialwork-achievement-tabs">
                <button class="dept-achievement-tab active" data-tab="student">
                    Faculty Achievement
                </button>


            </div>

            <!-- Content -->
            <div class="dept-socialwork-achievement-content">

                <!-- STUDENT TAB -->
                <div class="dept-achievement-pane active" id="student">

                    <div class="dept-socialwork-table-responsive">
                        <table class="dept-socialwork-table">
                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Name of the faculty</th>
                                    <th>Name of the Award</th>
                                    <th>Year</th>
                                    <th>Funding Agency</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dr. Priyanka Patowari</td>
                                    <td>Consultancy from Grant Thornton Bharat on Maternal and Child Health</td>
                                    <td>2024</td>
                                    <td>Grant Thornton Bharat</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Field Research Fellowship from International Institute of SDGs and Public Policy
                                    </td>
                                    <td>2025</td>
                                    <td>International Institute of SDGs and Public Policy</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Consultancy from NEDFI on Prospects of Rural Tourism & Status of Investment in
                                        Mizoram</td>
                                    <td>2025</td>
                                    <td>NEDFI</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Consultancy from CINI NGO on Gender Based Violence </td>
                                    <td>2025</td>
                                    <td>CINI NGO</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Research Analyst in Nurture and Foster Private Limited</td>
                                    <td>2025</td>
                                    <td>Nurture and Foster Private Limited</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Consultancy from Grant Thornton Bharat for Need Assessment Survey</td>
                                    <td>2022</td>
                                    <td>Grant Thornton Bharat</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bikash Chetry</td>
                                    <td>Asia Student Scholarship </td>
                                    <td>2023</td>
                                    <td>Association for Nepal and Himalayan Studies (ANHS) </td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>NEEDs Conference Travel Grant </td>
                                    <td>2023</td>
                                    <td>University of Twente, ISS and NEEDs </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Bicycle: past, present and future prospect in South Asia Conference and Travel
                                        Grant </td>
                                    <td>2024</td>
                                    <td>University of Chicago </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Travel and Support Grant for 1st Development Studies Conference Dhaka</td>
                                    <td>2024</td>
                                    <td>Development Studies Department, University of Dhaka </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Henry Luce Foundation Dissertation Award </td>
                                    <td>2025</td>
                                    <td>Association of Asian Studies </td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Conference and Travel Grant</td>
                                    <td>2025</td>
                                    <td>MPISSR and ILRT, India </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Jagah Fellowship 1st Cohort 2026 </td>
                                    <td>2026</td>
                                    <td>Factor Daily and Rainmatter Foundation (Zerodha CSR Unit) </td>

                                </tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>



            </div>

        </div>

        <div class="dept-socialwork-table-section" id="dept-committee">

            <h2 class="dept-socialwork-section-title">Table <span>List</span></h2>

            <div class="dept-socialwork-table-grid" id="table-accordion-container"></div>

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
                title: "Master of Social Work",
                duration: "2 years",
                link: "/programs-MSW"
            },
            {
                title: "Bachelor of Social Work | Honours / Honours with Research",
                duration: "4 years as per NEP",
                link: "/programs-BSW"
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
        <div class="dept-socialwork-course-card">

          <div class="dept-socialwork-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-socialwork-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-socialwork-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-socialwork-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-socialwork-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-socialwork-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-socialwork-accordion-content');

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
            "Dr. Razdan Sarim Rahman, Assistant Professor at TISS Guwahati, visited the department."
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
        <div class="dept-socialwork-event-item">
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
                headers: ["S.No.", "Name & Address", "Designation"],
                rows: [
                    ["1",
                        "Dr. Razdan Sarim Rahman, Assistant Professor, Centre for Livelihood and Social Entrepreneurship, TISS-Guwahati",
                        "External Expert"
                    ],

                    ["2", "Mr. Jeet Jyoti Das, Director, Nurture and Foster Pvt Ltd", "Industry Expert"],
                    ["3", "Prof. (Dr) Surajit Chandra Mukhopadhyay, Dean (RSHSS)", "Chairperson"],
                    ["4", "Dr. Priyanka Patowari Coordinator & Assistant Professor, Department of Social Work",
                        "Member Secretary"
                    ],
                    ["5", "Dr. Amlan Das Assistant Professor, Department of Social Work", "Member"],
                    ["6", "Dr. Bitopi Dutta Assistant Professor, Department of Social Work", "Member"],
                    ["", "Ms. Kristi Saikia Assistant Professor, Department of Social Work", "Member"],
                    ["", "Ms. Joyeeta Bhattacharjee Assistant Professor, Department of Social Work", "Member"],
                    ["", "Mr. Bikash Chetry Assistant Professor, Department of Social Work", "Member"]



                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Content", "Name and Designation", ],
                rows: [
                    ["1", "Chairperson: Head of the Department/ Centre",
                        "Dr. Priyanka Patowari Assistant Professor& Coordinator, Department of Social Work, RSHSS",
                    ],
                    ["2", "Member: Two professors, including the Dean of the school",
                        "Prof. (Dr) Surajit C. Mukhopadhyay Dean, Royal School of Humanities and Social Sciences,Royal School of Behavioural and Allied Sciences,Director, Centre for Interdisciplinary Studies The Assam Royal Global University Guwahati- 781035"
                    ],
                    ["", "",
                        "Prof. (Dr) Indrani Singh Rai Dean, Royal School of Language The Assam Royal Global University Guwahati- 781035"
                    ],
                    ["3", "Two Associate Professors- one of them will be the member secretary",
                        "Dr. Victor Narzary, Associate Professor Department of Social Work, RSHSS"
                    ],
                    ["4", "Two Assistant Professors holding Ph.D. degree",
                        "Dr. Amlan Das, Assistant Professor, Department of Social Work, RSHSS"
                    ],
                    ["", "", "Dr. Bitopi Dutta ,Assistant Professor,Department of Social Work, RSHSS"],
                    ["", "", "Dr. Debangana Baruah,Assistant Professor, Department of Social Work, RSHSS"],
                    ["", "", "Dr. Baiarbha Massar,Assistant Professor, Department of Social Work, RSHSS"],
                    ["5",
                        "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC",
                        "Prof. (Dr) Kalpana Sarathy ,Dean School of Social Work,TISS, Guwahati"
                    ],
                    ["", "", "Prof. (Dr) Shiela Bora , Department of History(RSHSS)"],
                    ["", "", "Prof. (Dr) Sajal Nag, Department of History, RSHSS"],



                ]
            },
            {
                title: "LIST OF ACTIVITIES",
                headers: ["S.No.", "Type & Name of Activity Conducted", "Nature of Participants",
                    "Activity Conducted By (Batch/Semester)", "Brief Description"
                ],
                rows: [
                    ["1", "Field Orientation Visits", "Student social worker, NGOs", "BSW",
                        "Visited organizations to understand professional social work practice and functioning"
                    ],
                    ["2", "Assistance in Tuition Classes", "School children", "BSW",
                        "Assisted teachers in teaching and supporting students academically"
                    ],
                    ["3", "Transect Walk (Sarab Bhatti)", "Community members", "BSW",
                        "Observed community structure, environment, and resources"
                    ],
                    ["4", "Remedial Classes", "Children (Class 1–5)", "BSW",
                        "Helped children overcome academic difficulties and learning gaps"
                    ],
                    ["5", "Collection of Child Profiles", "Children & families", "BSW",
                        "Collected socio-economic and educational data for documentation"
                    ],
                    ["6", "Child Rights Week & Children’s Day Activities", "Children, community", "BSW",
                        "Organized awareness activities and participated in rallies"
                    ],
                    ["7", "Pre-Christmas Celebration", "Children", "BSW",
                        "Assisted in organizing festive activities for children"
                    ],
                    ["8", "Awareness Programme on Education & Cleanliness", "School children", "BSW",
                        "Promoted importance of education and hygiene"
                    ],
                    ["9", "Rural Camp – Site Visit", "Students, faculty", "BSW",
                        "Observed geographical and environmental setting"
                    ],
                    ["10", "PRA Session (Medhipamua Community)", "Community members", "BSW",
                        "Conducted participatory rural appraisal and mapping"
                    ],
                    ["11", "Transect Walk (Rural Camp)", "Community members", "BSW",
                        "Studied rural lifestyle, culture, and resources"
                    ],
                    ["12", "PRA Activities & Street Play", "Community members", "BSW",
                        "Conducted participatory activities and awareness street play"
                    ],
                    ["13", "Group Discussion & Presentation", "Students", "BSW",
                        "Presented findings and reflections from rural camp"
                    ],
                    ["14", "Transect Walk (Pub Boragaon)", "Community members", "MSW",
                        "Observed physical and social environment of community"
                    ],
                    ["15", "Local Manufacturing Unit Visit", "Workers, students", "MSW",
                        "Learned about industrial operations and community impact"
                    ],
                    ["16", "“Thinking Out of the Box” Activity", "School students", "MSW",
                        "Encouraged creativity and innovative thinking"
                    ],
                    ["17", "PRA Resource Mapping (Lokhra)", "Community members", "MSW",
                        "Identified and mapped local resources"
                    ],
                    ["18", "Health Check-up Camp", "Community members", "MSW",
                        "Conducted basic health tests (BP, glucose)"
                    ],
                    ["19", "Study on Women in Local Business", "Women entrepreneurs", "MSW",
                        "Analyzed role of women in economic activities"
                    ],
                    ["20", "Healthy Habits Awareness Programme", "School students", "MSW",
                        "Promoted hygiene and healthy lifestyle practices"
                    ],
                    ["21", "International Mother Language Day Celebration", "Students", "MSW",
                        "Promoted cultural and linguistic diversity"
                    ],
                    ["22", "Workplace Safety Awareness (Glass Facility)", "Workers", "MSW",
                        "Educated workers on occupational safety"
                    ],
                    ["23", "Cleanliness Drive (World Social Work Day)", "Community members", "MSW",
                        "Promoted sanitation and environmental awareness"
                    ],
                    ["24", "Earth Day Poster Competition", "School students", "MSW",
                        "Encouraged environmental awareness through art"
                    ],
                    ["25", "School Uniform Distribution Programme", "School children", "MSW",
                        "Distributed uniforms to support education"
                    ],
                    ["26", "Road Safety Awareness Programme", "Community/ students", "MSW",
                        "Educated participants on traffic safety rules"
                    ],
                    ["27", "Road Safety Role Play", "Students", "MSW",
                        "Conducted interactive learning through role play"
                    ],
                    ["28", "Awareness on Health & Hygiene", "School students", "MSW",
                        "Taught personal hygiene and healthy habits"
                    ],
                    ["29", "Substance Abuse Awareness (Video Screening)", "Students", "MSW",
                        "Used audio-visual tools to explain harmful effects"
                    ],
                    ["30", "Qualitative Interviews on Food Habits", "Community members", "MSW",
                        "Studied dietary patterns and cultural influences"
                    ],
                    ["31", "Health & Nutrition Quiz Programme", "Students", "MSW",
                        "Assessed knowledge on nutrition through quiz"
                    ],
                    ["32", "Drawing Competition (Social Work Day)", "Students", "MSW",
                        "Promoted environmental awareness through creativity"
                    ],
                    ["33", "Mid-Day Meal Distribution & Recreational Activities", "School children", "MSW",
                        "Assisted meal distribution and conducted games"
                    ],
                    ["34", "Financial Awareness (Diary Distribution)", "Domestic workers", "MSW",
                        "Promoted record-keeping and financial literacy"
                    ],
                    ["35", "Awareness on Mobile Phone Usage", "Children", "MSW",
                        "Educated on digital addiction and responsible use"
                    ],
                    ["36", "Menstrual Hygiene Awareness Programme", "Women", "MSW",
                        "Promoted safe hygiene practices and awareness"
                    ],
                    ["37", "Community Interaction (Sports Activities)", "Children", "MSW",
                        "Encouraged participation in physical activities"
                    ],
                    ["38", "Community Interaction (Sports Activities)", "Children", "MSW",
                        "Promoted sports and engagement among children"
                    ],
                    ["39", "Yoga & Pranayama Sessions", "Children with special needs", "MSW",
                        "Improved concentration and emotional well-being"
                    ],
                    ["40", "Basic Educational Sessions", "Children", "MSW",
                        "Taught literacy and numeracy concepts"
                    ],
                    ["41", "Creative Activities (Art & Charts)", "Children", "MSW",
                        "Encouraged creativity and motor skills"
                    ],
                    ["42", "Training on Child Rights Laws", "Interns, organization members", "MSW",
                        "Learned about POCSO, IT Act, and legal provisions"
                    ],
                    ["43", "Puppetry Training Programme", "Trainees", "MSW",
                        "Developed communication skills with children"
                    ],
                    ["44", "Baseline Survey (School Visits)", "School staff", "MSW",
                        "Conducted interviews and collected school data"
                    ],
                    ["45", "Vaccination Drive Participation", "Community members", "MSW",
                        "Assisted in immunization awareness and support"
                    ],
                    ["46", "Relief Distribution", "Community members", "MSW",
                        "Distributed essential materials to beneficiaries"
                    ],
                    ["47", "Plantation Drive", "Children with special needs", "MSW",
                        "Promoted environmental awareness through planting"
                    ],
                    ["48", "Fundraising Activities (Diyas, Cards)", "Community", "MSW",
                        "Generated funds for institutional support"
                    ],
                    ["49", "Occupational Therapy Assistance", "Children with special needs", "MSW",
                        "Assisted in therapeutic exercises and interventions"
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
        <div class="dept-socialwork-table-responsive">
          <table class="dept-socialwork-table">
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
        <div class="dept-socialwork-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-socialwork-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-socialwork-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-socialwork-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-socialwork-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-socialwork-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-socialwork-table-content");
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
                    "/mobile-assets/department-all/rset/ce/events/1.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/2.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/3.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/4.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/5.jpeg"
                ]
            },
            {
                title: "The Department of Civil Engineering, The Assam Royal Global University, successfully hosted an inspiring Technical Talk on “Earthquake-Induced Liquefaction: Mechanisms, Impacts, and Countermeasures for Disaster-Resilient Infrastructure” along with insights on job opportunities in Japan.",
                images: [
                    "/mobile-assets/department-all/rset/ce/events/e2/e21.jpeg",
                    "/mobile-assets/department-all/rset/ce/events/e2/e22.JPG",
                    "/mobile-assets/department-all/rset/ce/events/e2/e23.JPG",
                    "/mobile-assets/department-all/rset/ce/events/e2/e24.JPG",
                    "/mobile-assets/department-all/rset/ce/events/e2/e25.JPG"
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
      <div class="dept-socialwork-event-card">

        <div class="dept-socialwork-event-title">
          ${event.title}
        </div>

        <div class="dept-socialwork-marquee">
          <div class="dept-socialwork-marquee-track">
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
