@extends('frontend/new-master')
@section('content')
    <style>
        .international-guidelines-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .international-guidelines-intro {

            text-align: center;

            margin-bottom: 55px;

        }

        .international-guidelines-intro p {

            color: #555;

            font-size: 17px;

            line-height: 2;

            margin: 0;

        }

        /*=========================================================
    TABLE WRAPPER
    =========================================================*/

        .international-guidelines-table-wrapper {

            background: #ffffff;

            border-radius: 18px;

            overflow: hidden;

            border: 1px solid #d9e5f5;

            box-shadow: 0 18px 45px rgba(25, 45, 90, .08);

        }

        .international-guidelines-table {

            margin: 0;

            width: 100%;

            border-collapse: collapse;

        }

        /*=========================================================
    TABLE HEADER
    =========================================================*/

        .international-guidelines-table thead {

            background: #d9e8fc;

        }

        .international-guidelines-table thead th {

            padding: 22px;

            font-size: 18px;

            font-weight: 700;

            color: #24467e;

            border: 1px solid #bfd3ef;

            vertical-align: middle;

        }

        .international-guidelines-table thead th:nth-child(1) {

            text-align: center;

        }

        .international-guidelines-table thead th:nth-child(2) {

            text-align: left;

        }

        .international-guidelines-table thead th:nth-child(3) {

            text-align: center;

        }

        /*=========================================================
    TABLE BODY
    =========================================================*/

        .international-guidelines-table tbody td {

            padding: 18px 20px;

            font-size: 16px;

            color: #4f5d73;

            border: 1px solid #d9e5f5;

            vertical-align: middle;

            transition: .35s;

        }

        .international-guidelines-table tbody td:first-child {

            width: 90px;

            text-align: center;

            font-weight: 600;

            color: #24467e;

        }

        .international-guidelines-table tbody td:last-child {

            text-align: center;

        }

        .international-guidelines-table tbody tr {

            transition: .35s;

        }

        .international-guidelines-table tbody tr:hover {

            background: #f6f9ff;

        }

        .international-guidelines-table tbody tr:hover td {

            color: #24467e;

        }

        /*=========================================================
    DOWNLOAD BUTTON
    =========================================================*/

        .international-guidelines-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 120px;

            height: 44px;

            padding: 0 24px;

            background: #e56b37;

            color: #ffffff;

            text-transform: uppercase;

            letter-spacing: .5px;

            font-size: 14px;

            font-weight: 700;

            text-decoration: none;

            border-radius: 8px;

            transition: .35s;

        }

        .international-guidelines-btn:hover {

            background: #23457d;

            color: #fff;

            text-decoration: none;

            transform: translateY(-2px);

            box-shadow: 0 10px 25px rgba(35, 69, 125, .25);

        }

        /*=========================================================
    SCROLLBAR
    =========================================================*/

        .table-responsive::-webkit-scrollbar {

            height: 8px;

        }

        .table-responsive::-webkit-scrollbar-thumb {

            background: #c8d8ef;

            border-radius: 30px;

        }

        .table-responsive::-webkit-scrollbar-track {

            background: #eef3fb;

        }

        /*=========================================================
    TABLET
    =========================================================*/

        @media (max-width: 991px) {

            .international-guidelines-section {

                padding: 70px 0;

            }

            .international-guidelines-intro {

                margin-bottom: 40px;

            }

            .international-guidelines-table thead th,

            .international-guidelines-table tbody td {

                padding: 16px;

            }

        }

        /*=========================================================
    MOBILE
    =========================================================*/

        @media (max-width: 767px) {

            .international-guidelines-section {

                padding: 55px 0;

            }

            .international-guidelines-intro p {

                font-size: 15px;

                line-height: 1.8;

            }

            .international-guidelines-table {

                min-width: 720px;

            }

            .international-guidelines-table thead th {

                font-size: 15px;

            }

            .international-guidelines-table tbody td {

                font-size: 14px;

            }

            .international-guidelines-btn {

                min-width: 105px;

                height: 40px;

                font-size: 13px;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/admission-guidelines/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> International Admission Guidelines for Applicants</h1>
            <div class="pg-hero-breadcrumb">
                International / International Admission Guidelines for Applicants
            </div>
        </div>

    </section>

    <section class="international-guidelines-section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="international-guidelines-intro">

                        <p>

                            All International applicants are advised to carefully check all relevant information related
                            to Application Submission, Admission, Fee Payments and related details available in this
                            section.

                        </p>

                    </div>

                </div>

            </div>





            <div class="international-guidelines-table-wrapper">

                <div class="table-responsive">

                    <table class="table international-guidelines-table">

                        <thead>

                            <tr>

                                <th style="width:90px;">

                                    Sr. No.

                                </th>

                                <th>

                                    Document

                                </th>

                                <th style="width:170px;">

                                    Links

                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>01</td>

                                <td>International Application Form</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/1.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>02</td>

                                <td>Information Related to Application Process</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/2.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>03</td>

                                <td>General Admission Guidelines</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/3.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>04</td>

                                <td>Disciplinary Misconduct</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/4.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>05</td>

                                <td>Guidelines for Student's Residential Facility</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/5.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>06</td>

                                <td>Guidelines for Payment of Fees</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/6.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>07</td>

                                <td>VISA Requirements and Guidelines</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/7.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>08</td>

                                <td>International Brochure</td>

                                <td>

                                    <a href="https://heyzine.com/flip-book/adfd7889ba.html"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>09</td>

                                <td>International Fee Structure</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/9.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>10</td>

                                <td>Bhutan Fees Structure</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/10.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>11</td>

                                <td>Nepal Fees Structure</td>

                                <td>


                                </td>

                            </tr>

                            <tr>

                                <td>12</td>

                                <td>International Hostel Application Form</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/international-pdf/12.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>13</td>

                                <td>Eligibility & Selection Criteria</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/pdf/eligibility-criteria.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>14</td>

                                <td>School of Medical & Allied Science</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/pdf/Medical%20&%20Allied%20Sciences.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>15</td>

                                <td>Science, Engineering & Technology</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/pdf/Science,%20Engineering%20&%20Technology.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>16</td>

                                <td>Humanities Brochure</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/pdf/School%20of%20Arts,%20Design,%20Tourism%20&%20Hotel%20Mgmt.,%20Law%20Brochure%202026.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>17</td>

                                <td>International Prospectus</td>

                                <td>

                                    <a href="https://www.rgu.ac/mobile-assets/pdf/International%20Prospectus.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>18</td>

                                <td>Group Personal Accident policy</td>

                                <td>

                                    <a href="/mobile-assets/pdf-2027/W570825943_9080_20260715.pdf"
                                        class="international-guidelines-btn">

                                        Download

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>
@endsection
