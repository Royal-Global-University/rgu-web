@extends('frontend.master')
@section('content')
    <div style="background-image: url(https://media.rgu.ac/department-all/bg.svg); background-size: cover;">

        <div class="mobile" >
            @include('frontend/components/mobileheader')
          <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-finearts/mobile-fineart-up.png" alt="">

          <div class="container">
            <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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
                        <strong style="color: #023e8a;" class="#">Master of Fine Arts (MFA)</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 Years
                    </td>
                    <td>
                      <a target="_blank" href="programs-Master-of-Fine-Arts-MFA"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Fine Arts (BFA)</strong><br>
                        Honours / Honours with Research
                      </p>
                    </td>
                    <td class="para1">
                      4 Years
                    </td>
                    <td>
                      <a target="_blank" href="programs-Bachelor-of-Fine-Arts-BFA"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>

          <img class="pb-3" src="https://media.rgu.ac/department-all/dept-finearts/mobile-fineart-down.png" alt="">

        </div>

        <div class="website">
            @include('frontend/components/aheader')
          <img class="pb-3" src="https://media.rgu.ac/department-all/dept-finearts/web-fineart-up.png" alt="">

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
                        <strong style="color: #023e8a;" class="#">Master of Fine Arts (MFA)</strong>
                      </p>
                    </td>
                    <td class="para1">
                      2 Years
                    </td>
                    <td>
                      <a target="_blank" href="programs-Master-of-Fine-Arts-MFA"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                  <tr class="align-middle">
                    <td>2.</td>
                    <td>
                      <p class="para1">
                        <strong style="color: #023e8a;" class="#">Bachelor of Fine Arts (BFA)</strong><br>
                        Honours / Honours with Research
                      </p>
                    </td>
                    <td class="para1">
                      4 Years
                    </td>
                    <td>
                      <a target="_blank" href="programs-Bachelor-of-Fine-Arts-BFA"><button type="button"
                          style="background-color: #FF9A1E; color: #fff;"
                          class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>

          <img class="pb-3" src="https://media.rgu.ac/department-all/dept-finearts/web-fineart-down.png" alt="">

        </div>

        <div class="container pb-5">

          <div>
            <div>

              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

              <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
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

                <div>
                  <h2 class="headd3 fw-bold text-dark p-3">2025</h2>
                </div>

                <table class="overflow-hidden table text-wrap table-bordered border-top mb-2">
                  <thead class="text-white" style="background-color: #27467a">
                    <tr>
                      <th class="font-weight-bold text-white">Date of Visit</th>
                      <th class="font-weight-bold text-white">Name and Designation</th>
                      <th class="font-weight-bold text-white">Purpose of the visit</th>
                    </tr>
                  </thead>
                  <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">

                    <tr>
                      <td>26 January 2025</td>
                      <td>Art Competition</td>
                      <td>
                        1. The competition received an overwhelming response, with a large number of students
                        participating.<br>
                        2. The quality of submissions was exceptionally high, showcasing the creativity and skill of our
                        students.<br>
                        3. The event fostered a sense of community and inspired students to push their artistic boundaries.
                      </td>
                    </tr>
                    <tr>
                      <td>27 - 31 January 2025</td>
                      <td>AIU North East Zone Youth Festival</td>
                      <td>1st Position - Installation: Paimalie Chuilo, Rakuyio Arricho, Ruisdael Narengbam, Rickyshi Suiam
                        (BFA 8th Semester)</td>
                    </tr>
                    <tr>
                      <td>27 - 31 January 2025</td>
                      <td>AIU North East Zone Youth Festival</td>
                      <td>2nd Position - Poster Making: Sanenti Longchari (BFA 8th Semester)</td>
                    </tr>
                    <tr>
                      <td>27 - 31 January 2025</td>
                      <td>AIU North East Zone Youth Festival</td>
                      <td>2nd Position - Clay Modelling: Paimalie Chuilo (BFA 8th Semester)</td>
                    </tr>
                    <tr>
                      <td>27 - 31 January 2025</td>
                      <td>AIU North East Zone Youth Festival</td>
                      <td>2nd Position - Collage: Rakuyio Arricho (BFA 8th Semester)</td>
                    </tr>
                    <tr>
                      <td>27 - 31 January 2025</td>
                      <td>AIU North East Zone Youth Festival</td>
                      <td>3rd Position - Western Group Song: Shanessa Annette Nonglang (BFA 2nd Semester)</td>
                    </tr>
                    <tr>
                      <td>27 - 31 January 2025</td>
                      <td>AIU North East Zone Youth Festival</td>
                      <td>4th Position - Rangoli: Bilkis Begum (BFA 8th Semester)</td>
                    </tr>
                    <tr>
                      <td>11 February 2025</td>
                      <td>Dhiraj Rabha, Visual Artist</td>
                      <td>Interactive Session cum Art Workshop</td>
                    </tr>
                    <tr>
                      <td>13 February 2025</td>
                      <td>Dr Mousumi Deka, Assistant Professor & Mr Kishan Bagdi, Assistant Professor</td>
                      <td>A field visit to Hayagriva Madhava Temple and Kedar Temple, Hajo</td>
                    </tr>
                    <tr>
                      <td>3 - 7 March 2025</td>
                      <td>AIU North East Zone Youth Festival (National Level)</td>
                      <td>2nd Position - Installation: Ruisdael Narengbam, Rakuyio Ariicho, Paimalie Chuilo, Rickushi Suiam
                        (8th Sem)</td>
                    </tr>
                    <tr>
                      <td>3 - 7 March 2025</td>
                      <td>AIU North East Zone Youth Festival (National Level)</td>
                      <td>2nd Position - On the Spot Painting: Rakuyio Ariicho (8th Sem)</td>
                    </tr>
                    <tr>
                      <td>3 - 7 March 2025</td>
                      <td>AIU North East Zone Youth Festival (National Level)</td>
                      <td>2nd Position - Poster Making: Sanenti Longchari (8th Sem)</td>
                    </tr>
                    <tr>
                      <td>3 - 7 March 2025</td>
                      <td>AIU North East Zone Youth Festival (National Level)</td>
                      <td>4th Position - Collage: Rakuyio Ariicho (8th Sem);<br>3rd - Western Group Song: Shanessa Annette
                        (2nd Sem);<br>4th - Clay Modelling: Paimalie Chuilo (8th Sem)</td>
                    </tr>
                    <tr>
                      <td>3 - 7 March 2025</td>
                      <td>AIU North East Zone Youth Festival (National Level)</td>
                      <td>4th Position - Clay Modelling: Paimalie Chuilo (8th Sem)</td>
                    </tr>
                    <tr>
                      <td>3 - 7 March 2025</td>
                      <td>AIU North East Zone Youth Festival (National Level)</td>
                      <td>3rd Position - Western Group Song: Shanessa Annette (2nd Sem)</td>
                    </tr>

                  </tbody>
                </table>

              </div>
            </div>
          </div>

          <div>
            <div>

              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

              <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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
                        Dr. Sumanta Dutta Chowdhury, Assistant Professor and Co-ordinator, RSFA
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

          <div>
            <div>

              <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

              <div class="table-responsive">
                <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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

          <div>

            <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
              Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>

            <div class="p-2">
              <div class="row">
                <div class="col-lg-12">
                  <div class="accordion para1" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><strong>
                            Under Graduate
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="row">
                            <a href="https://media.rgu.ac/department-all/syllabus-new/15_RSFA/BFA Syllabus  AY April 2025 - docx.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i> Syllabus - BACHELORS OF FINE ARTS (BFA)
                              <i class="fa fa-download"></i>
                            </a>
                            <a href="https://media.rgu.ac/department-all/syllabus-new/15_RSFA/Structure of syllabus 25 -  BFA.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i>Structure of Syllabus - BACHELORS OF FINE ARTS (BFA)
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <strong>
                            Post Graduate
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="row">
                            <a href="https://media.rgu.ac/department-all/syllabus-new/15_RSFA/MFA Syllabus  AY April 2025.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i>Syllabus - MASTER OF FINE ARTS (MFA)
                              <i class="fa fa-download"></i>
                            </a>

                            <a href="https://media.rgu.ac/department-all/syllabus-new/15_RSFA/Structure of syllabus 25 -  MFA.pdf"
                              target="_blank">
                              <i class="fa fa-file-text px-2"></i>Structure of Syllabus - MASTER OF FINE ARTS (MFA)
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><strong>
                            Doctoral Programme
                          </strong>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <a href="phd" class="para1" target="_blank">
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
@endsection
