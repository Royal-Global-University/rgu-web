@extends('frontend.master')
@section('content')
    <div>

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

            .dept-geography-wrapper {
                padding: 3vw 5vw;
                max-width: 1400px;
                margin: 0 auto;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            /* ================= HEADINGS ================= */
            .dept-geography-heading {
                text-align: center;
                margin-bottom: 5vw;
                animation: fadeInDown 1s ease-out;
            }

            .dept-geography-heading h1 {
                font-family: 'Times New Roman', Times, serif;
                font-size: clamp(2.5rem, 5vw, 3.5rem);
                margin: 0;
                line-height: 1.1;
                color: var(--primary);
            }

            .dept-geography-heading h1 span {
                color: var(--accent);
            }

            .dept-geography-heading h2 {
                font-size: clamp(1.2rem, 2.5vw, 2rem);
                font-weight: 400;
                margin-top: 15px;
                color: var(--text-muted);
            }

            /* ================= HERO ================= */
            .dept-geography-hero {
                display: flex;
                align-items: center;
                animation: fadeInUp 1s ease-out 0.2s both;
                justify-content: center;
            }

            /* LEFT IMAGE */
            .dept-geography-img {
                flex: 1;
                position: relative;
            }

            .dept-geography-img img {
                width: 80%;
                padding-left: 7%;
                height: auto;
                border-radius: 24px;
                /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
                transition: var(--transition);
                object-fit: contain;
            }

            .dept-geography-img img:hover {
                transform: translateY(-10px);
                box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
            }

            /* RIGHT CONTENT */
            .dept-geography-content {
                flex: 1;
            }

            .dept-geography-content h3 {
                font-family: 'Times New Roman', Times, serif;
                font-size: clamp(2rem, 3.5vw, 2.5rem);
                margin-top: 0;
                margin-bottom: 20px;
            }

            .dept-geography-content h3 span {
                color: var(--accent);
            }

            .dept-geography-content p {
                font-size: clamp(1rem, 1.2vw, 1.125rem);
                line-height: 1.8;
                color: var(--text-muted);
                margin-bottom: 25px;
                font-weight: 300;
                text-align: justify;
            }

            .dept-geography-content ol li {
                font-size: clamp(1rem, 1.2vw, 1.125rem);
                line-height: 0.8;
                color: var(--text-muted);
                margin-bottom: 25px;
                font-weight: 300;
            }

            /* ================= FLOATING MENU (LEFT) ================= */
            .dept-geography-floating {
                position: fixed;
                left: 30px;
                top: 50%;
                transform: translateY(-50%);
                display: flex;
                flex-direction: column;
                gap: 15px;
                z-index: 998;
            }

            .dept-geography-float-item {
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

            .dept-geography-float-item i {
                min-width: 56px;
                font-size: 20px;
                text-align: center;
                line-height: 56px;
                color: var(--accent);
                transition: var(--transition);
            }

            .dept-geography-float-text {
                white-space: nowrap;
                padding-right: 25px;
                font-weight: 500;
                opacity: 0;
                transform: translateX(10px);
                transition: var(--transition);
            }

            .dept-geography-float-item:hover {
                width: 200px;
                background: var(--accent);
                color: #fff;
            }

            .dept-geography-float-item:hover i {
                color: #fff;
            }

            .dept-geography-float-item:hover .dept-geography-float-text {
                opacity: 1;
                transform: translateX(0);
            }

            /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
            .dept-geography-admission-btn {
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

            .dept-geography-admission-btn i {
                font-size: 1.2rem;
            }

            .dept-geography-admission-btn:hover {
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
                .dept-geography-wrapper {
                    padding-bottom: 160px;
                }

                .dept-geography-hero {
                    flex-direction: column;
                    text-align: center;
                }

                .dept-geography-img img {
                    padding-left: 0%;
                }

                .dept-geography-floating {
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

                .dept-geography-float-item {
                    width: 45px;
                    height: 45px;
                    box-shadow: none;
                    background: transparent;
                    border: none;
                }

                .dept-geography-float-item i {
                    min-width: 45px;
                    line-height: 45px;
                }

                .dept-geography-float-item:hover {
                    width: 45px;
                    background: transparent;
                }

                .dept-geography-float-item:active i {
                    color: var(--primary);
                }

                .dept-geography-float-text {
                    display: none;
                }

                /* 2. Center the Admission Button right above the nav menu */
                .dept-geography-admission-btn {
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
                .dept-geography-admission-btn:hover {
                    transform: translateX(-50%) translateY(-5px) scale(1.02);
                }
            }

            /* ================= COURSES SECTION ================= */
            .dept-geography-courses-section {
                margin-top: 3vw;
                width: 100%;
            }

            .dept-geography-section-title {
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                font-size: clamp(2rem, 4vw, 2.5rem);
                color: var(--primary);
                margin-bottom: 4vw;
                animation: fadeInUp 1s ease-out 0.3s both;
            }

            .dept-geography-section-title span {
                color: var(--accent);
            }

            .dept-geography-course-list {
                display: flex;
                flex-direction: column;
                gap: 30px;
                max-width: 1300px;
                margin: 0 auto;
            }

            .dept-geography-course-card {
                width: 100%;
                animation: fadeInUp 1s ease-out 0.4s both;
            }

            /* Updated Course Header for Button Layout */
            .dept-geography-course-header {
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
            .dept-geography-course-header::after {
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
            .dept-geography-view-btn {
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

            .dept-geography-view-btn:hover {
                background: #fff;
                color: var(--primary);
            }

            .dept-geography-course-body {
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
                .dept-geography-course-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 15px;
                    padding: 20px 15px;
                }

                .dept-geography-img img {
                    padding-left: 0%;
                }

                .dept-geography-course-header span {
                    font-size: 1.2rem;
                    /* Make title slightly smaller on mobile */
                    z-index: 2;
                    /* Keep above the orange triangle */
                }

                .dept-geography-view-btn {
                    width: 100%;
                    /* Make button full width for easy tapping */
                    text-align: center;
                    box-sizing: border-box;
                }

                .dept-geography-course-body {
                    width: 100%;
                    /* Remove the 95% inset on mobile so it doesn't look too narrow */
                    box-sizing: border-box;
                }

                .dept-geography-prospects-content {
                    padding: 25px 20px;
                }


                .dept-geography-subheading {
                    font-size: 1.3rem;
                }
            }

            /* ================= CAREER PROSPECTS SECTION ================= */
            .dept-geography-prospects-section {
                margin-top: 3vw;
                width: 100%;
                animation: fadeInUp 1s ease-out 0.5s both;
            }

            .dept-geography-prospects-content {
                background: #fff;
                padding: 40px 50px;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
                max-width: 1200px;
                margin: 0 auto;
                border-top: 4px solid var(--accent);
                /* Adds a nice touch of orange at the top */
            }

            .dept-geography-intro-text {
                font-size: 1.1rem;
                line-height: 1.8;
                color: var(--text-muted);
                margin-bottom: 30px;
                font-weight: 400;
            }

            .dept-geography-subheading {
                font-family: 'Times New Roman', Times, serif;
                color: var(--primary);
                font-size: 1.5rem;
                margin-top: 35px;
                margin-bottom: 15px;
            }

            .dept-geography-list {
                color: var(--text-muted);
                font-size: 1.05rem;
                line-height: 1.8;
                padding-left: 25px;
                /* Indents the numbers nicely */
                margin: 0;
            }

            .dept-geography-list li {
                margin-bottom: 12px;
            }

            .dept-geography-list li::marker {
                color: var(--primary);
                font-weight: bold;
            }

            /* ================= SYLLABUS ACCORDION SECTION ================= */
            .dept-geography-accordion-section {
                margin-top: 3vw;
                width: 100%;
                animation: fadeInUp 1s ease-out 0.6s both;
            }

            .dept-geography-accordion-wrapper {
                max-width: 1300px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .dept-geography-accordion-item {
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
                background: #fff;
                overflow: hidden;
            }

            .dept-geography-accordion-header {
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

            .dept-geography-accordion-header-left {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .dept-geography-accordion-header-left i {
                font-size: 1.3rem;
            }

            .dept-geography-chevron {
                transition: transform 0.3s ease;
            }

            /* Accordion Content (Hidden by default) */
            .dept-geography-accordion-content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease-in-out;
                background: #fdfdfd;
            }

            /* Active State for Accordion */
            .dept-geography-accordion-item.active .dept-geography-accordion-content {
                /* Max-height is handled by JS for smooth animation */
            }

            .dept-geography-accordion-item.active .dept-geography-accordion-header {
                border-radius: 8px 8px 0 0;
                border-bottom: 3px solid rgba(255, 255, 255, 0.2);
            }

            .dept-geography-accordion-item.active .dept-geography-chevron {
                transform: rotate(180deg);
            }

            /* Syllabus Links Inside Accordion */
            .dept-geography-syllabus-list {
                padding: 15px 25px;
                display: flex;
                flex-direction: column;
            }

            .dept-geography-syllabus-link {
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

            .dept-geography-syllabus-link:last-child {
                border-bottom: none;
            }

            .dept-geography-syllabus-link-left {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .dept-geography-syllabus-link-left i {
                color: var(--text-muted);
            }

            .dept-geography-syllabus-link:hover {
                color: var(--accent);
                transform: translateX(5px);
            }

            .dept-geography-syllabus-link:hover .dept-geography-syllabus-link-left i {
                color: var(--accent);
            }

            .dept-geography-download-icon {
                color: var(--accent);
                font-size: 1.2rem;
            }

            /* ================= OUR LAB SECTION ================= */

            .dept-geography-lab-section {
                width: 100%;
                margin-top: 3vw;
                animation: fadeInUp 1s ease-out 0.7s both;
            }

            /* New 1300px Wrapper */
            .dept-geography-lab-container {
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

            .dept-geography-lab-heading {
                font-size: clamp(1.2rem, 2.5vw, 2rem);
            }

            /* Intro Text */
            .dept-geography-lab-intro {
                font-size: 1.15rem;
                line-height: 1.8;
                color: var(--text-muted);
                max-width: 1200px;
                margin: 0 auto 4vw auto;
                font-weight: 400;
                text-align: justify;
            }



            /* Gallery (Now spans 100% of the 1300px container minus padding) */
            .dept-geography-lab-gallery {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: repeat(2, 1fr);
                gap: 20px;
                width: 100%;
            }

            .dept-geography-lab-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                aspect-ratio: 16 / 9;
                border-radius: 12px;
                box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
                transition: var(--transition);
            }

            .dept-geography-lab-img:hover {
                transform: scale(1.03);
                box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
            }

            .dept-geography-explore-btn {
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

            .dept-geography-explore-btn:hover {
                background: var(--accent-hover);
                transform: translateY(-3px);
                box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
            }

            /* ================= LAB RESPONSIVE FIXES ================= */
            @media (max-width: 960px) {
                .dept-geography-lab-features {
                    flex-direction: column;
                }
            }

            @media (max-width: 768px) {
                .dept-geography-lab-gallery {
                    grid-template-columns: repeat(2, 1fr);
                    grid-template-rows: repeat(3, 1fr);
                    gap: 15px;
                }
            }

            @media (max-width: 480px) {
                .dept-geography-lab-gallery {
                    grid-template-columns: 1fr;
                    grid-template-rows: repeat(6, 1fr);
                    gap: 10px;
                }
            }

            /* Custom Bullet List for Vision/Mission */
            .dept-geography-bullet-list {
                color: var(--text-muted);
                font-size: 1.05rem;
                line-height: 1.8;
                padding-left: 25px;
                margin: 0;
                list-style-type: none;
                /* Removes default dots */
            }

            .dept-geography-bullet-list li {
                margin-bottom: 12px;
                position: relative;
            }

            /* Uses FontAwesome checkmark for bullets */
            .dept-geography-bullet-list li::before {
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
            .dept-geography-events-section {
                margin-top: 3vw;
                animation: fadeInUp 1s ease-out;
            }

            .dept-geography-events-box {
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
            .dept-geography-events-track {
                display: flex;
                flex-direction: column;
                animation: scrollEvents 15s linear infinite;
            }

            .dept-geography-events-box:hover .dept-geography-events-track {
                animation-play-state: paused;
            }

            /* Event Item */
            .dept-geography-event-item {
                padding: 18px 25px;
                border-bottom: 1px solid #eee;
                font-size: 1.05rem;
                color: var(--primary);
                line-height: 1.6;
            }

            /* Button */
            .dept-geography-events-btn {
                background: var(--primary);
                color: #fff;
                padding: 12px 28px;
                border-radius: 40px;
                text-decoration: none;
                font-weight: 600;
                transition: var(--transition);
            }

            .dept-geography-events-btn:hover {
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
            .dept-geography-table-section {
                margin-top: 3vw;
                animation: fadeInUp 1s ease-out;
            }

            /* SINGLE COLUMN LAYOUT */
            .dept-geography-table-grid {
                display: flex;
                flex-direction: column;
                gap: 20px;
                max-width: 1300px;
                margin: 0 auto;
            }

            /* ACCORDION CARD */
            .dept-geography-table-acc {
                background: #fff;
                border-radius: 14px;
                overflow: hidden;
                box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
                transition: 0.3s ease;
            }

            /* HEADER */
            .dept-geography-table-header {
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
            .dept-geography-table-header i {
                transition: 0.3s;
            }

            /* CONTENT */
            .dept-geography-table-content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease;
                background: #fff;
            }

            /* ACTIVE */
            .dept-geography-table-acc.active .dept-geography-table-content {
                padding: 20px;
            }

            .dept-geography-table-acc.active .dept-geography-table-header i {
                transform: rotate(180deg);
            }

            /* TABLE */
            .dept-geography-table {
                width: 100%;
                border-collapse: collapse;
                font-size: 0.95rem;
            }

            .dept-geography-table th {
                background: #142a47;
                color: #fff;
                padding: 12px;
                text-align: left;
            }

            .dept-geography-table td {
                padding: 12px;
                border: 1px solid #eee;
                background: #fafafa;
                color: #333;
            }

            /* DISABLED */
            .dept-geography-table-acc.disabled {
                opacity: 0.6;
                pointer-events: none;
            }

            .dept-geography-table-responsive {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .dept-geography-table {
                min-width: 700px;
                border-collapse: collapse;
            }

            .dept-geography-table td,
            .dept-geography-table th {
                white-space: nowrap;
            }

            /* ===== EVENTS + HIGHLIGHTS LAYOUT (REWRITTEN) ===== */

            .dept-geography-events-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 40px;
                margin-top: 3vw;
                align-items: stretch;
            }

            /* LEFT EVENTS */
            .dept-geography-events-section {
                display: flex;
                flex-direction: column;
            }

            /* RIGHT HIGHLIGHTS */
            .dept-geography-highlights-section {
                display: flex;
                flex-direction: column;
            }

            /* ================= CAROUSEL ================= */

            .dept-geography-carousel {
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
                .dept-geography-events-wrapper {
                    grid-template-columns: 1fr;
                    gap: 30px;
                }
            }

            /* Mobile */
            @media (max-width: 600px) {

                .dept-geography-carousel {
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

            .dept-geography-explore-btn {
                text-decoration: none !important;
            }

            /* ================= ACHIEVEMENT SECTION ================= */
            .dept-geography-achievement-section {
                margin-top: 3vw;
                animation: fadeInUp 1s ease-out;
            }

            /* Tabs */
            .dept-geography-achievement-tabs {
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
            .dept-geography-achievement-content {
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

        <div class="dept-geography-floating">
            <a href="#dept-home" class="dept-geography-float-item">
                <i class="fa fa-home"></i>
                <span class="dept-geography-float-text">Home</span>
            </a>

            <a href="#dept-about" class="dept-geography-float-item">
                <i class="fa fa-book"></i>
                <span class="dept-geography-float-text">About</span>
            </a>

            <!-- <a href="#dept-vision" class="dept-geography-float-item">
                  <i class="fa fa-bullseye"></i>
                  <span class="dept-geography-float-text">Vision & Mission</span>
                </a> -->

            <a href="#dept-courses" class="dept-geography-float-item">
                <i class="fa fa-graduation-cap"></i>
                <span class="dept-geography-float-text">Courses</span>
            </a>

            <!-- <a href="#dept-prospects" class="dept-geography-float-item">
                  <i class="fa fa-file-text"></i>
                  <span class="dept-geography-float-text">Prospects</span>
                </a> -->

            <a href="#dept-syllabus" class="dept-geography-float-item">
                <i class="fa fa-file-text"></i>
                <span class="dept-geography-float-text">Syllabus</span>
            </a>

            <a href="#dept-committee" class="dept-geography-float-item">
                <i class="fa fa-users"></i>
                <span class="dept-geography-float-text">Committee</span>
            </a>

            <a href="#dept-lab" class="dept-geography-float-item">
                <i class="fa fa-flask"></i>
                <span class="dept-geography-float-text">Lab</span>
            </a>

        </div>

        <a href="https://admissions.rgu.ac/" class="dept-geography-admission-btn">
            Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
        </a>

        <div class="dept-geography-wrapper">

            <div class="dept-geography-heading" id="dept-home">
                <h1>Department of <span>Geography & Geoinformatics</span></h1>
                <h2>Royal School of Environmental & Earth Sciences (RSEES)</h2>
            </div>

            <div class="dept-geography-hero" id="dept-about">

                <div class="dept-geography-img">
                    <img src="/mobile-assets/new-dept-sociology/academic-excellance/new/geo.jpeg"
                        alt="Political Science and Public Administration">
                </div>

                <div class="dept-geography-content">

                    <h3>About <span>Department</span></h3>

                    <p>
                        The Department of Geography at The Assam Royal Global University in Guwahati
                        is renowned for its comprehensive integration of physical and human geography,
                        providing a diverse curriculum for undergraduate and postgraduate students. The
                        Department runs various programmes such BA/B.Sc Geography, MA/M.SC
                        Geography, M.Sc Geoinformatics and PhD programmes. The courses includes
                        geomorphology, climatology, biogeography, urban geography, regional planning,
                        and Remote Sensing and GIS. The syllabus includes field-based learning and visit
                        to institutions of prominence for exposure visits to the students of the department.
                        Moreover the Department of Geography frequently organises outreach programs
                        for the students to embed community involvement strategies into geographical
                        pursuits and to nurture ethical values and empathy among students. The faculties
                        of the department are specialized to guide students through inter-disciplinary
                        courses and a balanced education that emphasizes field-based learning and the
                        use of advanced GIS and remote sensing technologies. Key focus areas such as
                        Physical Geography, Environmental Geography, Tourism Geography, Agricultural
                        Geography and Migration Studies enable the department to understand the
                        pressing issues of man-environment relationship and sustainability. Graduates
                        and post graduates are well equipped with critical thinking, spatial analysis through GIS and Remote
                        sensing, field based empirical research making them well-suited for
                        careers in urban and regional planning, environmental management, transportation planning, public
                        policy and geospatial technology with strong prospects for further
                        academic studies, including PhDs.
                    </p>


                </div>

            </div>

            <div class="dept-geography-prospects-section" id="dept-vision">
                <h2 class="dept-geography-section-title">Vision <span>& Mission</span></h2>

                <div class="dept-geography-prospects-content">

                    <h3 class="dept-geography-subheading" style="margin-top: 0;">Our Vision</h3>
                    <ul class="dept-geography-bullet-list">
                        <li>
                            To provide globally integrated education in Geography by leveraging emerging
                            geo-spatial sciences and research methodologies, fostering the development of
                            global citizens.
                        </li>

                    </ul>

                    <h3 class="dept-geography-subheading">Our Mission</h3>
                    <ul class="dept-geography-bullet-list">
                        <li>
                            To inculcate the spirit of Geography through innovative inputs and a
                            research-intensive, skill-oriented curriculum;
                        </li>
                        <li>
                            To embed community involvement strategies into geographical pursuits, nurturing
                            ethical values and empathy among students.
                        </li>
                        <li>
                            To nurture competent leaders who are environmentally aware and dedicated for
                            the well-being of environment and society.
                        </li>

                    </ul>

                </div>
            </div>

            <div class="dept-geography-courses-section" id="dept-courses">
                <h2 class="dept-geography-section-title">Courses <span>Offered</span></h2>

                <div class="dept-geography-course-list" id="course-list-container">
                </div>
            </div>

            <!-- <div class="dept-geography-prospects-section" id="dept-prospects">
                  <h2 class="dept-geography-section-title">Career <span>Prospects</span></h2>

                  <div class="dept-geography-prospects-content">
                    <p class="dept-geography-intro-text">
                      The prospects after a B.Sc. in Physics are diverse and promising, in regard to the growing importance of
                      sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
                      strong foundation in agricultural sciences, preparing them for following careers opportunities:
                    </p>

                    <h3 class="dept-geography-subheading">Higher Education Opportunities</h3>
                    <ol class="dept-geography-list">
                      <li>M.Sc. in Physics (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
                      </li>
                      <li>MBA in Agribusiness Management</li>
                      <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
                      <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
                        disciplines</li>
                    </ol>

                    <h3 class="dept-geography-subheading">Government Sector Jobs</h3>
                    <ol class="dept-geography-list">
                      <li>Agricultural Officer / Physics Development Officer (ADO)</li>
                      <li>IBPS AFO (Agricultural Field Officer)</li>
                      <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
                      <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
                      <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
                    </ol>

                    <h3 class="dept-geography-subheading">Private Sector Careers</h3>
                    <ol class="dept-geography-list">
                      <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
                      <li>Food Processing Industries</li>
                      <li>Agri-Tech Startups – technology-based agricultural solutions</li>
                      <li>Banking &amp; Insurance – Physics officers in banks or crop insurance companies</li>
                      <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
                    </ol>

                    <h3 class="dept-geography-subheading">Research & Teaching</h3>
                    <ol class="dept-geography-list">
                      <li>Research Assistant / Scientist – in public and private research institutions</li>
                      <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
                      <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
                    </ol>

                    <h3 class="dept-geography-subheading">Entrepreneurship & Startups</h3>
                    <ol class="dept-geography-list">
                      <li>Organic farming, dairy, poultry, aquaculture</li>
                      <li>Agri-tourism, greenhouse farming, vertical farming</li>
                      <li>Processing units for spices, cereals, or fruits</li>
                      <li>Agri-consultancy or freelance advisory services</li>
                    </ol>

                    <h3 class="dept-geography-subheading">Jobs Abroad</h3>
                    <ol class="dept-geography-list">
                      <li>Agricultural research, farm management, and food security projects</li>
                      <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
                      <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
                    </ol>

                    <h3 class="dept-geography-subheading">Key Skills That Boost Career</h3>
                    <ol class="dept-geography-list">
                      <li>Practical knowledge of farming tools and technologies</li>
                      <li>Communication and management skills (especially in extension or agribusiness)</li>
                      <li>Computer literacy – GIS, remote sensing, and data analytics in Physics</li>
                      <li>Language skills and report writing</li>
                    </ol>

                  </div>
                </div> -->

            <div class="dept-geography-accordion-section" id="dept-syllabus">
                <h2 class="dept-geography-section-title">Courses Structure <span>and Syllabus</span></h2>

                <div class="dept-geography-accordion-wrapper">


                    <div class="dept-geography-accordion-item active">
                        <div class="dept-geography-accordion-header">
                            <div class="dept-geography-accordion-header-left">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>Under Graduate</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dept-geography-chevron"></i>
                        </div>

                        <div class="dept-geography-accordion-content">
                            <div class="dept-geography-syllabus-list">

                                <a target="_blank"
                                    href="/mobile-assets/department-all/rsses/geography-geoinformatics/updated-syllabus/Course_Structure_UG_Geography.pdf"
                                    class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Structure of Syllabus -- Geography
                                    </div>
                                    <i class="fa-solid fa-download dept-geography-download-icon"></i>
                                </a>
                                <a target="_blank" href="/mobile-assets/syllabus/RSEES/UG%20_Geography_Syllabus.pdf"
                                    class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Detailed Syllabus -- Geography
                                    </div>
                                    <i class="fa-solid fa-download dept-geography-download-icon"></i>
                                </a>


                            </div>
                        </div>
                    </div>


                    <div class="dept-geography-accordion-item">
                        <div class="dept-geography-accordion-header">
                            <div class="dept-geography-accordion-header-left">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>Post Graduate</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dept-geography-chevron"></i>
                        </div>

                        <div class="dept-geography-accordion-content">
                            <div class="dept-geography-syllabus-list">

                                <a target="_blank"
                                    href="/mobile-assets/department-all/rsses/geography-geoinformatics/updated-syllabus/Course_Structure_PG_Geography.pdf"
                                    class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Structure of Syllabus -- Geography
                                    </div>
                                    <i class="fa-solid fa-download dept-geography-download-icon"></i>
                                </a>
                                <a target="_blank" href="/mobile-assets/syllabus/RSEES/PG%20syllabus%20Geography.pdf"
                                    class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Detailed Syllabus -- Geography
                                    </div>
                                    <i class="fa-solid fa-download dept-geography-download-icon"></i>
                                </a>
                                <hr>

                                <a target="_blank"
                                    href="/mobile-assets/department-all/rsses/geography-geoinformatics/updated-syllabus/Course_Structure_PG_Geoinformatics.pdf"
                                    class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Structure of Syllabus -- Geoinformatics
                                    </div>
                                    <i class="fa-solid fa-download dept-geography-download-icon"></i>
                                </a>

                                <a target="_blank"
                                    href="/mobile-assets/syllabus/RSEES/MSc%20Geoinformatics%20Syllabus.pdf"
                                    class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Detailed Syllabus -- Geoinformatics
                                    </div>
                                    <i class="fa-solid fa-download dept-geography-download-icon"></i>
                                </a>


                            </div>
                        </div>
                    </div>

                    <div class="dept-geography-accordion-item">
                        <div class="dept-geography-accordion-header">
                            <div class="dept-geography-accordion-header-left">
                                <i class="fa-solid fa-book"></i>
                                <span>Doctoral Programme</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dept-geography-chevron"></i>
                        </div>

                        <div class="dept-geography-accordion-content">
                            <div class="dept-geography-syllabus-list">
                                <a href="/phd" class="dept-geography-syllabus-link" download>
                                    <div class="dept-geography-syllabus-link-left">
                                        <i class="fa-solid fa-file-lines"></i>
                                        Click to View
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="dept-geography-events-section" id="dept-events">

                <h2 class="dept-geography-section-title">Events</h2>

                <div>
                    <h4 class="text-dark" style="text-align: justify;">Department of Geography & Geoinformatics, The Assam
                        Royal Global University in collaboration with Assam State Space Application Centre (ASSAC) organised
                        GIS Day on 19 November 2025. The event featured insightful talks by experts from ASSAC, engaging
                        technical sessions, poster presentations, and an interactive showcase of GIS tools. Students also
                        participated in a map-making competition, followed by prize distribution. The day strengthened
                        academic–industry collaboration and inspired students to explore the power of geospatial
                        technologies.</h4>
                    <img src="/mobile-assets/new-dept-sociology/academic-excellance/new/geo-info.jpeg" />
                </div>

                <div class="dept-geography-events-box">
                    <div class="dept-geography-events-track" id="events-track"></div>
                </div>

                <!-- <div style="text-align:center; margin-top:30px;">
                    <a href="#" class="dept-geography-events-btn">View All</a>
                  </div> -->

            </div>

            <!-- ================= ACHIEVEMENT SECTION ================= -->
            <div class="dept-geography-achievement-section" id="dept-achievement">

                <h2 class="dept-geography-section-title">
                    Achievements
                </h2>

                <!-- Tabs -->
                <div class="dept-geography-achievement-tabs">
                    <button class="dept-achievement-tab active" data-tab="student">
                        Student Achievement
                    </button>
                    <button class="dept-achievement-tab" data-tab="faculty">
                        Faculty Achievement
                    </button>


                </div>

                <!-- Content -->
                <div class="dept-geography-achievement-content">

                    <!-- STUDENT TAB -->
                    <div class="dept-achievement-pane active" id="student">

                        <div class="dept-geography-table-responsive">
                            <table class="dept-geography-table">
                                <thead>
                                    <tr>
                                        <!-- YOU WILL ADD HEADERS -->
                                        <th>Sl. No.</th>
                                        <th>Achievement Category</th>
                                        <th>2023–24</th>
                                        <th>2024–25</th>
                                        <th>2025–26</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>NET / SLET / TET Qualified</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>2</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Co-curricular Activities</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td>4</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Students Progressing to Higher Education</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>15</td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Students Placed (Employment)</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>6</td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Faculty -->

                    <div class="dept-achievement-pane" id="faculty">

                        <div class="dept-geography-table-responsive">
                            <table class="dept-geography-table">
                                <thead>
                                    <tr>Research Output Summary</tr>
                                    <tr>
                                        <!-- YOU WILL ADD HEADERS -->
                                        <th>Sl. No.</th>
                                        <th>Research Output Type</th>
                                        <th>Count</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Research Articles Published</td>
                                        <td>75</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Book Chapters Published</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Patents Filed</td>
                                        <td>08</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Consultancy Projects</td>
                                        <td>01</td>
                                    </tr>

                                    <tr>
                                        <td>Grants & Faculty Recognition</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Sl. No.</td>
                                        <td>Award Type</td>
                                        <td>Details</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>RGU Seed Money Grant awarded to 5 faculty members in March 2026</td>
                                        <td>recognized for high-impact research potential.</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>

            </div>

            <div class="dept-geography-table-section" id="dept-committee">

                <h2 class="dept-geography-section-title">Commit<span>tee</span></h2>

                <div class="dept-geography-table-grid" id="table-accordion-container"></div>

            </div>


            <div class="dept-geography-lab-section" id="dept-lab">

                <div class="dept-geography-lab-container">

                    <h2 class="dept-geography-section-title">Our <span>Lab</span></h2>

                    <h3>Cartography Lab</h2>

                        <p class="dept-geography-lab-intro">
                            The Cartography Lab is equipped with essential instruments and infrastructure required for
                            teaching and training in map-making, surveying, and spatial data representation. The laboratory
                            enables students to gain practical knowledge of cartographic techniques and field survey
                            methods. The Department of Geography provides students with hands-on experience and skills
                            necessary for understanding spatial patterns and conducting basic geographical research. The lab
                            is located in Block- B, Room No- B 206-A on the 2nd Floor.
                        </p>



                        <h3 class="dept-geography-lab-heading">Our Lab Equipments</h3>

                        <!-- <h2 class="dept-geography-section-title">Glimpse of <span>our Lab</span></h2> -->

                        <div class="container">
                            <img src="/mobile-assets/laboratories/Cartography/photo%201.jpg" alt="Lab 1"
                                style="width: 100%;">


                        </div>

                        <!-- <button class="dept-geography-explore-btn">Explore</button> -->
                </div>

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
                    title: "M.A. Geography",
                    duration: "2 years",
                    link: "/programs-MA-Geography"
                },
                {
                    title: "M.Sc. Geography",
                    duration: "2 years",
                    link: "/programs-MSc-geography"
                },
                {
                    title: "M.Sc. Geoinformatics",
                    duration: "2 years",
                    link: "/programs-MSc-in-Geoinformatics"
                },
                {
                    title: "B.A./B.Sc. Geography | Honours / Honours with Research",
                    duration: "4 years as per NEP",
                    link: "/programs-BSc-Geography"
                },
                {
                    title: " B.A./B.Sc. Geography — Integrated Civil Service Programme",
                    duration: "4 years",

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
        <div class="dept-geography-course-card">

          <div class="dept-geography-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
                    ? `<a href="${course.link}" class="dept-geography-view-btn">View details</a>`
                    : ``
                }

          </div>

          <div class="dept-geography-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
                }
            }
        </script>

        <script>
            // --- ACCORDION LOGIC ---
            const accordionHeaders = document.querySelectorAll('.dept-geography-accordion-header');

            // Function to calculate and set the exact height for smooth transitions
            function setAccordionHeights() {
                const activeItems = document.querySelectorAll('.dept-geography-accordion-item.active');
                activeItems.forEach(item => {
                    const content = item.querySelector('.dept-geography-accordion-content');
                    content.style.maxHeight = content.scrollHeight + "px";
                });
            }

            // Initialize the open item on load
            setAccordionHeights();

            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const currentItem = this.parentElement;
                    const currentContent = currentItem.querySelector('.dept-geography-accordion-content');

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

                "21-11-2023 | Abnormal Mass Loss at ELAs in the Himalayas: Style, Trends, Consequences | Prof. Milap Chand Sharma (CSRD, JNU, New Delhi) | Invited Talk.",

                "03-11-2023 | Developing and Entrepreneurial Mindset | Prof. Hirak Ranjan Das (Deputy Director, Innovation Incubation and Entrepreneurship, RGU) | Guest Lecture.",

                "22-09-2023 | Coastal Flooding in Sundarban Areas of West Bengal | Prof. Sunando Bandhyopadhyay (Geography Dept., University of Calcutta, Kolkata) | Guest Lecture.",

                "15-05-2023 | The Young North and the Old South | Prof. D K Nayak (Dept. of Geography, NEHU, Shillong) | Invited Talk.",

                "09-08-2024 | Geography and SDGs | Dr. Theo Ebbers (Principal Advisor, Program Management Education, ChildAid Network Foundation, Germany) | Invited Talk.",

                "08-06-2024 | Hydrospheric Dynamics and Sustainable Development | Prof. B W Pandey (Dept. of Geography, DSE, Delhi University) | Webinar.",

                "05-06-2024 | Land Restoration, Desertification, and Drought Resilience | Prof. Kushal Kumar Baruah (Dean of Academic Affairs, Auniati University, Assam) | Invited Talk.",

                "25-03-2025 | Climate Change Realities - The Geoinformatical Perspective | Prof. Shahab Fazal (Head, Dept. of Geography, Aligarh Muslim University, Aligarh) | Invited Talk.",

                "19-11-2025 | Application of Geospatial Technology for Societal Benefits & SDG | Sri Prosanna Boruah (Sr. Scientific Officer, ASSAC) | Invited Talk + Map Making Competition.",

                "19-02-2026 | Women Empowerment and Agriculture | Dr. Barnali Gogoi (Professor and former Head, Dept. of Cotton University, Guwahati) | Invited Talk.",

                "20-02-2026 | Application of Remote Sensing in Geographical Studies | Dr. Shukla Acharjee (Dept. of Geography, Dibrugarh University, Assam) | Invited Talk.",

                "26-02-2026 | Startup Ecosystem of India and Future Perspective | Dr. Krantisagar More (Senior Advisor - Savishkar India, GLF Pvt. Ltd., Startup 20-G20 India & Brazil, BRICS Delegate) | Invited Talk.",

                "27-02-2026 | Introduction to Compound Extremes Using Geospatial and Reanalysis Datasets | Dr. Swomil Swarnkar (Asst. Professor, Dept. of Earth and Environmental Sciences, IISER Bhopal) | Invited Talk.",

                "10-03-2026 | Geospatial Technology in Everyday Life: Applications and Impacts | Dr. Manash Jyoti Nath (Asst. Professor, Dept. of Geography, Gauhati University, Assam) | Invited Talk.",

                "01-04-2026 | Geography, Northeast and Ethnic Diversity: The Convoluted Truth | Prof. Amarjyoti Choudhury (Chair Dr. Bhupen Hazarika Centre for Creativity, RGU, Assam) | Distinguished Lecture Series.",

                "08-06-2023 - 09-06-2023 | Reimagining Brahmaputra: Beyond Risks and Towards Values | Robert J. Wasson (Emeritus Professor, James Cook University & Australian National University, Australia) | Workshop.",

                "10-04-2023 | A training programme on Effective Public Speaking | Sri Nishant Paharia (Coordinator, ISTD, Guwahati Chapter) | Workshop.",

                "16-03-2026 - 20-03-2026 | Developing Emotional Intelligence, Academic Research and Teaching | In collaboration with Lavender Literary Club, India & MIRHA, Malaysia | Workshop.",
                "11-04-2023 | Sustainable Livelihood Approaches to Poverty Reduction | Prof. V P Sati (Dept. of Geography & Resource Management, MZU, Mizoram) | One-day Seminar.",

                "22-03-2023 | Accelerating Change to Solve the Water and Sanitation Crises | Prof. S P Singh (VC, RGU) | One-day Seminar.",

                "20-08-2024 | Emerging North-east and Opportunities | Sri Atul Chandrakant Kulkarni (Chairman, Amazing Namaster Foundation, Board of Governor, Shillong) | One-day Seminar.",

                "22-04-2024 | Our Planet: Reflections on Space and Society | Prof. Sachidanand Sinha (Dept. of Geography, CSRD, JNU & President, Indian Institute of Geographers) | One-day Seminar.",

                "20-08-2025 | From Ideas to Creating IP through Innovation and Accessing Global Opportunities | Er. Dolly Bhasin (Managing Director, SPH Consultancy and E-services Pvt. Ltd.) | One-day Seminar.",

                "28-02-2023 | Environmental Awareness: Reducing the use of plastic and water conservation | Educational Outreach Programme at Garbhanga forest village | Outreach Programme.",

                "22-03-2023 | World Water Day Celebration | Educational Outreach Programme at Garbhanga Parijat Academy | Outreach Programme.",

                "01-04-2024 | Community Outreach Program in Nagaland on Water Conservation | Community Outreach and Awareness Program | Outreach Programme.",

                "02-04-2024 | Community Outreach Program in Meghalaya on Solid Waste Management | Community Outreach and Awareness Program | Outreach Programme.",

                "02-04-2024 | Community Outreach Program in Manipur on Solid Waste Management | Community Outreach and Awareness Program | Outreach Programme.",
                "03-04-2024 | Community Outreach Program in Manipur on Need of Basic Healthcare and Education | Community Outreach and Awareness Program | Outreach Programme.",

                "13-09-2024 | Reduce, Reuse, Recycle: The lifecycle of Department of Geography | Environmental Conservation Initiatives | Outreach Programme.",

                "01-10-2024 | Single-use plastic free Campus | Environmental Conservation Initiatives | Outreach Programme.",

                "24-01-2025 | Documentary and Essay Writing Competition celebrating Republic Day | Educational Programme | Outreach Programme.",

                "22-03-2025 | Clean Water, Healthy Communities: A World Water Day Initiative | Community Outreach and Awareness Program | Outreach Programme.",

                "15-12-2021 - 24-12-2021 | Understanding Landforms and Resources of Rajasthan | Field Based learning to place of geographical significance | Field Visit.",

                "26-02-2023 - 04-03-2023 | Understanding Landforms and resources of Tarai Region of Himalayas in Uttarakhand and visit to institutions of Prominence in Dehradun | Field Based learning to place of geographical significance | Field Visit.",

                "30-03-2024 - 04-04-2024 | Exploring mangrove forest in Kolkata and visit to institutions of Prominence in Kolkata | Field Based learning to place of geographical significance | Field Visit.",

                "05-06-2024 | Industrial Visit to Star Cement Factory cum Plantation Drive | Educational Industrial Visit | Field Visit.",

                "24-01-2025 | Documentary and Essay Writing Competition celebrating Republic Day | Educational Programme | Field Visit.",

                "05-02-2025 | Cleanliness Drive at Deeppor Beel | Educational Programme | Field Visit.",

                "28-02-2025 | Visit to Indian Oil Limited, Guwahati | Industrial Visit | Field Visit.",

                "01-04-2025 - 05-04-2025 | Understanding our Environment: Field Survey for Geographical Studies in Sikkim | Field Based learning to place of geographical significance | Field Visit.",

                "31-01-2026 | Dumpy Level Survey at Deeppor Beel, Guwahati | Field Based Experiential Learning Programme | Field Visit.",

                "31-01-2026 | Thematic Landscape Models - Desert, Glacial, Fluvial, and Coastal Display | Educational Exhibition at Srimanta Sankaradeva Kalakshetram | Field Visit.",

                "03-02-2026 | Field Visit: Mayong Museum, Raja Mayang, Assam | Field Based Experiential Learning Programme | Field Visit."

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
        <div class="dept-geography-event-item">
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
                        ["1", "Convener (Ex-Officio)- Head of the Department ",
                            "Dr. Annesha Borah, Coordinator and Assistant Professor, Department of Geography"
                        ],
                        ["", " ", "Prof. B S Mipun, Senior Professor, Department of Geography"],
                        ["", " ", "Dr. Saurav Kumar, Assistant Professor, Department of Geography"],
                        ["", " ", "Dr. Tushar Sarkar, Assistant Professor, Department of Geography"],
                        ["2", "All Faculty members of the Department Members (Ex-Officio)",
                            "Dr.Takhellabam Prameshwari Devi, Assistant Professor, Department of Geography"
                        ],
                        ["", " ", "Dr. Trishna Changkakoti, Assistant Professor, Department of Geography"],
                        ["", " ", "Ms. Jubilee Goswami, Assistant Professor, Department of Geography"],
                        ["", " ", "Miss Deepanjali Reang, Assistant Professor, Department of Geography"],
                        ["3", "External Experts ",
                            "Prof. Bimal Kumar Kar, Professor, Department of Geography, Gauhati University"
                        ],
                        ["", " ", "Prof. D K Nayak, Professor, Department of Geography, North Eastern Hill University"]





                    ]
                },
                {
                    title: "The Departmental Research Committee (DRC)",
                    headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
                    rows: [
                        ["1", "Head of the Department", "Dr. Annesha Borah",
                            "Coordinator and Assistant Professor, Department of Geography and Geoinformatics",
                            "Chairperson"
                        ],
                        ["2", "Two Professors", "Prof. B S Mipun", "Dean RSEES and DSW", "Member"],
                        ["3", "Two Assistant Professors holding Ph.D. degree", "Dr. Trishna Changkakati",
                            "Assistant Professor, Department of Geography and Geoinformatics", "Member"
                        ],
                        ["", "", "Dr. Saurav Kumar", "Assistant Professor, Department of Geography and Geoinformatics",
                            "Member"
                        ],
                        ["4",
                            "Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC",
                            "Prof. Soumitra Sen", "Senior Professor, RSTTM and RSHM", "External Member"
                        ],
                        ["", "", "Prof. Sajal Nag", "Professor and Dean, RSHSS, RGU", "External Member"],
                        ["", "", "Prof. Hemangi Deka Sarma", "Prof. Department of Geology, RGU", "External Member"]
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
        <div class="dept-geography-table-responsive">
          <table class="dept-geography-table">
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
        <div class="dept-geography-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-geography-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-geography-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
                }).join("");
            }

            /* ACCORDION (single open at a time) */
            document.addEventListener("click", function(e) {
                const header = e.target.closest(".dept-geography-table-header");
                if (!header) return;

                const item = header.parentElement;
                if (item.classList.contains("disabled")) return;

                const allItems = document.querySelectorAll(".dept-geography-table-acc");

                allItems.forEach(acc => {
                    if (acc !== item) {
                        acc.classList.remove("active");
                        const content = acc.querySelector(".dept-geography-table-content");
                        const icon = acc.querySelector("i");
                        if (content) content.style.maxHeight = 0;
                        if (icon) icon.classList.replace("fa-minus", "fa-plus");
                    }
                });

                const content = item.querySelector(".dept-geography-table-content");
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
      <div class="dept-geography-event-card">

        <div class="dept-geography-event-title">
          ${event.title}
        </div>

        <div class="dept-geography-marquee">
          <div class="dept-geography-marquee-track">
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

    </div>
@endsection
