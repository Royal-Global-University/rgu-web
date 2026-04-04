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
        .rgu-media-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-media-hero {
            background: url('mobile-assets/new-labs/studio-media-studio/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-media-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-media-content {
            width: 50%;
        }

        .rgu-media-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-media-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== FACILITY LIST ===== */
        .rgu-media-list {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-media-list h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-media-list ul {
            padding-left: 20px;
        }

        /* ===== GRID ===== */
        .rgu-media-grid {
            display: grid;
            grid-template-columns: 1fr;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-media-hero {
                flex-direction: column;
                padding: 30px 20px;
                background-color: #FFFBF6;
            }

            .rgu-media-hero-img,
            .rgu-media-content {
                width: 100%;
            }

            .rgu-media-title {
                font-size: 24px;
            }

            .rgu-media-text {
                font-size: 15px;
            }

            .rgu-media-section-wrap {
                width: 100%;
                padding: 20px;
            }
        }

        /* ===== GALLERY ===== */
        .rgu-media-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-media-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-media-highlight {
            color: orange;
        }

        .rgu-media-gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-media-gallery-grid img {
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-media-gallery-grid img:hover {
            transform: scale(1.03);
        }

        /* MOBILE */
        @media (max-width: 900px) {
            .rgu-media-gallery-grid {
                grid-template-columns: 1fr;
            }

            .rgu-media-gallery {
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-media-body">

        <!-- HERO -->
        <section class="rgu-media-hero">

            <img src="mobile-assets/new-labs/studio-media-studio/headimg.jpeg" class="rgu-media-hero-img">

            <div class="rgu-media-content">
                <h2 class="rgu-media-title">Media Studio</h2>

                <p class="rgu-media-text">
                    The Media Studio is a practical training space where students learn and apply media production skills.
                    It
                    serves as a hands-on learning hub where students gain real-world media production experience. It is
                    equipped
                    with a good number of state-of-the-art equipment and tools, facilitating students to practice a wide
                    range of
                    skills such as news reporting, script writing, video editing, anchoring, podcast production, and live
                    broadcasting. It also helps them understand technical aspects like camera handling, sound recording, and
                    post-production techniques. By working on projects, mock news bulletins, and multimedia assignments,
                    students
                    develop practical knowledge that complements their theoretical studies, making them industry-ready for
                    careers
                    in journalism, photography, cinematography, anchoring, video editing, filmmaking, advertising, and
                    digital
                    media.
                </p>


            </div>

        </section>

        <div class="text-dark pt-5 pb-4" style="padding-left: 50px;">
            <h4>Facilities available for the students:</h4>
            <ul>
                <li>Camera setups</li>
                <li>Microphones</li>
                <li>Teleprompter</li>
                <li>Chroma screen</li>
                <li>Lighting setups</li>
                <li>Editing software</li>
            </ul>
        </div>


        <!-- GALLERY -->
        <section class="rgu-media-gallery">

            <h2 class="rgu-media-gallery-title">
                Glimpse of <span class="rgu-media-highlight">Our Studio</span>
            </h2>

            <div class="rgu-media-gallery-grid">
                <img src="mobile-assets/new-labs/studio-media-studio/1.jpeg">
                <img src="mobile-assets/new-labs/studio-media-studio/2.jpeg">
                <img src="mobile-assets/new-labs/studio-media-studio/3.jpeg">
                <img src="mobile-assets/new-labs/studio-media-studio/4.jpeg">
                <img src="mobile-assets/new-labs/studio-media-studio/5.jpeg">
                <img src="mobile-assets/new-labs/studio-media-studio/6.jpg">
            </div>

        </section>

    </section>
@endsection
