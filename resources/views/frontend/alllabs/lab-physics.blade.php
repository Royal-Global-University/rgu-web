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
        .rgu-phy-lab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-phy-lab-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-phy-lab-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-phy-lab-content {
            width: 50%;
        }

        .rgu-phy-lab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-phy-lab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-phy-lab-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-phy-lab-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-phy-lab-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-phy-lab-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-phy-lab-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-phy-lab-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-phy-lab-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-phy-lab-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-phy-lab-section-title {
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
        .rgu-phy-lab-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-phy-lab-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-phy-lab-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-phy-lab-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-phy-lab-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-phy-lab-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-phy-lab-highlight {
            color: orange;
        }

        .rgu-phy-lab-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .rgu-phy-lab-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-phy-lab-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-phy-lab-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-phy-lab-hero-img,
            .rgu-phy-lab-content {
                width: 100%;
            }

            .rgu-phy-lab-title {
                font-size: 24px;
            }

            .rgu-phy-lab-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-phy-lab-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-phy-lab-activities-title {
                font-size: 1.8rem;
            }

            .rgu-phy-lab-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-phy-lab-grid {
                grid-template-columns: 1fr;
            }

            .rgu-phy-lab-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-phy-lab-body">
        <section class="rgu-phy-lab-hero">

            <img src="/mobile-assets/rsaps-new-dept/physics/head-img.png" class="rgu-phy-lab-hero-img">

            <div class="rgu-phy-lab-content">
                <h2 class="rgu-phy-lab-title">Physics Lab</h2>

                <p class="rgu-phy-lab-text">
                    Our Physics laboratory is well-equipped with modern instruments to help students understand the concepts
                    of
                    Physics through experiments. It is designed to assist and guide students in taking measurements,
                    analyzing
                    data, and drawing inferences during practical work.
                    There are separate laboratories dedicated to B.Sc. and M.Sc. Physics students, equipped with basic to
                    advanced
                    experimental setups according to semester requirements. Students are encouraged to perform hands-on
                    experiments under expert supervision, enabling them to gain detailed practical insights.
                </p>

                <!-- <div class="rgu-phy-lab-lablist">
                      <h4>Lab Instruments Includes (but not limited to):</h4>
                      <ol>
                        <li>AutoCAD</li>
                        <li>Revit</li>
                        <li>Adobe Photoshop</li>
                        <li>ArchiCAD</li>
                      </ol>
                    </div> -->

            </div>
        </section>

        <section class="rgu-phy-lab-activities">

            <h3 class="rgu-phy-lab-activities-title">Lab Instruments Includes (but not limited to):</h3>

            <div class="rgu-phy-lab-cards-container">

                <div class="rgu-phy-lab-section">
                    <!-- <h4 class="rgu-phy-lab-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li><i class="fa fa-circle"></i> <span>Four Probe Experimental Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Hall Effect Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Michelson Interferometer</span></li>
                        <li><i class="fa fa-circle"></i> <span>Fabry-Perot Interferometer</span></li>
                        <li><i class="fa fa-circle"></i> <span>Ultrasonic Velocity Measurements Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Thomsons e/m Measurements Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Millikan’s Oil Drop Experimental Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Geiger-Müller (GM) Counter</span></li>
                        <li><i class="fa fa-circle"></i> <span>LED/PIN Photo Detector/ Photo-diode/ Solar-Cell
                                Characteristics Study
                                Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Lattice Vibrational Kit</span></li>
                        <li><i class="fa fa-circle"></i> <span>Frank and Hertz Experimental Set-up</span></li>
                        <li><i class="fa fa-circle"></i> <span>Babinet Compensator</span></li>
                        <li><i class="fa fa-circle"></i> <span>Fresnel Biprism</span></li>
                        <li><i class="fa fa-circle"></i> <span>Electron Spin Resonance (ESR) Spectrometer</span></li>
                        <li><i class="fa fa-circle"></i> <span>BJT/FET/ Zener Diode/ LCR circuit etc.</span></li>
                    </ul>
                </div>

            </div>

            </div>
        </section>

        <section class="rgu-phy-lab-gallery">

            <h2 class="rgu-phy-lab-gallery-title">
                Our Labs and<span class="rgu-phy-lab-highlight">Equipments</span>
            </h2>

            <div class="rgu-phy-lab-grid">
                <img src="mobile-assets/lab-new-physics/1.jpg">
                <img src="mobile-assets/lab-new-physics/2.jpg">
                <img src="mobile-assets/lab-new-physics/3.jpg">
                <img src="mobile-assets/lab-new-physics/4.jpg">
                <img src="mobile-assets/lab-new-physics/5.jpg">
                <img src="mobile-assets/lab-new-physics/6.jpg">
                <img src="mobile-assets/lab-new-physics/7.jpg">
                <img src="mobile-assets/lab-new-physics/8.jpg">
                <img src="mobile-assets/lab-new-physics/9.jpg">
                <img src="mobile-assets/lab-new-physics/10.jpg">
                <img src="mobile-assets/lab-new-physics/11.jpg">
                <img src="mobile-assets/lab-new-physics/12.jpg">
                <img src="mobile-assets/lab-new-physics/13.jpg">
                <img src="mobile-assets/lab-new-physics/14.jpg">
                <img src="mobile-assets/lab-new-physics/15.jpg">
                <img src="mobile-assets/lab-new-physics/16.jpg">
                <img src="mobile-assets/lab-new-physics/17.jpg">
                <img src="mobile-assets/lab-new-physics/18.jpg">
                <img src="mobile-assets/lab-new-physics/19.jpg">
                <img src="mobile-assets/lab-new-physics/20.jpg">
                <img src="mobile-assets/lab-new-physics/21.jpg">

            </div>



        </section>
    </section>
@endsection
