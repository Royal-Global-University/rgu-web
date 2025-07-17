@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">
        <div class="mobile" >
            @include('frontend/components/mobileheader')
                    <!-- floating mob button  -->
                    <div>
                        <a href="https://admissions.rgu.ac" style="
                                                                                                    position: fixed;
                                                                                                    bottom: 25px;
                                                                                                    right: 75px;
                                                                                                    background-color: #ef991f;
                                                                                                    color: #fff;
                                                                                                    padding: 12px 20px;
                                                                                                    font-size: 16px;
                                                                                                    font-weight: bold;
                                                                                                    text-decoration: none;
                                                                                                    border-radius: 20px;
                                                                                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                    z-index: 1000;
                                                                                                    overflow: hidden;
                                                                                                    animation: pulse 2s infinite;
                                                                                                    ">
                            <span style="
                                                                                                    position: absolute;
                                                                                                    top: 0;
                                                                                                    left: -75%;
                                                                                                    width: 50%;
                                                                                                    height: 100%;
                                                                                                    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                    transform: skewX(-25deg);
                                                                                                    animation: shine 2s infinite;
                                                                                                    "></span>
                            Admission Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->
            <img class="pb-3" style="padding-top: 80px; position: relative;" src="https://media.rgu.ac/department-all/dept-psychology/mobile-top.png" alt="">
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
                                    <strong style="color: #023e8a;" class="#">BA - Psychology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-BA-Psychology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">BA - Applied Psychology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-BA-Applied-Psychology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">MA - Psychology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MA-Psychology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-psychology/mobile-down.png" alt="">

            <!--About Section-->
            <div class="container pt-3 pb-5">


                <div>

                    <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Date of Event</th>
                                    <th class="font-weight-bold text-white">Name of Event</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1.</td>
                                    <td>1-4-2024</td>
                                    <td>
                                        Lecture on the occasion of World Bipolar Day by Prof Dilwar
                                        Hussain, IIT Guwahati.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>4-4-2024</td>
                                    <td>
                                        "Outreach program Students from the Psychology Department (UG
                                        6th and PG) of The Assam Royal Global University visited the
                                        North Eastern Police Academy (NEPA) in Ri-Bhoi district,
                                        Meghalaya,"
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>27-30/4/2024</td>
                                    <td>Educational Trip to Darjeeling.</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>3-9/5/2024</td>
                                    <td>
                                        "Lecture and interactive session with students and faculties
                                        Prof Derick H. Lindquist, Dean of Jindal School of Psychology ."
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>21-5-2024</td>
                                    <td>
                                        Inauguration of Psychological Lab followed by lecture by
                                        Pallabita B Choudhury, clinical psychologist, (IIT Guwahati)
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>4-6-2024</td>
                                    <td>
                                        "Observance of “The World No Tobacco Day” followed by a lecture
                                        session by H.K Bhattacharya, Joint Director of Health Service
                                        cum State nodal officer"
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>30-6-2024</td>
                                    <td>
                                        Flood donation campaign, by faculties in collaboration with SKD
                                        Foundation, Guwahati,
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>27-8-2024</td>
                                    <td>
                                        Community outreach initiative, a survey addressing “the
                                        publichealth concern of tobacco consumption in Kamrup(M)
                                        district” students (PG 3rd Semester) o, in collaboration with
                                        the Directorate of Health Services, Assam,
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>8-9-2024</td>
                                    <td>
                                        Lecture on Exploring future opportunities by Prof Nachiketa
                                        Tripathi, IIT Guwahati.
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>10-9-2024</td>
                                    <td>
                                        Seminar on Strategies for Cyber Resilience by Biraj Das,
                                        Superintended of police, Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>20-9-2024</td>
                                    <td>
                                        Lecture session on Scope of counselling and tips for future
                                        counsellor in Tele counselling service by Dr Tamanna Goswami
                                        Sarma, Counselling Psychologist &amp; Joint secretary of PANEI
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>2-10-2024</td>
                                    <td>
                                        "Students of the Department of Psychology celebrated Gandhi
                                        Jayanti to honor the legacy of Mahatma Gandhi."
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>8-9/10/2024</td>
                                    <td>
                                        Students of UG 5th semester Visited Forensic Science Laboratory
                                        (FSL)
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>15-2-2023</td>
                                    <td>
                                        "Seminar on Cybercognition-A digital Hypnotization ploy and an
                                        introduction to Dark Net by Mr Biraj Da (Superintended of
                                        police, Guwahati)"
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>6-4-2023</td>
                                    <td>
                                        Talk on Adolescent depression and Career trajectories in mental
                                        health by Arshiya Choudhury, Associate lecturer of Goldsmith’s
                                        University , London
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>26-5-2023</td>
                                    <td>
                                        "Awareness talk on Drug de- addiction and value based living
                                        under Nasha Mukt Bharat Abhiyan By BK Dr Sachin Parab, MBBS,
                                        Mumbai University"
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>4-9-2023</td>
                                    <td>
                                        "Talk on “Mind the mind in cyber world” by Ritu Saggar, Cyber
                                        Psychologist."
                                    </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>19-9-2023</td>
                                    <td>
                                        "Skit on the occasion of World ‘Suicide prevention day” by
                                        psychology students."
                                    </td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td>"31/10/2023- 1/11/2023"</td>
                                    <td>
                                        "Workshop on “Magic Mantras of Panchatantra for wise conduct” by
                                        Prof Uma Joshi, Former Dean&amp; Director Amity University ,
                                        Rajasthan , Jaipur"
                                    </td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td>9-9-2022</td>
                                    <td>
                                        "Exhibition related to World suicide prevention day psychology
                                        students."
                                    </td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td>12-10-2022</td>
                                    <td>
                                        "Invited lecture building resilience amongst the youth and its
                                        impact on mental health by Afreen Mazid.(Clinical Psychologist,
                                        RCI licensed )"
                                    </td>
                                </tr>

                                <tr>
                                    <td>22.</td>
                                    <td>7-10-2021</td>
                                    <td>
                                        Awareness program on Drug and Alcohol use in collaboration with
                                        Nerman Rehabilitation Facility
                                    </td>
                                </tr>
                                <tr>
                                    <td>23.</td>
                                    <td>9-4-2020</td>
                                    <td>Educational trip to Manali-Kasol via Delhi</td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>9-3-2019</td>
                                    <td>Community outreach to Noghpo by both UG &amp;PG students</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>3-4-2019</td>
                                    <td>
                                        "Lecture session on “Common mental illness with special
                                        preference to women’s Mental health and over view of the health
                                        care center and some unusual cases by Dr Reznal Hamid ,
                                        Neuro-psychiatrist &amp; Miss Jossy Bairagi , clinical
                                        psychologist"
                                    </td>
                                </tr>
                                <tr>
                                    <td>26.</td>
                                    <td>3.10-9-2029</td>
                                    <td>Campaign on world suicide awareness day by students</td>
                                </tr>
                                <tr>
                                    <td>27.</td>
                                    <td>27-9-2019</td>
                                    <td>Educational Trip to Shillong</td>
                                </tr>

                                <tr>
                                    <td>28.</td>
                                    <td>2-4-2018</td>
                                    <td>
                                        "Lecture session on “Know about autism” by Dr Shabina Ahmed,
                                        Developmental Pediatrician &amp; Director of Assam Autism
                                        Foundation."
                                    </td>
                                </tr>
                                <tr>
                                    <td>29.</td>
                                    <td>10-10-2018</td>
                                    <td>
                                        "Interactive session on “Young people and Mental health in a
                                        changing world. By Dr Mythili Hazarika, Clinical Psychologist,
                                        GMCH"
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="headd2 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">#</th>
                                    <th class="text-white">Position in S-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Chairperson (Ex-Officio) Dean of School</td>
                                        <td>
                                            Jwmwishree Boro, Assistant Professor Cum Department Coordinator,
                                            Department of Psychology, The Assam Royal Global University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>External Experts for each Department (Academic)</td>
                                        <td>
                                            Prof. Rita Rani Talukdar, Professor, Department of Psychology,
                                            Gauhati University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Experts for each Department (Industry)</td>
                                        <td>
                                            Dr. Mythili Hazarika, Associate Professor, Department of
                                            Psychiatry, GMCH
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Two Faculty members of the School nominated by the Vice
                                            Chancellor
                                        </td>
                                        <td>
                                            Dr. Mahuya Deb, Assistant Professor, Department of Psychology,
                                            The Assam Royal Global University

                                            Dr. Syeda Anjum Afreen, Assistant Professor, Department of
                                            Psychology, The Assam Royal Global University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Registrar, Member Secretary (Ex-officio)</td>
                                        <td>Dr. D N Singh or his nominee</td>
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
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1.</td>
                                        <td>Head of the Department</td>
                                        <td>Dr. Queen Deka</td>
                                        <td>Assistant Professor</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr.Pronce C.P.</td>
                                        <td>Associate Professor</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Tahera Hoque Mozumdar</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Fariza Saidin</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">4.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Lila Kanta Nath</td>
                                        <td>Professor</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Kaberi Saikia</td>
                                        <td>Professor</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Gautam Mazumdar</td>
                                        <td>Professor</td>
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
                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Syllabus_NEP 2020_B A PSY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS (BASED ON
                                                        NATIONAL EDUCATION POLICY 2020)
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of Syllabus- B.A. Applied Psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 4 YEAR UG
                                                        PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - B.A. Psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 4 YEAR UG
                                                        PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - MA PSY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG
                                                        PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/MA Clinical Psychology course structure and syllabus.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR M.A. Clinical
                                                        Psychology
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - MA CPY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR M.A. CPY
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/structure-MA-psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR M.A.
                                                        PSYCHOLOGY
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/syllabus-MA-psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>SYLLABUS FOR M.A. PSYCHOLOGY
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - MA CPY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG
                                                        PROGRAMME - Clinical Physchology
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree"><strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class="para1" target="_blank"><strong>Click to
                                                        View...</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>          </div>

            </div>


        </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
                    <!-- floating button  -->
                    <div>
                        <a href="https://admissions.rgu.ac/" style="
                                                                                                                position: fixed;
                                                                                                                bottom: 35px;
                                                                                                                right: 50px;
                                                                                                                background-color: #ef991f;
                                                                                                                color: #fff;
                                                                                                                padding: 12px 20px;
                                                                                                                font-size: 18px;
                                                                                                                font-weight: bold;
                                                                                                                text-decoration: none;
                                                                                                                border-radius: 20px;
                                                                                                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                                                                                                z-index: 1000;
                                                                                                                overflow: hidden;
                                                                                                                animation: pulse 2s infinite;
                                                                                                                ">
                            <span style="
                                                                                                                position: absolute;
                                                                                                                top: 0;
                                                                                                                left: -75%;
                                                                                                                width: 50%;
                                                                                                                height: 100%;
                                                                                                                background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
                                                                                                                transform: skewX(-25deg);
                                                                                                                animation: shine 2s infinite;
                                                                                                                "></span>
                            Admisssion Open - Apply Now
                        </a>
                        <style>
                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }

                                50% {
                                    transform: scale(1.05);
                                    box-shadow: 0 0 15px rgba(228, 206, 208, 0.6);
                                }

                                100% {
                                    transform: scale(1);
                                    box-shadow: 0 0 0 rgba(228, 206, 208, 0.4);
                                }
                            }

                            @keyframes shine {
                                0% {
                                    left: -75%;
                                }

                                100% {
                                    left: 125%;
                                }
                            }
                        </style>
                    </div>
                    <!-- floating button  -->

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-psychology/web-top.png" alt="">


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
                                    <strong style="color: #023e8a;" class="#">BA - Psychology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-BA-Psychology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">BA - Applied Psychology</strong><br>
                                    Honours / Honours with Research
                                </p>
                            </td>
                            <td class="para1">
                                4 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-BA-Applied-Psychology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>
                                <p>
                                    <strong style="color: #023e8a;" class="#">MA - Psychology</strong>
                                </p>
                            </td>
                            <td class="para1">
                                2 years
                            </td>
                            <td>
                                <a target="_blank" href="programs-MA-Psychology"><button type="button"
                                        style="background-color: #FF9A1E; color: #fff;"
                                        class="btn btn-md custom-details-btn fw-bold">Details</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <img class="pb-3" src="https://media.rgu.ac/department-all/dept-psychology/web-btm.png" alt="">

            <!--About Section-->
            <div class="container pt-3 pb-5">


                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events <span style="color: #FF9A1E; font-weight: 500;">and Achievements</span></h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Date of Event</th>
                                    <th class="font-weight-bold text-white">Name of Event</th>
                                </tr>
                            </thead>
                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1.</td>
                                    <td>1-4-2024</td>
                                    <td>
                                        Lecture on the occasion of World Bipolar Day by Prof Dilwar
                                        Hussain, IIT Guwahati.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>4-4-2024</td>
                                    <td>
                                        "Outreach program Students from the Psychology Department (UG
                                        6th and PG) of The Assam Royal Global University visited the
                                        North Eastern Police Academy (NEPA) in Ri-Bhoi district,
                                        Meghalaya,"
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>27-30/4/2024</td>
                                    <td>Educational Trip to Darjeeling.</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>3-9/5/2024</td>
                                    <td>
                                        "Lecture and interactive session with students and faculties
                                        Prof Derick H. Lindquist, Dean of Jindal School of Psychology ."
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>21-5-2024</td>
                                    <td>
                                        Inauguration of Psychological Lab followed by lecture by
                                        Pallabita B Choudhury, clinical psychologist, (IIT Guwahati)
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>4-6-2024</td>
                                    <td>
                                        "Observance of “The World No Tobacco Day” followed by a lecture
                                        session by H.K Bhattacharya, Joint Director of Health Service
                                        cum State nodal officer"
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>30-6-2024</td>
                                    <td>
                                        Flood donation campaign, by faculties in collaboration with SKD
                                        Foundation, Guwahati,
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>27-8-2024</td>
                                    <td>
                                        Community outreach initiative, a survey addressing “the
                                        publichealth concern of tobacco consumption in Kamrup(M)
                                        district” students (PG 3rd Semester) o, in collaboration with
                                        the Directorate of Health Services, Assam,
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>8-9-2024</td>
                                    <td>
                                        Lecture on Exploring future opportunities by Prof Nachiketa
                                        Tripathi, IIT Guwahati.
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>10-9-2024</td>
                                    <td>
                                        Seminar on Strategies for Cyber Resilience by Biraj Das,
                                        Superintended of police, Guwahati
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>20-9-2024</td>
                                    <td>
                                        Lecture session on Scope of counselling and tips for future
                                        counsellor in Tele counselling service by Dr Tamanna Goswami
                                        Sarma, Counselling Psychologist &amp; Joint secretary of PANEI
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>2-10-2024</td>
                                    <td>
                                        "Students of the Department of Psychology celebrated Gandhi
                                        Jayanti to honor the legacy of Mahatma Gandhi."
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>8-9/10/2024</td>
                                    <td>
                                        Students of UG 5th semester Visited Forensic Science Laboratory
                                        (FSL)
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>15-2-2023</td>
                                    <td>
                                        "Seminar on Cybercognition-A digital Hypnotization ploy and an
                                        introduction to Dark Net by Mr Biraj Da (Superintended of
                                        police, Guwahati)"
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>6-4-2023</td>
                                    <td>
                                        Talk on Adolescent depression and Career trajectories in mental
                                        health by Arshiya Choudhury, Associate lecturer of Goldsmith’s
                                        University , London
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>26-5-2023</td>
                                    <td>
                                        "Awareness talk on Drug de- addiction and value based living
                                        under Nasha Mukt Bharat Abhiyan By BK Dr Sachin Parab, MBBS,
                                        Mumbai University"
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>4-9-2023</td>
                                    <td>
                                        "Talk on “Mind the mind in cyber world” by Ritu Saggar, Cyber
                                        Psychologist."
                                    </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>19-9-2023</td>
                                    <td>
                                        "Skit on the occasion of World ‘Suicide prevention day” by
                                        psychology students."
                                    </td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td>"31/10/2023- 1/11/2023"</td>
                                    <td>
                                        "Workshop on “Magic Mantras of Panchatantra for wise conduct” by
                                        Prof Uma Joshi, Former Dean&amp; Director Amity University ,
                                        Rajasthan , Jaipur"
                                    </td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td>9-9-2022</td>
                                    <td>
                                        "Exhibition related to World suicide prevention day psychology
                                        students."
                                    </td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td>12-10-2022</td>
                                    <td>
                                        "Invited lecture building resilience amongst the youth and its
                                        impact on mental health by Afreen Mazid.(Clinical Psychologist,
                                        RCI licensed )"
                                    </td>
                                </tr>

                                <tr>
                                    <td>22.</td>
                                    <td>7-10-2021</td>
                                    <td>
                                        Awareness program on Drug and Alcohol use in collaboration with
                                        Nerman Rehabilitation Facility
                                    </td>
                                </tr>
                                <tr>
                                    <td>23.</td>
                                    <td>9-4-2020</td>
                                    <td>Educational trip to Manali-Kasol via Delhi</td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>9-3-2019</td>
                                    <td>Community outreach to Noghpo by both UG &amp;PG students</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>3-4-2019</td>
                                    <td>
                                        "Lecture session on “Common mental illness with special
                                        preference to women’s Mental health and over view of the health
                                        care center and some unusual cases by Dr Reznal Hamid ,
                                        Neuro-psychiatrist &amp; Miss Jossy Bairagi , clinical
                                        psychologist"
                                    </td>
                                </tr>
                                <tr>
                                    <td>26.</td>
                                    <td>3.10-9-2029</td>
                                    <td>Campaign on world suicide awareness day by students</td>
                                </tr>
                                <tr>
                                    <td>27.</td>
                                    <td>27-9-2019</td>
                                    <td>Educational Trip to Shillong</td>
                                </tr>

                                <tr>
                                    <td>28.</td>
                                    <td>2-4-2018</td>
                                    <td>
                                        "Lecture session on “Know about autism” by Dr Shabina Ahmed,
                                        Developmental Pediatrician &amp; Director of Assam Autism
                                        Foundation."
                                    </td>
                                </tr>
                                <tr>
                                    <td>29.</td>
                                    <td>10-10-2018</td>
                                    <td>
                                        "Interactive session on “Young people and Mental health in a
                                        changing world. By Dr Mythili Hazarika, Clinical Psychologist,
                                        GMCH"
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                            The Board <span style="color: #FF9A1E; font-weight: 500;">of Studies</span></h2>

                        <div class="table-responsive">
                            <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                                <thead class="text-white" style="background-color: #27467a">
                                    <th class="text-white">#</th>
                                    <th class="text-white">Position in S-BoS</th>
                                    <th class="text-white">Name and Designation</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1</td>
                                        <td>Chairperson (Ex-Officio) Dean of School</td>
                                        <td>
                                            Jwmwishree Boro, Assistant Professor Cum Department Coordinator,
                                            Department of Psychology, The Assam Royal Global University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>External Experts for each Department (Academic)</td>
                                        <td>
                                            Prof. Rita Rani Talukdar, Professor, Department of Psychology,
                                            Gauhati University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>External Experts for each Department (Industry)</td>
                                        <td>
                                            Dr. Mythili Hazarika, Associate Professor, Department of
                                            Psychiatry, GMCH
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Two Faculty members of the School nominated by the Vice
                                            Chancellor
                                        </td>
                                        <td>
                                            Dr. Mahuya Deb, Assistant Professor, Department of Psychology,
                                            The Assam Royal Global University

                                            Dr. Syeda Anjum Afreen, Assistant Professor, Department of
                                            Psychology, The Assam Royal Global University
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Registrar, Member Secretary (Ex-officio)</td>
                                        <td>Dr. D N Singh or his nominee</td>
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
                                    <th class="text-white">#</th>
                                    <th class="text-white">Content</th>
                                    <th class="text-white">Name of the Member</th>
                                    <th class="text-white">Designation</th>
                                    <th class="text-white">Designation in the committee</th>
                                </thead>
                                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                    <tr>
                                        <td>1.</td>
                                        <td>Head of the Department</td>
                                        <td>Dr. Queen Deka</td>
                                        <td>Assistant Professor</td>
                                        <td>Chairperson</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            Two Associate Professors – one of them will be the member
                                            secretary
                                        </td>
                                        <td>Dr.Pronce C.P.</td>
                                        <td>Associate Professor</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3.</td>
                                        <td rowspan="2" class="align-middle">
                                            Two Assistant Professors holding Ph.D. degree
                                        </td>
                                        <td>Dr. Tahera Hoque Mozumdar</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Fariza Saidin</td>
                                        <td>Assistant Professor</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">4.</td>
                                        <td rowspan="3" class="align-middle">
                                            Three external members not below the rank of Professors,
                                            including members from an allied department, who will be
                                            nominated by the URC
                                        </td>
                                        <td>Prof. Lila Kanta Nath</td>
                                        <td>Professor</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Kaberi Saikia</td>
                                        <td>Professor</td>
                                        <td>External Member</td>
                                    </tr>
                                    <tr>
                                        <td>Prof. Gautam Mazumdar</td>
                                        <td>Professor</td>
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
                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Syllabus_NEP 2020_B A PSY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>COURSE STRUCTURE & SYLLABUS (BASED ON
                                                        NATIONAL EDUCATION POLICY 2020)
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of Syllabus- B.A. Applied Psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 4 YEAR UG
                                                        PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - B.A. Psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 4 YEAR UG
                                                        PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><strong>
                                                    Post Graduate
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - MA PSY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG
                                                        PROGRAMME
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/MA Clinical Psychology course structure and syllabus.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR M.A. Clinical
                                                        Psychology
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - MA CPY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR M.A. CPY
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/structure-MA-psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>STRUCTURE OF THE SYLLABUS FOR M.A.
                                                        PSYCHOLOGY
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/syllabus-MA-psychology.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i>SYLLABUS FOR M.A. PSYCHOLOGY
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                    <a href="mobile-assets/department-all/syllabus-new/3RSBAS/Structure of syllabus - MA CPY.pdf"
                                                        target="_blank">
                                                        <i class="fa fa-file-text px-2"></i> STRUCTURE OF THE SYLLABUS FOR 2 YEAR PG
                                                        PROGRAMME - Clinical Physchology
                                                        <i class="fa fa-download"></i>
                                                    </a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree"><strong>
                                                    Doctoral Programme
                                                </strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="phd" class="para1" target="_blank"><strong>Click to
                                                        View...</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>          </div>

            </div>
            <!-- End testimonials-->

        </div>
    </div>
@endsection
