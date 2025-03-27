@extends('frontend.master')
@section('content')
        <div style="background-image: url(mobile-assets/dept-cse/s2-bg-img-1.webp);">
            <div class="mobile">
                @include('frontend/components/mobileheader')
              <div style="position: relative; padding-top: 90px;">
                <img class="pb-3" src="mobile-assets/dept-cse/mobile-cse.png" alt="">


                <div class="container pb-5">

                  <div>
                    <div>
                      <h3
                        class="headd3 text-dark fw-bold p-3"
                        style="background-color: #c7daf9; color: #ffffff"
                      >
                        5. Events & Achievements
                      </h3>
                      <div class="table-responsive">
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
                                      href="assets/Departmentalpdf/AY 2024-25 BTech_CSE.pdf"
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
              </div>
            </div>

            <div class="website">
                @include('frontend/components/aheader')
          <img class="pb-3" src="mobile-assets/dept-cse/web-cse.png" alt="">

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
                            href="assets/Departmentalpdf/AY 2024-25 BTech_CSE.pdf"
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
            </div>
    </div>
@endsection
