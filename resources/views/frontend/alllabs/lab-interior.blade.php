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
        .rgu-interior-design-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-interior-design-hero {
            background: url("mobile-assets/new-labs/lab-architecture-new/bgg.svg") center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-interior-design-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-interior-design-content {
            width: 50%;
        }

        .rgu-interior-design-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-interior-design-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-interior-design-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-interior-design-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-interior-design-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-interior-design-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-interior-design-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-interior-design-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-interior-design-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-interior-design-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-interior-design-section-title {
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
        .rgu-interior-design-section-title::before {
            content: "";
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-interior-design-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-interior-design-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-interior-design-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-interior-design-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #fffbf6;
        }

        .rgu-interior-design-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-interior-design-highlight {
            color: orange;
        }

        .rgu-interior-design-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-interior-design-grid img {
            border: 1px solid #999;
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-interior-design-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-interior-design-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #fffbf6;
            }

            .rgu-interior-design-hero-img,
            .rgu-interior-design-content {
                width: 100%;
            }

            .rgu-interior-design-title {
                font-size: 24px;
            }

            .rgu-interior-design-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-interior-design-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-interior-design-activities-title {
                font-size: 1.8rem;
            }

            .rgu-interior-design-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-interior-design-grid {
                grid-template-columns: 1fr;
            }

            .rgu-interior-design-gallery {
                background-color: #fffbf6;
                padding: 30px 20px;
            }
        }
    </style>


    <section class="rgu-interior-design-body">
        <section class="rgu-interior-design-hero">
            <img src="mobile-assets/new-labs/lab-interior-design/headimg.jpg" class="rgu-interior-design-hero-img" />

            <div class="rgu-interior-design-content">
                <h2 class="rgu-interior-design-title">Interior Design Studios</h2>

                <p class="rgu-interior-design-text">
                    Our interior design studios is a collaborative space that provides
                    student designers access to design concepts, ideas, and resources to
                    support them in implementing their projects. With help of these
                    resources, student designers conceptualize, design, and renovate
                    spaces, translating ideas into reality in line with current needs
                    and preferences. The studios are situated in Block-C on second and
                    third floor.
                </p>

                <p class="text-dark para1 fw-bold">Included in the Studio:</p>
                <ol class="text-dark para1">
                    <li class="para1 text-dark">A collaborative space</li>
                    <li class="para1 text-dark">
                        Benching stations with drafting tables
                    </li>
                    <li class="para1 text-dark">A meeting area for lecturing</li>
                    <li class="para1 text-dark">Storage and workspace</li>
                </ol>
            </div>
        </section>
    </section>
@endsection
