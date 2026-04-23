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

        /* ===== COMMITTEE TABLE SECTION ===== */
        .rgu-committee-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .rgu-committee-title {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 2px solid #1f355e;
            padding-bottom: 10px;
            display: inline-block;
            width: 100%;
        }

        .rgu-committee-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .rgu-committee-table th,
        .rgu-committee-table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }

        .rgu-committee-table th {
            background-color: #1f355e;
            color: #ffffff;
            font-size: 18px;
            letter-spacing: 1px;
        }

        .rgu-committee-table tr:hover {
            background-color: #f9f9f9;
        }

        .rgu-committee-table td {
            font-size: 16px;
            color: #555;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .rgu-exam-hero-title {
                font-size: 36px;
            }

            .rgu-committee-container {
                padding: 20px;
                margin: 30px 5%;
            }

            .rgu-committee-table th,
            .rgu-committee-table td {
                padding: 10px;
            }
        }

        /* Responsive Table Wrapper for mobile scrolling */
        .table-responsive {
            overflow-x: auto;
        }
    </style>

    <section class="rgu-exam-hero">
        <h1 class="rgu-exam-hero-title">Examination Committee</h1>
    </section>

    <main class="rgu-committee-container">
        <h2 class="rgu-committee-title">Examination Committee Members</h2>

        <div class="table-responsive">
            <table class="rgu-committee-table">
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Member Name</th>
                        <th>Position</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Prof. (Dr.) Diganta Munshi</td>
                        <td>Registrar – Administration, Director IQAC, Dean RSET & RSIT</td>
                        <td>Chairperson</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Prof. (Dr.) Indrani Singh Rai</td>
                        <td>Professor & Dean, RSL</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Prof. (Dr.) Kaberi Saikia</td>
                        <td>Professor & Principal, RSN</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Prof. (Dr.) George AP</td>
                        <td>Dean, RSB & RSC</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Prof. (Dr.) Abhijit Dutta</td>
                        <td>Professor & Dean, RSMAS</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Prof. (Dr.) Bhuban Ch Barooah</td>
                        <td>Professor and Dean, RSLA</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>Prof. (Dr.) Hari Prasad Agarwal</td>
                        <td>Professor & Dean, RSD, RSFD, RSFT, RSFA, RSA</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Dr. Rupesh Kumar</td>
                        <td>Assistant Professor and Coordinator, Dept of Medical Lab Technology, RSMAS</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>Dr. Priyanka Patowari</td>
                        <td>Assistant Professor, Dept of Social Work, RSHSS</td>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>Dr. Narinder Kumar</td>
                        <td>COE</td>
                        <td>Member Secretary</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>
@endsection
