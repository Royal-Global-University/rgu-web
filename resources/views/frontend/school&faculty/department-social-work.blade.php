@extends('frontend.master')
@section('content')
          <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
          @include('frontend/components/mobileheader')
          <!-- till about dept  -->
          <section style="background-color: #fff8f0; padding-top: 80px; position: relative;">

            <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Department of
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">Social Work</span>
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
                      <img class="rounded" decoding="async" src="mobile-assets/department-all/dept-social-work/head-img.png"
                        alt="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                  <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Social Work Department at The Assam Royal Global University is dedicated to developing skilled
                    professionals who are equipped to address complex social issues with compassion and expertise. Our
                    department's strength lies in a comprehensive curriculum which integrates theory with hands-on practice
                    through extensive fieldwork opportunities, cutting-edge research, and community engagement. With a focus
                    on areas such as community development, psychiatric social work, family and child welfare, and
                    livelihood & social entrepreneurship, our programmes emphasize both the micro and macro aspects of
                    social work practice. Our faculty consists of experienced practitioners and researchers who bring a
                    wealth of knowledge and practical insights to the classroom. Prospects for our graduates are promising,
                    with opportunities in the development sector including healthcare, non-profits, government agencies, and
                    international organizations. Our alumni network is strong and active, providing ongoing support and
                    professional development opportunities. We are committed to fostering a learning environment that
                    promotes innovation, ethical practice, and a commitment to social change, preparing our students to be
                    leaders in the field of social work.
                  </p>

                </div>
              </div>
            </div>

            <div class="pt-3">

              <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
              </h1>

              <img src="mobile-assets/department-all/dept-social-work/vision-mission-mob.png" alt="">
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
                        <strong style="color: #023e8a;" class="#">Master of Social Work</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MSW"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="programs-BSW">Bachelor of Social Work</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BSW"><button type="button"
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
                        <td>Mr. Shivalal Gautam, Co-Founder of Xomonnoy, delivered an invited talk on Gender and Social
                          Exclusion.</td>
                      </tr>
                      <tr>
                        <td>Mr. Mohan Sharma, a researcher, delivered an invited talk on Human-Animal Relationship.</td>
                      </tr>
                      <tr>
                        <td>Ms. Juree Hojai, Program Officer of Disability Inclusion at Team Lease Foundation, conducted
                          an interactive session on careers in the development sector.</td>
                      </tr>
                      <tr>
                        <td>Dr. Dinesh Goswami, Advisor of Pratishruti Cancer and Palliative Trust, Dibrugarh, along
                          with Mr. Henry Wood from the University of Durham, UK, conducted an interactive session.</td>
                      </tr>
                      <tr>
                        <td>Ms. Manjari Nandy, Assistant Professor in the Department of Sociology at The Maharaja
                          Sayajirao University of Baroda and Ph.D. scholar at the Central University of Gujarat,
                          delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Bhargabi Das, Assistant Professor in the Department of Rural Management at Shiv Nadar
                          Institution of Eminence, Greater Noida, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Ms. Suchismita Majumdar, Founder-Director of Swabalambi Foundation, and Mr. Kanhaiya Lal,
                          Senior Co-Worker in Education at SOS Village of Children, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Bitasta Das, Senior Editor and Instructor at the Indian Institute of Science, Bangalore,
                          conducted a two-day workshop on the intersectionality of social sciences.</td>
                      </tr>
                      <tr>
                        <td>Prof. (Dr.) Surajit Ch. Mukhopadhyay, Dean of RSHSS, participated as an in-house resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Joseph Riamei, Assistant Professor from the School of Social Work at TISS Guwahati
                          Off-Campus, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Ms. Nipurnh Gupta, a global development communication professional from UNICEF, delivered an
                          invited talk.</td>
                      </tr>
                      <tr>
                        <td>Mr. Mukund Marodia, Manager of Strategic and Academic Affairs at the Indian School of
                          Development Management, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sriparna B. Baruah, former Head (CIE) and Director I/C at IIE, currently Advisor
                          (Livelihood & Entrepreneurship) at NEHHDC, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Mr. Nayan Jyoti Hazarika, Ph.D. scholar from the Department of Social Work, delivered an
                          invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Shivani Chauhan Barooah, Chairperson of the Centre for Labour Studies and Social
                          Protection at TISS Guwahati, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Gayatri Gogoi (AMCH and Pratishruti Trust), Dr. Pankaj Deka (Health City Hospital), and
                          Ms. Nabanita Kalita (N.E News & Prag News) delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Mr. Anupam Joya Sharma, a doctoral fellow of Social Epidemiology at IIT Gandhinagar,
                          delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Aarushi Kehkar Malhotra, Senior Manager of Research, Advocacy, and Wellness at Sirona
                          Hygiene Foundation, delivered an invited talk online.</td>
                      </tr>
                      <tr>
                        <td>Mr. Sahbaz Ahmed and Mr. Syed Rizwan Ahmed, Advocates from Gauhati High Court, delivered an
                          invited talk.</td>
                      </tr>
                      <tr>
                        <td>Ms. Archana Borthakur of Priya Bondhu and Mr. Uttam Teron of Parijat Academy delivered an
                          invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Ashok Kumar Das (Dr. B. Barooah Cancer Institute) and Dr. Mythili Hazarika (Gauhati
                          Medical College and Hospital) delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Mr. Miguel Das Queah, Executive Director of UTSAH, delivered an invited talk.</td>
                      </tr>
                      <tr>
                        <td>Dr. Razdan Sarim Rahman, Assistant Professor at TISS Guwahati, visited the department.</td>
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
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/1.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/2.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/3.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/4.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/5.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/6.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/7.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/8.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/9.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/10.jpg"
                      class="d-block w-100 popup-img-mob" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="mobile-assets/department-all/dept-public-admin/highlights/11.jpg"
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

            <div class="mt-3">
              <!-- WRAPPER -->
              <div>
                <section style="background-color: #F0F8FF; border-bottom: 1px solid #023e8a;">
                  <div class="p-4"
                    style="background-image: url(mobile-assets/department-all/new-bg.svg); background-size: cover;">
                    <h2 class="headd1 text-center" style="color: #fff; font-size: 30px;">
                      Academic Excellence: <span style="color: #FEC100;">NET/ SET Qualified Students</span>
                    </h2>
                  </div>

                  <div class="container py-4">
                    <!-- Tab Buttons -->
                    <div class="d-flex justify-content-center mb-3 flex-wrap">
                      <button class="year-btn-netset" data-year="2025"
                        style="border: none; border-radius: 10px; padding: 10px 60px; font-weight: 700; font-size: 18px; color: white; background: linear-gradient(to right, #000000, #005c99); margin: 5px;">
                        2025
                      </button>
                      <button class="year-btn-netset" data-year="2024"
                        style="border: 2px solid #003366; border-radius: 10px; padding: 10px 60px; font-weight: 700; font-size: 18px; color: #003366; background-color: #f0f4ff; margin: 5px;">
                        2024
                      </button>
                    </div>

                    <hr style="margin: 0 0 20px 0;">

                    <!-- Tab Content for 2024 -->
                    <div id="tab-netset-2024" class="tab-content-netset d-none">
                      <div style="max-width: 500px; margin: 0 auto; overflow: hidden; position: relative;">
                        <div id="carousel-netset-2024" style="display: flex; transition: transform 0.5s ease;">
                          <!-- CARD 1 -->
                          <div style="min-width: 100%; padding: 10px; box-sizing: border-box;">
                            <div
                              style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                              <div style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                <img src="mobile-assets/department-all/dept-social-work/ugc-section/gracy.jpg"
                                  style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                              </div>
                              <div style="padding: 20px;">
                                <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">GRACY LAMPAHHOI KIPGEN</h4>
                                <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                <button
                                  style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold;">Batch:
                                  2023 - 25</button>
                                <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2025</p>
                              </div>
                            </div>
                          </div>
                          <!-- CARD 2 -->
                          <div style="min-width: 100%; padding: 10px; box-sizing: border-box;">
                            <div
                              style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                              <div style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                <img src="mobile-assets/department-all/dept-social-work/ugc-section/hiba.jpg"
                                  style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                              </div>
                              <div style="padding: 20px;">
                                <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">HIBA ANSARI</h4>
                                <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                <button
                                  style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold;">Batch:
                                  2023 - 25</button>
                                <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2025</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Tab Content for 2025 -->
                    <div id="tab-netset-2025" class="tab-content-netset">
                      <div style="max-width: 500px; margin: 0 auto; overflow: hidden; position: relative;">
                        <div id="carousel-netset-2025" style="display: flex; transition: transform 0.5s ease;">
                          <!-- CARD -->
                          <div style="min-width: 100%; padding: 10px; box-sizing: border-box;">
                            <div
                              style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                              <div style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                <img
                                  src="mobile-assets/department-all/dept-social-work/ugc-section/GRACE LAMPAHHOI KIPGEN.png"
                                  style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                              </div>
                              <div style="padding: 20px;">
                                <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">GRACE LAMPAHHOI KIPGEN</h4>
                                <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                <button
                                  style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold;">Batch:
                                  2023 - 25</button>
                                <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2024</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Scripts -->
                    <script>
                      let carouselIntervals = {};

                      function setupNetsetCarousel(carouselId) {
                        const carousel = document.getElementById(carouselId);
                        let currentIndex = 0;
                        const totalSlides = carousel.children.length;

                        function updateSlider() {
                          carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                        }

                        clearInterval(carouselIntervals[carouselId]);
                        carouselIntervals[carouselId] = setInterval(() => {
                          currentIndex = (currentIndex + 1) % totalSlides;
                          updateSlider();
                        }, 3000);
                      }

                      function handleTabSwitchNetset(year) {
                        document.querySelectorAll('.tab-content-netset').forEach(el => el.classList.add('d-none'));
                        document.getElementById('tab-netset-' + year).classList.remove('d-none');

                        document.querySelectorAll('.year-btn-netset').forEach(btn => {
                          btn.style.background = '#f0f4ff';
                          btn.style.color = '#003366';
                          btn.style.border = '2px solid #003366';
                        });

                        document.querySelector('.year-btn-netset[data-year="' + year + '"]').style.background = 'linear-gradient(to right, #000000, #005c99)';
                        document.querySelector('.year-btn-netset[data-year="' + year + '"]').style.color = 'white';
                        document.querySelector('.year-btn-netset[data-year="' + year + '"]').style.border = 'none';

                        setupNetsetCarousel('carousel-netset-' + year);
                      }

                      document.querySelectorAll('.year-btn-netset').forEach(btn => {
                        btn.addEventListener('click', function () {
                          const year = this.getAttribute('data-year');
                          handleTabSwitchNetset(year);
                        });
                      });

                      // Init first tab
                      handleTabSwitchNetset('2025');
                    </script>
                  </div>
                </section>
              </div>

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
                <span class="headd1" style="color: #FF9A1E; font-weight: 500;">Social Work</span>
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
                        src="mobile-assets/department-all/dept-social-work/head-img.png" alt="">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">

                  <h2 class="headd1" style="color: #264273; font-weight: 700;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Social Work Department at The Assam Royal Global University is dedicated to developing skilled
                    professionals who are equipped to address complex social issues with compassion and expertise. Our
                    department's strength lies in a comprehensive curriculum which integrates theory with hands-on practice
                    through extensive fieldwork opportunities, cutting-edge research, and community engagement. With a focus
                    on areas such as community development, psychiatric social work, family and child welfare, and
                    livelihood & social entrepreneurship, our programmes emphasize both the micro and macro aspects of
                    social work practice. Our faculty consists of experienced practitioners and researchers who bring a
                    wealth of knowledge and practical insights to the classroom.

                    Prospects for our graduates are promising, with opportunities in the development sector including
                    healthcare, non-profits, government agencies, and international organizations. Our alumni network is
                    strong and active, providing ongoing support and professional development opportunities. We are
                    committed to fostering a learning environment that promotes innovation, ethical practice, and a
                    commitment to social change, preparing our students to be leaders in the field of social work.
                  </p>

                </div>

              </div>
            </div>

            <div style="background-color: #fff;">
              <div class="p-5">
                <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
                  <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
                </h1>

                <img class="w-100" src="mobile-assets/department-all/dept-social-work/vision-mission-web.png" alt="">
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
                        <strong style="color: #023e8a;" class="#">Master of Social Work</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MSW"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="programs-BSW">Bachelor of Social Work</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BSW"><button type="button"
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
                            <td>Mr. Shivalal Gautam, Co-Founder of Xomonnoy, delivered an invited talk on Gender and Social
                              Exclusion.</td>
                          </tr>
                          <tr>
                            <td>Mr. Mohan Sharma, a researcher, delivered an invited talk on Human-Animal Relationship.</td>
                          </tr>
                          <tr>
                            <td>Ms. Juree Hojai, Program Officer of Disability Inclusion at Team Lease Foundation, conducted
                              an interactive session on careers in the development sector.</td>
                          </tr>
                          <tr>
                            <td>Dr. Dinesh Goswami, Advisor of Pratishruti Cancer and Palliative Trust, Dibrugarh, along
                              with Mr. Henry Wood from the University of Durham, UK, conducted an interactive session.</td>
                          </tr>
                          <tr>
                            <td>Ms. Manjari Nandy, Assistant Professor in the Department of Sociology at The Maharaja
                              Sayajirao University of Baroda and Ph.D. scholar at the Central University of Gujarat,
                              delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Bhargabi Das, Assistant Professor in the Department of Rural Management at Shiv Nadar
                              Institution of Eminence, Greater Noida, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Ms. Suchismita Majumdar, Founder-Director of Swabalambi Foundation, and Mr. Kanhaiya Lal,
                              Senior Co-Worker in Education at SOS Village of Children, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Bitasta Das, Senior Editor and Instructor at the Indian Institute of Science, Bangalore,
                              conducted a two-day workshop on the intersectionality of social sciences.</td>
                          </tr>
                          <tr>
                            <td>Prof. (Dr.) Surajit Ch. Mukhopadhyay, Dean of RSHSS, participated as an in-house resource
                              person.</td>
                          </tr>
                          <tr>
                            <td>Dr. Joseph Riamei, Assistant Professor from the School of Social Work at TISS Guwahati
                              Off-Campus, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Ms. Nipurnh Gupta, a global development communication professional from UNICEF, delivered an
                              invited talk.</td>
                          </tr>
                          <tr>
                            <td>Mr. Mukund Marodia, Manager of Strategic and Academic Affairs at the Indian School of
                              Development Management, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Sriparna B. Baruah, former Head (CIE) and Director I/C at IIE, currently Advisor
                              (Livelihood & Entrepreneurship) at NEHHDC, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Mr. Nayan Jyoti Hazarika, Ph.D. scholar from the Department of Social Work, delivered an
                              invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Shivani Chauhan Barooah, Chairperson of the Centre for Labour Studies and Social
                              Protection at TISS Guwahati, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Gayatri Gogoi (AMCH and Pratishruti Trust), Dr. Pankaj Deka (Health City Hospital), and
                              Ms. Nabanita Kalita (N.E News & Prag News) delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Mr. Anupam Joya Sharma, a doctoral fellow of Social Epidemiology at IIT Gandhinagar,
                              delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Aarushi Kehkar Malhotra, Senior Manager of Research, Advocacy, and Wellness at Sirona
                              Hygiene Foundation, delivered an invited talk online.</td>
                          </tr>
                          <tr>
                            <td>Mr. Sahbaz Ahmed and Mr. Syed Rizwan Ahmed, Advocates from Gauhati High Court, delivered an
                              invited talk.</td>
                          </tr>
                          <tr>
                            <td>Ms. Archana Borthakur of Priya Bondhu and Mr. Uttam Teron of Parijat Academy delivered an
                              invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Ashok Kumar Das (Dr. B. Barooah Cancer Institute) and Dr. Mythili Hazarika (Gauhati
                              Medical College and Hospital) delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Mr. Miguel Das Queah, Executive Director of UTSAH, delivered an invited talk.</td>
                          </tr>
                          <tr>
                            <td>Dr. Razdan Sarim Rahman, Assistant Professor at TISS Guwahati, visited the department.</td>
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
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/1.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/2.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/3.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/4.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/5.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/6.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/7.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/8.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/9.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/10.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="mobile-assets/department-all/dept-public-admin/highlights/11.jpg"
                        class="d-block w-100 popup-img-mob" alt="...">
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

          <div>
            <section style="background-color: #F0F8FF; border-bottom: 1px solid #023e8a;">
              <div class="p-4"
                style="background-image: url(mobile-assets/department-all/new-bg.svg); background-size: cover;">
                <h2 class="headd1 text-center" style="color: #fff; font-size: 40px;">
                  Academic Excellence: <span style="color: #FEC100; font-size: 40px;">NET/ SET Qualified Students</span>
                </h2>
              </div>

              <div class="container">
                <div class="container py-5">

                  <!-- Tab Buttons -->
                  <div class="d-flex justify-content-center mb-3">
                    <button class="year-btn" data-year="2024"
                      style="border: none; border-radius: 10px; padding: 10px 180px; font-weight: 700; font-size: 20px; color: white; background: linear-gradient(to right, #000000, #005c99); margin-right: 10px;">
                      2025
                    </button>
                    <button class="year-btn" data-year="2025"
                      style="border: 2px solid #003366; border-radius: 10px; padding: 10px 180px; font-weight: 700; font-size: 20px; color: #003366; background-color: #f0f4ff; margin-right: 10px;">
                      2024
                    </button>
                    <!-- Add more buttons like this -->

                    <!-- <button class="year-btn" data-year="2026"
                          style="border: 2px solid #003366; border-radius: 10px; padding: 10px 25px; font-weight: 700; font-size: 16px; color: #003366; background-color: #f0f4ff; margin-right: 10px;">
                          2026
                        </button> -->

                  </div>

                  <hr style="margin: 0 0 20px 0;">

                  <!-- Tab Content -->
                  <div id="tab2024" class="tab-content">
                    <div>

                      <div style="max-width: 1000px; margin: 30px auto; overflow: hidden; position: relative;">
                        <div id="carousel1"
                          style="display: flex; transition: transform 0.5s ease; justify-content: center;">


                          <!-- CARD 2 -->
                          <div style="min-width: 33.33%; padding: 10px; box-sizing: border-box;">
                            <div
                              style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                              <div style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                <img src="mobile-assets/department-all/dept-social-work/ugc-section/gracy.jpg"
                                  style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                              </div>
                              <div style="padding: 20px;">
                                <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">GRACY LAMPAHHOI KIPGEN
                                </h4>
                                <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                <button
                                  style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold; margin-top: 10px;">
                                  Batch: 2023 - 25</button>
                                <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2025</p>
                              </div>
                            </div>
                          </div>

                          <!-- CARD 3 -->
                          <div style="min-width: 33.33%; padding: 10px; box-sizing: border-box;">
                            <div
                              style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                              <div style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                <img src="mobile-assets/department-all/dept-social-work/ugc-section/hiba.jpg"
                                  style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                              </div>
                              <div style="padding: 20px;">
                                <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">HIBA ANSARI</h4>
                                <p class="para1" style="margin: 5px 0; color: #003366;">Social Work</p>
                                <button
                                  style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold; margin-top: 10px;">
                                  Batch: 2023 - 25</button>
                                <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2025</p>
                              </div>
                            </div>
                          </div>

                          <!-- COPY CARDS FOR LOOP EFFECT (optional) -->
                          <!-- Copy first card again -->



                        </div>
                      </div>


                    </div>
                  </div>

                  <div id="tab2025" class="tab-content d-none">
                    <div>

                      <div>

                        <div style="max-width: 1000px; margin: 30px auto; overflow: hidden; position: relative;">
                          <div id="carousel2"
                            style="display: flex; transition: transform 0.5s ease; justify-content: center;">

                            <!-- CARD 1 -->
                            <div style="min-width: 33.33%; padding: 10px; box-sizing: border-box;">
                              <div
                                style="background: white; border-radius: 15px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                <div style="background: #0e4c8c; border-radius: 15px 15px 0 0; padding: 20px;">
                                  <img
                                    src="mobile-assets/department-all/dept-social-work/ugc-section/GRACE LAMPAHHOI KIPGEN.png"
                                    style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid white;" />
                                </div>
                                <div style="padding: 20px;">
                                  <h4 class="para1 fw-bold" style="margin: 5px 0; color: #003366;">GRACE LAMPAHHOI
                                    KIPGEN</h4>
                                  <p class="para1" style="margin: 5px 0; color: #003366;">Social Work
                                  </p>
                                  <button
                                    style="background: #003366; color: yellow; padding: 6px 15px; border: none; border-radius: 5px; font-weight: bold; margin-top: 10px;">
                                    Batch 2023 - 2025</button>
                                  <p class="headd3 fw-bold text-dark" style="margin-top: 10px;">June 2024</p>
                                </div>
                              </div>
                            </div>

                            <!-- COPY CARDS FOR LOOP EFFECT (optional) -->
                            <!-- Copy first card again -->

                          </div>
                        </div>


                      </div>

                    </div>
                  </div>

                  <!-- Add future year tab contents like this -->

                  <!-- <div id="tab2026" class="tab-content d-none">
                        <div class="card p-4">
                          <h4>Events in 2026</h4>
                          <p>Details or content related to the year 2026 goes here.</p>
                        </div>
                      </div> -->


                  <!-- Arrows -->
                  <button onclick="prevSlide()"
                    style="position: absolute; top: 40%; left: -40px; background-color: #003366; color: white; border: none; border-radius: 50%; width: 35px; height: 35px;">❮</button>
                  <button onclick="nextSlide()"
                    style="position: absolute; top: 40%; right: -40px; background-color: #003366; color: white; border: none; border-radius: 50%; width: 35px; height: 35px;">❯</button>

                  <!-- Line Indicator -->
                  <!-- <div id="carousel-indicators" style="text-align: center; margin-top: 10px;">
      <span class="dot" style="display: inline-block; height: 6px; width: 40px; margin: 0 5px; background-color: #ccc; border-radius: 5px; cursor: pointer;" onclick="goToSlide(0)"></span>
      <span class="dot" style="display: inline-block; height: 6px; width: 40px; margin: 0 5px; background-color: #ccc; border-radius: 5px; cursor: pointer;" onclick="goToSlide(1)"></span>
      <span class="dot" style="display: inline-block; height: 6px; width: 40px; margin: 0 5px; background-color: #ccc; border-radius: 5px; cursor: pointer;" onclick="goToSlide(2)"></span>
    </div> -->


                </div>

                <script>
                  let currentIndex = 0;
                  let interval;

                  function setupCarousel(carouselId) {
                    const carousel = document.getElementById(carouselId);
                    const totalSlides = carousel.children.length;
                    const visibleCards = 3;

                    function updateSlider() {
                      carousel.style.transform = `translateX(-${currentIndex * (100 / visibleCards)}%)`;
                      updateDots();
                    }

                    function updateDots() {
                      const dots = document.querySelectorAll('#carousel-indicators .dot');
                      dots.forEach((dot, i) => {
                        dot.style.backgroundColor = (i === currentIndex) ? '#003366' : '#ccc';
                      });
                    }

                    function startAutoSlide() {
                      interval = setInterval(() => {
                        currentIndex++;
                        if (currentIndex > totalSlides - visibleCards) currentIndex = 0;
                        updateSlider();
                      }, 3000);
                    }

                    // Expose control functions
                    window.nextSlide = function () {
                      clearInterval(interval);
                      currentIndex = (currentIndex + 1 > totalSlides - visibleCards) ? 0 : currentIndex + 1;
                      updateSlider();
                      startAutoSlide();
                    }

                    window.prevSlide = function () {
                      clearInterval(interval);
                      currentIndex = (currentIndex - 1 < 0) ? totalSlides - visibleCards : currentIndex - 1;
                      updateSlider();
                      startAutoSlide();
                    }

                    window.goToSlide = function (index) {
                      clearInterval(interval);
                      currentIndex = index;
                      updateSlider();
                      startAutoSlide();
                    }

                    updateSlider();
                    startAutoSlide();
                  }

                  setupCarousel("carousel1");
                  setupCarousel("carousel2");
                </script>
              </div>
            </section>

            <script>
              document.querySelectorAll('.year-btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                  const selectedYear = this.getAttribute('data-year');

                  // Hide all tabs
                  document.querySelectorAll('.tab-content').forEach(function (tab) {
                    tab.classList.add('d-none');
                  });

                  // Show selected tab
                  const activeTab = document.getElementById('tab' + selectedYear);
                  if (activeTab) activeTab.classList.remove('d-none');

                  // Reset all buttons
                  document.querySelectorAll('.year-btn').forEach(function (b) {
                    b.style.background = '#f0f4ff';
                    b.style.color = '#003366';
                    b.style.border = '2px solid #003366';
                  });

                  // Set active button
                  this.style.background = 'linear-gradient(to right, #000000, #005c99)';
                  this.style.color = 'white';
                  this.style.border = 'none';
                });
              });
            </script>
          </div>

        </div>


        <div class="container mt-5">

          <div>
            <div>
              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

              <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>S.NO.</th>
                      <th>POSITION IN D-BOS</th>
                      <th>NAME AND DESIGNATION</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">

                    <tr>
                      <td>1</td>
                      <td>Convener (Ex-Officio) - Head of the Department</td>
                      <td>Dr. Y. Monojit Singha, Assistant Professor & Co-ordinator</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td rowspan="10">All Faculty members of the Department Members (Ex-Officio)</td>
                      <td>Dr. Dhiraj Borkotoky, Associate Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Dr. Baba Chandra Singha, Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Dr. Krishangi Saikia, Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Dr. Sushmita Hoshi N., Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Tanjeela Mehboob, Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Dr. Abhinav Chaliha, Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Monisha Bordoloi, Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Rhitwique Dutta, Assistant Professor</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Mustafa Syed Ihtimum Alam, Teaching Assistant</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Birina Borthakur, Teaching Assistant</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>External Expert (Academic)</td>
                      <td>
                        Prof. Subrajyoti Konwar, Professor, Department of Political Science, Gauhati University,
                        Guwahati<br>
                        Dr. Dilip Gogoi, Associate Professor, Department of Political Science, Cotton University, Guwahati
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
          </div>

          <div>
            <div>
              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                Ph.D. Research <span style="color: #FF9A1E; font-weight: 500;">and Research Interest</span></h2>

              <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th>Sl.no</th>
                      <th>Name</th>
                      <th>Qualification</th>
                      <th>Research</th>
                    </tr>

                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                    <tr>
                      <td>1</td>
                      <td>Dr. T Luithuiwung Awungshi</td>
                      <td>Ph.D.</td>
                      <td>Youth, Drug Abuse, Family & Child Welfare</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Dr. Amlan Das</td>
                      <td>Ph.D.</td>
                      <td>Disability Studies, Rural Development, Family & Child Welfare</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dr. Madhu Monjuri Gohain</td>
                      <td>Ph.D.</td>
                      <td>Residential Education and Migration</td>
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
                            <a href="mobile-assets/department-all/dept-social-work/syllabus-pdf/structure-syllabus.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Structure of Syllabus - UG

                              <i class="fa fa-download"></i>
                            </a>

                            <a href="mobile-assets/department-all/dept-social-work/syllabus-pdf/bsw-syllabus.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - BSW

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
                            <a href="mobile-assets/department-all/dept-social-work/syllabus-pdf/msw-syllabus.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - MSW
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
