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
            Department of CSE
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
          The Department of Computer Science and Engineering (CSE) provides
          comprehensive facilities and resources essential for academic and
          research excellence, including audiovisual equipment, advanced computing
          labs, a well-stocked library, robust networking infrastructure, and
          dedicated technical support. The department focuses on key areas such as
          Network Engineering, AI, Data Mining, Neural Networks, Image Processing,
          NLP, and Computer Vision. Strengths of the department include dynamic
          faculty, strong student-teacher relationships, excellent exam
          performance, and a commendable placement record, while opportunities lie
          in technological adaptation, enhanced R&D consultancy, adaption of new
          CSE courses, and interdisciplinary growth. Challenges include
          international collaboration, national R&D networking, NRI student
          attraction, and extension activities. Future plans feature the formation
          of IoT and Data Science labs with industry collaboration,
          interdisciplinary research projects, and organizing cutting-edge
          technology workshops and international conferences. Graduates and
          postgraduates from the department enjoy promising career prospects in
          various sectors, securing roles in tech giants, finance, healthcare,
          manufacturing, and government, often continuing education in AI, ML,
          Data Science, or Cybersecurity, and achieving professional
          certifications. Emerging trends in AI, ML, cybersecurity, data science,
          cloud computing, blockchain, IoT, and quantum computing offer
          substantial opportunities. Technical expertise combined with soft skills
          like problem-solving, communication, teamwork, and adaptability ensures
          graduates remain competitive, continuously engaging in lifelong learning
          to stay ahead in a dynamic tech industry, thus positioning them for
          success in a technology-driven future.
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
          To offer globally integrated opportunities in the domain of computer
          science and engineering, fostering the development of students as global
          citizens with the skills and perspectives needed to thrive in an
          interconnected world.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To achieve academic excellence in computer science education through
            dynamic curriculum, research-driven initiatives, and industry-aligned
            programs.
          </li>
          <li>To instil ethical values and a spirit of community service</li>
          <li>
            To give back responsible leaders equipped to drive positive change and
            innovation in the global technological landscape.
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
              src="assets/img/Departments/Department_CSE/CSE2.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_CSE/CSE.jpg"
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
                <td>MAYANK GOEL</td>
                <td>2017-2021</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Assistant Professor, Siksha O Anusandhan</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/MAYANKGOEL.png"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>RAJA JWBTHASHA DAIMARI</td>
                <td>2018-2020</td>
                <td>RSET, M.Tech(CSE)</td>
                <td>Forest Guard, Forest Dept, Govt. of Assam</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/RAJAJWBTHASHADAIMARI.png"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>ALBERT TANTI</td>
                <td>2017-2021</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Programmer Analyst, Cognizant</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/ALBERTTANTI.png"
                  />
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>ARIHANT JAIN</td>
                <td>2017-2021</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Software Engineer, Accenture</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/ARIHANTJAIN.png"
                  />
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>BISWAJIT NATH</td>
                <td>2017-2021</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Assistant System Engineer, TCS</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/BISWAJITNATH.png"
                  />
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>BONSENG M. SANGMA</td>
                <td>2017-2021</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Network Admin, ICP Dalu</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/BONSENGM.SANGMA.png"
                  />
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>NEERAJ BHADANI</td>
                <td>2017-2021</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>System Engineer, TCS</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/NEERAJBHADANI.png"
                  />
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>ABHIK BORUAH</td>
                <td>2018-2022</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Software Engineer, Iexceed Technology Solutions</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/ABHIKBORUAH.png"
                  />
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>NIYAR TALUKDAR</td>
                <td>2018-2022</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>Software Engineer, Cognizant</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/NIYARTALUKDAR.png"
                  />
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>RIZWAN ANSARI</td>
                <td>2018-2022</td>
                <td>RSET, B.Tech(CSE)</td>
                <td>MBA, IIFT ChowbaghaMadurdaha Kolkata West Bengal</td>
                <td class="text-center">
                  <img
                    src="assets/img/Departments/Department_CSE/RIZWANANSARI.png"
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
                <th class="font-weight-bold text-white">Name</th>
                <th class="font-weight-bold text-white">Designation</th>
                <th class="font-weight-bold text-white">Purpose of Visit</th>
                <th class="font-weight-bold text-white">Date of Visit</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>Dr. John Jose</td>
                <td>
                  Associate Prefessor, Department of CSE, IIT Guwahati and
                  Vice-Chair of IEEE India Council
                </td>
                <td>Speaker at IEEE -IC: Standard Workshop and Hackathon 2024</td>
                <td>9/26/2024</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Mr.Anupam Agarwal</td>
                <td>Chair of the India Internet Foundation (IIFON)</td>
                <td>Speaker at IEEE -IC: Standard Workshop and Hackathon 2024</td>
                <td>9/26/2024</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Mr. Anand Raje</td>
                <td>
                  Co-Founder and Director of BASIS Technologies Pvt. Ltd., and
                  Co-Founder and CTO of the India Internet Foundation
                </td>
                <td>Speaker at IEEE -IC: Standard Workshop and Hackathon 2024</td>
                <td>9/26/2024</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Prof. Ujjwal K. Saha</td>
                <td>
                  Professor Department of Mechanical Engineering at IIT Guwahati
                </td>
                <td>Sensitization program on GATE and JAM</td>
                <td>9/24/2024</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Ms. Megha Roy Chatterjee</td>
                <td>Education USA Advisor from USIEF Kolkata</td>
                <td>
                  Invited talk : Prospects of Higher Education in the United
                  States
                </td>
                <td>9/11/2024</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Ms. Promita Mazumdar</td>
                <td>Founder of All About You</td>
                <td>Workshop on "Personality Development and Soft Skills"</td>
                <td>9/9/2024</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Dr. Pradip Kumar Das</td>
                <td>
                  Professor , Department of Computer Science and Engineering ,IIT
                  Guwahati
                </td>
                <td>Invited talk : On Drones and Technology</td>
                <td>8/7/2024</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Mr. Rintu Das</td>
                <td>Scientist D at NIELIT Guwahati</td>
                <td>Invited talk : NIELIT and current trends of Technology</td>
                <td>8/6/2024</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Mr. Neeraj Sahu</td>
                <td>Co-founder and COO Geeks of Gurukul</td>
                <td>Bootcamp :AI Powered Data Analytics</td>
                <td>5/13/2024</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Mr. Ajay Katara</td>
                <td>Co-founder and CTO of Geeks of Gurukul</td>
                <td>Bootcamp :AI Powered Data Analytics</td>
                <td>5/13/2024</td>
              </tr>
              <tr>
                <td>11</td>
                <td>Mr. Sabyasachi Mukhopadhyay</td>
                <td>
                  Research Scholar, Centre for Computational and Data Sciences
                  (CCDS), IIT, Kharagpur
                </td>
                <td>Workshop on Machine Learning</td>
                <td>5/6/2024</td>
              </tr>
              <tr>
                <td>12</td>
                <td>Dr. Subhrojyoti Bordoloi</td>
                <td>
                  Professor, Dept. of Computer Application, Assam Engineering
                  College (AEC)
                </td>
                <td>10th meeting of the Boards of Studies (BoS)</td>
                <td>4/26/2024</td>
              </tr>
              <tr>
                <td>13</td>
                <td>Mr. Anoop Kumar Prasad</td>
                <td>Founder &amp; Contributor, Planetary Digital Peace</td>
                <td>10th meeting of the Boards of Studies (BoS)</td>
                <td>4/26/2024</td>
              </tr>
              <tr>
                <td>14</td>
                <td>Mr. Mridul Kanti Chakraborty</td>
                <td>Deputy Superintendent of Police</td>
                <td>Expert Session on Cybersecurity Awareness</td>
                <td>4/9/2024</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Mr. Sanjib Chutia</td>
                <td>SI Assam Police</td>
                <td>Expert Session on Cybersecurity Awareness</td>
                <td>4/9/2024</td>
              </tr>
              <tr>
                <td>16</td>
                <td>Ms. Suranjana Bhattacharyya</td>
                <td>Assistant Manager, India Future Foundation</td>
                <td>Expert Session on Cybersecurity Awareness</td>
                <td>4/9/2024</td>
              </tr>
              <tr>
                <td>17</td>
                <td>Mr.Bhaskar Shyamal</td>
                <td></td>
                <td>Workshop on Machine Learning</td>
                <td>3/4/2024</td>
              </tr>
              <tr>
                <td>18</td>
                <td>Mrs. Vandana Singhal</td>
                <td>Chief Engineer, Ministry of Power</td>
                <td>Guest of Honour of Smart India Hackathon 2023</td>
                <td>12/19/2023</td>
              </tr>
              <tr>
                <td>19</td>
                <td>Shri Vijay Prakash</td>
                <td>
                  Zonal General Manager, The National Small Industries Corporation
                  Limited, Government of India Enterprise
                </td>
                <td>Chief Guest of Smart India Hackathon 2023</td>
                <td>12/19/2023</td>
              </tr>
              <tr>
                <td>20</td>
                <td>Dr. Murthy Remilla</td>
                <td>
                  Head of Project Management, Human Spaceflight Group of The
                  Indian Space Research Organization (ISRO)
                </td>
                <td>Chief Guest of Technophilia 3.0</td>
                <td>10/12/2023</td>
              </tr>
              <tr>
                <td>21</td>
                <td>Prof. (Dr.) Pradeep K Das</td>
                <td>
                  Department of Computer Science and Engineering, IIT Guwahati
                </td>
                <td>Guest of Honour of Technophilia 3.0</td>
                <td>10/12/2023</td>
              </tr>
              <tr>
                <td>22</td>
                <td>Mr. Biswajit Hazarika</td>
                <td>Managing Director of Trans Virtual Pvt. Ltd</td>
                <td>Distinguished Guest of Technophilia 3.0</td>
                <td>10/12/2023</td>
              </tr>
              <tr>
                <td>23</td>
                <td>Dr. Murthy Remilla</td>
                <td>
                  Head of Project Management, Human Spaceflight Group of The
                  Indian Space Research Organization (ISRO)
                </td>
                <td>
                  Invited talk : Space systems and applications in our daily life
                </td>
                <td>10/10/2023</td>
              </tr>
              <tr>
                <td>24</td>
                <td>Prof. Hiren Kumar Dev Sarma</td>
                <td>Professor , Department of IT, Gauhati University</td>
                <td>
                  Invited talk Need of Engineering mindset to address various
                  social issues: An Overview
                </td>
                <td>9/15/2023</td>
              </tr>
              <tr>
                <td>25</td>
                <td>Ms. Sanju Biswakarma</td>
                <td>Head of Operation of Trustnetix Technology</td>
                <td>Resource person at workshop : Cyber Warriors</td>
                <td>5/22/2023</td>
              </tr>
              <tr>
                <td>26</td>
                <td>Mr. Shubasmit Malakar</td>
                <td>CEO, TRUSNETIX TECHNOLOGIES</td>
                <td>Resource person at workshop : Cyber Warriors</td>
                <td>5/22/2023</td>
              </tr>
              <tr>
                <td>27</td>
                <td>Dr. Maushumi Barooah</td>
                <td>Professor at the Assam Engineering College</td>
                <td>Invited talk: Artificial Intelligence</td>
                <td>5/11/2023</td>
              </tr>
              <tr>
                <td>28</td>
                <td>Mr. Atanu Roy Chowdhury</td>
                <td>Founder, Gapcrud Pvt. Ltd</td>
                <td>Resource person at workshop on Bootstrapping Innovation</td>
                <td>3/30/2023</td>
              </tr>
              <tr>
                <td>29</td>
                <td>Dr. John Jose</td>
                <td>Associate Prefessor, Department of CSE, IIT Guwahati</td>
                <td>
                  Seminar on How to Plan your College days for a rewarding career
                </td>
                <td>2/20/2023</td>
              </tr>
              <tr>
                <td>30</td>
                <td>Dr Subhajit Chakrabarty</td>
                <td>
                  Program Director of Graduate Studies, Louisiana State University
                </td>
                <td>Interactive Session</td>
                <td>12/21/2022</td>
              </tr>
              <tr>
                <td>31</td>
                <td>Dr Sanjay Menon</td>
                <td>Dean of Graduate Studies, Louisiana State University</td>
                <td>Interactive Session</td>
                <td>12/21/2022</td>
              </tr>
              <tr>
                <td>32</td>
                <td>NADIR LASKAR</td>
                <td>SDE 2 Tele Software Generalist, Entrepreneur</td>
                <td>Speaker at Google dev fest 2022</td>
                <td>12/3/2022</td>
              </tr>
              <tr>
                <td>33</td>
                <td>JOINAL AHMED</td>
                <td>
                  Al Strategy and Advocary, Internet scule Ops &amp; RacSys
                  Community Speaker
                </td>
                <td>Speaker at Google dev fest 2022</td>
                <td>12/3/2022</td>
              </tr>
              <tr>
                <td>34</td>
                <td>ANUBHAV SINGH</td>
                <td>CTO and Cofer at Dysp Google Cleed Chempi</td>
                <td>Speaker at Google dev fest 2022</td>
                <td>12/3/2022</td>
              </tr>
              <tr>
                <td>35</td>
                <td>ANOOP KUMAR PRASAD</td>
                <td>
                  Intemet Governance, Student Innovation Awardee NCIDE Crater
                </td>
                <td>Speaker at Google dev fest 2022</td>
                <td>12/3/2022</td>
              </tr>
              <tr>
                <td>36</td>
                <td>Prof. (Dr.) Avishek Adhikari</td>
                <td>
                  Professor and HoD, Department of Mathematics, Presidency
                  University, Kolkata
                </td>
                <td>
                  Guest Speaker :Importance Of Mathematics And Computer Science In
                  Cyber Security
                </td>
                <td>11/25/2022</td>
              </tr>
              <tr>
                <td>37</td>
                <td>PROF. (DR.) DEBABRATA DUTTA</td>
                <td>
                  RTD. SENIOR SCIENTIST, BHABHA ATOMIC RESEARCH CENTRE AND ADJUNCT
                  FACULTY RSAPS
                </td>
                <td>Invited Talk</td>
                <td>11/3/2022</td>
              </tr>
              <tr>
                <td>38</td>
                <td>Prof Shikhar Sarma</td>
                <td>Professor and HOD of Dept of IT, Gauhati University</td>
                <td>6th BOS Meeting of the Department of CSE</td>
                <td>5/17/2022</td>
              </tr>
              <tr>
                <td>39</td>
                <td>Prof Gautam Baruah</td>
                <td>Director, IIIT Guwahati</td>
                <td>Invited talk on Blockchain</td>
                <td>11/23/2021</td>
              </tr>
              <tr>
                <td>40</td>
                <td>Aviral Narayan Dubey</td>
                <td>Project officer Praja foundation</td>
                <td>Speaker of webinar on Status of Urban Governance in India</td>
                <td>5/4/2021</td>
              </tr>
              <tr>
                <td>41</td>
                <td>Mr. Ajinkya Lohakare</td>
                <td>CTO &amp; Founder of Ditto Security ,Ethical Hacker</td>
                <td>Speaker of Webinar on Cyber Security (Digital Battle)</td>
                <td>3/16/2021</td>
              </tr>
              <tr>
                <td>42</td>
                <td>Mr. BHASKAR BARUAH</td>
                <td>Founder of EduX</td>
                <td>
                  webinar on Career Prospects in Infrastructure Domain
                  (Cloud|SDN|Security)
                </td>
                <td>3/4/2021</td>
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
                  Dr. Ishita Chakraborty, Associate Professor, HoD, Dept. of CSE
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>
                  All Faculty members of the Department Members (Ex-Officio)
                </td>
                <td>
                  Prof. (Dr.) Ankur Ganguly, Dean Academics, Dean i/c RSET and
                  RSIT
                  <hr />
                  Dr. Anupam Das, Associate Professor, HoD (RSIT)
                  <hr />
                  Dr. Samarjit Das, Associate Professor
                  <hr />
                  Dr. Rashel Sarkar, Associate Professor
                  <hr />
                  Dr. Sumi Kankana Dewan, Assistant Professor
                  <hr />
                  Dr. Israfil Hussain, Assistant Professor
                  <hr />
                  Ms. Ankita Goyal Agarwala, Assistant Professor
                  <hr />
                  Mr. Saurabh Sutradhar, Assistant Professor
                  <hr />
                  Ms. Antara Malakar, Assistant Professor
                  <hr />
                  Ms. Afsana Laskar, Assistant Professor
                  <hr />
                  Mr. Nayan Jyoti Kalita, Assistant Professor
                  <hr />
                  Mr. Spandan Barthakur, Assistant Professor
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>External Experts(Academic)</td>
                <td>
                  Prof. (Dr.) Hiren Kumar Deva Sarma, Professor, Department of
                  Information Technology, Gauhati University
                </td>
              </tr>

              <tr>
                <td>4</td>
                <td>External Experts(Industry)</td>
                <td>Mr. Pratyush Kumar Deka, Technical Lead, Syncechron, Pune</td>
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
                <td>Dr. Ishita Chakraborty</td>
                <td>Associate Professor</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td>2</td>
                <td rowspan="2" class="align-middle">Professors</td>
                <td>Prof. Ankur Ganguly</td>
                <td>Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Prof.Rashel Sarkar</td>
                <td>Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>4</td>
                <td rowspan="2" class="align-middle">
                  Associate Professors – one of them will be the member secretary
                </td>
                <td>Dr. Raghavendra Prasad</td>
                <td>Associate Professor</td>
                <td>Member Secretary</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Dr. Israfil Hussain</td>
                <td>Associate Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Assistant Professors holding Ph.D. degree</td>
                <td>Dr. Sumi Kankana Dewan</td>
                <td>Assistant Professor</td>
                <td>Member</td>
              </tr>
              <tr>
                <td>7</td>
                <td rowspan="3" class="align-middle">
                  Three external members not below the rank of Professors,
                  including members from an allied department, who will be
                  nominated by the URC
                </td>
                <td>Prof. Arnab Kumar Sarma</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Prof. Kamal Debnath</td>
                <td>Professor</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Prof. Hiren Deva Sarma</td>
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
                        href="assets/Departmentalpdf/AY 2022-23 BTech CSE.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2022-23 BTech CSE.pdf
                        <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2024-25 B.Tech CSE.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2024-25 B.Tech CSE.pdf
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
                            “ At The Assam Royal Global University, amidst state
                            of the art infrastructure, coupled with highly
                            qualified and supportive faculties, I have witnessed
                            my skills rise to a zenith. The institution has
                            provided us with amazing opportunities every step of
                            the way. There is a strong focus on the students’
                            holistic development, by emphasising on aptitude,
                            coding, and soft skills necessary for success as a
                            professional. I am immensely grateful for the guidance
                            and encouragement from the University administration
                            as well as the Professors. The Assam Royal Global
                            University has not just equipped me academically, but
                            has also instilled values that will guide me through
                            my professional journey in the future. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_CSE/DevShah.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Dev Shah
                              </h4>
                              <p class="bio kd-para-1">
                                Batch CSE<br />2021-2025
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
                            “ As a current student at Royal Global University, my
                            experience has been fantastic. The campus is beautiful
                            and well-kept, and the mess serves tasty, healthy
                            food. The teachers in the B.Tech CSE department are
                            knowledgeable and always ready to help. The university
                            also supports students interested in starting their
                            own businesses with great programs and resources. They
                            encourage us to engage in various activities and
                            regularly organize workshops and events that enhance
                            our learning and personal growth. Overall, it's a
                            great place to learn and grow, and I highly recommend
                            it. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_CSE/MayankAgarwal.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Mayank Agarwal
                              </h4>
                              <p class="bio kd-para-1">
                                B tech CSE<br />Batch: 2023-2027
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
                            “ As a current student in the Computer Science and
                            Engineering department of the Bachelor of Technology
                            program, I am thrilled to share my positive
                            experiences so far. Even in my first year, the
                            department's dedication to academic excellence and
                            student development is clearly evident. The faculty
                            members are not only highly knowledgeable but also
                            genuinely invested in our success, providing
                            continuous support and guidance. Moreover, the
                            collaborative and encouraging environment among peers
                            and professors fosters a sense of community and
                            motivation. The opportunities to participate in
                            various workshops, seminars, and extracurricular
                            activities have further enriched my learning
                            experience. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_CSE/BhaweshAgarwal .jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Bhawesh Agarwal
                              </h4>
                              <p class="bio kd-para-1">
                                B tech CSE<br />
                                2023-2027
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
                            “ This university has given me many chances to learn
                            different things in the department of computer science
                            and engineering. The courses are interesting, the
                            teachers are helpful, and the projects are fun. I've
                            gained a lot of useful skills and knowledge, which
                            will help me in my future.The labs are well-equipped,
                            and we get to work on real-world problems. I've also
                            met many great friends and classmates who share my
                            interests. The university offers workshops and events
                            where we can learn even more and meet people from the
                            industry. Overall, my experience here has been very
                            positive and rewarding. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_CSE/NipuDas .jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Nipu Das
                              </h4>
                              <p class="bio kd-para-1">
                                B tech CSE<br />
                                Batch 2023-2027
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
                            “ I am honoured to be part of The Assam Royal Global
                            University a remarkable institution. I was thrilled to
                            be accepted into the Computer Science Engineering
                            program here. I had always aspired to study at a place
                            with supportive professors, cutting-edge
                            infrastructure, extensive library resources, modern
                            laboratories, and a clean, expansive campus with
                            multiple canteens that offers hygienic food. My
                            university embodies all of these qualities. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_CSE/NISTHAKALITA.png"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                NISTHA KALITA
                              </h4>
                              <p class="bio kd-para-1">
                                B.tech CSE <br />
                                Batch 2022-2026
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
                            “ My university has been vital for my all round
                            development during the entirety of my duration here as
                            a student, both on professional and beyond
                            professional grounds. I am grateful for what I could
                            attain with the help of my faculty members and the
                            university itself. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img

                                src="assets/img/testimonial/Department_CSE/MaharshiNath.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Maharshi Nath
                              </h4>
                              <p class="bio kd-para-1">
                                B. Tech (CSE)<br />Batch-2020-2024
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
