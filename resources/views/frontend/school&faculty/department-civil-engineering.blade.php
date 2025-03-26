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
            Department of Civil Engineering
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
          Civil engineering is the backbone of modern society. From the roads we
          drive on, to the bridges we cross and the buildings we live in, civil
          engineers design, build, and maintain the infrastructure that shapes our
          world. The Civil Engineering Department at The Assam Royal Global
          University isn't just about textbooks and lectures. We're about building
          the future, today. Our innovative program is designed to equip you with
          the practical skills and industry-ready knowledge you need to hit the
          ground running on graduation day.
        </p>

        <div>
          <ol class="para1 text-dark">
            <li>
              Real-World Focus: We integrate hands-on learning throughout the
              curriculum. Our state-of-the-art labs provide a simulated work
              environment where you can experiment, test theories, and gain
              experience with industry-standard softwares.
            </li>
            <li>
              Industry Partnerships: We forge strong relationships with leading
              engineering firms. This allows you to participate in guest lectures
              by practicing professionals, case studies based on real-world
              projects, and potential internship opportunit
            </li>

            <li>
              Experiential Learning: Get ready to roll up your sleeves! Our
              program incorporates field trips, design-build projects, and even
              potential co-op placements to give you a taste of the real world
              before you graduate.
            </li>
            <li>
              Faculty with Expertise: Our professors are not just academics;
              they're experienced engineers who bring their industry knowledge and
              passion for the field into the classroom.
            </li>
          </ol>
        </div>
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
          To offer globally integrated opportunities in the domain of civil
          engineering, fostering the development of students as global citizens
          with the skills and perspectives needed to thrive in an interconnected
          world.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To achieve academic excellence in civil engineering through dynamic
            curriculum, research-driven initiatives, and industry-aligned
            programs;
          </li>
          <li>To instill ethical values and a spirit of community service.</li>
          <li>
            To give back responsible leaders equipped to drive positive change and
            innovation in the global infrastructural landscape.
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
              src="assets/img/Departments/Department_Civil_Engineering/Civilengineering.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Civil_Engineering/Civil4.jpg"
            />
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Civil_Engineering/Civil3.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Civil_Engineering/Civil2.jpg"
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
                <td>Ayesha Julekha</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>Block development officer in Mankachar, Assam</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/ayeshajulika.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bidyut Bikash Hazarika</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>
                  Young Professional in NERIWALM under Dr. Amulya chandra Debnath
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/bidyutbbikash.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>NILAKSHI BORDOLOI</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>Graduate Engineer in PWD Assam</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/nilakshi.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Samima Yasmin</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>Assistant Professor in Siliguri Institute of Technology</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/shamimayasmin.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Saurav Bhattacharjee</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>
                  Assistant Professor in Scholar's Institute of Technology &amp;
                  Management
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/saurav.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Longjam Rubychand Singh</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>Assistant Engineer in Imphal City Phase II project</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/lonjam.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Shahanuralom</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>Project Engineer in D.K. Project Pvt Limited</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/sahanur.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>Vishwanath Okram</td>
                <td>M.Tech Civil Engineering (SE)</td>
                <td>RSET</td>
                <td>
                  Technical Assistant at Rural Engineering Department Manipur
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/okram.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>Nihar Ranjan Deka</td>
                <td>B.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>Assistant Manager in HDFC Retail Lending</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/nihar.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Shubhro Jyoti Das</td>
                <td>B.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>
                  Data analytics intern in primary healthtech private limited
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/subrajyoti.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>11</td>
                <td>Rakib Hassan</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>
                  Junior design engineer in mukesh and associates consultant and
                  engineers (T.N)
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/rakib.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>12</td>
                <td>Pukhrambam Bidyananda Singh</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>
                  Assistant Professor in Scholar's Institute of Technology &amp;
                  Management
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/Bidyananda.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>13</td>
                <td>Swapnil Medhi</td>
                <td>M.Tech Civil Engineering</td>
                <td>RSET</td>
                <td>
                  Junior Engineer in Beriwal Construction in Tura, Meghalaya
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/swapnil.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>14</td>
                <td>HIMASHREE KALITA</td>
                <td>M.Tech in Civil Engineering (SE)</td>
                <td>RSET</td>
                <td>
                  Associate Project Engineer, IIT Guwahati (Civil Engineering
                  Department)
                </td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/HimashreeKalita-1.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>15</td>
                <td>Noorjamal Al Abedin</td>
                <td>M.Tech in Civil Engineering (SE)</td>
                <td>RSET</td>
                <td>Project Engineer in K's. Design Cell</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/noor.jpeg"
                  />
                </td>
              </tr>
              <tr>
                <td>16</td>
                <td>Nihar Pratim Kashyap</td>
                <td>M.Tech in Civil Engineering (WRDM)</td>
                <td>RSET</td>
                <td>
                  Designation-Technical Officer-I Public Health Engineering
                  Department, Office of the Executive Engineer, Guwahati
                  Division-1, Bamunimaidam, Ghy -21, Kamrup(M) ,Assam.
                </td>
                <td class="text-center">
                  Not Available
                </td>
              </tr>
              <tr>
                <td>17</td>
                <td>Chare Jaksrame A Sangma</td>
                <td>M.Tech in Civil Engineering (WRDM)</td>
                <td>RSET</td>
                <td>Technical Assistant in PHE</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_Civil_Engineering/chare.png"
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
          <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
            DEPARTMENT OF CIVIL ENGINEERING
          </h3>
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
                        href="assets/Departmentalpdf/AY 2023-24 B Tech Civil Engineering.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2023-24 B Tech Civil
                        Engineering.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2024-25 B.Tech Civil Engineering.pdf"
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
                            “ The Assam Royal Global University has been an
                            exceptional place of learning and growth for me.
                            During my B.Tech studies, I experienced a rich
                            academic environment where the teachers were highly
                            qualified and deeply dedicated to our success. The
                            infrastructure, equipped with the latest technologies,
                            provided an excellent platform for both theoretical
                            and practical learning. Beyond academics, the vibrant
                            campus life kept me engaged and active. Thanks to the
                            robust education and support from the university, I
                            successfully secured a job in Jal Jeevan Mission,
                            PHED. I am immensely satisfied with my time at The
                            Assam Royal Global University and grateful for the
                            opportunities it has afforded me. <br />Thank you so
                            much! ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/FARHATAZIM.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                FARHAT AZIM
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech CIVIL ENGINEERING<br />BATCH: 2018-2022
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
                            “ The Assam Royal Global University has been an
                            exceptional place for my academic journey, especially
                            during my B.Tech studies. The highly qualified
                            teachers provided unparalleled guidance and support,
                            ensuring a comprehensive and enriching learning
                            experience. The university's state-of-the-art
                            infrastructure, equipped with the latest technologies,
                            created an ideal environment for both academic and
                            practical learning. My time here has been filled with
                            memorable experiences, from engaging lectures to
                            vibrant extracurricular activities. I am deeply
                            satisfied with my decision to study at The Assam Royal
                            Global University, and I extend my heartfelt thanks to
                            the institution for shaping my educational and
                            personal growth. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/MEGHRAJMALAKAR.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                MEGHRAJ MALAKAR
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech CIVIL ENGINEERING<br />BATCH: 2019-2023
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
                            “ Studying B.Tech at The Assam Royal Global University
                            has been an incredible experience for me. The faculty,
                            renowned for their high qualifications, consistently
                            delivered top-notch education and mentorship. The
                            university's infrastructure, boasting the latest
                            technological advancements, provided an optimal
                            setting for learning and innovation.My time here has
                            been marked by academic excellence and enriching
                            extracurricular activities, making my journey truly
                            fulfilling. I am immensely satisfied with my education
                            at The Assam Royal Global University and deeply
                            grateful for the remarkable experiences and
                            opportunities it has afforded me. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/MANISHGOGOI.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                MANISH GOGOI
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech CIVIL ENGINEERING<br />BATCH: 2019-2023
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
                            “ Royal Global University has been instrumental in
                            shaping both my career and personal development. The
                            comprehensive education and diverse opportunities
                            provided by RGU enabled me to transition seamlessly
                            into a corporate professional today, even as a
                            self-starter. The university's emphasis on moral
                            ethics, communication skills, and technical expertise
                            laid a strong foundation for my success. Today, I am
                            proud to work remotely for a US-based company from my
                            hometown in Guwahati, Assam. This opportunity allows
                            me to balance my professional responsibilities during
                            weekdays and pursue my passion for music by performing
                            live gigs in large platforms during weekends. RGU's
                            vibrant cultural environment and endless opportunities
                            to stand out from the crowd right from day one were
                            pivotal in my holistic growth. I owe my achievements
                            and personal grooming to the exceptional support and
                            encouragement I received throughout my four-year
                            journey at RGU. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/ALBHIALAM.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                ALBHI ALAM
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech CIVIL ENGINEERING<br />BATCH: 2016-2020
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
                            “ From academics to extracurricular to placements this
                            university is a is a whole package. This journey has
                            been really transformative. The university's
                            commandment has helped me drive through my passion and
                            enlightened me. The quality of guidance and mentorship
                            provided by the faculty members is beyond remarkable
                            that it has enriched me with all the credentials to
                            present myself to the real world with the confidence.
                            The knowledge rich environment has elevated my dreams
                            and passions to a more dynamic level. The emphasis on
                            innovation and creativity have reinforced a more
                            elaborate and widespread thinking.I highly recommend
                            The Assam Royal Global University to anyone seeking a
                            quality education and enriching environment where
                            academic excellence it at its peak and dreams and
                            innovations are its core. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/JOSHIWAHENGBAM.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                JOSHI WAHENGBAM
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech. Civil Engineering<br />Batch 2018-2022
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
                            “ I am honoured to provide this testimonial to The
                            Assam Royal Global University as a proud graduate of
                            the M.Tech Structural Engineering program. My journey
                            at The Assam Royal Global University has been
                            transformative, equipping me with advanced knowledge,
                            practical skills, and invaluable experiences in the
                            field of structural engineering.Throughout my time at
                            The Assam Royal Global University, I consistently
                            strived for achieving high grades in challenging
                            subjects such as Advanced Structural Analysis,
                            Earthquake Engineering, and Finite Element Methods.
                            The rigorous coursework, combined with the expert
                            guidance of my professors, enabled me to develop a
                            profound understanding of structural engineering
                            principles and applications. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/RAKIBHASSAN.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                RAKIB HASSAN
                              </h4>
                              <p class="bio kd-para-1">
                                M.Tech Structural Engineering <br />
                                Batch 2020-22
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
                            “ My experience at Royal School of Engineering was
                            truly enriching. The college's modern infrastructure,
                            including a vast library and well-equipped labs,
                            provided an exceptional learning environment. I
                            particularly appreciated the faculty's expertise and
                            their dedication to incorporating the latest civil
                            engineering advancements into the curriculum. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/TonishaTalukdar.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Tonisha Talukdar
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech <br />
                                Batch 2019-23
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
                            “ My experience studying B.Tech at The Assam Royal
                            Global University has been immensely enriching. The
                            highly qualified teachers, coupled with
                            state-of-the-art infrastructure, provided an
                            exceptional learning environment. The latest
                            technologies integrated into our coursework ensured
                            that we were always at the forefront of our field.
                            Additionally, the vibrant array of extracurricular
                            activities kept me engaged and active throughout my
                            studies.<br />
                            <p>
                              My satisfaction with the university's academic
                              pattern and overall environment led me to continue
                              my education here for my master's degree, a decision
                              I am very pleased with.”
                            </p>
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Civil_Engineering/ASHIQULHAQUE.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                ASHIQUL HAQUE
                              </h4>
                              <p class="bio kd-para-1">
                                B.Tech CIVIL ENGINEERING<br />BATCH: 2019-2023
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
