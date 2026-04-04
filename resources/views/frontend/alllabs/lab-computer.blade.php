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
        .rgu-cse-lab-body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
        }

        /* ===== HERO ===== */
        .rgu-cse-lab-hero {
            background: url('mobile-assets/new-labs/lab-architecture-new/bgg.svg') center/cover no-repeat;
            display: flex;
            gap: 40px;
            padding: 60px 5%;
            align-items: center;
            justify-content: center;
        }

        .rgu-cse-lab-hero-img {
            width: 40%;
            border-radius: 12px;
        }

        .rgu-cse-lab-content {
            width: 50%;
        }

        .rgu-cse-lab-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 15px;
        }

        .rgu-cse-lab-text {
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        /* ===== LAB LIST ===== */
        .rgu-cse-lab-lablist {
            margin-top: 20px;
            line-height: 1.7;
        }

        .rgu-cse-lab-lablist h4 {
            margin-bottom: 10px;
            color: #1f355e;
        }

        .rgu-cse-lab-lablist ol {
            padding-left: 20px;
        }

        /* ===== ACTIVITIES ===== */
        .rgu-cse-lab-activities {
            width: 85%;
            margin: 40px auto;
            background: transparent;
            /* Removed white bg to let cards pop */
            padding: 10px;
        }

        .rgu-cse-lab-activities-title {
            text-align: center;
            color: #1f355e;
            margin-bottom: 35px;
            font-size: 2.2rem;
        }

        /* ===== NEW CARD LAYOUT ===== */
        .rgu-cse-lab-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .rgu-cse-lab-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #27467a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .rgu-cse-lab-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            border-top-color: orange;
        }

        .rgu-cse-lab-section-title {
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
        .rgu-cse-lab-section-title::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: orange;
            border-radius: 50%;
        }

        .rgu-cse-lab-section ul {
            padding-left: 20px;
            line-height: 1.8;
            color: #444;
        }

        .rgu-cse-lab-section ul li {
            margin-bottom: 6px;
        }

        /* Custom color for bullet points */
        .rgu-cse-lab-section ul li::marker {
            color: #27467a;
        }

        /* ===== GALLERY ===== */
        .rgu-cse-lab-gallery {
            text-align: center;
            padding: 40px 5%;
            background-color: #FFFBF6;
        }

        .rgu-cse-lab-gallery-title {
            font-size: 28px;
            margin-bottom: 25px;
            color: #27467a;
        }

        .rgu-cse-lab-highlight {
            color: orange;
        }

        .rgu-cse-lab-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rgu-cse-lab-grid img {
            border: 1px solid #999;
            width: 100%;
            border-radius: 10px;
            display: block;
            transition: transform 0.3s ease;
        }

        .rgu-cse-lab-grid img:hover {
            transform: scale(1.03);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-cse-lab-hero {
                flex-direction: column;
                padding: 30px 20px;
                text-align: left;
                background-color: #FFFBF6;
            }

            .rgu-cse-lab-hero-img,
            .rgu-cse-lab-content {
                width: 100%;
            }

            .rgu-cse-lab-title {
                font-size: 24px;
            }

            .rgu-cse-lab-text {
                text-align: justify;
                font-size: 15px;
            }

            .rgu-cse-lab-activities {
                width: 100%;
                padding: 20px;
                margin: 20px auto;
            }

            .rgu-cse-lab-activities-title {
                font-size: 1.8rem;
            }

            .rgu-cse-lab-cards-container {
                grid-template-columns: 1fr;
            }

            .rgu-cse-lab-grid {
                grid-template-columns: 1fr;
            }

            .rgu-cse-lab-gallery {
                background-color: #FFFBF6;
                padding: 30px 20px;
            }
        }
    </style>

    <section class="rgu-cse-lab-body">
        <section class="rgu-cse-lab-hero">

            <img src="mobile-assets/new-labs/lab-cse-lab-new/headimg.JPG" class="rgu-cse-lab-hero-img">

            <div class="rgu-cse-lab-content">
                <h2 class="rgu-cse-lab-title">Computer Science Laboratories </h2>

                <p class="rgu-cse-lab-text">
                    The Computer Science Laboratories feature a robust and well-integrated ecosystem of computing
                    laboratories
                    designed to support academic excellence, hands-on learning, and advanced research across multiple
                    domains of
                    computing. The department hosts several specialized labs, including Computer Programming lab, Software
                    Engineering Lab, Modern Database Systems Lab, Cryptography and Network Security Lab, and a dedicated
                    Artificial Intelligence Lab, collectively comprising over 280 computing systems configured for diverse
                    workloads. These labs are powered by modern Intel Core i3 and i5 processors along with high-performance
                    AMD
                    Ryzen 7 systems, supported by NVMe storage and GPU-enabled machines for compute-intensive tasks.
                </p>

                <!-- <div class="rgu-cse-lab-lablist">
                  <h4>Available Labs:</h4>
                  <ol>
                    <li>Fluid Mechanics Lab</li>
                    
                  </ol>
                </div> -->

            </div>
        </section>

        <div style="padding-left: 50px; padding-right: 50px;" class="text-dark pt-4 pb-4">
            <p>The
                infrastructure enables work across a wide range of domains such as Software Development, Data Structures
                &
                Algorithms, Machine Learning, Deep Learning, Computer Vision, Natural Language Processing,
                Cybersecurity,
                Cloud Computing, Internet of Things (IoT), Big Data Analytics, Distributed Systems, Operating Systems,
                Database Management, Robotics, Edge Computing, Data Annotations, Information Retrieval, Smart Systems,
                and
                Human-Computer Interaction. Each laboratory is equipped with centralized air conditioning and 1 Gigabit
                high-speed network connectivity, ensuring a reliable and comfortable working environment, and is
                provisioned
                with a rich ecosystem of open-source software tools and platforms to promote flexibility, innovation,
                and
                cost-effective learning. Supported by robust power backup through online UPS systems, the labs provide a
                seamless, industry-aligned practical environment that empowers students to translate theoretical
                concepts into
                real-world solutions and prepares them for emerging technological challenges.</p>
        </div>

        <section class="rgu-cse-lab-activities">

            <h3 class="rgu-cse-lab-activities-title">Key Highlights of the Laboratories</h3>

            <div class="rgu-cse-lab-cards-container">

                <div class="rgu-cse-lab-section">
                    <!-- <h4 class="rgu-cse-lab-section-title">Fluid Mechanics Lab</h4> -->
                    <ul>
                        <li>280+ computing systems across multiple specialized labs</li>
                        <li>Dedicated AI Lab with GPU-enabled high-performance workstations</li>
                        <li>High-speed SSD/NVMe storage for efficient data processing</li>
                        <li>Reliable online UPS power backup for uninterrupted operation</li>
                        <li>1 Gigabit high-speed network connectivity across all labs</li>
                        <li>Extensive use of open-source software and development tools</li>
                        <li>Support for multi-domain learning and research in emerging technologies</li>
                        <li>Infrastructure designed for hands-on learning, projects, and research</li>
                        <li>Industry-relevant environment promoting innovation and skill development</li>
                        <li>Centralized air-conditioned lab environments for optimal comfort</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="rgu-cse-lab-gallery">

            <h2 class="rgu-cse-lab-gallery-title">
                Glimpse of <span class="rgu-cse-lab-highlight">Our Labs</span>
            </h2>

            <div class="rgu-cse-lab-grid">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/1.jpeg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/2.jpeg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/3.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/4.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/5.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/6.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/7.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/8.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/9.jpg">
                <img src="mobile-assets/new-labs/lab-cse-lab-new/10.jpg">
            </div>

        </section>
    </section>
@endsection
