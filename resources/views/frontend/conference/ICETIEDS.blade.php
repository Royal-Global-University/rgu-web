@extends('frontend.master')
@section('content')
    <style>
        /* CSS Reset & Variables */
        :root {
            --primary-color: #002147;
            /* Royal Blue */
            --accent-color: #00A8E8;
            --text-dark: #333;
            --text-light: #f4f4f4;
            --bg-light: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            line-height: 1.8;
            color: var(--text-dark);
            background-color: #f4f4f4;
            /* Update paths to your actual assets */
            background-image: url('mobile-assets/department-all/bg.svg');
            background-size: cover;
            background-attachment: fixed;
        }

        /* Typography & Utilities */
        h1,
        h2,
        h3 {
            line-height: 1.3;
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
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        p {
            font-size: 1.15rem;
            margin-bottom: 20px;
            text-align: justify;
        }

        ul {
            font-size: 1.1rem;
            list-style-position: inside;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        /* Layout Containers */
        .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .content-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        /* Top Navigation Placeholders */
        .mobile-header,
        .website-header {
            width: 100%;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 15px;
            display: none;
            /* Hide by default, handle visibility with media queries if needed */
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            /* Update path to your actual assets */
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('mobile-assets/conference/bg2.png');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--text-light);
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            max-width: 1000px;
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin-bottom: 30px;
            text-align: center;
        }

        .date-badge {
            padding: 15px 30px;
            background-color: var(--accent-color);
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Vision & Objectives */
        .vision-objectives {
            border-left: 5px solid var(--primary-color);
        }

        /* Themes Grid */
        .theme-intro {
            background: rgba(255, 255, 255, 0.8);
            padding: 15px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
            text-align: left;
        }

        .themes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .theme-card {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .theme-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .theme-card ul {
            color: #555;
            list-style-type: disc;
            padding-left: 20px;
            list-style-position: outside;
        }

        /* Schedule & Structure */
        .structure-container {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 50px 40px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 33, 71, 0.3);
        }

        .structure-container h2 {
            color: var(--text-light);
            border-color: var(--text-light);
        }

        .schedule-wrapper {
            display: flex;
            gap: 40px;
            margin-top: 30px;
        }

        .schedule-column {
            flex: 1;
        }

        .schedule-column h3 {
            color: var(--accent-color);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .schedule-column ul {
            list-style-type: none;
            padding: 0;
        }

        .schedule-column li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 15px;
            font-size: 1.15rem;
        }

        .schedule-column li::before {
            content: "»";
            color: var(--accent-color);
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .proceedings-note {
            margin-top: 40px;
            font-weight: bold;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 5px;
        }

        /* Attendees & Benefits */
        .attend-grid {
            display: flex;
            gap: 40px;
        }

        .attend-card {
            flex: 1;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .attend-card ul {
            list-style-type: disc;
            padding-left: 20px;
            list-style-position: outside;
            color: #444;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        footer h2 {
            color: #fff;
            border-color: #555;
            margin-bottom: 20px;
        }

        footer p {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 15px auto;
            color: #ccc;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .schedule-wrapper {
                flex-direction: column;
            }

            .attend-grid {
                flex-direction: column;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.2rem;
            }
        }
    </style>

    <style>
        /* =========================================
               ORGANIZING COMMITTEE SECTION
            ========================================= */

        .committee-block {
            margin-top: 70px;
        }

        .committee-grid {
            display: grid;
            gap: 30px;
            margin-top: 30px;
        }

        .committee-grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .committee-grid-4 {
            grid-template-columns: repeat(4, 1fr);
        }

        .committee-grid-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .committee-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            padding: 30px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
            position: relative;
        }

        .committee-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .committee-card img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10%;
            margin-bottom: 20px;
            border: 5px solid #f1f1f1;
        }

        .committee-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .committee-card p {
            text-align: center;
            margin-bottom: 0;
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }

        .committee-role {
            position: relative;
            background: var(--primary-color);
            color: #fff;
            margin: 10px 0px;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        /* Table Styling */

        .committee-table-wrapper {
            overflow-x: auto;
            margin-top: 30px;
        }

        .committee-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        .committee-table thead {
            background: var(--primary-color);
            color: #fff;
        }

        .committee-table th,
        .committee-table td {
            padding: 16px 20px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 1rem;
        }

        .committee-table tbody tr:nth-child(even) {
            background: #f8f8f8;
        }

        .committee-table tbody tr:hover {
            background: rgba(0, 168, 232, 0.08);
        }

        /* Responsive */

        @media (max-width: 992px) {

            .committee-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }

            .committee-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {

            .committee-grid-2,
            .committee-grid-3,
            .committee-grid-4 {
                grid-template-columns: 1fr;
            }

            .committee-card {
                padding: 25px 20px;
            }

            .committee-card img {
                width: 120px;
                height: 120px;
            }

            .committee-table th,
            .committee-table td {
                font-size: 0.95rem;
                padding: 14px;
            }
        }
    </style>


    <div class="mobile">
        @include('frontend/components/mobileheader')

    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')

    </div>

    <!-- Hero Section -->
    <header class="hero">
        <h1>The International Conference on Emerging Trends and Innovations in Engineering and Data Science <br>
            (ICETIEDS–2026)</h1>
        <p>Flagship global event hosted by the Royal School of Engineering and Technology, <br> The Assam Royal Global
            University</p>
        <div class="date-badge">Scheduled for 13–14 November 2026 in a hybrid mode (In-person + Online)</div>
    </header>

    <!-- About Section -->
    <section id="about" class="container fade-in">
        <div class="content-box">
            <h2>About the Conference</h2>
            <p>The conference brings together leading minds from academia, industry, and research organizations to explore
                the
                rapid advancements transforming engineering and data-driven technologies.</p>
            <p>As the world advances into the era of Industry 4.0, the convergence of traditional engineering with
                Artificial
                Intelligence, IoT, Big Data, and intelligent automation is reshaping design, development, and
                decision-making
                across all sectors.</p>
            <p>This conference aims to bridge the widening gap between conventional engineering practices and disruptive
                digital innovations, offering a platform for collaboration, discussion, and knowledge sharing.</p>
            <p>Aligned with national initiatives such as Digital India, Smart Cities Mission, Viksit Bharat, and global
                goals
                under the UN Sustainable Development Goals (SDG 9, 11, and 13), ICETIEDS–2026 emphasizes sustainable,
                resilient,
                and future-ready engineering solutions.</p>
        </div>
    </section>

    <!-- Vision & Objectives Section -->
    <section id="vision-objectives" class="container fade-in">
        <div class="content-box vision-objectives">
            <h2>Conference Vision</h2>
            <p>ICETIEDS–2026 envisions fostering a dynamic environment where researchers, engineers, scientists, industry
                professionals, and students can share cutting-edge ideas, explore interdisciplinary applications, and build
                long-term collaborations that drive innovation.</p>

            <br>

            <h2>Conference Objectives</h2>
            <ul>
                <li>To provide a global platform for exchanging ideas on emerging technologies in engineering and data
                    science.
                </li>
                <li>To foster academia–industry partnerships for sustainable technological growth.</li>
                <li>To promote interdisciplinary research across civil, mechanical, electrical, computer science, and
                    related
                    domains.</li>
            </ul>
        </div>
    </section>

    <!-- Themes Section -->
    <section id="themes" class="container fade-in">
        <h2>Conference Themes</h2>
        <p class="theme-intro">ICETIEDS–2026 will feature a wide range of tracks covering Core Engineering, Data Science &
            Emerging Technologies, and Interdisciplinary Innovations, including but not limited to:</p>

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

    <!-- Conference Structure Section -->
    <section id="structure" class="container fade-in">
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

            <p class="proceedings-note">Proceedings will be submitted to reputed publishing partners including Springer &
                Taylor & Francis.</p>
        </div>
    </section>

    <!-- Attendees & Benefits Section -->
    <section id="details" class="container fade-in">
        <div class="attend-grid">
            <div class="attend-card">
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
            <div class="attend-card">
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

    <!-- Organizing Committee Section -->
    <section id="committee" class="container fade-in">

        <!-- Section Heading -->
        <div class="content-box">


            <!-- Top Leadership -->
            <div class="committee-grid committee-grid-3">

                <!-- Chief Patron -->
                <div class="committee-card">
                    <img src="https://www.rgu.ac/mobile-assets/governing-body/ashok-kumar-pansari.png" alt="Chief Patron">
                    <h3>Dr. A K Pansari</h3>
                    <p>Chancellor, The Assam Royal Global University</p>
                    <div class="committee-role">Chief Patron</div>
                </div>

                <!-- Patron -->
                <div class="committee-card">
                    <img src="https://www.rgu.ac/mobile-assets/governing-body/ankur-pansari.png" alt="Patron">
                    <h3>Mr. Ankur Pansari</h3>
                    <p>Pro-Chancellor, The Assam Royal Global University</p>
                    <div class="committee-role">Patron</div>
                </div>

                <!-- Chief Advisor -->
                <div class="committee-card">
                    <img src="https://www.rgu.ac/mobile-assets/governing-body/ak-buragohain.png" alt="Chief Advisor">
                    <h3>Prof. A. K. Buragohain</h3>
                    <p>Vice-Chancellor, The Assam Royal Global University</p>
                    <div class="committee-role">Chief Advisor</div>
                </div>

            </div>

            <!-- Advisory Board -->
            <div class="committee-block">
                <h2>Advisory Board</h2>

                <div class="committee-grid committee-grid-4">

                    <div class="committee-card">
                        <img src="https://www.rgu.ac/mobile-assets/governing-body/ak-buragohain.png" alt="">
                        <h3>Prof. A. K. Buragohain</h3>
                        <p>Vice Chancellor, The Assam Royal Global University</p>
                    </div>

                    <div class="committee-card">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/boardofmanagement/diganta-munshi.jpeg"
                            alt="">
                        <h3>Prof. Diganta Munshi</h3>
                        <p>Registrar Administration/Director IQAC, The Assam Royal Global University</p>
                    </div>

                    <div class="committee-card">
                        <img src="https://www.rgu.ac/mobile-assets/all-faculty/rsb/2.jpg" alt="">
                        <h3>Prof. D N Singh</h3>
                        <p>Registrar Academics, The Assam Royal Global University</p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Prof. Sharad Gokhale.png" alt="">
                        <h3>Prof. Sharad Gokhale</h3>
                        <p>Department of Civil Engineering, Indian Institute of Technology Guwahati</p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Prof. Hemant B. Kaushik.png" alt="">
                        <h3>Prof. Hemant B. Kaushik </h3>
                        <p>BIS CHAIR PROFESSOR
                            Department of Civil Engineering
                            &
                            Centre for Disaster Management and Research,
                            Indian Institute of Technology Guwahati</p>
                    </div>

                    <div class="committee-card">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/academic-council/20.jpg"
                            alt="">
                        <h3>Mr. Pradeep Purohit </h3>
                        <p>Chief Operating Officer, Star Cement Ltd.</p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Mr. Pranjal Pathak.png" alt="">
                        <h3>Mr. Pranjal Pathak</h3>
                        <p>Joint President and Plant Head
                            Hindalco Industries Limited
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Dr. PG Ramesh.png" alt="">
                        <h3>Dr. PG Ramesh</h3>
                        <p>Chief General Manager,
                            Head Technology, PTB; Head, Defence Design Triveni Engineering & Industries Limited
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Er. Biswajit Manasingh.png" alt="">
                        <h3>Er. Biswajit Manasingh</h3>
                        <p>
                            Regional Head - Sales and Operation. UltraTech Concrete RMC Division
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Prof. Debasis Samanta.png" alt="">
                        <h3>Prof. Debasis Samanta</h3>
                        <p>
                            Department of Computer Science and Engineering,
                            Indian Institute of Technology Kharagpur
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Prof. Suman Chakraborty.png" alt="">
                        <h3>Prof. Suman Chakraborty</h3>
                        <p>
                            Director of the Indian Institute of Technology Kharagpur
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Dr. Sanjay Deori.png" alt="">
                        <h3>Dr. Sanjay Deori</h3>
                        <p>
                            Chief Scientist & Group Leader
                            Applied Civil Engineering Department
                            CSIR, NEIST
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Mr Dipak Basumatari.png" alt="">
                        <h3>Mr Dipak Basumatari</h3>
                        <p>
                            Principal Scientist
                            Applied Civil Engineering Department
                            CSIR, NEIST
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Dr. Leon Raj.png" alt="">
                        <h3>Dr. Leon Raj</h3>
                        <p>
                            Senior Scientist
                            Applied Civil Engineering Department
                            CSIR, NEIST
                        </p>
                    </div>

                    <div class="committee-card">
                        <img src="mobile-assets/conference-new/Prof. Ajay Kalamdhad.png" alt="">
                        <h3>Prof. Ajay Kalamdhad</h3>
                        <p>
                            Department of Civil Engineering,
                            Indian Institute of Technology Guwahati
                        </p>
                    </div>

                </div>
            </div>

            <!-- Convener Section -->
            <div class="committee-block">
                <h2>Convenor & Co-Convenor</h2>

                <div class="committee-grid committee-grid-2">

                    <div class="committee-card">
                        <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/Shwetambara-Verma-RSET.png"
                            alt="">
                        <h3>Prof. Shwetambara Verma</h3>
                        <div class="committee-role">Convenor</div>

                    </div>

                    <div class="committee-card">
                        <img src="https://www.rgu.ac/mobile-assets/updated-faculty-img/deepjyoti.jpg" alt="">
                        <h3>Dr. Deepjyoti Choudhury</h3>
                        <div class="committee-role">Co-Convenor</div>

                    </div>

                </div>
            </div>

            <!-- Committee Members -->
            <div class="committee-block">
                <h2>Committee Members</h2>

                <div class="committee-table-wrapper">
                    <table class="committee-table">
                        <thead>
                            <tr>
                                <th>Sl. No.</th>
                                <th>Name</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Ms. Vanita Agrawal</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Dr. Anurag Barthwal</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Dr. Dipankar Dutta</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Dr. Bikash Baruah</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Dr. Shinjini Paul Choudhury</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Dr. Bonisha Borah</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Dr. Manash Pratim Boruah</td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Dr. Smrity Choudhury</td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Dr. Ankita Goel Agarwala</td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Dr. Bishal Podder</td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Dr. Abhijeet Dey</td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Dr. H Satyajeet Sharma</td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>Dr. Dillip Raut</td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Mr. Rajesh Deb</td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>Mr. Nayan Jyoti Kalita</td>
                            </tr>
                            <tr>
                                <td>16.</td>
                                <td>Dr. Naveen R Sahi</td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Ms. Antara Banerjee</td>
                            </tr>
                            <tr>
                                <td>18.</td>
                                <td>Ms. Raisa Tasmin Hussain</td>
                            </tr>
                            <tr>
                                <td>19.</td>
                                <td>Dr. Shehnaz Ara Rahman</td>
                            </tr>
                            <tr>
                                <td>20.</td>
                                <td>Ms. Bidsha Goswami</td>
                            </tr>
                            <tr>
                                <td>21.</td>
                                <td>Mr. Spandan Kumar Barthakur</td>
                            </tr>
                            <tr>
                                <td>22.</td>
                                <td>Ms. Dipika T Agrawal</td>
                            </tr>
                            <tr>
                                <td>23.</td>
                                <td>Ms. Neha Sharma</td>
                            </tr>
                            <tr>
                                <td>24.</td>
                                <td>Dr. Rani Pathak</td>
                            </tr>
                            <tr>
                                <td>25.</td>
                                <td>Dr. Nilakshi Deka</td>
                            </tr>
                            <tr>
                                <td>26.</td>
                                <td>Dr. Bhairab Sarma</td>
                            </tr>
                            <tr>
                                <td>27.</td>
                                <td>Mr. Prakash K Roy</td>
                            </tr>
                            <tr>
                                <td>28.</td>
                                <td>Mr. Vijay Sharma</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <h2>Join Us at ICETIEDS–2026</h2>
        <p>ICETIEDS–2026 promises a rich, multidisciplinary dialogue on the future of engineering and data sciences.</p>
        <p>Whether you are a researcher, practitioner, innovator, or student, the conference offers an inspiring platform to
            share knowledge, build networks, and explore the technologies shaping tomorrow.</p>
    </footer>

    <script>
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
