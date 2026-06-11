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
            background: url('mobile-assets/new-exam-cell/head-img2.png') center/cover no-repeat, #1f355e;
            height: 40vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .rgu-exam-hero::before {
            content: "";
            position: absolute;
            inset: 0;
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

        /* ===== MAIN LAYOUT ===== */
        .rgu-exam-container {
            display: flex;
            gap: 40px;
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 5%;
        }

        /* ===== SIDEBAR ===== */
        .rgu-exam-sidebar {
            flex: 0 0 300px;
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
            width: 100%;
            padding: 15px 20px;
            background: #1f355e;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            text-align: center;
            transition: 0.3s ease;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        .rgu-exam-link-btn:hover {
            background: #27467a;
            transform: translateX(5px);
        }

        /* ===== RIGHT CONTENT ===== */
        .rgu-exam-content {
            flex: 1;
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

        /* ===== RESULTS ===== */
        #rgu-results-content {
            display: none;
        }

        .rgu-result-block {
            margin-bottom: 40px;
        }

        .rgu-result-heading {
            font-size: 24px;
            color: #1f355e;
            margin-bottom: 20px;
            border-bottom: 2px solid #1f355e;
            padding-bottom: 10px;
        }

        .rgu-result-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .rgu-result-btn {
            display: inline-block;
            padding: 14px 22px;
            background: #1f355e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .rgu-result-btn:hover {
            background: #27467a;
            transform: translateY(-3px);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {

            .rgu-exam-container {
                flex-direction: column;
            }

            .rgu-exam-sidebar {
                flex: auto;
                width: 100%;
            }

            .rgu-exam-hero-title {
                font-size: 36px;
            }

            .rgu-result-buttons {
                flex-direction: column;
            }

            .rgu-result-btn {
                width: 100%;
                text-align: center;
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
        <h1 class="rgu-exam-hero-title">
            Examination
        </h1>
    </section>

    <!-- MAIN -->
    <main class="rgu-exam-container">

        <!-- SIDEBAR -->
        <aside class="rgu-exam-sidebar">

            <h2 class="rgu-exam-links-title">
                Quick Links
            </h2>

            <div class="rgu-exam-links-list">

                <a href="examination-cell.html" class="rgu-exam-link-btn">
                    About the Examination Cell
                </a>

                <a href="examination-cell-office-controller.html" class="rgu-exam-link-btn">
                    Office of the Controller of Examination
                </a>

                <a href="examination-cell-committee.html" class="rgu-exam-link-btn">
                    Examination Committee
                </a>

                <button class="rgu-exam-link-btn" id="rgu-results-btn">
                    Notice Board
                </button>

            </div>

        </aside>

        <!-- CONTENT -->
        <section class="rgu-exam-content">

            <!-- DEFAULT CONTENT -->
            <div id="rgu-about-content">

                <h2 class="rgu-exam-content-title">
                    About the Examination Cell
                </h2>

                <p class="rgu-exam-text">
                    The Examination Cell serves as a crucial administrative unit responsible for overseeing all aspects
                    related to assessments, examinations, and academic evaluations. With a commitment to maintaining the
                    integrity of the university's evaluation processes, the Examination Cell plays a pivotal role in
                    ensuring fair and accurate assessment of students' academic performance.

                    <br><br>

                    Comprising a team of experienced professionals, the Examination Cell meticulously plans, coordinates,
                    and executes various examination-related activities. From scheduling and conducting regular semester
                    examinations to organizing supplementary exams and re-evaluation processes, the cell maintains a
                    well-structured framework to manage the entire examination cycle efficiently.

                    <br><br>

                    Furthermore, the Examination Cell offers a supportive and responsive platform for addressing students'
                    queries and concerns related to examinations.
                </p>

            </div>

            <!-- RESULTS CONTENT -->
            <div id="rgu-results-content">

                <h2 class="rgu-exam-content-title">
                    Result Declaration Schedule
                </h2>

                <!-- ODD -->
                {{-- <div class="rgu-result-block">

                    <h3 class="rgu-result-heading">
                        ODD Semester
                    </h3>

                    <div class="rgu-result-buttons">

                        <a href="#" class="rgu-result-btn" target="_blank">
                            1st Semester Result
                        </a>

                        <a href="#" class="rgu-result-btn" target="_blank">
                            3rd Semester Result
                        </a>

                        <a href="#" class="rgu-result-btn" target="_blank">
                            5th Semester Result
                        </a>

                        <a href="#" class="rgu-result-btn" target="_blank">
                            7th Semester Result
                        </a>

                    </div>

                </div> --}}

                <!-- EVEN -->
                <div class="rgu-result-block">

                    <h3 class="rgu-result-heading">

                    </h3>

                    <div class="rgu-result-buttons">

                        <a href="/mobile-assets/ads/EVEN-SEE_2025-26.pdf" class="rgu-result-btn" target="_blank">
                            EVEN Semester 2025-2026
                        </a>

                        {{-- <a href="#" class="rgu-result-btn" target="_blank">
                            4th Semester Result
                        </a>

                        <a href="#" class="rgu-result-btn" target="_blank">
                            6th Semester Result
                        </a>

                        <a href="#" class="rgu-result-btn" target="_blank">
                            8th Semester Result
                        </a> --}}

                    </div>

                </div>

            </div>

        </section>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const resultsBtn = document.getElementById("rgu-results-btn");

            const aboutContent = document.getElementById("rgu-about-content");

            const resultsContent = document.getElementById("rgu-results-content");

            resultsBtn.addEventListener("click", function() {

                aboutContent.style.display = "none";

                resultsContent.style.display = "block";

            });

        });
    </script>
@endsection
