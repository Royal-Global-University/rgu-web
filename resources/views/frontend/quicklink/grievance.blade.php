@extends('frontend/new-master')
@section('content')
    <style>
        /*==========================================================
            SGRC INTRO
    ==========================================================*/

        .rgsgrc-intro {

            padding: 90px 0;

            background: #eef3fb;

        }

        .rgsgrc-image {

            overflow: hidden;

            border-radius: 34px;

            box-shadow:
                0 25px 60px rgba(17, 39, 80, .12);

        }

        .rgsgrc-image img {

            width: 100%;

            display: block;

            transition: .45s;

        }

        .rgsgrc-image:hover img {

            transform: scale(1.04);

        }

        .rgsgrc-content {

            padding-left: 20px;

        }

        .rgsgrc-tag {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            font-size: 13px;

            color: #b48a38;

            margin-bottom: 18px;

            font-weight: 600;

        }

        .rgsgrc-content h2 {

            font-family: "Playfair Display", serif;

            color: #23457b;

            font-size: 40px;

            line-height: 1.15;

            margin-bottom: 28px;

            font-weight: 700;

        }

        .rgsgrc-content p {

            color: #596779;

            font-size: 17px;

            line-height: 2;

            margin: 0;

        }

        /*=====================*/

        @media(max-width:991px) {

            .rgsgrc-intro {

                padding: 70px 0;

            }

            .rgsgrc-content {

                padding-left: 0;

            }

            .rgsgrc-content h2 {

                font-size: 42px;

            }

        }

        @media(max-width:767px) {

            .rgsgrc-intro {

                padding: 55px 0;

            }

            .rgsgrc-image {

                border-radius: 20px;

            }

            .rgsgrc-content h2 {

                font-size: 34px;

            }

            .rgsgrc-content p {

                font-size: 15px;

                line-height: 1.9;

            }

        }
    </style>

    <style>
        /*==========================================================
            SGRC BLUE SECTION
    ==========================================================*/

        .rgsgrc-info {

            background: linear-gradient(180deg, #2d4d86 0%, #0f2550 100%);

            padding: 90px 0;

            border-radius: 70px 70px 0 0;

            position: relative;

            overflow: hidden;

        }

        .rgsgrc-info::before {

            content: "";

            position: absolute;

            width: 700px;

            height: 700px;

            border-radius: 50%;

            right: -250px;

            top: -280px;

            background: radial-gradient(rgba(255, 255, 255, .05), transparent 70%);

        }

        .rgsgrc-block {

            margin-bottom: 75px;

            position: relative;

            z-index: 2;

        }

        .rgsgrc-last {

            margin-bottom: 0;

        }

        .rgsgrc-info h2 {

            font-family: "Playfair Display", serif;

            font-size: 40px;

            color: #fff;

            margin-bottom: 24px;

            font-weight: 700;

        }

        .rgsgrc-info h3 {

            color: #fff;

            font-family: "Playfair Display", serif;

            font-size: 38px;

            margin-bottom: 40px;

            font-weight: 600;

        }

        .rgsgrc-info p {

            color: rgba(255, 255, 255, .88);

            line-height: 2;

            font-size: 17px;

            max-width: 1100px;

        }

        /*=====================
    Timeline
    ======================*/

        .rgsgrc-timeline {

            position: relative;

            padding-left: 32px;

        }

        .rgsgrc-timeline::before {

            content: "";

            position: absolute;

            left: 9px;

            top: 8px;

            bottom: 8px;

            width: 2px;

            background: rgba(255, 255, 255, .28);

        }

        .rgsgrc-item {

            position: relative;

            margin-bottom: 26px;

        }

        .rgsgrc-item:last-child {

            margin-bottom: 0;

        }

        .rgsgrc-item span {

            position: absolute;

            left: -32px;

            top: 8px;

            width: 12px;

            height: 12px;

            border-radius: 50%;

            background: #fff;

            transition: .3s;

        }

        .rgsgrc-item:hover span {

            background: #d8b15c;

            transform: scale(1.35);

        }

        .rgsgrc-item p {

            margin: 0;

            font-size: 17px;

        }

        /*=====================
    Button
    ======================*/

        .rgsgrc-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 240px;

            height: 64px;

            border-radius: 12px;

            background: #e56b2e;

            color: #fff;

            text-decoration: none;

            font-weight: 600;

            font-size: 18px;

            transition: .35s;

        }

        .rgsgrc-btn:hover {

            background: #f07b40;

            color: #fff;

            transform: translateY(-5px);

            box-shadow: 0 18px 35px rgba(229, 107, 46, .35);

        }

        /*=====================
    Responsive
    ======================*/

        @media(max-width:991px) {

            .rgsgrc-info {

                padding: 70px 0;

                border-radius: 50px 50px 0 0;

            }

            .rgsgrc-info h2 {

                font-size: 42px;

            }

            .rgsgrc-info h3 {

                font-size: 30px;

            }

        }

        @media(max-width:767px) {

            .rgsgrc-info {

                padding: 55px 0;

                border-radius: 30px 30px 0 0;

            }

            .rgsgrc-block {

                margin-bottom: 50px;

            }

            .rgsgrc-info h2 {

                font-size: 34px;

            }

            .rgsgrc-info h3 {

                font-size: 25px;

                line-height: 1.4;

            }

            .rgsgrc-info p {

                font-size: 15px;

                line-height: 1.9;

            }

            .rgsgrc-item p {

                font-size: 15px;

            }

            .rgsgrc-btn {

                width: 100%;

                height: 58px;

                font-size: 16px;

            }

        }
    </style>

    <style>
        /*==========================================================
            ICC TABLE
    ==========================================================*/

        .rgsgrc-table-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .rgsgrc-table-heading {

            text-align: center;

            margin-bottom: 55px;

        }

        .rgsgrc-table-heading h2 {

            font-family: "Playfair Display", serif;

            color: #23457b;

            font-size: 40px;

            line-height: 1.2;

            margin: 0;

            font-weight: 700;

        }

        .rgsgrc-table-wrap {

            overflow-x: auto;

            border-radius: 18px;

            box-shadow:
                0 15px 40px rgba(18, 40, 84, .08);

        }

        .rgsgrc-table {

            width: 100%;

            border-collapse: collapse;

            min-width: 950px;

        }

        .rgsgrc-table thead {

            background: #2d4d86;

        }

        .rgsgrc-table th {

            padding: 24px;

            text-align: left;

            color: #fff;

            font-size: 17px;

            font-weight: 600;

            border-right: 1px solid rgba(255, 255, 255, .25);

        }

        .rgsgrc-table th:last-child {

            border-right: none;

        }

        .rgsgrc-table tbody tr {

            background: #dce9fb;

            transition: .3s;

        }

        .rgsgrc-table tbody tr:nth-child(even) {

            background: #d4e3f8;

        }

        .rgsgrc-table tbody tr:hover {

            background: #c9dcf7;

        }

        .rgsgrc-table td {

            padding: 26px;

            vertical-align: top;

            border-top: 1px solid #b8ccea;

            border-right: 1px solid #b8ccea;

            color: #24406e;

            line-height: 1.9;

            font-size: 16px;

        }

        .rgsgrc-table td:last-child {

            border-right: none;

        }

        .rgsgrc-table td strong {

            display: block;

            margin-bottom: 14px;

            font-size: 20px;

            color: #1d3c71;

        }

        .rgsgrc-table td span {

            display: block;

            color: #36557f;

        }

        /*========================*/

        @media(max-width:991px) {

            .rgsgrc-table-section {

                padding: 70px 0;

            }

            .rgsgrc-table-heading {

                margin-bottom: 40px;

            }

            .rgsgrc-table-heading h2 {

                font-size: 42px;

            }

        }

        @media(max-width:767px) {

            .rgsgrc-table-section {

                padding: 55px 0;

            }

            .rgsgrc-table-heading h2 {

                font-size: 32px;

                line-height: 1.35;

            }

            .rgsgrc-table td {

                padding: 18px;

                font-size: 14px;

            }

            .rgsgrc-table td strong {

                font-size: 17px;

            }

            .rgsgrc-table th {

                font-size: 15px;

                padding: 18px;

            }

        }
    </style>

    <style>
        /*==========================================================
            CONTACT CTA
    ==========================================================*/

        .rgsgrc-contact {

            background: #eef3fb;

            padding: 0 0 90px;

        }

        .rgsgrc-contact-card {

            background: #fff;

            border-radius: 28px;

            padding: 55px 60px;

            box-shadow:
                0 20px 55px rgba(18, 40, 84, .08);

            position: relative;

            overflow: hidden;

        }

        .rgsgrc-contact-card::before {

            content: "";

            position: absolute;

            width: 260px;

            height: 260px;

            right: -120px;

            top: -120px;

            border-radius: 50%;

            background: radial-gradient(rgba(35, 69, 123, .06), transparent 70%);

        }

        .rgsgrc-contact-tag {

            display: inline-block;

            color: #b88938;

            text-transform: uppercase;

            letter-spacing: 3px;

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 12px;

        }

        .rgsgrc-contact h2 {

            font-family: "Playfair Display", serif;

            color: #23457b;

            font-size: 50px;

            margin-bottom: 22px;

            line-height: 1.2;

        }

        .rgsgrc-mail {

            display: inline-flex;

            align-items: center;

            gap: 14px;

            color: #23457b;

            text-decoration: none;

            font-size: 24px;

            font-weight: 600;

            transition: .3s;

        }

        .rgsgrc-mail i {

            color: #e56b2e;

            font-size: 26px;

        }

        .rgsgrc-mail:hover {

            color: #e56b2e;

        }

        .rgsgrc-contact-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            min-width: 220px;

            height: 58px;

            border-radius: 12px;

            background: #23457b;

            color: #fff;

            text-decoration: none;

            font-weight: 600;

            transition: .35s;

        }

        .rgsgrc-contact-btn:hover {

            background: #e56b2e;

            color: #fff;

            transform: translateY(-4px);

            box-shadow: 0 18px 35px rgba(229, 107, 46, .25);

        }

        /*========================*/

        @media(max-width:991px) {

            .rgsgrc-contact {

                padding-bottom: 70px;

            }

            .rgsgrc-contact-card {

                padding: 40px;

            }

            .rgsgrc-contact h2 {

                font-size: 38px;

            }

        }

        @media(max-width:767px) {

            .rgsgrc-contact {

                padding-bottom: 55px;

            }

            .rgsgrc-contact-card {

                padding: 28px;

                border-radius: 18px;

            }

            .rgsgrc-contact h2 {

                font-size: 28px;

            }

            .rgsgrc-mail {

                font-size: 18px;

                word-break: break-word;

            }

            .rgsgrc-contact-btn {

                width: 100%;

                margin-top: 25px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Student Grievance Redressal Committee (SGRC)</h1>
            <div class="pg-hero-breadcrumb">
                Student Grievance Redressal Committee (SGRC)
            </div>
        </div>

    </section>

    <section class="rgsgrc-intro">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="rgsgrc-image">

                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/student-grievance/stu-head.png"
                            alt="SGRC">

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="rgsgrc-content">

                        <span class="rgsgrc-tag">
                            Student Welfare
                        </span>

                        <h2>
                            Student Grievance Redressal Committee (SGRC)
                        </h2>

                        <p>
                            Welcome to the official Student Grievance Redressal
                            Committee (SGRC) of The Assam Royal Global University.
                            The SGRC functions under the guidelines of the University
                            Grants Commission (UGC) Regulations, 2023, and is
                            committed to addressing genuine grievances of students
                            effectively and confidentially.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="rgsgrc-info">

        <div class="container">

            <!-- What is SGRC -->

            <div class="rgsgrc-block">

                <h2>What Is SGRC?</h2>

                <p>
                    The Student Grievance Redressal Committee (SGRC) is a dedicated body that ensures
                    students' concerns related to academics, campus life, administration, hostel,
                    examinations, and student services are heard and resolved promptly. It acts as a
                    bridge between students and the University administration while ensuring fairness,
                    transparency and confidentiality throughout the grievance resolution process.
                </p>

            </div>


            <!-- Issues -->

            <div class="rgsgrc-block">

                <h2>What Issues Can Be Reported?</h2>

                <h3>
                    Students Can Approach SGRC For Grievances Related To:
                </h3>

                <div class="rgsgrc-timeline">

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Admissions</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Hostel Facilities</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Examinations</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Ragging</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Fees & Accounts</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Proctorial Matters</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Student Welfare & Conduct</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Internal Complaints (ICC – Gender Sensitization & Harassment)</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Academic Issues</p>
                    </div>

                    <div class="rgsgrc-item">
                        <span></span>
                        <p>Any Service Related Concern</p>
                    </div>

                </div>

            </div>


            <!-- Promise -->

            <div class="rgsgrc-block">

                <h2>Our Promises?</h2>

                <p>
                    We are dedicated to ensuring a fair, respectful and transparent academic
                    environment. Every grievance will be treated with seriousness,
                    confidentiality and timely redressal.
                </p>

            </div>


            <!-- CTA -->

            <div class="rgsgrc-block rgsgrc-last">

                <h2>To File A Grievance</h2>

                <a href="/grievance#" class="rgsgrc-btn">
                    Register Complaints
                </a>

            </div>

        </div>

    </section>

    <section class="rgsgrc-table-section">

        <div class="container">

            <div class="rgsgrc-table-heading">

                <h2>
                    Members Of Internal Complaints Committee (ICC), RGU
                </h2>

            </div>

            <div class="rgsgrc-table-wrap">

                <table class="rgsgrc-table">

                    <thead>

                        <tr>

                            <th>Name of the staff / faculty</th>

                            <th>Category of nomination</th>

                            <th>Designation in SGRC</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>

                                <strong>Prof. Abhijit Dutta</strong>

                                <span>
                                    Professor & Dean,
                                    Royal School of Medical &
                                    Allied Health Sciences
                                </span>

                            </td>

                            <td>
                                A Professor as Chairperson
                            </td>

                            <td>
                                Chairperson
                            </td>

                        </tr>

                        <tr>

                            <td>

                                <strong>Ms. Angira Mimani</strong>

                                <span>
                                    Associate Professor,
                                    RSB and Associate Dean,
                                    Student Welfare
                                </span>

                            </td>

                            <td>
                                Four Professors / Senior Faculty Members of the institution as Members
                            </td>

                            <td>
                                Member
                            </td>

                        </tr>

                        <tr>

                            <td>

                                <strong>
                                    Prof. (Dr.) Atanu Bhattacharjee
                                </strong>

                                <span>
                                    Professor,
                                    RSP and Joint Controller of Examination
                                </span>

                            </td>

                            <td>
                                Four Professors / Senior Faculty Members of the institution as Members
                            </td>

                            <td>
                                Member
                            </td>

                        </tr>

                        <tr>

                            <td>

                                <strong>
                                    Dr. Punam Debbarma
                                </strong>

                                <span>
                                    Professor,
                                    RSN
                                </span>

                            </td>

                            <td>
                                Four Professors / Senior Faculty Members of the institution as Members
                            </td>

                            <td>
                                Member
                            </td>

                        </tr>

                        <tr>

                            <td>

                                <strong>
                                    Dr. Sthiti Porna Dutta
                                </strong>

                                <span>
                                    Assistant Professor,
                                    Forensic Sciences,
                                    RSBLSC
                                </span>

                            </td>

                            <td>
                                Four Professors / Senior Faculty Members of the institution as Members
                            </td>

                            <td>
                                Member Secretary
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

    <section class="rgsgrc-contact">

        <div class="container">

            <div class="rgsgrc-contact-card">

                <div class="row align-items-center">

                    <div class="col-lg-8">

                        <span class="rgsgrc-contact-tag">
                            Need Assistance?
                        </span>

                        <h2>
                            For Any Query, Send An Email To
                        </h2>

                        <a href="mailto:grievance@rgu.ac" class="rgsgrc-mail">

                            <i class="bi bi-envelope-paper-fill"></i>

                            grievance@rgu.ac

                        </a>

                    </div>



                </div>

            </div>

        </div>

    </section>
@endsection
