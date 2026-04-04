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
            background: url('mobile-assets/new-labs/lab-architecture-new/bgg.svg') center/cover no-repeat;
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
            font-weight: 800;
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

            <img src="mobile-assets/new-labs/lab-architecture-new/headimg.jpg" class="rgu-mech-hero-img">

            <div class="rgu-mech-content">
                <h2 class="rgu-mech-title">Architecture Design Studios</h2>

                <p class="rgu-mech-text">
                    The design studios of the Royal School of Architecture throw a focus on advanced digital technologies,
                    material systems and design research which strives to shape the future of the next generation of
                    designers. In
                    an era of smart cities, sustainable buildings, and contemporary architecture, we train our students to
                    become
                    lateral thinkers by focusing on a critical design approach. The studios are situated in block- C on the
                    second
                    and third floor.
                </p>

                <div class="text-dark">
                    <h4>Available Software Programs:</h4>
                    <ol>
                        <li>AutoCAD</li>
                        <li>Revit</li>
                        <li>Adobe Photoshop</li>
                        <li>ArchiCAD</li>
                    </ol>
                </div>

            </div>
        </section>

        <div class="text-dark pt-3 pb-3" style="padding-left: 50px; padding-right: 50px;">
            <ol>
                <li>Developing architectural design projects, keeping in mind the climatic condition of the site
                </li>

                <li>Studying different building technologies and services like plumbing and sanitation</li>

                <li>Practically observe building materials, their typologies and specifications</li>

                <li>Study electrical wirings, fittings and services</li>

                <li>Exercises related to surveying and levelling give students hands-on experience and help them
                    understand the characteristics of the site</li>

                <li>Learning techniques of testing compressive and tensile strengths of building materials</li>

                <li>Making small prototypes of brick joints, wooden joints etc</li>

                <li>Experiment with various building materials</li>
            </ol>
        </div>

        <!-- <section class="rgu-mech-activities">

                      <h3 class="rgu-mech-activities-title">Included In The Lab Are:</h3>

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
                    </section> -->

        <section class="rgu-mech-gallery">

            <h2 class="rgu-mech-gallery-title">
                Glimpse of <span class="rgu-mech-highlight">Our Studios</span>
            </h2>

            <div class="rgu-mech-grid">
                <img src="mobile-assets/new-labs/lab-architecture-new/1.jpg">
                <img src="mobile-assets/new-labs/lab-architecture-new/2.jpg">
                <img src="mobile-assets/new-labs/lab-architecture-new/3.jpg">
                <img src="mobile-assets/new-labs/lab-architecture-new/4.jpg">
                <img src="mobile-assets/new-labs/lab-architecture-new/5.jpg">
                <img src="mobile-assets/new-labs/lab-architecture-new/6.jpg">
                <img src="mobile-assets/new-labs/lab-architecture-new/7.jpg">

            </div>

        </section>
    </section>
@endsection
