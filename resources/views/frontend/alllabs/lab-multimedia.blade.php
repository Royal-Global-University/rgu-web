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

            <img src="mobile-assets/new-labs/lab-multimedia/headimg.jpeg" class="rgu-mmlab-img">

            <div class="rgu-mmlab-content">

                <h2 class="rgu-mmlab-title">Multimedia Lab</h2>

                <p class="rgu-mmlab-text">
                    Multimedia Lab

                    The Multimedia Lab of the Royal School of Communication and Media provides a dynamic platform for
                    students to
                    explore digital media, visual communication, and contemporary content creation practices. The lab
                    focuses on
                    integrating creativity with technology, enabling students to develop competencies in graphic design,
                    animation, video production, and interactive media. With an emphasis on experiential learning and
                    industry-oriented training, the lab fosters critical thinking, storytelling skills, and innovative
                    problem-solving. The lab is situated in Block–C on the 7th floor Room No. 706.
                </p>

                

            </div>
        </section>

        <div class="text-dark pt-4 pb-4" style="padding-left: 50px;">
                    <h4>Available Software Programs:</h4>
                    <ol>
                        <li>DaVinci</li>
                        <li>Blackmagic Fusion</li>
                        <li>Foundry Nuke (Student Version)</li>
                        <li>OpenToonz</li>
                        <li>Affinity</li>
                        <li>Autodesk Maya</li>
                        <li>Blender</li>
                        <li>Unity (for interactive media and AR/VR development)</li>
                    </ol>
                </div>

        <section class="rgu-mmlab-section">

            <h3 class="rgu-mmlab-section-title">Some highlights and features of our multimedia Lab</h3>

            <div class="rgu-mmlab-card">
                <ol>
                    <li>Development of visual communication and media production projects through practical assignments.
                    </li>
                    <li>Hands-on training in video editing, motion graphics, digital content creation, 2D animation and 3D
                        animation.</li>
                    <li>Exploration of animation principles, colour theory, and composition for media applications.</li>
                    <li>Creation of multimedia content including short films, animations, and digital campaigns.</li>
                    <li>Exposure to industry-standard tools, workflows, and production techniques.</li>
                    <li>Encouragement of interdisciplinary projects combining communication, design, and technology.</li>
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
                <img src="mobile-assets/new-labs/lab-multimedia/1.jpeg">
                <img src="mobile-assets/new-labs/lab-multimedia/2.jpeg">
                <img src="mobile-assets/new-labs/lab-multimedia/3.jpeg">
                <img src="mobile-assets/new-labs/lab-multimedia/4.jpeg">
            </div>

        </section>

    </section>
@endsection
