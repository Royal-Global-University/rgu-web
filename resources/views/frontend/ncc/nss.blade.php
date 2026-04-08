@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 110px"></div>

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

      <style>
    /* ===== RESET (IMPORTANT - removes border issue) ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    /* ===== HERO SECTION ===== */
    .nss-hero {
      position: relative;
      width: 100%;
      height: 100vh;
      background: url('mobile-assets/nss-new/hero-bg-2.png') center/cover no-repeat;
      display: flex;
      align-items: center;
    }

    /* ===== LEFT GRADIENT ===== */
    .nss-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg,
          rgba(12, 45, 40, 0.9) 0%,
          rgba(12, 45, 40, 0.75) 35%,
          rgba(12, 45, 40, 0.4) 60%,
          rgba(12, 45, 40, 0) 100%);
    }

    /* ===== CONTENT ===== */
    .nss-content {
      position: relative;
      z-index: 2;
      max-width: 650px;
      padding-left: 8%;
      color: #fff;
    }

    /* ===== LOGO ===== */
    .nss-logo img {
      height: 100px;
      background: #fff;
      padding: 6px 12px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    /* ===== TAG ===== */
    .nss-tag {
      display: inline-block;
      background: rgba(255, 122, 69, 0.2);
      color: #ff7a45;
      padding: 8px 18px;
      border-radius: 25px;
      font-size: 14px;
      margin-bottom: 25px;
    }

    /* ===== TITLE ===== */
    .nss-title {
      font-size: 64px;
      font-weight: 700;
      line-height: 1.1;
      margin-bottom: 20px;
    }

    .nss-title span {
      color: #ff7a45;
    }

    /* ===== TEXT ===== */
    .nss-text {
      font-size: 18px;
      line-height: 1.6;
      color: #dcdcdc;
      margin-bottom: 35px;
    }

    /* ===== BUTTONS ===== */
    .nss-buttons {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: #ff7a45;
      color: #fff;
      padding: 14px 26px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background: #e66535;
    }

    .btn-outline {
      border: 2px solid #fff;
      color: #fff;
      padding: 12px 24px;
      border-radius: 30px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn-outline:hover {
      background: #fff;
      color: #000;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .nss-title {
        font-size: 48px;
      }
    }

    @media (max-width: 768px) {
      .nss-hero {
        height: auto;
        padding: 80px 0;
      }

      .nss-content {
        padding: 0 20px;
      }

      .nss-title {
        font-size: 36px;
      }

      .nss-text {
        font-size: 16px;
      }
    }
  </style>

  <!-- /* ===== STATS SECTION ===== */ -->
  <style>
    .nss-stats {
      background: #f4f1ed;
      /* light beige like your screenshot */
      padding: 80px 5%;
    }

    .nss-stats-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 40px;
      text-align: center;
    }

    /* ===== EACH STAT ===== */
    .nss-stat h2 {
      font-size: 64px;
      font-weight: 700;
      color: #d66a42;
      /* orange tone */
      margin-bottom: 10px;
    }

    .nss-stat p {
      font-size: 18px;
      color: #3e5c52;
      /* muted green text */
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .nss-stats-container {
        grid-template-columns: repeat(2, 1fr);
        row-gap: 50px;
      }

      .nss-stat h2 {
        font-size: 48px;
      }
    }

    @media (max-width: 576px) {
      .nss-stats-container {
        grid-template-columns: 1fr;
      }

      .nss-stat h2 {
        font-size: 42px;
      }
    }
  </style>

  <!-- /* ===== NSS VISION ===== */ -->
  <style>
    .nss-vision {
      background: linear-gradient(135deg, #0f2f28, #123c30);
      padding: 100px 5%;
      color: #fff;
    }

    /* ===== CONTAINER ===== */
    .nss-vision-container {
      max-width: 1200px;
      margin: auto;
      text-align: center;
    }

    /* ===== TAG ===== */
    .nss-vision-tag {
      color: #ff7a45;
      letter-spacing: 3px;
      font-size: 14px;
      margin-bottom: 15px;
    }

    /* ===== TITLE ===== */
    .nss-vision-title {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    /* ===== DESCRIPTION ===== */
    .nss-vision-desc {
      max-width: 800px;
      margin: 0 auto 60px;
      font-size: 18px;
      line-height: 1.7;
      color: #cfdad5;
    }

    /* ===== CARDS GRID ===== */
    .nss-vision-cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 25px;
    }

    /* ===== CARD ===== */
    .nss-card {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 18px;
      text-align: left;
      transition: 0.3s;
    }

    /* subtle hover */
    .nss-card:hover {
      background: rgba(255, 255, 255, 0.08);
    }

    /* ===== PHASE ===== */
    .nss-card .phase {
      color: #ff7a45;
      font-size: 14px;
      font-weight: 500;
      display: block;
      margin-bottom: 10px;
    }

    /* ===== TITLE ===== */
    .nss-card h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    /* ===== TEXT ===== */
    .nss-card p {
      font-size: 15px;
      color: #cfdad5;
      line-height: 1.6;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .nss-vision-cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 576px) {
      .nss-vision-cards {
        grid-template-columns: 1fr;
      }

      .nss-vision-title {
        font-size: 28px;
      }

      .nss-vision-desc {
        font-size: 16px;
      }
    }
  </style>

  <!-- /* ===== EVENTS SECTION ===== */  -->
  <style>
    .nss-highlights {
      background: #f4f1ed;
      padding: 100px 5%;
    }

    .nss-highlights-container {
      max-width: 1200px;
      margin: auto;
    }

    /* ===== HEADING ===== */
    .nss-hi-tag {
      text-align: center;
      color: #ff7a45;
      font-size: 12px;
      letter-spacing: 2px;
      margin-bottom: 10px;
    }

    .nss-hi-title {
      text-align: center;
      font-size: 36px;
      margin-bottom: 10px;
    }

    .nss-hi-desc {
      text-align: center;
      color: #666;
      max-width: 700px;
      margin: 0 auto 50px;
    }

    /* ===== GRID ===== */
    .nss-hi-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      grid-template-rows: 250px 250px;
      gap: 20px;
    }

    /* ===== CARD ===== */
    .nss-hi-card {
      position: relative;
      border-radius: 18px;
      overflow: hidden;
    }

    /* BIG LEFT */
    .nss-hi-card.large {
      grid-row: span 2;
    }

    /* IMAGES */
    .nss-hi-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* OVERLAY */
    .nss-hi-card .overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
    }

    /* CONTENT */
    .nss-hi-card .content {
      position: absolute;
      bottom: 20px;
      left: 20px;
      color: #fff;
    }

    .nss-hi-card h3 {
      font-size: 16px;
      margin-top: 5px;
    }

    .nss-hi-card p {
      font-size: 13px;
      opacity: 0.8;
    }

    /* ICON */
    .nss-hi-card .icon {
      display: inline-block;
      background: #fff;
      color: #000;
      font-size: 14px;
      padding: 6px 8px;
      border-radius: 8px;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .nss-hi-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;
      }

      .nss-hi-card.large {
        grid-row: span 1;
      }
    }

    @media (max-width: 576px) {
      .nss-hi-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <!-- /* ===== SOCIAL IMPACT FOCUS AREA ===== */  -->
  <style>
    .nss-focus {
      background: #f4f1ed;
      padding: 100px 5%;
    }

    /* ===== CONTAINER ===== */
    .nss-focus-container {
      max-width: 1500px;
      margin: auto;
      text-align: center;
    }

    /* ===== TAG ===== */
    .nss-focus-tag {
      color: #ff7a45;
      font-size: 12px;
      letter-spacing: 3px;
      margin-bottom: 10px;
    }

    /* ===== TITLE ===== */
    .nss-focus-title {
      font-size: 36px;
      margin-bottom: 50px;
    }

    /* ===== GRID ===== */
    .nss-focus-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 20px;
    }

    /* ===== CARD ===== */
    .nss-focus-card {
      background: #fff;
      padding: 30px 20px;
      border-radius: 18px;
      text-align: center;
      transition: 0.3s;
      border: 1px solid #eee;
    }

    /* subtle hover */
    .nss-focus-card:hover {
      transform: translateY(-5px);
    }

    /* ===== ICON ===== */
    .nss-focus-card .icon {
      width: 60px;
      height: 60px;
      margin: 0 auto 15px;
      background: #fbe9e3;
      color: #d66a42;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 15px;
      font-size: 24px;
    }

    /* ===== TEXT ===== */
    .nss-focus-card h3 {
      font-size: 16px;
      margin-bottom: 8px;
    }

    .nss-focus-card p {
      font-size: 13px;
      color: #666;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1100px) {
      .nss-focus-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 768px) {
      .nss-focus-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      .nss-focus-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <!-- /* ===== flagship ===== */  -->
  <style>
    .nss-flagship {
      background: linear-gradient(135deg, #d26443, #c45736);
      padding: 80px 5%;
      color: #fff;
    }

    /* ===== LAYOUT ===== */
    .nss-flagship-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 40px;
    }

    /* ===== LEFT ===== */
    .nss-flagship-left {
      max-width: 700px;
    }

    .nss-flag-tag {
      font-size: 14px;
      letter-spacing: 2px;
      margin-bottom: 10px;
      opacity: 0.9;
    }

    .nss-flag-title {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .nss-flag-sub {
      font-size: 18px;
      margin-bottom: 10px;
      opacity: 0.9;
    }

    .nss-flag-desc {
      font-size: 18px;
      font-weight: 500;
    }

    /* ===== RIGHT CARD ===== */
    .nss-flagship-right {
      display: flex;
      align-items: center;
    }

    .nss-date-card {
      background: rgba(255, 255, 255, 0.15);
      padding: 25px 40px;
      border-radius: 18px;
      text-align: center;
      backdrop-filter: blur(6px);
    }

    .nss-date-card p {
      font-size: 14px;
      margin-bottom: 8px;
      opacity: 0.9;
    }

    .nss-date-card h3 {
      font-size: 28px;
      font-weight: 700;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .nss-flagship-container {
        flex-direction: column;
        align-items: flex-start;
      }

      .nss-date-card {
        margin-top: 20px;
      }
    }

    @media (max-width: 576px) {
      .nss-flag-title {
        font-size: 28px;
      }

      .nss-date-card h3 {
        font-size: 22px;
      }
    }
  </style>

  <!-- /* ===== CTA SECTION ===== */  -->
  <style>
    .nss-cta {
      background: linear-gradient(135deg, #0f2f28, #123c30);
      padding: 100px 5%;
      text-align: center;
      color: #fff;
    }

    /* ===== CONTAINER ===== */
    .nss-cta-container {
      max-width: 900px;
      margin: auto;
    }

    /* ===== TITLE ===== */
    .nss-cta-title {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    /* ===== TEXT ===== */
    .nss-cta-text {
      font-size: 18px;
      line-height: 1.7;
      color: #cfdad5;
      margin-bottom: 35px;
    }

    /* ===== BUTTON ===== */
    .nss-cta-btn {
      display: inline-block;
      background: #ff7a45;
      color: #fff;
      padding: 14px 30px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .nss-cta-btn:hover {
      background: #e66535;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .nss-cta-title {
        font-size: 28px;
      }

      .nss-cta-text {
        font-size: 16px;
      }
    }
  </style>

  <!-- /* ===== GALLERY ===== */  -->
  <style>
    .nss-marquee {
      background: #f4f1ed;
      padding: 80px 0;
      overflow: hidden;
    }

    /* ===== TITLE ===== */
    .nss-marquee-title {
      text-align: center;
      font-size: 36px;
      margin-bottom: 40px;
    }

    /* ===== WRAPPER ===== */
    .nss-marquee-wrapper {
      overflow: hidden;
      position: relative;
    }

    /* ===== TRACK ===== */
    .nss-marquee-track {
      display: flex;
      gap: 20px;
      width: max-content;
      animation: scrollMarquee 120s linear infinite;
    }

    /* ===== IMAGES ===== */
    .nss-marquee-track img {
      height: 420px;
      width: 620px;
      object-fit: cover;
      border-radius: 16px;
      flex-shrink: 0;
    }

    /* ===== ANIMATION ===== */
    @keyframes scrollMarquee {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    /* ===== HOVER PAUSE ===== */
    .nss-marquee-wrapper:hover .nss-marquee-track {
      animation-play-state: paused;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .nss-marquee-track img {
        width: 240px;
        height: 160px;
      }

      .nss-marquee-title {
        font-size: 28px;
      }
    }
  </style>

  <!-- /* ===== CONTACT SECTION ===== */  -->
  <style>
    /* ===== SECTION ===== */
    .nss-contact {
      background: linear-gradient(135deg, #0f2f28, #123c30);
      padding: 60px 5%;
      /* reduced height */
      color: #fff;
    }

    /* ===== LAYOUT ===== */
    .nss-contact-container {
      max-width: 1100px;
      margin: auto;
      display: grid;
      grid-template-columns: 1fr 1.5fr;
      gap: 40px;
      align-items: center;
    }

    /* ===== LEFT ===== */
    .nss-contact-left h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .nss-contact-left p {
      font-size: 14px;
      color: #cfdad5;
      line-height: 1.6;
    }

    /* ===== GRID ===== */
    .nss-contact-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    /* ===== ITEM ===== */
    .item {
      display: flex;
      gap: 10px;
      align-items: flex-start;
    }

    .item span {
      width: 36px;
      height: 36px;
      background: #fbe9e3;
      color: #d66a42;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      font-size: 16px;
    }

    .item h4 {
      font-size: 14px;
      margin-bottom: 2px;
    }

    .item p {
      font-size: 13px;
      color: #cfdad5;
    }

    /* ===== SOCIAL ===== */
    .nss-contact-social {
      grid-column: span 2;
      margin-top: 10px;
      display: flex;
      gap: 10px;
    }

    .nss-contact-social a {
      width: 34px;
      height: 34px;
      background: #1f3f36;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      text-decoration: none;
      color: #fff;
      font-size: 14px;
    }

    .nss-contact-social a:hover {
      background: #ff7a45;
    }

    /* ===== MOBILE ===== */
    @media (max-width: 768px) {
      .nss-contact-container {
        grid-template-columns: 1fr;
      }

      .nss-contact-grid {
        grid-template-columns: 1fr;
      }

      .nss-contact-social {
        grid-column: span 1;
      }
    }

    /* ICON WRAPPER */
    .item .icon {
      width: 36px;
      height: 36px;
      background: #fbe9e3;
      color: #d66a42;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
    }

    /* SVG size */
    .item .icon svg {
      width: 18px;
      height: 18px;
    }

    /* SOCIAL SVG */
    .nss-contact-social a svg {
      width: 16px;
      height: 16px;
    }
  </style>

    <section class="nss-hero">

        <div class="nss-content">

            <!-- Logo -->
            {{-- <div class="nss-logo">
                <img src="mobile-assets/nss-new/logos.svg" alt="Logo">
            </div> --}}

            <!-- Tag -->
            <div class="nss-tag">
                National Service Scheme @ Assam Royal Global University
            </div>

            <!-- Heading -->
            <h1 class="nss-title">
                Not Me,<br><span>But You</span>
            </h1>

            <!-- Text -->
            <p class="nss-text">
                Transforming student learning into measurable community impact through long-term partnerships,
                evidence-based programmes, and youth leadership for public good.
            </p>

            <!-- Buttons -->
            {{-- <div class="nss-buttons">
                <a href="https://nss-rgu-service.preview.static.emergentagent.com/volunteer" class="btn-primary">Become a
                    Volunteer →</a>
                <a href="https://nss-rgu-service.preview.static.emergentagent.com/activities" class="btn-outline">Explore
                    Activities</a>
            </div> --}}

        </div>

    </section>

    <section class="nss-stats">
        <div class="nss-stats-container">

            <div class="nss-stat">
                <h2>200+</h2>
                <p>Active Volunteers</p>
            </div>

            <div class="nss-stat">
                <h2>100+</h2>
                <p>Blood Units Collected</p>
            </div>

            <div class="nss-stat">
                <h2>14</h2>
                <p>Villages (Deepor Beel)</p>
            </div>

            <div class="nss-stat">
                <h2>50+</h2>
                <p>Outreach Events</p>
            </div>

        </div>
    </section>

    <section class="nss-vision">

        <div class="nss-vision-container">

            <!-- Top Text -->
            <p class="nss-vision-tag">OUR VISION 2026–2029</p>

            <h2 class="nss-vision-title">
                The RGU "Seva-Sphere" Roadmap
            </h2>

            <p class="nss-vision-desc">
                "RGU NSS will be a leading university service platform that transforms student learning into measurable
                community impact—through long-term partnerships, evidence-based programmes, and youth leadership for public
                good."
            </p>

            <!-- Cards -->
            <div class="nss-vision-cards">

                <div class="nss-card">
                    <span class="phase">Phase 1</span>
                    <h3>Expansion</h3>
                    <p>Increasing student participation across all departments and schools at RGU.</p>
                </div>

                <div class="nss-card">
                    <span class="phase">Phase 2</span>
                    <h3>Digital Storytelling</h3>
                    <p>Enhancing the visibility of our outreach through innovation and media.</p>
                </div>

                <div class="nss-card">
                    <span class="phase">Phase 3</span>
                    <h3>Innovation in Service</h3>
                    <p>Pioneering new service-learning models unique to Northeast India.</p>
                </div>

                <div class="nss-card">
                    <span class="phase">Phase 4</span>
                    <h3>NE Best Practice Model</h3>
                    <p>Establishing RGU as a premier NSS ecosystem for the entire region.</p>
                </div>

            </div>

        </div>

    </section>

    <section class="nss-highlights">

        <div class="nss-highlights-container">

            <!-- Heading -->
            <p class="nss-hi-tag">WHAT WE DO</p>
            <h2 class="nss-hi-title text-dark">Community Outreach Highlights</h2>
            <p class="nss-hi-desc text-dark">
                Real activities and initiatives from NSS @ RGU 2024–26, making tangible differences in communities across
                Assam.
            </p>

            <!-- Grid -->
            <div class="nss-hi-grid">

                <!-- LEFT BIG CARD -->
                <div class="nss-hi-card large">
                    <img src="mobile-assets/nss-new/events/Blood-Donation-Camp1.jpg.jpeg" alt="">
                    <div class="overlay"></div>
                    <div class="content">
                        <span class="icon">🩸</span>
                        <h3>Voluntary Blood Donation Camp</h3>
                        <p>Part of Seva-hi-Samarpan: Seva Saptah, organized in partnership with Gauhati Medical College &
                            Hospital
                            and Assam State Blood Transfusion Council.</p>
                    </div>
                </div>

                <!-- RIGHT STACK -->
                <div class="nss-hi-card small">
                    <img src="mobile-assets/nss-new/events/environment-day.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="content">
                        <span class="icon">🌿</span>
                        <h3>World Environment Day</h3>
                        <p>Collaborative initiative with Department of Social Work and Shankardev Shishu Niketan School - 30
                            saplings planted to foster environmental care.</p>
                    </div>
                </div>

                <div class="nss-hi-card small">
                    <img src="mobile-assets/nss-new/events/tetelia.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="content">
                        <span class="icon">❤️</span>
                        <h3>Tetelia L.P. School Outreach</h3>
                        <p>Donation drive distributing stationery and sports materials, plus interactive sessions on hygiene
                            awareness and goal setting for young learners.</p>
                    </div>
                </div>

                <!-- BOTTOM ROW -->
                <div class="nss-hi-card">
                    <img src="mobile-assets/nss-new/events/POSHAN-Abhiyan.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="content">
                        <span class="icon">📘</span>
                        <h3>POSHAN Abhiyan</h3>
                        <p>Nutrition awareness programs through sensitization campaigns and rural health camps, fighting
                            malnutrition in adopted villages.</p>
                    </div>
                </div>

                <div class="nss-hi-card">
                    <img src="mobile-assets/nss-new/events/Disaster-Response-Programme.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="content">
                        <span class="icon">🔥</span>
                        <h3>Disaster Response Programme</h3>
                        <p>Rapid support and relief during local public emergencies and natural disasters, with agile crisis
                            response capabilities.</p>
                    </div>
                </div>



            </div>

        </div>

    </section>

    <section class="nss-focus">

        <div class="nss-focus-container">

            <!-- Heading -->
            <p class="nss-focus-tag text-dark">DIVERSE DOMAINS</p>
            <h2 class="nss-focus-title text-dark" >Social Impact Focus Areas</h2>

            <!-- Cards -->
            <div class="nss-focus-grid">

                <div class="nss-focus-card">
                    <div class="icon">❤️</div>
                    <h3>Health & Hygiene</h3>
                    <p>Swachh Bharat & RGU Mega Blood Donation Camp</p>
                </div>

                <div class="nss-focus-card">
                    <div class="icon">🤝</div>
                    <h3>Nutrition & Wellness</h3>
                    <p>POSHAN Abhiyan & rural health camps</p>
                </div>

                <div class="nss-focus-card">
                    <div class="icon">📖</div>
                    <h3>Education & Digital Literacy</h3>
                    <p>Educational support to rural schools</p>
                </div>

                <div class="nss-focus-card">
                    <div class="icon">🌱</div>
                    <h3>Environmental Conservation</h3>
                    <p>Community-led sustainable projects</p>
                </div>

                <div class="nss-focus-card">
                    <div class="icon">👥</div>
                    <h3>Sustainable Partnerships</h3>
                    <p>High-impact institutional partnerships</p>
                </div>

                <div class="nss-focus-card">
                    <div class="icon">🛡️</div>
                    <h3>Disaster Response</h3>
                    <p>Emergency relief & rehabilitation</p>
                </div>

            </div>

        </div>

    </section>

    <section class="nss-flagship">

        <div class="nss-flagship-container">

            <!-- LEFT CONTENT -->
            <div class="nss-flagship-left">
                <p class="nss-flag-tag">FLAGSHIP MISSION 2026</p>

                <h2 class="nss-flag-title">
                    RGU Mega Blood Donation Camp
                </h2>

                <p class="nss-flag-sub">
                    In collaboration with Gauhati Medical College & Hospital (GMCH)
                </p>

                <p class="nss-flag-desc">
                    "Donate Blood & Save Life!" – The Largest Blood Donation Camp in Guwahati
                </p>
            </div>

            <!-- RIGHT DATE CARD -->
            <div class="nss-flagship-right">
                <div class="nss-date-card">
                    <p>Execution Window</p>
                    <h3>29–30 April 2026</h3>
                </div>
            </div>

        </div>

    </section>

    <section class="nss-cta">

        <div class="nss-cta-container">

            <h2 class="nss-cta-title">
                When Students Serve, Communities Grow
            </h2>

            <p class="nss-cta-text">
                Universities become truly meaningful by fostering reciprocal partnerships, building civic leadership,
                addressing local needs, and creating lasting social impact through collaborative, hands-on learning
                experiences.
            </p>

            {{-- <a href="https://nss-rgu-service.preview.static.emergentagent.com/volunteer" class="nss-cta-btn">
                Join NSS Today →
            </a> --}}

        </div>

    </section>

    {{-- <section class="nss-marquee">

        <div class="nss-marquee-container">

            <h2 class="nss-marquee-title text-dark">Highlights</h2>

            <div class="nss-marquee-wrapper">

                <div class="nss-marquee-track">

                    <!-- 17 Images -->
                    <img src="mobile-assets/nss-new/social work/1.jpeg">
                    <img src="mobile-assets/nss-new/social work/2.jpeg">
                    <img src="mobile-assets/nss-new/social work/3.jpeg">
                    <img src="mobile-assets/nss-new/social work/4.jpeg">
                    <img src="mobile-assets/nss-new/social work/5.jpeg">
                    <img src="mobile-assets/nss-new/social work/6.jpeg">
                    <img src="mobile-assets/nss-new/social work/7.jpeg">
                    <img src="mobile-assets/nss-new/social work/8.jpeg">
                    <img src="mobile-assets/nss-new/social work/9.jpeg">
                    <img src="mobile-assets/nss-new/social work/10.jpeg">
                    <img src="mobile-assets/nss-new/social work/11.jpeg">
                    <img src="mobile-assets/nss-new/social work/12.jpeg">
                    <img src="mobile-assets/nss-new/social work/13.jpeg">
                    <img src="mobile-assets/nss-new/social work/14.jpeg">
                    <img src="mobile-assets/nss-new/social work/15.jpeg">
                    <img src="mobile-assets/nss-new/social work/16.jpeg">
                    <img src="mobile-assets/nss-new/social work/17.jpeg">


                    <!-- Duplicate for seamless loop -->
                    <img src="mobile-assets/nss-new/social work/1.jpeg">
                    <img src="mobile-assets/nss-new/social work/2.jpeg">
                    <img src="mobile-assets/nss-new/social work/3.jpeg">
                    <img src="mobile-assets/nss-new/social work/4.jpeg">
                    <img src="mobile-assets/nss-new/social work/5.jpeg">
                    <img src="mobile-assets/nss-new/social work/6.jpeg">
                    <img src="mobile-assets/nss-new/social work/7.jpeg">
                    <img src="mobile-assets/nss-new/social work/8.jpeg">
                    <img src="mobile-assets/nss-new/social work/9.jpeg">
                    <img src="mobile-assets/nss-new/social work/10.jpeg">
                    <img src="mobile-assets/nss-new/social work/11.jpeg">
                    <img src="mobile-assets/nss-new/social work/12.jpeg">
                    <img src="mobile-assets/nss-new/social work/13.jpeg">
                    <img src="mobile-assets/nss-new/social work/14.jpeg">
                    <img src="mobile-assets/nss-new/social work/15.jpeg">
                    <img src="mobile-assets/nss-new/social work/16.jpeg">
                    <img src="mobile-assets/nss-new/social work/17.jpeg">

                </div>

            </div>

        </div>

    </section> --}}

    <section class="nss-contact">

        <div class="nss-contact-container">

            <!-- LEFT -->
            <div class="nss-contact-left">
                <h2>Let's Connect</h2>
                <p>
                    Whether you're interested in volunteering, partnering with us, or learning more,
                    reach out through the channels below.
                </p>
            </div>

            <!-- RIGHT GRID -->
            <div class="nss-contact-grid">

                <!-- Address -->
                <div class="item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s-6-5.5-6-10a6 6 0 1 1 12 0c0 4.5-6 10-6 10z" stroke="currentColor"
                                stroke-width="1.8" />
                            <circle cx="12" cy="11" r="2.5" stroke="currentColor" stroke-width="1.8" />
                        </svg>
                    </span>
                    <div>
                        <h4>Address</h4>
                        <p>NSS Cell, RGU<br>Guwahati – 781035</p>
                    </div>
                </div>

                <!-- Phone -->
                {{-- <div class="item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M5 4h4l2 5-2 1a12 12 0 0 0 5 5l1-2 5 2v4a2 2 0 0 1-2 2A17 17 0 0 1 3 6a2 2 0 0 1 2-2z"
                                stroke="currentColor" stroke-width="1.8" />
                        </svg>
                    </span>
                    <div>
                        <h4>Phone</h4>
                        <p></p>
                    </div>
                </div> --}}

                <!-- Email -->
                <div class="item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor"
                                stroke-width="1.8" />
                            <path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="1.8" />
                        </svg>
                    </span>
                    <div>
                        <h4>Email</h4>
                        <p>nss@rgu.ac</p>
                    </div>
                </div>

                <!-- Time -->
                <div class="item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8" />
                            <path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.8" />
                        </svg>
                    </span>
                    <div>
                        <h4>Office Hours</h4>
                        <p>Mon–Fri: 9 AM – 5 PM<br>Sat: 10 AM – 2 PM</p>
                    </div>
                </div>

            </div>

            <!-- SOCIAL -->
            <div class="nss-contact-social">
                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13 22v-8h3l1-4h-4V7c0-1 0-2 2-2h2V1h-3c-4 0-6 2-6 5v4H5v4h3v8z" />
                    </svg>
                </a>

                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22 5.8c-.7.3-1.5.5-2.3.6a4 4 0 0 0 1.7-2.2c-.8.5-1.7.8-2.6 1A4 4 0 0 0 12 8.5c0 .3 0 .6.1.9A11 11 0 0 1 3 4.9a4 4 0 0 0 1.2 5.3c-.6 0-1.1-.2-1.6-.4v.1c0 2 1.4 3.7 3.3 4-.3.1-.7.1-1 .1-.2 0-.5 0-.7-.1.5 1.6 2 2.8 3.8 2.8A8 8 0 0 1 2 19.5 11 11 0 0 0 8 21c7 0 11-6 11-11v-.5c.7-.5 1.3-1.2 1.8-2z" />
                    </svg>
                </a>

                <a href="#">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                </a>
            </div>

        </div>

    </section>
@endsection
