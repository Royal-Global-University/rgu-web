@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 120px; position: relative;">

            <img src="mobile-assets/new-labs/new-labs/lab-mechanical-new/mobileMechanicalWorkshop.png" alt="">
        </div>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

    </div>

    <style>
        /* ===== RESET ===== */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* ===== BASE ===== */
        .rgu-mech-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-mech-hero {
            background: url('mobile-assets/new-labs/lab-mechanical-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-mech-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-mech-content {
            width: 50%;
        }

        .rgu-mech-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .rgu-mech-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-mech-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-mech-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-mech-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-mech-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-mech-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-mech-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-mech-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-mech-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-mech-section-title {
            color: #27467a;
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Small decorative dot before titles */
        .rgu-mech-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-mech-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-mech-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-mech-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-mech-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-mech-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-mech-highlight {
            color: orange;
        }

        .rgu-mech-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-mech-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-mech-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-mech-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-mech-hero-img,
            .rgu-mech-content {
                width: 100%;
            }

            .rgu-mech-title {
                font-size: 24px;
            }

            .rgu-mech-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-mech-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-mech-activities-title {
                font-size: 1.8rem;
            }

            .rgu-mech-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-mech-grid {
                grid-template-columns: 1fr;
            }

            .rgu-mech-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-mech-body">
        <section class="rgu-mech-hero">

            <img src="mobile-assets/new-labs/lab-mechanical-new/headimg.jpeg" class="rgu-mech-hero-img">

            <div class="rgu-mech-content">
                <h2 class="rgu-mech-title">Mechanical Engineering Laboratories</h2>

                <p class="rgu-mech-text">
                    The Mechanical Engineering Laboratories at The Assam Royal Global University encompass key areas such as
                    Fluid Mechanics & Hydraulic Machines Lab, Heat Transfer Lab, Strength of Materials Lab, Dynamics of
                    Machine
                    Lab,
                    Metrology Lab and Mechanical Workshops (Machine shop, Welding Shop, Carpentry and Fitting).
                    These labs are well-equipped with modern instruments and experimental setups that enable students to
                    explore,
                    analyse, and validate fundamental Engineering concepts through practical applications.
                    The facilities are designed to promote hands-on learning, technical skill development, and a deeper
                    understanding
                    of real-world engineering systems. The laboratories are situated in Block – C on the ground floor.
                </p>


            </div>
        </section>

        <section class="rgu-mech-activities">

            <h3 class="rgu-mech-activities-title">LIST OF LAB ACTIVITIES:</h3>

            <div class="rgu-mech-cards-container">

                <div class="rgu-mech-section">
                    <h4 class="rgu-mech-section-title">Fluid Mechanics Lab</h4>
                    <ul>
                        <li>Verification of Bernoulli’s theorem</li>
                        <li>Flow measurement using Venturimeter/Orifice meter</li>
                        <li>Study of Reynolds number</li>
                        <li>Minor and major losses in pipes</li>
                        <li>Kaplan Turbine</li>
                        <li>Francis Turbine</li>
                        <li>Impact of Jet apparatus</li>
                        <li>Centrifugal Pump</li>
                        <li>Hydraulic Ram</li>
                    </ul>
                </div>

                <div class="rgu-mech-section">
                    <h4 class="rgu-mech-section-title">Heat Transfer Lab</h4>
                    <ul>
                        <li>Heat transfer through composite wall</li>
                        <li>Natural and forced convection experiments</li>
                        <li>Stefan–Boltzmann constant determination</li>
                        <li>Heat exchanger performance analysis</li>
                        <li>Parallel and Counter flow Heat Exchangers</li>
                        <li>Heat Pipe</li>
                        <li>Condenser Heat exchanger</li>
                        <li>Emissivity apparatus</li>
                    </ul>
                </div>

                <div class="rgu-mech-section">
                    <h4 class="rgu-mech-section-title">Strength of Materials Lab</h4>
                    <ul>
                        <li>Universal Testing Machine (UTM)</li>
                        <li>Izod impact testing machine</li>
                        <li>Charpy impact testing machine</li>
                        <li>Rockwell Hardness Test Rig</li>
                        <li>Fatigue Testing Machine</li>
                    </ul>
                </div>

                <div class="rgu-mech-section">
                    <h4 class="rgu-mech-section-title">Mechanical Workshop</h4>
                    <ul>
                        <li>Lathe, drilling, and milling operations</li>
                        <li>Welding processes</li>
                        <li>Carpentry</li>
                        <li>Fitting</li>
                    </ul>
                </div>

                <div class="rgu-mech-section">
                    <h4 class="rgu-mech-section-title">Metrology Lab</h4>
                    <ul>
                        <li>Measurement using vernier caliper and micrometer</li>
                        <li>Surface roughness measurement</li>
                        <li>Gear and thread measurement</li>
                        <li>Comparators and gauges</li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="rgu-mech-gallery">

            <h2 class="rgu-mech-gallery-title">
                Glimpse of <span class="rgu-mech-highlight">Our Lab</span>
            </h2>

            <div class="rgu-mech-grid">
                <img src="/mobile-assets/new-labs/me-new/me-1.jpeg">
                <img src="/mobile-assets/laboratories/heat-transfer-lab.png">
                <img src="/mobile-assets/new-labs/me-new/me-3.jpeg">
                <img src="/mobile-assets/new-labs/me-new/me-4.jpeg">
                <img src="/mobile-assets/new-labs/me-new/me-5.jpeg">
                <img src="/mobile-assets/new-labs/me-new/me-6.jpeg">
                <img src="/mobile-assets/new-labs/me-new/me-7.jpeg">
                <img src="/mobile-assets/new-labs/me-new/me-8.jpeg">
            </div>

        </section>
    </section>
@endsection
