@extends('frontend/new-master')
@section('content')
        <style>
        /*==================================================
        CISR SECTION
==================================================*/

        .rgcisr-section {

            padding: 90px 0;

            background: #eef3fb;

            position: relative;

            overflow: hidden;

        }

        .rgcisr-section::before {

            content: "";

            position: absolute;

            width: 520px;

            height: 520px;

            border-radius: 50%;

            right: -180px;

            top: -180px;

            background: radial-gradient(rgba(35, 69, 123, .05), transparent 70%);

        }

        /*====================================
Heading
====================================*/

        .rgcisr-heading {

            max-width: 1100px;

            margin: 0 auto 60px;

            text-align: center;

        }

        .rgcisr-heading span {

            display: inline-block;

            text-transform: uppercase;

            letter-spacing: 3px;

            color: #b88938;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 15px;

        }

        .rgcisr-heading h2 {

            font-family: "Playfair Display", serif;

            font-size: 58px;

            color: #23457b;

            font-weight: 700;

            margin-bottom: 20px;

        }

        .rgcisr-heading p {

            color: #65778d;

            font-size: 17px;

            line-height: 1.9;

            margin: 0;

        }

        /*====================================
Table
====================================*/

        .rgcisr-table-wrapper {

            background: #fff;

            border-radius: 18px;

            overflow: auto;

            box-shadow:
                0 18px 50px rgba(18, 40, 84, .08);

        }

        .rgcisr-table {

            width: 100%;

            border-collapse: collapse;

            min-width: 800px;

        }

        .rgcisr-table thead {

            background: #2d4d86;

        }

        .rgcisr-table th {

            color: #fff;

            padding: 22px;

            text-align: left;

            font-size: 17px;

            font-weight: 600;

            border-right: 1px solid rgba(255, 255, 255, .25);

        }

        .rgcisr-table th:last-child {

            border-right: none;

        }

        .rgcisr-table td {

            padding: 24px 22px;

            border-top: 1px solid #c7d8f2;

            border-right: 1px solid #c7d8f2;

            color: #355071;

            font-size: 16px;

            line-height: 1.8;

            vertical-align: middle;

        }

        .rgcisr-table td:last-child {

            border-right: none;

        }

        .rgcisr-table tbody tr {

            background: #edf4ff;

            transition: .3s;

        }

        .rgcisr-table tbody tr:nth-child(even) {

            background: #e6effd;

        }

        .rgcisr-table tbody tr:hover {

            background: #dbe8fb;

        }

        .rgcisr-sr {

            font-weight: 700;

            color: #23457b;

        }

        .rgcisr-name {

            font-weight: 600;

            color: #23457b;

        }

        /*====================================
Right Card
====================================*/

        .rgcisr-card {

            background: #fff;

            border-radius: 20px;

            padding: 35px;

            box-shadow:
                0 18px 50px rgba(18, 40, 84, .08);

            position: sticky;

            top: 100px;

        }

        .rgcisr-card h3 {

            font-size: 34px;

            font-family: "Playfair Display", serif;

            color: #de672b;

            margin-bottom: 35px;

            line-height: 1.3;

        }

        .rgcisr-point {

            display: flex;

            align-items: flex-start;

            gap: 18px;

            margin-bottom: 35px;

        }

        .rgcisr-point:last-child {

            margin-bottom: 0;

        }

        .rgcisr-number {

            min-width: 42px;

            font-size: 26px;

            color: #23457b;

            font-weight: 700;

            line-height: 1;

        }

        .rgcisr-point p {

            color: #4f6177;

            font-size: 17px;

            line-height: 1.9;

            margin-bottom: 16px;

        }

        .rgcisr-point ul {

            margin: 0;

            padding-left: 20px;

        }

        .rgcisr-point li {

            color: #617387;

            line-height: 1.9;

            margin-bottom: 14px;

        }

        .rgcisr-point li:last-child {

            margin-bottom: 0;

        }

        /*====================================
Responsive
====================================*/

        @media(max-width:991px) {

            .rgcisr-section {

                padding: 70px 0;

            }

            .rgcisr-heading {

                margin-bottom: 45px;

            }

            .rgcisr-heading h2 {

                font-size: 44px;

            }

            .rgcisr-card {

                position: relative;

                top: auto;

                margin-top: 20px;

            }

        }

        @media(max-width:767px) {

            .rgcisr-section {

                padding: 55px 0;

            }

            .rgcisr-heading h2 {

                font-size: 34px;

                line-height: 1.25;

            }

            .rgcisr-heading p {

                font-size: 15px;

            }

            .rgcisr-table td {

                padding: 18px;

                font-size: 14px;

            }

            .rgcisr-table th {

                padding: 18px;

                font-size: 15px;

            }

            .rgcisr-card {

                padding: 24px;

                border-radius: 16px;

            }

            .rgcisr-card h3 {

                font-size: 28px;

            }

            .rgcisr-number {

                font-size: 20px;

                min-width: 30px;

            }

            .rgcisr-point p,

            .rgcisr-point li {

                font-size: 15px;

                line-height: 1.8;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/discover-rgu-preface/hero-img.jpg'); filter: blur(3px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Centre for Interdisciplinary Study and Research (CISR)</h1>
            <div class="pg-hero-breadcrumb">
                Centre for Interdisciplinary Study and Research (CISR)
            </div>
        </div>

    </section>


    <section class="rgcisr-section">

        <div class="container">

            <div class="rgcisr-heading">

                <!-- <span>Centre For Interdisciplinary Study & Research</span>

                <h2>Central Committee</h2> -->

                <p>
                    The central committee for Centre for Interdisciplinary Study and
                    Research (CISR) has been constituted with the following composition
                    to facilitate the smooth functioning of the Centre.
                </p>

            </div>

            <div class="row g-5">

                <!--==========================
                    LEFT TABLE
            ===========================-->

                <div class="col-lg-7">

                    <div class="rgcisr-table-wrapper">

                        <table class="rgcisr-table">

                            <thead>

                                <tr>

                                    <th width="90">
                                        Sr. No.
                                    </th>

                                    <th>
                                        Name
                                    </th>

                                    <th width="260">
                                        Designation
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td class="rgcisr-sr">1</td>

                                    <td class="rgcisr-name">
                                        Professor Alak K. Buragohain
                                    </td>

                                    <td>
                                        Adviser
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">2</td>

                                    <td class="rgcisr-name">
                                        Professor Surajit Ch. Mukhopadhyay
                                    </td>

                                    <td>
                                        Chairperson
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">3</td>

                                    <td class="rgcisr-name">
                                        Professor Shiela Bora
                                    </td>

                                    <td>
                                        Member
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">4</td>

                                    <td class="rgcisr-name">
                                        Professor Laishram Ladu Singh
                                    </td>

                                    <td>
                                        Member
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">5</td>

                                    <td class="rgcisr-name">
                                        Professor Anupam Chatterjee
                                    </td>

                                    <td>
                                        Member
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">6</td>

                                    <td class="rgcisr-name">
                                        Professor Sajal Nag
                                    </td>

                                    <td>
                                        Member
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">7</td>

                                    <td class="rgcisr-name">
                                        Professor Indrani Singh Rai
                                    </td>

                                    <td>
                                        Member
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">8</td>

                                    <td class="rgcisr-name">
                                        Professor Diganta Munshi
                                    </td>

                                    <td>
                                        Member
                                    </td>

                                </tr>

                                <tr>

                                    <td class="rgcisr-sr">9</td>

                                    <td class="rgcisr-name">
                                        Dr. Dhiraj Borkotoky
                                    </td>

                                    <td>
                                        Member Secretary
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

                <!--==========================
                    RIGHT CARD
            ===========================-->

                <div class="col-lg-5">

                    <div class="rgcisr-card">

                        <h3>

                            Terms Of Reference For The Central Committee

                        </h3>

                        <div class="rgcisr-point">

                            <div class="rgcisr-number">

                                01.

                            </div>

                            <div>

                                <p>

                                    The central committee of the CISR shall be
                                    responsible for the functioning of the CISR
                                    along the four verticals:

                                </p>

                                <ul>

                                    <li>
                                        Steering multidisciplinary,
                                        interdisciplinary and
                                        transdisciplinary research
                                        leading to the award of
                                        Ph.D. Degree and beyond.
                                    </li>

                                    <li>

                                        Developing course curricula on
                                        multidisciplinary,
                                        interdisciplinary and
                                        transdisciplinary domains.

                                    </li>

                                    <li>

                                        Innovating pedagogical practices.

                                    </li>

                                    <li>

                                        Guiding policy research with
                                        respect to North-East India.

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="rgcisr-point">

                            <div class="rgcisr-number">

                                02.

                            </div>

                            <div>

                                <p>

                                    The central committee shall form
                                    the Centre Research Committee
                                    for facilitating doctoral
                                    research leading to Ph.D.
                                    as per the provisions of
                                    the Ph.D. Regulations of RGU.

                                </p>

                            </div>

                        </div>

                        <div class="rgcisr-point">

                            <div class="rgcisr-number">

                                03.

                            </div>

                            <div>

                                <p>

                                    The central committee shall have
                                    a term of one year from the date
                                    of issue of notification or
                                    until further order,
                                    whichever is earlier.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
