@extends('frontend.master')
@section('content')
        <div style="background-image: url(mobile-assets/dept-nursing/s2-bg-img-1.webp);">
          <div class="mobile" >
            @include('frontend/components/mobileheader')
                <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-nursing/mobile-nursing.png" alt="">
          </div>

          <div class="website">
            @include('frontend/components/aheader')
            <img src="mobile-assets/dept-nursing/web-nursing.png" alt="">
          </div>
          </div>

      <div class="container pb-5 pt-3">


        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              1. Events & Achievements
            </h3>
            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="font-weight-bold text-white">Date</th>
                    <th class="font-weight-bold text-white">
                      Name &amp; Designation
                    </th>
                    <th class="font-weight-bold text-white">Purpose of visit</th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>20th November, 2018</td>
                    <td>Dr.Rupam Das, Diabetologists, Downtown Hospital.</td>
                    <td>Worlds Diabetes Day</td>
                  </tr>
                  <tr>
                    <td>12th February, 2019</td>
                    <td>
                      "Mrs. Raihana Akhtar Senior Tutor, NEPNI College of Nursing"
                    </td>
                    <td>World Epilepsy Day</td>
                  </tr>
                  <tr>
                    <td>8th March, 2019</td>
                    <td>"Ms. Roshni Hasan Mrs. United Nation 2017 Winner"</td>
                    <td>International Women’s Day</td>
                  </tr>
                  <tr>
                    <td>24th March, 2019</td>
                    <td>
                      Prof. (Dr.) Bipul Nath Professor, Royal School of Pharmacy
                    </td>
                    <td>World Tuberculosis Day</td>
                  </tr>
                  <tr>
                    <td>5th April, 2019</td>
                    <td>
                      "Dr.Dhrubojyoti Deka Medical Consultant under WHO-RNTCP
                      (North-east Region)"
                    </td>
                    <td>World Health Day</td>
                  </tr>
                  <tr>
                    <td>31th May, 2019</td>
                    <td>
                      Prof. (Dr.) Nikhil Kumar Churangoo Dean, Royal School of Life
                      Sciences
                    </td>
                    <td>World No Tobacco Day</td>
                  </tr>
                  <tr>
                    <td>6-12th May, 2019</td>
                    <td>
                      "Mrs. Ellora Brahma Registrar, Assam Nurses’ Midwives and Health
                      Visitors Council"
                    </td>
                    <td>International Nurses Week</td>
                  </tr>
                  <tr>
                    <td>10th September, 2019</td>
                    <td>
                      "Dr. Jwmwishshree Boro, Assistant Professor Royal School of
                      Behavioural and Applied Sciences"
                    </td>
                    <td>World Suicide Prevention Day</td>
                  </tr>
                  <tr>
                    <td>10th October, 2019</td>
                    <td>
                      Dr.Shraddha Basu, Assistant Professor Royal School Of Pharmacy
                    </td>
                    <td>World Mental Health Day</td>
                  </tr>
                  <tr>
                    <td>1st December, 2019</td>
                    <td>
                      "Ms. Reshmi Rekha Bhuyan Asst. Director AIDS Control Society of
                      Assam, GHY"
                    </td>
                    <td>Worlds AIDS Day</td>
                  </tr>
                  <tr>
                    <td>10th December, 2019</td>
                    <td>
                      "Prof. (Dr.) Shiela Bora, Professor and Advisor, Royal School of
                      Humanities and Social Sciences"
                    </td>
                    <td>Human Rights Day</td>
                  </tr>
                  <tr>
                    <td>4th February, 2020</td>
                    <td>
                      "Mrs. Uromi Deori Lecturer, Medical Surgical Nursing, Marwari
                      Hospital"
                    </td>
                    <td>World Cancer Day</td>
                  </tr>
                  <tr>
                    <td>14th April, 2020</td>
                    <td>
                      Ms. Jasper Damaris, Nursing Superintendent, HC College,
                      Uttarakhand
                    </td>
                    <td>Webinar on infection control</td>
                  </tr>
                  <tr>
                    <td>17th April, 2020</td>
                    <td>Mrs. Phalakshi V Manjerekar, Director PD Hinduja Hospital</td>
                    <td>"Webinar on Quality Assurance: COVID 19 Pandemic"</td>
                  </tr>
                  <tr>
                    <td>17th April, 2020</td>
                    <td>
                      Dr. Momi Neog, Nursing Superintendent, Dibrughar Medical College
                    </td>
                    <td>"Quality Assurance: COVID -19 Pandemic"</td>
                  </tr>
                  <tr>
                    <td>11th June, 2020</td>
                    <td>Lt. Col. M Jayalakshmi Principal Army institute, Guwahati</td>
                    <td>Webinar on The New Normal: Tune in to stay Healthy</td>
                  </tr>
                  <tr>
                    <td>12th June, 2020</td>
                    <td>
                      "Dr. Ramkanth S, Prof Karpagam college of Pharmacy Prof.
                      Pushpita Chakraborty, Principal International Hospital,
                      Guwahati"
                    </td>
                    <td>
                      Webinar on Boosting your Immunity system through better life
                      style
                    </td>
                  </tr>
                  <tr>
                    <td>18th June, 2020</td>
                    <td>
                      "Dr. Arindam Bhardwaz, Associate Professor, Aarthus University
                      Denmark. Dr. Rakesh Periwal, Consultant, Apollo Hospital
                      Guwahati"
                    </td>
                    <td>Emergence of New Heroes</td>
                  </tr>
                  <tr>
                    <td>3rd July, 2020</td>
                    <td>
                      Maj. Gayatri Subba, Matron Army Hospital Research &amp;
                      Referral, New Delhi.
                    </td>
                    <td>
                      Webinar on Medical Intensive care Nursing: Ventilator Care.
                    </td>
                  </tr>
                  <tr>
                    <td>10th July, 2020</td>
                    <td>Ms. Lalchhanhimi, Principal, Mizoram Nursing College</td>
                    <td>
                      Webinar on Understanding Cervical Cancer: Protect Women’s Life.
                    </td>
                  </tr>
                  <tr>
                    <td>16th July, 2021</td>
                    <td>
                      "1. Dr. Sunita Choudhury Dept of Obs &amp; Gynae nursing,
                      College of Nursing, G.S.V.M Medical College campus, Kanpur, U.P
                      2. Prof. Rossily Nirmal Principal/HOD Dept of Obs &amp; Gynae
                      nursing, Sahara College of Nursing, Lucknow, UP 3. Dr. Aparna
                      Pandey Vice- Principal/HOD Dept of Medical"
                    </td>
                    <td>Webinar on Nursing as a profession</td>
                  </tr>
                  <tr>
                    <td>16th July, 2021</td>
                    <td>Surgical Nursing Sahara College of Nursing, Lucknow, UP</td>
                    <td>Webinar on Nursing as a profession</td>
                  </tr>
                  <tr>
                    <td>17th July, 2020</td>
                    <td>
                      "Dr. Shantana Das, Medical Officer Dept. Of Pain &amp;
                      Palliative care, State Cancer Institute, GMCH Prof. (Dr.) Latha
                      Srikanth, JIET College of Nursing"
                    </td>
                    <td>Webinar on Emerging Palliative Care Issues</td>
                  </tr>
                  <tr>
                    <td>5th August, 2020</td>
                    <td>Prof (Dr) Gayatri Bezbaruah, HOD of Paediatrics, GMCH</td>
                    <td>Webinar on Support Breast feeding for Healthier Plant</td>
                  </tr>
                  <tr>
                    <td>17th August, 2020</td>
                    <td>
                      "Prof. Prihnupriya Biswas, Principal, WB Govt. College Ms. Kijum
                      Sara Karga, Deputy. Director, DHS, AP"
                    </td>
                    <td>
                      Webinar on Strategies to Raise the Nursing Standard Beyond books
                    </td>
                  </tr>
                  <tr>
                    <td>21th August, 2020</td>
                    <td>Dr. Suranjeen Prasad Pallipanula, MD Asso. Director</td>
                    <td>
                      Webinar on Role and Responsibility of a Manager In Labour Room
                    </td>
                  </tr>
                  <tr>
                    <td>16th October, 2020</td>
                    <td>
                      "Dr. Suresh Chakraborthy, HOD, Dept. Of Psychiatry, GMCH Dr.
                      Amal Baishya, Asst. Prof, Dept. Of Psychiatry, Diphu Medical
                      College"
                    </td>
                    <td>Webinar Raising Awareness on Drug Abuse</td>
                  </tr>
                  <tr>
                    <td>20th October, 2020</td>
                    <td>Ms. Roopa Rawat Singhvi, Nursing Officer, AIIMS Delhi</td>
                    <td>Webinar on Raising Awareness on Osteoporosis</td>
                  </tr>
                  <tr>
                    <td>22th January, 2021</td>
                    <td>
                      Dr. Sudhir K Jain, Diabetologist, SUN Valley Hospital, Guwahati
                    </td>
                    <td>Webinar on Academic Awareness on Diabetic Foot</td>
                  </tr>
                  <tr>
                    <td>1st December, 2021</td>
                    <td>"Dr. Ravikar Singh, HIV (EMTCT) Consultant Assam"</td>
                    <td>World Aids Day</td>
                  </tr>
                  <tr>
                    <td>28th April, 2022</td>
                    <td>
                      "Mrs. Chandita Baruah Matron, GMCH Mrs. Anjali Das,
                      Sister-in-charge, Paediatric Ward"
                    </td>
                    <td>Immunization Week</td>
                  </tr>
                  <tr>
                    <td>11th May, 2022</td>
                    <td>
                      "Chief Guest- Mrs. Ellora Brahma Registrar, Assam Nurses’
                      Midwives and Health Visitors Council Guest of Honor: Prof.
                      Puspita Chakraborty, Principal, Apollo College of Nursing,
                      Guwahati"
                    </td>
                    <td>International Nurses Week</td>
                  </tr>
                  <tr>
                    <td>17th July, 2022</td>
                    <td>
                      Mrs. S Andal, Professor and HOD MHN and Research Coordinator,
                      Kanpur.
                    </td>
                    <td>World Mental Health Day</td>
                  </tr>
                  <tr>
                    <td>"5th September. 2022"</td>
                    <td>
                      Prof. (Dr.) Hemeswari Bhuyan Principal, Regional College of
                      Nursing
                    </td>
                    <td>Lamp Lighting &amp; Oath Taking Ceremony</td>
                  </tr>
                  <tr>
                    <td>6th April, 2023</td>
                    <td>
                      Mr. Biren Tokhbi, Principal of Mahuapara Primary School &amp;
                      Anganwadi Centre
                    </td>
                    <td>World Health Day</td>
                  </tr>
                  <tr>
                    <td>14th July, 2023</td>
                    <td>
                      "1. Dr. Sudha A Raddi Principal, KLE, Belgavi, Karnataka 2. Dr.
                      Elsa Sanatombi Devi Professor Manipal University, Karnataka. 3.
                      Prof (Dr) Manashi Sengupta Dean Cum Principal, Faculty of
                      Nursing, ADTU. 4. Dr. Anupam Das Associate Professor, RGU"
                    </td>
                    <td>
                      National Conference On Transformation Of Nursing Education
                      Through Innovative Teaching Strategies
                    </td>
                  </tr>
                  <tr>
                    <td>1st August, 2023</td>
                    <td>
                      "Ms. Gurpreet Kaur. Anand Sr. Manager, Branding &amp;
                      Communications"
                    </td>
                    <td>1st Semester Student Orientation Program</td>
                  </tr>
                  <tr>
                    <td>19th October, 2023</td>
                    <td>
                      Prof. (Dr.) Unmona Boragohain Saikia Principal, AIIMS (CON),
                      Guwahati, Assam
                    </td>
                    <td>Lamp Lighting &amp; Oath Taking Ceremony</td>
                  </tr>
                  <tr>
                    <td>"24th April 2024- 26th April 2024"</td>
                    <td>
                      "1. 1st Day: Resource person- Prof. (Dr) Suresh K Sarma.
                      Principal College of Nursing, AIIMS Jodhpur 2. 2nd Day: Dr.
                      Hemanta Saikia, Assistant Professor, Assam Agriculture
                      University, Jorhat 3. 3rd day: Prof. (Dr) Alak Kumar Buragohain,
                      chairperson of Academics, RGU"
                    </td>
                    <td>"3 Days FDP Topic: Emerging Trends in Nursing Research"</td>
                  </tr>
                  <tr>
                    <td>8th – 10th May 2024</td>
                    <td>
                      "1. Dr. Putul Mahanta Professor, Head of Forensic Medicine.
                      Nalbari Medical College, Nalbari, Assam 2. Prof. Leena K. Das
                      Principal, Woodland Institute of Nursing, Meghalaya, Shillong."
                    </td>
                    <td>International Nurses Week</td>
                  </tr>
                  <tr>
                    <td>9th August 2024</td>
                    <td>
                      "Ms. Tinnat Atifa Masood Soft Skill Traine, NLP, IELTS, Business
                      Communication"
                    </td>
                    <td>Workshop on Educating Nurses for the Future</td>
                  </tr>
                  <tr>
                    <td>3rd September 2024</td>
                    <td>
                      "1. Dr. Swati Jalan Consultant Obst &amp; Gynae, MBBS, DGO, MD
                      Infertility specialist and laparoscopic surgeon IHR Bharalumukh"
                    </td>
                    <td>State Conference on Contemporary Issues in OBG</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      "2. Dr. Panchanan Das Professor Obst &amp; Gynae (GMCH) 3. Prof.
                      Nongmeikapam Monika Associate Professor Faculty of Nursing Assam
                      Down Town University"
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>19th September 2024</td>
                    <td>
                      Mrs. Papori Pathak Choudhury, Associate Professor, Dept. of
                      Child Health Nursing, Asian Institute of Nursing Education
                    </td>
                    <td>World Patient Safety Day</td>
                  </tr>
                  <tr>
                    <td>8th October 2024</td>
                    <td>
                      "Dr. Mythili Hazarika Associate Professor &amp; Head Dept. of
                      Clinical Psychology, GMCH"
                    </td>
                    <td>World Mental Health Day</td>
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
              2. Departmental Research Statistics
            </h3>
            <div class="text-dark">
              <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
                <a
                  href="https://www.rgu.ac/research-and-development-rsaps-physics.php"
                >
                  Click More</a
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
              3. The Board of Studies (BoS)
            </h3>
            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
                <thead class="text-white" style="background-color: #27467a">
                  <th class="text-white">#</th>
                  <th class="text-white">Position in S-BoS</th>
                  <th class="text-white">Name and Designation</th>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>Prof. (Dr) Kaberi Saikia (Principal, RSN)</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Y. Renubala Devi (Midwifery and Obstetrics Nursing)
                      <hr />
                      Dr. Punam Bebbarma (Child Health Nursing)
                      <hr />
                      Monika Kalita (Medical Surgical Nursing)
                      <hr />
                      Rumi Talukdar (Mental Health Nursing
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Professors of the School Members (Ex-Officio)</td>
                    <td>Prof. (Dr) Hemeswari Bhuyan (Community Health Nursing)</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Experts for each Department (Academic)</td>
                    <td>
                      Prof.(Dr) Nirmali Gogoi (Vice Principal, Faculty of Nursing,
                      Assam Down Town University, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>External Experts for each Department (Industry)</td>
                    <td>
                      Capt. Minimol Louise, Principal , Army Institute of Nursing,
                      Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>
                      Two Faculty members of the School nominated by the Vice
                      Chancellor
                    </td>
                    <td>Rumi Talukdar (Mental Health Nursing</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Registrar, Member Secretary (Ex-officio)</td>
                    <td>Dr. D N Singh, Registrar or his nominee</td>
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
              4. The Departmental Research Committee (DRC)
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
                    <td>Prof.(Dr) Kaberi Saikia</td>
                    <td>Principal RSN</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2" class="align-middle">Two Professors</td>
                    <td>Prof(Dr) Hemeswari Bhuyan</td>
                    <td>Vice Principal</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Prof (Dr) Punam Debbarma</td>
                    <td>Professor</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">3</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof(Dr) L.K. Nath</td>
                    <td>Dean, RSP</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof (Dr)L. Ladu Singh</td>
                    <td>
                      Dept. of Mathematics.<br />Chief Advisor Research &amp;
                      Development
                    </td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof (Dr) Bandan Das</td>
                    <td>Deputy Director IQAC, Dept of Botany</td>
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
            5. Course Structure & Syllabus
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
                        <div class="accordion-body">
                          <div class="row">
                            <a
                              href="assets/Departmentalpdf/B.Sc. Nursing.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> B.Sc. Nursing.pdf
                              <i class="fa fa-download"></i>
                            </a>
                            <a href="assets/Departmentalpdf/GNM.pdf" target="_blank">
                              <i class="fa fa-file-text px-2"></i> GNM.pdf
                              <i class="fa fa-download"></i>
                            </a>
                            <a
                              href="assets/Departmentalpdf/Old syllabus B.Sc Nursing.pdf"
                              target="_blank"
                            >
                              <i class="fa fa-file-text px-2"></i> Old syllabus B.Sc
                              Nursing.pdf <i class="fa fa-download"></i>
                            </a>
                          </div>
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
                          href="doctoral-programme"
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
@endsection
