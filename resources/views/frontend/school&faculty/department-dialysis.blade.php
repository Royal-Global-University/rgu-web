@extends('frontend.master')
@section('content')
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

        .dept-mls-wrapper {
            padding: 3vw 5vw;
            max-width: 1400px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= HEADINGS ================= */
        .dept-mls-heading {
            text-align: center;
            margin-bottom: 5vw;
            animation: fadeInDown 1s ease-out;
        }

        .dept-mls-heading h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin: 0;
            line-height: 1.1;
            color: var(--primary);
        }

        .dept-mls-heading h1 span {
            color: var(--accent);
        }

        .dept-mls-heading h2 {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
            font-weight: 400;
            margin-top: 15px;
            color: var(--text-muted);
        }

        /* ================= HERO ================= */
        .dept-mls-hero {
            display: flex;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.2s both;
            justify-content: center;
        }

        /* LEFT IMAGE */
        .dept-mls-img {
            flex: 1;
            position: relative;
        }

        .dept-mls-img img {
            width: 85%;
            margin-left: 7%;
            height: auto;
            border-radius: 24px;
            /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
            transition: var(--transition);
            object-fit: contain;
        }

        .dept-mls-img img:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
        }

        /* RIGHT CONTENT */
        .dept-mls-content {
            flex: 1;
        }

        .dept-mls-content h3 {
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 3.5vw, 2.5rem);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .dept-mls-content h3 span {
            color: var(--accent);
        }

        .dept-mls-content p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 500;
            text-align: justify;
        }

        .dept-mls-content ol li {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            line-height: 0.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            font-weight: 300;
        }

        /* ================= FLOATING MENU (LEFT) ================= */
        .dept-mls-floating {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 998;
        }

        .dept-mls-float-item {
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

        .dept-mls-float-item i {
            min-width: 56px;
            font-size: 20px;
            text-align: center;
            line-height: 56px;
            color: var(--accent);
            transition: var(--transition);
        }

        .dept-mls-float-text {
            white-space: nowrap;
            padding-right: 25px;
            font-weight: 500;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
        }

        .dept-mls-float-item:hover {
            width: 200px;
            background: var(--accent);
            color: #fff;
        }

        .dept-mls-float-item:hover i {
            color: #fff;
        }

        .dept-mls-float-item:hover .dept-mls-float-text {
            opacity: 1;
            transform: translateX(0);
        }

        /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
        .dept-mls-admission-btn {
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

        .dept-mls-admission-btn i {
            font-size: 1.2rem;
        }

        .dept-mls-admission-btn:hover {
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
            .dept-mls-wrapper {
                padding-bottom: 160px;
                padding-top: 110px;

            }

            .dept-mls-hero {
                flex-direction: column;
                text-align: center;
            }

            .dept-mls-img img {
                padding-left: 0%;
            }

            .dept-mls-floating {
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

            .dept-mls-float-item {
                width: 45px;
                height: 45px;
                box-shadow: none;
                background: transparent;
                border: none;
            }

            .dept-mls-float-item i {
                min-width: 45px;
                line-height: 45px;
            }

            .dept-mls-float-item:hover {
                width: 45px;
                background: transparent;
            }

            .dept-mls-float-item:active i {
                color: var(--primary);
            }

            .dept-mls-float-text {
                display: none;
            }

            /* 2. Center the Admission Button right above the nav menu */
            .dept-mls-admission-btn {
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
            .dept-mls-admission-btn:hover {
                transform: translateX(-50%) translateY(-5px) scale(1.02);
            }
        }

        /* ================= COURSES SECTION ================= */
        .dept-mls-courses-section {
            margin-top: 3vw;
            width: 100%;
        }

        .dept-mls-section-title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary);
            margin-bottom: 4vw;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .dept-mls-section-title span {
            color: var(--accent);
        }

        .dept-mls-course-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .dept-mls-course-card {
            width: 100%;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        /* Updated Course Header for Button Layout */
        .dept-mls-course-header {
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
        .dept-mls-course-header::after {
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
        .dept-mls-view-btn {
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

        .dept-mls-view-btn:hover {
            background: #fff;
            color: var(--primary);
        }

        .dept-mls-course-body {
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
            .dept-mls-course-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                padding: 20px 15px;
            }

            .dept-mls-img img {
                padding-left: 0%;
            }

            .dept-mls-course-header span {
                font-size: 1.2rem;
                /* Make title slightly smaller on mobile */
                z-index: 2;
                /* Keep above the orange triangle */
            }

            .dept-mls-view-btn {
                width: 100%;
                /* Make button full width for easy tapping */
                text-align: center;
                box-sizing: border-box;
            }

            .dept-mls-course-body {
                width: 100%;
                /* Remove the 95% inset on mobile so it doesn't look too narrow */
                box-sizing: border-box;
            }

            .dept-mls-prospects-content {
                padding: 25px 20px;
            }


            .dept-mls-subheading {
                font-size: 1.3rem;
            }
        }

        /* ================= CAREER PROSPECTS SECTION ================= */
        .dept-mls-prospects-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .dept-mls-prospects-content {
            background: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
            max-width: 1200px;
            margin: 0 auto;
            border-top: 4px solid var(--accent);
            /* Adds a nice touch of orange at the top */
        }

        .dept-mls-intro-lab {
            text-align: justify;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-mls-intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .dept-mls-subheading {
            font-family: 'Times New Roman', Times, serif;
            color: var(--primary);
            font-size: 1.5rem;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .dept-mls-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            /* Indents the numbers nicely */
            margin: 0;
        }

        .dept-mls-list li {
            margin-bottom: 12px;
        }

        .dept-mls-list li::marker {
            color: var(--primary);
            font-weight: bold;
        }

        /* ================= SYLLABUS ACCORDION SECTION ================= */
        .dept-mls-accordion-section {
            margin-top: 3vw;
            width: 100%;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .dept-mls-accordion-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .dept-mls-accordion-item {
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
            background: #fff;
            overflow: hidden;
        }

        .dept-mls-accordion-header {
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

        .dept-mls-accordion-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-mls-accordion-header-left i {
            font-size: 1.3rem;
        }

        .dept-mls-chevron {
            transition: transform 0.3s ease;
        }

        /* Accordion Content (Hidden by default) */
        .dept-mls-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
            background: #fdfdfd;
        }

        /* Active State for Accordion */
        .dept-mls-accordion-item.active .dept-mls-accordion-content {
            /* Max-height is handled by JS for smooth animation */
        }

        .dept-mls-accordion-item.active .dept-mls-accordion-header {
            border-radius: 8px 8px 0 0;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
        }

        .dept-mls-accordion-item.active .dept-mls-chevron {
            transform: rotate(180deg);
        }

        /* Syllabus Links Inside Accordion */
        .dept-mls-syllabus-list {
            padding: 15px 25px;
            display: flex;
            flex-direction: column;
        }

        .dept-mls-syllabus-link {
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

        .dept-mls-syllabus-link:last-child {
            border-bottom: none;
        }

        .dept-mls-syllabus-link-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dept-mls-syllabus-link-left i {
            color: var(--text-muted);
        }

        .dept-mls-syllabus-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .dept-mls-syllabus-link:hover .dept-mls-syllabus-link-left i {
            color: var(--accent);
        }

        .dept-mls-download-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* ================= OUR LAB SECTION ================= */

        .dept-mls-lab-section {
            width: 100%;
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        /* New 1300px Wrapper */
        .dept-mls-lab-container {
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
            align-items: center;
            text-align: left;
        }

        .dept-mls-lab-heading {
            font-size: clamp(1.2rem, 2.5vw, 2rem);
        }

        /* Intro Text */
        .dept-mls-lab-intro {
            font-size: 2.0rem;
            line-height: 1.8;
            color: var(--text-muted);
            max-width: 1200px;
            margin: 0 auto 4vw auto;
            font-weight: 400;
            text-align: justify;
        }



        /* Gallery (Now spans 100% of the 1300px container minus padding) */
        .dept-mls-lab-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .dept-mls-lab-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            aspect-ratio: 5 / 3;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
            transition: var(--transition);
        }

        .dept-mls-lab-img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
        }

        .dept-mls-explore-btn {
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

        .dept-mls-explore-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
        }

        /* ================= LAB RESPONSIVE FIXES ================= */
        @media (max-width: 960px) {
            .dept-mls-lab-features {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .dept-mls-lab-gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .dept-mls-lab-gallery {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 1fr);
                gap: 10px;
            }
        }

        /* Custom Bullet List for Vision/Mission */
        .dept-mls-bullet-list {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.8;
            padding-left: 25px;
            margin: 0;
            list-style-type: none;
            /* Removes default dots */
        }

        .dept-mls-bullet-list li {
            margin-bottom: 12px;
            position: relative;
        }

        /* Uses FontAwesome checkmark for bullets */
        .dept-mls-bullet-list li::before {
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
        .dept-mls-events-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-mls-events-box {
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
        .dept-mls-events-track {
            display: flex;
            flex-direction: column;
            animation: scrollEvents 30s linear infinite;
        }

        .dept-mls-events-box:hover .dept-mls-events-track {
            animation-play-state: paused;
        }

        /* Event Item */
        .dept-mls-event-item {
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
            font-size: 1.05rem;
            color: var(--primary);
            line-height: 1.6;
        }

        /* Button */
        .dept-mls-events-btn {
            background: var(--primary);
            color: #fff;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .dept-mls-events-btn:hover {
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
        .dept-mls-table-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* SINGLE COLUMN LAYOUT */
        .dept-mls-table-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ACCORDION CARD */
        .dept-mls-table-acc {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            transition: 0.3s ease;
        }

        /* HEADER */
        .dept-mls-table-header {
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
        .dept-mls-table-header i {
            transition: 0.3s;
        }

        /* CONTENT */
        .dept-mls-table-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            background: #fff;
        }

        /* ACTIVE */
        .dept-mls-table-acc.active .dept-mls-table-content {
            padding: 20px;
        }

        .dept-mls-table-acc.active .dept-mls-table-header i {
            transform: rotate(180deg);
        }

        /* TABLE */
        .dept-mls-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .dept-mls-table th {
            background: #142a47;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .dept-mls-table td {
            padding: 12px;
            border: 1px solid #eee;
            background: #fafafa;
            color: #333;
        }

        /* DISABLED */
        .dept-mls-table-acc.disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        .dept-mls-table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .dept-mls-table {
            min-width: 700px;
            border-collapse: collapse;
        }

        .dept-mls-table td,
        .dept-mls-table th {
            white-space: nowrap;
        }

        /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
        .dept-mls-event-gallery-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-mls-event-card {
            max-width: 1300px;
            margin: 0 auto 40px;
        }

        .dept-mls-event-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* MARQUEE BOX */
        .dept-mls-marquee {
            overflow: hidden;
            border-radius: 12px;
            /* background: #fff; */
            box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
            /* border-top: 4px solid var(--accent); */
        }

        /* TRACK */
        .dept-mls-marquee-track {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: marqueeScroll 80s linear infinite;
        }

        /* PAUSE ON HOVER */
        .dept-mls-marquee:hover .dept-mls-marquee-track {
            animation-play-state: paused;
        }

        /* IMAGE */
        .dept-mls-marquee img {
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
            .dept-mls-marquee img {
                height: 160px;
            }
        }

        /* ================= ACHIEVEMENT SECTION ================= */
        .dept-mls-achievement-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        /* Tabs */
        .dept-mls-achievement-tabs {
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
        .dept-mls-achievement-content {
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
        .dept-mls-recognition-section {
            margin-top: 3vw;
            animation: fadeInUp 1s ease-out;
        }

        .dept-mls-recognition-container {
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
        .dept-mls-recognition-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .dept-mls-recognition-img img {
            width: 100%;
            max-width: 300px;
            object-fit: contain;
        }

        /* RIGHT CONTENT */
        .dept-mls-recognition-content {
            flex: 2;
        }

        .dept-mls-recognition-content p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
            text-align: justify;
        }

        /* BUTTON */
        .dept-mls-recognition-btn {
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

        .dept-mls-recognition-btn i {
            font-size: 1.2rem;
        }

        .dept-mls-recognition-btn:hover {
            background: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 960px) {
            .dept-mls-recognition-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 30px 20px;
            }

            .dept-mls-recognition-content p {
                text-align: center;
            }

            .dept-mls-recognition-btn {
                justify-content: center;
            }
        }
    </style>

    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 120px"></div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <div class="dept-mls-floating">
        <a href="#dept-home" class="dept-mls-float-item">
            <i class="fa fa-home"></i>
            <span class="dept-mls-float-text">Home</span>
        </a>

        <a href="#dept-about" class="dept-mls-float-item">
            <i class="fa fa-book"></i>
            <span class="dept-mls-float-text">About</span>
        </a>

        <a href="#dept-courses" class="dept-mls-float-item">
            <i class="fa fa-graduation-cap"></i>
            <span class="dept-mls-float-text">Courses</span>
        </a>

    </div>

    <a href="https://admissions.rgu.ac/" class="dept-mls-admission-btn">
        Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
    </a>

    <div class="dept-mls-wrapper">

        <div class="dept-mls-heading" id="dept-home">
            <h1>Department of <span>Dialysis Therapy Technology</span></h1>
            <h2>Royal School of Medical & Allied Sciences (RSMAS)</h2>
        </div>

        <div class="dept-mls-hero" id="dept-about">

            <div class="dept-mls-img">
                <img src="mobile-assets/rsmas-new-dept/mls/headimg.png" alt="mls">
            </div>

            <div class="dept-mls-content">

                <h3>About <span>Department</span></h3>

                <p>
                    The Department of Dialysis Therapy Technology is committed to developing highly skilled dialysis
                    professionals
                    equipped to provide safe, ethical, and patient-centred renal care. The department offers
                    state-of-the-art
                    education and hands-on clinical training in hemodialysis, peritoneal dialysis, continuous renal
                    replacement
                    therapy (CRRT), and the operation and maintenance of advanced dialysis equipment.
                </p>

            </div>

        </div>

        <div class="dept-mls-prospects-section" id="dept-prospects">

            <div class="dept-mls-prospects-content">

                <p class="dept-mls-intro-text" style="text-align: justify;">
                    With a curriculum aligned to the National Commission for Allied and Healthcare Professions (NCAHP)
                    standards,
                    students gain expertise in renal physiology, infection control, vascular access management, emergency
                    care,
                    quality assurance, and patient counselling. Through clinical exposure in multi-specialty hospitals and
                    dialysis centres, graduates are prepared to work as competent Dialysis Technologists, contributing to
                    multidisciplinary nephrology teams and improving the quality of life of patients with acute and chronic
                    kidney
                    disease.
                    <br><br>
                    The department also promotes research, innovation, professional ethics, and lifelong learning, preparing
                    graduates to meet the evolving needs of renal healthcare services in India and across the globe.
                </p>

            </div>
        </div>

        <!-- vision mission  -->
        <!-- <div class="dept-mls-prospects-section" id="dept-vision">
          <h2 class="dept-mls-section-title">Vision <span>& Mission</span></h2>

          <div class="dept-mls-prospects-content">

            <h3 class="dept-mls-subheading" style="margin-top: 0;">Our Vision</h3>
            <ul class="dept-mls-bullet-list">
              <li>
                The vision for students in Medical Lab Technology is to train the new generation with pioneering knowledge
                and practical skills and promote innovation and excellence in healthcare diagnostics and research.
              </li>

            </ul>

            <h3 class="dept-mls-subheading">Our Mission</h3>
            <ul class="dept-mls-bullet-list">
              <li>
                To provide severe academic training in medical lab technology and offer hands-on laboratory experience to
                develop practical skills.
              </li>

              <li>
                To provide mentorship and guidance to students by cultivating a dedication to advancing healthcare through
                accurate diagnosis and research.
              </li>

              <li>
                To introduce a commitment to patient care and safety by conducting community health camps prioritizing
                health and wellness within the society.
              </li>

            </ul>

          </div>
        </div> -->

        <div class="dept-mls-courses-section" id="dept-courses">
            <h2 class="dept-mls-section-title">Courses <span>Offered</span></h2>

            <div class="dept-mls-course-list" id="course-list-container">
            </div>
        </div>

        <!-- <div class="dept-mls-prospects-section" id="dept-prospects">
          <h2 class="dept-mls-section-title">Career <span>Prospects</span></h2>

          <div class="dept-mls-prospects-content">
            <p class="dept-mls-intro-text">
              The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
              sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
              strong foundation in agricultural sciences, preparing them for following careers opportunities:
            </p>

            <h3 class="dept-mls-subheading">Higher Education Opportunities</h3>
            <ol class="dept-mls-list">
              <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
              </li>
              <li>MBA in Agribusiness Management</li>
              <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
              <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                disciplines</li>
            </ol>

            <h3 class="dept-mls-subheading">Government Sector Jobs</h3>
            <ol class="dept-mls-list">
              <li>Agricultural Officer / Civil Development Officer (ADO)</li>
              <li>IBPS AFO (Agricultural Field Officer)</li>
              <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
              <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
              <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
            </ol>

            <h3 class="dept-mls-subheading">Private Sector Careers</h3>
            <ol class="dept-mls-list">
              <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
              <li>Food Processing Industries</li>
              <li>Agri-Tech Startups – technology-based agricultural solutions</li>
              <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
              <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
            </ol>

            <h3 class="dept-mls-subheading">Research & Teaching</h3>
            <ol class="dept-mls-list">
              <li>Research Assistant / Scientist – in public and private research institutions</li>
              <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
              <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
            </ol>

            <h3 class="dept-mls-subheading">Entrepreneurship & Startups</h3>
            <ol class="dept-mls-list">
              <li>Organic farming, dairy, poultry, aquaculture</li>
              <li>Agri-tourism, greenhouse farming, vertical farming</li>
              <li>Processing units for spices, cereals, or fruits</li>
              <li>Agri-consultancy or freelance advisory services</li>
            </ol>

            <h3 class="dept-mls-subheading">Jobs Abroad</h3>
            <ol class="dept-mls-list">
              <li>Agricultural research, farm management, and food security projects</li>
              <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
              <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
            </ol>

            <h3 class="dept-mls-subheading">Key Skills That Boost Career</h3>
            <ol class="dept-mls-list">
              <li>Practical knowledge of farming tools and technologies</li>
              <li>Communication and management skills (especially in extension or agribusiness)</li>
              <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
              <li>Language skills and report writing</li>
            </ol>

          </div>
        </div> -->

        <!-- <div class="dept-mls-accordion-section" id="dept-syllabus">
          <h2 class="dept-mls-section-title">Courses Structure <span>and Syllabus</span></h2>

          <div class="dept-mls-accordion-wrapper">

            <div class="dept-mls-accordion-item active">
              <div class="dept-mls-accordion-header">
                <div class="dept-mls-accordion-header-left">
                  <i class="fa-solid fa-graduation-cap"></i>
                  <span>Under Graduate</span>
                </div>
                <i class="fa-solid fa-chevron-down dept-mls-chevron"></i>
              </div>

              <div class="dept-mls-accordion-content">
                <div class="dept-mls-syllabus-list">
                  <a target="_blank" href="mobile-assets/rsmas-new-dept/mls/syllabus/BMLT-SYLLABUS-2025-26.pdf"
                    class="dept-mls-syllabus-link" download>
                    <div class="dept-mls-syllabus-link-left">
                      <i class="fa-solid fa-file-lines"></i>
                      Course Structure and Syllabus -- BMLT 2025 - 2026
                    </div>
                    <i class="fa-solid fa-download dept-mls-download-icon"></i>
                  </a>

                  <a target="_blank" href="mobile-assets/rsmas-new-dept/mls/syllabus/BMLT-SYLLABUS-2024-batch.pdf"
                    class="dept-mls-syllabus-link" download>
                    <div class="dept-mls-syllabus-link-left">
                      <i class="fa-solid fa-file-lines"></i>
                      Course Structure and Syllabus -- BMLT 2024
                    </div>
                    <i class="fa-solid fa-download dept-mls-download-icon"></i>
                  </a>

                  <a target="_blank" href="mobile-assets/rsmas-new-dept/mls/syllabus/BMLT-SYLLABUS-2023-batch.pdf"
                    class="dept-mls-syllabus-link" download>
                    <div class="dept-mls-syllabus-link-left">
                      <i class="fa-solid fa-file-lines"></i>
                      Course Structure and Syllabus -- BMLT 2023
                    </div>
                    <i class="fa-solid fa-download dept-mls-download-icon"></i>
                  </a>

                </div>
              </div>
            </div>

            <div class="dept-mls-accordion-item">
              <div class="dept-mls-accordion-header">
                <div class="dept-mls-accordion-header-left">
                  <i class="fa-solid fa-graduation-cap"></i>
                  <span>Post Graduate</span>
                </div>
                <i class="fa-solid fa-chevron-down dept-mls-chevron"></i>
              </div>

              <div class="dept-mls-accordion-content">
                <div class="dept-mls-syllabus-list">
                  <a target="_blank" href="mobile-assets/rsmas-new-dept/mls/syllabus/MMLT-NEP-SYLLABUS-2025-26.pdf"
                    class="dept-mls-syllabus-link" download>
                    <div class="dept-mls-syllabus-link-left">
                      <i class="fa-solid fa-file-lines"></i>
                      Course Structure and Syllabus -- MMLT 2025 - 2026
                    </div>
                    <i class="fa-solid fa-download dept-mls-download-icon"></i>
                  </a>


                </div>
              </div>
            </div>

            <div class="dept-mls-accordion-item">
              <div class="dept-mls-accordion-header">
                <div class="dept-mls-accordion-header-left">
                  <i class="fa-solid fa-book"></i>
                  <span>Doctoral Programme</span>
                </div>
                <i class="fa-solid fa-chevron-down dept-mls-chevron"></i>
              </div>

              <div class="dept-mls-accordion-content">
                <div class="dept-mls-syllabus-list">
                  <a href="/phd" class="dept-mls-syllabus-link" download>
                    <div class="dept-mls-syllabus-link-left">
                      <i class="fa-solid fa-file-lines"></i>
                      Click to View
                    </div>

                  </a>
                </div>
              </div>
            </div>

          </div>
        </div> -->

        <!-- <div class="dept-mls-events-section" id="dept-events">

          <h2 class="dept-mls-section-title">Events</h2>

          <div class="dept-mls-events-box">
            <div class="dept-mls-events-track" id="events-track"></div>
          </div>

          <div style="text-align:center; margin-top:30px;">
            <a href="#" class="dept-mls-events-btn">View All</a>
          </div>

        </div> -->

        <!-- <div class="dept-mls-table-section" id="dept-committee">

          <div class="dept-mls-table-grid" id="table-accordion-container"></div>

        </div> -->

        <!-- <div class="dept-mls-lab-section" id="dept-lab">

          <div class="dept-mls-lab-container">

            <h2 class="dept-mls-section-title">Our <span>Lab</span></h2>

            <p class="dept-mls-intro-lab" style="padding-bottom: 30px;">
              A state-of-art diagnostic laboratory under the aegis of the Royal School of Medical and Allied Sciences. The
              diagnostic laboratory caters to the requirements of the students pursuing a diploma and B.Sc. program in
              Medical Laboratory Science (MLS). In addition, the laboratory also extends support services to the
              community at large through the Royal Swasthya Seva which offers free medical services. The reports generated
              by the lab are used to check the primary health status of the individuals.
            </p>

            <p class="dept-mls-lab-intro">
              The laboratories are extensively utilised by undergraduate and postgraduate students for laboratory courses,
            </p>


            <h3 class="dept-mls-lab-heading">Our Lab Equipments</h3>

            <h2 class="dept-mls-section-title">Glimpse of <span>our Lab</span></h2>

            <div class="dept-mls-lab-gallery">
              <img src="mobile-assets/rsmas-new-dept/mls/1.jpg" alt="Lab 1" class="dept-mls-lab-img">
              <img src="mobile-assets/rsmas-new-dept/mls/2.jpg" alt="Lab 2" class="dept-mls-lab-img">
              <img src="mobile-assets/rsmas-new-dept/mls/3.jpg" alt="Lab 3" class="dept-mls-lab-img">
              <img src="mobile-assets/rsmas-new-dept/mls/4.jpg" alt="Lab 4" class="dept-mls-lab-img">
              <img src="mobile-assets/rsmas-new-dept/mls/5.jpg" alt="Lab 5" class="dept-mls-lab-img">
              <img src="mobile-assets/rsmas-new-dept/mls/6.jpg" alt="Lab 6" class="dept-mls-lab-img">
              <img src="mobile-assets/rsmas-new-dept/mls/7.jpg" alt="Lab 7" class="dept-mls-lab-img">
            </div>

            <button class="dept-mls-explore-btn">Explore</button>
          </div>

        </div> -->

        <style>
            /* ================= DISCOVERY SECTION ================= */

            .discovery-section {
                width: 100%;
                margin-top: 3vw;
                animation: fadeInUp 1s ease-out 0.7s both;
            }

            .discovery-container {
                max-width: 1200px;
                margin: 0 auto;
                background: #fff;
                padding: 40px 50px;
                border-radius: 14px;
                border-top: 4px solid var(--accent);
                box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .discovery-text {
                font-size: 1.08rem;
                line-height: 1.9;
                color: var(--text-muted);
                max-width: 1100px;
                margin-bottom: 35px;
                text-align: justify;
            }

            .discovery-image {
                width: 100%;
                max-width: 1050px;
                aspect-ratio: 16 / 9;
                object-fit: cover;
                border-radius: 14px;
                box-shadow: 0 10px 25px rgba(44, 74, 122, 0.12);
                transition: var(--transition);
            }

            .discovery-image:hover {
                transform: scale(1.01);
                box-shadow: 0 15px 35px rgba(44, 74, 122, 0.16);
            }

            .discovery-download-btn {
                margin-top: 35px;
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: var(--accent);
                color: #fff;
                padding: 15px 30px;
                border-radius: 50px;
                text-decoration: none;
                font-size: 1rem;
                font-weight: 600;
                transition: var(--transition);
                box-shadow: 0 8px 20px rgba(242, 140, 40, 0.3);
                font-family: 'Poppins', sans-serif;
            }

            .discovery-download-btn:hover {
                background: var(--accent-hover);
                transform: translateY(-3px);
                box-shadow: 0 12px 25px rgba(242, 140, 40, 0.45);
            }

            @media(max-width:768px) {

                .discovery-container {
                    padding: 30px 20px;
                }

                .discovery-text {
                    font-size: 1rem;
                    line-height: 1.8;
                    text-align: left;
                }

                .discovery-image {
                    aspect-ratio: 16 / 9;
                }

                .discovery-download-btn {
                    width: 100%;
                    justify-content: center;
                }
            }
        </style>



    </div>

    <script>
        // 1. Define the courses array
        const coursesData = [{
                title: "Master – Dialysis Therapy Technology",
                duration: "2 Years",
                link: "/programme-m-dialysis-therapy"
            },

            {
                title: "Bachelor – Dialysis Therapy Technology",
                duration: "4 years",
                link: "/programme-b-dialysis-therapy"
            },

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
        <div class="dept-mls-course-card">
          
          <div class="dept-mls-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-mls-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-mls-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
            }
        }
    </script>

    <script>
        // --- ACCORDION LOGIC ---
        const accordionHeaders = document.querySelectorAll('.dept-mls-accordion-header');

        // Function to calculate and set the exact height for smooth transitions
        function setAccordionHeights() {
            const activeItems = document.querySelectorAll('.dept-mls-accordion-item.active');
            activeItems.forEach(item => {
                const content = item.querySelector('.dept-mls-accordion-content');
                content.style.maxHeight = content.scrollHeight + "px";
            });
        }

        // Initialize the open item on load
        setAccordionHeights();

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const currentItem = this.parentElement;
                const currentContent = currentItem.querySelector('.dept-mls-accordion-content');

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
            "30-08-2024 | Health camp organized by the Department of Social Work in collaboration with MLT at MV School, Pamohi, with NSS and Unnat Bharat Abhiyan.",
            "09-08-2024 | Dr. Monsoomi Mahanta delivered an invited talk on Immunology.",
            "10-05-2024 | Dr. Suranjana Chaliha Hazarika delivered an invited talk on Scope and Future of Medical Allied Sciences.",
            "08-05-2024 | Prof. (Dr.) Ramesh C. Deka delivered an invited talk on Research Proposal.",
            "05-05-2024 | Dr. Areendam Barua and Dr. Sweta Bansali delivered a cancer awareness talk organized by MLT.",
            "02-05-2024 | Dr. Sweta Bansali and Dr. Areendam Barua delivered awareness talks.",
            "01-05-2024 | International Labor Day celebrated with a free health camp.",
            "10-04-2024 | Health screening camp organized in collaboration with Swagat Super Specialty Surgical Institute (SSSSI) ANH and NSS.",
            "09-04-2024 | Community outreach program organized by the Department of MLT and Physiotherapy.",
            "08-11-2023 | Dr. Imliwati Longkumer delivered an invited talk on World Diabetes Day.",
            "30-08-2023 | Health screening camp organized in collaboration with Dr. B. Barooah Cancer Institute, Guwahati.",
            "11-08-2023 | Dr. Imliwati Longkumer delivered an invited talk.",
            "01-05-2023 | World Labor Day celebrated with a free health checkup camp in association with NSS (RGU).",
            "06-04-2023 | World Health Day observed with a Poster Design Contest."
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
        <div class="dept-mls-event-item">
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
                title: "Guest Invited",
                headers: ["S.No.", "Name", "Designation", "	Purpose of the Visit", "Date of Visit"],
                rows: [
                    ["1", "Dr. Imliwati Longkumer",
                        "Biochemist/Researcher, Northeast Cancer Hospital and Research Institute, Guwahati",
                        "Invited talk", "08-11-2023"
                    ],

                    ["2", "Dr. Areendam Barua", "Cancer Surgeon, Swagat SSI & NH", "Awareness talk", "05-02-2024"],

                    ["3", "Dr. Sweta Bansali", "Obstetrician & Gynaecologist, Swagat SSI & NH", "Awareness talk",
                        "05-02-2024"
                    ],

                    ["4", "Prof. (Dr.) Ramesh C Deka", "Distinguished Professor & Adviser, RSMAS, RGU",
                        "Invited talk", "08-05-2024"
                    ],

                    ["5", "Dr. Surjana Chaliha Hazarika",
                        "Associate Professor, Dept. of Microbiology, Gauhati Medical College & Hospital",
                        "Invited talk", "10-05-2024"
                    ],

                    ["6", "Dr. Monsoomi Mahanta", "Consultant Microbiologist, Ultracare Diagnostic, Guwahati",
                        "Invited talk", "09-08-2024"
                    ],

                    ["7", "Prof. (Dr.) Rajjyoti Das",
                        "Department of Head and Neck Surgical Oncology, Dr. B. Borooah Cancer Institute, Guwahati",
                        "Awareness talk", "04-02-2025"
                    ],

                    ["8", "Dr. Sunita Shrotna", "MS, FRCS, Consultant Surgeon, Ashford and St. Peters Hospital, UK",
                        "Awareness talk", "09-04-2025"
                    ],

                    ["9", "Dr. D. Jayarajan",
                        "Associate Professor, Dept. of MLT, The Assam Royal Global University", "Awareness talk",
                        "23-04-2025"
                    ]
                ]
            },
            {
                title: "The Board of Studies",
                headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
                rows: [
                    ["1", "Member", "Dr. D. Jayarajan, Associate Professor, Dept of MLT"],
                    ["2", "Member", "Ms. Anindita Dutta, Assistant Professor, Dept. of MLT"]
                ]
            },
            {
                title: "The Departmental Research Committee (DRC)",
                headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
                rows: [
                    ["1", "Chairperson", "Dr. Abhijit Dutta"],
                    ["2", "Member Secretary", "Dr. Rupesh Kumar"],
                    ["3", "Member", "Dr. D. Jayarajan"],
                    ["4", "Member", "Prof. (Dr.) Ranjan Dutta Kalita"],
                    ["5", "Member", "Dr. Madhusmita Koch"]
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
        <div class="dept-mls-table-responsive">
          <table class="dept-mls-table">
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
        <div class="dept-mls-table-acc ${isEmpty ? 'disabled' : ''}">
          
          <div class="dept-mls-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-mls-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
            }).join("");
        }

        /* ACCORDION (single open at a time) */
        document.addEventListener("click", function(e) {
            const header = e.target.closest(".dept-mls-table-header");
            if (!header) return;

            const item = header.parentElement;
            if (item.classList.contains("disabled")) return;

            const allItems = document.querySelectorAll(".dept-mls-table-acc");

            allItems.forEach(acc => {
                if (acc !== item) {
                    acc.classList.remove("active");
                    const content = acc.querySelector(".dept-mls-table-content");
                    const icon = acc.querySelector("i");
                    if (content) content.style.maxHeight = 0;
                    if (icon) icon.classList.replace("fa-minus", "fa-plus");
                }
            });

            const content = item.querySelector(".dept-mls-table-content");
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
      <div class="dept-mls-event-card">

        <div class="dept-mls-event-title">
          ${event.title}
        </div>

        <div class="dept-mls-marquee">
          <div class="dept-mls-marquee-track">
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
