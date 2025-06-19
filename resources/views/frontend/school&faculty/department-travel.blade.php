@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-travel/mob-top.png"
                alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc./ BA Travel & Tourism
                                            Management</strong><br>
                                            Honours / Honours withResearch
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-ba-travel"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Bachelor of Travel & Tourism Management
                                            (BTTM)</strong><br>
                                            Honours / Honours withResearch
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-Bachelor-Travel"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Master of Travel & Tourism Management
                                            (MTTM)</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-Master-Travel&Tourism"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-travel/mob-btm.png" alt="">
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://media.rgu.ac/department-all/dept-travel/web-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc./ BA Travel & Tourism
                                            Management</strong><br>
                                            Honours / Honours withResearch
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-b-sc-ba-travel"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Bachelor of Travel & Tourism Management
                                            (BTTM)</strong><br>
                                            Honours / Honours withResearch
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-Bachelor-Travel"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">

                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">Master of Travel & Tourism Management
                                            (MTTM)</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-Master-Travel&Tourism"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-travel/web-btm.png" alt="">
        </div>

        <div class="container pb-5 pt-3">

            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="font-weight-bold text-white">DATE</th>
                                    <th class="font-weight-bold text-white">EVENTS</th>
                                    <th class="font-weight-bold text-white">NAME OF THE GUEST
                                    </th>
                                </tr>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>20th February, 2020 </td>
                                    <td>Interactive Session On Tourism with Special Focus on Home Stay.
                                    </td>
                                    <td>Prof. Shiela Bora, Professor of History Department in Royal Global
                                        University, Guwahati </td>
                                </tr>
                                <tr>
                                    <td>27th September, 2021</td>
                                    <td>Webinar on World Tourism Day 2021: Tourism for Inclusive Growth
                                    </td>
                                    <td>Mr. Chandan Nath, Founder and Head - CN Travels, Founder Director -
                                        Centre for Tourism Studies, Guwahati </td>
                                </tr>
                                <tr>
                                    <td>12th May, 2022 </td>
                                    <td>Skill Enhancement on Culinary Knowledge </td>
                                    <td>Mr. Anirban Goswami, Sous-Chef Novotel, Guwahati</td>
                                </tr>
                                <tr>
                                    <td>31st May, 2022</td>
                                    <td>Webinar on The Employability Factors for the Hospitality Industry
                                    </td>
                                    <td>Prof. S.C. Bagri</td>
                                </tr>
                                <tr>
                                    <td>13th Septenber, 2022</td>
                                    <td>Tourism Awareness Program on "Rethinking Tourism"</td>
                                    <td>Mr. Udit Bhanu Barthakur</td>
                                </tr>
                                <tr>
                                    <td>20th October, 2022 </td>
                                    <td>Tourism Entrepreneurship - A Way Forward for the New Generation
                                    </td>
                                    <td>Mr. Chandan Nath </td>
                                </tr>
                                <tr>
                                    <td>21st November, 2022 </td>
                                    <td>Soft Skill, Personality Development &amp; Grooming </td>
                                    <td>Mr. Anjan Choudhary </td>
                                </tr>
                                <tr>
                                    <td>26th May, 2023 </td>
                                    <td>Tourism and nd North East India: The Way Forward</td>
                                    <td>Dr. Sanjeev Kumar Saxena, Dr. Mridul Dutta, Dr. Shapana Medhi </td>
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
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">
                                <tr>
                                    <th class="text-white">#</th>
                                    <th class="text-white">Position in S-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Chairperson (Ex-Officio) Dean of School</td>
                                    <td>Dr. Soumita Sen,
                                        Professor and Dean, RSHM &amp; RSTTM
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>All Heads of the Departments - Members (Ex-Officio)
                                    </td>
                                    <td>Dr. Indrajit Dutta,
                                        Assistant Professor and Co-ordinator, RSHM &amp; RSTTM

                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Professors of the School Members (Ex-Officio)
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Experts for each Department (Academic)
                                    </td>
                                    <td>Dr. Saurabh Kumar Dixit,
                                        Associate Professor/Registrar i.c, Department of Tourism &amp; Hotel
                                        Management, NEHU

                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>External Experts for each Department (Industry)
                                    </td>
                                    <td>Mr. Nirmalaya Choudhury,
                                        Executive Director Operation Jungle Travels, Guwahati
                                        <hr>
                                        Mr. Jayanta Das (Cluster General Manager Northeast, Darjeeling, and General
                                        Manager Vivanta Guwahati

                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Two Faculty members of the School nominated by the Vice Chancellor
                                    </td>
                                    <td>Mr. Chandan Bezborah,
                                        Lecturer, RSHM &amp; RSTTM
                                        <hr>
                                        Ms. Ankita Saikia,
                                        Assistant Professor, RSHM &amp; RSTTM

                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Registrar, Member Secretary (Ex-officio)

                                    </td>
                                    <td>Dr. D N Singh, Registrar or his nominee
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
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 ">
                            <thead class="text-white" style="background-color: #27467A;">
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
                                    <td>Head of the Department </td>
                                    <td>Dr. Syed Islam</td>
                                    <td>HOD, RSTTM</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2.</td>
                                    <td rowspan="2" class="align-middle">Two Professors</td>
                                    <td>Prof. (Dr.) Soumitra Sen</td>
                                    <td>Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. (Dr.) Mahesh Uniyal</td>
                                    <td>Dean, RSHM &amp; RSTTM</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Two Associate Professors – one of them will be the member secretary </td>
                                    <td>Dr. Indrajit Dutta</td>
                                    <td>Associate Professor</td>
                                    <td>Member Secretary</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4.</td>
                                    <td rowspan="3" class="align-middle">Three external members not below the rank
                                        of Professors, including members from an allied department, who will be
                                        nominated by the URC </td>
                                    <td>Prof. (Dr.) B. S Mipun</td>
                                    <td>Dean, RSEES</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. (Dr.) Bhuban Chandra Barooah</td>
                                    <td>Dean, RSLA</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. (Dr.) George</td>
                                    <td>Dean, RSB</td>
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
                                                <a href="mobile-assets/department-all/syllabus-new/22RSHM-TTM/BA-BSC Travel & Tourism Management WEF 2023 Batch (BoS 9).pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> BA/ BSc. IN TRAVEL & TOURISM
                                                    MANAGEMENT (4 YEARS SINGLE MAJOR)
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
                                                <!-- <a href="assets/Departmentalpdf/Old Syllabus MTTM.pdf" target="_blank">
                                                            <i class="fa fa-file-text px-2"></i> Old Syllabus MTTM.pdf <i class="fa fa-download"></i>
                                                        </a> -->
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
