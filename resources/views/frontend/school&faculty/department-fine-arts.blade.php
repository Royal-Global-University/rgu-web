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
            Department of Fine Arts
          </h1>
          <h2 class="headd2 text-dark kd-split-text">
            Royal School of Fine Arts (RSFA)
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
          The Fine Arts department of The Assam Royal Global University, Guwahati
          is well established department in North-East region called Royal School
          of Fine Arts. The department was started in the year 2017. There are
          four years UG programme as well as PhD programme. The department has
          well equipped infrastructure. The department has well planned art
          gallery where regularly art exhibition has been conducted. Several
          students from the department have got award in the fine arts section in
          national level. The passed-out batches have already got admission for
          their master’s degree at renowned university of India as well as of
          western country and some students have successfully established their
          own art studios after completing their degrees. Several students are
          pursuing their PhD programme in different areas of fine arts. There is
          future plan to organize exchange programmes of art exhibition/ art
          workshop in National and International level for the students as well as
          the faculties.
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
          To cultivate outstanding fine arts education to generate well-rounded
          individuals whoseuniqueartistic perspectives could be advantageous to
          global society.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To empower creativity, cultivate expression, inspire innovation,
            fostering a dynamic community where artistic exploration thrives.
          </li>
          <li>
            To ignite imaginations, challenge boundaries and celebrate the
            diversity of human expression by cultivating visionary artists and
            scholars.
          </li>
          <li>
            To inculcate interdisciplinary collaboration and a commitment to
            cultural enrichment and give back leaders who will enrich the world
            with their creativity and critical perspectives.
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
              height="450"
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Fine_Arts/339462930_1306942193189724_1051097411027579337_n.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              height="450"
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Fine_Arts/Finearts.jpg"
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
                <td>SYEDA ZERIFA NAIM</td>
                <td>2017-2021</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Pursuing Master’s degree in Fine Arts (MVA) at Bangalore
                  University Jnana Bharathi, Karnataka
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/SYEDAZERIFANAIM.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>CHITRALI GOSWAMI</td>
                <td>2017-2021</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Pursuing Master’s degree in Fine Arts at Fine Art Academy in
                  NABA Milan, Italy.
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/CHITRALIGOSWAMI.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>TECHI TAGU TARA</td>
                <td>2017-2021</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Completed Master’s Degree in Fine Arts at Manipur Central
                  University, Imphal, Manipur
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/TECHITAGUTARA.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>SHRADDHA SAIKIA</td>
                <td>2017-2021</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Pursuing Master’s degree in Fine Arts at Manipur Central
                  University, Imphal, Manipur
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/SHRADDHASAIKIA.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>LAISHRAM SAMSON SINGH</td>
                <td>2017-2019 2019-2024</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Completed PhD degree in Fine Arts, Currentlyworking as an
                  Assistant Professor, Institute of Rural Education, Wangjing,
                  Manipur
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/LAISHRAMSAMSONSINGH.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>A IMOGEN FRANCESSA WAHLANG</td>
                <td>2018-2022</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Pursuing Master’s degree in Fine Arts at Manipur Central
                  University, Imphal , Manipur
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/AIMOGENFRANCESSAWAHLANG.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>ABONO GURUMAYUM</td>
                <td>2018-2022</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Pursuing Master’s degree in Fine Arts at Manipur Central
                  University, Imphal , Manipur
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/ABONOGURUMAYUM.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>ADITYA DEB NATH</td>
                <td>2018-2022</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Currently pursuing MFA at MIT-ADT university in Pune Maharashtra
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/ADITYADEBNATH.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>NIKITA PYRTUH</td>
                <td>2018-2022</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Completed Master’s Degree in Fine Arts from Tripura University
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/NIKITAPYRTUH.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>ANKITA DAS</td>
                <td>2019-2023</td>
                <td>Royal School of Fine Arts</td>
                <td>
                  Pursuing Master's Programme in Design (M.Des.) at National
                  Institute of Design (NID), Ahmedabad
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Fine_Arts/ANKITADAS.jpg"
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
        <div>
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">Date of Visit</th>
                <th class="font-weight-bold text-white">Name and Designation</th>
                <th class="font-weight-bold text-white">Purpose of the visit</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>19th /20th /21st February 2018</td>
                <td>
                  Dr. Meghali Goswami, Associate Professor, History of Art, Kala
                  Bhavana, Visva-Bharati University, Santiniketan
                </td>
                <td>Workshop of Lecture Series</td>
              </tr>
              <tr>
                <td>18th March—20th March, 2018</td>
                <td>
                  Mr. Sutanu Chatterjee, Associate Professor, Sculpture
                  Department, Kala Bhavana, Santiniketan, Kolkata
                </td>
                <td>Sculpture Workshop</td>
              </tr>
              <tr>
                <td>8th October—12th October, 2018</td>
                <td>Mr. Gakul Paul, Terracotta Artist of Assam</td>
                <td>Terracotta Workshop</td>
              </tr>
              <tr>
                <td>6/5/2019</td>
                <td>
                  Prof. (Dr.) Nirmal Kanti Roy, Dean, Visual Arts Department,
                  Assam University, Silchar
                </td>
                <td>Guest Speaker</td>
              </tr>
              <tr>
                <td>6/15/2020</td>
                <td>
                  Mr. Amitabh Sen Gupta, Eminent Contemporary Artist, Former Head
                  of Visual Arts at University of Port Harcourt, Nigeria.
                </td>
                <td>
                  Webinar on Topic: Love to See, Don't Understand: Crisis in
                  Education on Art
                </td>
              </tr>
              <tr>
                <td>6/19/2020</td>
                <td>
                  Dr. Sekhar Chandra Joshi, Professor and Dean, Faculty of Visual
                  Arts, Kumaun University
                </td>
                <td>
                  Webinar on Topic: Pandemic Crisis- Role of Art and Artificial
                  Intelligence, Resource person
                </td>
              </tr>
              <tr>
                <td>7/17/2020</td>
                <td>
                  Dr. Sunil Kumar Vishwakarma, Assistant Professor, Fine Arts
                  Department, Mahatma Gandhi Kashi Vidyapith, Varanasi
                </td>
                <td>Webinar on Art as Practice: An Artist’s Perspective</td>
              </tr>
              <tr>
                <td>1/5/2021</td>
                <td>Mr. Kishore Kumar Das</td>
                <td>Senior Artist of Assam</td>
              </tr>
              <tr>
                <td>7/29/2020</td>
                <td>
                  Mr. Mahinder Kumar Mastana, HOD, Assistant Professor, Department
                  of Sculpture, Apeejay College of Fine Arts, Jalandhar City,
                  Punjab
                </td>
                <td>
                  Webinar on An Interactive Session cum Sculpture Making Live
                  Demonstration in Papier Mache
                </td>
              </tr>
              <tr>
                <td>2/12/2021</td>
                <td>Maneswar Brahma, Senior Artist of Assam</td>
                <td>Art Talk</td>
              </tr>
              <tr>
                <td>4/22/2021</td>
                <td>Col. (Retd.) Jiten Hazarika, Indian Contemporary Artist</td>
                <td>A lecture on Art and Aesthetics</td>
              </tr>
              <tr>
                <td>6/4/2021</td>
                <td>
                  Mr. Punyo Chobin, HOD i/c,&nbsp;Assistant Professor, Dept. of
                  Fine Arts &amp; Music, Rajiv Gandhi University, Itanagar,
                  Doimukh&nbsp;
                </td>
                <td>Webinar on My Art Work: Search of Culture/Identity</td>
              </tr>
              <tr>
                <td>10/1/2021</td>
                <td>
                  Mr. Sisir Thapa, Assistant Professor, Fine Arts Department,
                  Tripura University
                </td>
                <td>Webinar on My Artifacts: Artworks from the Past</td>
              </tr>
              <tr>
                <td>10/27/2021</td>
                <td>Ms. Manika Devi, Contemporary Arist of Assam</td>
                <td>Webinar on Working as a Freelance Artist</td>
              </tr>
              <tr>
                <td>11/17/2021</td>
                <td>Mrs. Shanta Deb, Contemporary artist from Tripura</td>
                <td>A lecture on Terracotta Art</td>
              </tr>
              <tr>
                <td>12/8/2022</td>
                <td>Mr. Pranjit Sarma Chitrangan</td>
                <td>A lecture on Aesthetics of Desgin</td>
              </tr>
              <tr>
                <td>12/8/2023</td>
                <td>Mr. Champak Borbora</td>
                <td>Water Colour Workshop</td>
              </tr>
              <tr>
                <td>12/8/2023</td>
                <td>Mr. Nikhileswar Barua</td>
                <td>Art Talk</td>
              </tr>
              <tr>
                <td>12/24/2023</td>
                <td>
                  Dr. Ganesh Nandi, Assistant Professor, Visual Arts Department,
                  Assam University, Silchar
                </td>
                <td>Art Talk</td>
              </tr>
              <tr>
                <td>7/22/2024</td>
                <td>
                  Dr. Prakash Kishore, Artist &amp; Curator, Founder and Director,
                  Positive Energy, Shillong
                </td>
                <td>Art Talk</td>
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
                <th class="text-white">Position in S-BoS</th>
                <th class="text-white">Name and Designation</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Chairperson (Ex-Officio) Dean of School</td>
                <td>Prof Hari Prasad Agarwal, Dean-RSFA/RSD/RSFT/RSA</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Members (Ex-Officio)</td>
                <td>
                  Dr. Mousumi Deka, Assistant Professor and co-ordinator, RSFA
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Mr. Jnanendra Barkakati, Retd. Exhibition Officer, State Govt.
                  Cultural Affairs Department.
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>
                  Mr. Naba Pratim Das, Artist, Illustrator, Aarnyak, ASTEC,
                  Banalata, Assam.
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Dr. Sumanta Dutta Chowdhury, Assistant Professor, RSFA
                  <hr />
                  Mr. Kishan Bagdi, Assistant Professor, RSFA
                </td>
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
                <td>Prof. (Dr.) Hari Prasad Agarwal</td>
                <td>Professor</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td rowspan="2">2.</td>
                <td rowspan="2" class="align-middle">
                  Two Assistant Professors holding Ph.D. degree
                </td>
                <td>Dr. Mousumi Deka</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>Dr. Sumanta Dutta Chowdhury</td>
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
                <td>Prof. (Dr.) Krishna Barua</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. (Dr.) Shiela Bora</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. (Dr.) Sajal Nag</td>
                <td>Professor</td>
                <td>External Member</td>
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
                        href="assets/Departmentalpdf/AY 2022-2023 BFA.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2022-2023 BFA.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2023-2024 BFA.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2023-2024 BFA.pdf
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
                  </strong></a
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
                            decoding="async"
                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am proud to be a part of The Assam Royal Global
                            University, a remarkable institution that has always
                            been my dream for pursuing Fine Arts. The university
                            excels in combining cooperative professors, a
                            state-of-the-art and well-maintained infrastructure,
                            and extensive library resources, including art
                            galleries and studios. The Fine Arts department stands
                            out, offering students numerous opportunities to
                            refine their skills under the mentorship of
                            experienced and supportive faculty. The university
                            ensures personalized guidance for every student,
                            fostering growth and success in their chosen field.
                            The Assam Royal Global University perfectly embodies
                            everything I envisioned for my higher education
                            journey. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                decoding="async"
                                src="assets/img/testimonial/Department_Fine_Arts/PrabhatJyotiGuwala.jpg"
                                alt=""
                              />
                            </div>
                            <div class="author-content">
                              <h4 class="name kd-heading-1 kd-font-900">
                                Prabhat Jyoti Gowala
                              </h4>
                              <p class="bio kd-para-1">
                                Bachelor of Fine Arts (BFA)<br />Batch: 2020- 2024
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
                            decoding="async"
                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I firmly believe that my time at RGU was intended by
                            God, and I am honoured to call the university home. I
                            received the best education possible at one of the
                            best universities in the Northeast, which offers
                            everything a student could possibly want. It is my
                            belief that every student aspires to attend a college
                            with such incredible facilities, an extensive library,
                            comfortable workspaces, a large campus with a clean
                            atmosphere, good indoor sports facilities and games,
                            updated cafeterias serving hygienic food, and numerous
                            building blocks equipped with departmental space and
                            equipment. I want to thank God and everybody who has
                            supported me in my quest for development and new
                            heights, from the humble employees to the highest
                            authorities. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                decoding="async"
                                src="assets/img/testimonial/Department_Fine_Arts/BodeSwuro.jpg"
                                alt=""
                              />
                            </div>
                            <div class="author-content">
                              <h4 class="name kd-heading-1 kd-font-900">
                                Bode Swuro
                              </h4>
                              <p class="bio kd-para-1">
                                Bachelor of Fine Arts (BFA)<br />Batch: 2019 -
                                2023
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
                            decoding="async"
                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ Choosing to study at Royal Global University was one
                            of the best decisions I’ve ever made. The Bachelor of
                            Fine Arts course is comprehensive and engaging, with
                            knowledgeable professors who are always willing to
                            help. The campus facilities are top-notch and there
                            are numerous opportunities for research, interaction
                            and internships. I’ve grown so much both academically
                            and personally during my time here and I feel well
                            prepared for my future career. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                decoding="async"
                                src="assets/img/testimonial/Department_Fine_Arts/RoshniJain.jpg"
                                alt=""
                              />
                            </div>
                            <div class="author-content">
                              <h4 class="name kd-heading-1 kd-font-900">
                                Roshni Jain
                              </h4>
                              <p class="bio kd-para-1">
                                Batchelor of Fine Arts (BFA)<br />Batch 2021-2025
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
                            decoding="async"
                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ Learning and researching under the nurturing roof of
                            Royal School of Fine Arts, The Assam Royal Global
                            University, Guwahati has been one of the most
                            enlightening, challenging yet fruitful experiences of
                            my academic journey. Beginning from Post-Graduation in
                            2017 to Ph.D concluding in 2024, my knowledge in the
                            field of Fine Arts has increased exponentially under
                            the meticulous care of experienced professors and
                            faculties. And finally, I am proud to stand tall as an
                            alumni of such a fine University ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                decoding="async"
                                src="assets/img/testimonial/Department_Fine_Arts/LaishramSamsonSingh.jpg"
                                alt=""
                              />
                            </div>
                            <div class="author-content">
                              <h4 class="name kd-heading-1 kd-font-900">
                                Laishram Samson Singh
                              </h4>
                              <p class="bio kd-para-1">
                                MFA Batch 2017-2019<br />PhD in Fine Arts Batch
                                2019-2024
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
                            decoding="async"
                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am delighted to share my experience as a student
                            in the Bachelor of Fine Arts (BFA) program at The
                            Assam Royal Global University. Enrolling in this
                            program has been one of the most enriching decisions
                            of my academic journey. The BFA program at RGU stands
                            out for its comprehensive curriculum that blends
                            theoretical knowledge with practical, hands-on
                            experience. The faculty members are highly qualified
                            and deeply committed to nurturing creativity and
                            innovation among their students. Their guidance and
                            mentorship have been invaluable in helping me explore
                            and expand my artistic abilities. The university's
                            state-of-the-art facilities provide an ideal
                            environment for creative expression. Whether in the
                            studios, workshops, or galleries, there is always a
                            space where students can experiment with different
                            mediums and techniques. This hands-on approach has
                            been instrumental in shaping my understanding of
                            various artistic disciplines ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                decoding="async"
                                src="assets/img/testimonial/Department_Fine_Arts/AdityaDebNath.jpg"
                                alt=""
                              />
                            </div>
                            <div class="author-content">
                              <h4 class="name kd-heading-1 kd-font-900">
                                Aditya Deb Nath
                              </h4>
                              <p class="bio kd-para-1">
                                Bachelor of Fine Arts (BFA)<br />Batch: 2018 -
                                2022
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
  </div>
        <!--End About-->
    </div><!-- #page -->
@endsection
