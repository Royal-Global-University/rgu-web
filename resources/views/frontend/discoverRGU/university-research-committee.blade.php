@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/DiscoverRGU-Statutory-Committees-univ-research-committee/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> University Research Committee</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Statutory Committees / University Research Committee
            </div>
        </div>

    </section>

    <section class="urc-section">
        <div class="container">

            <div class="urc-table-wrapper">

                <table class="urc-table">

                    <thead>
                        <tr>
                            <th width="10%">Sr. No.</th>
                            <th width="36%">Member Name</th>
                            <th width="34%">Position</th>
                            <th width="20%">Designation</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>01</td>
                            <td>Prof. (Dr.) Alak K Buragohain</td>
                            <td>Hon'ble Vice Chancellor, RGU</td>
                            <td>Chairman</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Prof. (Dr.) Diganta Munshi</td>
                            <td>Registrar – Administration, Director IQAC, Dean RSET & RSIT</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Prof. Dr. Parameswar Krishnan Iyer</td>
                            <td>Professor, Department of Chemistry, Indian Institute of Technology Guwahati</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>Prof. Jayanta Krishna Sarma</td>
                            <td>Head, Department of Political Science, Dean, Faculty of Arts, Gauhati University</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>Mr. Pradeep Purohit</td>
                            <td>Chief Operating Officer, Star Cement</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td>Mr. R S Joshi</td>
                            <td>CMD, Buildworth Real Estate, Guwahati</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td>Prof. (Dr.) Anupam Chatterjee</td>
                            <td>Dean, RSBSC</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>08</td>
                            <td>Prof. (Dr.) Sajal Nag</td>
                            <td>Distinguished Professor, Department of History, RSHSS</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>09</td>
                            <td>Prof. (Dr.) Rama Ranjan Bhattacharjee</td>
                            <td>Dean R & D</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Dr. Debojit Borah</td>
                            <td>Associate Professor & HoD, Department of Biotechnology, RSBSC</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Dr. Aruna Dev Rroy</td>
                            <td>Associate Professor & HOD, RSC</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>Dr. Narinder Kumar</td>
                            <td>Controller of Examination</td>
                            <td>Member Secretary</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </section>

    <style>
        .urc-section {
            background: #eef2f8;
            padding: 80px 0;
        }

        .urc-table-wrapper {
            overflow-x: auto;
            border-radius: 6px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
        }

        .urc-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }

        .urc-table thead {
            background: #294b84;
        }

        .urc-table th {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            padding: 18px;
            text-align: left;
            border-right: 1px solid rgba(255, 255, 255, .15);
        }

        .urc-table td {
            padding: 18px;
            border: 1px solid #d7e2ef;
            color: #3f5575;
            font-size: 14px;
            line-height: 1.8;
            vertical-align: top;
        }

        .urc-table tbody tr:nth-child(even) {
            background: #fbfcfe;
        }

        .urc-table tbody tr:hover {
            background: #f3f8ff;
        }

        .urc-table td:first-child,
        .urc-table th:first-child {
            text-align: center;
        }

        @media(max-width:991px) {

            .urc-section {
                padding: 60px 0;
            }

            .urc-table {
                min-width: 950px;
            }

        }
    </style>
@endsection
