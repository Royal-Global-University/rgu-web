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
        /* CSS Variables for consistent styling */
        :root {
            --primary-color: #002147; /* Royal Blue */
            --accent-color: #00A8E8;
            --text-dark: #333;
            --text-light: #f4f4f4;
            --bg-light: #ffffff;
            --bg-off-white: #f9f9f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* Font set to Times New Roman as requested */
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            line-height: 1.6;
            color: var(--text-dark);
            background-color: #f4f4f4; /* Light fallback color */

            background-image: url('mobile-assets/department-all/bg.svg');
            background-size: cover;

        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('mobile-assets/conference/bg2.png');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--text-light);
            padding: 20px;
        }

        .hero h1 {
            font-size: 2.6rem;
            margin-bottom: 20px;
            text-transform: uppercase;

            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin-bottom: 10px;
        }

        .hero .date-badge {
            margin-top: 20px;
            padding: 12px 25px;
            background-color: var(--accent-color);
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
        }

        /* General Section Styling */
        section {
            padding: 60px 20px;

            margin: 0 auto;
        }

        h2 {
            color: var(--primary-color);
            margin-bottom: 30px;
            border-bottom: 2px solid var(--accent-color);
            display: inline-block;
            padding-bottom: 10px;
            font-size: 2.2rem;
        }

        h3 {
            color: var(--primary-color);
            margin: 20px 0 10px 0;
            font-size: 1.6rem;
        }

        /* Text size increased "one size bigger" */
        p {
            margin-bottom: 15px;
            text-align: justify;
            font-size: 1.25rem; /* Approx 20px */
            line-height: 1.8;
        }

        ul {
            list-style-position: inside;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        li {
            margin-bottom: 8px;
        }

        /* Vision & Objectives */
        .vision-objectives {
            background-color: rgba(255, 255, 255, 0.95);
            border-left: 5px solid var(--primary-color);
            padding: 30px;
            margin: 40px auto;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        /* Themes Grid */
        .themes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .theme-card {
            background: #fff;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .theme-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Schedule & Structure - UPDATED for Side by Side */
        .structure-container {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 60px 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,33,71,0.3);
        }

        .structure-container h2 {
            color: var(--text-light);
            border-color: var(--text-light);
            width: 100%;
        }

        .schedule-wrapper {
            display: flex;
            gap: 50px; /* Space between Day 1 and Day 2 */
            margin-top: 20px;
        }

        .schedule-column {
            flex: 1; /* Makes columns equal width */
        }

        .schedule-column h3 {
            color: var(--accent-color); /* Highlight Day title */
            margin-top: 0;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding-bottom: 10px;
        }

        /* Responsive handling for schedule */
        @media (max-width: 768px) {
            .schedule-wrapper {
                flex-direction: column;
                gap: 30px;
            }
        }

        /* Attendees & Benefits */
        .attend-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }
        .attend-col {
            flex: 1;
            min-width: 300px;
            background: rgba(255,255,255,0.9); /* Opaque bg for readability */
            padding: 20px;
            border-radius: 8px;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 50px 20px;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

    </style>
    <header class="hero">
        <h1 style="text-align: center;">The International Conference on Emerging Trends and Innovations in Engineering and Data Science <br> (ICETIEDS–2026)</h1>
        <p style="text-align: center;">Flagship global event hosted by the Royal School of Engineering and Technology, <br> The Assam Royal Global University</p>
        <div style="text-align: center;" class="date-badge">Scheduled for 13–14 November 2026 in a hybrid mode (In-person + Online)</div>
    </header>

    <section id="about" class="fade-in container">
        <div style="background: rgba(255,255,255,0.9); padding: 30px; border-radius: 8px;">
            <h2>About the Conference</h2>
            <p>The conference brings together leading minds from academia, industry, and research organizations to explore the rapid advancements transforming engineering and data-driven technologies.</p>
            <p>As the world advances into the era of Industry 4.0, the convergence of traditional engineering with Artificial Intelligence, IoT, Big Data, and intelligent automation is reshaping design, development, and decision-making across all sectors.</p>
            <p>This conference aims to bridge the widening gap between conventional engineering practices and disruptive digital innovations, offering a platform for collaboration, discussion, and knowledge sharing.</p>
            <p>Aligned with national initiatives such as Digital India, Smart Cities Mission, Viksit Bharat, and global goals under the UN Sustainable Development Goals (SDG 9, 11, and 13), ICETIEDS–2026 emphasizes sustainable, resilient, and future-ready engineering solutions.</p>
        </div>
    </section>

    <section id="vision-objectives" class="container vision-objectives fade-in">
        <h2>Conference Vision</h2>
        <p>ICETIEDS–2026 envisions fostering a dynamic environment where researchers, engineers, scientists, industry professionals, and students can share cutting-edge ideas, explore interdisciplinary applications, and build long-term collaborations that drive innovation.</p>

        <br>

        <h2>Conference Objectives</h2>
        <ul>
            <li>To provide a global platform for exchanging ideas on emerging technologies in engineering and data science.</li>
            <li>To foster academia–industry partnerships for sustainable technological growth.</li>
            <li>To promote interdisciplinary research across civil, mechanical, electrical, computer science, and related domains.</li>
        </ul>
    </section>

    <section id="themes" class="fade-in container">
        <h2>Conference Themes</h2>
        <p style="background: rgba(255,255,255,0.8); padding: 10px; border-radius: 4px;">ICETIEDS–2026 will feature a wide range of tracks covering Core Engineering, Data Science & Emerging Technologies, and Interdisciplinary Innovations, including but not limited to:</p>

        <div class="themes-grid">
            <div class="theme-card">
                <h3>A. For Core Engineering Focus</h3>
                <ul>
                    <li>Sustainable Infrastructure and Smart Cities</li>
                    <li>Advanced Materials, Smart Materials and Construction Technologies</li>
                    <li>Renewable and Clean Energy Systems</li>
                    <li>Automation, Robotics, Mechatronics, Green Manufacturing and Industrial Sustainability</li>
                    <li>Advanced Transportation and Pavement Engineering</li>
                    <li>Water Resources Management and Climate-Resilient Infrastructure</li>
                    <li>Smart Grids and Power Systems Optimization</li>
                    <li>Structural Health Monitoring</li>
                    <li>Disaster-Resilient Design and Geotechnical Innovations</li>
                    <li>3D Printing for Engineering Applications</li>
                </ul>
            </div>

            <div class="theme-card">
                <h3>B. For Data Science & Emerging Technologies Focus</h3>
                <ul>
                    <li>Artificial Intelligence and Machine Learning Applications in Engineering</li>
                    <li>Big Data Analytics and Cloud Computing</li>
                    <li>Internet of Things (IoT) and Edge Computing for Smart Systems</li>
                    <li>Cybersecurity, Blockchain, and Digital Trust</li>
                    <li>Computer Vision and Deep Learning for Engineering Diagnostics</li>
                    <li>Predictive Maintenance and AI in Smart Manufacturing</li>
                    <li>Data-Driven Urban Planning and Smart Infrastructure</li>
                    <li>Human–AI Collaboration and Ethical AI Frameworks</li>
                    <li>Generative AI and Large Language Models in Engineering Design</li>
                    <li>Data Science Applications for Climate and Environmental Studies</li>
                </ul>
            </div>

            <div class="theme-card">
                <h3>C. Interdisciplinary Themes</h3>
                <ul>
                    <li>AI-Integrated Sustainable Engineering Solutions</li>
                    <li>Digital Twins and Smart Infrastructure Management</li>
                    <li>Smart Manufacturing and Industrial IoT</li>
                    <li>Green Technology and AI for Sustainable Development Goals (SDGs)</li>
                    <li>Deep Learning Applications in Mechanical Engineering</li>
                    <li>Artificial Intelligence, Machine Learning Applications in Civil Engineering</li>
                    <li>Slope Stability, Landslide Prediction</li>
                    <li>Rock and Soil Behaviour Analysis using AI</li>
                    <li>Sustainability</li>
                    <li>Sustainability and Social Entrepreneurship</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="structure" class="fade-in container">
        <div class="structure-container">
            <h2>Conference Structure</h2>

            <div class="schedule-wrapper">
                <div class="schedule-column">
                    <h3>Day 1:</h3>
                    <ul>
                        <li>Inauguration</li>
                        <li>International Keynote Address</li>
                        <li>Plenary Talks</li>
                    </ul>
                </div>

                <div class="schedule-column">
                    <h3>Day 2:</h3>
                    <ul>
                        <li>Parallel Technical Sessions</li>
                        <li>Panel Discussion: “Engineering for a Data-Driven Future”</li>
                        <li>Valedictory Session</li>
                    </ul>
                </div>
            </div>

            <p style="margin-top: 30px; font-weight: bold; text-align: center;">Proceedings will be submitted to reputed publishing partners including Springer & Taylor & Francis.</p>
        </div>
    </section>

    <section id="details" class="fade-in container">
        <div class="attend-grid">
            <div class="attend-col">
                <h2>Who Should Attend?</h2>
                <ul>
                    <li>Academicians & Researchers</li>
                    <li>Industry Professionals & Engineers</li>
                    <li>Data Scientists & Technology Innovators</li>
                    <li>Postgraduate & Doctoral Students</li>
                    <li>Government & Policy Experts</li>
                    <li>Startups & Innovators in Engineering and AI</li>
                </ul>
            </div>
            <div class="attend-col">
                <h2>Why Attend?</h2>
                <ul>
                    <li>Opportunity to publish in Scopus-indexed proceedings</li>
                    <li>Interactions with global experts and industry leaders</li>
                    <li>Exposure to cutting-edge tools, technologies, and methodologies</li>
                    <li>Networking for collaborative research, MoUs, and funded projects</li>
                    <li>Insight into the future of engineering driven by AI and data science</li>
                    <li>Engagement with themes supporting national and global sustainability goals</li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <h2 style="color: #fff;">Join Us at ICETIEDS–2026</h2>
        <p style="text-align: center;">ICETIEDS–2026 promises a rich, multidisciplinary dialogue on the future of engineering and data sciences.</p>
        <p style="text-align: center;">Whether you are a researcher, practitioner, innovator, or student, the conference offers an inspiring platform to share knowledge, build networks, and explore the technologies shaping tomorrow.</p>
    </footer>

    <script>
        // Simple Intersection Observer for Fade-in Animation
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>

@endsection
