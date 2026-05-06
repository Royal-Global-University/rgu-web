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

    .dept-sociology-wrapper {
      padding: 3vw 5vw;
      max-width: 1400px;
      margin: 0 auto;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* ================= HEADINGS ================= */
    .dept-sociology-heading {
      text-align: center;
      margin-bottom: 5vw;
      animation: fadeInDown 1s ease-out;
    }

    .dept-sociology-heading h1 {
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin: 0;
      line-height: 1.1;
      color: var(--primary);
    }

    .dept-sociology-heading h1 span {
      color: var(--accent);
    }

    .dept-sociology-heading h2 {
      font-size: clamp(1.2rem, 2.5vw, 2rem);
      font-weight: 400;
      margin-top: 15px;
      color: var(--text-muted);
    }

    /* ================= HERO ================= */
    .dept-sociology-hero {
      display: flex;
      align-items: center;
      animation: fadeInUp 1s ease-out 0.2s both;
      justify-content: center;
    }

    /* LEFT IMAGE */
    .dept-sociology-img {
      flex: 1;
      position: relative;
    }

    .dept-sociology-img img {
      width: 80%;
      padding-left: 7%;
      height: auto;
      border-radius: 24px;
      /* box-shadow: 0 20px 40px rgba(44, 74, 122, 0.15); */
      transition: var(--transition);
      object-fit: contain;
    }

    .dept-sociology-img img:hover {
      transform: translateY(-10px);
      box-shadow: 0 30px 50px rgba(44, 74, 122, 0.2);
    }

    /* RIGHT CONTENT */
    .dept-sociology-content {
      flex: 1;
    }

    .dept-sociology-content h3 {
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2rem, 3.5vw, 2.5rem);
      margin-top: 0;
      margin-bottom: 20px;
    }

    .dept-sociology-content h3 span {
      color: var(--accent);
    }

    .dept-sociology-content p {
      font-size: clamp(1rem, 1.2vw, 1.125rem);
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      font-weight: 300;
      text-align: justify;
    }

    .dept-sociology-content ol li {
      font-size: clamp(1rem, 1.2vw, 1.125rem);
      line-height: 0.8;
      color: var(--text-muted);
      margin-bottom: 25px;
      font-weight: 300;
    }

    /* ================= FLOATING MENU (LEFT) ================= */
    .dept-sociology-floating {
      position: fixed;
      left: 30px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 15px;
      z-index: 998;
    }

    .dept-sociology-float-item {
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

    .dept-sociology-float-item i {
      min-width: 56px;
      font-size: 20px;
      text-align: center;
      line-height: 56px;
      color: var(--accent);
      transition: var(--transition);
    }

    .dept-sociology-float-text {
      white-space: nowrap;
      padding-right: 25px;
      font-weight: 500;
      opacity: 0;
      transform: translateX(10px);
      transition: var(--transition);
    }

    .dept-sociology-float-item:hover {
      width: 200px;
      background: var(--accent);
      color: #fff;
    }

    .dept-sociology-float-item:hover i {
      color: #fff;
    }

    .dept-sociology-float-item:hover .dept-sociology-float-text {
      opacity: 1;
      transform: translateX(0);
    }

    /* ================= FLOATING ADMISSION BUTTON (RIGHT) ================= */
    .dept-sociology-admission-btn {
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

    .dept-sociology-admission-btn i {
      font-size: 1.2rem;
    }

    .dept-sociology-admission-btn:hover {
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
      .dept-sociology-wrapper {
        padding-bottom: 160px;
      }

      .dept-sociology-hero {
        flex-direction: column;
        text-align: center;
      }

      .dept-sociology-img img {
        padding-left: 0%;
      }

      .dept-sociology-floating {
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

      .dept-sociology-float-item {
        width: 45px;
        height: 45px;
        box-shadow: none;
        background: transparent;
        border: none;
      }

      .dept-sociology-float-item i {
        min-width: 45px;
        line-height: 45px;
      }

      .dept-sociology-float-item:hover {
        width: 45px;
        background: transparent;
      }

      .dept-sociology-float-item:active i {
        color: var(--primary);
      }

      .dept-sociology-float-text {
        display: none;
      }

      /* 2. Center the Admission Button right above the nav menu */
      .dept-sociology-admission-btn {
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
      .dept-sociology-admission-btn:hover {
        transform: translateX(-50%) translateY(-5px) scale(1.02);
      }
    }

    /* ================= COURSES SECTION ================= */
    .dept-sociology-courses-section {
      margin-top: 3vw;
      width: 100%;
    }

    .dept-sociology-section-title {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: clamp(2rem, 4vw, 2.5rem);
      color: var(--primary);
      margin-bottom: 4vw;
      animation: fadeInUp 1s ease-out 0.3s both;
    }

    .dept-sociology-section-title span {
      color: var(--accent);
    }

    .dept-sociology-course-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
      max-width: 1300px;
      margin: 0 auto;
    }

    .dept-sociology-course-card {
      width: 100%;
      animation: fadeInUp 1s ease-out 0.4s both;
    }

    /* Updated Course Header for Button Layout */
    .dept-sociology-course-header {
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
    .dept-sociology-course-header::after {
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
    .dept-sociology-view-btn {
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

    .dept-sociology-view-btn:hover {
      background: #fff;
      color: var(--primary);
    }

    .dept-sociology-course-body {
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
      .dept-sociology-course-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 20px 15px;
      }

      .dept-sociology-img img {
        padding-left: 0%;
      }

      .dept-sociology-course-header span {
        font-size: 1.2rem;
        /* Make title slightly smaller on mobile */
        z-index: 2;
        /* Keep above the orange triangle */
      }

      .dept-sociology-view-btn {
        width: 100%;
        /* Make button full width for easy tapping */
        text-align: center;
        box-sizing: border-box;
      }

      .dept-sociology-course-body {
        width: 100%;
        /* Remove the 95% inset on mobile so it doesn't look too narrow */
        box-sizing: border-box;
      }

      .dept-sociology-prospects-content {
        padding: 25px 20px;
      }


      .dept-sociology-subheading {
        font-size: 1.3rem;
      }
    }

    /* ================= CAREER PROSPECTS SECTION ================= */
    .dept-sociology-prospects-section {
      margin-top: 3vw;
      width: 100%;
      animation: fadeInUp 1s ease-out 0.5s both;
    }

    .dept-sociology-prospects-content {
      background: #fff;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);
      max-width: 1200px;
      margin: 0 auto;
      border-top: 4px solid var(--accent);
      /* Adds a nice touch of orange at the top */
    }

    .dept-sociology-intro-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-muted);
      margin-bottom: 30px;
      font-weight: 400;
    }

    .dept-sociology-subheading {
      font-family: 'Times New Roman', Times, serif;
      color: var(--primary);
      font-size: 1.5rem;
      margin-top: 35px;
      margin-bottom: 15px;
    }

    .dept-sociology-list {
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
      padding-left: 25px;
      /* Indents the numbers nicely */
      margin: 0;
    }

    .dept-sociology-list li {
      margin-bottom: 12px;
    }

    .dept-sociology-list li::marker {
      color: var(--primary);
      font-weight: bold;
    }

    /* ================= SYLLABUS ACCORDION SECTION ================= */
    .dept-sociology-accordion-section {
      margin-top: 3vw;
      width: 100%;
      animation: fadeInUp 1s ease-out 0.6s both;
    }

    .dept-sociology-accordion-wrapper {
      max-width: 1300px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .dept-sociology-accordion-item {
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(44, 74, 122, 0.08);
      background: #fff;
      overflow: hidden;
    }

    .dept-sociology-accordion-header {
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

    .dept-sociology-accordion-header-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .dept-sociology-accordion-header-left i {
      font-size: 1.3rem;
    }

    .dept-sociology-chevron {
      transition: transform 0.3s ease;
    }

    /* Accordion Content (Hidden by default) */
    .dept-sociology-accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease-in-out;
      background: #fdfdfd;
    }

    /* Active State for Accordion */
    .dept-sociology-accordion-item.active .dept-sociology-accordion-content {
      /* Max-height is handled by JS for smooth animation */
    }

    .dept-sociology-accordion-item.active .dept-sociology-accordion-header {
      border-radius: 8px 8px 0 0;
      border-bottom: 3px solid rgba(255, 255, 255, 0.2);
    }

    .dept-sociology-accordion-item.active .dept-sociology-chevron {
      transform: rotate(180deg);
    }

    /* Syllabus Links Inside Accordion */
    .dept-sociology-syllabus-list {
      padding: 15px 25px;
      display: flex;
      flex-direction: column;
    }

    .dept-sociology-syllabus-link {
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

    .dept-sociology-syllabus-link:last-child {
      border-bottom: none;
    }

    .dept-sociology-syllabus-link-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .dept-sociology-syllabus-link-left i {
      color: var(--text-muted);
    }

    .dept-sociology-syllabus-link:hover {
      color: var(--accent);
      transform: translateX(5px);
    }

    .dept-sociology-syllabus-link:hover .dept-sociology-syllabus-link-left i {
      color: var(--accent);
    }

    .dept-sociology-download-icon {
      color: var(--accent);
      font-size: 1.2rem;
    }

    /* ================= OUR LAB SECTION ================= */

    .dept-sociology-lab-section {
      width: 100%;
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out 0.7s both;
    }

    /* New 1300px Wrapper */
    .dept-sociology-lab-container {
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

    .dept-sociology-lab-heading {
      font-size: clamp(1.2rem, 2.5vw, 2rem);
    }

    /* Intro Text */
    .dept-sociology-lab-intro {
      font-size: 1.15rem;
      line-height: 1.8;
      color: var(--text-muted);
      max-width: 1200px;
      margin: 0 auto 4vw auto;
      font-weight: 400;
      text-align: justify;
    }



    /* Gallery (Now spans 100% of the 1300px container minus padding) */
    .dept-sociology-lab-gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 20px;
      width: 100%;
    }

    .dept-sociology-lab-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      aspect-ratio: 16 / 9;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(44, 74, 122, 0.1);
      transition: var(--transition);
    }

    .dept-sociology-lab-img:hover {
      transform: scale(1.03);
      box-shadow: 0 15px 30px rgba(44, 74, 122, 0.15);
    }

    .dept-sociology-explore-btn {
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

    .dept-sociology-explore-btn:hover {
      background: var(--accent-hover);
      transform: translateY(-3px);
      box-shadow: 0 12px 25px rgba(242, 140, 40, 0.5);
    }

    /* ================= LAB RESPONSIVE FIXES ================= */
    @media (max-width: 960px) {
      .dept-sociology-lab-features {
        flex-direction: column;
      }
    }

    @media (max-width: 768px) {
      .dept-sociology-lab-gallery {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        gap: 15px;
      }
    }

    @media (max-width: 480px) {
      .dept-sociology-lab-gallery {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 1fr);
        gap: 10px;
      }
    }

    /* Custom Bullet List for Vision/Mission */
    .dept-sociology-bullet-list {
      color: var(--text-muted);
      font-size: 1.05rem;
      line-height: 1.8;
      padding-left: 25px;
      margin: 0;
      list-style-type: none;
      /* Removes default dots */
    }

    .dept-sociology-bullet-list li {
      margin-bottom: 12px;
      position: relative;
    }

    /* Uses FontAwesome checkmark for bullets */
    .dept-sociology-bullet-list li::before {
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
    .dept-sociology-events-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    .dept-sociology-events-box {
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
    .dept-sociology-events-track {
      display: flex;
      flex-direction: column;
      animation: scrollEvents 15s linear infinite;
    }

    .dept-sociology-events-box:hover .dept-sociology-events-track {
      animation-play-state: paused;
    }

    /* Event Item */
    .dept-sociology-event-item {
      padding: 18px 25px;
      border-bottom: 1px solid #eee;
      font-size: 1.05rem;
      color: var(--primary);
      line-height: 1.6;
    }

    /* Button */
    .dept-sociology-events-btn {
      background: var(--primary);
      color: #fff;
      padding: 12px 28px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
    }

    .dept-sociology-events-btn:hover {
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
    .dept-sociology-table-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* SINGLE COLUMN LAYOUT */
    .dept-sociology-table-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 1300px;
      margin: 0 auto;
    }

    /* ACCORDION CARD */
    .dept-sociology-table-acc {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(44, 74, 122, 0.08);
      transition: 0.3s ease;
    }

    /* HEADER */
    .dept-sociology-table-header {
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
    .dept-sociology-table-header i {
      transition: 0.3s;
    }

    /* CONTENT */
    .dept-sociology-table-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
      background: #fff;
    }

    /* ACTIVE */
    .dept-sociology-table-acc.active .dept-sociology-table-content {
      padding: 20px;
    }

    .dept-sociology-table-acc.active .dept-sociology-table-header i {
      transform: rotate(180deg);
    }

    /* TABLE */
    .dept-sociology-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.95rem;
    }

    .dept-sociology-table th {
      background: #142a47;
      color: #fff;
      padding: 12px;
      text-align: left;
    }

    .dept-sociology-table td {
      padding: 12px;
      border: 1px solid #eee;
      background: #fafafa;
      color: #333;
    }

    /* DISABLED */
    .dept-sociology-table-acc.disabled {
      opacity: 0.6;
      pointer-events: none;
    }

    .dept-sociology-table-responsive {
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .dept-sociology-table {
      min-width: 700px;
      border-collapse: collapse;
    }

    .dept-sociology-table td,
    .dept-sociology-table th {
      white-space: nowrap;
    }

    /* ===== EVENTS + HIGHLIGHTS LAYOUT (REWRITTEN) ===== */

    .dept-sociology-events-wrapper {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      margin-top: 3vw;
      align-items: stretch;
    }

    /* LEFT EVENTS */
    .dept-sociology-events-section {
      display: flex;
      flex-direction: column;
    }

    /* RIGHT HIGHLIGHTS */
    .dept-sociology-highlights-section {
      display: flex;
      flex-direction: column;
    }

    /* ================= CAROUSEL ================= */

    .dept-sociology-carousel {
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
      .dept-sociology-events-wrapper {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }

    /* Mobile */
    @media (max-width: 600px) {

      .dept-sociology-carousel {
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

    .dept-sociology-explore-btn {
      text-decoration: none !important;
    }

    /* ================= ACHIEVEMENT SECTION ================= */
    .dept-sociology-achievement-section {
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* Tabs */
    .dept-sociology-achievement-tabs {
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
    .dept-sociology-achievement-content {
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

  <style>
    /* =========================================================
   ACADEMIC EXCELLENCE SECTION
   PREFIX: academic-exce-
========================================================= */

    .academic-exce-section {
      width: 100%;
      margin-top: 3vw;
      animation: fadeInUp 1s ease-out;
    }

    /* =========================================================
   GRID CONTROL
========================================================= */

    .academic-exce-grid {

      display: grid;

      /* =========================================
       MANUAL CONTROL
    ========================================= */

      grid-template-columns: 2fr 1fr;

      /*
        EXAMPLES:

        grid-template-columns: 60% 40%;

        grid-template-columns: 2fr 1fr;

        grid-template-columns: 1.4fr 0.6fr;
    */

      gap: 30px;

      max-width: 1300px;

      margin: 0 auto;
    }

    /* =========================================================
   COLUMN
========================================================= */

    .academic-exce-column {

      background: #ffffff;

      border-radius: 18px;

      padding: 22px;

      overflow: hidden;

      box-shadow: 0 10px 30px rgba(44, 74, 122, 0.08);

      border-top: 4px solid var(--accent);

      transition: var(--transition);
    }

    .academic-exce-column:hover {
      transform: translateY(-4px);
    }

    /* =========================================================
   SUBTITLE
========================================================= */

    .academic-exce-subtitle {

      font-family: 'Times New Roman', Times, serif;

      font-size: clamp(1.5rem, 2.2vw, 2rem);

      color: var(--primary);

      text-align: center;

      margin-top: 0;

      margin-bottom: 24px;
    }

    .academic-exce-subtitle span {
      color: var(--accent);
    }

    /* =========================================================
   HORIZONTAL MARQUEE
========================================================= */

    .academic-exce-marquee {

      width: 100%;

      overflow: hidden;

      position: relative;

      border-radius: 16px;
    }

    /* =========================================================
   TRACK
========================================================= */

    .academic-exce-track {

      display: flex;

      gap: 18px;

      width: max-content;

      animation: academicExceHorizontal 60s linear infinite;

      will-change: transform;
    }

    /* STOP IF SINGLE IMAGE */

    .academic-exce-marquee[data-count="1"] .academic-exce-track {

      animation: none;

      width: 100%;

      justify-content: center;
    }

    /* PAUSE ON HOVER */

    .academic-exce-marquee:hover .academic-exce-track {
      animation-play-state: paused;
    }

    /* =========================================================
   IMAGE
   VERTICAL IMAGE
    ========================================================= */

    .academic-exce-track img {

      width: 250px;

      height: 300px;

      object-fit: cover;

      border-radius: 16px;

      flex-shrink: 0;

      display: block;

      box-shadow: 0 10px 24px rgba(44, 74, 122, 0.14);

      transition: var(--transition);
    }

    .academic-exce-track img:hover {

      transform: scale(1.03);
    }

    /* =========================================================
   ANIMATION
========================================================= */

    @keyframes academicExceHorizontal {

      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    /* =========================================================
   RESPONSIVE
========================================================= */

    @media (max-width: 1100px) {

      .academic-exce-grid {

        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {

      .academic-exce-column {
        padding: 18px;
      }

      .academic-exce-track img {

        width: 220px;

        height: 340px;
      }

      .academic-exce-subtitle {
        font-size: 1.3rem;
      }
    }

    @media (max-width: 480px) {

      .academic-exce-column {
        padding: 14px;
      }

      .academic-exce-track {

        gap: 14px;
      }

      .academic-exce-track img {

        width: 180px;

        height: 280px;

        border-radius: 12px;
      }

      .academic-exce-subtitle {

        font-size: 1.15rem;

        margin-bottom: 18px;
      }
    }
  </style>

    <div class="dept-sociology-floating">
    <a href="#dept-home" class="dept-sociology-float-item">
      <i class="fa fa-home"></i>
      <span class="dept-sociology-float-text">Home</span>
    </a>

    <a href="#dept-about" class="dept-sociology-float-item">
      <i class="fa fa-book"></i>
      <span class="dept-sociology-float-text">About</span>
    </a>

    <!-- <a href="#dept-vision" class="dept-sociology-float-item">
      <i class="fa fa-bullseye"></i>
      <span class="dept-sociology-float-text">Vision & Mission</span>
    </a> -->

    <a href="#dept-courses" class="dept-sociology-float-item">
      <i class="fa fa-graduation-cap"></i>
      <span class="dept-sociology-float-text">Courses</span>
    </a>

    <!-- <a href="#dept-prospects" class="dept-sociology-float-item">
      <i class="fa fa-file-text"></i>
      <span class="dept-sociology-float-text">Prospects</span>
    </a> -->

    <a href="#dept-syllabus" class="dept-sociology-float-item">
      <i class="fa fa-file-text"></i>
      <span class="dept-sociology-float-text">Syllabus</span>
    </a>

    <a href="#dept-committee" class="dept-sociology-float-item">
      <i class="fa fa-users"></i>
      <span class="dept-sociology-float-text">Committee</span>
    </a>

    <a href="#dept-academic-exe" class="dept-sociology-float-item">
      <i class="fa fa-trophy"></i>
      <span class="dept-sociology-float-text">Academic Excellence</span>
    </a>

  </div>

  <a href="https://admissions.rgu.ac/" class="dept-sociology-admission-btn">
    Admission Open - Apply Now <i class="fa-solid fa-arrow-right"></i>
  </a>

  <div class="dept-sociology-wrapper">

    <div class="dept-sociology-heading" id="dept-home">
      <h1>Department of <span>Sociology</span></h1>
      <h2>Royal School of Humanities & Social Sciences (RSHSS)</h2>
    </div>

    <div class="dept-sociology-hero" id="dept-about">

      <div class="dept-sociology-img">
        <img src="https://www.rgu.ac/mobile-assets/department-all/dept-sociology/head-img.png"
          alt="Political Science and Public Administration">
      </div>

      <div class="dept-sociology-content">

        <h3>About <span>Department</span></h3>

        <p>
          The faculties of Department of Sociology are from various reputed institution like Jawaharlal Nehru
          University, Tata Institute of Social Sciences, Delhi School of Economics, Indian Institute of Technology and
          these diversities in terms of the institution they belong to is the major strength of the Department. The
          interests and expertise of the faculty cover a broad sociological canvas. The courses therefore offered are
          interdisciplinary in nature. Classical sociological theories, Research Methods, Gender studies, Visual
          Culture, Health and Illness, are a few among the expertise of the department. Another strength of the
          department is to promote experiential learning. Sociology touches upon every aspect of human social life and
          activity. Therefore, to make learning in the department experiential students are encouraged to write projects
          based on field experiences, students are taken for fieldwork to experience reality and draw correlations
          between theory and practice.
        </p>


      </div>

    </div>

    <div class="dept-sociology-prospects-section" id="dept-vision">
      <div class="dept-sociology-prospects-content">
        <h3>The courses offered in the department are interdisciplinary in nature however, some of the important trust
          areas are as follows:</h3>
        <ul class="dept-sociology-bullet-list">
          <li>
            Sociology of Law
          </li>
          <li>
            Sociology of Music
          </li>
          <li>
            Sociology of Religion
          </li>
          <li>
            Sociology of Northeast India
          </li>
          <li>
            Gender Studies
          </li>
          <li>
            Culture Studies
          </li>
          <li>
            Sociology of Environment, etc.
          </li>

        </ul>

        <h3>Future Prospects of the graduate and post graduate</h3>
        <ul class="dept-sociology-bullet-list">
          <li>
            The graduate from the department get the opportunity to engage in teaching at primary and secondary schools.
          </li>
          <li>
            The graduate often get admitted in different reputed institutions like University of Delhi, Tezpur
            University, Delhi School of Economics, South Asia University, TISS, IIT, etc.
          </li>
          <li>
            The post graduate often pursue higher education or get engaged in academia (research and teaching).

          </li>
          <li>
            Students also pursue government civil service or other competitive examinations.
          </li>



        </ul>

      </div>
    </div>

    <div class="dept-sociology-prospects-section" id="dept-vision">
      <h2 class="dept-sociology-section-title">Vision <span>& Mission</span></h2>

      <div class="dept-sociology-prospects-content">

        <h3 class="dept-sociology-subheading" style="margin-top: 0;">Our Vision</h3>
        <ul class="dept-sociology-bullet-list">
          <li>
            To emerge as a sought-after destination for sociological academic excellence not only the
            Northeast region but also in the country and to empower the students with intellectual and
            emotional strength to meet upcoming global challenges.
          </li>

        </ul>

        <h3 class="dept-sociology-subheading">Our Mission</h3>
        <ul class="dept-sociology-bullet-list">
          <li>
            To achieve academic excellence through interdisciplinary collaboration, experimental
            learning and community engagement and advocate for meaningful social change.
          </li>
          <li>
            To foster a culture of collaboration, intellectual curiosity, and ethical engagement, with
            an aim to advance knowledge, promote understanding and inspire action to create a
            more equitable and compassionate world
          </li>
          <li>
            To give back leaders who will be grounded with a commitment to diversity, equity, and
            inclusion and critically examine social issues, challenge assumptions and advocate for
            a more just and equitable society.
          </li>

        </ul>

      </div>
    </div>

    <div class="dept-sociology-courses-section" id="dept-courses">
      <h2 class="dept-sociology-section-title">Courses <span>Offered</span></h2>

      <div class="dept-sociology-course-list" id="course-list-container">
      </div>
    </div>

    <!-- <div class="dept-sociology-prospects-section" id="dept-prospects">
      <h2 class="dept-sociology-section-title">Career <span>Prospects</span></h2>

      <div class="dept-sociology-prospects-content">
        <p class="dept-sociology-intro-text">
          The prospects after a B.Sc. in Physics are diverse and promising, in regard to the growing importance of
          sustainable farming, food security, agribusiness, and research. The programme aims to equip students with a
          strong foundation in agricultural sciences, preparing them for following careers opportunities:
        </p>

        <h3 class="dept-sociology-subheading">Higher Education Opportunities</h3>
        <ol class="dept-sociology-list">
          <li>M.Sc. in Physics (specializations like Agronomy, Horticulture, Plant Breeding, Soil Science, etc.)
          </li>
          <li>MBA in Agribusiness Management</li>
          <li>Postgraduate diplomas in fields like Agri-Extension, Food Technology, or Rural Development</li>
          <li>International degrees: MS/M.Sc. abroad in Agricultural Sciences, Environmental Science, or related
            disciplines</li>
        </ol>

        <h3 class="dept-sociology-subheading">Government Sector Jobs</h3>
        <ol class="dept-sociology-list">
          <li>Agricultural Officer / Physics Development Officer (ADO)</li>
          <li>IBPS AFO (Agricultural Field Officer)</li>
          <li>UPSC/State PSC exams – roles in Indian Forest Services, Rural Development, etc.</li>
          <li>Research roles – through ICAR institutes, CSIR, or state agricultural departments</li>
          <li>Krishi Vigyan Kendras (KVK) – extension and research-based roles</li>
        </ol>

        <h3 class="dept-sociology-subheading">Private Sector Careers</h3>
        <ol class="dept-sociology-list">
          <li>Agri-Input Companies – seeds, fertilizers, pesticides (roles in sales, R&amp;D, quality control)</li>
          <li>Food Processing Industries</li>
          <li>Agri-Tech Startups – technology-based agricultural solutions</li>
          <li>Banking &amp; Insurance – Physics officers in banks or crop insurance companies</li>
          <li>Export &amp; Supply Chain Management – agri-exports and logistics</li>
        </ol>

        <h3 class="dept-sociology-subheading">Research & Teaching</h3>
        <ol class="dept-sociology-list">
          <li>Research Assistant / Scientist – in public and private research institutions</li>
          <li>Lecturer / Professor – after completing postgraduation + NET/Ph.D.</li>
          <li>ICAR / CSIR / DST fellowships – for research positions and Ph.D. programs</li>
        </ol>

        <h3 class="dept-sociology-subheading">Entrepreneurship & Startups</h3>
        <ol class="dept-sociology-list">
          <li>Organic farming, dairy, poultry, aquaculture</li>
          <li>Agri-tourism, greenhouse farming, vertical farming</li>
          <li>Processing units for spices, cereals, or fruits</li>
          <li>Agri-consultancy or freelance advisory services</li>
        </ol>

        <h3 class="dept-sociology-subheading">Jobs Abroad</h3>
        <ol class="dept-sociology-list">
          <li>Agricultural research, farm management, and food security projects</li>
          <li>Opportunities in countries like Canada, Australia, the USA, and Gulf countries</li>
          <li>Roles in international organizations (FAO, CGIAR, World Bank, etc.)</li>
        </ol>

        <h3 class="dept-sociology-subheading">Key Skills That Boost Career</h3>
        <ol class="dept-sociology-list">
          <li>Practical knowledge of farming tools and technologies</li>
          <li>Communication and management skills (especially in extension or agribusiness)</li>
          <li>Computer literacy – GIS, remote sensing, and data analytics in Physics</li>
          <li>Language skills and report writing</li>
        </ol>

      </div>
    </div> -->

    <div class="dept-sociology-accordion-section" id="dept-syllabus">
      <h2 class="dept-sociology-section-title">Courses Structure <span>and Syllabus</span></h2>

      <div class="dept-sociology-accordion-wrapper">


        <div class="dept-sociology-accordion-item active">
          <div class="dept-sociology-accordion-header">
            <div class="dept-sociology-accordion-header-left">
              <i class="fa-solid fa-graduation-cap"></i>
              <span>Under Graduate</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-sociology-chevron"></i>
          </div>

          <div class="dept-sociology-accordion-content">
            <div class="dept-sociology-syllabus-list">

              <a target="_blank"
                href="https://www.rgu.ac/mobile-assets/department-all/dept-sociology/syllabus-pdf/structure-course-sociology-ug.pdf"
                class="dept-sociology-syllabus-link" >
                <div class="dept-sociology-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                   Structure of Syllabus - Sociology
                </div>
                <i class="fa-solid fa-download dept-sociology-download-icon"></i>
              </a>
              <a target="_blank" href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/UG%20Sociology%20Syllabus.pdf"
                class="dept-sociology-syllabus-link" >
                <div class="dept-sociology-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Detailed Syllabus - BA Sociology
                </div>
                <i class="fa-solid fa-download dept-sociology-download-icon"></i>
              </a>


            </div>
          </div>
        </div>


        <div class="dept-sociology-accordion-item">
          <div class="dept-sociology-accordion-header">
            <div class="dept-sociology-accordion-header-left">
              <i class="fa-solid fa-graduation-cap"></i>
              <span>Post Graduate</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-sociology-chevron"></i>
          </div>

          <div class="dept-sociology-accordion-content">
            <div class="dept-sociology-syllabus-list">

              <a target="_blank" href="https://www.rgu.ac/mobile-assets/syllabus/RSHSS/PG%20Sociology%20Syllabus.pdf"
                class="dept-sociology-syllabus-link">
                <div class="dept-sociology-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Detailed Syllabus - MA Sociology
                </div>
                <i class="fa-solid fa-download dept-sociology-download-icon"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="dept-sociology-accordion-item">
          <div class="dept-sociology-accordion-header">
            <div class="dept-sociology-accordion-header-left">
              <i class="fa-solid fa-book"></i>
              <span>Doctoral Programme</span>
            </div>
            <i class="fa-solid fa-chevron-down dept-sociology-chevron"></i>
          </div>

          <div class="dept-sociology-accordion-content">
            <div class="dept-sociology-syllabus-list">
              <a href="https://www.rgu.ac/phd" class="dept-sociology-syllabus-link">
                <div class="dept-sociology-syllabus-link-left">
                  <i class="fa-solid fa-file-lines"></i>
                  Click to View
                </div>

              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="dept-sociology-events-section" id="dept-events">

      <h2 class="dept-sociology-section-title">Events</h2>

      <div class="dept-sociology-events-box">
        <div class="dept-sociology-events-track" id="events-track"></div>
      </div>

      <!-- <div style="text-align:center; margin-top:30px;">
        <a href="#" class="dept-sociology-events-btn">View All</a>
      </div> -->

    </div>

    <!-- ================= ACHIEVEMENT SECTION ================= -->
    <div class="dept-sociology-achievement-section" id="dept-achievement">

      <h2 class="dept-sociology-section-title">
        Achievements
      </h2>

      <!-- Tabs -->
      <div class="dept-sociology-achievement-tabs">
        <button class="dept-achievement-tab active" data-tab="student">
          Faculty Achievement
        </button>


      </div>

      <!-- Content -->
      <div class="dept-sociology-achievement-content">

        <!-- STUDENT TAB -->
        <div class="dept-achievement-pane active" id="student">

          <div class="dept-sociology-table-responsive">
            <table class="dept-sociology-table">
              <thead>
                <tr>
                  <!-- YOU WILL ADD HEADERS -->
                  <th>Sl. No.</th>
                  <th>Name of the faculty</th>
                  <th>Title of the project (Research Grants and Projects)</th>
                  <th>Funding Agency</th>
                  <th>Amount of Fund</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mr. Kadiguang Panmei</td>
                  <td>Fluvial Oralities: Singing the Ahu (Barak) River into Being</td>
                  <td>International Union for Conservation of Nature (IUCN)</td>
                  <td>1500€</td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>Dr. Tripti Das</td>
                  <td>Negotiating Power and Gendered Citizenship: A Sociological Analysis of Political Participation and
                    Grassroots Leadership among SHG Women in Panchayati Raj Institutions in Selected Districts of Lower
                    Assam</td>
                  <td>Indian Counsil of Social Science Research </td>
                  <td>12,00000 INR</td>
                </tr>




              </tbody>
            </table>
          </div>

        </div>



      </div>

    </div>

    <div class="academic-exce-section" id="dept-academic-exe">

      <h2 class="dept-sociology-section-title">
        Academic <span>Excellence</span>
      </h2>

      <div class="academic-exce-grid" id="academicExceGrid">

        <!-- JS RENDER -->

      </div>

    </div>

    <div class="dept-sociology-table-section" id="dept-committee">

      <h2 class="dept-sociology-section-title">Commi<span>ttee</span></h2>

      <div class="dept-sociology-table-grid" id="table-accordion-container"></div>

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
  const coursesData = [
    {
      title: "Master of Arts - Sociology",
      duration: "2 years",
      link: "https://www.rgu.ac/programs-MA-Sociology"
    },
    {
      title: "Bachelor of Arts - Sociology | Honours / Honours with Research",
      duration: "4 years as per NEP",
      link: "https://www.rgu.ac/programs-BA-Sociology"
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
        <div class="dept-sociology-course-card">

          <div class="dept-sociology-course-header">
            <span>${course.title}</span>

            ${course.link && course.link.trim() !== ""
          ? `<a href="${course.link}" class="dept-sociology-view-btn">View details</a>`
          : ``
        }

          </div>

          <div class="dept-sociology-course-body">
            Duration: ${course.duration}
          </div>

        </div>
      `).join('');
    }
  }
</script>

<script>
  // --- ACCORDION LOGIC ---
  const accordionHeaders = document.querySelectorAll('.dept-sociology-accordion-header');

  // Function to calculate and set the exact height for smooth transitions
  function setAccordionHeights() {
    const activeItems = document.querySelectorAll('.dept-sociology-accordion-item.active');
    activeItems.forEach(item => {
      const content = item.querySelector('.dept-sociology-accordion-content');
      content.style.maxHeight = content.scrollHeight + "px";
    });
  }

  // Initialize the open item on load
  setAccordionHeights();

  accordionHeaders.forEach(header => {
    header.addEventListener('click', function () {
      const currentItem = this.parentElement;
      const currentContent = currentItem.querySelector('.dept-sociology-accordion-content');

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
    "National Seminar on “Climate Change and Livelihood in Northeast India: Challenges and opportunities for Food Security, Health, and Social Cohesion”, held on November 14-15, 2025, in collaboration with North Eastern Social Research Centre (NESRC), Guwahati, and Indian Council of Social Science Research North Eastern Regional Centre (ICSSR-NERC), Shillong",
    "Webinar on \"Plagiarism and its Prevention in Academic Writing\"",
    "Webinar on \"Higher Education in India: Challenges and Strategies for Reforms\"",
    "Webinar on \"Fake News in the Time of Pandemic\"",
    "Seminar on \"Ecosystem & Society: Discussion on Social Accountability on Environment\"",
    "Panel Discussion on \"Feminist Epistemology with Ethnographic Evidence\"",
    "Seminar on \"Social Science and Democracy\"",
    "Panel Discussion on \"Multiculturalism and Identity: Highlighting the Centrality of Mother Language\"",
    "Talk on \"Urban Bazaars in the Age of Platform Capitalism\"",
    "Talk on \"Understanding IKS: Literary Criticism in Hindi and Other Languages\"",
    "Talk on \"Why I Do Sociology\"",
    "Talk on \"Technology Society Interface\"",
    "Talk on \"Comparative Health Care Systems and Models of Health Coverage\"",
    "Talk on \"Digital Humanities: Meaning, Importance and Scope\""
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
        <div class="dept-sociology-event-item">
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
      headers: ["S.No.", "Position in S-BoS", "Name and Designation"],
      rows: [
        ["1", "External Member ", "Dr. Shabeena Yasmin Saikia, Associate Professor, Sociology ( Gauhati University)  "],
        ["2", "External Member ", "Nayanjyoti Bhuyan, Bureau Chief at ETV Bharat"],
        ["3", "Chairperson ", "Professor Surajit C. Mukhopadhyay, Dean of RSHSS"],
        ["4", "Internal Member  Faculty Expert- Sociology) ", "Dr. Tripti Das, Assistant Professor in the Department of Sociology"],
        ["5", "Internal Member (Faculty expert- Sociology) ", "Dr. Denim Deka,Assistant Professor in the Department of Sociology"],
        ["6", "Internal Member (Faculty expert- Sociology) ", "Adishree Borgohain, Assistant Professor of Sociology "],
        ["7", "Internal Member (Faculty expert- Sociology) ", "Kadiguang Panmei , Assistant Professor of Sociology"],
        ["8", "Internal Member (Faculty expert- Sociology) ", "Ms. Prajna Borah , Assistant Professor of Sociology"],
        ["9", "Internal Member (Faculty expert- Sociology) ", "Dr. Trishna Mani Thakuria, Assistant Professor of Sociology"],
        ["10", "Internal member (Assistant Professor)  ", "Ms. Lalzikpuii Rajkhowa, Assistant Professor of Sociology"]









      ]
    },
    {
      title: "The Departmental Research Committee (DRC)",
      headers: ["S.No.", "Content", "Name of the Member", "Designation", "Designation in the committee"],
      rows: [
        ["1", "Head of the Department", "Dr. Tripti Das", "Assistant Professor & Coordinator", "Chairperson"],
        ["2", "Two Professors, including the Dean of the School", "Prof. Surajit Chandra Mukhopadhyay", "Professor & Dean, RSHSS", "Member"],
        ["", "", "", "", ""],
        ["3", "Two Associate Professors one of them will be the member secretary", "", "", ""],
        ["", "", "", "", ""],
        ["4", "Two Assistant Professors holding Ph.D. degree", "Dr. Trishna Mani Thakuria", "Assistant Professor", "Member"],
        ["", "", "Dr. Denim Deka", "Assistant Professor", "Member"],
        ["5", "External member nominated by the URC", "Prof. Saswati Choudhury", "Professor & Acting Director, Omeo Kumar Das Institute of Social Change and Development", "Member"],
        ["", "", "", "", ""],
        ["", "", "", "", ""]
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
        <div class="dept-sociology-table-responsive">
          <table class="dept-sociology-table">
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
        <div class="dept-sociology-table-acc ${isEmpty ? 'disabled' : ''}">

          <div class="dept-sociology-table-header">
            <span>${item.title}</span>
            ${isEmpty ? '' : '<i class="fa fa-plus"></i>'}
          </div>

          <div class="dept-sociology-table-content">
            ${createTable(item.headers, item.rows)}
          </div>

        </div>
      `;
    }).join("");
  }

  /* ACCORDION (single open at a time) */
  document.addEventListener("click", function (e) {
    const header = e.target.closest(".dept-sociology-table-header");
    if (!header) return;

    const item = header.parentElement;
    if (item.classList.contains("disabled")) return;

    const allItems = document.querySelectorAll(".dept-sociology-table-acc");

    allItems.forEach(acc => {
      if (acc !== item) {
        acc.classList.remove("active");
        const content = acc.querySelector(".dept-sociology-table-content");
        const icon = acc.querySelector("i");
        if (content) content.style.maxHeight = 0;
        if (icon) icon.classList.replace("fa-minus", "fa-plus");
      }
    });

    const content = item.querySelector(".dept-sociology-table-content");
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
      <div class="dept-sociology-event-card">

        <div class="dept-sociology-event-title">
          ${event.title}
        </div>

        <div class="dept-sociology-marquee">
          <div class="dept-sociology-marquee-track">
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

<script>
  /* =====================================================
     ACADEMIC EXCELLENCE DATA
  ===================================================== */

  const academicExceData = [

    {
      subtitle: "UGC NET",

      images: [
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/1.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/2.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/3.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/4.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/5.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/6.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/7.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/8.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/9.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/10.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/11.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/12.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/13.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/14.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/15.png",
        "mobile-assets/new-dept-sociology/academic-excellance/UGC-Net/16.png"
      ]
    },

    {
      subtitle: "APSC",

      images: [
        "mobile-assets/new-dept-sociology/academic-excellance/APSC/1.png",
      ]
    }

  ];

  /* =====================================================
     RENDER
  ===================================================== */

  const academicExceGrid = document.getElementById("academicExceGrid");

  if (academicExceGrid) {

    academicExceGrid.innerHTML = academicExceData.map((item) => {

      const imageCount = item.images.length;

      /* =============================================
         DUPLICATE ONLY IF MORE THAN 1 IMAGE
      ============================================= */

      const finalImages = imageCount > 1
        ? [...item.images, ...item.images]
        : item.images;

      return `

                <div class="academic-exce-column">

                    <h3 class="academic-exce-subtitle">
                        ${item.subtitle}
                    </h3>

                    <div class="academic-exce-marquee" data-count="${imageCount}">

                        <div class="academic-exce-track">

                            ${finalImages.map(img => `

                                <img src="${img}" alt="${item.subtitle}">

                            `).join("")}

                        </div>

                    </div>

                </div>

            `;

    }).join("");

  }
</script>
@endsection
