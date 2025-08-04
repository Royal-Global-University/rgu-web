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
          <section style="background-color: #fff8f0; padding-top: 80px; position: relative;">

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
                        <strong style="color: #023e8a;" class="#">Master of Arts - Sociology</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MA-Sociology"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Arts - Sociology</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BA-Sociology"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <!-- courses offered  -->

          <!-- events and highlights  -->
          <div class="container pt-3 pb-5 d-lg-none">

            <!-- Mobile Events Section -->
            <div class="mb-4">
              <h2 class="fw-bold text-start pb-3" style="color: #27467A; font-size: 26px;">Events</h2>

              <div style="border: 1px solid #ccc;">
                <div id="mobileEventScroll" style="height: 300px; overflow: hidden;">
                  <table class="table table-bordered mb-0" style="font-size: 15px;">
                    <tbody id="mobileEventContent" class="para1" style="background-color: #f9f9f9;">
                      <!-- Your event rows go here -->
                      <tr>
                        <td>Webinar on "Plagiarism and its Prevention in Academic Writing"</td>
                      </tr>
                      <tr>
                        <td>Webinar on "Higher Education in India: Challenges and Strategies for Reforms"</td>
                      </tr>
                      <tr>
                        <td>Webinar on "Fake News in the Time of Pandemic"</td>
                      </tr>
                      <tr>
                        <td>Seminar on "Ecosystem &amp; Society: Discussion on Social Accountability on Environment"</td>
                      </tr>
                      <tr>
                        <td>Panel Discussion on "Feminist Epistemology with Ethnographic Evidence"</td>
                      </tr>
                      <tr>
                        <td>Seminar on "Social Science and Democracy"</td>
                      </tr>
                      <tr>
                        <td>Panel Discussion on "Multiculturalism and Identity: Highlighting the Centrality of Mother
                          Language on Ocassion of International Mother Language Day"</td>
                      </tr>
                      <tr>
                        <td>Talk on "Urban Bazaars in the Age of Platform Capitalism"</td>
                      </tr>
                      <tr>
                        <td>Talk on "Understanding IKS: Literary Criticism in Hindi and Other Languages"</td>
                      </tr>
                      <tr>
                        <td>Talk on "Why I Do Sociology"</td>
                      </tr>
                      <tr>
                        <td>Talk on "Technology Society Interface"</td>
                      </tr>
                      <tr>
                        <td>Talk on "Comparative Health Care Systems and Models of Health Coverage"</td>
                      </tr>
                      <tr>
                        <td>Talk on "Digital Humanities: Meaning, Importance and Scope"</td>
                      </tr>


                      <!-- Keep adding rows here -->
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="text-center mt-2">
                <button class="para1"
                  style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                 <a href="department-new-rshss-sociology-events.html"> View All </a>
                </button>
              </div>

              <script>
                const mobileScrollContainer = document.getElementById('mobileEventScroll');
                const mobileScrollContent = document.getElementById('mobileEventContent');
                mobileScrollContent.innerHTML += mobileScrollContent.innerHTML;
                let mobileScrollPos = 0;
                const mobileScrollSpeed = 0.2;

                function scrollMobileEvents() {
                  mobileScrollPos += mobileScrollSpeed;
                  if (mobileScrollPos >= mobileScrollContent.scrollHeight / 2) {
                    mobileScrollPos = 0;
                  }
                  mobileScrollContainer.scrollTop = mobileScrollPos;
                  requestAnimationFrame(scrollMobileEvents);
                }

                scrollMobileEvents();
              </script>
            </div>


          </div>
          <!-- events and highlights  -->

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

            <div class="bg-white">

              <div class="container">

                <p class="headd3 fw-bold" style="color: #24477f; text-align: justify; padding-top: 30px;">
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


                <p class="headd3 fw-bold" style="color: #24477f; text-align: justify;">
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
                        <strong style="color: #023e8a;" class="#">Master of Arts - Sociology</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MA-Sociology"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Arts - Sociology</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BA-Sociology"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>

          <!--About Section-->

          <div class="container pb-5 pt-3">

            <!-- events  -->
            <div class="row" style="display: flex; justify-content: center;">
              <div class="col-lg-10">
                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  Events </h2>

                <div style="max-width: 100%; position: relative;">
                  <div style="border: 1px solid #ccc;">

                    <div id="scrollContainer" style="height: 350px; overflow: hidden;">
                      <table class="table table-bordered mb-0" style="font-size: 16px;">
                        <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">

                          <tr>
                            <td>Webinar on "Plagiarism and its Prevention in Academic Writing"</td>
                          </tr>
                          <tr>
                            <td>Webinar on "Higher Education in India: Challenges and Strategies for Reforms"</td>
                          </tr>
                          <tr>
                            <td>Webinar on "Fake News in the Time of Pandemic"</td>
                          </tr>
                          <tr>
                            <td>Seminar on "Ecosystem &amp; Society: Discussion on Social Accountability on Environment"
                            </td>
                          </tr>
                          <tr>
                            <td>Panel Discussion on "Feminist Epistemology with Ethnographic Evidence"</td>
                          </tr>
                          <tr>
                            <td>Seminar on "Social Science and Democracy"</td>
                          </tr>
                          <tr>
                            <td>Panel Discussion on "Multiculturalism and Identity: Highlighting the Centrality of Mother
                              Language on Ocassion of International Mother Language Day"</td>
                          </tr>
                          <tr>
                            <td>Talk on "Urban Bazaars in the Age of Platform Capitalism"</td>
                          </tr>
                          <tr>
                            <td>Talk on "Understanding IKS: Literary Criticism in Hindi and Other Languages"</td>
                          </tr>
                          <tr>
                            <td>Talk on "Why I Do Sociology"</td>
                          </tr>
                          <tr>
                            <td>Talk on "Technology Society Interface"</td>
                          </tr>
                          <tr>
                            <td>Talk on "Comparative Health Care Systems and Models of Health Coverage"</td>
                          </tr>
                          <tr>
                            <td>Talk on "Digital Humanities: Meaning, Importance and Scope"</td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div style="text-align: center; margin-top: 10px;">
                    <button class="para1"
                      style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                      <a href="department-new-rshss-sociology-events.html"> View All </a>
                    </button>
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

          <!--End Section-->
        </div>

        <div class="container">


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
                      Dr. Sangeeta Das, Assistant Professor &amp; Co-ordinator
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Dr. Prithibi Pratibha Gogoi, ssistant Professor
                      <hr />
                      Dr. Tripti Das, Assistant Professor
                      <hr />
                      Ms. Prajna Borah, Assistant Professor
                      <hr />
                      Ms. Swagata Chakraborty, Assistant Professor
                      <hr />
                      Ms. Lalzikpuii Rajkhowa, Assistant Professor
                      <hr />
                      Mr. Adam Timung, Assistant Professor
                      <hr />
                      Mr. Kadiguang Panmei, Assistant Professor
                      <hr />
                      Ms. Adishree Borgohain, Assistant Professor
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>External Expert (Academic)</td>
                    <td>
                      Dr. Uddipan Dutta, Scientific officer, Department of
                      Sociology, Guwahati University
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Expert (Industry)</td>
                    <td>Mr. Nayan Jyoti Bhuyan, Project lead, NE Cluster</td>
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
                    <td>Prof. (Dr.) Sajal Nag</td>
                    <td>Dean, RSHSS</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Priyanka Patowari</td>
                    <td>Assistant Professor, Department of Social Work, RSHSS</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. T Luithuiwung Awungshi</td>
                    <td>Assistant Professor, Department of Social Work, RSHSS</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Gautam Mazumder</td>
                    <td>Professor, Department of Economics, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Swabera Islam</td>
                    <td>Professor, Department of Economics, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Shiela Bora</td>
                    <td>
                      Professor &amp; Advisor, Department of History, RSHSS, RGU
                    </td>
                    <td>External Member</td>
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
                    <td>Prof. Sajal Nag</td>
                    <td>Professor, Dean RSHSS</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Sangeeta Das</td>
                    <td>Assistant Professor, Dept of Sociology</td>
                    <td>Member Secretary</td>
                  </tr>
                  <tr>
                    <td>Dr. Tripti Das</td>
                    <td>Assistant Professor, Dept of Sociology</td>
                    <td>Members</td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Shiela Bora</td>
                    <td>Professor, Dept of History, RSHSS</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof Gautam Mazumdar</td>
                    <td>Professor, Dept of Economics, RSHSS</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Swabera Islam</td>
                    <td>Professor, Dept of Economics, RSHSS</td>
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
                        <button class="accordion-button collapsed" style="background-color: #24477f; color: #fff;" type="button" data-bs-toggle="collapse"
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
                            <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/structure-course-sociology-ug.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Course Structure - Sociology
                              <i class="fa fa-download"></i>
                            </a>

                            <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/syllabus-ug.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - B.A. Sociology
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" style="background-color: #24477f; color: #fff;" type="button" data-bs-toggle="collapse"
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
                            <a href="mobile-assets/department-all/dept-sociology/syllabus-pdf/syllabus-ma-pg.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - M.A. Sociology
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" style="background-color: #24477f; color: #fff;" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <strong>
                            Doctoral Programme
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <a href="doctoral-programme.html" class="para1" target="_blank">
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
            </div>
          </div>

        </div>

      </div>


@endsection
