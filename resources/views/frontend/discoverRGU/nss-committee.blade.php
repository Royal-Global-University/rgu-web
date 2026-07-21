@extends('frontend/new-master')
@section('content')
        <style>

        .nss-advisory-section {
            padding: 70px 0;
            background: #f5f8fc;
        }

        .nss-section-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .nss-section-heading h2 {
            font-size: 2.3rem;
            font-weight: 700;
            color: #1f3f77;
            margin-bottom: 8px;
        }

        .nss-section-heading p {
            font-size: 1rem;
            color: #6c7b93;
            margin-bottom: 0;
        }

        .nss-table-wrapper {
            overflow-x: auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .08);
        }

        .nss-advisory-table {
            width: 100%;
            min-width: 900px;
            border-collapse: collapse;
        }

        .nss-advisory-table thead th {

            background: #2f4f87;
            color: #fff;

            padding: 18px 20px;

            font-size: 17px;
            font-weight: 600;
            text-align: left;

            border-right: 1px solid rgba(255, 255, 255, .25);
        }

        .nss-advisory-table thead th:last-child {
            border-right: none;
        }

        .nss-advisory-table tbody td {

            padding: 18px 20px;

            color: #284a84;
            font-size: 16px;
            line-height: 1.7;

            border-top: 1px solid #d8e3f5;
            border-right: 1px solid #e6eef9;

            vertical-align: top;

            transition: .3s;
        }

        .nss-advisory-table tbody td:last-child {
            border-right: none;
        }

        .nss-advisory-table tbody tr:hover td {
            background: #f8fbff;
        }

        .nss-advisory-table tbody td:first-child {
            width: 80px;
            font-weight: 600;
            color: #23457d;
        }

        .nss-advisory-table tbody strong {
            font-weight: 700;
            color: #284a84;
        }

        @media(max-width:991px) {

            .nss-advisory-section {
                padding: 60px 0;
            }

            .nss-section-heading h2 {
                font-size: 2rem;
            }

        }

        @media(max-width:767px) {

            .nss-advisory-section {
                padding: 45px 0;
            }

            .nss-section-heading {
                margin-bottom: 25px;
            }

            .nss-section-heading h2 {
                font-size: 1.7rem;
            }

            .nss-section-heading p {
                font-size: .95rem;
            }

            .nss-advisory-table {
                min-width: 820px;
            }

            .nss-advisory-table thead th {
                font-size: 15px;
                padding: 15px;
            }

            .nss-advisory-table tbody td {
                font-size: 15px;
                padding: 15px;
            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/advisory-committee-nss/cover.png'); filter: blur(5px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> University Advisory Committee-NSS</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Statutory Committees / University Advisory Committee-NSS
            </div>
        </div>

    </section>

    <section class="nss-advisory-section">
        <div class="container">

           
            <div class="nss-table-wrapper">

                <table class="nss-advisory-table">

                    <thead>
                        <tr>
                            <th style="width:90px;">Sr. No.</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>01</td>
                            <td><strong>Prof. (Dr.) Alak K Buragohain</strong></td>
                            <td>Vice Chancellor</td>
                            <td>Chairman</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td><strong>Prof. (Dr.) DN Singh</strong></td>
                            <td>Registrar (Academics)</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td><strong>Prof. (Dr.) Diganta Munshi</strong></td>
                            <td>Registrar (Administration)</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td><strong>Shri. N. C. Deori</strong></td>
                            <td>Youth Officer, Regional Directorate of NSS</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td><strong>Dr. Banani Das Hazarika</strong></td>
                            <td>Assistant Professor, Dept. of English & Deputy Dean, Student Affairs</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td><strong>Dr. Rupesh Kumar</strong></td>
                            <td>Assistant Professor, Biotechnology & Coordinator, MLT, RSMAS</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td><strong>Dr. Kuntala Roy Choudhury</strong></td>
                            <td>Assistant Professor, Member Secretary, Legal Aid Clinic, RSLA</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>08</td>
                            <td><strong>Dr. Tripti Das</strong></td>
                            <td>Assistant Professor & Coordinator, Department of Sociology, RSHSS</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>09</td>
                            <td><strong>Dr. Amlan Das</strong></td>
                            <td>Assistant Professor, Department of Social Work, RSHSS</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td><strong>Pragyan Deep Kalita</strong></td>
                            <td>Physiotherapy Semester: 7th</td>
                            <td>NSS Student Representative</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td><strong>Prabhat Saha</strong></td>
                            <td>Pharmacy Semester- 5th</td>
                            <td>NSS Student Representative</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td><strong>Dr. Sampadha Tiwari</strong></td>
                            <td>Assistant Professor, Royal School of Business</td>
                            <td>Programme Officer</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td><strong>Dr. Nilakshi Deka</strong></td>
                            <td>Assistant Professor, Department of Computer Science and Engineering</td>
                            <td>Programme Officer</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td><strong>Mr. Vijay Sharma</strong></td>
                            <td>Finance Officer</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td><strong>Dr. Priyanka Patowari</strong></td>
                            <td>Assistant Professor & Coordinator, Department of Social Work</td>
                            <td>Member Secretary & Programme Coordinator</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </section>
@endsection
