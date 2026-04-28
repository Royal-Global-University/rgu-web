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

    <main>

        {{-- <section class="uxe-content">
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

        </section> --}}

        <div>
            <div class="p-5"
                style="margin:auto;background:#ffffff;border-radius:12px;box-shadow:0 4px 15px rgba(0,0,0,0.08);overflow:hidden;">

                <!-- Header -->

                <!-- Search -->

                <div style="padding:15px;background:#eef3f7;text-align:right;">

                    <input type="text" id="searchInput" placeholder="Search member..."
                        style="padding:10px 15px;width:280px;border:1px solid #ccc;border-radius:8px;font-size:14px;outline:none;">

                </div>

                <!-- Table -->

                <div style="overflow-x:auto;">

                    <table id="memberTable" style="width:100%;border-collapse:collapse;min-width:900px;">

                        <thead>

                            <tr class="text-center" style="background:#0d4b7a;color:#fff;">

                                <th style="padding:14px;border:1px solid #ddd;">Sl. No.</th>

                                <th style="padding:14px;border:1px solid #ddd;">Designation</th>

                                <th style="padding:14px;border:1px solid #ddd;">Name</th>

                                <th style="padding:14px;border:1px solid #ddd;">Email</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">1</td>

                                <td style="padding:12px;border:1px solid #ddd;">Controller of Examinations</td>

                                <td style="padding:12px;border:1px solid #ddd;">Dr. Narinder Kumar</td>

                                <td style="padding:12px;border:1px solid #ddd;">nkumar@rgu.ac / controller@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">2</td>

                                <td style="padding:12px;border:1px solid #ddd;">Joint Controller of Examinations</td>

                                <td style="padding:12px;border:1px solid #ddd;">Dr. Atanu Kumar Bhattacharjee</td>

                                <td style="padding:12px;border:1px solid #ddd;">jointcontroller@rgu.ac /
                                    abhattacharjee@rgu.ac</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">3</td>

                                <td style="padding:12px;border:1px solid #ddd;">Deputy Controller of Examinations</td>

                                <td style="padding:12px;border:1px solid #ddd;">Dr. Sanotsh Kumar Anand</td>

                                <td style="padding:12px;border:1px solid #ddd;">deputycoe@rgu.ac / skanand@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">4</td>

                                <td style="padding:12px;border:1px solid #ddd;">Assistant Controller of Examinations</td>

                                <td style="padding:12px;border:1px solid #ddd;">Mr. Zunaid Ahmed</td>

                                <td style="padding:12px;border:1px solid #ddd;">Zunaid.Ahmed@rgi.edu.in</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">5</td>

                                <td style="padding:12px;border:1px solid #ddd;">Assistant Controller of Examinations</td>

                                <td style="padding:12px;border:1px solid #ddd;">Mr. Jugal Kishore Bhattacharya</td>

                                <td style="padding:12px;border:1px solid #ddd;">jkbhattacharyya@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">6</td>

                                <td style="padding:12px;border:1px solid #ddd;">Assistant Controller of Examinations</td>

                                <td style="padding:12px;border:1px solid #ddd;">Dr. Bhaskar Jyoti Gogoi</td>

                                <td style="padding:12px;border:1px solid #ddd;">bgogoi1@rgu.ac</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">7</td>

                                <td style="padding:12px;border:1px solid #ddd;">Manager</td>

                                <td style="padding:12px;border:1px solid #ddd;">Mrs. Payel Dasgupta</td>

                                <td style="padding:12px;border:1px solid #ddd;">pdasgupta@rgu.ac / coeoffice@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">8</td>

                                <td style="padding:12px;border:1px solid #ddd;">Deputy Manager</td>

                                <td style="padding:12px;border:1px solid #ddd;">Raktim Dutta</td>

                                <td style="padding:12px;border:1px solid #ddd;">rdutta2@rgu.ac</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">9</td>

                                <td style="padding:12px;border:1px solid #ddd;">Assistant Manager 1</td>

                                <td style="padding:12px;border:1px solid #ddd;">Dhrubajyoti Kalita</td>

                                <td style="padding:12px;border:1px solid #ddd;">djkalita@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">10</td>

                                <td style="padding:12px;border:1px solid #ddd;">Assistant Manager 2</td>

                                <td style="padding:12px;border:1px solid #ddd;">Manabjyoti Sarmah</td>

                                <td style="padding:12px;border:1px solid #ddd;">mjsarmah@rgu.ac</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">11</td>

                                <td style="padding:12px;border:1px solid #ddd;">Senior Executive</td>

                                <td style="padding:12px;border:1px solid #ddd;">Rahul Chowdhury</td>

                                <td style="padding:12px;border:1px solid #ddd;">rchowdhury@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">12</td>

                                <td style="padding:12px;border:1px solid #ddd;">Executive</td>

                                <td style="padding:12px;border:1px solid #ddd;">Madhuri Deb</td>

                                <td style="padding:12px;border:1px solid #ddd;">mdeb2@rgu.ac</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">13</td>

                                <td style="padding:12px;border:1px solid #ddd;">Executive</td>

                                <td style="padding:12px;border:1px solid #ddd;">Jayshree Hazarika</td>

                                <td style="padding:12px;border:1px solid #ddd;">jhazarika@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">14</td>

                                <td style="padding:12px;border:1px solid #ddd;">Data Entry Operator</td>

                                <td style="padding:12px;border:1px solid #ddd;">Dipankar Lahkar</td>

                                <td style="padding:12px;border:1px solid #ddd;">dlahkar@rgu.ac</td>

                            </tr>

                            <tr>

                                <td style="padding:12px;border:1px solid #ddd;">15</td>

                                <td style="padding:12px;border:1px solid #ddd;">Office Executive</td>

                                <td style="padding:12px;border:1px solid #ddd;">Punam Medhi</td>

                                <td style="padding:12px;border:1px solid #ddd;">pmedhi4@rgu.ac</td>

                            </tr>

                            <tr style="background:#f9fbfd;">

                                <td style="padding:12px;border:1px solid #ddd;">16</td>

                                <td style="padding:12px;border:1px solid #ddd;">Peon</td>

                                <td style="padding:12px;border:1px solid #ddd;">Jogendra Nath Das</td>

                                <td style="padding:12px;border:1px solid #ddd;">-</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <script>
                document.getElementById("searchInput").addEventListener("keyup", function() {

                    let value = this.value.toLowerCase();

                    let rows = document.querySelectorAll("#memberTable tbody tr");

                    rows.forEach(function(row) {

                        row.style.display = row.innerText.toLowerCase().includes(value) ? "" : "none";

                    });

                });
            </script>
        </div>

    </main>
@endsection
