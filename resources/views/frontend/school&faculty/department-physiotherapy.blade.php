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

    .dept-physiotherapy-wrapper {
      padding: 3vw 5vw;
      max-width: 1400px;
      margin: 0 auto;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* ================= HEADINGS ================= */
    .dept-physiotherapy-heading {
      text-align: center;
      margin-bottom: 5vw;
      animation: fadeInDown 1s ease-out;
    }

    .dept-physiotherapy-heading h1 {
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin: 0;
      line-height: 1.1;
      color: var(--primary);
    }

    .dept-physiotherapy-heading h1 span {
      color: var(--accent);
    }

    .dept-physiotherapy-heading h2 {
      font-size: clamp(1.2rem, 2.5vw, 2rem);
      font-weight: 400;
      margin-top: 15px;
      color: var(--text-muted);
    }

    /* ================= HERO ================= */
    .dept-physiotherapy-hero {
      display: flex;
      align-items: center;
      animation: fadeInUp 1s ease-out 0.2s both;
      justify-content: center;
    }

    /* LEFT IMAGE */
    .dept-physiotherapy-img {
      flex: 1;
      position: relative;
    }

    .dept-physiotherapy-img img {
      width: 85%;
      margin-left: 7%;
      height: auto;
      border-radius: 24px;
      /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
      transition: var(--transition);
      object-fit: contain;
    }

    .dept-physiotherapy-img img:hover {
      transform: translateY(-10px);
      box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
    }

    /* RIGHT CONTENT */
    .dept-physiotherapy-content {
      flex: 1;
    }

    .dept-physiotherapy-content h3 {
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2rem, 3.5vw, 2.5rem);
      margin-top: 0;
      margin-bottom: 20px;
    }

    .dept-physiotherapy-content h3 span {
      color: var(--accent);
    }

    .dept-physiotherapy-content p {
      font-size: clamp(1rem, 1.2vw, 1.125rem);
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      font-weight: 500;
      text-align: justify;
    }

    .dept-physiotherapy-content ol li {
      font-size: clamp(1rem, 1.2vw, 1.125rem);
      line-height: 0.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      font-weight: 300;
    }

    /* ================= FLOATING MENU (LEFT) ================= */
    .dept-physiotherapy-floating {
      position: fixed;
      left: 30px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 15px;
      z-index: 998;
    }

    .dept-physiotherapy-float-item {
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

    .dept-physiotherapy-float-item i {
      min-width: 56px;
      font-size: 20px;
      text-align: center;
      line-height: 56px;
      color: var(--accent);
      transition: var(--transition);
    }

    .dept-physiotherapy-float-text {
      white-space: nowrap;
      padding-right: 25px;
      font-weight: 500;
      opacity: 0;
      transform: translateX(10px);
      transition: var(--transition);
    }

    .dept-physiotherapy-float-item:hover {
      width: 200px;
      background: var(--accent);
      color: #fff;
    }

    .dept-physiotherapy-float-item:hover i {
      color: #fff;
    }

    .dept-physiotherapy-float-item:hover .dept-physiotherapy-float-text {
      opacity: 1;
      transform: translateX(0);
    }

    /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
    .dept-physiotherapy-admission-btn {
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

    .dept-physiotherapy-admission-btn i {
      font-size: 1.2rem;
    }

    .dept-physiotherapy-admission-btn:hover {
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
      .dept-physiotherapy-wrapper {
        padding-bottom: 160px;
        padding-top: 110px;

      }

      .dept-physiotherapy-hero {
        flex-direction: column;
        text-align: center;
      }

      .dept-physiotherapy-img img {
        padding-left: 0%;
      }

      .dept-physiotherapy-floating {
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

      .dept-physiotherapy-float-item {
        width: 45px;
        height: 45px;
        box-shadow: none;
        background: transparent;
        border: none;
      }

      .dept-physiotherapy-float-item i {
        min-width: 45px;
        line-height: 45px;
      }

      .dept-physiotherapy-float-item:hover {
        width: 45px;
        background: transparent;
      }

      .dept-physiotherapy-float-item:active i {
        color: var(--primary);
      }

      .dept-physiotherapy-float-text {
        display: none;
      }

      /* 2. Center the Admission Button right above the nav menu */
      .dept-physiotherapy-admission-btn {
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
      .dept-physiotherapy-admission-btn:hover {
        transform: translateX(-50%) translateY(-5px) scale(1.02);
      }
    }

    /* ================= COURSES SECTION ================= */
    .dept-physiotherapy-courses-section {
      margin-top: 3vw;
      width: 100%;
    }

    .dept-physiotherapy-section-title {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2rem, 4vw, 2.5rem);
      color: var(--primary);
      margin-bottom: 4vw;
      animation: fadeInUp 1s ease-out 0.3s both;
    }

    .dept-physiotherapy-section-title span {
      color: var(--accent);
    }

    .dept-physiotherapy-course-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
      max-width: 1300px;
      margin: 0 auto;
    }

    .dept-physiotherapy-course-card {
      width: 100%;
      animation: fadeInUp 1s ease-out 0.4s both;
    }

    /* Updated Course Header for Button Layout */
    .dept-physiotherapy-course-header {
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
    .dept-physiotherapy-course-header::after {
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
    .dept-physiotherapy-view-btn {
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

    .dept-physiotherapy-view-btn:hover {
      background: #fff;
      color: var(--primary);
    }

    .dept-physiotherapy-course-body {
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
      .dept-physiotherapy-course-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 20px 15px;
      }

      .dept-physiotherapy-img img {
        padding-left: 0%;
      }

      .dept-physiotherapy-course-header span {
        font-size: 1.2rem;
        /* Make title slightly smaller on mobile */
        z-index: 2;
        /* Keep above the orange triangle */
      }

      .dept-physiotherapy-view-btn {
        width: 100%;
        /* Make button full width for easy tapping */
        text-align: center;
        box-sizing: border-box;
      }

      .dept-physiotherapy-course-body {
        width: 100%;
        /* Remove the 95% inset on mobile so it doesn't look too narrow */
        box-sizing: border-box;
      }

      .dept-physiotherapy-prospects-content {
        padding: 25px 20px;
      }


      .dept-physiotherapy-subheading {
        font-size: 1.3rem;
      }
    }

    /* ================= CAREER PROSPECTS SECTION ================= */
    .dept-physiotherapy-prospects-section {
      margin-top: 3vw;
      width: 100%;
      animation: fadeInUp 1s ease-out 0.5s both;
    }

    .dept-physiotherapy-prospects-content {
      background: #fff;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
      max-width: 1200px;
      margin: 0 auto;
      border-top: 4px solid var(--accent);
      /* Adds a nice touch of orange at the top */
    }

    .dept-physiotherapy-intro-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 30px;
      font-weight: 400;
    }

    .dept-physiotherapy-subheading {
      font-family: 'Times New Roman', Times, serif;
      color: var(--primary);
      font-size: 1.5rem;
      margin-top: 35px;
      margin-bottom: 15px;
    }

    .dept-physiotherapy-list {
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
      padding-left: 25px;
      /* Indents the numbers nicely */
      margin: 0;
    }

    .dept-physiotherapy-list li {
      margin-bottom: 12px;
    }

    .dept-physiotherapy-list li::marker {
      color: var(--primary);
      font-weight: bold;
    }

    /* ================= SYLLABUS ACCORDION SECTION ================= */
    .dept-physiotherapy-accordion-section {
      margin-top: 3vw;
      width: 100%;
      animation: fadeInUp 1s ease-out 0.6s both;
    }

    .dept-physiotherapy-accordion-wrapper {
      max-width: 1300px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .dept-physiotherapy-accordion-item {
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
      background: #fff;
      overflow: hidden;
    }

    .dept-physiotherapy-accordion-header {
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

    .dept-physiotherapy-accordion-header-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .dept-physiotherapy-accordion-header-left i {
      font-size: 1.3rem;
    }

    .dept-physiotherapy-chevron {
      transition: transform 0.3s ease;
    }

    /* Accordion Content (Hidden by default) */
    .dept-physiotherapy-accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease-in-out;
      background: #fdfdfd;
    }

    /* Active State for Accordion */
    .dept-physiotherapy-accordion-item.active .dept-physiotherapy-accordion-content {
      /* Max-height is handled by JS for smooth animation */
    }

    .dept-physiotherapy-accordion-item.active .dept-physiotherapy-accordion-header {
      border-radius: 8px 8px 0 0;
      border-bottom: 3px solid rgba(255, 255, 255, 0.2);
    }

    .dept-physiotherapy-accordion-item.active .dept-physiotherapy-chevron {
      transform: rotate(180deg);
    }

    /* Syllabus Links Inside Accordion */
    .dept-physiotherapy-syllabus-list {
      padding: 15px 25px;
      display: flex;
      flex-direction: column;
    }

    .dept-physiotherapy-syllabus-link {
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

    .dept-physiotherapy-syllabus-link:last-child {
      border-bottom: none;
    }

    .dept-physiotherapy-syllabus-link-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .dept-physiotherapy-syllabus-link-left i {
      color: var(--text-muted);
    }

    .dept-physiotherapy-syllabus-link:hover {
      color: var(--accent);
      transform: translateX(5px);
    }

    .dept-physiotherapy-syllabus-link:hover .dept-physiotherapy-syllabus-link-left i {
      color: var(--accent);
    }

    .dept-physiotherapy-download-icon {
      color: var(--accent);
      font-size: 1.2rem;
    }

    /* ================= OUR LAB SECTION ================= */

    .dept-physiotherapy-lab-section {
      width: 100%;
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out 0.7s both;
    }

    /* New 1300px Wrapper */
    .dept-physiotherapy-lab-container {
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

    .dept-physiotherapy-lab-heading {
      font-size: clamp(1.2rem, 2.5vw, 2rem);

    }

    /* Intro Text */
    .dept-physiotherapy-lab-intro {
      font-size: 1.15rem;
      line-height: 1.8;
      color: var(--text-muted);
      max-width: 1200px;
      margin: 0 auto 0vw auto;
      font-weight: 400;
      text-align: justify;
    }



    /* Gallery (Now spans 100% of the 1300px container minus padding) */
    .dept-physiotherapy-lab-gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 20px;
      width: 100%;
    }

    .dept-physiotherapy-lab-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      aspect-ratio: 5 / 3;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
      transition: var(--transition);
    }

    .dept-physiotherapy-lab-img:hover {
      transform: scale(1.03);
      box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
    }

    .dept-physiotherapy-explore-btn {
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

    .dept-physiotherapy-explore-btn:hover {
      background: var(--accent-hover);
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
    }

    /* ================= LAB RESPONSIVE FIXES ================= */
    @media (max-width: 960px) {
      .dept-physiotherapy-lab-features {
        flex-direction: column;
      }
    }

    @media (max-width: 768px) {
      .dept-physiotherapy-lab-gallery {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        gap: 15px;
      }
    }

    @media (max-width: 480px) {
      .dept-physiotherapy-lab-gallery {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 1fr);
        gap: 10px;
      }
    }

    /* Custom Bullet List for Vision/Mission */
    .dept-physiotherapy-bullet-list {
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
      padding-left: 25px;
      margin: 0;
      list-style-type: none;
      /* Removes default dots */
    }

    .dept-physiotherapy-bullet-list li {
      margin-bottom: 12px;
      position: relative;
    }

    /* Uses FontAwesome checkmark for bullets */
    .dept-physiotherapy-bullet-list li::before {
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
    .dept-physiotherapy-events-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-physiotherapy-events-box {
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
    .dept-physiotherapy-events-track {
      display: flex;
      flex-direction: column;
      animation: scrollEvents 80s linear infinite;
    }

    .dept-physiotherapy-events-box:hover .dept-physiotherapy-events-track {
      animation-play-state: paused;
    }

    /* Event Item */
    .dept-physiotherapy-event-item {
      padding: 18px 25px;
      border-bottom: 1px solid #eee;
      font-size: 1.05rem;
      color: var(--primary);
      line-height: 1.6;
    }

    /* Button */
    .dept-physiotherapy-events-btn {
      background: var(--primary);
      color: #fff;
      padding: 12px 28px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
    }

    .dept-physiotherapy-events-btn:hover {
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
    .dept-physiotherapy-table-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* SINGLE COLUMN LAYOUT */
    .dept-physiotherapy-table-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 1300px;
      margin: 0 auto;
    }

    /* ACCORDION CARD */
    .dept-physiotherapy-table-acc {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
      transition: 0.3s ease;
    }

    /* HEADER */
    .dept-physiotherapy-table-header {
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
    .dept-physiotherapy-table-header i {
      transition: 0.3s;
    }

    /* CONTENT */
    .dept-physiotherapy-table-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
      background: #fff;
    }

    /* ACTIVE */
    .dept-physiotherapy-table-acc.active .dept-physiotherapy-table-content {
      padding: 20px;
    }

    .dept-physiotherapy-table-acc.active .dept-physiotherapy-table-header i {
      transform: rotate(180deg);
    }

    /* TABLE */
    .dept-physiotherapy-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.95rem;
    }

    .dept-physiotherapy-table th {
      background: #142a47;
      color: #fff;
      padding: 12px;
      text-align: left;
    }

    .dept-physiotherapy-table td {
      padding: 12px;
      border: 1px solid #eee;
      background: #fafafa;
      color: #333;
    }

    /* DISABLED */
    .dept-physiotherapy-table-acc.disabled {
      opacity: 0.6;
      pointer-events: none;
    }

    .dept-physiotherapy-table-responsive {
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .dept-physiotherapy-table {
      min-width: 700px;
      border-collapse: collapse;
    }

    .dept-physiotherapy-table td,
    .dept-physiotherapy-table th {
      white-space: nowrap;
    }

    /* ================= EVENT GALLERY (INDIVIDUAL MARQUEE) ================= */
    .dept-physiotherapy-event-gallery-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-physiotherapy-event-card {
      max-width: 1300px;
      margin: 0 auto 40px;
    }

    .dept-physiotherapy-event-title {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--primary);
    }

    /* MARQUEE BOX */
    .dept-physiotherapy-marquee {
      overflow: hidden;
      border-radius: 12px;
      /* background: #fff; */
      box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
      /* border-top: 4px solid var(--accent); */
    }

    /* TRACK */
    .dept-physiotherapy-marquee-track {
      display: flex;
      gap: 20px;
      width: max-content;
      animation: marqueeScroll 80s linear infinite;
    }

    /* PAUSE ON HOVER */
    .dept-physiotherapy-marquee:hover .dept-physiotherapy-marquee-track {
      animation-play-state: paused;
    }

    /* IMAGE */
    .dept-physiotherapy-marquee img {
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
      .dept-physiotherapy-marquee img {
        height: 160px;
      }
    }

    /* ================= ACHIEVEMENT SECTION ================= */
    .dept-physiotherapy-achievement-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* Tabs */
    .dept-physiotherapy-achievement-tabs {
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
    .dept-physiotherapy-achievement-content {
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
    .dept-physiotherapy-recognition-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-physiotherapy-recognition-container {
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
    .dept-physiotherapy-recognition-img {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .dept-physiotherapy-recognition-img img {
      width: 100%;
      max-width: 300px;
      object-fit: contain;
    }

    /* RIGHT CONTENT */
    .dept-physiotherapy-recognition-content {
      flex: 2;
    }

    .dept-physiotherapy-recognition-content p {
      font-size: 1.05rem;
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      text-align: justify;
    }

    /* BUTTON */
    .dept-physiotherapy-recognition-btn {
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

    .dept-physiotherapy-recognition-btn i {
      font-size: 1.2rem;
    }

    .dept-physiotherapy-recognition-btn:hover {
      background: var(--accent-hover);
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(242, 140, 40, 0.4);
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 960px) {
      .dept-physiotherapy-recognition-container {
        flex-direction: column;
        text-align: center;
        gap: 30px;
        padding: 30px 20px;
      }

      .dept-physiotherapy-recognition-content p {
        text-align: center;
      }

      .dept-physiotherapy-recognition-btn {
        justify-content: center;
      }
    }

    .dept-physiotherapy-lab-list {
      text-align: left;
      /* ensures left alignment */
      padding-left: 20px;
      /* proper spacing for numbers */
      margin-top: 10px;
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
    }

    .dept-physiotherapy-lab-list li {
      margin-bottom: 8px;
      line-height: 1.8;
      /* fix readability */
    }
  </style>

    <div class="dept-physiotherapy-floating">
    <a href="#dept-home" class="dept-physiotherapy-float-item">
      <i class="fa fa-home"></i>
      <span class="dept-physiotherapy-float-text">Home</span>
    </a>

    <a href="#dept-about" class="dept-physiotherapy-float-item">
      <i class="fa fa-book"></i>
      <span class="dept-physiotherapy-float-text">About</span>
    </a>

    <a href="#dept-vision" class="dept-physiotherapy-float-item">
      <i class="fa fa-bullseye"></i>
      <span class="dept-physiotherapy-float-text">Vision & Mission</span>
    </a>

    <a href="#dept-courses" class="dept-physiotherapy-float-item">
      <i class="fa fa-graduation-cap"></i>
      <span class="dept-physiotherapy-float-text">Courses</span>
    </a>

    <a href="#dept-syllabus" class="dept-physiotherapy-float-item">
      <i class="fa fa-file-text"></i>
      <span class="dept-physiotherapy-float-text">Syllabus</span>
    </a>

    <a href="#dept-events" class="dept-physiotherapy-float-item">
      <i class="fa fa-calendar"></i>
      <span class="dept-physiotherapy-float-text">Events</span>
    </a>

    <a href="#dept-committee" class="dept-physiotherapy-float-item">
      <i class="fa fa-users"></i>
      <span class="dept-physiotherapy-float-text">Committee</span>
    </a>

    <a href="#dept-lab" class="dept-physiotherapy-float-item">
      <i class="fa fa-flask"></i>
      <span class="dept-physiotherapy-float-text">Lab</span>
    </a>

  </div>

  <a href="https://admissions.rgu.ac/" class="dept-physiotherapy-admission-btn">
    Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
  </a>

  <div class="dept-physiotherapy-wrapper">

    <div class="dept-physiotherapy-heading" id="dept-home">
      <h1>Department of <span>Physiotherapy</span></h1>
      <h2>Royal School of Medical & Allied Sciences (RSMAS)</h2>
    </div>

    <div class="dept-physiotherapy-hero" id="dept-about">

      <div class="dept-physiotherapy-img">
        <img src="mobile-assets/rsmas-new-dept/physiotherapy/headimg.png" alt="Architecture">
      </div>

      <div class="dept-physiotherapy-content">

        <h3>About <span>Department</span></h3>

        <p>
          The Department of Physiotherapy, Royal School of Medical and Allied Sciences was established under The Assam
          Royal Global University in the year 2019. From time of its inception the department has focused on well versed
          teaching learning methods which will aid to ensure that students are exposed to standardised methods of
          theoretical learning and practical training. The well equipped laboratory in the university and attached
          Physiotherapy Out patient department ensures a good learning experience along with diverse clinical training
          in some of the reputed healthcare institutes of the state and the country. The faculty members of the
          Department are well qualified and highly experienced in their specialties and also certified with advanced
          treatment techniques.
        </p>



      </div>

    </div>

    <!-- vision mission  -->
    <div class="dept-physiotherapy-prospects-section" id="dept-vision">
      <h2 class="dept-physiotherapy-section-title">Vision <span>& Mission</span></h2>

      <div class="dept-physiotherapy-prospects-content">

        <h3 class="dept-physiotherapy-subheading" style="margin-top: 0;">Our Vision</h3>
        <ul class="dept-physiotherapy-bullet-list">
          <li>
            To inculcate professional competence among students through education by adhering to standardized methods of
            assessment and patient care creating physiotherapists who deliver the best services focusing the various age
            groups at different levels of society.
          </li>

        </ul>

        <h3 class="dept-physiotherapy-subheading">Our Mission</h3>
        <ul class="dept-physiotherapy-bullet-list">
          <li>
            To be a centre of excellence in healthcare education, clinical training, research and innovation.
          </li>
          <li>
            To achieve the objective that enhances competencies in clinical reasoning to deliver the best healthcare
            service to the community with core values of ethical conduct.
          </li>
          <li>
            To produce healthcare professionals with exceptional clinical skills, leadership qualities to serve humanity
            with compassionate care for enhancing quality of life.
          </li>

        </ul>

      </div>
    </div>

    <div class="dept-physiotherapy-courses-section" id="dept-courses">
      <h2 class="dept-physiotherapy-section-title">Courses <span>Offered</span></h2>

      <div class="dept-physiotherapy-course-list" id="course-list-container">
      </div>
    </div>

    <!-- <div class="dept-physiotherapy-prospects-section" id="dept-prospects">
      <h2 class="dept-physiotherapy-section-title">Career <span>Prospects</span></h2>

      <div class="dept-physiotherapy-prospects-content">
        <p class="dept-physiotherapy-intro-text">
          The prospects after a B.Sc. in Civil are diverse and promising, in regard to the growing importance of
          sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
          strong foundation in agricultural sciences, preparing them for following careers opportunities:
        </p>

        <h3 class="dept-physiotherapy-subheading">Higher Education Opportunities</h3>
        <ol class="dept-physiotherapy-list">
          <li>M.Sc. in Civil (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
          </li>
          <li>MBA in Agribusiness Management</li>
          <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
          <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
            disciplines</li>
        </ol>

        <h3 class="dept-physiotherapy-subheading">Government Sector Jobs</h3>
        <ol class="dept-physiotherapy-list">
          <li>Agricultural Officer / Civil Development Officer (ADO)</li>
          <li>IBPS AFO (Agricultural Field Officer)</li>
          <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
          <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
          <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
        </ol>

        <h3 class="dept-physiotherapy-subheading">Private Sector Careers</h3>
        <ol class="dept-physiotherapy-list">
          <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
          <li>Food Processing Industries</li>
          <li>Agri-Tech Startups – technology-based agricultural solutions</li>
          <li>Banking &amp; Insurance – Civil officers in banks or crop insurance companies</li>
          <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
        </ol>

        <h3 class="dept-physiotherapy-subheading">Research & Teaching</h3>
        <ol class="dept-physiotherapy-list">
          <li>Research Assistant / Scientist – in public and private research institutions</li>
          <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
          <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
        </ol>

        <h3 class="dept-physiotherapy-subheading">Entrepreneurship & Startups</h3>
        <ol class="dept-physiotherapy-list">
          <li>Organic farming, dairy, poultry, aquaculture</li>
          <li>Agri-tourism, greenhouse farming, vertical farming</li>
          <li>Processing units for spices, cereals, or fruits</li>
          <li>Agri-consultancy or freelance advisory services</li>
        </ol>

        <h3 class="dept-physiotherapy-subheading">Jobs Abroad</h3>
        <ol class="dept-physiotherapy-list">
          <li>Agricultural research, farm management, and food security projects</li>
          <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
          <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
        </ol>

        <h3 class="dept-physiotherapy-subheading">Key Skills That Boost Career</h3>
        <ol class="dept-physiotherapy-list">
          <li>Practical knowledge of farming tools and technologies</li>
          <li>Communication and management skills (especially in extension or agribusiness)</li>
          <li>Computer literacy – GIS, remote sensing, and data analytics in Civil</li>
          <li>Language skills and report writing</li>
        </ol>

      </div>
    </div> -->

    <div class="dept-physiotherapy-accordion-section" id="dept-syllabus">
      <h2 class="dept-physiotherapy-section-title">Courses Structure <span>and Syllabus</span></h2>

      <div class="dept-physiotherapy-accordion-wrapper">

        <div class="dept-physiotherapy-accordion-item active">
          <div class="dept-physiotherapy-accordion-header">
            <div class="dept-physiotherapy-accordion-header-left">
              <i class="fa-solid fa-graduation-cap"></i>
              <span>Post Graduate</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-physiotherapy-chevron"></i>
          </div>

          <div class="dept-physiotherapy-accordion-content">
            <div class="dept-physiotherapy-syllabus-list">
              <a target="_blank"
                href="https://www.rgu.ac/mobile-assets/department-all/rsmas/physiotherapy/updated-syllabus/MPT%20SYLLABUS-2025.pdf"
                class="dept-physiotherapy-syllabus-link" download>
                <div class="dept-physiotherapy-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Structure of Syllabus -- MPT
                </div>
                <i class="fa-solid fa-download dept-physiotherapy-download-icon"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="dept-physiotherapy-accordion-item">
          <div class="dept-physiotherapy-accordion-header">
            <div class="dept-physiotherapy-accordion-header-left">
              <i class="fa-solid fa-graduation-cap"></i>
              <span>Under Graduate</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-physiotherapy-chevron"></i>
          </div>

          <div class="dept-physiotherapy-accordion-content">
            <div class="dept-physiotherapy-syllabus-list">
              <a target="_blank"
                href="https://www.rgu.ac/mobile-assets/department-all/rsmas/physiotherapy/updated-syllabus/BPT_Syllabus_2025-26.pdf"
                class="dept-physiotherapy-syllabus-link" download>
                <div class="dept-physiotherapy-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Structure of Syllabus -- BPT
                </div>
                <i class="fa-solid fa-download dept-physiotherapy-download-icon"></i>
              </a>
              <a target="_blank"
                href="https://www.rgu.ac/mobile-assets/department-all/rsmas/physiotherapy/updated-syllabus/BPT_Syllabus_2025-26.pdf"
                class="dept-physiotherapy-syllabus-link" download>
                <div class="dept-physiotherapy-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Detailed Syllabus -- BPT
                </div>
                <i class="fa-solid fa-download dept-physiotherapy-download-icon"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="dept-physiotherapy-accordion-item">
          <div class="dept-physiotherapy-accordion-header">
            <div class="dept-physiotherapy-accordion-header-left">
              <i class="fa-solid fa-book"></i>
              <span>Doctoral Programme</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-physiotherapy-chevron"></i>
          </div>

          <div class="dept-physiotherapy-accordion-content">
            <div class="dept-physiotherapy-syllabus-list">
              <a href="https://www.rgu.ac/phd" class="dept-physiotherapy-syllabus-link" download>
                <div class="dept-physiotherapy-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Click to View
                </div>

              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ================= RECOGNITION SECTION ================= -->
    <section class="dept-physiotherapy-recognition-section">

      <div class="dept-physiotherapy-recognition-container">

        <!-- LEFT LOGO -->
        <div class="dept-physiotherapy-recognition-img">
          <img src="https://www.rgu.ac/mobile-assets/ads/aip-logo.png" alt="IAP Logo">
        </div>

        <!-- RIGHT CONTENT -->
        <div class="dept-physiotherapy-recognition-content">

          <p>
            The Assam Royal Global University has been awarded provisional institutional membership by the Indian
            Association of Physiotherapists (IAP) for the period 2025–2027. This recognition affirms that the University
            meets the prescribed academic and training standards, enabling its Bachelor of Physiotherapy graduates to be
            eligible for IAP membership as per prevailing norms. The certification reflects the institution’s commitment
            to quality education and professional excellence in physiotherapy.
          </p>

          <a href="https://www.rgu.ac/mobile-assets/ads/AIP.jpeg" class="dept-physiotherapy-recognition-btn" download>
            <i class="fa-solid fa-file-pdf"></i>
            Click Here to View Approval Letter
          </a>

        </div>

      </div>

    </section>

    <div class="dept-physiotherapy-events-section" id="dept-events">

      <h2 class="dept-physiotherapy-section-title">Events</h2>

      <div class="dept-physiotherapy-events-box">
        <div class="dept-physiotherapy-events-track" id="events-track"></div>
      </div>

      <!-- <div style="text-align:center; margin-top:30px;">
        <a href="#" class="dept-physiotherapy-events-btn">View All</a>
      </div> -->

    </div>

    <!-- ================= ACHIEVEMENT SECTION ================= -->
    <div class="dept-physiotherapy-achievement-section" id="dept-achievement">

      <h2 class="dept-physiotherapy-section-title">
        Achievements
      </h2>

      <!-- Tabs -->
      <div class="dept-physiotherapy-achievement-tabs">
        <button class="dept-achievement-tab active" data-tab="student">
          Student Achievements
        </button>
        <button class="dept-achievement-tab" data-tab="faculty">
          Faculty Achievements
        </button>
      </div>

      <!-- Content -->
      <div class="dept-physiotherapy-achievement-content">

        <!-- STUDENT TAB -->
        <div class="dept-achievement-pane active" id="student">

          <div class="dept-physiotherapy-table-responsive">
            <table class="dept-physiotherapy-table">
              <thead>
                <tr>
                  <!-- YOU WILL ADD HEADERS -->
                  <th>Sl. No.</th>
                  <th>Date of the Event</th>
                  <th>Name of the student</th>
                  <th>Level of Achievement <br> (at interuniversity/state/national/international)</th>
                  <th>Details of Sports/Cultural activity</th>
                  <th>Position secured</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>2023</td>
                  <td>Palki Tamuli Phukan</td>
                  <td>Inter University</td>
                  <td>Bollywood Solo Singing – ETERNIA Fest, AIIMS Guwahati</td>
                  <td>2nd</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2023</td>
                  <td>Palki Tamuli Phukan</td>
                  <td>Inter University</td>
                  <td>Western Solo Singing – ETERNIA Fest, AIIMS Guwahati</td>
                  <td>1st</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>03–05 Nov 2023</td>
                  <td>Palki Tamuli Phukan</td>
                  <td>State Level</td>
                  <td>Powerlifting & Bodybuilding Championship</td>
                  <td>3rd</td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>27–30 Nov 2024</td>
                  <td>Mir Asrif Zaman</td>
                  <td>Inter University</td>
                  <td>Badminton (Boys Doubles)</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>07 Mar 2025</td>
                  <td>Sahin Khatun</td>
                  <td>Inter University</td>
                  <td>Skit</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>Feb 2025</td>
                  <td>Shweta Prajapati</td>
                  <td>Inter University</td>
                  <td>Pool (Women)</td>
                  <td>2nd</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Feb 2025</td>
                  <td>Shweta Prajapati</td>
                  <td>Inter University</td>
                  <td>Chess (Women)</td>
                  <td>3rd</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Feb 2025</td>
                  <td>Shweta Prajapati</td>
                  <td>Inter University</td>
                  <td>Futsal (Women)</td>
                  <td>3rd</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Feb 2025</td>
                  <td>Shweta Prajapati</td>
                  <td>Inter University</td>
                  <td>Collage Competition</td>
                  <td>3rd</td>
                </tr>

                <tr>
                  <td>10</td>
                  <td>Nov 2025</td>
                  <td>Shweta Prajapati</td>
                  <td>8th Assam Physiocon</td>
                  <td>Poster Presentation</td>
                  <td>2nd</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Nov 2025</td>
                  <td>Shweta Prajapati</td>
                  <td>8th Assam Physiocon</td>
                  <td>Rangoli</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>12</td>
                  <td>Nov 2025</td>
                  <td>Boidurjya Moni Borah</td>
                  <td>8th Assam Physiocon</td>
                  <td>Poster Presentation (PG Category)</td>
                  <td>2nd</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Nov 2025</td>
                  <td>Boidurjya Moni Borah</td>
                  <td>8th Assam Physiocon</td>
                  <td>Paper Presentation (PG Category)</td>
                  <td>3rd</td>
                </tr>

                <tr>
                  <td>14</td>
                  <td>30 Oct–02 Nov 2025</td>
                  <td>Suja Daimary</td>
                  <td>IIT Guwahati</td>
                  <td>Football</td>
                  <td>1st</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>08 Jun 2025</td>
                  <td>Suja Daimary</td>
                  <td>AIIMS Guwahati</td>
                  <td>Discus Throw</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>16</td>
                  <td>Nov 2025</td>
                  <td>Parthiv Kar</td>
                  <td>8th Assam Physiocon</td>
                  <td>Poster Presentation</td>
                  <td>2nd</td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Nov 2025</td>
                  <td>Sahin Khatun</td>
                  <td>8th Assam Physiocon</td>
                  <td>Poster Presentation</td>
                  <td>2nd</td>
                </tr>

                <tr>
                  <td>18</td>
                  <td>Feb 2025</td>
                  <td>Shweta Dey</td>
                  <td>Inter University</td>
                  <td>Folk/Patriotic Music</td>
                  <td>3rd</td>
                </tr>

                <tr>
                  <td>19</td>
                  <td>Sep 2025</td>
                  <td>Ayangla O</td>
                  <td>Inter University</td>
                  <td>Basketball</td>
                  <td>2nd</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>Oct 2025</td>
                  <td>Ayangla O</td>
                  <td>IIT Guwahati</td>
                  <td>Basketball</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>21</td>
                  <td>Sep 2025</td>
                  <td>Visinuo Lucy Metha</td>
                  <td>Inter University</td>
                  <td>Basketball</td>
                  <td>1st</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>Feb 2026</td>
                  <td>Visinuo Lucy Metha</td>
                  <td>Inter University</td>
                  <td>Basketball</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>23</td>
                  <td>Oct 2025</td>
                  <td>Hingpa Pokvi</td>
                  <td>Inter University</td>
                  <td>Football</td>
                  <td>1st</td>
                </tr>
                <tr>
                  <td>24</td>
                  <td>Feb 2025</td>
                  <td>Aditi Kalita</td>
                  <td>Inter University</td>
                  <td>Essay & Short Story Writing</td>
                  <td>2nd</td>
                </tr>

                <tr>
                  <td>25</td>
                  <td>Feb 2026</td>
                  <td>Hingpa Pokvi</td>
                  <td>Khelo Bharat (GU)</td>
                  <td>Football</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>26</td>
                  <td>Feb 2026</td>
                  <td>Shweta Prajapati</td>
                  <td>RSSDI 2026</td>
                  <td>Poster Presentation</td>
                  <td>Travel Grant</td>
                </tr>

                <tr>
                  <td>27</td>
                  <td>Feb 2026</td>
                  <td>Ayangla O</td>
                  <td>Inter University</td>
                  <td>Basketball</td>
                  <td>1st</td>
                </tr>

                <tr>
                  <td>28</td>
                  <td>Mar 2026</td>
                  <td>Hingpa Pokvi</td>
                  <td>NLUJA Abhiveera</td>
                  <td>Football</td>
                  <td>1st</td>
                </tr>
                <tr>
                  <td>29</td>
                  <td>Mar 2026</td>
                  <td>Hingpa Pokvi</td>
                  <td>Inter University</td>
                  <td>Futsal</td>
                  <td>1st</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

        <!-- FACULTY TAB -->
        <div class="dept-achievement-pane" id="faculty">

          <div class="dept-physiotherapy-table-responsive">
            <table class="dept-physiotherapy-table">
              <thead>
                <tr>
                  <th>Sl. No.</th>
                  <th>Faculty Awards and Achievements</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Guest Lecture at Sikkim Manipal University, 2023 (Dr. Lopa Das PT)</td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Best Academician award at Osteomanual Summit, 2023 (Dr. Lopa Das PT)</td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Best Scientific Paper Presenter at the Osteomanual Summit, 2023 (Dr. Sonia Lakhotia PT)</td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Awarded first prize in scientific paper presentation at 17th IAP State Conference held on December
                    2023 in 2023 in Kolkata, West Bengal (Ms. Madhumita Das)</td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>Speaker At North-East Physiotherapy Conference, 2024 (Dr. Lopa Das PT)</td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>Awarded 3rd Prize in scientific paper presentation at 2nd National Conference of IAP Women cell
                    held on September 2024 in Delhi.</td>
                </tr>

                <tr>
                  <td>7</td>
                  <td>Expert Speaker in Physiofest 2025-15th Physiotherapy Summit, An INTERNATIONAL Conference held at
                    RK University, Gujarat, India.</td>
                </tr>

                <tr>
                  <td>8</td>
                  <td>Chikitsa Ratan Award at All India Institute of Medical Sciences (AIIMS) New Delhi at the National
                    Conference on Advance Healthcare & Rehabilitation Sciences (NCAHRS-AIIMS) organised by the Dept of
                    Geriatrics, AIIMS New Delhi (Prof. Dr. Abhijit Dutta)</td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>

      </div>

    </div>

    <!-- <div class="dept-physiotherapy-event-gallery-section">

      <h2 class="dept-physiotherapy-section-title">Event <span>Highlights</span></h2>

      <div id="event-gallery-container"></div>

    </div> -->

    <div class="dept-physiotherapy-table-section" id="dept-committee">

      <div class="dept-physiotherapy-table-grid" id="table-accordion-container"></div>

    </div>

    <div class="dept-physiotherapy-lab-section" id="dept-lab">

      <div class="dept-physiotherapy-lab-container">

        <h2 class="dept-physiotherapy-section-title">Physiotherapy <span> OPD</span></h2>

        <p class="dept-physiotherapy-lab-intro">
          The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a patient. The
          students through OPD practicals would learn how to treat patients with physical disabilities and injuries in a
          range of settings including hospitals, health centres, private practices and sports clubs under the proper
          guidance of a specialist. The OPD is located in Block-D on the ground floor. 
        </p>

        <ol class="dept-physiotherapy-lab-list">
          <li>
            IFT and IRR lamp therapy: The IFT therapy is used for patients with chronic pain, e.g. low back pain, reduce
            inflammation, and accelerate tissue healing. The Infrared (IRR) radiation in physical therapy acts as a
            superficial heating modality (thermotherapy) to reduce pain, increase blood flow, and accelerate tissue
            repair.
          </li>

          <li>
            Ultrasound therapy: It delivers deep heat and micro-vibrations to soft tissues. Common uses include reducing
            joint stiffness, alleviating chronic pain, increasing localized blood circulation, breaking down scar
            tissue, and treating muscle spasms.
          </li>

          <li>
            Trapezius muscle stretching exercise: Trapezius muscle stretches, such as ear-to-shoulder tilts, upper trap
            stretches, and shoulder blade squeezes, are used to relieve tension headaches, reduce neck stiffness, and
            improve upper body posture.
          </li>

          <li>
            Cupping therapy: It relieves muscle tension, alleviates chronic pain (back, neck, knee), reduces
            inflammation, and improves blood circulation.
          </li>

          <li>
            Goniometer: A goniometer is a portable tool used in rehabilitation to measure joint angles and assess range
            of motion (ROM), identifying limitations caused by injuries or fracture cases.
          </li>

          <li>
            Exterior image of the Physiotherapy OPD.
          </li>
        </ol>


        <!-- <h3 class="dept-physiotherapy-lab-heading">Our Lab Equipments</h3> -->

        <!-- <h2 class="dept-physiotherapy-section-title">Glimpse of <span>our Lab</span></h2> -->

        <div class="dept-physiotherapy-lab-gallery">

          <img src="mobile-assets/rsmas-new-dept/physiotherapy/f.jpg" alt="Lab f" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/a.jpg" alt="Lab a" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/b.jpg" alt="Lab b" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/c.jpg" alt="Lab c" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/d.jpg" alt="Lab d" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/e.jpg" alt="Lab e" class="dept-physiotherapy-lab-img">


          <img src="mobile-assets/rsmas-new-dept/physiotherapy/1.jpg" alt="Lab 1" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/2.JPG" alt="Lab 2" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/3.JPG" alt="Lab 3" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/4.JPG" alt="Lab 4" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/5.JPG" alt="Lab 5" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/6.JPG" alt="Lab 6" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/7.JPG" alt="Lab 7" class="dept-physiotherapy-lab-img">
          <img src="mobile-assets/rsmas-new-dept/physiotherapy/8.JPG" alt="Lab 8" class="dept-physiotherapy-lab-img">

        </div>

        <!-- <button class="dept-physiotherapy-explore-btn">Explore</button> -->
      </div>

    </div>

  </div>

  <script>
  // 1. Define the courses array
  const coursesData = [
    {
      title: "Master of Physiotherapy (MPT)",
      duration: "2 years",
      link: "https://www.rgu.ac/programs-MasterofPhysiotherapyMPT"
    },
    {
      title: "Bachelor of Physiotherapy (BPT)",
      duration: "4 Years + 1 Year internship",
      link: "https://www.rgu.ac/programs-Bachelor-of-Physiotherapy-BPT"
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
        <div class="dept-physiotherapy-course-card">

          <div class="dept-physiotherapy-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-physiotherapy-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-physiotherapy-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
    }
  }
</script>

<script>
  // --- ACCORDION LOGIC ---
  const accordionHeaders = document.querySelectorAll('.dept-physiotherapy-accordion-header');

  // Function to calculate and set the exact height for smooth transitions
  function setAccordionHeights() {
    const activeItems = document.querySelectorAll('.dept-physiotherapy-accordion-item.active');
    activeItems.forEach(item => {
      const content = item.querySelector('.dept-physiotherapy-accordion-content');
      content.style.maxHeight = content.scrollHeight + "px";
    });
  }

  // Initialize the open item on load
  setAccordionHeights();

  accordionHeaders.forEach(header => {
    header.addEventListener('click', function () {
      const currentItem = this.parentElement;
      const currentContent = currentItem.querySelector('.dept-physiotherapy-accordion-content');

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
    "On 26th March 2026, an expert talk was conducted on 'Break the Silence, Understand Epilepsy and Empower Lives' by Dr. Akshay Bhutada.",
    "On 7th November 2025, a workshop on Neurodevelopmental Technique (NDT)/Bobath was conducted by Dr. Prabhat Ranjan.",
    "On 7th November 2025, a workshop on Craniosacral Therapy was conducted by Dr. K. Pearlson.",
    "On 8th–9th September 2025, a two-day hands-on workshop on Parkinson’s Disease and its advanced rehabilitation management was conducted by Dr. Rajeev Agarwal.",
    "On 9th May 2025, a Guest Lecture on 'Burn Rehabilitation' was delivered by Prof. Dr. Seema Rekha Devi.",
    "On 5th May 2025, a Guest Lecture by Dr. Ali Irani on 'Physiotherapy – A Need of the Society' was conducted on the occasion of World Physiotherapy Day.",
    "On 9th April 2025, a Guest Lecture on 'Medico Legal Issues for Health Care Professionals' was delivered by Dr. Thaneshwar Kalita.",
    "On 31st January 2025, a Guest Lecture on 'Role of Physiotherapy in Cancer Rehabilitation' was delivered by Dr. Twist Lahon (PT).",
    "On 9th September 2024, a Guest Lecture on 'Low Back Pain and the role of physiotherapy in its management and prevention' was conducted on World Physiotherapy Day.",
    "On 9th August 2024, a Guest Lecture on 'Physical Fitness' was conducted.",
    "On 23rd July 2024, a workshop on 'Biomechanical Assessment' was conducted by Dr. Biju Chetry.",
    "On 23rd July 2024, a Guest Lecture on 'Career in Physiotherapy – Prospects, Challenges and Essentials' was delivered by Dr. Madhusmita Koch.",
    "On 24th May 2024, a seminar on 'Advanced Sports Nutrition' was conducted.",
    "On 10th April 2024, a seminar on 'Overview of Recent Trends in ACL Injury Rehabilitation' was conducted.",
    "On 29th February 2024, a seminar on 'Basics of ECG and its Interpretation' was conducted.",
    "On 18th October 2023, a seminar on 'Self Examination & Awareness on Breast Health' was conducted.",
    "On 8th August 2023, a seminar on 'Arthritis' was conducted.",
    "On 22nd March 2023, a seminar on 'Introduction to Pelvic Floor Muscles Dysfunction' was conducted.",
    "On 17th February 2023, a seminar on 'Ergonomics – An Overview and its Importance' was conducted.",
    "On 15th February 2023, a Guest Lecture on 'A Digital Hypnotization Ploy and an Introduction to Darknet' was delivered by Mr. Biraj Das.",
    "On 16th September 2022, a Guest Lecture on 'Maintaining Patient Safety & Prevention' was conducted on World Patient Safety Day.",
    "On 8th September 2022, a Guest Lecture on 'Role of Physiotherapy in Osteoarthritis' was conducted on World Physiotherapy Day.",
    "On 5th May 2022, a Guest Lecture on 'Myths and Facts about Asthma' was conducted.",
    "On 4th February 2022, a webinar on 'Cancer Rehabilitation' was conducted on the occasion of World Cancer Day.",
    "On 6th October 2021, a webinar on 'Cerebral Palsy – Essentials of Physiotherapy' was conducted.",
    "On 11th August 2021, a Guest Lecture on 'Interferential Therapy' was conducted.",
    "On 12th August 2021, a Guest Lecture on 'Frozen Shoulder' was delivered by Dr. Mayur Das (PT).",
    "On 13th August 2021, a Guest Lecture on 'Hand Hygiene & Physiology of Respiratory System' was delivered by Dr. Somyata Satpathy Sarma (PT).",
    "On 3rd August 2021, a webinar on 'Oxygen Therapy' was conducted.",
    "On 26th June 2021, a webinar on 'Clinical Analysis of Typical and Pathological Gait' was conducted.",
    "On 18th June 2021, a webinar on 'Hospital Acquired Infection and Antibiotic Resistance' was conducted.",
    "On 12th June 2021, a webinar on 'Foundations in Aquatic Therapy' was conducted.",
    "On 8th June 2021, a webinar on 'Role of Mental Fitness in Physiotherapy' was conducted.",
    "On 29th May 2021, a webinar on 'Spinal Stability and Pilates' was conducted.",
    "On 15th May 2021, a webinar on 'Upper Cross Syndrome' was conducted.",
    "On 5th May 2021, a webinar on 'Understanding Bronchial Asthma – A Consensus Approach' was conducted.",
    "On 12th April 2021, a Guest Lecture on 'Cyriax Concepts' was delivered by Dr. Chatrajit Das (PT).",
    "On 15th December 2019, an educational talk on 'Biomechanics of Shoulder Joint' was delivered by Dr. Urvashi Bhattacharya (PT).",
    "On 14th December 2019, an educational talk on 'Respiratory System' was delivered by Dr. Somyata Satpathy Sarma (PT).",
    "On 5th December 2019, an educational talk on 'Physiology of Blood' was delivered by Dr. Nilakshi Kalita (PT)."
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
        <div class="dept-physiotherapy-event-item">
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
      headers: ["S.No.", "Position In S-BOS", "Name And Designation"],
      rows: [
        ["1", "Convener (Ex-officio) - Head of the Department", "Dr. Madhusmita Koch, Associate Professor & HOD, Department of Physiotherapy, RSMAS"],

        ["2", "Member (Ex-officio) - All Faculty Members", "Dr. Somyata Satpathy Sarma PT, Associate Professor"],
        ["", "", "Dr. Ph. Jeny Sharma PT, Assistant Professor"],
        ["", "", "Dr. Trishna Kakati PT, Assistant Professor"],
        ["", "", "Dr. Ankita Kalita PT, Assistant Professor"],
        ["", "", "Dr. Dikshita Rabha PT, Assistant Professor"],
        ["", "", "Dr. Madhumita Das PT, Assistant Professor"],
        ["", "", "Dr. Kangkana Goswami PT, Assistant Professor"],
        ["", "", "Dr. Subarna Sankar Das PT, Assistant Professor"],

        ["3", "External Expert (Industry)", "Dr. Ankur Jyoti Bora, Physiotherapist, Jorhat Medical College & Hospital"],
        ["4", "External Expert (Academics)", "Dr. Ujjwal Bhattacharya, Dean, Pratiksha Institute of Allied Health"]
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
        <div class="dept-physiotherapy-table-responsive">
          <table class="dept-physiotherapy-table">
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
        <div class="dept-physiotherapy-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-physiotherapy-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-physiotherapy-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
    }).join("");
  }

  /* ACCORDION (single open at a time) */
  document.addEventListener("click", function (e) {
    const header = e.target.closest(".dept-physiotherapy-table-header");
    if (!header) return;

    const item = header.parentElement;
    if (item.classList.contains("disabled")) return;

    const allItems = document.querySelectorAll(".dept-physiotherapy-table-acc");

    allItems.forEach(acc => {
      if (acc !== item) {
        acc.classList.remove("active");
        const content = acc.querySelector(".dept-physiotherapy-table-content");
        const icon = acc.querySelector("i");
        if (content) content.style.maxHeight = 0;
        if (icon) icon.classList.replace("fa-minus", "fa-plus");
      }
    });

    const content = item.querySelector(".dept-physiotherapy-table-content");
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
      <div class="dept-physiotherapy-event-card">

        <div class="dept-physiotherapy-event-title">
          ${event.title}
        </div>

        <div class="dept-physiotherapy-marquee">
          <div class="dept-physiotherapy-marquee-track">
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
