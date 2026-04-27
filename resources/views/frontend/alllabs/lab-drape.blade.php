@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px;"></div>
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
        .rgu-fine-arts-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-fine-arts-hero {
            background: url('mobile-assets/new-labs/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-fine-arts-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-fine-arts-content {
            width: 50%;
        }

        .rgu-fine-arts-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-fine-arts-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-fine-arts-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-fine-arts-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-fine-arts-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-fine-arts-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-fine-arts-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-fine-arts-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-fine-arts-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-fine-arts-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-fine-arts-section-title {
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
        .rgu-fine-arts-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-fine-arts-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-fine-arts-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-fine-arts-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-fine-arts-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-fine-arts-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-fine-arts-highlight {
            color: orange;
        }

        .rgu-fine-arts-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-fine-arts-grid img {
            border: 1px solid #999;
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-fine-arts-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-fine-arts-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-fine-arts-hero-img,
            .rgu-fine-arts-content {
                width: 100%;
            }

            .rgu-fine-arts-title {
                font-size: 24px;
            }

            .rgu-fine-arts-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-fine-arts-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-fine-arts-activities-title {
                font-size: 1.8rem;
            }

            .rgu-fine-arts-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-fine-arts-grid {
                grid-template-columns: 1fr;
            }

            .rgu-fine-arts-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-fine-arts-body">
        <section class="rgu-fine-arts-hero">

            <img src="/mobile-assets/studio/drape/drape studio pic 2.jpeg" class="rgu-fine-arts-hero-img">

            <div class="rgu-fine-arts-content">
                <h2 class="rgu-fine-arts-title">The Drape Studio</h2>
                <p style="font-style: italic" class="text-dark">“Draping is the art of letting fabric speak.” </p>

                <p class="rgu-fine-arts-text">
                    The Drape Studio at the Royal School of Fashion Design and Technology, is a vibrant learning space where
                    students across semesters explore the art of draping—an essential technique that goes beyond traditional
                    pattern making. By working directly on dress forms, students create innovative ensembles while
                    developing a deeper understanding of fabric behaviour, fit, and structure. This experiential approach
                    nurtures creativity, strengthens technical skills, and prepares them for real-world design challenges.
                </p>


            </div>
        </section>

        <section class="rgu-fine-arts-activities">

            <h3 class="rgu-fine-arts-activities-title">Included in the Studio Are:</h3>

            <div class="rgu-fine-arts-cards-container">

                <div class="rgu-fine-arts-section">
                    <!-- <h4 class="rgu-fine-arts-section-title">Fluid Mechanics Lab</h4> -->
                    <ol class="text-dark" style="padding-left:20px; line-height:1.8;">
                        <li><span style="font-weight:500;">High-end, industry-quality dress forms</span> for accurate
                            draping practice.</li>
                        <li><span style="font-weight:500;">Specialised leg forms</span> for advanced garment construction.
                        </li>
                        <li><span style="font-weight:500;">Advanced sewing machines</span> enabling precision and finishing.
                        </li>
                        <li><span style="font-weight:500;">Spacious pattern tables</span> for efficient fabric handling and
                            layout.</li>
                        <li><span style="font-weight:500;">Custom-made ironing tables</span> with high-end steam irons for
                            professional finishing.</li>
                        <li><span style="font-weight:500;">Professional studio setup</span> that simulates real industry
                            environments.</li>
                    </ol>
                </div>

            </div>

        </section>

        <section class="rgu-fine-arts-gallery">

            <h2 class="rgu-fine-arts-gallery-title">
                Glimpse of <span class="rgu-fine-arts-highlight">The Drape Studio</span>
            </h2>

            <div class="rgu-fine-arts-grid">
                <img src="/mobile-assets/studio/drape/drape studio pic 5.jpeg">
                <img src="/mobile-assets/studio/drape/drape studio pic 8.jpeg">
                <img src="/mobile-assets/studio/drape/drape studio pic 3.jpeg">
                <img src="/mobile-assets/laboratories/rsft/Photo for Drape studio-1.jpeg">
                <img src="/mobile-assets/laboratories/rsft/Photo for Drape studio-2.jpeg">
                <img src="/mobile-assets/studio/drape/drape studio pic 10.jpeg">
            </div>

        </section>
    </section>
@endsection
