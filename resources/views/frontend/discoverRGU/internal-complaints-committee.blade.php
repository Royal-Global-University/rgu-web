@extends('frontend/new-master')
@section('title', 'Internal Complaint : The Assam Royal Global University')
@section('meta_description', 'Trust in the integrity and accountability of Royal Global University Internal Complaint Cell.')
@section('meta_keywords', 'Internal Complaint')
@section('content')
        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/DiscoverRGU-Statutory-Committees-Internal-Complaints-Committee/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Internal Complaints Committee</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Statutory Committees / Internal Complaints Committee
            </div>
        </div>

    </section>

    <section class="icc-section">
        <div class="container">

            <p class="icc-intro">
                In regard to the Internal Complaints Committee (ICC), RGU, as per the University Grants Commission
                (Prevention, Prohibition and Redressal of Sexual Harassment of Women Employees and Students in Higher
                Educational Institutions) Regulations, 2015, the committee has been constituted with the following
                members. The tenure of the committee shall be for three years or until further notification,
                whichever is earlier.
            </p>

            <h2 class="icc-heading">
                Following are the members of Internal Complaints Committee (ICC), RGU
            </h2>

            <div class="icc-table-wrapper">

                <table class="icc-table">

                    <thead>
                        <tr>
                            <th width="10%">Sr. No.</th>
                            <th width="36%">Name of the Staff / Faculty</th>
                            <th width="34%">Category of Nomination</th>
                            <th width="20%">Designation in ICC</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>01</td>
                            <td>Prof. Indrani Rai, Dean RSL</td>
                            <td>Presiding Officer who shall be a woman faculty member employed at a senior level</td>
                            <td>Presiding Officer</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Ms. Angira Mimani, Associate Professor & Associate Dean, Student Welfare</td>
                            <td>Two faculty members</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Dr. Debarupa Dutta Chakraborty, Associate Professor, Royal School of Pharmacy</td>
                            <td>Two faculty members</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td>Mr. Shamin A. Goney, Deputy Registrar</td>
                            <td>Two non-teaching employees</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>05</td>
                            <td>Ms. Dipika T. Agarwal, Deputy Registrar (HR & RC)</td>
                            <td>Two non-teaching employees</td>
                            <td>Member-Secretary</td>
                        </tr>

                        <tr>
                            <td>06</td>
                            <td>Dr. Jwmwisbree Boro, Assistant Professor, Psychology</td>
                            <td>Extra Member</td>
                            <td>Member</td>
                        </tr>

                        <tr>
                            <td>07</td>
                            <td>Prof. (Dr.) Soumita Sen, Dean, RSTTM & RSHM</td>
                            <td>Extra Member</td>
                            <td>Member</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <h2 class="icc-heading mt-5">
                In addition, the following members are also included:
            </h2>

            <p class="icc-desc">
                Three students, if the matter involves students, who shall be enrolled at the undergraduate,
                master's, and research scholar levels respectively, elected through transparent democratic
                participation.
            </p>

            <div class="row mt-4">

                <div class="col-lg-6">

                    <div class="icc-contact-card">

                        <h4>For Any Query</h4>

                        <div class="icc-contact-item">
                            <i class="bi bi-telephone"></i>
                            <span>Ph. no: +91 9678009412</span>
                        </div>

                        <div class="icc-contact-item">
                            <i class="bi bi-envelope"></i>
                            <span>Email: icc@rgu.ac</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <style>
        .icc-section {
            background: #eef2f8;
            padding: 80px 0;
        }

        .icc-intro {
            color: #5f6775;
            line-height: 1.8;
            margin-bottom: 35px;
            font-size: 18px;
        }

        .icc-heading {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #2d4c85;
            font-weight: 700;
            margin-bottom: 28px;
        }

        .icc-table-wrapper {
            overflow: auto;
            border-radius: 6px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .05);
        }

        .icc-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }

        .icc-table thead {
            background: #294b84;
        }

        .icc-table th {
            color: #fff;
            padding: 16px 14px;
            font-size: 14px;
            font-weight: 600;
            text-align: left;
            border-right: 1px solid rgba(255, 255, 255, .15);
        }

        .icc-table td {
            padding: 18px 14px;
            border: 1px solid #dfe5ef;
            color: #475569;
            font-size: 14px;
            line-height: 1.7;
            vertical-align: top;
        }

        .icc-table tbody tr:nth-child(even) {
            background: #fafbfd;
        }

        .icc-table tbody tr:hover {
            background: #f2f7ff;
        }

        .icc-desc {
            color: #616a77;
            line-height: 1.8;
            font-size: 15px;
        }

        .icc-contact-card {
            background: #fff;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .05);
        }

        .icc-contact-card h4 {
            font-family: 'Playfair Display', serif;
            color: #2d4c85;
            font-size: 30px;
            margin-bottom: 28px;
            position: relative;
        }

        .icc-contact-card h4::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background: #dbe3ef;
            margin-top: 15px;
        }

        .icc-contact-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            color: #536170;
            font-size: 20px;
        }

        .icc-contact-item i {
            color: #ef6b3d;
            font-size: 18px;
        }

        @media(max-width:991px) {

            .icc-section {
                padding: 60px 0;
            }

            .icc-heading {
                font-size: 32px;
            }

            .icc-table {
                min-width: 900px;
            }

            .icc-contact-card {
                padding: 25px;
            }

        }
    </style>
@endsection
