@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile" >
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-Info-technology/mob-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. IT</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BSc-IT"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. IT</strong>
                                    </p>

                                </td>
                                <td>
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-IT"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">BCA</strong>
                                    </p>

                                </td>
                                <td>
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BCA"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>4.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">MCA</strong>
                                    </p>

                                </td>
                                <td>
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MCA"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-Info-technology/mob-btm.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <img src="https://media.rgu.ac/department-all/dept-Info-technology/web-top.png" alt="">

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
                                        <strong style="color: #023e8a;" class="#">B.Sc. IT</strong>
                                    </p>
                                </td>
                                <td class="para1">
                                    4 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BSc-IT"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>2.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">M.Sc. IT</strong>
                                    </p>

                                </td>
                                <td>
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MSc-IT"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>3.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">BCA</strong>
                                    </p>

                                </td>
                                <td>
                                    4 Years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-BCA"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td>4.</td>
                                <td>
                                    <p class="para1">
                                        <strong style="color: #023e8a;" class="#">MCA</strong>
                                    </p>

                                </td>
                                <td>
                                    2 years
                                </td>
                                <td>
                                    <a target="_blank" href="programs-MCA"><button type="button"
                                            style="background-color: #FF9A1E; color: #fff;"
                                            class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <img src="https://media.rgu.ac/department-all/dept-Info-technology/web-down.png" alt="">

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
                                    <th class="text-white">Position in S-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Convener (Ex-Officio)- Head of the Department</td>
                                    <td>Prof. (Dr.) Ankur Ganguly, Dean Academics, Dean-RSET/RSIT</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>All Heads of the Departments - Members (Ex-Officio)</td>
                                    <td>
                                        Dr. Anupam Das, Associate Professor, HoD , RSIT
                                        <hr />
                                        Dr. Ishita Chakraborty, Associate Professor, HoD Dept of CSE,
                                        RSET, RGU
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>External Experts for each Department (Academic)</td>
                                    <td>
                                        Prof. (Dr.) Subhrajyoti Bordoloi, HoD, Dept of Computer
                                        Applications, AEC
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>External Experts for each Department (Industry)</td>
                                    <td>Mr. Anup Kr. Prasad, Tech Lead</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Two Faculty members of the School nominated by the Vice
                                        Chancellor
                                    </td>
                                    <td>
                                        Mrs. Ankita G. Agarwala, Assistant Professor, RSIT, RGU
                                        <hr />
                                        Mr. Saurabh Sutradhar, Assistant Professor, Dept Of CSE, RSET,
                                        RGU
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Registrar, Member Secretary (Ex-officio)</td>
                                    <td>Dr. D N Singh or his nominee</td>
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
                                    <td>1</td>
                                    <td>Head of the Department</td>
                                    <td>Dr. Raghavendra Prasad</td>
                                    <td>Associate Professor</td>
                                    <td>Chairperson</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2</td>
                                    <td rowspan="2" class="align-middle">Professors</td>
                                    <td>Prof. Ankur Ganguly</td>
                                    <td>Professor</td>
                                    <td>Professor</td>
                                </tr>
                                <tr>
                                    <td>Prof. Rashel Sarkar</td>
                                    <td>Professor</td>
                                    <td>Professor</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3</td>
                                    <td rowspan="2" class="align-middle">
                                        Associate Professors – one of them will be the member secretary
                                    </td>
                                    <td>Dr. Anupam Das</td>
                                    <td>Associate Professor</td>
                                    <td>Member Secretary</td>
                                </tr>
                                <tr>
                                    <td>Dr. Israfil Hussain</td>
                                    <td>Associate Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Assistant Professors holding Ph.D. degree</td>
                                    <td>Dr. Sumi Kankana Dewan</td>
                                    <td>Assistant Professor</td>
                                    <td>Member</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">5</td>
                                    <td rowspan="3" class="align-middle">
                                        Three external members not below the rank of Professors,
                                        including members from an allied department, who will be
                                        nominated by the URC
                                    </td>
                                    <td>Prof. Arnab Kumar Sarma</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Kamal Debnath</td>
                                    <td>Professor</td>
                                    <td>External Member</td>
                                </tr>
                                <tr>
                                    <td>Prof. Hiren Deva Sarma</td>
                                    <td>Professor</td>
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
                                                <a href="mobile-assets/department-all/syllabus-new/13_RSIT/BSC IT_Accademic_Year_25_26 _Ver13_03_25_CO4.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> B.Sc. IT Academic Year 2025 - 2026
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <a href="mobile-assets/department-all/syllabus-new/13_RSIT/Cover and Content BSC IT AY_2025_26.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Cover and Content B.Sc. IT AY 2025
                                                    - 2026
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <a href="mobile-assets/department-all/syllabus-new/13_RSIT/Proposed Course Structres 2025.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure 2025
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
                                            <strong>
                                                Post Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">

                                                <a href="mobile-assets/department-all/syllabus-new/13_RSIT/M. Sc. IT.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> M.Sc. IT
                                                    <i class="fa fa-download"></i>
                                                </a>

                                                <a href="mobile-assets/department-all/syllabus-new/13_RSIT/MCA 2 year NCRF 25 -26.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Course Structure & Syllabus (Based
                                                    on National Education Policy 2020) For Master of Computer Applications
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
                                                </strong>
                                            </a>
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
@endsection
