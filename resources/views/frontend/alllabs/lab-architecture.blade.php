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
        .rgu-arch-studio-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-arch-studio-hero {
            background: url('mobile-assets/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-arch-studio-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-arch-studio-content {
            width: 50%;
        }

        .rgu-arch-studio-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-arch-studio-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
            font-size: 1.2rem;
        }

        /* ===== LAB LIST ===== */
        .rgu-arch-studio-lablist {
            margin-top: 20px;
            line-height: 1.7;
            font-size: 1.2rem;
        }

        .rgu-arch-studio-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-arch-studio-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-arch-studio-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-arch-studio-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.3rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-arch-studio-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-arch-studio-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-arch-studio-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-arch-studio-section-title {
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
        .rgu-arch-studio-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-arch-studio-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-arch-studio-section ul li {
            margin-bottom: 6px;
            font-size: 1.2rem;
        }

        /* Custom color for bullet points */
        .rgu-arch-studio-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-arch-studio-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-arch-studio-gallery-title {
            font-size: 32px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-arch-studio-highlight {
            color: orange;
        }

        .rgu-arch-studio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-arch-studio-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-arch-studio-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-arch-studio-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-arch-studio-hero-img,
            .rgu-arch-studio-content {
                width: 100%;
            }

            .rgu-arch-studio-title {
                font-size: 24px;
            }

            .rgu-arch-studio-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-arch-studio-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-arch-studio-activities-title {
                font-size: 1.8rem;
            }

            .rgu-arch-studio-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-arch-studio-grid {
                grid-template-columns: 1fr;
            }

            .rgu-arch-studio-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-arch-studio-body">
        <section class="rgu-arch-studio-hero">

            <img src="mobile-assets/lab-architecture-new/headimg.jpg" class="rgu-arch-studio-hero-img">

            <div class="rgu-arch-studio-content">
                <h2 class="rgu-arch-studio-title">Architecture Design Studios</h2>

                <p class="rgu-arch-studio-text">
                    The design studios of the Royal School of Architecture throw a focus on advanced digital technologies,
                    material systems and design research which strives to shape the future of the next generation of
                    designers. In
                    an era of smart cities, sustainable buildings, and contemporary architecture, we train our students to
                    become
                    lateral thinkers by focusing on a critical design approach. The studios are situated in block- C on the
                    second
                    and third floor.
                </p>

                <div class="rgu-arch-studio-lablist text-dark">
                    <h4>Available Labs:</h4>
                    <ol>
                        <li>AutoCAD</li>
                        <li>Revit</li>
                        <li>Adobe Photoshop</li>
                        <li>ArchiCAD</li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="rgu-arch-studio-activities">

            <!-- <h3 class="rgu-arch-studio-activities-title">Included In The Lab Are:</h3> -->

            <div class="rgu-arch-studio-cards-container">

                <div class="rgu-arch-studio-section">
                    <!-- <h4 class="rgu-arch-studio-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li><i class="fa fa-circle"></i> <span>Developing architectural design projects, keeping in mind the
                                climatic condition of the site</span></li>

                        <li><i class="fa fa-circle"></i> <span>Studying different building technologies and services like
                                plumbing
                                and sanitation</span></li>

                        <li><i class="fa fa-circle"></i> <span>Practically observe building materials, their typologies and
                                specifications</span></li>

                        <li><i class="fa fa-circle"></i> <span>Study electrical wirings, fittings and services</span></li>

                        <li><i class="fa fa-circle"></i> <span>Exercises related to surveying and levelling give students
                                hands-on
                                experience and help them understand the characteristics of the site</span></li>

                        <li><i class="fa fa-circle"></i> <span>Learning techniques of testing compressive and tensile
                                strengths of
                                building materials</span></li>

                        <li><i class="fa fa-circle"></i> <span>Making small prototypes of brick joints, wooden joints
                                etc</span>
                        </li>

                        <li><i class="fa fa-circle"></i> <span>Experiment with various building materials</span></li>
                    </ul>
                </div>

            </div>

            </div>
        </section>

        <section class="rgu-arch-studio-gallery">

            <h2 class="rgu-arch-studio-gallery-title">
                Our <span class="rgu-arch-studio-highlight">Classroom</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/classroom/1.jpg">
                <img src="mobile-assets/lab-architecture-new/classroom/2.jpg">
                <img src="mobile-assets/lab-architecture-new/classroom/3.jpg">
            </div>

            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Carpentry <span class="rgu-arch-studio-highlight">and Welding</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/carpentry/1.jpg">
                <img src="mobile-assets/lab-architecture-new/carpentry/2.jpg">
                <img src="mobile-assets/lab-architecture-new/carpentry/3.jpg">
            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Climatology <span class="rgu-arch-studio-highlight">Lab</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/climatology/1.jpg">
                <img src="mobile-assets/lab-architecture-new/climatology/2.jpg">
                <img src="mobile-assets/lab-architecture-new/climatology/3.jpg">
            </div>

            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Computer <span class="rgu-arch-studio-highlight">Lab</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/computer/1.jpg">
                <img src="mobile-assets/lab-architecture-new/computer/2.jpg">
                <img src="mobile-assets/lab-architecture-new/computer/3.jpg">
            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Departmental <span class="rgu-arch-studio-highlight">Library</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/dept-library/1.jpg">
                <img src="mobile-assets/lab-architecture-new/dept-library/2.jpg">
                <img src="mobile-assets/lab-architecture-new/dept-library/3.jpg">
            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Documentation <span class="rgu-arch-studio-highlight">Room</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/documentation-room/1.jpg">
                <img src="mobile-assets/lab-architecture-new/documentation-room/2.jpg">
                <img src="mobile-assets/lab-architecture-new/documentation-room/3.jpg">
                <img src="mobile-assets/lab-architecture-new/documentation-room/4.jpg">
                <img src="mobile-assets/lab-architecture-new/documentation-room/5.jpg">
                <img src="mobile-assets/lab-architecture-new/documentation-room/6.jpg">
            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Material <span class="rgu-arch-studio-highlight">Lab</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/material-lab/1.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/2.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/3.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/4.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/5.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/6.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/7.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/8.jpg">
                <img src="mobile-assets/lab-architecture-new/material-lab/9.jpg">
            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Model Making <span class="rgu-arch-studio-highlight">Room</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/model-making-room/1.jpg">
                <img src="mobile-assets/lab-architecture-new/model-making-room/2.jpg">
                <img src="mobile-assets/lab-architecture-new/model-making-room/3.jpg">
                <img src="mobile-assets/lab-architecture-new/model-making-room/4.jpg">
                <img src="mobile-assets/lab-architecture-new/model-making-room/5.jpg">
                <img src="mobile-assets/lab-architecture-new/model-making-room/6.jpg">

            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Mo<span class="rgu-arch-studio-highlight">dels</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/models/1.jpg">
                <img src="mobile-assets/lab-architecture-new/models/2.jpg">
                <img src="mobile-assets/lab-architecture-new/models/3.jpg">
                <img src="mobile-assets/lab-architecture-new/models/4.jpg">
                <img src="mobile-assets/lab-architecture-new/models/5.jpg">
                <img src="mobile-assets/lab-architecture-new/models/6.jpg">
                <img src="mobile-assets/lab-architecture-new/models/7.jpg">
                <img src="mobile-assets/lab-architecture-new/models/8.jpg">
                <img src="mobile-assets/lab-architecture-new/models/9.jpg">

            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Stu<span class="rgu-arch-studio-highlight">dio</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/studio/1.jpg">
                <img src="mobile-assets/lab-architecture-new/studio/2.jpg">
                <img src="mobile-assets/lab-architecture-new/studio/3.jpg">
                <img src="mobile-assets/lab-architecture-new/studio/4.jpg">
                <img src="mobile-assets/lab-architecture-new/studio/5.jpg">
                <img src="mobile-assets/lab-architecture-new/studio/6.jpg">

            </div>


            <h2 class="rgu-arch-studio-gallery-title" style="padding-top: 40px;">
                Surveying <span class="rgu-arch-studio-highlight">and Levelling</span>
            </h2>

            <div class="rgu-arch-studio-grid">
                <img src="mobile-assets/lab-architecture-new/surveying/1.jpg">
                <img src="mobile-assets/lab-architecture-new/surveying/2.jpg">
                <img src="mobile-assets/lab-architecture-new/surveying/3.jpg">
                <img src="mobile-assets/lab-architecture-new/surveying/4.jpg">
                <img src="mobile-assets/lab-architecture-new/surveying/5.jpg">
                <img src="mobile-assets/lab-architecture-new/surveying/6.jpg">

            </div>

        </section>
    </section>
@endsection
