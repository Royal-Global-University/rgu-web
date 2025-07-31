@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

    <div class="mobile">
      @include('frontend/components/mobileheader')
      <!-- till about dept  -->
      <section style="background-color: #fff8f0; padding-top: 80px; position: relative;">

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
                  <img class="rounded" decoding="async" src="mobile-assets/department-all/dept-public-admin/head-img.jpg"
                    alt="">
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
                    <td>Dr. D.P. Sharma, Professor in the Department of Political Science at Gauhati University, was the
                      guest speaker for the session on ‘Election Commission and Model Code of Conduct’.</td>
                  </tr>
                  <tr>
                    <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political Science at Gauhati
                      University, was the guest speaker for the session on ‘Election Commission and Model Code of
                      Conduct’.</td>
                  </tr>
                  <tr>
                    <td>Dr. Mohinder Singh, Visiting Professor in the Department of Political Science and Public
                      Administration at RIMT University Punjab, served as a resource person for the ‘Online FDP on
                      Emerging Areas of Research in Public Administration’.</td>
                  </tr>
                  <tr>
                    <td>Dr. Jayanta Krishna Sharmah, Dean, Professor and Head in the Department of Political Science at
                      Gauhati University, served as a resource person for the ‘Online FDP on Emerging Areas of Research
                      in Public Administration’.</td>
                  </tr>
                  <tr>
                    <td>Dr. Janak Singh Meena, Professor and Head in the Department of Gandhian Thought and Peace
                      Studies at the Central University of Gujarat, served as a resource person for the ‘Online FDP on
                      Emerging Areas of Research in Public Administration’.</td>
                  </tr>
                  <tr>
                    <td>Dr. D.P. Sharma, Professor in the Department of Political Science at Gauhati University, also
                      served as a resource person for the ‘Online FDP on Emerging Areas of Research in Public
                      Administration’.</td>
                  </tr>
                  <tr>
                    <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political Science at Gauhati
                      University, also served as a resource person for the ‘Online FDP on Emerging Areas of Research in
                      Public Administration’.</td>
                  </tr>
                  <tr>
                    <td>Shri Dipak Kumar Sharma, Chairman of the Indian Institute of Public Administration, Assam, was
                      the guest speaker for the ‘Interactive Session on Civic Responsibility For Good Governance’.</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

          <div class="text-center mt-2">
            <button class="para1"
              style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
              View All
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

        <!-- Mobile Highlights Carousel -->
        <div>
          <h2 class="fw-bold text-start pb-3" style="color: #27467A; font-size: 26px;">Departmental <span
              style="color: #FF9A1E;">Highlights</span></h2>

          <div id="mobileCarouselIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/1.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/2.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/3.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/4.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/5.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/6.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/7.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/8.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/9.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/10.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/11.jpg" class="d-block w-100 popup-img-mob" alt="...">
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

      <!--About Section-->

      <div class="container pb-5 pt-3">

        <!-- events  -->
        <div class="row" style="display: flex; justify-content: center;">
          <div class="col-lg-6">
            <h2 class="headd1 fw-bold pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Events </h2>

            <div style="max-width: 100%; position: relative;">
              <div style="border: 1px solid #ccc;">

                <div id="scrollContainer" style="height: 315px; overflow: hidden;">
                  <table class="table table-bordered mb-0" style="font-size: 16px;">
                    <tbody class="para1" id="scrollContent" style="background-color: #f9f9f9;">

                      <tr>
                        <td>Dr. D.P. Sharma, Professor in the Department of Political Science at Gauhati University, was
                          the guest speaker for the session on ‘Election Commission and Model Code of Conduct’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political Science at Gauhati
                          University, was the guest speaker for the session on ‘Election Commission and Model Code of
                          Conduct’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Mohinder Singh, Visiting Professor in the Department of Political Science and Public
                          Administration at RIMT University Punjab, served as a resource person for the ‘Online FDP on
                          Emerging Areas of Research in Public Administration’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Jayanta Krishna Sharmah, Dean, Professor and Head in the Department of Political Science
                          at Gauhati University, served as a resource person for the ‘Online FDP on Emerging Areas of
                          Research in Public Administration’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Janak Singh Meena, Professor and Head in the Department of Gandhian Thought and Peace
                          Studies at the Central University of Gujarat, served as a resource person for the ‘Online FDP
                          on Emerging Areas of Research in Public Administration’.</td>
                      </tr>
                      <tr>
                        <td>Dr. D.P. Sharma, Professor in the Department of Political Science at Gauhati University,
                          also served as a resource person for the ‘Online FDP on Emerging Areas of Research in Public
                          Administration’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Vikas Tripathi, Assistant Professor in the Department of Political Science at Gauhati
                          University, also served as a resource person for the ‘Online FDP on Emerging Areas of Research
                          in Public Administration’.</td>
                      </tr>
                      <tr>
                        <td>Shri Dipak Kumar Sharma, Chairman of the Indian Institute of Public Administration, Assam,
                          was the guest speaker for the ‘Interactive Session on Civic Responsibility For Good
                          Governance’.</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div style="text-align: center; margin-top: 10px;">
                <button class="para1"
                  style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                  View All
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
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                  aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                  aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                  aria-label="Slide 7"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                  aria-label="Slide 8"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                  aria-label="Slide 9"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                  aria-label="Slide 10"></button>
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10"
                  aria-label="Slide 11"></button>
              </div>

              <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/1.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/2.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/3.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/4.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/5.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/6.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/7.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/8.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/9.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/10.jpg" class="d-block w-100 popup-img-mob" alt="...">
              </div>
              <div class="carousel-item">
                <img src="mobile-assets/department-all/dept-public-admin/highlights/11.jpg" class="d-block w-100 popup-img-mob" alt="...">
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
      </div>


      <div>
        <div>

          <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
