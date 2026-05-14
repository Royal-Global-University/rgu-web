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
        .rgu-chem-lab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-chem-lab-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-chem-lab-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-chem-lab-content {
            width: 50%;
        }

        .rgu-chem-lab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-chem-lab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-chem-lab-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-chem-lab-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-chem-lab-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-chem-lab-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-chem-lab-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-chem-lab-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-chem-lab-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-chem-lab-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-chem-lab-section-title {
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
        .rgu-chem-lab-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-chem-lab-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-chem-lab-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-chem-lab-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-chem-lab-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-chem-lab-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-chem-lab-highlight {
            color: orange;
        }

        .rgu-chem-lab-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-chem-lab-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-chem-lab-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-chem-lab-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-chem-lab-hero-img,
            .rgu-chem-lab-content {
                width: 100%;
            }

            .rgu-chem-lab-title {
                font-size: 24px;
            }

            .rgu-chem-lab-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-chem-lab-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-chem-lab-activities-title {
                font-size: 1.8rem;
            }

            .rgu-chem-lab-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-chem-lab-grid {
                grid-template-columns: 1fr;
            }

            .rgu-chem-lab-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-chem-lab-body">
        <section class="rgu-chem-lab-hero">

            <img src="mobile-assets/lab-chem-lab/headimg.png" class="rgu-chem-lab-hero-img">

            <div class="rgu-chem-lab-content">
                <h2 class="rgu-chem-lab-title">Chemistry Lab</h2>

                <p class="rgu-chem-lab-text">
                    The university boasts of a well-stocked chemistry lab with various reagents, chemicals and other
                    apparatuses
                    required by students to perform experiments and bring concepts to life. The chemistry lab has all the
                    latest
                    equipment and has proper ventilation. Students can locate the chemistry lab in the block- B in room No.
                    B-Gr-012 on the ground floor.
                </p>

                <div class="rgu-chem-lab-lablist text-dark">
                    <h4>Work carried out in the laboratory includes:</h4>
                    <ol>
                        <li><span>Modern organic and inorganic synthetic techniques</span></li>

                        <li><span>Chromatographic methods used in the separation and
                                purification of
                                reaction products</span></li>

                        <li><span>UV-visible Spectrophotometer, Centrifuge, Ultrasonicator,
                                Rotary
                                Evaporator, Photochemical setup used in various modern chemical synthesis</span></li>

                        <li><span>Kinetic and thermodynamic studies</span></li>

                        <li><span>Some study of reaction mechanics and intermediates</span>
                        </li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="rgu-chem-lab-gallery">

            <h2 class="rgu-chem-lab-gallery-title">
                Our Lab <span class="rgu-chem-lab-highlight">and Equipments</span>
            </h2>

            <div class="rgu-chem-lab-grid">
                <img src="mobile-assets/lab-chem-lab/equipments/1.jpg">
                <img src="mobile-assets/lab-chem-lab/equipments/2.jpg">
                <img src="mobile-assets/lab-chem-lab/equipments/3.jpg">
                <img src="mobile-assets/lab-chem-lab/equipments/4.jpg">
                <img src="mobile-assets/lab-chem-lab/equipments/5.jpg">
                <img src="mobile-assets/lab-chem-lab/equipments/6.jpg">
                <img src="mobile-assets/lab-chem-lab/equipments/6.jpeg">
            </div>



        </section>
    </section>
@endsection
