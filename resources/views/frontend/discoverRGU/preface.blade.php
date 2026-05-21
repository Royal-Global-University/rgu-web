@extends('frontend/new-master')
@section('content')

        <style>
        /* ================= PREFACE SECTION (ISOLATED) ================= */

        .pf-sec {
            background: #EEF2F6;
            padding: 8rem 2rem 0rem 2rem;

        }

        .pf-container {
            max-width: 1300px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 6rem;
            align-items: center;
        }

        /* IMAGE */
        .pf-img-wrap {
            border-radius: 2rem;
            overflow: hidden;
        }

        .pf-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* CONTENT */
        .pf-content {
            color: #2f4b77;
        }

        /* TITLE */
        .pf-title {
            font-family: "Playfair Display", serif;
            font-size: 5rem;
            margin-bottom: 2rem;
            letter-spacing: 1px;
        }

        /* TEXT */
        .pf-text {
            font-size: 1.7rem;
            line-height: 1.9;
            color: #4a4a4a;
            text-align: justify;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {
            .pf-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .pf-title {
                font-size: 3.2rem;
                text-align: center;
            }

            .pf-content {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .pf-sec {
                padding: 5rem 1.5rem;
            }

            .pf-title {
                font-size: 2.6rem;
            }

            .pf-text {
                font-size: 1.5rem;
            }
        }


        /* ================= DG SECTION ================= */
        .dg-sec {
            padding: 6rem 2rem;
            background: #27467A;
        }

        /* ================= LAYOUT ================= */
        .dg-container {
            max-width: 1350px;
            margin: auto;
            display: grid;
            grid-template-columns: 200px 1fr 200px;
            gap: 2rem;
        }

        .dg-col {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* MAIN GRID */
        .dg-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            grid-auto-flow: dense;
        }

        /* ================= CARD ================= */
        .dg-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: #eef2f7;
            color: #2f4b77;
            /* padding: 2rem 1.2rem; */
            border-radius: 14px;
            font-size: 1.4rem;
            font-weight: 600;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            min-height: 140px;
            transition: all 0.3s ease;
        }

        /* ICON */
        .dg-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #0000000f;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .dg-icon img {
            width: 36px;
            height: 36px;
            object-fit: contain;
        }

        /* TEXT */
        .dg-card span {
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* HOVER */
        .dg-card:hover {
            background: #E15825;
            color: #fff;
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
        }

        .dg-card::after {
            content: "↗";
            position: absolute;
            bottom: 10px;
            right: 12px;
            opacity: 0;
            transition: 0.3s;
        }

        .dg-card:hover::after {
            opacity: 1;
            transform: translate(4px, -4px);
        }

        /* ================= IMAGE CARD ================= */
        .dg-image {
            grid-column: span 2;
            border-radius: 14px;
            overflow: hidden;
            height: 240px;
        }

        .dg-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dg-image:hover img {
            transform: scale(1.05);
        }

       /* ================= TABLET ================= */

        @media (max-width: 1100px) {

            .dg-container {
                /* Make the master container the 2-column grid */
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .dg-col, .dg-grid {
                /* 🔥 MAGIC FIX: Makes wrapper divs invisible to the grid layout, letting cards flow together */
                display: contents;
            }

            .dg-image {
                grid-column: span 2;
                height: 200px;
            }
        }

        /* ================= MOBILE ================= */

        @media (max-width: 600px) {

            .dg-sec {
                padding: 4rem 1.5rem;
            }

            .dg-container {
                gap: 12px; /* Tighter gap for mobile */
            }

            .dg-card {
                min-height: 130px;
                height: auto;
                padding: 1.2rem;
                font-size: 1.2rem;
            }

            .dg-icon {
                width: 48px;
                height: 48px;
            }

            .dg-icon img {
                width: 28px;
                height: 28px;
            }

            .dg-image {
                grid-column: span 2;
                height: 160px;
            }
        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg');"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Preface</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / About the University / Preface
            </div>
        </div>

    </section>

    <section class="pf-sec">
        <div class="pf-container">


            <!-- RIGHT CONTENT -->
            <div class="pf-content">
                <!-- <h2 class="pf-title">PREFACE</h2> -->
                <p class="pf-text">
                    The Assam Royal Global University (RGU), one of the premium Universities in India,
                    has continuously acted as a leadership Platform that aligns interests of industries,
                    entrepreneurs, and The youth since its establishment in 2017. Aimed at creating and
                    Sustaining an environment wherein employment and Entrepreneurship can flourish
                    with collaborative Efforts amongst an extensive network of influential corporates,
                    Individual members, and academic institutes, royal global University has been able
                    to provide necessary resources, Knowledge, and support to create effective
                    employment and Entrepreneurship opportunities.
                </p>
            </div>

        </div>
    </section>

    <section>
        <img style="width: 100%;" src="/new-web/assets/img/discover-rgu-preface/curve1.svg" alt="">
    </section>

    <section class="dg-sec">
        <div class="dg-container">

            <!-- LEFT COLUMN -->
            <div class="dg-col">
                <a href="/vision-mission" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/vision-mission.svg" alt="">
                    </div>
                    <span>VISION AND MISSION</span>
                </a>

                <a href="/award" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/awards-honors.svg" alt="">
                    </div>
                    <span>AWARDS AND HONORS</span>
                </a>

                <a href="/social-outreach" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/philantrophy.svg" alt="">
                    </div>
                    <span>PHILANTHROPY</span>
                </a>

                <a href="/knowledge" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/knowledge-base.svg" alt="">
                    </div>
                    <span>KNOWLEDGE BASE</span>
                </a>
            </div>

            <!-- CENTER GRID -->
            <div class="dg-grid">

                <a href="/recognition-accreditation" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/recignition.svg" alt="">
                    </div>
                    <span>RECOGNITION AND ACCREDITATION</span>
                </a>

                <a href="/leadership-chancellor" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/world-of.svg" alt="">
                    </div>
                    <span>WORLD OF OPPORTUNITIES</span>
                </a>

                <a href="/facilities" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/facilities.svg" alt="">
                    </div>
                    <span>FACILITIES</span>
                </a>

                <a href="/leadership" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/leadership-team.svg" alt="">
                    </div>
                    <span>LEADERSHIP TEAM</span>
                </a>

                <!-- IMAGE CARD -->
                <a class="dg-card dg-image">
                    <img src="/new-web/assets/img/discover-rgu-preface/img2.jpg" alt="">
                </a>

                <a href="/privacy-security" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/privacy.svg" alt="">
                    </div>
                    <span>PRIVACY AND DATA PROTECTION</span>
                </a>

                <a href="/scholarship&funding" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/scholarship.svg" alt="">
                    </div>
                    <span>SCHOLARSHIP AND FUNDING</span>
                </a>

                <a href="/association-tieup" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/association-tieups.svg" alt="">
                    </div>
                    <span>TIE UPS AND ASSOCIATION</span>
                </a>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="dg-col">
                <a href="/strategic-location" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/stre-location.svg" alt="">
                    </div>
                    <span>STRATEGIC LOCATION</span>
                </a>

                <a href="/jobs-vacancies" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/job-vacancy.svg" alt="">
                    </div>
                    <span>JOBS AND VACANCY</span>
                </a>

                <a href="/research-publication-overview" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/research.svg" alt="">
                    </div>
                    <span>RESEARCH AND PUBLICATION</span>
                </a>

                <a href="https://alumni.rgu.ac/" class="dg-card">
                    <div class="dg-icon">
                        <img src="/new-web/assets/img/discover-rgu-preface/card-icons/alumni.svg" alt="">
                    </div>
                    <span>ALUMNI</span>
                </a>
            </div>

        </div>
    </section>

    <section>
        <img style="width: 100%;" src="/new-web/assets/img/discover-rgu-preface/curve2.svg" alt="">
    </section>

@endsection
