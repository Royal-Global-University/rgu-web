@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
     <!-- header image  -->
     <div style="padding-top: 90px; position: relative;">
        <img src="mobile-assets/admission-fee-and-programmee/mob-admission-fee.png" alt="">
    </div>
    <!-- header image  -->


    <!-- heading  -->
    <div style="margin-top: 40px;"
        class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
        data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
        <div class="elementor-widget-container">
            <div class="prthalign">

                <h1 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">
                    For Academic Session 2025 - 2026</h1>
            </div>
        </div>
    </div>
    <!-- heading  -->

            <!-- table  -->
    <section class="sptb bg-white">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <h3 class="fw-bold pt-4 pb-2 text-dark text-capitalize headd3">A. Registration & Admission Fees
                        (To Be Paid Once Only)</h3>

                        <div class="table-responsive">
                    <table class="table border table-responsive table-striped  vertical-scroll">

                        <thead class="text-light  para1" style="font-size: 14px;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold"></th>
                            <th class="text-light  font-weight-bold">AMOUNT (Rs)</th>
                        </thead>
                        <tbody class="para1">
                            <tr>
                                <td>A.</td>
                                <td>Prospectus & Form</td>
                                <td>1000.00</td>
                            </tr>
                            <tr>
                                <td>B.</td>
                                <td>Registration (To be paid during the admission for all courses)</td>
                                <td>10000.00</td>
                            </tr>
                            <tr>
                                <td>C.</td>
                                <td>Caution Money (Common for all streams) - Refundable</td>
                                <td>10000.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <hr>

                    <h3 class="fw-bold pt-4 pb-3 text-dark text-capitalize headd3">B. Institutions /Schools
                        /Programmes fee to be paid yearly/Semester Payment for New Students 2025-26
                    </h3>

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Architecture (RSA)</th>
                        </div>

                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Arch.</strong>
                                            <br>
                                            <a href="{{route('programs-barch')}}" class="text-primary"> <span
                                                    style="font-size: 16px;"> Duration: 5 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>170000.00</td>
                                    <td>86500.00</td>
                                    <td><a href="{{route('programs-barch')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Applied & Pure Sciences (RSAPS)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light para1" style="font-size: 14px;">
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
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc. Physics</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Physics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Physics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                Chemistry</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Chemistry')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Chemistry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                Mathematics</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Mathematics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Mathematics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc. Physics</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-physics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-physics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                Chemistry</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-chemistry')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-chemistry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                Mathematics</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-mathematics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-mathematics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Physics</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Chemistry</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Mathematics</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Physics</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Chemistry</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Mathematics</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Business (RSB)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MBA - (Finance,
                                                Marketing, HRM, Operations Management, Entrepreneurship & Small
                                                Business Management, Business Analytics)</strong>
                                            <br>
                                            <a href="{{route('programs-MBA-Finance')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>300000.00</td>
                                    <td>152500.00</td>
                                    <td><a href="{{route('programs-MBA-Finance')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BBA</strong>
                                            <br>
                                            <a href="{{route('programs-BBA')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>200000.00</td>
                                    <td>101500.00</td>
                                    <td><a href="{{route('programs-BBA')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Business Administration</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>101500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Business
                                                Administration</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>101500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Behavioral & Allied Sciences (RSBAS)</th>
                        </div>

                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MA -
                                                Psychology</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Psychology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Psychology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MA - Clinical
                                                Psychology</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Clinical-Psychology')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Clinical-Psychology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA -
                                                Psychology</strong>
                                            <br>
                                            <a href="{{route('programs-BA-Psychology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-Psychology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - Applied
                                                Psychology</strong>
                                            <br>
                                            <a href="{{route('programs-BA-Applied-Psychology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-Applied-Psychology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Certificate in
                                                Psychology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Certificate in Applied
                                                Psychology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in Psychology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in Applied
                                                Psychology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Bio-Sciences (RSBSC)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                Biotechnology</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Bio-Technology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Bio-Technology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                Microbiology</strong>
                                            <br>
                                            <a href="{{route('programs-Msc-Microbiology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-Msc-Microbiology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc. Food
                                                Technology</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Food-Technology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Food-Technology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                Biotechnology</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-bio-technology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-bio-technology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                Microbiology</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-microbiology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-microbiology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc. Food
                                                Technology</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-food-technology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-food-technology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Certificate in
                                                Biotechnology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Certificate in
                                                Microbiology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Diploma in Food
                                                Technology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in
                                                Biotechnology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in
                                                Microbiology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in Food
                                                Technology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Commerce (RSC)</th>
                        </div>

                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Com</strong>
                                            <br>
                                            <a href="{{route('programs-MCom')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-MCom')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Com - (Day
                                                Shift)</strong>
                                            <br>
                                            <a href="{{route('programs-bcom')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>143000.00</td>
                                    <td>73000.00</td>
                                    <td><a href="{{route('programs-bcom')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Com - (Morning
                                                Shift)</strong>
                                            <br>
                                            <a href="{{route('programs-bcom-morning-shift')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>163000.00</td>
                                    <td>83000.00</td>
                                    <td><a href="{{route('programs-bcom-morning-shift')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Com - Finance with
                                                ICA / B.Com with ACCA / B.Com with CMA</strong>
                                            <br>
                                            <a href="{{route('programs-bcom-finance-with-ica')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3/4
                                                    years as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>140000.00</td>
                                    <td>71500.00</td>
                                    <td><a href="{{route('programs-bcom-finance-with-ica')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Certificate in Commerce
                                                (Morning Shift)</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>83000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Certificate in Commerce (Day
                                                Shift)</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>63000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in Commerce (Morning
                                                Shift)</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>83000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Diploma in Commerce (Day
                                                Shift)</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>63000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Communications & Media (RSCOM)</th>
                        </div>

                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MA - (J & MC)</strong>
                                            <br>
                                            <a href="{{route('programs-MA-J&MC')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-MA-J&MC')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - (J & MC)</strong>
                                            <br>
                                            <a href="{{route('programs-BA-J&MC')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>115000.00</td>
                                    <td>59000.00</td>
                                    <td><a href="{{route('programs-BA-J&MC')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc. (Animation and
                                                Visual Effects)</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Animation-&-Visual-Effects')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Animation-&-Visual-Effects')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc. - (Animation and
                                                Visual Effects)</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-animation-visual-effects')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3/4
                                                    years as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-animation-visual-effects')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in J &
                                                Mc</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>59000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Animation and Visual Effects</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in J &
                                                Mc</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>59000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Animation
                                                and Visual Effects</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-----</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Design (RSD)</th>
                        </div>

                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Bachelor in Interior
                                                Design (BID)</strong>
                                            <br>
                                            <a href="{{route('programs-BachelorInterior-DesignBID')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-BachelorInterior-DesignBID')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Bachelor in Interior
                                                Design (BID) (Lateral Entry)</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Interior-Design-BID-Lateral-Entry')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Interior-Design-BID-Lateral-Entry')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Des (FD)</strong>
                                            <br>
                                            <a href="{{route('programs-b-des-fd-fashion-design')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-b-des-fd-fashion-design')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">B.Des (FD) (Lateral
                                                Entry)</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Des - Communication
                                                Design</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Design-Communication-Design')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Design-Communication-Design')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Des - Graphic
                                                Design</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Design-Graphic-Design')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Design-Graphic-Design')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Des - Product
                                                Design</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Design-Product-Design')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Design-Product-Design')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                Interior Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                Communication Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in Graphic
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in Product
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Interior
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Communication Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Graphic
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Product
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Environmental & Earth Sciences (RSEES)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                Geography</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-geography')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-geography')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MA Geography</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Geography')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Geography')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc. Geology</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Geology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Geology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc.
                                                Geoinformatics</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-in-Geoinformatics')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-in-Geoinformatics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: B.Sc. /BA
                                                Geography</strong>
                                            <br>
                                            <a href="{{route('programs-BSc-Geography')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BSc-Geography')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: B.Sc. Geology</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-geology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-geology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                Geography</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                Geology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Diploma in
                                                Geography</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Diploma in
                                                Geology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Engineering & Technology (RSET)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Tech CSE in
                                                Artificial Intelligence</strong>
                                            <br>
                                            <a href="{{route('programs-MTech-CSE-in-Artifical-Intelligence')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-MTech-CSE-in-Artifical-Intelligence')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Tech CSE in
                                                IOT</strong>
                                            <br>
                                            <a href="{{route('programs-MTech-CSE-in-Internet-of-Things')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-MTech-CSE-in-Internet-of-Things')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Tech CE - (Water
                                                Resources Development & Management) WRDM</strong>
                                            <br>
                                            <a href="{{route('programs-MTech-CE-in-Water-Resources')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-MTech-CE-in-Water-Resources')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Tech CE - Structural
                                                Engineering</strong>
                                            <br>
                                            <a href="{{route('programs-MTech-CE-in-Structural-Engineering')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-MTech-CE-in-Structural-Engineering')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Tech CE -
                                                CAD</strong>
                                            <br>
                                            <a href="{{route('programs-MTech-CAD')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-MTech-CAD')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech - CE</strong>
                                            <br>
                                            <a href="{{route('programs-b-tech-ce')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-b-tech-ce')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech - CSE</strong>
                                            <br>
                                            <a href="{{route('programs-b-tech-cse')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-b-tech-cse')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech - ME</strong>
                                            <br>
                                            <a href="{{route('programs-b-tech-me')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-b-tech-me')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech - Artificial
                                                Intelligence-AI</strong>
                                            <br>
                                            <a href="{{route('programs-b-tech-artifical-intelligence-ai')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-b-tech-artifical-intelligence-ai')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech -
                                                Mechatronics</strong>
                                            <br>
                                            <a href="{{route('programs-b-tech-mechatronics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-b-tech-mechatronics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech - (Lateral
                                                Entry) - CE/CSE/ME</strong>
                                            <br>
                                            <a href="{{route('programs-b-tech-lateral-entry')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-b-tech-lateral-entry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech in Electrical &
                                                Electronics Engineering</strong>
                                            <br>
                                            <a href="{{route('programs-B-TechElectrical-Electronics-Engineering')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-B-TechElectrical-Electronics-Engineering')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech. in Electronics
                                                and Communication Engineering</strong>
                                            <br>
                                            <a href="{{route('programs-B-Tech-Electronics-Communication-Engineering')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-B-Tech-Electronics-Communication-Engineering')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Tech for Working
                                                Professional (CE & CSE)</strong>
                                            <br>
                                            <a href="{{route('programs-BTechWorking-Professional-CE-CSE')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                    <td>91500.00</td>
                                    <td><a href="{{route('programs-BTechWorking-Professional-CE-CSE')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Fine Arts (RSFA)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MFA</strong>
                                            <br>
                                            <a href="{{route('programs-Master-of-Fine-Arts-MFA')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-Master-of-Fine-Arts-MFA')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BFA</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Fine-Arts-BFA')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>75000.00</td>
                                    <td>39000.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Fine-Arts-BFA')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in Fine
                                                Arts</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>39000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Fine
                                                Arts</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>39000.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Fashion Design & Technology (RSFT)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Des (FD)</strong>
                                            <br>
                                            <a href="{{route('programs-b-des-fd-fashion-design')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>110000.00</td>
                                    <td>56500.00</td>
                                    <td><a href="{{route('programs-b-des-fd-fashion-design')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in Fashion
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Fashion
                                                Design</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>56500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Humanities & Social Sciences (RSHSS)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MA Economics</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Economics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Economics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: MA Sociology</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Sociology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Sociology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: MA (Public
                                                Administration)</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Public-Administration')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Public-Administration')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: MA (Political
                                                Science)</strong>
                                            <br>
                                            <a href="{{route('programs-MA-Political-Science')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-Political-Science')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: MA (History)</strong>
                                            <br>
                                            <a href="{{route('programs-MA-History')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-History')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: MSW</strong>
                                            <br>
                                            <a href="{{route('programs-MSW')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSW')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BSW</strong>
                                            <br>
                                            <a href="{{route('programs-BSW')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BSW')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA -
                                                Sociology</strong>
                                            <br>
                                            <a href="{{route('programs-BA-Sociology')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-Sociology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA -
                                                Economics</strong>
                                            <br>
                                            <a href="{{route('programs-BA-Economics')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-Economics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - Public
                                                Administration</strong>
                                            <br>
                                            <a href="{{route('programs-BA-Public-Administration')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 3/4
                                                    years as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-Public-Administration')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - Political
                                                Science</strong>
                                            <br>
                                            <a href="{{route('programs-BA-Political-Science')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-Political-Science')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - History</strong>
                                            <br>
                                            <a href="{{route('programs-BA-History')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-History')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in Social
                                                Work</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                Sociology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                Economics</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>16.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in Public
                                                Administration</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>17.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                History</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>18.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                Political Science</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>19.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Social
                                                Work</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>20.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                Sociology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>21.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                Economics</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>22.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Public
                                                Administration</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>23.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                History</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>24.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Political
                                                Science</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Hotel Management (RSHM)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc./BA - Hotel
                                                Management</strong>
                                            <br>
                                            <a href="{{route('programs-BA-HotelManagement')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>105000.00</td>
                                    <td>54000.00</td>
                                    <td><a href="{{route('programs-BA-HotelManagement')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - Culinary
                                                Arts</strong>
                                            <br>
                                            <a href="{{route('programs-BA-in-Culinary-Arts')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>105000.00</td>
                                    <td>54000.00</td>
                                    <td><a href="{{route('programs-BA-in-Culinary-Arts')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc. Hotel Management
                                                / MHM</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Hotel-Management')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-MSc-Hotel-Management')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Bachelor of Hotel
                                                Management - BHM</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Hotel-Management-BHM')}}"
                                                class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>105000.00</td>
                                    <td>54000.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Hotel-Management-BHM')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Certificate in Hotel
                                                Management</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td><a><button type="button" disabled
                                            class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                Culinary Arts</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td><a><button type="button" disabled
                                            class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Hotel
                                                Management</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td><a><button type="button" disabled
                                            class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Culinary
                                                Arts</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>54000.00</td>
                                    <td><a><button type="button" disabled
                                            class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Information Technology (RSIT)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: BCA</strong>
                                            <br>
                                            <a href="{{route('programs-BCA')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 Yrs as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-BCA')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: MCA</strong>
                                            <br>
                                            <a href="{{route('programs-MCA')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 Yrs | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MCA')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc. (IT)</strong>
                                            <br>
                                            <a href="{{route('programs-BSc-IT')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 Yrs as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-BSc-IT')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc. (IT)</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-IT')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 Yrs | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-IT')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Certificate in
                                                Computer Application</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 Yr as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Certificate in
                                                Information Technology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 Yr as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Computer
                                                Application</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 Yrs as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Information
                                                Technology</strong>
                                            <br>
                                            <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 Yrs as
                                                    per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Languages (RSL)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: MA - English</strong>
                                            <br>
                                            <a href="{{route('programs-MA-English')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MA-English')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: BA - English</strong>
                                            <br>
                                            <a href="{{route('programs-BA-English')}}" class="text-primary"><span
                                                    style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-BA-English')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                English</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;"> Duration: 1 year
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Diploma in
                                                English</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;"> Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Law & Administration (RSLA)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">LLM - Day Shift</strong>
                                            <br>
                                            <a href="{{route('programs-LLM-Day-Shift')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 1 year | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>130000.00</td>
                                    <td>65000.00</td>
                                    <td><a href="{{route('programs-LLM-Day-Shift')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">LLM - Morning Shift</strong>
                                            <br>
                                            <a href="{{route('programs-LLM-Morning-Shift')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 1 year | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>150000.00</td>
                                    <td>75000.00</td>
                                    <td><a href="{{route('programs-LLM-Morning-Shift')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">BA/BBA - LLB (Hons)</strong>
                                            <br>
                                            <a href="{{route('program-ba-bba-llb-hons')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 5 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>140000.00</td>
                                    <td>71500.00</td>
                                    <td><a href="{{route('program-ba-bba-llb-hons')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1e3a8a;" class="#">LLB - (Hons.)</strong>
                                            <br>
                                            <a href="{{route('program-ba-llb-hons')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>140000.00</td>
                                    <td>71500.00</td>
                                    <td><a href="{{route('program-ba-llb-hons')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>Royal School of Library & Information Sciences (RSLIS)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Master of Library &
                                                Information Sciences (MLISc)</strong>
                                            <br>
                                            <a href="{{route('programs-Master-of-Library&Information-Sciences')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-Master-of-Library&Information-Sciences')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF LIFE SCIENCES (RSLSC)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc. Botany</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Botany')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Botany')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc. Zoology</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Zoology')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Zoology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc. Forensic
                                                Science</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-ForensicScience')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-ForensicScience')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: M.Sc.
                                                Forestry</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Forestry')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Forestry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc. Botany</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-botany')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-botany')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc. Zoology</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-zoology')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-zoology')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc. Forensic
                                                Science</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-forensicScience')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-forensicScience')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc.
                                                Forestry</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-forestry')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-forestry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Botany</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Zoology</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Forensic Science</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                Forestry</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Botany</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Zoology</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in Forensic
                                                Science</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                Forestry</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF MEDICAL & ALLIED SCIENCES (RSMAS)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Bachelor of
                                                Physiotherapy - BPT</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-of-Physiotherapy-BPT')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 4.6
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>120000.00</td>
                                    <td>61500.00</td>
                                    <td><a href="{{route('programs-Bachelor-of-Physiotherapy-BPT')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Bachelor of
                                                Physiotherapy - BPT Lateral Entry</strong>
                                            <br>
                                            <a href="{{route('programs-BachelorofPhysiotherapy')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 3.6
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>120000.00</td>
                                    <td>61500.00</td>
                                    <td><a href="{{route('programs-BachelorofPhysiotherapy')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Masters in
                                                Physiotherapy - MPT</strong>
                                            <br>
                                            <a href="{{route('programs-MasterofPhysiotherapyMPT')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-MasterofPhysiotherapyMPT')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc. in Nutrition and
                                                Dietetics</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-nutrition&dietetics')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 3/4
                                                    Yrs as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-nutrition&dietetics')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M.Sc. in Nutrition and
                                                Dietetics</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Nutrition')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Nutrition')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: M. Optometry</strong>
                                            <br>
                                            <a href="{{route('programs-M-Optometry')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-M-Optometry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B. Optometry</strong>
                                            <br>
                                            <a href="{{route('programs-b-optometry')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-b-optometry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B. Optometry - Lateral
                                                Entry</strong>
                                            <br>
                                            <a href="{{route('programs-b-optometry-lateral-entry')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 3
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-b-optometry-lateral-entry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: B.Sc. in Medical
                                                Laboratory Technology- BMLT</strong>
                                            <br>
                                            <a href="{{route('programs-bsc-Medical-technology-bmlt')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 3
                                                    Yrs+1 Yr Internship | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-bsc-Medical-technology-bmlt')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: B.Sc. in Medical
                                                Laboratory Technology- BMLT Lateral Entry</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-medicaltechnologybmlt-lateral-entry')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                    Yrs+1 Yr Internship | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-b-sc-medicaltechnologybmlt-lateral-entry')}}"><button
                                                type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: M.Sc. in Medical
                                                Laboratory Technology- MMLT</strong>
                                            <br>
                                            <a href="{{route('programs-MSc-Medical-Laboratory-MMLT')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-MSc-Medical-Laboratory-MMLT')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: B.Sc. in Dialysis
                                                Tech</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-dialysis')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-b-sc-dialysis')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: B.Sc. in Operation
                                                Theatre Technology</strong>
                                            <br>
                                            <a href="{{route('programs-Technology-OTT')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-Technology-OTT')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: B.Sc. in Radiography &
                                                Advance Imaging Technology</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-radiography')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('programs-b-sc-radiography')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: B.Sc. in Emergency &
                                                Critical Care</strong>
                                            <br>
                                            <a href="{{route('programs-bsc-in-emergency')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>90000</td>
                                    <td>46500.00</td>
                                    <td><a href="{{route('programs-bsc-in-emergency')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: B.Sc. in CSSD (Central
                                                Sterile Supply Deptt.)</strong>
                                            <br>
                                            <a href="{{route('program-bsc-cssd')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>100000.00</td>
                                    <td>51500.00</td>
                                    <td><a href="{{route('program-bsc-cssd')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                Physiotherapy</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>61500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Diploma in Nutrition and
                                                Dietetics</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                Optometry</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Medical
                                                Laboratory Technology</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Diploma in Dialysis
                                                Technology</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Diploma in Operation
                                                Theatre Technology</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>23.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Diploma in Radiography
                                                & Advance Imaging Technology</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>51500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>24.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Diploma in Emergency &
                                                Critical Care</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>46500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF NURSING(RSN)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc. Nursing</strong>
                                            <br>
                                            <a href="{{route('programs-BSc-Nursing')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>200000.00</td>
                                    <td>101500.00</td>
                                    <td><a href="{{route('programs-BSc-Nursing')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: B.Sc. Nursing - Post
                                                Basic</strong>
                                            <br>
                                            <a href="{{route('programs-BSc-Post-Basic')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>160000.00</td>
                                    <td>81500.00</td>
                                    <td><a href="{{route('programs-BSc-Post-Basic')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: General Nursing &
                                                Midwifery</strong>
                                            <br>
                                            <a href="{{route('programs-General-Nursing-Midwifery')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 3.5
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>150000.00</td>
                                    <td>76500.00</td>
                                    <td><a href="{{route('programs-General-Nursing-Midwifery')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: M.Sc. Nursing (Medical
                                                Surgical Nursing/OBE Nursing/Child Health Nursing/Mental Health
                                                Nursing/Community Health Nursing)</strong>
                                            <br>
                                            <a href="{{route('program-msc-nursing-comm-mental')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>160000.00</td>
                                    <td>81500.00</td>
                                    <td><a href="{{route('program-msc-nursing-comm-mental')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF PHARMACY (RSP)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Pharm.</strong>
                                            <br>
                                            <a href="{{route('programs-b-pharm')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>173000.00</td>
                                    <td>88000.00</td>
                                    <td><a href="{{route('programs-b-pharm')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Pharm. Lateral
                                                Entry</strong>
                                            <br>
                                            <a href="{{route('programs-b-pharm-lateral-entry')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>173000.00</td>
                                    <td>88000.00</td>
                                    <td><a href="{{route('programs-b-pharm-lateral-entry')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: D.Pharm</strong>
                                            <br>
                                            <a href="{{route('programs-D-Pharm')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>150000.00</td>
                                    <td>76500.00</td>
                                    <td><a href="{{route('programs-D-Pharm')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: M.Pharm
                                                -Pharmaceutical Chemistry</strong>
                                            <br>
                                            <a href="{{route('programs-M-Pharm-Pharmaceutical')}}"
                                                class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                    years | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>145000.00</td>
                                    <td>74500.00</td>
                                    <td><a href="{{route('programs-M-Pharm-Pharmaceutical')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: M.Pharm -
                                                Pharmaceutics</strong>
                                            <br>
                                            <a href="{{route('programs-M-Pharm-Pharmaceutics')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>145000.00</td>
                                    <td>74500.00</td>
                                    <td><a href="{{route('programs-M-Pharm-Pharmaceutics')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: M.Pharm
                                                -Pharmacognosy</strong>
                                            <br>
                                            <a href="{{route('programs-M-Pharm-Pharmacognosy')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>145000.00</td>
                                    <td>74500.00</td>
                                    <td><a href="{{route('programs-M-Pharm-Pharmacognosy')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>ROYAL SCHOOL OF TRAVEL & TOURISM MANAGEMENT(RSTTM)</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: B.Sc./BA Travel &
                                                Tourism Management</strong>
                                            <br>
                                            <a href="{{route('programs-b-sc-ba-travel')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                    Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-b-sc-ba-travel')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #023e8a;" class="#">Course: Master of Travel &
                                                Tourism Management - MTTM</strong>
                                            <br>
                                            <a href="{{route('programs-Master-Travel&Tourism')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-Master-Travel&Tourism')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #3c096c;" class="#">Course: Bachelor of Travel &
                                                Tourism Management - BTTM</strong>
                                            <br>
                                            <a href="{{route('programs-Bachelor-Travel')}}" class="text-primary"><span
                                                    style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>85000.00</td>
                                    <td>43500.00</td>
                                    <td><a href="{{route('programs-Bachelor-Travel')}}"><button type="button"
                                                class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #7f5539;" class="#">Course: Certificate in Travel
                                                & Tourism Management</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Course: Diploma in Travel &
                                                Tourism Management</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                    as per NEP | Admission Fee: 60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>-</td>
                                    <td>43500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                            class="text-dark fw-bold para1 p-2">
                            <th>PH.D.</th>
                        </div>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">COURSES</th>
                                <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                <th class="text-light  font-weight-bold">DETAILS</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Ph.D. (Full Time/Part
                                                Time)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">Admission Fee:
                                                    60000.00</span></a>
                                        </p>
                                    </td>
                                    <td>125000.00</td>
                                    <td>64500.00</td>
                                    <td><a><button type="button" disabled
                                                class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div>
                        <h3 class="headd3 p-2"
                            style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                            C.) HOSTEL FEES 2025-26(FOR OLD & NEW STUDENTS)
                        </h3>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">AMOUNT(RS.)</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>A) Caution Money (Common for all streams) - Refundable</td>
                                    <td>10000.00</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <!-- ----- new ----- -->
                    <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">HOSTEL FEE</th>
                                <th class="text-light  font-weight-bold">YLY PAY(RS.)</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                Seater(Suit)(Heyansh House - Boys)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>240000.00</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                Seater(Premium)(Heyansh House - Boys, Samaya House - Girls)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>210000.00</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                Seater(Premium)(Aditya House - Boys, Harsha House - Girls)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>210000.00</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                Seater(Heyansh House - Boys)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>192000.00</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                Seater(Aditya House - Boys, Harsha House - Girls)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>192000.00</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 3
                                                Seater(Heyansh House - Boys, Samaya House - Girls, Aditya House -
                                                Boys, Harsha House - Girls)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>180000.00</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 4
                                                Seater(Samaya House - Girls, Aditya House - Boys, Harsha House -
                                                Girls)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>132000.00</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee - 5
                                                Seater(Heyansh House - Boys)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>108000.00</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee -
                                                Dormitory(Heyansh House - Boys)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                    15000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>90000.00</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">*** Hostel Fee -
                                                Dormitory(Aditya House - Boys, Harsha House - Girls)</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    15000.00)</span></a>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
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
                        <h3 class="headd3 p-2"
                            style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                            D.) TRANSPORTATION FEES 2025-26(FOR OLD & NEW STUDENTS)
                        </h3>
                        <div class="table-responsive">
                        <table class="table border table-responsive table-striped  vertical-scroll">
                            <thead class="text-light  para1" style="font-size: 14px;">
                                <th class="text-light  font-weight-bold">SL. NO.</th>
                                <th class="text-light  font-weight-bold">TRANSPORTATION FEE</th>
                                <th class="text-light  font-weight-bold">YLY PAY(Rs.)</th>
                                <th class="text-light  font-weight-bold">-</th>
                            </thead>
                            <tbody class="para1">
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <p>
                                            <strong style="color: #1b4332;" class="#">Transportation Fee</strong>
                                            <br>
                                            <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                    1000.00)</span></a>
                                        </p>
                                    </td>
                                    <td>65000.00</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- ----- new ----- -->

                    <hr>
                    <td><a href="#"><button type="button"
                                class="btn btn-primary btn-lg custom-details-btn">Fee Structure 2025-26</button></a>
                    </td>
                    <h2 class="headd2 pt-2"
                        style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                        ACCOUNTS DEPARTMENT
                    </h2>
                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-lg" style="border-radius: 10px;">
                                <div class="card-body text-center fw-bold text-dark">
                                    <i class="fa-solid fa-phone fa-beat me-2" style="color: #007bff;"></i>+91
                                    70990-88711
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-lg" style="border-radius: 10px;">
                                <div class="card-body text-center fw-bold text-dark">
                                    <i class="fa-solid fa-envelope fa-beat me-2"
                                        style="color: #007bff;"></i>vijay.sharma@rgi.edu.in
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h2 class="headd2"
                            style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                            **NOTE
                        </h2>
                        <h5 class="text-center text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                            ** Clinical Posting Charges of Rs.5000/- Per Semester as applicable will be charged
                            additional paid by the student over & above the prescribed semester fee.
                        </h5>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
             <!-- header image  -->
             <div>
                <img src="mobile-assets/admission-fee-and-programmee/web-admission-fee.png" alt="">
            </div>
            <!-- header image  -->


            <!-- heading  -->
            <div style="margin-top: 40px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd2 text-dark kd-title-ani kd-split-text">
                            For Academic Session 2025 - 2026</h1>
                    </div>
                </div>
            </div>
            <!-- heading  -->

                    <!-- table  -->
            <section class="sptb bg-white">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">

                            <h3 class="fw-bold pt-4 pb-2 text-dark text-capitalize headd3">A. Registration & Admission Fees
                                (To Be Paid Once Only)</h3>

                                <div class="table-responsive">
                            <table class="table border table-responsive table-striped  vertical-scroll">

                                <thead class="text-light  para1" style="font-size: 14px;">
                                    <th class="text-light  font-weight-bold">SL. NO.</th>
                                    <th class="text-light  font-weight-bold"></th>
                                    <th class="text-light  font-weight-bold">AMOUNT (Rs)</th>
                                </thead>
                                <tbody class="para1">
                                    <tr>
                                        <td>A.</td>
                                        <td>Prospectus & Form</td>
                                        <td>1000.00</td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Registration (To be paid during the admission for all courses)</td>
                                        <td>10000.00</td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Caution Money (Common for all streams) - Refundable</td>
                                        <td>10000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>

                            <hr>

                            <h3 class="fw-bold pt-4 pb-3 text-dark text-capitalize headd3">B. Institutions /Schools
                                /Programmes fee to be paid yearly/Semester Payment for New Students 2025-26
                            </h3>

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Architecture (RSA)</th>
                                </div>

                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Arch.</strong>
                                                    <br>
                                                    <a href="{{route('programs-barch')}}" class="text-primary"> <span
                                                            style="font-size: 16px;"> Duration: 5 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>170000.00</td>
                                            <td>86500.00</td>
                                            <td><a href="{{route('programs-barch')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Applied & Pure Sciences (RSAPS)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light para1" style="font-size: 14px;">
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
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc. Physics</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Physics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Physics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                        Chemistry</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Chemistry')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Chemistry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                        Mathematics</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Mathematics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Mathematics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc. Physics</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-physics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-physics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                        Chemistry</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-chemistry')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-chemistry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                        Mathematics</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-mathematics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-mathematics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Physics</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Chemistry</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Mathematics</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Physics</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Chemistry</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Mathematics</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Business (RSB)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MBA - (Finance,
                                                        Marketing, HRM, Operations Management, Entrepreneurship & Small
                                                        Business Management, Business Analytics)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MBA-Finance')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>300000.00</td>
                                            <td>152500.00</td>
                                            <td><a href="{{route('programs-MBA-Finance')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BBA</strong>
                                                    <br>
                                                    <a href="{{route('programs-BBA')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>200000.00</td>
                                            <td>101500.00</td>
                                            <td><a href="{{route('programs-BBA')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Business Administration</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>101500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Business
                                                        Administration</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>101500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Behavioral & Allied Sciences (RSBAS)</th>
                                </div>

                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MA -
                                                        Psychology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Psychology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Psychology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MA - Clinical
                                                        Psychology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Clinical-Psychology')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Clinical-Psychology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA -
                                                        Psychology</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-Psychology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-Psychology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - Applied
                                                        Psychology</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-Applied-Psychology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-Applied-Psychology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Certificate in
                                                        Psychology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Certificate in Applied
                                                        Psychology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in Psychology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in Applied
                                                        Psychology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Bio-Sciences (RSBSC)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                        Biotechnology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Bio-Technology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Bio-Technology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                        Microbiology</strong>
                                                    <br>
                                                    <a href="{{route('programs-Msc-Microbiology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-Msc-Microbiology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc. Food
                                                        Technology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Food-Technology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Food-Technology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                        Biotechnology</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-bio-technology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-bio-technology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc.
                                                        Microbiology</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-microbiology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-microbiology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc. Food
                                                        Technology</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-food-technology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-food-technology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Certificate in
                                                        Biotechnology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Certificate in
                                                        Microbiology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Diploma in Food
                                                        Technology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in
                                                        Biotechnology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in
                                                        Microbiology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in Food
                                                        Technology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Commerce (RSC)</th>
                                </div>

                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Com</strong>
                                                    <br>
                                                    <a href="{{route('programs-MCom')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-MCom')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Com - (Day
                                                        Shift)</strong>
                                                    <br>
                                                    <a href="{{route('programs-bcom')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>143000.00</td>
                                            <td>73000.00</td>
                                            <td><a href="{{route('programs-bcom')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Com - (Morning
                                                        Shift)</strong>
                                                    <br>
                                                    <a href="{{route('programs-bcom-morning-shift')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>163000.00</td>
                                            <td>83000.00</td>
                                            <td><a href="{{route('programs-bcom-morning-shift')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Com - Finance with
                                                        ICA / B.Com with ACCA / B.Com with CMA</strong>
                                                    <br>
                                                    <a href="{{route('programs-bcom-finance-with-ica')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3/4
                                                            years as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>140000.00</td>
                                            <td>71500.00</td>
                                            <td><a href="{{route('programs-bcom-finance-with-ica')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Certificate in Commerce
                                                        (Morning Shift)</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>83000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Certificate in Commerce (Day
                                                        Shift)</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>63000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in Commerce (Morning
                                                        Shift)</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>83000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Diploma in Commerce (Day
                                                        Shift)</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>63000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Communications & Media (RSCOM)</th>
                                </div>

                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MA - (J & MC)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-J&MC')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-MA-J&MC')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - (J & MC)</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-J&MC')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>115000.00</td>
                                            <td>59000.00</td>
                                            <td><a href="{{route('programs-BA-J&MC')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc. (Animation and
                                                        Visual Effects)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Animation-&-Visual-Effects')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Animation-&-Visual-Effects')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc. - (Animation and
                                                        Visual Effects)</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-animation-visual-effects')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3/4
                                                            years as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-animation-visual-effects')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in J &
                                                        Mc</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>59000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Animation and Visual Effects</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in J &
                                                        Mc</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>59000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Animation
                                                        and Visual Effects</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-----</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Design (RSD)</th>
                                </div>

                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Bachelor in Interior
                                                        Design (BID)</strong>
                                                    <br>
                                                    <a href="{{route('programs-BachelorInterior-DesignBID')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-BachelorInterior-DesignBID')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Bachelor in Interior
                                                        Design (BID) (Lateral Entry)</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Interior-Design-BID-Lateral-Entry')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Interior-Design-BID-Lateral-Entry')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Des (FD)</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-des-fd-fashion-design')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-b-des-fd-fashion-design')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">B.Des (FD) (Lateral
                                                        Entry)</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Des - Communication
                                                        Design</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Design-Communication-Design')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Design-Communication-Design')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Des - Graphic
                                                        Design</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Design-Graphic-Design')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Design-Graphic-Design')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Des - Product
                                                        Design</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Design-Product-Design')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Design-Product-Design')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                        Interior Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                        Communication Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in Graphic
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in Product
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Interior
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>13.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Communication Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>14.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Graphic
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>15.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Product
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Environmental & Earth Sciences (RSEES)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc.
                                                        Geography</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-geography')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-geography')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MA Geography</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Geography')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Geography')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc. Geology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Geology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Geology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc.
                                                        Geoinformatics</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-in-Geoinformatics')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-in-Geoinformatics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: B.Sc. /BA
                                                        Geography</strong>
                                                    <br>
                                                    <a href="{{route('programs-BSc-Geography')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BSc-Geography')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: B.Sc. Geology</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-geology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-geology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                        Geography</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in
                                                        Geology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Diploma in
                                                        Geography</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Diploma in
                                                        Geology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Engineering & Technology (RSET)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Tech CSE in
                                                        Artificial Intelligence</strong>
                                                    <br>
                                                    <a href="{{route('programs-MTech-CSE-in-Artifical-Intelligence')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-MTech-CSE-in-Artifical-Intelligence')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Tech CSE in
                                                        IOT</strong>
                                                    <br>
                                                    <a href="{{route('programs-MTech-CSE-in-Internet-of-Things')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-MTech-CSE-in-Internet-of-Things')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Tech CE - (Water
                                                        Resources Development & Management) WRDM</strong>
                                                    <br>
                                                    <a href="{{route('programs-MTech-CE-in-Water-Resources')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-MTech-CE-in-Water-Resources')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Tech CE - Structural
                                                        Engineering</strong>
                                                    <br>
                                                    <a href="{{route('programs-MTech-CE-in-Structural-Engineering')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-MTech-CE-in-Structural-Engineering')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Tech CE -
                                                        CAD</strong>
                                                    <br>
                                                    <a href="{{route('programs-MTech-CAD')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-MTech-CAD')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech - CE</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-tech-ce')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-b-tech-ce')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech - CSE</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-tech-cse')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-b-tech-cse')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech - ME</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-tech-me')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-b-tech-me')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech - Artificial
                                                        Intelligence-AI</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-tech-artifical-intelligence-ai')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-b-tech-artifical-intelligence-ai')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech -
                                                        Mechatronics</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-tech-mechatronics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-b-tech-mechatronics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech - (Lateral
                                                        Entry) - CE/CSE/ME</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-tech-lateral-entry')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-b-tech-lateral-entry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech in Electrical &
                                                        Electronics Engineering</strong>
                                                    <br>
                                                    <a href="{{route('programs-B-TechElectrical-Electronics-Engineering')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-B-TechElectrical-Electronics-Engineering')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>13.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech. in Electronics
                                                        and Communication Engineering</strong>
                                                    <br>
                                                    <a href="{{route('programs-B-Tech-Electronics-Communication-Engineering')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-B-Tech-Electronics-Communication-Engineering')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>14.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Tech for Working
                                                        Professional (CE & CSE)</strong>
                                                    <br>
                                                    <a href="{{route('programs-BTechWorking-Professional-CE-CSE')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                            <td>91500.00</td>
                                            <td><a href="{{route('programs-BTechWorking-Professional-CE-CSE')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Fine Arts (RSFA)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MFA</strong>
                                                    <br>
                                                    <a href="{{route('programs-Master-of-Fine-Arts-MFA')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-Master-of-Fine-Arts-MFA')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BFA</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Fine-Arts-BFA')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>75000.00</td>
                                            <td>39000.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Fine-Arts-BFA')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in Fine
                                                        Arts</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>39000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Fine
                                                        Arts</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>39000.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Fashion Design & Technology (RSFT)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Des (FD)</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-des-fd-fashion-design')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>110000.00</td>
                                            <td>56500.00</td>
                                            <td><a href="{{route('programs-b-des-fd-fashion-design')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in Fashion
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Fashion
                                                        Design</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>56500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Humanities & Social Sciences (RSHSS)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MA Economics</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Economics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Economics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: MA Sociology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Sociology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Sociology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: MA (Public
                                                        Administration)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Public-Administration')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Public-Administration')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: MA (Political
                                                        Science)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-Political-Science')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-Political-Science')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: MA (History)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-History')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-History')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: MSW</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSW')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSW')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BSW</strong>
                                                    <br>
                                                    <a href="{{route('programs-BSW')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BSW')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA -
                                                        Sociology</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-Sociology')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-Sociology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA -
                                                        Economics</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-Economics')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-Economics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - Public
                                                        Administration</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-Public-Administration')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 3/4
                                                            years as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-Public-Administration')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - Political
                                                        Science</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-Political-Science')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-Political-Science')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - History</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-History')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-History')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>13.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in Social
                                                        Work</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>14.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                        Sociology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>15.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                        Economics</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>16.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in Public
                                                        Administration</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>17.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                        History</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>18.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                        Political Science</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>19.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Social
                                                        Work</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>20.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                        Sociology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>21.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                        Economics</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>22.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Public
                                                        Administration</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>23.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                        History</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>24.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Political
                                                        Science</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Hotel Management (RSHM)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc./BA - Hotel
                                                        Management</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-HotelManagement')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>105000.00</td>
                                            <td>54000.00</td>
                                            <td><a href="{{route('programs-BA-HotelManagement')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - Culinary
                                                        Arts</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-in-Culinary-Arts')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>105000.00</td>
                                            <td>54000.00</td>
                                            <td><a href="{{route('programs-BA-in-Culinary-Arts')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc. Hotel Management
                                                        / MHM</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Hotel-Management')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-MSc-Hotel-Management')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Bachelor of Hotel
                                                        Management - BHM</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Hotel-Management-BHM')}}"
                                                        class="text-primary"><span style="font-size: 16px;"> Duration: 4
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>105000.00</td>
                                            <td>54000.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Hotel-Management-BHM')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Certificate in Hotel
                                                        Management</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>54000.00</td>
                                            <td><a><button type="button" disabled
                                                    class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Certificate in
                                                        Culinary Arts</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 year as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>54000.00</td>
                                            <td><a><button type="button" disabled
                                                    class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Hotel
                                                        Management</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>54000.00</td>
                                            <td><a><button type="button" disabled
                                                    class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Culinary
                                                        Arts</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>54000.00</td>
                                            <td><a><button type="button" disabled
                                                    class="btn btn-secondary btn-sm custom-details-btn">Details</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Information Technology (RSIT)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: BCA</strong>
                                                    <br>
                                                    <a href="{{route('programs-BCA')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 Yrs as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-BCA')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: MCA</strong>
                                                    <br>
                                                    <a href="{{route('programs-MCA')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 Yrs | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MCA')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc. (IT)</strong>
                                                    <br>
                                                    <a href="{{route('programs-BSc-IT')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 Yrs as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-BSc-IT')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc. (IT)</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-IT')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 Yrs | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-IT')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Certificate in
                                                        Computer Application</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 Yr as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>51500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Certificate in
                                                        Information Technology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 1 Yr as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>46500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Computer
                                                        Application</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 Yrs as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>51500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Information
                                                        Technology</strong>
                                                    <br>
                                                    <a class="text-dark"><span style="font-size: 16px;"> Duration: 2 Yrs as
                                                            per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>46500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Languages (RSL)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: MA - English</strong>
                                                    <br>
                                                    <a href="{{route('programs-MA-English')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MA-English')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: BA - English</strong>
                                                    <br>
                                                    <a href="{{route('programs-BA-English')}}" class="text-primary"><span
                                                            style="font-size: 16px;"> Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-BA-English')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        English</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;"> Duration: 1 year
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Diploma in
                                                        English</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;"> Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Law & Administration (RSLA)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">LLM - Day Shift</strong>
                                                    <br>
                                                    <a href="{{route('programs-LLM-Day-Shift')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 1 year | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>130000.00</td>
                                            <td>65000.00</td>
                                            <td><a href="{{route('programs-LLM-Day-Shift')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">LLM - Morning Shift</strong>
                                                    <br>
                                                    <a href="{{route('programs-LLM-Morning-Shift')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 1 year | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>150000.00</td>
                                            <td>75000.00</td>
                                            <td><a href="{{route('programs-LLM-Morning-Shift')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">BA/BBA - LLB (Hons)</strong>
                                                    <br>
                                                    <a href="{{route('program-ba-bba-llb-hons')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 5 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>140000.00</td>
                                            <td>71500.00</td>
                                            <td><a href="{{route('program-ba-bba-llb-hons')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1e3a8a;" class="#">LLB - (Hons.)</strong>
                                                    <br>
                                                    <a href="{{route('program-ba-llb-hons')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>140000.00</td>
                                            <td>71500.00</td>
                                            <td><a href="{{route('program-ba-llb-hons')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>Royal School of Library & Information Sciences (RSLIS)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Master of Library &
                                                        Information Sciences (MLISc)</strong>
                                                    <br>
                                                    <a href="{{route('programs-Master-of-Library&Information-Sciences')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-Master-of-Library&Information-Sciences')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>ROYAL SCHOOL OF LIFE SCIENCES (RSLSC)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc. Botany</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Botany')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Botany')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc. Zoology</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Zoology')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Zoology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc. Forensic
                                                        Science</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-ForensicScience')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-ForensicScience')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: M.Sc.
                                                        Forestry</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Forestry')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Forestry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc. Botany</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-botany')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-botany')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc. Zoology</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-zoology')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-zoology')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc. Forensic
                                                        Science</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-forensicScience')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-forensicScience')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc.
                                                        Forestry</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-forestry')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-forestry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Botany</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Zoology</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Forensic Science</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Certificate in
                                                        Forestry</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Botany</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Zoology</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in Forensic
                                                        Science</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Diploma in
                                                        Forestry</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>ROYAL SCHOOL OF MEDICAL & ALLIED SCIENCES (RSMAS)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Bachelor of
                                                        Physiotherapy - BPT</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-of-Physiotherapy-BPT')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 4.6
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>120000.00</td>
                                            <td>61500.00</td>
                                            <td><a href="{{route('programs-Bachelor-of-Physiotherapy-BPT')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Bachelor of
                                                        Physiotherapy - BPT Lateral Entry</strong>
                                                    <br>
                                                    <a href="{{route('programs-BachelorofPhysiotherapy')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 3.6
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>120000.00</td>
                                            <td>61500.00</td>
                                            <td><a href="{{route('programs-BachelorofPhysiotherapy')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Masters in
                                                        Physiotherapy - MPT</strong>
                                                    <br>
                                                    <a href="{{route('programs-MasterofPhysiotherapyMPT')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-MasterofPhysiotherapyMPT')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc. in Nutrition and
                                                        Dietetics</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-nutrition&dietetics')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 3/4
                                                            Yrs as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-nutrition&dietetics')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M.Sc. in Nutrition and
                                                        Dietetics</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Nutrition')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Nutrition')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: M. Optometry</strong>
                                                    <br>
                                                    <a href="{{route('programs-M-Optometry')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-M-Optometry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B. Optometry</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-optometry')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-b-optometry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B. Optometry - Lateral
                                                        Entry</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-optometry-lateral-entry')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 3
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-b-optometry-lateral-entry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: B.Sc. in Medical
                                                        Laboratory Technology- BMLT</strong>
                                                    <br>
                                                    <a href="{{route('programs-bsc-Medical-technology-bmlt')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 3
                                                            Yrs+1 Yr Internship | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-bsc-Medical-technology-bmlt')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: B.Sc. in Medical
                                                        Laboratory Technology- BMLT Lateral Entry</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-medicaltechnologybmlt-lateral-entry')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                            Yrs+1 Yr Internship | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-b-sc-medicaltechnologybmlt-lateral-entry')}}"><button
                                                        type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: M.Sc. in Medical
                                                        Laboratory Technology- MMLT</strong>
                                                    <br>
                                                    <a href="{{route('programs-MSc-Medical-Laboratory-MMLT')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-MSc-Medical-Laboratory-MMLT')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: B.Sc. in Dialysis
                                                        Tech</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-dialysis')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-b-sc-dialysis')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: B.Sc. in Operation
                                                        Theatre Technology</strong>
                                                    <br>
                                                    <a href="{{route('programs-Technology-OTT')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-Technology-OTT')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: B.Sc. in Radiography &
                                                        Advance Imaging Technology</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-radiography')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('programs-b-sc-radiography')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: B.Sc. in Emergency &
                                                        Critical Care</strong>
                                                    <br>
                                                    <a href="{{route('programs-bsc-in-emergency')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>90000</td>
                                            <td>46500.00</td>
                                            <td><a href="{{route('programs-bsc-in-emergency')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: B.Sc. in CSSD (Central
                                                        Sterile Supply Deptt.)</strong>
                                                    <br>
                                                    <a href="{{route('program-bsc-cssd')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>100000.00</td>
                                            <td>51500.00</td>
                                            <td><a href="{{route('program-bsc-cssd')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                        Physiotherapy</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>61500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Diploma in Nutrition and
                                                        Dietetics</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in
                                                        Optometry</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>46500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Medical
                                                        Laboratory Technology</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>51500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Diploma in Dialysis
                                                        Technology</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>46500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Diploma in Operation
                                                        Theatre Technology</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>51500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Diploma in Radiography
                                                        & Advance Imaging Technology</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>51500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Diploma in Emergency &
                                                        Critical Care</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 2 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>46500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>ROYAL SCHOOL OF NURSING(RSN)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc. Nursing</strong>
                                                    <br>
                                                    <a href="{{route('programs-BSc-Nursing')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>200000.00</td>
                                            <td>101500.00</td>
                                            <td><a href="{{route('programs-BSc-Nursing')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: B.Sc. Nursing - Post
                                                        Basic</strong>
                                                    <br>
                                                    <a href="{{route('programs-BSc-Post-Basic')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>160000.00</td>
                                            <td>81500.00</td>
                                            <td><a href="{{route('programs-BSc-Post-Basic')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: General Nursing &
                                                        Midwifery</strong>
                                                    <br>
                                                    <a href="{{route('programs-General-Nursing-Midwifery')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 3.5
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>150000.00</td>
                                            <td>76500.00</td>
                                            <td><a href="{{route('programs-General-Nursing-Midwifery')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: M.Sc. Nursing (Medical
                                                        Surgical Nursing/OBE Nursing/Child Health Nursing/Mental Health
                                                        Nursing/Community Health Nursing)</strong>
                                                    <br>
                                                    <a href="{{route('program-msc-nursing-comm-mental')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>160000.00</td>
                                            <td>81500.00</td>
                                            <td><a href="{{route('program-msc-nursing-comm-mental')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>ROYAL SCHOOL OF PHARMACY (RSP)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Pharm.</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-pharm')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>173000.00</td>
                                            <td>88000.00</td>
                                            <td><a href="{{route('programs-b-pharm')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Pharm. Lateral
                                                        Entry</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-pharm-lateral-entry')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>173000.00</td>
                                            <td>88000.00</td>
                                            <td><a href="{{route('programs-b-pharm-lateral-entry')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: D.Pharm</strong>
                                                    <br>
                                                    <a href="{{route('programs-D-Pharm')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>150000.00</td>
                                            <td>76500.00</td>
                                            <td><a href="{{route('programs-D-Pharm')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: M.Pharm
                                                        -Pharmaceutical Chemistry</strong>
                                                    <br>
                                                    <a href="{{route('programs-M-Pharm-Pharmaceutical')}}"
                                                        class="text-primary"><span style="font-size: 16px;">Duration: 2
                                                            years | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>145000.00</td>
                                            <td>74500.00</td>
                                            <td><a href="{{route('programs-M-Pharm-Pharmaceutical')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: M.Pharm -
                                                        Pharmaceutics</strong>
                                                    <br>
                                                    <a href="{{route('programs-M-Pharm-Pharmaceutics')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>145000.00</td>
                                            <td>74500.00</td>
                                            <td><a href="{{route('programs-M-Pharm-Pharmaceutics')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: M.Pharm
                                                        -Pharmacognosy</strong>
                                                    <br>
                                                    <a href="{{route('programs-M-Pharm-Pharmacognosy')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>145000.00</td>
                                            <td>74500.00</td>
                                            <td><a href="{{route('programs-M-Pharm-Pharmacognosy')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>ROYAL SCHOOL OF TRAVEL & TOURISM MANAGEMENT(RSTTM)</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: B.Sc./BA Travel &
                                                        Tourism Management</strong>
                                                    <br>
                                                    <a href="{{route('programs-b-sc-ba-travel')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 3/4 years as per NEP |
                                                            Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-b-sc-ba-travel')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #023e8a;" class="#">Course: Master of Travel &
                                                        Tourism Management - MTTM</strong>
                                                    <br>
                                                    <a href="{{route('programs-Master-Travel&Tourism')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 2 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-Master-Travel&Tourism')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #3c096c;" class="#">Course: Bachelor of Travel &
                                                        Tourism Management - BTTM</strong>
                                                    <br>
                                                    <a href="{{route('programs-Bachelor-Travel')}}" class="text-primary"><span
                                                            style="font-size: 16px;">Duration: 4 years | Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>85000.00</td>
                                            <td>43500.00</td>
                                            <td><a href="{{route('programs-Bachelor-Travel')}}"><button type="button"
                                                        class="btn btn-primary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #7f5539;" class="#">Course: Certificate in Travel
                                                        & Tourism Management</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Course: Diploma in Travel &
                                                        Tourism Management</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Duration: 1 years
                                                            as per NEP | Admission Fee: 60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>-</td>
                                            <td>43500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;"
                                    class="text-dark fw-bold para1 p-2">
                                    <th>PH.D.</th>
                                </div>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">COURSES</th>
                                        <th class="text-light  font-weight-bold">YLY PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">SEM PAY (Rs)</th>
                                        <th class="text-light  font-weight-bold">DETAILS</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Ph.D. (Full Time/Part
                                                        Time)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">Admission Fee:
                                                            60000.00</span></a>
                                                </p>
                                            </td>
                                            <td>125000.00</td>
                                            <td>64500.00</td>
                                            <td><a><button type="button" disabled
                                                        class="btn btn-secondary btn-sm custom-details-btn">Details</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div>
                                <h3 class="headd3 p-2"
                                    style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                                    C.) HOSTEL FEES 2025-26(FOR OLD & NEW STUDENTS)
                                </h3>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">AMOUNT(RS.)</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>A) Caution Money (Common for all streams) - Refundable</td>
                                            <td>10000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <!-- ----- new ----- -->
                            <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">HOSTEL FEE</th>
                                        <th class="text-light  font-weight-bold">YLY PAY(RS.)</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                        Seater(Suit)(Heyansh House - Boys)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>240000.00</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                        Seater(Premium)(Heyansh House - Boys, Samaya House - Girls)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>210000.00</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                        Seater(Premium)(Aditya House - Boys, Harsha House - Girls)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>210000.00</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                        Seater(Heyansh House - Boys)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>192000.00</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 2
                                                        Seater(Aditya House - Boys, Harsha House - Girls)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>192000.00</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 3
                                                        Seater(Heyansh House - Boys, Samaya House - Girls, Aditya House -
                                                        Boys, Harsha House - Girls)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>180000.00</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 4
                                                        Seater(Samaya House - Girls, Aditya House - Boys, Harsha House -
                                                        Girls)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>132000.00</td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee - 5
                                                        Seater(Heyansh House - Boys)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>108000.00</td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee -
                                                        Dormitory(Heyansh House - Boys)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
                                                            15000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>90000.00</td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">*** Hostel Fee -
                                                        Dormitory(Aditya House - Boys, Harsha House - Girls)</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            15000.00)</span></a>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Anual Fee -
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
                                <h3 class="headd3 p-2"
                                    style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                                    D.) TRANSPORTATION FEES 2025-26(FOR OLD & NEW STUDENTS)
                                </h3>
                                <div class="table-responsive">
                                <table class="table border table-responsive table-striped  vertical-scroll">
                                    <thead class="text-light  para1" style="font-size: 14px;">
                                        <th class="text-light  font-weight-bold">SL. NO.</th>
                                        <th class="text-light  font-weight-bold">TRANSPORTATION FEE</th>
                                        <th class="text-light  font-weight-bold">YLY PAY(Rs.)</th>
                                        <th class="text-light  font-weight-bold">-</th>
                                    </thead>
                                    <tbody class="para1">
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <p>
                                                    <strong style="color: #1b4332;" class="#">Transportation Fee</strong>
                                                    <br>
                                                    <a class="text-black"><span style="font-size: 16px;">(Admission Fee -
                                                            1000.00)</span></a>
                                                </p>
                                            </td>
                                            <td>65000.00</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- ----- new ----- -->

                            <hr>
                            <td><a href="#"><button type="button"
                                        class="btn btn-primary btn-lg custom-details-btn">Fee Structure 2025-26</button></a>
                            </td>
                            <h2 class="headd2 pt-2"
                                style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                                ACCOUNTS DEPARTMENT
                            </h2>
                            <div class="row g-3">
                                <div class="col-lg-4">
                                    <div class="card border-0 shadow-lg" style="border-radius: 10px;">
                                        <div class="card-body text-center fw-bold text-dark">
                                            <i class="fa-solid fa-phone fa-beat me-2" style="color: #007bff;"></i>+91
                                            70990-88711
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="card border-0 shadow-lg" style="border-radius: 10px;">
                                        <div class="card-body text-center fw-bold text-dark">
                                            <i class="fa-solid fa-envelope fa-beat me-2"
                                                style="color: #007bff;"></i>vijay.sharma@rgi.edu.in
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h2 class="headd2"
                                    style="color: #343a40; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-top: 20px; padding-bottom: 10px;">
                                    **NOTE
                                </h2>
                                <h5 class="text-center text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                    ** Clinical Posting Charges of Rs.5000/- Per Semester as applicable will be charged
                                    additional paid by the student over & above the prescribed semester fee.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
        </div>
@endsection
