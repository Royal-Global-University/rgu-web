@extends('frontend.master')
@section('content')
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
        .rgu-electronic-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-electronic-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-electronic-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-electronic-content {
            width: 50%;
        }

        .rgu-electronic-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-electronic-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-electronic-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-electronic-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-electronic-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-electronic-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-electronic-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-electronic-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-electronic-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-electronic-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-electronic-section-title {
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
        .rgu-electronic-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-electronic-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-electronic-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-electronic-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-electronic-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-electronic-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-electronic-highlight {
            color: orange;
        }

        .rgu-electronic-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .rgu-electronic-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-electronic-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-electronic-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-electronic-hero-img,
            .rgu-electronic-content {
                width: 100%;
            }

            .rgu-electronic-title {
                font-size: 24px;
            }

            .rgu-electronic-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-electronic-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-electronic-activities-title {
                font-size: 1.8rem;
            }

            .rgu-electronic-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-electronic-grid {
                grid-template-columns: 1fr;
            }

            .rgu-electronic-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-electronic-body">
        <section class="rgu-electronic-hero">

            <img src="mobile-assets/new-lab-electronic/Cathode Ray Oscilloscope.JPG" class="rgu-electronic-hero-img">

            <div class="rgu-electronic-content">
                <h2 class="rgu-electronic-title">Electronics Engineering Laboratory </h2>

                <p class="rgu-electronic-text">
                    The Electronics Engineering Laboratory is a practical learning facility designed to provide
                    students with hands-on experience in the field of electronics and embedded systems. It
                    serves as an essential platform where theoretical concepts are transformed into practical
                    applications through experiments and circuit design. The laboratory plays a vital role in
                    enhancing students’ technical competence, innovation skills, and problem-solving abilities.

                </p>

            </div>
        </section>

        <section class="rgu-electronic-activities">

            <!-- <h3 class="rgu-electronic-activities-title">Laboratory Activities Include:</h3> -->

            <div class="rgu-electronic-cards-container">

                <div class="rgu-electronic-section">
                    <!-- <h4 class="rgu-electronic-section-title">Fluid Mechanics Lab</h4> -->
                    <p class="rgu-electronic-text">
                        In this laboratory, practical classes are conducted for subjects such as Digital Electronics,
                        Microprocessor, Microcontroller and Basic Electronics. Students perform experiments
                        related to logic gates, Boolean algebra, combinational circuits, sequential circuits, flipflops,
                        counters,
                        registers, multiplexers, encoders, decoders, and memory devices. In
                        Microprocessor practical sessions, students learn assembly language programming,
                        interfacing techniques, timing operations, data transfer, arithmetic and logical operations,
                        and hardware applications using 8086 Microprocessor Trainer Kit and other trainer
                        kits.The laboratory is well-equipped with modern instruments and equipment such as
                        Digital Storage Oscilloscope, function generators, regulated DC power supplies,
                        multimeters, breadboards, soldering stations, trainer kits and logic probe kits.
                        <br><br>
                        This laboratory encourages project-based learning, where students develop mini-projects
                        and prototypes related to automation, IoT, robotics, communication systems, and control
                        applications. It supports innovation and research activities by enabling students to
                        implement real-world solutions using electronic hardware and software tools. Overall, the
                        Electronics Engineering Laboratory bridges the gap between classroom theory and
                        industrial practice. It helps students develop practical skills, analytical thinking, teamwork,
                        and confidence, which are essential for higher studies, research, entrepreneurship, and
                        careers in electronics, electrical engineering, and allied industries.

                    </p>
                </div>

            </div>

            </div>
        </section>

        <section class="rgu-electronic-gallery">

            <h2 class="rgu-electronic-gallery-title">
                Our<span class="rgu-electronic-highlight"> Lab</span>
            </h2>

            <div class="rgu-electronic-grid">
                <img src="mobile-assets/new-lab-electronic/Experiment on Flip Flop.jpeg">
                <img src="mobile-assets/new-lab-electronic/Microprocessor Experiment.jpeg">
                <img src="mobile-assets/new-lab-electronic/Microprocessor Lab.jpeg">
                <img src="mobile-assets/new-lab-electronic/Microprocessor.jpeg">
            </div>
        </section>
    </section>
@endsection
