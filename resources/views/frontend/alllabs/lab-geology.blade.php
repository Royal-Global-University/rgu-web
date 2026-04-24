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
        .rgu-geology-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-geology-hero {
            background: url('mobile-assets/laboratories/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-geology-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-geology-content {
            width: 50%;
        }

        .rgu-geology-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-geology-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-geology-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-geology-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-geology-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-geology-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-geology-activities-title {
            text-align: left;
            color: #1f355e;
            margin-bottom: 25px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-geology-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-geology-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-geology-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-geology-section-title {
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
        .rgu-geology-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-geology-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-geology-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-geology-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-geology-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-geology-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-geology-highlight {
            color: orange;
        }

        .rgu-geology-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-geology-grid img {
            border: 1px solid #999;
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-geology-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-geology-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-geology-hero-img,
            .rgu-geology-content {
                width: 100%;
            }

            .rgu-geology-title {
                font-size: 24px;
            }

            .rgu-geology-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-geology-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-geology-activities-title {
                font-size: 1.8rem;
            }

            .rgu-geology-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-geology-grid {
                grid-template-columns: 1fr;
            }

            .rgu-geology-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-geology-body" style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <section class="rgu-geology-hero">

            <img src="mobile-assets/laboratories/new-lab-geology/headimg.jpg" class="rgu-geology-hero-img">

            <div class="rgu-geology-content">
                <h2 class="rgu-geology-title">Geology Laboratory</h2>

                <p class="rgu-geology-text">
                    Our Geology laboratory is professional and purpose-built, consisting of two specialized sections: the
                    Geological Sample Lab and the Petrography Lab. The labs are well-equipped with a diverse collection of
                    crystal
                    models, mineral, rock, and fossil specimens alongside modern analytical tools, such as Petrological
                    Polarizing
                    Microscopes, to help students explore the Earth's composition and history through hands-on study. It is
                    designed to aid and guide students in identifying physical properties and microscopic characteristics,
                    analyzing structural features, and drawing geological inferences while experimenting.
                </p>

                <!-- <div class="rgu-geology-lablist">
              <h4>Available Labs:</h4>
              <ol>
                <li>Fluid Mechanics Lab</li>

              </ol>
            </div> -->

            </div>
        </section>

        <section class="rgu-geology-activities">

            <div class="rgu-geology-cards-container">

                <div class="rgu-geology-section">
                    <h3 class="rgu-geology-activities-title">Lab Instruments Includes:</h3>
                    <!-- <h4 class="rgu-geology-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>Polarizing (Petrological) Microscope</li>
                        <li>Compensator</li>
                        <li>Goniometer</li>
                        <li>Opisometer</li>
                        <li>Brunton Compass</li>
                        <li>Clinometer</li>
                    </ul>
                </div>

                <div class="rgu-geology-section">
                    <h3 class="rgu-geology-activities-title">Included activities in the lab:</h3>
                    <!-- <h4 class="rgu-geology-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>Crystallographic analysis and symmetry identification using wooden crystal models</li>
                        <li>Petrographic characterization of rocks (Megascopic & Microscopic)</li>
                        <li>Hands-on recognition of rock-forming and ore-forming minerals, and their economic assessment
                        </li>
                        <li>Geological map interpretation and subsurface structural cross-section profiling, Stereonet
                            analysis for
                            structural orientation and tectonic data interpretation</li>
                        <li>Palaeontological documentation of fossil morphology</li>
                        <li>Fluvial morphometry, sinuosity analysis, and drainage density calculations</li>
                        <li>Geospatial and Remote Sensing applications in terrain analysis</li>
                        <li>Support for dissertation, project work, and research-based training in Geology</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="rgu-geology-gallery">

            <h2 class="rgu-geology-gallery-title">
                Glimpse of <span class="rgu-geology-highlight">our Lab</span>
            </h2>

            <div class="rgu-geology-grid">
                <img src="mobile-assets/laboratories/new-lab-geology/1.jpg">
                <img src="mobile-assets/laboratories/new-lab-geology/2.jpg">
                <img src="mobile-assets/laboratories/new-lab-geology/3.jpg">
                <img src="mobile-assets/laboratories/new-lab-geology/4.jpg">
                <img src="mobile-assets/laboratories/new-lab-geology/5.jpg">
                <img src="mobile-assets/laboratories/new-lab-geology/6.jpg">
            </div>

        </section>
    </section>
@endsection
