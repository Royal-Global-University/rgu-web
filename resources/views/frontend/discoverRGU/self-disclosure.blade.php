@extends('frontend/new-master')
@section('content')
    <style>
        /*=========================================================
    BRIDGE DISCLOSURE
    =========================================================*/

        .bridge-disclosure-section {

            padding: 80px 0;

            background: #EBF1FC;

        }

        /*=========================================================
    ACCORDION ITEM
    =========================================================*/

        .bridge-disclosure-item {

            background: #fff;

            border-radius: 8px;

            overflow: hidden;

            margin-bottom: 18px;

            box-shadow: 0 8px 25px rgba(0, 0, 0, .06);

        }

        /*=========================================================
    HEADER
    =========================================================*/

        .bridge-disclosure-header {

            background: #D5E8FE;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 18px 24px;

            cursor: pointer;

            transition: .35s;

        }

        .bridge-disclosure-header:hover {

            background: #cde4ff;

        }

        .bridge-disclosure-item.active .bridge-disclosure-header {

            background: #e56a3b;

        }

        .bridge-disclosure-title {

            margin: 0;

            font-size: 18px;

            font-weight: 600;

            color: #1f3566;

            transition: .3s;

        }

        .bridge-disclosure-item.active .bridge-disclosure-title {

            color: #fff;

        }

        .bridge-disclosure-icon {

            font-size: 18px;

            color: #1f3566;

            transition: .35s;

        }

        .bridge-disclosure-item.active .bridge-disclosure-icon {

            color: #fff;

            transform: rotate(180deg);

        }

        /*=========================================================
    BODY
    =========================================================*/

        .bridge-disclosure-body {

            max-height: 0;

            overflow: hidden;

            transition: max-height .45s ease;

            background: #fff;

        }

        /*=========================================================
    CONTENT
    =========================================================*/

        .bridge-disclosure-content {

            padding: 10px 0;

        }

        /*=========================================================
    LINKS
    =========================================================*/

        .bridge-disclosure-link {

            display: block;

            padding: 15px 24px;

            text-decoration: none;

            color: #2d5fa5;

            border-bottom: 1px solid #edf1f6;

            transition: .25s;

        }

        .bridge-disclosure-link:hover {

            background: #f8fbff;

            color: #e56a3b;

            padding-left: 34px;

        }

        /*=========================================================
    TEXT
    =========================================================*/

        .bridge-disclosure-text {

            display: block;

            padding: 15px 24px;

            color: #555;

            line-height: 1.8;

            border-bottom: 1px solid #edf1f6;

        }

        /*=========================================================
    LAST CHILD
    =========================================================*/

        .bridge-disclosure-content>*:last-child {

            border-bottom: none;

        }

        /*=========================================================
    MOBILE
    =========================================================*/

        @media(max-width:768px) {

            .bridge-disclosure-section {

                padding: 60px 0;

            }

            .bridge-disclosure-header {

                padding: 16px;

            }

            .bridge-disclosure-title {

                font-size: 16px;

            }

            .bridge-disclosure-link,

            .bridge-disclosure-text {

                padding: 14px 18px;

                font-size: 15px;

            }

        }

        @media(max-width:576px) {

            .bridge-disclosure-title {

                font-size: 15px;

            }

            .bridge-disclosure-link,

            .bridge-disclosure-text {

                font-size: 14px;

            }

        }
    </style>

    <style>
        .bridge-disclosure-inline-link {

            color: #2d5fa5;

            text-decoration: none;

            transition: .3s;

        }

        .bridge-disclosure-inline-link:hover {

            color: #e56a3b;

        }
    </style>

    <style>
        /*=========================================================
    ADMIN GRID
    =========================================================*/

        .bridge-disclosure-admin-grid {

            border-top: 1px solid #edf1f6;

        }

        .bridge-disclosure-admin-row {

            display: grid;

            grid-template-columns: 280px 1fr;

            border-bottom: 1px solid #edf1f6;

        }

        .bridge-disclosure-admin-left {

            padding: 22px;

            font-weight: 600;

            color: #222;

            border-right: 1px solid #edf1f6;

        }

        .bridge-disclosure-admin-right {

            padding: 22px;

        }

        .bridge-disclosure-admin-right p {

            margin: 0 0 8px;

            color: #444;

        }

        .bridge-disclosure-admin-right strong {

            color: #1f3566;

        }

        .bridge-disclosure-profile {

            display: inline-block;

            margin-top: 6px;

            color: #2d5fa5;

            text-decoration: none;

            transition: .3s;

        }

        .bridge-disclosure-profile:hover {

            color: #e56a3b;

        }

        @media(max-width:768px) {

            .bridge-disclosure-admin-row {

                grid-template-columns: 1fr;

            }

            .bridge-disclosure-admin-left {

                border-right: none;

                border-bottom: 1px solid #edf1f6;

            }

        }
    </style>


    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/Discover-RGU-Policies-and-Administration-Public-Self-Disclosure/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Public Self Disclosure</h1>
            <div class="pg-hero-breadcrumb">
                Discover RGU / Policies and Administration / Public Self Disclosure
            </div>
        </div>

    </section>


    <div class="container" style="padding: 50px;">
        <!--=========================================================
            ABOUT HEI
            ==========================================================-->
        <div class="bridge-disclosure-item active">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    About HEI

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <!-- Link -->

                    <a href="preface" class="bridge-disclosure-link">

                        About Us: Overview

                    </a>

                    <!-- Link -->

                    <a href="recognition-accreditation" class="bridge-disclosure-link">

                        Act, Statutes and Approvals

                    </a>

                    <!-- Link -->

                    <a href="institutional-development-plan" class="bridge-disclosure-link">

                        Institutional Development Plan

                    </a>

                    <!-- Text -->

                    <div class="bridge-disclosure-text">

                        Constituent Units/Affiliated Colleges, Affiliating University (In Case Of Colleges)
                        Off-Campus/Off-shore Campus/Learning Support Centres Under ODL Mode (Wherever Applicable)

                    </div>

                    <!-- Link -->

                    <a href="recognition-accreditation" class="bridge-disclosure-link">

                        Accreditation/Ranking Status (NAAC, NBA, NIRF)

                    </a>

                    <!-- Link -->

                    <a href="recognition-accreditation" class="bridge-disclosure-link">

                        Recognition/Approval (2(f), 12B, Etc. As Applicable)

                    </a>

                    <!-- Link -->

                    <a href="annual-report" class="bridge-disclosure-link">

                        Annual Reports

                    </a>

                    <!-- Link -->

                    <a href="annual-report" class="bridge-disclosure-link">

                        Annual Account Including Balance Sheet, Income And Expenditure Account, Receipts And Payments
                        Account Along With Audit Report

                    </a>

                    <!-- Text -->

                    <div class="bridge-disclosure-text">

                        GYAN SAGAR FOUNDATION Alias ROYAL Is A Society Registered Under Societies Registration Act, XXI
                        Of
                        1860.

                    </div>

                </div>

            </div>

        </div>

        <!--=========================================================
            ACADEMICS
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Academics

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <!-- Text + Inline Link -->

                    <div class="bridge-disclosure-text">

                        Details of Academic Programs
                        <a href="schools-rgu" class="bridge-disclosure-inline-link">

                            (Diploma, UG & PG | Ph.D.)

                        </a>

                    </div>

                    <!-- Link -->

                    <a href="academic-calendar" class="bridge-disclosure-link">

                        Academic Calendar

                    </a>

                    <!-- Text -->

                    <div class="bridge-disclosure-text">

                        Statutes/Ordinances Pertaining To Academic/Examinations

                    </div>

                    <!-- Link -->

                    <a href="schools-rgu" class="bridge-disclosure-link">

                        Schools/Departments/Centres

                    </a>

                    <!-- Text -->

                    <div class="bridge-disclosure-text">

                        Schools/Departments/Centres Faculty Wise/Staff Details With Photographs

                    </div>

                    <!-- Text -->

                    <div class="bridge-disclosure-text">

                        List Of UGC-Recognized ODL/Online Programs, If Any

                    </div>

                    <!-- Link -->

                    <a href="library-Resources" class="bridge-disclosure-link">

                        Library

                    </a>

                    <!-- Link -->

                    <a href="iqac" class="bridge-disclosure-link">

                        Internal Quality Assurance Cell (IQAC)

                    </a>

                    <!-- Link -->

                    <a href="innovation" class="bridge-disclosure-link">

                        Academic Collaboration

                    </a>

                </div>

            </div>

        </div>

        <!--=========================================================
            ADMINISTRATION
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Administration

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <div class="bridge-disclosure-admin-grid">

                        <!-- Chancellor -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Chancellor

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Dr. A. K. Pansari</p>

                                <p><strong>Email:</strong> dtagarwal@rgu.ac</p>

                                <p><strong>Mobile:</strong> 9678009412</p>



                            </div>

                        </div>

                        <!-- Pro Chancellor -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Pro Chancellor

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Sri. Ankur Pansari</p>

                                <!-- <p><strong>Email:</strong> akmodi@rgu.ac</p>

                                    <p><strong>Mobile:</strong> 9678009412</p> -->



                            </div>

                        </div>

                        <!-- Vice Chancellor -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Vice-Chancellor

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Prof. A. K. Buragohain</p>

                                <p><strong>Email:</strong> vice-chancellor@rgu.ac</p>

                                <p><strong>Mobile:</strong> 9954115220</p>



                            </div>

                        </div>

                        <!-- Registrar Administration -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Registrar Administration

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Prof. (Dr.) Diganta Munshi</p>

                                <p><strong>Email:</strong> registrar@rgu.ac</p>

                                <p><strong>Mobile:</strong> 81599 27035</p>



                            </div>

                        </div>

                        <!-- Registrar Academic -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Registrar Academic

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Dr. D. N. Singh</p>

                                <p><strong>Email:</strong> registraracademic@rgu.ac</p>

                                <p><strong>Mobile:</strong> 98000 04433</p>


                            </div>

                        </div>

                        <!-- Finance Officer -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Finance Officer

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Mr. Vijay Sharma</p>

                                <p><strong>Email:</strong> finance@rgu.ac</p>

                                <p><strong>Mobile:</strong> 95080 61811</p>


                            </div>

                        </div>

                        <!-- Controller of Examination -->

                        <div class="bridge-disclosure-admin-row">

                            <div class="bridge-disclosure-admin-left">

                                Controller of Examination

                            </div>

                            <div class="bridge-disclosure-admin-right">

                                <p><strong>Name:</strong> Dr. Narinder Kumar</p>

                                <p><strong>Email:</strong> coe@rgu.ac</p>

                                <p><strong>Mobile:</strong> 95885 79381</p>


                            </div>

                        </div>

                    </div>

                    <!-- Bottom Links -->

                    <a href="chief-vigilance-officer " class="bridge-disclosure-link">Chief Vigilance Officer</a>

                    <a href="governing-body " class="bridge-disclosure-link">Governing Body</a>

                    <a href="board-of-management " class="bridge-disclosure-link">Board of Management</a>

                    <a href="academic-council " class="bridge-disclosure-link">Academic Council</a>

                    <a href="schools-rgu " class="bridge-disclosure-link">Board of Studies</a>

                    <a href="internal-complaints-committee " class="bridge-disclosure-link">Internal Complaint Committee</a>

                    <a href="deans " class="bridge-disclosure-link">Academic Leadership - Dean of Schools</a>

                    <a href="schools-rgu " class="bridge-disclosure-link">Academic Leadership - Head of Departments</a>

                </div>

            </div>

        </div>

        <!--=========================================================
            ADMISSION & FEE
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Admission & Fee

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <div class="bridge-disclosure-text">

                        Prospectus (Including <a href="admission-programs-fees-structure"
                            class="bridge-disclosure-inline-link">

                            Fee Structure

                        </a> |
                        <a href="https://heyzine.com/flip-book/fd544660d3.html" class="bridge-disclosure-inline-link">

                            View Prospectus

                        </a>
                        )

                    </div>

                    <div class="bridge-disclosure-text">

                        Admission Process And Guidelines
                        (
                        <a href="programs" class="bridge-disclosure-inline-link">

                            View Programs

                        </a>

                        |

                        <a href="how-to-apply#" class="bridge-disclosure-inline-link">

                            How To Apply

                        </a>
                        )

                    </div>

                    <a class="bridge-disclosure-link">

                        Fee Refund Policy

                    </a>

                </div>

            </div>

        </div>

        <!--=========================================================
            INFORMATION CORNER
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Information Corner

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <div class="bridge-disclosure-text">

                        RTI : Details Of Central Public Information Officer (CPIO) And Appellate Authority (Wherever
                        Applicable)

                    </div>

                    <a class="bridge-disclosure-link">

                        Circulars And Notices

                    </a>

                    <a class="bridge-disclosure-link">

                        Announcements

                    </a>

                    <div class="bridge-disclosure-text">

                        Newsletters

                    </div>

                    <a href="media-corner" class="bridge-disclosure-link">

                        News, Recent Events & Achievements

                    </a>

                    <a href="jobs-vacancies" class="bridge-disclosure-link">

                        Job Openings

                    </a>

                    <div class="bridge-disclosure-text">

                        Reservation Roster (Wherever Applicable)

                    </div>

                    <div class="bridge-disclosure-text">

                        Study In India

                    </div>

                    <a href="https://heyzine.com/flip-book/adfd7889ba.html" class="bridge-disclosure-link">

                        Admission Procedure And Facilities Provided To International Students

                    </a>

                </div>

            </div>

        </div>

        <!--=========================================================
            INFRASTRUCTURE
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Infrastructure

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <a href="infrastructure" class="bridge-disclosure-link">

                        Picture Gallery

                    </a>

                    <a href="contact" class="bridge-disclosure-link">

                        Details With Phone Number, Official Email ID And Address, Location Map

                    </a>

                    <a href="contact" class="bridge-disclosure-link">

                        Telephone Directory

                    </a>

                </div>

            </div>

        </div>

        <!--=========================================================
            STUDENT LIFE
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Student Life

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <a href="games&sports" class="bridge-disclosure-link">

                        Sports Facilities

                    </a>

                    <a href="student-affairs" class="bridge-disclosure-link">

                        NCC/NSS - Details

                    </a>

                    <a href="hostel-life" class="bridge-disclosure-link">

                        Hostel Details

                    </a>

                    <a href="placements-introduction" class="bridge-disclosure-link">

                        Placement Cell And Its Activities

                    </a>

                    <a href="grievance" class="bridge-disclosure-link">

                        Details Of Student Grievance Redressal Committee (SGRC)

                    </a>

                    <a href="medical-facility" class="bridge-disclosure-link">

                        Health Facilities

                    </a>

                    <a href="internal-complaints-committee" class="bridge-disclosure-link">

                        Internal Complaint Committee

                    </a>

                    <a href="anti-ragging" class="bridge-disclosure-link">

                        Anti-Ragging Cell

                    </a>

                    <a href="schemes-differently-abled" class="bridge-disclosure-link">

                        Facilities For Differently-Abled (E.g., Barrier-Free Environment)

                    </a>

                </div>

            </div>

        </div>

        <!--=========================================================
            RESEARCH
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Research

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <a href="research-devlopment" class="bridge-disclosure-link">

                        Research And Development Cell (Including Research And Consultancy Projects, Foreign
                        Collaboration, Industry Collaborations)

                    </a>

                    <a href="research-devlopment" class="bridge-disclosure-link">

                        Incubation Centre / Start-Ups / Entrepreneurship Cell

                    </a>

                    <a href="research-devlopment" class="bridge-disclosure-link">

                        Central Facilities

                    </a>

                </div>

            </div>

        </div>

        <!--=========================================================
            ALUMNI
            ==========================================================-->

        <div class="bridge-disclosure-item">

            <div class="bridge-disclosure-header">

                <h3 class="bridge-disclosure-title">

                    Alumni

                </h3>

                <i class="bi bi-chevron-down bridge-disclosure-icon"></i>

            </div>

            <div class="bridge-disclosure-body">

                <div class="bridge-disclosure-content">

                    <a href="alumni-association" class="bridge-disclosure-link">

                        Alumni Association With Details

                    </a>

                </div>

            </div>

        </div>

    </div>

    <script>
        /*=========================================================
    BRIDGE DISCLOSURE ACCORDION
    =========================================================*/

        document.addEventListener("DOMContentLoaded", function() {

            const accordionItems = document.querySelectorAll(".bridge-disclosure-item");

            accordionItems.forEach((item) => {

                const header = item.querySelector(".bridge-disclosure-header");

                const body = item.querySelector(".bridge-disclosure-body");

                if (item.classList.contains("active")) {

                    body.style.maxHeight = body.scrollHeight + "px";

                }

                header.addEventListener("click", function() {

                    accordionItems.forEach((other) => {

                        if (other !== item) {

                            other.classList.remove("active");

                            other.querySelector(".bridge-disclosure-body").style.maxHeight =
                                null;

                        }

                    });

                    item.classList.toggle("active");

                    if (item.classList.contains("active")) {

                        body.style.maxHeight = body.scrollHeight + "px";

                    } else {

                        body.style.maxHeight = null;

                    }

                });

            });

        });
    </script>
@endsection
