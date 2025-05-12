@extends('frontend.master')
@section('content')
            <div style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/bg.svg); background-size: cover;">
              <div class="mobile">
             @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-social-work/mobile-social-work.png" alt="">

            <div class="container">
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                                <strong style="color: #023e8a;" class="#">Master of Social Work</strong>
                                </p>
                            </td>
                            <td class="para1">
                              2 years
                            </td>
                            <td>
                              <a target="_blank" href="programs-MSW"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr class="align-middle">
                          <td>2.</td>
                          <td >
                              <p class="para1">
                              <strong style="color: #023e8a;" class="programs-BSW">Bachelor of Social Work</strong>
                              <br> Honours / Honours with Research
                              </p>

                          </td>
                          <td>
                            4 years as per NEP
                          </td>
                          <td>
                            <a target="_blank" href="programs-BSW"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                          </td>
                      </tr>

                    </tbody>
                  </table>
                </div>

            </div>

             <div class="container pb-5 pt-3">

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
                    <th class="font-weight-bold text-white">S.No.</th>
                    <th class="font-weight-bold text-white">Name</th>
                    <th class="font-weight-bold text-white">Designation</th>
                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                    <th class="font-weight-bold text-white">Date</th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr class="align-middle">
                    <td>1</td>
                    <td>Shivalal Gautam</td>
                    <td>Co-Founder, Xomonnoy</td>
                    <td>Invited Talk on Gender and Social Exclusion</td>
                    <td>20-02-2025</td>
                  </tr>
                  <tr class="align-middle">
                    <td>2</td>
                    <td>Ms. Juree Hojai</td>
                    <td>Program Officer, Disability Inclusion, Team Lease Foundation</td>
                    <td>Interactive Session on Careers in Development Sector</td>
                    <td>05-03-2025</td>
                  </tr>
                  <tr class="align-middle">
                    <td>3</td>
                    <td>Mr. Mohan Sharma</td>
                    <td>Researcher</td>
                    <td>Invited Talk on Human-Animal Relationship</td>
                    <td>11-04-2025</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>
                      Dr. Dinesh Goswami, Advisor of Pratishruti Cancer and Palliative
                      Trust, Dibrugarh &amp; Mr. Henry Wood from the University of
                      Durham, UK
                    </td>
                    <td>
                      Advisor of Pratishruti Cancer and Palliative Trust, Dibrugarh
                    </td>
                    <td>Interactive session</td>
                    <td>3/9/2024</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Ms. Manjari Nandy</td>
                    <td>
                      Assistant Professor in the Department of Sociology at The
                      Maharaja Sayajirao University of Baroda and a Ph.D. Research
                      Scholar at the Central University of Gujarat,
                    </td>
                    <td>Invited talk</td>
                    <td>3/6/2024</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Dr. Bhargabi Das</td>
                    <td>
                      Assistant Professor in the Department of Rural Management at
                      Shiv Nadar Institution of Eminence, Greater Noida
                    </td>
                    <td>Invited talk</td>
                    <td>24/5/24</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Dr. Bitasta Das</td>
                    <td>
                      Senior Editor- Office of Communications and Instructor-Under
                      Graduate Programme at the Indian Institute of Science, Bangalore
                    </td>
                    <td>
                      two-day workshop on the Intersectionality of Social Sciences
                    </td>
                    <td>18/10/2023-19/10/2023</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Dr. Razdan Sarim Rahman</td>
                    <td>Assistant Professor at TISS, Guwahati</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Prof. (Dr.) Surajit Ch. Mukhopadhyay</td>
                    <td>Dean, RSHSS</td>
                    <td>Inhouse Resource person</td>
                    <td>18/10/2023</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Dr. Joseph Riamei</td>
                    <td>
                      Assistant Professor from the School of Social Work at Tata
                      Institute of Social Sciences, Guwahati off-Campus
                    </td>
                    <td>Invited talk</td>
                    <td>21/8/2023</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>
                      Ms. Suchismita Majumdar, Founder- Director of Swabalambi
                      Foundation, and Mr. Kanhaiya Lal, Sr. Co-Worker- Education, SOS
                      Village of Children
                    </td>
                    <td>
                      Ms. Suchismita Majumdar, Founder- Director of Swabalambi
                      Foundation, and Mr. Kanhaiya Lal, Sr. Co-Worker- Education, SOS
                      Village of Children
                    </td>
                    <td>Invited talk</td>
                    <td>21/3/2024-24/3/2023</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Ms. Nipurnh Gupta</td>
                    <td>
                      a global development communication professional from UNICEF
                    </td>
                    <td>Invited talk</td>
                    <td>2/12/2022</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Mukund Marodia</td>
                    <td>
                      Manager, Strategic and Academic Affairs in the Indian School of
                      Development Management
                    </td>
                    <td>Invited talk</td>
                    <td>28/10/22</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Nayan Jyoti Hazarika</td>
                    <td>PHD Scholar from the Department of Social Work</td>
                    <td>Invited talk</td>
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Dr. Sriparna B. Baruah</td>
                    <td>
                      Dr Sriparna B Baruah is a Development Professional with 35 years
                      of work experience in Management Education and in Small and
                      Medium Enterprise Development. Dr. Baruah worked with Indian
                      Institute of Entrepreneurship (IIR) for 23 years and retired in
                      the year 2022. She held the position of Head (CIE) and was also
                      Director I/C of IIE. She is currently associated with NEHHDC as
                      an Advisor (Livelihood &amp; Entrepreneurship)
                    </td>
                    <td>Invited talk</td>
                    <td>31/08/2022</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>
                      Dr Gayatri Gogoi (Assistant Professor of Pathology, AMCH and
                      Honorary Program Director at Pratishruti Cancer and Palliative
                      Trust), Dr Pankaj Deka, Chief Consultant, Department of
                      Gynaecology, Health City Hospital), and Ms Nabanita Kalita
                      (Channel Head, N.E News, Anchor, Prag News). Respected
                      Chairperson (Academic),
                    </td>
                    <td>
                      Dr Gayatri Gogoi (Assistant Professor of Pathology, AMCH and
                      Honorary Program Director at Pratishruti Cancer and Palliative
                      Trust), Dr Pankaj Deka, Chief Consultant, Department of
                      Gynaecology, Health City Hospital), and Ms Nabanita Kalita
                      (Channel Head, N.E News, Anchor, Prag News). Respected
                      Chairperson (Academic),
                    </td>
                    <td>Invited talk</td>
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Dr Shivani Chauhan Barooah</td>
                    <td>
                      Chairperson, Centre for Labour Studies and Social Protection,
                      TISS Guwahati
                    </td>
                    <td>Invited talk</td>
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Mr Anupam Joya Sharma</td>
                    <td>
                      a doctoral fellow of Social Epidemiology at IIT Gandhinagar
                    </td>
                    <td>Invited talk</td>
                    <td>20/12/2021</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Dr Aarushi Kehkar Malhotra (online)</td>
                    <td>
                      Senior Manager of Research, Advocacy, and Wellness at Sirona
                      Hygiene Foundation
                    </td>
                    <td>Invited talk</td>
                    <td>11/12/2021</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Mr Sahbaz Ahmed and Mr Syed Rizwan Ahmed</td>
                    <td>Advocates from Gauhati High Court</td>
                    <td>Invited talk</td>
                    <td>9/12/2021</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>
                      Ms. Archana Borthakur of Priya Bondhu &amp; Uttam Teron of
                      Parijat Academy
                    </td>
                    <td>
                      Ms. Archana Borthakur of Priya Bondhu &amp; Uttam Teron of
                      Parijat Academy
                    </td>
                    <td>Invited talk</td>
                    <td>2021</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Dr. Ashok Kumar Das, and Dr. Mythili Hazarika</td>
                    <td>
                      Dr. Ashok Kumar Das, Professor in the Department of Head and
                      Neck Surgery at Dr. B. Barooah Cancer Institute, Guwahati, and
                      Dr. Mythili Hazarika, Associate Professor of Clinical Psychology
                      at Gauhati Medical College and Hospital
                    </td>
                    <td>Invited talk</td>
                    <td>31/5/21</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Mr. Miguel Das Queah</td>
                    <td>Executive Director, UTSAH</td>
                    <td>Invited talk</td>
                    <td>2020</td>
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
                    <td>
                      Dr. T Luithuiwung Awungshi, Assistant Professor and Coordinator, Department of Social Work.
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Dr. Amlan Das, Department of Social Work

                      <hr/>

                      Dr. Priyanka Patowari, Assistant Professor and Coordinator,
                      Department of Social Work

                      <hr />
                      Dr. Moses Newme, Assistant Professor, Department of Social Work

                      <hr />
                      Ms. Joyeeta Bhattacharjee, Assistant Professor, Department of
                      Social Work

                      <hr />
                      Ms. Nabanita Hazarika, Assistant Professor, Department of Social
                      Work

                      <hr />
                      Mr. Bikash Chetry, Assistant Professor, Department of Social
                      Work

                      <hr />
                      Dr. Madhu Monjuri Gohain, Assistant Professor, Department of
                      Social Work

                      <hr />
                      Dr. T. Luithuiwung Awungshi, Assistant Professor, Department of
                      Social Work
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>External Expert (Academic)</td>
                    <td>
                      Dr. Razdan Sarim Rahman, Assistant Professor and Chairperson,
                      Centre for Livelihood and Social Entrepreneurship, TISS
                      Guwahati-Off Campus
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Expert (Industry)</td>
                    <td>
                      Mr. Jeet Jyoti Das, Director, Nurture and Foster Pvt. Ltd.
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
              The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

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
                    <td>Prof. (Dr.) Sajal Nag</td>
                    <td>Dean, RSHSS</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Priyanka Patowari</td>
                    <td>Assistant Professor, Department of Social Work, RSHSS</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. T Luithuiwung Awungshi</td>
                    <td>Assistant Professor, Department of Social Work, RSHSS</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Gautam Mazumder</td>
                    <td>Professor, Department of Economics, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Swabera Islam</td>
                    <td>Professor, Department of Economics, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Shiela Bora</td>
                    <td>
                      Professor &amp; Advisor, Department of History, RSHSS, RGU
                    </td>
                    <td>External Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div>
          <div>
            <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Ph.D. Research <span style="color: #FF9A1E; font-weight: 500;">and Research Interest</span></h2>

            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th>Sl.no</th>
                    <th>Name</th>
                    <th>Qualification</th>
                    <th>Research</th>
                  </tr>

                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Dr. T Luithuiwung Awungshi</td>
                    <td>Ph.D.</td>
                    <td>Youth, Drug Abuse, Family & Child Welfare</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Amlan Das</td>
                    <td>Ph.D.</td>
                    <td>Disability Studies, Rural Development, Family & Child Welfare</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Madhu Monjuri Gohain</td>
                    <td>Ph.D.</td>
                    <td>Residential Education and Migration</td>
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
                            href="assets/Departmentalpdf/AY 2022-23 BSW.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BSW.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2023-24 BSW.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BSW.pdf
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
                            href="assets/Departmentalpdf/Old syllabus MSW.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i>Old syllabus MSW.pdf
                            <i class="fa fa-download"></i>
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
                        </strong></a>
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
            <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-social-work/web-social-work.png" alt="">

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
                                <strong style="color: #023e8a;" class="#">Master of Social Work</strong>
                                </p>
                            </td>
                            <td class="para1">
                              2 years
                            </td>
                            <td>
                              <a target="_blank" href="programs-MSW"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr class="align-middle">
                          <td>2.</td>
                          <td >
                              <p class="para1">
                              <strong style="color: #023e8a;" class="programs-BSW">Bachelor of Social Work</strong>
                              <br> Honours / Honours with Research
                              </p>

                          </td>
                          <td>
                            4 years as per NEP
                          </td>
                          <td>
                            <a target="_blank" href="programs-BSW"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                          </td>
                      </tr>

                    </tbody>
                  </table>
                </div>

            </div>

             <div class="container pb-5 pt-3">

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
                    <th class="font-weight-bold text-white">S.No.</th>
                    <th class="font-weight-bold text-white">Name</th>
                    <th class="font-weight-bold text-white">Designation</th>
                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                    <th class="font-weight-bold text-white">Date</th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr class="align-middle">
                    <td>1</td>
                    <td>Shivalal Gautam</td>
                    <td>Co-Founder, Xomonnoy</td>
                    <td>Invited Talk on Gender and Social Exclusion</td>
                    <td>20-02-2025</td>
                  </tr>
                  <tr class="align-middle">
                    <td>2</td>
                    <td>Ms. Juree Hojai</td>
                    <td>Program Officer, Disability Inclusion, Team Lease Foundation</td>
                    <td>Interactive Session on Careers in Development Sector</td>
                    <td>05-03-2025</td>
                  </tr>
                  <tr class="align-middle">
                    <td>3</td>
                    <td>Mr. Mohan Sharma</td>
                    <td>Researcher</td>
                    <td>Invited Talk on Human-Animal Relationship</td>
                    <td>11-04-2025</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>
                      Dr. Dinesh Goswami, Advisor of Pratishruti Cancer and Palliative
                      Trust, Dibrugarh &amp; Mr. Henry Wood from the University of
                      Durham, UK
                    </td>
                    <td>
                      Advisor of Pratishruti Cancer and Palliative Trust, Dibrugarh
                    </td>
                    <td>Interactive session</td>
                    <td>3/9/2024</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Ms. Manjari Nandy</td>
                    <td>
                      Assistant Professor in the Department of Sociology at The
                      Maharaja Sayajirao University of Baroda and a Ph.D. Research
                      Scholar at the Central University of Gujarat,
                    </td>
                    <td>Invited talk</td>
                    <td>3/6/2024</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Dr. Bhargabi Das</td>
                    <td>
                      Assistant Professor in the Department of Rural Management at
                      Shiv Nadar Institution of Eminence, Greater Noida
                    </td>
                    <td>Invited talk</td>
                    <td>24/5/24</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Dr. Bitasta Das</td>
                    <td>
                      Senior Editor- Office of Communications and Instructor-Under
                      Graduate Programme at the Indian Institute of Science, Bangalore
                    </td>
                    <td>
                      two-day workshop on the Intersectionality of Social Sciences
                    </td>
                    <td>18/10/2023-19/10/2023</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Dr. Razdan Sarim Rahman</td>
                    <td>Assistant Professor at TISS, Guwahati</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Prof. (Dr.) Surajit Ch. Mukhopadhyay</td>
                    <td>Dean, RSHSS</td>
                    <td>Inhouse Resource person</td>
                    <td>18/10/2023</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Dr. Joseph Riamei</td>
                    <td>
                      Assistant Professor from the School of Social Work at Tata
                      Institute of Social Sciences, Guwahati off-Campus
                    </td>
                    <td>Invited talk</td>
                    <td>21/8/2023</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>
                      Ms. Suchismita Majumdar, Founder- Director of Swabalambi
                      Foundation, and Mr. Kanhaiya Lal, Sr. Co-Worker- Education, SOS
                      Village of Children
                    </td>
                    <td>
                      Ms. Suchismita Majumdar, Founder- Director of Swabalambi
                      Foundation, and Mr. Kanhaiya Lal, Sr. Co-Worker- Education, SOS
                      Village of Children
                    </td>
                    <td>Invited talk</td>
                    <td>21/3/2024-24/3/2023</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Ms. Nipurnh Gupta</td>
                    <td>
                      a global development communication professional from UNICEF
                    </td>
                    <td>Invited talk</td>
                    <td>2/12/2022</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Mukund Marodia</td>
                    <td>
                      Manager, Strategic and Academic Affairs in the Indian School of
                      Development Management
                    </td>
                    <td>Invited talk</td>
                    <td>28/10/22</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Nayan Jyoti Hazarika</td>
                    <td>PHD Scholar from the Department of Social Work</td>
                    <td>Invited talk</td>
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Dr. Sriparna B. Baruah</td>
                    <td>
                      Dr Sriparna B Baruah is a Development Professional with 35 years
                      of work experience in Management Education and in Small and
                      Medium Enterprise Development. Dr. Baruah worked with Indian
                      Institute of Entrepreneurship (IIR) for 23 years and retired in
                      the year 2022. She held the position of Head (CIE) and was also
                      Director I/C of IIE. She is currently associated with NEHHDC as
                      an Advisor (Livelihood &amp; Entrepreneurship)
                    </td>
                    <td>Invited talk</td>
                    <td>31/08/2022</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>
                      Dr Gayatri Gogoi (Assistant Professor of Pathology, AMCH and
                      Honorary Program Director at Pratishruti Cancer and Palliative
                      Trust), Dr Pankaj Deka, Chief Consultant, Department of
                      Gynaecology, Health City Hospital), and Ms Nabanita Kalita
                      (Channel Head, N.E News, Anchor, Prag News). Respected
                      Chairperson (Academic),
                    </td>
                    <td>
                      Dr Gayatri Gogoi (Assistant Professor of Pathology, AMCH and
                      Honorary Program Director at Pratishruti Cancer and Palliative
                      Trust), Dr Pankaj Deka, Chief Consultant, Department of
                      Gynaecology, Health City Hospital), and Ms Nabanita Kalita
                      (Channel Head, N.E News, Anchor, Prag News). Respected
                      Chairperson (Academic),
                    </td>
                    <td>Invited talk</td>
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Dr Shivani Chauhan Barooah</td>
                    <td>
                      Chairperson, Centre for Labour Studies and Social Protection,
                      TISS Guwahati
                    </td>
                    <td>Invited talk</td>
                    <td>2022</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Mr Anupam Joya Sharma</td>
                    <td>
                      a doctoral fellow of Social Epidemiology at IIT Gandhinagar
                    </td>
                    <td>Invited talk</td>
                    <td>20/12/2021</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Dr Aarushi Kehkar Malhotra (online)</td>
                    <td>
                      Senior Manager of Research, Advocacy, and Wellness at Sirona
                      Hygiene Foundation
                    </td>
                    <td>Invited talk</td>
                    <td>11/12/2021</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Mr Sahbaz Ahmed and Mr Syed Rizwan Ahmed</td>
                    <td>Advocates from Gauhati High Court</td>
                    <td>Invited talk</td>
                    <td>9/12/2021</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>
                      Ms. Archana Borthakur of Priya Bondhu &amp; Uttam Teron of
                      Parijat Academy
                    </td>
                    <td>
                      Ms. Archana Borthakur of Priya Bondhu &amp; Uttam Teron of
                      Parijat Academy
                    </td>
                    <td>Invited talk</td>
                    <td>2021</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Dr. Ashok Kumar Das, and Dr. Mythili Hazarika</td>
                    <td>
                      Dr. Ashok Kumar Das, Professor in the Department of Head and
                      Neck Surgery at Dr. B. Barooah Cancer Institute, Guwahati, and
                      Dr. Mythili Hazarika, Associate Professor of Clinical Psychology
                      at Gauhati Medical College and Hospital
                    </td>
                    <td>Invited talk</td>
                    <td>31/5/21</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Mr. Miguel Das Queah</td>
                    <td>Executive Director, UTSAH</td>
                    <td>Invited talk</td>
                    <td>2020</td>
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
                    <td>
                      Dr. T Luithuiwung Awungshi, Assistant Professor and Coordinator, Department of Social Work.
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Dr. Amlan Das, Department of Social Work

                      <hr/>

                      Dr. Priyanka Patowari, Assistant Professor and Coordinator,
                      Department of Social Work

                      <hr />
                      Dr. Moses Newme, Assistant Professor, Department of Social Work

                      <hr />
                      Ms. Joyeeta Bhattacharjee, Assistant Professor, Department of
                      Social Work

                      <hr />
                      Ms. Nabanita Hazarika, Assistant Professor, Department of Social
                      Work

                      <hr />
                      Mr. Bikash Chetry, Assistant Professor, Department of Social
                      Work

                      <hr />
                      Dr. Madhu Monjuri Gohain, Assistant Professor, Department of
                      Social Work

                      <hr />
                      Dr. T. Luithuiwung Awungshi, Assistant Professor, Department of
                      Social Work
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>External Expert (Academic)</td>
                    <td>
                      Dr. Razdan Sarim Rahman, Assistant Professor and Chairperson,
                      Centre for Livelihood and Social Entrepreneurship, TISS
                      Guwahati-Off Campus
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Expert (Industry)</td>
                    <td>
                      Mr. Jeet Jyoti Das, Director, Nurture and Foster Pvt. Ltd.
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
              The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

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
                    <td>Prof. (Dr.) Sajal Nag</td>
                    <td>Dean, RSHSS</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2.</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Priyanka Patowari</td>
                    <td>Assistant Professor, Department of Social Work, RSHSS</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. T Luithuiwung Awungshi</td>
                    <td>Assistant Professor, Department of Social Work, RSHSS</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">3.</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Gautam Mazumder</td>
                    <td>Professor, Department of Economics, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Swabera Islam</td>
                    <td>Professor, Department of Economics, RSHSS, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Shiela Bora</td>
                    <td>
                      Professor &amp; Advisor, Department of History, RSHSS, RGU
                    </td>
                    <td>External Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div>
          <div>
            <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Ph.D. Research <span style="color: #FF9A1E; font-weight: 500;">and Research Interest</span></h2>

            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th>Sl.no</th>
                    <th>Name</th>
                    <th>Qualification</th>
                    <th>Research</th>
                  </tr>

                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Dr. T Luithuiwung Awungshi</td>
                    <td>Ph.D.</td>
                    <td>Youth, Drug Abuse, Family & Child Welfare</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Amlan Das</td>
                    <td>Ph.D.</td>
                    <td>Disability Studies, Rural Development, Family & Child Welfare</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Madhu Monjuri Gohain</td>
                    <td>Ph.D.</td>
                    <td>Residential Education and Migration</td>
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
                            href="assets/Departmentalpdf/AY 2022-23 BSW.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BSW.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2023-24 BSW.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BSW.pdf
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
                            href="assets/Departmentalpdf/Old syllabus MSW.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i>Old syllabus MSW.pdf
                            <i class="fa fa-download"></i>
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
                        </strong></a>
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
