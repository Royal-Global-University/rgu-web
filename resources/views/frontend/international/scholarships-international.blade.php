@extends('frontend/new-master')
@section('content')
        <style>
        /*=========================================================
SCHOLARSHIP INTRO
=========================================================*/

        .scholarship-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .scholarship-image {

            overflow: hidden;

            border-radius: 22px;

        }

        .scholarship-image img {

            width: 100%;

            display: block;

            transition: .5s;

        }

        .scholarship-image:hover img {

            transform: scale(1.04);

        }

        .scholarship-content {

            padding-left: 45px;

        }

        .scholarship-content h2 {

            font-family: "Playfair Display", serif;

            font-size: 54px;

            font-weight: 700;

            color: #23457d;

            line-height: 1.2;

            margin-bottom: 25px;

        }

        .scholarship-content p {

            color: #666;

            line-height: 2;

            font-size: 17px;

            margin: 0;

        }

        /*=========================================================
DOCUMENT SECTION
=========================================================*/

        .scholarship-dark-section {

            background: #eef3fb;

            padding: 90px 0;

        }

        .scholarship-content-block {

            margin-bottom: 55px;

        }

        .scholarship-content-block:last-child {

            margin-bottom: 0;

        }

        .scholarship-content-block h3 {

            font-family: "Playfair Display", serif;

            font-size: 42px;

            color: #23457d;

            margin-bottom: 22px;

            position: relative;

        }

        .scholarship-content-block h3::after {

            content: "";

            display: block;

            width: 80px;

            height: 3px;

            background: #e56a3b;

            margin-top: 12px;

            border-radius: 20px;

        }

        .scholarship-content-block p {

            color: #555;

            font-size: 16px;

            line-height: 2;

            margin-bottom: 24px;

        }

        .scholarship-content-block ol {

            margin: 0;

            padding-left: 26px;

        }

        .scholarship-content-block ol li {

            color: #555;

            line-height: 2;

            margin-bottom: 12px;

        }
    </style>

    <style>
        /*=========================================================
ELIGIBILITY TABLE
=========================================================*/

        .scholarship-table {

            width: 100%;

            margin: 25px 0;

            border-collapse: collapse;

            background: #fff;

            border: 1px solid #d9e2ef;

        }

        .scholarship-table thead {

            background: #dbe8fb;

        }

        .scholarship-table thead th {

            color: #23457d;

            font-size: 18px;

            font-weight: 700;

            text-align: center;

            padding: 18px;

            border: 1px solid #cddcf2;

        }

        .scholarship-table tbody td {

            border: 1px solid #d9e2ef;

            padding: 18px;

            color: #555;

            font-size: 15px;

            line-height: 1.8;

            vertical-align: top;

        }

        .scholarship-table tbody tr:first-child {

            background: #eef5ff;

        }

        .scholarship-table tbody tr:first-child td {

            color: #23457d;

            font-weight: 600;

        }

        .scholarship-table strong {

            color: #23457d;

        }

        /*=========================================================
TABLE RESPONSIVE
=========================================================*/

        .table-responsive {

            border-radius: 12px;

            overflow: hidden;

            box-shadow: 0 10px 30px rgba(0, 0, 0, .05);

        }

        /*=========================================================
ROYAL MERIT SECTION
=========================================================*/

        .royal-merit-section {

            padding: 90px 0;

            background: #eef3fb;

        }

        .royal-merit-content {

            max-width: 100%;

        }

        .royal-merit-content h2 {

            font-family: "Playfair Display", serif;

            font-size: 54px;

            color: #23457d;

            margin-bottom: 25px;

            position: relative;

        }

        .royal-merit-content h2::after {

            content: "";

            width: 80px;

            height: 3px;

            background: #e56a3b;

            display: block;

            margin-top: 15px;

            border-radius: 20px;

        }

        .royal-merit-content p {

            color: #555;

            line-height: 2;

            margin-bottom: 24px;

            font-size: 16px;

        }

        .royal-merit-intro {

            font-weight: 600;

            color: #23457d !important;

            margin-bottom: 35px !important;

        }

        /*=========================================================
TIMELINE
=========================================================*/

        .royal-merit-timeline {

            margin: 35px 0;

            padding-left: 24px;

        }

        .royal-merit-timeline li {

            color: #555;

            line-height: 2;

            margin-bottom: 18px;

        }
    </style>

    <style>
        /*=========================================================
CONTACT CARD
=========================================================*/

        .royal-merit-contact {

            margin-top: 70px;

            background: #ffffff;

            border: 1px solid #dbe4ef;

            border-radius: 18px;

            padding: 40px;

            box-shadow: 0 15px 40px rgba(0, 0, 0, .05);

        }

        .royal-merit-contact h3 {

            font-family: "Playfair Display", serif;

            font-size: 38px;

            color: #23457d;

            margin-bottom: 18px;

        }

        .royal-merit-divider {

            width: 100%;

            height: 1px;

            background: #dbe4ef;

            margin-bottom: 30px;

        }

        .royal-merit-contact-item {

            display: flex;

            align-items: flex-start;

            margin-bottom: 20px;

        }

        .royal-merit-contact-item:last-child {

            margin-bottom: 0;

        }

        .royal-merit-contact-item i {

            font-size: 22px;

            color: #e56a3b;

            margin-right: 18px;

            margin-top: 3px;

            min-width: 24px;

        }

        .royal-merit-contact-item span {

            color: #555;

            line-height: 1.9;

        }

        .royal-merit-contact-item a {

            color: #23457d;

            text-decoration: none;

            transition: .3s;

            line-height: 1.9;

        }

        .royal-merit-contact-item a:hover {

            color: #e56a3b;

        }

        /*=========================================================
COMMON SPACING
=========================================================*/

        .scholarship-content-block:last-child {

            margin-bottom: 0;

        }

        .scholarship-content-block p:last-child {

            margin-bottom: 0;

        }

        .royal-merit-content p:last-child {

            margin-bottom: 0;

        }

        .scholarship-content-block ol:last-child {

            margin-bottom: 0;

        }

        .royal-merit-timeline:last-child {

            margin-bottom: 0;

        }

        /*=========================================================
TABLET
=========================================================*/

        @media(max-width:991px) {

            .scholarship-section {

                padding: 70px 0;

            }

            .scholarship-dark-section {

                padding: 70px 0;

            }

            .royal-merit-section {

                padding: 70px 0;

            }

            .scholarship-content {

                padding-left: 0;

                margin-top: 40px;

            }

            .scholarship-content h2 {

                font-size: 42px;

            }

            .scholarship-content-block h3 {

                font-size: 34px;

            }

            .royal-merit-content h2 {

                font-size: 42px;

            }

            .royal-merit-contact {

                padding: 30px;

            }

        }

        /*=========================================================
MOBILE
=========================================================*/

        @media(max-width:767px) {

            .scholarship-section,

            .scholarship-dark-section,

            .royal-merit-section {

                padding: 55px 0;

            }

            .scholarship-content h2 {

                font-size: 32px;

            }

            .scholarship-content-block h3 {

                font-size: 28px;

            }

            .royal-merit-content h2 {

                font-size: 32px;

            }

            .scholarship-content p,

            .scholarship-content-block p,

            .royal-merit-content p,

            .scholarship-content-block ol li,

            .royal-merit-timeline li {

                font-size: 15px;

                line-height: 1.8;

            }

            .scholarship-table thead th {

                font-size: 15px;

                padding: 14px;

            }

            .scholarship-table tbody td {

                font-size: 14px;

                padding: 14px;

            }

            .royal-merit-contact {

                padding: 24px;

                margin-top: 50px;

            }

            .royal-merit-contact h3 {

                font-size: 28px;

            }

            .royal-merit-contact-item {

                align-items: flex-start;

            }

            .royal-merit-contact-item i {

                font-size: 18px;

                margin-right: 12px;

            }

        }
    </style>

        <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('new-web/assets/img/scholarship/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> Scholarship for International Students</h1>
            <div class="pg-hero-breadcrumb">
                International / Scholarship for International Students
            </div>
        </div>

    </section>

    <section class="scholarship-dark-section">

        <div class="container">

            <!--=====================================
        DOCUMENTS REQUIRED
        ======================================-->

            <div class="scholarship-content-block">

                <h3>

                    Documents Required

                </h3>

                <ol>

                    <li>

                        Final qualifying marksheet (12 marksheet or Graduation marksheet)

                    </li>

                    <li>

                        Visa / Citizenship Certificate

                    </li>

                </ol>

            </div>

            <!--=====================================
        ELIGIBILITY CRITERIA
        ======================================-->

            <div class="scholarship-content-block">

                <h3>

                    Eligibility Criteria

                </h3>

                <div class="table-responsive">

                    <table class="table scholarship-table">

                        <thead>

                            <tr>

                                <th>

                                    SCHOLARSHIP OFFERED

                                </th>

                                <th>

                                    PG PROGRAMMES

                                </th>

                                <th>

                                    UG PROGRAMMES

                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>

                                    <strong>

                                        NATURE OF SCHOLARSHIP (CATEGORY)

                                    </strong>

                                </td>

                                <td>

                                    <strong>

                                        ELIGIBILITY CRITERIA

                                    </strong>

                                </td>

                                <td></td>

                            </tr>

                            <tr>

                                <td>

                                    100% on annual fee, registration fee and admission fee, other applicable fee to be
                                    paid

                                </td>

                                <td>

                                    GRADUATION (ANY STREAM)

                                    <br>

                                    80% &amp; Above in aggregate

                                </td>

                                <td>

                                    10+2

                                    <br>

                                    80% &amp; Above in aggregate

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!--=====================================
        NOTES
        ======================================-->

            <div class="scholarship-content-block">

                <ol>

                    <li>

                        A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousand only)
                        as security deposit and Rs. 5,000.00 (Rupees Five Thousand only) as caution money deposit at the
                        time of admission.

                    </li>

                    <li>

                        Apart from fulfilling the above criteria, a student must also secure overall 60% marks in
                        Written Test (if any), Group Discussion (GD) if any and Personal Interview (PI) conducted by the
                        University at the time of admission.

                    </li>

                </ol>

                <p>

                    The scholarships will be awarded annually. For subsequent year/years the grant of scholarship to the
                    awardees will be governed by Continuation of Royal Merit - On Admission 100% Scholarship to
                    International Students (given below).

                </p>

                <p>

                    Any applications for Royal Merit - On Admission 100% Scholarship to International Students from
                    Under-graduate students and post-graduate students will not be accepted after 31st July and 31st
                    August, respectively, every academic year or as notified from time to time.

                </p>

            </div>

            <!--=====================================
DOCUMENTS REQUIRED
======================================-->

            <div class="scholarship-content-block">

                <h3>

                    Documents required

                </h3>

                <ol>

                    <li>

                        Final qualifying marksheet (12 marksheet or Graduation marksheet)

                    </li>

                    <li>

                        Visa / Citizenship Certificate

                    </li>

                </ol>

            </div>

            <!--=====================================
CONTINUATION OF ROYAL MERIT
======================================-->

            <div class="scholarship-content-block">

                <h3>

                    Continuation of Royal Merit

                </h3>

                <p>

                    On Admission 100% Scholarship to International Students on 2nd and subsequent years -

                </p>

            </div>

            <!--=====================================
ROYAL MERIT
======================================-->

            <div class="scholarship-content-block">

                <h3>

                    Royal Merit

                </h3>

                <p>

                    On Admission 100% Scholarship to International Students holders will be eligible for continuation of
                    scholarship in the subsequent year of the programme, subject to fulfilment of the following terms
                    and
                    conditions:

                </p>

                <ol>

                    <li>

                        To continue availing 100% scholarship, a student must secure/maintain a position amongst top 5%
                        of the
                        students in the merit list of their respective programme/course.

                    </li>

                    <li>

                        To continue availing scholarship, a student must clear all the papers in each semester and
                        should not
                        carry any back log in any semester, from the previous academic year.

                    </li>

                    <li>

                        To continue availing scholarship, a student must have an attendance of at least 90% in all the
                        subjects
                        in each semester from the previous academic year.

                    </li>

                </ol>

            </div>

            <!--=====================================
ROYAL MERIT DETAILS
======================================-->

            <div class="scholarship-content-block">

                <p>

                    A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousand only) as
                    security
                    deposit and Rs. 5000.00 (Rupees Five Thousand only) as caution money deposit at the time of
                    admission. If
                    the student continues qualifying for scholarship for all the years during the programme, the amount
                    of Rs.
                    55,000.00 (paid as security and caution deposit) will be refunded after the completion of his/her
                    respective
                    programme of study. The security money will not be refunded in case a student withdraws/drops out.

                </p>

                <p>

                    Students found guilty of involvement in any untoward incident or indiscipline (including ragging)
                    will be
                    disqualified for award of scholarship.

                </p>

                <p>

                    In case a student, availing Royal Merit - On Admission 100% Scholarship to International Students,
                    fails to
                    fulfil the condition for continuation of scholarship in the subsequent year/years, he/she will have
                    to pay
                    the full fee for subsequent year/years, as prescribed for other students. i.e., security deposit of
                    Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the fee to be
                    paid for
                    subsequent year/years.

                </p>

                <p>

                    In case a student, availing Royal Merit - On Admission 100% Scholarship to International Students,
                    wishes to
                    avail hostel/transportation facilities, he/she will have to pay the full hostel/transportation fees
                    as
                    prescribed for other students.

                </p>

                <p>

                    A student, once disqualified/suffers a break in scholarship, will not be eligible for further
                    scholarship.

                </p>

                <p>

                    Final decision of granting scholarship lies with the University Scholarship Committee and/or
                    Competent
                    Authority/s.

                </p>

            </div>

            <!--=========================================================
CONTACT
==========================================================-->

            <div class="royal-merit-contact">

                <h3>

                    Contact

                </h3>

                <div class="royal-merit-divider"></div>





                <div class="royal-merit-contact-item">

                    <i class="bi bi-person"></i>

                    <span>

                        Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International Affairs

                    </span>

                </div>





                <div class="royal-merit-contact-item">

                    <i class="bi bi-telephone"></i>

                    <a href="tel:+919864049818">

                        Ph. No: +91 9864049818

                    </a>

                </div>

                <div class="royal-merit-contact-item">

                    <i class="bi bi-envelope"></i>

                    <a href="mailto:gkanand@rgu.ac">

                        Email: gkanand@rgu.ac

                    </a>

                </div>

            </div>

        </div>

    </section>

@endsection
