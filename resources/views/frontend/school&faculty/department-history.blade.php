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
              <span class="headd3" style="color: #FF9A1E; font-weight: 500;">History</span>
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
                      <img class="rounded" decoding="async" src="mobile-assets/department-all/dept-history/head-img.png"
                        alt="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                  <h2 class="headd3 text-center pt-4" style="color: #264273; font-weight: 700; font-size: 30px;">
                    About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

                  <p class="mobile-para1 pt-2" style="color: #264273; text-align: justify; line-height: 1.5;">
                    The Department of History is one of the premier departments of Royal Global University. It has eminent
                    and scholarly faculty with global exposure. It is emerging as one of the leading centre of historical
                    learning and research in the north-east India. Its objective is to initiate innovative research and
                    world class curriculum design with industry-oriented pedagogy, to ground historical erudition in the
                    shared national culture of compassion, social responsibility and sound ethical outlook and to enrich
                    society by producing nationally and internationally acclaimed historians and historical works with acute
                    transformative potential in the domain of social sciences. In its thrust to update its curriculum
                    according to the mandate of New Education Policy of the GOl, it has included skill enhancement courses
                    like Museology, Archeology, Heritage management, Basic Writing Skills, Value-Added Courses as well as
                    mandatory project work in it is curriculum. It has MoU with leading academic and research institutions
                    which provide internships to our students for quick employability.

                    The Department often organizes short trips to historical/archeological sites, traditional heritage
                    sites,
                    traditional industrial and handicraft sites for firsthand experience of students. Within a short span of
                    its
                    existence, it has already produced NET and JRF qualified students, officers in Indian Banking Service as
                    well as faculty in reputed universities. Some of our students have received admission in reputed
                    universities abroad for higher studies. The department has started an Outreach programme with the motto
                    'Popularizing History, Supplementing Syllabus: Using alternative Pedagogy to start society-academia
                    interface. To facilitate research, and writing skills of our students the Department has established
                    History
                    Society - Vrittaanta which provide a platform to all students and research scholars of the Department
                    for
                    popularizing the discipline, engage in debate and discussion in historical themes amongst students and
                    members of the larger society. It has also the credit of publishing the first Departmental student
                    e-research magazine of the University named Anveshan: A Voyage into the Unexplored Past. The Department
                    and
                    its faculty strive to produce distinguished students who would be leading historical research in the
                    region.
                  </p>

                </div>
              </div>
            </div>


            <div class="pt-3">

              <h1 class="headd3 text-center" style="color: #27467A; font-weight: 700;">Vision and Mission
                <span class="headd3" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
              </h1>

              <img src="mobile-assets/department-all/dept-history/vision-mission-mob.png" alt="">
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
                        <strong style="color: #023e8a;" class="#">Master of Arts History</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 years
                    </td>
                    <td>
                      <a target="_blank" href="programs-MA-History"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Arts History</strong>
                        <br> Honours / Honours with Research
                      </p>

                    </td>
                    <td>
                      4 years as per NEP
                    </td>
                    <td>
                      <a target="_blank" href="programs-BA-History"><button type="button"
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
                        <td>Kuldeep Patowary, Assistant Professor, Department of History, Gauhati University, delivered a
                          webinar on the topic ‘Jo Jeeta Wohi Sikandar: War and the Shaping of History’.</td>
                      </tr>
                      <tr>
                        <td>Prof. Amarendra Kumar Thakur, Professor, Department of History, NEHU Shillong, delivered a
                          webinar on the topic ‘Intellectuals in Exile’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Saswati Choudhury, Associate Professor, OKD Institute of Social Change and Development,
                          delivered a webinar on ‘Healthcare in Assam: Looking from a Gendered Perspective’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sikha Das, Assistant Professor, Department of Sociology, MSSV Nagaon, delivered a webinar on
                          ‘Gender, Power and Conflict of Identities: A Witch-Hunting’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Suryasikha Pathak, Associate Professor, Assam University (Diphu Campus), delivered a webinar
                          on ‘Visual Sources for Missionary History’.</td>
                      </tr>
                      <tr>
                        <td>Prof. Rajib Handique, HoD, History Department, Gauhati University, delivered a webinar on
                          ‘Pandemics in History’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Radha Das, Assistant Professor of History, delivered a webinar on ‘The Life and
                          Contributions of Rupkonwar Jyoti Prasad Agarwala’.</td>
                      </tr>
                      <tr>
                        <td>Pabitra Margherita, Chairman of Jyoti Chitraban and eminent film and TV personality,
                          participated in a webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad Agarwala’.</td>
                      </tr>
                      <tr>
                        <td>Mr. Swapnanil Barua, Retired IAS officer, delivered a webinar on ‘Remembering Bishnu Prasad
                          Rabha: The Political Figure and the Artist’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Moushumi Kandali, writer and academician, participated in a webinar on ‘Remembering Bishnu
                          Prasad Rabha: The Political Figure and the Artist’.</td>
                      </tr>
                      <tr>
                        <td>Venerable Tenzin Legtsok, Monk from Sera Jaya Monastic University, Karnataka, gave an invited
                          talk.</td>
                      </tr>
                      <tr>
                        <td>Stephen Bognar, Director, Sustainability Asia for Wildlife Works Carbon (WWC), delivered an
                          invited talk titled “Why Whales Worry? Finding a new direction with real depth”.</td>
                      </tr>
                      <tr>
                        <td>Snigdha Hasnu, Curator in charge, Assam State Museum, delivered an invited talk on ‘Study of
                          Assam History Through the Collections of the Assam State Museum’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Loya Sinha, Chairperson, S.K. Bhuyan Memorial Trust, participated in an MoU signing
                          ceremony.</td>
                      </tr>
                      <tr>
                        <td>Yazing Shimray Wunglengton, Former Director of Museums, Assam, participated in an MoU signing
                          ceremony.</td>
                      </tr>
                      <tr>
                        <td>Prof. Prasenjit Biswas, Professor, Department of Philosophy, NEHU, served as an FDP resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Sarah Hilaly, Professor, Rajiv Gandhi University, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Sonali Ghosh, Chief Conservator of Forests, Assam, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Bonojit Hussain, former Assistant Professor, SNU and entrepreneur, served as an FDP resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Amarendra K. Thakur, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Rajib Handique, Professor, Gauhati University, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Binayak Dutta, Associate Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Arabinda Samanta, Professor (Retd.), Burdwan University, served as an FDP resource person.
                        </td>
                      </tr>
                      <tr>
                        <td>Prof. Imdad Hussain, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Shahana Bhattacharya, Associate Professor, Kirori Mal College, Delhi University, served as
                          an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Manjil Hazarika, Assistant Professor, Cotton University, served as an FDP resource person.
                        </td>
                      </tr>
                      <tr>
                        <td>Prof. Chandan Kumar Sharma, Professor, Tezpur University, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Monorama Sharma, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Apurba Baruah, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Shri SK Bose, Numismatist, delivered an invited lecture on ‘Numismatic Heritage of Assam and its
                          Emerging Trend in Study’.</td>
                      </tr>
                      <tr>
                        <td>Ms. Vandana Manchanda, Director, Architectural Heritage Division and Head of Heritage Crafts and
                          Community Division, INTACH, delivered a lecture on ‘Craft Revival and its socio-economic impact on
                          Communities’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Nachiket Chanchani, Associate Professor in History of the Art Department, delivered a talk
                          on ‘Decoding India's Temples and the Challenges of Reconstructing Them’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sangeeta Gogoi, Director In-Charge, Directorate of Historical and Antiquarian Studies,
                          Assam, participated in an MoU signing ceremony.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sanjeev Chopra, Former Director, Lal Bahadur Shastri National Academy of Administration,
                          author and historian, delivered a lecture titled “We the people of the states of Bharat”.</td>
                      </tr>


                      <!-- Keep adding rows here -->
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="text-center mt-2">
                <a href="/history-events" class="para1"
                  style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                 <a href="department-new-rshss-history-events.html">View All</a>
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
            <span class="headd1" style="color: #FF9A1E; font-weight: 500;">History</span>
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
                    src="mobile-assets/department-all/dept-history/head-img.png" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-6">

              <h2 class="headd1" style="color: #264273; font-weight: 700;">
                About <span style="color: #FF9A1E; font-weight: 500;">Department</span></h2>

              <p class="mobile-para1 pt-3" style="color: #264273; text-align: justify; line-height: 1.5;">
                The Department of History is one of the premier departments of Royal Global University. It has eminent
                and scholarly faculty with global exposure. It is emerging as one of the leading centre of historical
                learning and research in the north-east India. Its objective is to initiate innovative research and
                world class curriculum design with industry-oriented pedagogy, to ground historical erudition in the
                shared national culture of compassion, social responsibility and sound ethical outlook and to enrich
                society by producing nationally and internationally acclaimed historians and historical works with acute
                transformative potential in the domain of social sciences. In its thrust to update its curriculum
                according to the mandate of New Education Policy of the GOl, it has included skill enhancement courses
                like Museology, Archeology, Heritage management, Basic Writing Skills, Value-Added Courses as well as
                mandatory project work in it is curriculum. It has MoU with leading academic and research institutions
                which provide internships to our students for quick employability.
              </p>

            </div>

          </div>
        </div>

        <div class="bg-white">
          <p class="para1 container" style="color: #24477f; text-align: justify; padding: 30px 0px;">
            The Department often organizes short trips to historical/archeological sites, traditional heritage sites,
            traditional industrial and handicraft sites for firsthand experience of students. Within a short span of its
            existence, it has already produced NET and JRF qualified students, officers in Indian Banking Service as
            well as faculty in reputed universities. Some of our students have received admission in reputed
            universities abroad for higher studies. The department has started an Outreach programme with the motto
            'Popularizing History, Supplementing Syllabus: Using alternative Pedagogy to start society-academia
            interface. To facilitate research, and writing skills of our students the Department has established History
            Society - Vrittaanta which provide a platform to all students and research scholars of the Department for
            popularizing the discipline, engage in debate and discussion in historical themes amongst students and
            members of the larger society. It has also the credit of publishing the first Departmental student
            e-research magazine of the University named Anveshan: A Voyage into the Unexplored Past. The Department and
            its faculty strive to produce distinguished students who would be leading historical research in the region.
          </p>
        </div>




        <div style="background-color: #fff;">
          <div class="p-5">
            <h1 class="headd1 text-center" style="color: #27467A; font-weight: 700;">Vision & Mission
              <span class="headd1" style="color: #FF9A1E; font-weight: 500;">of the Department</span>
            </h1>

            <img class="w-100" src="mobile-assets/department-all/dept-history/vision-mission-web.png" alt="">
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
                    <strong style="color: #023e8a;" class="#">Master of Arts History</strong>
                  </p>
                </td>
                <td class="para1">
                  2 years
                </td>
                <td>
                  <a target="_blank" href="programs-MA-History"><button type="button"
                      style="background-color: #FF9A1E; color: #fff;"
                      class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                </td>
              </tr>

              <tr class="align-middle">
                <td>2.</td>
                <td>
                  <p class="para1">
                    <strong style="color: #023e8a;" class="#">Bachelor of Arts History</strong>
                    <br> Honours / Honours with Research
                  </p>

                </td>
                <td>
                  4 years as per NEP
                </td>
                <td>
                  <a target="_blank" href="programs-BA-History"><button type="button"
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
                        <td>Kuldeep Patowary, Assistant Professor, Department of History, Gauhati University, delivered
                          a webinar on the topic ‘Jo Jeeta Wohi Sikandar: War and the Shaping of History’.</td>
                      </tr>
                      <tr>
                        <td>Prof. Amarendra Kumar Thakur, Professor, Department of History, NEHU Shillong, delivered a
                          webinar on the topic ‘Intellectuals in Exile’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Saswati Choudhury, Associate Professor, OKD Institute of Social Change and Development,
                          delivered a webinar on ‘Healthcare in Assam: Looking from a Gendered Perspective’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sikha Das, Assistant Professor, Department of Sociology, MSSV Nagaon, delivered a
                          webinar on ‘Gender, Power and Conflict of Identities: A Witch-Hunting’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Suryasikha Pathak, Associate Professor, Assam University (Diphu Campus), delivered a
                          webinar on ‘Visual Sources for Missionary History’.</td>
                      </tr>
                      <tr>
                        <td>Prof. Rajib Handique, HoD, History Department, Gauhati University, delivered a webinar on
                          ‘Pandemics in History’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Radha Das, Assistant Professor of History, delivered a webinar on ‘The Life and
                          Contributions of Rupkonwar Jyoti Prasad Agarwala’.</td>
                      </tr>
                      <tr>
                        <td>Pabitra Margherita, Chairman of Jyoti Chitraban and eminent film and TV personality,
                          participated in a webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad Agarwala’.
                        </td>
                      </tr>
                      <tr>
                        <td>Mr. Swapnanil Barua, Retired IAS officer, delivered a webinar on ‘Remembering Bishnu Prasad
                          Rabha: The Political Figure and the Artist’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Moushumi Kandali, writer and academician, participated in a webinar on ‘Remembering
                          Bishnu Prasad Rabha: The Political Figure and the Artist’.</td>
                      </tr>
                      <tr>
                        <td>Venerable Tenzin Legtsok, Monk from Sera Jaya Monastic University, Karnataka, gave an
                          invited talk.</td>
                      </tr>
                      <tr>
                        <td>Stephen Bognar, Director, Sustainability Asia for Wildlife Works Carbon (WWC), delivered an
                          invited talk titled “Why Whales Worry? Finding a new direction with real depth”.</td>
                      </tr>
                      <tr>
                        <td>Snigdha Hasnu, Curator in charge, Assam State Museum, delivered an invited talk on ‘Study of
                          Assam History Through the Collections of the Assam State Museum’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Loya Sinha, Chairperson, S.K. Bhuyan Memorial Trust, participated in an MoU signing
                          ceremony.</td>
                      </tr>
                      <tr>
                        <td>Yazing Shimray Wunglengton, Former Director of Museums, Assam, participated in an MoU
                          signing ceremony.</td>
                      </tr>
                      <tr>
                        <td>Prof. Prasenjit Biswas, Professor, Department of Philosophy, NEHU, served as an FDP resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Sarah Hilaly, Professor, Rajiv Gandhi University, served as an FDP resource person.
                        </td>
                      </tr>
                      <tr>
                        <td>Sonali Ghosh, Chief Conservator of Forests, Assam, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Bonojit Hussain, former Assistant Professor, SNU and entrepreneur, served as an FDP resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Amarendra K. Thakur, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Rajib Handique, Professor, Gauhati University, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Binayak Dutta, Associate Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Arabinda Samanta, Professor (Retd.), Burdwan University, served as an FDP resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Imdad Hussain, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Shahana Bhattacharya, Associate Professor, Kirori Mal College, Delhi University, served
                          as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Dr. Manjil Hazarika, Assistant Professor, Cotton University, served as an FDP resource
                          person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Chandan Kumar Sharma, Professor, Tezpur University, served as an FDP resource person.
                        </td>
                      </tr>
                      <tr>
                        <td>Prof. Monorama Sharma, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Prof. Apurba Baruah, Professor, NEHU, served as an FDP resource person.</td>
                      </tr>
                      <tr>
                        <td>Shri SK Bose, Numismatist, delivered an invited lecture on ‘Numismatic Heritage of Assam and
                          its Emerging Trend in Study’.</td>
                      </tr>
                      <tr>
                        <td>Ms. Vandana Manchanda, Director, Architectural Heritage Division and Head of Heritage Crafts
                          and Community Division, INTACH, delivered a lecture on ‘Craft Revival and its socio-economic
                          impact on Communities’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Nachiket Chanchani, Associate Professor in History of the Art Department, delivered a
                          talk on ‘Decoding India's Temples and the Challenges of Reconstructing Them’.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sangeeta Gogoi, Director In-Charge, Directorate of Historical and Antiquarian Studies,
                          Assam, participated in an MoU signing ceremony.</td>
                      </tr>
                      <tr>
                        <td>Dr. Sanjeev Chopra, Former Director, Lal Bahadur Shastri National Academy of Administration,
                          author and historian, delivered a lecture titled “We the people of the states of Bharat”.</td>
                      </tr>


                    </tbody>
                  </table>
                </div>
              </div>

              <div style="text-align: center; margin-top: 10px;">
                <a href="/history-events" class="para1"
                  style="padding: 6px 15px; background-color: #27467a; color: white; border: none; border-radius: 4px;">
                 <a href="department-new-rshss-history-events">View All</a>
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

            <div style="background-color: #ffffff10; border-radius: 20px; border: 1px solid #ffffff61; padding: 30px;">

              <div class="p-1 text-center " style="background-color: #FF9A1E; width: 130px; border-radius: 20px;">
                <h2 class="pt-2 headd3 fw-bold text-dark">UGC NET</h2>
              </div>


              <div
                style="height: 420px; width: 600px; margin: 20px auto; overflow: hidden; border-radius: 15px; position: relative; background: transparent;">

                <div id="verticalCarousel"
                  style="position: absolute; top: 0; left: 0; right: 0; animation: scrollUp 20s linear infinite; ">

                   <!-- Slide 1 -->
                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-1.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>

                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-2.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>

                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-3.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>

                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-4.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>


                  <!-- duplicates  -->

                    <!-- Slide 1 -->
                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-1.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>

                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-2.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>

                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-3.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>

                  <div class="d-flex" style=" border-radius: 15px; margin: 10px;">
                    <img src="mobile-assets/department-all/dept-history/candidates/ugc-net/ugc24-4.png" alt="Chanda Devi"
                      style="height: 100%; width: 100%; object-fit: cover; border-radius: 12px;">
                  </div>


                </div>
              </div>

              <!-- Keyframes for vertical scroll -->
              <style>
                @keyframes scrollUp {
                  0% {
                    top: 0;
                  }

                  33% {
                    top: -180px;
                  }

                  66% {
                    top: -360px;
                  }

                  100% {
                    top: 0;
                  }
                }
              </style>

            </div>

          </div>

          <div class="col-lg-6">

            <div style="background-color: #ffffff10; border-radius: 20px; border: 1px solid #ffffff61; padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px;">

              <div class="p-1 text-center " style="background-color: #FF9A1E; width: 200px; border-radius: 20px;">
                <h2 class="pt-2 headd3 fw-bold text-dark">Government Job</h2>
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
                      <img src="mobile-assets/department-all/dept-history/candidates/govt-job/govt-job1.png" class="d-block w-100"
                        alt="Image 1" style="height: 50%; object-fit: cover;">
                    </div>


                  </div>

                </div>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5">

            <div style="background-color: #ffffff10; border-radius: 20px; border: 1px solid #ffffff61; padding: 30px;">

              <div class="p-1 text-center " style="background-color: #FF9A1E; width: 200px; border-radius: 20px;">
                <h2 class="pt-2 headd3 fw-bold text-dark">CTET</h2>
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
                      <img src="mobile-assets/department-all/dept-history/candidates/ctet/ctet1.png" class="d-block w-100"
                        alt="Image 1" style="height: 50%; object-fit: cover;">
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


      <div>
        <div>
          <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

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
                  <td>Dr. Susmita Hazarika, Associate Professor, History</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    All Faculty members of the Department Members (Ex-Officio)
                  </td>
                  <td>
                    Prof. Sajal Nag, Distinguished Professor of History Mr. Mukesh
                    Kalita
                    <hr />
                    Prof. Shiela Bora, Advisor, Dept. of History
                    <hr />
                    Dr. Mitali Kalita, Assistant Professor, History
                    <hr />
                    Dr. Saikhom Ronel Singh Assistant Professor, History
                    <hr />
                    Ms. Tanzim Masud Assistant Professor, History
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>External Expert (Academic)</td>
                  <td>
                    KM Sudha
                    <hr />
                    Ms. Shalaka Pravinkumar Bhandare
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div>
        <div>
          <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committe (DRC)</span></h2>

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
                  <td>Dean, RSHSS;<br />Distinguished Professor of History</td>
                  <td>Chairperson</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Two Professors</td>
                  <td>Prof. Shiela Bora</td>
                  <td>Advisor, Dept. of History</td>
                  <td>Member</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>
                    Two Associate Professors – one of them will be the member
                    secretary
                  </td>
                  <td>Dr. Susmita Hazarika</td>
                  <td>Associate Professor, Dept. of History</td>
                  <td>Member Secretary</td>
                </tr>
                <tr>
                  <td rowspan="2">4.</td>
                  <td rowspan="2" class="align-middle">
                    Two Assistant Professors holding Ph.D. degree
                  </td>
                  <td>Dr. Saikhom Ronel Singh</td>
                  <td>Asst. Professor, Dept. of History</td>
                  <td>Member</td>
                </tr>
                <tr>
                  <td>Dr. Susmita Banerjee</td>
                  <td>Asst. Professor, Dept. of History</td>
                  <td>Member</td>
                </tr>
                <tr>
                  <td rowspan="3">5.</td>
                  <td rowspan="3" class="align-middle">
                    Three external members not below the rank of Professors,
                    including members from an allied department, who will be
                    nominated by the URC
                  </td>
                  <td>Prof. Gautam Majumdar</td>
                  <td>Professor, Dept. of Economics</td>
                  <td>External Member</td>
                </tr>
                <tr>
                  <td>Prof. Tushti Sharma</td>
                  <td>HOD, Dept. of English, RSL</td>
                  <td>External Member</td>
                </tr>
                <tr>
                  <td>Prof. Ankur Ganguly</td>
                  <td>Dean of Academics, RGU</td>
                  <td>External Member</td>
                </tr>
              </tbody>
            </table>
          </div>
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
                    <button class="accordion-button collapsed" style="background-color: #24477f; color: #fff;"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                      aria-controls="collapseOne">
                      <strong>
                        Under Graduate
                      </strong>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row">
                        <a href="mobile-assets/department-all/dept-history/syllabus-pdf/course-structure.pdf"
                          target="_blank">
                          <i class="fa fa-file-text px-2"></i> Course Structure
                          <i class="fa fa-download"></i>
                        </a>
                        <a href="mobile-assets/department-all/dept-history/syllabus-pdf/syllabus-ug.pdf"
                          target="_blank">
                          <i class="fa fa-file-text px-2"></i> Syllabus - BA History
                          <i class="fa fa-download"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" style="background-color: #24477f; color: #fff;"
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
                        <a href="mobile-assets/department-all/dept-history/syllabus-pdf/syllabus-pg.pdf"
                          target="_blank">
                          <i class="fa fa-file-text px-2"></i> Syllabus - MA History
                          <i class="fa fa-download"></i>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" style="background-color: #24477f; color: #fff;"
                      type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                      aria-controls="collapseThree"><strong>
                        Doctoral Programme
                      </strong>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <a href="phd" class="para1" target="_blank">
                        <strong>Click to View...
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
