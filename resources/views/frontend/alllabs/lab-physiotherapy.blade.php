@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 110px;"></div>
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
        .rgu-physio-lab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-physio-lab-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-physio-lab-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-physio-lab-content {
            width: 50%;
        }

        .rgu-physio-lab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-physio-lab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-physio-lab-list {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-physio-lab-list h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-physio-lab-list ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-physio-lab-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            padding: 10px;
        }

        .rgu-physio-lab-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-physio-lab-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-physio-lab-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-physio-lab-section-title {
            color: #27467a;
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .rgu-physio-lab-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-physio-lab-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-physio-lab-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        .rgu-physio-lab-section ul li::marker {
            color: #27467a;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-physio-lab-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-physio-lab-hero-img,
            .rgu-physio-lab-content {
                width: 100%;
            }

            .rgu-physio-lab-title {
                font-size: 24px;
            }

            .rgu-physio-lab-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-physio-lab-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-physio-lab-cards-container {
                grid-template-columns: 1fr;
            }
        }

        /* ===== GALLERY ===== */
        .rgu-physio-lab-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-physio-lab-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-physio-lab-highlight {
            color: orange;
        }

        .rgu-physio-lab-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-physio-lab-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-physio-lab-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {

            .rgu-physio-lab-grid {
                grid-template-columns: 1fr;
            }

            .rgu-physio-lab-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }

            .rgu-physio-lab-gallery-title {
                font-size: 24px;
            }
        }
    </style>

    <section class="rgu-physio-lab-body">

        <section class="rgu-physio-lab-hero">

            <img src="https://www.rgu.ac/mobile-assets/lab-physio/headimg.jpg" class="rgu-physio-lab-hero-img">

            <div class="rgu-physio-lab-content">

                <h2 class="rgu-physio-lab-title">Physiotherapy Laboratory</h2>

                <p class="rgu-physio-lab-text">
                    The Physiotherapy Laboratory at the Department of Physiotherapy, The Assam Royal Global University, is a
                    well-equipped and dynamic learning space designed to support academic excellence, clinical training and
                    research in physiotherapy. <br><br>
                    Our laboratory provides students with hands-on experience in various domains of physiotherapy, including
                    electrotherapy, exercise therapy, biomechanics and rehabilitation sciences. It is furnished with modern
                    equipment and tools that enable students to develop practical skills essential for patient assessment,
                    treatment planning and therapeutic interventions.
                </p>

            </div>

        </section>

        <section class="rgu-physio-lab-activities">

            <div class="rgu-physio-lab-cards-container">

                <div class="rgu-physio-lab-section">

                    <h4 class="rgu-physio-lab-section-title">KEY EQUIPMENTS</h4>

                    <ul>
                        <li><i class="fa fa-circle"></i> <span>PFT (Pulmonary Function Test)</span></li>
                        <li><i class="fa fa-circle"></i> <span>Contrast bath</span></li>
                        <li><i class="fa fa-circle"></i> <span>EMG(Electromyography)</span></li>
                        <li><i class="fa fa-circle"></i> <span>Motorized treadmill</span></li>
                        <li><i class="fa fa-circle"></i> <span>Tilt table</span></li>
                        <li><i class="fa fa-circle"></i> <span>Continuous passive motion for Upper limb and lower
                                limb</span></li>
                        <li><i class="fa fa-circle"></i> <span>Ankle exerciser</span></li>
                        <li><i class="fa fa-circle"></i> <span>Hand held dynamometer</span></li>
                        <li><i class="fa fa-circle"></i> <span>Parallel bar</span></li>
                        <li><i class="fa fa-circle"></i> <span>Suspension therapy</span></li>
                        <li><i class="fa fa-circle"></i> <span>Hydrocollator</span></li>
                        <li><i class="fa fa-circle"></i> <span>Paraffin wax</span></li>
                        <li><i class="fa fa-circle"></i> <span>Suction apparatus</span></li>
                        <li><i class="fa fa-circle"></i> <span>Hand exercise table</span></li>
                    </ul>

                </div>

                <div class="rgu-physio-lab-section">

                    <h4 class="rgu-physio-lab-section-title">FACILITIES AVAILABLE</h4>

                    <ul>

                        <li><i class="fa fa-circle"></i> <span>The Physiotherapy Laboratory offers comprehensive services
                                including
                                patient assessment, therapeutic interventions, and rehabilitation training.</span></li>

                        <li><i class="fa fa-circle"></i> <span>It covers cardiopulmonary evaluation, neuromuscular
                                assessment, pain
                                management, and functional mobility training.</span></li>

                        <li><i class="fa fa-circle"></i> <span>The lab supports treatment through exercise therapy,
                                electrotherapy,
                                and manual techniques, while also facilitating recovery using assistive and rehabilitative
                                equipment.</span></li>

                        <li><i class="fa fa-circle"></i> <span>Overall, it ensures holistic care aimed at improving
                                strength,
                                mobility, function, and quality of life.</span></li>

                    </ul>

                </div>

            </div>

        </section>

    </section>

    <section class="rgu-physio-lab-gallery">

        <h2 class="rgu-physio-lab-gallery-title" style="padding-top: 40px;">
            Equip<span class="rgu-physio-lab-highlight">ments</span>
        </h2>

        <div class="rgu-physio-lab-grid">
            <img src="mobile-assets/lab-physiotherapy-new/1.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/2.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/3.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/4.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/5.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/6.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/7.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/8.jpg">
            <img src="mobile-assets/lab-physiotherapy-new/9.jpg">
        </div>

        <h2 class="rgu-physio-lab-gallery-title" style="padding-top: 50px;">
            Physiotherapy <span class="rgu-physio-lab-highlight">OPD</span>
        </h2>

        <div class="rgu-physio-lab-grid">
            <img src="https://www.rgu.ac/mobile-assets/Physiotherapy/1.JPG">
            <img src="https://www.rgu.ac/mobile-assets/Physiotherapy/4.JPG">
            <img src="https://www.rgu.ac/mobile-assets/Physiotherapy/3.JPG">
        </div>


    </section>
@endsection
