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
            Department of Architecture
          </h1>
          <h2 class="headd2 text-dark kd-split-text">
            Royal School of Architecture (RSA)
          </h2>
        </div>
      </div>
    </div>
</div>
<div class="container pt-4 pb-5">
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
          The Architecture Department is a dynamic hub of innovation and
          creativity, boasting a diverse array of strengths and competencies. With
          a strong emphasis on sustainable design practices, digital fabrication
          techniques, and interdisciplinary collaboration, graduates emerge
          equipped to tackle the complex challenges facing the built environment.
          The department's thrust areas encompass urban revitalization, resilient
          infrastructure, and adaptive reuse, reflecting a commitment to
          addressing pressing societal needs while embracing technological
          advancements. Graduates possess a unique blend of artistic vision,
          technical expertise, and critical thinking skills, positioning them for
          success in a variety of career paths. Whether pursuing roles in
          architectural firms, urban planning agencies, or academia, alumni are
          well-prepared to make meaningful contributions to shaping the future of
          our cities and communities.
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
            To achieve innovative research and curriculum design with industry-
            oriented teaching learning methodologies.
          </li>
          <li>
            To encourage students to become professionally adept, morally upright
            citizens capable of rendering invaluable service to Society and the
            Nation.
          </li>
          <li>
            To encourage students to become World Class Architects with ethical
            and value-based practices for sustainable development & core human
            values.
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
          <div class="col-lg-4">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Architecture/BArch3.jpg"
            />
          </div>
          <div class="col-lg-4">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Architecture/BArch2.jpg"
            />
          </div>
          <div class="col-lg-4">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Architecture/BArch.jpg"
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
              <th class="text-white">S.NO.</th>
              <th class="text-white">NAME OF ALUMNI</th>
              <th class="text-white">BATCH</th>
              <th class="text-white">SCHOOL AND DEPARTMENT NAME</th>
              <th class="text-white">
                STATUS/ CURRENT ORGANIZATION NAME WITH DESIGNATION
              </th>
              <th colspan="2" class=" text-white">PHOTOGRAPH</th>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr class="para1">
                <td>1</td>
                <td>Bupra Debbarma</td>
                <td>2017-22</td>
                <td>Royal School of Architecture, RSA</td>
                <td>Jr. Architect, SMEC India, Surbana Jurong Group</td>
                <td><img src="assets/img/Departments/Department_Architecture/BUPRA.jpg" alt="" /></td>
              </tr>
              <tr class="para1">
                <td>2</td>
                <td>ThejazenoPaphino</td>
                <td>2017-22</td>
                <td>Royal School of Architecture, RSA</td>
                <td>Jr. Architect, Crux Consultants Pvt. Ltd.</td>
                <td><img src="assets/img/Departments/Department_Architecture/THEJAZENO.jpg" alt="" /></td>
              </tr>
              <tr class="para1">
                <td>3</td>
                <td>Dristy Bora</td>
                <td>2017-2022</td>
                <td>Royal School of Architecture, RSA</td>
                <td>Senior Architect At Clean Slate Designs, Guwahati, Assam</td>
                <td><img src="assets/img/Departments/Department_Architecture/Dristy.jpg" alt="" /></td>
              </tr>
              <tr class="para1">
                <td>4</td>
                <td>Devleena Hazarika</td>
                <td>2018-23</td>
                <td>Royal School of Architecture, RSA</td>
                <td>
                  Student of Masters in Environmental Planning and Management,
                  School of Planning and Architecture, Vijayawada
                </td>
                <td><img src="assets/img/Departments/Department_Architecture/DEVLEENA.jpg" alt="" /></td>
              </tr>
              <tr class="para1">
                <td>5</td>
                <td>Gyandeep Chakravorty</td>
                <td>2018-23</td>
                <td>Royal School of Architecture, RSA</td>
                <td>
                  Student, of Regional Planning, School of Planning and
                  Architecture, New Delhi
                </td>
                <td><img src="assets/img/Departments/Department_Architecture/Gyandeep.jpg" alt="" /></td>
              </tr>
              <tr class="para1">
                <td>6</td>
                <td>Nikita Kashyap</td>
                <td>2018-23</td>
                <td>Royal School of Architecture, RSA</td>
                <td>
                  M.Plan. (with specialization in Regional Planning) from the
                  School of Planning and Architecture, New Delhi
                </td>
                <td><img src="assets/img/Departments/Department_Architecture/NIKITA.jpg" alt="" /></td>
              </tr>
              <tr class="para1">
                <td>7</td>
                <td>Loreen Khongwir</td>
                <td>2018-23</td>
                <td>Royal School of Architecture, RSA</td>
                <td>Master in Landscape Architecture, SPA Delhi.</td>
                <td><img src="assets/img/Departments/Department_Architecture/Loreen.jpg" alt="" /></td>
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
              <th class="text-white">S.NO.</th>
              <th class="text-white">DATE & TIME & DURATION</th>
              <th class="text-white">
                NAME OF RESOURCE PERSON/GUEST/ CELEBRITY ETC, ALONG WITH
                DESIGNATION, PLACE OF WORK AND ALL RELATED DETAILS
              </th>
              <th class="text-white">PURPOSE OF VISIT</th>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr class="para1">
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
              <tr class="para1">
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
              <tr class="para1">
                <td>3</td>
                <td>31.07.2024-10.08.2024</td>
                <td>Er. Rajesh Dutta (Engineering Consultant in ASDMA)</td>
                <td>
                  Attended a Session on Disaster Management and mitigation
                  organized by Royal School of Architecture and Royal School of
                  Design
                </td>
              </tr>
              <tr class="para1">
                <td>4</td>
                <td>23.07.2024</td>
                <td>Ar. Anuj Bhajanka</td>
                <td>
                  Attended Re orientation program for the upcoming semester
                  organized by Royal School of Architecture and Royal School of
                  Design
                </td>
              </tr>
              <tr class="para1">
                <td>5</td>
                <td>28.08.2023</td>
                <td>Ar. Farha Shermin</td>
                <td>
                  Attended an Interactive Session as part of the Students
                  Induction Program of B.Arch and BID/DID 1st Sem
                </td>
              </tr>
              <tr class="para1">
                <td>6</td>
                <td>18.05.2023</td>
                <td>Ar. Gita Balakrishnana</td>
                <td>
                  Panel Discussions organised as part of Day 3 Of Knoxis Design
                  Fest
                </td>
              </tr>
              <tr class="para1">
                <td>7</td>
                <td>18.05.2024</td>
                <td>Ar. Ronojoy Sen</td>
                <td>
                  Panel Discussions organised as part of Day 3 Of Knoxis Design
                  Fest
                </td>
              </tr>
              <tr class="para1">
                <td>8</td>
                <td>18.05.2023</td>
                <td>Ar. Ashish Agarwal</td>
                <td>
                  Panel Discussions organised as part of Day 3 Of Knoxis Design
                  Fest
                </td>
              </tr>
              <tr class="para1">
                <td>9</td>
                <td>18.05.2023</td>
                <td>Mahan J Dutta</td>
                <td>
                  Workshops organised as part of Day 3 Of Knoxis Design Fest
                </td>
              </tr>
              <tr class="para1">
                <td>10</td>
                <td>18.05.2023</td>
                <td>Asutosh Kashyap</td>
                <td>
                  Workshops organised as part of Day 3 Of Knoxis Design Fest
                </td>
              </tr>
              <tr class="para1">
                <td>11</td>
                <td>05.04.2023</td>
                <td>Dr. Anunaya Chaubey</td>
                <td>
                  Interactive session with Dr. Anunaya Chaubey regarding Anant
                  University's flagship program, Anant Fellowship
                </td>
              </tr>
              <tr class="para1">
                <td>12</td>
                <td>28.10. 2022</td>
                <td>Debabrata Rajkumar</td>
                <td>
                  Interactive Session on climate Change and Waste Management
                </td>
              </tr>
              <tr class="para1">
                <td>13</td>
                <td>11.10. 2022</td>
                <td>Mr. Ashish Agarwal, Entrepreneur</td>
                <td>
                  Interactive session with renowned entrepreneur Mr. Ashish
                  Agarwal
                </td>
              </tr>
              <tr class="para1">
                <td>14</td>
                <td>20.08.2019 - 21.08. 2019</td>
                <td>Ar. Pragati Goyal</td>
                <td>
                  Orientation Programme for Freshers of RSA, RSFT, RSD, RSFA
                </td>
              </tr>
              <tr class="para1">
                <td>15</td>
                <td>16.08. 2019</td>
                <td>Nilakshi More</td>
                <td>Orientation Programme for Freshers of RSA, RSD</td>
              </tr>
              <tr class="para1">
                <td>16</td>
                <td>6-8.03.2019</td>
                <td>Prof. Abhijit Shirodkar</td>
                <td>Interactive session</td>
              </tr>
              <tr class="para1">
                <td>17</td>
                <td>24-25.01.2019</td>
                <td>Trailokya Hazarika</td>
                <td>
                  Birla White Cement Competitions: 1. Yuvaratna, 2. Yuvaratna Nxt
                </td>
              </tr>
              <tr class="para1">
                <td>18</td>
                <td>21-23.01. 2019</td>
                <td>
                  Asoke Sengupta, Gaurav Dalmia, Pragyan Dowerah, Parijit Phukan
                </td>
                <td>Meditation Workshop by Heartfulness Foundation</td>
              </tr>
              <tr class="para1">
                <td>19</td>
                <td>7.08.2018</td>
                <td>Ashish Batliwala</td>
                <td>3D priniting Workshop</td>
              </tr>
              <tr class="para1">
                <td>20</td>
                <td>30.07.2018</td>
                <td>Pankaj Bhattacharjee, Greenlam</td>
                <td>Workshop on Laminates</td>
              </tr>
              <tr class="para1">
                <td>21</td>
                <td>5.02.2018</td>
                <td>Dr. Repaul Kanji, IIT Roorkee</td>
                <td>Workshop' Awareness of Disaster Mitigation & Management'.</td>
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
          <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Click More</h3>
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
              <th class="text-white">S.NO.</th>
              <th class="text-white">POSITION IN S-BOS</th>
              <th class="text-white">NAME AND DESIGNATION</th>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr class="para1">
                <td>1</td>
                <td>Chairperson (Ex-Officio) Dean of School</td>
                <td>Prof. (Dr.) Hari Prasad Agarwal, Principal, RSA</td>
              </tr>
              <tr class="para1">
                <td>2</td>
                <td>Professors of the School Members (Ex-Officio)</td>
                <td>Ar. Siddhartha Deb, Professor</td>
              </tr>
              <tr class="para1">
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. (Dr.) Abhijit Shirodkar, Dean, School of Architecture &
                  Planning, Woxsen University, Kamkole, Sadasivpet, District
                  Sangareddy, Telangana 502345
                </td>
              </tr>
              <tr class="para1">
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>
                  Ar. Ranel Kumar Das, Founder & Principal Architect of Ranel
                  Associates Architects, B. Baruah Road, Ullubari, Guwahati-07
                </td>
              </tr>
              <tr class="para1">
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>Ar. Kasturi Borah, Associate Professor, RSA</td>
              </tr>
              <tr class="para1">
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
            <thead class="text-white align-middle" style="background-color: #27467a;">
              <th class="text-white">#</th>
              <th class="text-white">Content</th>
              <th class="text-white">Name of the Member</th>
              <th class="text-white">Designation</th>
              <th class="text-white">Designation in the committee</th>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Head of the Department</td>
                <td>Dr. Hari Prasad Agarwal, RSA</td>
                <td>Professor</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td rowspan="2">2</td>
                <td rowspan="2" class="align-middle">Two Professors</td>
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
                <td rowspan="2" class="align-middle">
                  Two Associate Professors – one of them will be the member
                  secretary
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
                <td rowspan="2" class="align-middle">
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
                <td rowspan="3" class="align-middle">
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
                        href="assets/Departmentalpdf/AY 2023-24 B.ARCH.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2023-24 B.ARCH.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2022-23 B.ARCH.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i> AY 2022-23 B.ARCH.pdf
                        <i class="fa fa-download"></i>
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
                      ><strong>Click to View...</strong></a
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

                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            "I am happy to say that I am an alumni of Royal Global
                            University, Guwahati, Assam, a magnificent temple of
                            knowledge. I was overjoyed to be accepted into this
                            architecture program. I had always wanted to graduate
                            from an institution with collaborative faculty,
                            advanced facilities, a sizable library, advanced
                            technology, first-rate exposure to the architectural
                            profession, and a campus equipped with all the
                            necessities—food court, canteen, stationery, beauty
                            salon, etc."
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/DevleenaHazarika.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Devleena Hazarika
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture<br />Batch
                                :2018-23
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

                            src="assets/img/testimonial/2.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            "I am profoundly thankful for my time at Royal Global
                            University, where I completed my architecture degree.
                            The exceptional guidance and support from the faculty
                            were instrumental in shaping my academic and
                            professional development. The comprehensive education
                            and experience I gained at the university not only
                            prepared me for success in architecture but also
                            bolstered my confidence in all aspects of life. Now,
                            as I pursue my masters degree, I proudly reflect on my
                            roots at such a distinguished institution."
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/GYANDEEP_CHAKRAVORTY_RSA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Gyandeep Chakravorty
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture<br />Batch
                                :2018-23
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

                            src="assets/img/testimonial/3.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “I'm a B.Arch graduate from Royal School of
                            Architecture, Royal Global University. My time here
                            has been nothing short of transformative. The rigorous
                            curriculum, coupled with hands-on learning experiences
                            and expert guidance from faculty members, has equipped
                            me with a robust foundation in architectural design
                            and theory. The emphasis on creativity and innovation,
                            coupled with a diverse and inclusive environment, has
                            prepared me to confidently pursue my passion for
                            architecture. I'm grateful for the holistic education,
                            exposure."
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/NikitaKashyap.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Nikita Kashyap
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture <br />Batch
                                :2018-23
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

                            src="assets/img/testimonial/4.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “The Five years spent in RGU were truely amazing and
                            inspiring years of my life where I get to explore,
                            grow and learn, professionally and personally.”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/LOREENKHONGWIR_RSA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Loreen Khongwir
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture <br />Batch
                                :2018-23
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

                            src="assets/img/testimonial/3.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “The professor of RSA B.Arch program are very
                            committed and exemplary in academia as well as
                            professional lives.Made my experience at RSA very
                            wonderful and enlightened me into a wonderful
                            journey."
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/BUPRABEBBARMA_RSA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Bupra Debbarma
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture<br />Batch
                                :2017-22
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
                            “My time at Royal Global University was truely
                            transformative. The university’s modern facilities,
                            provided an exceptional learning environment. The
                            dedicated and knowledgeable faculty were instrumental
                            in guiding my academic journey and honing my skills."
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/THEJAZENOPAPHINO_RSA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Thejazeno Paphino
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture<br />Batch
                                :2017-22
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

                            src="assets/img/testimonial/2.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “To become an Architect was my dream, and this dream
                            was fulfilled because of The Assam Royal Global
                            University. RGU gave me an opportunity to excel in my
                            area of interest. The years that I spent here have
                            helped me grow professionally and personally. My
                            sincere appreciation and gratitude to the Department
                            of Architecture and the whole staff for their efforts
                            in imparting quality technical and aptitude learning.
                            The faculty members helped me to create my
                            professional career."
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Architecture/DRISTYBORA_RSA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Dristy Bora
                              </h4>
                              <p class="bio kd-para-1">
                                RSA ,Royal School of Architecture<br />Batch
                                :2017-22
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
