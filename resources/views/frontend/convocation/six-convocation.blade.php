@extends('frontend/new-master')
@section('hide_top_bar', true)
@section('content')
  <style>
    .top-bar {
      display: none !important;
    }

    .header {
      top: 0 !important;
    }

    :root {
      --gold: #e5b65e;
      --gold-light: #f5d38e;
      --dark: #100d0a;
      --cream: #f6efe3;
      --page-width: 1200px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      background: var(--dark);
      scroll-behavior: auto;
    }

    body {
      font-family: Georgia, "Times New Roman", serif;
      background: var(--dark);
      color: white;
      overflow-x: hidden;
    }

    img {
      display: block;
      max-width: 100%;
    }

    /* =========================================
   SIDE DECORATIVE PATTERN
========================================= */

    .side-pattern {
      position: fixed;
      inset: 0;
      z-index: 30;
      pointer-events: none;
    }

    .side-pattern::before,
    .side-pattern::after {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      width: clamp(35px, 9vw, 30px);

      background-image: url("pattern.png");
      background-repeat: repeat-y;
      background-position: top center;
      background-size: 100% auto;
    }

    .side-pattern::before {
      left: 0;
    }

    .side-pattern::after {
      right: 0;
      transform: scaleX(-1);
    }

    /* =========================================
   STAGE 01 - GATE ENTRANCE
========================================= */

    .entrance-scroll {
      position: relative;
      height: 235vh;
      background: #0a0807;
    }

    .entrance-stage {
      position: sticky;
      top: 0;
      height: 100svh;
      min-height: 540px;
      overflow: hidden;
      isolation: isolate;

      background:
        radial-gradient(ellipse at 50% 55%,
          rgba(129, 72, 28, .25),
          transparent 45%),
        linear-gradient(180deg,
          #080807,
          #17100c 55%,
          #090807);
    }

    .ambient-glow {
      position: absolute;
      width: 70vw;
      height: 50vw;
      left: 50%;
      top: 55%;
      transform: translate(-50%, -50%);

      background: radial-gradient(ellipse,
          rgba(218, 153, 65, .18),
          transparent 68%);

      filter: blur(25px);
    }

    .entrance-copy {
      position: absolute;
      z-index: 4;
      top: 7%;
      left: 50%;
      width: 90%;
      transform: translateX(-50%);
      text-align: center;
    }

    .entrance-copy .eyebrow {
      color: var(--gold-light);
      font: 600 10px Arial, sans-serif;
      letter-spacing: .3em;
      text-transform: uppercase;
    }

    .entrance-copy h1 {
      margin: 16px 0;
      font-size: clamp(28px, 4vw, 55px);
      font-weight: 400;
      color: #fff4df;
    }

    .entrance-copy p {
      font: 11px Arial, sans-serif;
      letter-spacing: .15em;
      color: rgba(255, 255, 255, .7);
      text-transform: uppercase;
    }

    .gate-wrap {
      position: absolute;
      z-index: 3;
      left: 50%;
      top: 53%;
      width: min(100vw, 170vh, 1500px);

      transform: translate(-50%, -50%);
      transform-origin: 50% 70%;
      will-change: transform, opacity;

      filter: drop-shadow(0 20px 35px rgba(0, 0, 0, .58));
    }

    .gate-wrap img {
      width: 100%;
      height: auto;
      user-select: none;
    }

    .floor-light {
      position: absolute;
      left: 50%;
      bottom: -13%;
      width: 100vw;
      height: 33vh;
      transform: translateX(-50%);

      background: radial-gradient(ellipse,
          rgba(214, 150, 66, .2),
          transparent 67%);

      filter: blur(12px);
    }

    .scroll-cue {
      position: absolute;
      z-index: 5;
      bottom: 5%;
      left: 50%;
      transform: translateX(-50%);

      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;

      font: 9px Arial, sans-serif;
      letter-spacing: .25em;
      text-transform: uppercase;
      color: rgba(255, 239, 211, .8);
    }

    .mouse {
      width: 19px;
      height: 30px;
      border: 1px solid var(--gold-light);
      border-radius: 20px;
      position: relative;
    }

    .mouse::after {
      content: "";
      position: absolute;
      left: 8px;
      top: 6px;
      width: 2px;
      height: 5px;
      background: var(--gold-light);
      animation: wheel 1.3s infinite;
    }

    @keyframes wheel {
      0% {
        transform: translateY(0);
        opacity: 1;
      }

      100% {
        transform: translateY(9px);
        opacity: 0;
      }
    }

    /* =========================================
   WEBSITE CONTENT
========================================= */

    .site {
      position: relative;
      opacity: 0;
      transform: translateY(25px);
      transition: opacity .8s ease, transform .8s ease;
    }

    .site.is-revealed {
      opacity: 1;
      transform: translateY(0);
    }

    /* =========================================
   STAGE 02 - FULL SCREEN VIDEO
========================================= */

    .film-section {
      position: relative;
      height: 100svh;
      min-height: 600px;
      width: 100%;
      overflow: hidden;
      isolation: isolate;
      background: #080807;
    }

    .film-video {
      position: absolute;
      inset: 0;
      z-index: -3;

      width: 100%;
      height: 100%;
      object-fit: cover;
      background: #080807;
    }

    .film-overlay {
      position: absolute;
      inset: 0;
      z-index: -2;

      background:
        linear-gradient(180deg,
          rgba(0, 0, 0, .15),
          rgba(0, 0, 0, .05) 40%,
          rgba(0, 0, 0, .35)),
        rgba(0, 0, 0, .20);
    }

    /* =========================================
   VIDEO STATISTICS - BOTTOM
========================================= */

    .stats-container {
      position: absolute;
      left: 50%;
      bottom: 8%;
      transform: translateX(-50%);

      width: min(1300px, 80%);

      display: grid;
      grid-template-columns: repeat(4, 1fr);

      background: rgba(15, 12, 9, .66);

      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);

      border-top: 1px solid rgba(245, 211, 142, .55);
      border-bottom: 1px solid rgba(245, 211, 142, .55);

      z-index: 2;
    }

    .stat-item {
      min-height: 100px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px 5px;
    }

    .stat-item+.stat-item {
      border-left: 1px solid rgba(245, 211, 142, .4);
    }

    .stat-number {
      font-size: clamp(30px, 3vw, 43px);
      font-weight: 400;
      line-height: 1.1;
      color: #fff1d4;
      letter-spacing: -.025em;
    }

    .stat-label {
      margin-top: 12px;
      font: 600 12px Arial, sans-serif;
      letter-spacing: .19em;
      text-transform: uppercase;
      color: var(--gold-light);
      text-align: center;
    }

    /* =========================================
   STAGE 03 - INTRODUCTION
========================================= */

    .intro-section {
      position: relative;
      padding: 50px 8% 50px;
      background: var(--cream);
      color: #211a14;
    }

    .intro-inner {
      max-width: 1400px;
      margin: 0 auto;
      text-align: center;
    }

    .intro-eyebrow {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;

      color: #9a682e;
      font: 600 10px Arial, sans-serif;
      letter-spacing: .28em;
      text-transform: uppercase;
    }

    .intro-eyebrow::before,
    .intro-eyebrow::after {
      content: "";
      width: 35px;
      height: 1px;
      background: #bd914b;
    }

    .intro-heading {
      max-width: 1200px;
      margin: 20px auto 25px;

      font-size: clamp(36px, 5.3vw, 45px);
      line-height: 1.3;
      font-weight: 400;
      letter-spacing: -.035em;
    }

    .intro-heading em {
      color: #956b34;
      font-weight: 400;
    }

    .intro-description {
      max-width: 1400px;
      margin: 0 auto;

      color: #71675c;
      font: 14px/2 Arial, sans-serif;
    }

    /* Small decorative separator */

    .intro-divider {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 9px;
      margin: 40px auto 0;
    }

    .intro-divider span {
      width: 5px;
      height: 5px;
      background: #bd914b;
      transform: rotate(45deg);
    }

    .intro-divider::before,
    .intro-divider::after {
      content: "";
      width: 35px;
      height: 1px;
      background: rgba(189, 145, 75, .5);
    }



    /* =========================================
   NEXT SECTION PLACEHOLDER
========================================= */

    .next-section {
      min-height: 100vh;
      padding: 120px 8%;
      background: #17120f;
      color: var(--cream);
    }

    .next-inner {
      max-width: 1200px;
      margin: auto;
    }

    .section-label {
      color: var(--gold-light);
      font: 600 10px Arial, sans-serif;
      letter-spacing: .25em;
      text-transform: uppercase;
    }

    .next-section h2 {
      margin-top: 20px;
      font-size: clamp(40px, 6vw, 75px);
      font-weight: 400;
      line-height: 1;
    }

    .next-section h2 em {
      color: var(--gold-light);
    }

    .next-section p {
      max-width: 600px;
      margin-top: 25px;
      color: rgba(255, 255, 255, .65);
      font: 14px/1.9 Arial, sans-serif;
    }

    footer {
      padding: 30px;
      text-align: center;
      background: #080706;
      color: #a99d90;
      font: 10px Arial, sans-serif;
      letter-spacing: .15em;
    }

    /* =========================================
   RESPONSIVE
========================================= */

    @media(max-width: 700px) {

      .entrance-scroll {
        height: 190vh;
      }

      .entrance-copy {
        top: 9%;
      }

      .entrance-copy h1 {
        font-size: 30px;
      }

      .entrance-copy p {
        font-size: 8px;
        line-height: 1.8;
      }

      .gate-wrap {
        width: 155vw;
      }

      .side-pattern::before,
      .side-pattern::after {
        width: 24px;
      }

      .film-section {
        min-height: 600px;
      }

      .stats-container {
        width: calc(100% - 65px);
        bottom: 5%;
        grid-template-columns: 1fr;
      }

      .stat-item {
        min-height: 85px;
        padding: 12px;
      }

      .stat-item+.stat-item {
        border-left: none;
        border-top: 1px solid rgba(245, 211, 142, .3);
      }

      .stat-number {
        font-size: 30px;
      }

      .stat-label {
        font-size: 8px;
        margin-top: 6px;
      }

      .intro-section {
        padding: 85px 9%;
      }

      .intro-heading {
        font-size: clamp(20px, 7vw, 48px);
      }

      .intro-description {
        font-size: 12px;
        line-height: 1.9;
      }

      .landscape-section {
        padding: 0 7% 70px;
      }

      .landscape-frame {
        aspect-ratio: 4 / 5;
      }

      .next-section {
        padding: 90px 9%;
      }
    }

    @media(max-height: 650px) and (min-width: 701px) {
      .stats-container {
        bottom: 4%;
      }

      .stat-item {
        min-height: 105px;
      }
    }

    @media(prefers-reduced-motion: reduce) {

      *,
      *::before,
      *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
      }
    }
  </style>

    <main>

    <!-- SIDE PATTERN -->
    <div class="side-pattern" aria-hidden="true"></div>


    <!-- =====================================
         STAGE 01 - GATE ENTRANCE
    ====================================== -->

    <section class="entrance-scroll" id="entrance">

      <div class="entrance-stage">

        <div class="ambient-glow"></div>

        <div class="entrance-copy pt-4" id="entranceCopy">

          <div class="eyebrow pt-5">
            
          </div>

          {{-- <h1>The Sixth Convocation</h1> --}}

          {{-- <p>Friday, October 30, 2026</p> --}}

        </div>

        <div class="gate-wrap" id="gateWrap">

          <img src="/new-web/assets/convocation/six/gate.png" alt="Royal Global University Convocation Gate">

        </div>

        <div class="floor-light"></div>

        <div class="scroll-cue" id="scrollCue">
          <span class="mouse"></span>
          <span>Scroll to Enter</span>
        </div>

      </div>

    </section>


    <!-- =====================================
         WEBSITE CONTENT
    ====================================== -->

    <div class="site" id="site">


      <!-- =====================================
             STAGE 02 - VIDEO + STATISTICS
        ====================================== -->

      <section class="film-section" id="convocation-film">

        <video class="film-video" autoplay muted loop playsinline preload="auto"
          poster="/new-web/assets/convocation/six/convocation-video-poster.jpg">

          <source src="/new-web/assets/convocation/six/After-movie.MP4" type="video/mp4">

        </video>

        <div class="film-overlay"></div>


        <div class="stats-container">


          <div class="stat-item">

            <span class="stat-number">
              47
            </span>

            <span class="stat-label">
              Diploma Awardees
            </span>

          </div>

          <div class="stat-item">

            <span class="stat-number">
              832
            </span>

            <span class="stat-label">
              Undergraduate Degrees
            </span>

          </div>

          <div class="stat-item">

            <span class="stat-number">
              685
            </span>

            <span class="stat-label">
              Postgraduate Degrees
            </span>

          </div>

          <div class="stat-item">

            <span class="stat-number">
              45
            </span>

            <span class="stat-label">
              Doctoral Degrees
            </span>

          </div>

        </div>

      </section>


      <!-- =====================================
             STAGE 03 - INTRODUCTION
        ====================================== -->

      <section class="intro-section" id="introduction">

        <div class="intro-inner">

          <div class="intro-eyebrow">
            A Celebration of Excellence
          </div>

          <h2 class="intro-heading">
            Honouring distinguished contributions.<br>
            <em>Celebrating exceptional achievements.</em><br>
            Inspiring generations to come.
          </h2>

          <p class="intro-description">
            The Sixth Convocation of The Assam Royal Global University (RGU) was held on October 30, 2026 in the
            presence of a galaxy
            of eminent dignitaries. Altogether 1,609 graduates were awarded degrees, of which 45 were awarded the Ph.D.
            degrees, 832 undergraduate degrees, 685 postgraduate degrees, and 47 were awarded diplomas. Honoris Causa
            Degrees were conferred upon five distinguished personalities—Doctor of Science (D.Sc.) to Dr. Ashok Seth,
            Padma Bhushan awardee & Chairman, Fortis Escorts Heart Institute; Doctor of Letters (D.Litt.) to Smt. Sudha
            Murty, Padma Bhushan awardee, MP, Rajya Sabha, and renowned author, philanthropist and educator; Sri Sajjan
            Jindal, Chairman and Managing Director, JSW Group; Sri Devajit Saikia, Advocate General of Assam and
            Secretary, BCCI; and Doctor of Literature (D.Litt.) to Sri William Dalrymple, eminent historian, author and
            public intellectual.
          </p>

          <div class="intro-divider">
            <span></span>
          </div>

        </div>

      </section>

      <!-- =========================================
     SECTION: TWO LANDSCAPE IMAGES
========================================= -->

      <section class="convocation-gallery" id="convocation-gallery">

        <!-- IMAGE 01 -->
        <div class="gallery-image gallery-image-01">
          <picture>
            <source media="(max-width: 767px)" srcset="/new-web/assets/convocation/six/guest-mob.png">

            <img src="/new-web/assets/convocation/six/guest.png" alt="Royal Global University gallery image one" loading="lazy">
          </picture>
        </div>


        <!-- HORIZONTAL DIVIDER -->
        <div class="gallery-divider"></div>


        <!-- IMAGE 02 -->
        <div class="gallery-image gallery-image-02">
          <picture>
            <source media="(max-width: 767px)" srcset="/new-web/assets/convocation/six/honouris-causa-mob.png">

            <img src="/new-web/assets/convocation/six/honouris-causa.png" alt="Royal Global University gallery image two" loading="lazy">
          </picture>
        </div>

      </section>

      <style>
        /* =========================================
   CONVOCATION GALLERY
========================================= */

        .convocation-gallery {
          width: 100%;
          position: relative;
          overflow: hidden;
        }

        /* Image containers */

        .convocation-gallery .gallery-image {
          width: 100%;
          line-height: 0;
        }

        /* Natural image dimensions */

        .convocation-gallery .gallery-image img {
          display: block;
          width: 100%;
          height: auto;
          max-width: 100%;
        }

        /* Horizontal gap / divider */

        .convocation-gallery .gallery-divider {
          width: 100%;
          height: 12px;
          background: #f6efe3;
        }

        /* Mobile */

        @media (max-width: 767px) {

          .convocation-gallery .gallery-divider {
            height: 8px;
          }

        }
      </style>



      <section class="convocation-message">
        <div class="convocation-message-inner">

          <p>
            The Convocation was presided over by Sri Lakshman Prasad Acharya, Hon’ble Governor of Assam and the Visitor
            of RGU. It was graced by Sri Shekhar Gupta, Padma Bhushan Awardee and Editor-in-Chief of The Print who
            delivered the Convocation Address; Dr. Ranoj Pegu, Minister of Education, Assam; Dr. Vanlalthlana, Minister
            of Education, Mizoram, apart from RGU Chancellor Dr AK Pansari and Pro Chancellor Sri AK Modi, among others.
            Sri JP Nadda, Union Minister of Health and Family Welfare congratulated the graduates through a video
            message.
          </p>

          <p>
            Congratulating the graduates, Governor Shri Lakshman Prasad Acharya said, “Your achievement is a recognition
            of your hard work. The true significance of your knowledge and talent now lies in how you utilise them for
            the welfare of society and the progress of the nation.” He said that universities have responsibilities to
            familiarise students not only with subject-specific knowledge but also with the real challenges faced by
            society. The Assam Royal Global University has established its identity in the field of higher education by
            contributing to its expansion in Assam and providing students with diverse opportunities, he added.
          </p>

          <p>
            Delivering the Convocation Address, Sri Shekhar Gupta recalled the many lessons he had learnt from the
            Northeast while working as a journalist. Addressing the graduating students, he emphasised that they stood
            at a crucial juncture in their lives, with numerous opportunities before them. “All of you have
            opportunities. What choice you make now will determine what you will become in the course of time”, he
            added.
          </p>

          <p>
            Chancellor Dr A. K. Pansari in his address called upon the graduating students to be global in vision, but
            local in commitment. Emphasising on sustainability and green consciousness, he said, “As you build
            businesses, lead institutions, conduct research or serve your communities, let sustainability be part of
            every decision”. Vice Chancellor Alak Kumar Buragohain welcomed the august gathering and presented the
            University Report.
          </p>

          <p>
            Chancellor’s gold medals were awarded to Neelav Kumar Das, MSc (Botany) for PG, and to Sibani Pattnaik, BA,
            LLB (H) for UG. Five Salvers: Prof Mihir Kanti Chaudhuri Best Science Graduate Award went to Sayantanee
            Chakraborty, MSc (Nutrition & Dietetics); Gini Devi Pansari Award for Excellence in Literary Activities went
            to Mujahidul Islam, MA (JMC).; Sanwarmal Modi Award for Excellence in Cultural Activities went to Kingshuk
            Akshaye, MA (Political Science) ; Suresh Kumar Prithani Award for Excellence in Mentoring went to Roselin
            Akhtar Faruque, MBA; and Basudeo Pansari Award for Excellence in Community Service went to Sibani Pattnaik,
            BA-LLB (H). Apart from this, 49 gold medals and 43 silver medals were presented to successful students from
            various departments of the university.
          </p>

        </div>
      </section>

      <style>
        /* ==========================================
   CONVOCATION MESSAGE SECTION
========================================== */

        .convocation-message {
          --message-text: #422b0e;
          --message-accent: #a47b3e;

          width: 100%;
          padding: 40px 0 50px;
          background: #f6efe3;
          position: relative;
        }

        .convocation-message-inner {
          width: min(1350px, calc(100% - 100px));
          margin: 0 auto;

          display: flex;
          flex-direction: column;
          gap: 28px;
        }

        .convocation-message-inner p {
          margin: 0;

          color: var(--message-text);
          font-family: "Times New Roman", Times, serif;
          font-size: 18px;
          font-weight: 400;
          line-height: 1.60;
          text-align: justify;
          text-align-last: left;
        }

        /* ==========================================
   TABLET
========================================== */

        @media (max-width: 900px) {

          .convocation-message {
            padding: 65px 0;
          }

          .convocation-message-inner {
            width: calc(100% - 80px);
            gap: 22px;
          }

          .convocation-message-inner p {
            font-size: 19px;
            line-height: 1.7;
          }
        }

        /* ==========================================
   MOBILE
========================================== */

        @media (max-width: 650px) {

          .convocation-message {
            padding: 38px 0 45px;
          }

          .convocation-message-inner {
            width: calc(100% - 80px);
            gap: 18px;
          }

          .convocation-message-inner p {
            font-size: 12px;
            line-height: 1.5;
            text-align: justify;
            
          }
        }

        /* ==========================================
   SMALL MOBILE
========================================== */

        @media (max-width: 380px) {

          .convocation-message-inner {
            width: calc(100% - 68px);
            gap: 15px;
          }

          .convocation-message-inner p {
            font-size: 14px;
            line-height: 1.6;
          }
        }
      </style>


      <!-- =========================================
     SECTION: GALLERY
========================================= -->
      <section class="award-gallery-section">

        <!-- CATEGORY TABS -->
        <div class="award-gallery-tabs" role="tablist" aria-label="Awardee categories">

          <button class="award-tab active" type="button" role="tab" id="tab-gold" aria-selected="true"
            aria-controls="panel-gold" data-target="gold">
            <span class="tab-number">01</span>
            <span class="tab-title">Gold Medalist</span>
            <span class="tab-arrow">↗</span>
          </button>

          <button class="award-tab" type="button" role="tab" id="tab-silver" aria-selected="false"
            aria-controls="panel-silver" data-target="silver" tabindex="-1">
            <span class="tab-number">02</span>
            <span class="tab-title">Silver Medalist</span>
            <span class="tab-arrow">↗</span>
          </button>

          <button class="award-tab" type="button" role="tab" id="tab-phd" aria-selected="false"
            aria-controls="panel-phd" data-target="phd" tabindex="-1">
            <span class="tab-number">03</span>
            <span class="tab-title">Ph.D. Awardees</span>
            <span class="tab-arrow">↗</span>
          </button>

          <button class="award-tab" type="button" role="tab" id="tab-degree" aria-selected="false"
            aria-controls="panel-degree" data-target="degree" tabindex="-1">
            <span class="tab-number">04</span>
            <span class="tab-title">Undergraduate &amp; Postgraduate Awardees</span>
            <span class="tab-arrow">↗</span>
          </button>

        </div>


        <!-- ==========================================
       GOLD MEDALISTS
  =========================================== -->

        <div class="award-gallery-panel active" id="panel-gold" role="tabpanel" aria-labelledby="tab-gold">

          <div class="award-gallery-grid">

            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/1.jpg" alt="Gold Medalist 1" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/2.jpg" alt="Gold Medalist 2" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/3.jpg" alt="Gold Medalist 3" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/4.jpg" alt="Gold Medalist 4" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/5.jpg" alt="Gold Medalist 5" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/6.jpg" alt="Gold Medalist 6" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/7.jpg" alt="Gold Medalist 7" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/8.jpg" alt="Gold Medalist 8" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/9.jpg" alt="Gold Medalist 9" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/10.jpg" alt="Gold Medalist 10" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/11.jpg" alt="Gold Medalist 11" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/gold-medalist/12.jpg" alt="Gold Medalist 12" loading="lazy">

          </div>
        </div>


        <!-- ==========================================
       SILVER MEDALISTS
  =========================================== -->

        <div class="award-gallery-panel" id="panel-silver" role="tabpanel" aria-labelledby="tab-silver" hidden>

          <div class="award-gallery-grid">

            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/1.jpg" alt="Silver Medalist 1" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/2.jpg" alt="Silver Medalist 2" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/3.jpg" alt="Silver Medalist 3" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/4.jpg" alt="Silver Medalist 4" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/5.jpg" alt="Silver Medalist 5" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/6.jpg" alt="Silver Medalist 6" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/7.jpg" alt="Silver Medalist 7" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/8.jpg" alt="Silver Medalist 8" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/9.jpg" alt="Silver Medalist 9" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/10.jpg" alt="Silver Medalist 10" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/11.jpg" alt="Silver Medalist 11" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/silver-medalist/12.jpg" alt="Silver Medalist 12" loading="lazy">

          </div>
        </div>


        <!-- ==========================================
       Ph.D. AWARDEES
  =========================================== -->

        <div class="award-gallery-panel" id="panel-phd" role="tabpanel" aria-labelledby="tab-phd" hidden>

          <div class="award-gallery-grid">

            <img src="/new-web/assets/convocation/six/other-gallery/phd/1.jpg" alt="PhD Awardee 1" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/2.jpg" alt="PhD Awardee 2" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/3.jpg" alt="PhD Awardee 3" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/4.jpg" alt="PhD Awardee 4" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/5.jpg" alt="PhD Awardee 5" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/6.jpg" alt="PhD Awardee 6" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/7.jpg" alt="PhD Awardee 7" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/8.jpg" alt="PhD Awardee 8" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/9.jpg" alt="PhD Awardee 9" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/10.jpg" alt="PhD Awardee 10" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/11.jpg" alt="PhD Awardee 11" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/phd/12.jpg" alt="PhD Awardee 12" loading="lazy">

          </div>
        </div>


        <!-- ==========================================
       UNDERGRADUATE & POSTGRADUATE AWARDEES
  =========================================== -->

        <div class="award-gallery-panel" id="panel-degree" role="tabpanel" aria-labelledby="tab-degree" hidden>

          <div class="award-gallery-grid">

            <img src="/new-web/assets/convocation/six/other-gallery/others/1.jpg" alt="Degree Awardee 1" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/2.jpg" alt="Degree Awardee 2" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/3.jpg" alt="Degree Awardee 3" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/4.jpg" alt="Degree Awardee 4" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/5.jpg" alt="Degree Awardee 5" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/6.jpg" alt="Degree Awardee 6" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/7.jpg" alt="Degree Awardee 7" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/8.jpg" alt="Degree Awardee 8" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/9.jpg" alt="Degree Awardee 9" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/10.jpg" alt="Degree Awardee 9" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/11.jpg" alt="Degree Awardee 9" loading="lazy">
            <img src="/new-web/assets/convocation/six/other-gallery/others/12.jpg" alt="Degree Awardee 9" loading="lazy">

          </div>
        </div>

      </section>


      <style>
        /* ==========================================
   AWARDEE GALLERY
   PREMIUM CONVOCATION THEME
========================================== */

        .award-gallery-section {
          position: relative;
          isolation: isolate;
          width: 100%;
          padding: 85px 0 110px;
          overflow: hidden;

          background:
            radial-gradient(ellipse at 5% 15%,
              rgba(239, 194, 111, 0.22),
              transparent 35%),
            radial-gradient(ellipse at 95% 75%,
              rgba(199, 145, 75, 0.13),
              transparent 38%),
            linear-gradient(135deg,
              #f9f2e7 0%,
              #f3e8d6 48%,
              #faf3e8 100%);
        }


        /* BACKGROUND PATTERN */

        .award-gallery-section::before {
          content: "";
          position: absolute;
          inset: 0;
          z-index: -1;
          pointer-events: none;

          background-image:
            radial-gradient(rgba(164, 123, 62, 0.19) 0.8px,
              transparent 0.8px);

          background-size: 24px 24px;
          opacity: 0.22;
        }


        /* DECORATIVE GLOW */

        .award-gallery-section::after {
          content: "";
          position: absolute;
          top: 0;
          right: -180px;
          width: 500px;
          height: 500px;
          z-index: -1;
          pointer-events: none;

          background: radial-gradient(circle,
              rgba(220, 171, 91, 0.13),
              transparent 70%);
        }


        /* ==========================================
   CATEGORY TABS
========================================== */

        .award-gallery-tabs {
          position: relative;
          width: min(1436px, calc(100% - 60px));
          margin: 0 auto 55px;

          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));

          overflow: hidden;
          border: 1px solid rgba(150, 111, 57, 0.23);
          border-radius: 12px;

          background: rgba(255, 252, 245, 0.65);

          box-shadow:
            0 12px 35px rgba(87, 62, 28, 0.055),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);

          backdrop-filter: blur(12px);
          -webkit-backdrop-filter: blur(12px);
        }


        /* INDIVIDUAL TAB */

        .award-tab {
          position: relative;
          min-width: 0;
          min-height: 115px;
          padding: 24px 22px;

          display: flex;
          align-items: center;
          gap: 14px;

          border: 0;
          border-right: 1px solid rgba(150, 111, 57, 0.19);

          background: transparent;
          color: #796b58;

          text-align: left;
          cursor: pointer;

          transition:
            background 0.4s ease,
            color 0.4s ease,
            box-shadow 0.4s ease;
        }

        .award-tab:last-child {
          border-right: 0;
        }


        /* ACTIVE INDICATOR */

        .award-tab::after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 0;

          width: 0;
          height: 4px;

          background: linear-gradient(90deg,
              #a8752e,
              #e7bd70,
              #a8752e);

          transition: width 0.5s cubic-bezier(.22, 1, .36, 1);
        }


        /* HOVER */

        .award-tab:hover {
          color: #4d3519;
          background: rgba(222, 177, 104, 0.12);
        }


        /* ACTIVE TAB */

        .award-tab.active {
          color: #392614;

          background: linear-gradient(135deg,
              rgba(241, 216, 171, 0.65),
              rgba(255, 249, 236, 0.85));

          box-shadow: inset 0 0 30px rgba(202, 156, 85, 0.08);
        }

        .award-tab.active::after {
          width: 100%;
        }


        /* TAB NUMBER */

        .tab-number {
          flex-shrink: 0;
          align-self: flex-start;
          padding-top: 5px;

          color: #a8752e;

          font-family: Arial, sans-serif;
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 1.5px;
        }


        /* TAB TITLE */

        .tab-title {
          flex: 1;
          min-width: 0;

          font-family: "Playfair Display", Georgia, serif;
          font-size: 18px;
          font-weight: 500;
          line-height: 1.4;

          transition:
            transform 0.35s ease,
            color 0.35s ease;
        }

        .award-tab:hover .tab-title,
        .award-tab.active .tab-title {
          transform: translateX(4px);
        }


        /* TAB ARROW */

        .tab-arrow {
          flex-shrink: 0;
          display: inline-block;

          color: #a8752e;
          font-family: Arial, sans-serif;
          font-size: 22px;

          opacity: 0.45;
          transform: translate(-3px, 3px);

          transition:
            opacity 0.35s ease,
            transform 0.35s ease;
        }

        .award-tab:hover .tab-arrow,
        .award-tab.active .tab-arrow {
          opacity: 1;
          transform: translate(0, 0);
        }


        /* ==========================================
   GALLERY PANELS
========================================== */

        .award-gallery-panel {
          position: relative;
          width: min(1350px, calc(100% - 60px));
          margin: 0 auto;
        }

        .award-gallery-panel[hidden] {
          display: none;
        }


        /* ==========================================
   GALLERY GRID
========================================== */

        .award-gallery-grid {
          display: grid;
          grid-template-columns: repeat(3, minmax(0, 1fr));
          gap: 14px;
        }


        /* IMAGE CARDS */

        .award-gallery-grid img {
          display: block;

          width: 100%;
          height: auto;

          border-radius: 12px;
          border: 1px solid rgba(164, 123, 62, 0.12);

          object-fit: contain;
          cursor: pointer;

          background: #fffaf1;

          box-shadow:
            0 5px 15px rgba(66, 45, 20, 0.07),
            0 18px 40px rgba(66, 45, 20, 0.045);

          opacity: 0;
          transform: translateY(25px) scale(0.975);

          animation: awardImageReveal 0.7s cubic-bezier(.22, 1, .36, 1) forwards;

          transition:
            transform 0.5s cubic-bezier(.22, 1, .36, 1),
            box-shadow 0.5s ease,
            border-color 0.4s ease;
        }


        /* STAGGERED ANIMATION */

        .award-gallery-grid img:nth-child(1) {
          animation-delay: 0.04s;
        }

        .award-gallery-grid img:nth-child(2) {
          animation-delay: 0.08s;
        }

        .award-gallery-grid img:nth-child(3) {
          animation-delay: 0.12s;
        }

        .award-gallery-grid img:nth-child(4) {
          animation-delay: 0.16s;
        }

        .award-gallery-grid img:nth-child(5) {
          animation-delay: 0.20s;
        }

        .award-gallery-grid img:nth-child(6) {
          animation-delay: 0.24s;
        }

        .award-gallery-grid img:nth-child(7) {
          animation-delay: 0.28s;
        }

        .award-gallery-grid img:nth-child(8) {
          animation-delay: 0.32s;
        }

        .award-gallery-grid img:nth-child(9) {
          animation-delay: 0.36s;
        }

        .award-gallery-grid img:nth-child(10) {
          animation-delay: 0.40s;
        }

        .award-gallery-grid img:nth-child(11) {
          animation-delay: 0.44s;
        }

        .award-gallery-grid img:nth-child(12) {
          animation-delay: 0.48s;
        }


        /* IMAGE ENTRANCE */

        @keyframes awardImageReveal {
          0% {
            opacity: 0;
            transform: translateY(25px) scale(0.975);
          }

          100% {
            opacity: 1;
            transform: translateY(0) scale(1);
          }
        }


        /* DESKTOP HOVER */

        @media (hover: hover) and (pointer: fine) {

          .award-gallery-grid img:hover {
            transform: translateY(-7px) scale(1.015);

            border-color: rgba(185, 137, 63, 0.55);

            box-shadow:
              0 12px 25px rgba(66, 45, 20, 0.10),
              0 25px 55px rgba(66, 45, 20, 0.13);
          }

        }


        /* ==========================================
   TABLET
========================================== */

        @media (max-width: 1100px) {

          .award-gallery-section {
            padding: 65px 0 85px;
          }

          .award-gallery-tabs {
            width: calc(100% - 40px);
          }

          .award-tab {
            min-height: 100px;
            padding: 18px 14px;
            gap: 10px;
          }

          .tab-title {
            font-size: 16px;
          }

          .award-gallery-panel {
            width: calc(100% - 40px);
          }

          .award-gallery-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
          }

        }


        /* ==========================================
   MOBILE
========================================== */

        @media (max-width: 650px) {

          .award-gallery-section {
            padding: 38px 0 60px;
          }

          /* STACKED TABS */

          .award-gallery-tabs {
            width: calc(100% - 32px);
            margin: 0 auto 30px;

            display: flex;
            flex-direction: column;

            border-radius: 9px;
          }

          .award-tab {
            width: 100%;
            min-height: 0;

            padding: 14px 15px;

            display: grid;
            grid-template-columns: 25px minmax(0, 1fr) 20px;
            align-items: center;
            gap: 8px;

            border: 0;
            border-bottom: 1px solid rgba(150, 111, 57, 0.16);
          }

          .award-tab:last-child {
            border-bottom: 0;
          }

          .award-tab::after {
            height: 3px;
          }

          .tab-number {
            align-self: center;
            padding: 0;
            font-size: 10px;
          }

          .tab-title {
            min-width: 0;
            font-size: 14px;
            line-height: 1.4;
          }

          .award-tab:hover .tab-title,
          .award-tab.active .tab-title {
            transform: none;
          }

          .tab-arrow {
            font-size: 18px;
            justify-self: end;
          }


          /* MOBILE GALLERY */

          .award-gallery-panel {
            width: calc(100% - 28px);
          }

          .award-gallery-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px;
          }

          .award-gallery-grid img {
            width: 100%;
            height: auto;
            border-radius: 8px;
          }

        }


        /* ==========================================
   SMALL MOBILE
========================================== */

        @media (max-width: 380px) {

          .award-gallery-section {
            padding: 30px 0 50px;
          }

          .award-gallery-tabs {
            width: calc(100% - 28px);
            margin-bottom: 24px;
          }

          .award-tab {
            padding: 12px 9px;
            grid-template-columns: 22px minmax(0, 1fr) 18px;
            gap: 7px;
          }

          .tab-title {
            font-size: 13px;
          }

          .award-gallery-panel {
            width: calc(100% - 28px);
          }

          .award-gallery-grid {
            gap: 6px;
          }

          .award-gallery-grid img {
            border-radius: 7px;
          }

        }


        /* ==========================================
   ACCESSIBILITY
========================================== */

        .award-tab:focus-visible {
          outline: 2px solid #a8752e;
          outline-offset: -3px;
        }

        @media (prefers-reduced-motion: reduce) {

          .award-gallery-grid img {
            animation: none;
            opacity: 1;
            transform: none;
            transition: none;
          }

          .award-tab,
          .award-tab::after,
          .tab-title,
          .tab-arrow {
            transition: none;
          }

        }
      </style>


      <script>

        /* ==========================================
           AWARDEE GALLERY TAB SWITCHING
        ========================================== */

        (function () {

          const sections = document.querySelectorAll(".award-gallery-section");

          sections.forEach(section => {

            const tabs = Array.from(section.querySelectorAll(".award-tab"));
            const panels = Array.from(section.querySelectorAll(".award-gallery-panel"));

            if (!tabs.length || !panels.length) return;


            /* ACTIVATE TAB */

            function activateTab(selectedTab) {

              const target = selectedTab.dataset.target;

              const activePanel = section.querySelector("#panel-" + target);

              if (!activePanel) return;


              /* UPDATE TAB STATES */

              tabs.forEach(tab => {

                const isActive = tab === selectedTab;

                tab.classList.toggle("active", isActive);
                tab.setAttribute("aria-selected", String(isActive));
                tab.setAttribute("tabindex", isActive ? "0" : "-1");

              });


              /* HIDE ALL PANELS */

              panels.forEach(panel => {

                panel.classList.remove("active");
                panel.hidden = true;

              });


              /* SHOW SELECTED PANEL */

              activePanel.hidden = false;
              activePanel.classList.add("active");


              /* RESTART IMAGE ANIMATIONS */

              const images = activePanel.querySelectorAll(".award-gallery-grid img");

              images.forEach(img => {

                img.style.animation = "none";

                void img.offsetWidth;

                img.style.animation = "";

              });

            }


            /* CLICK INTERACTION */

            tabs.forEach(tab => {

              tab.addEventListener("click", () => {

                activateTab(tab);

              });

            });


            /* KEYBOARD NAVIGATION */

            tabs.forEach((tab, index) => {

              tab.addEventListener("keydown", event => {

                let nextIndex = index;

                if (
                  event.key === "ArrowRight" ||
                  event.key === "ArrowDown"
                ) {

                  nextIndex = (index + 1) % tabs.length;

                } else if (
                  event.key === "ArrowLeft" ||
                  event.key === "ArrowUp"
                ) {

                  nextIndex = (index - 1 + tabs.length) % tabs.length;

                } else if (event.key === "Home") {

                  nextIndex = 0;

                } else if (event.key === "End") {

                  nextIndex = tabs.length - 1;

                } else {

                  return;

                }

                event.preventDefault();

                tabs[nextIndex].focus();

                activateTab(tabs[nextIndex]);

              });

            });

          });

        })();

      </script>


      <!-- =========================================
     SECTION: GALLERY
========================================= -->



    </div>

  </main>


  <!-- =====================================
     JAVASCRIPT - GATE SCROLL ANIMATION
====================================== -->

  <script>

    (() => {

      const entrance = document.getElementById('entrance');
      const gate = document.getElementById('gateWrap');
      const copy = document.getElementById('entranceCopy');
      const cue = document.getElementById('scrollCue');
      const site = document.getElementById('site');

      const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
      ).matches;


      /* VIDEO AUTOPLAY - MUTED */

      const video = document.querySelector('.film-video');

      if (video) {

        video.muted = true;
        video.defaultMuted = true;

        const playVideo = () => {
          video.play().catch(() => { });
        };

        playVideo();

        document.addEventListener('visibilitychange', () => {

          if (!document.hidden) {
            playVideo();
          }

        });

      }


      /* SCROLL ANIMATION */

      const clamp = (value, min, max) => {
        return Math.min(max, Math.max(min, value));
      };

      const smooth = (t) => {
        return t * t * (3 - 2 * t);
      };

      let ticking = false;


      function render() {

        const rect = entrance.getBoundingClientRect();

        const scrollable =
          entrance.offsetHeight - window.innerHeight;

        const progress = clamp(
          -rect.top / scrollable,
          0,
          1
        );


        if (reducedMotion) {

          gate.style.transform =
            'translate(-50%, -50%)';

          gate.style.opacity = '1';

          copy.style.opacity = '1';

          cue.style.opacity = '1';

          site.classList.add('is-revealed');

          ticking = false;
          return;

        }


        /* CAMERA MOVEMENT THROUGH GATE */

        const zoomProgress = clamp(
          (progress - 0.12) / 0.78,
          0,
          1
        );

        const eased = smooth(zoomProgress);

        const scale = 1 + eased * 4.7;

        const lift = eased * -5.5;

        const fade = clamp(
          (progress - 0.78) / 0.19,
          0,
          1
        );


        gate.style.transform = `
            translate(-50%, calc(-50% + ${lift}vh))
            scale(${scale})
        `;

        gate.style.opacity = String(1 - fade);


        /* HIDE GATE TEXT */

        copy.style.opacity = String(
          1 - clamp(progress / 0.22, 0, 1)
        );

        cue.style.opacity = String(
          1 - clamp(progress / 0.12, 0, 1)
        );


        /* REVEAL WEBSITE */

        if (progress > 0.91) {
          site.classList.add('is-revealed');
        } else {
          site.classList.remove('is-revealed');
        }

        ticking = false;

      }


      function requestRender() {

        if (!ticking) {
          ticking = true;
          requestAnimationFrame(render);
        }

      }


      window.addEventListener(
        'scroll',
        requestRender,
        { passive: true }
      );

      window.addEventListener(
        'resize',
        requestRender
      );

      window.addEventListener(
        'load',
        requestRender
      );

      render();

    })();

  </script>
@endsection
