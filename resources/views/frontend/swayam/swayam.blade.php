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
        /* CSS Reset & Base Styles */
        :root {
            --rgu-swayam-primary: #27467A;
            /* Royal Blue */
            --rgu-swayam-secondary: #F59E0B;
            /* Gold/Amber */
            --rgu-swayam-light: #F3F4F6;
            --rgu-swayam-dark: #1F2937;
            --rgu-swayam-text: #4B5563;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        body {
            /* Updated Background Color */
            background-color: #FFF8F0;
            color: var(--rgu-swayam-text);
            line-height: 1.6;
        }

        /* Animations */
        @keyframes rgu-swayam-fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rgu-swayam-fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rgu-swayam-pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Hero Section */
        .rgu-swayam-hero {
            /* Space left for Hero Image. Replace the background with your actual image URL */
            background: linear-gradient(rgba(30, 58, 138, 0.8), rgba(30, 58, 138, 0.8)), url('/mobile-assets/swayam/cover-pic.png') center/cover no-repeat;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ffffff;
            animation: rgu-swayam-fadeInDown 1s ease-out;
        }

        .rgu-swayam-hero h1 {
            font-size: 5rem;
            font-weight: 800;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            border-bottom: 4px solid var(--rgu-swayam-secondary);
            padding-bottom: 10px;
        }

        /* Container */
        .rgu-swayam-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Typography */
        h2 {
            color: var(--rgu-swayam-primary);
            font-size: 2.2rem;
            margin-bottom: 20px;
            position: relative;
        }

        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        /* Sections */
        .rgu-swayam-section {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
            animation: rgu-swayam-fadeInUp 1s ease-out both;
            border-top: 4px solid var(--rgu-swayam-primary);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .rgu-swayam-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Animation Delays for cascading effect */
        .rgu-swayam-delay-1 {
            animation-delay: 0.2s;
        }

        .rgu-swayam-delay-2 {
            animation-delay: 0.4s;
        }

        .rgu-swayam-delay-3 {
            animation-delay: 0.6s;
        }

        /* Highlight Boxes */
        .rgu-swayam-highlight-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .rgu-swayam-highlight-card {
            background: var(--rgu-swayam-light);
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid var(--rgu-swayam-secondary);
        }

        /* Statistics Section */
        .rgu-swayam-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
            text-align: center;
        }

        .rgu-swayam-stat-box {
            background: var(--rgu-swayam-primary);
            color: #ffffff;
            padding: 30px 20px;
            border-radius: 12px;
            transition: background 0.3s ease;
        }

        .rgu-swayam-stat-box:hover {
            background: var(--rgu-swayam-dark);
            animation: rgu-swayam-pulse 1s ease-in-out infinite;
        }

        .rgu-swayam-stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: var(--rgu-swayam-secondary);
            margin-bottom: 10px;
        }

        .rgu-swayam-stat-label {
            font-size: 1.1rem;
            font-weight: 500;
        }
    </style>

    <div>
        <header class="rgu-swayam-hero">
            <div>
                <h1>SWAYAM</h1>
            </div>
        </header>

        <main class="rgu-swayam-container">

            <section class="rgu-swayam-section rgu-swayam-delay-1">
                <h2>Vision & Integration</h2>
                <p>The Assam Royal Global University actively promotes SWAYAM as a key initiative aligned with its commitment to digital learning, academic excellence, and holistic student development in line with the vision of the Ministry of Education.</p>
                <p>The University mandates students of UG and PG level, from all disciplines to enrol in SWAYAM courses to complement their curriculum, enhance conceptual understanding, and gain exposure to high-quality content delivered by experts from platform of SWAYAM.</p>
            </section>

            <section class="rgu-swayam-section rgu-swayam-delay-3">
                <h2>Current Enrollment Statistics</h2>

                <div class="rgu-swayam-stats-grid">
                    <div class="rgu-swayam-stat-box">
                        <div class="rgu-swayam-stat-number">3,000</div>
                        <div class="rgu-swayam-stat-label">Students Enrolled<br>(AY 2025-26)</div>
                    </div>
                    <div class="rgu-swayam-stat-box">
                        <div class="rgu-swayam-stat-number">86</div>
                        <div class="rgu-swayam-stat-label">SWAYAM Courses<br>(AY 2025-26)</div>
                    </div>
                    <div class="rgu-swayam-stat-box">
                        <div class="rgu-swayam-stat-number">3,520</div>
                        <div class="rgu-swayam-stat-label">Total Enrolment<br>(Jan-June 2026)</div>
                    </div>
                    <div class="rgu-swayam-stat-box">
                        <div class="rgu-swayam-stat-number">122</div>
                        <div class="rgu-swayam-stat-label">Total Subjects<br>(Jan-June 2026)</div>
                    </div>
                </div>
            </section>

            <section class="rgu-swayam-section rgu-swayam-delay-2">
                <h2>Support & Mentorship System</h2>
                <div class="rgu-swayam-highlight-grid">
                    <div class="rgu-swayam-highlight-card">
                        <p>To ensure effective implementation, faculty members are designated as mentors who guide students in course selection, monitor their academic progress, ensure timely completion of assignments as per the course requirements. and provide continuous support throughout the learning process.</p>
                    </div>
                    <div class="rgu-swayam-highlight-card">
                        <p>The SWAYAM Nodal Officer is involved for coordinating, facilitating communication with SWAYAM, overseeing enrolments, ensuring timely dissemination of information regarding courses and examinations, maintaining records of student participation and certifications, and supporting credit transfer as per regulatory guidelines.</p>
                    </div>
                </div>
                <p style="margin-top: 20px;">All students enrolled in University programmes from the Academic Year 2025–26 onwards are required to undertake one SWAYAM course in each semester, till 4th semester. Accordingly, undergraduate students must complete a total of four SWAYAM courses, while postgraduate students are required to complete two courses during their programme.</p>
            </section>

            <section class="rgu-swayam-section rgu-swayam-delay-3">
                <h2>Infrastructure & Academic Policies</h2>
                <p>As an approved SWAYAM examination centre, RGU provides necessary infrastructure and support for conducting proctored Semester End Examination, for the courses enrolled by the students.</p>
                <p>Credits earned through SWAYAM are considered as per university norms.</p>
                <div class="rgu-swayam-highlight-grid">
                    <div class="rgu-swayam-highlight-card" style="border-left-color: var(--rgu-swayam-primary);">
                        <strong>Undergraduate Requirement:</strong> Undergraduate students must complete a total of four
                        SWAYAM courses.
                    </div>
                    <div class="rgu-swayam-highlight-card" style="border-left-color: var(--rgu-swayam-primary);">
                        <strong>Postgraduate Requirement:</strong> Postgraduate students are required to complete two
                        courses during their programme.
                    </div>
                </div>
            </section>

        </main>
    </div>
@endsection
