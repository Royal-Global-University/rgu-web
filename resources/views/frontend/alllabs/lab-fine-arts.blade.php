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

            <img src="mobile-assets/new-labs/lab-fine-arts-new/headimg.jpeg" class="rgu-fine-arts-hero-img">

            <div class="rgu-fine-arts-content">
                <h2 class="rgu-fine-arts-title">Art Studio Cum Gallery </h2>

                <p class="rgu-fine-arts-text">
                    The Art Studio cum Gallery at the Royal School of Arts is a dynamic and interdisciplinary creative space
                    designed to foster artistic exploration, innovation, and professional practice. The facility is
                    thoughtfully
                    structured with separate, well-equipped studios for the Painting and Sculpture departments, ensuring
                    focused
                    and specialized learning environments. The Sculpture Studio offers hands-on training across diverse
                    traditional
                    and contemporary mediums, including terracotta, fibre, wood carving, pottery, and metal work. 
                </p>

            </div>
        </section>

        <div class="pt-4 pb-2 text-dark" style="padding-left: 50px; padding-right: 50px;">
            <p>It
                    encourages
                    material experimentation and technical skill development while maintaining a strong connection to craft
                    traditions. The Painting and Visual Arts Studio supports a wide spectrum of artistic practices such as
                    painting, installation art, conceptual art, digital art, and printmaking. These studios are designed to
                    nurture critical thinking, contemporary expression, and interdisciplinary approaches in visual culture.
                    Complementing the studio spaces, the gallery serves as an exhibition platform where students showcase
                    their
                    creative outcomes, engage with audiences, and gain professional exposure. Together, the studio and
                    gallery
                    create a vibrant ecosystem that bridges learning, practice, and presentation.</p>
        </div>

        <section class="rgu-fine-arts-activities">

            <h3 class="rgu-fine-arts-activities-title">Included in the Studio Are:</h3>

            <div class="rgu-fine-arts-cards-container">

                <div class="rgu-fine-arts-section">
                    <!-- <h4 class="rgu-fine-arts-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>Separate, fully equipped studios for Painting and Sculpture departments.</li>
                        <li>Dedicated workspaces for terracotta, fibre art, wood carving, pottery, and metal work</li>
                        <li>Painting and Visual Arts studios for installation art, conceptual art, digital art, and
                            printmaking.</li>
                        <li>Display gallery for exhibitions and student showcases.</li>
                        <li>Storage space for artworks, materials, and tools.</li>
                        <li>Proper lighting and ventilation for studio practice.</li>
                        <li>Basic safety equipment for handling materials and machinery.</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="rgu-fine-arts-gallery">

            <h2 class="rgu-fine-arts-gallery-title">
                Glimpse of <span class="rgu-fine-arts-highlight">Art Studio cum Gallery</span>
            </h2>

            <div class="rgu-fine-arts-grid">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/1.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/2.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/3.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/4.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/5.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/6.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/7.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/8.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/9.jpeg">
            </div>

            <hr style="margin: 20px 0px;">


            <h2 class="rgu-fine-arts-gallery-title">
                The <span class="rgu-fine-arts-highlight">Sculpture Studio</span>
            </h2>

            <div class="rgu-fine-arts-grid">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/10.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/11.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/12.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/13.jpeg">
                <img src="mobile-assets/new-labs/lab-fine-arts-new/14.jpeg">
            </div>


        </section>
    </section>
@endsection
