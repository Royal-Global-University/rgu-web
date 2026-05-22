@extends('frontend/new-master')
@section('title', 'Social Outreach : The Assam Royal Global University')
@section('meta_description',
    'Learn how Royal Global University engages in impactful social outreach initiatives,
    fostering community development, sustainability, and inclusive growth through education and service')
@section('meta_keywords', 'Social Outreach')
@section('content')

    <style>
        /* ===== BASE & VARIABLES ===== */
        :root {
            --rgu-primary: #0f2a4d;
            --rgu-accent: #E15825;
            --rgu-accent-light: #FFB121;
            --rgu-text-dark: #334155;
            --rgu-text-light: #64748b;
            --rgu-bg: #f4f7f9;
            --rgu-card-bg: #ffffff;
        }

        .rgu-outreach-section {
            background-color: var(--rgu-bg);
            padding: 80px 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .rgu-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        /* ===== HEADER ===== */
        .rgu-section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px auto;
        }

        .rgu-section-header h2 {
            font-size: 36px;
            color: var(--rgu-primary);
            margin-bottom: 15px;
            font-weight: 800;
            position: relative;
            display: inline-block;
        }

        .rgu-section-header h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: var(--rgu-accent);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .rgu-section-header p {
            font-size: 18px;
            color: var(--rgu-text-light);
            line-height: 1.6;
        }

        /* ===== GRID LAYOUT ===== */
        .rgu-outreach-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(550px, 1fr));
            gap: 30px;
            align-items: stretch;
        }

        /* ===== MODERN CARDS ===== */
        .rgu-card {
            background: var(--rgu-card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(15, 42, 77, 0.06);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .rgu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(15, 42, 77, 0.12);
        }

        .rgu-card-img {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .rgu-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .rgu-card:hover .rgu-card-img img {
            transform: scale(1.08);
        }

        /* Elegant Badge floating on the image */
        .rgu-badge {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(255, 255, 255, 0.95);
            color: var(--rgu-primary);
            padding: 6px 14px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(4px);
        }

        .rgu-card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .rgu-card-body p {
            font-size: 15px;
            line-height: 1.7;
            color: var(--rgu-text-dark);
            margin: 0;
        }

        /* ===== FEATURE BANNER (Full Width inside Grid) ===== */
        .rgu-feature-banner {
            grid-column: 1 / -1;
            /* Spans all columns */
            background: linear-gradient(145deg, #0f2a4d 0%, #1a3b66 100%);
            border-radius: 20px;
            padding: 40px;
            margin: 15px 0;
            box-shadow: 0 20px 40px rgba(15, 42, 77, 0.2);
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        /* Decorative background circles */
        .rgu-feature-banner::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(225, 88, 37, 0.1);
            border-radius: 50%;
            z-index: 0;
        }

        .rgu-feature-content {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 40px;
            position: relative;
            z-index: 1;
            align-items: center;
        }

        .rgu-feature-item {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .rgu-feature-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border: 3px solid rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
        }

        .rgu-feature-text h3 {
            font-size: 22px;
            color: var(--rgu-accent-light);
            margin: 0 0 12px 0;
        }

        .rgu-feature-text p {
            font-size: 15px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.85);
            margin: 0 0 15px 0;
        }

        .rgu-quote {
            margin: 0;
            padding-left: 15px;
            border-left: 3px solid var(--rgu-accent);
            font-style: italic;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
        }

        .rgu-quote span {
            font-size: 12px;
            font-weight: 600;
            color: var(--rgu-accent-light);
            font-style: normal;
            display: block;
            margin-top: 5px;
        }

        .rgu-feature-divider {
            width: 1px;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
        }

        /* ===== RESPONSIVE TWEAKS ===== */
        @media (max-width: 1100px) {
            .rgu-feature-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .rgu-feature-divider {
                height: 1px;
                width: 100%;
                background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            }
        }

        @media (max-width: 768px) {
            .rgu-outreach-section {
                padding: 50px 15px;
            }

            .rgu-section-header h2 {
                font-size: 28px;
            }

            .rgu-outreach-grid {
                grid-template-columns: 1fr;
                /* 1 Column on mobile */
            }

            .rgu-feature-item {
                flex-direction: column;
                text-align: center;
            }

            .rgu-feature-img {
                width: 100%;
                height: 220px;
            }

            .rgu-quote {
                border-left: none;
                border-top: 3px solid var(--rgu-accent);
                padding: 15px 0 0 0;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/discover-rgu-social-outreach/headimg.png');">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Social Outreach</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Campus & Student Life / Social Outreach
            </div>
        </div>

    </section>

    <section class="rgu-outreach-section">
        <div class="rgu-container">


            <!-- Outreach Grid -->
            <div class="rgu-outreach-grid">

                <!-- Card 1 -->
                <div class="rgu-card">
                    <div class="rgu-card-img">
                        <img src="/new-web/assets/img/index/social-outreach/1.jpeg"
                            alt="Royal Anna Seva Initiative">
                        <span class="rgu-badge">Royal Anna Seva</span>
                    </div>
                    <div class="rgu-card-body">
                        <p>
                            The Assam Royal Global University, is a non-profit charitable society which is formed
                            primarily for spreading education in the society. As an endeavor towards USR, the The Assam
                            Royal Global University has launched a project ROYAL ANNA SEVA whereby on a daily basis 100
                            lunch packets are distributed to needy and deprived across the city. During the pandemic
                            Food Materials (Raashan) worth ₹25 lakhs were distributed among the poor and needy.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="rgu-card">
                    <div class="rgu-card-img">
                        <img src="/new-web/assets/img/index/social-outreach/2.jpeg" alt="Royal Swasthya Seva">
                        <span class="rgu-badge">Royal Swasthya Seva</span>
                    </div>
                    <div class="rgu-card-body">
                        <p>
                            The Assam Royal Global University started another project named ROYAL SWASTHYA SEVA, an
                            initiative towards providing health services to the people staying in and around the area.
                            Under this project, a dispensary managed by a doctor has been opened to provide medical
                            services at free of cost.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="rgu-card">
                    <div class="rgu-card-img">
                        <img src="/new-web/assets/img/index/social-outreach/16.jpeg" alt="Jaatri Mitra">
                        <span class="rgu-badge">Royal Vastra Seva</span>
                    </div>
                    <div class="rgu-card-body">
                        <p>
                            The ROYAL VASTRA SEVA initiative brings to you the scope of spreading kindness and warmth to
                            the vulnerable section. The Assam Royal Global University through its philanthropic
                            initiative, is walking towards a noble cause of helping the needy while nurturing its
                            community, through the nature of the ‘art of giving’.
                            “For it is in giving that we receive.” – ST. FRANCIS OF ASSISI
                            <br><br>
                            Please take care of the following points while participating in the drive:
                            1. The donors will carry some old newspapers or paper carry bags along with their donation
                            items, as it will help the donee collect their needed items and wrap them. 2. The donors are
                            to donate by offering clean, wearable clothes and usable items and not treat this platform
                            as a discarding space.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="rgu-card">
                    <div class="rgu-card-img">
                        <img src="/new-web/assets/img/index/social-outreach/17.jpeg" alt="No Plastic">
                        <span class="rgu-badge">COVID-19</span>
                    </div>
                    <div class="rgu-card-body">
                        <p>
                            During the pandemic of COVID 19, The Assam Royal Global University generously earmarked ₹
                            1,00,00,000/- (one crore) on 29th march,2020 to fight COVID-19, the greatest challenge known
                            to the mankind so far. In the first wave of the spread of Covid, a section of the new block
                            of RGU was given to the government of Assam for using it as a 700 bedded covid care Centre.
                            <br><br>
                            Also during the second wave, the same section was converted into a 1000-bedded Covid Care
                            Unit. Financial support was lent to those staff RGU and RGS who were infected with Corona
                            virus and were facing difficulty in getting medical treatment due to financial constraints.
                            Those students who lost their parents/earning member due to the disease were offered
                            education, free of cost in the university.
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </section>

@endsection
