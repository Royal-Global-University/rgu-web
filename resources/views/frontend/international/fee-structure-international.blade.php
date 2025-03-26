@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
    <div>
        <img src="assets/img/international-course-fees/fees.svg" alt="" />
    </div>

    <div style="margin-top: 40px"
        class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
        data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
        <div class="elementor-widget-container">
            <div class="prthalign">
                <h1 style="font-weight: 600" class="headd2 text-dark kd-title-ani kd-split-text">
                    For Academic Session 2025 - 2026
                </h1>
            </div>
        </div>
    </div>

    <section class="sptb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h3 class="fw-bold pt-4 pb-2 text-dark text-capitalize headd3">
                        A. Registration & Admission Fees (To Be Paid Once Only)
                    </h3>

                    <table class="table border table-responsive table-striped vertical-scroll">
                        <thead class="text-light para1" style="font-size: 14px">
                            <th class="text-light font-weight-bold">SL. NO.</th>
                            <th class="text-light font-weight-bold"></th>
                            <th class="text-light font-weight-bold">AMOUNT (Rs)</th>
                        </thead>
                        <tbody class="para1">
                            <tr>
                                <td>A.</td>
                                <td>Prospectus & Form</td>
                                <td>1000.00</td>
                            </tr>
                            <tr>
                                <td>B.</td>
                                <td>
                                    Registration (To be paid during the admission for all courses)
                                </td>
                                <td>10000.00</td>
                            </tr>
                            <tr>
                                <td>C.</td>
                                <td>Caution Money (Common for all streams) - Refundable</td>
                                <td>10000.00</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr />

                    <h3 class="fw-bold pt-4 pb-3 text-dark text-capitalize headd3">
                        B. Institutions /Schools /Programmes fee to be paid yearly/Semester
                        Payment for New Students 2025-26
                    </h3>

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Architecture (RSA)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Arch.</strong>
                                            <br />
                                            <a href="programs-B.Arch.html" class="text-primary">
                                                <a href="" class="text-primary"><span style="font-size: 16px">
                                                        Duration: 5 years | Admission Fee: 60000.00</span></a>
                                            </a>
                                        </p>
                                    </td>
                                    <td>170000.00</td>
                                    <td>86500.00</td>
                                    <td>
                                        <a href="programs-B.Arch.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Applied & Pure Sciences (RSAPS)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Physics</strong>
                                            <br />
                                            <a href="programs-M.Sc-Physics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc-Physics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Chemistry</strong>
                                            <br />
                                            <a href="programs-M.Sc-Chemistry.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc-Chemistry.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Mathematics</strong>
                                            <br />
                                            <a href="programs-M.Sc-Mathematics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc-Mathematics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Physics</strong>
                                            <br />
                                            <a href="programs-B.Sc-Physics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc-Physics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Chemistry</strong>
                                            <br />
                                            <a href="programs-B.Sc-Chemistry.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc-Chemistry.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Mathematics</strong>
                                            <br />
                                            <a href="programs-B.Sc-Mathematics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc-Mathematics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Physics</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in
                                                Chemistry</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in
                                                Mathematics</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Physics</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Chemistry</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Mathematics</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Business (RSB)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MBA - (Finance, Marketing, HRM,
                                                Operations
                                                Management, Entrepreneurship & Small Business Management,
                                                Business Analytics)</strong>
                                            <br />
                                            <a href="programs-MBA-Finance.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>300000.00</td>
                                    <td>152500.00</td>
                                    <td>
                                        <a href="programs-MBA-Finance.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BBA</strong>
                                            <br />
                                            <a href="programs-BBA.html" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>200000.00</td>
                                    <td>101500.00</td>
                                    <td>
                                        <a href="programs-BBA.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Business
                                                Administration</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>101500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Business
                                                Administration</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>101500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Behavioral & Allied Sciences (RSBAS)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MA - Psychology</strong>
                                            <br />
                                            <a href="programs-MA-Psychology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Psychology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MA - Clinical
                                                Psychology</strong>
                                            <br />
                                            <a href="programs-MA-Clinical Psychology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Clinical Psychology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Psychology</strong>
                                            <br />
                                            <a href="programs-BA-Psychology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BA-Psychology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Applied
                                                Psychology</strong>
                                            <br />
                                            <a href="programs.BA-Applied Psychology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.BA-Applied Psychology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Certificate in Psychology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Certificate in Applied
                                                Psychology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Psychology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Applied Psychology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Bio-Sciences (RSBSC)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Biotechnology</strong>
                                            <br />
                                            <a href="programs.M.Sc.Bio-Technology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.M.Sc.Bio-Technology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Microbiology</strong>
                                            <br />
                                            <a href="programs.M.Sc.Microbiology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.M.Sc.Microbiology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Food Technology</strong>
                                            <br />
                                            <a href="programs-M.Sc.Food-Technology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.Food-Technology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Biotechnology</strong>
                                            <br />
                                            <a href="programs-B.Sc.-Bio-Technology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.-Bio-Technology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Microbiology</strong>
                                            <br />
                                            <a href="programs-B.Sc.-Microbiology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.-Microbiology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Food Technology</strong>
                                            <br />
                                            <a href="programs-B.Sc.-Food-Technology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.-Food-Technology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Certificate in Biotechnology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Certificate in Microbiology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Diploma in Food Technology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Biotechnology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Microbiology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Food Technology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Commerce (RSC)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Com</strong>
                                            <br />
                                            <a href="programs-M.Com.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs-M.Com.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Com - (Day Shift)</strong>
                                            <br />
                                            <a href="programs-B.Com.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>143000.00</td>
                                    <td>73000.00</td>
                                    <td>
                                        <a href="programs-B.Com.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Com - (Morning
                                                Shift)</strong>
                                            <br />
                                            <a href="programs-B.Com(Morning shift).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>163000.00</td>
                                    <td>83000.00</td>
                                    <td>
                                        <a href="programs-B.Com(Morning shift).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Com - Finance with ICA /
                                                B.Com with ACCA /
                                                B.Com with CMA</strong>
                                            <br />
                                            <a href="programs-B.Com-Finance-with-ICA.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>140000.00</td>
                                    <td>71500.00</td>
                                    <td>
                                        <a href="programs-B.Com-Finance-with-ICA.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Certificate in Commerce (Morning
                                                Shift)</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>83000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Certificate in Commerce (Day
                                                Shift)</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>63000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Commerce (Morning
                                                Shift)</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>83000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Diploma in Commerce (Day
                                                Shift)</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>63000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Communications & Media (RSCOM)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MA - (J & MC)</strong>
                                            <br />
                                            <a href="programs-MA-J&MC.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-MA-J&MC.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - (J & MC)</strong>
                                            <br />
                                            <a href="programs-BA-J&MC.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>115000.00</td>
                                    <td>59000.00</td>
                                    <td>
                                        <a href="programs-BA-J&MC.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. (Animation and Visual
                                                Effects)</strong>
                                            <br />
                                            <a href="programs-M.Sc-Animation-&-Visual-Effects.html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc-Animation-&-Visual-Effects.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. - (Animation and Visual
                                                Effects)</strong>
                                            <br />
                                            <a href="programs-B.Sc-Animation-Visual-Effects.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc-Animation-Visual-Effects.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in J & Mc</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>59000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Animation and
                                                Visual
                                                Effects</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in J & Mc</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>59000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Animation and Visual
                                                Effects</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Design (RSD)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Bachelor in Interior Design
                                                (BID)</strong>
                                            <br />
                                            <a href="programs-BachelorInterior-Design(BID).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-BachelorInterior-Design(BID).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Bachelor in Interior Design
                                                (BID) (Lateral
                                                Entry)</strong>
                                            <br />
                                            <a href="programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry.html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 3 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Des (FD)</strong>
                                            <br />
                                            <a href="programs-B.Des-FD(Fashion-Design).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-B.Des-FD(Fashion-Design).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">B.Des (FD) (Lateral Entry)</strong>
                                            <br />
                                            <a href="programs-B.Des-FD(Fashion-Design).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-B.Des-FD(Fashion-Design).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Des - Communication
                                                Design</strong>
                                            <br />
                                            <a href="programs-Bachelor-of-Design-(Communication-Design).html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-Bachelor-of-Design-(Communication-Design).html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Des - Graphic Design</strong>
                                            <br />
                                            <a href="programs-Bachelor-of-Design-(Graphic-Design).html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-Bachelor-of-Design-(Graphic-Design).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Des - Product Design</strong>
                                            <br />
                                            <a href="programs-Bachelor-of-Design-(Product-Design).html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-Bachelor-of-Design-(Product-Design).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in Interior
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in Communication
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in Graphic
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in Product
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Interior
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Communication
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Graphic
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Product
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Environmental & Earth Sciences (RSEES)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Geography</strong>
                                            <br />
                                            <a href="programs-M.Sc.Geography.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.Geography.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MA Geography</strong>
                                            <br />
                                            <a href="programs-MA-Geography.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Geography.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. Geology</strong>
                                            <br />
                                            <a href="programs-M.Sc.Geology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.Geology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. Geoinformatics</strong>
                                            <br />
                                            <a href="programs-M.Sc-in-Geoinformatics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc-in-Geoinformatics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: B.Sc. /BA Geography</strong>
                                            <br />
                                            <a href="programs-B.Sc.Geography.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.Geography.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: B.Sc. Geology</strong>
                                            <br />
                                            <a href="programs-B.Sc.Geology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.Geology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in
                                                Geography</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in Geology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Diploma in Geography</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Diploma in Geology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Engineering & Technology (RSET)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Tech CSE in Artificial
                                                Intelligence</strong>
                                            <br />
                                            <a href="programs-M.Tech.CSE-in-Artifical-Intelligence.html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-M.Tech.CSE-in-Artifical-Intelligence.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Tech CSE in IOT</strong>
                                            <br />
                                            <a href="programs-M.Tech.CSE-in-Internet-of-Things.html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-M.Tech.CSE-in-Internet-of-Things.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Tech CE - (Water Resources
                                                Development &
                                                Management) WRDM</strong>
                                            <br />
                                            <a href="programs-M.Tech.CE-in-Water-Resources.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-M.Tech.CE-in-Water-Resources.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Tech CE - Structural
                                                Engineering</strong>
                                            <br />
                                            <a href="programs-M.Tech.CE in-Structural-Engineering.html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-M.Tech.CE in-Structural-Engineering.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Tech CE - CAD</strong>
                                            <br />
                                            <a href="programs-M.Tech. - CAD.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-M.Tech. - CAD.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech - CE</strong>
                                            <br />
                                            <a href="programs-B.Tech.(CE).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech.(CE).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech - CSE</strong>
                                            <br />
                                            <a href="programs-B.Tech.(CSE).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech.(CSE).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech - ME</strong>
                                            <br />
                                            <a href="programs-B.Tech.(ME).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech.(ME).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech - Artificial
                                                Intelligence-AI</strong>
                                            <br />
                                            <a href="programs-B.Tech.-Artifical-Intelligence-AI.html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech.-Artifical-Intelligence-AI.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech - Mechatronics</strong>
                                            <br />
                                            <a href="programs-B.Tech-Mechatronics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech-Mechatronics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech - (Lateral Entry) -
                                                CE/CSE/ME</strong>
                                            <br />
                                            <a href="programs-B.Tech.(Lateral Entry).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech.(Lateral Entry).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech in Electrical &
                                                Electronics
                                                Engineering</strong>
                                            <br />
                                            <a href="" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href="programs-B.Tech(Electrical_Electronics_Engineering).html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech. in Electronics and
                                                Communication
                                                Engineering</strong>
                                            <br />
                                            <a href="programs-B.Tech.(Lateral Entry).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href=""><button type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Tech for Working Professional
                                                (CE &
                                                CSE)</strong>
                                            <br />
                                            <a href="" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 3 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td>
                                        <a href=""><button type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Fine Arts (RSFA)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MFA</strong>
                                            <br />
                                            <a href="programs.Master-of-Fine-Arts(MFA).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.Master-of-Fine-Arts(MFA).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BFA</strong>
                                            <br />
                                            <a href="programs-Bachelor-of-Fine-Arts(BFA).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>75000.00</td>
                                    <td>39000.00</td>
                                    <td>
                                        <a href="programs-Bachelor-of-Fine-Arts(BFA).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Fine
                                                Arts</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>39000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Fine Arts</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>39000.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Fashion Design & Technology (RSFT)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Des (FD)</strong>
                                            <br />
                                            <a href="programs-B.Des-FD(Fashion-Design).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a href="programs-B.Des-FD(Fashion-Design).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in Fashion
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Fashion
                                                Design</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Humanities & Social Sciences (RSHSS)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MA Economics</strong>
                                            <br />
                                            <a href="programs-MA-Economics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Economics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: MA Sociology</strong>
                                            <br />
                                            <a href="programs-MA-Sociology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Sociology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: MA (Public
                                                Administration)</strong>
                                            <br />
                                            <a href="programs-MA-Public-Administration.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Public-Administration.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: MA (Political Science)</strong>
                                            <br />
                                            <a href="programs-MA-Political-Science.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-Political-Science.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: MA (History)</strong>
                                            <br />
                                            <a href="programs-MA-History.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA-History.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: MSW</strong>
                                            <br />
                                            <a href="programs-MSW.html" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MSW.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BSW</strong>
                                            <br />
                                            <a href="programs-BSW.html" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BSW.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Sociology</strong>
                                            <br />
                                            <a href="programs-BA-Sociology.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BA-Sociology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Economics</strong>
                                            <br />
                                            <a href="programs-BA-Economics.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BA-Economics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Public
                                                Administration</strong>
                                            <br />
                                            <a href="programs-BA-Public-Administration.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BA-Public-Administration.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Political Science</strong>
                                            <br />
                                            <a href="programs-BA-Political-Science.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BA-Political-Science.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - History</strong>
                                            <br />
                                            <a href="programs-BA-History.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-BA-History.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in Social
                                                Work</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in
                                                Sociology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in
                                                Economics</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>16.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in Public
                                                Administration</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in History</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>18.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in Political
                                                Science</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>19.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Social Work</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>20.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Sociology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>21.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Economics</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>22.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Public
                                                Administration</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>23.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in History</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>24.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Political
                                                Science</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Hotel Management (RSHM)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc./BA - Hotel
                                                Management</strong>
                                            <br />
                                            <a href="programs-BA-HotelManagement.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>105000.00</td>
                                    <td>54000.00</td>
                                    <td>
                                        <a href="programs-BA-HotelManagement.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - Culinary Arts</strong>
                                            <br />
                                            <a href="programs.BA-in-Culinary-Arts.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>105000.00</td>
                                    <td>54000.00</td>
                                    <td>
                                        <a href="programs.BA-in-Culinary-Arts.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. Hotel Management /
                                                MHM</strong>
                                            <br />
                                            <a href="programs-M.Sc.Hotel-Management.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.Hotel-Management.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Bachelor of Hotel Management -
                                                BHM</strong>
                                            <br />
                                            <a href="programs-Bachelor-of-Hotel-Management-(BHM).html"
                                                class="text-primary"><span style="font-size: 16px">
                                                    Duration: 4 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>105000.00</td>
                                    <td>54000.00</td>
                                    <td>
                                        <a href="programs-Bachelor-of-Hotel-Management-(BHM).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Certificate in Hotel
                                                Management</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td>
                                        <button type="button" disabled class="btn btn-secondary btn-sm custom-details-btn">
                                            Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Certificate in Culinary
                                                Arts</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td>
                                        <button type="button" disabled class="btn btn-secondary btn-sm custom-details-btn">
                                            Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Hotel
                                                Management</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td>
                                        <button type="button" disabled class="btn btn-secondary btn-sm custom-details-btn">
                                            Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Culinary
                                                Arts</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td>
                                        <button type="button" disabled class="btn btn-secondary btn-sm custom-details-btn">
                                            Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Information Technology (RSIT)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: BCA</strong>
                                            <br />
                                            <a href="programs-BCA.html" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 3/4 Yrs as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs-BCA.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: MCA</strong>
                                            <br />
                                            <a href="programs-MCA.html" class="text-primary"><span style="font-size: 16px">
                                                    Duration: 2 Yrs | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MCA.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc. (IT)</strong>
                                            <br />
                                            <a href="programs.B.Sc.(IT).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 Yrs as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.B.Sc.(IT).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. (IT)</strong>
                                            <br />
                                            <a href="programs-M.Sc. (IT).html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 Yrs | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc. (IT).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Certificate in Computer
                                                Application</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 Yr as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Certificate in Information
                                                Technology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 1 Yr as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Computer
                                                Application</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 Yrs as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Information
                                                Technology</strong>
                                            <br />
                                            <a class="text-dark"><span style="font-size: 16px">
                                                    Duration: 2 Yrs as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Languages (RSL)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: MA - English</strong>
                                            <br />
                                            <a href="programs-MA - English.html" class="text-primary"><span
                                                    style="font-size: 16px">
                                                    Duration: 2 years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-MA - English.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: BA - English</strong>
                                            <br />
                                            <a href="programs.BA - English.html" class="text-black"><span
                                                    style="font-size: 16px">
                                                    Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.BA - English.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in English</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">
                                                    Duration: 1 year as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Diploma in English</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">
                                                    Duration: 2 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Law & Administration (RSLA)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">LLM - Day Shift</strong>
                                            <br />
                                            <a href="programs-LLM Day Shift.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 1 year | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>130000.00</td>
                                    <td>65000.00</td>
                                    <td>
                                        <a href="programs-LLM Day Shift.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">LLM - Morning Shift</strong>
                                            <br />
                                            <a href="programs-LLM Morning Shift.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 1 year | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>150000.00</td>
                                    <td>75000.00</td>
                                    <td>
                                        <a href="programs-LLM Morning Shift.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">BA/BBA - LLB (Hons)</strong>
                                            <br />
                                            <a href="programs-BBA.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 5 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>140000.00</td>
                                    <td>71500.00</td>
                                    <td>
                                        <a href="programs-BBA.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1e3a8a" class="#">LLB - (Hons.)</strong>
                                            <br />
                                            <a href="programs.LLB - (Hons.).html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>140000.00</td>
                                    <td>71500.00</td>
                                    <td>
                                        <a href="programs.LLB - (Hons.).html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Library & Information Sciences (RSLIS)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Master of Library & Information
                                                Sciences (MLISc)</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 2 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF LIFE SCIENCES (RSLSC)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. Botany</strong>
                                            <br />
                                            <a href="programs-M.Sc.Botany.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.Botany.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. Zoology</strong>
                                            <br />
                                            <a href="programs-M.Sc.Zoology.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.Zoology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. Forensic Science</strong>
                                            <br />
                                            <a href="programs-M.Sc.ForensicScience.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.ForensicScience.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: M.Sc. Forestry</strong>
                                            <br />
                                            <a href="programs-M.Sc.-Forestry.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-M.Sc.-Forestry.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc. Botany</strong>
                                            <br />
                                            <a href="programs-B.Sc.Botany.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.Botany.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc. Zoology</strong>
                                            <br />
                                            <a href="programs-B.Sc.Zoology.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.Zoology.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc. Forensic Science</strong>
                                            <br />
                                            <a href="programs-B.Sc.ForensicScience.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.ForensicScience.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc. Forestry</strong>
                                            <br />
                                            <a href="programs-B.Sc.-Forestry.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.-Forestry.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Botany</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 1 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Zoology</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 1 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in Forensic
                                                Science</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 1 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Certificate in
                                                Forestry</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 1 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Botany</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Zoology</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Forensic
                                                Science</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Diploma in Forestry</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF MEDICAL & ALLIED SCIENCES (RSMAS)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Bachelor of Physiotherapy -
                                                BPT</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 4.6 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>120000.00</td>
                                    <td>61500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Bachelor of Physiotherapy - BPT
                                                Lateral
                                                Entry</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3.6 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>120000.00</td>
                                    <td>61500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Masters in Physiotherapy -
                                                MPT</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 2 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. in Nutrition and
                                                Dietetics</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3/4 Yrs as per
                                                    NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M.Sc. in Nutrition and
                                                Dietetics</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 2 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: M. Optometry</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 2 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B. Optometry</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 4 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B. Optometry - Lateral
                                                Entry</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: B.Sc. in Medical Laboratory
                                                Technology-
                                                BMLT</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3 Yrs+1 Yr
                                                    Internship | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: B.Sc. in Medical Laboratory
                                                Technology- BMLT
                                                Lateral Entry</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 2 Yrs+1 Yr
                                                    Internship | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: M.Sc. in Medical Laboratory
                                                Technology-
                                                MMLT</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 2 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: B.Sc. in Dialysis Tech</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3/4 years as
                                                    per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: B.Sc. in Operation Theatre
                                                Technology</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3/4 years as
                                                    per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: B.Sc. in Radiography & Advance
                                                Imaging
                                                Technology</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3/4 years as
                                                    per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: B.Sc. in Emergency & Critical
                                                Care</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3/4 years as
                                                    per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: B.Sc. in CSSD (Central Sterile
                                                Supply
                                                Deptt.)</strong>
                                            <br />
                                            <a href="programs.Master of Library & Information Sciences.html"
                                                class="text-primary"><span style="font-size: 16px">Duration: 3 years |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a href="programs.Master of Library & Information Sciences.html"><button
                                                type="button" class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in
                                                Physiotherapy</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>61500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Diploma in Nutrition and
                                                Dietetics</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Optometry</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Medical Laboratory
                                                Technology</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Diploma in Dialysis
                                                Technology</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Diploma in Operation Theatre
                                                Technology</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Diploma in Radiography &
                                                Advance Imaging
                                                Technology</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Diploma in Emergency & Critical
                                                Care</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 2 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF NURSING(RSN)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc. Nursing</strong>
                                            <br />
                                            <a href="programs-B.Sc.Nursing.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>200000.00</td>
                                    <td>101500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.Nursing.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: B.Sc. Nursing - Post
                                                Basic</strong>
                                            <br />
                                            <a href="programsB.Sc-Post-Basic.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>160000.00</td>
                                    <td>81500.00</td>
                                    <td>
                                        <a href="programsB.Sc-Post-Basic.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: General Nursing &
                                                Midwifery</strong>
                                            <br />
                                            <a href="programs-General_Nursing_Midwifery.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3.5 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>150000.00</td>
                                    <td>76500.00</td>
                                    <td>
                                        <a href="programs-General_Nursing_Midwifery.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: M.Sc. Nursing (Medical Surgical
                                                Nursing/OBE
                                                Nursing/Child Health Nursing/Mental Health
                                                Nursing/Community Health Nursing)</strong>
                                            <br />
                                            <a href="programs-M.Sc-Nursing-OBE-Nursing.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>160000.00</td>
                                    <td>81500.00</td>
                                    <td>
                                        <a href="programs-M.Sc-Nursing-OBE-Nursing.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF PHARMACY (RSP)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Pharm.</strong>
                                            <br />
                                            <a href="programs-B.Pharm.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>173000.00</td>
                                    <td>88000.00</td>
                                    <td>
                                        <a href="programs-B.Pharm.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Pharm. Lateral Entry</strong>
                                            <br />
                                            <a href="programs-B.Pharm.Lateral_Entry.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>173000.00</td>
                                    <td>88000.00</td>
                                    <td>
                                        <a href="programs-B.Pharm.Lateral_Entry.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: D.Pharm</strong>
                                            <br />
                                            <a href="programs-D.Pharm.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>150000.00</td>
                                    <td>76500.00</td>
                                    <td>
                                        <a href="programs-D.Pharm.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: M.Pharm -Pharmaceutical
                                                Chemistry</strong>
                                            <br />
                                            <a href="programs-M.Pharm.Pharmaceutical.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>145000.00</td>
                                    <td>74500.00</td>
                                    <td>
                                        <a href="programs-M.Pharm.Pharmaceutical.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: M.Pharm -
                                                Pharmaceutics</strong>
                                            <br />
                                            <a href="programs-M.Pharm.Pharmaceutics.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>145000.00</td>
                                    <td>74500.00</td>
                                    <td>
                                        <a href="programs-M.Pharm.Pharmaceutics.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: M.Pharm -Pharmacognosy</strong>
                                            <br />
                                            <a href="programs-M.Pharm-Pharmacognosy.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>145000.00</td>
                                    <td>74500.00</td>
                                    <td>
                                        <a href="programs-M.Pharm-Pharmacognosy.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF TRAVEL & TOURISM MANAGEMENT(RSTTM)</th>
                        </div>

                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: B.Sc./BA Travel & Tourism
                                                Management</strong>
                                            <br />
                                            <a href="programs-B.Sc.BA-Travel.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 3/4 years as per NEP | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-B.Sc.BA-Travel.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a" class="#">Course: Master of Travel & Tourism
                                                Management -
                                                MTTM</strong>
                                            <br />
                                            <a href="programs-Master-Travel&Tourism.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-Master-Travel&Tourism.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c" class="#">Course: Bachelor of Travel & Tourism
                                                Management -
                                                BTTM</strong>
                                            <br />
                                            <a href="programs-Bachelor-Travel.html" class="text-primary"><span
                                                    style="font-size: 16px">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a href="programs-Bachelor-Travel.html"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539" class="#">Course: Certificate in Travel & Tourism
                                                Management</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 1 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Course: Diploma in Travel & Tourism
                                                Management</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Duration: 1 years as per NEP
                                                    | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="
                    background-color: #c7daf9;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                  " class="text-dark fw-bold para1 p-2">
                            <th>PH.D.</th>
                        </div>
                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">COURSES</th>
                                <th class="text-light font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Ph.D. (Full Time/Part Time)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>125000.00</td>
                                    <td>64500.00</td>
                                    <td>
                                        <a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">
                                                Details
                                            </button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <h3 class="headd3 p-2" style="
                    color: #343a40;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                    padding-bottom: 10px;
                  ">
                            C.) HOSTEL FEES 2025-26(FOR OLD & NEW STUDENTS)
                        </h3>
                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">AMOUNT(RS.)</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>A) Caution Money (Common for all streams) - Refundable</td>
                                    <td>10000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">HOSTEL FEE</th>
                                <th class="text-light font-weight-bold">YLY PAY(RS.)</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 2 Seater(Suit)(Heyansh
                                                House -
                                                Boys)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>240000.00</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 2
                                                Seater(Premium)(Heyansh House - Boys,
                                                Samaya House - Girls)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>210000.00</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 2
                                                Seater(Premium)(Aditya House - Boys,
                                                Harsha House - Girls)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>210000.00</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 2 Seater(Heyansh House
                                                - Boys)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>192000.00</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 2 Seater(Aditya House
                                                - Boys, Harsha
                                                House - Girls)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>192000.00</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 3 Seater(Heyansh House
                                                - Boys, Samaya
                                                House - Girls, Aditya House - Boys, Harsha House -
                                                Girls)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 4 Seater(Samaya House
                                                - Girls, Aditya
                                                House - Boys, Harsha House - Girls)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>132000.00</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - 5 Seater(Heyansh House
                                                - Boys)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>108000.00</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - Dormitory(Heyansh
                                                House - Boys)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">*** Hostel Fee - Dormitory(Aditya House
                                                - Boys, Harsha
                                                House - Girls)</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <h3 class="headd3 p-2" style="
                    color: #343a40;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                    padding-bottom: 10px;
                  ">
                            D.) TRANSPORTATION FEES 2025-26(FOR OLD & NEW STUDENTS)
                        </h3>
                        <table class="table border table-responsive table-striped vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px">
                                <th class="text-light font-weight-bold">SL. NO.</th>
                                <th class="text-light font-weight-bold">TRANSPORTATION FEE</th>
                                <th class="text-light font-weight-bold">YLY PAY(Rs.)</th>
                                <th class="text-light font-weight-bold">-</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332" class="#">Transportation Fee</strong>
                                            <br />
                                            <a class="text-black"><span style="font-size: 16px">(Admission Fee -
                                                    1000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>65000.00</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ----- new ----- -->

                    <hr />
                    <td>
                        <a target="_blank" href="https://heyzine.com/flip-book/3fa20e1aae.html"><button type="button"
                                class="btn btn-primary btn-lg custom-details-btn">
                                Fee Structure 2025-26
                            </button></a>
                    </td>
                    <h3 class="headd3 p-2" style="
                  color: #343a40;
                  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                  margin-top: 20px;
                  padding-bottom: 10px;
                ">
                        Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International
                        Affairs
                    </h3>
                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-lg" style="border-radius: 10px">
                                <div class="card-body text-center fw-bold text-dark">
                                    <i class="fa-solid fa-phone fa-beat me-2" style="color: #007bff"></i>+91 9864049818
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-lg" style="border-radius: 10px">
                                <div class="card-body text-center fw-bold text-dark">
                                    <i class="fa-solid fa-envelope fa-beat me-2" style="color: #007bff"></i>gkanand@rgu.ac
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div>
                        <h2 class="headd3 text-center fw-bold" style="
                    color: #343a40;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                    padding-bottom: 10px;
                  ">
                            NOTE
                        </h2>
                        <h5 class="text-center text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px">
                            Clinical Posting Charges of Rs.5000/- Per Semester as applicable
                            will be charged additional paid by the student over & above the
                            prescribed semester fee.
                        </h5>
                    </div>
                </div>
            </div>
            <hr />
        </div>
    </section>
    <!--End About-->
</div><!-- #page -->
@endsection
