@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;"></div>
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
        .rgu-biotech-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-biotech-hero {
            background: url('mobile-assets/new-labs/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-biotech-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-biotech-content {
            width: 50%;
        }

        .rgu-biotech-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-biotech-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-biotech-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-biotech-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-biotech-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-biotech-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-biotech-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-biotech-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-biotech-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-biotech-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-biotech-section-title {
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
        .rgu-biotech-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-biotech-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-biotech-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-biotech-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-biotech-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-biotech-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-biotech-highlight {
            color: orange;
        }

        .rgu-biotech-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-biotech-grid img {
            border: 1px solid #999;
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-biotech-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-biotech-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-biotech-hero-img,
            .rgu-biotech-content {
                width: 100%;
            }

            .rgu-biotech-title {
                font-size: 24px;
            }

            .rgu-biotech-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-biotech-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-biotech-activities-title {
                font-size: 1.8rem;
            }

            .rgu-biotech-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-biotech-grid {
                grid-template-columns: 1fr;
            }

            .rgu-biotech-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-biotech-body">
        <section class="rgu-biotech-hero">

            <img src="mobile-assets/new-labs/lab-biotech-new/headimg.png" class="rgu-biotech-hero-img">

            <div class="rgu-biotech-content">
                <h2 class="rgu-biotech-title">Biotechnology Laboratory</h2>

                <p class="rgu-biotech-text">
                    The Biotechnology Laboratory is a state-of-the-art facility equipped with advanced instruments to
                    support
                    high-quality practical training and research activities. It provides an interactive learning environment
                    where
                    students gain hands-on experience with biological systems and bioprocesses, fostering applications in
                    medicine, engineering, technology, and the development of bioproducts. Through access to modern
                    laboratory
                    resources, students develop a comprehensive understanding of biomolecules, key biochemical concepts, and
                    fundamental principles across diverse areas such as microbiology, immunology, and environmental
                    biotechnology.
                    The laboratory is designed to cultivate scientific curiosity and critical thinking while equipping
                    students
                    with strong theoretical, technical, and analytical skills. Overall, the facility plays a pivotal role in
                    preparing students to effectively address real-world challenges and emerging opportunities in the field
                    of
                    biotechnology.
                </p>

                <!-- <div class="rgu-biotech-lablist">
              <h4>Available Labs:</h4>
              <ol>
                <li>Fluid Mechanics Lab</li>
                
              </ol>
            </div> -->

            </div>
        </section>

        <section class="rgu-biotech-activities">

            <h3 class="rgu-biotech-activities-title">List of equipments:</h3>

            <div class="rgu-biotech-cards-container">

                <div class="rgu-biotech-section">
                    <!-- <h4 class="rgu-biotech-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>All glass double distillation unit 5L</li>
                        <li>Autoclave</li>
                        <li>Bench top cold centrifuge with stabilizer</li>
                        <li>Benchtop Centrifuge</li>
                        <li>Biospectrophotometer</li>
                        <li>Chest freezer</li>
                        <li>Cyclo Mixer CM101</li>
                        <li>Digital colorimeter</li>
                        <li>Digital Colony Counter</li>
                        <li>Digital pH meter</li>
                        <li>Electronic Balance</li>
                        <li>ELISA Plate Reader</li>
                    </ul>
                </div>

                <div class="rgu-biotech-section">
                    <!-- <h4 class="rgu-biotech-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>Gel Rocker</li>
                        <li>Gel-Doc Imaging system</li>
                        <li>High speed Homogenizer</li>
                        <li>Heating Mantel</li>
                        <li>Horizontal Gel Electrophoresis Apparatus</li>
                        <li>Hot air oven</li>
                        <li>Hot plate</li>
                        <li>Incubator (benchtop)</li>
                        <li>Laminar air flow</li>
                        <li>Magnetic Stirrer with hot plate</li>
                        <li>Microscopes</li>
                        <li>Probe Sonicator with Jack and sound enclosure</li>
                    </ul>
                </div>

                <div class="rgu-biotech-section">
                    <!-- <h4 class="rgu-biotech-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>SDS Page</li>
                        <li>Shaker Incubator</li>
                        <li>Soxhlet Apparatus with heating mantle</li>
                        <li>T100 Thermal Cycler/PCR</li>
                        <li>Ultrasonic Bath Sonicator</li>
                        <li>UV- Visible Double beam spectrophotometer</li>
                        <li>UV-Vis Ultra transilluminator</li>
                        <li>Vertical Gel Electrophoresis Apparatus and power supply</li>
                        <li>Vortex shaker</li>
                        <li>Water Bath</li>
                        <li>Western Blot unit</li>
                        <li>Refrigerator</li>
                        <li>-20°C Deep freezer</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="rgu-biotech-gallery">

            <h2 class="rgu-biotech-gallery-title">
                Our Lab <span class="rgu-biotech-highlight">Instruments</span>
            </h2>

            <div class="rgu-biotech-grid">
                <img src="mobile-assets/new-labs/lab-biotech-new/3.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/4.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/5.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/1.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/2.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/6.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/7.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/8.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/9.jpg">
                <img src="mobile-assets/new-labs/lab-biotech-new/10.jpg">

            </div>

        </section>
    </section>
@endsection
