@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;"
                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-operation/mob-top.png" alt="">

            <div class="container">

                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">

                            <tr class="align-middle">

                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. Operation Theatre Technology
                                            (OTT)</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-Technology-OTT"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-operation/mob-btm.png" alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-operation/web-top.png" alt="">

            <div class="container">

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div class="table-responsive">
                    <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                        <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                            <th class="text-light  font-weight-bold">SL. NO.</th>
                            <th class="text-light  font-weight-bold">COURSES</th>
                            <th class="text-light  font-weight-bold">DURATION</th>
                            <th class="text-light  font-weight-bold">DETAILS</th>
                        </thead>
                        <tbody class="para1 bg-light">

                            <tr class="align-middle">

                                <td>1.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B.Sc. Operation Theatre Technology
                                            (OTT)</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-Technology-OTT"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-operation/web-btm.png" alt="">
        </div>

        <div class="container pb-5 pt-3">

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">S.No</th>
                                    <th class="font-weight-bold text-white">Name of the guest</th>
                                    <th class="font-weight-bold text-white">Date of Visit</th>
                                    <th class="font-weight-bold text-white">Purpose</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Ms.Sarita Devi Chettri</td>
                                    <td>31-03-2023</td>
                                    <td>"Webinar on Surgical Instrumentation"</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>"Prof(Dr.) Bibhuti Bhushan Borthakur"</td>
                                    <td>06-04-2023</td>
                                    <td>"Guest lecture on World Health Day"</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Dashwa Langhbang</td>
                                    <td>12-05-2023</td>
                                    <td>"Guest lecture on infection control"</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Daisy Gogoi</td>
                                    <td>16-10-2023</td>
                                    <td>"Guest lecture on World Anaesthesia day"</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mr.Rickystar Syiemlieh</td>
                                    <td>01-04-2024</td>
                                    <td>"Webinar on Laparoscopic Instrumentation"</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mr. Chinmoy Thakuria</td>
                                    <td>09-08-2024</td>
                                    <td>"Guest lecture on Student induction Programme"</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Ms. Sarita Chettri</td>
                                    <td>18-09-2024</td>
                                    <td>"Guest lecture on Student"</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Board of <span style="color: #FF9A1E; font-weight: 500;">Studies (BoS)</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <th class="text-white">S.NO.</th>
                                <th class="text-white">POSITION IN D-BOS</th>
                                <th class="text-white">NAME AND DESIGNATION</th>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>
                                        Ms. Ibasiewdor Mawlein, Assistant Professor and, Co-coordinator,
                                        Dept. of OTT
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Ms. Ibasiewdor Mawlein, Assistant Professor and, Co-coordinator,
                                        Dept. of OTT
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Ms. Haka-i-juh Bamon, Assistant Professor and, Course
                                        coordinator, Dept. Of Trauma and Critical Care, Pratiksha
                                        Institute of Health Sciences, Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Expert (Industry)</td>
                                    <td>
                                        Mr. Chinmoy Thakuria, Operation Theatre Technologist, Apollo
                                        Excelcare, Guwahati
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div>

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

                <div class="p-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accordion para1" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/UG-OTT-Structure.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Struture of the Syllabus - UG Operation
                                                    Theatre Technology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/OT-UG-2025-SYLLABUS.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - UG Operation Theatre Technology
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <strong>
                                                Doctoral Programme
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <a href="phd" class="para1" target="_blank">
                                                <strong>
                                                    Click to View...
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>          </div>
        </div>

    </div>
@endsection
