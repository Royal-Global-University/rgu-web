@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 120px;"></div>

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

            <img src="/mobile-assets/lab-forestry/f11.png" class="rgu-mech-hero-img">

            <div class="rgu-mech-content">
                <h2 class="rgu-mech-title">Forestry and Environmental Science Laboratory</h2>

                <p class="rgu-mech-text">
                    The Forestry and Environmental Science Laboratory of The Assam Royal Global University, located on the
                    4th floor of B-Block, supports both field- and laboratory-based training and research in forestry,
                    ecology, and environmental science. The facility is equipped with essential analytical instruments,
                    along with field tools and additional resources for forestry analysis and data processing. With a strong
                    emphasis on capacity building and applied learning, the practical activities integrate forestry-based
                    entrepreneurship initiatives and Green Commando training. It also extends to the development and
                    demonstration of food-forests and commercial potential agroforestry systems through field-based learning
                    and experiential training, linking ecological principles with economic viability. Collectively, these
                    components enhance students’ competencies in forest assessment, soil science, agroforestry systems,
                    geospatial applications, and sustainable natural resource management.
                </p>

            </div>
        </section>

        <div class="row p-5">
            <div class="col-lg-6">
                <div class="text-dark container">
                    <div class="col-lg-6"></div>
                    <h4>Included in the Lab are:</h4>
                    <ol>
                        <li>Water Analyzer</li>
                        <li>Trinocular stereo-zoom microscope CZM-6</li>
                        <li>Computer (Desktop) system and analytical software</li>
                        <li>Spherical Densiometer</li>
                        <li>Binocular</li>
                        <li>Hot air oven</li>
                        <li>Core cutter with Dolly rammer</li>
                        <li>Post-hole Auger</li>
                        <li>Herbarium plant press etc.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-dark container">
                    <h4>Included in the Lab are:</h4>
                    <ol>
                        <li>Herbarium preparation, preservation, and documentation techniques</li>
                        <li>Biodiversity assessment and PBR preparation</li>
                        <li>Training in Green Commando and entrepreneurship skill development</li>
                        <li>Developing food forest and commercial agroforests</li>
                        <li>Forest mensuration and forest soil analysis</li>
                        <li>Detection of micro-plastics in soil, water, and plants</li>
                        <li>Exposure to GIS and remote sensing applications in forestry studies</li>
                        <li>Support for dissertation, project work, and research-based training, and much more...</li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="rgu-mech-gallery">

            <h2 class=" rgu-mech-gallery-title">
                Glimpse of <span class="rgu-mech-highlight">Our Lab</span>
            </h2>

            <div class="rgu-mech-grid">
                <img src="/mobile-assets/lab-forestry/f11.png">
                <img src="/mobile-assets/lab-forestry/f15.png">
                <img src="/mobile-assets/lab-forestry/f14.png">
                <img src="/mobile-assets/lab-forestry/f13.png">
                <img src="/mobile-assets/lab-forestry/f12.png">

            </div>

        </section>
    </section>
@endsection
