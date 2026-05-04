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

    .dept-optometry-wrapper {
      padding: 3vw 5vw;
      max-width: 1400px;
      margin: 0 auto;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* ================= HEADINGS ================= */
    .dept-optometry-heading {
      text-align: center;
      margin-bottom: 5vw;
      animation: fadeInDown 1s ease-out;
    }

    .dept-optometry-heading h1 {
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin: 0;
      line-height: 1.1;
      color: var(--primary);
    }

    .dept-optometry-heading h1 span {
      color: var(--accent);
    }

    .dept-optometry-heading h2 {
      font-size: clamp(1.2rem, 2.5vw, 2rem);
      font-weight: 400;
      margin-top: 15px;
      color: var(--text-muted);
    }

    /* ================= HERO ================= */
    .dept-optometry-hero {
      display: flex;
      align-items: center;
      animation: fadeInUp 1s ease-out 0.2s both;
      justify-content: center;
    }

    /* LEFT IMAGE */
    .dept-optometry-img {
      flex: 1;
      position: relative;
    }

    .dept-optometry-img img {
      width: 85%;
      margin-left: 7%;
      height: auto;
      border-radius: 24px;
      /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
      transition: var(--transition);
      object-fit: contain;
    }

    .dept-optometry-img img:hover {
      transform: translateY(-10px);
      box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
    }

    /* RIGHT CONTENT */
    .dept-optometry-content {
      flex: 1;
    }

    .dept-optometry-content h3 {
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2rem, 3.5vw, 2.5rem);
      margin-top: 0;
      margin-bottom: 20px;
    }

    .dept-optometry-content h3 span {
      color: var(--accent);
    }

    .dept-optometry-content p {
      font-size: clamp(1rem, 1.2vw, 1.125rem);
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      font-weight: 500;
      text-align: justify;
    }

    .dept-optometry-content ol li {
      font-size: clamp(1rem, 1.2vw, 1.125rem);
      line-height: 0.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      font-weight: 300;
    }

    /* ================= FLOATING MENU (LEFT) ================= */
    .dept-optometry-floating {
      position: fixed;
      left: 30px;
      top: 58%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 15px;
      z-index: 998;
    }

    .dept-optometry-float-item {
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

    .dept-optometry-float-item i {
      min-width: 56px;
      font-size: 20px;
      text-align: center;
      line-height: 56px;
      color: var(--accent);
      transition: var(--transition);
    }

    .dept-optometry-float-text {
      white-space: nowrap;
      padding-right: 25px;
      font-weight: 500;
      opacity: 0;
      transform: translateX(10px);
      transition: var(--transition);
    }

    .dept-optometry-float-item:hover {
      width: 200px;
      background: var(--accent);
      color: #fff;
    }

    .dept-optometry-float-item:hover i {
      color: #fff;
    }

    .dept-optometry-float-item:hover .dept-optometry-float-text {
      opacity: 1;
      transform: translateX(0);
    }

    /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
    .dept-optometry-admission-btn {
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

    .dept-optometry-admission-btn i {
      font-size: 1.2rem;
    }

    .dept-optometry-admission-btn:hover {
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
      .dept-optometry-wrapper {
        padding-bottom: 160px;
        padding-top: 110px;

      }

      .dept-optometry-hero {
        flex-direction: column;
        text-align: center;
      }

      .dept-optometry-img img {
        padding-left: 0%;
      }

      .dept-optometry-floating {
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

      .dept-optometry-float-item {
        width: 45px;
        height: 45px;
        box-shadow: none;
        background: transparent;
        border: none;
      }

      .dept-optometry-float-item i {
        min-width: 45px;
        line-height: 45px;
      }

      .dept-optometry-float-item:hover {
        width: 45px;
        background: transparent;
      }

      .dept-optometry-float-item:active i {
        color: var(--primary);
      }

      .dept-optometry-float-text {
        display: none;
      }

      /* 2. Center the Admission Button right above the nav menu */
      .dept-optometry-admission-btn {
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
      .dept-optometry-admission-btn:hover {
        transform: translateX(-50%) translateY(-5px) scale(1.02);
      }
    }

    /* ================= COURSES SECTION ================= */
    .dept-optometry-courses-section {
      margin-top: 3vw;
      width: 100%;
    }

    .dept-optometry-section-title {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2rem, 4vw, 2.5rem);
      color: var(--primary);
      margin-bottom: 4vw;
      animation: fadeInUp 1s ease-out 0.3s both;
    }

    .dept-optometry-section-title span {
      color: var(--accent);
    }

    .dept-optometry-course-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
      max-width: 1300px;
      margin: 0 auto;
    }

    .dept-optometry-course-card {
      width: 100%;
      animation: fadeInUp 1s ease-out 0.4s both;
    }

    /* Updated Course Header for Button Layout */
    .dept-optometry-course-header {
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
    .dept-optometry-course-header::after {
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
    .dept-optometry-view-btn {
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

    .dept-optometry-view-btn:hover {
      background: #fff;
      color: var(--primary);
    }

    .dept-optometry-course-body {
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
      .dept-optometry-course-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 20px 15px;
      }

      .dept-optometry-img img {
        padding-left: 0%;
      }

      .dept-optometry-course-header span {
        font-size: 1.2rem;
        /* Make title slightly smaller on mobile */
        z-index: 2;
        /* Keep above the orange triangle */
      }

      .dept-optometry-view-btn {
        width: 100%;
        /* Make button full width for easy tapping */
        text-align: center;
        box-sizing: border-box;
      }

      .dept-optometry-course-body {
        width: 100%;
        /* Remove the 95% inset on mobile so it doesn't look too narrow */
        box-sizing: border-box;
      }

      .dept-optometry-prospects-content {
        padding: 25px 20px;
      }


      .dept-optometry-subheading {
        font-size: 1.3rem;
      }
    }

    /* ================= CAREER PROSPECTS SECTION ================= */
    .dept-optometry-prospects-section {
      margin-top: 3vw;
      width: 100%;
      animation: fadeInUp 1s ease-out 0.5s both;
    }

    .dept-optometry-prospects-content {
      background: #fff;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
      max-width: 1200px;
      margin: 0 auto;
      border-top: 4px solid var(--accent);
      /* Adds a nice touch of orange at the top */
    }

    .dept-optometry-intro-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 30px;
      font-weight: 400;
    }

    .dept-optometry-subheading {
      font-family: 'Times New Roman', Times, serif;
      color: var(--primary);
      font-size: 1.5rem;
      margin-top: 35px;
      margin-bottom: 15px;
    }

    .dept-optometry-list {
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
      padding-left: 25px;
      /* Indents the numbers nicely */
      margin: 0;
    }

    .dept-optometry-list li {
      margin-bottom: 12px;
    }

    .dept-optometry-list li::marker {
      color: var(--primary);
      font-weight: bold;
    }

    /* ================= SYLLABUS ACCORDION SECTION ================= */
    .dept-optometry-accordion-section {
      margin-top: 3vw;
      width: 100%;
      animation: fadeInUp 1s ease-out 0.6s both;
    }

    .dept-optometry-accordion-wrapper {
      max-width: 1300px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .dept-optometry-accordion-item {
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
      background: #fff;
      overflow: hidden;
    }

    .dept-optometry-accordion-header {
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

    .dept-optometry-accordion-header-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .dept-optometry-accordion-header-left i {
      font-size: 1.3rem;
    }

    .dept-optometry-chevron {
      transition: transform 0.3s ease;
    }

    /* Accordion Content (Hidden by default) */
    .dept-optometry-accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease-in-out;
      background: #fdfdfd;
    }

    /* Active State for Accordion */
    .dept-optometry-accordion-item.active .dept-optometry-accordion-content {
      /* Max-height is handled by JS for smooth animation */
    }

    .dept-optometry-accordion-item.active .dept-optometry-accordion-header {
      border-radius: 8px 8px 0 0;
      border-bottom: 3px solid rgba(255, 255, 255, 0.2);
    }

    .dept-optometry-accordion-item.active .dept-optometry-chevron {
      transform: rotate(180deg);
    }

    /* Syllabus Links Inside Accordion */
    .dept-optometry-syllabus-list {
      padding: 15px 25px;
      display: flex;
      flex-direction: column;
    }

    .dept-optometry-syllabus-link {
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

    .dept-optometry-syllabus-link:last-child {
      border-bottom: none;
    }

    .dept-optometry-syllabus-link-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .dept-optometry-syllabus-link-left i {
      color: var(--text-muted);
    }

    .dept-optometry-syllabus-link:hover {
      color: var(--accent);
      transform: translateX(5px);
    }

    .dept-optometry-syllabus-link:hover .dept-optometry-syllabus-link-left i {
      color: var(--accent);
    }

    .dept-optometry-download-icon {
      color: var(--accent);
      font-size: 1.2rem;
    }

    /* ================= OUR LAB SECTION ================= */

    .dept-optometry-lab-section {
      width: 100%;
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out 0.7s both;
    }

    /* New 1300px Wrapper */
    .dept-optometry-lab-container {
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

    .dept-optometry-lab-heading {
      font-size: clamp(1.2rem, 2.5vw, 2rem);
    }

    /* Intro Text */
    .dept-optometry-lab-intro {
      font-size: 1.15rem;
      line-height: 1.8;
      color: var(--text-muted);
      max-width: 1200px;
      margin: 0 auto 4vw auto;
      font-weight: 400;
      text-align: justify;
    }



    /* Gallery (Now spans 100% of the 1300px container minus padding) */
    .dept-optometry-lab-gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 20px;
      width: 100%;
    }

    .dept-optometry-lab-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      aspect-ratio: 5 / 3;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
      transition: var(--transition);
    }

    .dept-optometry-lab-img:hover {
      transform: scale(1.03);
      box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
    }

    .dept-optometry-explore-btn {
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

    .dept-optometry-explore-btn:hover {
      background: var(--accent-hover);
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
    }

    /* ================= LAB RESPONSIVE FIXES ================= */
    @media (max-width: 960px) {
      .dept-optometry-lab-features {
        flex-direction: column;
      }
    }

    @media (max-width: 768px) {
      .dept-optometry-lab-gallery {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        gap: 15px;
      }
    }

    @media (max-width: 480px) {
      .dept-optometry-lab-gallery {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 1fr);
        gap: 10px;
      }
    }

    /* Custom Bullet List for Vision/Mission */
    .dept-optometry-bullet-list {
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
      padding-left: 25px;
      margin: 0;
      list-style-type: none;
      /* Removes default dots */
    }

    .dept-optometry-bullet-list li {
      margin-bottom: 12px;
      position: relative;
    }

    /* Uses FontAwesome checkmark for bullets */
    .dept-optometry-bullet-list li::before {
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
    .dept-optometry-events-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-optometry-events-box {
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
    .dept-optometry-events-track {
      display: flex;
      flex-direction: column;
      animation: scrollEvents 15s linear infinite;
    }

    .dept-optometry-events-box:hover .dept-optometry-events-track {
      animation-play-state: paused;
    }

    /* Event Item */
    .dept-optometry-event-item {
      padding: 18px 25px;
      border-bottom: 1px solid #eee;
      font-size: 1.05rem;
      color: var(--primary);
      line-height: 1.6;
    }

    /* Button */
    .dept-optometry-events-btn {
      background: var(--primary);
      color: #fff;
      padding: 12px 28px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
    }

    .dept-optometry-events-btn:hover {
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
    .dept-optometry-table-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* SINGLE COLUMN LAYOUT */
    .dept-optometry-table-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 1300px;
      margin: 0 auto;
    }

    /* ACCORDION CARD */
    .dept-optometry-table-acc {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
      transition: 0.3s ease;
    }

    /* HEADER */
    .dept-optometry-table-header {
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
    .dept-optometry-table-header i {
      transition: 0.3s;
    }

    /* CONTENT */
    .dept-optometry-table-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
      background: #fff;
    }

    /* ACTIVE */
    .dept-optometry-table-acc.active .dept-optometry-table-content {
      padding: 20px;
    }

    .dept-optometry-table-acc.active .dept-optometry-table-header i {
      transform: rotate(180deg);
    }

    /* TABLE */
    .dept-optometry-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.95rem;
    }

    .dept-optometry-table th {
      background: #142a47;
      color: #fff;
      padding: 12px;
      text-align: left;
    }

    .dept-optometry-table td {
      padding: 12px;
      border: 1px solid #eee;
      background: #fafafa;
      color: #333;
    }

    /* DISABLED */
    .dept-optometry-table-acc.disabled {
      opacity: 0.6;
      pointer-events: none;
    }

    .dept-optometry-table-responsive {
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .dept-optometry-table {
      min-width: 700px;
      border-collapse: collapse;
    }

    .dept-optometry-table td,
    .dept-optometry-table th {
      white-space: nowrap;
    }

    /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
    .dept-optometry-event-gallery-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-optometry-event-card {
      max-width: 1300px;
      margin: 0 auto 40px;
    }

    .dept-optometry-event-title {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--primary);
    }

    /* MARQUEE BOX */
    .dept-optometry-marquee {
      overflow: hidden;
      border-radius: 12px;
      /* background: #fff; */
      box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
      /* border-top: 4px solid var(--accent); */
    }

    /* TRACK */
    .dept-optometry-marquee-track {
      display: flex;
      gap: 20px;
      width: max-content;
      animation: marqueeScroll 80s linear infinite;
    }

    /* PAUSE ON HOVER */
    .dept-optometry-marquee:hover .dept-optometry-marquee-track {
      animation-play-state: paused;
    }

    /* IMAGE */
    .dept-optometry-marquee img {
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
      .dept-optometry-marquee img {
        height: 160px;
      }
    }

    /* ================= ACHIEVEMENT SECTION ================= */
    .dept-optometry-achievement-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* Tabs */
    .dept-optometry-achievement-tabs {
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
    .dept-optometry-achievement-content {
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
    .dept-optometry-recognition-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-optometry-recognition-container {
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
    .dept-optometry-recognition-img {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .dept-optometry-recognition-img img {
      width: 100%;
      max-width: 300px;
      object-fit: contain;
    }

    /* RIGHT CONTENT */
    .dept-optometry-recognition-content {
      flex: 2;
    }

    .dept-optometry-recognition-content p {
      font-size: 1.05rem;
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      text-align: justify;
    }

    /* BUTTON */
    .dept-optometry-recognition-btn {
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

    .dept-optometry-recognition-btn i {
      font-size: 1.2rem;
    }

    .dept-optometry-recognition-btn:hover {
      background: var(--accent-hover);
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 960px) {
      .dept-optometry-recognition-container {
        flex-direction: column;
        text-align: center;
        gap: 30px;
        padding: 30px 20px;
      }

      .dept-optometry-recognition-content p {
        text-align: center;
      }

      .dept-optometry-recognition-btn {
        justify-content: center;
      }
    }
  </style>

    <div class="dept-optometry-floating">
    <a href="#dept-home" class="dept-optometry-float-item">
      <i class="fa fa-home"></i>
      <span class="dept-optometry-float-text">Home</span>
    </a>

    <a href="#dept-about" class="dept-optometry-float-item">
      <i class="fa fa-book"></i>
      <span class="dept-optometry-float-text">About</span>
    </a>

    <a href="#dept-vision" class="dept-optometry-float-item">
      <i class="fa fa-bullseye"></i>
      <span class="dept-optometry-float-text">Vision & Mission</span>
    </a>

    <a href="#dept-courses" class="dept-optometry-float-item">
      <i class="fa fa-graduation-cap"></i>
      <span class="dept-optometry-float-text">Courses</span>
    </a>

    <a href="#dept-syllabus" class="dept-optometry-float-item">
      <i class="fa fa-file-text"></i>
      <span class="dept-optometry-float-text">Syllabus</span>
    </a>

    <a href="#dept-events" class="dept-optometry-float-item">
      <i class="fa fa-calendar"></i>
      <span class="dept-optometry-float-text">Events</span>
    </a>

    <a href="#dept-committee" class="dept-optometry-float-item">
      <i class="fa fa-users"></i>
      <span class="dept-optometry-float-text">Committee</span>
    </a>

    <a href="#dept-lab" class="dept-optometry-float-item">
      <i class="fa fa-flask"></i>
      <span class="dept-optometry-float-text">Lab</span>
    </a>

  </div>

  <a href="https://admissions.rgu.ac/" class="dept-optometry-admission-btn">
    Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
  </a>

  <div class="dept-optometry-wrapper">

    <div class="dept-optometry-heading" id="dept-home">
      <h1>Department of <span>Optometry</span></h1>
      <h2>Royal School of Medical & Allied Sciences (RSMAS)</h2>
    </div>

    <div class="dept-optometry-hero" id="dept-about">

      <div class="dept-optometry-img">
        <img src="https://www.rgu.ac/mobile-assets/rsmas-new-dept/optometry/headimg.png" alt="Architecture">
      </div>

      <div class="dept-optometry-content">

        <h3>About <span>Department</span></h3>

        <p>
          The Optometry programme at Royal Global University is a comprehensive course of study aimed at preparing
          students for a rewarding career in eye care. Optometry focuses on the health of the eyes and the visual system
          for enhancing quality of life through the preservation and improvement of vision.
        </p>

      </div>

    </div>

    <div class="dept-optometry-prospects-section" id="dept-prospects">

      <div class="dept-optometry-prospects-content">

        <h3 class="dept-optometry-subheading">Programme Structure</h3>

        <p class="dept-optometry-intro-text">
          Our programme is designed to equip students with the theoretical knowledge and practical skills necessary to
          diagnose, treat, and manage various eye and vision conditions. The curriculum spans 4 years (3+1) and covers a
          wide range of subjects, including:
        </p>

        <ol class="dept-optometry-list">
          <li>Anatomy and Physiology of the Eye</li>
          <li>Pharmacology</li>
          <li>Visual Optics</li>
          <li>Ocular Diseases</li>
          <li>Optometric Instruments and Techniques</li>
          <li>Contact Lens</li>
          <li>Dispensing Optics</li>
          <li>Low Vision and Rehabilitation</li>
          <li>Orthoptics</li>
          <li>Vision Therapy</li>
        </ol>

        <p class="dept-optometry-intro-text">
          Practical training is one of the important aspects of our programme, with students gaining hands-on experience
          in clinical settings under the supervision of experienced optometrists. This real-world exposure ensures that
          students are well-prepared to enter the professional world with confidence and competence. Our program
          emphasizes evidence-based practice, interdisciplinary collaboration, and ethical patient care, preparing
          students to excel in various optometric specialities.
        </p>

        <h3 class="dept-optometry-subheading">Career Opportunities</h3>
        <p class="dept-optometry-intro-text">
          After completion of the course, the students of our Optometry programme are highly sought in a variety of
          settings, including private practices, hospitals, research institutions, and the optical industry. With a
          degree in Optometry, career paths include clinical practice as an optometrist, research in vision sciences,
          and roles in the public health sector aimed at improving visual health services.
        </p>

        <h3 class="dept-optometry-subheading">Why Choose Royal Global University?</h3>

        <ol class="dept-optometry-list">
          <li>
            At Royal Global University, our Optometry programme is supported by dedicated faculties who are committed to
            research as well. Our students are not only clinically proficient but also equipped with the research and
            professional skills needed to advance the field of optometry.
          </li>

          <li>
            Our infrastructure includes advanced clinical labs, research centres, and comprehensive libraries, providing
            an enriching environment for both study and discovery. Beyond academics, we offer a vibrant extracurricular
            scene with clubs, societies, and sports teams, fostering a well-rounded university experience.
          </li>

          <li>
            Join us at Royal Global University to embark on a fulfilling career dedicated to enhancing vision and
            improving lives.
          </li>



      </div>
    </div>

    <!-- vision mission  -->
    <div class="dept-optometry-prospects-section" id="dept-vision">
      <h2 class="dept-optometry-section-title">Vision <span>& Mission</span></h2>

      <div class="dept-optometry-prospects-content">

        <h3 class="dept-optometry-subheading" style="margin-top: 0;">Our Vision</h3>
        <ul class="dept-optometry-bullet-list">
          <li>
            To equip the upcoming generation with a skill set that will acquaint them with clinical expertise and
            industry standards as well as route them into smooth transition to higher level of education.
          </li>

        </ul>

        <h3 class="dept-optometry-subheading">Our Mission</h3>
        <ul class="dept-optometry-bullet-list">
          <li>
            To provide comprehensive curriculum that prepares students for successful careers.
          </li>
          <li>
            To equip students with excellent clinical skills and ethical foundations necessary to provide exceptional
            optometric care.
          </li>
          <li>
            To conduct research to advance the understanding of visual and ocular health and translate findings into
            improved clinical practices.
          </li>

        </ul>

      </div>
    </div>

    <div class="dept-optometry-courses-section" id="dept-courses">
      <h2 class="dept-optometry-section-title">Courses <span>Offered</span></h2>

      <div class="dept-optometry-course-list" id="course-list-container">
      </div>
    </div>

    <!-- <div class="dept-optometry-prospects-section" id="dept-prospects">
      <h2 class="dept-optometry-section-title">Career <span>Prospects</span></h2>

      <div class="dept-optometry-prospects-content">
        <p class="dept-optometry-intro-text">
          The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
          sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
          strong foundation in agricultural sciences, preparing them for following careers opportunities:
        </p>

        <h3 class="dept-optometry-subheading">Higher Education Opportunities</h3>
        <ol class="dept-optometry-list">
          <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
          </li>
          <li>MBA in Agribusiness Management</li>
          <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
          <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
            disciplines</li>
        </ol>

        <h3 class="dept-optometry-subheading">Government Sector Jobs</h3>
        <ol class="dept-optometry-list">
          <li>Agricultural Officer / Civil Development Officer (ADO)</li>
          <li>IBPS AFO (Agricultural Field Officer)</li>
          <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
          <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
          <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
        </ol>

        <h3 class="dept-optometry-subheading">Private Sector Careers</h3>
        <ol class="dept-optometry-list">
          <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
          <li>Food Processing Industries</li>
          <li>Agri-Tech Startups – technology-based agricultural solutions</li>
          <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
          <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
        </ol>

        <h3 class="dept-optometry-subheading">Research & Teaching</h3>
        <ol class="dept-optometry-list">
          <li>Research Assistant / Scientist – in public and private research institutions</li>
          <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
          <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
        </ol>

        <h3 class="dept-optometry-subheading">Entrepreneurship & Startups</h3>
        <ol class="dept-optometry-list">
          <li>Organic farming, dairy, poultry, aquaculture</li>
          <li>Agri-tourism, greenhouse farming, vertical farming</li>
          <li>Processing units for spices, cereals, or fruits</li>
          <li>Agri-consultancy or freelance advisory services</li>
        </ol>

        <h3 class="dept-optometry-subheading">Jobs Abroad</h3>
        <ol class="dept-optometry-list">
          <li>Agricultural research, farm management, and food security projects</li>
          <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
          <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
        </ol>

        <h3 class="dept-optometry-subheading">Key Skills That Boost Career</h3>
        <ol class="dept-optometry-list">
          <li>Practical knowledge of farming tools and technologies</li>
          <li>Communication and management skills (especially in extension or agribusiness)</li>
          <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
          <li>Language skills and report writing</li>
        </ol>

      </div>
    </div> -->

    <div class="dept-optometry-accordion-section" id="dept-syllabus">
      <h2 class="dept-optometry-section-title">Courses Structure <span>and Syllabus</span></h2>

      <div class="dept-optometry-accordion-wrapper">

        <div class="dept-optometry-accordion-item active">
          <div class="dept-optometry-accordion-header">
            <div class="dept-optometry-accordion-header-left">
              <i class="fa-solid fa-graduation-cap"></i>
              <span>Under Graduate</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-optometry-chevron"></i>
          </div>

          <div class="dept-optometry-accordion-content">
            <div class="dept-optometry-syllabus-list">
              <a target="_blank"
                href="mobile-assets/rsmas-new-dept/optometry/syllabus/B.OPTOMETRY(2025_26).pdf"
                class="dept-optometry-syllabus-link" >
                <div class="dept-optometry-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Course Structure and Syllabus -- B.Optometry 2025 - 2026
                </div>
                <i class="fa-solid fa-download dept-optometry-download-icon"></i>
              </a>
              <a target="_blank"
                href="mobile-assets/rsmas-new-dept/optometry/syllabus/B.OPTOMETRY(2024_25).pdf"
                class="dept-optometry-syllabus-link" >
                <div class="dept-optometry-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Course Structure and Syllabus -- B.Optometry 2024 - 2025
                </div>
                <i class="fa-solid fa-download dept-optometry-download-icon"></i>
              </a>
              <a target="_blank"
                href="mobile-assets/rsmas-new-dept/optometry/syllabus/B.OPTOMETRY(2023_24).pdf"
                class="dept-optometry-syllabus-link" >
                <div class="dept-optometry-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Course Structure and Syllabus -- B.Optometry 2023 - 2024
                </div>
                <i class="fa-solid fa-download dept-optometry-download-icon"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="dept-optometry-accordion-item">
          <div class="dept-optometry-accordion-header">
            <div class="dept-optometry-accordion-header-left">
              <i class="fa-solid fa-graduation-cap"></i>
              <span>Post Graduate</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-optometry-chevron"></i>
          </div>

          <div class="dept-optometry-accordion-content">
            <div class="dept-optometry-syllabus-list">
              <a target="_blank"
                href="mobile-assets/rsmas-new-dept/optometry/syllabus/PG M.OPTOMETRY DETAILED SYLLABUS.pdf"
                class="dept-optometry-syllabus-link" >
                <div class="dept-optometry-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Course Structure and Syllabus -- M.Optometry
                </div>
                <i class="fa-solid fa-download dept-optometry-download-icon"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="dept-optometry-accordion-item">
          <div class="dept-optometry-accordion-header">
            <div class="dept-optometry-accordion-header-left">
              <i class="fa-solid fa-book"></i>
              <span>Doctoral Programme</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-optometry-chevron"></i>
          </div>

          <div class="dept-optometry-accordion-content">
            <div class="dept-optometry-syllabus-list">
              <a href="https://www.rgu.ac/phd" class="dept-optometry-syllabus-link" download>
                <div class="dept-optometry-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Click to View
                </div>

              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="dept-optometry-events-section" id="dept-events">

      <h2 class="dept-optometry-section-title">Events</h2>

      <div class="dept-optometry-events-box">
        <div class="dept-optometry-events-track" id="events-track"></div>
      </div>

      <!-- <div style="text-align:center; margin-top:30px;">
        <a href="#" class="dept-optometry-events-btn">View All</a>
      </div> -->

    </div>


        <!-- ================= ACHIEVEMENT SECTION ================= -->
        <div class="dept-optometry-achievement-section" id="dept-achievement">

            <h2 class="dept-optometry-section-title">
                Achievements
            </h2>

            <!-- Tabs -->
            <div class="dept-optometry-achievement-tabs">
                <button class="dept-achievement-tab active" data-tab="student">
                    Student Achievement
                </button>
                <button class="dept-achievement-tab" data-tab="faculty">
                    Faculty Achievement
                </button>


            </div>

            <!-- Content -->
            <div class="dept-optometry-achievement-content">

                <!-- STUDENT TAB -->
                <div class="dept-achievement-pane active" id="student">

                    <div class="dept-optometry-table-responsive">
                        <table class="dept-optometry-table">

                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Department / School</th>
                                    <th>Name</th>
                                    <th>Name of Recognition/Achievment/Award</th>
                                    <th>Type of Award (research/teaching/others)</th>
                                    <th>Awarded by (organization)</th>
                                    <th>Date of award</th>
                                    <th>Event during which awarded (seminar/ conference / other academic event - details)</th>


                                </tr>



                            </thead>
                            <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>RSMAS</td>
                                    <td>Wapang T Jamir</td>
                                    <td>Certificate of Achievement for Blog Publication – Two Eyes, One Advantage: The Visual Secret Behind True Champions</td>
                                    <td>Others – Academic Writing</td>
                                    <td>Vision science academy</td>
                                    <td>3/1/2026</td>
                                    <td>Blog publication at “The Vision Post” – Academic Blog Publication</td>


                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>RSMAS</td>
                                    <td>Jeba Ahmed</td>
                                    <td>Certificate of Achievement for Blog Publication – Smart Eyes : How AI and Technology are revolutionizing Modern Optometry</td>
                                    <td>Others – Academic Writing</td>
                                    <td>Vision science academy</td>
                                    <td>3/1/2026</td>
                                    <td>Blog publication at “The Vision Post” – Academic Blog Publication</td>


                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>RSMAS</td>
                                    <td>Wapang T Jamir</td>
                                    <td>Management of Long-Standing Macula-Off Rhegmatogenous Retinal Detachment: A Case Report</td>
                                    <td>Research</td>
                                    <td>INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES</td>
                                    <td>4/16/2026</td>
                                    <td>Published in INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES</td>


                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>RSMAS</td>
                                    <td>Nongsaibam Abdus Suku</td>
                                    <td>Management of Long-Standing Macula-Off Rhegmatogenous Retinal Detachment: A Case Report</td>
                                    <td>Research</td>
                                    <td>INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES</td>
                                    <td>4/16/2026</td>
                                    <td>Published in INTERNATIONAL JOURNAL OF PHARMACEUTICAL SCIENCES</td>


                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>

                       <!-- Faculty TAB -->
                <div class="dept-achievement-pane" id="faculty">

                    <div class="dept-optometry-table-responsive">
                        <table class="dept-optometry-table">
                            <thead>
                                <tr>
                                    <!-- YOU WILL ADD HEADERS -->
                                    <th>Sl. No.</th>
                                    <th>Department / School</th>
                                    <th>Name of Faculty</th>
                                    <th>Name of Recognition/Achievment/Award</th>
                                    <th>Type of Award (research/teaching/others)</th>
                                    <th>Awarded by (organization)</th>
                                    <th>Date of award</th>
                                    <th>Event during which awarded (seminar/ conference / other academic event - details)</th>


                                </tr>



                            </thead>
                            <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Dr. A. P. J. Abdul Kalam National Academician Award</td>
                                    <td>Teaching & Research Academic Contribution in Healthcare  Optometry</td>
                                    <td>WELRED Foundation and online</td>
                                    <td>11/10/2025</td>
                                    <td>Other Academic Recognition Event</td>


                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Excellence – International Optometry Knowledge Championship (Eye Q Arena 2025)</td>
                                    <td>Successful completion and excellence in an international-level optometry knowledge competition.</td>
                                    <td>Eye Q Arena  International Optometry Knowledge Championship</td>
                                    <td>02/11/2025 to 12/11/25</td>
                                    <td>Eye Q Arena 2025 – International Optometry Knowledge Championship</td>


                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Achievement for Blog Publication – 'Eye Health: Debunking Everyday Misconceptions'</td>
                                    <td>Others – Academic Writing</td>
                                    <td>Vision science academy</td>
                                    <td>12/1/2025</td>
                                    <td>Other Academic Activity – Recognition for published educational article in “The Vision Post”</td>


                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Achievement in Ophthalmic Photography – “Adenoviral Keratoconjunctivitis Presenting with SPK”</td>
                                    <td>Others – Clinical Documentation</td>
                                    <td>Vision science academy</td>
                                    <td>12/1/2025</td>
                                    <td>Other Academic Activity – Recognition for contribution to “The Visual Scope Gallery,” an academic ophthalmic photography platform by Vision Science Academy.</td>


                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Excellence – Outstanding Contribution to Optometry Research</td>
                                    <td>Research</td>
                                    <td>National Healthcare Education Awards & Summit by Hyphenage Media Group</td>
                                    <td>11/23/2025</td>
                                    <td>National Conference  Award Summit – National Healthcare Education Awards & Summit 2025</td>


                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Achievement for Publishing the Article “Young Eyes, Bright Futures: The Importance of Early Vision Care in Children”</td>
                                    <td>Research</td>
                                    <td>Vision science academy</td>
                                    <td>2/1/2026</td>
                                    <td>Awarded for publication of an academic article in The Vision Post Exclusive, an official publication  of Vision Science Academy</td>


                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Achievement for Blog Publication – Two Eyes, One Advantage: The Visual Secret Behind True Champions</td>
                                    <td>Others – Academic Writing</td>
                                    <td>Vision science academy</td>
                                    <td>3/1/2026</td>
                                    <td>Blog publication at “The Vision Post” – Academic Blog Publication</td>


                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Achievement for Blog Publication – Smart Eyes : How AI and Technology are revolutionizing Modern Optometry</td>
                                    <td>Others – Academic Writing</td>
                                    <td>Vision science academy</td>
                                    <td>3/1/2026</td>
                                    <td>Blog publication at “The Vision Post” – Academic Blog Publication</td>


                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Appointment – Editorial Board Member (Unifya)</td>
                                    <td>Research / Academic Service</td>
                                    <td>Erudexa Publishing</td>
                                    <td>3/15/2026</td>
                                    <td>Appointment as Editorial Board Member for Unifya Journal (Academic Editorial Contribution)</td>


                                </tr>


                                 <tr>
                                    <td>10</td>
                                    <td>RSMAS</td>
                                    <td>Haziel Rynjah</td>
                                    <td>Certificate of Appointment – Editorial Board Member (Medora: Medical Sciences)</td>
                                    <td>Research / Academic Service</td>
                                    <td>Erudexa Publishing</td>
                                    <td>3/15/2026</td>
                                    <td>Appointment as Editorial Board Member for Medora: Medical Sciences journal  (Academic Editorial Contribution)</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>



            </div>

        </div>

    <div class="dept-optometry-table-section" id="dept-committee">

      <div class="dept-optometry-table-grid" id="table-accordion-container"></div>

    </div>

    <div class="dept-optometry-lab-section" id="dept-lab">

      <div class="dept-optometry-lab-container">

        <h2 class="dept-optometry-section-title">Our <span>Lab</span></h2>

        <!-- <p class="dept-optometry-lab-intro">
          The laboratories are extensively utilised by undergraduate and postgraduate students for laboratory courses,
        </p> -->


        <!-- <h3 class="dept-optometry-lab-heading">Our Lab Equipments</h3> -->

        <!-- <h2 class="dept-optometry-section-title">Glimpse of <span>our Lab</span></h2> -->

        <div class="dept-optometry-lab-gallery">
          <img src="mobile-assets/rsmas-new-dept/optometry/1.jpg" alt="Lab 1" class="dept-optometry-lab-img">
          <img src="mobile-assets/rsmas-new-dept/optometry/2.jpg" alt="Lab 2" class="dept-optometry-lab-img">
          <img src="mobile-assets/rsmas-new-dept/optometry/3.jpg" alt="Lab 3" class="dept-optometry-lab-img">
          <img src="mobile-assets/rsmas-new-dept/optometry/4.jpg" alt="Lab 4" class="dept-optometry-lab-img">
          <img src="mobile-assets/rsmas-new-dept/optometry/5.jpg" alt="Lab 5" class="dept-optometry-lab-img">

        </div>

        <!-- <button class="dept-optometry-explore-btn">Explore</button> -->
      </div>

    </div>

  </div>

  <script>
  // 1. Define the courses array
  const coursesData = [
    {
      title: "M.Optometry",
      duration: "2 years",
      link: "https://www.rgu.ac/programs-M-Optometry"
    },

    {
      title: "B.Optometry | Honours / Honours with Research",
      duration: "4 Years + 1 Year internship",
      link: "https://www.rgu.ac/programs-b-optometry"
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
        <div class="dept-optometry-course-card">

          <div class="dept-optometry-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-optometry-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-optometry-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
    }
  }
</script>

<script>
  // --- ACCORDION LOGIC ---
  const accordionHeaders = document.querySelectorAll('.dept-optometry-accordion-header');

  // Function to calculate and set the exact height for smooth transitions
  function setAccordionHeights() {
    const activeItems = document.querySelectorAll('.dept-optometry-accordion-item.active');
    activeItems.forEach(item => {
      const content = item.querySelector('.dept-optometry-accordion-content');
      content.style.maxHeight = content.scrollHeight + "px";
    });
  }

  // Initialize the open item on load
  setAccordionHeights();

  accordionHeaders.forEach(header => {
    header.addEventListener('click', function () {
      const currentItem = this.parentElement;
      const currentContent = currentItem.querySelector('.dept-optometry-accordion-content');

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
    "03-05-2023 | Dr. Manjil Hazarika (Assistant Professor, Cotton University) | FDP resource person.",
    "15-11-2022 | International conference on material science and nanotechnology.",
    "04-06-2022 | As part of the MoU with ICT Mumbai, a lecture series was organized by the Department of Chemistry and Biotechnology.",
    "10-02-2021 | Online lecture by Dr. S. K. Sahoo on nanomaterials.",
    "13-03-2020 | Interactive session with Ms. Priyanka Das Rajkakati.",
    "27-09-2019 | Invited talk by Dr. Ankur Bharali, Assistant Professor, Guwahati University."
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
        <div class="dept-optometry-event-item">
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
      headers: ["S.No.", "Name", "Designation", "Expert/Member"],
      rows: [
        ["1", "Ms Smita Das", "Assistant Professor, Coordinator, Dept. of Optometry, RGU","Convener"],
        ["2", "Dr. Mousumi Saikia", "Associate Professor of Optometry, RIPANS, AIZAWL","Academic Expert"],
        ["3", "Mr. Tridip Bharali", "Technical Officer, Dept. of Ophthalmology, AIIMS, GUWAHATI","Industry Expert"],
        ["4", "Ms Lipika Kalita", "Assistant Professor, Dept. of Optometry, RGU","Member"],
        ["5", "Ms Bhayolina Sarma", "Assistant Professor, Dept. of Optometry, RGU","Member"],
        ["6", "Ms Joyshree Das", "Assistant Professor, Dept. of Optometry, RGU","Member"],
        ["7", "Mr Krishanjit Parasar", "Assistant Professor, Dept. of Optometry, RGU","Member"]


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
        <div class="dept-optometry-table-responsive">
          <table class="dept-optometry-table">
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
        <div class="dept-optometry-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-optometry-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-optometry-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
    }).join("");
  }

  /* ACCORDION (single open at a time) */
  document.addEventListener("click", function (e) {
    const header = e.target.closest(".dept-optometry-table-header");
    if (!header) return;

    const item = header.parentElement;
    if (item.classList.contains("disabled")) return;

    const allItems = document.querySelectorAll(".dept-optometry-table-acc");

    allItems.forEach(acc => {
      if (acc !== item) {
        acc.classList.remove("active");
        const content = acc.querySelector(".dept-optometry-table-content");
        const icon = acc.querySelector("i");
        if (content) content.style.maxHeight = 0;
        if (icon) icon.classList.replace("fa-minus", "fa-plus");
      }
    });

    const content = item.querySelector(".dept-optometry-table-content");
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
      <div class="dept-optometry-event-card">

        <div class="dept-optometry-event-title">
          ${event.title}
        </div>

        <div class="dept-optometry-marquee">
          <div class="dept-optometry-marquee-track">
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
