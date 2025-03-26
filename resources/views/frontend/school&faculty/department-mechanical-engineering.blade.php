@extends('frontend.master')
@section('content')
    <div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <!--About Section-->
        <div>
    <div
      style="margin-top: 50px"
      class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
      data-id="e22f91b"
      data-element_type="widget"
      data-widget_type="go-s-heading.default"
    >
      <div class="elementor-widget-container">
        <div class="prthalign">
          <h1
            style="font-weight: 600"
            class="headd1 text-dark kd-title-ani kd-split-text"
          >
            Department of Mechanical Engineering
          </h1>
          <h2 class="headd2 text-dark kd-split-text">
            Royal School of Engineering & Technology (RSET)
          </h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-5">
    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        1. About the Department and Programmes offered
      </h3>
      <div class="p-2">
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
          About the Department
        </h3>
        <p class="text-dark para1" style="text-align: justify;">
          The Mechanical Engineering Department at Royal Global University (RGU)
          stands as a beacon of excellence, dedicated to fostering innovative and
          critical thinking among its students. Our department is renowned for its
          state-of-the-art laboratories, cutting-edge research facilities, and a
          highly experienced faculty committed to guiding students towards
          achieving technical prowess and leadership skills. We emphasize a
          comprehensive curriculum that integrates theoretical knowledge with
          practical applications, covering key areas such as designing,
          thermodynamics, fluid mechanics, and materials science. Our thrust areas
          include sustainable energy solutions, advanced manufacturing techniques,
          design optimization and smart automation systems, positioning our
          graduates at the forefront of technological advancements. With strong
          industry partnerships and a robust placement cell, RGU Mechanical
          Engineering graduates are well-equipped to excel in diverse fields,
          including automotive, aerospace, energy, and manufacturing sectors. Our
          alumni have a track record of securing prestigious positions globally
          and contributing significantly to technological innovations. Join us at
          RGU to embark on a transformative educational journey that promises a
          prosperous and dynamic career in mechanical engineering.
        </p>
      </div>
    </div>
    <hr />

    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        2. Vision & Mission of the Department
      </h3>
      <div class="p-2">
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Vision -</h3>
        <p class="para1 text-dark">
          To be a world leader in mechanical engineering education and research,
          fostering innovation, interdisciplinary collaboration, and sustainable
          technologies. We aim to nurture students who become successful
          entrepreneurs and responsible citizens, contributing to solving societal
          challenges through academia and industry partnerships.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To equip students with comprehensive knowledge, critical thinking
            skills, and ethical values who will excel in their chosen careers,
            contributing to technological advancements.
          </li>
          <li>
            To foster a research ecosystem that encourages collaboration with
            industry and academia. We strive to develop cutting-edge solutions and
            contribute to global progress.
          </li>
          <li>
            To establish and maintain state-of-the-art laboratories, providing
            technical expertise and support to propel the nation to the forefront
            of global engineering.
          </li>
        </ol>
      </div>
    </div>
    <hr />

    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        3. Infrastructure
      </h3>
      <div class="p-2">
        <div class="row">
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Mechanical_Engineering/MechanicalEngineering2.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Mechanical_Engineering/MechanicalEngineering.jpg"
            />
          </div>
        </div>
      </div>
    </div>
    <hr />

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          4. Prominent Alumni
        </h3>
        <div>
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">Name of Alumni</th>
                <th class="font-weight-bold text-white">Batch</th>
                <th class="font-weight-bold text-white">
                  School and Department Name
                </th>
                <th class="font-weight-bold text-white">
                  Status/ Current Organization name with Designation
                </th>
                <th class="font-weight-bold text-white">Photograph</th>
              </tr>
            </thead>

            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Plabon Baruah</td>
                <td>2017-2021</td>
                <td>RSET MECHANICAL ENGINEERING</td>
                <td>
                  IIT BHU MTech in Metallurgy specialization in Alloy Technology
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Mechanical_Engineering/PlabonBaruah.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Safrin Ahmed</td>
                <td>2018-2022</td>
                <td>RSET MECHANICAL ENGINEERING</td>
                <td>MTECH DEPARTMENT OF ENERGY ,TEZPUR UNIVERSITY</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Mechanical_Engineering/SafrinAhmed.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Siddharth Nandi</td>
                <td>2018-2022</td>
                <td>RSET MECHANICAL ENGINEERING</td>
                <td>MBA TEZPUR UNIVERSITY</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Mechanical_Engineering/SiddharthNandi.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Roktim Gogoi</td>
                <td>2019-2023</td>
                <td>RSET MECHANICAL ENGINEERING</td>
                <td>
                  MTECH in PETROLEUM TECHNOLOGY (PETROLEUM EXPLORATION &amp;
                  PRODUCTION) ,DIBRUGARH UNIVERSITY
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Mechanical_Engineering/RoktimGogoi.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Sankhanil Borgohain</td>
                <td>2019-2023</td>
                <td>RSET MECHANICAL ENGINEERING</td>
                <td>
                  MTECH in PETROLEUM TECHNOLOGY (PETROLEUM EXPLORATION &amp;
                  PRODUCTION) ,DIBRUGARH UNIVERSITY
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Mechanical_Engineering/SankhanilBorgohain.jpg"
                  />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <hr />

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          5. Events & Achievements
        </h3>
      </div>
    </div>
    <hr />

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          6. Departmental Research Statistics
        </h3>
        <div class="text-dark">
          <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
            <a href="https://www.rgu.ac/research-and-development-rsc.php"
              >Click More</a
            >
          </h3>
        </div>
      </div>
    </div>
    <hr />
    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          7. The Board of Studies (BoS)
        </h3>
        <div>
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
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
                <td>Mr. Biswajit Choudhury, Assistant Professor</td>
              </tr>

              <tr>
                <td>2</td>
                <td>
                  All Faculty members of the Department Members (Ex-Officio)
                </td>
                <td>
                  Mr. Zunaid Ahmed, Assistant Professor
                  <hr />
                  Mr. Ashok Talukdar, Assistant Professor
                  <hr />
                  Dr. Bishal Poddar, Assistant Professor
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>External Experts(Academic)</td>
                <td>
                  Dr Bashab Jyoti Phukan, Associate Professor, Assam Engineering
                  College, Guwahati
                </td>
              </tr>

              <tr>
                <td>4</td>
                <td>External Experts(Industry)</td>
                <td>
                  Mr. Sanjeeb Barman, Senior Manager, Commercial, Numaligarh
                  Refinery Limited
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <hr />

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          8. The Departmental Research Committee (DRC)
        </h3>
        <div>
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="text-white">#</th>
                <th class="text-white">Name of the Member</th>
                <th class="text-white">Designation</th>
                <th class="text-white">Designation in the committee</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Prof. (Dr.) Ankur Ganguly</td>
                <td>Professor, Dean Academics and i/c Dean, RSET &amp; RSIT</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Dr. Bishal Podder</td>
                <td>Assistant Professor, Mechanical Engineering</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Mr. Biswajit Choudhury</td>
                <td>Assistant Professor, Mechanical Engineering</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Mr. Ashok Talukdar</td>
                <td>Assistant Professor, Mechanical Engineering</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Prof. (Dr.) Anuradha Devi</td>
                <td>Professor, Dean, RSAPS</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Prof. (Dr.) Arnab Sarma</td>
                <td>Professor, Civil Engineering, HoD</td>
                <td>Member</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <hr />

    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        9. Course Structure & Syllabus
      </h3>
      <div class="p-2">
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Syllabus -</h3>
        <div class="row">
          <div class="col-lg-12">
            <div class="accordion para1" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="false"
                    aria-controls="collapseOne"
                  >
                  <strong>
                    Under Graduate
                  </strong>
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <div class="row">
                      <a
                        href="assets/Departmentalpdf/AY 2024-25 Mechanical Engineering.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2024-25 Mechanical
                        Engineering.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus BTech Mechanical Engineering.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> Old Syllabus BTech
                        Mechanical Engineering.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus B.ARCH.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> Old Syllabus B.ARCH.pdf
                        <i class="fa fa-download"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                <strong>
                  Post Graduate
                  </strong>
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body"></div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                <strong>
                  Doctoral Programme
                  </strong>
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <a
                      href="doctoral-programme.html"
                      class="para1"
                      target="_blank"
                      >
                    <strong>
                    Click to View...
                  </strong>
                    </a
                    >
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

  <!-- start testimonials-->
  <div
    data-elementor-type="wp-page"
    data-elementor-id="704"
    class="elementor elementor-704"
  >
    <!--Testimonial-->
    <section
      class="elementor-section elementor-top-section elementor-element elementor-element-5b9f94a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
      data-id="5b9f94a"
      data-element_type="section"
      data-settings=""
      style="
        background-image: url('assets/img/head_img/testmonial.png');
        padding-top: 90px;
        padding-bottom: 90px;
      "
    >
      <div class="elementor-container elementor-column-gap-default">
        <div
          class="elementor-element elementor-element-3981c62 elementor-widget elementor-widget-go-s-heading"
          data-id="3981c62"
          data-element_type="widget"
          data-widget_type="go-s-heading.default"
        >
          <div class="elementor-widget-container"></div>
        </div>
      </div>
      <div
        class="elementor p-5 elementor-col-66 elementor-top-column elementor-element elementor-element-1e15263"
        data-id="1e15263"
        data-element_type="column"
      >
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-a0a0689 elementor-widget elementor-widget-go-testimonial-id"
            data-id="a0a0689"
            data-element_type="widget"
            data-widget_type="go-testimonial-id.default"
          >
            <div class="elementor-widget-container">
              <div class="kd-testimonial-1-slider txaa-fade-right">
                <div class="swiper-container fix kd-testimonial-1-active">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I take immense pride in being an alumnus of The
                            Assam Royal Global University, where I pursued my B.
                            Tech in Mechanical Engineering from the 2017-2021
                            batch. The university provided a nurturing environment
                            with exceptional library sources that greatly
                            supported my academic journey. The dedicated faculty
                            and well-equipped laboratories enriched my learning
                            experience, while the expansive campus and comfortable
                            hostel facilities made my stay both productive and
                            enjoyable. Assam Royal Global University has truly
                            shaped my academic foundation and instilled in me a
                            deep appreciation for learning and growth. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/PLABONBARUAH.png"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                PLABON BARUAH
                              </h4>
                              <p class="bio kd-para-1">
                                B. TECH MECHANICAL ENGINEERING<br />BATCH: 2017-21
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ Four years at Royal Global University have been
                            undoubtedly the best years of my life. When I look
                            back now, I realize how this University helped me
                            shape my personality, infused self-confidence &amp;
                            made me ready to face the professional world. Sincere
                            efforts and hard work of RGU faculty provided me a
                            gateway to my career. I give credit of my success to
                            my teachers whose guidance at every step helped me to
                            nosh my skills. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/PRITAMSARMA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                PRITAM SARMA
                              </h4>
                              <p class="bio kd-para-1">
                                B. TECH MECHANICAL ENGINEERING<br />BATCH: 2019-23
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ As an alumnus of Assam Royal Global University, I
                            can confidently say that my time at the university was
                            transformative and enriching. The academic environment
                            at ARG University is both rigorous and supportive,
                            providing a perfect blend of theoretical knowledge and
                            practical experience. The faculty members are not only
                            experts in their respective fields but also dedicated
                            mentors who genuinely care about students' growth and
                            success. ARG University not only provided me with a
                            top- notch education but also shaped me into a
                            well-rounded individual ready to face the challenges
                            of the professional world. I am proud to be an alumnus
                            of such a prestigious institution and grateful for the
                            lifelong memories and connections I made there. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/RoktimGogoi.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                ROKTIM GOGOI
                              </h4>
                              <p class="bio kd-para-1">
                                B.TECH. MECHANICAL ENGINEERING<br />BATCH:
                                2019-2023
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ The Assam Royal Global University has always been a
                            chapter close to my heart. It has been the bridge
                            between my wishes and accomplishments. Joining the B.
                            Tech, Mechanical Engineering department of Royal
                            School of Engineering and Technology, RGU was not a
                            choice but an act of destiny for me. The faculties and
                            the staff members had made it a platform where I could
                            bloom. The greatest assets of the ME department of
                            RSET are its competent faculties. They, with their
                            skills, expertise, endeavour and never-ending hard
                            work compelled me to give my best and made me fit to
                            survive in an environment where survival of the
                            fittest is a must. Their guidance, critical
                            suggestions and positive attitude helped me develop my
                            skills. The advanced infrastructure and laboratories
                            enabled me to get hands on experience which is a real
                            help to me in the present and will be in the future.
                            The patience and affectionate attitude with which the
                            faculties of all the departments taught me throughout
                            different stages of the 4-year course work is rarely
                            found and is itself an achievement for me.Beyond
                            academics, the vibrant campus life and various student
                            clubs enriched my overall experience. I built lasting
                            friendships and developed essential soft skills that
                            have been beneficial in my professional journey. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/SafrinAhmed.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                SAFRIN AHMED
                              </h4>
                              <p class="bio kd-para-1">
                                B. Tech Mechanical Engineering<br />Batch:
                                2018-2022
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ My experience with Royal Global University was one
                            of illumination and revelation. The guidance of
                            professors, depth in subjects taught, ambience of
                            college, and infrastructure of labs were all highly
                            satisfactory and amplified my thirst for practical
                            work and knowledge. Beyond academia concerning
                            engineering, RGU also gave me ample opportunities to
                            join and collaborate with multiple inter-departmental
                            activities, clubs, and cultural events to enhance my
                            social interaction skills. My 4-year journey as a
                            Mechanical engineer in RGU was one that will stay with
                            me forever. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/M.SHAKTHINARAYANAN.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                M. SHAKTHI NARAYANAN
                              </h4>
                              <p class="bio kd-para-1">
                                B. TECH MECHANICAL ENGINEERING<br />BATCH:
                                2018-2022
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am proud to have completed my B. Tech in
                            Mechanical Engineering from The Assam Royal Global
                            University (2018-2022). The university provided me
                            with a robust foundation in mechanical engineering
                            principles, hands-on experience with modern
                            technologies, and exposure to innovative projects. The
                            faculty's expertise and the university's
                            state-of-the-art facilities significantly contributed
                            to my academic and professional growth. I am grateful
                            for the invaluable education and support I received
                            during my time there. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/SiddharthNandi.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                SIDDHARTH NANDI
                              </h4>
                              <p class="bio kd-para-1">
                                B. Tech (Mechanical Engineering)<br />Batch: 2018
                                – 2022
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am proud to say that I belong to this wonderful
                            temple of knowledge The Assam Royal Global University,
                            Betkuchi, Ghy-35. I was highly elated when I got the
                            admission in Mechanical Engineering here. As I had
                            always wished to graduate from a place that has
                            cooperative professors, a state of the art
                            infrastructure, huge library resources, laboratories
                            pertaining to latest technologies and clean and vast
                            campus with a large canteen that serves very hygienic
                            food. My college is the blend of all these. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/L.BOOKISHSINGH.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                L. BOOKISH SINGH
                              </h4>
                              <p class="bio kd-para-1">
                                B. TECH MECHANICAL ENGINEERING<br />BATCH: 2021-25
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ My experience with my professors as a Mechanical
                            Engineering student in RGU has been everything that I
                            could ask for, as they are always ready to provide
                            guidance and encouragement and are very cordial and
                            supportive. Their dedication to student success has
                            truly made a difference in my academic journey. I feel
                            fortunate to be part of such a nurturing and dynamic
                            learning environment. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/KASTURIKARAJKHOWA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                KASTURIKA RAJKHOWA
                              </h4>
                              <p class="bio kd-para-1">
                                B. TECH MECHANICAL ENGINEERING<br />BATCH: 2022-26
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ As a current student at The Assam Royal Global
                            University, I was thrilled when I got my admission in
                            Mechanical Engineering here. I feel blessed to have a
                            welcoming and supporting vibrant community. The
                            faculties are not only expert but also passionate
                            about teaching which have encouraged me to think
                            critically and creatively, pushing us to explore new
                            ideas and perspectives. Beyond the classroom, the
                            university offers a wide range of extracurricular
                            activities. The academic environment is both
                            challenging and nurturing with top notch facilities
                            including infrastructure, library, vast campus, large
                            canteen, laboratory, IIC cell etc. The supportive
                            community, rigorous academics and opportunities has
                            made my time here truly rewarding. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/NIMISHAPATUARY.png"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                NIMISHA PATUARY
                              </h4>
                              <p class="bio kd-para-1">
                                B. TECH MECHANICAL ENGINEERING<br />BATCH: 2021-25
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am proud to be a part of The Assam Royal Global
                            University, Guwahati. Pursuing my Mechanical
                            Engineering Degree here as a Lateral entry student has
                            been an enriching experience. The cooperative
                            Professors, modern infrastructure, extensive Library,
                            and advanced Laboratories have greatly enhanced my
                            learning. The clean campus and hygienic canteen create
                            a perfect environment for study and relaxation. The
                            university's strong focus on innovation and
                            entrepreneurship, with ample support and
                            opportunities, has been incredibly beneficial. My time
                            here has helped me grow both academically and
                            personally. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Mechanical_Engineering/MehdiAlom.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                MEHDI ALOM
                              </h4>
                              <p class="bio kd-para-1">
                                B.TECH MECHANICAL ENGINEERING<br />BATCH 2019-2023
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- slider-btn -->
                <div class="kd-testimonial-1-slider-btn">
                  <div class="kd_testimonial_1_slider_prev">
                    <div
                      class="kd-slider-btn-1 d-flex align-items-center justify-content-center txaa-fade-right"
                    >
                      <span class="icon-1">
                        <i class="fa-solid fa-arrow-left"></i>
                      </span>
                      <span class="icon-2">
                        <i class="fa-solid fa-arrow-left"></i>
                      </span>
                    </div>
                  </div>
                  <div class="kd_testimonial_1_slider_next">
                    <div
                      class="kd-slider-btn-1 has-next d-flex align-items-center justify-content-center txaa-fade-left"
                    >
                      <span class="icon-1">
                        <i class="fa-solid fa-arrow-right"></i>
                      </span>
                      <span class="icon-2">
                        <i class="fa-solid fa-arrow-right"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Testimonial-->
  </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
