@extends('frontend.master')
@section('content')
          <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
          @include('frontend/components/mobileheader')
          <!-- till about dept  -->
          <section style="background-color: #fff8f0; padding: 80px 10px 20px 10px; position: relative;">

            <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Public Administration</span>
            </h1>

            <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
              Humanities & Social Sciences (RSHSS)
            </h2>

            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-12">

                  <div class="txaa-slide-down-1">
                    <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                      <img class="rounded" decoding="async"
                        src="mobile-assets/department-all/dept-public-admin/head-img.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                  <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Department of Public Administration is dedicated to the comprehensive study and practice of Public
                    Governance, Policy-making, and Management within the Public sector. It boasts an interdisciplinary
                    approach and is supported by experienced faculty and strong research output. The department offers
                    practical training through summer internships, research projects and workshops ensuring students gain
                    hands-on experience. Its innovative curriculum covers key areas such as Policy Analysis, Public
                    Management, Indian Administration, Governance Ethics, Public Financial Management, Regulatory
                    Governance, E-governance, Industrial Relations and Labour Law, Comparative Public Administration, Local
                    Government like urban and rural development and Data Analysis or Research related to the subject.

                    Graduates and Post-graduates are well-prepared for diverse careers in Government, International
                    Organizations, Public Sector Consultancy, Academia, the Non-profit Sector, and the Private Sector. They
                    can undertake roles such as policy analyst, administrative officer, public affairs manager, consultant,
                    program evaluator, budget analyst, community development specialist, human resources manager, urban
                    planner, environmental policy analyst, public health administrator, legislative assistant, non-profit
                    manager, academician or researcher, international development specialist, and public sector IT manager.
                    The Department's emphasis on ethical practices and good governance equips students to lead and manage
                    public organizations effectively. With a strong foundation and focus on theoretical understanding and
                    analytical skills, the Department of Public Administration ensures its graduates are ready to meet the
                    evolving demands of public service and contribute significantly to society.
                  </p>

                </div>
              </div>
            </div>

            <div class="pt-3">

              <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
              </h1>

              <img src="mobile-assets/department-all/dept-public-admin/vision-mission-mob.png" alt="">
            </div>


          </section>
          <!-- till about dept  -->

          <!-- courses offered  -->
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
                        <strong style="color: #023e8a;" class="#">Master of Public Administration</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MA-Public-Administration"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Public Administration</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BA-Public-Administration"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>
          <!-- courses offered  -->


        </div>

        <div class="website">
          <!--Start Header-->
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
          <!--End Header-->

          <section style="background-color: #FFF8F0;">
            <div class="p-5">
              <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Public Administration</span>
              </h1>

              <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                Humanities & Social Sciences (RSHSS)
              </h2>
            </div>

            <div class="container p-4">
              <div class="row align-items-center gx-5">

                <div class="col-lg-6">
                  <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div>
                      <img class="rounded w-60" decoding="async"
                        src="mobile-assets/department-all/dept-public-admin/head-img.jpg" alt="">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">

                  <h2 class="headd1" style="color: #264273; font-weight: 700;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Department of Public Administration is dedicated to the comprehensive study and practice of Public
                    Governance, Policy-making, and Management within the Public sector. It boasts an interdisciplinary
                    approach and is supported by experienced faculty and strong research output. The department offers
                    practical training through summer internships, research projects and workshops ensuring students gain
                    hands-on experience. Its innovative curriculum covers key areas such as Policy Analysis, Public
                    Management, Indian Administration, Governance Ethics, Public Financial Management, Regulatory
                    Governance, E-governance, Industrial Relations and Labour Law, Comparative Public Administration, Local
                    Government like urban and rural development and Data Analysis or Research related to the subject.

                  </p>

                </div>

              </div>
            </div>

            <div class="bg-white">
              <p class="para1 container" style="color: #24477f; text-align: justify; padding: 30px 0px;">
                Graduates and Post-graduates are well-prepared for diverse careers in Government, International
                Organizations, Public Sector Consultancy, Academia, the Non-profit Sector, and the Private Sector. They
                can undertake roles such as policy analyst, administrative officer, public affairs manager, consultant,
                program evaluator, budget analyst, community development specialist, human resources manager, urban
                planner, environmental policy analyst, public health administrator, legislative assistant, non-profit
                manager, academician or researcher, international development specialist, and public sector IT manager.
                The Department's emphasis on ethical practices and good governance equips students to lead and manage
                public organizations effectively. With a strong foundation and focus on theoretical understanding and
                analytical skills, the Department of Public Administration ensures its graduates are ready to meet the
                evolving demands of public service and contribute significantly to society.
              </p>
            </div>

            <div style="background-color: #fff;">
              <div class="p-5">
                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                  <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                </h1>

                <img class="w-100" src="mobile-assets/department-all/dept-public-admin/vision-mission-web.png" alt="">
              </div>
            </div>


          </section>

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
                        <strong style="color: #023e8a;" class="#">Master of Public Administration</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MA-Public-Administration"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Public Administration</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BA-Public-Administration"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>

          <!--End Section-->
        </div>

        <div class="container">

          <div>

            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Events & <span style="color: #FF9A1E; font-weight: 500;">Achievements</span></h2>

            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="font-weight-bold text-white">S.No.</th>
                    <th class="font-weight-bold text-white">Name</th>
                    <th class="font-weight-bold text-white">Designation</th>
                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                    <th class="font-weight-bold text-white">Date</th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Dr. D.P. Sharma</td>
                    <td>
                      Professor, Department of Political Science, Gauhati University
                    </td>
                    <td>
                      "Guest Speaker ‘Election Commission and Model Code of Conduct’"
                    </td>
                    <td>28th March, 2024</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Vikas Tripathi</td>
                    <td>
                      Assistant Professor, Department of Political Science, Gauhati
                      University
                    </td>
                    <td>
                      "Guest Speaker ‘Election Commission and Model Code of Conduct’"
                    </td>
                    <td>28th March, 2024</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Mohinder Singh</td>
                    <td>
                      Visiting Professor, Department of Political Science and Public
                      Administration, RIMT University Punjab
                    </td>
                    <td>
                      "Resource Person ‘Online FDP on Emerging Areas of Research in
                      Public Administration’"
                    </td>
                    <td>29th May-3rd June 2024</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Jayanta Krishna Sharmah</td>
                    <td>
                      Dean, Professor and Head, Department of Political Science,
                      Gauhati University
                    </td>
                    <td>
                      "Resource Person ‘Online FDP on Emerging Areas of Research in
                      Public Administration’"
                    </td>
                    <td>29th May- 3rd June 2024</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Dr. Janak Singh Meena</td>
                    <td>
                      Professor and Head, Department of Gandhian Thought and Peace
                      Studies, Central University of Gujarat
                    </td>
                    <td>
                      "Resource Person ‘Online FDP on Emerging Areas of Research in
                      Public Administration’"
                    </td>
                    <td>29th May- 3rd June 2024</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Dr. D.P. Sharma</td>
                    <td>
                      Professor, Department of Political Science, Gauhati University
                    </td>
                    <td>
                      "Resource Person‘Online FDP on Emerging Areas of Research in
                      Public Administration’"
                    </td>
                    <td>29th May-3rd June 2024</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Dr. Vikas Tripathi</td>
                    <td>
                      Assistant Professor, Department of Political Science, Gauhati
                      University
                    </td>
                    <td>
                      "Resource Person ‘Online FDP on Emerging Areas of Research in
                      Public Administration’"
                    </td>
                    <td>29th May-3rd June 2024</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Shri Dipak Kumar Sharma</td>
                    <td>
                      Chairman, Indian Institute of Public Administration, Assam
                    </td>
                    <td>
                      "Guest Speaker ‘Interactive Session on Civic Responsibility For
                      Good Governance’"
                    </td>
                    <td>30th Sep 2024</td>
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
                    <td>
                      Dr. Meenu Sharma, Head, Department of Public Administration
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Ms. Mabel Aind, Assistant Professor
                      <hr />
                      Ms. Nikita Biswakarma,, Teaching Assistant
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>External Expert (Academic)</td>
                    <td>
                      Prof. Inderjeet Singh Sodhi, Professor, RGNIYD, TN.
                      <hr />
                      Prof. Mamta Mokta, Dean, Social Science, HPU, Shimla
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
                    <td>Dr. Meenu</td>
                    <td>Professor</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Monika Kumari</td>
                    <td>Assistant Professor</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. Upendra Tripathi</td>
                    <td>Assistant Professor</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Swabera Islam</td>
                    <td>Professor</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Gautam Majumdar</td>
                    <td>Professor</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Shiela Bora</td>
                    <td>Professor</td>
                    <td>External Member</td>
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
                        <button class="accordion-button collapsed" style="background-color: #264273; color: #fff;"
                          type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                          aria-controls="collapseOne"><strong>
                            Under Graduate
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="row">
                            <a href="mobile-assets/department-all/dept-public-admin/syllabus-pdf/course-structure.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Structure of Syllabus - UG

                              <i class="fa fa-download"></i>
                            </a>

                            <a href="mobile-assets/department-all/dept-public-admin/syllabus-pdf/ba-public-admin.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - BA Public Administration

                              <i class="fa fa-download"></i>
                            </a>


                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" style="background-color: #264273; color: #fff;"
                          type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo">
                          <strong>
                            Post Graduate
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="row">
                            <a href="mobile-assets/department-all/dept-public-admin/syllabus-pdf/ma-public-admin.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - MA Public Administration
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" style="background-color: #264273; color: #fff;"
                          type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                          aria-controls="collapseFour">
                          <strong>
                            Doctoral Programme
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <a href="phd" class="para1" target="_blank"><strong>
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
@endsection
