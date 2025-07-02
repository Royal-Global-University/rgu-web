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
            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-product-design/mob-productdesign.png" alt="">

            <div class="container">

                <!-- courses section web  -->
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                    <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold">COURSES</th>
                        <th class="text-light  font-weight-bold">DURATION</th>
                        <th class="text-light  font-weight-bold">DETAILS</th>
                    </thead>
                    <tbody class="para1 bg-light">
                        <tr>
                            <td>1.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">Bachelor of Design (Product Design)</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-Bachelor-of-Design-Product-Design"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

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
            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-product-design/web-productdesign.png" alt="">

            <div class="container">

                <!-- courses section web  -->
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                    <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold">COURSES</th>
                        <th class="text-light  font-weight-bold">DURATION</th>
                        <th class="text-light  font-weight-bold">DETAILS</th>
                    </thead>
                    <tbody class="para1 bg-light">
                        <tr>
                            <td>1.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">Bachelor of Design (Product Design)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-Bachelor-of-Design-Product-Design"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

        <div class="container pb-5 pt-3">


            <div>
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
                                    <td>Chairperson (Ex-Officio) Dean of School</td>
                                    <td>Prof. (Dr.) Hari Prasad Agarwal, Dean of RSA/RSD/RSFA</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>All Heads of the Departments - Member (Ex-Officio)</td>
                                    <td>
                                        Zubin Islam,Assistant Professor Co-Ordinator of CD,GD&amp; PD
                                        <hr />
                                        Asif Iqbal Mazid,Assistant Professor, Co-Ordinator of FD
                                        <hr />
                                        Ar. Bhola Saha,Assistant Professor Co-Ordinator of ID
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>External Experts for each Department (Academic)</td>
                                    <td>
                                        Prof. (Dr.) Sougata Karmakar, HOD, Dept. of Design, Indian
                                        Institute of Technology, Guwahati
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>External Experts for each Department (Industry)</td>
                                    <td>
                                        Mr. Tuhin Bhuyan, Full stack developer + Interaction Designer
                                        Founder @ Projckt, Chandigarh
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>
                                        Two Faculty members of the School nominated by the Vice
                                        Chancellor
                                    </td>
                                    <td>
                                        Asif Iqbal MazId, Assistant Professor, Fashion Design
                                        <hr />
                                        Sanjay Krishna Kutum, Assistant Professor, Communication Design
                                    </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>
                                        Registrar, Member Secretary (Ex-officio)/Registrar nominee
                                    </td>
                                    <td>
                                        Ms. Moon Moon Ahmed, Senior Manager, Academic Section, The Assam
                                        Royal Global University
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                    </h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Prof. (Dr.) Hari Prasad Agarwal</td>
                                    <td>Dean of RSA/RSD/RSFA</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Prof. (Dr.) Ankur Ganguly</td>
                                    <td>Dean Academics, i/c Dean RSET &amp; RSIT</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                                    <td>Professor, RSP</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Prof. (Dr.) Pradip Jyoti Mahata</td>
                                    <td>Dean, RSCOM</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr. Sumanta Dutta Chowdhury</td>
                                    <td>Assistant Professor, RSFA</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. Susmita Nath</td>
                                    <td>Assistant Professor, RSFT</td>
                                    <td>Member</td>
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
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSD/Structure of syllabus - Product Design.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>Structure of Syllabus - Product Design
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/remaining-syllabus/RSD/B.Des. Product Design 2023-24 Syllabus & Curriculum Sem 1-4 NCrF 3.0.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i>Syllabus and Curriculum - B.Des. Product
                                                    Design
                                                    <i class="fa fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body"></div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"><strong>
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
