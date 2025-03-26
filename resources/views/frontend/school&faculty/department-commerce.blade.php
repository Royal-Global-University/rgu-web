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
            Department of Commerce
          </h1>
          <h2 class="headd2 text-dark kd-split-text">
            Royal School of Commerce (RSC)
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
          The Royal School of Commerce (RSC) under The Royal Global University
          since its inception in 2011 (erstwhile Royal Group of Institutions under
          Gauhati University) has been a leader in providing higher education in
          the field of Commerce. It offers Undergraduate, Postgraduate and PhD
          programmes. In order to facilitate the students to prepare for
          CA/CS/ICWA, the school also runs morning batches. Over these years, RSC
          has produced many distinguished professionals and entrepreneurs. RSC has
          eminent faculty who have substantial academic and professional
          experience. Apart from providing B.Com. with specialisation in
          Accountancy and Management the School has also tied up with institutes
          of National and International repute like ISDC and ICA to run
          specialised courses like B.Com. with CMA, B.Com. with ACCA, and B.Com.
          (Finance). M. Com with specialization in Accounting, Finance and
          Management and Ph.D. Programme also come under the umbrella of RSC. All
          the programmes are embedded with internship opportunities and placement
          assistance. The school follows interdisciplinary approach and practices,
          which equip the students for successful entrepreneurial journey and
          exciting careers both in India and abroad.
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
          To impart quality education in commerce to create economically and
          socially responsible global citizens.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To achieve innovative, research intensive and industry-oriented
            teaching learning methodologies.
          </li>
          <li>
            To develop socially responsible entrepreneurs, managers,
            professionals, academicians, and researchers.
          </li>
          <li>
            To inculcate ethical and value-based business practices for
            sustainable development with a global outlook.
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
              src="assets/img/Departments/Department_Commerce/BCom.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Commerce/BCom2.jpg"
            />
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Commerce/Mcom2.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Commerce/Mcom.jpg"
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
                <td>Raghav Agarwal</td>
                <td>2017-20 B.com</td>
                <td>Royal School of Commerce</td>
                <td>
                  Working at management level in M/S Murlidhar Agarwala &amp; Co
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/RaghavAgarwal.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Pranita Saha</td>
                <td>2018-21 B.com</td>
                <td>Royal School of Commerce</td>
                <td>
                  Working at IT &amp; Security Dept of Enfusion Softech India Pvt.
                  Ltd.
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/PranitaSaha.png"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Nasrin Saikia</td>
                <td>2017-19 M.com</td>
                <td>Royal School of Commerce</td>
                <td>Lecturer at Symbiosis Academy</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/NasrinSaikia.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Kallol Das</td>
                <td>2018-20 M.com</td>
                <td>Royal School of Commerce</td>
                <td>Working at Jet Skyesports Gamming Pvt Ltd.</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/KallolDas.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Shilpi Kumari</td>
                <td>2019-21 M.com</td>
                <td>Royal School of Commerce</td>
                <td>Self Employed in Janki Fashion Jewellery</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/ShilpiKumari.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Tanisha Roy</td>
                <td>2020-22 M.com</td>
                <td>Royal School of Commerce</td>
                <td>HR Executive in Fuel India Corporation</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/TanishaRoy.png"
                  />
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Priya Chakraborty</td>
                <td>2021-23 M.Com</td>
                <td>Royal School of Commerce</td>
                <td>Academic Counsellor in EDUxON</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/PriyaChakraborty.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>Winnona D Marak</td>
                <td>2018-20 M.Com</td>
                <td>Royal School of Commerce</td>
                <td>Lower Division Assistant in Meghalaya Secretariat</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/WinnonaDMarak.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>Keyush Swami</td>
                <td>2017-2020 B.Com</td>
                <td>Royal School of Commerce</td>
                <td>Owner- Gopal Maharaj</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/KeyushSwami.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Madhav Bajaj</td>
                <td>2017-2020 B.Com</td>
                <td>Royal School of Commerce</td>
                <td>Owner- Silver Drop Foods &amp; Beverages Pvt. Ltd.</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Commerce/MadhavBajaj.jpg"
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
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">DATE OF VISIT</th>
                <th class="font-weight-bold text-white">
                  NAME OF THE GUEST SPEAKER
                </th>
                <th class="font-weight-bold text-white">DESIGNATION</th>
                <th class="font-weight-bold text-white">PURPOSE OF VISIT</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>3/8/2018</td>
                <td>Dr. Polly Vauquline</td>
                <td>Associate Professor, Gauhati University</td>
                <td>
                  An Interactive Session on the occasion of International Womens's
                  Day on the topic Social Status and Empowerment of Women in the
                  Society
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>3/21/2018</td>
                <td>Roy Riddhinil</td>
                <td>Founder of Ne8x</td>
                <td>
                  An Interactive Session on the topic 'Perspectives of
                  Entrepreneurship in North-East India'
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>8/13/2018</td>
                <td>Mr.Swapnanil Talukdar</td>
                <td>Social Engineer</td>
                <td>
                  An Interactive Session on the topic 'Passion, Profession &amp;
                  Problems'
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>11/9/2018</td>
                <td>Mr. Hironmoy Gogoi</td>
                <td>Founder of 'Gaon Ka Khana'.</td>
                <td>
                  An interactive session to discuss about his journey as an
                  entrepreneur
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>12/10/2021</td>
                <td>Ms. Disha Sarkar</td>
                <td>
                  Resource Expert, United Nations Resource Centre, NE India UNESCO
                  Association, Guwahati.
                </td>
                <td>
                  An interactive session on Ecopreneurship: Synergising Climate
                  Action with Entrepreneurship
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>9/15/2022</td>
                <td>Dr.Samir Barua</td>
                <td></td>
                <td>
                  An interactive session on TRANSFORMING JOB SEEKERS INTO JOB
                  CREATORS
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>11/17/2022</td>
                <td>Mr. Kaushik Khanikar</td>
                <td>
                  Project Execution Officer NEEDP, Leads &amp; Projects
                  Management, IIM Calcutta Innovation Park
                </td>
                <td>
                  Interactive session on Entrepreneurship and Capacity Building.
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>12/19/2022</td>
                <td>CS Swati Tejawat</td>
                <td>Practising Chartered Accountant</td>
                <td>Workshop on 'E-filing of Income Tax Return'</td>
              </tr>
              <tr>
                <td>9</td>
                <td>2/13/2023</td>
                <td>CA Anil Kumar Agarwala and Dr. Seema Sharma</td>
                <td>
                  Dean, Faculty of Commerce and Management, Assam Down Town
                  University
                </td>
                <td>
                  An Interactive Panel Discussion on “UNION BUDGET 2023: PROSPECTS
                  AND PERSPECTIVES
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>28-02-2023 &amp;15 /03/2023</td>
                <td>Prachi Sharma</td>
                <td>Financial Adviser</td>
                <td>
                  Interactive session on 'Fair Fortune' and Training workshop on
                  interview skills, personal grooming and basic road behaviour
                </td>
              </tr>
              <tr>
                <td>11</td>
                <td>3/22/2023</td>
                <td>Prof. (Dr. ) C. Rajkumar</td>
                <td>Hon'ble Vice Chancellor, OP Jindal University</td>
                <td>Lecture session on Career Prospect in Higher Education</td>
              </tr>
              <tr>
                <td>12</td>
                <td>3/27/2023</td>
                <td>CS Tripti Bihani</td>
                <td>CS</td>
                <td>
                  Interactive session on the topic "Significance of Intellectual
                  Property Rights In Present Era"
                </td>
              </tr>
              <tr>
                <td>13</td>
                <td>8/23/2023</td>
                <td>CS Harsh Baid.</td>
                <td>CS</td>
                <td>A workshop on "FINANCIAL LITERACY"</td>
              </tr>
              <tr>
                <td>14</td>
                <td>12/20/2023</td>
                <td>Dr. Sharan Kumar Shetty</td>
                <td>Certified Trainer CMA-USA and ACCA</td>
                <td>
                  A Guest Talk on the topic 'Unleashing the Potential for Personal
                  Finance '
                </td>
              </tr>
              <tr>
                <td>15</td>
                <td>12/21/2023</td>
                <td>Ms Seema Sarma</td>
                <td>CS</td>
                <td>Workshop on E - Filing of Income Tax Return</td>
              </tr>
              <tr>
                <td>16</td>
                <td>3/15/2024</td>
                <td>CA Meghdoot A. Karnik</td>
                <td>
                  Director of the School of Banking, Financial Services and
                  Insurance (BSFI) at Symbiosis University of Applied Sciences,
                  Indore
                </td>
                <td>Workshop on Financial Literacy and Stock Trading</td>
              </tr>
              <tr>
                <td>17</td>
                <td>3/23/2024</td>
                <td>Dr Sundaravardhan Venkatesh</td>
                <td>
                  Dean, School of Management and Entrepreneurship, Shiv Nadar
                  University, Delhi NCR
                </td>
                <td>
                  Graced as a Resource Person in a faculty development programme
                  on the topic 'Harnessing Research Skills for an Impactful
                  Career'
                </td>
              </tr>
              <tr>
                <td>18</td>
                <td>4/10/2024</td>
                <td>Dr Joyeeta Deb</td>
                <td>
                  Associate Professor, Department of Business Administration,
                  Assam University, Silchar
                </td>
                <td>
                  Graced as a resource person in a talk on 'Fostering
                  Entrepreneurship in North East India: Exploring Prospects and
                  Challenges
                </td>
              </tr>
              <tr>
                <td>19</td>
                <td>3/27/2024</td>
                <td>Dr. Manu Melwin Joy</td>
                <td>Assistant Professor, School of Management Studies, CUSAT</td>
                <td>
                  Done a Session on the topic 'Learning in the Vuca World through
                  Gamification'
                </td>
              </tr>
              <tr>
                <td>20</td>
                <td>5/24/2024</td>
                <td>Mr. Pawan Kumar Agarwalla</td>
                <td>CEO and Founder, Datamation Services, Guwahati</td>
                <td>
                  An Interactive Session on 'From Vision to Victory: The Inspiring
                  Story of Datamation's Rise to Prominence'
                </td>
              </tr>
              <tr>
                <td>21</td>
                <td>8/8/2024</td>
                <td>CA Pankaj Jain</td>
                <td>CA</td>
                <td>
                  A Guest Talk on the topic 'Google Tools and AI for Business
                  Management'
                </td>
              </tr>
              <tr>
                <td>22</td>
                <td>9/3/2024</td>
                <td>Prof Kalyan Adak</td>
                <td>
                  Professor of Department of Commerce at Government Hrangbana
                  College
                </td>
                <td>
                  An Interactive Session on the topic Beginners Blueprint:
                  Navigating the World of Entrepreneurship
                </td>
              </tr>
              <tr>
                <td>23</td>
                <td>9/12/2024</td>
                <td>CS Anshuman Baruah &amp; CS Manoj Rawniar</td>
                <td>CA &amp; CS</td>
                <td>
                  A Career Awareness Program Career as a Company Secretary and
                  Prospects of One Person Company and Small Company in the North-
                  East Region
                </td>
              </tr>
              <tr>
                <td>24</td>
                <td>9/19/2024</td>
                <td>Dr Bhaskar Kumar Kakoty</td>
                <td>
                  Consultant and Course Coordinator of Indian Institude of
                  Entrepreneurship
                </td>
                <td>
                  An Interactive Session on the topic Environmental Sustainability
                </td>
              </tr>
              <tr>
                <td>25</td>
                <td>9/23/2024</td>
                <td>N Alphaba Singh</td>
                <td>Yoga Therapist and Instructor</td>
                <td>
                  An Interactive Session on the topic Yoga and Health in our Daily
                  Life
                </td>
              </tr>
              <tr>
                <td>26</td>
                <td>9/23/2024</td>
                <td>CS Kushal Bagaria</td>
                <td>CS</td>
                <td>A Session on communication Skills</td>
              </tr>
              <tr>
                <td>27</td>
                <td>9/26/2024</td>
                <td>Ms. Jahnabi Goswami</td>
                <td>
                  HIV Aids Activist and the President of Assam Network of Positive
                  People
                </td>
                <td>
                  An Interactive Session on the topic AIDS Awareness Program
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
                <td>Prof. (Dr.) George A.P, Dean, RSC &amp; RSB</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Member (Ex-Officio)</td>
                <td>Dr. Aruna Dev Rroy, HOD, RSC</td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. Amrit Pal Singh, Professor, Dept. of Commerce, Gauhati
                  University
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>
                  Mr. Manoj K. Bajaj, Director and proprietor, Green
                  vellyRiceTechLtd.
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Dr. Sudip Chakraborty, Dy. Dean, RSC
                  <hr />
                  Ms. Baishali Pathak, Assistant Professor, RSC
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>
                  Registrar, Member Secretary (Ex-officio)/Registrar nominee
                </td>
                <td>
                  Mr. Jugal Kishore Bhattacharya, Assistant Professor, Department
                  of Economics and Assistant CoE
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
                <td>Dr. Aruna Dev Rroy</td>
                <td>Associate Professor, HOD, RSC</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Two Professors</td>
                <td>Dr. George A.P.</td>
                <td>Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>
                  Two Associate Professors – one of them will be the member
                  secretary
                </td>
                <td>Dr Sudip Chakraborty</td>
                <td>Associate Professor</td>
                <td>Member Secretary</td>
              </tr>
              <tr>
                <td rowspan="2">4.</td>
                <td rowspan="2" class="align-middle">
                  Two Assistant Professors holding Ph.D. degree
                </td>
                <td>Dr. Rajdeep Nag</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>Dr. Pinak Deb</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td rowspan="3">5.</td>
                <td rowspan="3" class="align-middle">
                  Three external members not below the rank of Professors,
                  including members from an allied department, who will be
                  nominated by the URC
                </td>
                <td>Prof. (Dr.) Soumitra Sen</td>
                <td>Professor, RSHM &amp; RSTTM</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. (Dr.) Anuradha Devi</td>
                <td>Professor, RSAPS</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>Prof. (Dr.) Kamal Debnath</td>
                <td>Professor, Mathematics, RSAPS</td>
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
                        href="assets/Departmentalpdf/B.Com 2022 (Updated).docx"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>B.Com 2022 (Updated).docx <i
                          class="fa fa-download"
                        ></i>
                      </a>

                      <a
                        href="assets/Departmentalpdf/B.Com  2023-24 (NEP).docx"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>B.Com 2023-24 (NEP).docx
                        <i class="fa fa-download"></i>
                      </a>

                      <a
                        href="assets/Departmentalpdf/B.Com ACCA 2024-25.docx"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>B.Com ACCA 2024-25.docx
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/B.Com CMA 2024-25.docx"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>B.Com CMA 2024-25.docx <i
                          class="fa fa-download"
                        ></i>
                      </a>

                      <a
                        href="assets/Departmentalpdf/B.Com F&A 2022-23.docx"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>B.Com F&A 2022-23.docx
                        <i class="fa fa-download"></i>
                      </a>

                      <a
                        href="assets/Departmentalpdf/B.Com ACCA 2024-25.docx"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>B.Com F&A 2023-24.docx
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
                  ><strong>
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
                      <a href="assets/Departmentalpdf/M.Com.docx" target="_blank">
                        <i class="fa fa-file-text px-2"></i>M.Com.docx <i
                          class="fa fa-download"
                        ></i>
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

                            src="assets/img/testimonial/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ My three years at Royal Global University have been
                            truly transformative. The university's excellent
                            infrastructure and vibrant campus environment provided
                            an ideal setting for both academic and personal
                            growth. The supportive and knowledgeable faculties
                            were always approachable, fostering a nurturing
                            atmosphere that encouraged learning and development.
                            The diverse range of opportunities available helped me
                            enhance my skills and grow as an individual. Overall,
                            my time at Royal Global University has been immensely
                            enriching, equipping me with the confidence and
                            capabilities to pursue my future endeavors. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/KhushiSharma .jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Khushi Sharma
                              </h4>
                              <p class="bio kd-para-1">
                                B.Com (H) Finance and Accounts <br />Batch:
                                2021-2024
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
                            “ It's an honor to be part of Royal Global University.
                            As a student from North East India I'm proud that we
                            have such an esteem University in our region which is
                            growing at an exponential rate. Being part of the
                            University has been a great blessing to me as it has
                            given me a holistic University experience and most
                            importantly the teachers are very approachable,
                            cooperative and has groomed me in such a way that I'm
                            able to make use of my theoretical and practical
                            knowledge of my subject Finance and Accounts in the
                            Corporate World. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/BrianBenjaminUriahLywait.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Brian Benjamin Uriah Lywait
                              </h4>
                              <p class="bio kd-para-1">
                                B.Com [H] Finance &amp; Accounts<br />Batch:2021-24
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
                            “ As a B.com(H) Finance &amp; Accounts student at The
                            Assam Royal Global University, my experience has been
                            enriching. The supportive and knowledgeable faculty
                            have guided me through a curriculum that blends
                            theoretical knowledge with practical application. They
                            have always provided a supportive environment for us
                            to grow individually.<br />
                            <p>
                              My program gave me an opportunity to work as a
                              finance intern in the renowned CA firm V.Singhi and
                              Associates during the last two semesters as a part
                              of my course. During the tenure of my internship, I
                              was given the opportunity to work on crucial
                              projects, which not only enhanced my practical
                              skills but became the stepping stone for my future
                              pursuits by framing my interest and skills in
                              research projects.
                            </p>
                            <br />
                            <p>
                              The Assam Royal Global University provides us with a
                              good environment and infrastructure to explore,
                              develop, and grow into our highest selves as
                              students.”
                            </p>
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/TanmayeeKapinjal.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Tanmayee Kapinjal
                              </h4>
                              <p class="bio kd-para-1">
                                B.com(H) Finance &amp; Accounts
                                <br />Batch:2021-24
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
                            “ I am proud to share that I am an alumnus of the
                            Royal Global University, Guwahati; it is a
                            distinguished institution renowned for its academic
                            excellence. Upon receiving my acceptance to the Royal
                            School of Commerce, I was overjoyed. It had always
                            been my aspiration to graduate from an institution
                            that boasts collaborative instructors,
                            state-of-the-art facilities, a comprehensive library,
                            a pristine and expansive campus, and a sizable
                            cafeteria offering hygienic cuisine. Royal Global
                            University seamlessly integrates all these attributes,
                            making it an exceptional place for higher learning. It
                            enhances the inner spirit and motivation of a student
                            to explore and experience various challenges and
                            opportunities in their academic life so as to
                            transform themselves into better personality in
                            future. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/SATABDIBAIDYA.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                SATABDI BAIDYA
                              </h4>
                              <p class="bio kd-para-1">
                                M.Com (H) <br />Batch 2022-2024
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
                            “ I am incredibly grateful for my time at The Assam
                            Royal Global University . The exceptional faculty,
                            diverse course offerings, and supportive community
                            have made my college experience truly enriching. The
                            campus provides an ideal environment for both academic
                            and personal growth, fostering a culture of
                            inclusivity and collaboration. The opportunities for
                            hands-on learning and real-world application have been
                            invaluable, preparing me well for my future endeavors.
                            ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/SURYANSHUDAS.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                SURYANSHU DAS
                              </h4>
                              <p class="bio kd-para-1">
                                B.COM <br />Batch 2021-24
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
                            “ I am happy to share that I am an alumnus of the
                            Royal Global University, Guwahati, a beautiful
                            knowledge temple. When I was accepted to the Royal
                            School of Commerce, I was overjoyed. I had always
                            wanted to graduate from an institution with
                            collaborative instructors, the latest facilities, an
                            extensive library, a clean, extensive campus, and a
                            sizable cafeteria that provides sanitary cuisine. All
                            of these are combined at my college. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/PRANJALSAHA.png"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                PRANJAL SAHA
                              </h4>
                              <p class="bio kd-para-1">
                                B.COM <br />Batch 2021-24
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
                            “ I am grateful for the trans-formative experience at
                            Royal Global University. The faculty's dedication to
                            nurturing our understanding of business principles and
                            real-world applications has been invaluable. The
                            department's courses were well-regarded, and students
                            were encouraged to participate actively in various
                            extracurricular activities, fostering a holistic
                            learning experience. High-quality education was
                            consistently delivered, ensuring graduates were
                            well-prepared for future challenges and opportunities
                            in the competitive business world. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/NYATIKASHLIWAL.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                NYATI KASHLIWAL
                              </h4>
                              <p class="bio kd-para-1">
                                B.COM <br />Batch 2021-24
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
                            “ I am grateful to The Assam Royal Global University
                            for giving me this opportunity to be a part of this
                            institute during my three years journey here. The
                            university has provided me with various opportunities
                            to scale upon, be it academic or cocurricular
                            activities with an amazing infrastructural setup. I am
                            grateful to the amazing faculty teachers who have been
                            really supportive and encouraging throughout the
                            tenure. Throughout my three years at the university, I
                            have gained enough experience with new people, immense
                            learning and an overall personal development. Looking
                            for the future endavours with the wonderful experience
                            and lessons from Royal Global University. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_Commerce/PawanSharma .jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Pawan Sharma
                              </h4>
                              <p class="bio kd-para-1">
                                B.Com [H] Finance &amp; Accounts
                                <br />Batch:2021-2024
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
