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
      <section style="background-color: #fff8f0; padding: 80px 10px 20px 10px; position: relative;">

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



      <!--End Section-->
    </div>

    <div class="container">

      <div>
        <div>
          <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            Events & <span style="color: #FF9A1E; font-weight: 500;">Achievements</span></h2>

          <div class="table-responsive">
            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
              <thead class="text-white" style="background-color: #27467a">
                <tr>
                  <th class="font-weight-bold text-white">Date of Visit</th>
                  <th class="font-weight-bold text-white">Name</th>
                  <th class="font-weight-bold text-white">Designation</th>
                  <th class="font-weight-bold text-white">Purpose of the visit</th>
                </tr>
              </thead>

              <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                <tr>
                  <td>17th February, 2020</td>
                  <td>Kuldeep Patowary</td>
                  <td>
                    Assistant Professor, Department of History, Gauhati University
                  </td>
                  <td>
                    Webinar on the topic ‘Jo Jeeta Wohi Sikandar: War and the
                    Shaping of History’.
                  </td>
                </tr>
                <tr>
                  <td>11th June, 2020</td>
                  <td>Prof. Amarendra Kumar Thakur</td>
                  <td>Professor, Department of History, NEHU Shillong</td>
                  <td>Webinar on the topic ‘Intellectuals in Exile’.</td>
                </tr>
                <tr>
                  <td>2nd July, 2020</td>
                  <td>Dr. Saswati Choudhury</td>
                  <td>
                    Associate Professor, OKD, Institute of Social Change and
                    Development
                  </td>
                  <td>
                    Webinar on the topic of ‘Healthcare in Assam: Looking from a
                    Gendered Perspective’
                  </td>
                </tr>
                <tr>
                  <td>27th November, 2020</td>
                  <td>Dr. Sikha Das</td>
                  <td>Assistant Professor, Department of Sociology, MSSV Nagaon</td>
                  <td>
                    Webinar on the topic ‘Gender, Power and Conflict of Identities:
                    A Witch-Hunting’
                  </td>
                </tr>
                <tr>
                  <td>4th June, 2021</td>
                  <td>Dr. Suryasikha Pathak</td>
                  <td>Associate professor, Assam University (Diphu Campus)</td>
                  <td>
                    Webinar on the topic ‘Visual Sources for Missionary History’.
                  </td>
                </tr>
                <tr>
                  <td>12th June, 2023</td>
                  <td>Prof. Rajib Handique</td>
                  <td>HoD, History Department, Gauhati University</td>
                  <td>Webinar on the topic ‘Pandemics in History’.</td>
                </tr>
                <tr>
                  <td>26th July, 2021</td>
                  <td>Dr. Radha Das</td>
                  <td>Assistant Professor of History, Department of History</td>
                  <td>
                    Webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad
                    Agarwala’.
                  </td>
                </tr>
                <tr>
                  <td>26th July, 2021</td>
                  <td>Pabitra Margherita</td>
                  <td>
                    Chairmen, Jyoti Chitraban, eminent film and TV personality
                  </td>
                  <td>
                    Webinar on ‘The Life and Contributions of Rupkonwar Jyoti Prasad
                    Agarwala’.
                  </td>
                </tr>
                <tr>
                  <td>20th September, 2021</td>
                  <td>Mr. Swapnanil Barua</td>
                  <td>Retired IAS</td>
                  <td>
                    Webinar on ‘Remembering Bishnu Prasad Rabha: The Political
                    Figure and the Artist’.
                  </td>
                </tr>
                <tr>
                  <td>20th September, 2021</td>
                  <td>Dr. Moushumi Kandali</td>
                  <td>Writer and Academician</td>
                  <td>
                    Webinar on ‘Remembering Bishnu Prasad Rabha: The Political
                    Figure and the Artist’.
                  </td>
                </tr>
                <tr>
                  <td>10th February, 2023</td>
                  <td>Venerable Tenzin Legtsok</td>
                  <td>Monk, Sera Jaya Monastic University, Karnataka</td>
                  <td>Invited talk</td>
                </tr>
                <tr>
                  <td>1st March, 2023</td>
                  <td>Stephen Bognar</td>
                  <td>
                    Director, Sustainability Asia fro Wildlife Works Carbon (WWC).
                  </td>
                  <td>
                    "Invited Talk “Why Whales Worry? Finding a new direction with
                    real depth”"
                  </td>
                </tr>
                <tr>
                  <td>30th March, 2023</td>
                  <td>Snigdha Hasnu</td>
                  <td>Curator in charge, Assam State Museum</td>
                  <td>
                    Invited talk on ‘Study of Assam History Through the Collections
                    of the Assam State Museum’.
                  </td>
                </tr>
                <tr>
                  <td>27th April, 2022</td>
                  <td>Dr. Loya Sinha</td>
                  <td>Chairperson, S.K. Bhuyan Memorial Trust</td>
                  <td>MoU Signing</td>
                </tr>
                <tr>
                  <td>27th April,2022</td>
                  <td>Yazing Shimray Wunglengton</td>
                  <td>
                    Former Director of Museums, Assam, Directorate of Cultural
                    Affairs Department
                  </td>
                  <td>MoU Signing</td>
                </tr>
                <tr>
                  <td>24th April 2023</td>
                  <td>Prof. Prasenjit Biswas</td>
                  <td>Professor, Department of Philosophy, NEHU</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>25th April, 2023</td>
                  <td>Prof. Sarah Hilaly</td>
                  <td>Professor, Rajiv Gandhi University</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>25th April, 2023</td>
                  <td>Sonali Ghosh</td>
                  <td>Chief Conservator of Forests, Assam</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>26th April 2023</td>
                  <td>Bonojit Hussain</td>
                  <td>Former Assistant Professor, SNU, Entrepreneur</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>26th April 2023</td>
                  <td>Prof. Amarendra K. Thakur</td>
                  <td>Professor, NEHU</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>27th April, 2023</td>
                  <td>Prof. Rajib Handique</td>
                  <td>Professor, Gauhati University</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>28th April 2023</td>
                  <td>Dr. Binayak Dutta</td>
                  <td>Associate Professor, NEHU</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>28th April, 2023</td>
                  <td>Prof. Arabinda Samanta</td>
                  <td>Professorn (Retd.) Burdwan University</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>1st May, 2023</td>
                  <td>Prof. Imdad Hussain</td>
                  <td>Professor, NEHU</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>2nd May, 2023</td>
                  <td>Dr Shahana Bhattacharya</td>
                  <td>Associate Professor, Kirori Mal College, Delhi University</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>3rd May, 2023</td>
                  <td>Dr. Manjil Hazarika</td>
                  <td>Assistant Professor, Cotton University</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>3rd May, 2023</td>
                  <td>Prof. Chandan Kumar Sharma</td>
                  <td>Professor, Tezpur University</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>4th May, 2023</td>
                  <td>Prof. Monorama Sharma</td>
                  <td>Professor, NEHU</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>4th May, 2023</td>
                  <td>Prof. Apurba Baruah</td>
                  <td>Professor, NEHU</td>
                  <td>FDP Resource Person</td>
                </tr>
                <tr>
                  <td>17th March, 2024</td>
                  <td>Shri SK Bose</td>
                  <td>Numismatist</td>
                  <td>
                    Invited lecture on ‘Numismatic Heritage of Assam and its
                    Emerging Trend in Study.’
                  </td>
                </tr>
                <tr>
                  <td>20th May, 2024</td>
                  <td>Ms. Vandana Manchanda</td>
                  <td>
                    Director, Architectural Heritage Division and Head of Heritage
                    Crafts and Community Division, INTACH (Indian National Trust for
                    Art and Cultural Heritage)
                  </td>
                  <td>
                    Invited lecture on the topic ‘Craft Revival and its
                    socio-economic impact on Communities’.
                  </td>
                </tr>
                <tr>
                  <td>27th May, 2024</td>
                  <td>Dr.Nachiket Chanchani</td>
                  <td>"Associate Professor in History of the Art Department"</td>
                  <td>
                    Invited talk on the topic ‘Decoding India's Temples and the
                    Challenges of Reconstructing Them’.
                  </td>
                </tr>
                <tr>
                  <td>15th July, 2024</td>
                  <td>Dr. Sangeeta Gogoi</td>
                  <td>
                    Director In-Charge, Directorate of Historical and Antiquarian
                    Studies, Assam
                  </td>
                  <td>MoU Signing</td>
                </tr>
                <tr>
                  <td>20th Spetember, 2024</td>
                  <td>Dr. Sanjeev Chopra</td>
                  <td>
                    Former Director, Lal Bahadur Shastri National Academy of
                    Administration, Author and Historian
                  </td>
                  <td>
                    "Invited Lecture: “We the people of the states of Bharat”"
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
