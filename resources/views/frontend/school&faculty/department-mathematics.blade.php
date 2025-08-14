@extends('frontend.master')
@section('content')
          <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
          @include('frontend/components/mobileheader')
          <!-- till about dept  -->
          <section style="background-color: #fff8f0; padding: 30px 10px 20px 10px; padding-top: 80px; position: relative;">

            <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Mathematics</span>
            </h1>

            <h2 class="headd3 text-center" style="color: #27467A; font-weight: 700;">
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Royal School of</span> <br>
              Applied and Pure Sciences (RSAPS)
            </h2>

            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-12">

                  <div class="txaa-slide-down-1">
                    <div style=" height: 400px; width: 100%;" class="kd-about-3-img img-cover fix kd-img-ani-1">
                      <img class="rounded" decoding="async" src="mobile-assets/department-all/dept-mathematics/headimg.png"
                        alt="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                  <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                    Department of mathematics is a constituent part of Royal School of Applied & Pure Sciences was formed in
                    July, 2017 under The Assam Royal Global University, Guwahati. The department is presently offering
                    courses like B.Sc. Mathematics, M.Sc. Mathematics and Ph.D. in Mathematics. The department is blessed
                    with 4 senior experienced faculty members along with 10 young, energetic and dedicated faculty members
                    who leave no stone unturned to present the aspiring students, the principles and concepts of
                    mathematics. All the faculty members of the department are actively involved in teaching and research in
                    different thrust areas like Fluid dynamics, Mathematical Modelling, Functional Analysis, Fuzzy
                    Mathematics, Integro-differential Equations, Mathematical Education, Statistical and Data Analysis and
                    Multidisciplinary Research.

                    The course learning outcomes of Mathematics are aimed at fascinating the learners to acquire knowledge,
                    skills, understanding, values, attributes and academic standards. Besides imparting regular courses, the
                    department is also preparing the student for higher study in reputed institutions by providing JAM
                    coaching to UG students and NET/GATE coaching to PG students. For the betterment of the students, the
                    department often organized seminar, workshop, conference, webinar, motivational talk, guest lectures by
                    renowned mathematician, field trips, annual events like National Mathematics Day, National Science Day,
                    Pi-Day and also involve the students in sports, club activities and corporate interaction. The students
                    after completing their UG and PG degrees in Mathematics can take up their career paths in Data Analysis,
                    Actuarial Science, Finance and Banking, Computer Science and Information Technology, Engineering and
                    Applied Sciences, Teaching, Government and Public Sector jobs, Entrepreneurship, and in Academic
                    Research.
                  </p>

                </div>
              </div>
            </div>

            <div class="pt-3">

              <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
              </h1>

              <img src="mobile-assets/department-all/dept-mathematics/vision-mission-mob.png" alt="">
            </div>

            <div>
              <img src="mobile-assets/department-all/dept-mathematics/mobile-mathematics-down.png" alt="">
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
                        <strong style="color: #023e8a;" class="#">Master of Mathematics</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MSc-Mathematics"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Mathematics</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-b-sc-mathematics"><button type="button"
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
                        <td>Mr. Mayur Bora, a Writer and Motivational Speaker, was invited for an Orientation and Student
                          Development Program.</td>
                      </tr>
                      <tr>
                        <td>Prof. T. R. Sesashadri from Delhi University conducted a Student Interactive Session.</td>
                      </tr>
                      <tr>
                        <td>Sqn. Ldr. Pranjal Deka, a Wing Commander in the Indian Air Force, participated in a
                          Re-Orientation Programme.</td>
                      </tr>
                      <tr>
                        <td>Prof. Krishna B Athreya from IOWA State University, USA delivered an Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Ms. Priyanka Das Rajkakati, an Indian scientist based in France, held an Interactive Session.
                        </td>
                      </tr>
                      <tr>
                        <td>Mr. Diganta Das, Senior Journalist and Director of DPRC, gave a Motivational Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Manjil Bhargava, a renowned Mathematician and Field Medalist, gave an Online Invited
                          Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Bipan Hazarika from the Department of Mathematics, Gauhati University, delivered an
                          Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Mridula Kanoria, Professor at Sister Nivedita University, Kolkata, gave an Invited Talk.
                        </td>
                      </tr>
                      <tr>
                        <td>Retd. Prof. (Dr.) Debabrata Datta, Senior Scientist from BARC, Mumbai, engaged in an Interaction
                          with Students.</td>
                      </tr>
                      <tr>
                        <td>Retd. Prof. (Dr.) Debabrata Datta also delivered an Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Avishek Adhikari, Professor at Presidency University, Kolkata, delivered an Invited Talk.
                        </td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Jaydeb Sarkar from Indian Statistical Institute, Bangalore delivered an Invited
                          Talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Pinki Goswami, Assistant Professor at University of Science and Technology, Meghalaya, gave
                          an Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Sukanta Pati from the Department of Mathematics, IIT Guwahati, delivered an Invited
                          Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Alex Ely Kossovsky, an Independent Researcher from New York, USA, delivered an
                          Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Shakuntala Choudhury from Bridgewater, New Jersey, USA, gave an Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Laishram Ladu Singh, Professor Emeritus at RGU and Ex. VC of Bodoland University,
                          delivered an Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Meir Shillor, Distinguished Professor at Oakland University, USA, delivered an
                          Invited Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Bhupen Deka from the Department of Mathematics, IIT Guwahati, gave an Invited Talk.
                        </td>
                      </tr>
                      <tr>
                        <td>A Parents Teacher Interaction cum NAAC Orientation was organized for Parents.</td>
                      </tr>
                      <tr>
                        <td>Dr. Azizur Rahman Sheikh, Former HoD of the Department of Mathematics, Cotton College, was
                          felicitated as the Eminent Mathematician of the State.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Debabrata Datta, Former Senior Scientist at BARC, was the Invited Speaker at a
                          Workshop on Advancing Quantum Computing through Mathematics.</td>
                      </tr>
                      <tr>
                        <td>Mr. Akash Saxena, Deputy Director at RCCR, conducted an Interactive Session on Career
                          Opportunities.</td>
                      </tr>
                      <tr>
                        <td>A Campus Visit was organized for College Students.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Gagan Kumar, Professor at the Department of Physics, IIT Guwahati, was the Invited
                          Speaker for National Science Day.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Shanta Laishram, Professor of Mathematics at ISI New Delhi, delivered an Invited
                          Talk.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Partha Sarathi Mandal from the Department of Mathematics, IIT Guwahati, was the
                          Invited Speaker for Pi Day Celebration.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Bipin Kumar Gupta, Senior Principal Scientist and Professor (AcSIR, NPL Campus),
                          delivered an Invited Talk.</td>
                      </tr>


                      <!-- Keep adding rows here -->
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="text-center mt-2">
                <a href="/department-mathematics-events" class="para1"
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

            <!-- Mobile Highlights Carousel -->
            <div>
              <h2 class="fw-bold text-start pb-3" style="color: #27467A; font-size: 26px;">Departmental <span
                  style="color: #FF9A1E;">Highlights</span></h2>

              <div id="mobileCarouselIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="mobile-assets/department-all/dept-mathematics/highlights/1.jpeg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-mathematics/highlights/2.jpeg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-mathematics/highlights/3.jpeg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-mathematics/highlights/4.jpeg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarouselIndicators"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mobileCarouselIndicators"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <!-- Popup Modal -->
              <div id="mobileImagePopup"
                style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.9); z-index:1050; justify-content:center; align-items:center;">
                <span onclick="closeMobilePopup()"
                  style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
                <img id="mobilePopupImage" src=""
                  style="max-width:90vw; max-height:90vh; border:5px solid white; border-radius:10px;">
              </div>

              <script>
                document.querySelectorAll('.popup-img-mob').forEach(img => {
                  img.addEventListener('click', () => {
                    document.getElementById('mobilePopupImage').src = img.src;
                    document.getElementById('mobileImagePopup').style.display = 'flex';
                  });
                });

                function closeMobilePopup() {
                  document.getElementById('mobileImagePopup').style.display = 'none';
                }
              </script>
            </div>
          </div>
          <!-- events and highlights  -->

        </div>

        <div class="website">
          <!--Start Header-->
          @include('frontend/components/aheader')
          <!--End Header-->

          <section style="background-color: #FFF8F0;">
            <div class="p-5">
              <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Department of
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Mathematics</span>
              </h1>

              <h2 class="headd1 text-center" style="color: #27467A; font-weight: 700;">
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Royal School of</span>
                Applied and Pure Sciences (RSAPS)
              </h2>
            </div>

            <div class="container p-4">
              <div class="row align-items-center gx-5">

                <div class="col-lg-6">
                  <div class="kd-about-3-img-wrap txaa-slide-down-1">
                    <div>
                      <img class="rounded w-60" decoding="async"
                        src="mobile-assets/department-all/dept-mathematics/headimg.png" alt="">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">

                  <h2 class="headd1" style="color: #264273; font-weight: 700;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                    Department of mathematics is a constituent part of Royal School of Applied & Pure Sciences was formed in
                    July, 2017 under The Assam Royal Global University, Guwahati. The department is presently offering
                    courses like B.Sc. Mathematics, M.Sc. Mathematics and Ph.D. in Mathematics. The department is blessed
                    with 4 senior experienced faculty members along with 10 young, energetic and dedicated faculty members
                    who leave no stone unturned to present the aspiring students, the principles and concepts of
                    mathematics. All the faculty members of the department are actively involved in teaching and research in
                    different thrust areas like Fluid dynamics, Mathematical Modelling, Functional Analysis, Fuzzy
                    Mathematics, Integro-differential Equations, Mathematical Education, Statistical and Data Analysis and
                    Multidisciplinary Research.
                  </p>

                </div>

              </div>
            </div>

            <div class="bg-white">
              <p class="para1 container" style="color: #24477f; text-align: justify; padding: 30px 0px;">
                The course learning outcomes of Mathematics are aimed at fascinating the learners to acquire knowledge,
                skills, understanding, values, attributes and academic standards. Besides imparting regular courses, the
                department is also preparing the student for higher study in reputed institutions by providing JAM coaching
                to UG students and NET/GATE coaching to PG students. For the betterment of the students, the department
                often organized seminar, workshop, conference, webinar, motivational talk, guest lectures by renowned
                mathematician, field trips, annual events like National Mathematics Day, National Science Day, Pi-Day and
                also involve the students in sports, club activities and corporate interaction. The students after
                completing their UG and PG degrees in Mathematics can take up their career paths in Data Analysis, Actuarial
                Science, Finance and Banking, Computer Science and Information Technology, Engineering and Applied Sciences,
                Teaching, Government and Public Sector jobs, Entrepreneurship, and in Academic Research.
              </p>
            </div>

            <div style="background-color: #fff;">
              <div class="p-5">
                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                  <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                </h1>

                <img class="w-100" src="mobile-assets/department-all/dept-mathematics/vision-mission-web.png" alt="">
              </div>
            </div>

            <div>
              <img src="mobile-assets/department-all/dept-mathematics/web-mathematics-down.png" alt="">
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
                        <strong style="color: #023e8a;" class="#">Master of Mathematics</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MSc-Mathematics"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Mathematics</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-b-sc-mathematics"><button type="button"
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
              <div class="col-lg-6">
                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  Events </h2>

                <div style="max-width: 100%; position: relative;">
                  <div style="border: 1px solid #ccc;">

                    <div id="scrollContainer" style="height: 350px; overflow: hidden;">
                      <table class="table table-bordered mb-0" style="font-size: 16px;">
                        <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">

                          <tr>
                            <td>Mr. Mayur Bora, a Writer and Motivational Speaker, was invited for an Orientation and
                              Student Development Program.</td>
                          </tr>
                          <tr>
                            <td>Prof. T. R. Sesashadri from Delhi University conducted a Student Interactive Session.</td>
                          </tr>
                          <tr>
                            <td>Sqn. Ldr. Pranjal Deka, a Wing Commander in the Indian Air Force, participated in a
                              Re-Orientation Programme.</td>
                          </tr>
                          <tr>
                            <td>Prof. Krishna B Athreya from IOWA State University, USA delivered an Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Ms. Priyanka Das Rajkakati, an Indian scientist based in France, held an Interactive
                              Session.</td>
                          </tr>
                          <tr>
                            <td>Mr. Diganta Das, Senior Journalist and Director of DPRC, gave a Motivational Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Manjil Bhargava, a renowned Mathematician and Field Medalist, gave an Online
                              Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Bipan Hazarika from the Department of Mathematics, Gauhati University, delivered
                              an Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Mridula Kanoria, Professor at Sister Nivedita University, Kolkata, gave an Invited Talk.
                            </td>
                          </tr>
                          <tr>
                            <td>Retd. Prof. (Dr.) Debabrata Datta, Senior Scientist from BARC, Mumbai, engaged in an
                              Interaction with Students.</td>
                          </tr>
                          <tr>
                            <td>Retd. Prof. (Dr.) Debabrata Datta also delivered an Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Avishek Adhikari, Professor at Presidency University, Kolkata, delivered an Invited
                              Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Jaydeb Sarkar from Indian Statistical Institute, Bangalore delivered an Invited
                              Talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Pinki Goswami, Assistant Professor at University of Science and Technology, Meghalaya,
                              gave an Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Sukanta Pati from the Department of Mathematics, IIT Guwahati, delivered an
                              Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Alex Ely Kossovsky, an Independent Researcher from New York, USA, delivered an
                              Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Shakuntala Choudhury from Bridgewater, New Jersey, USA, gave an Invited Talk.
                            </td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Laishram Ladu Singh, Professor Emeritus at RGU and Ex. VC of Bodoland
                              University, delivered an Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Meir Shillor, Distinguished Professor at Oakland University, USA, delivered an
                              Invited Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Bhupen Deka from the Department of Mathematics, IIT Guwahati, gave an Invited
                              Talk.</td>
                          </tr>
                          <tr>
                            <td>A Parents Teacher Interaction cum NAAC Orientation was organized for Parents.</td>
                          </tr>
                          <tr>
                            <td>Dr. Azizur Rahman Sheikh, Former HoD of the Department of Mathematics, Cotton College, was
                              felicitated as the Eminent Mathematician of the State.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Debabrata Datta, Former Senior Scientist at BARC, was the Invited Speaker at a
                              Workshop on Advancing Quantum Computing through Mathematics.</td>
                          </tr>
                          <tr>
                            <td>Mr. Akash Saxena, Deputy Director at RCCR, conducted an Interactive Session on Career
                              Opportunities.</td>
                          </tr>
                          <tr>
                            <td>A Campus Visit was organized for College Students.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Gagan Kumar, Professor at the Department of Physics, IIT Guwahati, was the
                              Invited Speaker for National Science Day.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Shanta Laishram, Professor of Mathematics at ISI New Delhi, delivered an Invited
                              Talk.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Partha Sarathi Mandal from the Department of Mathematics, IIT Guwahati, was the
                              Invited Speaker for Pi Day Celebration.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Bipin Kumar Gupta, Senior Principal Scientist and Professor (AcSIR, NPL Campus),
                              delivered an Invited Talk.</td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div style="text-align: center; margin-top: 10px;">
                    <a href="/department-mathematics-events"  class="para1"
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

              <div class="col-lg-6">
                <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  Departmental <span style="color: #FF9A1E; font-weight: 500;">Highlights</span></h2>

                <!-- Carousel with Popup Image -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                      aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="mobile-assets/department-all/dept-mathematics/highlights/1.jpeg"
                        class="d-block w-100 popup-img" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-mathematics/highlights/2.jpeg"
                        class="d-block w-100 popup-img" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-mathematics/highlights/3.jpeg"
                        class="d-block w-100 popup-img" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-mathematics/highlights/4.jpeg"
                        class="d-block w-100 popup-img" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <!-- Popup Modal -->
                <div id="imagePopup"
                  style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.9); z-index:1050; justify-content:center; align-items:center;">
                  <span onclick="closePopup()"
                    style="position:absolute; top:20px; right:30px; font-size:40px; color:white; cursor:pointer;">&times;</span>
                  <img id="popupImage" src=""
                    style="max-width:90vw; max-height:90vh; border:5px solid white; border-radius:10px;">
                </div>

                <script>
                  // Handle image click
                  document.querySelectorAll('.popup-img').forEach(img => {
                    img.addEventListener('click', () => {
                      document.getElementById('popupImage').src = img.src;
                      document.getElementById('imagePopup').style.display = 'flex';
                    });
                  });

                  // Close popup
                  function closePopup() {
                    document.getElementById('imagePopup').style.display = 'none';
                  }
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
              The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (BOS)</span></h2>

            <div class="table-responsive">

              <table class="table table-striped table-bordered bg-light">
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th>Sl. No.</th>
                    <th>Name & Profile of Members</th>
                    <th>Category of Nomination</th>
                    <th>Designation in the Body</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>1</td>
                    <td>Dr. Bimalendu Kalita, Associate Professor & HOD</td>
                    <td>Ex-Officio</td>
                    <td>Convener</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Prof. (Dr.) Anuradha Devi, Professor & Dean<br>Prof. (Dr.) Dilip Chandra Nath, Professor
                      Emeritus<br>Prof. (Dr.) Laishram Ladusingh, Professor Emeritus<br>Prof. (Dr.) Kamal Debnath,
                      Associate Professor<br>Dr. Bapan Kalita, Associate Professor<br>Mr. H. Imo Mani Singha, Assistant
                      Professor<br>Dr. Parismita Phukan, Assistant Professor<br>Dr. Marbarisha M. Kharkongar, Assistant
                      Professor<br>Dr. Bikram Bir, Assistant Professor<br>Mr. Neelav Sarma, Assistant Professor<br>Dr.
                      Bhagyashri Patgiri, Assistant Professor<br>Dr. Kshetrimayum Renubebeta Devi, Assistant
                      Professor<br>Dr. Sayak Sengupta, Assistant Professor</td>
                    <td>Ex-Officio</td>
                    <td>Member<br>One External Member (Academic)</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Prof. (Dr.) Dipak Sarma, Professor, Department of Mathematics, Cotton University</td>
                    <td>Nominated member</td>
                    <td>Member<br>One External Member (Industry)</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Prof. (Dr.) Joyanti Chutia, Emeritus scientist, IASST, Former Director, IASST</td>
                    <td>Nominated member</td>
                    <td>Member</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>

          <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

            <div class="table-responsive">

              <table class="overflow-hidden table bg-light text-wrap table-bordered border-top mb-5">
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="text-white">Sl. No.</th>
                    <th class="text-white">Content</th>
                    <th class="text-white">Name of the Member</th>
                    <th class="text-white">Designation</th>
                    <th class="text-white">Designation in the Committee</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>1</td>
                    <td>Head of the Department</td>
                    <td>Dr. Bimalendu Kalita</td>
                    <td>Associate Professor & HoD</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Two Professors</td>
                    <td>Prof. (Dr.) Anuradha Devi</td>
                    <td>Professor, Dean RSAPS & Director IQAC.</td>
                    <td>Departmental Member</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td></td>
                    <td>Prof. (Dr.) Kamal Debnath</td>
                    <td>Professor</td>
                    <td>Departmental Member</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Two Associate Professors – one of them will be the member secretary</td>
                    <td>Dr. Bapan Kalita</td>
                    <td>Associate Professor</td>
                    <td>Departmental Member</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td></td>
                    <td>Dr. Bikram Bir</td>
                    <td>Assistant Professor</td>
                    <td>Departmental Member</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Two Assistant Professors holding Ph.D. degree</td>
                    <td>Dr. Marbarisha M Kharkongor</td>
                    <td>Assistant Professor</td>
                    <td>Departmental Member</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td></td>
                    <td>Dr. Sayak Sengupta</td>
                    <td>Assistant Professor</td>
                    <td>Departmental Member</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Three external members not below the rank of Professors, including members from an allied
                      department, who will be nominated by the URC</td>
                    <td>Prof. (Dr.) Kaberi Saikia</td>
                    <td>Professor & Principal, Royal School of Nursing</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td></td>
                    <td>Prof. (Dr.) Bipul Nath</td>
                    <td>Professor, RSP.</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td></td>
                    <td>Prof. (Dr.) Sudip Chakraborty</td>
                    <td>Professor, RSC.</td>
                    <td>External Member</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>

          <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              List of Journal <span style="color: #FF9A1E; font-weight: 500;">Publications</span></h2>

            <div class="table-responsive">

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2025</h2>
                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Tusar Kanti Das, Ashish Paul, Jintu Mani Nath, & Neelav Sarma</td>
                    <td>“The Yamada-Ota model-based Casson quadra hybrid nanofluid stagnation flow configured by ohmic
                      heating, heat source, and Newtonian boundary heating across an exponentially stretched cylinder”.
                      Partial Differential Equations in Applied Mathematics (Elsevier), 14, 101159. ISSN: 2666-8181.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2024</h2>
                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Bikram Bir, D. Goswami</td>
                    <td>“Numerical Analysis of a grad-div stabilization for the Oldroyd model of order one”, Journal of
                      Applied Analysis & Computation, ISSN: 2156-907X.</td>
                  </tr>
                  <tr>
                    <td>Bimalendu Kalita, Sinam Rajkishore Singha</td>
                    <td>“FUZZY WEAK n-INNER PRODUCT SPACE”, South East Asian Journal of Mathematics and Mathematical
                      Sciences, ISSN: 9727752.</td>
                  </tr>
                  <tr>
                    <td>Sinam Rajkishore Singha, Bimalendu Kalita</td>
                    <td>“FUZZY n-INNER PRODUCT SPACES”, Bulletin of Calcutta Mathematical Society, 116, (6) 703–718
                      (2024). ISSN: 0008-0659.</td>
                  </tr>
                  <tr>
                    <td>Neelav Sarma, Bhagyashri Patgiri, Ashish Paul</td>
                    <td>“Insights using Hamilton-Crosser model in Williamson hybrid nanofluids with
                      homogeneous-heterogeneous reactions and diagonal electromagnetic effects”, Proceedings of the
                      Institution of Mechanical Engineers, Part N: Journal of Nanomaterials, Nanoengineering and
                      Nanosystems, 23977914241304066. ISSN: 2397-7914.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2023</h2>
                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Kamal Debnath and Sankar Singha</td>
                    <td>“Heat and Mass Transport for Elastico-Viscous Fluid with Partial Slip Boundary over a Flat
                      Permeable Plate”, Latin American Applied Research, Scopus indexed journal, Vol 53 No. 2 (2023) ISSN:
                      1851-8796.</td>
                  </tr>
                  <tr>
                    <td>Ankur Jyoti Kashyap, Arnab Jyoti Bordoloi, Fanitsha Mohan and Anuradha Devi</td>
                    <td>“Dynamical analysis of an anthrax disease model in animals with nonlinear transmission rate”,
                      Mathematical Modelling and Control, Vol . 3 No.4, Dec 2023, pp 370-386.</td>
                  </tr>
                  <tr>
                    <td>Md Nazir Hussain, Navalakhi Hazarika and Anuradha Devi</td>
                    <td>“Intuitionistic fuzzy aspects of multiplication N-groups”, South East Asian J. of Mathematics and
                      Mathematical Sciences, Vol. 19 No. 2, 2023. pp 273-284.</td>
                  </tr>
                  <tr>
                    <td>Balajied Me Syrti, Anuradha Devi, Ankur Jyoti Kashyap</td>
                    <td>“Analysis of stability, sensitivity Index and Hopf Bifurcation of Eco-Epidemiological SIR Model
                      under Pesticide Application”, Vol 6. No.2, 2023. Pp 136-144.</td>
                  </tr>
                  <tr>
                    <td>Md Nazir Hussain, Navalakhi Hazarika, Anuradha Devi</td>
                    <td>“Distributive Character of Multiplication N-groups”, International Journal of Mathematics Trends
                      and Technology, Vol. 69. No.6, June-2023, pp 59-66.</td>
                  </tr>
                  <tr>
                    <td>Bikash Koli Saha and Kamal Debnath</td>
                    <td>“Reactive Solute Diffusion in Elastico-Viscous Fluid Past a Flat Permeable Plate”, High Technology
                      Letters, Vol. 29, No. 7, 2023.</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath and S. Singha</td>
                    <td>“Heat and mass transport for elastic-viscous fluid with partial slip boundary over a flat
                      permeable plate”, Latin American Applied Research, Vol . 53, No.2, 2023, pp.89-94.</td>
                  </tr>
                  <tr>
                    <td>Nimai Sarkar, Mausumi Sen, Dipankar Saha and Bipan Hazarika</td>
                    <td>“A Qualitative study on fractional logistic integrodifferential equations in an arbitrary time
                      scale”, Kragujevac Journal of Mathematics, Vol. 50, No.3, pp.403-414.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2022</h2>
                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Bimalendu Kalita</td>
                    <td>“On semi m-hyponormal weighted shift operators” Bulletin of Calcutta Mathematical Society,
                      accepted for publication, 2022.</td>
                  </tr>
                  <tr>
                    <td>Bipul Ch. Kalita, Bapan Kalita</td>
                    <td>“Comprehensive Analysis On Effectiveness Of Inventory Management Practices On The Performance Of
                      Wholesale Drug Dealers”, Journal of Positive School Psychology, ISSN: 2717-7564, Vol. 6, No. 6,
                      2022.</td>
                  </tr>
                  <tr>
                    <td>Bimalendu Kalita</td>
                    <td>“Perturbation of semi weakly m-hyponormal weighted shifts” The Mathematics Student, accepted for
                      publication, 2022 (Scopus indexed) (Impact Factor: 0.10) (published 2023).</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath, Sankar Singha</td>
                    <td>“Heat and Mass Transport for Elastico-viscous Fluid with Partial Slip Boundary over a Flat
                      Permeable Plate,” Latin America Applied Research, ISSN:0327-0793(Print) and 1851-8796(Online).</td>
                  </tr>
                  <tr>
                    <td>Ankur Jyoti Kashyap, Willy Govaerts, Debashish Bhattacharjee & Hemanta Kumar Sarmah</td>
                    <td>“Bifurcation Analysis of a Predator Prey System with density dependent disease recovery”, Filomat,
                      ISSN:2406-0933, Vol: 36 (20), 2022.</td>
                  </tr>
                  <tr>
                    <td>Ankur Jyoti Kashyap, Quanxin Zhu, Debashish Bhattacharjee & Hemanta Kumar Sarmah</td>
                    <td>“Dynamical Study of a Predator Prey System incorporating hunting cooperation and Michaelis-Menten
                      type Predator- Harvesting”, International Journal of Biomathematics, World Scientific,
                      ISSN:1793-715.</td>
                  </tr>
                  <tr>
                    <td>Bapan Kalita, Abdul Barik Sarker, Sankar Barman</td>
                    <td>“Decision Making with Simplex Model: A case study”, Journal of Applied and Fundamental Sciences,
                      ISSN:2395-5554(Print) and 2395-5562(Online), Vol:8(2), 2022.</td>
                  </tr>
                  <tr>
                    <td>Bapan Kalita</td>
                    <td>“Public Revolution: A Mathematical Modelling”, Journal of Applied and Fundamental Sciences,
                      ISSN:2395-5554 and 2395-5562(Online), Vol:8(1), 2022.</td>
                  </tr>
                  <tr>
                    <td>Mitali Das Roy, Sankar Barman, Bapan Kalita</td>
                    <td>“Effectiveness of Surface Texturing and Optical width in Minimizing the Optical loss of a solar
                      cell: A simulated Study”, Journal of Applied and Fundamental Sciences, ISSN: 2395-5554 and
                      2395-5562(Online), Vol: 8 (1), 2022.</td>
                  </tr>
                  <tr>
                    <td>Sankar Barman, Bapan Kalita</td>
                    <td>“Energy, Environment and cost Benefit Analysis OF Semi-Transparent PV Window-A Review”, Journal of
                      Applied and Fundamental Sciences, ISSN: 2395-5554 and 2395-5562(Online), Vol: 8 (2), 2022.</td>
                  </tr>
                  <tr>
                    <td>Balajied Me Syrti and Anuradha Devi</td>
                    <td>“An Eco-Epidemic model with disease in Plant populations and Pesticides as control measure”, I0SR
                      Journal of Mathematics, ISSN: 2319-765X (Print) and ISSN: 2278:5728 (Online), Vol: 18 (3), 2022.
                    </td>
                  </tr>
                  <tr>
                    <td>Prataykshi Sarma and Bapan Kalita</td>
                    <td>“Prediction of Housing Prices of real estate business through machine learning”, IJTMSS, Vol: 1
                      (1), 2022, pp 58-76.</td>
                  </tr>
                  <tr>
                    <td>Smitakhee Handique and Bapan Kalita</td>
                    <td>“A case study on application of transportation problem”, IJTMSS, Vol: 1 (1), 2022, pp 77-95.</td>
                  </tr>
                  <tr>
                    <td>Karismita Medhi and Bapan Kalita</td>
                    <td>“Category detection of cancer patients and role of machine learning as an astrologer”, IJTMSS,
                      Vol. 1 (1), 2022, pp.96-113.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2021</h2>
                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Biplab Singha, Mausumi Sen, Nidul Singha, Dhiman Dutta</td>
                    <td>“A new Hesitant Fuzzy Rule Base system for ranking hydro power plant site selection”, New
                      Mathematics and Natural Computation, 2021. <a href="https://doi.org/10.1142/S1793005722500223">DOI:
                        10.1142/S1793005722500223</a></td>
                  </tr>
                  <tr>
                    <td>Aditya Ghosh, Anuradha Devi</td>
                    <td>“Stability of Glucose-Insulin-Glucagon model using ingested glucose and somatostatin”, Journal of
                      Huazhong University of Science and Technology, VOLUME 50 ISSUE 03 - 2021, page 1-14, 2021.</td>
                  </tr>
                  <tr>
                    <td>Anuja Sinha</td>
                    <td>“Effect of thermal radiation on MHD three-dimensional natural convective Couette flow in presence
                      of thermo diffusion and chemical reaction”, Journal of Mathematical and Computational Science,
                      Volume No. 6, 7337-7359, ISSN: 1927-5307.</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath, Sankar Singha, Bimalendu Kalita</td>
                    <td>“IMPACT OF SUCTION OR BLOWING ON ELASTICO-VISCOUS HYDROMAGNETIC FLUID FLOW PAST A STRETCHING
                      PERMEABLE SHEET”, Advances in Mathematics: Scientific Journal 10 (2021), no.1, 211–221, ISSN:
                      1857-8365 (printed); 1857-8438 (electronic).</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath, Bikash Koli Saha</td>
                    <td>“Heat and Partial Slip Impact on Elastico-viscous Fluid Flow Past a Flat Permeable Plate”,
                      Mathematical Forum, Vol. 29, 2021, ISSN: 0972-9852. (UGC care listed journal)</td>
                  </tr>
                  <tr>
                    <td>Bipul Ch. Kalita, Runumoni L Das, Bapan Kalita</td>
                    <td>“Impact of Working Capital Management on Financial Health: Evidence from Silk Industries in Assam,
                      India”, Journal of Education: Rabindra Bharati University, Vol. XXIV, 2021-2022, No. 12(II), ISSN:
                      0972-7175, 114-124.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2020</h2>

                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“Real Numbers with Fractional Presence”, Journal of Mathematics and Informatics, (February) ISSN:
                      2349-0632, Vol 18, 2020, page 65-69</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“An Alternate Formula for Addition of Discrete Fuzzy Numbers”, International Journal of Fuzzy
                      Mathematical Archives, ISSN: 2320 – 3242, Vol 18, No. 1, 2020, page 7-11 (March)</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“Theory of Fuzzy Sets: An Introduction of the Concept of Negative Partial Presence”, Annals of
                      Pure and Applied Mathematics, 6 May 2020 (Article in Press), Vol. 22 Number, 2279-087X (P),
                      2279-0888 (Online), 119–124</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations”, Journal
                      of Mathematics and Informatics, 5 July 2020 (Article in Press), Vol. 19, 2349-0632 (P), 2349-0640
                      (Online) pp 7–12, May 30, 2020, doi: https://doi.org/10.1101/2020.05.24.20112292, Available under a
                      CC-BY-ND 4.0 International license</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“A Simple Method of Finding an Approximate Pattern of the Covid-19 Spread”, medRxivPreprint Server
                      for Health Sciences, Cold Spring Harbor Laboratory, New York, pp 1-8 (May)</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“On Reliability of the COVID-19 Forecasts”, medRxivPreprint Server for Health Sciences, Cold
                      Spring Harbor Laboratory, New York, June 2020, doi: https://doi.org/10.1101/2020.06.01.20118844,
                      Available under a CC-BY-ND 4.0 International license, pp 1-8</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“The Current COVID-19 Spread Pattern in India”, medRxivPreprint Server for Health Sciences, Cold
                      Spring Harbor Laboratory, New York, 8 June, 2020, https://doi.org/10.1101/2020.06.03.20121210,
                      Available under a CC-BY-ND 4.0 International license, pp 1-5</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“Nearly Perfect Forecasting of the Total COVID-19 Cases in India: A Numerical Approach”,
                      medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 13 June, 2020,
                      https://doi.org/10.1101/2020.06.13.20130096, Available under a CC-BY-ND 4.0 International license,
                      pp 1-7</td>
                  </tr>
                  <tr>
                    <td>Hemanta K. Baruah</td>
                    <td>“The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations”,
                      medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 23 June,
                      https://doi.org/10.1101/2020.06.21.20136630, Available under a CC-BY-ND 4.0 International license,
                      2020, pp 1-6</td>
                  </tr>
                  <tr>
                    <td>Munmi Saikia, Atasi Patra Maiti, Anuradha Devi</td>
                    <td>“Effect of habitat complexity on rhinoceros and tiger population model with additional food and
                      poaching in Kaziranga national park, Assam”, Mathematics and Computers in Simulation
                      177(2020)169-19.</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath, Debasish Dey, Rupjyoti Borah</td>
                    <td>“Thermophoresis and diffusion thermo effects on shear thickening and shear thinning cases of fluid
                      motion past a permeable surface”, Journal of Mechanics of Continua and Mathematical Sciences, Vol.
                      -15, No.-5, May (2020) pp 68-81.</td>
                  </tr>
                  <tr>
                    <td>Bapan Kalita, Anuradha Devi</td>
                    <td>“Japanese Encephalitis from Two Outsources: A Mathematical Modeling”, Journal of Critical Reviews,
                      Vol. 7, Issue 12, 2020, pp.309-315.</td>
                  </tr>
                  <tr>
                    <td>Bapan Kalita, Anuradha Devi</td>
                    <td>“Control Model of Transmission of Japanese Encephalitis through Media Awareness”, International
                      Journal of Advanced Science and Technology, Vol. 29, No. 5, 2020, pp.7645-7656.</td>
                  </tr>
                  <tr>
                    <td>Bapan Kalita, Anuradha Devi</td>
                    <td>“Mathematical Modelling of Impact of Vaccination in Controlling Japanese Encephalitis”,
                      International Journal on Emerging Technologies, Vol. 11, Issue 3, 2020, pp.792-796.</td>
                  </tr>
                  <tr>
                    <td>Bimalendu Kalita</td>
                    <td>“ON SEMI WEAKLY (l,m)-HYPONORMAL WEIGHTED SHIFTS” Advances in Mathematics: Scientific Journal 9
                      (2020), no.12, 10797–10805. ISSN: 1857-8365 (printed); 1857-8438 (electronic).</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath, Bikash Koli Saha</td>
                    <td>“Solution of non-Newtonian Boundary Layer Flow in a Convergent Channel using Homotopy Perturbation
                      Method”, Published in Transient, A Journal of Natural Sciences and Allied Subjects, ISSN: 2250-0650,
                      Vol. VIII, 2020, 28.</td>
                  </tr>
                  <tr>
                    <td>Kamal Debnath, Sankar Singha</td>
                    <td>“Mixed Convective Slip Flow and Heat Transport for Visco-elastic Fluid Past a Vertical Plate”,
                      Mathematical Forum, Vol . 28, 2020, ISSN: 0972-9852. (UGC care listed journal).</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2019</h2>

                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                    <td>“Effect of Nonthermal Ions on Dust Acoustic Waves in Magnetized Plasma”, Mathematical Journal of
                      Interdisciplinary Science, ISSN: 2278-9561 (P), 2278-957X (O), vol 8, No 1, September, 2019, page
                      69-76. (UGC Care)</td>
                  </tr>
                  <tr>
                    <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                    <td>“Sagdeev Potential Approach to Study the Dust Acoustic Waves in Dusty Plasma with Nonthermal
                      Ions”, Infokara Research, Volume 8, Issue 7, September 2019.</td>
                  </tr>
                  <tr>
                    <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                    <td>“Nonperturbative Technique for Dust-ion-acoustic Waves in Dusty Plasma with Nonthermal Electrons”,
                      International Journal of Research and Review, ISSN: 2454-2237 (P), 2349-978(O), vol 6, issue 11,
                      November, 2019, page 153-161.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-striped table-bordered bg-light">
                <thead>
                  <h2 class="headd3 fw-bold text-dark">2018</h2>
                  <tr>
                    <th>Title</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>Navalakhi Hazarika and Helen K Saikia</td>
                    <td>“Singular and semi-simple character in E-injective N-groups with weakly descending chain
                      conditions”, Africa Mathematica (Springer), Volume 29, Number 7-8 (2018), Page 1065-1072, Springer
                    </td>
                  </tr>
                  <tr>
                    <td>Anuradha Devi, Ranjan Kalita</td>
                    <td>“A Mathematical Model of Glucose – Insulin regulation where glucose and insulin both are
                      influenced by externally ingested glucose”, International Journal of Engineering Science and
                      Technology, ISSN: 09755-5462, Volume 10, Issue 02S, January, 2018, page 154-157.</td>
                  </tr>
                  <tr>
                    <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                    <td>“Non Perturbative Approach for Dust Acoustic Waves in Plasma with Non Thermal Ions and Trapped
                      Electrons”, International Journal of Mathematics Trends and Technology, Volume 61, Number 1,
                      September, 2018.</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>


          <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Faculty <span style="color: #FF9A1E; font-weight: 500;">List</span></h2>

            <div class="table-responsive">
              <table class="table table-striped table-bordered bg-light">
                <thead style="background-color: #27467A; color: #fff;">
                  <tr>
                    <th class="text-white">Sl. No.</th>
                    <th class="text-white">Name</th>
                    <th class="text-white">Designation</th>
                  </tr>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>1</td>
                    <td>Prof. (Dr.) Anuradha Devi</td>
                    <td>Professor & Dean</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Prof. (Dr.) Dilip Chandra Nath</td>
                    <td>Professor Emeritus</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Prof. (Dr.) Laishram Ladusingh</td>
                    <td>Professor Emeritus</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Bimalendu Kalita</td>
                    <td>Associate Professor & HoD</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Prof. (Dr.) Kamal Debnath</td>
                    <td>Associate Professor</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Dr. Bapan Kalita</td>
                    <td>Associate Professor</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Mr. H. Imo Mani Singha</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Dr. Parismita Phukan</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Dr. Marbarisha M. Kharkongar</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Dr. Bikram Bir</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Mr. Neelav Sarma</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Dr. Bhagyashri Patgiri</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Dr. Kshetrimayum Renubebeta Devi</td>
                    <td>Assistant Professor</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Dr. Sayak Sengupta</td>
                    <td>Assistant Professor</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>


        <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

            <div class="p-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion para1" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" style="background-color: #264273; color: #fff;"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne"><strong>
                                            Under Graduate
                                        </strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <a href="mobile-assets/department-all/dept-mathematics/updated-syllabus/structure-of-syllabus.pdf"
                                                target="_blank">
                                                <i class="fa fa-file-text px-2"></i>
                                                Structure of Syllabus
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <a href="mobile-assets/department-all/dept-mathematics/updated-syllabus/detailed-syllabus-ug.pdf"
                                                target="_blank">
                                                <i class="fa fa-file-text px-2"></i>
                                                Detailed Syllabus - UG Mathematics
                                                <i class="fa fa-download"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" style="background-color: #264273; color: #fff;"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>
                                            Post Graduate
                                        </strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <a href="mobile-assets/department-all/dept-mathematics/updated-syllabus/detailed-syllabus-pg.pdf"
                                                target="_blank">
                                                <i class="fa fa-file-text px-2"></i>
                                                Detailed Syllabus - PG Mathematics
                                                <i class="fa fa-download"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" style="background-color: #264273; color: #fff;"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree"><strong>
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
            </div>
        </div>

        </div>

      </div>
@endsection
