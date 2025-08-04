@extends('frontend.master')
@section('content')
        <div style="background-image: url(https://media.rgu.ac/department-all/bg.svg); background-size: cover;">

             <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile" style="padding-top: 80px; position: relative;">

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

          <!-- events and highlights  -->
          <div class="container pt-3 pb-5 d-lg-none">

            <!-- Mobile Events Section -->
            <div class="mb-4">
              <h2 class="fw-bold text-start pb-3" style="color: #27467A; font-size: 26px;">Events</h2>

              <div style="border: 1px solid #ccc;">
                <div id="mobileEventScroll" style="height: 300px; overflow: hidden;">
                  <table class="table table-bordered mb-0" style="font-size: 15px;">
                    <tbody id="mobileEventContent" class="para1" style="background-color: #f9f9f9;">


                      <tr>
                        <td>Er. JN Khatanair, Chief Consultant Engineer at Shrishtie Guwahati and Chairperson of Northeast
                          Chapter IGBC Hyderabad, attended a technical lecture on “Sustainable Building for Warm and Humid
                          Climatic Zone” on the occasion of Engineer’s Day.</td>
                      </tr>
                      <tr>
                        <td>Ms. Faye Fernandes, Country Director of Torrens University, Australia, attended an interactive
                          session on "Career Opportunity for Designers" organized by Royal School of Architecture and Royal
                          School of Design.</td>
                      </tr>
                      <tr>
                        <td>Er. Rajesh Dutta, Engineering Consultant in ASDMA, attended a session on Disaster Management and
                          mitigation organized by Royal School of Architecture and Royal School of Design.</td>
                      </tr>
                      <tr>
                        <td>Ar. Anuj Bhajanka attended the Re-orientation program for the upcoming semester organized by
                          Royal School of Architecture and Royal School of Design.</td>
                      </tr>
                      <tr>
                        <td>Ar. Farha Shermin attended an interactive session as part of the Students Induction Program of
                          B.Arch and BID/DID 1st Semester.</td>
                      </tr>
                      <tr>
                        <td>Ar. Gita Balakrishnana participated in panel discussions organized as part of Day 3 of Knoxis
                          Design Fest.</td>
                      </tr>
                      <tr>
                        <td>Ar. Ronojoy Sen participated in panel discussions organized as part of Day 3 of Knoxis Design
                          Fest.</td>
                      </tr>
                      <tr>
                        <td>Ar. Ashish Agarwal participated in panel discussions organized as part of Day 3 of Knoxis Design
                          Fest.</td>
                      </tr>
                      <tr>
                        <td>Mahan J Dutta conducted workshops organized as part of Day 3 of Knoxis Design Fest.</td>
                      </tr>
                      <tr>
                        <td>Asutosh Kashyap conducted workshops organized as part of Day 3 of Knoxis Design Fest.</td>
                      </tr>
                      <tr>
                        <td>Dr. Anunaya Chaubey conducted an interactive session regarding Anant University's flagship
                          program, Anant Fellowship.</td>
                      </tr>
                      <tr>
                        <td>Debabrata Rajkumar delivered an interactive session on Climate Change and Waste Management.</td>
                      </tr>
                      <tr>
                        <td>Mr. Ashish Agarwal, Entrepreneur, conducted an interactive session with students.</td>
                      </tr>
                      <tr>
                        <td>Ar. Pragati Goyal participated in the Orientation Programme for freshers of RSA, RSFT, RSD, and
                          RSFA.</td>
                      </tr>
                      <tr>
                        <td>Nilakshi More participated in the Orientation Programme for freshers of RSA and RSD.</td>
                      </tr>
                      <tr>
                        <td>Prof. Abhijit Shirodkar conducted an interactive session with students.</td>
                      </tr>
                      <tr>
                        <td>Trailokya Hazarika led the Birla White Cement Competitions: 1. Yuvaratna, 2. Yuvaratna Nxt.</td>
                      </tr>
                      <tr>
                        <td>Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, and Parijit Phukan conducted a Meditation
                          Workshop by Heartfulness Foundation.</td>
                      </tr>
                      <tr>
                        <td>Ashish Batliwala conducted a 3D Printing Workshop.</td>
                      </tr>
                      <tr>
                        <td>Pankaj Bhattacharjee from Greenlam conducted a workshop on Laminates.</td>
                      </tr>
                      <tr>
                        <td>Dr. Repaul Kanji from IIT Roorkee led a workshop on Awareness of Disaster Mitigation &
                          Management.</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="text-center mt-2">
                <a href="/architecture-events" class="para1"
                  style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                  View All
                </a>
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
                                    <img class="rounded w-60" decoding="async"
                                        src="mobile-assets/department-all/dept-arch/head-img.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <h2 class="headd1" style="color: #264273; font-weight: 700;">
                                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                            <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                                The Architecture Department is a dynamic hub of innovation and creativity, boasting a diverse
                                array of
                                strengths and competencies. With a strong emphasis on sustainable design practices, digital
                                fabrication
                                techniques, and interdisciplinary collaboration, graduates emerge equipped to tackle the complex
                                challenges facing the built environment. The department's thrust areas encompass urban
                                revitalization,
                                resilient infrastructure, and adaptive reuse, reflecting a commitment to addressing pressing
                                societal
                                needs while embracing technological advancements. Graduates possess a unique blend of artistic
                                vision,
                                technical expertise, and critical thinking skills, positioning them for success in a variety of
                                career
                                paths. Whether pursuing roles in architectural firms, urban planning agencies, or academia,
                                alumni are
                                well-prepared to make meaningful contributions to shaping the future of our cities and
                                communities.
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

            <div class="container pb-5 pt-3">

                <!-- events  -->
                <div class="row" style="display: flex; justify-content: center;">

                    <div class="col-lg-10">
                        <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events </h2>

                        <div style="max-width: 100%; position: relative;">
                            <div style="border: 1px solid #ccc;">

                                <div id="scrollContainer" style="height: 315px; overflow: hidden;">
                                    <table class="table table-bordered mb-0" style="font-size: 16px;">
                                        <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">


                                            <tr>
                                                <td>Er. JN Khatanair, Chief Consultant Engineer at Shrishtie Guwahati and
                                                    Chairperson of
                                                    Northeast Chapter IGBC Hyderabad, attended a technical lecture on
                                                    “Sustainable Building for
                                                    Warm and Humid Climatic Zone” on the occasion of Engineer’s Day.</td>
                                            </tr>
                                            <tr>
                                                <td>Ms. Faye Fernandes, Country Director of Torrens University, Australia,
                                                    attended an
                                                    interactive session on "Career Opportunity for Designers" organized by Royal
                                                    School of
                                                    Architecture and Royal School of Design.</td>
                                            </tr>
                                            <tr>
                                                <td>Er. Rajesh Dutta, Engineering Consultant in ASDMA, attended a session on
                                                    Disaster Management
                                                    and mitigation organized by Royal School of Architecture and Royal School of
                                                    Design.</td>
                                            </tr>
                                            <tr>
                                                <td>Ar. Anuj Bhajanka attended the Re-orientation program for the upcoming
                                                    semester organized by
                                                    Royal School of Architecture and Royal School of Design.</td>
                                            </tr>
                                            <tr>
                                                <td>Ar. Farha Shermin attended an interactive session as part of the Students
                                                    Induction Program
                                                    of B.Arch and BID/DID 1st Semester.</td>
                                            </tr>
                                            <tr>
                                                <td>Ar. Gita Balakrishnana participated in panel discussions organized as part
                                                    of Day 3 of
                                                    Knoxis Design Fest.</td>
                                            </tr>
                                            <tr>
                                                <td>Ar. Ronojoy Sen participated in panel discussions organized as part of Day 3
                                                    of Knoxis
                                                    Design Fest.</td>
                                            </tr>
                                            <tr>
                                                <td>Ar. Ashish Agarwal participated in panel discussions organized as part of
                                                    Day 3 of Knoxis
                                                    Design Fest.</td>
                                            </tr>
                                            <tr>
                                                <td>Mahan J Dutta conducted workshops organized as part of Day 3 of Knoxis
                                                    Design Fest.</td>
                                            </tr>
                                            <tr>
                                                <td>Asutosh Kashyap conducted workshops organized as part of Day 3 of Knoxis
                                                    Design Fest.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Anunaya Chaubey conducted an interactive session regarding Anant
                                                    University's flagship
                                                    program, Anant Fellowship.</td>
                                            </tr>
                                            <tr>
                                                <td>Debabrata Rajkumar delivered an interactive session on Climate Change and
                                                    Waste Management.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mr. Ashish Agarwal, Entrepreneur, conducted an interactive session with
                                                    students.</td>
                                            </tr>
                                            <tr>
                                                <td>Ar. Pragati Goyal participated in the Orientation Programme for freshers of
                                                    RSA, RSFT, RSD,
                                                    and RSFA.</td>
                                            </tr>
                                            <tr>
                                                <td>Nilakshi More participated in the Orientation Programme for freshers of RSA
                                                    and RSD.</td>
                                            </tr>
                                            <tr>
                                                <td>Prof. Abhijit Shirodkar conducted an interactive session with students.</td>
                                            </tr>
                                            <tr>
                                                <td>Trailokya Hazarika led the Birla White Cement Competitions: 1. Yuvaratna, 2.
                                                    Yuvaratna Nxt.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, and Parijit Phukan conducted
                                                    a Meditation
                                                    Workshop by Heartfulness Foundation.</td>
                                            </tr>
                                            <tr>
                                                <td>Ashish Batliwala conducted a 3D Printing Workshop.</td>
                                            </tr>
                                            <tr>
                                                <td>Pankaj Bhattacharjee from Greenlam conducted a workshop on Laminates.</td>
                                            </tr>
                                            <tr>
                                                <td>Dr. Repaul Kanji from IIT Roorkee led a workshop on Awareness of Disaster
                                                    Mitigation &
                                                    Management.</td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div style="text-align: center; margin-top: 10px;">
                                <a href="/architecture-events" class="para1"
                                    style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
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

            <!-- academic excellence  -->
            <section
                style="background-image: url(mobile-assets/department-all/bgg-academic-excellence-png.png); background-size: cover; height: 100%;">

                <h2 class="headd1 text-center pt-5" style="color: #fff; font-size: 50px;">Academic <span
                        style="color: #FF9A1E;">Excellence</span></h2>

                <div class="row" style="display: flex; justify-content: center; align-items: center; padding: 30px 80px;">


                    <div class="col-lg-6">

                        <div
                            style="background-color: #ffffff10; border-radius: 20px; border: 1px solid #ffffff61; padding: 30px;">

                            <div class="p-1 text-center " style="background-color: #FF9A1E; width: 200px; border-radius: 20px;">
                                <h2 class="pt-2 headd3 fw-bold text-dark">GATE Qualified</h2>
                            </div>

                            <div>
                                <div id="multiImageCarousel" class="carousel slide" data-bs-ride="carousel"
                                    style="width: 100%;  border-radius: 12px; overflow: hidden; padding-bottom: 30px; padding-top: 20px;">

                                    <!-- Indicators -->
                                    <div class="carousel-indicators" style="top: 430px;">
                                        <!-- <button type="button" data-bs-target="#multiImageCarousel" data-bs-slide-to="0" class="active"
                              aria-current="true" aria-label="Slide 1"
                              style="width: 50px; height: 4px; border-radius: 40%; background-color: #ffffff;"></button> -->
                                        <!-- <button type="button" data-bs-target="#multiImageCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                              style="width: 50px; height: 4px; border-radius: 40%; background-color: #ffffff;"></button>
                            <button type="button" data-bs-target="#multiImageCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                              style="width: 50px; height: 4px; border-radius: 40%; background-color: #ffffff;"></button> -->
                                    </div>

                                    <!-- Slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="3000">
                                            <img src="mobile-assets/department-all/dept-arch/candidiates/gate/gate-1.png"
                                                class="d-block w-100" alt="Image 1" style="height: 50%; object-fit: cover;">
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </section>
            <!-- academic excellence  -->

            <!--End Section-->
        </div>

        <div class="container">

            <!-- BOS Table -->
            <div class="container mt-4" style="max-width: 100%; overflow-x: auto;">
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    The Board of <span style="color: #FF9A1E; font-weight: 500;">Studies (BOS)</span>
                </h2>

                <div class="table-responsive">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-2" style="font-size: 16px;">
                        <thead class="text-white" style="background-color: #27467a;">
                            <tr>
                                <th class="text-white">S.NO.</th>
                                <th class="text-white">POSITION IN S-BOS</th>
                                <th class="text-white">NAME AND DESIGNATION</th>
                            </tr>
                        </thead>
                        <tbody class="mobile-para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                            <tr>
                                <td>1</td>
                                <td>Chairperson (Ex-Officio) Dean of School</td>
                                <td>Prof. (Dr.) Hari Prasad Agarwal, Principal, RSA</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Professors of the School Members (Ex-Officio)</td>
                                <td>Ar. Siddhartha Deb, Professor</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>External Experts for each Department (Academic)</td>
                                <td>Prof. (Dr.) Abhijit Shirodkar, Dean, School of Architecture & Planning, Woxsen University,
                                    Kamkole,
                                    Sadasivpet, District Sangareddy, Telangana 502345</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>External Experts for each Department (Industry)</td>
                                <td>Ar. Ranel Kumar Das, Founder & Principal Architect of Ranel Associates Architects, B. Baruah
                                    Road,
                                    Ullubari, Guwahati-07</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Two Faculty members of the School nominated by the Vice Chancellor</td>
                                <td>Ar. Kasturi Borah, Associate Professor, RSA</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Registrar, Member Secretary (Ex-officio)</td>
                                <td>Dr. Dip Narayain Singh or his nominee</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- BOS Table -->

            <!-- DRC  -->
            <div class="container mt-4" style="max-width: 100%; overflow-x: auto;">
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

                <div class="p-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accordion mobile-para1" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed"
                                            style="background-color: #264273; color: #fff;" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne"><strong>
                                                Under Graduate
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="mobile-assets/department-all/dept-arch/arch-pdf/structure-b.arch.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Structure of Syllabus - B.Arch
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <a href="mobile-assets/department-all/syllabus-new/2_RSA/Structure of syllabus - UG B.Arch 2025.pdf"
                                                    target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Detailed Syllabus - B.Arch
                                                    <i class="fa fa-download"></i>
                                                </a>
                                                <!-- <a
                                        href="mobile-assets/department-all/Departmentalpdf/Old Syllabus B.ARCH.pdf"
                                        target="_blank"
                                      >
                                        <i class="fa fa-file-text px-2"></i> Old Syllabus B.ARCH.pdf
                                        <i class="fa fa-download"></i>
                                      </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed"
                                            style="background-color: #264273; color: #fff;" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"><strong>
                                                Doctoral Programme
                                            </strong>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <a href="phd" target="_blank">
                                                    <i class="fa fa-file-text px-2"></i> Click Here...

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
        </div>
@endsection
