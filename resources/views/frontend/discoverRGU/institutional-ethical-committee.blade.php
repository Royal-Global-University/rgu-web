@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/DiscoverRGU-Statutory-Committees-ethical-commitee/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Institutional Ethical Committee</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Statutory Committees / Institutional Ethical Committee
            </div>
        </div>

    </section>

    <section class="iec-section">
        <div class="container">

            <div class="iec-table-wrapper">

                <table class="iec-table">

                    <thead>
                        <tr>
                            <th width="8%">Sr. No.</th>
                            <th width="26%">Name & Designation</th>
                            <th width="14%">Position in IEC</th>
                            <th width="25%">Institution / Organisation</th>
                            <th width="27%">Category (as per ICMR Guidelines)</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>01</td>
                            <td>
                                <strong>Dr. Rathindra Bhuyan</strong><br>
                                Professor & Advisor<br>
                                RSMAS, RSN, RSP, RAMCH
                            </td>
                            <td>Chairperson</td>
                            <td>The Assam Royal Global University</td>
                            <td>Prior experience of having served in an ethics committee</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>
                                <strong>Dr. Dharmeswar Barhoi</strong><br>
                                Assistant Professor, Dept. of Zoology, RSLSC
                            </td>
                            <td>Member Secretary</td>
                            <td>The Assam Royal Global University</td>
                            <td>Member Secretary</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>
                                <strong>Prof. (Dr.) Abhijit Dutta</strong><br>
                                Dean, RSMAS
                            </td>
                            <td>Member</td>
                            <td>The Assam Royal Global University</td>
                            <td>Basic Medical Scientist</td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>
                                <strong>Dr. Amal Chandra Kataki</strong><br>
                                Former Director<br>
                                Dr. B. Borooah Cancer Institute<br>
                                Guwahati, Assam
                            </td>
                            <td>Member</td>
                            <td>External Organisation</td>
                            <td>Clinician / Medical Scientist (Outside Institution)</td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>
                                <strong>Dr. Bhuban Chandra Baruah</strong><br>
                                Dean, RSLA
                            </td>
                            <td>Member</td>
                            <td>The Assam Royal Global University</td>
                            <td>Legal Expert</td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td>
                                <strong>Mrs. Anurita Pathak Hazarika</strong><br>
                                Executive Director<br>
                                North East Network, Guwahati
                            </td>
                            <td>Member</td>
                            <td>External Organization</td>
                            <td>Social Scientist</td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td>
                                <strong>Ms. Amvalika Senapati</strong><br>
                                Deputy Director<br>
                                Advocacy Shishu Sarothi
                            </td>
                            <td>Member</td>
                            <td>Shishu Sarothi NGO, Guwahati</td>
                            <td>Lay Person / Community Representative</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </section>

    <style>
        .iec-section {
            background: #eef2f8;
            padding: 80px 0;
        }

        .iec-table-wrapper {
            overflow-x: auto;
            border-radius: 6px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .05);
        }

        .iec-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }

        .iec-table thead {
            background: #2d4f87;
        }

        .iec-table th {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            padding: 18px;
            text-align: left;
            border-right: 1px solid rgba(255, 255, 255, .15);
        }

        .iec-table td {
            padding: 18px;
            border: 1px solid #d9e3ef;
            color: #3f5574;
            font-size: 14px;
            line-height: 2;
            vertical-align: top;
        }

        .iec-table strong {
            display: block;
            color: #2d4f87;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .iec-table tbody tr:nth-child(even) {
            background: #fbfcfe;
        }

        .iec-table tbody tr:hover {
            background: #f4f8ff;
        }

        .iec-table td:first-child,
        .iec-table th:first-child {
            text-align: center;
        }

        @media(max-width:991px) {

            .iec-section {
                padding: 60px 0;
            }

            .iec-table {
                min-width: 1200px;
            }

        }
    </style>
@endsection
