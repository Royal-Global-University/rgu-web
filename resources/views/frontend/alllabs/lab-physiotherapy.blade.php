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
        .rgu-physio-OPD-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-physio-OPD-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-physio-OPD-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-physio-OPD-content {
            width: 50%;
        }

        .rgu-physio-OPD-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-physio-OPD-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        .rgu-physio-lab-grid {

            display: flex;

            flex-wrap: wrap;

            gap: 20px;

        }

        .rgu-physio-lab-grid .image-item {

            width: calc((100% - 40px) / 3);

        }

        .rgu-physio-lab-grid img {

            width: 100%;

            height: 550px;
            /* same height for all */

            object-fit: cover;
            /* keeps image proportion */

            display: block;

            border-radius: 8px;

        }

        /* ===== LAB LIST ===== */
        .rgu-physio-OPD-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-physio-OPD-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-physio-OPD-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-physio-OPD-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-physio-OPD-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-physio-OPD-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-physio-OPD-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-physio-OPD-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-physio-OPD-section-title {
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
        .rgu-physio-OPD-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-physio-OPD-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-physio-OPD-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-physio-OPD-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-physio-OPD-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-physio-OPD-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-physio-OPD-highlight {
            color: orange;
        }

        .rgu-physio-OPD-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .rgu-physio-OPD-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-physio-OPD-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-physio-OPD-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-physio-OPD-hero-img,
            .rgu-physio-OPD-content {
                width: 100%;
            }

            .rgu-physio-OPD-title {
                font-size: 24px;
            }

            .rgu-physio-OPD-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-physio-OPD-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-physio-OPD-activities-title {
                font-size: 1.8rem;
            }

            .rgu-physio-OPD-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-physio-OPD-grid {
                grid-template-columns: 1fr;
            }

            .rgu-physio-OPD-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-physio-OPD-body">
        <section class="rgu-physio-OPD-hero">

            <img src="mobile-assets/physio-OPD/headimg.JPG" class="rgu-physio-OPD-hero-img">

            <div class="rgu-physio-OPD-content">
                <h2 class="rgu-physio-OPD-title">Physiotherapy OPD</h2>

                <p class="rgu-physio-OPD-text">
                    The Physiotherapy OPD is equipped with the latest equipments which are used to rehabilitate a patient.
                    The
                    students through OPD practicals would learn how to treat patients with physical disabilities and
                    injuries in a
                    range of settings including hospitals, health centres, private practices and sports clubs under the
                    proper
                    guidance of a specialist. The OPD is located in Block-D on the ground floor.


                </p>

            </div>
        </section>

        <section class="rgu-physio-OPD-activities">

            <!-- <h3 class="rgu-physio-OPD-activities-title">Included In The Lab Are:</h3> -->

            <div class="rgu-physio-OPD-cards-container">

                <div class="rgu-physio-OPD-section">
                    <h4 class="rgu-physio-OPD-section-title">The services provided in our OPD:</h4>
                    <ul>
                        <li><i class="fa fa-circle"></i> <span>Conditions related to pain, muscle stiffness/spasm,
                                post-fracture
                                treatment</span></li>

                        <li><i class="fa fa-circle"></i> <span>Exercise program and home-based programs for easy
                                understanding of
                                the patient</span></li>

                        <li><i class="fa fa-circle"></i> <span>Electrotherapy- TENS, IFT, Ultrasound therapy, traction, IRR
                                lamp
                                therapy, Electrical muscle stimulation therapy</span></li>

                        <li><i class="fa fa-circle"></i> <span>Advice for ADL's to the patient (For eg. For correction of
                                posture)</span></li>

                        <li><i class="fa fa-circle"></i> <span>Strengthening sessions</span></li>

                        <li><i class="fa fa-circle"></i> <span>The OPD is also beneficial for our students as they can
                                assess and
                                also plan treatment for a particular patient under my supervision.</span></li>

                        <li><i class="fa fa-circle"></i> <span>TENS machine</span></li>

                        <li><i class="fa fa-circle"></i> <span>IFT machine</span></li>

                        <li><i class="fa fa-circle"></i> <span>Ultrasound machine</span></li>

                        <li><i class="fa fa-circle"></i> <span>Traction unit</span></li>

                        <li><i class="fa fa-circle"></i> <span>Electrical muscle stimulation machine</span></li>

                        <li><i class="fa fa-circle"></i> <span>IRR lamp</span></li>

                        <li><i class="fa fa-circle"></i> <span>Shoulder wheel</span></li>

                        <li><i class="fa fa-circle"></i> <span>Wrist rotator</span></li>

                        <li><i class="fa fa-circle"></i> <span>Finger ladder</span></li>

                        <li><i class="fa fa-circle"></i> <span>Quadriceps table</span></li>

                        <li><i class="fa fa-circle"></i> <span>Wobble board</span></li>
                    </ul>
                </div>

            </div>

            </div>
        </section>

    </section>

    <section class="rgu-physio-lab-gallery container">

        <h2 class="rgu-physio-lab-gallery-title" style="padding-top: 40px;">
            Equip<span class="rgu-physio-lab-highlight">ments</span>
        </h2>

        <div class="rgu-physio-lab-grid">

            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/1.jpg"></div>
            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/2.jpg"></div>
            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/3.jpg"></div>

            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/4.jpg"></div>
            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/5.jpg"></div>
            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/6.jpg"></div>

            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/7.jpg"></div>
            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/8.jpg"></div>
            <div class="image-item"><img src="mobile-assets/lab-physiotherapy-new/9.jpg"></div>

        </div>

        <h2 class="rgu-physio-lab-gallery-title" style="padding-top: 50px;">
            Physiotherapy <span class="rgu-physio-lab-highlight">OPD</span>
        </h2>

        <div class="rgu-physio-lab-grid">

            <div class="image-item"><img src="mobile-assets/physio-OPD/1.JPG"></div>
            <div class="image-item"><img src="mobile-assets/physio-OPD/2.JPG"></div>
            <div class="image-item"><img src="mobile-assets/physio-OPD/4.JPG"></div>

            <div class="image-item"><img src="mobile-assets/physio-OPD/3.JPG"></div>

        </div>


    </section>
@endsection
