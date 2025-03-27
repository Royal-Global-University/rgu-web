@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-mathematics/s2-bg-img-1.webp);">
          <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-mathematics/mobile-mathematics.png" alt="">

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
                        <th class="text-white">S.NO.</th>
                        <th class="text-white">NAME</th>
                        <th class="text-white">DESIGNATION</th>
                        <th class="text-white">PURPOSE OF VISIT</th>
                        <th class="text-white">DATE OF VISIT</th>
                      </thead>
                      <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                        <tr class="para1">
                          <td>1</td>
                          <td>Mr. Mayur Bora</td>
                          <td>Writer and Motivational Speaker</td>
                          <td>Orientation and Student Development Program</td>
                          <td>7/26/2018</td>
                        </tr>
                        <tr class="para1">
                          <td>2</td>
                          <td>Prof. T. R. Sesashadri</td>
                          <td>Delhi University</td>
                          <td>Student Interactive Session</td>
                          <td>11/20/2018</td>
                        </tr>
                        <tr class="para1">
                          <td>3</td>
                          <td>Sqn. Ldr. Pranjal Deka</td>
                          <td>
                            A Senior Officer Rank in the Indian Air Force, Wing Commander
                          </td>
                          <td>Re Orientation Programme</td>
                          <td>1/18/2019</td>
                        </tr>
                        <tr class="para1">
                          <td>4</td>
                          <td>Prof. Krishna B Athreya</td>
                          <td>IOWA State University, USA</td>
                          <td>Invited talk</td>
                          <td>2/24/2020</td>
                        </tr>
                        <tr class="para1">
                          <td>5</td>
                          <td>Ms. Priyanka Das Rajkakati</td>
                          <td>Indian Women Scientist staying in France</td>
                          <td>Interactive Session</td>
                          <td>3/13/2020</td>
                        </tr>
                        <tr class="para1">
                          <td>6</td>
                          <td>Mr. Diganta Das</td>
                          <td>Senior Journalist &amp; Director, DPRC</td>
                          <td>Motivational Talk</td>
                          <td>12/3/2021</td>
                        </tr>
                        <tr class="para1">
                          <td>7</td>
                          <td>Prof. (Dr.) Manjil Bhargava</td>
                          <td>Renowned Mathematician and Field Medalist</td>
                          <td>Online invited talk</td>
                          <td>2/25/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>8</td>
                          <td>Prof. (Dr.) Bipan Hazarika</td>
                          <td>Department of Mathematics, Gauhati University</td>
                          <td>Invited talk</td>
                          <td>5/30/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>9</td>
                          <td>Dr. Mridula Kanoria</td>
                          <td>
                            Professor, Department of Mathematics, Sister Nivedita
                            University, Kolkata.
                          </td>
                          <td>Invited talk</td>
                          <td>8/26/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>10</td>
                          <td>Retd. Prof. (Dr.) Debabrata Datta</td>
                          <td>Senior Scientist, BARC, Mumbai.</td>
                          <td>Interaction with Senior Scientist</td>
                          <td>10/31/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>11</td>
                          <td>Retd. Prof. (Dr.) Debabrata Datta</td>
                          <td>Senior Scientist, BARC, Mumbai.</td>
                          <td>Invited talk</td>
                          <td>11/4/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>12</td>
                          <td>Dr. Avishek Adhikari</td>
                          <td>
                            Professor, Department of Mathematics, Presidency University,
                            Kolkata, India.
                          </td>
                          <td>Invited talk</td>
                          <td>11/24/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>13</td>
                          <td>Prof. (Dr.) Jaydeb Sarkar</td>
                          <td>Indian Statistical Institue, Bangalore, India.</td>
                          <td>Invited talk</td>
                          <td>12/22/2022</td>
                        </tr>
                        <tr class="para1">
                          <td>14</td>
                          <td>Dr. Pinki Goswami</td>
                          <td>
                            Assistant Professor, University of Science and Technology,
                            Meghalaya
                          </td>
                          <td>Invited talk</td>
                          <td>8/8/2023</td>
                        </tr>
                        <tr class="para1">
                          <td>15</td>
                          <td>Prof.(Dr.) Sukanta Pati</td>
                          <td>Department of Mathematics, IIT Guwahati</td>
                          <td>Invited talk</td>
                          <td>9/29/2023</td>
                        </tr>
                        <tr class="para1">
                          <td>16</td>
                          <td>Prof. (Dr.) Alex Ely Kossovsky</td>
                          <td>Independent Researcher, New York, USA.</td>
                          <td>Invited talk</td>
                          <td>3/22/2024</td>
                        </tr>
                        <tr class="para1">
                          <td>17</td>
                          <td>Prof. (Dr.) Shakuntala Choudhury</td>
                          <td>Bridgewater, New Jersey, USA</td>
                          <td>Invited talk</td>
                          <td>4/22/2024</td>
                        </tr>
                        <tr class="para1">
                          <td>18</td>
                          <td>Prof.(Dr.) Laishram Ladu Singh</td>
                          <td>Professor Emeritus, RGU, Ex. VC Bodoland University</td>
                          <td>Invited talk</td>
                          <td>5/2/2024</td>
                        </tr>
                        <tr class="para1">
                          <td>19</td>
                          <td>Prof. (Dr.) Meir Shillor</td>
                          <td>
                            Distinguished Professor, Department of Mathematics and
                            Statistics, Ookland University, USA
                          </td>
                          <td>Invited talk</td>
                          <td>8/16/2024</td>
                        </tr>
                        <tr class="para1">
                          <td>20</td>
                          <td>Prof. (Dr.) Bhupen Deka</td>
                          <td>Department of Mathematics, IIT Guwahati</td>
                          <td>Invited talk</td>
                          <td>8/29/2024</td>
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
                      <a
                        href="https://www.rgu.ac/research-and-development-rsaps-mathmatics.php"
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
                        <th class="text-white">S.NO.</th>
                        <th class="text-white">POSITION IN D-BOS</th>
                        <th class="text-white">NAME AND DESIGNATION</th>
                      </thead>
                      <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                        <tr>
                          <td>1</td>
                          <td>Convener (Ex-Officio)- Head of the Department</td>
                          <td>Dr. Kamal Debnath, Associate Professor &amp; HOD</td>
                        </tr>
                        <tr>
                          <td rowspan="12" class="align-content-center">2</td>
                          <td rowspan="12" class="align-content-center">
                            All Faculty members of the Department Members (Ex-Officio)
                          </td>
                          <td>Prof. (Dr.) Anuradha Devi, Professor &amp; Dean</td>
                        </tr>
                        <tr>
                          <td>Prof. (Dr.), Rita Choudhury, Professor</td>
                        </tr>
                        <tr>
                          <td>Prof. (Dr.) Dilip Chandra Nath, Professor Emeritus</td>
                        </tr>
                        <tr>
                          <td>Prof. (Dr.) Laishram Ladusingh, Professor Emeritus</td>
                        </tr>
                        <tr>
                          <td>Dr. Bimalendu Kalita, Associate Professor</td>
                        </tr>
                        <tr>
                          <td>Dr. Bapan Kalita, Associate Professor</td>
                        </tr>
                        <tr>
                          <td>Dr. Anuja Sinha, Assistant Professor</td>
                        </tr>
                        <tr>
                          <td>Mr. H. Imo Mani Singha, Assistant Professor</td>
                        </tr>
                        <tr>
                          <td>Dr. DhimanDutta, Assistant Professor</td>
                        </tr>
                        <tr>
                          <td>Dr. Chayanika Baruah, Assistant Professor</td>
                        </tr>
                        <tr>
                          <td>Dr. Dipankar Saha, Assistant Professor</td>
                        </tr>
                        <tr>
                          <td>Dr. Parismita Phukan, Assistant Professor</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>External Expert (Academic)</td>
                          <td>
                            Prof. (Dr.) Dipak Sarma, Professor, Department of Mathematics,
                            Cotton University
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>External Expert (Industry)</td>
                          <td>
                            Prof.(Dr.) Joyanti Chutia,
                            Emeritusscientist,IASST,FormerDirector,IASST
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
                        <th class="text-white">S.NO.</th>
                        <th class="text-white">CONTENT</th>
                        <th class="text-white">NAME OF THE MEMBER</th>
                        <th class="text-white">DESIGNATION</th>
                        <th class="text-white">DESIGNATION IN THE COMMITTEE</th>
                      </thead>
                      <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                        <tr>
                          <td>1</td>
                          <td>Head of the Department</td>
                          <td>Dr. Bimalendu Kalita</td>
                          <td>Associate Professor &amp; HoD</td>
                          <td>Chairperson</td>
                        </tr>
                        <tr>
                          <td rowspan="2">2</td>
                          <td rowspan="2" class="align-middle">Two Professors</td>
                          <td>Prof. (Dr.) Anuradha Devi</td>
                          <td>Professor, Dean RSAPS &amp; Director IQAC.</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td>Prof. (Dr.) Rita Choudhury</td>
                          <td>Professor</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td rowspan="2">3</td>
                          <td rowspan="2" class="align-middle">
                            Two Associate Professors – one of them will be the member
                            secretary
                          </td>
                          <td>Prof. (Dr.) Kamal Debnath</td>
                          <td>Professor</td>
                          <td>Member secretary</td>
                        </tr>
                        <tr>
                          <td>Dr. Bapan Kalita</td>
                          <td>Associate Professor</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td rowspan="2">4</td>
                          <td rowspan="2" class="align-middle">
                            Two Assistant Professors holding Ph.D. degree
                          </td>
                          <td>Dr. Anuja Sinha</td>
                          <td>Assistant Professor</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td>Dr. Dhiman Dutta</td>
                          <td>Assistant Professor</td>
                          <td>Member</td>
                        </tr>
                        <tr>
                          <td rowspan="3">5</td>
                          <td rowspan="3" class="align-middle">
                            Three external members not below the rank of Professors,
                            including members from an allied department, who will be
                            nominated by the URC
                          </td>
                          <td>Prof. (Dr.) Ankur Ganguly</td>
                          <td>
                            Professor, RSET<br />Dean Academics<br />and ic Dean, RSET and
                            RSIT
                          </td>
                          <td>External Member</td>
                        </tr>
                        <tr>
                          <td>Prof. (Dr.) Kaberi Saikia</td>
                          <td>Professor &amp; Principal, Royal School of Nursing</td>
                          <td>External Member</td>
                        </tr>
                        <tr>
                          <td>Prof. (Dr.) Bipul Nath</td>
                          <td>Professor, RSP.</td>
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
                                  href="assets/Departmentalpdf/AY 2023-24 B.Sc. Mathematics.pdf"
                                  target="_blank"
                                >
                                  <i class="fa fa-file-text px-2"></i>AY 2023-24 B.Sc.
                                  Mathematics.pdf <i class="fa fa-download"></i>
                                </a>
                                <a
                                  href="assets/Departmentalpdf/AY 2022-23 B.Sc Mathematics.pdf"
                                  target="_blank"
                                >
                                  <i class="fa fa-file-text px-2"></i>AY 2022-23 B.Sc
                                  Mathematics.pdf <i class="fa fa-download"></i>
                                </a>

                                <a
                                  href="assets/Departmentalpdf/AY-2021-22 B.Sc Mathematics and computing.pdf"
                                  target="_blank"
                                >
                                  <i class="fa fa-file-text px-2"></i>AY-2021-22 B.Sc Mathematics
                                  and computing.pdf <i class="fa fa-download"></i>
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
                                  href="assets/Departmentalpdf/AY 2021-22 M.Sc. Mathematics.pdf"
                                  target="_blank"
                                >
                                  <i class="fa fa-file-text px-2"></i>AY 2021-22 M.Sc.
                                  Mathematics.pdf <i class="fa fa-download"></i>
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

          <div class="website">
            <!--Start Header-->
    @include('frontend/components/aheader')
       <!--End Header-->

    <img class="pb-4" src="mobile-assets/dept-mathematics/mathematics-web.png" alt="">
    <!--About Section-->

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
               <th class="text-white">S.NO.</th>
               <th class="text-white">NAME</th>
               <th class="text-white">DESIGNATION</th>
               <th class="text-white">PURPOSE OF VISIT</th>
               <th class="text-white">DATE OF VISIT</th>
             </thead>
             <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
               <tr class="para1">
                 <td>1</td>
                 <td>Mr. Mayur Bora</td>
                 <td>Writer and Motivational Speaker</td>
                 <td>Orientation and Student Development Program</td>
                 <td>7/26/2018</td>
               </tr>
               <tr class="para1">
                 <td>2</td>
                 <td>Prof. T. R. Sesashadri</td>
                 <td>Delhi University</td>
                 <td>Student Interactive Session</td>
                 <td>11/20/2018</td>
               </tr>
               <tr class="para1">
                 <td>3</td>
                 <td>Sqn. Ldr. Pranjal Deka</td>
                 <td>
                   A Senior Officer Rank in the Indian Air Force, Wing Commander
                 </td>
                 <td>Re Orientation Programme</td>
                 <td>1/18/2019</td>
               </tr>
               <tr class="para1">
                 <td>4</td>
                 <td>Prof. Krishna B Athreya</td>
                 <td>IOWA State University, USA</td>
                 <td>Invited talk</td>
                 <td>2/24/2020</td>
               </tr>
               <tr class="para1">
                 <td>5</td>
                 <td>Ms. Priyanka Das Rajkakati</td>
                 <td>Indian Women Scientist staying in France</td>
                 <td>Interactive Session</td>
                 <td>3/13/2020</td>
               </tr>
               <tr class="para1">
                 <td>6</td>
                 <td>Mr. Diganta Das</td>
                 <td>Senior Journalist &amp; Director, DPRC</td>
                 <td>Motivational Talk</td>
                 <td>12/3/2021</td>
               </tr>
               <tr class="para1">
                 <td>7</td>
                 <td>Prof. (Dr.) Manjil Bhargava</td>
                 <td>Renowned Mathematician and Field Medalist</td>
                 <td>Online invited talk</td>
                 <td>2/25/2022</td>
               </tr>
               <tr class="para1">
                 <td>8</td>
                 <td>Prof. (Dr.) Bipan Hazarika</td>
                 <td>Department of Mathematics, Gauhati University</td>
                 <td>Invited talk</td>
                 <td>5/30/2022</td>
               </tr>
               <tr class="para1">
                 <td>9</td>
                 <td>Dr. Mridula Kanoria</td>
                 <td>
                   Professor, Department of Mathematics, Sister Nivedita
                   University, Kolkata.
                 </td>
                 <td>Invited talk</td>
                 <td>8/26/2022</td>
               </tr>
               <tr class="para1">
                 <td>10</td>
                 <td>Retd. Prof. (Dr.) Debabrata Datta</td>
                 <td>Senior Scientist, BARC, Mumbai.</td>
                 <td>Interaction with Senior Scientist</td>
                 <td>10/31/2022</td>
               </tr>
               <tr class="para1">
                 <td>11</td>
                 <td>Retd. Prof. (Dr.) Debabrata Datta</td>
                 <td>Senior Scientist, BARC, Mumbai.</td>
                 <td>Invited talk</td>
                 <td>11/4/2022</td>
               </tr>
               <tr class="para1">
                 <td>12</td>
                 <td>Dr. Avishek Adhikari</td>
                 <td>
                   Professor, Department of Mathematics, Presidency University,
                   Kolkata, India.
                 </td>
                 <td>Invited talk</td>
                 <td>11/24/2022</td>
               </tr>
               <tr class="para1">
                 <td>13</td>
                 <td>Prof. (Dr.) Jaydeb Sarkar</td>
                 <td>Indian Statistical Institue, Bangalore, India.</td>
                 <td>Invited talk</td>
                 <td>12/22/2022</td>
               </tr>
               <tr class="para1">
                 <td>14</td>
                 <td>Dr. Pinki Goswami</td>
                 <td>
                   Assistant Professor, University of Science and Technology,
                   Meghalaya
                 </td>
                 <td>Invited talk</td>
                 <td>8/8/2023</td>
               </tr>
               <tr class="para1">
                 <td>15</td>
                 <td>Prof.(Dr.) Sukanta Pati</td>
                 <td>Department of Mathematics, IIT Guwahati</td>
                 <td>Invited talk</td>
                 <td>9/29/2023</td>
               </tr>
               <tr class="para1">
                 <td>16</td>
                 <td>Prof. (Dr.) Alex Ely Kossovsky</td>
                 <td>Independent Researcher, New York, USA.</td>
                 <td>Invited talk</td>
                 <td>3/22/2024</td>
               </tr>
               <tr class="para1">
                 <td>17</td>
                 <td>Prof. (Dr.) Shakuntala Choudhury</td>
                 <td>Bridgewater, New Jersey, USA</td>
                 <td>Invited talk</td>
                 <td>4/22/2024</td>
               </tr>
               <tr class="para1">
                 <td>18</td>
                 <td>Prof.(Dr.) Laishram Ladu Singh</td>
                 <td>Professor Emeritus, RGU, Ex. VC Bodoland University</td>
                 <td>Invited talk</td>
                 <td>5/2/2024</td>
               </tr>
               <tr class="para1">
                 <td>19</td>
                 <td>Prof. (Dr.) Meir Shillor</td>
                 <td>
                   Distinguished Professor, Department of Mathematics and
                   Statistics, Ookland University, USA
                 </td>
                 <td>Invited talk</td>
                 <td>8/16/2024</td>
               </tr>
               <tr class="para1">
                 <td>20</td>
                 <td>Prof. (Dr.) Bhupen Deka</td>
                 <td>Department of Mathematics, IIT Guwahati</td>
                 <td>Invited talk</td>
                 <td>8/29/2024</td>
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
             <a
               href="https://www.rgu.ac/research-and-development-rsaps-mathmatics.php"
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
               <th class="text-white">S.NO.</th>
               <th class="text-white">POSITION IN D-BOS</th>
               <th class="text-white">NAME AND DESIGNATION</th>
             </thead>
             <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
               <tr>
                 <td>1</td>
                 <td>Convener (Ex-Officio)- Head of the Department</td>
                 <td>Dr. Kamal Debnath, Associate Professor &amp; HOD</td>
               </tr>
               <tr>
                 <td rowspan="12" class="align-content-center">2</td>
                 <td rowspan="12" class="align-content-center">
                   All Faculty members of the Department Members (Ex-Officio)
                 </td>
                 <td>Prof. (Dr.) Anuradha Devi, Professor &amp; Dean</td>
               </tr>
               <tr>
                 <td>Prof. (Dr.), Rita Choudhury, Professor</td>
               </tr>
               <tr>
                 <td>Prof. (Dr.) Dilip Chandra Nath, Professor Emeritus</td>
               </tr>
               <tr>
                 <td>Prof. (Dr.) Laishram Ladusingh, Professor Emeritus</td>
               </tr>
               <tr>
                 <td>Dr. Bimalendu Kalita, Associate Professor</td>
               </tr>
               <tr>
                 <td>Dr. Bapan Kalita, Associate Professor</td>
               </tr>
               <tr>
                 <td>Dr. Anuja Sinha, Assistant Professor</td>
               </tr>
               <tr>
                 <td>Mr. H. Imo Mani Singha, Assistant Professor</td>
               </tr>
               <tr>
                 <td>Dr. DhimanDutta, Assistant Professor</td>
               </tr>
               <tr>
                 <td>Dr. Chayanika Baruah, Assistant Professor</td>
               </tr>
               <tr>
                 <td>Dr. Dipankar Saha, Assistant Professor</td>
               </tr>
               <tr>
                 <td>Dr. Parismita Phukan, Assistant Professor</td>
               </tr>
               <tr>
                 <td>3</td>
                 <td>External Expert (Academic)</td>
                 <td>
                   Prof. (Dr.) Dipak Sarma, Professor, Department of Mathematics,
                   Cotton University
                 </td>
               </tr>
               <tr>
                 <td>4</td>
                 <td>External Expert (Industry)</td>
                 <td>
                   Prof.(Dr.) Joyanti Chutia,
                   Emeritusscientist,IASST,FormerDirector,IASST
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
         <div>
           <table
             class="overflow-hidden table text-wrap table-bordered border-top mb-5"
           >
             <thead class="text-white" style="background-color: #27467a">
               <th class="text-white">S.NO.</th>
               <th class="text-white">CONTENT</th>
               <th class="text-white">NAME OF THE MEMBER</th>
               <th class="text-white">DESIGNATION</th>
               <th class="text-white">DESIGNATION IN THE COMMITTEE</th>
             </thead>
             <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
               <tr>
                 <td>1</td>
                 <td>Head of the Department</td>
                 <td>Dr. Bimalendu Kalita</td>
                 <td>Associate Professor &amp; HoD</td>
                 <td>Chairperson</td>
               </tr>
               <tr>
                 <td rowspan="2">2</td>
                 <td rowspan="2" class="align-middle">Two Professors</td>
                 <td>Prof. (Dr.) Anuradha Devi</td>
                 <td>Professor, Dean RSAPS &amp; Director IQAC.</td>
                 <td>Member</td>
               </tr>
               <tr>
                 <td>Prof. (Dr.) Rita Choudhury</td>
                 <td>Professor</td>
                 <td>Member</td>
               </tr>
               <tr>
                 <td rowspan="2">3</td>
                 <td rowspan="2" class="align-middle">
                   Two Associate Professors – one of them will be the member
                   secretary
                 </td>
                 <td>Prof. (Dr.) Kamal Debnath</td>
                 <td>Professor</td>
                 <td>Member secretary</td>
               </tr>
               <tr>
                 <td>Dr. Bapan Kalita</td>
                 <td>Associate Professor</td>
                 <td>Member</td>
               </tr>
               <tr>
                 <td rowspan="2">4</td>
                 <td rowspan="2" class="align-middle">
                   Two Assistant Professors holding Ph.D. degree
                 </td>
                 <td>Dr. Anuja Sinha</td>
                 <td>Assistant Professor</td>
                 <td>Member</td>
               </tr>
               <tr>
                 <td>Dr. Dhiman Dutta</td>
                 <td>Assistant Professor</td>
                 <td>Member</td>
               </tr>
               <tr>
                 <td rowspan="3">5</td>
                 <td rowspan="3" class="align-middle">
                   Three external members not below the rank of Professors,
                   including members from an allied department, who will be
                   nominated by the URC
                 </td>
                 <td>Prof. (Dr.) Ankur Ganguly</td>
                 <td>
                   Professor, RSET<br />Dean Academics<br />and ic Dean, RSET and
                   RSIT
                 </td>
                 <td>External Member</td>
               </tr>
               <tr>
                 <td>Prof. (Dr.) Kaberi Saikia</td>
                 <td>Professor &amp; Principal, Royal School of Nursing</td>
                 <td>External Member</td>
               </tr>
               <tr>
                 <td>Prof. (Dr.) Bipul Nath</td>
                 <td>Professor, RSP.</td>
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
                         href="assets/Departmentalpdf/AY 2023-24 B.Sc. Mathematics.pdf"
                         target="_blank"
                       >
                         <i class="fa fa-file-text px-2"></i>AY 2023-24 B.Sc.
                         Mathematics.pdf <i class="fa fa-download"></i>
                       </a>
                       <a
                         href="assets/Departmentalpdf/AY 2022-23 B.Sc Mathematics.pdf"
                         target="_blank"
                       >
                         <i class="fa fa-file-text px-2"></i>AY 2022-23 B.Sc
                         Mathematics.pdf <i class="fa fa-download"></i>
                       </a>

                       <a
                         href="assets/Departmentalpdf/AY-2021-22 B.Sc Mathematics and computing.pdf"
                         target="_blank"
                       >
                         <i class="fa fa-file-text px-2"></i>AY-2021-22 B.Sc Mathematics
                         and computing.pdf <i class="fa fa-download"></i>
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
                         href="assets/Departmentalpdf/AY 2021-22 M.Sc. Mathematics.pdf"
                         target="_blank"
                       >
                         <i class="fa fa-file-text px-2"></i>AY 2021-22 M.Sc.
                         Mathematics.pdf <i class="fa fa-download"></i>
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
