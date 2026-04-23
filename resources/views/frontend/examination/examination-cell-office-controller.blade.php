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
        body {
            font-family: "Times New Roman", serif;
            background: #f4f6f9;
            overflow-x: hidden;
            color: #333;
        }

        /* ===== HERO SECTION ===== */
        .uxe-hero {
            background: url('mobile-assets/new-exam-cell/head-img2.png') center/cover no-repeat, #1f355e;
            height: 40vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .uxe-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .uxe-hero-title {
            position: relative;
            color: #fff;
            font-size: 48px;
            z-index: 1;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
        }

        /* ===== MAIN LAYOUT ===== */
        .uxe-container {
            display: flex;
            gap: 40px;
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 5%;
        }

        /* ===== SIDEBAR ===== */
        .uxe-sidebar {
            flex: 0 0 300px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .uxe-links-title {
            font-size: 24px;
            color: #1f355e;
            margin-bottom: 25px;
            border-bottom: 2px solid #1f355e;
            padding-bottom: 10px;
        }

        .uxe-links-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .uxe-link-btn {
            display: block;
            padding: 14px 18px;
            background: #1f355e;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.3s ease;
            text-align: center;
        }

        .uxe-link-btn:hover {
            background: #27467a;
            transform: translateX(5px);
        }

        /* ===== CONTENT ===== */
        .uxe-content {
            flex: 1;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .uxe-content-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 25px;
        }

        /* ===== TEAM GRID (FIXED 4 PER ROW) ===== */
        .uxe-team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        /* ===== TEAM CARD ===== */
        .uxe-team-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            text-align: center;
            transition: 0.3s ease;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }

        .uxe-team-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .uxe-team-card h3 {
            font-size: 17px;
            color: #1f355e;
            margin: 12px 10px 5px;
        }

        .uxe-team-card p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        /* Hover Effect */
        .uxe-team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1100px) {
            .uxe-team-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 900px) {
            .uxe-container {
                flex-direction: column;
            }

            .uxe-sidebar {
                width: 100%;
            }

            .uxe-hero-title {
                font-size: 36px;
            }

            .uxe-team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 500px) {
            .uxe-team-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="uxe-hero">
        <h1 class="uxe-hero-title">Office of the Controller of Examination</h1>
    </section>

    <main class="uxe-container">

        <section class="uxe-content">
            <!-- <h2 class="uxe-content-title">Our Team</h2> -->

            <div class="uxe-team-grid">

                <!-- Manager -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/PayelDasgupta.jpeg" alt="">
                    <h3>Payel Dasgupta</h3>
                    <p>Manager</p>
                </div>

                <!-- Dy. Manager -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/raktim-dutta.jpeg" alt="">
                    <h3>Raktim Dutta</h3>
                    <p>Dy. Manager</p>
                </div>

                <!-- Asst. Managers -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/manab-jyoti-sarmah.jpeg" alt="">
                    <h3>Manab Jyoti Sarmah</h3>
                    <p>Asst. Manager</p>
                </div>

                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/Dhrubajyoti-Kalita.jpeg" alt="">
                    <h3>Dhrubajyoti Kalita</h3>
                    <p>Asst. Manager</p>
                </div>

                <!-- Senior Executive -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/RahulChowdhury.jpeg" alt="">
                    <h3>Rahul Chowdhury</h3>
                    <p>Senior Executive</p>
                </div>

                <!-- Executives -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/Madhuri-Deb.jpeg" alt="">
                    <h3>Madhuri Deb</h3>
                    <p>Executive</p>
                </div>

                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/Jayshree-Hazarika.jpeg" alt="">
                    <h3>Jayshree Hazarika</h3>
                    <p>Executive</p>
                </div>

                <!-- Office Executive -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/PunamMedhi.jpeg" alt="">
                    <h3>Punam Medhi</h3>
                    <p>Office Executive</p>
                </div>

                <!-- Data Entry Operator -->
                <div class="uxe-team-card">
                    <img src="mobile-assets/new-exam-cell/office-of-the-controller/DipankarLahkar.jpeg" alt="">
                    <h3>Dipankar Lahkar</h3>
                    <p>Data Entry Operator</p>
                </div>

            </div>

        </section>

    </main>
@endsection
