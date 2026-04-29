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
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .rgu-mmlab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* HERO */
        .rgu-mmlab-hero {
            background: url('mobile-assets/new-labs/lab-multimedia/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-mmlab-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-mmlab-content {
            width: 50%;
        }

        .rgu-mmlab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-mmlab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* LIST */
        .rgu-mmlab-list {
            margin-top: 20px;
        }

        .rgu-mmlab-list h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-mmlab-list ol {
            padding-left: 20px;
            line-height: 1.8;
        }

        /* FEATURES */
        .rgu-mmlab-section {
            width: 85%;
            margin: 40px auto;
            padding: 10px;
        }

        .rgu-mmlab-section-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        .rgu-mmlab-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
        }

        .rgu-mmlab-card h4 {
            color: #27467a;
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
        }

        .rgu-mmlab-card ol {
            padding-left: 20px;
            line-height: 1.8;
        }

        /* GALLERY */
        .rgu-mmlab-gallery {
            text-align: center;
            padding: 40px 5%;
            background: #FFFBF6;
        }

        .rgu-mmlab-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-mmlab-highlight {
            color: orange;
        }

        .rgu-mmlab-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-mmlab-grid img {
            width: 100%;
            border-radius: 10px;
        }

        /* MOBILE */
        @media(max-width:900px) {
            .rgu-mmlab-hero {
                flex-direction: column;
                padding: 30px 20px;
                background: #FFFBF6;
            }

            .rgu-mmlab-img,
            .rgu-mmlab-content {
                width: 100%;
            }

            .rgu-mmlab-title {
                font-size: 24px;
            }

            .rgu-mmlab-text {
                font-size: 15px;
            }

            .rgu-mmlab-section {
                width: 100%;
                padding: 20px;
            }

            .rgu-mmlab-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="rgu-mmlab-body">

        <section class="rgu-mmlab-hero">

            <img src="/mobile-assets/new-labs/multi-media-lab/8.jpg" class="rgu-mmlab-img">

            <div class="rgu-mmlab-content">

                <h2 class="text-dark">Multimedia Lab</h2>

                <p class="rgu-mmlab-text">
                    The Multimedia Lab at the Royal School of Communication and Media serves as a dynamic and innovative space where students engage with digital media, visual communication, and contemporary content creation practices. The lab is designed to seamlessly integrate creativity with technology, enabling students to develop essential skills in graphic design, animation, video production, and interactive media.
                </p>
                <p class="rgu-mmlab-text">
                    With a strong emphasis on experiential learning and industry-oriented training, the lab nurtures critical thinking, storytelling abilities, and innovative problem-solving. It provides students with hands-on experience and prepares them to meet the evolving demands of the media and creative industries.
                </p>



            </div>
        </section>

        <div class="text-dark pt-4 pb-4" style="padding-left: 50px;">
                    <h4>Lab Specifications:</h4>
                    <ol>
                        <li>Intel i7 Processor</li>
                        <li>AMD Ryzen 5 7600X Processor</li>
                        <li>AMD Ryzen 5 5600GT Processor</li>
                        <li>Gigabyte B560M Motherboard</li>
                        <li>16 GB RAM</li>
                        <li>1 TB SSD</li>
                        <li>NVIDIA GV-N105TD5 4GB Graphics Card</li>
                        <li>Gigabyte B450M Motherboard</li>
                    </ol>
                </div>

        <section class="rgu-mmlab-section">

            <h3 class="rgu-mmlab-section-title">Key Highlights and Features</h3>

            <div class="rgu-mmlab-card">
                <ol>
                    <li>Development of visual communication and media production projects through practical, assignment-based learning.
                    </li>
                    <li>Hands-on training in video editing, motion graphics, digital content creation, filmmaking, visual effects, 2D animation, and 3D animation.</li>
                    <li>Exploration of fundamental concepts such as animation principles, colour theory, and composition for media applications.</li>
                    <li>Creation of diverse multimedia outputs, including short films, animations, and digital campaigns.</li>
                    <li>Exposure to industry-standard tools, professional workflows, and production techniques.</li>
                    <li>Encouragement of interdisciplinary projects that integrate communication, design, and technology.</li>
                    <li>Portfolio development through project-based learning and creative experimentation.</li>
                    <li>Emphasis on maintaining a disciplined, clean, and professionally managed lab environment.</li>
                </ol>
            </div>

        </section>

        <section class="rgu-mmlab-gallery">

            <h2 class="rgu-mmlab-gallery-title">
                Glimpse of <span class="rgu-mmlab-highlight">Our Lab</span>
            </h2>

            <div class="rgu-mmlab-grid">
                <img src="/mobile-assets/new-labs/multi-media-lab/1.jpg">
                <img src="/mobile-assets/new-labs/multi-media-lab/2.jpg">
                <img src="/mobile-assets/new-labs/multi-media-lab/4.jpg">
                <img src="/mobile-assets/new-labs/multi-media-lab/6.jpg">
                <img src="/mobile-assets/new-labs/multi-media-lab/7.jpg">
                <img src="/mobile-assets/new-labs/multi-media-lab/8.jpg">
            </div>
        </section>

    </section>
@endsection
