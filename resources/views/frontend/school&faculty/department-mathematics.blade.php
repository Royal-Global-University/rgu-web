@extends('frontend.master')
@section('content')
        <div style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/bg.svg); background-size: cover;">
              <div class="mobile" >
                @include('frontend/components/mobileheader')
            <img class="pb-4" style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-mathematics/mobile-mathematics.png" alt="">

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
                              <strong style="color: #023e8a;" class="#">Master of Mathematics</strong>
                              </p>
                          </td>
                          <td class="para1">
                            2 years
                          </td>
                          <td>
                            <a target="_blank" href="programs-MSc-Mathematics"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                          </td>
                      </tr>

                      <tr class="align-middle">
                        <td>2.</td>
                        <td >
                            <p class="para1">
                            <strong style="color: #023e8a;" class="#">Bachelor of Mathematics</strong>
                            <br> Honours / Honours with Research
                            </p>

                        </td>
                        <td>
                          4 years as per NEP
                        </td>
                        <td>
                          <a target="_blank" href="programs-b-sc-mathematics"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                        </td>
                    </tr>

                  </tbody>
                </table>
              </div>

            </div>

            <img class="pb-4" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-mathematics/mobile-mathematics-down.png" alt="">

            <div class="container pb-5">

             <div>
               <div>
                <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

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
                       <tr class="para1">
                        <td>21</td>
                        <td>---</td>
                        <td>Parents Teacher Interaction cum NAAC Orientation for parents.</td>
                        <td>---</td>
                        <td>13th November, 2024</td>
                      </tr>
                      <tr class="para1">
                        <td>22</td>
                        <td>---</td>
                        <td>National Mathematics Day 2024 - Department felicitated Dr. Azizur Rahman Sheikh, Former HoD, Department of Mathematics, Cotton College, Guwahati, as the Eminent Mathematician of the State for the year 2024.</td>
                        <td>---</td>
                        <td>23rd December, 2024</td>
                      </tr>
                      <tr class="para1">
                        <td>23</td>
                        <td>---</td>
                        <td>Workshop on Advancing Quantum Computing through Mathematics. Speaker: Prof. (Dr.) Debabrata Datta, Former Senior Scientist, Bhabha Atomic Research Centre, Mumbai.</td>
                        <td>---</td>
                        <td>27th to 29th January, 2025</td>
                      </tr>
                      <tr class="para1">
                        <td>24</td>
                        <td>---</td>
                        <td>Interactive session on Career Opportunities.</td>
                        <td>---</td>
                        <td>19th February, 2025</td>
                      </tr>
                      <tr class="para1">
                        <td>25</td>
                        <td>---</td>
                        <td>Campus Visit of College Students.</td>
                        <td>---</td>
                        <td>21st February, 2025</td>
                      </tr>
                      <tr class="para1">
                        <td>26</td>
                        <td>---</td>
                        <td>National Science Day 2025. Speaker: Prof. (Dr.) Gagan Kumar, Department of Physics, IIT Guwahati.</td>
                        <td>---</td>
                        <td>28th February, 2025</td>
                      </tr>
                      <tr class="para1">
                        <td>27</td>
                        <td>---</td>
                        <td>Invited Talk by Prof. (Dr.) Shanta Laishram, Professor of Mathematics, Indian Statistical Institute, New Delhi.</td>
                        <td>---</td>
                        <td>4th March, 2025</td>
                      </tr>
                      <tr class="para1">
                        <td>28</td>
                        <td>---</td>
                        <td>Pi Day Celebration. Speaker: Prof. (Dr.) Partha Sarathi Mandal, Professor, Department of Mathematics, IIT Guwahati.</td>
                        <td>---</td>
                        <td>17th March, 2025</td>
                      </tr>
                      <tr class="para1">
                        <td>29</td>
                        <td>---</td>
                        <td>Invited Talk by Prof. (Dr.) Bipin Kumar Gupta, Senior Principal Scientist & Professor (AcSIR, NPL Campus).</td>
                        <td>---</td>
                        <td>28th March, 2025</td>
                      </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>

             <div>
               <div>
                <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (BOS)</span></h2>

                 <div class="table-responsive">
                   <table
                     class="overflow-hidden table text-wrap table-bordered border-top mb-5"
                   >
                     <thead class="text-white" style="background-color: #27467a">
                       <th class="text-white">S.No.</th>
                       <th class="text-white">Position in D-BOS</th>
                       <th class="text-white">Name And Designation</th>
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

                   <table class="table table-striped table-bordered bg-light">
                    <thead class="text-white" style="background-color: #27467a">
                      <tr>
                        <th>Sl. No.</th>
                        <th>Name & Profile of Members</th>
                        <th>Category of Nomination</th>
                        <th>Designation in the Body</th>
                      </tr>
                    </thead>
                    <tbody class="para1">
                      <tr>
                        <td>1</td>
                        <td>Dr. Bimalendu Kalita, Associate Professor & HOD</td>
                        <td>Ex-Officio</td>
                        <td>Convener</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Prof. (Dr.) Anuradha Devi, Professor & Dean<br>Prof. (Dr.) Dilip Chandra Nath, Professor Emeritus<br>Prof. (Dr.) Laishram Ladusingh, Professor Emeritus<br>Prof. (Dr.) Kamal Debnath, Associate Professor<br>Dr. Bapan Kalita, Associate Professor<br>Mr. H. Imo Mani Singha, Assistant Professor<br>Dr. Parismita Phukan, Assistant Professor<br>Dr. Marbarisha M. Kharkongar, Assistant Professor<br>Dr. Bikram Bir, Assistant Professor<br>Mr. Neelav Sarma, Assistant Professor<br>Dr. Bhagyashri Patgiri, Assistant Professor<br>Dr. Kshetrimayum Renubebeta Devi, Assistant Professor<br>Dr. Sayak Sengupta, Assistant Professor</td>
                        <td>Ex-Officio</td>
                        <td>Member<br>One External Member (Academic)</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Prof. (Dr.) Dipak Sarma, Professor, Department of Mathematics, Cotton University</td>
                        <td>Nominated member</td>
                        <td>Member<br>One External Member (Industry)</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Prof. (Dr.) Joyanti Chutia, Emeritus scientist, IASST, Former Director, IASST</td>
                        <td>Nominated member</td>
                        <td>Member</td>
                      </tr>
                    </tbody>
                  </table>

                 </div>
               </div>
             </div>


            <div>
                <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                  The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

                 <div class="table-responsive">

                  <table class="overflow-hidden table bg-light text-wrap table-bordered border-top mb-5">
                    <thead class="text-white" style="background-color: #27467a">
                      <tr>
                        <th class="text-white">Sl. No.</th>
                        <th class="text-white">Content</th>
                        <th class="text-white">Name of the Member</th>
                        <th class="text-white">Designation</th>
                        <th class="text-white">Designation in the Committee</th>
                      </tr>
                    </thead>
                    <tbody class="para1">
                      <tr>
                        <td>1</td>
                        <td>Head of the Department</td>
                        <td>Dr. Bimalendu Kalita</td>
                        <td>Associate Professor & HoD</td>
                        <td>Chairperson</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Two Professors</td>
                        <td>Prof. (Dr.) Anuradha Devi</td>
                        <td>Professor, Dean RSAPS & Director IQAC.</td>
                        <td>Departmental Member</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td></td>
                        <td>Prof. (Dr.) Kamal Debnath</td>
                        <td>Professor</td>
                        <td>Departmental Member</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Two Associate Professors – one of them will be the member secretary</td>
                        <td>Dr. Bapan Kalita</td>
                        <td>Associate Professor</td>
                        <td>Departmental Member</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td></td>
                        <td>Dr. Bikram Bir</td>
                        <td>Assistant Professor</td>
                        <td>Departmental Member</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Two Assistant Professors holding Ph.D. degree</td>
                        <td>Dr. Marbarisha M Kharkongor</td>
                        <td>Assistant Professor</td>
                        <td>Departmental Member</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td></td>
                        <td>Dr. Sayak Sengupta</td>
                        <td>Assistant Professor</td>
                        <td>Departmental Member</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC</td>
                        <td>Prof. (Dr.) Kaberi Saikia</td>
                        <td>Professor & Principal, Royal School of Nursing</td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td></td>
                        <td>Prof. (Dr.) Bipul Nath</td>
                        <td>Professor, RSP.</td>
                        <td>External Member</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td></td>
                        <td>Prof. (Dr.) Sudip Chakraborty</td>
                        <td>Professor, RSC.</td>
                        <td>External Member</td>
                      </tr>
                    </tbody>
                  </table>

                 </div>
            </div>


             <div>
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                List of Journal <span style="color: #FF9A1E; font-weight: 500;">Publications</span></h2>

                <div class="table-responsive">

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                <h2 class="headd3 fw-bold text-dark">2025</h2>
                <tr>
                  <th>Title</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody class="para1">
                <tr>
                  <td>Tusar Kanti Das, Ashish Paul, Jintu Mani Nath, & Neelav Sarma</td>
                  <td>“The Yamada-Ota model-based Casson quadra hybrid nanofluid stagnation flow configured by ohmic heating, heat source, and Newtonian boundary heating across an exponentially stretched cylinder”. Partial Differential Equations in Applied Mathematics (Elsevier), 14, 101159. ISSN: 2666-8181.</td>
                </tr>
              </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                <h2 class="headd3 fw-bold text-dark">2024</h2>
                <tr>
                  <th>Title</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody class="para1">
                <tr>
                  <td>Bikram Bir, D. Goswami</td>
                  <td>“Numerical Analysis of a grad-div stabilization for the Oldroyd model of order one”, Journal of Applied Analysis & Computation, ISSN: 2156-907X.</td>
                </tr>
                <tr>
                  <td>Bimalendu Kalita, Sinam Rajkishore Singha</td>
                  <td>“FUZZY WEAK n-INNER PRODUCT SPACE”, South East Asian Journal of Mathematics and Mathematical Sciences, ISSN: 9727752.</td>
                </tr>
                <tr>
                  <td>Sinam Rajkishore Singha, Bimalendu Kalita</td>
                  <td>“FUZZY n-INNER PRODUCT SPACES”, Bulletin of Calcutta Mathematical Society, 116, (6) 703–718 (2024). ISSN: 0008-0659.</td>
                </tr>
                <tr>
                  <td>Neelav Sarma, Bhagyashri Patgiri, Ashish Paul</td>
                  <td>“Insights using Hamilton-Crosser model in Williamson hybrid nanofluids with homogeneous-heterogeneous reactions and diagonal electromagnetic effects”, Proceedings of the Institution of Mechanical Engineers, Part N: Journal of Nanomaterials, Nanoengineering and Nanosystems, 23977914241304066. ISSN: 2397-7914.</td>
                </tr>
              </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                    <h2 class="headd3 fw-bold text-dark">2023</h2>
                    <tr>
                      <th>Title</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>Kamal Debnath and Sankar Singha</td>
                      <td>“Heat and Mass Transport for Elastico-Viscous Fluid with Partial Slip Boundary over a Flat Permeable Plate”, Latin American Applied Research, Scopus indexed journal, Vol 53 No. 2 (2023) ISSN: 1851-8796.</td>
                    </tr>
                    <tr>
                      <td>Ankur Jyoti Kashyap, Arnab Jyoti Bordoloi, Fanitsha Mohan and Anuradha Devi</td>
                      <td>“Dynamical analysis of an anthrax disease model in animals with nonlinear transmission rate”, Mathematical Modelling and Control, Vol . 3 No.4, Dec 2023, pp 370-386.</td>
                    </tr>
                    <tr>
                      <td>Md Nazir Hussain, Navalakhi Hazarika and Anuradha Devi</td>
                      <td>“Intuitionistic fuzzy aspects of multiplication N-groups”, South East Asian J. of Mathematics and Mathematical Sciences, Vol. 19 No. 2, 2023. pp 273-284.</td>
                    </tr>
                    <tr>
                      <td>Balajied Me Syrti, Anuradha Devi, Ankur Jyoti Kashyap</td>
                      <td>“Analysis of stability, sensitivity Index and Hopf Bifurcation of Eco-Epidemiological SIR Model under Pesticide Application”, Vol 6. No.2, 2023. Pp 136-144.</td>
                    </tr>
                    <tr>
                      <td>Md Nazir Hussain, Navalakhi Hazarika, Anuradha Devi</td>
                      <td>“Distributive Character of Multiplication N-groups”, International Journal of Mathematics Trends and Technology, Vol. 69. No.6, June-2023, pp 59-66.</td>
                    </tr>
                    <tr>
                      <td>Bikash Koli Saha and Kamal Debnath</td>
                      <td>“Reactive Solute Diffusion in Elastico-Viscous Fluid Past a Flat Permeable Plate”, High Technology Letters, Vol. 29, No. 7, 2023.</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath and S. Singha</td>
                      <td>“Heat and mass transport for elastic-viscous fluid with partial slip boundary over a flat permeable plate”, Latin American Applied Research, Vol . 53, No.2, 2023, pp.89-94.</td>
                    </tr>
                    <tr>
                      <td>Nimai Sarkar, Mausumi Sen, Dipankar Saha and Bipan Hazarika</td>
                      <td>“A Qualitative study on fractional logistic integrodifferential equations in an arbitrary time scale”, Kragujevac Journal of Mathematics, Vol. 50, No.3, pp.403-414.</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                    <h2 class="headd3 fw-bold text-dark">2022</h2>
                    <tr>
                      <th>Title</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>Bimalendu Kalita</td>
                      <td>“On semi m-hyponormal weighted shift operators” Bulletin of Calcutta Mathematical Society, accepted for publication, 2022.</td>
                    </tr>
                    <tr>
                      <td>Bipul Ch. Kalita, Bapan Kalita</td>
                      <td>“Comprehensive Analysis On Effectiveness Of Inventory Management Practices On The Performance Of Wholesale Drug Dealers”, Journal of Positive School Psychology, ISSN: 2717-7564, Vol. 6, No. 6, 2022.</td>
                    </tr>
                    <tr>
                      <td>Bimalendu Kalita</td>
                      <td>“Perturbation of semi weakly m-hyponormal weighted shifts” The Mathematics Student, accepted for publication, 2022 (Scopus indexed) (Impact Factor: 0.10) (published 2023).</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath, Sankar Singha</td>
                      <td>“Heat and Mass Transport for Elastico-viscous Fluid with Partial Slip Boundary over a Flat Permeable Plate,” Latin America Applied Research, ISSN:0327-0793(Print) and 1851-8796(Online).</td>
                    </tr>
                    <tr>
                      <td>Ankur Jyoti Kashyap, Willy Govaerts, Debashish Bhattacharjee & Hemanta Kumar Sarmah</td>
                      <td>“Bifurcation Analysis of a Predator Prey System with density dependent disease recovery”, Filomat, ISSN:2406-0933, Vol: 36 (20), 2022.</td>
                    </tr>
                    <tr>
                      <td>Ankur Jyoti Kashyap, Quanxin Zhu, Debashish Bhattacharjee & Hemanta Kumar Sarmah</td>
                      <td>“Dynamical Study of a Predator Prey System incorporating hunting cooperation and Michaelis-Menten type Predator- Harvesting”, International Journal of Biomathematics, World Scientific, ISSN:1793-715.</td>
                    </tr>
                    <tr>
                      <td>Bapan Kalita, Abdul Barik Sarker, Sankar Barman</td>
                      <td>“Decision Making with Simplex Model: A case study”, Journal of Applied and Fundamental Sciences, ISSN:2395-5554(Print) and 2395-5562(Online), Vol:8(2), 2022.</td>
                    </tr>
                    <tr>
                      <td>Bapan Kalita</td>
                      <td>“Public Revolution: A Mathematical Modelling”, Journal of Applied and Fundamental Sciences, ISSN:2395-5554 and 2395-5562(Online), Vol:8(1), 2022.</td>
                    </tr>
                    <tr>
                      <td>Mitali Das Roy, Sankar Barman, Bapan Kalita</td>
                      <td>“Effectiveness of Surface Texturing and Optical width in Minimizing the Optical loss of a solar cell: A simulated Study”, Journal of Applied and Fundamental Sciences, ISSN: 2395-5554 and 2395-5562(Online), Vol: 8 (1), 2022.</td>
                    </tr>
                    <tr>
                      <td>Sankar Barman, Bapan Kalita</td>
                      <td>“Energy, Environment and cost Benefit Analysis OF Semi-Transparent PV Window-A Review”, Journal of Applied and Fundamental Sciences, ISSN: 2395-5554 and 2395-5562(Online), Vol: 8 (2), 2022.</td>
                    </tr>
                    <tr>
                      <td>Balajied Me Syrti and Anuradha Devi</td>
                      <td>“An Eco-Epidemic model with disease in Plant populations and Pesticides as control measure”, I0SR Journal of Mathematics, ISSN: 2319-765X (Print) and ISSN: 2278:5728 (Online), Vol: 18 (3), 2022.</td>
                    </tr>
                    <tr>
                      <td>Prataykshi Sarma and Bapan Kalita</td>
                      <td>“Prediction of Housing Prices of real estate business through machine learning”, IJTMSS, Vol: 1 (1), 2022, pp 58-76.</td>
                    </tr>
                    <tr>
                      <td>Smitakhee Handique and Bapan Kalita</td>
                      <td>“A case study on application of transportation problem”, IJTMSS, Vol: 1 (1), 2022, pp 77-95.</td>
                    </tr>
                    <tr>
                      <td>Karismita Medhi and Bapan Kalita</td>
                      <td>“Category detection of cancer patients and role of machine learning as an astrologer”, IJTMSS, Vol. 1 (1), 2022, pp.96-113.</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                    <h2 class="headd3 fw-bold text-dark">2021</h2>
                    <tr>
                      <th>Title</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>Biplab Singha, Mausumi Sen, Nidul Singha, Dhiman Dutta</td>
                      <td>“A new Hesitant Fuzzy Rule Base system for ranking hydro power plant site selection”, New Mathematics and Natural Computation, 2021. <a href="https://doi.org/10.1142/S1793005722500223">DOI: 10.1142/S1793005722500223</a></td>
                    </tr>
                    <tr>
                      <td>Aditya Ghosh, Anuradha Devi</td>
                      <td>“Stability of Glucose-Insulin-Glucagon model using ingested glucose and somatostatin”, Journal of Huazhong University of Science and Technology, VOLUME 50 ISSUE 03 - 2021, page 1-14, 2021.</td>
                    </tr>
                    <tr>
                      <td>Anuja Sinha</td>
                      <td>“Effect of thermal radiation on MHD three-dimensional natural convective Couette flow in presence of thermo diffusion and chemical reaction”, Journal of Mathematical and Computational Science, Volume No. 6, 7337-7359, ISSN: 1927-5307.</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath, Sankar Singha, Bimalendu Kalita</td>
                      <td>“IMPACT OF SUCTION OR BLOWING ON ELASTICO-VISCOUS HYDROMAGNETIC FLUID FLOW PAST A STRETCHING PERMEABLE SHEET”, Advances in Mathematics: Scientific Journal 10 (2021), no.1, 211–221, ISSN: 1857-8365 (printed); 1857-8438 (electronic).</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath, Bikash Koli Saha</td>
                      <td>“Heat and Partial Slip Impact on Elastico-viscous Fluid Flow Past a Flat Permeable Plate”, Mathematical Forum, Vol. 29, 2021, ISSN: 0972-9852. (UGC care listed journal)</td>
                    </tr>
                    <tr>
                      <td>Bipul Ch. Kalita, Runumoni L Das, Bapan Kalita</td>
                      <td>“Impact of Working Capital Management on Financial Health: Evidence from Silk Industries in Assam, India”, Journal of Education: Rabindra Bharati University, Vol. XXIV, 2021-2022, No. 12(II), ISSN: 0972-7175, 114-124.</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                    <h2 class="headd3 fw-bold text-dark">2020</h2>

                    <tr>
                      <th>Title</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“Real Numbers with Fractional Presence”, Journal of Mathematics and Informatics, (February) ISSN: 2349-0632, Vol 18, 2020, page 65-69</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“An Alternate Formula for Addition of Discrete Fuzzy Numbers”, International Journal of Fuzzy Mathematical Archives, ISSN: 2320 – 3242, Vol 18, No. 1, 2020, page 7-11 (March)</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“Theory of Fuzzy Sets: An Introduction of the Concept of Negative Partial Presence”, Annals of Pure and Applied Mathematics, 6 May 2020 (Article in Press), Vol. 22 Number, 2279-087X (P), 2279-0888 (Online), 119–124</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations”, Journal of Mathematics and Informatics, 5 July 2020 (Article in Press), Vol. 19, 2349-0632 (P), 2349-0640 (Online) pp 7–12, May 30, 2020, doi: https://doi.org/10.1101/2020.05.24.20112292, Available under a CC-BY-ND 4.0 International license</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“A Simple Method of Finding an Approximate Pattern of the Covid-19 Spread”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, pp 1-8 (May)</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“On Reliability of the COVID-19 Forecasts”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, June 2020, doi: https://doi.org/10.1101/2020.06.01.20118844, Available under a CC-BY-ND 4.0 International license, pp 1-8</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“The Current COVID-19 Spread Pattern in India”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 8 June, 2020, https://doi.org/10.1101/2020.06.03.20121210, Available under a CC-BY-ND 4.0 International license, pp 1-5</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“Nearly Perfect Forecasting of the Total COVID-19 Cases in India: A Numerical Approach”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 13 June, 2020, https://doi.org/10.1101/2020.06.13.20130096, Available under a CC-BY-ND 4.0 International license, pp 1-7</td>
                    </tr>
                    <tr>
                      <td>Hemanta K. Baruah</td>
                      <td>“The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 23 June, https://doi.org/10.1101/2020.06.21.20136630, Available under a CC-BY-ND 4.0 International license, 2020, pp 1-6</td>
                    </tr>
                    <tr>
                      <td>Munmi Saikia, Atasi Patra Maiti, Anuradha Devi</td>
                      <td>“Effect of habitat complexity on rhinoceros and tiger population model with additional food and poaching in Kaziranga national park, Assam”, Mathematics and Computers in Simulation 177(2020)169-19.</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath, Debasish Dey, Rupjyoti Borah</td>
                      <td>“Thermophoresis and diffusion thermo effects on shear thickening and shear thinning cases of fluid motion past a permeable surface”, Journal of Mechanics of Continua and Mathematical Sciences, Vol. -15, No.-5, May (2020) pp 68-81.</td>
                    </tr>
                    <tr>
                      <td>Bapan Kalita, Anuradha Devi</td>
                      <td>“Japanese Encephalitis from Two Outsources: A Mathematical Modeling”, Journal of Critical Reviews, Vol. 7, Issue 12, 2020, pp.309-315.</td>
                    </tr>
                    <tr>
                      <td>Bapan Kalita, Anuradha Devi</td>
                      <td>“Control Model of Transmission of Japanese Encephalitis through Media Awareness”, International Journal of Advanced Science and Technology, Vol. 29, No. 5, 2020, pp.7645-7656.</td>
                    </tr>
                    <tr>
                      <td>Bapan Kalita, Anuradha Devi</td>
                      <td>“Mathematical Modelling of Impact of Vaccination in Controlling Japanese Encephalitis”, International Journal on Emerging Technologies, Vol. 11, Issue 3, 2020, pp.792-796.</td>
                    </tr>
                    <tr>
                      <td>Bimalendu Kalita</td>
                      <td>“ON SEMI WEAKLY (l,m)-HYPONORMAL WEIGHTED SHIFTS” Advances in Mathematics: Scientific Journal 9 (2020), no.12, 10797–10805. ISSN: 1857-8365 (printed); 1857-8438 (electronic).</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath, Bikash Koli Saha</td>
                      <td>“Solution of non-Newtonian Boundary Layer Flow in a Convergent Channel using Homotopy Perturbation Method”, Published in Transient, A Journal of Natural Sciences and Allied Subjects, ISSN: 2250-0650, Vol. VIII, 2020, 28.</td>
                    </tr>
                    <tr>
                      <td>Kamal Debnath, Sankar Singha</td>
                      <td>“Mixed Convective Slip Flow and Heat Transport for Visco-elastic Fluid Past a Vertical Plate”, Mathematical Forum, Vol . 28, 2020, ISSN: 0972-9852. (UGC care listed journal).</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                    <h2 class="headd3 fw-bold text-dark">2019</h2>

                    <tr>
                      <th>Title</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                      <td>“Effect of Nonthermal Ions on Dust Acoustic Waves in Magnetized Plasma”, Mathematical Journal of Interdisciplinary Science, ISSN: 2278-9561 (P), 2278-957X (O), vol 8, No 1, September, 2019, page 69-76. (UGC Care)</td>
                    </tr>
                    <tr>
                      <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                      <td>“Sagdeev Potential Approach to Study the Dust Acoustic Waves in Dusty Plasma with Nonthermal Ions”, Infokara Research, Volume 8, Issue 7, September 2019.</td>
                    </tr>
                    <tr>
                      <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                      <td>“Nonperturbative Technique for Dust-ion-acoustic Waves in Dusty Plasma with Nonthermal Electrons”, International Journal of Research and Review, ISSN: 2454-2237 (P), 2349-978(O), vol 6, issue 11, November, 2019, page 153-161.</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-striped table-bordered bg-light">
                  <thead>
                    <h2 class="headd3 fw-bold text-dark">2018</h2>
                    <tr>
                      <th>Title</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>Navalakhi Hazarika and Helen K Saikia</td>
                      <td>“Singular and semi-simple character in E-injective N-groups with weakly descending chain conditions”, Africa Mathematica (Springer), Volume 29, Number 7-8 (2018), Page 1065-1072, Springer</td>
                    </tr>
                    <tr>
                      <td>Anuradha Devi, Ranjan Kalita</td>
                      <td>“A Mathematical Model of Glucose – Insulin regulation where glucose and insulin both are influenced by externally ingested glucose”, International Journal of Engineering Science and Technology, ISSN: 09755-5462, Volume 10, Issue 02S, January, 2018, page 154-157.</td>
                    </tr>
                    <tr>
                      <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
                      <td>“Non Perturbative Approach for Dust Acoustic Waves in Plasma with Non Thermal Ions and Trapped Electrons”, International Journal of Mathematics Trends and Technology, Volume 61, Number 1, September, 2018.</td>
                    </tr>
                  </tbody>
                </table>

              </div>

             </div>

            <div>
              <h2 class="headd3 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                Faculty <span style="color: #FF9A1E; font-weight: 500;">List</span></h2>

                <div class="table-responsive">
                <table class="table table-striped table-bordered bg-light">
                  <thead style="background-color: #27467A; color: #fff;">
                    <tr>
                      <th class="text-white">Sl. No.</th>
                      <th class="text-white">Name</th>
                      <th class="text-white">Designation</th>
                    </tr>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>1</td>
                      <td>Prof. (Dr.) Anuradha Devi</td>
                      <td>Professor & Dean</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Prof. (Dr.) Dilip Chandra Nath</td>
                      <td>Professor Emeritus</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Prof. (Dr.) Laishram Ladusingh</td>
                      <td>Professor Emeritus</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Dr. Bimalendu Kalita</td>
                      <td>Associate Professor & HoD</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Prof. (Dr.) Kamal Debnath</td>
                      <td>Associate Professor</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Dr. Bapan Kalita</td>
                      <td>Associate Professor</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Mr. H. Imo Mani Singha</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Dr. Parismita Phukan</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Dr. Marbarisha M. Kharkongar</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Dr. Bikram Bir</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Mr. Neelav Sarma</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Dr. Bhagyashri Patgiri</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Dr. Kshetrimayum Renubebeta Devi</td>
                      <td>Assistant Professor</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Dr. Sayak Sengupta</td>
                      <td>Assistant Professor</td>
                    </tr>
                  </tbody>
                </table>
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

    <img class="pb-4" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-mathematics/web-mathematics.png" alt="">

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
                      <strong style="color: #023e8a;" class="#">Master of Mathematics</strong>
                      </p>
                  </td>
                  <td class="para1">
                    2 years
                  </td>
                  <td>
                    <a target="_blank" href="programs-MSc-Mathematics"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                  </td>
              </tr>

              <tr class="align-middle">
                <td>2.</td>
                <td >
                    <p class="para1">
                    <strong style="color: #023e8a;" class="#">Bachelor of Mathematics</strong>
                    <br> Honours / Honours with Research
                    </p>

                </td>
                <td>
                  4 years as per NEP
                </td>
                <td>
                  <a target="_blank" href="programs-b-sc-mathematics"><button type="button" style="background-color: #FF9A1E; color: #fff;" class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>

    <img class="pb-4" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/dept-mathematics/web-mathematics-down.png" alt="">

    <div class="container pb-5">

     <div>
       <div>
        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
          Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

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
               <tr class="para1">
                <td>21</td>
                <td>---</td>
                <td>Parents Teacher Interaction cum NAAC Orientation for parents.</td>
                <td>---</td>
                <td>13th November, 2024</td>
              </tr>
              <tr class="para1">
                <td>22</td>
                <td>---</td>
                <td>National Mathematics Day 2024 - Department felicitated Dr. Azizur Rahman Sheikh, Former HoD, Department of Mathematics, Cotton College, Guwahati, as the Eminent Mathematician of the State for the year 2024.</td>
                <td>---</td>
                <td>23rd December, 2024</td>
              </tr>
              <tr class="para1">
                <td>23</td>
                <td>---</td>
                <td>Workshop on Advancing Quantum Computing through Mathematics. Speaker: Prof. (Dr.) Debabrata Datta, Former Senior Scientist, Bhabha Atomic Research Centre, Mumbai.</td>
                <td>---</td>
                <td>27th to 29th January, 2025</td>
              </tr>
              <tr class="para1">
                <td>24</td>
                <td>---</td>
                <td>Interactive session on Career Opportunities.</td>
                <td>---</td>
                <td>19th February, 2025</td>
              </tr>
              <tr class="para1">
                <td>25</td>
                <td>---</td>
                <td>Campus Visit of College Students.</td>
                <td>---</td>
                <td>21st February, 2025</td>
              </tr>
              <tr class="para1">
                <td>26</td>
                <td>---</td>
                <td>National Science Day 2025. Speaker: Prof. (Dr.) Gagan Kumar, Department of Physics, IIT Guwahati.</td>
                <td>---</td>
                <td>28th February, 2025</td>
              </tr>
              <tr class="para1">
                <td>27</td>
                <td>---</td>
                <td>Invited Talk by Prof. (Dr.) Shanta Laishram, Professor of Mathematics, Indian Statistical Institute, New Delhi.</td>
                <td>---</td>
                <td>4th March, 2025</td>
              </tr>
              <tr class="para1">
                <td>28</td>
                <td>---</td>
                <td>Pi Day Celebration. Speaker: Prof. (Dr.) Partha Sarathi Mandal, Professor, Department of Mathematics, IIT Guwahati.</td>
                <td>---</td>
                <td>17th March, 2025</td>
              </tr>
              <tr class="para1">
                <td>29</td>
                <td>---</td>
                <td>Invited Talk by Prof. (Dr.) Bipin Kumar Gupta, Senior Principal Scientist & Professor (AcSIR, NPL Campus).</td>
                <td>---</td>
                <td>28th March, 2025</td>
              </tr>
             </tbody>
           </table>
         </div>
       </div>
     </div>

     <div>
       <div>
        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
          The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies (BOS)</span></h2>

         <div class="table-responsive">
           <table
             class="overflow-hidden table text-wrap table-bordered border-top mb-5"
           >
             <thead class="text-white" style="background-color: #27467a">
               <th class="text-white">S.No.</th>
               <th class="text-white">Position in D-BOS</th>
               <th class="text-white">Name And Designation</th>
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

           <table class="table table-striped table-bordered bg-light">
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th>Sl. No.</th>
                <th>Name & Profile of Members</th>
                <th>Category of Nomination</th>
                <th>Designation in the Body</th>
              </tr>
            </thead>
            <tbody class="para1">
              <tr>
                <td>1</td>
                <td>Dr. Bimalendu Kalita, Associate Professor & HOD</td>
                <td>Ex-Officio</td>
                <td>Convener</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Prof. (Dr.) Anuradha Devi, Professor & Dean<br>Prof. (Dr.) Dilip Chandra Nath, Professor Emeritus<br>Prof. (Dr.) Laishram Ladusingh, Professor Emeritus<br>Prof. (Dr.) Kamal Debnath, Associate Professor<br>Dr. Bapan Kalita, Associate Professor<br>Mr. H. Imo Mani Singha, Assistant Professor<br>Dr. Parismita Phukan, Assistant Professor<br>Dr. Marbarisha M. Kharkongar, Assistant Professor<br>Dr. Bikram Bir, Assistant Professor<br>Mr. Neelav Sarma, Assistant Professor<br>Dr. Bhagyashri Patgiri, Assistant Professor<br>Dr. Kshetrimayum Renubebeta Devi, Assistant Professor<br>Dr. Sayak Sengupta, Assistant Professor</td>
                <td>Ex-Officio</td>
                <td>Member<br>One External Member (Academic)</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Prof. (Dr.) Dipak Sarma, Professor, Department of Mathematics, Cotton University</td>
                <td>Nominated member</td>
                <td>Member<br>One External Member (Industry)</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Prof. (Dr.) Joyanti Chutia, Emeritus scientist, IASST, Former Director, IASST</td>
                <td>Nominated member</td>
                <td>Member</td>
              </tr>
            </tbody>
          </table>

         </div>
       </div>
     </div>


    <div>
        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
          The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span></h2>

         <div class="table-responsive">

          <table class="overflow-hidden table bg-light text-wrap table-bordered border-top mb-5">
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="text-white">Sl. No.</th>
                <th class="text-white">Content</th>
                <th class="text-white">Name of the Member</th>
                <th class="text-white">Designation</th>
                <th class="text-white">Designation in the Committee</th>
              </tr>
            </thead>
            <tbody class="para1">
              <tr>
                <td>1</td>
                <td>Head of the Department</td>
                <td>Dr. Bimalendu Kalita</td>
                <td>Associate Professor & HoD</td>
                <td>Chairperson</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Two Professors</td>
                <td>Prof. (Dr.) Anuradha Devi</td>
                <td>Professor, Dean RSAPS & Director IQAC.</td>
                <td>Departmental Member</td>
              </tr>
              <tr>
                <td>3</td>
                <td></td>
                <td>Prof. (Dr.) Kamal Debnath</td>
                <td>Professor</td>
                <td>Departmental Member</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Two Associate Professors – one of them will be the member secretary</td>
                <td>Dr. Bapan Kalita</td>
                <td>Associate Professor</td>
                <td>Departmental Member</td>
              </tr>
              <tr>
                <td>5</td>
                <td></td>
                <td>Dr. Bikram Bir</td>
                <td>Assistant Professor</td>
                <td>Departmental Member</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Two Assistant Professors holding Ph.D. degree</td>
                <td>Dr. Marbarisha M Kharkongor</td>
                <td>Assistant Professor</td>
                <td>Departmental Member</td>
              </tr>
              <tr>
                <td>7</td>
                <td></td>
                <td>Dr. Sayak Sengupta</td>
                <td>Assistant Professor</td>
                <td>Departmental Member</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Three external members not below the rank of Professors, including members from an allied department, who will be nominated by the URC</td>
                <td>Prof. (Dr.) Kaberi Saikia</td>
                <td>Professor & Principal, Royal School of Nursing</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>9</td>
                <td></td>
                <td>Prof. (Dr.) Bipul Nath</td>
                <td>Professor, RSP.</td>
                <td>External Member</td>
              </tr>
              <tr>
                <td>10</td>
                <td></td>
                <td>Prof. (Dr.) Sudip Chakraborty</td>
                <td>Professor, RSC.</td>
                <td>External Member</td>
              </tr>
            </tbody>
          </table>

         </div>
    </div>


     <div>
      <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
        List of Journal <span style="color: #FF9A1E; font-weight: 500;">Publications</span></h2>

        <div class="table-responsive">

        <table class="table table-striped table-bordered bg-light">
          <thead>
        <h2 class="headd3 fw-bold text-dark">2025</h2>
        <tr>
          <th>Title</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody class="para1">
        <tr>
          <td>Tusar Kanti Das, Ashish Paul, Jintu Mani Nath, & Neelav Sarma</td>
          <td>“The Yamada-Ota model-based Casson quadra hybrid nanofluid stagnation flow configured by ohmic heating, heat source, and Newtonian boundary heating across an exponentially stretched cylinder”. Partial Differential Equations in Applied Mathematics (Elsevier), 14, 101159. ISSN: 2666-8181.</td>
        </tr>
      </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
        <h2 class="headd3 fw-bold text-dark">2024</h2>
        <tr>
          <th>Title</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody class="para1">
        <tr>
          <td>Bikram Bir, D. Goswami</td>
          <td>“Numerical Analysis of a grad-div stabilization for the Oldroyd model of order one”, Journal of Applied Analysis & Computation, ISSN: 2156-907X.</td>
        </tr>
        <tr>
          <td>Bimalendu Kalita, Sinam Rajkishore Singha</td>
          <td>“FUZZY WEAK n-INNER PRODUCT SPACE”, South East Asian Journal of Mathematics and Mathematical Sciences, ISSN: 9727752.</td>
        </tr>
        <tr>
          <td>Sinam Rajkishore Singha, Bimalendu Kalita</td>
          <td>“FUZZY n-INNER PRODUCT SPACES”, Bulletin of Calcutta Mathematical Society, 116, (6) 703–718 (2024). ISSN: 0008-0659.</td>
        </tr>
        <tr>
          <td>Neelav Sarma, Bhagyashri Patgiri, Ashish Paul</td>
          <td>“Insights using Hamilton-Crosser model in Williamson hybrid nanofluids with homogeneous-heterogeneous reactions and diagonal electromagnetic effects”, Proceedings of the Institution of Mechanical Engineers, Part N: Journal of Nanomaterials, Nanoengineering and Nanosystems, 23977914241304066. ISSN: 2397-7914.</td>
        </tr>
      </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
            <h2 class="headd3 fw-bold text-dark">2023</h2>
            <tr>
              <th>Title</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>Kamal Debnath and Sankar Singha</td>
              <td>“Heat and Mass Transport for Elastico-Viscous Fluid with Partial Slip Boundary over a Flat Permeable Plate”, Latin American Applied Research, Scopus indexed journal, Vol 53 No. 2 (2023) ISSN: 1851-8796.</td>
            </tr>
            <tr>
              <td>Ankur Jyoti Kashyap, Arnab Jyoti Bordoloi, Fanitsha Mohan and Anuradha Devi</td>
              <td>“Dynamical analysis of an anthrax disease model in animals with nonlinear transmission rate”, Mathematical Modelling and Control, Vol . 3 No.4, Dec 2023, pp 370-386.</td>
            </tr>
            <tr>
              <td>Md Nazir Hussain, Navalakhi Hazarika and Anuradha Devi</td>
              <td>“Intuitionistic fuzzy aspects of multiplication N-groups”, South East Asian J. of Mathematics and Mathematical Sciences, Vol. 19 No. 2, 2023. pp 273-284.</td>
            </tr>
            <tr>
              <td>Balajied Me Syrti, Anuradha Devi, Ankur Jyoti Kashyap</td>
              <td>“Analysis of stability, sensitivity Index and Hopf Bifurcation of Eco-Epidemiological SIR Model under Pesticide Application”, Vol 6. No.2, 2023. Pp 136-144.</td>
            </tr>
            <tr>
              <td>Md Nazir Hussain, Navalakhi Hazarika, Anuradha Devi</td>
              <td>“Distributive Character of Multiplication N-groups”, International Journal of Mathematics Trends and Technology, Vol. 69. No.6, June-2023, pp 59-66.</td>
            </tr>
            <tr>
              <td>Bikash Koli Saha and Kamal Debnath</td>
              <td>“Reactive Solute Diffusion in Elastico-Viscous Fluid Past a Flat Permeable Plate”, High Technology Letters, Vol. 29, No. 7, 2023.</td>
            </tr>
            <tr>
              <td>Kamal Debnath and S. Singha</td>
              <td>“Heat and mass transport for elastic-viscous fluid with partial slip boundary over a flat permeable plate”, Latin American Applied Research, Vol . 53, No.2, 2023, pp.89-94.</td>
            </tr>
            <tr>
              <td>Nimai Sarkar, Mausumi Sen, Dipankar Saha and Bipan Hazarika</td>
              <td>“A Qualitative study on fractional logistic integrodifferential equations in an arbitrary time scale”, Kragujevac Journal of Mathematics, Vol. 50, No.3, pp.403-414.</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
            <h2 class="headd3 fw-bold text-dark">2022</h2>
            <tr>
              <th>Title</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>Bimalendu Kalita</td>
              <td>“On semi m-hyponormal weighted shift operators” Bulletin of Calcutta Mathematical Society, accepted for publication, 2022.</td>
            </tr>
            <tr>
              <td>Bipul Ch. Kalita, Bapan Kalita</td>
              <td>“Comprehensive Analysis On Effectiveness Of Inventory Management Practices On The Performance Of Wholesale Drug Dealers”, Journal of Positive School Psychology, ISSN: 2717-7564, Vol. 6, No. 6, 2022.</td>
            </tr>
            <tr>
              <td>Bimalendu Kalita</td>
              <td>“Perturbation of semi weakly m-hyponormal weighted shifts” The Mathematics Student, accepted for publication, 2022 (Scopus indexed) (Impact Factor: 0.10) (published 2023).</td>
            </tr>
            <tr>
              <td>Kamal Debnath, Sankar Singha</td>
              <td>“Heat and Mass Transport for Elastico-viscous Fluid with Partial Slip Boundary over a Flat Permeable Plate,” Latin America Applied Research, ISSN:0327-0793(Print) and 1851-8796(Online).</td>
            </tr>
            <tr>
              <td>Ankur Jyoti Kashyap, Willy Govaerts, Debashish Bhattacharjee & Hemanta Kumar Sarmah</td>
              <td>“Bifurcation Analysis of a Predator Prey System with density dependent disease recovery”, Filomat, ISSN:2406-0933, Vol: 36 (20), 2022.</td>
            </tr>
            <tr>
              <td>Ankur Jyoti Kashyap, Quanxin Zhu, Debashish Bhattacharjee & Hemanta Kumar Sarmah</td>
              <td>“Dynamical Study of a Predator Prey System incorporating hunting cooperation and Michaelis-Menten type Predator- Harvesting”, International Journal of Biomathematics, World Scientific, ISSN:1793-715.</td>
            </tr>
            <tr>
              <td>Bapan Kalita, Abdul Barik Sarker, Sankar Barman</td>
              <td>“Decision Making with Simplex Model: A case study”, Journal of Applied and Fundamental Sciences, ISSN:2395-5554(Print) and 2395-5562(Online), Vol:8(2), 2022.</td>
            </tr>
            <tr>
              <td>Bapan Kalita</td>
              <td>“Public Revolution: A Mathematical Modelling”, Journal of Applied and Fundamental Sciences, ISSN:2395-5554 and 2395-5562(Online), Vol:8(1), 2022.</td>
            </tr>
            <tr>
              <td>Mitali Das Roy, Sankar Barman, Bapan Kalita</td>
              <td>“Effectiveness of Surface Texturing and Optical width in Minimizing the Optical loss of a solar cell: A simulated Study”, Journal of Applied and Fundamental Sciences, ISSN: 2395-5554 and 2395-5562(Online), Vol: 8 (1), 2022.</td>
            </tr>
            <tr>
              <td>Sankar Barman, Bapan Kalita</td>
              <td>“Energy, Environment and cost Benefit Analysis OF Semi-Transparent PV Window-A Review”, Journal of Applied and Fundamental Sciences, ISSN: 2395-5554 and 2395-5562(Online), Vol: 8 (2), 2022.</td>
            </tr>
            <tr>
              <td>Balajied Me Syrti and Anuradha Devi</td>
              <td>“An Eco-Epidemic model with disease in Plant populations and Pesticides as control measure”, I0SR Journal of Mathematics, ISSN: 2319-765X (Print) and ISSN: 2278:5728 (Online), Vol: 18 (3), 2022.</td>
            </tr>
            <tr>
              <td>Prataykshi Sarma and Bapan Kalita</td>
              <td>“Prediction of Housing Prices of real estate business through machine learning”, IJTMSS, Vol: 1 (1), 2022, pp 58-76.</td>
            </tr>
            <tr>
              <td>Smitakhee Handique and Bapan Kalita</td>
              <td>“A case study on application of transportation problem”, IJTMSS, Vol: 1 (1), 2022, pp 77-95.</td>
            </tr>
            <tr>
              <td>Karismita Medhi and Bapan Kalita</td>
              <td>“Category detection of cancer patients and role of machine learning as an astrologer”, IJTMSS, Vol. 1 (1), 2022, pp.96-113.</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
            <h2 class="headd3 fw-bold text-dark">2021</h2>
            <tr>
              <th>Title</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>Biplab Singha, Mausumi Sen, Nidul Singha, Dhiman Dutta</td>
              <td>“A new Hesitant Fuzzy Rule Base system for ranking hydro power plant site selection”, New Mathematics and Natural Computation, 2021. <a href="https://doi.org/10.1142/S1793005722500223">DOI: 10.1142/S1793005722500223</a></td>
            </tr>
            <tr>
              <td>Aditya Ghosh, Anuradha Devi</td>
              <td>“Stability of Glucose-Insulin-Glucagon model using ingested glucose and somatostatin”, Journal of Huazhong University of Science and Technology, VOLUME 50 ISSUE 03 - 2021, page 1-14, 2021.</td>
            </tr>
            <tr>
              <td>Anuja Sinha</td>
              <td>“Effect of thermal radiation on MHD three-dimensional natural convective Couette flow in presence of thermo diffusion and chemical reaction”, Journal of Mathematical and Computational Science, Volume No. 6, 7337-7359, ISSN: 1927-5307.</td>
            </tr>
            <tr>
              <td>Kamal Debnath, Sankar Singha, Bimalendu Kalita</td>
              <td>“IMPACT OF SUCTION OR BLOWING ON ELASTICO-VISCOUS HYDROMAGNETIC FLUID FLOW PAST A STRETCHING PERMEABLE SHEET”, Advances in Mathematics: Scientific Journal 10 (2021), no.1, 211–221, ISSN: 1857-8365 (printed); 1857-8438 (electronic).</td>
            </tr>
            <tr>
              <td>Kamal Debnath, Bikash Koli Saha</td>
              <td>“Heat and Partial Slip Impact on Elastico-viscous Fluid Flow Past a Flat Permeable Plate”, Mathematical Forum, Vol. 29, 2021, ISSN: 0972-9852. (UGC care listed journal)</td>
            </tr>
            <tr>
              <td>Bipul Ch. Kalita, Runumoni L Das, Bapan Kalita</td>
              <td>“Impact of Working Capital Management on Financial Health: Evidence from Silk Industries in Assam, India”, Journal of Education: Rabindra Bharati University, Vol. XXIV, 2021-2022, No. 12(II), ISSN: 0972-7175, 114-124.</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
            <h2 class="headd3 fw-bold text-dark">2020</h2>

            <tr>
              <th>Title</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“Real Numbers with Fractional Presence”, Journal of Mathematics and Informatics, (February) ISSN: 2349-0632, Vol 18, 2020, page 65-69</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“An Alternate Formula for Addition of Discrete Fuzzy Numbers”, International Journal of Fuzzy Mathematical Archives, ISSN: 2320 – 3242, Vol 18, No. 1, 2020, page 7-11 (March)</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“Theory of Fuzzy Sets: An Introduction of the Concept of Negative Partial Presence”, Annals of Pure and Applied Mathematics, 6 May 2020 (Article in Press), Vol. 22 Number, 2279-087X (P), 2279-0888 (Online), 119–124</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations”, Journal of Mathematics and Informatics, 5 July 2020 (Article in Press), Vol. 19, 2349-0632 (P), 2349-0640 (Online) pp 7–12, May 30, 2020, doi: https://doi.org/10.1101/2020.05.24.20112292, Available under a CC-BY-ND 4.0 International license</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“A Simple Method of Finding an Approximate Pattern of the Covid-19 Spread”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, pp 1-8 (May)</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“On Reliability of the COVID-19 Forecasts”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, June 2020, doi: https://doi.org/10.1101/2020.06.01.20118844, Available under a CC-BY-ND 4.0 International license, pp 1-8</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“The Current COVID-19 Spread Pattern in India”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 8 June, 2020, https://doi.org/10.1101/2020.06.03.20121210, Available under a CC-BY-ND 4.0 International license, pp 1-5</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“Nearly Perfect Forecasting of the Total COVID-19 Cases in India: A Numerical Approach”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 13 June, 2020, https://doi.org/10.1101/2020.06.13.20130096, Available under a CC-BY-ND 4.0 International license, pp 1-7</td>
            </tr>
            <tr>
              <td>Hemanta K. Baruah</td>
              <td>“The COVID-19 Spread Pattern in Italy and India: A Comparison of the Current Situations”, medRxivPreprint Server for Health Sciences, Cold Spring Harbor Laboratory, New York, 23 June, https://doi.org/10.1101/2020.06.21.20136630, Available under a CC-BY-ND 4.0 International license, 2020, pp 1-6</td>
            </tr>
            <tr>
              <td>Munmi Saikia, Atasi Patra Maiti, Anuradha Devi</td>
              <td>“Effect of habitat complexity on rhinoceros and tiger population model with additional food and poaching in Kaziranga national park, Assam”, Mathematics and Computers in Simulation 177(2020)169-19.</td>
            </tr>
            <tr>
              <td>Kamal Debnath, Debasish Dey, Rupjyoti Borah</td>
              <td>“Thermophoresis and diffusion thermo effects on shear thickening and shear thinning cases of fluid motion past a permeable surface”, Journal of Mechanics of Continua and Mathematical Sciences, Vol. -15, No.-5, May (2020) pp 68-81.</td>
            </tr>
            <tr>
              <td>Bapan Kalita, Anuradha Devi</td>
              <td>“Japanese Encephalitis from Two Outsources: A Mathematical Modeling”, Journal of Critical Reviews, Vol. 7, Issue 12, 2020, pp.309-315.</td>
            </tr>
            <tr>
              <td>Bapan Kalita, Anuradha Devi</td>
              <td>“Control Model of Transmission of Japanese Encephalitis through Media Awareness”, International Journal of Advanced Science and Technology, Vol. 29, No. 5, 2020, pp.7645-7656.</td>
            </tr>
            <tr>
              <td>Bapan Kalita, Anuradha Devi</td>
              <td>“Mathematical Modelling of Impact of Vaccination in Controlling Japanese Encephalitis”, International Journal on Emerging Technologies, Vol. 11, Issue 3, 2020, pp.792-796.</td>
            </tr>
            <tr>
              <td>Bimalendu Kalita</td>
              <td>“ON SEMI WEAKLY (l,m)-HYPONORMAL WEIGHTED SHIFTS” Advances in Mathematics: Scientific Journal 9 (2020), no.12, 10797–10805. ISSN: 1857-8365 (printed); 1857-8438 (electronic).</td>
            </tr>
            <tr>
              <td>Kamal Debnath, Bikash Koli Saha</td>
              <td>“Solution of non-Newtonian Boundary Layer Flow in a Convergent Channel using Homotopy Perturbation Method”, Published in Transient, A Journal of Natural Sciences and Allied Subjects, ISSN: 2250-0650, Vol. VIII, 2020, 28.</td>
            </tr>
            <tr>
              <td>Kamal Debnath, Sankar Singha</td>
              <td>“Mixed Convective Slip Flow and Heat Transport for Visco-elastic Fluid Past a Vertical Plate”, Mathematical Forum, Vol . 28, 2020, ISSN: 0972-9852. (UGC care listed journal).</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
            <h2 class="headd3 fw-bold text-dark">2019</h2>

            <tr>
              <th>Title</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
              <td>“Effect of Nonthermal Ions on Dust Acoustic Waves in Magnetized Plasma”, Mathematical Journal of Interdisciplinary Science, ISSN: 2278-9561 (P), 2278-957X (O), vol 8, No 1, September, 2019, page 69-76. (UGC Care)</td>
            </tr>
            <tr>
              <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
              <td>“Sagdeev Potential Approach to Study the Dust Acoustic Waves in Dusty Plasma with Nonthermal Ions”, Infokara Research, Volume 8, Issue 7, September 2019.</td>
            </tr>
            <tr>
              <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
              <td>“Nonperturbative Technique for Dust-ion-acoustic Waves in Dusty Plasma with Nonthermal Electrons”, International Journal of Research and Review, ISSN: 2454-2237 (P), 2349-978(O), vol 6, issue 11, November, 2019, page 153-161.</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-striped table-bordered bg-light">
          <thead>
            <h2 class="headd3 fw-bold text-dark">2018</h2>
            <tr>
              <th>Title</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>Navalakhi Hazarika and Helen K Saikia</td>
              <td>“Singular and semi-simple character in E-injective N-groups with weakly descending chain conditions”, Africa Mathematica (Springer), Volume 29, Number 7-8 (2018), Page 1065-1072, Springer</td>
            </tr>
            <tr>
              <td>Anuradha Devi, Ranjan Kalita</td>
              <td>“A Mathematical Model of Glucose – Insulin regulation where glucose and insulin both are influenced by externally ingested glucose”, International Journal of Engineering Science and Technology, ISSN: 09755-5462, Volume 10, Issue 02S, January, 2018, page 154-157.</td>
            </tr>
            <tr>
              <td>Banajit Sarmah, Anuradha Devi, Jnanjyoti Sarma</td>
              <td>“Non Perturbative Approach for Dust Acoustic Waves in Plasma with Non Thermal Ions and Trapped Electrons”, International Journal of Mathematics Trends and Technology, Volume 61, Number 1, September, 2018.</td>
            </tr>
          </tbody>
        </table>

      </div>

     </div>

    <div>
      <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
        Faculty <span style="color: #FF9A1E; font-weight: 500;">List</span></h2>

        <div class="table-responsive">
        <table class="table table-striped table-bordered bg-light">
          <thead style="background-color: #27467A; color: #fff;">
            <tr>
              <th class="text-white">Sl. No.</th>
              <th class="text-white">Name</th>
              <th class="text-white">Designation</th>
            </tr>
          </thead>
          <tbody class="para1">
            <tr>
              <td>1</td>
              <td>Prof. (Dr.) Anuradha Devi</td>
              <td>Professor & Dean</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Prof. (Dr.) Dilip Chandra Nath</td>
              <td>Professor Emeritus</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Prof. (Dr.) Laishram Ladusingh</td>
              <td>Professor Emeritus</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Dr. Bimalendu Kalita</td>
              <td>Associate Professor & HoD</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Prof. (Dr.) Kamal Debnath</td>
              <td>Associate Professor</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Dr. Bapan Kalita</td>
              <td>Associate Professor</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Mr. H. Imo Mani Singha</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Dr. Parismita Phukan</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Dr. Marbarisha M. Kharkongar</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>10</td>
              <td>Dr. Bikram Bir</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>11</td>
              <td>Mr. Neelav Sarma</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>12</td>
              <td>Dr. Bhagyashri Patgiri</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>13</td>
              <td>Dr. Kshetrimayum Renubebeta Devi</td>
              <td>Assistant Professor</td>
            </tr>
            <tr>
              <td>14</td>
              <td>Dr. Sayak Sengupta</td>
              <td>Assistant Professor</td>
            </tr>
          </tbody>
        </table>
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
