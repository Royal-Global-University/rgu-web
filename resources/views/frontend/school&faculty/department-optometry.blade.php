@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;"
                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-optometry/mob-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B. Optometry</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-optometry"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B. Optometry - Lateral Entry</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    3 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-optometry-lateral-entry"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M. Optometry</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-M-Optometry"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-optometry/mob-btm.png" alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-optometry/web-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B. Optometry</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-optometry"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">B. Optometry - Lateral Entry</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    3 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-optometry-lateral-entry"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M. Optometry</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-M-Optometry"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-optometry/web-btm.png" alt="">
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
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Name</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                    <th class="font-weight-bold text-white">Purpose of the visit</th>
                                    <th class="font-weight-bold text-white">Date of Visit</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>MS PURABI CHOUDHURY</td>
                                    <td>ASSISTANT PROFESSOR,SRI SANKARADEVA NETHRALAYA,GUWAHATI</td>
                                    <td>WORKSHOP ON DISPENSING</td>
                                    <td>5/18/2023</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MR SOUJANYA MANDAL</td>
                                    <td>ASSISTANT PROFESSOR,SRI SANKARADEVA NETHRALAYA,GUWAHATI</td>
                                    <td>SEMINAR ON SCLERAL LENS</td>
                                    <td>12/5/2023</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>LANSKART</td>
                                    <td>HR MANAGER,LANSKART</td>
                                    <td>WORKSHOP ON DISPENSING</td>
                                    <td>3/28/2024</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MS PURABI CHOUDHURY</td>
                                    <td>ASSISTANT PROFESSOR,SRI SANKARADEVA NETHRALAYA,GUWAHATI</td>
                                    <td>SEMINAR ON LAWS OF OPTOMETRY</td>
                                    <td>5/9/2024</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MR KRISHANJIT PARASAR</td>
                                    <td>ASSISTANT PROFESSOR,GALGOTIA UNIVERSITY,NOIDA.</td>
                                    <td>INVITED TALK ON "VISION WHAT WE SEE"</td>
                                    <td>11/7/2023</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. VIVEK SURYAKANT PAULBUDDHE</td>
                                    <td>CONSULTANT OPHTALMOLOGIST, ASG EYE HOSPITAL, GUWAHATI.</td>
                                    <td>INVITED TALK</td>
                                    <td>9/26/2023</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MS MITALEE CHOUDHURY</td>
                                    <td>
                                        CONSULTANT OPTOMETRIST,SRI SANKARADEVA NETHRALAYA,GUWAHATI
                                    </td>
                                    <td>INVITED TALK</td>
                                    <td>3/21/2023</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>DR SUSMITA NATH</td>
                                    <td>ASSISTANT PROFESSOR,THE ASSAM ROYAL GLOBAL UNIVERSITY</td>
                                    <td>INVITED TALK ON DESIGN THINKING</td>
                                    <td>8/12/2024</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>MS IFULLNESSEY KHARMYNDAI</td>
                                    <td>CLINICAL INSTRUCTOR, THE ASSAM ROYAL GLOBAL UNIVERSITY</td>
                                    <td>INVITED TALK ON BASIC LIFE SUPPORT</td>
                                    <td>8/16/2024</td>
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
                                    <td>
                                        Ms. Sudeshna Roy, Assistant Professor and Co-ordinator,
                                        Optometry Dept.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        All Faculty members of the Department Members (Ex-Officio)
                                    </td>
                                    <td>
                                        Ms. Smita Das, Assistant Professor, Optometry Dept.

                                        <hr />
                                        Ms. Lipika Kalita Assistant Professor, Optometry Dept.
                                        <hr />
                                        Ms. Bhayolina Sarma Assistant Professor, Optometry Dept.
                                        <hr />
                                        Ms. Priyankita Priyam Thakuria Assistant Professor, Optometry
                                        Dept.
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Expert (Academic)</td>
                                    <td>
                                        Mr. Soujanya Mondal, Assistant Professor, Sri Sankaradeva
                                        Nethralaya, Guwahati.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Expert (Industry)</td>
                                    <td>
                                        Mr. Partha Pratim Das, Senior Consultant Optometrist, GMCH.
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
                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/UG Optometry.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - B.Optometry
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSMAS/Maters Optometry.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Syllabus - M.Optometry
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
