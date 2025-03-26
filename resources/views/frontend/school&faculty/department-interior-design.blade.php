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
            Department of Interior Design
          </h1>
          <h2 class="headd2 text-dark kd-split-text">
            Royal School of Design (RSD)
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
          The Interior Design Department stands as a beacon of innovation and
          creativity, harnessing a diverse range of strengths and competencies.
          With a steadfast dedication to merging functionality with aesthetics,
          graduates are equipped with the skills to transform spaces into
          immersive and inspiring environments. Embracing sustainability and
          human-centered design principles, the department's thrust areas include
          biophilic design, universal accessibility, and experiential spatial
          planning. As graduates enter the workforce, they bring with them a
          unique blend of design flair, technical proficiency, and a keen
          understanding of user needs. Whether pursuing careers in residential
          design, commercial spaces, or hospitality venues, alumni are poised to
          thrive in an ever-evolving industry, shaping the future of interior
          environments with their innovative approaches and visionary insights.
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
          To offer students nationally and internationally integrated
          opportunities in the field of design to create global citizens, endowed
          with creativity and inclusive ideal of sustainability.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To achieve innovative research and curriculum design with
            industry-oriented teaching learning methodologies.
          </li>
          <li>
            To encourage students to become professionally adept, morally upright
            citizens capable of rendering invaluable service to Society and the
            Nation.
          </li>
          <li>
            To encourage students to become World Class Interior designers with
            ethical and value-based practices for sustainable development with a
            global outlook.
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
              src="assets/img/Departments/Department_Interior_Design/InteriorDesign2.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Interior_Design/InteriorDesign.jpg"
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
                <td>Bijendra Laishram</td>
                <td>2017-2021</td>
                <td>Royal School Of Design, RSD</td>
                <td>Senior Designer at Wurfel New Chekkon, Imphal, Manipur</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Interior_Design/BijendraLaishram.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Syeda Tabasum Sirin</td>
                <td>2018-2022</td>
                <td>Royal School Of Design, RSD</td>
                <td>Currently Freelancing as Interior Designer</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Interior_Design/SyedaTabasumSirin.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Khriekovono Nakhro</td>
                <td>⁠2019-2023</td>
                <td>Royal School Of Design, RSD</td>
                <td>Currently Freelancing as Interior Designer</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Interior_Design/KhriekovonoNakhro.jpg"
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
            <a href="#">Click More</a>
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
                <th class="text-white">Position in S-BoS</th>
                <th class="text-white">Name and Designation</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Chairperson (Ex-Officio) Dean of School</td>
                <td>Prof. (Dr.) Hari Prasad Agarwal, Dean of RSA/RSD/RSFA</td>
              </tr>

              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Member (Ex-Officio)</td>
                <td>
                  Zubin Islam,Assistant Professor Co-Ordinator of CD,GD&amp; PD
                  <hr />
                  Asif Iqbal Mazid,Assistant Professor, Co-Ordinator of FD
                  <hr />
                  Ar. Bhola Saha,Assistant Professor Co-Ordinator of ID
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. (Dr.) Sougata Karmakar, HOD, Dept. of Design, Indian
                  Institute of Technology, Guwahati
                </td>
              </tr>

              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>
                  Mr. Tuhin Bhuyan, Full stack developer + Interaction Designer
                  Founder @ Projckt, Chandigarh
                </td>
              </tr>

              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Asif Iqbal MazId, Assistant Professor, Fashion Design
                  <hr />
                  Sanjay Krishna Kutum, Assistant Professor, Communication Design
                </td>
              </tr>

              <tr>
                <td>6</td>
                <td>
                  Registrar, Member Secretary (Ex-officio)/Registrar nominee
                </td>
                <td>
                  Ms. Moon Moon Ahmed, Senior Manager, Academic Section, The Assam
                  Royal Global University
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
                <td>Prof. (Dr.) Hari Prasad Agarwal</td>
                <td>Dean of RSA/RSD/RSFA</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Prof. (Dr.) Ankur Ganguly</td>
                <td>Dean Academics, i/c Dean RSET &amp; RSIT</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Prof. (Dr.) Prithviraj Chakraborty</td>
                <td>Professor, RSP</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Prof. (Dr.) Pradip Jyoti Mahata</td>
                <td>Dean, RSCOM</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Dr. Sumanta Dutta Chowdhury</td>
                <td>Assistant Professor, RSFA</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Dr. Susmita Nath</td>
                <td>Assistant Professor, RSFT</td>
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
                  ><strong>
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
                        href="assets/Departmentalpdf/AY 2022-23 B.I.D..pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2022-23 B.I.D..pdf
                        <i class="fa fa-download"></i>
                      </a>

                      <a
                        href="assets/Departmentalpdf/AY 2023-24 B.I.D..pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2023-24 B.I.D..pdf
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
                  ><strong>
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
                          <img

                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ Royal Global University Assam transformed my life.
                            The Bachelor in Interior Design program offered a
                            perfect mix of creativity and practical skills. The
                            exceptional faculty, state-of-the-art facilities, and
                            inspiring campus made my journey unforgettable. I am
                            deeply grateful for this remarkable experience. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Interior_Design/SyedaTabasumSirin.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Syeda Tabasum Sirin
                              </h4>
                              <p class="bio kd-para-1">
                                RSD ,Royal School Of Design<br />Batch : 2018-2022
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img

                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ My course has been an amazing adventure of discovery
                            and development. The course curriculum was
                            thoughtfully crafted , covering a wide range of topics
                            , allowing me to explore my creativity .<br />
                            <p>
                              The teachers/mentors were not just educators, they
                              took time to understand each student’s
                              strength,weakness and aspirations ,their real -
                              world insights, industry connections and practical
                              tips has enriched my learning experience.
                              Collaborating with my peers added another layer of
                              richness to my learning experience : the exchange of
                              ideas , constructive critiques and shared creativity
                              within classroom/ studios.”
                            </p>
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Interior_Design/KhriekovonoNakhro.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Khriekovono Nakhro
                              </h4>
                              <p class="bio kd-para-1">
                                B.Des. Communication Design<br />Batch of 2020-24
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img

                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ My course has been an amazing adventure of discovery
                            and development. The course curriculum was
                            thoughtfully crafted , covering a wide range of topics
                            , allowing me to explore my creativity .<br />
                            <p>
                              The teachers/mentors were not just educators, they
                              took time to understand each student’s
                              strength,weakness and aspirations ,their real -
                              world insights, industry connections and practical
                              tips has enriched my learning
                              experience.Collaborating with my peers added another
                              layer of richness to my learning experience : the
                              exchange of ideas , constructive critiques and
                              shared creativity within classroom/ studios .<br />As
                              I reflect back on my journey ,…”
                            </p>
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Interior_Design/BijendraLaishram.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Bijendra Laishram
                              </h4>
                              <p class="bio kd-para-1">
                                RSD ,Royal School Of Design<br />Batch : 2017-2021
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
