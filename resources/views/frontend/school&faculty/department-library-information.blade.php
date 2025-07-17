@extends('frontend.master')
@section('content')
    <div style="background-image: url(https://media.rgu.ac/department-all/bg.svg); background-size: cover;">

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
          <img style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-lib/mob-top.png"
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
                        <strong style="color: #023e8a;" class="#">Master of Library & Information Sciences (M.L.I.Sc)</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-Master-of-Library&Information-Sciences"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>

          <img src="https://media.rgu.ac/department-all/dept-lib/mob-down.png" alt="">

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
          <img src="https://media.rgu.ac/department-all/dept-lib/web-top.png" alt="">

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
                        <strong style="color: #023e8a;" class="#">Master of Library & Information Sciences (M.L.I.Sc)</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-Master-of-Library&Information-Sciences"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>

          <img src="https://media.rgu.ac/department-all/dept-lib/web-down.png" alt="">

        </div>

        <div class="container pb-5 pt-3">

          <div>
            <div>

              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

              <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>Sl. No.</th>
                      <th>Name of the Workshop/ Training</th>
                      <th>Date</th>
                      <th>National/ International</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                    <tr>
                      <td>1</td>
                      <td>International Workshop on Koha Integrated Library Management System</td>
                      <td>28 to 30 August 2024</td>
                      <td>International</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Training on Enhancing Academic Integrity with DrillBit Plagiarism Software</td>
                      <td>31 May 2024</td>
                      <td>National</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Workshop on Research Integrity and Reference Management</td>
                      <td>22 February 2025</td>
                      <td>National</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>RGU Book Fair 2025</td>
                      <td>23 to 24 April 2025</td>
                      <td>National</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div>
            <div>

              <h2 class="headd2 fw-bold text-center pt-3 pb-3" style="color: #27467A; font-weight: 900;">
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
                      <td>
                        Prof. Ankur Ganguly, Dean Academics, i/c Dean RSET &amp; RSIT
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>External Experts for each Department (Academic)</td>
                      <td>
                        Dr. Mukut Sarmah, Associate Professor, Assam University Silchar
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>External Experts for each Department (Industry)</td>
                      <td>Dr. Utpal Das, University Librarian, Dibrugarh University</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>
                        Two Faculty members of the School nominated by the Vice
                        Chancellor
                      </td>
                      <td>
                        Dr. Md. Mukutor Rahman, Assistant Professor, RSLIS and Library
                        In charge, RGU
                        <hr />
                        Dr. Hirak Jyoti Hazarika, Assistant Professor, RSLIS
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Registrar, Member Secretary (Ex-officio)</td>
                      <td>Dr. D N Singh, Registrar and his nominee</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div>
            <div>

              <h2 class="headd2 fw-bold text-center pt-3 pb-3" style="color: #27467A; font-weight: 900;">
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
                      <td>Dr. Hirak Jyoti Hazarika</td>
                      <td>Assistant Professor &amp;HoD</td>
                      <td>Chairperson</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Two Assistant Professors holding Ph.D. degree</td>
                      <td>Dr. Md. Mukutor Rahman</td>
                      <td>Assistant Professor &amp; Librarian (i/c)</td>
                      <td>Member</td>
                    </tr>
                    <tr>
                      <td rowspan="3">3.</td>
                      <td rowspan="3" class="align-middle">
                        Three external members not below the rank of Professors,
                        including members from an allied department, who will be
                        nominated by the URC
                      </td>
                      <td>Prof. Bijoy Singh Mipun</td>
                      <td>Professor</td>
                      <td>External Member</td>
                    </tr>
                    <tr>
                      <td>Prof. Pradip Jyoti Mahanta</td>
                      <td>Professor</td>
                      <td>External Member</td>
                    </tr>
                    <tr>
                      <td>Prof. George AP</td>
                      <td>Professor</td>
                      <td>External Member</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div>

            <h2 class="headd2 fw-bold text-center pt-3 pb-3" style="color: #27467A; font-weight: 900;">
              Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

            <div class="p-2">
              <div class="row">
                <div class="col-lg-12">
                  <div class="accordion para1" id="accordionExample">

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
                            <a href="https://media.rgu.ac/department-all/syllabus-new/16_RSLIS/MLISC Syllabus 2025.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - MLISC
                              <i class="fa fa-download"></i>
                            </a>

                            <a href="https://media.rgu.ac/department-all/syllabus-new/16_RSLIS/Structure PG LISC.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Structure - LISC
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
                          <div class="row">
                            <a href="assets/Departmentalpdf/PhD PAPER 3 RSLIS.pdf" target="_blank">
                              <i class="fa fa-file-text px-2"></i> PhD PAPER 3 RSLIS.pdf
                              <i class="fa fa-download"></i>
                            </a>
                            <a href="assets/Departmentalpdf/PhD PAPER 4 RSLIS.pdf" target="_blank">
                              <i class="fa fa-file-text px-2"></i> PhD PAPER 4 RSLIS.pdf
                              <i class="fa fa-download"></i>
                            </a>
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
                </div>
                <div class="col-lg-6"></div>
              </div>
            </div>
          </div>

        </div>


      </div>
@endsection
