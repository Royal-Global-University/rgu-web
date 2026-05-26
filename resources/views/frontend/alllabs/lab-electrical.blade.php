@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
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
        .rgu-electric-engg-lab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-electric-engg-lab-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-electric-engg-lab-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-electric-engg-lab-content {
            width: 50%;
        }

        .rgu-electric-engg-lab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-electric-engg-lab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-electric-engg-lab-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-electric-engg-lab-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-electric-engg-lab-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-electric-engg-lab-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-electric-engg-lab-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-electric-engg-lab-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-electric-engg-lab-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-electric-engg-lab-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-electric-engg-lab-section-title {
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
        .rgu-electric-engg-lab-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-electric-engg-lab-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-electric-engg-lab-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-electric-engg-lab-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-electric-engg-lab-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-electric-engg-lab-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-electric-engg-lab-highlight {
            color: orange;
        }

        .rgu-electric-engg-lab-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .rgu-electric-engg-lab-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-electric-engg-lab-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-electric-engg-lab-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-electric-engg-lab-hero-img,
            .rgu-electric-engg-lab-content {
                width: 100%;
            }

            .rgu-electric-engg-lab-title {
                font-size: 24px;
            }

            .rgu-electric-engg-lab-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-electric-engg-lab-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-electric-engg-lab-activities-title {
                font-size: 1.8rem;
            }

            .rgu-electric-engg-lab-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-electric-engg-lab-grid {
                grid-template-columns: 1fr;
            }

            .rgu-electric-engg-lab-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-electric-engg-lab-body">
        <section class="rgu-electric-engg-lab-hero">

            <img src="mobile-assets/lab-new-electrical-engg/headimg.jpeg" class="rgu-electric-engg-lab-hero-img">

            <div class="rgu-electric-engg-lab-content">
                <h2 class="rgu-electric-engg-lab-title">Electrical Engineering Laboratory </h2>

                <p class="rgu-electric-engg-lab-text">
                    The Electrical Engineering Laboratory is a modern and well-equipped practical facility
                    that provides students with hands-on exposure to fundamental and advanced concepts
                    of electrical engineering. The laboratory is designed to bridge the gap between theoretical
                    learning and real-world applications by enabling students to work with professionalgrade equipment,
                    electrical
                    machines, measuring instruments, and circuit components
                    commonly used in industry and research.
                </p>

            </div>
        </section>


        <section class="rgu-electric-engg-lab-activities">

            <!-- <h3 class="rgu-electric-engg-lab-activities-title">Laboratory Activities Include:</h3> -->

            <div class="rgu-electric-engg-lab-cards-container">

                <div class="rgu-electric-engg-lab-section">
                    <!-- <h4 class="rgu-electric-engg-lab-section-title">Fluid Mechanics Lab</h4> -->
                    <p class="rgu-electric-engg-lab-text">
                        The laboratory offers a safe and interactive environment where students learn the
                        assembly, operation, testing, and analysis of electrical and electronic circuits. Through
                        practical sessions, students develop a clear understanding of circuit behavior,
                        component characteristics, measurement techniques, safety practices, and
                        troubleshooting methods. The lab plays a significant role in enhancing technical
                        competence, analytical thinking, teamwork, and problem-solving skills. <br><br>
                        Students are trained to use various laboratory instruments such as Digital Multimeter,
                        Digital Storage Oscilloscope, power supplies, function generators, energy meters,
                        wattmeters, ammeters, voltmeters, and machine trainer kits. These facilities help
                        students gain confidence in handling modern engineering tools and equipment. <br><br>
                        The Electrical Engineering Laboratory serves as an integrated platform for innovation,
                        experimentation, and skill development. It equips students with practical knowledge
                        essential for academic excellence, industrial careers, higher studies, and research in the
                        field of electrical and allied engineering disciplines.

                    </p>
                </div>

            </div>

            </div>
        </section>


        <section class="rgu-electric-engg-lab-activities">

            <h3 class="rgu-electric-engg-lab-activities-title">Laboratory Activities Include:</h3>

            <div class="rgu-electric-engg-lab-cards-container">

                <div class="rgu-electric-engg-lab-section">
                    <!-- <h4 class="rgu-electric-engg-lab-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li><i class="fa fa-circle"></i> <span>Electrical Characteristics of Devices</span></li>
                        <li><i class="fa fa-circle"></i> <span>Verification of Network Theorems</span></li>
                        <li><i class="fa fa-circle"></i> <span>AC Circuit Analysis and Performance Study</span></li>
                        <li><i class="fa fa-circle"></i> <span>Electrical Measurements and Instrumentation</span></li>
                        <li><i class="fa fa-circle"></i> <span>House Wiring Concepts and Practical Experiments</span></li>
                        <li><i class="fa fa-circle"></i> <span>Armature Resistance Measurement</span></li>
                        <li><i class="fa fa-circle"></i> <span>Signal Generation and Measurement Experiments</span></li>
                        <li><i class="fa fa-circle"></i> <span>Digital Logic Gate Verification Using ICs</span></li>
                    </ul>
                </div>

            </div>

            </div>
        </section>

        <section class="rgu-electric-engg-lab-gallery">

            <h2 class="rgu-electric-engg-lab-gallery-title">
                Our <span class="rgu-electric-engg-lab-highlight"> Lab</span>
            </h2>

            <div class="rgu-electric-engg-lab-grid">
                <img src="mobile-assets/lab-new-electrical-engg/1.jpg">
                <img src="mobile-assets/lab-new-electrical-engg/2.jpg">
                <img src="mobile-assets/lab-new-electrical-engg/3.jpg">
                <img src="mobile-assets/lab-new-electrical-engg/4.jpg">
            </div>
        </section>
    </section>
@endsection
