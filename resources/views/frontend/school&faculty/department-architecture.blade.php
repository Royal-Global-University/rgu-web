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

         <div style="padding-top: 80px; position: relative;">
           <!-- till about dept  -->
          <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px;">

            <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Architecture</span>
            </h1>

            <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
              Architecture (RSA)
            </h2>

            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-12">

                  <div class="txaa-slide-down-1">
                    <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                      <img class="rounded" decoding="async" src="mobile-assets/department-all/dept-arch/head-img.png"
                        alt="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                  <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Architecture Department is a dynamic hub of innovation and creativity, boasting a diverse array of
                    strengths and competencies. With a strong emphasis on sustainable design practices, digital fabrication
                    techniques, and interdisciplinary collaboration, graduates emerge equipped to tackle the complex
                    challenges facing the built environment. The department's thrust areas encompass urban revitalization,
                    resilient infrastructure, and adaptive reuse, reflecting a commitment to addressing pressing societal
                    needs while embracing technological advancements. Graduates possess a unique blend of artistic vision,
                    technical expertise, and critical thinking skills, positioning them for success in a variety of career
                    paths. Whether pursuing roles in architectural firms, urban planning agencies, or academia, alumni are
                    well-prepared to make meaningful contributions to shaping the future of our cities and communities.
                  </p>

                </div>
              </div>
            </div>

            <div class="pt-3">

              <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
              </h1>

              <img src="mobile-assets/department-all/dept-arch/vision-mission-mob.png" alt="">
            </div>

            <div>
              <img src="mobile-assets/department-all/dept-arch/mob-btm.png" alt="">
            </div>
          </section>
          <!-- till about dept  -->

          <!-- courses offered  -->
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
                      <strong style="color: #023e8a;" class="#">Bachelor of Architecture</strong>
                    </p>
                  </td>
                  <td class="para1">
                    5 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-barch"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
          <!-- courses offered  -->
         </div>

        </div>

        <div class="website">
          <!--Start Header-->
          @include('frontend/components/aheader')
                <!-- floating button  -->
                <div>
                    <a href="https://admissions.rgu.ac/"
                        style="
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
          <!--End Header-->

          <section style="background-color: #FFF8F0;">
            <div class="p-5">
              <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Architecture</span>
              </h1>

              <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                Architecture (RSA)
              </h2>
            </div>

            <div class="container p-4">
              <div class="row align-items-center gx-5">

                <div class="col-lg-6">
                  <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div>
                      <img class="rounded w-60" decoding="async" src="mobile-assets/department-all/dept-arch/head-img.png"
                        alt="">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">

                  <h2 class="headd1" style="color: #264273; font-weight: 700;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Architecture Department is a dynamic hub of innovation and creativity, boasting a diverse array of
                    strengths and competencies. With a strong emphasis on sustainable design practices, digital fabrication
                    techniques, and interdisciplinary collaboration, graduates emerge equipped to tackle the complex
                    challenges facing the built environment. The department's thrust areas encompass urban revitalization,
                    resilient infrastructure, and adaptive reuse, reflecting a commitment to addressing pressing societal
                    needs while embracing technological advancements. Graduates possess a unique blend of artistic vision,
                    technical expertise, and critical thinking skills, positioning them for success in a variety of career
                    paths. Whether pursuing roles in architectural firms, urban planning agencies, or academia, alumni are
                    well-prepared to make meaningful contributions to shaping the future of our cities and communities.
                  </p>

                </div>

              </div>
            </div>

            <div style="background-color: #fff;">
              <div class="p-5">
                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                  <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                </h1>

                <img class="w-70" src="mobile-assets/department-all/dept-arch/vision-mission-web.png" alt="">
              </div>
            </div>

            <div>
              <img src="mobile-assets/department-all/dept-arch/web-btm.png" alt="">
            </div>
          </section>


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
                      <strong style="color: #023e8a;" class="#">Bachelor of Architecture</strong>
                    </p>
                  </td>
                  <td class="para1">
                    5 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-barch"><button type="button"
                        style="background-color: #FF9A1E; color: #fff;"
                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>

          <!--About Section-->

          <!--End Section-->
        </div>

        <div class="container">

          <!-- events tab -->
          <div class="container mt-4" style="max-width: 100%; overflow-x: auto;">
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Events & <span style="color: #FF9A1E; font-weight: 500;">Achievement </span>
            </h2>

            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-5" style="font-size: 16px;">
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="text-white">S.NO.</th>
                    <th class="text-white">DATE &amp; TIME &amp; DURATION</th>
                    <th class="text-white">
                      NAME OF RESOURCE PERSON/GUEST/ CELEBRITY ETC, ALONG WITH
                      DESIGNATION, PLACE OF WORK AND ALL RELATED DETAILS
                    </th>
                    <th class="text-white">PURPOSE OF VISIT</th>
                  </tr>
                </thead>
                <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr class="mobile-para1">
                    <td>1</td>
                    <td>18.09.2024</td>
                    <td>
                      Er. JN Khatanair, Chief Consultant Engineer Shrishtie Guwahati,
                      Chairperson Northeast Chapter Indian Green Building Council IGBC
                      Hyderabad.
                    </td>
                    <td>
                      Attended a Technical Lecture on “Sustainable Building for Warm
                      and Humid Climatic Zone,” on the occasion of Engineer’s Day
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>2</td>
                    <td>18.09.2024</td>
                    <td>
                      Ms. Faye Fernandes, Country Director of Torrens University,
                      Australia.
                    </td>
                    <td>
                      Attended an interactive session on "Career Opportunity for
                      Designers," organized by Royal School of Architecture and Royal
                      School of Design
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>3</td>
                    <td>31.07.2024-10.08.2024</td>
                    <td>Er. Rajesh Dutta (Engineering Consultant in ASDMA)</td>
                    <td>
                      Attended a Session on Disaster Management and mitigation
                      organized by Royal School of Architecture and Royal School of
                      Design
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>4</td>
                    <td>23.07.2024</td>
                    <td>Ar. Anuj Bhajanka</td>
                    <td>
                      Attended Re orientation program for the upcoming semester
                      organized by Royal School of Architecture and Royal School of
                      Design
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>5</td>
                    <td>28.08.2023</td>
                    <td>Ar. Farha Shermin</td>
                    <td>
                      Attended an Interactive Session as part of the Students
                      Induction Program of B.Arch and BID/DID 1st Sem
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>6</td>
                    <td>18.05.2023</td>
                    <td>Ar. Gita Balakrishnana</td>
                    <td>
                      Panel Discussions organised as part of Day 3 Of Knoxis Design
                      Fest
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>7</td>
                    <td>18.05.2024</td>
                    <td>Ar. Ronojoy Sen</td>
                    <td>
                      Panel Discussions organised as part of Day 3 Of Knoxis Design
                      Fest
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>8</td>
                    <td>18.05.2023</td>
                    <td>Ar. Ashish Agarwal</td>
                    <td>
                      Panel Discussions organised as part of Day 3 Of Knoxis Design
                      Fest
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>9</td>
                    <td>18.05.2023</td>
                    <td>Mahan J Dutta</td>
                    <td>
                      Workshops organised as part of Day 3 Of Knoxis Design Fest
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>10</td>
                    <td>18.05.2023</td>
                    <td>Asutosh Kashyap</td>
                    <td>
                      Workshops organised as part of Day 3 Of Knoxis Design Fest
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>11</td>
                    <td>05.04.2023</td>
                    <td>Dr. Anunaya Chaubey</td>
                    <td>
                      Interactive session with Dr. Anunaya Chaubey regarding Anant
                      University's flagship program, Anant Fellowship
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>12</td>
                    <td>28.10. 2022</td>
                    <td>Debabrata Rajkumar</td>
                    <td>
                      Interactive Session on climate Change and Waste Management
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>13</td>
                    <td>11.10. 2022</td>
                    <td>Mr. Ashish Agarwal, Entrepreneur</td>
                    <td>
                      Interactive session with renowned entrepreneur Mr. Ashish
                      Agarwal
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>14</td>
                    <td>20.08.2019 - 21.08. 2019</td>
                    <td>Ar. Pragati Goyal</td>
                    <td>
                      Orientation Programme for Freshers of RSA, RSFT, RSD, RSFA
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>15</td>
                    <td>16.08. 2019</td>
                    <td>Nilakshi More</td>
                    <td>Orientation Programme for Freshers of RSA, RSD</td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>16</td>
                    <td>6-8.03.2019</td>
                    <td>Prof. Abhijit Shirodkar</td>
                    <td>Interactive session</td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>17</td>
                    <td>24-25.01.2019</td>
                    <td>Trailokya Hazarika</td>
                    <td>
                      Birla White Cement Competitions: 1. Yuvaratna, 2. Yuvaratna Nxt
                    </td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>18</td>
                    <td>21-23.01. 2019</td>
                    <td>
                      Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, Parijit Phukan
                    </td>
                    <td>Meditation Workshop by Heartfulness Foundation</td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>19</td>
                    <td>7.08.2018</td>
                    <td>Ashish Batliwala</td>
                    <td>3D priniting Workshop</td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>20</td>
                    <td>30.07.2018</td>
                    <td>Pankaj Bhattacharjee, Greenlam</td>
                    <td>Workshop on Laminates</td>
                  </tr>
                  <tr class="mobile-para1">
                    <td>21</td>
                    <td>5.02.2018</td>
                    <td>Dr. Repaul Kanji, IIT Roorkee</td>
                    <td>Workshop' Awareness of Disaster Mitigation &amp; Management'.</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <!-- events tab -->

          <!-- DRC  -->
          <div class="container mt-2" style="max-width: 100%; overflow-x: auto;">
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              The Departmental Research <span style="color: #FF9A1E; font-weight: 500;">Committee (DRC)</span>
            </h2>

            <div class="table-responsive">
              <table class="overflow-hidden table text-wrap table-bordered border-top mb-2" style="font-size: 16px;">
                <thead class="text-white align-middle" style="background-color: #27467a;">
                  <tr>
                    <th class="text-white">#</th>
                    <th class="text-white">Content</th>
                    <th class="text-white">Name of the Member</th>
                    <th class="text-white">Designation</th>
                    <th class="text-white">Designation in the committee</th>
                  </tr>
                </thead>
                <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Head of the Department</td>
                    <td>Dr. Hari Prasad Agarwal, RSA</td>
                    <td>Professor</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2">Two Professors</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td rowspan="2">3</td>
                    <td rowspan="2">
                      Two Associate Professors – one of them will be the member secretary
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td rowspan="2">4</td>
                    <td rowspan="2">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td rowspan="3">5</td>
                    <td rowspan="3">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. (Dr.) Shila Bora</td>
                    <td>Professor, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. (Dr.) Krishna Barua</td>
                    <td>Professor, RSL, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. (Dr.) Suresh Chandra Nayak</td>
                    <td>Professor, RSCOM</td>
                    <td>External Member</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <!-- DRC  -->


          <div class="mt-4 mb-3">
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

            <div class="accordion-item">
                <h1 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed p-3" style="background-color: #264273; color: #fff;" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne"><strong>
                            Under Graduate
                        </strong>
                    </button>
                </h1>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body pb-5">
                        <div class="row">
                            <a href="mobile-assets/department-all/dept-arch/updated-syllabus/structure-b.arch.pdf" style="font-size: 22px;" class="text-dark pt-4" target="_blank">
                                <i class="fa fa-file-text px-2"></i> Structure of Syllabus - B.Arch
                                <i class="fa fa-download"></i>
                            </a>
                            <a href="mobile-assets/department-all/dept-arch/updated-syllabus/detailed-syllabus.pdf" style="font-size: 22px;" class="text-dark pt-4" target="_blank">
                                <i class="fa fa-file-text px-2"></i> Detailed Syllabus - B.Arch
                                <i class="fa fa-download"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>

      </div>
@endsection
