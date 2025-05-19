@extends('frontend.master')
@section('content')
            <div style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/bg.svg); background-size: cover;">
              <div class="mobile">
                @include('frontend/components/mobileheader')
            <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-history/mob-history.png" alt="">

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
                            <a target="_blank" href="programs-MA-History"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                          </td>
                      </tr>

                      <tr class="align-middle">
                        <td>2.</td>
                        <td >
                            <p class="para1">
                            <strong style="color: #023e8a;" class="#">Bachelor of Arts History</strong>
                            <br> Honours / Honours with Research
                            </p>

                        </td>
                        <td>
                          4 years as per NEP
                        </td>
                        <td>
                          <a target="_blank" href="programs-BA-History"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                        </td>
                    </tr>

                  </tbody>
                </table>
              </div>

            </div>

            <div class="container pb-5 pt-3">
                <!-- link buttons mobile  -->
                <div>
                    <div class="container" style="background-color: #fff; padding: 80px 10px;">

                        <h2 class="headd3 fw-bold text-center pb-5" style="color: #27467A; font-weight: 900;">
                            Quick <span style="color: #FF9A1E; font-weight: 500;">Links</span></h2>

                        <div class="row text-center">
                            <div class="col-lg-12 pt-4">
                                <a href="Research_Department_History"
                                    style="width: 100%; background-color: #FF9A1E; color: #fff; height: 50px;"
                                    class="btn para1 fw-bold d-flex justify-content-center align-items-center" href="#"
                                    role="button">Explore Research Lab</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- link buttons mobile  -->
        <div>
          <div>
            <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
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
            <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (Bos)</span></h2>

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
            <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committe (DRC)</span></h2>

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
          <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
            Course Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

          <div class="p-2">
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
                            href="assets/Departmentalpdf/AY 2022-23 BA History.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BA History.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2023-24 BA History.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BA History.pdf
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
                      <div class="accordion-body">
                        <div class="row">
                          <a
                            href="assets/Departmentalpdf/Old Syllabus MA History.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus MA
                            History.pdf <i class="fa fa-download"></i>
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
                          href="doctoral-programme"
                          class="para1"
                          target="_blank"
                          >
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

          <div class="website">
            @include('frontend/components/aheader')

            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-history/web-history.png" alt="">

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
                            <a target="_blank" href="programs-MA-History"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                          </td>
                      </tr>

                      <tr class="align-middle">
                        <td>2.</td>
                        <td >
                            <p class="para1">
                            <strong style="color: #023e8a;" class="#">Bachelor of Arts History</strong>
                            <br> Honours / Honours with Research
                            </p>

                        </td>
                        <td>
                          4 years as per NEP
                        </td>
                        <td>
                          <a target="_blank" href="programs-BA-History"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                        </td>
                    </tr>

                  </tbody>
                </table>
              </div>

            </div>

            <div class="container pb-5 pt-3">
                <!-- link buttons website  -->
                <div class="quick-links-container">
                    <div class="quick-links-tooltip">Quick Links</div>

                    <div class="quick-links-panel">

                        <a href="Research_Department_History" style="background-color: #FF9A1E;"
                            class="quick-link-button d-flex justify-content-center align-items-center">
                            <p class=" fw-bold text-white mb-0 text-center" style="font-size: 28px">Explore Research Lab</p>
                        </a>
                    </div>

                </div>
                <!-- link buttons website  -->
        <div>
          <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
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
                            href="assets/Departmentalpdf/AY 2022-23 BA History.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BA History.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2023-24 BA History.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BA History.pdf
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
                      <div class="accordion-body">
                        <div class="row">
                          <a
                            href="assets/Departmentalpdf/Old Syllabus MA History.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus MA
                            History.pdf <i class="fa fa-download"></i>
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
                          href="doctoral-programme"
                          class="para1"
                          target="_blank"
                          >
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
        </div>
@endsection
