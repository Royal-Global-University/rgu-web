@extends('frontend.master')
@section('content')
    <div class="mobile">

        @include('frontend/components/mobileheader')
        <div style="padding-top: 100px"></div>
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

            <img src="/mobile-assets/Electronics/Experiment on Flip Flop.jpeg" class="rgu-mmlab-img">

            <div class="rgu-mmlab-content">

                <h2 class="rgu-mmlab-title">Electronics Engineering Laboratory </h2>

                <p class="rgu-mmlab-text">
                    The Electronics Engineering Laboratory is a practical learning facility designed to provide
                    students with hands-on experience in the field of electronics and embedded systems. It
                    serves as an essential platform where theoretical concepts are transformed into practical
                    applications through experiments and circuit design. The laboratory plays a vital role in
                    enhancing students’ technical competence, innovation skills, and problem-solving abilities.
                </p>

            </div>

        </section>

        <div class="p-5">
            <p class="rgu-mmlab-text">
                In this laboratory, practical classes are conducted for subjects such as Digital Electronics,
                Microprocessor, Microcontroller and Basic Electronics. Students perform experiments
                related to logic gates, Boolean algebra, combinational circuits, sequential circuits, flip-
                flops, counters, registers, multiplexers, encoders, decoders, and memory devices. In
                Microprocessor practical sessions, students learn assembly language programming,
                interfacing techniques, timing operations, data transfer, arithmetic and logical operations,
                and hardware applications using 8086 Microprocessor Trainer Kit and other trainer
                kits.The laboratory is well-equipped with modern instruments and equipment such as
                Digital Storage Oscilloscope, function generators, regulated DC power supplies,
                multimeters, breadboards, soldering stations, trainer kits and logic probe kits.
            </p>

            <p class="rgu-mmlab-text">
                This laboratory encourages project-based learning, where students develop mini-projects
                and prototypes related to automation, IoT, robotics, communication systems, and control
                applications. It supports innovation and research activities by enabling students to
                implement real-world solutions using electronic hardware and software tools. Overall, the
                Electronics Engineering Laboratory bridges the gap between classroom theory and
                industrial practice. It helps students develop practical skills, analytical thinking, teamwork,
                and confidence, which are essential for higher studies, research, entrepreneurship, and
                careers in electronics, electrical engineering, and allied industries.
            </p>
        </div>

        <section class="rgu-mmlab-gallery">

            <h2 class="rgu-mmlab-gallery-title" style="font-size: 42px;">
                Glimpse of <span class="rgu-mmlab-highlight">Our Lab</span>
            </h2>

            <div class="row">
                <div class="col-lg-4 p-3">
                    <div class="p-2 rounded text-center" style="background-color: #b4ccef">
                        <img class="rounded" style="height: 300px; width: 100%;" src="/mobile-assets/Electronics/Cathode Ray Oscilloscope.JPG" />
                        <p class="text-dark pt-3" style="font-size: 28px;">Cathode Ray Oscilloscope</p>
                    </div>
                </div>
                <div class="col-lg-4 p-3">
                    <div class="p-2 rounded text-center" style="background-color: #b4ccef"">
                        <img class="rounded" src="/mobile-assets/Electronics/Experiment on Flip Flop.jpeg" />
                        <p class="text-dark pt-3" style="font-size: 28px;">Experiment on Flip Flop</p>
                    </div>
                </div>
                <div class="col-lg-4 p-3">
                    <div class="p-2 rounded text-center" style="background-color: #b4ccef"">
                        <img class="rounded" src="/mobile-assets/Electronics/Microprocessor Experiment.jpeg" />
                        <p class="text-dark pt-3" style="font-size: 28px;">Microprocessor Experiment</p>
                    </div>
                </div>
                <div class="col-lg-4 p-3">
                    <div class="p-2 rounded text-center" style="background-color: #b4ccef"">
                        <img class="rounded" src="/mobile-assets/Electronics/Microprocessor Lab.jpeg" />
                        <p class="text-dark pt-3" style="font-size: 28px;">Microprocessor Lab</p>
                    </div>
                </div>
                <div class="col-lg-4 p-3">
                    <div class="p-2 rounded text-center" style="background-color: #b4ccef"">
                        <img class="rounded" src="/mobile-assets/Electronics/Microprocessor.jpeg" />
                        <p class="text-dark pt-3" style="font-size: 28px;">Microprocessor</p>
                    </div>
                </div>
            </div>

        </section>

    </section>
@endsection
