@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-commerce/mob-top.png" alt="">
            <div class="container">
                <!-- courses section web  -->
                <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                    <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold">COURSES</th>
                        <th class="text-light  font-weight-bold">DURATION</th>
                        <th class="text-light  font-weight-bold">DETAILS</th>
                    </thead>
                    <tbody class="para1 bg-light">
                        <tr>
                            <td>1.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. (Day Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. (Morning Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-morning-shift"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - Finance with ICA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - with ACCA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - with CMA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Com.</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MCom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-commerce/mobile-btm.png" alt="">


            <div class="container pb-5 pt-3">
                <div>
                    <div>

                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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


                <div>
                    <div>

                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                        </h2>

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


                <div>

                    <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>
                    <div class="p-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion para1" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure of syllabus - UG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Structure of Syllabus - B.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure  UG F and A.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Programme Structure for B. Com
                                                        Finance & Accounts based on NEP 2020
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/RSC_UG Syllabus 2023-24(NEP).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS
                                                        (BASED ON NATIONAL EDUCATION POLICY 2020)
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/B.Com F&A Batch 2023 Syllabus based on NEP 1st to 8th sem.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>B.Com Finance & Accounts (4
                                                        YEARS SINGLE MAJOR)
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com CMA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - CMA
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com ACCA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - ACCA
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/1. RSC M.COM NEP 2025 SYLLABUS[1] (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Syllabus - M.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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

        <div class="website">
            @include('frontend/components/aheader')
            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-commerce/web-top.png" alt="">
            <div class="container">

                <!-- courses section web  -->
                <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                    Courses <span style="color: #FF9A1E; font-weight: 500;">Offered</span></h2>


                <table class="table bg-white table-responsive table-striped table-bordered border-top  vertical-scroll">
                    <thead class="text-white  para1" style="font-size: 14px; background-color: #27467A;">
                        <th class="text-light  font-weight-bold">SL. NO.</th>
                        <th class="text-light  font-weight-bold">COURSES</th>
                        <th class="text-light  font-weight-bold">DURATION</th>
                        <th class="text-light  font-weight-bold">DETAILS</th>
                    </thead>
                    <tbody class="para1 bg-light">
                        <tr>
                            <td>1.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. (Day Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. (Morning Shift)</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-morning-shift"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - Finance with ICA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - with ACCA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">B.Com. - with CMA</strong>
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-bcom-finance-with-ica"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">M.Com.</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MCom"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/department-all/update/dept-commerce/web-btm.png" alt="">


            <div class="container pb-5 pt-3">
                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
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


                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
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


                <div>
                    <div>

                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Departmental <span style="color: #FF9A1E; font-weight: 500;">Research Committee (DRC)</span>
                        </h2>

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


                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Courses Structure <span style="color: #FF9A1E; font-weight: 500;">and Syllabus</span></h2>
                    <div class="p-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion para1" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <strong>
                                                    Under Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure of syllabus - UG.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Structure of Syllabus - B.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/Structure  UG F and A.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Programme Structure for B. Com
                                                        Finance & Accounts based on NEP 2020
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/RSC_UG Syllabus 2023-24(NEP).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS
                                                        (BASED ON NATIONAL EDUCATION POLICY 2020)
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/B.Com F&A Batch 2023 Syllabus based on NEP 1st to 8th sem.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>B.Com Finance & Accounts (4
                                                        YEARS SINGLE MAJOR)
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com CMA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - CMA
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/2024 B.Com ACCA (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>Syllabus for B.Com - ACCA
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/6RSC/1. RSC M.COM NEP 2025 SYLLABUS[1] (1).pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> Syllabus - M.Com
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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

            <!-- End testimonials-->
        </div>
    </div>
@endsection
