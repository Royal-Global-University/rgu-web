@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-civil/s2-bg-img-1.webp);">
          <div class="mobile" >
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" class="pb-3" src="mobile-assets/dept-civil/mobile-civil.png" alt="">

           <div class="container pb-5">

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          5. Events & Achievements
        </h3>
        <div>
          <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
            DEPARTMENT OF CIVIL ENGINEERING
          </h3>
          <div class="table-responsive">
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">
                  Date and year of the programme
                </th>
                <th class="font-weight-bold text-white">Name of the School</th>
                <th class="font-weight-bold text-white">
                  Name of the Department
                </th>
                <th class="font-weight-bold text-white">
                  Title of the professional Development Training programmes
                  (FDP/Workshop/Refresher Course/Short Term Course etc.)
                </th>
                <th class="font-weight-bold text-white">Year of the programme</th>
                <th class="font-weight-bold text-white">
                  Type of the programme (eg. FDP, Workshop etc.)
                </th>
                <th class="font-weight-bold text-white">Online/Offline</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>7th October 2024</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - Vegetation: A key player in climate change
                  mitigation by Dr. Jyotirmoy Barman, Killam Post doctoral fellow,
                  University of British Columbia, Canada.
                </td>
                <td class="text-center">2024</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>2</td>
                <td>7th March 2024</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - Water Resource Planning and Mangement in NER by Mr.
                  Gopal Chetri, Deputy Secretary, Irrigation Department, Govt. of
                  Assam.
                </td>
                <td class="text-center">2024</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>3</td>
                <td>7th December 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Inauguration of the Student Chapter of The Institute of
                  Engineers (India), Assam State centre by Chairman Dr. N.N.
                  Patwari and Honorary. Secretary Pulak Sarmah
                </td>
                <td class="text-center">2023</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>4</td>
                <td>6th June 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Inauguration of the Student Chapter of The Institute of
                  Engineers (India), Assam State centre by Chairman Dr. N.N.
                  Patwari and Honorary. Secretary Pulak Sarmah
                </td>
                <td class="text-center">2023</td>
                <td>Inauguration and Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>5</td>
                <td>18th September 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - The Reclaimed Asphalt as a Suitable Material for the
                  Forest Roads Reinforcement by Dr. Jaroslav Blahuta, Research
                  Fellow of Mendel University, Brno, Czech Republic.
                </td>
                <td class="text-center">2023</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>6</td>
                <td>10th April 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - From Theory to Practice: Implementing Eathquake
                  Engineering Principles in Building Design by Dr. Snehal Kaushik,
                  GIMT, Guwahati.
                </td>
                <td class="text-center">2023</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>7</td>
                <td>7th October 2024</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - Vegetation: A key player in climate change
                  mitigation by Dr. Jyotirmoy Barman, Killam Post doctoral fellow,
                  University of British Columbia, Canada.
                </td>
                <td class="text-center">2024</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>8</td>
                <td>11th April 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A Surveying Camp was held for the B.Tech Civil Engineering 4th
                  Semester students by the Department of Civil Engineering, RSET.
                  The students were trained using latest equipment used in modern
                  surveying. They learned handling and processing data using Total
                  Station used widely in the industry for terrestrial surveying.
                </td>
                <td class="text-center">2023</td>
                <td>Workshop</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>9</td>
                <td>29th June 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on – A Model-Data Fusion Framework for Probabilistic
                  Analysis of Civil Infrastructures by Dr. Siddharth S. Parida,
                  Embry-Riddle Aeronautical University, Florida.
                </td>
                <td class="text-center">2021</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>10</td>
                <td>29th June 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Digital Construction by Darshan Teredesai, Co-Founder
                  at Vadcore Pune, India
                </td>
                <td class="text-center">2021</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>11</td>
                <td>10th May 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on – The recent M6.4 Assam Earthquake and its lessons by
                  Prof. Hemant B. Kaushik, IIT Guwahati.
                </td>
                <td class="text-center">2021</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>

              <tr>
                <td>12</td>
                <td>17th March 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>Software Training Workshop by CAD DESK Guwahati</td>
                <td class="text-center">2021</td>
                <td>Workshop</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>13</td>
                <td>4th August 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on - Use of Geospatial Application in the Era of Modern
                  Technology by Mr. Amar Satpathy, Senior Manager, GIS Solutions,
                  Scanpoint Geomatics Ltd.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>14</td>
                <td>21st July -28th July 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Emerging Prospects of STEM Education in Engineering &amp;
                  Technology -RGU,Ghy
                </td>
                <td class="text-center">2020</td>
                <td>FDP</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>15</td>
                <td>9th July 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Irrigation Development in Assam by Ashok Thakuria,
                  Director, Planning, Irrigation Department, Govt. of Assam
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>16</td>
                <td>6th July 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on National Building Code (NBC) -Building Byelaws and
                  Role of Civil Engineers by Jyotirindra Narayan Khataniar,
                  Architect and Structural Engineer, Srishtie Consultant, Guwahati
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>17</td>
                <td>23rd June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Recent Advances in Strain Hardening Ultra-High Performance
                  Concrete by Dr. Ketan Ragalwar, Project Engineer, Schnabel
                  Engineering, USA.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>18</td>
                <td>18th June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Integrated Flood Modelling using MIKE FLOOD by Mr.
                  Manish Kumar, Senior Engineer, Danish Hydraulic Institute (DHI)
                  Group, India.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>19</td>
                <td>12th June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Machine Learning Techniques in Identification of
                  Potential Landslide by Dr. S. D. Anitha Kumari, M S Ramaiah
                  University of Applied Sciences, Bengaluru.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>20</td>
                <td>06th June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Let us understand Concrete by Dr. Bipul Talukdar,
                  Assam Engineering College, Guwahati, Assam.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>21</td>
                <td>7th May 2019</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A demonstration on the software “Midas” on the modelling of
                  high-rise structures and building - by Dr. M Pathak, CEO, EREC
                  India Research Laboratory, Guwahati
                </td>
                <td class="text-center">2019</td>
                <td>Workshop</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>22</td>
                <td>2nd September 2018</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A technical session on slope stablity and landslides- Dr.
                  Arindam Dey, IIT Guwahati
                </td>
                <td class="text-center">2018</td>
                <td>Technical session</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>23</td>
                <td>20th August 2018</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Workshop on Road design using Mx Road software in association
                  with Bentley Institute, New Delhi
                </td>
                <td class="text-center">2018</td>
                <td>Workshop</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>24</td>
                <td>19th March 2018</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A Talk on Modelling and Analysis of high rise building by Dr. D
                  Buragohain, IIT Guwahati
                </td>
                <td class="text-center">2018</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>


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

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          7. The Board of Studies (BoS)
        </h3>
        <div class="table-responsive">
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
                <td>
                  Mr. Rishikesh Duarah, Assistant Professor, Civil Engineering
                </td>
              </tr>
              <tr>
                <td rowspan="8" class="align-middle">2</td>
                <td rowspan="8" class="align-middle">
                  All Faculty members of the Department Members (Ex-Officio)
                </td>
                <td>Mr. Yudhajit Dey, Assistant Professor</td>
              </tr>
              <tr>
                <td>Mr. Chandra Upadhaya, Assistant Professor</td>
              </tr>
              <tr>
                <td>Dr. Shehnaz Ara Rahman, Assistant Professor</td>
              </tr>
              <tr>
                <td>Ms Antara Banerjee, Assistant Professor</td>
              </tr>
              <tr>
                <td>Ms Jemima Yasmin, Assistant Professor</td>
              </tr>
              <tr>
                <td>Ms. Raisa Tamsin Hussain, Assistant Professor</td>
              </tr>
              <tr>
                <td>Mr. Bhabatosh Hazarika, Assistant Professor</td>
              </tr>
              <tr>
                <td>Mr. Rajesh Deb, Assistant Professor</td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Expert (Academic)</td>
                <td>
                  Dr Bhibash Sarma, Professor, DoCE, Assam Engineering College,
                  Ghy
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Expert (Industry)</td>
                <td>
                  Mr. Khagen Chandra Nath, Executive Engineer, Dept. of
                  Irrigation, GoA
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          8. The Departmental Research Committee (DRC)
        </h3>
        <div class="table-responsive">
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
                <td>1</td>
                <td>Head of the Department</td>
                <td>Prof. (Dr.) Arnab Sarma</td>
                <td>Professor</td>
                <td>On lien.</td>
              </tr>
              <tr>
                <td>2</td>
                <td></td>
                <td>Prof.(Dr.) Ankur Ganguly</td>
                <td>Professor,<br />Dean of School</td>
                <td>Chairperson- (in absence of HoD)</td>
              </tr>
              <tr>
                <td rowspan="2">3</td>
                <td rowspan="2" class="align-middle">
                  Two Assistant Professors holding Ph.D. degree
                </td>
                <td>Dr. Shehnaz Ara Rahman</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>Dr. Bonisha Borah</td>
                <td>Assistant Professor</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="3">4</td>
                <td rowspan="3" class="align-middle">
                  Three external members not below the rank of Professors,
                  including members from an allied department, who will be
                  nominated by the URC
                </td>
                <td>Prof.(Dr.) Hari Prasad Agarwal</td>
                <td>Dean, Royal School of Architecture</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof.(Dr.) Anuradha Devi</td>
                <td>Dean, Royal School of Applied and Pure Sciences</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof.(Dr.) Bibhash Sarma</td>
                <td>
                  Professor, Department of Civil Engineering, Assam Engineering
                  College
                </td>
                <td>External Member</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


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
                        href="assets/Departmentalpdf/AY 2023-24 B Tech Civil Engineering.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2023-24 B Tech Civil
                        Engineering.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2024-25 B.Tech Civil Engineering_new.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2024-25 B.Tech Civil
                        Engineering.pdf <i class="fa fa-download"></i>
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
                  <div class="accordion-body">
                    <div class="row">
                      <a
                        href="assets/Departmentalpdf/Old Syllabus M. TECH CE (SE).pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>Old Syllabus M. TECH CE
                        (SE).pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus M.TECH.(CE-WRDM).pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>Old Syllabus
                        M.TECH.(CE-WRDM).pdf <i class="fa fa-download"></i>
                      </a>
                    </div>
                  </div>
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

          <div class="website">
            @include('frontend/components/aheader')
          <img class="pb-3" src="mobile-assets/dept-civil/web-civil.png" alt="">

        <div class="container pb-5">

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          5. Events & Achievements
        </h3>
        <div>
          <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
            DEPARTMENT OF CIVIL ENGINEERING
          </h3>
          <div class="table-responsive">
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">
                  Date and year of the programme
                </th>
                <th class="font-weight-bold text-white">Name of the School</th>
                <th class="font-weight-bold text-white">
                  Name of the Department
                </th>
                <th class="font-weight-bold text-white">
                  Title of the professional Development Training programmes
                  (FDP/Workshop/Refresher Course/Short Term Course etc.)
                </th>
                <th class="font-weight-bold text-white">Year of the programme</th>
                <th class="font-weight-bold text-white">
                  Type of the programme (eg. FDP, Workshop etc.)
                </th>
                <th class="font-weight-bold text-white">Online/Offline</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>7th October 2024</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - Vegetation: A key player in climate change
                  mitigation by Dr. Jyotirmoy Barman, Killam Post doctoral fellow,
                  University of British Columbia, Canada.
                </td>
                <td class="text-center">2024</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>2</td>
                <td>7th March 2024</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - Water Resource Planning and Mangement in NER by Mr.
                  Gopal Chetri, Deputy Secretary, Irrigation Department, Govt. of
                  Assam.
                </td>
                <td class="text-center">2024</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>3</td>
                <td>7th December 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Inauguration of the Student Chapter of The Institute of
                  Engineers (India), Assam State centre by Chairman Dr. N.N.
                  Patwari and Honorary. Secretary Pulak Sarmah
                </td>
                <td class="text-center">2023</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>4</td>
                <td>6th June 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Inauguration of the Student Chapter of The Institute of
                  Engineers (India), Assam State centre by Chairman Dr. N.N.
                  Patwari and Honorary. Secretary Pulak Sarmah
                </td>
                <td class="text-center">2023</td>
                <td>Inauguration and Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>5</td>
                <td>18th September 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - The Reclaimed Asphalt as a Suitable Material for the
                  Forest Roads Reinforcement by Dr. Jaroslav Blahuta, Research
                  Fellow of Mendel University, Brno, Czech Republic.
                </td>
                <td class="text-center">2023</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>6</td>
                <td>10th April 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - From Theory to Practice: Implementing Eathquake
                  Engineering Principles in Building Design by Dr. Snehal Kaushik,
                  GIMT, Guwahati.
                </td>
                <td class="text-center">2023</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>7</td>
                <td>7th October 2024</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A talk on - Vegetation: A key player in climate change
                  mitigation by Dr. Jyotirmoy Barman, Killam Post doctoral fellow,
                  University of British Columbia, Canada.
                </td>
                <td class="text-center">2024</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>8</td>
                <td>11th April 2023</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A Surveying Camp was held for the B.Tech Civil Engineering 4th
                  Semester students by the Department of Civil Engineering, RSET.
                  The students were trained using latest equipment used in modern
                  surveying. They learned handling and processing data using Total
                  Station used widely in the industry for terrestrial surveying.
                </td>
                <td class="text-center">2023</td>
                <td>Workshop</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>9</td>
                <td>29th June 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on – A Model-Data Fusion Framework for Probabilistic
                  Analysis of Civil Infrastructures by Dr. Siddharth S. Parida,
                  Embry-Riddle Aeronautical University, Florida.
                </td>
                <td class="text-center">2021</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>10</td>
                <td>29th June 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Digital Construction by Darshan Teredesai, Co-Founder
                  at Vadcore Pune, India
                </td>
                <td class="text-center">2021</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>11</td>
                <td>10th May 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on – The recent M6.4 Assam Earthquake and its lessons by
                  Prof. Hemant B. Kaushik, IIT Guwahati.
                </td>
                <td class="text-center">2021</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>

              <tr>
                <td>12</td>
                <td>17th March 2021</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>Software Training Workshop by CAD DESK Guwahati</td>
                <td class="text-center">2021</td>
                <td>Workshop</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>13</td>
                <td>4th August 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on - Use of Geospatial Application in the Era of Modern
                  Technology by Mr. Amar Satpathy, Senior Manager, GIS Solutions,
                  Scanpoint Geomatics Ltd.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>14</td>
                <td>21st July -28th July 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Emerging Prospects of STEM Education in Engineering &amp;
                  Technology -RGU,Ghy
                </td>
                <td class="text-center">2020</td>
                <td>FDP</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>15</td>
                <td>9th July 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Irrigation Development in Assam by Ashok Thakuria,
                  Director, Planning, Irrigation Department, Govt. of Assam
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>16</td>
                <td>6th July 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on National Building Code (NBC) -Building Byelaws and
                  Role of Civil Engineers by Jyotirindra Narayan Khataniar,
                  Architect and Structural Engineer, Srishtie Consultant, Guwahati
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>17</td>
                <td>23rd June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Recent Advances in Strain Hardening Ultra-High Performance
                  Concrete by Dr. Ketan Ragalwar, Project Engineer, Schnabel
                  Engineering, USA.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>18</td>
                <td>18th June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Integrated Flood Modelling using MIKE FLOOD by Mr.
                  Manish Kumar, Senior Engineer, Danish Hydraulic Institute (DHI)
                  Group, India.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>19</td>
                <td>12th June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Machine Learning Techniques in Identification of
                  Potential Landslide by Dr. S. D. Anitha Kumari, M S Ramaiah
                  University of Applied Sciences, Bengaluru.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>20</td>
                <td>06th June 2020</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Webinar on Let us understand Concrete by Dr. Bipul Talukdar,
                  Assam Engineering College, Guwahati, Assam.
                </td>
                <td class="text-center">2020</td>
                <td>Webinar</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>21</td>
                <td>7th May 2019</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A demonstration on the software “Midas” on the modelling of
                  high-rise structures and building - by Dr. M Pathak, CEO, EREC
                  India Research Laboratory, Guwahati
                </td>
                <td class="text-center">2019</td>
                <td>Workshop</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>22</td>
                <td>2nd September 2018</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A technical session on slope stablity and landslides- Dr.
                  Arindam Dey, IIT Guwahati
                </td>
                <td class="text-center">2018</td>
                <td>Technical session</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>23</td>
                <td>20th August 2018</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  Workshop on Road design using Mx Road software in association
                  with Bentley Institute, New Delhi
                </td>
                <td class="text-center">2018</td>
                <td>Workshop</td>
                <td>Offline</td>
              </tr>
              <tr>
                <td>24</td>
                <td>19th March 2018</td>
                <td>RSET</td>
                <td>Civil Engineering</td>
                <td>
                  A Talk on Modelling and Analysis of high rise building by Dr. D
                  Buragohain, IIT Guwahati
                </td>
                <td class="text-center">2018</td>
                <td>Talk</td>
                <td>Offline</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>


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

    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          7. The Board of Studies (BoS)
        </h3>
        <div class="table-responsive">
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
                <td>
                  Mr. Rishikesh Duarah, Assistant Professor, Civil Engineering
                </td>
              </tr>
              <tr>
                <td rowspan="8" class="align-middle">2</td>
                <td rowspan="8" class="align-middle">
                  All Faculty members of the Department Members (Ex-Officio)
                </td>
                <td>Mr. Yudhajit Dey, Assistant Professor</td>
              </tr>
              <tr>
                <td>Mr. Chandra Upadhaya, Assistant Professor</td>
              </tr>
              <tr>
                <td>Dr. Shehnaz Ara Rahman, Assistant Professor</td>
              </tr>
              <tr>
                <td>Ms Antara Banerjee, Assistant Professor</td>
              </tr>
              <tr>
                <td>Ms Jemima Yasmin, Assistant Professor</td>
              </tr>
              <tr>
                <td>Ms. Raisa Tamsin Hussain, Assistant Professor</td>
              </tr>
              <tr>
                <td>Mr. Bhabatosh Hazarika, Assistant Professor</td>
              </tr>
              <tr>
                <td>Mr. Rajesh Deb, Assistant Professor</td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Expert (Academic)</td>
                <td>
                  Dr Bhibash Sarma, Professor, DoCE, Assam Engineering College,
                  Ghy
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Expert (Industry)</td>
                <td>
                  Mr. Khagen Chandra Nath, Executive Engineer, Dept. of
                  Irrigation, GoA
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div>
      <div>
        <h3
          class="headd3 text-dark fw-bold p-3"
          style="background-color: #c7daf9; color: #ffffff"
        >
          8. The Departmental Research Committee (DRC)
        </h3>
        <div class="table-responsive">
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
                <td>1</td>
                <td>Head of the Department</td>
                <td>Prof. (Dr.) Arnab Sarma</td>
                <td>Professor</td>
                <td>On lien.</td>
              </tr>
              <tr>
                <td>2</td>
                <td></td>
                <td>Prof.(Dr.) Ankur Ganguly</td>
                <td>Professor,<br />Dean of School</td>
                <td>Chairperson- (in absence of HoD)</td>
              </tr>
              <tr>
                <td rowspan="2">3</td>
                <td rowspan="2" class="align-middle">
                  Two Assistant Professors holding Ph.D. degree
                </td>
                <td>Dr. Shehnaz Ara Rahman</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>Dr. Bonisha Borah</td>
                <td>Assistant Professor</td>
                <td></td>
              </tr>
              <tr>
                <td rowspan="3">4</td>
                <td rowspan="3" class="align-middle">
                  Three external members not below the rank of Professors,
                  including members from an allied department, who will be
                  nominated by the URC
                </td>
                <td>Prof.(Dr.) Hari Prasad Agarwal</td>
                <td>Dean, Royal School of Architecture</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof.(Dr.) Anuradha Devi</td>
                <td>Dean, Royal School of Applied and Pure Sciences</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof.(Dr.) Bibhash Sarma</td>
                <td>
                  Professor, Department of Civil Engineering, Assam Engineering
                  College
                </td>
                <td>External Member</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


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
                        href="assets/Departmentalpdf/AY 2023-24 B Tech Civil Engineering.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2023-24 B Tech Civil
                        Engineering.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2024-25 B.Tech Civil Engineering_new.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2024-25 B.Tech Civil
                        Engineering.pdf <i class="fa fa-download"></i>
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
                  <div class="accordion-body">
                    <div class="row">
                      <a
                        href="assets/Departmentalpdf/Old Syllabus M. TECH CE (SE).pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>Old Syllabus M. TECH CE
                        (SE).pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus M.TECH.(CE-WRDM).pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>Old Syllabus
                        M.TECH.(CE-WRDM).pdf <i class="fa fa-download"></i>
                      </a>
                    </div>
                  </div>
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
          </div>
@endsection
