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
            <img style="padding-top: 80px; position: relative;" class="pb-3" src="https://media.rgu.ac/department-all/dept-food-tech/mobile-top.png" alt="">
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
                                    <strong style="color: #023e8a;" class="#">B.Sc. - Food Technology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-b-sc-food-technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Sc. - Food Technology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MSc-Food-Technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-food-tech/mobile-down.png" alt="">


            <div class="container pb-5 pt-3">


                <div>
                    <div>

                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                                        <td>Dr. SubbaRao M Gavaravarapu</td>
                                        <td>
                                            "Scientist 'F' &amp; Head Nutrition Information Communication
                                            &amp; Health Education (NICHE), Guwahati"
                                        </td>
                                        <td>Invited talk</td>
                                        <td>9/28/2023</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Er. Raju Prajapati</td>
                                        <td>CEO Agrivision4U, Indore</td>
                                        <td>Career Counselling</td>
                                        <td>4/1/2024</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mr. Anupam Baruah</td>
                                        <td>CEO MIHA Trading Solutions</td>
                                        <td>Invited talk</td>
                                        <td>8/9/2024</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Prof. (Dr.) Iddya Karunasagar</td>
                                        <td>
                                            Research Advisor at Nitte University, Mangalore and
                                            International consultant in food safety, FAO
                                        </td>
                                        <td>Invited talk</td>
                                        <td>9/16/2024</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Sabu Thomas</td>
                                        <td>
                                            "Director Centre of Excellence in Microbiome (CoEM) Govt.of
                                            Kerala, Thiruvananthapuram, Kerala"
                                        </td>
                                        <td>Invited talk</td>
                                        <td>9/16/2024</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. (Dr.) Bipul Deka</td>
                                        <td>Assam Agriculture University, Jorhat</td>
                                        <td>Invited talk</td>
                                        <td>10/15/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <div>

                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                                        <td>Prof. Anupam Chatterjee, Dean , RSBSC</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="justify-align-center">
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Prof. Anupam Chatterjee, Dean , RSBSC
                                            <hr />
                                            Dr. Birson Ingti Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Susmita Paul, Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Debajit Kalita, Assistant Professor, Microbiology
                                            <hr />
                                            Prof. Saranga Ranjan Patgiri, Professor, Microbiology
                                            <hr />
                                            Dr. Pankaj Losan Sharma
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Dr. Mojibur R. Khan Associate Professor, IASST, Guwahati
                                            <hr />
                                            Prof. Suvendra Kumar Ray, Department of MBBT, Tezpur University
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                        </h2>

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
                                        <td>Dr. Preetisagar Talukdar</td>
                                        <td>Assistant Professor &amp;Co-Ordinator</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Two Professors</td>
                                        <td>Prof. (Dr.) Pranati Das</td>
                                        <td>Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Pankaj Jha</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Jon Jyoti Kalita</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">4.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. (Dr.) Anupam Chatterjee</td>
                                        <td>Dean, RSBSC</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Nikhil Chrungoo</td>
                                        <td>Dean, RSLSC</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Ranjan Dutta Kalita</td>
                                        <td>Professor, RSBSC</td>
                                        <td>External Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div>

                    <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

                    <div class="p-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion para1" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne"><strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/Structure of syllabus - UG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                        YEAR UG PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/UG syllabus NEP 2020.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> B.Sc. IN FOOD TECHNOLOGY (4
                                                        YEARS SINGLE MAJOR)
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/Proposed PG syllabus 2025-26 (NEP).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> M.Sc. in Food Technology
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/Structure of syllabus - PG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2
                                                        YEAR PG PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="doctoral-programme.html" class="para1" target="_blank">
                                                    <strong>
                                                        Click to View...
                                                    </strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
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
            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-food-tech/web-top.png" alt="">

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
                                    <strong style="color: #023e8a;" class="#">B.Sc. - Food Technology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-b-sc-food-technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Sc. - Food Technology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MSc-Food-Technology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-food-tech/web-down.png" alt="">


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
                                        <td>Dr. SubbaRao M Gavaravarapu</td>
                                        <td>
                                            "Scientist 'F' &amp; Head Nutrition Information Communication
                                            &amp; Health Education (NICHE), Guwahati"
                                        </td>
                                        <td>Invited talk</td>
                                        <td>9/28/2023</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Er. Raju Prajapati</td>
                                        <td>CEO Agrivision4U, Indore</td>
                                        <td>Career Counselling</td>
                                        <td>4/1/2024</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mr. Anupam Baruah</td>
                                        <td>CEO MIHA Trading Solutions</td>
                                        <td>Invited talk</td>
                                        <td>8/9/2024</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Prof. (Dr.) Iddya Karunasagar</td>
                                        <td>
                                            Research Advisor at Nitte University, Mangalore and
                                            International consultant in food safety, FAO
                                        </td>
                                        <td>Invited talk</td>
                                        <td>9/16/2024</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Sabu Thomas</td>
                                        <td>
                                            "Director Centre of Excellence in Microbiome (CoEM) Govt.of
                                            Kerala, Thiruvananthapuram, Kerala"
                                        </td>
                                        <td>Invited talk</td>
                                        <td>9/16/2024</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. (Dr.) Bipul Deka</td>
                                        <td>Assam Agriculture University, Jorhat</td>
                                        <td>Invited talk</td>
                                        <td>10/15/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                                        <td>Convener (Ex-Officio)- Head of the Department</td>
                                        <td>Prof. Anupam Chatterjee, Dean , RSBSC</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="justify-align-center">
                                            All Faculty members of the Department Members (Ex-Officio)
                                        </td>
                                        <td>
                                            Prof. Anupam Chatterjee, Dean , RSBSC
                                            <hr />
                                            Dr. Birson Ingti Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Susmita Paul, Assistant Professor, Microbiology
                                            <hr />
                                            Dr. Debajit Kalita, Assistant Professor, Microbiology
                                            <hr />
                                            Prof. Saranga Ranjan Patgiri, Professor, Microbiology
                                            <hr />
                                            Dr. Pankaj Losan Sharma
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Expert (Academic)</td>
                                        <td>
                                            Dr. Mojibur R. Khan Associate Professor, IASST, Guwahati
                                            <hr />
                                            Prof. Suvendra Kumar Ray, Department of MBBT, Tezpur University
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
                                        <td>Dr. Preetisagar Talukdar</td>
                                        <td>Assistant Professor &amp;Co-Ordinator</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Two Professors</td>
                                        <td>Prof. (Dr.) Pranati Das</td>
                                        <td>Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Pankaj Jha</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Jon Jyoti Kalita</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">4.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. (Dr.) Anupam Chatterjee</td>
                                        <td>Dean, RSBSC</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Nikhil Chrungoo</td>
                                        <td>Dean, RSLSC</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. (Dr.) Ranjan Dutta Kalita</td>
                                        <td>Professor, RSBSC</td>
                                        <td>External Member</td>
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne"><strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/Structure of syllabus - UG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 4
                                                        YEAR UG PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/UG syllabus NEP 2020.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> B.Sc. IN FOOD TECHNOLOGY (4
                                                        YEARS SINGLE MAJOR)
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/Proposed PG syllabus 2025-26 (NEP).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> M.Sc. in Food Technology
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/4RSBSC/Food Technology/Structure of syllabus - PG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2
                                                        YEAR PG PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class="para1" target="_blank">
                                                    <strong>
                                                        Click to View...
                                                    </strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection
