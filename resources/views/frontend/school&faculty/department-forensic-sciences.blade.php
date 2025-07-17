@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
                    <!-- floating mob button  -->
                    <div>
                        <a href="https://admissions.rgu.ac" style="
                                                                                                    position: fixed;
                                                                                                    bottom: 25px;
                                                                                                    right: 75px;
                                                                                                    background-color: #ef991f;
                                                                                                    color: #fff;
                                                                                                    padding: 12px 20px;
                                                                                                    font-size: 16px;
                                                                                                    font-weight: bold;
                                                                                                    text-decoration: none;
                                                                                                    border-radius: 20px;
                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                    z-index: 1000;
                                                                                                    overflow: hidden;
                                                                                                    animation: pulse 2s infinite;
                                                                                                    ">
                            <span style="
                                                                                                    position: absolute;
                                                                                                    top: 0;
                                                                                                    left: -75%;
                                                                                                    width: 50%;
                                                                                                    height: 100%;
                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                    transform: skewX(-25deg);
                                                                                                    animation: shine 2s infinite;
                                                                                                    "></span>
                            Admission Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
            <img style="padding-top: 80px; position: relative;"
                src="https://media.rgu.ac/department-all/dept-forensic-sc/mobile-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. Forensic Science</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-forensicScience"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. Forensic Science</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-ForensicScience"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-forensic-sc/mobile-btm.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
                    <!-- floating button  -->
                    <div>
                        <a href="https://admissions.rgu.ac/" style="
                                                                                                                position: fixed;
                                                                                                                bottom: 35px;
                                                                                                                right: 50px;
                                                                                                                background-color: #ef991f;
                                                                                                                color: #fff;
                                                                                                                padding: 12px 20px;
                                                                                                                font-size: 18px;
                                                                                                                font-weight: bold;
                                                                                                                text-decoration: none;
                                                                                                                border-radius: 20px;
                                                                                                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                z-index: 1000;
                                                                                                                overflow: hidden;
                                                                                                                animation: pulse 2s infinite;
                                                                                                                ">
                            <span style="
                                                                                                                position: absolute;
                                                                                                                top: 0;
                                                                                                                left: -75%;
                                                                                                                width: 50%;
                                                                                                                height: 100%;
                                                                                                                background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                transform: skewX(-25deg);
                                                                                                                animation: shine 2s infinite;
                                                                                                                "></span>
                            Admisssion Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
            <img src="https://media.rgu.ac/department-all/dept-forensic-sc/web-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. Forensic Science</strong><br>
                                        Honours / Honours with Research
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-forensicScience"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. Forensic Science</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-ForensicScience"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-forensic-sc/web-btm.png" alt="">

        </div>

        <div class="container pb-5 pt-3">
            <div>

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="font-weight-bold text-white">S.No.</th>
                                <th class="font-weight-bold text-white">Date of Visit</th>
                                <th class="font-weight-bold text-white">NAME</th>
                                <th class="font-weight-bold text-white">Designation</th>
                                <th class="font-weight-bold text-white">Purpose of the visit</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1</td>
                                <td>14th December 2023</td>
                                <td>Shri Harmeet Singh</td>
                                <td>(IPS, Special DGP of Assam)</td>
                                <td>Guest of Honour, Inauguration of Department of Forensic Science</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>24th May 2024</td>
                                <td>Mr. Keerthan Reddy</td>
                                <td>Cyber Security Engineer, VISA</td>
                                <td>Guest Lecture</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Position in D-BoS</th>
                                <th class="text-white">Name and Designation</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1</td>
                                <td>Convener (Ex-Officio)- Head of the Department</td>
                                <td>Dr. Pundarikaksha Das, Assistant Professor and Coordinator, Department of Forensic
                                    Science</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>All Faculty members of the Department Members (Ex-Officio)</td>
                                <td>
                                    Ms. Pradipta Shyam, Assistant Professor, Forensic Sc.
                                    <hr />
                                    Ms Meghna Bordoloi, Teaching Assistant
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>

                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                        <thead class="text-white" style="background-color: #27467a">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Content</th>
                                <th class="text-white">Name of the Member</th>
                                <th class="text-white">Designation</th>
                                <th class="text-white">Designation in the committee</th>
                            </tr>
                        </thead>
                        <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1.</td>
                                <td>Head of the Department</td>
                                <td>Prof. (Dr.) N. K. Chrungoo</td>
                                <td>Dean, RSLSC</td>
                                <td>Chairperson</td>
                            </tr>
                            <tr>
                                <td rowspan="2">2.</td>
                                <td rowspan="2" class="align-middle">Two Assistant Professors holding Ph.D. degree</td>
                                <td>Dr. Pundarikaksha Das</td>
                                <td>Coordinator and Assistant Professor</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <td>Dr. Sthiti Porna Dutta</td>
                                <td>Assistant Professor</td>
                                <td>Member</td>
                            </tr>
                        </tbody>
                    </table>
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

                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Forensic Science/BSc (H) FSc Syllabus (NEP 2020).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure & Syllabus (Based
                                                    on National Education Policy 2020) For Undergraduate Programme
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Forensic Science/STRUCTURE UG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure - Forensic Science
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>Post Graduate</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">

                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Forensic Science/MSc FSc Syllabus (NEP 2020).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure & Syllabus (Based
                                                    on National Education Policy 2020) For Post-graduate Programme
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/20_RSLSC/Forensic Science/STRUCTURE PG.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure - Forensic Science
                                                    <i class="fa fa-download"></i>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <strong>Doctoral Programme</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <a href="phd" class=" para1" target="_blank"><strong>Click
                                                    to View...</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
