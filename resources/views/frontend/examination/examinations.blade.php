@extends('frontend.master')
@section('content')
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
        body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
            color: #333;
        }

        /* ===== HERO SECTION ===== */
        .rgu-exam-hero {
            /* Replaced with your image path. Added a fallback background color */
            background: url('mobile-assets/new-exam-cell/head-img2.png') center/cover no-repeat, #1f355e;
            height: 40vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Dark overlay to ensure text readability over the image */
        .rgu-exam-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .rgu-exam-hero-title {
            position: relative;
            color: #ffffff;
            font-size: 48px;
            z-index: 1;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
        }

        /* ===== MAIN LAYOUT (TWO COLUMNS) ===== */
        .rgu-exam-container {
            display: flex;
            gap: 40px;
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 5%;
        }

        /* ===== LEFT SIDEBAR (LINKS) ===== */
        .rgu-exam-sidebar {
            flex: 0 0 300px;
            /* Fixed width for the sidebar */
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            align-self: flex-start;
        }

        .rgu-exam-links-title {
            font-size: 24px;
            color: #1f355e;
            margin-bottom: 25px;
            border-bottom: 2px solid #1f355e;
            padding-bottom: 10px;
        }

        .rgu-exam-links-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .rgu-exam-link-btn {
            display: block;
            padding: 15px 20px;
            background: #1f355e;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s ease;
            text-align: center;
        }

        .rgu-exam-link-btn:hover {
            background: #27467a;
            transform: translateX(5px);
            /* Slight slide to the right on hover */
        }

        /* ===== RIGHT CONTENT ===== */
        .rgu-exam-content {
            flex: 1;
            /* Takes up remaining space */
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .rgu-exam-content-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 20px;
        }

        .rgu-exam-text {
            line-height: 1.8;
            font-size: 18px;
            text-align: justify;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-exam-container {
                flex-direction: column;
                /* Stack on smaller screens */
            }

            .rgu-exam-sidebar {
                flex: auto;
                width: 100%;
            }

            .rgu-exam-hero-title {
                font-size: 36px;
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

    <section class="rgu-exam-hero">
        <h1 class="rgu-exam-hero-title">Examination</h1>
    </section>

    <main class="rgu-exam-container">

        <aside class="rgu-exam-sidebar">
            <h2 class="rgu-exam-links-title">Quick Links</h2>
            <div class="rgu-exam-links-list">
                <a href="/examinations" class="rgu-exam-link-btn">About the Examination Cell</a>
                <a href="/examination-cell-office-controller" target="_blank" class="rgu-exam-link-btn">Office of the Controller of
                    Examination</a>
                <a href="/examination-cell-committee" target="_blank" class="rgu-exam-link-btn">Examination Committee</a>
                <a href="#" class="rgu-exam-link-btn">Admit Card</a>
                <a href="#" class="rgu-exam-link-btn">Rules & Regulations</a>
                <a href="#" class="rgu-exam-link-btn">Annoucement/ Notifications</a>
                <a href="#" class="rgu-exam-link-btn">Results</a>
                <a href="#" class="rgu-exam-link-btn">Transcript</a>
                <a href="#" class="rgu-exam-link-btn">Academic Bank of Credit</a>
                <a href="#" class="rgu-exam-link-btn">Downloads</a>
            </div>
        </aside>

        <section class="rgu-exam-content">
            <h2 class="rgu-exam-content-title">About the Examination Cell</h2>
            <p class="rgu-exam-text">
                The Examination Cell serves as a crucial administrative unit responsible for overseeing all aspects related
                to
                assessments, examinations, and academic evaluations. With a commitment to maintaining the integrity of the
                university's evaluation processes, the Examination Cell plays a pivotal role in ensuring fair and accurate
                assessment of students' academic performance.
                <br><br>
                Comprising a team of experienced professionals, the Examination Cell meticulously plans, coordinates, and
                executes various examination-related activities. From scheduling and conducting regular semester
                examinations
                to organizing supplementary exams and re-evaluation processes, the cell maintains a well-structured
                framework
                to manage the entire examination cycle efficiently. Furthermore, the Examination Cell offers a supportive
                and
                responsive platform for addressing students' queries and concerns related to examinations.
            </p>
        </section>

    </main>
@endsection
