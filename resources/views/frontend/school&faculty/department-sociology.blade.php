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
          <!-- till about dept  -->
          <section style="background-color: #fff8f0; padding: 130px 10px 0px 10px;">

            <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Sociology</span>
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
                      <img class="rounded" decoding="async" src="mobile-assets/department-all/dept-sociology/head-img.png"
                        alt="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                  <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The faculties of Department of Sociology are from various reputed institution like Jawaharlal Nehru
                    University, Tata Institute of Social Sciences, Delhi School of Economics, Indian Institute of Technology
                    and these diversities in terms of the institution they belong to is the major strength of the
                    Department. The interests and expertise of the faculty cover a broad sociological canvas. The courses
                    therefore offered are interdisciplinary in nature. Classical sociological theories, Research Methods,
                    Gender studies, Visual Culture, Health and Illness, are a few among the expertise of the department.
                    Another strength of the department is to promote experiential learning. Sociology touches upon every
                    aspect of human social life and activity. Therefore, to make learning in the department experiential
                    students are encouraged to write projects based on field experiences, students are taken for fieldwork
                    to experience reality and draw correlations between theory and practice.
                  </p>

                </div>
              </div>
            </div>

            <div class="bg-white container">
              <div>

                <p class="para1 fw-bold" style="color: #24477f; text-align: justify; padding-top: 30px;">
                  The courses offered in the department are interdisciplinary in nature however, some of the important trust
                  areas are as follows:
                </p>

                <ol class="para1" style="color: #27467A; line-height: 1.6;">
                  <li>Sociology of Law</li>
                  <li>Sociology of Music</li>
                  <li>Sociology of Religion</li>
                  <li>Sociology of Northeast India</li>
                  <li>Gender Studies</li>
                  <li>Culture Studies</li>
                  <li>Sociology of Environment, etc.</li>
                </ol>


                <p class="para1 fw-bold" style="color: #24477f; text-align: justify;">
                  Future Prospects of the graduate and post graduate
                </p>

                <ol class="para1" style="color: #27467A; line-height: 1.6; padding-bottom: 30px;">
                  <li>The graduate from the department get the opportunity to engage in teaching at primary and secondary
                    schools.</li>
                  <li>The graduate often get admitted in different reputed institutions like University of Delhi, Tezpur
                    University, Delhi School of Economics, South Asia University, TISS, IIT, etc.</li>
                  <li>The post graduate often pursue higher education or get engaged in academia (research and teaching).
                  </li>
                  <li>Students also pursue government civil service or other competitive examinations.</li>
                </ol>

              </div>
            </div>

            <div class="pt-3">

              <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
              </h1>

              <img src="mobile-assets/department-all/dept-sociology/vision-mission-mob.png" alt="">
            </div>

            <div>
              <img src="mobile-assets/department-all/dept-sociology/mobile-mathematics-down.png" alt="">
            </div>
          </section>
          <!-- till about dept  -->

          <!-- courses offered  -->
          <div class="container">
            <h2 class="headd1 fw-bold text-center" style="color: #27467A; font-weight: 900; font-size: 25px;">
              Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

            <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
              <!-- Heading Section -->
              <div
                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                <span style="font-size: 16px;">Master of Arts - Sociology</span>
                <span
                  style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
              </div>

              <!-- Statute Items -->
              <a target="_blank" href="#" style="text-decoration:none;">
                <div
                  style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left: 20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                  <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 18px;">2 years</span>
                  <span>
                    <a class="para1 fw-bold"
                      style="padding: 5px 15px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                      href="">View Details</a>
                  </span>
                </div>
              </a>
            </div>

            <div style="background-color: transparent; padding:10px; width:100%; margin: 0px auto;">
              <!-- Heading Section -->
              <div
                style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                <span style="font-size: 16px; padding-right: 0px; line-height: 1.3;">Bachelor of Arts - Sociology</span> |
                <span style="font-size: 13px; padding-left: 16px; font-weight: 300px !important; line-height: 1.3;">Honours
                  / Honours with Research
                </span>

                <span
                  style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
              </div>

              <!-- Statute Items -->
              <a target="_blank" href="#" style="text-decoration:none;">
                <div
                  style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left: 20px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                  <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 18px;">4 years as per NEP</span>
                  <span>
                    <a class="para1 fw-bold"
                      style="padding: 5px 15px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%); font-size: 13px;"
                      href="">View Details</a>
                  </span>
                </div>
              </a>
            </div>

          </div>
          <!-- courses offered  -->

          <!-- syllabus  -->
          <div class="container">
            <div>
              <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                style="color: #27467A; font-weight: 900; font-size: 25px; letter-spacing: 0.5px;">
                Courses Structure <span style="color: #FF9A1E; font-weight: 600;">and Syllabus</span>
              </h2>

              <div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="accordion para1" id="mobileAccordionCourses" style="border-radius: 12px; overflow: hidden;">

                      <!-- UG -->
                      <div class="accordion-item"
                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                        <h2 class="accordion-header" id="mobileHeadingOne">
                          <button class="accordion-button collapsed"
                            style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                            type="button" data-bs-toggle="collapse" data-bs-target="#mobileCollapseOne"
                            aria-expanded="false" aria-controls="mobileCollapseOne">
                            <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                          </button>
                        </h2>
                        <div id="mobileCollapseOne" class="accordion-collapse collapse" aria-labelledby="mobileHeadingOne"
                          data-bs-parent="#mobileAccordionCourses">
                          <div class="accordion-body"
                            style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                            <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                              <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/structure-course-sociology-ug.pdf"
                                target="_blank" style="color: #27467A;">
                                <i class="fa fa-file-text px-2"></i> Course Structure - Sociology
                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                              </a>

                              <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/syllabus-ug.pdf"
                                target="_blank" style="color: #27467A;">
                                <i class="fa fa-file-text px-2"></i> Syllabus - B.A. Sociology
                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                              </a>

                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- PG -->
                      <div class="accordion-item"
                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                        <h2 class="accordion-header" id="mobileHeadingTwo">
                          <button class="accordion-button collapsed"
                            style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                            type="button" data-bs-toggle="collapse" data-bs-target="#mobileCollapseTwo"
                            aria-expanded="false" aria-controls="mobileCollapseTwo">
                            <i class="fa fa-university me-2"></i> Post Graduate
                          </button>
                        </h2>
                        <div id="mobileCollapseTwo" class="accordion-collapse collapse" aria-labelledby="mobileHeadingTwo"
                          data-bs-parent="#mobileAccordionCourses">
                          <div class="accordion-body"
                            style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                            <div class="row" style="display: flex; flex-direction: column; gap: 12px;">
                              <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/syllabus-ma-pg.pdf"
                                target="_blank" style="color: #27467A; font-weight: 500; text-decoration: none;">
                                <i class="fa fa-file-text px-2"></i> Syllabus - M.A. Sociology
                                <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Doctoral -->
                      <div class="accordion-item"
                        style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                        <h2 class="accordion-header" id="mobileHeadingThree">
                          <button class="accordion-button collapsed"
                            style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                            type="button" data-bs-toggle="collapse" data-bs-target="#mobileCollapseThree"
                            aria-expanded="false" aria-controls="mobileCollapseThree">
                            <i class="fa fa-book me-2"></i> Doctoral Programme
                          </button>
                        </h2>
                        <div id="mobileCollapseThree" class="accordion-collapse collapse"
                          aria-labelledby="mobileHeadingThree" data-bs-parent="#mobileAccordionCourses">
                          <div class="accordion-body"
                            style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                            <a href="doctoral-programme-mobile" class="para1" target="_blank"
                              style="color: #27467A; font-weight: 600; text-decoration: none;">
                              <i class="fa fa-external-link me-2"></i> Click to View...
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- syllabus  -->

          <!-- events and highlights  -->
          <div class="container pb-4">

            <!-- mobile events  -->
            <div class="row" style="display: flex; justify-content: center;">
              <div class="col-lg-12">
                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900; font-size: 28px;">
                  Events
                </h2>

                <div style="max-width: 100%; position: relative;">
                  <div style="border: 1px solid #ccc;">

                    <div id="mobileEventScrollContainer"
                      style="height: 450px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                      <table class="table table-borderless mb-0" style="font-size: 16px; width: 100%;">
                        <tbody class="para1" id="mobileEventScrollContent" style="background-color: #f9f9f9; ">

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Webinar on "Plagiarism and its
                                  Prevention in Academic Writing"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 10, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Webinar on "Higher Education in India:
                                  Challenges and Strategies for Reforms"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 11, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Webinar on "Fake News in the Time of
                                  Pandemic"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 12, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Seminar on "Ecosystem &amp; Society:
                                  Discussion on Social Accountability on Environment"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 13, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Panel Discussion on "Feminist
                                  Epistemology with Ethnographic Evidence"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 14, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Seminar on "Social Science and
                                  Democracy"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 15, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Panel Discussion on "Multiculturalism
                                  and Identity: Highlighting the Centrality of Mother Language"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 16, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Talk on "Urban Bazaars in the Age of
                                  Platform Capitalism"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 17, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Talk on "Understanding IKS: Literary
                                  Criticism in Hindi and Other Languages"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 18, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Talk on "Why I Do Sociology"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 19, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Talk on "Technology Society Interface"
                                </div>
                                <div style="font-size: 14px; color: #555;">Date: August 20, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Talk on "Comparative Health Care
                                  Systems
                                  and Models of Health Coverage"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 21, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                          <tr style="border-bottom: 1px solid #ddd;">
                            <td style="display: flex; align-items: center; padding: 12px;">
                              <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                              <div>
                                <div style="font-weight: bold; color: #27467A; ">Talk on "Digital Humanities: Meaning,
                                  Importance and Scope"</div>
                                <div style="font-size: 14px; color: #555;">Date: August 22, 2025</div>
                                <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                  ...</a>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>

                  </div>

                  <div style="text-align: center; margin-top: 15px;">
                    <a href="department-new-rshss-sociology-events" style="display: inline-block; padding: 10px 28px;
                background: linear-gradient(135deg, #243B95, #151B5B);
                color: #fff; font-weight: 600; font-size: 16px;
                border-radius: 25px; text-decoration: none;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                transition: all 0.3s ease-in-out;">
                      View All
                    </a>
                  </div>


                </div>

                <script>
                  const mobileEventScrollContainer = document.getElementById('mobileEventScrollContainer');
                  const mobileEventScrollContent = document.getElementById('mobileEventScrollContent');

                  // Duplicate content for infinite scroll (mobile)
                  mobileEventScrollContent.innerHTML += mobileEventScrollContent.innerHTML;

                  let mobileEventScrollPos = 0;
                  const mobileEventScrollSpeed = 0.2;

                  function mobileEventScrollStep() {
                    mobileEventScrollPos += mobileEventScrollSpeed;
                    if (mobileEventScrollPos >= mobileEventScrollContent.scrollHeight / 2) {
                      mobileEventScrollPos = 0;
                    }
                    mobileEventScrollContainer.scrollTop = mobileEventScrollPos;
                    requestAnimationFrame(mobileEventScrollStep);
                  }

                  mobileEventScrollStep();
                </script>

              </div>
            </div>
            <!-- mobile events  -->

          </div>
          <!-- events and highlights  -->

          <!-- Mobile-Friendly Board of Studies & DRC -->
          <div id="bos-mobile" class="container pb-5">

            <!-- Board of Studies -->
            <div style="margin-bottom:20px;">
              <button id="mobAccBtn1" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
          background:linear-gradient(135deg,#24477f,#1a365d);
          color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                <i class="fa fa-users me-2"></i> The Board of Studies
                <span style="float:right; font-weight:700; font-size:20px;">＋</span>
              </button>

              <div id="mobAccPanel1"
                style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

                <div class="table-responsive">
                  <table class="table table-bordered align-middle" style="font-size:15px; background:#fff;">
                    <thead style="background:#24477f; color:#fff; text-align:center;">
                      <tr>
                        <th style="width:50px;">Sl. No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Category</th>
                      </tr>
                    </thead>
                    <tbody class="para1" style="font-size: 14px;">
                      <tr style="background:#f7f7f7;">
                        <td style="border:1px solid #ccc; padding:10px;">1</td>
                        <td style="border:1px solid #ccc; padding:10px;">
                          External Academic Expert
                        </td>
                        <td style="border:1px solid #ccc; padding:10px;">Dr. Sabina Yasmin Saika</td>
                        <td style="border:1px solid #ccc; padding:10px;">Associate Professor, Department of Sociology,
                          Gauhati University</td>
                      </tr>

                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">2</td>
                        <td style="border:1px solid #ccc; padding:10px;">
                          External Industry Expert
                        </td>
                        <td style="border:1px solid #ccc; padding:10px;">Mr. Nayan Jyoti Bhuyan</td>
                        <td style="border:1px solid #ccc; padding:10px;">Project Lead, NE Cluster, Action Aid Society,
                          Project Lead</td>
                      </tr>

                      <tr style="background:#f7f7f7;">
                        <td style="border:1px solid #ccc; padding:10px;">3</td>
                        <td style="border:1px solid #ccc; padding:10px;">
                          Convenor
                        </td>
                        <td style="border:1px solid #ccc; padding:10px;">Dr. Sangeeta Das</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor & Coordinator, Dept of
                          Sociology</td>
                      </tr>

                      <tr style="background:#eeeeee;">
                        <td rowspan="8" style="border:1px solid #ccc; padding:10px;">4</td>
                        <td rowspan="8" style="border:1px solid #ccc; padding:10px;">Members
                        </td>
                        <td style="border:1px solid #ccc; padding:10px;">Dr. Tripti Das</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>

                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">Dr. Denim Deka</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>
                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">Ms. Prajna Borah</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>
                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">Ms. Lalzikpuii Rajkhuwa</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>
                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">Adan S. Timung</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>
                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">Kadiguang Panmei</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>
                      <tr style="background:#eeeeee;">
                        <td style="border:1px solid #ccc; padding:10px;">Ms. Adishree Borgohain</td>
                        <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>

            <!-- Departmental Research Committee (DRC) -->
            <div>
              <button id="mobAccBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:14px 18px; border:0;
          background:linear-gradient(135deg,#24477f,#1a365d);
          color:white; font-weight:600; font-size:16px; cursor:pointer; border-radius:12px;">
                <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
                <span style="float:right; font-weight:700; font-size:20px;">＋</span>
              </button>

              <div id="mobAccPanel2"
                style="display:none; padding:16px; background:#f9fbfd; border:1px solid #ddd; border-radius:0 0 12px 12px; margin-top:5px;">

                <div class="table-responsive">
                  <table class="table table-bordered align-middle" style="font-size:15px; background:#fff;">
                    <thead style="background:#24477f; color:#fff; text-align:center;">
                      <tr>
                        <th style="width:50px;">Sl. No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Category</th>
                      </tr>
                    </thead>
                    <tbody class="para1" style="font-size: 14px;">
                      <tr>
                        <td style="padding:10px; border:1px solid #ccc;">1.</td>
                        <td style="padding:10px; border:1px solid #ccc;">Head of the Department</td>
                        <td style="padding:10px; border:1px solid #ccc;">Dr. Sangeeta Das</td>
                        <td style="padding:10px; border:1px solid #ccc;">Assistant Professor & Coordinator</td>
                        <td style="padding:10px; border:1px solid #ccc;">Chairperson</td>
                      </tr>
                      <tr>
                        <td rowspan="2" style="padding:10px; border:1px solid #ccc;">2.</td>
                        <td rowspan="2" style="padding:10px; border:1px solid #ccc;">
                          Two Professors, including the Dean of the School
                        </td>
                        <td style="padding:10px; border:1px solid #ccc;">Prof. Surajit Chandra Mukhopadhyay</td>
                        <td style="padding:10px; border:1px solid #ccc;">Professor & Dean, RSHSS</td>
                        <td style="padding:10px; border:1px solid #ccc;">Member</td>
                      </tr>
                      <tr>
                        <td style="padding:10px; border:1px solid #ccc;">Dr. Tripti Das</td>
                        <td style="padding:10px; border:1px solid #ccc;">Assistant Professor, Dept of Sociology</td>
                        <td style="padding:10px; border:1px solid #ccc;">Member</td>
                      </tr>
                      <tr>
                        <td rowspan="3" style="padding:10px; border:1px solid #ccc;">3.</td>
                        <td rowspan="3" style="padding:10px; border:1px solid #ccc;">Three external members not
                          below the rank of Professors</td>
                        <td style="padding:10px; border:1px solid #ccc;">Prof. Shiela Bora</td>
                        <td style="padding:10px; border:1px solid #ccc;">Professor, Dept of History, RSHSS</td>
                        <td style="padding:10px; border:1px solid #ccc;">External Member</td>
                      </tr>
                      <tr>
                        <td style="padding:10px; border:1px solid #ccc;">Prof. Gautam Mazumdar</td>
                        <td style="padding:10px; border:1px solid #ccc;">Professor, Dept of Economics, RSHSS</td>
                        <td style="padding:10px; border:1px solid #ccc;">External Member</td>
                      </tr>
                      <tr>
                        <td style="padding:10px; border:1px solid #ccc;">Prof. Swabera Islam</td>
                        <td style="padding:10px; border:1px solid #ccc;">Professor, Dept of Economics, RSHSS</td>
                        <td style="padding:10px; border:1px solid #ccc;">External Member</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>


          <script>
            const mobAccPairs = [
              { btn: 'mobAccBtn1', panel: 'mobAccPanel1' },
              { btn: 'mobAccBtn2', panel: 'mobAccPanel2' }
            ];

            function closeAllMob() {
              mobAccPairs.forEach(p => {
                const b = document.getElementById(p.btn);
                const panel = document.getElementById(p.panel);
                if (panel) panel.style.display = 'none';
                if (b) {
                  b.setAttribute('aria-expanded', 'false');
                  const sp = b.querySelector('span');
                  if (sp) sp.textContent = '＋';
                }
              });
            }

            mobAccPairs.forEach(p => {
              const b = document.getElementById(p.btn);
              const panel = document.getElementById(p.panel);
              if (!b || !panel) return;

              b.addEventListener('click', function () {
                const isOpen = this.getAttribute('aria-expanded') === 'true';
                if (isOpen) {
                  panel.style.display = 'none';
                  this.setAttribute('aria-expanded', 'false');
                  const sp = this.querySelector('span'); if (sp) sp.textContent = '＋';
                } else {
                  closeAllMob();
                  panel.style.display = 'block';
                  this.setAttribute('aria-expanded', 'true');
                  const sp = this.querySelector('span'); if (sp) sp.textContent = '−';
                }
              });
            });

            document.addEventListener('keydown', function (e) {
              if (e.key === 'Escape') closeAllMob();
            });
          </script>
          <!-- Mobile-Friendly Board of Studies & DRC -->

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
                        <span
                            style="
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
          <section>

            <!-- floating buttons  -->
            <div
              style="position: fixed; top: 50%; left: 10px; transform: translateY(-50%); display: flex; flex-direction: column; gap: 10px; z-index: 1000;">

              <!-- About -->
              <a href="#about" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start; color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsl(33, 100%, 56%) 0%, hsla(8, 52%, 50%, 1) 100%); box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-home" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">About</span>
              </a>

              <!-- Course -->
              <a href="#course" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-book" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Courses
                  Offered</span>
              </a>

              <!-- Syllabus -->
              <a href="#syllabus" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-file-text" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Structure &
                  Syllabus</span>
              </a>

              <!-- Events -->
              <a href="#events" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-calendar" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Events &
                  Highlights</span>
              </a>

              <!-- Academic Excellence -->
              <a href="#academic-excellence" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-graduation-cap" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Academic
                  Excellence</span>
              </a>

              <!-- BOS -->
              <a href="#bos" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-users" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">Board of
                  Studies</span>
              </a>

              <!-- DRC -->
              <a href="#drc" class="special-link"
                style="display: flex; align-items: center; justify-content: flex-start;  color: white; padding: 5px; width: 42px; overflow: hidden; border-radius: 8px; text-decoration: none; white-space: nowrap; transition: width 0.3s ease; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%) ; box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.35);">
                <i class="fa fa-university" style="min-width:30px; text-align:center;"></i>
                <span class="para1"
                  style="margin-left: 10px; opacity: 0; transition: opacity 0.3s ease; font-size: 14px;">DRC</span>
              </a>



            </div>
            <!-- floating buttons  -->

            <section id="about">
              <section style="background-color: #FFF8F0;">
                <div class="p-5">
                  <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                    <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Sociology</span>
                  </h1>

                  <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                    <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                    Humanities & Social Sciences (RSHSS)
                  </h2>
                </div>

                <div class="container p-4">
                  <div class="row align-items-center gx-5">

                    <div class="col-lg-6 text-center">
                      <div class="kd-about-3-img-wrap txaa-slide-down-1">
                        <div>
                          <img class="rounded w-60" decoding="async"
                            src="mobile-assets/department-all/dept-sociology/head-img.png" alt="">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">

                      <h2 class="headd1" style="color: #264273; font-weight: 700;">
                        About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                      <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                        The faculties of Department of Sociology are from various reputed institution like Jawaharlal Nehru
                        University, Tata Institute of Social Sciences, Delhi School of Economics, Indian Institute of
                        Technology
                        and these diversities in terms of the institution they belong to is the major strength of the
                        Department. The interests and expertise of the faculty cover a broad sociological canvas. The
                        courses
                        therefore offered are interdisciplinary in nature. Classical sociological theories, Research
                        Methods,
                        Gender studies, Visual Culture, Health and Illness, are a few among the expertise of the department.
                        Another strength of the department is to promote experiential learning. Sociology touches upon every
                        aspect of human social life and activity. Therefore, to make learning in the department experiential
                        students are encouraged to write projects based on field experiences, students are taken for
                        fieldwork
                        to experience reality and draw correlations between theory and practice.
                      </p>

                    </div>

                  </div>
                </div>

                <div class="bg-white">

                  <div class="container">

                    <p class="headd3 fw-bold" style="color: #24477f; text-align: justify; padding-top: 30px;">
                      The courses offered in the department are interdisciplinary in nature however, some of the important
                      trust
                      areas are as follows:
                    </p>

                    <ol class="para1" style="color: #27467A; line-height: 1.6;">
                      <li>Sociology of Law</li>
                      <li>Sociology of Music</li>
                      <li>Sociology of Religion</li>
                      <li>Sociology of Northeast India</li>
                      <li>Gender Studies</li>
                      <li>Culture Studies</li>
                      <li>Sociology of Environment, etc.</li>
                    </ol>


                    <p class="headd3 fw-bold" style="color: #24477f; text-align: justify;">
                      Future Prospects of the graduate and post graduate
                    </p>

                    <ol class="para1" style="color: #27467A; line-height: 1.6; padding-bottom: 30px;">
                      <li>The graduate from the department get the opportunity to engage in teaching at primary and
                        secondary
                        schools.</li>
                      <li>The graduate often get admitted in different reputed institutions like University of Delhi, Tezpur
                        University, Delhi School of Economics, South Asia University, TISS, IIT, etc.</li>
                      <li>The post graduate often pursue higher education or get engaged in academia (research and
                        teaching).
                      </li>
                      <li>Students also pursue government civil service or other competitive examinations.</li>
                    </ol>

                  </div>

                </div>

                <div style="background-color: #fff;">
                  <div class="p-5">
                    <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                      <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                    </h1>

                    <img class="w-100" src="mobile-assets/department-all/dept-sociology/vision-mission-web.png" alt="">
                  </div>
                </div>

                <div>
                  <img src="mobile-assets/department-all/dept-sociology/web-mathematics-down.png" alt="">
                </div>
              </section>
            </section>

            <section id="course">

              <div class="container">
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900; font-size: 35px;">
                  Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>

                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                  <!-- Heading Section -->
                  <div
                    style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                    <span style="font-size:22px;">Master of Arts - Sociology</span>
                    <span
                      style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                  </div>

                  <!-- Statute Items -->
                  <a target="_blank" href="mobile-assets/statute/The-First-Statutes-min.pdf" style="text-decoration:none;">
                    <div
                      style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                      <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 2 years</span>
                      <span>
                        <a class="para1 fw-bold"
                          style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                          href="">View Details</a>
                      </span>
                    </div>
                  </a>
                </div>

                <div style="background-color:#FDF9F4; padding:10px; width:100%; margin: 0px auto;">
                  <!-- Heading Section -->
                  <div
                    style="display:flex; align-items:center; background-color:#27467A; padding:12px 15px; font-weight:bold; color:#ffff; position:relative; border-radius:5px;">

                    <span style="font-size:22px; padding-right: 20px;">Bachelor of Arts - Sociology</span> | <span
                      style="font-size:22px; padding-left: 16px; font-weight: 300px !important;">Honours / Honours with
                      Research</span>

                    <span
                      style="position:absolute; right:0; bottom:0; width:15px; height:15px; background-color:#FF9A1E; clip-path:polygon(100% 0, 0 100%, 100% 100%);"></span>
                  </div>

                  <!-- Statute Items -->
                  <a target="_blank" href="mobile-assets/statute/The-First-Statutes-min.pdf" style="text-decoration:none;">
                    <div
                      style="display:flex; align-items:center; justify-content:space-between; background-color:#F9F9F9; padding:10px 15px; margin-top:5px; margin-left:50px; border-radius:5px; box-shadow:0 2px 4px rgba(0,0,0,0.1);">

                      <span style="flex-grow:1; color:#27467A; font-weight:bold; font-size: 20px;">Duration: 4 years as per
                        NEP</span>
                      <span>
                        <a class="para1 fw-bold"
                          style="padding: 5px 20px; border-radius: 5px; color: #fff; background: linear-gradient(135deg, hsla(33, 100%, 56%, 1) 0%, hsla(8, 52%, 50%, 1) 100%);"
                          href="">View Details</a>
                      </span>
                    </div>
                  </a>
                </div>

              </div>

            </section>

            <section id="syllabus">
              <div class="container">
                <div>
                  <h2 class="headd1 fw-bold text-center pt-4 pb-3"
                    style="color: #27467A; font-weight: 900; font-size: 35px; letter-spacing: 0.5px;">
                    Courses Structure <span style="color: #FF9A1E; font-weight: 600;">and Syllabus</span>
                  </h2>

                  <div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="accordion para1" id="accordionExample" style="border-radius: 12px; overflow: hidden;">

                          <!-- UG -->
                          <div class="accordion-item"
                            style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button collapsed"
                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                <i class="fa fa-graduation-cap me-2"></i> Under Graduate
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body"
                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                <div class="row" style="display: flex; flex-direction: column; gap: 12px;">

                                  <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/structure-course-sociology-ug.pdf"
                                    target="_blank" style="color: #27467A;">
                                    <i class="fa fa-file-text px-2"></i> Course Structure - Sociology
                                    <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                  </a>

                                  <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/syllabus-ug.pdf"
                                    target="_blank" style="color: #27467A;">
                                    <i class="fa fa-file-text px-2"></i> Syllabus - B.A. Sociology
                                    <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                  </a>

                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- PG -->
                          <div class="accordion-item"
                            style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed"
                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <i class="fa fa-university me-2"></i> Post Graduate
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body"
                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                <div class="row" style="display: flex; flex-direction: column; gap: 12px;">
                                  <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/syllabus-ma-pg.pdf"
                                    target="_blank" style="color: #27467A; font-weight: 500; text-decoration: none;">
                                    <i class="fa fa-file-text px-2"></i> Syllabus - M.A. Sociology
                                    <i class="fa fa-download ms-2" style="color: #FF9A1E;"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Doctoral -->
                          <div class="accordion-item"
                            style="border: none; margin-bottom: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.08); border-radius: 10px;">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed"
                                style="background: linear-gradient(135deg, #24477f, #1a365d); color: #fff; font-weight: 600; font-size: 18px; padding: 14px 20px; border-radius: 10px;"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-book me-2"></i> Doctoral Programme
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body"
                                style="background: #f9fbfd; padding: 18px; border-radius: 0 0 10px 10px;">
                                <a href="doctoral-programme" class="para1" target="_blank"
                                  style="color: #27467A; font-weight: 600; text-decoration: none;">
                                  <i class="fa fa-external-link me-2"></i> Click to View...
                                </a>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </section>

            <section id="events">

              <div class="container pb-4">

                <!-- events  -->
                <div class="row" style="display: flex; justify-content: center;">
                  <div class="col-lg-12">
                    <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                      Events
                    </h2>

                    <div style="max-width: 100%; position: relative;">
                      <div style="border: 1px solid #ccc;">

                        <div id="scrollContainer"
                          style="height: 450px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.08);">
                          <table class="table table-borderless mb-0" style="font-size: 16px; width: 100%;">
                            <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9; ">

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Webinar on "Plagiarism and its
                                      Prevention in Academic Writing"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 10, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Webinar on "Higher Education in India:
                                      Challenges and Strategies for Reforms"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 11, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Webinar on "Fake News in the Time of
                                      Pandemic"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 12, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Seminar on "Ecosystem &amp; Society:
                                      Discussion on Social Accountability on Environment"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 13, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Panel Discussion on "Feminist
                                      Epistemology with Ethnographic Evidence"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 14, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Seminar on "Social Science and
                                      Democracy"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 15, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Panel Discussion on "Multiculturalism
                                      and Identity: Highlighting the Centrality of Mother Language"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 16, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Talk on "Urban Bazaars in the Age of
                                      Platform Capitalism"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 17, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Talk on "Understanding IKS: Literary
                                      Criticism in Hindi and Other Languages"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 18, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Talk on "Why I Do Sociology"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 19, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Talk on "Technology Society Interface"
                                    </div>
                                    <div style="font-size: 14px; color: #555;">Date: August 20, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Talk on "Comparative Health Care
                                      Systems
                                      and Models of Health Coverage"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 21, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                              <tr style="border-bottom: 1px solid #ddd;">
                                <td style="display: flex; align-items: center; padding: 12px;">
                                  <img src="mobile-assets/department-all/imgg.jpg" alt="Event Image"
                                    style="width: 120px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #ccc; margin-right: 15px;">
                                  <div>
                                    <div style="font-weight: bold; color: #27467A; ">Talk on "Digital Humanities: Meaning,
                                      Importance and Scope"</div>
                                    <div style="font-size: 14px; color: #555;">Date: August 22, 2025</div>
                                    <a href="#" style="color: #FF9A1E; font-weight: bold; font-size: 14px;">Read More
                                      ...</a>
                                  </div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div style="text-align: center; margin-top: 15px;">
                        <a href="department-new-rshss-sociology-events" style="display: inline-block; padding: 10px 28px;
                background: linear-gradient(135deg, #243B95, #151B5B);
                color: #fff; font-weight: 600; font-size: 16px;
                border-radius: 25px; text-decoration: none;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                transition: all 0.3s ease-in-out;">
                          View All
                        </a>
                      </div>


                    </div>

                    <script>
                      const scrollContainer = document.getElementById('scrollContainer');
                      const scrollContent = document.getElementById('scrollContent');

                      // Duplicate content for infinite scroll
                      scrollContent.innerHTML += scrollContent.innerHTML;

                      let scrollPos = 0;
                      const scrollSpeed = 0.2;

                      function scrollStep() {
                        scrollPos += scrollSpeed;
                        if (scrollPos >= scrollContent.scrollHeight / 2) {
                          scrollPos = 0;
                        }
                        scrollContainer.scrollTop = scrollPos;
                        requestAnimationFrame(scrollStep);
                      }

                      scrollStep();
                    </script>

                  </div>

                </div>
                <!-- events  -->

              </div>

            </section>

            <section id="academic-excellence">


              <section
                style="background-image: url(mobile-assets/department-all/TRY/bg7a.png); background-size: cover; border: 1px solid #ECA652; height: 95vh; padding: 50px;">

                <h2 class="headd1 fw-bold text-white" style="font-size: 50px; padding-left: 10px;">
                  Academic <span class="headd1" style="color: #FF9A1E; font-size: 50px;">Excellence</span>
                </h2>

                <div
                  style="height: 3px; background-color: #FF9A1E; width: 240px; margin: 5px 0px 20px 0px; margin-left: 10px;">
                </div>

                <div class="row">

                  <div class="col-lg-8">

                    <h2 class="headd1 fw-bold mb-3" style="font-size: 35px; color: #f8c22f; padding-left: 10px;">UGC NET
                    </h2>

                    <div style="padding: 30px 20px;">
                      <div class="carousel" mask>
                        <div class="carousel-track">

                          <!-- Example cards -->
                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/a.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 26px;">Kabir Sarma</h2>
                            <p class="para1 fw-bold">BA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2018 - 2021</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/b.png">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 26px;">Yeputoli</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2022 - 2024</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/c.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 26px;">Miami K Marak</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2022 - 2024</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/d.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 22px;">Saiyontany Choudhury</h2>
                            <p class="para1 fw-bold">BA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2020 - 2023</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/e.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 26px;">Jali Jamatia</h2>
                            <p class="para1 fw-bold">MA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2022 - 2024</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/f.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 23px;">Opangtemsu Jamir</h2>
                            <p class="para1 fw-bold">BA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2019 - 2022</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/g.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 26px;">Tanisha Ganguly</h2>
                            <p class="para1 fw-bold">BA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2020 - 2023</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/h.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 22px;">Bhagyashree Tamuli</h2>
                            <p class="para1 fw-bold">BA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2019 - 2022</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/i.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Christina Bora</h2>
                            <p class="para1 fw-bold">BA Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2019 - 2022</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/j.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Chanda Devi</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2023 - 2025</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/k.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Nisant Dev</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2019 - 2022</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/l.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Premika Daimari</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2019 - 2022</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/m.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Priyarani Laishram</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2024 - 2025</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/n.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Spreeha Das</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2021 - 2024</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/o.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Virieno Savino</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2024 - 2025</p>
                            </div>
                          </article>

                          <article class="bg-white text-dark">
                            <img class="p-2 rounded"
                              src="mobile-assets/department-all/dept-sociology/candidates/ugc-net/p.png" alt="">
                            <h2 class="headd1 fw-bold" style="color: #24477f; font-size: 25px;">Anisha Mahanta</h2>
                            <p class="para1 fw-bold">Sociology</p>
                            <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px;">
                              <p class="para1 fw-bold text-white pt-2">Batch: 2017 - 2020</p>
                            </div>
                          </article>

                        </div>
                      </div>
                    </div>

                    <style>
                      .carousel {
                        --carousel-width: min(85vw, 880px);
                        --carousel-item-width: 280px;
                        --carousel-item-height: 350px;
                        --carousel-item-gap: 2rem;
                        position: relative;
                        width: var(--carousel-width);
                        overflow: hidden;
                      }

                      .carousel[mask] {
                        mask-image: linear-gradient(to right, transparent, black 10% 90%, transparent);
                      }

                      .carousel-track {
                        display: flex;
                        gap: var(--carousel-item-gap);
                        animation: marquee var(--carousel-duration) linear infinite;
                      }

                      .carousel article {
                        flex: 0 0 var(--carousel-item-width);
                        height: var(--carousel-item-height);
                        display: grid;
                        grid-template-rows: 200px auto 1fr auto;
                        border-radius: 10px;
                        background: white;
                        color: #314158;
                      }

                      .carousel img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        border-radius: 15px !important;
                      }

                      .carousel article>*:not(img) {
                        padding: 0 1rem;
                      }

                      @keyframes marquee {
                        from {
                          transform: translateX(0);
                        }

                        to {
                          transform: translateX(var(--scroll-distance));
                        }
                      }
                    </style>

                    <script>
                      const track = document.querySelector('.carousel-track');
                      const cards = Array.from(track.children);

                      // Duplicate for seamless scroll
                      cards.forEach(card => {
                        track.appendChild(card.cloneNode(true));
                      });

                      // Get card sizes from CSS variables
                      const carouselEl = document.querySelector('.carousel');
                      const styles = getComputedStyle(carouselEl);
                      const cardWidth = parseFloat(styles.getPropertyValue('--carousel-item-width'));
                      const cardGap = parseFloat(styles.getPropertyValue('--carousel-item-gap'));
                      const totalCards = track.children.length;

                      // Calculate half track width in px
                      const halfTrackWidth = (cardWidth + cardGap) * (totalCards / 2);

                      // Set exact scroll distance
                      track.style.setProperty('--scroll-distance', `-${halfTrackWidth}px`);

                      // Speed control: px/sec
                      const speed = 80; // Lower = faster
                      const duration = halfTrackWidth / speed;
                      track.style.setProperty('--carousel-duration', `${duration}s`);
                    </script>

                  </div>

                  <div class="col-lg-4">
                    <h2 class="headd1 fw-bold text-center" style="font-size: 35px; color: #fff;">APSC</h2>

                    <div style="padding: 50px 20px; display: flex; justify-content: center;">

                      <article class="bg-white text-dark rounded"
                        style="width: 300px; height: 340px; display: flex; flex-direction: column;">

                        <div class="rounded m-3" style="background-color: #E6E6E6; padding: 10px 20px;">

                          <p class="para1 fw-bold pt-1" style="color: #24477f; font-size: 28px;">Ankita Saha
                            <br>
                            <span class="text-dark" style="font-size: 18px;">MA Sociology</span>
                            <br>
                            <span class="text-dark" style="font-size: 18px;">2024</span>
                          </p>

                        </div>

                        <div class="rounded text-center" style="background-color: #FF9A1E; height: 45px; margin-top: auto;">
                          <p class="para1 fw-bold text-white pt-2">Batch: 2022 - 24</p>
                        </div>

                      </article>

                    </div>

                  </div>

                </div>

              </section>



            </section>

            <div id="bos" class="container pb-5 pt-5">

              <!-- Container -->
              <div id="drc" style="margin:0 auto;">

                <!-- Row 1 -->
                <div style="display:flex; flex-wrap:wrap; gap:16px; margin-bottom:16px;">

                  <!-- Board of Studies -->
                  <div style="flex:1 1 calc(50% - 8px); box-sizing:border-box;">
                    <div
                      style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                      <button id="accBtn1" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                       background:linear-gradient(135deg,#24477f,#1a365d);
                       color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-users me-2"></i> The Board of Studies
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                      </button>
                      <div id="accPanel1"
                        style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                        <div class="table-responsive">
                          <table style="border-collapse: collapse; width: 100%; margin-top: 10px; font-size:15px;">
                            <thead class="para1 text-dark">
                              <tr>
                                <th style="border: 1px solid #ccc; padding: 10px; background-color:#27467A; color:white;">
                                  S.No.</th>
                                <th style="border: 1px solid #ccc; padding: 10px; background-color:#27467A; color:white;">
                                  Role / Position in BoS</th>
                                <th style="border: 1px solid #ccc; padding: 10px; background-color:#27467A; color:white;">
                                  Name</th>
                                <th style="border: 1px solid #ccc; padding: 10px; background-color:#27467A; color:white;">
                                  Designation</th>
                              </tr>
                            </thead>
                            <tbody class="para1 text-dark">

                              <tr style="background:#f7f7f7;">
                                <td style="border:1px solid #ccc; padding:10px;">1</td>
                                <td style="border:1px solid #ccc; padding:10px;">
                                  External Academic Expert
                                </td>
                                <td style="border:1px solid #ccc; padding:10px;">Dr. Sabina Yasmin Saika</td>
                                <td style="border:1px solid #ccc; padding:10px;">Associate Professor, Department of
                                  Sociology, Gauhati University</td>
                              </tr>

                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">2</td>
                                <td style="border:1px solid #ccc; padding:10px;">
                                  External Industry Expert
                                </td>
                                <td style="border:1px solid #ccc; padding:10px;">Mr. Nayan Jyoti Bhuyan</td>
                                <td style="border:1px solid #ccc; padding:10px;">Project Lead, NE Cluster, Action Aid
                                  Society, Project Lead</td>
                              </tr>

                              <tr style="background:#f7f7f7;">
                                <td style="border:1px solid #ccc; padding:10px;">3</td>
                                <td style="border:1px solid #ccc; padding:10px;">
                                  Convenor
                                </td>
                                <td style="border:1px solid #ccc; padding:10px;">Dr. Sangeeta Das</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor & Coordinator, Dept of
                                  Sociology</td>
                              </tr>

                              <tr style="background:#eeeeee;">
                                <td rowspan="8" style="border:1px solid #ccc; padding:10px;">4</td>
                                <td rowspan="8" style="border:1px solid #ccc; padding:10px;">Members
                                </td>
                                <td style="border:1px solid #ccc; padding:10px;">Dr. Tripti Das</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>

                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">Dr. Denim Deka</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>
                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">Ms. Prajna Borah</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>
                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">Ms. Lalzikpuii Rajkhuwa</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>
                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">Adan S. Timung</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>
                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">Kadiguang Panmei</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>
                              <tr style="background:#eeeeee;">
                                <td style="border:1px solid #ccc; padding:10px;">Ms. Adishree Borgohain</td>
                                <td style="border:1px solid #ccc; padding:10px;">Assistant Professor, Dept of Sociology</td>
                              </tr>

                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- DRC -->
                  <div style="flex:1 1 calc(50% - 8px); box-sizing:border-box;">
                    <div
                      style="border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); background:white; overflow:hidden;">
                      <button id="accBtn2" aria-expanded="false" class="para1" style="width:100%; text-align:left; padding:16px 20px; border:0;
                       background:linear-gradient(135deg,#24477f,#1a365d);
                       color:white; font-weight:600; font-size:18px; cursor:pointer; border-radius:12px;">
                        <i class="fa fa-flask me-2"></i> The Departmental Research Committee (DRC)
                        <span style="float:right; font-weight:700; font-size:20px;">＋</span>
                      </button>
                      <div id="accPanel2"
                        style="display:none; padding:20px; background:#f9fbfd; border-top:1px solid #e5e5e5; color:#222; line-height:1.6; border-radius:0 0 12px 12px;">

                        <div class="table-responsive">
                          <table style="border-collapse: collapse; width:100%; font-size:15px; margin-top:10px;">
                            <thead class="para1" style="background:#27467A; color:white;">
                              <tr>
                                <th style="padding:10px; border:1px solid #ccc;">#</th>
                                <th style="padding:10px; border:1px solid #ccc;">Content</th>
                                <th style="padding:10px; border:1px solid #ccc;">Name of the Member</th>
                                <th style="padding:10px; border:1px solid #ccc;">Designation</th>
                                <th style="padding:10px; border:1px solid #ccc;">Committee Role</th>
                              </tr>
                            </thead>
                            <tbody class="para1" style="background:#f9f9f9;">
                              <tr>
                                <td style="padding:10px; border:1px solid #ccc;">1.</td>
                                <td style="padding:10px; border:1px solid #ccc;">Head of the Department</td>
                                <td style="padding:10px; border:1px solid #ccc;">Dr. Sangeeta Das</td>
                                <td style="padding:10px; border:1px solid #ccc;">Assistant Professor & Coordinator</td>
                                <td style="padding:10px; border:1px solid #ccc;">Chairperson</td>
                              </tr>
                              <tr>
                                <td rowspan="2" style="padding:10px; border:1px solid #ccc;">2.</td>
                                <td rowspan="2" style="padding:10px; border:1px solid #ccc;">
                                  Two Professors, including the Dean of the School
                                </td>
                                <td style="padding:10px; border:1px solid #ccc;">Prof. Surajit Chandra Mukhopadhyay</td>
                                <td style="padding:10px; border:1px solid #ccc;">Professor & Dean, RSHSS</td>
                                <td style="padding:10px; border:1px solid #ccc;">Member</td>
                              </tr>
                              <tr>
                                <td style="padding:10px; border:1px solid #ccc;">Dr. Tripti Das</td>
                                <td style="padding:10px; border:1px solid #ccc;">Assistant Professor, Dept of Sociology</td>
                                <td style="padding:10px; border:1px solid #ccc;">Member</td>
                              </tr>
                              <tr>
                                <td rowspan="3" style="padding:10px; border:1px solid #ccc;">3.</td>
                                <td rowspan="3" style="padding:10px; border:1px solid #ccc;">Three external members not
                                  below the rank of Professors</td>
                                <td style="padding:10px; border:1px solid #ccc;">Prof. Shiela Bora</td>
                                <td style="padding:10px; border:1px solid #ccc;">Professor, Dept of History, RSHSS</td>
                                <td style="padding:10px; border:1px solid #ccc;">External Member</td>
                              </tr>
                              <tr>
                                <td style="padding:10px; border:1px solid #ccc;">Prof. Gautam Mazumdar</td>
                                <td style="padding:10px; border:1px solid #ccc;">Professor, Dept of Economics, RSHSS</td>
                                <td style="padding:10px; border:1px solid #ccc;">External Member</td>
                              </tr>
                              <tr>
                                <td style="padding:10px; border:1px solid #ccc;">Prof. Swabera Islam</td>
                                <td style="padding:10px; border:1px solid #ccc;">Professor, Dept of Economics, RSHSS</td>
                                <td style="padding:10px; border:1px solid #ccc;">External Member</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- JS remains same -->
              <script>

                const accPairs = [
                  { btn: 'accBtn1', panel: 'accPanel1' },
                  { btn: 'accBtn2', panel: 'accPanel2' }
                ];

                function closeAll() {
                  accPairs.forEach(p => {
                    const b = document.getElementById(p.btn);
                    const panel = document.getElementById(p.panel);
                    if (panel) panel.style.display = 'none';
                    if (b) {
                      b.setAttribute('aria-expanded', 'false');
                      const sp = b.querySelector('span');
                      if (sp) sp.textContent = '＋';
                    }
                  });
                }

                accPairs.forEach(p => {
                  const b = document.getElementById(p.btn);
                  const panel = document.getElementById(p.panel);
                  if (!b || !panel) return;

                  b.addEventListener('click', function () {
                    const isOpen = this.getAttribute('aria-expanded') === 'true';
                    if (isOpen) {
                      panel.style.display = 'none';
                      this.setAttribute('aria-expanded', 'false');
                      const sp = this.querySelector('span'); if (sp) sp.textContent = '＋';
                    } else {
                      closeAll();
                      panel.style.display = 'block';
                      this.setAttribute('aria-expanded', 'true');
                      const sp = this.querySelector('span'); if (sp) sp.textContent = '−';
                    }
                  });
                });

                document.addEventListener('keydown', function (e) {
                  if (e.key === 'Escape') closeAll();
                });
              </script>
            </div>

            <script>
              document.querySelectorAll('a.special-link').forEach(anchor => {
                anchor.addEventListener('mouseover', function () {
                  this.style.width = '200px';
                  this.querySelector('span').style.opacity = '1';
                });
                anchor.addEventListener('mouseout', function () {
                  this.style.width = '42px';
                  this.querySelector('span').style.opacity = '0';
                });
                anchor.addEventListener('click', function (e) {
                  e.preventDefault();
                  document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                  });
                });
              });

            </script>

          </section>

        </div>

      </div>
@endsection
